<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\FeedbackRating;
use Livewire\Component;

class ReviewFeedback extends Component
{
    public $showForm, $feedback = [];
    protected $listeners = ['showList' => 'resetForm', 'openFeedBackModal' => 'loadFeedback', 'openAllFeedBackModal'];

    public function render()
    {
        return view('livewire.app.common.modals.review-feedback');
    }


    public function  loadFeedback($booking_service_id, $provider_id)
    {
        $this->feedback = FeedbackRating::where([
            'feedback_from' => $provider_id,
            'booking_service_id' => $booking_service_id
        ])->with(['to', 'from'])->get()->toArray();
    }
    public function openAllFeedBackModal($booking_id)
    {

        $this->feedback = FeedbackRating::whereIn(
            'booking_service_id',function ($q) use ($booking_id) {
                $q->from('booking_services')
                    ->select('id')
                    ->where('booking_id', $booking_id);
            }
        )->with(['to', 'from'])->get()->toArray();
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
