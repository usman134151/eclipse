<?php

namespace App\Http\Livewire\App\Common\Panels;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingCustomizeData;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingServices;
use App\Models\Tenant\User;
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
        // fetch all services for booking 
        $this->data['booking_services'] = BookingServices::where('booking_id', $this->booking->id)
            ->join('service_categories', 'booking_services.services', 'service_categories.id')
            ->join('accommodations', 'accommodations.id', 'service_categories.accommodations_id')
            ->with('serviceConsumerUser')
            ->get([
                'booking_services.id', 'booking_services.service_types', 'booking_services.attendees',
                'booking_services.service_consumer',
                'booking_services.meeting_link', 'booking_services.meetings',
                'booking_services.attendees', 'booking_services.service_consumer', 'booking_services.specialization', 'booking_services.meeting_phone',
                'booking_services.meeting_passcode', 'booking_services.provider_count', 'booking_services.created_at',
                'booking_services.meeting_link', 'service_categories.name as service_name', 'service_categories.id as service_id',
                'accommodations.name as accommodation_name'
            ])
            ->toArray();
        //fetch participant details
        foreach ($this->data['booking_services'] as $key => $service) {
            if ($service['attendees'])
            $this->data['booking_services'][$key]['participants'] = User::whereIn('id', explode(',', $service['attendees']))->select('name', 'id')->get();

            if ($service['meetings']!=null) {

                $this->data['booking_services'][$key]['meeting_details'] = json_decode($service['meetings'], true)[0];
            }

        }


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
