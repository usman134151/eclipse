<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TriggerType extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name'
    ];
}
