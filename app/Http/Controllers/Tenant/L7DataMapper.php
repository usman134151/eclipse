<?php
// app/L7DataMapper.php

namespace App\Http\Controllers\Tenant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class L7DataMapper
{
    public static function convertData()
    {
        $recordsToUpdate = \DB::table('booking_services') ->whereIn('booking_id', function ($query) {
            $query->select('booking_id')
                ->from('booking_providers');
        })->get();
        $updatedRecords=[];
        foreach($recordsToUpdate as $record){
            $serviceId=(int)$record->services;
            $query=\DB::table('booking_providers')
            ->where('booking_id', $record->booking_id)
            ->update(['booking_service_id' => $record->id]);
            $updatedRecords[]=['booking'=>$record->booking_id,"updated"=>$query,'service'=>$serviceId];
           
        }
dd($updatedRecords);
        return "updated";
        $recordsToUpdate = \DB::table('booking_reimbursements')
        ->get();
      
    foreach ($recordsToUpdate as $record) {
        // Convert the 'provider_response' from text to JSON

           $jsonResponse=json_encode(['type'=>'other','details'=>$record->reason]);
        // Update the record with the JSON response
        \DB::table('booking_reimbursements')
            ->where('id', $record->id)
            ->update(['reason' => $jsonResponse]);
    }
        return;
        // Get all records from the 'booking_providers' table
        $recordsToUpdate = \DB::table('booking_providers')
        ->get();
      
    foreach ($recordsToUpdate as $record) {
        // Convert the 'provider_response' from text to JSON

           $jsonResponse='[]';
        // Update the record with the JSON response
        \DB::table('booking_providers')
            ->where('id', $record->id)
            ->update(['provider_response' => $jsonResponse]);
    }

    $userDetails = DB::table('user_details')->get();

    foreach ($userDetails as $userDetail) {
        $parsedTags = json_decode($userDetail->tags);
        // Modify $parsedTags as needed
        DB::table('user_details')->where('id', $userDetail->id)->update(['tags' => json_encode($parsedTags)]);
    }

    $companies = DB::table('companies')->get();

    foreach ($companies as $company) {
        $parsedTags = json_decode($company->tags);
        // Modify $parsedTags as needed
        DB::table('companies')->where('id', $company->id)->update(['tags' => json_encode($parsedTags)]);
    }

        return 'Data conversion completed.';
    }
}

?>