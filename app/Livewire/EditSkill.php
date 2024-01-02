<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserSkill;

class EditSkill extends Component
{

    public UserSkill $skill;
    public $theSkill;

    // public $editView = false;

    public $editName;
    public $proficiency;
    public $interest;
    public $experience;
    public $justification;

    public function editViewSwitch($id)
    {
        if($this->editView) {
            $this->editView = false;
        } else {

            $skill = UserSkill::find($id);

            $this->editName = $skill['skill'];
            $this->proficiency = $skill['Proficiency'];
            $this->interest = $skill['Interest'];
            $this->experience = $skill['YearsExperience'];
            $this->justification = $skill['Justification'];

            $this->editView = true;
        }
    }

    // public function mount(UserSkill $skill)
    // {
    //     $this->skill = $skill;
    //     // dd($this->skill);
    // }

    public function render()
    {
        return view('livewire.edit-skill');
    }

    public function submit()
    {
        $this->validate();

        $this->skill->save();

        return redirect()->route('update.skills');
    }

    protected function rules(): array
    {
        return [
            'skill.skill' => ['sometimes'],
            'skill.proficiency' => ['sometimes'],
            'skill.interest' => ['sometimes'],
            'skill.experience' => ['sometimes'],
            'skill.justification' => ['sometimes'],
        ];
    }

}
