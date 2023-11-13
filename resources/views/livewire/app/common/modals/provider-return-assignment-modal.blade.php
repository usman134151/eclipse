<div>
    @if($return_review == 1)
    <div class="modal fade" id="providerReturnAssignmentModal" tabindex="-1" role="dialog" aria-hidden="true">
        {{-- {{Form::open(['class'=>'general_form','url'=>url('provider/bookings/return-assignment')])}} --}}

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Return Assignment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body uploadForm">
                    {{-- {{Form::hidden('record_id',null,['class'=>'record_id'])}}
                    {{Form::hidden('return_review','1',null,['class'=>'record_id'])}} --}}
                    <p>Are you sure you wish to return this assignment? You may not be able to reclaim it.</p>
                    <div class="row">
                        <div class="col-md-12">

                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Yes, Return Assignment</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, Keep Assignment</button>
                </div>
            </div>
        </div>
        {{-- {{Form::close()}} --}}

    </div>
    @else

    <div class="modal fade" id="providerReturnAssignmentModal2" tabindex="-1" role="dialog" aria-hidden="true">
        {{-- {{Form::open(['class'=>'general_form','url'=>url('provider/bookings/return-assignment')])}} --}}

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Return Assignment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body uploadForm">
                    {{-- {{Form::hidden('record_id',null,['class'=>'record_id'])}}
                    {{Form::hidden('return_review','2',null,['class'=>'record_id'])}} --}}
                    <p>This assignment requires admin’s approval in order to be returned. Are you sure you wish to
                        return this assignment?</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="edirReason">Reason for Returning Assignment</label>
                                <textarea class="form-control" name="return_assign" id="return_assign"
                                    rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Yes, Request to Return Assignment</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, Keep Assignment</button>
                </div>
            </div>
        </div>
        {{-- {{Form::close()}} --}}

    </div>
    @endif
</div>