<?php

namespace App\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{

    public $name = 'test';
    public $num = 1;

    public function add()
    {
        $this->num++;
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
