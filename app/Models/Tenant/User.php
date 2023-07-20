<?php

namespace App\Models\Tenant;

use App\Models\Tenant;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
### Api Related Changes (Sakhawat Kamran) #######
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
	use Notifiable;
	use HasFactory;
	use HasApiTokens; ### Api Related Changes (Sakhawat Kamran) #######
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'first_name','last_name','user_dob', 'email','company_name', 'password','user_dob','status'
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	// public static function booted()
	// {
	// 	static::updating(function (self $user) {
	// 		/* if ($user->isOwner()) {
	// 			// We update the tenant's email when the admin user's email is updated
	// 			// so that the tenant can find his account even after email change.
	// 			Tenant::where('email', $user->getOriginal('email'))
	// 			->update($user->only(['email']));
	// 		} */
	// 	});
	// }

	/**
	 * Is this user the "organization" owner.
	 *
	 * @return bool
	 */
	

	 public function roles()
	 {
		 return $this->belongsToMany(Role::class, 'role_user');
	 }

	public function company()
	{
		return $this->belongsTo(Company::class, 'company_name');
	}
	public function userdetail() : HasOne
	{
		return $this->hasOne(UserDetail::class, 'user_id');
	}	
	public function phones()
	{
		return $this->morphMany(Phone::class, 'model', 'model_type', 'model_id')
					->where('model_type', '=', 'App\Models\Tenant\User');
	}
	public function addresses()
	{
    	return $this->hasMany(UserAddress::class,'user_id');
	}

	public function industries(): BelongsToMany
    {
        return $this->belongsToMany(Industry::class, 'user_industries');
    }

	public function teams() : BelongsToMany
	{
		return $this->belongsToMany(Team::class, 'team_providers','provider_id')->withTimestamps();
	}

	public function admin_teams(): BelongsToMany
	{
		return $this->belongsToMany(AdminTeam::class, 'admin_team_staff', 'admin_staff_id')->withTimestamps();
	}

	public function departments(): BelongsToMany
	{
		return $this->belongsToMany(Department::class, 'user_departments')->withPivot('is_supervisor')->withTimestamps();
	}

	public function notes(): HasMany
	{
		return $this->hasMany(Note::class);
	}

	public function services(): BelongsToMany
	{
		return $this->belongsToMany(ServiceCategory::class, 'provider_accommodation_services', 'user_id','service_id')->withTimestamps();
	}


	public function logs()
	{
		return $this->hasMany(Logs::class, 'action_to')
		->where('item_type', 'user');
	}

	protected static function booted()
	{

		static::created(function ($model) {
			$model->onRecordCreated();
		});


		static::updated(function ($model) {
			$model->onRecordUpdated();
		});
	}

	public function onRecordCreated()
	{
		// Function called after a record is created
		// Implement your custom logic here
		$message = "User created by " . Auth::user()->name;
		$logs = array(
			'action_by' => Auth::user()->id,
			'action_to' => $this->id,
			'item_type' => 'user',
			'message' => $message,
			'type' => 'create',
			'ip_address' => request()->ip(),
			'request_from' => "",
			'request_to' => ""
		);
		Logs::create($logs);

		// dd($this->name);
	}

	public function onRecordUpdated()
	{
		// Function called after a record is updated
		// Implement your custom logic here

		$message = "User updated by " . Auth::user()->name;
		$logs = array(
			'action_by' => Auth::user()->id,
			'action_to' => $this->id,
			'item_type' => 'user',
			'message' => $message,
			'type' => 'update',
			'ip_address' => request()->ip(),
			'request_from' => "",
			'request_to' => ""
		);
		Logs::create($logs);
	}	


}

