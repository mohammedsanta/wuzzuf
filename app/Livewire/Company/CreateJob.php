<?php

namespace App\Livewire\Company;

use App\Models\Skill;
use App\Models\Company;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CreateJob extends Component
{

    public $selected;
    public $CareerLevel;

    public $job;
    public $JobCategories;
    public $contry;
    public $City;
    public $minExperience;
    public $maxExperience;
    public $minSalary;
    public $maxSalary;
    public $hideSalary = false;
    public $AdditionalSalary;
    public $NumberVacancies;
    public $descriptions;
    public $requirements;

    // job type

    public $JobType = [];

    public $FullTime;
    public $PartTime;
    public $Freelance;
    public $ShiftBased;
    public $Volunteering;

    // Work place

    public $WorkPlace = [];

    public $OnSite;
    public $Remote;
    public $Hybrid;

    // Keywords

    public $Keywords;

    // Validation

    protected $rules = [
        'CareerLevel'  => 'required',
        'job' => 'required',
        'JobType' => 'required',
        'JobCategories' => 'required',
        'contry' => 'required',
        'City' => 'required',
        'minExperience' => 'required',
        'maxExperience' => 'required',
        'minSalary' => 'required',
        'maxSalary' => 'required',
        'hideSalary' => 'required',
        'AdditionalSalary' => 'required',
        'NumberVacancies' => 'required',
        'descriptions' => 'required',
        'requirements' => 'required',
    ];

    public function save()
    {

        $data = $this->validate();

        $companyId = Auth::guard('company')->user()->id;
        $data['company_id'] = $companyId;

        // Start Create Job

        $job = [
            'company_id' => $companyId,
            'job' => $data['job'],
            'JobType' => implode(',',$data['JobType']),
            'descriptions' => $data['descriptions'],
            'requirements' => $data['requirements'],
        ];

        $createdJob = Company::find($companyId)->job()->create($job);

        // End Create Job

        // Start create Job Details

        $ExperienceNeeded = $this->minExperience +  $this->maxExperience;
        $salary = $this->minSalary + $this->maxSalary;

        $jobDetails = [
            'ExperienceNeeded' => $ExperienceNeeded,
            'CareerLevel' => $this->CareerLevel,
            'EducationLevel' => 'i Would working on it',
            'Salary' => $salary,
            'JobCategories' => $this->JobCategories
        ];
        
        $createdJob->jobDetails()->create($jobDetails);

        // End Create Job Details

        // create skill belong to the job

        // work on it later

        // $skillsData = $requestJobDetails->skills;

        // $string = '';
        // $skills = [];

        // for($i = 0;$i < strlen($skillsData);$i++) {

        //     if($skillsData[$i] != ',') {
        //         $string .= $skillsData[$i];
        //     } else {
        //         $skills[] = $string;
        //         $string = '';
        //     }

        // }

        // $skillModel = new Skill;

        // foreach($skills as $skill) {
        //     $findSkill = Skill::where('name',$skill)->get();
            
        //     if(count($findSkill)) {
        //         $findSkill = $findSkill[0]->id;
        //         $createdJob->skills()->attach([$findSkill]);

        //     } else {
        //         // $skillModel->name = $skill;
        //         // $createdJob->skills()->save($skillModel);

                
        //         $nameOfSkill = $skillModel->create(['name' => $skill]);
        //         $createdJob->skills()->attach([$nameOfSkill->id]);

        //     }
        // }

        return redirect("/job/create/additional-info/$createdJob->id");
    }

    public function OnSiteB($type)
    {

        if($this->OnSite == 'selected') {
            $this->OnSite = null;
        } else {
            $this->OnSite = 'selected';
        }

        array_push($this->WorkPlace,$type);

    }

    public function RemoteB($type)
    {

        if($this->Remote == 'selected') {
            $this->Remote = null;
        } else {
            $this->Remote = 'selected';
        }

        array_push($this->WorkPlace,$type);

    }

    public function HybridB($type)
    {

        if($this->Hybrid == 'selected') {
            $this->Hybrid = null;
        } else {
            $this->Hybrid = 'selected';
        }

        array_push($this->WorkPlace,$type);

    }

    public function FullTimeB($type)
    {

        if($this->FullTime == 'selected') {
            $this->FullTime = null;
        } else {
            $this->FullTime = 'selected';
        }

        array_push($this->JobType,$type);

    }

    public function PartTimeB($type)
    {

        if($this->PartTime == 'selected') {
            $this->PartTime = null;
        } else {
            $this->PartTime = 'selected';
        }

        array_push($this->JobType,$type);

    }

    public function FreelanceB($type)
    {

        if($this->Freelance == 'selected') {
            $this->Freelance = null;
        } else {
            $this->Freelance = 'selected';
        }

        array_push($this->JobType,$type);

    }

    public function ShiftBasedB($type)
    {

        if($this->ShiftBased == 'selected') {
            $this->ShiftBased = null;
        } else {
            $this->ShiftBased = 'selected';
        }

        array_push($this->JobType,$type);

    }

    public function VolunteeringB($type)
    {

        if($this->Volunteering == 'selected') {
            $this->Volunteering = null;
        } else {
            $this->Volunteering = 'selected';
        }

        array_push($this->JobType,$type);

    }

    public function updatePostType($data)
    {
        $this->selected = $data;
    }

    public function CareerLevelUpdate($Level)
    {
        $this->CareerLevel = $Level;
    }

    public function render()
    {
        return view('livewire.company.create-job');
    }
}
