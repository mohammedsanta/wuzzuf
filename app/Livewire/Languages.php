<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserLanguage;

class Languages extends Component
{

    public $langView = false;
    public $langEditView = false;

    // Data

    public $Language;
    public $Justification;

    public $Reading;
    public $readingNum;
    public $Writing;
    public $writingNum;
    public $Listening;
    public $listeningNum;
    public $Speaking;
    public $speakingNum;

    // Edit

    public $language;

    public function colorReadingStar($num)
    {
        $this->readingNum = $num;
        switch($num) {
            case 1:
                $this->Reading = '— Beginner';
            break;
            case 2:
                $this->Reading = '— Intermediate';
            break;
            case 3:
                $this->Reading = '— Advanced';
            break;
            case 4:
                $this->Reading = '— Fluent';
            break;     
        }
    }

    public function colorWritingStar($num)
    {
        $this->writingNum = $num;
        switch($num) {
            case 1:
                $this->Writing = '— Beginner';
            break;
            case 2:
                $this->Writing = '— Intermediate';
            break;
            case 3:
                $this->Writing = '— Advanced';
            break;
            case 4:
                $this->Writing = '— Fluent';
            break;     
        }
    }

    public function colorListeningStar($num)
    {
        $this->listeningNum = $num;
        switch($num) {
            case 1:
                $this->Listening = '— Beginner';
            break;
            case 2:
                $this->Listening = '— Intermediate';
            break;
            case 3:
                $this->Listening = '— Advanced';
            break;
            case 4:
                $this->Listening = '— Fluent';
            break;     
        }
    }

    public function colorSpeakingStar($num)
    {
        $this->speakingNum = $num;
        switch($num) {
            case 1:
                $this->Speaking = '— Beginner';
            break;
            case 2:
                $this->Speaking = '— Intermediate';
            break;
            case 3:
                $this->Speaking = '— Advanced';
            break;
            case 4:
                $this->Speaking = '— Fluent';
            break;     
        }
    }

    public function langSwitch()
    {
        $this->langView = $this->langView ? false : true;
    }

    public function langEditSwitch()
    {
        $this->langEditView = $this->langEditView ? false : true;
    }

    public function langSwitchEdit($data)
    {
        $this->langEditView = $this->langView ? false : true;

        $this->language = UserLanguage::find($data['id']);
        $this->Language = $data['Language'];
        $this->Justification = $data['Justification'];
        $this->Reading = $data['Reading'];
        $this->Writing = $data['Writing'];
        $this->Listening = $data['Listening'];
        $this->Speaking = $data['Speaking'];
    }

    public function submit()
    {
        $data = $this->validate();

        auth()->user()->language()->create($data);

        $this->langSwitch();
    }

    public function update()
    {
        $update = $this->validate();

        $this->language->update($update);

        $this->langEditView = false;
    }

    public function remove($language)
    {
        UserLanguage::find($language['id'])->delete();
    }

    public function rules(): array
    {
        return [
            'Reading' => 'sometimes',
            'Writing' => 'sometimes',
            'Listening' => 'sometimes',
            'Speaking' => 'sometimes',
            'Language' => 'sometimes',
            'Justification' => 'sometimes',
        ];
    }

    public function render()
    {
        return view('livewire.languages',[
            'languages' => auth()->user()->language()->get()
        ]);
    }
}
