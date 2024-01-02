<div class="col-lg-6 pe-lg-5">
    
    <h2>@if ($type==1) Service @else Billing @endif Address</h2>
    <button type="button" class="btn btn-primary btn-has-icon rounded mb-4"  data-bs-target="#addAddressModal" wire:click="$emit('updateAddressType', {{ $type }})">
        <svg aria-label="Add Address" width="20" height="20" viewBox="0 0 20 20">
            <use xlink:href="/css/common-icons.svg#plus"></use>
        </svg>
        <span>Add @if($type==1) Service @else Billing @endif Address</span>
    </button>
    <div class="mb-3">
        <label for="addressFilter" class="form-label">Search by Address:</label>
        <input type="text" class="form-control" id="addressFilter" placeholder="Enter address..." >
    </div>
    
    <table class="table table-hover border">
        <thead>
            <th>#</th>
            <th>Address</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($userAddresses as $address)
                @if($address['address_type']==$type)
                    @if(!isset($booking))    
                        <tr class="odd js-selected-row">
                    @else
                        @if($booking->physical_address_id==$address['id'])
                        <tr class="odd js-selected-row selected" onclick="highlightRow($(this))" wire:click="setBookingAddress({{$address['id']}})">
                        @else
                        <tr class="odd js-selected-row" onclick="highlightRow($(this))" wire:click="setBookingAddress({{$address['id']}})">
                        @endif
                    @endif
                            <td>{{ $loop->index+1 }}</td>
                        
                                <td class="position-relative"  >
                        
                                <div class="d-flex">
                                    <p class="align-content-start">
                                    @if(!isset($booking))     
                                    <a target="_blank" href="https://www.google.com/maps/search/?api=1&query={{ str_replace(" ","+",$address['address_line1'].' '.$address['address_line2'].' '.$address['city'].' '.$address['state'].' '.$address['country']) }}">
                                    @endif    
                                    {{$address['address_name']}}:  {{ $address['address_line1'].', '.$address['address_line2'].','.$address['city'].', '.$address['state'].', '.$address['country'] }}
                                    @if(!isset($booking)) 
                                    </a>
                                    @endif
                                        </p>
                                    @if(!isset($booking))    
                                    <div class="align-center align-content-end">
                                        <button  type="button"  wire:click.prevent="editAddress({{ $loop->index }},{{$type}})" title='Edit Address' aria-label='Edit Address'  class='btn btn-sm btn-secondary rounded btn-hs-icon position-absolute top-0 end-0' style="top:10px !important;right: 15px !important;" name="editIcon">
                                            <svg aria-label='Edit' class='fill' width='20' height='28' viewBox='0 0 20 28'fill='none' xmlns='http://www.w3.org/2000/svg'>       
                                                <use xlink:href='/css/sprite.svg#edit-icon'></use>
                                            </svg>
                                        </button>
                                        <a href="#" title="Delete" aria-label="Delete" wire:click.prevent="deleteAddress({{ $loop->index }})" class="btn btn-sm btn-secondary rounded btn-hs-icon position-absolute top-0 end-0"  style="top:10px !important;right: -15px !important;" name="deleteIcon" onclick="$(this).parent().slideUp();">
                                            <svg aria-label="Delete" class="delete-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                            </svg>
                                        </a>
                                    </div>
                                    @endif
                                </div>
                                                                    
                                
                            
                            </td>
                            <td class="align-middle">
                            @if(isset($booking))    
                                @if($booking->physical_address_id==$address['id'])
                                <span >
                                <svg class="js-tick" width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                </span> 
                                @else
                                <span >
                                <svg class="js-tick d-none " width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                </span> 
                                @endif
                            @endif    
                            </td>
                    </tr>
            @endif
            @endforeach
        </tbody>
    </table>
    
<script>
    function filterTable(searchTerm) {
        const tableRows = document.querySelectorAll('.table tbody tr');
        const searchRegex = new RegExp(searchTerm.trim(), 'i');
        tableRows.forEach(row => {
            const addressColumn = row.querySelector('td:nth-child(2)'); // Assuming address is in the second column
            if (searchRegex.test(addressColumn.textContent)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    document.getElementById('addressFilter').addEventListener('keyup', function() {
        filterTable(this.value);
    });
</script>
</div>
