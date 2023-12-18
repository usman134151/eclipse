<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Models\Tenant\AnnouncementMessage;
use App\Models\Tenant\BusinessPolicy;
use App\Models\Tenant\BusinessSetup as TenantBusinessSetup;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Tenant\Schedule;
use App\Services\App\UploadFileService;
use Illuminate\Support\Facades\File;

class BusinessSetup extends Component
{
    use WithFileUploads;

	public $component = 'configuration-setting';
	public $showForm, $configuration, $company_logo, $login_screen, $dark_company_logo, $deposit_form_file;
    public $staffProviders=[], $contractProviders = [];
        
	protected $listeners = ['showList'=>'resetForm'];
    public $messages=[], $policies = [], $feedback = [];
    public $schedule , $coloursReset = false;

    public function rules()
    {
        return [
            'configuration.business_name' => ['nullable'],
            'configuration.default_colour' => ['nullable'],
            'configuration.foreground_colour' => ['nullable'],
            'configuration.dark_default_colour' => ['nullable'],
            'configuration.dark_foreground_colour' => ['nullable'],
            'configuration.portal_url' => ['nullable','max:255'],
            'configuration.company_logo' => ['nullable'],
            'configuration.dark_company_logo' => ['nullable'],
            'configuration.login_screen' => ['nullable'],
            'configuration.welcome_text' => ['nullable'],
            'configuration.notification_email' => ['nullable', 'max:255','email'],
            'configuration.response_email' => ['nullable','max:255','email'],

            'messages.*.message'=>['nullable'],
            'messages.*.on_log_in_screen' => ['nullable'],
            'messages.*.on_dashboard' => ['nullable'],
            'messages.*.display_to_providers' => ['nullable'],
            'messages.*.display_to_customers' => ['nullable'],
            'messages.*.display_to_admin' => ['nullable'],
            'messages.*.days' => ['nullable'],

            'configuration.deposit_form_file' => ['nullable'],
            'configuration.require_provider_approval' => ['nullable'],
            'configuration.rate_for_providers' => ['nullable','max:255'],
            'configuration.measurement_providers' => ['nullable'],
            'configuration.rate_for_travel_time' => ['nullable','max:255'],
            'configuration.currency' => ['nullable'],
            'configuration.billing_days' => ['nullable','max:255'],


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

            'policies.*.title' => [ 'max:255', 'required_with:policies.*.url,policies.*.file'],
            'policies.*.url' => ['nullable','url'],

            'login_screen' => 'nullable|image|mimes:png,jpg,jpeg,gif,bmp,svg',
            'company_logo' => 'nullable|image|mimes:png,jpg,jpeg,gif,bmp,svg',
            'dark_company_logo' => 'nullable|image|mimes:png,jpg,jpeg,gif,bmp,svg',
            'deposit_form_file' => 'nullable|mimes:png,jpg,jpeg,gif,bmp,svg,pdf,doc,docx,xls,xlsx',

        ];
    }

	public function mount()
	{
        $this->staffProviders = [
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
        $this->contractProviders = [
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
        $this->setData();   
    }

    public function setData(){
        $this->configuration = TenantBusinessSetup::where('id', 1)->first();
        // dd($this->configuration);

        if ($this->configuration == null) { //initial setup
            $this->configuration = new TenantBusinessSetup();
            $this->configuration->default_colour = '#0A1E46';
            $this->configuration->foreground_colour = '#000000'; //setting defaults
            $this->configuration->dark_default_colour = '#0A1E46';
            $this->configuration->dark_foreground_colour = '#000000'; //setting defaults
            $this->configuration->send_qoutes = false; //setting defaults
            $this->configuration->customer_approve_on_login = false; //setting defaults
            $this->configuration->require_provider_approval = false; //setting defaults
            $this->configuration->customer_drive = false;
            $this->configuration->cd_show_policy_customer = false;
            $this->configuration->provider_drive = false;
            $this->configuration->pd_show_policy_customer = false;
            $this->configuration->payment_payroll = false;
            $this->configuration->customer_billing = false;
            $this->configuration->enable_staff_providers = false;
            $this->configuration->enable_contract_providers = false;
        }else{
            // fetching saved values
            if($this->configuration->feedback!=null)
            $this->feedback = json_decode($this->configuration->feedback, true);
            
            if ($this->configuration->enable_staff_providers) { //convert data from json to array

                $sp = json_decode($this->configuration->staff_providers, true);
                $this->staffProviders['payment_frequency'] = $sp['payment_frequency'];
                $this->staffProviders[$sp['payment_frequency']] = $sp[$sp['payment_frequency']];
            }


            if ($this->configuration->enable_contract_providers && $this->configuration->contract_providers != null) { //convert data from json to array

                $cp = json_decode($this->configuration->contract_providers, true);
                $this->contractProviders['payment_frequency'] = $cp['payment_frequency'];
                $this->contractProviders[$cp['payment_frequency']] = $cp[$cp['payment_frequency']];
            }
        }

            $this->messages = AnnouncementMessage::get()->toArray();
            if (count($this->messages) == 0) {
                $this->addMessage();
            }
            $this->policies = BusinessPolicy::get()->toArray();
            if (count($this->policies) == 0) {
                $this->addPolicy();
            }
            $this->dispatchBrowserEvent('refreshDatePickers');
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
        // dd($this->messages);
        $this->validate();

        if(!is_null($this->configuration->id)){
            $type = "update";
        }
        else{
            $type = "create";
        }

        $fileService = new UploadFileService();

        if($this->company_logo)
        $this->configuration->company_logo = $fileService->saveFile('setup', $this->company_logo, $this->configuration->company_logo);
        
        if($this->dark_company_logo)
        $this->configuration->dark_company_logo = $fileService->saveFile('setup', $this->dark_company_logo, $this->configuration->dark_company_logo);

        if ($this->login_screen)
        $this->configuration->login_screen = $fileService->saveFile('setup', $this->login_screen, $this->configuration->login_screen);;

        $this->configuration->user_id = Auth::id();

        if(count($this->feedback)>0){
            $this->configuration->feedback = json_encode($this->feedback);
        }

        if($this->deposit_form_file && $this->configuration->payment_payroll)
            $this->configuration->deposit_form_file = $fileService->saveFile('setup', $this->deposit_form_file, $this->configuration->deposit_form_file);

        if(!$this->configuration->payment_payroll){ //remove data if checkbox false
            if ($this->configuration->deposit_form_file != null) {
                //delete existing file
                if (File::exists(public_path($this->configuration->deposit_form_file)))
                    File::delete(public_path($this->configuration->deposit_form_file));
            }
            $this->configuration->deposit_form_file = null;
            $this->configuration->require_provider_approval = false;
            $this->configuration->rate_for_providers = null;
            $this->configuration->measurement_providers = null;
            $this->configuration->rate_for_travel_time = null;
            $this->configuration->currency = null;

            //false checkboxes that fall under this portion
            $this->configuration->enable_staff_providers = false;
            $this->configuration->enable_contract_providers =false;
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

            if($this->coloursReset)
                $this->resetColours();

            $this->configuration->save();
        session(['company_logo'=>$this->configuration->company_logo]);
        session(['dark_company_logo'=>$this->configuration->dark_company_logo]);
        session(['foreground_colour'=>$this->configuration->foreground_colour]);
        session(['default_colour'=>$this->configuration->default_colour]);
        session(['dark_foreground_colour'=>$this->configuration->dark_foreground_colour]);
        session(['dark_default_colour'=>$this->configuration->dark_default_colour]);

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
            // Emit an event to display a success message using the SweetAlert package
            $this->setData();
            $this->component= "configuration-setting";
                $this->dispatchBrowserEvent('swal:modal', [
                    'type' => 'success',
                    'title' => 'Success',
                    'text' => "Business setup has been saved successfully",
                ]);
                $this->emit('refreshPage');  // refresh page to implement colors and logo
        }
        else{
            $this->dispatchBrowserEvent('refreshSelects');
			$this->getBusinessSchedule();
		
		}
        

        // hammad 16-10-23
        callLogs($this->configuration->id, 'business_setup', $type);
        
    }


    public function getBusinessSchedule(){
		//reinit schedule
		$businessSchedule=Schedule::where('model_id',1)->where('model_type',1)->get()->first();
		if(!is_null($businessSchedule)){
			$this->schedule=$businessSchedule;
		}
		else{
			$this->schedule=new Schedule;
			$this->schedule->model_type=1;
			$this->schedule->working_days=json_encode([]);
			$this->schedule->timezone_id=0;
			
			$this->schedule->model_id=1;
			$this->schedule->save();

		}


			// $this->scheduleActive="active";
			
			// $this->switch('schedule');
			
			$this->emit('getRecord', $this->schedule->id,true);
	}
    public function saveSchedule(){
        
        
		$this->emit('saveSchedule');
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'title' => 'Success',
            'text' => "Business Schedule has been saved successfully",
        ]);
		
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
        $this->dispatchBrowserEvent('refreshDatePickers');
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
        $this->dispatchBrowserEvent('refreshDatePickers');
    }

    public function deleteFile($fieldName){
        if($this->$fieldName)   //remove temp img
            $this->$fieldName = null;

        if($this->configuration->$fieldName!=null){    //if field in filled in db
            $fileService = new UploadFileService();
            $fileService->deleteFile($this->configuration->$fieldName);
            
            $this->configuration->$fieldName = null;
            $this->configuration->save();

        }
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
    public function resetColours()
    {
        $this->coloursReset = true;
        $this->configuration->foreground_colour = '';
        $this->configuration->default_colour = '';
        $this->configuration->dark_foreground_colour = '';
        $this->configuration->dark_default_colour = '';


    }
}
