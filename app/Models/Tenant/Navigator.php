<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navigator extends Model
{
    use HasFactory;
    protected $table = 'navigators';
    protected $fillable = [
        'navigator_label',
        'navigator_icon',
        'navigator_link',
    ];
}

