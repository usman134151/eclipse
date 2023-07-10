<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    use HasFactory;
    protected $fillable = [
        'record_id',
        'record_type',
        //1 ->company, 2 -> provider, 3->customer , 4-departments (can add as needed)
        'notes_text',
        'user_id'
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

}
