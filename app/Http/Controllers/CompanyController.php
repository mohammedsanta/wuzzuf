<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.company');
    }

    /**
     * Display a Dashboard
     */
    public function dashboard()
    {
        return view('company.dashboard');
    }
    
    /**
     * Display a Manage posts jobs
     */
    public function postsJobs()
    {

        
        $jobs = auth()->user()->Jobs()->get();
        // dd($jobs);
        $data = [];

        foreach($jobs as $job) {
            if(count($job->jobDetails()->get())) {
                $data['jobs'][] = $job;
            } else {
                // if user don't continue the post
                // post hasn't a additional info
                $data['drafts'][] = $job; 
            }
        }

        return view('company.posts.jobs-manage',[
            'data' => $data
        ]);
    }

    /**
     * Display a Manage posts internships
     */
    public function postsInternships()
    {
        return view('company.posts.internships-manage');
    }

    public function searchJob()
    {
        return view('company.posts.search-job');
    }

    public function postJob()
    {
        return view('company.posts.create-job');
    }

    public function postInternship()
    {
        return view('company.posts.create-internshipt');
    }

    public function users()
    {
        return view('company.users');
    }

    public function subAccount()
    {
        return view('company.sub-account');
    }

    // Start Candidates

    public function searchCvs()
    {
        return view('company.candidates.search-cvs');
    }

    public function unblockCandidates()
    {
        return view('company.candidates.unblock-candidates');
    }

    public function folders()
    {
        return view('company.candidates.folders');
    }

    public function jobInvitations()
    {
        return view('company.candidates.job-invitations');
    }

    public function badges()
    {
        return view('company.candidates.badges');
    }
    
    // End Candidates

    // Start Company Profile

    public function careers()
    {
        return view('company.profile');
    }

    // End Company Profile

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.createCompany');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanyRequest $request)
    {
        $company = $request->validated();
        
        Company::create($company);

        return redirect('/company/login');
    }

    /**
     * Login
     */
    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        // dd($credentials);

        if(Auth::guard('company')->attempt($credentials))
        {
            
            session()->regenerate();

            return Redirect('/dashboard');
        }

        return back()->withErrors(['email' => 'Wrong Credentials']);

    }

        /**
     * Logout
     */
    public function logout(Request $request)
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // application

    public function manageApplicationView()
    {
        return view('company.manage-application');
    }

}