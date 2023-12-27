<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ServiceCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $grauded = [
       
    ];

    public function specializations()
    {
        return $this->belongsToMany(Specialization::class, 'service_specializations', 'service_id', 'specialization_id')->withPivot('specialization_price', 'specialization_price_v','specialization_price_t','specialization_price_p'); ;
    }

    public function accommodation()
    {
        return $this->belongsTo(Accommodation::class, 'accommodations_id');
    }

    public function credentials()
    {
        return $this->belongsToMany(Credential::class, 'services_credentials', 'service_id', 'credential_id');
    }


    public function setSpecialization($index, $value)
    {
        $specializations = $this->specialization;

        if (!is_array($specializations)) {
            $specializations = [];
        }

        $specializations[$index] = $value;

        $this->specialization = $specializations;
    }

    public function teams(): BelongsToMany
    {
        return $this->belongsToMany(Team::class, 'team_services')->withTimestamps();
    }

    public function booking()
    {
        return $this->belongsToMany(
            Booking::class,
            'booking_services',
            'services',
            'booking_id'
        );
    }
}
