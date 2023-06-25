<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credential extends Model
{
    use HasFactory;

    protected $table = 'credentials';
    protected $primaryKey = 'id';
    protected $fillable = ['title','attach_tags','attach_specializations','attach_accommodation_services','deactivate_associated_service','reset_provider_priority','hold_all_assignment_invitations','lenient'];

    public function accommodations()
    {
        return $this->belongsToMany(Accommodation::class, 'accommodations_credentials', 'credential_id', 'accommodation_id');
    }
    
    public function services()
    {
        return $this->belongsToMany(ServiceCategory::class, 'services_credentials', 'credential_id', 'service_id');
    }

    public function documents()
    {
        return $this->hasMany(CredentialDocument::class,'credential_id');
    }
}
