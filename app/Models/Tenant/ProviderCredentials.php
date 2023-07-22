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


    protected static function booted()
    {

        static::created(function ($model) {
            $model->onRecordCreated();
        });


        static::updated(function ($model) {
            $model->onRecordUpdated();
        });
    }



    public function onRecordCreated()
    {
        // Function called after a record is created
        // Implement your custom logic here
        $message = "Credential activated by " . Auth::user()->name;
        $logs = array(
            'action_by' => Auth::user()->id,
            'action_to' => $this->provider_id,
            'item_type' => 'user',
            'message' => $message,
            'type' => 'create',
            'ip_address' => request()->ip(),
            'request_from' => "",
            'request_to' => ""
        );
        Logs::create($logs);

        // dd($this->name);
    }

    public function onRecordUpdated()
    {
        // Function called after a record is updated
        // Implement your custom logic here

        $message = "Credential updated by " . Auth::user()->name;
        $logs = array(
            'action_by' => Auth::user()->id,
            'action_to' => $this->provider_id,
            'item_type' => 'user',
            'message' => $message,
            'type' => 'update',
            'ip_address' => request()->ip(),
            'request_from' => "",
            'request_to' => ""
        );
        Logs::create($logs);
    }	

}
