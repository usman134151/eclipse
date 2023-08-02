<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ProviderCredentials extends Model
{
    use HasFactory;
    protected $fillable = [
        'provider_id', 'credential_document_id', 'acknowledged',
        'file_path', 'expiry_date', 'expiry_status'
    ];



}
