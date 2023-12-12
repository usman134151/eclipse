<div class="col-lg-12 between-section-segment-spacing">
    <div class="mb-3 position-relative">
        <button @click.prevent="addDocuments = true" class="btn btn-primary d-block" wire:click="$emit('initFields')" ></a>
            Add Documents</button>
    </div>
    <div class="row mb-4">
        @if(count($documents))
            @foreach ($documents as $document)
                <div class="col-lg-2 position-relative me-2" style="width:190px"  >
                    <img src="{{ $this->isImage($document['document_type']) ? $document['document_name'] : '/tenant-resources/images/img-placeholder-document.jpg' }}"
                        alt="img-placeholder-document" class="w-100">
                    <p class="font-family-secondary"><small> {{ $document['document_title'] }} </small></p>
                
                    <div class="position-absolute top-0 end-0 {{$isProviderPanel ? "hidden" : ''}}">
                        <a wire:click.prevent="deleteFile({{ $document['id'] }},'{{ $document->document_name }}')" href="#"
                            title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon mx-0">
                            <svg aria-label="Delete" class="delete-icon" width="20" height="20" viewBox="0 0 20 20"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="/css/sprite.svg#delete-icon"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        @else
            <small>No Documents Attached</small>
        @endif
    </div>
</div>
