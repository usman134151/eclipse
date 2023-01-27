<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
### Api Related Changes (Sakhawat Kamran) #######
use Laravel\Sanctum\HasApiTokens;
class User extends Model
{
    use HasFactory;
    use HasApiTokens; ### Api Related Changes (Sakhawat Kamran) #######
   
}
