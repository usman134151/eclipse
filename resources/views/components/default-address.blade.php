<div class="col-lg-6 pe-lg-5">
    
    <h2>@if ($type==1) Service @else Billing @endif Address</h2>
    <button type="button" class="btn btn-primary btn-has-icon rounded mb-4"  data-bs-target="#addAddressModal" wire:click="$emit('updateAddressType', {{ $type }})">
        <svg aria-label="Add Address" width="20" height="20" viewBox="0 0 20 20">
            <use xlink:href="/css/common-icons.svg#plus"></use>
        </svg>
        <span>Add @if($type==1) Service @else Billing @endif Address</span>
    </button>
    <table class="table table-hover border">
        <thead>
            <th>#</th>
            <th>Address</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($userAddresses as $address)
                @if($address['address_type']==$type)
            <tr class="odd js-selected-row">
                <td>{{ $loop->index+1 }}</td>
                <td class="position-relative ">
                    <div class="d-flex">
                        <p class="align-content-start">
                        {{$address['address_name']}}:  {{ $address['address_line1'].', '.$address['city'].', '.$address['state'].', '.$address['country'] }}
                            </p>
                        <div class="align-content-end">
                            <button  type="button"  wire:click.prevent="editAddress({{ $loop->index }},{{$type}})" title='Edit Address' aria-label='Edit Address'  class='btn btn-sm btn-secondary rounded btn-hs-icon position-absolute top-0 end-0' style="top:15px !important;right: 15px !important;" name="editIcon">
                                <svg aria-label='Edit' class='fill' width='20' height='28' viewBox='0 0 20 28'fill='none' xmlns='http://www.w3.org/2000/svg'>       
                                    <use xlink:href='/css/sprite.svg#edit-icon'></use>
                                </svg>
                            </button>
                            <a href="#" title="Delete" aria-label="Delete" wire:click.prevent="deleteAddress({{ $loop->index }})" class="btn btn-sm btn-secondary rounded btn-hs-icon position-absolute top-0 end-0"  style="top:15px !important;right: -15px !important;" name="deleteIcon" onclick="$(this).parent().slideUp();">
                                <svg aria-label="Delete" class="delete-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                                                          
                     
                
                </td>
                <td class="align-middle">
                    <span >
                    <svg class="d-none js-tick" width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    </span>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
</div>
