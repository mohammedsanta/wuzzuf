<?php

namespace App\Livewire;

use Livewire\Component;

class Education extends Component
{
    
    public $CareerLevel;

    public function mount()
    {
        $this->CareerLevel = count(auth()->user()->profile()->get()) ? auth()->user()->profile()->get()[0]->CareerLevel : '';
    }

    public function updateCareerLevel($value)
    {
        $this->CareerLevel = $value;
        auth()->user()->profile()->update(['CareerLevel' => $value]);
    }

    public function render()
    {
        return view('livewire.education');
    }
}
