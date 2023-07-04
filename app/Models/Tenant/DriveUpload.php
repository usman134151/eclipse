<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriveUpload extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'record_type',         //1 ->company, 2 -> provider, 3->customer , 4-departments (can add as needed)

        'note','document_title','document_path',
        'expiration_date','added_by','document_type'
    ];
}
