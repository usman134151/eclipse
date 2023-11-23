<div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
    x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
    x-on:livewire-upload-progress="progress = $event.detail.progress">

    @if ($showSearch)
        <div class="inner-section-segment-spacing">
            <div class="col-md-12 d-lg-flex col-12 gap-4">
                <div class="col-md-3 col-12">
                    <div>
                        <label class="form-label" for="keyword-search">
                            Search
                        </label>
                        <input type="text" id="keyword-search" wire:model='keywords' class="form-control"
                            placeholder="Keyword Search" />
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <label class="form-label" for="payment-status">
                        Document Type
                    </label>
                    {!! $setupValues['search_document_type']['rendered'] !!}

                </div>
                <div class="col-md-3  col-12">
                    <label class="form-label" for="set_set_date">
                        Date Range
                    </label>
                    <div class="position-relative">
                        <input type="" wire:model.lazy="dateRange" name="dateRange" id="dateRange"
                            class="form-control js-single-date" placeholder="Jan 1, 2022 - Oct 1, 2022" id="">
                        <svg aria-label="Date" class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                            <use xlink:href="/css/common-icons.svg#datefield-icon">
                            </use>
                        </svg>
                    </div>
                </div>
                <div class=" col-md-3  d-flex  " style="margin-top: 60px">

                    <div wire:click.prevent="clearFilters()" style="cursor: pointer; padding-right: 4px">
                        <span class="badge rounded-pill bg-light text-dark">Clear
                            {{-- <svg width="10" stroke="currentColor" fill="none" viewBox="0 0 8 8">
                                                            <path stroke-linecap="round" stroke-width="1.5" d="M1 1l6 6m0-6L1 7"></path>
                                                        </svg> --}}
                        </span>
                    </div>
                </div>

            </div>
        </div>
    @endif

    <div class="row inner-section-segment-spacing">
        <div class="col-md-3">
            <label class="form-label" for="search">
                Upload Document
            </label>
            @if (!$showForm)
                <button wire:click="$set('uploadDoc',true)" class="btn btn-primary rounded  " type="button">Add New
                    File</button>
            @endif

        </div>

        @if ($uploadDoc)
            <form class="form mt-3">
                @csrf
                <div class=" row mt-3">

                    <div class="col-lg-6 pe-lg-5 ">
                        <label class="form-label" for="title">
                            Document Title

                        </label>
                        <input type="text" id="title" class="form-control" name="title"
                            placeholder="Enter Document Title" required aria-required="true"
                            wire:model.defer="field.document_title" />
                        @error('field.document_title')
                            <span class="d-inline-block invalid-feedback mt-2">
                                {{ $message }}
                            </span>
                        @enderror
                        <div class="form-check mb-lg-0 mt-1">
                            <input class="form-check-input" type="checkbox" wire:click="setExpDate" id="set_exp_date"
                                wire:model.defer="noExp">
                            <label class="form-check-label" for="set_exp_date">
                                No Expiration
                            </label>
                        </div>

                    </div>
                    <div class="col-lg-6 col-12 mb-4">
                        <label class="form-label" for="drive_file">
                            Select File

                        </label>
                        <input type="file" id="drive_file" class="form-control" name="drive_file"
                            placeholder="Upload File" aria-required="true" wire:model.defer="drive_file" />
                        <div x-show="isUploading">
                            <progress max="100" x-bind:value="progress"></progress>
                        </div>
                        @error('drive_file')
                            <span class="d-inline-block invalid-feedback mt-2">
                                {{ $message }}
                            </span>
                        @enderror

                    </div>



                    <div class="row mt-3">

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
                        <div class="col-md-3 col-12">
                            <label class="form-label" for="payment-status">
                                Document Type
                            </label>
                            {!! $setupValues['document_types']['rendered'] !!}

                        </div>
                        @if (!$noExp)
                            <div class="col-lg-3 pe-lg-5 mb-4">
                                <label class="form-label" for="expiration_date">
                                    Expiration Date
                                </label>
                                <div class="position-relative flex-grow-1">
                                    <input type="text" class="form-control js-single-date"
                                        placeholder="Select Expiration Date" aria-label="" aria-describedby=""
                                        wire:model.defer="field.expiration_date" name="expiration_date"
                                        id="expiration_date">
                                    <svg aria-label="Select Date" class="icon-date" width="20" height="21"
                                        viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18.75 2.28511L13.7456 2.28513V1.03921C13.7456 0.693815 13.4659 0.414062 13.1206 0.414062C12.7753 0.414062 12.4956 0.693815 12.4956 1.03921V2.28481H7.49563V1.03921C7.49563 0.693815 7.21594 0.414062 6.87063 0.414062C6.52531 0.414062 6.24563 0.693815 6.24563 1.03921V2.28481H1.25C0.559687 2.28481 0 2.84463 0 3.53511V19.1638C0 19.8542 0.559687 20.4141 1.25 20.4141H18.75C19.4403 20.4141 20 19.8542 20 19.1638V3.53511C20 2.84492 19.4403 2.28511 18.75 2.28511ZM18.75 19.1638H1.25V3.53511H6.24563V4.16494C6.24563 4.51032 6.52531 4.79009 6.87063 4.79009C7.21594 4.79009 7.49563 4.51032 7.49563 4.16494V3.53542H12.4956V4.16525C12.4956 4.51065 12.7753 4.7904 13.1206 4.7904C13.4659 4.7904 13.7456 4.51065 13.7456 4.16525V3.53542H18.75V19.1638ZM14.375 10.412H15.625C15.97 10.412 16.25 10.1319 16.25 9.78686V8.53657C16.25 8.19149 15.97 7.91142 15.625 7.91142H14.375C14.03 7.91142 13.75 8.19149 13.75 8.53657V9.78686C13.75 10.1319 14.03 10.412 14.375 10.412ZM14.375 15.4129H15.625C15.97 15.4129 16.25 15.1331 16.25 14.7877V13.5374C16.25 13.1924 15.97 12.9123 15.625 12.9123H14.375C14.03 12.9123 13.75 13.1924 13.75 13.5374V14.7877C13.75 15.1334 14.03 15.4129 14.375 15.4129ZM10.625 12.9123H9.375C9.03 12.9123 8.75 13.1924 8.75 13.5374V14.7877C8.75 15.1331 9.03 15.4129 9.375 15.4129H10.625C10.97 15.4129 11.25 15.1331 11.25 14.7877V13.5374C11.25 13.1927 10.97 12.9123 10.625 12.9123ZM10.625 7.91142H9.375C9.03 7.91142 8.75 8.19149 8.75 8.53657V9.78686C8.75 10.1319 9.03 10.412 9.375 10.412H10.625C10.97 10.412 11.25 10.1319 11.25 9.78686V8.53657C11.25 8.19118 10.97 7.91142 10.625 7.91142ZM5.625 7.91142H4.375C4.03 7.91142 3.75 8.19149 3.75 8.53657V9.78686C3.75 10.1319 4.03 10.412 4.375 10.412H5.625C5.97 10.412 6.25 10.1319 6.25 9.78686V8.53657C6.25 8.19118 5.97 7.91142 5.625 7.91142ZM5.625 12.9123H4.375C4.03 12.9123 3.75 13.1924 3.75 13.5374V14.7877C3.75 15.1331 4.03 15.4129 4.375 15.4129H5.625C5.97 15.4129 6.25 15.1331 6.25 14.7877V13.5374C6.25 13.1927 5.97 12.9123 5.625 12.9123Z"
                                            fill="black" />
                                    </svg>
                                </div>

                                @error('field.expiration_date')
                                    <span class="d-inline-block invalid-feedback mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                        @endif
                    </div>

                    <div class="row mt-3">

                        <div class=" ">
                            {{-- <button wire:click="refreshData"
                                                                    class="btn btn-outline-dark rounded px-4 py-2" type="button">Cancel</button>  --}}

                            <button wire:click.prevent="upload" wire:loading.attr="disabled" wire:target="drive_file"
                                class="btn btn-secondary btn-custom rounded  " type="submit">
                                <span class="btn-text">
                                Upload File
                                </span> </button>
                        </div>
                    </div>

                </div>
            </form>
        @endif
    </div>
    @if ($existingDocuments != null)


        @foreach ($existingDocuments as $index => $doc)
            <div class="d-lg-inline-flex">
                <div class="mx-2" style="max-width:190px">
                    <div class="position-relative" style="width:190px;height:250px">

                        <img style="width:100%;height:100%"
                            src="{{ $this->isImage($doc->document_path) ? $doc->document_path : '/tenant-resources/images/img-placeholder-document.jpg' }}" />
                        <div class="position-absolute top-0 end-0">
                            <a wire:click.prevent="deleteFile({{ $doc->id }},'{{ $doc->document_path }}')"
                                href="#" title="Delete" aria-label="Delete"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon mx-0">
                                <svg aria-label="Delete" class="delete-icon" width="20" height="20"
                                    viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <p><a href="{{ $doc->document_path }}" target="_blank"><b>{{ $doc->document_title }} </b>
                            {{-- - {{basename($doc->document_path)}} --}}
                        </a></p>
                    @if ($doc->expiration_date != null)
                        <p>Expiration : {{ date_format(date_create($doc->expiration_date), 'm/d/Y') }}</p>
                    @endif
                    <p>{{ $doc->note }}</p>

                </div>
            </div>
        @endforeach
    @endif


    @push('scripts')
        <script>
            function updateVal(attrName, val) {

                Livewire.emit('updateVal', attrName, val);

            }
        </script>
    @endpush
</div>
