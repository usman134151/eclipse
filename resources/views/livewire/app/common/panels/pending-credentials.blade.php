<div class="row mb-4 mt-4" x-data="{ isUploading: false, progress: 0 }"
    x-on:livewire-upload-start="isUploading = true"
    x-on:livewire-upload-finish="isUploading = false"
    x-on:livewire-upload-error="isUploading = false"
    x-on:livewire-upload-progress="progress = $event.detail.progress">
  @if($document)
    
      @if($document['upload_file']!=null)
        <div class="d-inline-flex mb-4">
        
            <div > 
                <label class="form-label-sm mb-2 d-flex align-items-center gap-2">
                    <svg width="20" height="27" viewBox="0 0 20 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M20 23.3333V7.5L12.5 0H3.33333C2.44928 0 1.60143 0.35119 0.976311 0.976311C0.351189 1.60143 0 2.44928 0 3.33333V23.3333C0 24.2174 0.351189 25.0652 0.976311 25.6904C1.60143 26.3155 2.44928 26.6667 3.33333 26.6667H16.6667C17.5507 26.6667 18.3986 26.3155 19.0237 25.6904C19.6488 25.0652 20 24.2174 20 23.3333ZM12.5 5C12.5 5.66304 12.7634 6.29893 13.2322 6.76777C13.7011 7.23661 14.337 7.5 15 7.5H18.3333V23.3333C18.3333 23.7754 18.1577 24.1993 17.8452 24.5118C17.5326 24.8244 17.1087 25 16.6667 25H3.33333C2.89131 25 2.46738 24.8244 2.15482 24.5118C1.84226 24.1993 1.66667 23.7754 1.66667 23.3333V3.33333C1.66667 2.89131 1.84226 2.46738 2.15482 2.15482C2.46738 1.84226 2.89131 1.66667 3.33333 1.66667H12.5V5Z" fill="black"/>
                      <path d="M4.3385 23.4729C4.01365 23.343 3.75193 23.092 3.6085 22.7729C3.2835 22.1262 3.39183 21.4796 3.74183 20.9362C4.07183 20.4246 4.6185 19.9896 5.23683 19.6246C6.02006 19.1803 6.84798 18.82 7.70683 18.5496C8.37382 17.3505 8.96498 16.1109 9.47683 14.8379C9.1708 14.1425 8.93085 13.4199 8.76017 12.6796C8.61683 12.0129 8.56183 11.3529 8.6835 10.7862C8.8085 10.1962 9.14017 9.66622 9.76683 9.41456C10.0868 9.28622 10.4335 9.21456 10.7702 9.28622C10.9395 9.32228 11.0987 9.39557 11.2362 9.50079C11.3737 9.60601 11.4861 9.74052 11.5652 9.89456C11.7118 10.1679 11.7652 10.4879 11.7768 10.7912C11.7885 11.1046 11.7568 11.4512 11.6985 11.8146C11.5585 12.6646 11.2485 13.7046 10.8318 14.8046C11.2917 15.7879 11.8383 16.7283 12.4652 17.6146C13.207 17.556 13.9531 17.5839 14.6885 17.6979C15.2952 17.8079 15.9118 18.0229 16.2885 18.4729C16.4885 18.7129 16.6102 19.0062 16.6218 19.3362C16.6335 19.6562 16.5435 19.9729 16.3918 20.2746C16.2605 20.5541 16.0568 20.7935 15.8018 20.9679C15.5498 21.1323 15.2523 21.2128 14.9518 21.1979C14.4002 21.1746 13.8618 20.8712 13.3968 20.5029C12.8314 20.0354 12.3219 19.5041 11.8785 18.9196C10.7514 19.0475 9.63772 19.2739 8.55017 19.5962C8.05213 20.4795 7.48362 21.3211 6.85017 22.1129C6.3635 22.6962 5.83517 23.2062 5.30517 23.4246C5.00065 23.5623 4.65524 23.5796 4.3385 23.4729ZM6.63683 20.3046C6.36017 20.4312 6.1035 20.5646 5.87183 20.7012C5.32517 21.0246 4.97017 21.3396 4.7935 21.6129C4.63683 21.8546 4.6335 22.0296 4.72683 22.2146C4.7435 22.2512 4.76017 22.2746 4.77017 22.2879C4.79005 22.2826 4.80954 22.2759 4.8285 22.2679C5.05683 22.1746 5.42017 21.8762 5.88683 21.3146C6.15224 20.9896 6.40251 20.6526 6.63683 20.3046ZM9.37017 18.0879C9.92671 17.958 10.4883 17.8507 11.0535 17.7662C10.75 17.3018 10.4664 16.8247 10.2035 16.3362C9.94209 16.9272 9.6642 17.5108 9.37017 18.0862V18.0879ZM13.4468 18.8379C13.6968 19.1096 13.9402 19.3379 14.1718 19.5212C14.5718 19.8379 14.8502 19.9429 15.0018 19.9479C15.0424 19.9532 15.0836 19.9444 15.1185 19.9229C15.1878 19.8681 15.2418 19.7964 15.2752 19.7146C15.3344 19.613 15.3682 19.4987 15.3735 19.3812C15.3725 19.3421 15.3571 19.3047 15.3302 19.2762C15.2435 19.1729 14.9968 19.0229 14.4668 18.9279C14.1297 18.8715 13.7886 18.842 13.4468 18.8396V18.8379ZM10.1302 12.9946C10.2704 12.5421 10.3818 12.0812 10.4635 11.6146C10.5152 11.3012 10.5352 11.0429 10.5268 10.8396C10.5273 10.7274 10.5093 10.6159 10.4735 10.5096C10.3901 10.5199 10.3087 10.5423 10.2318 10.5762C10.0868 10.6346 9.9685 10.7529 9.90517 11.0479C9.8385 11.3679 9.85517 11.8296 9.98183 12.4179C10.0218 12.6029 10.0718 12.7962 10.1318 12.9946H10.1302Z" fill="black"/>
                    </svg>
                    <span class="fw-semibold text-sm">
                                                        {{basename($document['upload_file'])}}
                                            </p></span>
                  </label>
            </div>
            <div class="mx-3">
                       <a href="{{$document['upload_file']}}" target="_blank" aria-label="file"  >
                Download</a>
            </div>
        </div>
      @endif
      @if($document['document_type']!='acknowledge_document')
          <div class="col-lg-6 mb-4">
              <label for="formFile" class="form-label">
                Upload File
              </label>
              <input class="form-control mb-1" wire:model.defer="upload_file" type="file" id="formFile">
              <div x-show="isUploading">
                  <progress max="100" x-bind:value="progress"></progress>
              </div>
               @error('upload_file')
                  <span class="d-inline-block invalid-feedback mt-2">
                      {{ $message }}
                  </span>
                  @enderror  
            </div>

          <div class="col-lg-6 mb-4">
              @if($document['expiration_type']=='user_set_expiry')

                <label class="form-label" for="expiration-date">Expiration Date</label>
                <div class="d-flex align-items-center w-100">
                  <div class="position-relative flex-grow-1">
                    <input type="text" wire:model="field.expiry_date" class="form-control js-single-date"  aria-label="Expiry Date" aria-describedby="Expiry Date" id="expiry_date" name="expiry_date">
                    <svg class="icon-date" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M18.75 2.28511L13.7456 2.28513V1.03921C13.7456 0.693815 13.4659 0.414062 13.1206 0.414062C12.7753 0.414062 12.4956 0.693815 12.4956 1.03921V2.28481H7.49563V1.03921C7.49563 0.693815 7.21594 0.414062 6.87063 0.414062C6.52531 0.414062 6.24563 0.693815 6.24563 1.03921V2.28481H1.25C0.559687 2.28481 0 2.84463 0 3.53511V19.1638C0 19.8542 0.559687 20.4141 1.25 20.4141H18.75C19.4403 20.4141 20 19.8542 20 19.1638V3.53511C20 2.84492 19.4403 2.28511 18.75 2.28511ZM18.75 19.1638H1.25V3.53511H6.24563V4.16494C6.24563 4.51032 6.52531 4.79009 6.87063 4.79009C7.21594 4.79009 7.49563 4.51032 7.49563 4.16494V3.53542H12.4956V4.16525C12.4956 4.51065 12.7753 4.7904 13.1206 4.7904C13.4659 4.7904 13.7456 4.51065 13.7456 4.16525V3.53542H18.75V19.1638ZM14.375 10.412H15.625C15.97 10.412 16.25 10.1319 16.25 9.78686V8.53657C16.25 8.19149 15.97 7.91142 15.625 7.91142H14.375C14.03 7.91142 13.75 8.19149 13.75 8.53657V9.78686C13.75 10.1319 14.03 10.412 14.375 10.412ZM14.375 15.4129H15.625C15.97 15.4129 16.25 15.1331 16.25 14.7877V13.5374C16.25 13.1924 15.97 12.9123 15.625 12.9123H14.375C14.03 12.9123 13.75 13.1924 13.75 13.5374V14.7877C13.75 15.1334 14.03 15.4129 14.375 15.4129ZM10.625 12.9123H9.375C9.03 12.9123 8.75 13.1924 8.75 13.5374V14.7877C8.75 15.1331 9.03 15.4129 9.375 15.4129H10.625C10.97 15.4129 11.25 15.1331 11.25 14.7877V13.5374C11.25 13.1927 10.97 12.9123 10.625 12.9123ZM10.625 7.91142H9.375C9.03 7.91142 8.75 8.19149 8.75 8.53657V9.78686C8.75 10.1319 9.03 10.412 9.375 10.412H10.625C10.97 10.412 11.25 10.1319 11.25 9.78686V8.53657C11.25 8.19118 10.97 7.91142 10.625 7.91142ZM5.625 7.91142H4.375C4.03 7.91142 3.75 8.19149 3.75 8.53657V9.78686C3.75 10.1319 4.03 10.412 4.375 10.412H5.625C5.97 10.412 6.25 10.1319 6.25 9.78686V8.53657C6.25 8.19118 5.97 7.91142 5.625 7.91142ZM5.625 12.9123H4.375C4.03 12.9123 3.75 13.1924 3.75 13.5374V14.7877C3.75 15.1331 4.03 15.4129 4.375 15.4129H5.625C5.97 15.4129 6.25 15.1331 6.25 14.7877V13.5374C6.25 13.1927 5.97 12.9123 5.625 12.9123Z" fill="black"/>
                    </svg>
                     @error('field.expiry_date')
                      <span class="d-inline-block invalid-feedback mt-2">
                          {{ $message }}
                      </span>
                      @enderror  
                  </div>
                </div>
              @endif
          </div>
          @if($upload_file)
            <div class="row my-4">
                <h3>Preview</h3>
                <div class="col-md-2" style="max-width:190px">
                    <div class="position-relative" style="width:190px;height:250px">
                      <img style="width:100%;height:100%" src="{{$this->isImage($upload_file) ? '/tenant'.tenant('id').'/app/livewire-tmp/'.$upload_file->getFilename() : '/tenant-resources/images/img-placeholder-document.jpg'}}"/>
                      <div class="position-absolute top-0 start-100">
                        <a  wire:click.prevent="deleteFile()"  href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon mx-3">
                          <svg aria-label="Delete" class="delete-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#delete-icon"></use>
                          </svg>
                        </a>
                      </div>
                    </div>
                    {{-- <p><a href=""  target="_blank"><b>Credential </a></p>  --}}
                    
                </div>
            </div>
          @endif
          <div class="col-12 justify-content-center form-actions d-flex gap-3">
              <button type="button" class="btn btn-outline-dark rounded" x-on:click="pendingCredentials = !pendingCredentials">
                  Cancel
              </button>
              <button  wire:loading.attr="disabled" wire:target="upload_file" type="submit" wire:click.prevent="upload" class="btn btn-primary rounded" x-on:close-modal.window="pendingCredentials = !pendingCredentials">
                  Upload
              </button>
          </div>
      @endif
  @else
    <div class="">
      <p>No Documents Available.</p>
    </div>  
  @endif
</div>