<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserCertificate;

class EducationCertificate extends Component
{

    public $CertificateView = false;

    public $id;
    public $Certificate;
    public $AwardedMonth;
    public $Organization;
    public $Result;
    public $Out;
    public $ScoreLink;
    public $CertificateID;
    public $Additional;

    public function CertificateSwitch()
    {
        $this->CertificateView = $this->CertificateView ? false : true; 
    }

    public function edit($data)
    {
        $this->CertificateSwitch();

        $this->id = $data['id'];
        $this->Certificate = $data['Certificate'];
        $this->AwardedMonth = $data['AwardedMonth'];
        $this->Organization = $data['Organization'];
        $this->Result = $data['Result'];
        $this->Out = $data['Out'];
        $this->ScoreLink = $data['ScoreLink'];
        $this->CertificateID = $data['CertificateID'];
        $this->Additional = $data['Additional'];

    }

    public function remove($id)
    {
        UserCertificate::find($id)->delete();
    }

    public function submit()
    {

        if($this->id) {
            $this->update();
        } else {
            $data = $this->validate();
            auth()->user()->userCertificate()->create($data);
        }         
    }

    public function update()
    {
        $update = $this->validate();
        UserCertificate::find($this->id)->update($update);
        $this->CertificateSwitch();
    }

    public function rules()
    {
        return [
            'Certificate' => ['sometimes'],
            'AwardedMonth' => ['sometimes'],
            'Organization' => ['sometimes'],
            'Result' => ['sometimes'],
            'Out' => ['sometimes'],
            'ScoreLink' => ['sometimes'],
            'CertificateID' => ['sometimes'],
            'Additional' => ['sometimes'],
        ];
    }

    public function render()
    {
        return view('livewire.education-certificate',[
            'certificates' => auth()->user()->userCertificate()->get()
        ]);
    }
}
