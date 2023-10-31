<div>
    @if($users->count())
    <div class="">
        <table id="unassigned_data" class="table table-hover" aria-label="Company Users Table">
            <thead>
                <tr role="row">
                    {{-- <th scope="col" class="text-center">
                    <input class="form-check-input" type="checkbox" value="" aria-label="Select All Users">
                </th> --}}
                    <th scope="col">Name</th>
                    {{-- <th scope="col">Phone Number</th>
                <th scope="col">Position</th> --}}
                    <th scope="col">Admin </th>
                    <th scope="col">Supervisor </th>
                    <th scope="col">Billing Manager </th>
                    <th scope="col">Service Consumer </th>
                    <th scope="col">Requester </th>
                    <th scope="col">Participant </th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($users as $i => $user)
                    <tr role="row" class="{{ $i % 2 == 0 ? 'even' : 'odd' }}">
                        {{-- <td class="text-center">
                    <input class="form-check-input" type="checkbox" value="" aria-label="Select User">
                </td> --}}
                        <td>
                            <div class="row g-2">
                                <div class="col-md-3">
                                    <img width=50 height=50
                                        src="{{ $user->profile_pic != null ? $user->profile_pic : '/tenant-resources/images/portrait/small/image4.png' }}"
                                        class=" rounded-circle" alt="Image of user Profile">
                                </div>
                                <div class="col-md-9">
                                    <h6 class="fw-semibold">
                                        <a
                                            href="{{ route('tenant.customer-profile', ['customerID' => encrypt($user->id)]) }}">
                                            {{ $user->name }} </a>
                                    </h6>
                                    <p> {{ $user->email }} </p>
                                </div>
                            </div>
                        </td>
                        {{-- <td>
                            <p>{{$user->phone}}</p>
                        </td>
                        <td>
                            <p>{{$user->position}}</p>
                        </td> --}}
                        <td class="">
                            <div class=" form-check mb-0">
                                <input class="form-check-input" type="checkbox" id="CompanyAdmin"
                                    wire:model.defer="rolesArr.{{$user->id}}.10">
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox"  id="supervisor"
                                    wire:model.defer="rolesArr.{{$user->id}}.5">
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox"  id="billingManager"
                                    wire:model.defer="rolesArr.{{$user->id}}.9">
                            </div>
                        </td>
                          <td class="text-center">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox"  id="serviceConsumer"
                                    wire:model.defer="rolesArr.{{$user->id}}.7">
                            </div>
                        </td>
                          <td class="text-center">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox"  id="requester"
                                    wire:model.defer="rolesArr.{{$user->id}}.6">
                            </div>
                        </td>
                          <td class="text-center">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox"  id="participant"
                                    wire:model.defer="rolesArr.{{$user->id}}.8">
                            </div>
                        </td>

                        <td class="text-center">
                            <div class="d-flex actions">
                                <a href="{{ route('tenant.customer-profile', ['customerID' => encrypt($user->id)]) }}"
                                    title="View " aria-label="View"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <svg aria-label="View" class="fill" width="20" height="20"
                                        viewBox="0 0 20 20"fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="/css/provider.svg#view"></use>
                                    </svg>
                                </a>
                                <a href="/chat/{{$user->id}}" title="Message" aria-label="Message" target="_blank"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <svg class="fill" width="20" height="20" viewBox="0 0 20 20"fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="/css/common-icons.svg#message"></use>
                                    </svg>
                                </a>
                               
                            </div>
                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- for panel --}}
     <x-slot name="outsideBody">
         <div class="col-12 justify-content-center form-actions d-flex gap-3">
             <button type="" x-on:click="companyUsers = !companyUsers" class="btn btn-outline-dark rounded">Cancel</button>
             <button wire:click.prevent="$emit('savePermissions')" x-on:close-company-users.window="companyUsers = !companyUsers" class="btn btn-primary rounded">Update Permissions</button>
         </div>
     </x-slot>
     @else
     <div class="text-center">
        <small>No users associated with this company</small>
     </div>
    @endif
</div>
