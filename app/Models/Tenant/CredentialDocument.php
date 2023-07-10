<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CredentialDocument extends Model
{
    use HasFactory;

    protected $table = 'credential_documents';
    protected $primaryKey = 'id';

    protected $fillable = ['document_type_radio', 'expiration_within_price', 'upload_file', 'credential_id'];
}
