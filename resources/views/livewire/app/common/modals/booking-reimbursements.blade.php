<div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title fs-5" id="bookingReimbursementsModalLabel">
            BOOKING REIMBURSEMENT DETAILS
        </h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      @if(count($rList)>0)
        <div class="table-responsive border">
            <table id="" class="table table-sm table-hover text-sm" aria-label="">
                <thead>
                    <tr role="row">
                        <th scope="col" class="text-center align-middle">Reimbursement ID</th>
                        <th scope="col" class="text-center align-middle">Reason</th>
                        <th scope="col" class="text-center align-middle">Total Amount</th>
                        <th class="text-center align-middle">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rList as $rmb)
                        <tr role="row" class="odd">
                            <td class="text-center align-middle">
                                {{ $rmb['reimbursement_number'] }}
                            </td>
                            <td class="text-center align-middle">
                                {{ $rmb['reason'] }}
                            </td>
                            <td class="align-middle text-center">
                                {{ numberFormat($rmb['amount']) }}
                            </td>
                            <td class="align-middle text-center">
                                <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6.5" cy="6" r="6" fill="#F4D115" />
                                </svg>
                                @if ($rmb['status'] == 0)
                                    Pending
                                @elseif($rmb['status'] == 1)
                                    Approved
                                @else
                                    Declined
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="bg-muted py-2 mb-4">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="d-flex justify-content-between">
                        <div class="fw-bold text-sm">Total</div>
                        <div class="fw-bold text-sm text-lg-end">{{numberFormat($sum)}}</div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="text-center my-3">
          This booking does not have any reimbursements.
        </div>
        @endif
    </div>
</div>
