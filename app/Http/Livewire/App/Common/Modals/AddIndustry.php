<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Industry;
use App\Models\Tenant\BookingIndustry;
use App\Models\Tenant\User;
use App\Models\Tenant\Company;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddIndustry extends Component
{
    public $selectedIndustries = [], $defaultIndustry, $industries, $user = null, $companyId,$isBooking;
    protected $listeners = ['editRecord' => 'setUser', 'updateCompany','isBooking'];

    public function render()
    {
        return view('livewire.app.common.modals.add-industry');
    }

    public function mount()
    {
        if (request()->customerID) {
            $customer_id = request()->customerID;
        } elseif (session()->get('isCustomer')) {
           
            $customer_id  = Auth::id();
        } else {
            $customer_id = '';
        }
        if ($customer_id) {
            $this->user = User::find($customer_id);
            $this->companyId = $this->user->company_name;
        }
        $this->industries = Industry::where('status', 1)->get();
        if ($this->user)
            $this->setIndustries();
        elseif(!is_null(request()->bookingID))
           $this->setBookingIndustries(request()->bookingID);
    }

    public function setUser(User $user)
    {
        $this->user = $user;
    }
    public function setIndustries()
    {
        $this->selectedIndustries = $this->user->industries()->allRelatedIds()->toArray();
        if (!is_null($this->user->userdetail))
            $this->defaultIndustry = $this->user->userdetail->industry;
    }

    public function setBookingIndustries($bookingID){
        $this->selectedIndustries = BookingIndustry::where('booking_id',$bookingID)->select('industry_id')->get()->pluck('industry_id')->toArray();
    }
    public function isBooking(){
        $this->isBooking=true;
         //checking if customer then need to reset industries
         if(session()->get('isCustomer')){
            $userId=Auth::user()->id;
            $this->industries = Industry::where('status', 1)
             ->whereIn('id', function($query) use ($userId) {
        $userId = Auth::user()->id;
        $query->select('industry_id')
            ->from('user_industries')
            ->where('user_id', $userId);
    })->get();
  
        }
    }
    public function updateCompany($companyId)
    {

        $company = Company::where('id', $companyId)->first();

       

        if ($company->industry_id) {

            if ($this->user == null) { //new record 
                $this->selectedIndustries = [$company->industry_id];
                $this->defaultIndustry = $company->industry_id;
            } else {
                if ($this->user->company_name == $companyId) { //checking if company is changed

                    $this->setIndustries();
                } else {
                    $this->selectedIndustries = [$company->industry_id];
                    $this->defaultIndustry = $company->industry_id;
                }
            }
        }

        $this->updateData();
    }

    // Child Laravel component's updateData function
    public function updateData()
    {
        $industryNames = [];
        foreach ($this->selectedIndustries as $ind) {
            $industryRecord = $this->industries->firstWhere('id', $ind);
            if (!is_null($industryRecord)) {
                $industryNames[] = $industryRecord->name;
            }
        }
        // Emit an event to the parent component with the selected industries and default industry
        $this->emitUp('updateSelectedIndustries', $this->selectedIndustries, $this->defaultIndustry, $industryNames);
    }
}
