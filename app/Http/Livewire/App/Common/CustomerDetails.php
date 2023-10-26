<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Models\Tenant\User;
use App\Services\App\UserService;
use App\Helpers\SetupHelper;
use App\Models\Tenant\Booking;
use App\Models\Tenant\Invoice;
use App\Models\Tenant\UserLoginAddress;
use App\Services\InvoiceService;
use PDF;

class CustomerDetails extends Component
{
	public $user,$userid, $service_catalog, $isCustomer=false , $companyIds, $supervisorId, $billing_managerId, $counter = 0, $invoice_id;
	protected $invoiceService;
	protected $listeners = [
		'showDetails', 'showConfirmation' , 'openInvoiceDetails', 'downloadInvoice'=> 'createInvoicePDF', 'updateVal' => 'showDetails'
	];

	public $filter_companies, $filter_bmanager;
        public $setupValues = [
        'companies' => ['parameters' => ['Company', 'id', 'name', 'status', 1, 'name', false, 'filter_companies', '', 'filter_companies', 2]],
        // 'specializations' => ['parameters' => ['Specialization', 'id', 'name', 'status', 1, 'name', true, 'filter_specialization', '', 'filter_specialization', 4]],
        // "service_type_ids" => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 5, 'setup_value_label', true, 'filter_service_type_ids', '', 'filter_service_type_ids', 4]],
        // 'ethnicity' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 3, 'setup_value_label', true, 'ethnicity', '', 'ethnicityassignProvider', 6]],
        // 'gender' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 2, 'setup_value_label', true, 'gender', '', 'genderassignProvider', 5]],
        // 'certifications' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 8, 'setup_value_label', true, ' certifications', '', ' certificationsassignProvider', 9]],

    ];
    public $bmanagers = [];

    public function setCompanyDetails($attrName, $val)
    {
        if ($attrName == 'filter_companies') {
            // fetch billing managers for this company 
            $this->bmanagers = User::where('company_name', $val)->whereHas('roles', function ($query) {
                $query->where('role_id', 9);
            })->select(['users.name', 'users.id'])->get();

        }
        $this->$attrName = $val;
    }
    public function resetFilters(){
        $this->filter_bmanager=null;
        $this->filter_companies = null;

    }
  


	public function __construct()
    {
        $this->invoiceService = new InvoiceService;
    }

	public function render()
	{
		//dd($this->user);
		return view('livewire.app.common.customer-details');
	}

	public function mount($user =null)
	{
		if($user){
			$this->showdetails($user);
		}
		$this->setupValues = SetupHelper::loadSetupValues($this->setupValues);

	}

	public function showDetails($user){

		$this->user=$user;	
		$this->userid = $user['id'];
		$user1 = User::find($user['id']);
		$this->user['userdetail']['departments']=$user1->departments->pluck('name');
		$userService = new UserService;

		$data = $userService->getUserRolesDetails($this->user['id'], 5, 1);
		$this->user['userdetail']['supervisors']=User::whereIn('id', $data->pluck('user_id')->toArray())->get()->pluck('name')->toArray();

		$data = $userService->getUserRolesDetails($this->user['id'], 9, 1);
		$this->user['userdetail']['billing_managers'] = User::whereIn('id', $data->pluck('user_id')->toArray())->get()->pluck('name')->toArray();
		if(key_exists('favored_users',$this->user['userdetail'])){
			$data = explode(',', $this->user['userdetail']['favored_users']);
			$this->user['userdetail']['favoured_users'] = User::whereIn('id', $data)->limit(5)->with('userdetail')->get()->toArray();
		}
		else{
			$this->user['userdetail']['favoured_users'] =[];
		}

		// dd($this->user['userdetail']['favoured_users']);
		$this->user['userdetail']['physical_address'] = null;
		$this->user['userdetail']['billing_address'] = null;
	
		if($user1->addresses->isNotEmpty()){
			$addresses = $user1->addresses->sortBy('address_type')->toArray();
			$this->user['userdetail']['physical_address'] =  $addresses[0];
			if(isset($addresses[1]))
				$this->user['userdetail']['billing_address'] =  $user1->addresses->sortBy('address_type')->toArray()[1];
		}
			
		if(key_exists('language_id',$this->user['userdetail']))
			$this->user['userdetail']['language']=SetupHelper::getSetupValueById($this->user['userdetail']['language_id']);
		else{
			$this->user['userdetail']['language']='N/A';
		}
		if(key_exists('language_id',$this->user['userdetail'])){
			$this->user['tags'] = json_decode($this->user['userdetail']['tags']);
		}
		else 
		$this->user['tags'] = [];
		

		$query = User::query();
		$query->where('users.id', $this->userid);
		$query->join('associate_services', function($join){
			$join->where('associate_services.model_type','=','customer');
			$join->on('associate_services.model_id', 'users.id');
			$join->where('associate_services.status', '=' ,1);
		});
		$query->join('service_categories', 'associate_services.service_id', "service_categories.id");
		$query->join('accommodations', 'service_categories.accommodations_id', "accommodations.id");
		$query->select([
			'accommodations.id as accommodation_id',
			'accommodations.name as accommodation_name',
			'service_categories.id as service_id', 'service_categories.name as service_name',
		]);
		$this->service_catalog = $query->distinct('service_id')->get()->groupBy('accommodation_id')->toArray();
		$this->dispatchBrowserEvent('refreshSelects');

		$this->user['avg_rating'] = round($user1->feedbackRecieved->avg('rating'));

		$this->user['roles'] = $user1->roles->where('role_type', 2)->pluck('name')->toArray();

		$this->user['completedRequest'] = $this->invoiceService->calculateRequest($this->userid, 1, 1);
		$this->user['openRequest'] = $this->invoiceService->calculateRequest($this->userid, 1, 2);

		$invoiceTotals = $this->invoiceService->calculateInvoices($user1->company_name,1, $this->user['roles'], $this->userid);
		$this->user['totalInvoice'] = $invoiceTotals['totalInvoice'];
		$this->user['dueInvoice'] = $invoiceTotals['dueInvoice'];
		$this->user['overDueInvoice'] = $invoiceTotals['overDueInvoice'];
		$this->user['paidInvoice'] = $invoiceTotals['paidInvoice'];
		$this->user['accountCredit'] = $invoiceTotals['accountCredit'];

		$lastLogin = UserLoginAddress::where('user_id', $this->userid)->latest('created_at')->first();
		if ($lastLogin) {
			$createdAt = $lastLogin->value('created_at');
			$this->user['login_date'] = $createdAt->format('d-m-Y');
			$this->user['login_time'] = $createdAt->format('H:i A');
			$this->user['login_ip'] = $lastLogin->ip_address;
		} else {
			// Handle the case where $createdAt is null
			$this->user['login_date'] = 'N/A';
			$this->user['login_time'] = 'N/A';
			$this->user['login_ip'] = 'N/A';
		}

		// invoices tab
		$this->companyIds = Invoice::where('company_id', $user1->company_name)->get()->pluck('company_id')->unique()->toArray();
		
		
		if ($this->companyIds == [] || $this->companyIds == null)
		$this->companyIds = -1;


		if (in_array('company_admin', $this->user['roles'])) {
		} elseif (in_array('supervisor', $this->user['roles']) && !in_array('company_admin', $this->user['roles'])) {
			$this->supervisorId = Invoice::where('company_id', $user1->company_name)->whereNotNull('supervisor_id')->get()->pluck('supervisor_id')->unique()->toArray();

			if ($this->supervisorId == [] || $this->supervisorId == null)
			$this->supervisorId = -1;
		} elseif (in_array('billing_manager', $this->user['roles'])) {
			$this->billing_managerId = Invoice::where('company_id', $user1->company_name)->whereNotNull('billing_manager_id')->get()->pluck('billing_manager_id')->unique()->toArray();

			if ($this->billing_managerId == [] || $this->billing_managerId == null)
			$this->billing_managerId = -1;
		}
	}

	public function lockAccount()
	{
		$user = User::find($this->user['id']);
		$user->status = !$user->status ;
		$user->save();
		$this->user['status']= $user->status;
		$this->showConfirmation("Account status changed Successfully");

	}

	public function showConfirmation($message=""){
		if ($message) {
			// Emit an event to display a success message using the SweetAlert package
			$this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => $message,
			]);
		}
	}

	public function showList($userId=1)
	{
		$user=User::find($userId);
		
		$this->emit('showList');
	}
	public function resendWelcomeEmail()
	{
		$user = User::find($this->user['id']);
		sendWelcomeMail($user);
		$this->showConfirmation("Welcome Email Send Successfully");
	}

	function createInvoicePDF($invoice_id = 0)
    {
        // $orderData = [];
        $invoice = Invoice::where('id', $invoice_id)->with(['company', 'billing_manager', 'billingAddress',])->first();
        if ($invoice) {

            $bookings = Booking::whereIn('id', $invoice->bookings->pluck('id'))->get();
            $orderData['invoice'] = $invoice;
            $orderData['bookings'] = $bookings ?? [];

            $pdfContent = PDF::loadView('tenant.common.download_invoice_pdf', ['orderData' => $orderData])->output();
            return response()->streamDownload(
                fn () => print($pdfContent),
                "invoice_" . $invoice->invoice_number . ".pdf"
            );
        }
    }

	public function openInvoiceDetails($invoice_id)
    {
        if ($this->counter == 0) {
            $this->invoice_id = 0;
            $this->dispatchBrowserEvent('refresh-invoice-details', ['invoice_id' => $invoice_id]);
            $this->counter = 1;
        } else {
            $this->invoice_id = $invoice_id;
            $this->counter = 0;
        }
    }
}