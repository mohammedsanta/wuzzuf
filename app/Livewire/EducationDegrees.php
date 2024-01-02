<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserEducationDegree;

class EducationDegrees extends Component
{

    public $UniversityDegreesView = false;

    public $id;
    public $DegreeLevel;
    public $Country;
    public $University;
    public $FieldStudy;
    public $StartYear;
    public $EndYear;
    public $Grade;
    public $StudiedSubjects;
    public $Additional;

    public function UniversityDegreesSwitch()
    {
        $this->UniversityDegreesView = $this->UniversityDegreesView ? false : true; 
    }

    public function edit($data)
    {
        $this->UniversityDegreesSwitch();

        $this->id = $data['id'];
        $this->DegreeLevel = $data['DegreeLevel'];
        $this->Country = $data['Country'];
        $this->University = $data['University'];
        $this->FieldStudy = $data['FieldStudy'];
        $this->StartYear = $data['StartYear'];
        $this->EndYear = $data['EndYear'];
        $this->Grade = $data['Grade'];
        $this->StudiedSubjects = $data['StudiedSubjects'];
        $this->Additional = $data['Additional'];

    }

    public function remove($id)
    {
        UserEducationDegree::find($id)->delete();
    }

    public function submit()
    {

        if($this->id) {
            $this->update();
        } else {

            $data = $this->validate();
    
            auth()->user()->UserDegree()->create($data);
    
            $this->UniversityDegreesSwitch();
        }
        
    }

    public function update()
    {
        $update = $this->validate();
        UserEducationDegree::find($this->id)->update($update);
        $this->UniversityDegreesSwitch();

        $this->id = '';
        $this->DegreeLevel = '';
        $this->Country = '';
        $this->University = '';
        $this->FieldStudy = '';
        $this->StartYear = '';
        $this->EndYear = '';
        $this->Grade = '';
        $this->StudiedSubjects = '';
        $this->Additional = '';

    }

    public function rules()
    {
        return [
            'DegreeLevel' => ['sometimes'],
            'Country' => ['sometimes'],
            'University' => ['sometimes'],
            'FieldStudy' => ['sometimes'],
            'StartYear' => ['sometimes'],
            'EndYear' => ['sometimes'],
            'Grade' => ['sometimes'],
            'StudiedSubjects' => ['sometimes'],
            'Additional' => ['sometimes'],
        ];
    }

    public function render()
    {
        return view('livewire.education-degrees',[
            'degrees' => auth()->user()->UserDegree()->get(),
        ]);
    }
}
