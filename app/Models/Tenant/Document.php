<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    /**
     *  The attributes that should be name of table.
     *  @var string
     */
    
    protected $table = 'upload_documents';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'document_title' , 'document_name' , 'expiration_date' , 'document_type' , 'status' , 'added_by' ,
    ];
}
