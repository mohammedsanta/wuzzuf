<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserTraining;

class EducationTraining extends Component
{

    public $TrainingView = false;

    public $id;
    public $Training;
    public $Organization;
    public $Month;
    public $Year;
    public $Additional;

    public function TrainingSwitch()
    {
        $this->TrainingView = $this->TrainingView ? false : true; 
    }

    public function edit($data)
    {
        $this->UniversityDegreesSwitch();

        $this->id = $data['id'];
        $this->Training = $data['Training'];
        $this->Organization = $data['Organization'];
        $this->Month = $data['Month'];
        $this->Year = $data['Year'];
        $this->Additional = $data['Additional'];

    }

    public function remove($id)
    {
        UserTraining::find($id)->delete();
    }

    public function submit()
    {

        if($this->id) {
            $this->update();
        } else {

            $data = $this->validate();
    
            auth()->user()->userTraining()->create($data);
    
            $this->TrainingSwitch();
        }
        
    }

    public function update()
    {
        $update = $this->validate();
        UserTraining::find($this->id)->update($update);
        $this->TrainingSwitch();
    }

    public function rules()
    {
        return [
            'Training' => ['sometimes'],
            'Organization' => ['sometimes'],
            'Month' => ['sometimes'],
            'Year' => ['sometimes'],
            'Additional' => ['sometimes'],
        ];
    }

    public function render()
    {
        return view('livewire.education-training',[
            'traninings' => auth()->user()->userTraining()->get()
        ]);
    }
}
