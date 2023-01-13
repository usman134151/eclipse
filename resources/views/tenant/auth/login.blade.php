@extends('layouts.tenant-login')

@section('content')


    <div class="w-8/12 flex flex-column justify-center items-center bg-[#f8f8f8]">
      <div class="w-7/12">
        <?php /*
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="{{asset('video/video.json')}}" background="transparent" speed="1" classname="w-full" loop="" autoplay="true"></lottie-player>
        */ ?>

        <svg width="590" height="487" viewBox="0 0 590 487" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M582.97 486.013C586.399 486.013 589.179 483.233 589.179 479.804C589.179 476.366 586.399 473.586 582.97 473.586H6.20849C2.78037 473.586 0 476.366 0 479.804C0 483.233 2.78037 486.013 6.20849 486.013H582.97Z" fill="url(#paint0_linear_2664_98182)"/>
            <path d="M326.104 46.6406L335.751 70.6275H316.438L326.104 46.6406Z" fill="url(#paint1_linear_2664_98182)"/>
            <path d="M393.588 6.18856V101.528H385.735C375.491 101.528 367.159 109.869 367.159 120.124V128.176H264.784C261.376 128.176 258.605 125.406 258.605 121.997V6.18856C258.605 2.78037 261.376 0 264.784 0H387.409C390.817 0 393.588 2.78037 393.588 6.18856ZM355.839 103.92C359.018 102.644 360.552 99.0269 359.267 95.848L350.766 74.7012C350.726 74.6016 350.686 74.5019 350.637 74.3923L331.852 27.6941C330.905 25.3522 328.623 23.8075 326.092 23.8075C323.57 23.8075 321.288 25.3522 320.342 27.6941L301.547 74.3923C301.507 74.5019 301.467 74.6016 301.427 74.7012L292.917 95.848C291.641 99.0269 293.176 102.644 296.355 103.92C299.534 105.206 303.141 103.661 304.427 100.482L311.442 83.0523H340.751L347.767 100.482C348.743 102.904 351.065 104.378 353.527 104.378C354.294 104.368 355.081 104.229 355.839 103.92Z" fill="url(#paint2_linear_2664_98182)"/>
            <path d="M447.041 164.492H456.319C455.402 167.691 453.878 171.767 451.376 176.142C450.081 178.414 448.636 180.576 447.041 182.629C445.457 180.576 444.012 178.414 442.706 176.142C440.205 171.767 438.68 167.691 437.773 164.492H447.041Z" fill="url(#paint3_linear_2664_98182)"/>
            <path d="M508.362 113.947C511.771 113.947 514.541 116.718 514.541 120.126V235.935C514.541 239.343 511.771 242.113 508.362 242.113H450.782C448.868 242.113 447.065 243 445.889 244.515L417.657 280.879L417.607 280.939L416.411 282.484V248.322C416.411 244.894 413.631 242.113 410.202 242.113H385.737C382.329 242.113 379.559 239.333 379.559 235.935V120.116C379.559 116.708 382.329 113.938 385.737 113.938H508.362V113.947ZM413.013 152.075C409.595 152.075 406.814 154.856 406.814 158.284C406.814 161.712 409.595 164.492 413.013 164.492H424.971C425.928 168.758 427.831 174.936 431.588 181.683C433.312 184.762 435.515 188.13 438.345 191.579C431.867 196.95 423.965 201.185 414.697 204.245C411.438 205.321 409.674 208.829 410.751 212.087C411.608 214.698 414.029 216.353 416.64 216.353C417.278 216.353 417.936 216.253 418.573 216.044C430.781 212.008 440.039 206.397 447.045 200.418C454.041 206.397 463.308 212.008 475.506 216.044C476.154 216.253 476.812 216.353 477.449 216.353C480.06 216.353 482.482 214.698 483.339 212.087C484.415 208.829 482.641 205.321 479.393 204.245C470.125 201.185 462.222 196.95 455.735 191.579C458.575 188.13 460.777 184.762 462.491 181.683C466.258 174.936 468.162 168.758 469.118 164.492H481.077C484.495 164.492 487.275 161.712 487.275 158.284C487.275 154.856 484.495 152.075 481.077 152.075H453.243V145.917C453.243 142.479 450.463 139.698 447.035 139.698C443.617 139.698 440.836 142.479 440.836 145.917V152.075H413.013Z" fill="url(#paint4_linear_2664_98182)"/>
            <path d="M522.873 450.406C529.26 450.406 534.452 455.598 534.452 461.996C534.452 468.384 529.26 473.576 522.873 473.576H268.404C262.016 473.576 256.824 468.384 256.824 461.996C256.824 455.598 262.016 450.406 268.404 450.406H522.873Z" fill="url(#paint5_linear_2664_98182)"/>
            <path d="M276.742 300.224C276.742 295.092 280.908 290.906 286.04 290.906H404.001V300.593C404.001 303.244 405.685 305.605 408.187 306.462C408.855 306.692 409.532 306.801 410.2 306.801C412.073 306.801 413.897 305.944 415.093 304.4L425.567 290.906H505.231C510.353 290.906 514.528 295.082 514.528 300.214V437.977H276.742V300.224Z" fill="url(#paint6_linear_2664_98182)"/>
            <path d="M229.49 174.496C229.978 179.868 227.427 185.339 225.145 189.514C225.045 189.684 224.796 190.182 224.427 190.89C223.261 193.132 222.325 194.906 221.577 196.311C216.744 192.424 212.678 188.159 212.628 188.099C210.795 186.156 207.905 185.608 205.483 186.754C185.393 196.231 166.139 199.041 148.251 195.135C134.917 192.215 127.324 186.415 127.274 186.385C124.713 184.352 121.016 184.661 118.833 187.093C114.907 191.438 109.167 194.776 104.861 196.869C104.034 192.863 103.765 188.538 103.496 184.322C103.177 179.061 102.799 173.091 104.024 167.949C105.011 163.833 107.871 158.841 112.545 153.14C113.292 152.214 114.09 151.307 114.897 150.44C125.51 139.079 144.006 131.655 156.632 128.755C165.561 126.692 174.012 125.955 181.765 126.552C187.276 126.981 191.86 127.718 195.757 128.815C198.009 129.452 201.038 130.728 202.643 133.209C203.45 134.445 204.078 136.07 204.745 137.794C205.822 140.604 207.048 143.783 209.469 146.643C211.622 149.194 214.093 151.147 216.276 152.871C218.059 154.286 219.753 155.622 221.069 157.117C224.876 161.392 228.942 168.437 229.49 174.496Z" fill="url(#paint7_linear_2664_98182)"/>
            <path d="M94.7634 236.442H82.2169C79.2671 236.442 76.8555 234.031 76.8555 231.071V216.84C76.8555 213.88 79.2671 211.469 82.2169 211.469H94.7634V236.442Z" fill="url(#paint8_linear_2664_98182)"/>
            <path d="M229.637 211.469H242.183C245.133 211.469 247.545 213.87 247.545 216.83V231.071C247.545 233.781 245.512 236.044 242.881 236.382C242.821 236.392 242.761 236.392 242.701 236.412C242.532 236.422 242.353 236.432 242.183 236.432H229.637V211.469Z" fill="url(#paint9_linear_2664_98182)"/>
            <path d="M217.233 208.588V233.95C217.233 245.779 214.243 256.851 209.061 266.248H162.203C158.775 266.248 156.005 269.029 156.005 272.457C156.005 275.885 158.775 278.665 162.203 278.665H200.052C196.654 282.283 192.837 285.412 188.702 287.973C180.839 292.836 171.8 295.606 162.203 295.606C151.411 295.606 141.326 292.109 132.825 286.069C117.419 275.127 107.164 255.854 107.164 233.95V209.475C111.479 207.591 118.365 204.123 124.185 199.141C128.4 201.572 135.406 204.941 144.824 207.103C158.476 210.222 180.071 211.348 206.779 199.788C209.34 202.23 213.177 205.688 217.233 208.588Z" fill="url(#paint10_linear_2664_98182)"/>
            <path d="M189.815 322.306L160.706 342.496L132.992 322.256C134.896 317.253 136.899 310.317 137.158 302.773C145.011 306.212 153.471 308.015 162.201 308.015C170.143 308.015 177.867 306.53 185.102 303.67C185.59 309.739 187.184 316.067 189.815 322.306Z" fill="url(#paint11_linear_2664_98182)"/>
            <path d="M264.342 347.421V438.327C253.041 440.27 244.421 450.136 244.421 461.995C244.421 466.19 245.507 470.146 247.41 473.574H91.0519V404.992C91.0519 401.564 88.2715 398.784 84.8434 398.784C81.4252 398.784 78.6449 401.564 78.6449 404.992V473.574H34.9961C35.1456 452.657 36.461 405.779 44.7523 376.172C46.9746 368.219 49.5258 362.091 52.9937 356.261C55.8738 351.438 64.1551 339.339 79.0634 330.939C91.6997 323.813 103.798 322.338 112.268 322.488L121.586 329.284L156.954 355.125C159.086 356.679 161.976 356.719 164.149 355.205L201.17 329.533C201.2 329.514 201.23 329.494 201.27 329.474L211.335 322.488C219.796 322.328 231.944 323.793 244.61 330.929C253.599 335.991 260.136 342.429 264.342 347.421Z" fill="url(#paint12_linear_2664_98182)"/>
            <path d="M247.534 247.172V272.454C247.534 275.882 244.763 278.663 241.335 278.663H213.82C216.511 274.756 218.843 270.601 220.756 266.236H235.136V248.856H240.01C242.7 248.856 245.251 248.258 247.534 247.172Z" fill="url(#paint13_linear_2664_98182)"/>
            <defs>
            <linearGradient id="paint0_linear_2664_98182" x1="294.589" y1="473.586" x2="530.967" y2="473.586" gradientUnits="userSpaceOnUse">
            <stop stop-color="#213969"/>
            <stop offset="1" stop-color="#204387"/>
            </linearGradient>
            <linearGradient id="paint1_linear_2664_98182" x1="326.094" y1="46.6406" x2="333.842" y2="46.6406" gradientUnits="userSpaceOnUse">
            <stop stop-color="#213969"/>
            <stop offset="1" stop-color="#204387"/>
            </linearGradient>
            <linearGradient id="paint2_linear_2664_98182" x1="326.097" y1="0" x2="380.251" y2="0" gradientUnits="userSpaceOnUse">
            <stop stop-color="#213969"/>
            <stop offset="1" stop-color="#204387"/>
            </linearGradient>
            <linearGradient id="paint3_linear_2664_98182" x1="447.046" y1="164.492" x2="454.487" y2="164.492" gradientUnits="userSpaceOnUse">
            <stop stop-color="#213969"/>
            <stop offset="1" stop-color="#204387"/>
            </linearGradient>
            <linearGradient id="paint4_linear_2664_98182" x1="447.05" y1="113.937" x2="501.204" y2="113.937" gradientUnits="userSpaceOnUse">
            <stop stop-color="#213969"/>
            <stop offset="1" stop-color="#204387"/>
            </linearGradient>
            <linearGradient id="paint5_linear_2664_98182" x1="395.638" y1="450.406" x2="507.022" y2="450.406" gradientUnits="userSpaceOnUse">
            <stop stop-color="#213969"/>
            <stop offset="1" stop-color="#204387"/>
            </linearGradient>
            <linearGradient id="paint6_linear_2664_98182" x1="395.635" y1="290.906" x2="491.035" y2="290.906" gradientUnits="userSpaceOnUse">
            <stop stop-color="#213969"/>
            <stop offset="1" stop-color="#204387"/>
            </linearGradient>
            <linearGradient id="paint7_linear_2664_98182" x1="166.365" y1="126.352" x2="217.065" y2="126.352" gradientUnits="userSpaceOnUse">
            <stop stop-color="#213969"/>
            <stop offset="1" stop-color="#204387"/>
            </linearGradient>
            <linearGradient id="paint8_linear_2664_98182" x1="85.8095" y1="211.469" x2="92.9941" y2="211.469" gradientUnits="userSpaceOnUse">
            <stop stop-color="#213969"/>
            <stop offset="1" stop-color="#204387"/>
            </linearGradient>
            <linearGradient id="paint9_linear_2664_98182" x1="238.591" y1="211.469" x2="245.775" y2="211.469" gradientUnits="userSpaceOnUse">
            <stop stop-color="#213969"/>
            <stop offset="1" stop-color="#204387"/>
            </linearGradient>
            <linearGradient id="paint10_linear_2664_98182" x1="162.198" y1="199.141" x2="206.358" y2="199.141" gradientUnits="userSpaceOnUse">
            <stop stop-color="#213969"/>
            <stop offset="1" stop-color="#204387"/>
            </linearGradient>
            <linearGradient id="paint11_linear_2664_98182" x1="161.404" y1="302.773" x2="184.201" y2="302.773" gradientUnits="userSpaceOnUse">
            <stop stop-color="#213969"/>
            <stop offset="1" stop-color="#204387"/>
            </linearGradient>
            <linearGradient id="paint12_linear_2664_98182" x1="149.669" y1="322.477" x2="241.682" y2="322.477" gradientUnits="userSpaceOnUse">
            <stop stop-color="#213969"/>
            <stop offset="1" stop-color="#204387"/>
            </linearGradient>
            <linearGradient id="paint13_linear_2664_98182" x1="230.677" y1="247.172" x2="244.203" y2="247.172" gradientUnits="userSpaceOnUse">
            <stop stop-color="#213969"/>
            <stop offset="1" stop-color="#204387"/>
            </linearGradient>
            </defs>
        </svg>

      </div>
    </div>
    <div class="w-4/12 flex flex-col justify-center px-14">
      <h1>Welcome to Eclipse Scheduling!</h1>
      <p class="mb-5">Please sign into your account to start exploring.</p>
      <form method="POST" action="{{ route('tenant.login') }}">
            @csrf
            <div>
                <x-form.label for="email" value="Email address"/>

                <div class="mt-1 rounded-md">
                    <x-form.input name="email" id="email" type="email" required name="email" value="{{ old('email', request()->query('email')) }}" autofocus/>

                    <x-form.input-error for="email" />
                </div>
            </div>
            
            <div class="mt-6">
                <x-form.label for="password" value="Password"/>

                <div class="mt-1 rounded-md">
                    <x-form.input id="password" type="password" required name="password"/>

                    <x-form.input-error for="password" />
                </div>
            </div>
            
            <div class="mt-6 flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember_me" name="remember" type="checkbox" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" />
                    <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900">
                        {{ __('Remember me') }}
                    </label>
                </div>
                
                @if (Route::has('tenant.password.request'))
                <div class="text-sm leading-5">
                    <a href="{{ route('tenant.password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                        {{ __('Forgot your password?') }}
                    </a>
                </div>
            </div>
            @endif
            
            <div class="mt-6">
                <span class="block w-full rounded-md shadow-sm">
                    <x-button class="w-full" type="submit">Login</x-button>
                </span>
            </div>
        </form>
    </div>
  

<?php /*
<div class="sm:mx-auto sm:w-full sm:max-w-md">
    <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
        {{ __('Login') }}
    </h2>
    @if (Route::has('tenant.register'))
    <p class="mt-2 text-center text-sm leading-5 text-gray-600 max-w">
        Or
        <a href="{{ route('tenant.register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
            register a new account.
        </a>
    </p>
    @endif
</div>
*/ ?>

<?php /*
<div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
        <form method="POST" action="{{ route('tenant.login') }}">
            @csrf
            <div>
                <x-form.label for="email" value="Email address"/>

                <div class="mt-1 rounded-md">
                    <x-form.input name="email" id="email" type="email" required name="email" value="{{ old('email', request()->query('email')) }}" autofocus/>

                    <x-form.input-error for="email" />
                </div>
            </div>
            
            <div class="mt-6">
                <x-form.label for="password" value="Password"/>

                <div class="mt-1 rounded-md">
                    <x-form.input id="password" type="password" required name="password"/>

                    <x-form.input-error for="password" />
                </div>
            </div>
            
            <div class="mt-6 flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember_me" name="remember" type="checkbox" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" />
                    <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900">
                        {{ __('Remember me') }}
                    </label>
                </div>
                
                @if (Route::has('tenant.password.request'))
                <div class="text-sm leading-5">
                    <a href="{{ route('tenant.password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                        {{ __('Forgot your password?') }}
                    </a>
                </div>
            </div>
            @endif
            
            <div class="mt-6">
                <span class="block w-full rounded-md shadow-sm">
                    <x-button class="w-full" type="submit">Login</x-button>
                </span>
            </div>
        </form>
        
    </div>
</div>
*/ ?>
@endsection
