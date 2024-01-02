<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class Cv extends Component
{


    public function delete()
    {
        Storage::delete(auth()->user()->cv()->get()[0]->cv);
        auth()->user()->cv()->get()[0]->delete();
        session()->flash('success','CV Has Been Uploaded');
    }

    public function render()
    {
        return view('livewire.cv');
    }
}
