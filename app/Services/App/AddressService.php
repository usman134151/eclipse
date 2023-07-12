<?php
namespace app\Services\App;


use App\Models\Tenant\UserAddress;

class AddressService{

    public static function deleteAddress($addressId){
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

    public function saveAddresses($model_id,$model_type, $addresses)
    {
        //model_type (1 => customers 2 => company 3 => departments)

        foreach ($addresses as $addressData) {
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
    


}
