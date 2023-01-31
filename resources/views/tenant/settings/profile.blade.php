@extends('layouts.tenant', ['title' => 'Setting'])

@section('content')
	{{-- BEGIN: Content --}}
	<div class="app-content content">
	<div class="content-wrapper container-xxl p-0">
      <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="col-12">
              <h1 class="content-header-title float-start mb-0">My Profile</h1>
              <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="">
                      <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M1.24997 12.5849H2.33331V20.1682C2.33331 21.3631 3.30506 22.3349 4.49997 22.3349H17.5C18.6949 22.3349 19.6666 21.3631 19.6666 20.1682V12.5849H20.75C20.9642 12.5848 21.1736 12.5212 21.3517 12.4022C21.5298 12.2832 21.6686 12.114 21.7506 11.9161C21.8326 11.7181 21.8541 11.5004 21.8123 11.2902C21.7705 11.0801 21.6674 10.8871 21.5159 10.7356L11.7659 0.985603C11.6654 0.884912 11.546 0.805029 11.4146 0.750526C11.2831 0.696023 11.1423 0.667969 11 0.667969C10.8577 0.667969 10.7168 0.696023 10.5854 0.750526C10.454 0.805029 10.3346 0.884912 10.2341 0.985603L0.484056 10.7356C0.332596 10.8871 0.229455 11.0801 0.187674 11.2902C0.145892 11.5004 0.167346 11.7181 0.249322 11.9161C0.331297 12.114 0.470115 12.2832 0.648226 12.4022C0.826337 12.5212 1.03574 12.5848 1.24997 12.5849ZM8.83331 20.1682V14.7515H13.1666V20.1682H8.83331ZM11 3.28335L17.5 9.78335V14.7515L17.5011 20.1682H15.3333V14.7515C15.3333 13.5566 14.3616 12.5849 13.1666 12.5849H8.83331C7.63839 12.5849 6.66664 13.5566 6.66664 14.7515V20.1682H4.49997V9.78335L11 3.28335Z"
                          fill="#0A1E46" />
                      </svg>

                    </a>
                  </li>

                  <li class="breadcrumb-item">
                    My Profile
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <div class="card">
          <div class="card-body">
            <!-- BEGIN: Steps -->
            <div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'profile' }"
              id="tab_wrapper">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a href="" class="nav-link" :class="{ 'active': tab === 'profile' }"
                    @click.prevent="tab = 'profile'; window.location.hash = 'profile'" id="user-profile-tab" role="tab"
                    aria-controls="user-profile" aria-selected="true"><span class="number">1</span> Profile</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a href="" class="nav-link" :class="{ 'active': tab === 'service-catalog-rates' }"
                    @click.prevent="tab = 'service-catalog-rates'; window.location.hash = 'service-catalog-rates'"
                    id="service-catalog-rates-tab" role="tab" aria-controls="service-catalog-rates"
                    aria-selected="false"><span class="number">2</span>Service Catalog & Rates</a>
                </li>

              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <!-- BEGIN: Profile -->
                <div class="tab-pane fade" :class="{ 'active show': tab === 'profile' }"
                  @click.prevent="tab = 'profile'; window.location.hash = 'profile'" id="user-profile" role="tabpanel"
                  aria-labelledby="user-profile-tab" tabindex="0" x-show="tab === 'profile'">
                  <form class="form">
                    <div class="row mb-4">
                      <p>Here you can view, update, and manage your personal information, service catalog, and rates.
                      </p>
                    </div>
                    <div class="row mb-4">
                      <div class="col-12 text-center mb-4">
                        <div class="d-inline-block position-relative">
                          <img src="images/portrait/small/avatar-s-9.jpg" class="img-fluid rounded-circle"
                            alt="Profile Image of Admin Staff Team" />
                          <!-- <div>
                                      <input class="position-absolute form-control" type="file" />
                                    </div> -->
                          <div
                            class="position-absolute end-0 bottom-0 p-0 d-flex justify-content-center align-items-center">
                            <svg width="57" height="57" viewBox="0 0 57 57" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <circle cx="28.5" cy="28.5" r="28" fill="#0A1E46" stroke="white" />
                              <path
                                d="M42.9375 37.625C42.9375 38.172 42.7202 38.6966 42.3334 39.0834C41.9466 39.4702 41.422 39.6875 40.875 39.6875H16.125C15.578 39.6875 15.0534 39.4702 14.6666 39.0834C14.2798 38.6966 14.0625 38.172 14.0625 37.625V25.25C14.0625 24.703 14.2798 24.1784 14.6666 23.7916C15.0534 23.4048 15.578 23.1875 16.125 23.1875H18.5422C20.1824 23.1866 21.7551 22.5345 22.9147 21.3746L24.6266 19.6668C25.0123 19.281 25.5352 19.0637 26.0807 19.0625H30.9152C31.4622 19.0626 31.9867 19.28 32.3734 19.6668L34.0811 21.3746C34.6558 21.9494 35.3381 22.4054 36.0891 22.7165C36.84 23.0275 37.6449 23.1876 38.4578 23.1875H40.875C41.422 23.1875 41.9466 23.4048 42.3334 23.7916C42.7202 24.1784 42.9375 24.703 42.9375 25.25V37.625ZM16.125 21.125C15.031 21.125 13.9818 21.5596 13.2082 22.3332C12.4346 23.1068 12 24.156 12 25.25V37.625C12 38.719 12.4346 39.7682 13.2082 40.5418C13.9818 41.3154 15.031 41.75 16.125 41.75H40.875C41.969 41.75 43.0182 41.3154 43.7918 40.5418C44.5654 39.7682 45 38.719 45 37.625V25.25C45 24.156 44.5654 23.1068 43.7918 22.3332C43.0182 21.5596 41.969 21.125 40.875 21.125H38.4578C37.3638 21.1248 36.3148 20.69 35.5414 19.9164L33.8336 18.2086C33.0602 17.435 32.0112 17.0002 30.9172 17H26.0828C24.9888 17.0002 23.9398 17.435 23.1664 18.2086L21.4586 19.9164C20.6852 20.69 19.6362 21.1248 18.5422 21.125H16.125Z"
                                fill="white" />
                              <path
                                d="M28.5 35.5625C27.1325 35.5625 25.821 35.0193 24.854 34.0523C23.887 33.0853 23.3438 31.7738 23.3438 30.4063C23.3438 29.0387 23.887 27.7272 24.854 26.7602C25.821 25.7932 27.1325 25.25 28.5 25.25C29.8675 25.25 31.179 25.7932 32.146 26.7602C33.113 27.7272 33.6562 29.0387 33.6562 30.4063C33.6562 31.7738 33.113 33.0853 32.146 34.0523C31.179 35.0193 29.8675 35.5625 28.5 35.5625ZM28.5 37.625C30.4145 37.625 32.2506 36.8645 33.6044 35.5107C34.9582 34.1569 35.7188 32.3208 35.7188 30.4063C35.7188 28.4917 34.9582 26.6556 33.6044 25.3018C32.2506 23.948 30.4145 23.1875 28.5 23.1875C26.5855 23.1875 24.7494 23.948 23.3956 25.3018C22.0418 26.6556 21.2812 28.4917 21.2812 30.4063C21.2812 32.3208 22.0418 34.1569 23.3956 35.5107C24.7494 36.8645 26.5855 37.625 28.5 37.625ZM18.1875 26.2813C18.1875 26.5548 18.0789 26.8171 17.8855 27.0105C17.6921 27.2039 17.4298 27.3125 17.1562 27.3125C16.8827 27.3125 16.6204 27.2039 16.427 27.0105C16.2336 26.8171 16.125 26.5548 16.125 26.2813C16.125 26.0077 16.2336 25.7454 16.427 25.552C16.6204 25.3586 16.8827 25.25 17.1562 25.25C17.4298 25.25 17.6921 25.3586 17.8855 25.552C18.0789 25.7454 18.1875 26.0077 18.1875 26.2813Z"
                                fill="white" />
                            </svg>

                          </div>

                        </div>
                      </div>
                      <div class="col-12 text-center mb-3">
                        <h4> Referral Code: KYTALB </h4>
                      </div>
                      <div class="col-12 d-flex justify-content-center gap-2">
                        <svg width="20" height="28" viewBox="0 0 20 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M9.39048 20.489L8.99006 20.0872L8.51958 20.4029C8.14045 20.6575 7.62737 20.5553 7.37367 20.1743L7.05702 19.6986L6.4843 19.9366C6.08813 20.1009 5.63422 19.912 5.47045 19.5144L5.23474 18.9432L4.67953 19.0539C4.23225 19.1429 3.79727 18.8513 3.70828 18.4017L3.66474 18.1816C3.66048 18.1811 3.65574 18.1802 3.65148 18.1797L1.34074 25.8134C1.29151 25.9772 1.43161 26.1352 1.59917 26.1045L4.47506 25.581C4.68237 25.5436 4.89489 25.608 5.04588 25.7552L7.14506 27.7971C7.26717 27.9159 7.47165 27.8629 7.52134 27.6996L9.65034 20.6651C9.55615 20.6249 9.46764 20.5662 9.39048 20.489Z"
                            fill="#3D9519" />
                          <path
                            d="M9.97852 19.574L7.9636 12.9177L9.97852 12.3029L7.41219 11.5195L9.97048 19.6L9.97852 19.574Z"
                            fill="#47E286" />
                          <path
                            d="M9.97841 19.5732L9.98551 19.5973L12.4274 11.5547L9.97841 12.3021L11.9929 12.9169L9.97841 19.5732Z"
                            fill="#47E286" />
                          <path
                            d="M18.6182 25.8085L16.2942 18.1289L16.2412 18.3968C16.1522 18.8465 15.7172 19.1385 15.2699 19.049L14.711 18.9373L14.4733 19.5124C14.3091 19.91 13.8552 20.0989 13.4595 19.9341L12.8901 19.697L12.5758 20.1694C12.3221 20.5504 11.809 20.6526 11.4299 20.398L10.959 20.0823L10.559 20.4841C10.4847 20.5589 10.399 20.6167 10.3081 20.6569L12.4385 27.6947C12.4878 27.858 12.6922 27.911 12.8144 27.7922L14.9135 25.7503C15.065 25.6031 15.2775 25.5387 15.4844 25.5761L18.3602 26.0996C18.5278 26.1304 18.6679 25.9723 18.6182 25.8085Z"
                            fill="#3D9519" />
                          <path d="M9.97841 19.5758L11.9929 12.9195L9.97841 12.3047L7.96349 12.9195L9.97841 19.5758Z"
                            fill="#47E286" />
                          <path d="M7.41219 11.5207L5.82184 11.0355L6.5233 8.71484L7.41219 11.5207Z" fill="#B5EAD4" />
                          <path d="M12.4275 11.554L13.2965 8.69141L14.05 11.059L12.4275 11.554Z" fill="#B5EAD4" />
                          <path
                            d="M19.3965 10.9698L19.7728 10.5921C20.0757 10.2877 20.0757 9.79452 19.7728 9.49018L19.3965 9.11247L19.6923 8.66897C19.9304 8.31066 19.8348 7.82693 19.4784 7.5879L19.0363 7.29113L19.2398 6.79793C19.4041 6.40035 19.2162 5.94407 18.82 5.77935L18.3254 5.57346L18.43 5.04618C18.5133 4.62398 18.2402 4.21408 17.8199 4.12983L17.2983 4.0257V3.4918C17.2983 3.06155 16.9509 2.71271 16.5225 2.71271H15.9905L15.8869 2.18875C15.8035 1.76702 15.3951 1.49297 14.9748 1.57675L14.4532 1.6804L14.2496 1.1872C14.0859 0.789615 13.6315 0.600761 13.2358 0.765003L12.7407 0.970897L12.4435 0.52361C12.2054 0.166253 11.7235 0.0696963 11.3671 0.309196L10.925 0.605967L10.5488 0.228258C10.2458 -0.0760861 9.75453 -0.0760861 9.45113 0.228258L9.07531 0.605967L8.63323 0.309196C8.27682 0.0696963 7.79498 0.166253 7.5569 0.52361L7.26108 0.967583L6.77025 0.763109C6.37408 0.598394 5.92016 0.787249 5.75592 1.18484L5.55097 1.68135L5.02559 1.57675C4.60528 1.49249 4.19681 1.76702 4.11303 2.18875L4.00937 2.71271H3.47783C3.04901 2.71271 2.70159 3.06155 2.70159 3.4918V4.0257L2.17999 4.12983C1.75968 4.21408 1.48658 4.62398 1.57036 5.04618L1.67401 5.56967L1.18271 5.77414C0.786539 5.93886 0.598158 6.39467 0.7624 6.79225L0.966874 7.28877L0.521953 7.58743C0.165544 7.82693 0.0694597 8.31066 0.308013 8.66849L0.603364 9.11247L0.227548 9.49018C-0.0758495 9.79452 -0.0758495 10.2877 0.227548 10.5921L0.603364 10.9698L0.308013 11.4137C0.0694597 11.7716 0.165544 12.2553 0.521953 12.4943L0.964034 12.7911L0.760506 13.2843C0.596264 13.6819 0.784172 14.1382 1.17987 14.3029L1.67449 14.5088L1.57036 15.0361C1.48658 15.4583 1.75968 15.8686 2.17999 15.9524L2.70159 16.0565V16.5904C2.70159 17.0207 3.04901 17.3695 3.47783 17.3695H4.00937L4.11303 17.8935C4.19681 18.3157 4.60528 18.5897 5.02559 18.506L5.54719 18.4018L5.75071 18.895C5.91448 19.2926 6.3684 19.4815 6.76409 19.3172L7.25918 19.1113L7.55643 19.5586C7.79498 19.9165 8.27682 20.0125 8.63323 19.7735L9.07531 19.4767L9.45113 19.854C9.75453 20.1583 10.2458 20.1583 10.5488 19.854L10.925 19.4767L11.3667 19.7735C11.7231 20.0125 12.2054 19.9165 12.4435 19.5586L12.7388 19.1147L13.2301 19.3191C13.6258 19.4838 14.0802 19.2955 14.244 18.8979L14.4494 18.4009L14.9743 18.506C15.3951 18.5897 15.8035 18.3157 15.8869 17.8935L15.9905 17.3695H16.5225C16.9509 17.3695 17.2983 17.0207 17.2983 16.5904V16.0565L17.8199 15.9524C18.2402 15.8686 18.5133 15.4583 18.43 15.0361L18.3263 14.5126L18.8176 14.3081C19.2133 14.1439 19.4017 13.688 19.238 13.29L19.033 12.7935L19.4784 12.4943C19.8348 12.2553 19.9304 11.7716 19.6923 11.4137L19.3965 10.9698Z"
                            fill="#3D9519" />
                          <path
                            d="M10.0003 1.92649C5.54352 1.92649 1.91742 5.56726 1.91742 10.0425C1.91742 14.5177 5.54352 18.1585 10.0003 18.1585C14.4571 18.1585 18.0827 14.5177 18.0827 10.0425C18.0827 5.56726 14.4571 1.92649 10.0003 1.92649ZM10.0003 18.5069C5.3523 18.5069 1.57048 14.7099 1.57048 10.0425C1.57048 5.37557 5.3523 1.57812 10.0003 1.57812C14.6483 1.57812 18.4296 5.37557 18.4296 10.0425C18.4296 14.7099 14.6483 18.5069 10.0003 18.5069Z"
                            fill="white" />
                          <path
                            d="M9.02206 15.2139L4.52931 10.7026L5.79213 9.4351L9.02206 12.6783L14.7118 6.96484L15.9747 8.23287L9.02206 15.2139Z"
                            fill="white" />
                        </svg>
                        <h4>Certified</h4>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12">
                        <div class="d-lg-flex justify-content-between mb-4">
                          <h2 class="mb-lg-0">Profile</h2>
                          <!-- <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" role="switch" id="userProfile">
                                      <label class="form-check-label" for="userProfile">Active</label>
                                    </div> -->
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="first_name">
                            First Name <span class="mandatory" aria-hidden="true">*</span>
                          </label>
                          <input type="text" id="first_name" class="form-control" name="first_name"
                            placeholder="Enter First Name" required aria-required="true" />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="last_name">
                            Last Name <span class="mandatory" aria-hidden="true">*</span>
                          </label>
                          <input type="text" id="last_name" class="form-control" name="last_name"
                            placeholder="Enter Last Name" required aria-required="true" />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="gender">Gender</label>
                          <select class="form-select" id="gender">
                            <option>Select Gender</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="pronouns">Pronouns</label>
                          <input type="text" id="pronouns" class="form-control" placeholder="Enter Pronouns"
                            name="pronouns" />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="ethnicity">Ethnicity</label>
                          <select class="form-select" id="ethnicity">
                            <option>Select Ethnicity</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="email">Email<span class="mandatory"
                              aria-hidden="true">*</span></label>
                          <input type="text" id="email" class="form-control" placeholder="Enter Email" name="email" />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="phone_number">
                            Phone
                          </label>
                          <input type="text" id="phone_number" class="form-control" name="phone_number"
                            placeholder="Enter Phone Number" required aria-required="true" />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="work_address_line_1">
                            Address Line 1
                          </label>
                          <input type="text" id="work_address_line_1" class="form-control" name="work_address_line_1"
                            placeholder="Enter Address 1" required aria-required="true" />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="work_address_line_2">
                            Address Line 2
                          </label>
                          <input type="text" id="work_address_line_2" class="form-control" name="work_address_line_2"
                            placeholder="Enter Address 2" required aria-required="true" />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="country">Country</label>
                          <select class="select2 form-select" id="country">
                            <option value="USA">USA</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="state">State</label>
                          <select class="form-select" id="state">
                            <option value="Al">Alabama</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="city">City</label>
                          <select class="form-select" id="city">
                            <option>Select City</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="city">Zip Code</label>
                          <input type="text" id="zip_code_postal_code" class="form-control" name="zip_code_postal_code"
                            placeholder="Enter Zip Code/Postal Code" required aria-required="true" />
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="preferred-language">Preferred Language</label>
                          <select class="select2 form-select" id="preferred-language">
                            <option>English</option>
                            <option>French</option>
                            <option>German</option>
                            <option>Duch</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 justify-content-center form-actions d-flex">
                      <button type="button" class="btn btn-outline-dark rounded mx-2">Cancel</button>
                      <button type="submit" class="btn btn-primary rounded">Next</button>
                    </div>
                  </form>
                </div><!-- END: Profile -->
                <div class="tab-content">

                  <!-- BEGIN: service-catalog-rates -->
                  <div class="tab-pane fade" :class="{ 'active show': tab === 'service-catalog-rates' }"
                    @click.prevent="tab = 'service-catalog-rates'; window.location.hash = 'service-catalog-rates'"
                    id="service-catalog-rates" role="tabpanel" aria-labelledby="service-catalog-rates-tab" tabindex="0"
                    x-show="tab === 'service-catalog-rates'">
                    <form class="form">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="mb-4">
                            <div class="row mb-4">
                              <h2 class="mb-lg-0">Accommodation Name</h2>

                            </div>
                            <div class="row mb-4">
                              <div class="col-lg-12 mb-4 ">
                                <a href="" class="btn btn-outline-dark ">Sign Language Interpreting Services</a>
                              </div>
                              <div class="col-lg-12 mb-4 ">
                                <a href="" class="btn btn-outline-dark">Spoken Language Interpreting Services</a>
                              </div>
                              <div class="col-lg-12 mb-4 ">
                                <a href="" class="btn btn-outline-dark">Real Time Captioning Services</a>
                              </div>
                              <div class="col-lg-12 mb-5 ">
                                <a href="" class="btn btn-outline-dark">Language Translation Services</a>
                              </div>

                            </div>
                          </div>
                        </div>

                        <div class="col-md-12 mb-4 mt-1">
                          <div class="col-md-12 d-flex col-12 gap-2 align-items-center mb-4">
                            <h2 class="mb-lg-0">Service Category</h2>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M10 0C4.486 0 0 4.486 0 10C0 15.514 4.486 20 10 20C15.514 20 20 15.514 20 10C20 4.486 15.514 0 10 0ZM11 16H9V14H11V16ZM11.976 11.115C11.78 11.273 11.591 11.424 11.441 11.574C11.033 11.981 11.001 12.351 11 12.367V12.5H9V12.333C9 12.215 9.029 11.156 10.026 10.159C10.221 9.964 10.463 9.766 10.717 9.56C11.451 8.965 11.933 8.531 11.933 7.933C11.9214 7.42782 11.7125 6.94725 11.3511 6.59412C10.9896 6.24099 10.5043 6.04334 9.99901 6.04347C9.4937 6.0436 9.0085 6.2415 8.64725 6.59482C8.28599 6.94814 8.07736 7.42881 8.066 7.934H6.066C6.066 5.765 7.831 4 10 4C12.169 4 13.934 5.765 13.934 7.934C13.934 9.531 12.755 10.484 11.976 11.115Z"
                                fill="#888575" />
                            </svg>
                          </div>
                          <div class="col-md-12">
                            <label class="mb-lg-0">Both Dayrate (new)</label>
                          </div>
                        </div>

                        <div class="col-md-12 mb-4 mt-1">
                          <div class="col-lg-12 d-flex col-12 gap-2 align-items-center mb-4 mt-1">
                            <h3 class="mb-lg-0">Standard Rates</h3>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M10 0C4.486 0 0 4.486 0 10C0 15.514 4.486 20 10 20C15.514 20 20 15.514 20 10C20 4.486 15.514 0 10 0ZM11 16H9V14H11V16ZM11.976 11.115C11.78 11.273 11.591 11.424 11.441 11.574C11.033 11.981 11.001 12.351 11 12.367V12.5H9V12.333C9 12.215 9.029 11.156 10.026 10.159C10.221 9.964 10.463 9.766 10.717 9.56C11.451 8.965 11.933 8.531 11.933 7.933C11.9214 7.42782 11.7125 6.94725 11.3511 6.59412C10.9896 6.24099 10.5043 6.04334 9.99901 6.04347C9.4937 6.0436 9.0085 6.2415 8.64725 6.59482C8.28599 6.94814 8.07736 7.42881 8.066 7.934H6.066C6.066 5.765 7.831 4 10 4C12.169 4 13.934 5.765 13.934 7.934C13.934 9.531 12.755 10.484 11.976 11.115Z"
                                fill="#888575" />
                            </svg>
                          </div>
                          <div class="row mb-4 mt-1">
                            <div class="col-md-3 ">
                              <p class="mb-lg-0 fs-5">Day Rate In-person:</p>
                            </div>
                            <div class="col-md-3">
                              <p class="mb-lg-0 fs-5">$101.00</p>
                            </div>
                          </div>
                          <div class="row mb-4 mt-1">
                            <div class="col-md-3">
                              <p class="mb-lg-0 fs-5">Day Rate Virtual:</p>
                            </div>
                            <div class="col-md-3">
                              <p class="mb-lg-0 fs-5">$101.00</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-12 d-flex col-12 gap-2 align-items-center mb-4 mt-5">
                          <div class="col-md-5 d-flex col-12 gap-2 align-items-center">
                            <h3 class="mb-lg-0">Expedited Hours In-person</h3>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M10 0C4.486 0 0 4.486 0 10C0 15.514 4.486 20 10 20C15.514 20 20 15.514 20 10C20 4.486 15.514 0 10 0ZM11 16H9V14H11V16ZM11.976 11.115C11.78 11.273 11.591 11.424 11.441 11.574C11.033 11.981 11.001 12.351 11 12.367V12.5H9V12.333C9 12.215 9.029 11.156 10.026 10.159C10.221 9.964 10.463 9.766 10.717 9.56C11.451 8.965 11.933 8.531 11.933 7.933C11.9214 7.42782 11.7125 6.94725 11.3511 6.59412C10.9896 6.24099 10.5043 6.04334 9.99901 6.04347C9.4937 6.0436 9.0085 6.2415 8.64725 6.59482C8.28599 6.94814 8.07736 7.42881 8.066 7.934H6.066C6.066 5.765 7.831 4 10 4C12.169 4 13.934 5.765 13.934 7.934C13.934 9.531 12.755 10.484 11.976 11.115Z"
                                fill="#888575" />
                            </svg>
                          </div>
                          <div class="col-md-5 d-flex col-12 gap-2 align-items-center">
                            <h3 class="mb-lg-0">Expedited Hours virtual</h3>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M10 0C4.486 0 0 4.486 0 10C0 15.514 4.486 20 10 20C15.514 20 20 15.514 20 10C20 4.486 15.514 0 10 0ZM11 16H9V14H11V16ZM11.976 11.115C11.78 11.273 11.591 11.424 11.441 11.574C11.033 11.981 11.001 12.351 11 12.367V12.5H9V12.333C9 12.215 9.029 11.156 10.026 10.159C10.221 9.964 10.463 9.766 10.717 9.56C11.451 8.965 11.933 8.531 11.933 7.933C11.9214 7.42782 11.7125 6.94725 11.3511 6.59412C10.9896 6.24099 10.5043 6.04334 9.99901 6.04347C9.4937 6.0436 9.0085 6.2415 8.64725 6.59482C8.28599 6.94814 8.07736 7.42881 8.066 7.934H6.066C6.066 5.765 7.831 4 10 4C12.169 4 13.934 5.765 13.934 7.934C13.934 9.531 12.755 10.484 11.976 11.115Z"
                                fill="#888575" />
                            </svg>
                          </div>
                        </div>

                        <div class="col-md-12 d-flex col-12 gap-2 align-items-center mb-4 mt-1">
                          <div class="col-md-5">
                            <p class="mb-lg-0 fs-5">Parameter 1</p>
                          </div>
                          <div class="col-md-5">
                            <p class="mb-lg-0 fs-5">Parameter 1</p>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-3 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">Hours:</p>
                            </div>
                            <div class="col-md-2 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">1</p>
                            </div>
                            <div class="col-md-3 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">Hours:</p>
                            </div>
                            <div class="col-md-2 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">1</p>
                            </div>

                            <div class="col-md-3 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">Rate:</p>
                            </div>
                            <div class="col-md-2 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">$100.00</p>
                            </div>
                            <div class="col-md-3 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">Rate:</p>
                            </div>
                            <div class="col-md-2 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">$100.00</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-12 d-flex col-12 gap-2 align-items-center mb-4 mt-1">
                          <div class="col-md-5">
                            <p class="mb-lg-0">Multiply by service duration</p>
                          </div>
                          <div class="col-md-5">
                            <p class="mb-lg-0">Multiply by service duration</p>
                          </div>
                        </div>

                        <div class="col-md-12 mb-4 mt-5">
                          <div class="col-lg-12 d-flex col-12 gap-2 align-items-center mb-4 mt-1">
                            <h3 class="mb-lg-0">Specialization Rates</h3>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M10 0C4.486 0 0 4.486 0 10C0 15.514 4.486 20 10 20C15.514 20 20 15.514 20 10C20 4.486 15.514 0 10 0ZM11 16H9V14H11V16ZM11.976 11.115C11.78 11.273 11.591 11.424 11.441 11.574C11.033 11.981 11.001 12.351 11 12.367V12.5H9V12.333C9 12.215 9.029 11.156 10.026 10.159C10.221 9.964 10.463 9.766 10.717 9.56C11.451 8.965 11.933 8.531 11.933 7.933C11.9214 7.42782 11.7125 6.94725 11.3511 6.59412C10.9896 6.24099 10.5043 6.04334 9.99901 6.04347C9.4937 6.0436 9.0085 6.2415 8.64725 6.59482C8.28599 6.94814 8.07736 7.42881 8.066 7.934H6.066C6.066 5.765 7.831 4 10 4C12.169 4 13.934 5.765 13.934 7.934C13.934 9.531 12.755 10.484 11.976 11.115Z"
                                fill="#888575" />
                            </svg>
                          </div>
                          <div class="row mb-4 mt-1">
                            <div class="col-md-3">
                              <p class="mb-lg-0 fs-5">1. Medical:</p>
                            </div>
                          </div>
                          <div class="row mb-4 mt-1">
                            <div class="col-md-3">
                              <p class="mb-lg-0 fs-5">Rate type:</p>
                            </div>
                            <div class="col-md-3">
                              <p class="mb-lg-0 fs-5">%</p>
                            </div>
                          </div>
                          <div class="row mb-4 mt-1">
                            <div class="col-md-3">
                              <p class="mb-lg-0 fs-5">Rate:</p>
                            </div>
                            <div class="col-md-3">
                              <p class="mb-lg-0 fs-5">2.0</p>
                            </div>
                          </div>
                          <div class="row mb-4 mt-1">
                            <div class="col-md-3">
                              <p class="mb-lg-0 fs-5">Rate:</p>
                            </div>
                            <div class="col-md-3">
                              <p class="mb-lg-0 fs-5">2.0</p>
                            </div>
                          </div>
                          <div class="row mb-4 mt-1">
                            <div class="col-md-5">
                              <p class="mb-lg-0">Multiply by service duration</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-12 mb-4 mt-1">
                          <label class="mb-lg-0">Both Dayrate (new)</label>
                        </div>

                        <div class="col-md-12 mb-4 mt-1">
                          <div class="col-md-12 d-flex col-12 gap-2 align-items-center mb-4 mt-1">
                            <h3 class="mb-lg-0">Standard Rates</h3>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M10 0C4.486 0 0 4.486 0 10C0 15.514 4.486 20 10 20C15.514 20 20 15.514 20 10C20 4.486 15.514 0 10 0ZM11 16H9V14H11V16ZM11.976 11.115C11.78 11.273 11.591 11.424 11.441 11.574C11.033 11.981 11.001 12.351 11 12.367V12.5H9V12.333C9 12.215 9.029 11.156 10.026 10.159C10.221 9.964 10.463 9.766 10.717 9.56C11.451 8.965 11.933 8.531 11.933 7.933C11.9214 7.42782 11.7125 6.94725 11.3511 6.59412C10.9896 6.24099 10.5043 6.04334 9.99901 6.04347C9.4937 6.0436 9.0085 6.2415 8.64725 6.59482C8.28599 6.94814 8.07736 7.42881 8.066 7.934H6.066C6.066 5.765 7.831 4 10 4C12.169 4 13.934 5.765 13.934 7.934C13.934 9.531 12.755 10.484 11.976 11.115Z"
                                fill="#888575" />
                            </svg>
                          </div>
                          <div class="row mb-4 mt-1">
                            <div class="col-md-3">
                              <p class="mb-lg-0 fs-5">Day Rate In-person:</p>
                            </div>
                            <div class="col-md-3">
                              <p class="mb-lg-0 fs-5">$101.00</p>
                            </div>
                          </div>
                          <div class="row mb-4 mt-1">
                            <div class="col-md-3">
                              <p class="mb-lg-0 fs-5">Day Rate Virtual:</p>
                            </div>
                            <div class="col-md-3">
                              <p class="mb-lg-0 fs-5">$101.00</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-12 d-flex col-12 gap-2 align-items-center mb-4 mt-5">
                          <div class="col-md-5 d-flex col-12 gap-2 align-items-center">
                            <h3 class="mb-lg-0">Expedited Hours In-person</h3>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M10 0C4.486 0 0 4.486 0 10C0 15.514 4.486 20 10 20C15.514 20 20 15.514 20 10C20 4.486 15.514 0 10 0ZM11 16H9V14H11V16ZM11.976 11.115C11.78 11.273 11.591 11.424 11.441 11.574C11.033 11.981 11.001 12.351 11 12.367V12.5H9V12.333C9 12.215 9.029 11.156 10.026 10.159C10.221 9.964 10.463 9.766 10.717 9.56C11.451 8.965 11.933 8.531 11.933 7.933C11.9214 7.42782 11.7125 6.94725 11.3511 6.59412C10.9896 6.24099 10.5043 6.04334 9.99901 6.04347C9.4937 6.0436 9.0085 6.2415 8.64725 6.59482C8.28599 6.94814 8.07736 7.42881 8.066 7.934H6.066C6.066 5.765 7.831 4 10 4C12.169 4 13.934 5.765 13.934 7.934C13.934 9.531 12.755 10.484 11.976 11.115Z"
                                fill="#888575" />
                            </svg>
                          </div>
                          <div class="col-md-5 d-flex col-12 gap-2 align-items-center">
                            <h3 class="mb-lg-0">Expedited Hours virtual</h3>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M10 0C4.486 0 0 4.486 0 10C0 15.514 4.486 20 10 20C15.514 20 20 15.514 20 10C20 4.486 15.514 0 10 0ZM11 16H9V14H11V16ZM11.976 11.115C11.78 11.273 11.591 11.424 11.441 11.574C11.033 11.981 11.001 12.351 11 12.367V12.5H9V12.333C9 12.215 9.029 11.156 10.026 10.159C10.221 9.964 10.463 9.766 10.717 9.56C11.451 8.965 11.933 8.531 11.933 7.933C11.9214 7.42782 11.7125 6.94725 11.3511 6.59412C10.9896 6.24099 10.5043 6.04334 9.99901 6.04347C9.4937 6.0436 9.0085 6.2415 8.64725 6.59482C8.28599 6.94814 8.07736 7.42881 8.066 7.934H6.066C6.066 5.765 7.831 4 10 4C12.169 4 13.934 5.765 13.934 7.934C13.934 9.531 12.755 10.484 11.976 11.115Z"
                                fill="#888575" />
                            </svg>
                          </div>
                        </div>

                        <div class="col-12 d-flex col-12 gap-2 align-items-center mb-4 mt-1">
                          <div class="col-md-5">
                            <p class="mb-lg-0 fs-5">Parameter 1</p>
                          </div>
                          <div class="col-md-5">
                            <p class="mb-lg-0 fs-5">Parameter 1</p>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="row">
                            <div class="col-md-3 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">Hours:</p>
                            </div>
                            <div class="col-md-2 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">1</p>
                            </div>
                            <div class="col-md-3 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">Hours:</p>
                            </div>
                            <div class="col-md-2 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">1</p>
                            </div>

                            <div class="col-md-3 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">Rate:</p>
                            </div>
                            <div class="col-md-2 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">$100.00</p>
                            </div>
                            <div class="col-md-3 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">Rate:</p>
                            </div>
                            <div class="col-md-2 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">$100.00</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-12 d-flex col-12 gap-2 align-items-center mb-4 mt-1">
                          <div class="col-md-5">
                            <p class="mb-lg-0">Multiply by service duration</p>
                          </div>
                          <div class="col-md-5">
                            <p class="mb-lg-0">Multiply by service duration</p>
                          </div>
                        </div>

                        <div class="col-md-12 col-12">
                          <div class="col-md-12 d-flex col-12 gap-2 align-items-center mb-4 mt-1">
                            <h3 class="mb-lg-0">Specialization Rates</h3>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M10 0C4.486 0 0 4.486 0 10C0 15.514 4.486 20 10 20C15.514 20 20 15.514 20 10C20 4.486 15.514 0 10 0ZM11 16H9V14H11V16ZM11.976 11.115C11.78 11.273 11.591 11.424 11.441 11.574C11.033 11.981 11.001 12.351 11 12.367V12.5H9V12.333C9 12.215 9.029 11.156 10.026 10.159C10.221 9.964 10.463 9.766 10.717 9.56C11.451 8.965 11.933 8.531 11.933 7.933C11.9214 7.42782 11.7125 6.94725 11.3511 6.59412C10.9896 6.24099 10.5043 6.04334 9.99901 6.04347C9.4937 6.0436 9.0085 6.2415 8.64725 6.59482C8.28599 6.94814 8.07736 7.42881 8.066 7.934H6.066C6.066 5.765 7.831 4 10 4C12.169 4 13.934 5.765 13.934 7.934C13.934 9.531 12.755 10.484 11.976 11.115Z"
                                fill="#888575" />
                            </svg>
                          </div>
                          <div class="row">

                            <div class="col-md-5 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">1. Open Captioning:</p>
                            </div>
                            <div class="col-md-5 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">2. Closed Captioning:</p>
                            </div>
                          </div>
                          <div class="row">
                           
                            <div class="col-md-3 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">Rate type:</p>
                            </div>
                            <div class="col-md-2 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">%</p>
                            </div>
                            <div class="col-md-3 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">Rate type:</p>
                            </div>
                            <div class="col-md-2 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">%</p>
                            </div>

                            <div class="col-md-3 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">Rate:</p>
                            </div>
                            <div class="col-md-2 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">2.0</p>
                            </div>
                            <div class="col-md-3 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">Rate:</p>
                            </div>
                            <div class="col-md-2 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">2.0</p>
                            </div>
                            <div class="col-md-3 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">Rate:</p>
                            </div>
                            <div class="col-md-2 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">2.0</p>
                            </div>
                            <div class="col-md-3 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">Rate:</p>
                            </div>
                            <div class="col-md-2 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">2.0</p>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12 mb-4 mt-1">
                              <p class="mb-lg-0 fs-5">3. Projector & Screen Rental:</p>
                            </div>
                          </div>
                          <div class="row mb-4 mt-1">
                            <div class="col-md-3">
                              <p class="mb-lg-0 fs-5">Rate type:</p>
                            </div>
                            <div class="col-md-3">
                              <p class="mb-lg-0 fs-5">%</p>
                            </div>
                          </div>
                          <div class="row mb-4 mt-1">
                            <div class="col-md-3">
                              <p class="mb-lg-0 fs-5">Rate:</p>
                            </div>
                            <div class="col-md-3">
                              <p class="mb-lg-0 fs-5">2.0</p>
                            </div>
                          </div>
                          <div class="row mb-4 mt-1">
                            <div class="col-md-3">
                              <p class="mb-lg-0 fs-5">Rate:</p>
                            </div>
                            <div class="col-md-3">
                              <p class="mb-lg-0 fs-5">2.0</p>
                            </div>
                          </div>
                          <div class="row mb-4 mt-1">
                            <div class="col-md-12">
                              <p class="mb-lg-0">Multiply by service duration</p>
                            </div>
                          </div>
             
                          <!-- main row  -->
                        </div>
                        <div class="col-12 justify-content-center form-actions d-flex">
                          <button type="button" class="btn btn-outline-dark rounded mx-2">Cancel</button>
                          <button type="submit" class="btn btn-primary rounded">Save</button>
                        </div>
                    </form>
                  </div>

                </div><!-- END: service-catalog-rates -->

              </div>
            </div>
          </div>
          <!-- END: Steps -->
        </div>
      </div>
    </div>
		@livewire('app.common.profile', ['showForm'=>$showForm])
	</div>
	{{-- End: Content --}}
@endsection