<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Models\Tenant\AnnouncementMessage;
use App\Models\Tenant\BusinessPolicy;
use App\Models\Tenant\BusinessSetup as TenantBusinessSetup;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class BusinessSetup extends Component
{
    use WithFileUploads;

	public $component = 'payments';
	public $showForm, $configuration;
    public $staffProviders=[
            "payment_frequency"=>"every-week",
            'every-week'=>[
                'submission_day'=>'monday', 'remittance_release'=>1 
            ],
            'two-weeks' => [
                'submission_day' => 'monday', 'remittance_release' => 1
            ],
            'every-month' => [
                'submission_day' => 1, 'remittance_release' => 1
            ],
            'select-days' => [
                'submission_day' => [0 => "1", 1 => "1"], 'remittance_release' => 1
            ],
        ];
    public $contractProviders = [
        "payment_frequency" => "every-week",
        'every-week' => [
            'submission_day' => 'monday', 'remittance_release' => 1
        ],
        'two-weeks' => [
            'submission_day' => 'monday', 'remittance_release' => 1
        ],
        'every-month' => [
            'submission_day' => 1, 'remittance_release' => 1
        ],
        'select-days' => [
            'submission_day' => [0 => "1", 1 => "1"], 'remittance_release' => 1
        ],
    ];
        
	protected $listeners = ['showList'=>'resetForm'];
    public $messages=[], $policies = [], $feedback = [];

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


            'configuration.service_agreements_file' => ['nullable'],
            'configuration.service_url_link' => ['nullable','url'],
            'configuration.send_qoutes' => ['nullable'],
            'configuration.customer_approve_on_login' => ['nullable'],
            'configuration.policy_file' => ['nullable'],
            'configuration.policy_link' => ['nullable','url'],
            'configuration.customer_drive' => ['nullable'],
            'configuration.cd_show_policy_customer' => ['nullable'],
            'configuration.provider_drive' => ['nullable'],
            'configuration.pd_show_policy_customer' => ['nullable'],

            'configuration.customer_billing' => ['nullable'],
            'configuration.enable_staff_providers' => ['nullable'],
            'configuration.enable_contract_providers' => ['nullable'],
            'configuration.payment_payroll' => ['nullable'],


            'policies.*.url' => ['nullable','url'],



        ];
    }

	public function mount()
	{
        $this->configuration =TenantBusinessSetup::where('id',1)->first();
        $this->feedback = json_decode($this->configuration->feedback,true);
        // dd($this->configuration);

        if($this->configuration == null){ //initial setup
            $this->configuration= new TenantBusinessSetup();
            $this->configuration->default_colour = '#0A1E46'; $this->configuration->foreground_colour = '#000000'; //setting defaults
        }
        

        if($this->configuration->enable_staff_providers) { //convert data from json to array
        
            $sp = json_decode($this->configuration->staff_providers,true);
            $this->staffProviders['payment_frequency']=$sp['payment_frequency'];
            $this->staffProviders[$sp['payment_frequency']] = $sp[$sp['payment_frequency']];
        }


        if ($this->configuration->enable_contract_providers && $this->configuration->contract_providers!=null) { //convert data from json to array

            $cp = json_decode($this->configuration->contract_providers, true);
            $this->contractProviders['payment_frequency'] = $cp['payment_frequency'];
            $this->contractProviders[$cp['payment_frequency']] = $cp[$cp['payment_frequency']];
        }

        $this->messages = AnnouncementMessage::get()->toArray();
        if (count($this->messages)==0) {
            $this->addMessage();
        }
        $this->policies = BusinessPolicy::get()->toArray();
        if (count($this->policies) == 0) {
            $this->addPolicy();
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


    public function save($submit = 1)
    {
        $this->validate();
        $this->configuration->company_logo = '';
        $this->configuration->login_screen = '';

        $this->configuration->user_id = Auth::id();

        if(count($this->feedback)>0){
            $this->configuration->feedback = json_encode($this->feedback);
        }

        if(!$this->configuration->payment_payroll){ //remove data if checkbox false
            $this->configuration->deposit_form_file = null;
            $this->configuration->require_provider_approval = false;
            $this->configuration->rate_for_providers = null;
            $this->configuration->measurement_providers = null;
            $this->configuration->rate_for_travel_time = null;
            $this->configuration->currency = null;
        }

        if(!$this->configuration->customer_billing){  //remove data if checkbox false
            $this->configuration->billing_days = null;
        }

        if (!$this->configuration->customer_drive) { //remove data if checkbox false
            $this->configuration->cd_show_policy_customer = false;
        }


        if (!$this->configuration->provider_drive) { //remove data if checkbox false
            $this->configuration->pd_show_policy_customer = false;
        }

        // dd($this->staffProviders);
        if($this->configuration->enable_staff_providers){ //set data if checkbox true
            $sp['payment_frequency']= $this->staffProviders['payment_frequency'];
            $sp[$sp['payment_frequency']]['submission_day']= $this->staffProviders[$sp['payment_frequency']]['submission_day'];
            $sp[$sp['payment_frequency']]['remittance_release'] = $this->staffProviders[$sp['payment_frequency']]['remittance_release'];
            $this->configuration['staff_providers']= json_encode($sp);
        }else
            $this->configuration['staff_providers'] =null;

        if ($this->configuration->enable_contract_providers) { //set data if checkbox true
            $cp['payment_frequency'] = $this->contractProviders['payment_frequency'];
            $cp[$cp['payment_frequency']]['submission_day'] = $this->contractProviders[$cp['payment_frequency']]['submission_day'];
            $cp[$cp['payment_frequency']]['remittance_release'] = $this->contractProviders[$cp['payment_frequency']]['remittance_release'];
            $this->configuration['contract_providers'] = json_encode($cp);
        } else
            $this->configuration['contract_providers'] = null;

            $this->configuration->save();

        AnnouncementMessage::truncate();
        foreach($this->messages as $m){
            if(!empty(trim($m['message'])))
                AnnouncementMessage::create($m);
        }

        BusinessPolicy::truncate();
        foreach ($this->policies as $p) {
            if (!empty(trim($p['title']))){
                if (!$p['customer_drive']) { //remove data if checkbox false
                    $p['cd_show_policy_customer'] = false;
                }
                if (!$p['provider_drive']) { //remove data if checkbox false
                    $p['pd_show_policy_customer'] = false;
                }
                BusinessPolicy::create($p);
            }
        }
        
        if($submit){
                // save and exit
                $this->showList("Business setup has been saved successfully");
        }

        
    }


    public function showList($message = "")
    {
        $this->emit('showList', $message);
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

    // for array of submission days in select-days
    public function addSPDays()
    {
        $this->staffProviders['select-days']['submission_day'][] = "1";
    }
    public function removeSPDays($index)
    {
        unset($this->staffProviders['select-days']['submission_day'][$index]);
        $this->staffProviders['select-days']['submission_day'] = array_values($this->staffProviders['select-days']['submission_day']);
    }

    public function addCPDays()
    {
        $this->contractProviders['select-days']['submission_day'][] = "1";
    }
    public function removeCPDays($index)
    {
        unset($this->contractProviders['select-days']['submission_day'][$index]);
        $this->contractProviders['select-days']['submission_day'] = array_values($this->contractProviders['select-days']['submission_day']);
    }
    //end 

    public function removeMessage($index){
        unset($this->messages[$index]);
        $this->messages = array_values($this->messages);
    }
    public function addPolicy(){
        $this->policies[]=[
            'title'=>'',
            'file'=>'',
            'link'=>'',
            'customer_drive'=>true,
            'cd_show_policy_customer'=>false,
            'provider_drive'=>true,
            'pd_show_policy_customer'=>false
        ];
    }
    public function removePolicy($index){
        unset($this->policies[$index]);
        $this->policies = array_values($this->policies);
    }
}
