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
    	return $this->hasMany(UserAddress::class,'user_id');
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
		$message = "Company created by " . Auth::user()->name;
		$logs = array(
			'action_by' => Auth::user()->id,
			'action_to' => $this->id,
			'item_type' => 'company',
			'message' => $message,
			'type' => 'create',
			'ip_address'=> request()->ip(),
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

		$message = "Company updated by " . Auth::user()->name;
		$logs = array(
			'action_by' => Auth::user()->id,
			'action_to' => $this->id,
			'item_type' => 'company',
			'message' => $message,
			'type' => 'update',
			'ip_address' => request()->ip(),
			'request_from' => "",
			'request_to' => ""
		);
		Logs::create($logs);
	}	
}
