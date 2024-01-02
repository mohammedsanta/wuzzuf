<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CompanyProfile;

class CompanySettings extends Component
{

    public $photo = false;

    public function butPhoto()
    {
        $this->photo ? $this->photo = false : $this->photo = true ;
    }

    public function render()
    {
        $profile = CompanyProfile::find(auth()->user()->id);
        return view('livewire.company-settings',[
            'profile' => $profile,
            'photo' => $this->photo,
        ]);
    }
}
