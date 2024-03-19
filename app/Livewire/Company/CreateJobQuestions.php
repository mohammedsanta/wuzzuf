<?php

namespace App\Livewire\Company;

use Livewire\Component;

class CreateJobQuestions extends Component
{

    public $gender;
    public $EducationLevel;
    public $switch = true;
    
    public function save()
    {

        dd("test");

    }

    public function switchClicked()
    {
        $this->switch ? $this->switch = false : $this->switch = true;
    }

    public function updateGender($data)
    {
        $this->gender = $data;
    }

    public function updateEducationLevel($data)
    {
        $this->EducationLevel = $data;
    }

    public function render()
    {
        return view('livewire.company.create-job-questions');
    }
}
