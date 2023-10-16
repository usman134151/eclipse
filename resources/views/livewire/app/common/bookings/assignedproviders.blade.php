  <div>

      <div class="between-section-segment-spacing">
          @if (!session()->get('isCustomer'))
              <div class="d-lg-flex align-items-center justify-content-between header-row">
                  <h2 class="mb-lg-0">Service {{ $index }} Assigned Providers </h2>
                  <div class="d-flex flex-md-row flex-column gap-3">
                      @if (!$isProviderPanel)
                          <a class="btn btn-has-icon btn-outline-dark rounded"
                              wire:click="$emit('openAssignProvidersPanel',{{ $booking_id }},{{ $service_id }})"
                              @click="assignProvider = true" href="javascript:refreshSelectsEvent()">
                              <svg aria-label="Assign Providers" vwidth="20" height="20" viewBox="0 0 20 20">
                                  <use xlink:href="/css/common-icons.svg#assign-providers">
                                  </use>
                              </svg>
                              Assign Providers
                          </a>
                      @endif

                      {{-- <a href="#" class="btn btn-has-icon btn-primary rounded" data-bs-toggle="modal"
                      data-bs-target="#AssignproviderTeamModal">
                      <svg aria-label=" Manage Providers" width="18" height="18" viewBox="0 0 18 18">
                          <use xlink:href="/css/common-icons.svg#manage-icon"></use>
                      </svg>
                      Manage Providers
                  </a> --}}
                      @if (!$limitReached && !$isProviderPanel)
                          <a href="#" class="btn btn-has-icon btn-primary rounded"
                              wire:click="$emit('openAssignProvidersPanel',{{ $booking_id }},{{ $service_id }},2)"
                              @click="assignProvider = true" href="javascript:refreshSelectsEvent()">
                              {{-- Updated by Shanila to Add svg icon --}}
                              <svg aria-label="Invite Providers" width="18" height="18" viewBox="0 0 18 18"
                                  fill="none">
                                  <use xlink:href="/css/common-icons.svg#invite-icon"></use>
                              </svg>
                              {{-- End of update by Shanila --}}
                              Invite Providers
                          </a>
                          @if ($inv_exists)
                              <a href="#" class="btn btn-has-icon btn-primary rounded"
                                  wire:click="$emit('openAssignProvidersPanel',{{ $booking_id }},{{ $service_id }},3)"
                                  @click="assignProvider = true" href="javascript:refreshSelectsEvent()">
                                  <i class="fa fa-envelope-open"></i>
                                  View Response
                              </a>
                          @endif
                      @endif

                      <a href="#" class="btn btn-has-icon btn-primary rounded">
                          <svg aria-label="Team Chat" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <use xlink:href="/css/common-icons.svg#message-icon">
                              </use>
                          </svg>
                          Team Chat

                      </a>

                  </div>
              </div>
              <div class="mb-4 {{ $isProviderPanel ? 'hidden' : '' }}">
                  <button class="btn btn-outline-primary btn-has-icon btn-sm dropdown-toggle h-100" type="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      <span>

                          <svg aria-label="Export " width="23" height="26" viewBox="0 0 23 26">
                              <use xlink:href="/css/common-icons.svg#document-dropdown">
                              </use>
                          </svg>

                      </span>
                  </button>
              </div>
              <div class="d-flex justify-content-between mb-2 {{ $isProviderPanel ? 'hidden' : '' }}">
                  <div class="d-inline-flex align-items-center gap-4">
                      {{-- <div class="d-inline-flex align-items-center gap-4">
                            <label for="show_records" class="form-label-sm mb-0">Show</label>
                            <select class="form-select form-select-sm" id="show_records">
                                <option>10</option>
                                <option>15</option>
                                <option>20</option>
                                <option>25</option>
                            </select>
                        </div> --}}
                      <div class="d-flex gap-4 align-items-center">
                          <div class="form-check form-switch mb-lg-0">
                              <input class="form-check-input" type="checkbox" role="switch" id="autoNotify" checked
                                  aria-label="Auto-notify Toggle">
                              <label class="form-check-label" for="autoNotify">Auto-notify</label>
                          </div>
                          <div class="form-check form-switch mb-lg-0">
                              <input class="form-check-input" type="checkbox" role="switch" id="autoNotify"
                                  aria-label="Auto-notify Toggle">
                              <label class="form-check-label" for="autoNotify">Auto-Assign</label>
                          </div>
                      </div>
                  </div>
                  <div class="d-inline-flex align-items-center gap-4">
                      <label for="search-coulmn" class="form-label-sm mb-0">Search</label>
                      <input type="search" class="form-control form-control-sm" id="search-coulmn" name="search"
                          placeholder="Search here" autocomplete="on" />
                  </div>
              </div>
          @endif
          <!-- Hoverable rows start -->
          <div class="row" id="table-hover-row">
              <div class="col-12">
                  <div class="card">
                      <div class="table-responsive">
                          <table id="unassigned_data" class="table table-fs-md table-hover" aria-label="">
                              <thead>
                                  <tr role="row">
                                      <th scope="col" class="text-center">
                                          <input class="form-check-input" type="checkbox" value=""
                                              aria-label="Select All Teams">
                                      </th>
                                      <th scope="col">Provider</th>
                                      @if (!$isProviderPanel)
                                          <th scope="col">Additional Pay</th>
                                          <th scope="col" class="text-center">Additional Pay</th>
                                          <th scope="col" class="text-center">Time Paid</th>
                                          <th scope="col" class="text-center">Total Payment</th>
                                      @endif
                                      <th class="text-center">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @if (count($assignedProviders))
                                      @foreach ($assignedProviders as $index => $provider)
                                          <tr role="row" class="odd">
                                              <td class="text-center align-middle">
                                                  <input class="form-check-input" type="checkbox" value=""
                                                      aria-label="Select Team">
                                              </td>
                                              <td class="align-middle">
                                                  <div class="d-flex gap-2 align-items-center">
                                                      <div>
                                                          <img width="50" height="50"
                                                              src="{{ $provider['profile_pic'] ? $provider['profile_pic'] : '/tenant-resources/images/portrait/small/avatar-s-20.jpg' }}"
                                                              class="rounded-circle" alt="Provider Profile Image">
                                                      </div>
                                                      <div class="pt-2">
                                                          <div class="font-family-secondary leading-none">
                                                              {{ $provider['name'] }}</div>
                                                          <a target="_blank"
                                                              href="{{ route('tenant.provider-profile', ['providerID' => $provider['provider_id']]) }}"
                                                              class="font-family-secondary"><small>
                                                                  {{ $provider['email'] }}</small></a>
                                                      </div>
                                                  </div>
                                              </td>
                                              @if (!$isProviderPanel)
                                                  <td class="align-middle">
                                                      Additional Pay Label
                                                  </td>
                                                  <td class="text-center align-middle">
                                                      $00:00
                                                  </td>
                                                  <td class="text-center align-middle">
                                                      {{ $provider['paid_at'] }}
                                                  </td>
                                                  <td class="text-center align-middle">{{ $provider['paid_amount'] }}
                                                  </td>
                                              @endif
                                              <td class="align-middle">
                                                  <div class="d-flex actions justify-content-center">
                                                      @if (!$isProviderPanel && !session()->get('isCustomer'))
                                                          <a href="#" title="Revoke" aria-label="Revoke"
                                                              data-bs-toggle="modal" data-bs-target="#UnassignModal"
                                                              wire:click="$emit('openUnassignModal','{{ $provider['booking_service_id'] ? $provider['booking_service_id'] : 'null' }}',{{ $provider['provider_id'] }},{{ $provider['booking_id'] }})"
                                                              class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                              <svg aria-label="Revoke" width="19" height="20"
                                                                  viewBox="0 0 19 20">
                                                                  <use xlink:href="/css/common-icons.svg#unassign">
                                                                  </use>
                                                              </svg>

                                                          </a>
                                                           <a href="#" title="Feedback"
                                                                  aria-label="Feedback"
                                                                  class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                  <svg aria-label="Rating" width="22"
                                                                      height="22" viewBox="0 0 22 22"
                                                                      fill="none">
                                                                      <use
                                                                          xlink:href="/css/common-icons.svg#rating-icon">
                                                                      </use>
                                                                  </svg>

                                                              </a>

                                                      @endif
                                                      @if (!session()->get('isCustomer'))
                                                          <a target="_blank" href="/chat/{{$provider['provider_id']}}" title="Chat" aria-label="Chat"
                                                              class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                              <svg aria-label="Chat" width="18" height="18"
                                                                  viewBox="0 0 18 18"
                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                  <use xlink:href="/css/common-icons.svg#chat-icon">
                                                                  </use>
                                                              </svg>

                                                          </a>
                                                      @endif

                                                          @if (!$isProviderPanel)
                                                             <a href="{{ route('tenant.provider-profile', ['providerID' => $provider['provider_id']]) }}"
                                                              target="_blank" title="View" aria-label="View"
                                                              class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                              <svg aria-label="View" width="20" height="20"
                                                                  viewBox="0 0 20 20">
                                                                  <use xlink:href="/css/common-icons.svg#view">
                                                                  </use>
                                                              </svg>

                                                          </a>
                                                          @endif
                                                  </div>
                                              </td>
                                          </tr>
                                      @endforeach
                                  @else
                                      <tr>
                                          <td colSpan="{{ $isProviderPanel ? '3' : '7' }}">
                                              <small>
                                                  No providers assigned to this service.
                                              </small>
                                          </td>
                                      </tr>
                                  @endif
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Hoverable rows end -->
          {{ $assignedProviders->links() }}

      </div>
  </div>
