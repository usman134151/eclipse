<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackRating extends Model
{
    use HasFactory;
    protected $fillable = [
        'feedback_to',
        'feedback_from',
        'rating', 'comments', 'booking_service_id',
    ];

    public function to()
    {
        return $this->hasOne(User::class, 'id', 'feedback_to');
    }


    public function from()
    {
        return $this->hasOne(User::class, 'id', 'feedback_from');
    }
}
