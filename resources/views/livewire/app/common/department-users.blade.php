<div>
<div class="table-responsive">
    <table id="unassigned_data" class="table table-hover" aria-label="Department Users Table">
        <thead>
            <tr role="row">
                {{-- <th scope="col" class="text-center">
                    <input class="form-check-input" type="checkbox" value="" aria-label="Select All Users">
                </th> --}}
                <th scope="col">Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Position</th>

                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $i=>$user)
            <tr role="row" class="{{ ($i % 2 == 0) ? 'even' : 'odd' }}">
                {{-- <td class="text-center">
                    <input class="form-check-input" type="checkbox" value="" aria-label="Select User">
                </td> --}}
                <td>
                    <div class="row g-2">
                        <div class="col-md-3">
                            <img width=50 height=50 src="{{$user->userdetail->profile_pic !=null ? $user->profile_pic : '/tenant-resources/images/portrait/small/image4.png'}}" class=" rounded-circle" alt="Image of user Profile">
                        </div>
                        <div class="col-md-9"
                         >
                            <h6 class="fw-semibold">
                                <a href="{{route('tenant.customer-profile',['customerID'=> encrypt($user->id)])}}"> {{$user->name}} </a>
                            </h6>
                            <p> {{$user->email}} </p>
                        </div>
                    </div>
                </td>
                <td>
                    <p>{{$user->phone}}</p>
                </td>
                <td>
                    <p>{{$user->position}}</p>
                </td>
                <td>
                    <div class="d-flex actions">
                        <a href="{{route('tenant.customer-profile',['customerID'=> encrypt($user->id)])}}" title="View " aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                            <svg aria-label="View" class="fill" width="20" height="20" viewBox="0 0 20 20"fill="none"
                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                </svg>
                        </a>
                        <a href="/chat/{{$user->id}}" title="Message" aria-label="Message" class="btn btn-sm btn-secondary rounded btn-hs-icon" target="_blank">
                            <svg class="fill" width="20" height="20" viewBox="0 0 20 20"fill="none"
                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#message"></use>
                                </svg>
                        </a>
                        @if(!session()->get('isCustomer'))
                        <a href="javascript:void(0)" wire:click="deleteRecord({{$user->id}})" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                            <svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
                                <use
                                    xlink:href="/css/common-icons.svg#recycle-bin">
                                </use>
                            </svg>
                        </a>
                        @endif
                    </div>
                </td>
            
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
