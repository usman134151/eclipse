<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;

class BusinessSetup extends Component
{
	public $component = 'configuration-setting';
	public $showForm;
	protected $listeners = ['showList'=>'resetForm'];
    public $messages=[[
        'message_text'=>'',
        'display'=>'',
        'audience'=>'',
        'duration'=>''

    ]];
    public $policies=[[
        'policy_title'=>'',
        'upload_file'=>'',
        'url_link'=>'',
        'customer_drive'=>'',
        'acknowledgeInitialLogincustomerDrive'=>'',
        'provider_drive'=>'',
        'acknowledgeInitialLoginproviderDrive'=>''

    ]];

	public function mount()
	{}

	public function render()
	{
		return view('livewire.app.common.forms.business-setup');
	}

	function showForm()
	{
		$this->showForm=true;
	}

	public function resetForm()
	{
		$this->showForm=false;
	}

	public function switch($component)
	{
		$this->component = $component;
	}
    public function addMessage(){
        $this->messages[] = [
            'message_text'=>'',
            'display'=>'',
            'audience'=>'',
            'duration'=>''
        ];
    }
    public function removeMessage($index){
        unset($this->messages[$index]);
        $this->messages = array_values($this->messages);
    }
    public function addPolicy(){
        $this->policies[]=[
            'policy_title'=>'',
            'upload_file'=>'',
            'url_link'=>'',
            'customer_drive'=>'',
            'acknowledgeInitialLogincustomerDrive'=>'',
            'provider_drive'=>'',
            'acknowledgeInitialLoginproviderDrive'=>''
        ];
    }
    public function removePolicy($index){
        unset($this->policies[$index]);
        $this->policies = array_values($this->policies);
    }
}
