<div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title fs-5" id="displayMessageLabel">
            {{$title}}
        </h2>
    </div>
    <div class="modal-body">
        <div class="row justify-content-center">
            {{$message}}
        </div>
    </div>
    <div class="modal-footer">
        <div class="row justify-content-center w-100">
            <div class="col-lg-3">
                <a href="{{$redirectPath}}" class="btn rounded w-100 btn-outline-dark" >
                    Close
                </a>
            </div>
        </div>
    </div>
</div>