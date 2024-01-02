<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyLink;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use App\Models\CompanyLocation;
use App\Http\Requests\CompanyProfileRequest;

class CompanySettings extends Controller
{
    
    public function profile()
    {
        $company = Company::find(auth()->user()->id);

        $profile = $company->profile()->get();

        $location = $company->location()->get();

        $links = $company->links()->get();

        $jobs = $company->jobs()->get();

        return view('companySettings.profile',[
            'company' => $company,
            'profile' => count($profile) > 0 ? $profile[0] : '', 
            'location' => count($location) > 0 ? $location[0] : '', 
            'links' => count($links) > 0 ? $links[0] : '',
            'jobs' => $jobs
        ]);
    }

    public function location()
    {
        $location = CompanyLocation::find(auth()->user()->id);

        return view('companySettings.location',[
            'location' => $location
        ]);
    }

    public function locationPost(Request $request)
    {

        $id = auth()->user()->id;

        $company = Company::find($id);
        $location = CompanyLocation::find($id);

        $data = $request->validate([
            'Country' => ['required'],
            'City' => ['required'],
            'Area' => ['required'],
            'PostalCode' => ['required'],
        ]);

        if(is_null($location)) {
            $company->location()->create($data);
        } else {
            $location->update($data);
        }

        return back()->with(['success' => 'Your data Has been updated']);
    }

    public function links()
    {
        $links = CompanyLink::find(auth()->user()->id);

        return view('companySettings.links',[
            'links' => $links
        ]);
    }

    public function linksPost(Request $request)
    {
        $id = auth()->user()->id;

        $company = Company::find($id);
        $links = CompanyLink::find($id);

        $data = $request->validate([
            'LinkedIn' => 'min:5',
            'Facebook' => 'min:5',
            'Twitter' => 'min:5',
            'Behance' => 'min:5',
            'Instagram' => 'min:5',
            'GitHub' => 'min:5',
            'StackOverflow' => 'min:5',
            'YouTube' => 'min:5',
            'Blog' => 'min:5',
            'Website' => 'min:5',
            'Other' => 'min:5',
        ]);

        if(is_null($links)) {
            $company->links()->create($data);
        } else {
            $links->update($data);
        }

        return back()->with(['success' => 'Your data Has been updated']);
    }

    public function companySettings()
    {
        $id = auth()->user()->id;
        $profile = CompanyProfile::find($id);
        $company = Company::find($id);

        return view('companySettings.companySettings',[
            'company' => $company,
            'profile' => $profile
        ]);
    }

    public function changePhoto(Request $request)
    {
        $profile = CompanyProfile::find(auth()->user()->id);

        $request->validate([
            'picture' => 'required'
        ]);

        $photo = $request['picture'] = $request->file('picture')->store('/companies/profile/'.auth()->user()->id);

        $profile->update([
            'picture' => $photo
        ]);

        return back();

    }

    public function companyProfile(CompanyProfileRequest $request)
    {     
        $id = auth()->user()->id;

        $company = Company::find($id);
        $profile = CompanyProfile::find($id);

        if(is_null($profile)) {
            $company->profile()->create($request->validated());
        } else {
            $profile->update($request->validated());
        }

        return back()->with(['success' => 'Your data Has been updated']);
    }

}
