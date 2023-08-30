<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingInvitation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'booking_id' , 'deleted_at'
    ];
    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id', 'id');
    }

    public function invitation_providers()
    {
        return $this->hasMany(BookingInvitationProvider::class, 'invitation_id', 'id');
    }

    public function invitation_responses()
    {
        return $this->hasMany(BookingInvitationProvider::class, 'invitation_id', 'id')->where('booking_invitation_providers.status','>',0);
    }
}
