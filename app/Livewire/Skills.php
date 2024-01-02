<?php

namespace App\Livewire;

use App\Models\Skill;
use Livewire\Component;

class Skills extends Component
{

    public $name;
    public $added = [];


    public function addSkill($skill)
    {
        if(!in_array($skill,$this->added)) {
            $this->added[] = $skill;
        }
    }

    public function addNewSkill()
    {
        if(!in_array($this->name,$this->added)) {
            $this->added[] = $this->name;
        }
        $this->name = '';
    }

    public function removeSkill($skill)
    {
        $key = array_search($skill,$this->added);
        unset($this->added[$key]);
    }

    public function render()
    {
        return view('livewire.skills',[
            'lists' => Skill::where('name', 'like', '%' . $this->name . '%' ?? '')->get(),
        ]);
    }
}
