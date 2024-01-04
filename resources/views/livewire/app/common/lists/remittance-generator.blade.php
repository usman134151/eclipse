<div>
<div class="table-responsive col-md-12" style="margin: 10px 0 10px;">
<table class="table power-grid-table table-hover" style="">
        <thead class="" style="">
                <tr class="" style="">


            
                            <th class=" " wire:key="99a7e5a918d142f5873006af094a301a" style="; width: max-content;  white-space: nowrap;min-width: 50px;padding-left: 15px;font-size: 0.75rem;color: #6b6a6a;padding-top: 8px;padding-bottom: 8px; ">
    <div class="">
                <span>Provider</span>
    </div>
</th>
                            <th class=" " wire:key="06fc06ceaaa28e971e92604dc123cfbe" style="; width: max-content;  white-space: nowrap;min-width: 50px;padding-left: 15px;font-size: 0.75rem;color: #6b6a6a;padding-top: 8px;padding-bottom: 8px; ">
    <div class="">
                <span>Total Amount</span>
    </div>
</th>
                            <th class=" " wire:key="72fbca7380f766677d5ecc7e3ec10e48" style="; width: max-content;  white-space: nowrap;min-width: 50px;padding-left: 15px;font-size: 0.75rem;color: #6b6a6a;padding-top: 8px;padding-bottom: 8px; ">
    <div class="">
                <span>Total Bookings</span>
    </div>
</th>
                            <th class=" " wire:key="ea9f6aca279138c58f705c8d4cb4b8ce" style="; width: max-content;  white-space: nowrap;min-width: 50px;padding-left: 15px;font-size: 0.75rem;color: #6b6a6a;padding-top: 8px;padding-bottom: 8px; ">
    <div class="">
                <span>PREFERRED PAYMENT METHOD</span>
    </div>
</th>
                            <th style="; width: max-content;  white-space: nowrap;min-width: 50px;padding-left: 15px;font-size: 0.75rem;color: #6b6a6a;padding-top: 8px;padding-bottom: 8px; ">
    <div class="">
                <span><svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M5.875 1L10.75 7.5L5.875 14" stroke="white" stroke-width="1.625" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M1 1L5.875 7.5L1 14" stroke="white" stroke-width="1.625" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg></span>
    </div>
</th>
            
                    </tr>
        </thead>
        <tbody class="" style="">

    @foreach($providers as $modal)
                    
                            
                                    <tr style="">
                        

                            
                        <td class="  text-wrap" style="; vertical-align: middle; line-height: normal;white-space: nowrap; ">
                    <span class="">
                   @php $logo = $modal->profile_pic != null ? $modal->profile_pic : '/tenant-resources/images/portrait/small/avatar-s-20.jpg'; @endphp
                <div class="d-flex gap-2 align-items-center">
							<div>
								<img width="50" height="50" src="' . $logo . '" class="rounded-circle" alt="User Profile Image">
							</div>
							<div class="pt-2">
								<div class="font-family-secondary leading-none">
								<a @click="remittanceGeneratorBooking = true"  wire:click="$emit(\'openRemittanceGeneratorPanel\',\'' . {{$modal->id}} . '\')" title="' . {{$modal->name}} . '" aria-label="Booking" class="btn btn-hs-icon p-0">
								{{$modal->name}}
								</a>
								</div>
							</div>
						</div>
                                </span>
            </td>
        <td class="  text-wrap" style="; vertical-align: middle; line-height: normal;white-space: nowrap; ">
                    <span class="">
                    <div>
                        {{numberFormat($modal->pending_total_from_providers+$modal->total_amount_from_reimbursements)}}
                    </div>
                                </span>
            </td>
        <td class="  text-wrap" style="; vertical-align: middle; line-height: normal;white-space: nowrap; ">
                    <span class="">
                    <div>
                        {{$modal->pending_bookings_from_providers+$modal->pending_bookings_from_reimbursements}}
                    </div>
                                </span>
            </td>
        <td class="  text-wrap" style="; vertical-align: middle; line-height: normal;white-space: nowrap; ">
                    <span class="">
                    <div>
                    @if (isset($modal->method) && $modal->method == 2)
                        Mail a Cheque
                    @else
                        Direct Deposit
                    @endif    

                    </div>
                                </span>
            </td>
        <td class="  text-wrap" style="; vertical-align: middle; line-height: normal;white-space: nowrap; ">
                    <span class="">
                    <div>
                        
				<div class="d-flex actions justify-content-center">
					<a @click="remittanceGeneratorBooking = true" wire:click="$emit('openRemittanceGeneratorPanel','{{$modal->id}}')" title="Generate Remittance" aria-label="Booking" class="btn btn-hs-icon p-0" contenteditable="false" style="cursor: pointer;">
						<svg aria-label="Bookings" class="fill-stroke" width="12" height="15" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<use xlink:href="/css/common-icons.svg#bookings"></use>
						</svg>
					</a>
				</div>
                    </div>
                                </span>
            </td>


                        
                    </tr>
         @endforeach                                                           
                                 

        </tbody>
    </table>
</div>
    
</div>
