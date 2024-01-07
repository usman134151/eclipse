<?php

namespace App\Http\Livewire\App\Common\Modals;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\User;
use Illuminate\Support\Facades\Auth;
use App\Services\App\UserService;
use App\Models\Tenant\Role;
use Illuminate\Validation\Rule;

class AddNewCustomer extends Component
{
    public $companyId;
    public $user, $email_invitation = 1;
    public $rolesArr = [];
    public $userdetail = [
		'industry' => null, 'phone' => null, 'gender_id' => null, 'language_id' => null, 'timezone_id' => null, 'ethnicity_id' => null,
		'user_introduction' => null, 'title' => null, 'user_position' => null, 'profile_pic' => null, 'address_line1' =>
		'', 'address_line2' => '', 'city' => '', 'state' => '', 'country' => '', 'user_introduction'=>'','user_introduction_file'=>null
	];
    public $selectedIndustries = [];
    protected $listeners = ['setCompany'];

    public function render()
    {
        return view('livewire.app.common.modals.add-new-customer');
    }

    public function mount(User $user)
    {
    //    $this->setupValues = SetupHelper::loadSetupValues($this->setupValues);
		$this->user = $user;
        $this->roles=Role::where('role_type',2)->get()->toArray();
       
    }

    public function rules()
	{
		return [
			'user.company_name' => [
				'required'
			],
			'user.first_name' => [
				'required',
				'string',
				'max:255'
			],
			'user.last_name' => [
				'required',
				'string',
				'max:255'
			],
			'user.email' => [
				'required',
				'email',
				'max:255',
				Rule::unique('users', 'email')->ignore($this->user->id)
			],
			
			



		];
	}


	public function addUser($redirect = 1)
	{
      

		$this->validate();
		
		$this->user->name = $this->user->first_name . ' ' . $this->user->last_name;
		$this->user->added_by = Auth::id();
		$this->user->status = 1;

		
		$userService = new UserService;
        $roles=[];
        foreach($this->rolesArr as $role){
            $roles[$role]=1;
        }
    
		$this->user = $userService->createUser($this->user, $this->userdetail, 4, $this->email_invitation, $this->selectedIndustries, 1);
        $userService->storeCustomerRoles($roles, $this->user->id);
        $this->emit('updateUsers');
        $this->emit('customerModalDismissed');  // emit to close modal
        if(in_array(6,$this->rolesArr))
        {
            $this->emit('updateRequestor',$this->user->id);  // emit to add new customer as requestor
        }
        $companyId=$this->user->company_name;
        $this->user=new User;
        $this->user->company_name=$companyId;

		
	}


    public function setCompany($companyId){
        $this->user->company_name=$companyId;
    }

    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

}
