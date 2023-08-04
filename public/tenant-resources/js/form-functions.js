jQuery(document).ready(function() {
    // Variables to store the selected places
    var billingPlace;
   

    var billingAutocomplete = new google.maps.places.Autocomplete(document.getElementById('billing_address'));
    var formAddressAutocomplete = new google.maps.places.Autocomplete(document.getElementById('billing_address_form'));


    google.maps.event.addListener(billingAutocomplete, 'place_changed', function() {
      billingPlace = billingAutocomplete.getPlace();
      fillBillingAddressFields();
    });

      google.maps.event.addListener(formAddressAutocomplete, 'place_changed', function() {
              billingPlace = formAddressAutocomplete.getPlace();
              fillFormAddressFields();
          });

      function updateAddress(attrName,val){
          Livewire.emit('updateAddressValues', attrName, val);
      }


    function fillBillingAddressFields() {
      //emit changes to livewire address component
      updateAddress("address_line1",  billingPlace.name || '');
      updateAddress("city",  getAddressComponent(billingPlace, 'locality') || '');
      updateAddress("state",  getAddressComponent(billingPlace, 'administrative_area_level_1') || '');
      updateAddress("country",  getAddressComponent(billingPlace, 'country') || '');
      updateAddress("zip",  getAddressComponent(billingPlace, 'postal_code') || '');
    }
  
    function fillFormAddressFields() {
      //emit changes to livewire address component

      updateVal("address_line1", (billingPlace.name || ''));
      updateVal("city",  getAddressComponent(billingPlace, 'locality') || '');
      updateVal("state",  getAddressComponent(billingPlace, 'administrative_area_level_1') || '');
      updateVal("country",  getAddressComponent(billingPlace, 'country') || '');
      updateVal("zip",  getAddressComponent(billingPlace, 'postal_code') || '');
    }

    function getAddressComponent(place, component) {
      for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (addressType === component) {
          return place.address_components[i].long_name;
        }
      }
      return '';
    }
  });
