<div class="modal-content">
  @if($credential_doc)
    <div class="modal-header">
      <h2 class="modal-title fs-5" id="viewButtonLabel">{{$credential_doc->credential->title}}</h2>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <div class="d-flex justify-content-center">
        <div class="row my-4"  style="max-width:190px">
          <div class="col-md-2"   style="width:190px;height:250px">
            @if($credential_doc->document_type !="acknowledge_document")
                      <img style="width:100%;height:100%"  src="{{$this->isImage($u_doc->file_path) ? $u_doc->file_path : '/tenant-resources/images/img-placeholder-document.jpg'}}"/>
            
            @else
                      <img style="width:100%;height:100%" src="{{$this->isImage($credential_doc->upload_file) ? $credential_doc->upload_file : '/tenant-resources/images/img-placeholder-document.jpg'}}"/>
            @endif
              
          </div>
      </div>
      </div>
    </div>
    <div class="modal-footer">
      <div class="row justify-content-center w-100">
        <div class="col-lg-3">
          <button type="button" class="btn rounded w-100 btn-outline-dark" data-bs-dismiss="modal">Cancel</button>
        </div>
        <div class="col-lg-3">
          @if($credential_doc->document_type !="acknowledge_document")
            <a href="{{$u_doc->file_path}}" target="_blank" class="btn rounded w-100 btn-primary">
              <i class="fa fa-cloud-download" aria-hidden="true"></i>              
              <span>Download</span>
            </a>
          @else
            <a href="{{$credential_doc->upload_file}}" target="_blank" class="btn rounded w-100 btn-primary">
              <i class="fa fa-cloud-download" aria-hidden="true"></i>              
              <span>Download</span>
            </a>
          
          @endif

        </div>
      </div>
    </div>
    @endif
  </div>