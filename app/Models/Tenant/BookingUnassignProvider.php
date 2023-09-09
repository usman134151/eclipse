<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingUnassignProvider extends Model
{
    use HasFactory;
    protected $fillable = [
        'booking_id', 'provider_id',  'booking_service_id', 'unassign_reason',
        'unassign_date'
    ];
}
