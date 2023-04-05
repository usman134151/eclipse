<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tenant\User;
use App\Models\Tenant\Navigator;

class UserNavigation extends Model
{
    protected $table = 'user_navigator';
    protected $fillable = [
        'user_id',
        'navigator_id',
        'position',
    ];
            
    public function user(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
    public function navigator(){
        return $this->belongsTo(Navigator::class, 'navigator_id','id');
    } 
}
