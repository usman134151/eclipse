<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Company extends Model
{
	use HasFactory;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'status', 'added_by','favored_providers', 'unfavored_providers'
	];

	public function user()
	{
		return $this->hasMany(User::class,'company_name');
	}

	public function requesters()
	{
		return $this->hasMany(User::class, 'company_name')
		->whereHas('roles', function ($query)  {
			$query->where('role_id', 6);
		});
	}

	public function departments()
	{
		return $this->hasMany(Department::class, 'company_id');
	}
	
	public function phones()
	{
		return $this->morphMany(Phone::class, 'model', 'model_type', 'model_id')
					->where('model_type', '=', 'App\Models\Tenant\Company');
	}
	public function addresses()
	{
    	return $this->hasMany(UserAddress::class,'user_id')->where('user_address_type',2);
	}
	public function associateServices()
    {
        return $this->hasMany(AssociateService::class, 'model_id')
            ->where('model_type', 1);
    }

	public function logs()
	{
		return $this->hasMany(Logs::class, 'action_to')
		->where('item_type', 'company');
	}


}
