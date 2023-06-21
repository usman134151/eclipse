<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessPolicy extends Model
{
    use HasFactory;

    protected $fillable = [
       'title','file','url','customer_drive', 'cd_show_policy_customer','provider_drive', 'pd_show_policy_customer'
    ];
}
