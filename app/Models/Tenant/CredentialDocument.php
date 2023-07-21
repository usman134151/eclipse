<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CredentialDocument extends Model
{
    use HasFactory;

    protected $table = 'credential_documents';
    protected $primaryKey = 'id';

    protected $fillable = ['document_type_radio', 'expiration_within_price', 'upload_file', 'credential_id'];

    public function credential(): BelongsTo
    {
        return $this->belongsTo(Credential::class);
    }
}
