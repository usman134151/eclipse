<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = ['phone_title', 'phone_number', 'model_type', 'model_id'];

    /**
     * Get the owning model for this phone.
     */
    public function model()
    {
        return $this->morphTo();
    }
}
