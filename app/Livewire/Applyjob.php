<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Savejob;

class Applyjob extends Component
{

    public $job;

    public function mount()
    {
        $this->Savejob = new Savejob;
    }

    public function apply($job)
    {
        return to_route('job.question',$job['id']);
    }

    public function save($job)
    {
        return Savejob::save($job);
    }

    public function unSave($job)
    {
        return Savejob::unSave($job);
    }

    public function render()
    {
        return view('livewire.applyjob');
    }
}
