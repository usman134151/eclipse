<div>
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">Add Credential</h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    <svg width="22" height="23" viewBox="0 0 22 23" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="/css/sprite.svg#home"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">
                                    Settings
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                Credential
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form class="form">
                @csrf
                <div class="row">
                    <div class="col-lg-5">
                        <div class="mb-4">
                            <label class="form-label" for="title"> Title </label>
                            <input type="text" id="title" class="form-control" name="title" placeholder="Enter Title" />
                        </div>
                    </div>
                    <div class="col-lg-5 ms-5">
                        <div class="mb-4">
                            <label class="form-label" for="service-name">
                                Attach Credential To
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" id="tags" name="tags" type="checkbox" tabindex="" />
                                <label class="form-check-label" for="tags">Tags</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="specializations" name="specializations"
                                    type="checkbox" tabindex="" />
                                <label class="form-check-label" for="specializations"> Specializations</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="accomodation-service" name="accomodation-service"
                                    type="checkbox" tabindex="" checked />
                                <label class="form-check-label" for="accomodation-service"> Accommodations &
                                    Services</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-md-2">
                        <div class="row">
                            <div class="col-lg-5 mb-3">
                                <p class="fs-5">Select Accommodation</p>
                                <div class="content-body">
                                    <div class="card">
                                        <div class="card-body shadow-sm">
                                            <input type="search" class="form-control" id="search" name="search"
                                                placeholder="Search" autocomplete="on"
                                                aria-label="Search Accommodation" />
                                            <div class="overflow-y-auto max-h-30rem">
                                                <table id="unassigned_data" class="table table-hover"
                                                    aria-label="Admin Staff Teams Table">
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <td class="text-start">
                                                            </td>
                                                            <td>
                                                                <div class="d-flex actions me-4">
                                                                    <span class="me-1">Add All</span>
                                                                    <svg width="20" height="21" viewBox="0 0 20 21">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#grey-plus-icon">
                                                                        </use>
                                                                    </svg>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td class="text-start">
                                                                <p>Shelby Sign Language</p>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-end actions mx-5">
                                                                    <svg width="20" height="21" viewBox="0 0 20 21">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#grey-plus-icon">
                                                                        </use>
                                                                    </svg>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td class="text-start">
                                                                <p>Language Translation Services</p>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-end actions mx-5">
                                                                    <svg width="20" height="21" viewBox="0 0 20 21">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#grey-plus-icon">
                                                                        </use>
                                                                    </svg>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td class="text-start">
                                                                <p>Real Time Captioning Services</p>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-end actions mx-5">
                                                                    <svg width="20" height="21" viewBox="0 0 20 21">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#grey-plus-icon">
                                                                        </use>
                                                                    </svg>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td class="text-start">
                                                                <p>Real Time Captioning Services</p>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-end actions mx-5">
                                                                    <svg width="20" height="21" viewBox="0 0 20 21">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#grey-plus-icon">
                                                                        </use>
                                                                    </svg>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td class="text-start">
                                                                <p>Real Time Captioning Services</p>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-end actions mx-5">
                                                                    <svg width="20" height="21" viewBox="0 0 20 21">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#grey-plus-icon">
                                                                        </use>
                                                                    </svg>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td class="text-start">
                                                                <p>Real Time Captioning Services</p>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-end actions mx-5">
                                                                    <svg width="20" height="21" viewBox="0 0 20 21">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#grey-plus-icon">
                                                                        </use>
                                                                    </svg>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td class="text-start">
                                                                <p> Spoken Language Interpreting Services</p>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-end actions mx-5">
                                                                    <svg width="20" height="21" viewBox="0 0 20 21">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#grey-plus-icon">
                                                                        </use>
                                                                    </svg>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5 ps-lg-5 mx-3">
                                <div class="mb-3">
                                    <p class="fs-5">Select Service</p>
                                </div>
                                <div class="card">
                                    <div class="card-body shadow-sm">
                                        <input type="search" class="form-control" id="search-service"
                                            name="search-service" placeholder="Search" autocomplete="on"
                                            aria-label="Search Service" />
                                        <div class="overflow-y-auto max-h-30rem">
                                            <table id="" class="table table-hover" aria-label="Select Service Table">
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td class="text-start">
                                                        </td>
                                                        <td>
                                                            <div class="d-flex actions me-4">
                                                                <span class="me-1">Add All</span>
                                                                <svg width="20" height="21" viewBox="0 0 20 21">
                                                                    <use
                                                                        xlink:href="/css/common-icons.svg#grey-plus-icon">
                                                                    </use>
                                                                </svg>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="text-start">
                                                            <p>Shelby Sign Language</p>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end actions mx-5">
                                                                <svg width="20" height="21" viewBox="0 0 20 21">
                                                                    <use
                                                                        xlink:href="/css/common-icons.svg#grey-plus-icon">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="text-start">
                                                            <p>Language Translation Services</p>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end actions mx-5">
                                                                <svg width="20" height="21" viewBox="0 0 20 21">
                                                                    <use
                                                                        xlink:href="/css/common-icons.svg#grey-plus-icon">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="text-start">
                                                            <p>Real Time Captioning Services</p>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end actions mx-5">
                                                                <svg width="20" height="21" viewBox="0 0 20 21">
                                                                    <use
                                                                        xlink:href="/css/common-icons.svg#grey-plus-icon">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="text-start">
                                                            <p>Real Time Captioning Services</p>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end actions mx-5">
                                                                <svg width="20" height="21" viewBox="0 0 20 21">
                                                                    <use
                                                                        xlink:href="/css/common-icons.svg#grey-plus-icon">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="text-start">
                                                            <p>Real Time Captioning Services</p>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end actions mx-5">
                                                                <svg width="20" height="21" viewBox="0 0 20 21">
                                                                    <use
                                                                        xlink:href="/css/common-icons.svg#grey-plus-icon">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="text-start">
                                                            <p>Real Time Captioning Services</p>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end actions mx-5">
                                                                <svg width="20" height="21" viewBox="0 0 20 21">
                                                                    <use
                                                                        xlink:href="/css/common-icons.svg#grey-plus-icon">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="text-start">
                                                            <p>Real Time Captioning Services</p>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end actions mx-5">
                                                                <svg width="20" height="21" viewBox="0 0 20 21">
                                                                    <use
                                                                        xlink:href="/css/common-icons.svg#grey-plus-icon">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="text-start">
                                                            <p>Real Time Captioning Services</p>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end actions mx-5">
                                                                <svg width="20" height="21" viewBox="0 0 20 21">
                                                                    <use
                                                                        xlink:href="/css/common-icons.svg#grey-plus-icon">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-10">
                        <h3 class="mb-4">Selected Accommodation & Services </h3>
                        <table class="table table-light" aria-label="Selected Accommodation & Services ">
                            <thead>
                                <th scope="col" class="text-dark">Accommodation</th>
                                <th scope="col" class="text-dark">Service</th>
                                <th scope="col" class="text-dark">ACTION</th>
                            </thead>
                            <tbody>
                                <tr class="odd">
                                    <td>
                                        JShelby Sign Language
                                    </td>
                                    <td>
                                        Language interpreting
                                    </td>
                                    <td>
                                        <a href="#" aria-label="delete"
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
                                                <use xlink:href="/css/common-icons.svg#recycle-bin"></use>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="even">
                                    <td>
                                        JShelby Sign Language
                                    </td>
                                    <td>
                                        Language interpreting
                                    </td>
                                    <td>
                                        <a href="#" aria-label="delete"
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
                                                <use xlink:href="/css/common-icons.svg#recycle-bin"></use>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row mb-4">
                    <h3 class="mb-4">Requirement Status: (what to do if document expires)</h3>
                    <div class="col-lg-12">
                        <div class="form-check">
                            <input class="form-check-input" id="deactivated-associated-service"
                                name="deactivated-associated-service" type="checkbox" tabindex="" />
                            <label class="form-check-label" for="deactivated-associated-service">Deactivate Associated
                                Service
                                <svg aria-label="Information" width="15" height="16" viewBox="0 0 15 16">
                                    <use xlink:href="/css/common-icons.svg#fill-question"></use>
                                </svg>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="reset-provider-priority" name="reset-provider-priority"
                                type="checkbox" tabindex="" />
                            <label class="form-check-label" for="reset-provider-priority">Reset Provider Priority
                                <svg aria-label="Information" width="15" height="16" viewBox="0 0 15 16">
                                    <use xlink:href="/css/common-icons.svg#fill-question"></use>
                                </svg>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="assignment-invitation" name="assignment-invitation"
                                type="checkbox" tabindex="" />
                            <label class="form-check-label" for="assignment-invitation">Hold All Assignment Invitations
                                <svg aria-label="Information" width="15" height="16" viewBox="0 0 15 16">
                                    <use xlink:href="/css/common-icons.svg#fill-question"></use>
                                </svg>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="lenient" name="" type="checkbox" tabindex="" />
                            <label class="form-check-label" for="lenient">Lenient
                                <svg aria-label="Information" width="15" height="16" viewBox="0 0 15 16">
                                    <use xlink:href="/css/common-icons.svg#fill-question"></use>
                                </svg>
                            </label>
                        </div>
                    </div>
                </div>
                @foreach($documents as $index=>$document)
                <div class="row p-3">
                    <div class="col-6 border-dashed rounded">
                        <div class="mb-5">
                            <div class="row mb-3 mt-3">
                                <div class="d-flex justify-content-between">
                                <h3>Document Type {{ $loop->index + 1 }}</h3>
                                <div class="align-items-center gap-2">
                                    <a wire:click.prevent="removeDocumentType({{$index}})" href="#" title="Delete" aria-label="Delete"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg class="delete-icon" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            </div>
                            <div class="d-lg-flex gap-4 align-items-center">
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="upload-only" name="upload-only" type="radio"
                                            tabindex="" wire:key="upload-{{ $index }}" wire:model.lazy="documents.{{$index}}.upload_only" />
                                        <label class="form-check-label" for="upload-only">Upload Only
                                            <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 0.5C3.3645 0.5 0 3.8645 0 8C0 12.1355 3.3645 15.5 7.5 15.5C11.6355 15.5 15 12.1355 15 8C15 3.8645 11.6355 0.5 7.5 0.5ZM8.25 12.5H6.75V11H8.25V12.5ZM8.982 8.83625C8.835 8.95475 8.69325 9.068 8.58075 9.1805C8.27475 9.48575 8.25075 9.76325 8.25 9.77525V9.875H6.75V9.74975C6.75 9.66125 6.77175 8.867 7.5195 8.11925C7.66575 7.973 7.84725 7.8245 8.03775 7.67C8.58825 7.22375 8.94975 6.89825 8.94975 6.44975C8.94104 6.07086 8.78438 5.71044 8.5133 5.44559C8.24222 5.18074 7.87824 5.03251 7.49926 5.0326C7.12027 5.0327 6.75638 5.18112 6.48543 5.44611C6.21449 5.7111 6.05802 6.07161 6.0495 6.4505H4.5495C4.5495 4.82375 5.87325 3.5 7.5 3.5C9.12675 3.5 10.4505 4.82375 10.4505 6.4505C10.4505 7.64825 9.56625 8.363 8.982 8.83625Z"
                                                    fill="#888575" />
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="acknoeledge-document"
                                            name="acknoeledge-document" type="radio" tabindex="" wire:key="acknowledege-{{ $index }}" wire:model.lazy="documents.{{$index}}.acknowledge_document"/>
                                        <label class="form-check-label" for="acknoeledge-document">Acknowledge Document
                                            <svg aria-label="Information" width="15" height="16" viewBox="0 0 15 16">
                                                <use xlink:href="/css/common-icons.svg#fill-question"></use>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline mb-3">
                                        <input class="form-check-input" id="sign-document" name="sign-document"
                                            type="radio" tabindex=""  wire:key="signindoc-{{ $index }}" wire:model.lazy="documents.{{$index}}.sign_document"/>
                                        <label class="form-check-label" for="sign-document">Sign Document
                                            <svg aria-label="Information" width="15" height="16" viewBox="0 0 15 16">
                                                <use xlink:href="/css/common-icons.svg#fill-question"></use>
                                            </svg>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="set-expiry" name="set-expiry" type="radio"
                                            tabindex="" wire:key="setexpr-{{ $index }}" wire:model.lazy="documents.{{$index}}.set_expiry"/>
                                        <label class="form-check-label" for="set-expiry">Set Expiry</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="user-set-expiry" name="user-set-expiry"
                                            type="radio" tabindex="" wire:key="userexp-{{ $index }}" wire:model.lazy="documents.{{$index}}.user_set_expiry"/>
                                        <label class="form-check-label" for="user-set-expiry">User Set Expiry</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="d-lg-flex ">
                                    <label class="form-label" for="expiration-within">
                                        Expiration Within
                                    </label>
                                </div>
                                <div class="row">
                                    <div class="d-inline-flex">
                                        <input class="form-control w-50" type="" id="expiration-within"
                                            placeholder="$00:00" wire:key="months-{{ $index }}" wire:model.lazy="documents.{{$index}}.expiration_within">
                                        <div class="text-nowrap col-lg-4 ms-2 mt-3"><span>Months</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex flex-column justify-content-md-center mb-3">
                                    <label for="formFile" class="form-label">
                                        Upload Document
                                    </label>
                                    <input class="form-control" type="file" id="formFile"  wire:key="form-{{ $index }}" wire:model.lazy="documents.{{$index}}.formFile">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="row mb-5">
                    <div class="d-flex justify-content-end col-6">
                        <button class="btn btn-primary rounded" wire:click.prevent="addDocumentType">
                            <svg class="mx-2" aria-label="Add Message" width="20" height="20" viewBox="0 0 20 20">
                                <use xlink:href="/css/common-icons.svg#plus">
                                </use>
                            </svg>
                            <span class="mx-2"> Add Document</span>
                        </button>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-outline-primary rounded" wire:click.prevent="showList">Cancel</button>
                    <button class="btn btn-primary rounded mx-2" wire:click.prevent="showList">Save</button>
                </div>


            </form>
        </div>
    </div>
</div>
