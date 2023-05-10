<div class="col-lg-6 pe-lg-5">
    <h2>Default {{ $type }} Address</h2>
    <button type="button" class="btn btn-primary btn-has-icon rounded mb-4"  data-bs-target="#addAddressModal" wire:click="$emit('updateAddressType', {{ $type }})">
        <svg aria-label="Add Address" width="20" height="20" viewBox="0 0 20 20">
            <use xlink:href="/css/common-icons.svg#plus"></use>
        </svg>
        <span>Add Address</span>
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
                <td>
                    <p>
                       {{ $address['address_line1'].' '.$address['city'].' '.$address['country'].'('.$address['address_name'].')' }}
                    </p>
                </td>
                <td class="align-middle">
                    <svg class="d-none js-tick" width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
</div>
