<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	use HasFactory;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'status', 'added_by'
	];

	public function user()
	{
		return $this->hasMany(User::class);
	}

	public function phones()
	{
		return $this->morphMany(Phone::class, 'model', 'model_type', 'model_id')
					->where('model_type', '=', 'App\Models\Tenant\Department');
	}
	public function addresses()
	{
    	return $this->hasMany(UserAddress::class,'user_id');
	}

}
