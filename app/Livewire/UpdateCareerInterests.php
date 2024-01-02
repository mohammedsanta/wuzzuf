<?php

namespace App\Livewire;

use Livewire\Component;

class UpdateCareerInterests extends Component
{

    public $CareerLevel;
    public $TypesJobsYouOpen = [];
    public $JobTitle = 'test';
    public $CategoriesInterested = 'test';
    public $MinimumSalary;
    public $HideMinimum;
    public $Country;
    public $CurrentJobSearchStatus;
    public $CompaniesFindMe;
    public $ProfilePublic;
    
    public function mount()
    {
        $model = auth()->user()->usercareer()->get();
        
        if(count($model)) {
            $model = $model[0];

            $this->CareerLevel = $model->CareerLevel;
            $TypesJobs = explode(',',$model->TypesJobsYouOpen);
            $this->TypesJobsToArray($TypesJobs);
            $this->MinimumSalary = $model->MinimumSalary;
            $this->HideMinimum = $model->HideMinimum;
            $this->Country = $model->Country;
            $this->CurrentJobSearchStatus = $model->CurrentJobSearchStatus;
            $this->CompaniesFindMe = $model->CompaniesFindMe;
            $this->ProfilePublic = $model->ProfilePublic;
        }


        // dd($model);
    }

    public function TypesJobsToArray($array)
    {
        foreach($array as $key => $value) {
            $this->TypesJobsYouOpen[$value] = $value;
        }
    }

    public function updateCarrerLevel($value)
    {
        $this->CareerLevel = $value;
    }

    public function typesJobOpen($value)
    {
        if(in_array($value,$this->TypesJobsYouOpen)) {
            unset($this->TypesJobsYouOpen[$value]);
        } else {
            $this->TypesJobsYouOpen[$value] = $value;
        }
    }

    public function submit()
    {
        $data = $this->validate();

        $data['TypesJobsYouOpen'] = implode(',',$this->TypesJobsYouOpen);

        // dd($data);

        if(count(auth()->user()->usercareer()->get())) {
            auth()->user()->usercareer()->update($data);
        } else {
            auth()->user()->usercareer()->create($data);
        }


    }

    public function rules()
    {
        return [
            'CareerLevel' => ['required'],
            'TypesJobsYouOpen' => ['sometimes'],
            'JobTitle' => ['sometimes'],
            'CategoriesInterested' => ['sometimes'],
            'MinimumSalary' => ['required'],
            'HideMinimum' => ['sometimes'],
            'Country' => ['sometimes'],
            'CurrentJobSearchStatus' => ['required'],
            'CompaniesFindMe' => ['sometimes'],
            'ProfilePublic' => ['sometimes'],
        ];
    }

    public function render()
    {
        return view('livewire.update-career-interests');
    }
}
