<?php

namespace App\Livewire;

use Livewire\Component;

class CreateQuestions extends Component
{

    public $questions = 1;

    public function add()
    {
        $this->questions++;
    }

    public function remove()
    {
        $this->questions--;
    }

    public function render()
    {
        return view('livewire.create-questions');
    }
}
