<div x-data="{ isUploading: false, progress: 0 }"
    x-on:livewire-upload-start="isUploading = true"
    x-on:livewire-upload-finish="isUploading = false"
    x-on:livewire-upload-error="isUploading = false"
    x-on:livewire-upload-progress="progress = $event.detail.progress">
    @if($showSearch)
        <div class="row">
            <div class="col-md-4 col-12 mb-4">
                <label class="form-label" for="search">
                    Search
                </label>
                <input type="text" id="search" class="form-control" name="search"
                    placeholder="Keyword Search" />
            </div>
            <div class="col-md-4 col-12">
                <label class="form-label" for="search">
                    Tags
                </label>
                <input type="text" id="tags" class="form-control" name="search"
                    placeholder="tags" />
            </div>
            <div class="col-md-4 col-12">
                <label class="form-label" for="search">
                    Document Type
                </label>
                <select class="select2 form-select" id="document-type">
                    <option value="document-type">
                        Select Document Type
                    </option>
                </select>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-2">
                <label class="form-label" for="search">
                    Status
                </label>
                <select class="select2 form-select" id="document-type">
                    <option value="document-type">
                        Pending
                    </option>
                </select>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-12">
                @if(!   $showSearch)
                <div class="col-md-8 mb-md-2">
                    <h2>Drive Documents</h2>
                </div>
                @endif
                <div class="col-md-12 mb-md-2">
                  <form class="form">
                    @csrf
                        <div class="row">
                            <div class="col-md-12 mb-md-2">
                                <div class=" justify-content-md-center">
                                    <div>
                                        <h3 class="text-md-center">
                                            Upload Document 
                                            
                                        </h3>
                                                
                                    </div>
                                    <div class="text-md-center">
                                    <button wire:click="showForm"
                                                    class="btn btn-primary rounded  " type="button">Choose
                                                    File</button> 
                                    </div>
                                    @if($uploadDoc)
                                        <div class=" row mt-3">
                                            <div class="col-lg-6 pe-lg-5 ">
                                                <label class="form-label" for="title">
                                                    Document Title
                                                    {{-- <span class="mandatory" aria-hidden="true">
                                                        *
                                                    </span> --}}
                                                </label>
                                                <input type="text" id="title" class="form-control" name="title"
                                                    placeholder="Enter Document Title" required aria-required="true"   wire:model.defer="field.document_title"/>
                                                @error('field.document_title')
                                                <span class="d-inline-block invalid-feedback mt-2">
                                                    {{ $message }}
                                                </span>
                                                @enderror  
                                                <div class="form-check mb-lg-0 mt-1">
                                                <input class="form-check-input" type="checkbox" wire:click="setExpDate"
                                                    id="set_exp_date" wire:model="noExp">
                                                <label class="form-check-label" for="set_exp_date" >
                                                    No Expiration
                                                </label>
                                            </div>   
                                            </div>
                                        
                                            @if(!$noExp)
                                                <div class="col-lg-6 pe-lg-5 mb-4">
                                                <label class="form-label" for="expiration_date">
                                                    Expiration Date
                                                </label>
                                                <div class="position-relative flex-grow-1">
                                                        <input type="text" class="form-control js-single-date"
                                                            placeholder="Select Expiration Date" aria-label=""
                                                            aria-describedby="" wire:model.defer="field.expiration_date" name="expiration_date" id="expiration_date">
                                                        <svg aria-label="Select Date" class="icon-date" width="20" height="21"
                                                            viewBox="0 0 20 21" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M18.75 2.28511L13.7456 2.28513V1.03921C13.7456 0.693815 13.4659 0.414062 13.1206 0.414062C12.7753 0.414062 12.4956 0.693815 12.4956 1.03921V2.28481H7.49563V1.03921C7.49563 0.693815 7.21594 0.414062 6.87063 0.414062C6.52531 0.414062 6.24563 0.693815 6.24563 1.03921V2.28481H1.25C0.559687 2.28481 0 2.84463 0 3.53511V19.1638C0 19.8542 0.559687 20.4141 1.25 20.4141H18.75C19.4403 20.4141 20 19.8542 20 19.1638V3.53511C20 2.84492 19.4403 2.28511 18.75 2.28511ZM18.75 19.1638H1.25V3.53511H6.24563V4.16494C6.24563 4.51032 6.52531 4.79009 6.87063 4.79009C7.21594 4.79009 7.49563 4.51032 7.49563 4.16494V3.53542H12.4956V4.16525C12.4956 4.51065 12.7753 4.7904 13.1206 4.7904C13.4659 4.7904 13.7456 4.51065 13.7456 4.16525V3.53542H18.75V19.1638ZM14.375 10.412H15.625C15.97 10.412 16.25 10.1319 16.25 9.78686V8.53657C16.25 8.19149 15.97 7.91142 15.625 7.91142H14.375C14.03 7.91142 13.75 8.19149 13.75 8.53657V9.78686C13.75 10.1319 14.03 10.412 14.375 10.412ZM14.375 15.4129H15.625C15.97 15.4129 16.25 15.1331 16.25 14.7877V13.5374C16.25 13.1924 15.97 12.9123 15.625 12.9123H14.375C14.03 12.9123 13.75 13.1924 13.75 13.5374V14.7877C13.75 15.1334 14.03 15.4129 14.375 15.4129ZM10.625 12.9123H9.375C9.03 12.9123 8.75 13.1924 8.75 13.5374V14.7877C8.75 15.1331 9.03 15.4129 9.375 15.4129H10.625C10.97 15.4129 11.25 15.1331 11.25 14.7877V13.5374C11.25 13.1927 10.97 12.9123 10.625 12.9123ZM10.625 7.91142H9.375C9.03 7.91142 8.75 8.19149 8.75 8.53657V9.78686C8.75 10.1319 9.03 10.412 9.375 10.412H10.625C10.97 10.412 11.25 10.1319 11.25 9.78686V8.53657C11.25 8.19118 10.97 7.91142 10.625 7.91142ZM5.625 7.91142H4.375C4.03 7.91142 3.75 8.19149 3.75 8.53657V9.78686C3.75 10.1319 4.03 10.412 4.375 10.412H5.625C5.97 10.412 6.25 10.1319 6.25 9.78686V8.53657C6.25 8.19118 5.97 7.91142 5.625 7.91142ZM5.625 12.9123H4.375C4.03 12.9123 3.75 13.1924 3.75 13.5374V14.7877C3.75 15.1331 4.03 15.4129 4.375 15.4129H5.625C5.97 15.4129 6.25 15.1331 6.25 14.7877V13.5374C6.25 13.1927 5.97 12.9123 5.625 12.9123Z"
                                                                fill="black" />
                                                        </svg>
                                                    </div>
                                                            
                                                    @error('field.expiration_date')<span class="d-inline-block invalid-feedback mt-2">{{ $message }}</span>@enderror     
                                                </div>
                                            @endif
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-lg-6 col-12 mb-4">
                                                    <label class="form-label" for="file">
                                                        Upload File
                                                        {{-- <span class="mandatory" aria-hidden="true">
                                                            *
                                                        </span> --}}
                                                    </label>
                                                    <input type="file" id="file" class="form-control" name="file"
                                                        placeholder="Upload File" required aria-required="true"   wire:model.defer="file"/>
                                                    <div x-show="isUploading">
                                                        <progress max="100" x-bind:value="progress"></progress>
                                                    </div>
                                                    @error('file')
                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                        {{ $message }}
                                                    </span>
                                                    @enderror  
                                                    
                                            </div>
                                            <div class="col-lg-6 col-12 mb-4">
                                                    <label class="form-label" for="notes-column">
                                                        Notes
                                                    </label>
                                                    <textarea class="form-control" rows="3" placeholder="" wire:model.defer="field.note" name="notesColumn"
                                                        id="notes-column"></textarea>
                                                        @error('field.note')
                                                        <span class="d-inline-block invalid-feedback mt-2">
                                                            {{ $message }}
                                                        </span>
                                                        @enderror
                                            </div>
                                            <div class="text-md-center form-actions">
                                                <button wire:click="refreshData"
                                                    class="btn btn-outline-dark rounded px-4 py-2" type="button">Cancel</button> 
                                        
                                                <button wire:click.prevent="upload" 
                                                        class="btn btn-primary rounded  " type="submit">Upload</button> 
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                
                    <div class="d-md-flex justify-content-center gap-3 mt-5 text-wrap" >
                    @if($existingDocuments!=null)
                        @foreach($existingDocuments as $index=> $doc)
                            {{-- @if($index%7==0)
                            <div class="d-md-flex">
                             @endif --}}
                                <div class="justify-content-center " style="width:200px" >
                                <div class="d-flex">
                                                        
                                    <img src="/tenant-resources/images/img-placeholder-document.jpg"
                                        alt="Preview File" />
                                        <div class="align-items-center gap-2">

                                    <a wire:click.prevent="deleteFile({{$doc->id}},'{{$doc->document_path}}')" href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Delete" class="delete-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                                </svg>
                                                            </a>
                                                            </div>
                                        </div>
                                    <p><a href="{{$doc->document_path}}"  target="_blank"><b>{{$doc->document_title}} </b> - {{basename($doc->document_path)}}</a></p>
                                </div>
                            
                            {{-- </div> --}}
                        @endforeach
                    @endif
                    </div>
                </div>

        </div>
    </div>

</div>
@push('scripts')

<script>
        function updateVal(attrName,val){
          
          Livewire.emit('updateVal', attrName, val);

      }



</script>
@endpush

