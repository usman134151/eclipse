<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;

class CredentialManager extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];
    public $documents=[[
        'upload_only'=>'',
        'acknowledge_document'=>'',
        'sign_document'=>'',
        'set_expiry'=>'',
        'user_set_expiry'=>'',
        'expiration_within'=>'',
        'formFile'=>''
    ]];

    public function render()
    {
        return view('livewire.app.common.forms.credential-manager');
    }

    public function mount()
    {


    }
    public function showList()
	{
		$this->emit('showList');
	}

    function showForm()
    {
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }
    public function addDocumentType(){
        $this->documents[] = [
            'upload_only'=>'',
            'acknowledge_document'=>'',
            'sign_document'=>'',
            'set_expiry'=>'',
            'user_set_expiry'=>'',
            'expiration-within'=>'',
            'expiration-within'=>'',
            'formFile'=>''
        ];
    }
    public function removeDocumentType($index)
    {
        unset($this->documents[$index]);
        $this->documents = array_values($this->documents);
    }

}
