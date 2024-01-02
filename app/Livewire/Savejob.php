<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserSavedJob;

class Savejob extends Component
{

    public $job;

    public static function save($job)
    {
        UserSavedJob::create([
            'job_id' => $job['id'],
            'user_id' => auth()->user()->id
        ]);
    }

    public static function unSave($job)
    {
        UserSavedJob::where(['job_id' => $job['id']])->delete();
    }

    public function render()
    {
        return view('livewire.savejob');
    }
}
