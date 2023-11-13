<?php

namespace App\Models\Tenant;

use App\Http\Livewire\App\Admin\Customer\ServiceCatelog;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'booking_number', 'user_id', 'frequency_id', 'industry_id', 'accommodation_id', 'service_category', 'physical_address_id', 'physical_end_address_id', 'phone', 'is_additional_override_booking', 'override_booking_duration', 'isCompleted', 'service_type', 'requester_information', 'contact_point', 'poc_phone', 'company_id', 'customer_id', 'supervisor', 'billing_manager_id', 'layout', 'meeting_link', 'meeting_phone', 'meeting_passcode', 'booking_start_at', 'booking_end_at', 'booking_cancelled_at', 'provider_count', 'cancel_provider_payment', 'duration_hours', 'duration_minute', 'payment_type', 'type', 'status', 'booking_status', 'coupon_id', 'coupon_referral_type', 'provider_notes', 'customer_notes', 'private_notes', 'cancellation_notes', 'booking_reschedule_at', 'reschedule_start_at', 'reschedule_end_at', 'reschedule_by', 'reschedule_reason', 'reschedule_type', 'reschedule_until', 'reschedule_status', 'billing_address_id', 'is_completed', 'auto_assign', 'auto_notify', 'booking_notify', 'created_at', 'updated_at', 'referral_code', 'added_by', 'approved_by', 'updated_by', 'invoice_id', 'invoice_status', 'previous_logs', 'cancelled_by', 'parent_id', 'is_recurring', 'recurring_start_at', 'recurring_end_at', 'is_from_quote', 'deleted_at', 'reschedule_from', 'return_review', 'provider_response', 'admin_response', 'tags'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }


    public function services()
    {
        return $this->belongsToMany(ServiceCategory::class, 'booking_services', 'booking_id', 'services')->withPivot(['service_types', 'provider_count', 'start_time', 'end_time', 'time_zone']);
    }
    public function accommodations()
    {
        return $this->belongsToMany(Accommodation::class, 'booking_services', 'booking_id', 'accommodation_id');
    }
    public function industry()
    {
        return $this->belongsTo(Industry::class, 'industry_id');
    }

    public function industries()
    {
        return $this->belongsToMany(Industry::class, 'booking_industries')->withPivot(['industries.name']);
    }



    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function booking_supervisor()
    {
        return $this->belongsTo(User::class, 'supervisor');
    }
    public function billing_manager()
    {
        return $this->belongsTo(User::class, 'billing_manager_id');
    }
    public function payment()
    {
        return $this->hasOne(Payment::class, 'booking_id', 'id');
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class, 'invoice_id', 'id');
    }

    public function payment_cron()
    {
        return $this->hasOne(BookingPaymentCron::class, 'booking_id', 'id');
    }

    public function bookingstatus()
    {
        return $this->belongsTo(Status::class, 'status', 'id');
    }

    public function booking_provider()
    {
        return $this->hasMany(BookingProvider::class, 'booking_id', 'id');
    }

    public function checked_out_providers()
    {
        return $this->hasMany(BookingProvider::class, 'booking_id', 'id')->where('check_in_status', 3);
    }
    public function checked_in_providers()
    {
        return $this->hasMany(BookingProvider::class, 'booking_id', 'id')->where('check_in_status', 1);
    }
    public function booking_services()
    {
        return $this->hasMany(BookingServices::class, 'booking_id', 'id');
    }
    public function closed_booking_services()
    {
        return $this->hasMany(BookingServices::class, 'booking_id', 'id')->where('is_closed',1);
    }

    public function ServiceCategory()
    {
        return $this->hasOne(ServiceCategory::class, 'id', 'service_category');
    }

    public function accommodation()
    {
        return $this->hasOne(Accommodation::class, 'id', 'accommodation_id');
    }



    public function setAdditionalChargeAttribute($value)
    {
        $this->attributes['additional_charge'] = number_format((float)$value, 2, '.', '');
    }

  

    public function providerPayment()
    {
        return $this->hasMany(ProviderPayment::class, 'booking_id', 'id');
    }



    public function booking_services_layout()
    {
        return $this->hasMany(BookingServices::class, 'booking_id', 'id');
    }

    public function booking_services_layout_with_oreder()
    {
        return $this->hasMany(BookingServices::class, 'booking_id', 'id')->orderBy('start_time', 'ASC');
    }

    // business Address
    public function businessAddress()
    {
        return $this->belongsTo(UserAddress::class, 'billing_address_id', 'id');
    }

    public function billingAddress()
    {
        return $this->belongsTo(UserAddress::class, 'billing_address_id', 'id');
    }

    public function booking_services_new_layout()
    {
        return $this->hasMany(BookingServices::class, 'booking_id', 'id');
    }

    public function booking_request_information()
    {
        return $this->hasMany(BookingRequestNotification::class, 'booking_id', 'id');
    }
    public function invitation()
    {
        return $this->hasOne(BookingInvitation::class, 'booking_id', 'id');
    }

    // physical Address
    public function physicalAddress()
    {
        return $this->belongsTo(UserAddress::class, 'physical_address_id', 'id');
    }

    public function documents()
    {
        return $this->hasMany(BookingDocument::class, 'booking_id', 'id');
    }

    public function customize_data()
    {
        return $this->hasMany(BookingCustomizeData::class, 'booking_id', 'id');
    }

    public function getBookingType()
    {
        $serviceTypeArray = array();
        $bookingType = '';

        foreach ($this->booking_services_layout as $bookingservice) {
            $serviceTypeArray[] = $bookingservice->service_types;
        }
        if (in_array(2, $serviceTypeArray)) {
            $bookingType = "Virtual";
        }
        if (in_array(1, $serviceTypeArray)) {
            $bookingType = "In-person";
        }
        if (in_array(4, $serviceTypeArray)) {
            $bookingType = "Phone";
        }
        if (in_array(5, $serviceTypeArray)) {
            $bookingType = "Teleconference";
        }
        if (in_array(1, $serviceTypeArray) && in_array(2, $serviceTypeArray)) {
            $bookingType = "Both";
        }

        return $bookingType;
    }

    // physical Address
    public function getVitualAddress()
    {
        $meetingLinks = [];
        if ($this->layout == 1) {
            $bookingServices = $this->hasMany(BookingServices::class, 'booking_id', 'id')->get();
            foreach ($bookingServices as $key => $service) {
                $meetingLinks[$key]['link'] = $service->meeting_link;
                $meetingLinks[$key]['phone'] = $service->meeting_phone;
                $meetingLinks[$key]['code'] = $service->meeting_passcode;
            }
        } else {
            $bookingServices = $this->hasMany(Booking::class, 'id')->get();
            foreach ($bookingServices as $key => $service) {
                $meetingLinks[$key]['link'] = $service->meeting_link;
                $meetingLinks[$key]['phone'] = $service->meeting_phone;
                $meetingLinks[$key]['code'] = $service->meeting_passcode;
            }
        }
        return $meetingLinks;
    }
    public function isBookingCompleted()
    {
        $bookingStatus = false;
        if ($this->layout == 1) {
            $bookingServices = $this->hasMany(BookingServices::class, 'booking_id', 'id')->get();
            $totalCount = $bookingServices->count();
            $bookingCount = 0;

            foreach ($bookingServices as $service) {
                if ($service->service_types == 1 && $this->physicalAddress) $bookingCount += 1;
                else if ($service->service_types == 2 && ($service->meeting_link || $service->meeting_phone)) $bookingCount += 1;
            }

            if ($totalCount == $bookingCount) $bookingStatus = true;
        } else {
            $bookingServices = $this->hasMany(Booking::class, 'id')->get();
            $totalCount = $bookingServices->count();
            $bookingCount = 0;
            foreach ($bookingServices as $service) {
                if ($service->service_type == 1 && $this->physicalAddress) $bookingCount += 1;
                else if ($service->service_type == 2 && ($service->meeting_link || $service->meeting_phone)) $bookingCount += 1;
            }
            if ($totalCount == $bookingCount) $bookingStatus = true;
        }
        return $bookingStatus;
    }



    public function cancelled()
    {
        return $this->belongsTo(User::class, 'cancelled_by', 'id')->withTrashed();
    }

    public function getInvoicePrice()
    {
        $invoiceTotal = 0;
        $payments =  $this->payment;
        if ($payments) {
            if ($this->status == 4) {
                $invoiceTotal = $payments->cancellation_charges;
            } else {
                if ($payments->is_override)
                    $invoiceTotal = $payments->override_amount + $payments->modification_fee + $payments->reschedule_booking_charges;
                else
                    $invoiceTotal = $payments->total_amount + $payments->modification_fee + $payments->reschedule_booking_charges;
            }
        }
        return $invoiceTotal;
    }


    public function bookingNotificationCheck($userType)
    {

        $defaultNofiy = array([
            "exclude_requester_notification" => false,
            "exclude_service_consumer_notification" => false,
            "exclude_participant_notification" => false,
            "exclude_provider_notification" => false,
            "exclude_admin_notification" => false,
        ]);
        $defaulNotification = json_encode($defaultNofiy);
        $booking_notification = is_null($this->booking_notify) ? json_decode($defaulNotification)[0] : json_decode($this->booking_notify)[0];
        $permission = true;
        switch ($userType) {
            case 'admin':
                $permission = $booking_notification->exclude_admin_notification;
                break;
            case 'consumer':
                $permission = $booking_notification->exclude_requester_notification;
                break;
            case 'participant':
                $permission = $booking_notification->exclude_participant_notification;
                break;
            case 'service_consumer':
                $permission = $booking_notification->exclude_service_consumer_notification;
                break;
            case 'provider':
                $permission = $booking_notification->exclude_provider_notification;
                break;
        }

        return $permission;
    }

    public function bookingDepartments()
    {
        return $this->hasMany(BookingDepartment::class, 'booking_id');
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class, 'booking_departments', 'booking_id', 'department_id');
    }

    public function reimbursements()
    {
        return $this->hasMany(BookingReimbursement::class, 'booking_id', 'id');
    }
}
