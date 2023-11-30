<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingChMessage extends Model
{
    use HasFactory;

    protected $table = 'booking_ch_message';

    protected $fillable = [
        'booking_id',
        'ch_message_id',
    ];
}
