<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionRight extends Model
{
	use HasFactory;

	protected $fillable = [
		'system_role_id',
		'section_id',
		'right_id'
	];

	public function systemRole()
	{
		return $this->belongsTo(SystemRole::class, 'system_role_id', 'id');
	}
}
