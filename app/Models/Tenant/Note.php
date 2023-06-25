<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = [
        'record_id',
        'record_type',
        //1 ->company, 2 -> provider, 3->customer (can add as needed)
        'notes_text',
    ];
}
