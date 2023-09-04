<?php

namespace app\Services\App;


use App\Models\Tenant\UserAddress;
use Exception;
use GuzzleHttp\Client;

class AddressService
{

    public static function deleteAddress($addressId)
    {
        // Retrieve the UserAddress instance from the database using the $addressId
        $userAddress = UserAddress::find($addressId);

        //dd($addressId);

        // Check if the UserAddress exists
        if ($userAddress) {
            // Delete the UserAddress
            $userAddress->delete();

            // Return a success message or any other desired response
            return 'Address deleted successfully.';
        }

        // If the UserAddress doesn't exist, return an error message or handle the scenario accordingly
        return 'Address not found.';
    }

    public function saveAddresses($model_id, $model_type, $addresses)
    {
        //model_type (1 => customers 2 => company 3 => departments)

        foreach ($addresses as $addressData) {
            $address =  $addressData['address_line1'] . ', ' . $addressData['address_line2'] . ',' . $addressData['city'] . ', ' . $addressData['state'] . ', ' . $addressData['country'];
            $data = $this->getGeocode($address);
            if (count($data)) {
                $addressData['latitude'] = $data['lat'];
                $addressData['longitude'] = $data['lng'];
            }
            if (isset($addressData['id'])) { //update existing
                $id = $addressData['id'];
                unset($addressData['id']);
                UserAddress::find($id)->update($addressData);
            } else {
                $addressData['user_address_type'] = $model_type;
                $addressData['user_id'] = $model_id;

                UserAddress::create($addressData);
            }
        }
    }

    //returns lat and lng for provided address using google api
    public function getGeocode($address)
    {
        $data = [];
        //Converts address into Lat and Lng
        $client = new Client(); //GuzzleHttp\Client
        try {
            $result = (string) $client->post(
                "https://maps.googleapis.com/maps/api/geocode/json?address=" . urlencode($address) . "&key=AIzaSyAANwmAq3UQc8j5GkJgzF9AglzF7XLfPxI"
            )->getBody();
            $json = json_decode($result);
            if ($json->status == 'OK') {
                $data['lat'] = $json->results[0]->geometry->location->lat;
                $data['lng'] = $json->results[0]->geometry->location->lng;
            }
        } catch (Exception $e) {
            return $data;

            // echo 'Uh oh! ' . $e->getMessage();
        }
        return $data;
    }
}
