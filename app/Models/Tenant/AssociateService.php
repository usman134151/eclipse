<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssociateService extends Model
{
    use HasFactory;
    protected $table = 'associate_services';

    protected $fillable = [
        'service_id',
        'model_id',
        'model_type',
        'custom_prices',
        'status',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class, 'model_id')
            ->where('model_type', 1);
    }
}
