<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriveUpload extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'record_type', //1 ->company, 2 -> customer, 3->department (can add as needed)
        'note','document_title','document_path',
        'expiration_data','added_by'
    ];
}
