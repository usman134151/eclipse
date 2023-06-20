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
	public $showForm, $configuration,$provider_payroll=true,$staff_provider=true,$contract_provider=true,$customer_billing=true;
    public $staffProviders=["payment_frequency"=>""],$contractProviders=[];
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
            'configuration.portal_url' => ['required','max:255'],
            'configuration.company_logo' => ['nullable'],
            'configuration.login_screen' => ['nullable'],
            'configuration.welcome_text' => ['nullable','max:255'],
            'configuration.notification_email' => ['nullable', 'max:255'],
            'configuration.response_email' => ['nullable','max:255'],

            'messages.*.message'=>['nullable'],
            'messages.*.on_log_in_screen' => ['nullable'],
            'messages.*.on_dashboard' => ['nullable'],
            'messages.*.display_to_providers' => ['nullable'],
            'messages.*.display_to_customers' => ['nullable'],
            'messages.*.display_to_admin' => ['nullable'],
            'messages.*.days' => ['nullable'],

            'configuration.deposit_form_file' => ['nullable'],
            'configuration.require_provider_approval' => ['nullable'],
            'configuration.rate_for_providers' => ['nullable'],
            'configuration.measurement_providers' => ['nullable'],
            'configuration.rate_for_travel_time' => ['nullable'],
            'configuration.currency' => ['nullable'],
            'configuration.billing_days' => ['nullable'],

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
        $this->messages = AnnouncementMessage::get()->toArray();
        if (count($this->messages)==0) {
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
        $this->validate();
        $this->configuration->company_logo = '';
        $this->configuration->login_screen = '';

        $this->configuration->user_id = Auth::id();
        $this->configuration->save();

        AnnouncementMessage::truncate();
        foreach($this->messages as $m){
            if(!empty(trim($m['message'])))
                AnnouncementMessage::create($m);
        }

        // dd($this->messages);
        
    }

    
	public function switch($component)
	{
		$this->component = $component;
	}
    public function addMessage(){
        $this->messages[] = [
        'message'=>'', 'on_log_in_screen'=>0, 'on_dashboard'=>0, 'display_to_providers'=>0, 'display_to_customers'=>0,
        'display_to_admin'=>0, 'days'=>''
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
