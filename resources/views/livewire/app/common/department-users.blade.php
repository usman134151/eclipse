<div>
<div class="">
    <table id="unassigned_data" class="table table-hover" aria-label="Department Users Table">
        <thead>
            <tr role="row">
                {{-- <th scope="col" class="text-center">
                    <input class="form-check-input" type="checkbox" value="" aria-label="Select All Users">
                </th> --}}
                <th scope="col">Name</th>
                <th scope="col">Phone Number</th>
                {{-- <th scope="col">Action</th> --}}
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
                                 {{$user->name}}
                            </h6>
                            <p> {{$user->email}} </p>
                        </div>
                    </div>
                </td>
                <td>
                    <p>{{$user->phone}}</p>
                </td>
               
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
