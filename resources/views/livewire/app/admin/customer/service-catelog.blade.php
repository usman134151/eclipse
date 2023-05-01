<div class="row">
                                    <div class="card-body">
                                        <form class="form">
                                            {{-- updated by shanila to add csrf--}}
                                            @csrf
                                            {{-- update ended by shanila --}}
                                            <div class="col-md-10">
                                                <h2>Service Catalog</h2>
                                            </div>
                                            <div class="col-md-12 between-section-segment-spacing">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <div class="mb-3">
                                                            <p class="fs-5">
                                                                Filter By Accommodation
                                                            </p>
                                                        </div>
                                                        <div class="content-body">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <form class="form">
                                                                        <div class="overflow-y-auto">
                                                                            <table id="unassigned_data"
                                                                                class="table table-hover"
                                                                                aria-label="Admin Staff Teams Table">
                                                                                <tbody>
                                                                                    <input type="search"
                                                                                        class="form-control"
                                                                                        id="search-record" name="search"
                                                                                        placeholder="Search"
                                                                                        autocomplete="on"
                                                                                        aria-label="Search" />
                                                                                    <tr role="row" class="odd">
                                                                                        <td class="text-start">
                                                                                            <p>
                                                                                                Shelby Sign Language
                                                                                            </p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr role="row" class="odd">
                                                                                        <td class="text-start">
                                                                                            <p>
                                                                                                Language Translation
                                                                                                Services
                                                                                            </p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    @for ($i = 0; $i < 4; $i++) <tr
                                                                                        role="row" class="odd">
                                                                                        <td class="text-start">
                                                                                            <p>
                                                                                                Real Time Captioning
                                                                                                Services
                                                                                            </p>
                                                                                        </td>
                                                                                        </tr>
                                                                                        @endfor
                                                                                        <tr role="row" class="odd">
                                                                                            <td class="text-start">
                                                                                                <p>
                                                                                                    Sign Language
                                                                                                    Interpreting
                                                                                                    Services
                                                                                                </p>
                                                                                            </td>
                                                                                        </tr>
                                                                                        @for ($i = 0; $i < 5; $i++) <tr
                                                                                            role="row" class="odd">
                                                                                            <td class="text-start">
                                                                                                <p>
                                                                                                    Spoken Language
                                                                                                    Interpreting
                                                                                                    Services
                                                                                                </p>
                                                                                            </td>
                                                                                            </tr>
                                                                                            @endfor
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-7">
                                                        <div class="mb-3">
                                                            <p class="fs-5">
                                                                Select Service
                                                            </p>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <form class="form">
                                                                    <div class="overflow-y-auto">
                                                                        <table id="unassigned_data"
                                                                            class="table table-hover"
                                                                            aria-label="Admin Staff Teams Table">
                                                                            <tbody>
                                                                                <input type="search"
                                                                                    class="form-control" name="search"
                                                                                    placeholder="Search"
                                                                                    autocomplete="on"
                                                                                    aria-label="Search" />
                                                                                <tr role="row" class="odd">
                                                                                    <td class="text-start">
                                                                                        <p>Language interpreting</p>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-check form-switch">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                role="switch"
                                                                                                aria-label="Toggle Team Status">
                                                                                            <label
                                                                                                class="form-check-label">
                                                                                                Active
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="d-flex actions">
                                                                                            <a @click="customers = true"
                                                                                                href="#"
                                                                                                title="Customers"
                                                                                                aria-label="Customers"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                <svg aria-label="Customers"
                                                                                                    class="fill"
                                                                                                    width="21"
                                                                                                    height="20"
                                                                                                    viewBox="0 0 21 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/sprite.svg#user-group">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            </a>
                                                                                            <a href="#"
                                                                                                title="Department"
                                                                                                aria-label="Department"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                <svg aria-label="Department"
                                                                                                    class="fill"
                                                                                                    width="21"
                                                                                                    height="20"
                                                                                                    viewBox="0 0 21 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/sprite.svg#building">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="text-start">
                                                                                        <p>
                                                                                            New service capacity and
                                                                                            capabilities
                                                                                        </p>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-check form-switch">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                role="switch"
                                                                                                aria-label="Toggle Team Status">
                                                                                            <label
                                                                                                class="form-check-label">
                                                                                                Active
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="d-flex actions">
                                                                                            <a @click="customers = true"
                                                                                                href="#"
                                                                                                title="Customers"
                                                                                                aria-label="Customers"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                <svg aria-label="Customers"
                                                                                                    class="fill"
                                                                                                    width="21"
                                                                                                    height="20"
                                                                                                    viewBox="0 0 21 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/sprite.svg#user-group">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            </a>
                                                                                            <a href="#"
                                                                                                title="Department"
                                                                                                aria-label="Department"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                <svg aria-label="Department"
                                                                                                    class="fill"
                                                                                                    width="21"
                                                                                                    height="20"
                                                                                                    viewBox="0 0 21 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/sprite.svg#building">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="text-start">
                                                                                        <p>
                                                                                            Shelby test two service
                                                                                        </p>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-check form-switch">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                role="switch"
                                                                                                aria-label="Toggle Team Status">
                                                                                            <label
                                                                                                class="form-check-label">
                                                                                                Active
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="d-flex actions">
                                                                                            <a @click="customers = true"
                                                                                                href="#"
                                                                                                title="Customers"
                                                                                                aria-label="Customers"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                <svg aria-label="Customers"
                                                                                                    class="fill"
                                                                                                    width="21"
                                                                                                    height="20"
                                                                                                    viewBox="0 0 21 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/sprite.svg#user-group">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            </a>
                                                                                            <a href="#"
                                                                                                title="Department"
                                                                                                aria-label="Department"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                <svg aria-label="Department"
                                                                                                    class="fill"
                                                                                                    width="21"
                                                                                                    height="20"
                                                                                                    viewBox="0 0 21 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/sprite.svg#building">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="text-start">
                                                                                        <p>CART Captioning</p>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-check form-switch">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                role="switch"
                                                                                                aria-label="Toggle Team Status">
                                                                                            <label
                                                                                                class="form-check-label">
                                                                                                Active
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="d-flex actions">
                                                                                            <a @click="customers = true"
                                                                                                href="#"
                                                                                                title="Customers"
                                                                                                aria-label="Customers"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                <svg aria-label="Customers"
                                                                                                    class="fill"
                                                                                                    width="21"
                                                                                                    height="20"
                                                                                                    viewBox="0 0 21 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/sprite.svg#user-group">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            </a>
                                                                                            <a href="#"
                                                                                                title="Department"
                                                                                                aria-label="Department"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                <svg aria-label="Department"
                                                                                                    class="fill"
                                                                                                    width="21"
                                                                                                    height="20"
                                                                                                    viewBox="0 0 21 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/sprite.svg#building">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                @for ($i = 0; $i < 5; $i++) <tr
                                                                                    role="row" class="odd">
                                                                                    <td class="text-start">
                                                                                        <p>Transcript Services</p>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="form-check form-switch">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                type="checkbox"
                                                                                                role="switch"
                                                                                                aria-label="Toggle Team Status">
                                                                                            <label
                                                                                                class="form-check-label">
                                                                                                Active
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="d-flex actions">
                                                                                            <a @click="customers = true"
                                                                                                href="#"
                                                                                                title="Customers"
                                                                                                aria-label="Customers"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                <svg aria-label="Customers"
                                                                                                    class="fill"
                                                                                                    width="21"
                                                                                                    height="20"
                                                                                                    viewBox="0 0 21 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/sprite.svg#user-group">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            </a>
                                                                                            <a href="#"
                                                                                                title="Department"
                                                                                                aria-label="Department"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                <svg aria-label="Department"
                                                                                                    class="fill"
                                                                                                    width="21"
                                                                                                    height="20"
                                                                                                    viewBox="0 0 21 20"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/sprite.svg#building">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            </a>
                                                                                        </div>
                                                                                    </td>
                                                                                    </tr>
                                                                                    @endfor
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 form-actions">
                                                <button type="button" class="btn btn-outline-dark rounded px-4 py-2"
                                                x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('company-info')">
                                                    Back
                                                </button>
                                                <button type="submit" class="btn btn-primary rounded px-4 py-2">
                                                    Save & Exit
                                                </button>
                                                <button type="submit" class="btn btn-primary rounded px-4 py-2"
                                                x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('drive-documents')">
                                                    Next
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
