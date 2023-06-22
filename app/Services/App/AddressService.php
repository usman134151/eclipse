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

    public function saveAddresses($model,$type, $addresses)
    {
        foreach ($addresses as $addressData) {
            $addressAttributes = [
                'user_address_type' => $type,
                'user_id' => $model->id,
            ];
    
            UserAddress::updateOrCreate($addressData, $addressAttributes);
        }
    }
    


}
