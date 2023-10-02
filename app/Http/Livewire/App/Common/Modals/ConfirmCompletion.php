<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingServices;
use App\Models\Tenant\FeedbackRating;
use App\Services\App\UploadFileService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class ConfirmCompletion extends Component
{
    use WithFileUploads;
    public $showForm, $booking_service, $service_details = [], $upload_signature, $status, $notes, $providers = [], $feedback = [];
    protected $listeners = ['showList' => 'resetForm', 'openConfirmCompletionModal' => 'setBookingId'];

    public function setBookingId($booking_service_id)
    {
        $this->booking_service = BookingServices::find($booking_service_id);
        $this->service_details = json_decode($this->booking_service->service->close_out_procedure, true);  //getting service's close-out-procedure
        $this->providers = BookingProvider::where('booking_service_id', $booking_service_id)->join('users', 'users.id', 'provider_id')->join('user_details', 'users.id', 'user_details.user_id')
            ->select(['booking_providers.*', 'users.name', 'users.email', 'profile_pic'])->get();
        foreach ($this->providers as $provider) {
            $this->feedback[$provider->provider_id]['rating'] = 0;
            $this->feedback[$provider->provider_id]['feedback_comments'] = null;
        };
        $this->upload_signature = null;
        $this->status = null;
        $this->notes = null;

        // dd($this->providers->first());
    }
    public function render()
    {
        return view('livewire.app.common.modals.confirm-completion');
    }

    public function setRating($provider_id, $rating)
    {
        $this->feedback[$provider_id]['rating'] = $rating;
    }
    public function rules()
    {
        return  [
            'upload_signature' => 'nullable|file|mimes:png,jpg,jpeg,gif,bmp,svg,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,rtf,zip,rar,tar.gz,tgz,tar.bz2,tbz2,7z,mp3,wav,aac,flac,wma,mp4,avi,mov,wmv,mkv,csv',
        ];
    }


    public function save()
    {
       
        $this->validate();
        foreach ($this->providers as $provider) {
            $checkout =$provider->check_out_procedure_values ?? [];
            if ($this->upload_signature) {
                $fileService = new UploadFileService();
                $checkout['customer_signature'] = $fileService->saveFile('bookings/' . $this->booking_service->booking_id, $this->upload_signature, null, $this->booking_service->id . '_' . time() . '_checkout_customer_signature');
            }
            $checkout['customer_rating'] = $this->feedback[$provider->provider_id]['rating'];
            $checkout['customer_feedback_comments'] = $this->feedback[$provider->provider_id]['feedback_comments'];
            $checkout['customer_actual_end_date'] = Carbon::today()->format('m/d/Y');
            $checkout['customer_actual_end_hour'] = Carbon::today()->format('H');
            $checkout['customer_actual_end_min'] = Carbon::today()->format('i');
            $checkout['customer_actual_end_timestamp'] = Carbon::today()->format('i');
            $checkout['customer_entry_notes'] = $this->notes;
            $checkout['customer_checkout_status'] = $this->status;
            $checkout['customer_close_out_by'] = Auth::id();

            $provider->check_out_procedure_values = $checkout;
            $provider->check_in_status = 3;
            $provider->return_status = 1;


            $provider->save();


            FeedbackRating::updateOrCreate([
                'feedback_to' => $provider->provider_id,
                'feedback_from' => Auth::id(),
                'booking_service_id' => $this->booking_service->id
            ], [
                'rating' => $this->feedback[$provider->provider_id]['rating'],
                'comments' => $this->feedback[$provider->provider_id]['feedback_comments'],
            ]);
        }
       
        
            Booking::where('id',$this->booking_service->booking_id)->update(['is_closed' => true]);

        $this->emit('closeConfirmCompletionModal');
        $this->emit('showConfirmation','Booking service has been successfully closed!');
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
