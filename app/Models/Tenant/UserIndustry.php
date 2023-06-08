<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserIndustry extends Model
{
    protected $table = 'user_industries';
    protected $primaryKey = ['user_id', 'industry_id'];
    public $incrementing = false;

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function industry()
    // {
    //     return $this->belongsTo(Industry::class);
    // }
}
