<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Job;
use App\Models\User;
use App\Models\Skill;
use App\Models\Company;
use App\Models\JobDetails;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\JobDetailsRequest;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('explore',[
            'jobs' => Job::all()
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function ourjobs()
    {

        $companyId = Auth::guard('company')->user()->id;

        $jobs = Company::find($companyId)->jobs()->get();

        return view('job.ourjobs',[
            'jobs' => $jobs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('job.create-job');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobRequest $request,JobDetailsRequest $requestJobDetails)
    {

        // dd($request->all(['description','requirements']));


        // create job and his details

        $companyId = Auth::guard('company')->user()->id;

        $job = $request->validated();
        $job['company_id'] = $companyId;
        $jobDetails = $requestJobDetails->validated();
        
        $createdJob = Company::find($companyId)->job()->create($job);

        $createdJob->jobDetails()->create($jobDetails);
        

        //////////////////////


        // create skill belong to the job

        $skillsData = $requestJobDetails->skills;

        $string = '';
        $skills = [];

        for($i = 0;$i < strlen($skillsData);$i++) {

            if($skillsData[$i] != ',') {
                $string .= $skillsData[$i];
            } else {
                $skills[] = $string;
                $string = '';
            }

        }

        $skillModel = new Skill;

        foreach($skills as $skill) {
            $findSkill = Skill::where('name',$skill)->get();
            
            if(count($findSkill)) {
                $findSkill = $findSkill[0]->id;
                $createdJob->skills()->attach([$findSkill]);

            } else {
                // $skillModel->name = $skill;
                // $createdJob->skills()->save($skillModel);

                
                $nameOfSkill = $skillModel->create(['name' => $skill]);
                $createdJob->skills()->attach([$nameOfSkill->id]);

            }
        }

        return redirect('/job');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $job = Job::find($id);

        // dd(hasSkill());

        // dd($job->created_at->format('d/m/Y H-i'),date('d/m/Y H-i'));

        return view('job.show',[
            'job' => $job
        ]);
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
}
