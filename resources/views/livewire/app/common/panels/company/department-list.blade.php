<div class="">
    <table id="unassigned_data" class="table table-hover" aria-label="Department Table">
        <thead>
            <tr role="row">
                {{-- <th scope="col" class="text-center">
                    <input class="form-check-input" type="checkbox" value="" aria-label="Select All Departments">
                </th> --}}
                <th scope="col">Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col" >Department Supervisors</th>
                <th scope="col" class="text-center">Department User</th>
                {{-- <th scope="col">Action</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($departments as $i=>$dept)
            <tr role="row" class="{{ ($i % 2 == 0) ? 'even' : 'odd' }}">
                {{-- <td class="text-center">
                    <input class="form-check-input" type="checkbox" value="" aria-label="Select Department">
                </td> --}}
                <td>
                    <div class="row g-2">
                        <div class="col-md-3">
                            <img src="/tenant-resources/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Image of department Profile">
                        </div>
                        <div class="col-md-9"
                         @click="departmentProfile = true"
                         >
                            <h6 class="fw-semibold">
                                 {{$dept->name}}
                            </h6>
                            <p> {{$dept->department_website}} </p>
                        </div>
                    </div>
                </td>
                <td>
                    <p>{{$dept->phones->first()->phone_number}}</p>
                </td>
                <td>
                    <a href="#">
                      @if(count($dept->supervisors)>0)
                                                                    @foreach($dept->supervisors as $key=> $sv)
                                                                        {{$sv['name']}}
                                                                     @if($key != count($dept->supervisors)-1) , @endif
                                                                    @endforeach
                                                                @else
                                                                    N/A
                                                                @endif
                                                              
                    </a>
                </td>
                <td class="text-center">{{count($dept->users)}}</td>
               
            </tr>
            @endforeach
             {{-- <td>
                    <div class="d-flex actions">
                        <a href="#" title="Edit Company" aria-label="Edit Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                            <x-icon name="pencil"/>
                        </a>
                        <a href="javascript:void(0)" title="View Company" aria-label="View Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                            <x-icon name="view"/>
                        </a>
                        <a href="javascript:void(0)" title="Delete Company" aria-label="Delete Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                            <x-icon name="recycle-bin"/>
                        </a>
                    </div>
                </td> --}}
        </tbody>
    </table>
</div>