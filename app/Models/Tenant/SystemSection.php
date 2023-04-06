<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemSection extends Model
{
	use HasFactory;

	protected $fillable = [
		'section_name',
		'parent_id'
	];

	public function childSection()
	{
		return $this->hasMany(SystemSection::class, 'parent_id');
	}

	public function parentSection()
	{
		return $this->belongsTo(SystemSection::class, 'parent_id');
	}
}
