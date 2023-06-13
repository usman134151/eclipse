<?php
namespace app\Services\App;

use App\Models\Tenant\ServiceCategory;
use App\Models\Tenant\ServiceSpecialization;
use Auth;

class ServiceCatagoryService{

    public function createService($service, $specializationRecords=[]){
       
        $service->save();
       
        if(count($specializationRecords)){
            ServiceSpecialization::where('service_id', $service->id)->delete();
            foreach ($specializationRecords as $record) {
            
             $specialization_id = $record['specialization_id'];
             if($specialization_id>0) {
             // Define the attributes to update or create
             $attributes = [
                'specialization_price' => json_encode([$record['specialization_price']]),
                'specialization_price_v' => json_encode([$record['specialization_price_v']]),
                'specialization_price_p' => json_encode([$record['specialization_price_p']]),
                'specialization_price_t' => json_encode([$record['specialization_price_t']]),
                'specialization_id' => $record['specialization_id'],
                'service_id'=>$service->id,
                'added_by'=>Auth::id()
            ];
          
            // Find the ServiceSpecialization record based on specialization_id and service_id
            // If it exists, update it with the attributes; otherwise, create a new record
            ServiceSpecialization::insert(
                
                $attributes
            );
        }
             }  

        }

        return $service;
    }

    

}
