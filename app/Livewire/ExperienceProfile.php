<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\UserExperience;

class ExperienceProfile extends Component
{

    public $experience;
    public $experienceView = false;
    
    public User $user;
    
    // data
    
    public $id;
    public $currentlyWork = true;
    public $EGPChange = false;
    public $ExperienceType;
    public $JobTitle;
    public $JobCategory;
    public $CompanyName;
    public $StartingSinceMonth;
    public $StartingSinceYear;
    public $EndMonth;
    public $EndYear;
    public $CurrentlyWork;
    public $Description;
    public $Careerlevel;
    public $Country;
    public $CompanySize;
    public $CompanyIndustry;
    public $CompanyWebsite;
    public $Achievements;
    public $StartingSalary;
    public $EndingSalary;
    public $Currency = "Egyptian Pound (EGP)";
    public $Period = "Per Month";
    public $SalaryInfo;
    public $HideSalary;
    
    public function mount()
    {
        $this->user = auth()->user();
        $this->experience = $this->user->profile()->get()[0]->experience;
    }

    public function experienceSwitch()
    {
        $this->experienceView = $this->experienceView ? false : true;
    }

    public function currentlyWorkChange()
    {
        $this->currentlyWork = $this->currentlyWork ? false : true;
    }

    public function EGPChangeSwitch()
    {
        $this->EGPChange = $this->EGPChange ? false : true;
    }

    public function updateExperience()
    {
        $data = $this->validate();
        $this->experience = $data;
        auth()->user()->profile()->update($this->experience);
        session()->flash('success','Update done');
    }

    public function submit()
    {
        $data = $this->validate();
        unset($data['experience']);

        if($this->id) {
            $this->update();
        } else {
            if(!$this->currentlyWork) {
                unset($data['EndMonth']);
                unset($data['EndYear']);
            }
            $this->user->userExperience()->create($data);
            $this->experienceSwitch();
            
            unset($this->id);
            $this->ExperienceType = '';
            $this->JobTitle = '';
            $this->JobCategory = '';
            $this->CompanyName = '';
            $this->StartingSinceMonth = '';
            $this->StartingSinceYear = '';
            $this->EndMonth = '';
            $this->EndYear = '';
            $this->CurrentlyWork = '';
            $this->Description = '';
            $this->Careerlevel = '';
            $this->Country = '';
            $this->CompanySize = '';
            $this->CompanyIndustry = '';
            $this->CompanyWebsite = '';
            $this->Achievements = '';
            $this->StartingSalary = '';
            $this->EndingSalary = '';
            $this->Currency = "Egyptian Pound (EGP)";
            $this->Period = 'Per Month';
            $this->salaryInfo = '';
            $this->HideSalary = '';
            $this->EGPChange = false;
        }
    }

    public function setValues($data)
    {
        $this->id = $data['id'];
        $this->ExperienceType = $data['ExperienceType'];
        $this->JobTitle = $data['JobTitle'];
        $this->JobCategory = $data['JobCategory'];
        $this->CompanyName = $data['CompanyName'];
        $this->StartingSinceMonth = $data['StartingSinceMonth'];
        $this->StartingSinceYear = $data['StartingSinceYear'];
        $this->EndMonth = $data['EndMonth'];
        $this->EndYear = $data['EndYear'];
        $this->CurrentlyWork = $data['CurrentlyWork'];
        $this->Description = $data['Description'];
        $this->Careerlevel = $data['Careerlevel'];
        $this->Country = $data['Country'];
        $this->CompanySize = $data['CompanySize'];
        $this->CompanyIndustry = $data['CompanyIndustry'];
        $this->CompanyWebsite = $data['CompanyWebsite'];
        $this->Achievements = $data['Achievements'];
        $this->StartingSalary = $data['StartingSalary'];
        $this->EndingSalary = $data['EndingSalary'];
        $this->Currency = $data['Currency'];
        $this->Period = $data['Period'];
        $this->SalaryInfo = $data['SalaryInfo'];
        $this->HideSalary = $data['HideSalary'];
        $this->experienceSwitch();
    }

    public function update()
    {
        $update = $this->validate();
        unset($update['experience']);
        UserExperience::find($this->id)->update($update);
        $this->experienceSwitch();
    }

    public function rules()
    {
        return [
            'experience' => 'sometimes',
            'ExperienceType' => 'sometimes',
            'JobTitle' => 'sometimes',
            'JobCategory' => 'sometimes',
            'CompanyName' => 'sometimes',
            'StartingSinceMonth' => 'sometimes',
            'StartingSinceYear' => 'sometimes',
            'EndMonth' => 'sometimes',
            'EndYear' => 'sometimes',
            'CurrentlyWork' => 'sometimes',
            'Description' => 'sometimes',
            'Careerlevel' => 'sometimes',
            'Country' => 'sometimes',
            'CompanySize' => 'sometimes',
            'CompanyIndustry' => 'sometimes',
            'CompanyWebsite' => 'sometimes',
            'Achievements' => 'sometimes',
            'StartingSalary' => 'sometimes',
            'EndingSalary' => 'sometimes',
            'Currency' => 'sometimes',
            'Period' => 'sometimes',
            'SalaryInfo' => 'sometimes',
            'HideSalary' => 'sometimes',
        ];
    }

    public function render()
    {
        return view('livewire.experience-profile',[
            'works' => $this->user->userExperience()->get()
        ]);
    }
}
