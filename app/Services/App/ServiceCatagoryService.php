<?php
namespace app\Services\App;

use App\Models\Tenant\ServiceCategory;

class ServiceCatagoryService{

    public function createService($service){
        $service->save();
        return $service;
    }
}
