<?php

namespace Database\Seeders;

use App\Models\Tenant\UserAddress;
use App\Services\App\AddressService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LatLngForExisitngAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        $addresses = UserAddress::all();
        $service = new AddressService;
        foreach($addresses as $address){
            $addressline =  $address['address_line1'] . ', ' . $address['address_line2'] . ',' . $address['city'] . ', ' . $address['state'] . ', ' . $address['country'];
            $data = $service->getGeocode($addressline);
            if (count($data)) {
                $address->latitude = $data['lat'];
                $address->longitude = $data['lng'];
            }
            $address->save();
        }
    }
}
