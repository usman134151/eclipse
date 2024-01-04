<?php

namespace App\Http\Livewire\App\Common\Lists;

use Livewire\Component;
use App\Models\Tenant\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class RemittanceGenerator extends Component
{
    public $providers;
    protected $listeners = ['refreshProviders']; 

    public function render()
    {
        return view('livewire.app.common.lists.remittance-generator');
    }

    public function mount()
    {
       $this->refreshProviders();  
      
       
    }

    public function refreshProviders(){
        $this->providers = User::where('users.status', 1)
        ->whereHas('roles', function ($query) {
            $query->where('role_id', 2);
        })
        ->leftJoin('booking_providers', function ($q) {
            $q->on('booking_providers.provider_id', '=', 'users.id');
            $q->whereIn('booking_id', function ($sub) {
                $sub->from('bookings')->where(['is_closed' => 1, 'is_paid' => 0])
                    ->whereRaw("DATE(booking_end_at) < '" . Carbon::now()->toDateString() . "'")
                    ->select('id');
            });
            $q->where('booking_providers.remittance_id',0);
        })
        ->leftJoin('booking_reimbursements', function ($join) {
            $join->on('booking_reimbursements.provider_id', '=', 'users.id')
                 ->where('booking_reimbursements.remittance_id', '=', 0);
        })
       
        ->leftJoin('payment_preferences', 'payment_preferences.provider_id', '=', 'users.id')
        ->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
       
        
        ->groupBy('users.id', 'users.name', 'user_details.profile_pic', 'payment_preferences.method')
        ->select('users.id', 'users.name', 'user_details.profile_pic', 'payment_preferences.method')
        ->selectRaw('
            COUNT(DISTINCT booking_providers.id) AS pending_bookings_from_providers,
            SUM(
                CASE
                    WHEN booking_providers.is_override_price = 1 THEN override_price
                    ELSE booking_providers.total_amount 
                END
            ) AS pending_total_from_providers,
            COUNT(DISTINCT booking_reimbursements.id) AS pending_bookings_from_reimbursements,
            SUM(booking_reimbursements.amount) AS total_amount_from_reimbursements
        ')
        ->havingRaw('
            pending_bookings_from_providers > 0 OR
            pending_bookings_from_reimbursements > 0
        ')->get();
    }



}
