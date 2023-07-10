<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Department extends Model
{
	use HasFactory;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'status', 'added_by',
		'favored_providers', 'unfavored_providers', 'industry_id', 'company_id',
		'department_website', 'language_id', 'department_service_start_date', 'department_service_end_date',
		'department_timezone', 'department_logo', 'department_timeformat', 'hide_details','company_phones'
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
    	return $this->hasMany(UserAddress::class,'user_id')->where('user_address_type',3);
	}
	public function users(): BelongsToMany
	{
		return $this->belongsToMany(User::class, 'user_departments')->withPivot('is_supervisor')->withTimestamps();
	}

	public function supervisors(): BelongsToMany
	{
		return $this->belongsToMany(User::class, 'user_departments')->withPivot('is_supervisor')->withTimestamps()
		->where('is_supervisor',true);
	}


	public function company()
	{
		return $this->belongsTo(Company::class, 'company_id');
	}
}
