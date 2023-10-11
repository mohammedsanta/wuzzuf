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

            return Redirect('/job');
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
}
