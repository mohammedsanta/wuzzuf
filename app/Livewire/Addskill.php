<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserSkill;

class Addskill extends Component
{

    public $skillCount;
    public $addSkillView = false;

    // Add Skill

    public $id;
    public $skill;
    public $proficiency;
    public $interest;
    public $YearsExperience;
    public $Justification;

    // Edit

    public $editView = false;
    public $theSkill;

    public function editViewSwitch($id)
    {
        if($this->editView) {
            $this->editView = false;
        } else {
            $skill = UserSkill::find($id);

            $this->id = $skill->id;
            $this->skill = $skill->skill;
            $this->proficiency = $skill->Proficiency;
            $this->interest = $skill->Interest;
            $this->YearsExperience = $skill->YearsExperience;
            $this->Justification = $skill->Justification;

            $this->editView = true;
        }
    }

    public function update()
    {

        $data = $this->validate();

        UserSkill::find($this->id)->update($data);
        $this->skillUpdateSwitch();
        return back()->with(['success' => 'Updated']);

    }

    public function skillUpdateSwitch()
    {
        $this->editView = $this->editView ? false : true;
    }

    // End edit
    
    public function skillSwitch()
    {
        $this->addSkillView = $this->addSkillView ? false : true;
    }

    public function remove($id)
    {
        UserSkill::find($id)->delete();
    }

    public function submit()
    {
        $data = $this->validate();
        $data['user_id'] = auth()->user()->id;
        UserSkill::create($data);

        $this->reset('skill','proficiency','interest','YearsExperience','Justification');
        
        session()->flash('success','Created');
        $this->skillSwitch();
    }

    protected function rules(): array
    {
        return [
            'skill' => ['required'],
            'proficiency' => ['sometimes'],
            'interest' => ['sometimes'],
            'YearsExperience' => ['required'],
            'Justification' => ['sometimes'],
        ];
    }

    public function render()
    {
        return view('livewire.addskill',[
            'skills' => UserSkill::where('user_id',1)->get()
        ]);

    }
}
