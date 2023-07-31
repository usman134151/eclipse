<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemRole extends Model
{
	use HasFactory;

	protected $primaryKey = 'id';

	protected $fillable = [
		'system_role_name',
		'status'
	];
	
	public function sectionRights()
	{
		return $this->hasMany(SectionRight::class);
	}
}
