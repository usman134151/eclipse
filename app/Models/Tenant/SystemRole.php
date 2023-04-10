<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemRole extends Model
{
	use HasFactory;

	protected $primaryKey = 'system_role_id';

	protected $fillable = [
		'system_role_name',
		'status'
	];
}
