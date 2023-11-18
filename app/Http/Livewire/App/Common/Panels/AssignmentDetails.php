<?php

namespace App\Http\Livewire\App\Common\Panels;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingCustomizeData;
use App\Models\Tenant\BookingInvitationProvider;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingServices;
use App\Models\Tenant\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AssignmentDetails extends Component
{
    public $showForm, $booking, $data = [];
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.assignment-details');
    }

    public function mount($booking_id)
    {
        // dd($booking_id);
        $this->booking = Booking::where('id', $booking_id)->first();
        $this->fetchData();
    }

    function fetchData()
    {
        // show services for which the provider has either been invited or assigned
        $invited = BookingInvitationProvider::where(['booking_invitation_providers.booking_id' => $this->booking->id, 'provider_id' => Auth::id()])
            ->join('booking_invitations', 'invitation_id', 'booking_invitations.id')->select('service_id')->get()->toArray();

        $assigned = BookingProvider::where(['booking_providers.booking_id' => $this->booking->id, 'provider_id' => Auth::id()])
            ->join('booking_services', 'booking_services.id', 'booking_service_id')->select('services')->get()->toArray();

        // fetch all services for booking 
        $this->data['booking_services'] = BookingServices::where('booking_id', $this->booking->id)
            ->whereIn('services', array_merge($invited, $assigned))
            ->join('service_categories', 'booking_services.services', 'service_categories.id')
            ->join('accommodations', 'accommodations.id', 'service_categories.accommodations_id')
            ->with('serviceConsumerUser')
            ->get([
                'booking_services.id', 'booking_services.service_types', 'booking_services.attendees',
                'booking_services.service_consumer', 'booking_services.start_time',
                'booking_services.meeting_link', 'booking_services.meetings',
                'booking_services.attendees', 'booking_services.service_consumer', 'booking_services.specialization', 'booking_services.meeting_phone',
                'booking_services.meeting_passcode', 'booking_services.provider_count', 'booking_services.created_at',
                'booking_services.meeting_link', 'service_categories.name as service_name', 'service_categories.id as service_id',
                'service_categories.check_in_procedure', 'service_categories.close_out_procedure', 'service_categories.running_late_procedure',
                'accommodations.name as accommodation_name'
            ])
            ->toArray();
        //fetch participant details
        foreach ($this->data['booking_services'] as $key => $service) {
            if ($service['attendees'])
                $this->data['booking_services'][$key]['participants'] = User::whereIn('id', explode(',', $service['attendees']))->select('name', 'id')->get();

            if ($service['meetings'] != null) {

                $this->data['booking_services'][$key]['meeting_details'] = json_decode($service['meetings'], true) ? json_decode($service['meetings'], true)[0] : null;
            }
            $this->data['booking_services'][$key]['display_running_late'] = false;
            $this->data['booking_services'][$key]['display_check_in'] = false;

            $val = $service['running_late_procedure'] ? json_decode($service['running_late_procedure'], true) : null;
            if ($val) {
                if (isset($val['enable_button']) && ($val['enable_button']))
                    $this->data['booking_services'][$key]['display_running_late'] = true;
            }
            $val = json_decode($service['check_in_procedure'], true);
            if ($val) {
                if (isset($val['enable_button']) && ($val['enable_button']))
                    $this->data['booking_services'][$key]['display_check_in'] = true;
            }

             $provider = BookingProvider::where(['booking_service_id'=>$service['id'],'provider_id'=>Auth::id()])->first();
            $this->data['booking_services'][$key]['provider'] = $provider ? $provider->toArray() : null;
            }
        $this->data['assigned'] = $assigned;
        $this->data['isToday'] = Carbon::parse($service['start_time'])->isToday();
        $this->data['isPast'] =  Carbon::parse($service['start_time']) <= Carbon::today() ? true : false; 
        $this->data['providerStatus']  = BookingProvider::where(['provider_id'=>Auth::id(), 'booking_service_id'=>$service['id']])->select('return_status')->first();
        $this->data['serviceFormDetails'] = BookingCustomizeData::where("booking_id", $this->booking->id)
            ->join('customize_form_fields', 'booking_customize_data.customize_id', '=', 'customize_form_fields.id')
            ->whereNotNull('customize_form_fields.field_name')
            ->get(['customize_form_fields.field_name', 'booking_customize_data.data_value'])->toArray();
    }

    protected $rules = [
        'booking.provider_notes' => 'nullable|string',
    ];


    public function updateNotes()
    {

        $this->validate();
        $this->booking->save();
        $this->emit('showConfirmation', 'Booking notes updated');
    }

    function showForm()
    {
        $this->showForm = true;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }
}
