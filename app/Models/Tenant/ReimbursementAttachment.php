<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReimbursementAttachment extends Model
{
    use HasFactory;
    protected $fillable = [
        'reimbursement_id',
        'attachment_path',
    ];


    public function reimbursement()
    {
        return $this->belongsTo(BookingReimbursement::class, 'reimbursement_id');
    }

}
