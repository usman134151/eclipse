<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Models\Tenant\AnnouncementMessage;
use App\Models\Tenant\BusinessSetup as TenantBusinessSetup;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class BusinessSetup extends Component
{
    use WithFileUploads;

	public $component = 'configuration-setting';
	public $showForm, $configuration;
	protected $listeners = ['showList'=>'resetForm'];
    public $messages=[];
    public $policies=[[
        'policy_title'=>'',
        'upload_file'=>'',
        'url_link'=>'',
        'customer_drive'=>'',
        'acknowledgeInitialLogincustomerDrive'=>'',
        'provider_drive'=>'',
        'acknowledgeInitialLoginproviderDrive'=>''

    ]];
    public function rules()
    {
        return [
            'configuration.default_colour' => ['required'],
            'configuration.foreground_colour' => ['required'],
            'configuration.portal_url' => ['required'],
            'configuration.company_logo' => ['nullable'],
            'configuration.login_screen' => ['nullable'],
            'configuration.welcome_text' => ['nullable'],
            'configuration.notification_email' => ['nullable'],
            'configuration.response_email' => ['nullable'],

            'messages.*.message'=>['nullable'],
            'messages.*.on_log_in_screen' => ['nullable'],
            'messages.*.on_dashboard' => ['nullable'],
            'messages.*.display_to_providers' => ['nullable'],
            'messages.*.display_to_customers' => ['nullable'],
            'messages.*.display_to_admin' => ['nullable'],
        ];
    }

	public function mount()
	{
        $this->configuration =TenantBusinessSetup::where('id',1)->first();
        // dd($this->configuration);

        if($this->configuration ==null){
            $this->configuration= new TenantBusinessSetup();
            $this->configuration->default_colour = '#0A1E46'; $this->configuration->foreground_colour = '#000000'; //setting defaults
        }
        $this->messages = AnnouncementMessage::get();
        if ($this->messages->isEmpty()) {
            $this->addMessage();
        }
}

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


    public function save()
    {
        $this->configuration->company_logo = '';
        $this->configuration->login_screen = '';

        $this->configuration->user_id = Auth::id();
        $this->configuration->save();

        dd($this->messages);
        
    }

    
	public function switch($component)
	{
		$this->component = $component;
	}
    public function addMessage(){
        $this->messages[] = new AnnouncementMessage();
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
