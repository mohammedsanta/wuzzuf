<?php

namespace App\Livewire;

use Livewire\Component;

class HeaderSearch extends Component
{

    public $isClicked = false;


    public function clicked()
    {
        $this->isClicked ? $this->isClicked = false : $this->isClicked = true;
    }

    public function render()
    {
        $clicked = $this->isClicked;
        return view('livewire.header-search',[
            'clicked' => $clicked
        ]);
    }
}
