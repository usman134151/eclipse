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
}
