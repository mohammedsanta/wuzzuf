<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserHighSchool;

class EducationHighSchool extends Component
{

    public $HighSchoolView = false;

    public $id;
    public $School;
    public $Country;
    public $Certificate;
    public $LanguageStudy;
    public $GraduationYear;
    public $Grade;
    public $Additional;

    public function HighSchoolSwitch()
    {
        $this->HighSchoolView = $this->HighSchoolView ? false : true; 
    }

    public function submit()
    {    
        if($this->id) {
            $this->update();
        } else {
            $data = $this->validate();
            auth()->user()->userHighSchool()->create($data);
        }

        $this->HighSchoolSwitch();
    }

    public function update()
    {
        $update = $this->validate();
        UserHighSchool::find($this->id)->update($update);
        $this->HighSchoolSwitch();
    }

    public function edit($data)
    {
        $this->HighSchoolSwitch();

        $this->id = $data['id'];
        $this->School = $data['School'];
        $this->Country = $data['Country'];
        $this->Certificate = $data['Certificate'];
        $this->LanguageStudy = $data['LanguageStudy'];
        $this->GraduationYear = $data['GraduationYear'];
        $this->Grade = $data['Grade'];
        $this->Additional = $data['Additional'];
    }

    public function remove($id)
    {
        UserHighSchool::find($id)->delete();
    }

    public function rules()
    {
        return [
            'School' => ['sometimes'],
            'Country' => ['sometimes'],
            'Certificate' => ['sometimes'],
            'LanguageStudy' => ['sometimes'],
            'GraduationYear' => ['sometimes'],
            'Grade' => ['sometimes'],
            'Additional' => ['sometimes'],
        ];
    }

    public function render()
    {
        return view('livewire.education-high-school',[
            'schools' => auth()->user()->userHighSchool()->get()
        ]);
    }
}
