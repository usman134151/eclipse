{{-- BEGIN: Main Menu --}}
<div role="navigation" aria-label="Main Menu" class="main-menu menu-fixed menu-light menu-accordion menu-shadow"
    data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto">
                <a class="navbar-brand" href="/customer/dashboard" aria-label="Eclipse Scheduling Brand Logo">
                    <span class="brand-logo">
                        @if (session()->has('company_logo') && session()->get('company_logo') != null)
                            <img src="{{ session()->get('company_logo') }}" alt="">
                        @else
                            <svg aria-label="Eclipse Scheduling Logo" height="38" viewBox="0 0 49 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.596 0.0127934C23.5834 0.128856 22.932 0.341638 22.2096 0.799441C20.0361 2.17285 19.2944 4.95836 20.4811 7.27317C21.1777 8.63368 22.3966 9.54929 23.9381 9.86524C26.06 10.3037 28.3303 9.19465 29.3236 7.22158C29.7234 6.43494 29.8202 5.97068 29.8137 4.93901C29.8137 4.05565 29.8008 3.97182 29.6073 3.43665C29.1172 2.06324 28.311 1.14763 27.0468 0.52218C26.3245 0.167544 25.2538 -0.0581339 24.596 0.0127934Z"
                                    fill="black" />
                                <path
                                    d="M35.2505 2.06994C35.3343 2.31496 35.3601 2.6567 35.3601 3.52072C35.3666 4.52015 35.3472 4.70714 35.2182 5.16495C35.0248 5.81619 34.5152 6.8543 34.1411 7.35079C33.6445 8.02138 31.8386 9.89128 28.33 13.3861L24.9375 16.7712L24.9826 17.8996C25.0794 20.4788 25.189 22.4776 25.2213 22.5099C25.2664 22.5615 31.7032 17.2032 32.4255 16.5133C33.4381 15.5526 35.5407 13.3022 35.9535 12.7477C37.2305 11.0326 37.8948 8.77579 37.7143 6.75758C37.5659 5.10047 36.8113 3.46914 35.6181 2.23758L35.1473 1.74754L35.2505 2.06994Z"
                                    fill="black" />
                                <path
                                    d="M14.1338 2.231C13.1277 3.30136 12.515 4.44264 12.1796 5.84185C11.9796 6.69297 11.9732 8.09862 12.1731 9.04647C12.4182 10.2393 12.9342 11.4644 13.5727 12.4252C14.2822 13.4762 16.3654 15.7136 18.21 17.403C18.9517 18.0865 19.7257 18.7893 19.9192 18.9698C20.1127 19.1504 20.9576 19.9241 21.7896 20.685C22.6216 21.4458 23.4213 22.1745 23.5632 22.3034C23.7051 22.4324 23.8406 22.542 23.8599 22.542C23.8793 22.542 23.9179 22.2712 23.9437 21.9423C23.9695 21.6199 24.0405 20.7559 24.1114 20.0273C24.1824 19.2987 24.2791 18.2541 24.3307 17.706L24.421 16.7066L23.6664 15.9329C20.4996 12.6638 16.5202 8.45971 15.9526 7.77623C15.2754 6.96379 14.7852 6.02239 14.5273 5.03585C14.3144 4.22986 14.2886 2.97252 14.4628 2.30193C14.5208 2.07625 14.5531 1.87637 14.5402 1.86347C14.5208 1.84413 14.3402 2.01177 14.1338 2.231Z"
                                    fill="black" />
                                <path
                                    d="M6.5684 11.3228C5.32361 11.4324 4.03368 11.9611 2.85985 12.8445C2.36967 13.212 1.69246 13.8826 1.8795 13.8181C1.93755 13.7923 2.22778 13.7278 2.51801 13.6698C4.02723 13.3668 5.99438 13.8697 7.3746 14.9143C8.10986 15.4752 10.5801 17.8545 14.0048 21.3106L16.9523 24.2896L19.616 24.1541C21.0737 24.0768 22.2797 24.0058 22.2926 23.9929C22.3055 23.9865 20.5706 21.8845 18.4422 19.3311C14.6047 14.7337 14.0951 14.1663 12.96 13.2571C11.612 12.1739 9.84482 11.4646 8.14856 11.3163C7.4262 11.2583 7.34235 11.2583 6.5684 11.3228Z"
                                    fill="#023DB0" />
                                <path
                                    d="M40.4286 12.1287C39.1194 12.3092 37.7262 12.8573 36.475 13.6891C35.7333 14.1791 35.4624 14.4693 29.1095 21.446C28.1936 22.4583 27.2907 23.4384 27.1101 23.6254C26.7038 24.0574 26.6457 24.1541 26.8005 24.1541C26.9231 24.1541 28.0711 24.2573 30.4639 24.4829C31.2443 24.5603 31.9473 24.6054 32.0247 24.599C32.1021 24.5861 33.3792 23.4061 34.9593 21.8973C41.2026 15.9136 41.6218 15.5397 42.7763 14.9787C44.0791 14.3468 45.9495 14.1791 47.1234 14.5918C47.3233 14.6627 46.659 14.0244 46.0656 13.5795C45.0079 12.7799 43.8727 12.3028 42.6215 12.1287C41.8218 12.0191 41.2606 12.0191 40.4286 12.1287Z"
                                    fill="#023DB0" />
                                <path
                                    d="M3.8272 19.2793C3.27253 19.4341 2.80171 19.634 2.40828 19.8661C0.795866 20.8397 -0.100635 22.5484 0.00900881 24.4441C0.125103 26.501 1.47308 28.2162 3.47247 28.8738C4.03359 29.0544 4.15613 29.0737 4.95589 29.0737C5.75565 29.0737 5.87819 29.0544 6.43931 28.8738C8.05817 28.3387 9.21911 27.1587 9.73508 25.508C9.94147 24.8632 9.95437 23.5092 9.76733 22.8644C9.27716 21.1815 8.15492 19.995 6.48446 19.4018C6.08458 19.26 5.89109 19.2342 5.08488 19.2148C4.42057 19.1955 4.05939 19.2148 3.8272 19.2793Z"
                                    fill="#023DB0" />
                                <path
                                    d="M42.944 20.0598C41.0736 20.4403 39.5322 22.0265 39.1645 23.9479C38.6744 26.5207 40.1771 28.9644 42.7183 29.706C43.3955 29.9058 44.4855 29.9187 45.2014 29.7382C46.9428 29.2997 48.3746 27.9005 48.8455 26.1854C49.2647 24.6314 48.8197 22.8067 47.7039 21.5429C47.1363 20.8916 45.9625 20.2275 45.0724 20.0534C44.5371 19.9438 43.4858 19.9502 42.944 20.0598Z"
                                    fill="#023DB0" />
                                <path
                                    d="M16.0819 25.1599C15.869 25.3598 15.2886 25.9208 14.7919 26.4043C11.58 29.5187 8.35519 32.5621 7.63928 33.1424C6.83307 33.8066 5.96237 34.245 4.93043 34.503C4.13067 34.7028 2.92459 34.7222 2.23447 34.5416C1.98939 34.4836 1.7959 34.4514 1.7959 34.4772C1.7959 34.5481 2.6924 35.3218 3.15032 35.6442C5.13682 37.0434 7.60058 37.3529 10.1804 36.5276C11.0124 36.2568 12.2766 35.5669 12.986 34.9994C14.7403 33.5873 16.1335 32.1495 21.4157 26.3205L22.2929 25.3469L20.8675 25.2115C20.0807 25.1341 18.9133 25.0245 18.2748 24.9665C17.6362 24.9084 16.9719 24.8439 16.7913 24.8246C16.4689 24.7924 16.4689 24.7924 16.0819 25.1599Z"
                                    fill="#023DB0" />
                                <path
                                    d="M30.0451 25.289C29.2453 25.3277 28.2392 25.3664 27.8135 25.3728C27.3814 25.3793 26.9428 25.3986 26.8331 25.4179L26.6396 25.4566L27.7425 26.7914C28.3553 27.5264 29.5742 28.9966 30.4514 30.054C31.7478 31.6144 32.354 32.285 33.6117 33.5294C34.4695 34.3741 35.4047 35.2639 35.6885 35.5025C37.0365 36.6374 38.3845 37.2821 40.1065 37.6368C41.0546 37.8238 42.48 37.7851 43.4281 37.5401C44.2085 37.3337 45.3178 36.805 45.9628 36.3214C46.4659 35.9474 47.156 35.3091 47.1108 35.2639C47.0979 35.251 46.8658 35.2833 46.5949 35.3349C45.3565 35.5928 43.828 35.3671 42.5961 34.7481C41.5706 34.2258 41.2223 33.9099 36.5205 29.2351L32.4572 25.1858L31.9735 25.1987C31.7155 25.1987 30.8448 25.2439 30.0451 25.289Z"
                                    fill="#023DB0" />
                                <path
                                    d="M19.4354 30.4729C14.9722 34.1869 13.8435 35.2122 13.0631 36.2438C12.2634 37.3077 11.5668 38.9455 11.3282 40.3383C11.2121 41.0218 11.2314 42.3178 11.3669 43.0077C11.5733 44.0781 12.0376 45.1162 12.7149 46.0254C13.0954 46.5412 13.7275 47.2569 13.7662 47.2182C13.7855 47.2053 13.7468 46.9796 13.6888 46.7153C13.5404 46.0576 13.5404 44.9614 13.6888 44.278C13.9145 43.2141 14.3531 42.3049 15.0561 41.428C15.5914 40.7574 18.4937 37.7784 21.3961 34.9091L24.0598 32.2784L24.0211 31.9108C24.0017 31.7045 23.9501 30.6922 23.9114 29.6669C23.8728 28.6353 23.8212 27.5907 23.8018 27.3392L23.7567 26.8814L19.4354 30.4729Z"
                                    fill="black" />
                                <path
                                    d="M25.0781 27.004C25.0781 27.0491 25.0329 27.5198 24.9813 28.055C24.8975 28.9061 24.7749 30.2344 24.633 31.8399L24.5879 32.33L24.9039 32.6781C25.0781 32.8651 25.5747 33.381 26.0068 33.8259C27.7289 35.5862 31.7792 39.8611 32.8176 41.0153C33.7399 42.0405 34.3462 43.2399 34.5655 44.465C34.6622 45.0453 34.6493 46.077 34.5333 46.6831C34.4752 46.9668 34.443 47.2053 34.4559 47.2182C34.4881 47.2505 35.1524 46.4961 35.5007 46.0318C36.9777 44.0652 37.3517 41.5247 36.552 39.0036C36.1973 37.8881 35.6748 36.9015 34.9912 36.044C34.817 35.8247 34.0947 35.1155 33.3788 34.4642C32.6629 33.813 31.8502 33.0586 31.56 32.7942C31.2762 32.5298 30.212 31.5562 29.2058 30.6342C28.1932 29.7056 26.8711 28.4999 26.2583 27.9389C25.6521 27.3844 25.1361 26.9266 25.1168 26.9266C25.0974 26.9266 25.0781 26.9653 25.0781 27.004Z"
                                    fill="black" />
                                <path
                                    d="M23.4989 39.0875C21.6737 39.3776 20.158 40.5576 19.4872 42.2083C18.7842 43.9556 19.1712 46.0448 20.4611 47.4117C21.3189 48.3273 22.1767 48.7787 23.4022 48.9592C24.06 49.0624 24.1632 49.0624 24.8018 48.9592C26.4529 48.7142 27.8202 47.7406 28.5232 46.3156C28.8844 45.587 29.0069 45.1227 29.0585 44.3683C29.2069 41.9761 27.6783 39.8548 25.3564 39.2422C24.8598 39.1133 23.873 39.0294 23.4989 39.0875Z"
                                    fill="black" />
                                <circle cx="24.999" cy="25.0001" r="18"
                                    transform="rotate(155.101 24.999 25.0001)" fill="url(#paint0_diamond_0_1)" />
                                <defs>
                                    <radialGradient id="paint0_diamond_0_1" cx="0" cy="0" r="1"
                                        gradientUnits="userSpaceOnUse"
                                        gradientTransform="translate(24.999 25.0001) rotate(90) scale(18)">
                                        <stop stop-color="white" />
                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                    </radialGradient>
                                </defs>
                            </svg>
                        @endif
                    </span>
                    <h2 class="brand-text">
                        <svg aria-label="Eclipse Brand Logo" width="124" height="19" viewBox="0 0 124 19"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.14671 0.687832C0.120911 0.707176 0.101562 4.69845 0.101562 9.55374V18.3745H8.12493H16.1483L16.2837 17.9683C16.3547 17.7491 16.4385 17.4654 16.4708 17.3428C16.5095 17.2203 16.6901 16.6207 16.8707 16.021C17.0577 15.4149 17.2254 14.8604 17.2383 14.7766L17.2705 14.6347H10.8144H4.35833V13.0227V11.4107H9.84054H15.3227V9.54084V7.67094H9.84054H4.35833L4.37123 6.03962L4.39058 4.41474L10.2727 4.39539L16.1547 4.3825L16.4127 3.55716C16.5546 3.10581 16.7481 2.47391 16.8384 2.15796C16.9352 1.83556 17.0641 1.40355 17.1351 1.19722C17.1996 0.984438 17.2576 0.771656 17.2576 0.726521C17.2576 0.655592 15.7033 0.642696 8.72474 0.642696C4.0294 0.642696 0.166059 0.662041 0.14671 0.687832Z"
                                fill="black" />
                            <path
                                d="M24.9344 0.713634C23.4123 0.932865 21.9805 1.65503 20.955 2.71894C19.8521 3.86023 19.0523 5.54959 18.7041 7.44528C18.5299 8.41892 18.5364 10.3468 18.7234 11.3785C19.2265 14.1447 20.6196 16.3434 22.6061 17.4976C23.1608 17.82 23.6896 18.0263 24.3862 18.2004C24.9667 18.3423 24.9925 18.3423 30.6359 18.3423H36.2987L36.6147 17.3106C36.7889 16.7432 36.9953 16.0726 37.0662 15.8276C37.1372 15.5761 37.2533 15.2086 37.3178 15.0087L37.4339 14.6412L31.6872 14.6218C25.9728 14.6025 25.9341 14.6025 25.5665 14.4606C24.1476 13.919 23.2833 12.5327 23.0576 10.4113C22.8189 8.15455 23.6574 5.75592 24.9925 4.90479C25.1666 4.78873 25.4762 4.63398 25.689 4.5566C26.0631 4.41475 26.0954 4.41475 31.1841 4.38251L36.3052 4.35027L36.4213 3.99563C36.4793 3.80219 36.7244 3.0091 36.9566 2.24179C37.1952 1.47449 37.4016 0.797459 37.421 0.739426C37.4597 0.655603 36.8405 0.642708 31.3776 0.649155C28.0303 0.655603 25.1279 0.681395 24.9344 0.713634Z"
                                fill="black" />
                            <path
                                d="M39.2971 0.687832C39.2713 0.707176 39.252 4.69845 39.252 9.55374V18.3745H47.0496H54.8472L55.0536 17.7104C55.1632 17.3493 55.3309 16.8077 55.4212 16.5046C55.5115 16.2016 55.6663 15.6857 55.7695 15.3569C55.8727 15.028 55.9565 14.7314 55.9565 14.6992C55.9565 14.6541 53.7895 14.6347 49.7326 14.6347H43.5087V7.6387V0.642696H41.4255C40.2774 0.642696 39.3164 0.662041 39.2971 0.687832Z"
                                fill="black" />
                            <path d="M57.8262 9.5086V18.3745H59.9223H62.0184V9.5086V0.642696H59.9223H57.8262V9.5086Z"
                                fill="black" />
                            <path
                                d="M65.502 9.5086V18.3745H67.5981H69.6942V15.6083V12.8357L74.1961 12.8164C78.4786 12.7906 78.7237 12.7842 79.3687 12.6487C81.2455 12.2683 82.4774 11.5075 83.3675 10.1792C84.0898 9.09594 84.3736 8.03848 84.3156 6.60703C84.2511 4.93057 83.7029 3.66678 82.5355 2.5126C81.6519 1.63568 80.8908 1.21011 79.5622 0.84903L78.9495 0.674934L72.2289 0.655592L65.502 0.636248V9.5086ZM78.7366 4.59528C79.1688 4.80806 79.4525 5.11111 79.6847 5.6076C79.8331 5.92355 79.8524 6.03962 79.8524 6.67151C79.8524 7.56778 79.7105 7.96755 79.2204 8.47049C78.6592 9.0379 78.8011 9.02501 73.8994 9.02501H69.6942V6.74889C69.6942 5.49154 69.7136 4.44698 69.7394 4.42118C69.7652 4.39539 71.7194 4.38894 74.08 4.39539L78.369 4.41474L78.7366 4.59528Z"
                                fill="black" />
                            <path
                                d="M90.7194 0.713623C87.9847 1.11984 86.1272 2.66735 85.6177 4.95636C85.2372 6.69086 85.8112 8.56076 87.1011 9.74718C87.8751 10.4564 88.7393 10.9014 89.9454 11.198L90.6226 11.3656L94.6537 11.4043L98.6847 11.443L99.0394 11.6429C99.6779 11.9975 100.02 12.6939 99.8779 13.3258C99.7682 13.8223 99.5102 14.1318 98.9943 14.3897L98.5557 14.6025L92.5898 14.6218L86.6238 14.6412L86.095 16.395C85.8047 17.3622 85.5467 18.2004 85.5274 18.2649C85.4822 18.3681 85.8305 18.3745 92.1899 18.3745C98.6911 18.3745 98.9233 18.3681 99.5876 18.2456C100.91 17.9876 101.871 17.5234 102.69 16.7432C103.535 15.9501 104.031 15.0216 104.231 13.8932C104.354 13.1839 104.354 12.926 104.231 12.2232C104.025 11.0497 103.606 10.2372 102.78 9.41188C102.006 8.64458 101.265 8.22546 100.039 7.87728L99.4586 7.70963L95.3954 7.67739L91.3321 7.6387L90.8935 7.42592C90.384 7.17445 90.126 6.8714 90.0099 6.38136C89.8358 5.64629 90.2034 4.96281 90.9902 4.60173L91.3966 4.41474L97.0981 4.3825L102.8 4.35026L102.98 3.76994C103.696 1.41645 103.877 0.810341 103.877 0.732967C103.877 0.655592 102.845 0.642696 97.4786 0.649143C93.9571 0.655592 90.9129 0.681383 90.7194 0.713623Z"
                                fill="black" />
                            <path
                                d="M106.844 9.5086V18.3745H114.861H122.878L123.413 16.582C123.716 15.6019 123.968 14.7572 123.987 14.7121C124.006 14.6541 122.697 14.6347 117.557 14.6347H111.101V13.0227V11.4107H116.583H122.065V9.54084V7.67094H116.583H111.101V6.02672V4.3825H116.989H122.884L123.013 3.94404C123.484 2.40298 124 0.687832 124 0.668489C124 0.655592 120.143 0.642696 115.422 0.642696H106.844V9.5086Z"
                                fill="black" />
                        </svg>
                    </h2>
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><svg
                        xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-x d-block d-xl-none text-primary toggle-icon font-medium-4">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-disc d-none d-xl-block collapse-toggle-icon primary font-medium-4">
                        <circle cx="12" cy="12" r="10"></circle>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <script>
            window.userCurrent = "customer";
        </script>
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item">
                <a href="/customer/dashboard">
                    <svg aria-label="Dashboard" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#dashboard_icon"></use>
                    </svg>
                    <span class="menu-item">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" id="chat">
                <a href="/customer/chat">
                    <svg aria-label="Chat" width="20" height="18" viewBox="0 0 20 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/menu.svg#chat-icon"></use>
                    </svg>
                    <span class="menu-item">Chat</span>
                </a>
            </li>

            {{-- company admin and supervisor --}}
            @if (in_array(6, session()->get('customerRoles')) || in_array(10, session()->get('customerRoles')))
                <li class="nav-item" id="booknow">
                    <a href="/customer/booking/booknow">
                        <svg aria-label="Submit Service Request" class="fill-none" width="14" height="21"
                            viewBox="0 0 14 21">
                            <use xlink:href="/css/menu.svg#submit-service-request-icon"></use>
                        </svg>
                        <span class="menu-item">Submit Service Request</span>
                    </a>
                </li>
            @endif
            {{-- company Admin and supervisor only --}}
            @if (in_array(10, session()->get('customerRoles')) || in_array(5, session()->get('customerRoles')))
                <li class="nav-item" id="pending-reviews">
                    <a href="/customer/pending-reviews">

                        <svg aria-label="Pending Review" width="18" height="20" viewBox="0 0 18 20"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="/css/menu.svg#pending-review-icon"></use>
                        </svg>
                        <span class="menu-item">Pending Review</span>
                    </a>
                </li>
            @endif
            <li class="nav-item has-sub">
                <a class="d-flex align-items-center" href="#" aria-haspopup="true" aria-expanded="true">
                    <svg aria-label="Scheduled Services" width="20" height="20" viewBox="0 0 20 20"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/menu.svg#schedule-service-icon"></use>
                    </svg>
                    <span class="menu-item">Scheduled Services</span>
                </a>
                <ul class="menu-content " id="Scheduled-Services">
                    <li class="nav-item " id="today">
                        <a class="nav-link" href="/customer/booking/today">
                            <svg aria-label="Today's Services" width="18" height="20" viewBox="0 0 18 20"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="/css/menu.svg#today-icon"></use>
                            </svg>
                            <span class="menu-item">Today's Services </span>
                        </a>
                    </li>
                    <li class="nav-item " id="upcoming">
                        <a class="nav-link" href="/customer/booking/upcoming">
                            <svg aria-label="Upcoming Services" width="18" height="20" viewBox="0 0 18 20"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="/css/menu.svg#upcomming-icon"></use>
                            </svg>
                            <span class="menu-item">Upcoming Services </span>
                        </a>
                    </li>
                    <li class="nav-item " id="past">
                        <a class="nav-link" href="/customer/booking/past">
                            <svg aria-label="Past Services" width="18" height="20" viewBox="0 0 18 20"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="/css/admin-menu.svg#past-icon"></use>
                            </svg>
                            <span class="menu-item">Past Services </span>
                        </a>
                    </li>
                    <li class="nav-item " id="draft">
                        <a class="nav-link" href="/customer/booking/draft">
                            <svg aria-label="Draft Service" width="18" height="20" viewBox="0 0 18 20"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="/css/menu.svg#draft-icon"></use>
                            </svg>
                            <span class="menu-item">Draft Service </span>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- billing Manager OR Company Admin  OR Supervisor --}}
            @if (in_array(9, session()->get('customerRoles')) ||
                    in_array(10, session()->get('customerRoles')) ||
                    in_array(5, session()->get('customerRoles')))
                <li class="nav-item has-sub">
                    <a class="d-flex align-items-center" href="#" aria-haspopup="true" aria-expanded="true">
                        <svg aria-label="Billing" width="16" height="20" viewBox="0 0 16 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="/css/menu.svg#billing-icon"></use>
                        </svg>
                        <span class="menu-item">Billing</span>
                    </a>
                    <ul role="menu" class="menu-content" id="Billing">
                        <li role="menuitem" class="nav-item" id="invoices">
                            <a class="nav-link" href="/customer/invoices">
                                <svg aria-label="Invoices" width="19" height="20" viewBox="0 0 19 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="/css/menu.svg#inovice-icon"></use>
                                </svg>
                                <span class="menu-item">Invoices</span>
                            </a>
                        </li>
                        <li role="menuitem" class="nav-item" id="payments-receipts">
                            <a class="nav-link" href="/customer/payments-receipts">
                                <svg aria-label="Payments & Receipts" width="18" height="20"
                                    viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="/css/menu.svg#payment-receipt-icon"></use>
                                </svg>
                                <span class="menu-item">Payments & Receipts</span>
                            </a>
                        </li>
                    </ul>
                    {{-- <ul role="menu" class="menu-content" id="Billing">
                    <li role="menuitem" class="nav-item">
                        <a class="nav-link" href="/customer/payments-setting">
                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="/css/customer.svg#payment-recept"></use>
                            </svg>
                            <span class="menu-item">Payment Settings</span>
                        </a>
                    </li>
                </ul> --}}
                </li>
            @endif

            @if (in_array(10, session()->get('customerRoles')))
                {{-- Company Admin --}}
                <li class="nav-item has-sub">
                    <a class="d-flex align-items-center" href="#" aria-haspopup="true" aria-expanded="true">
                        <svg aria-label="Profile" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="/css/menu.svg#profile-icon"></use>
                        </svg>
                        <span class="menu-item">Profile</span>
                    </a>
                    <ul role="menu" class="menu-content" id="Profile">
                        <li role="menuitem" class="nav-item" id="myprofile">
                            <a class="nav-link" href="/customer/myprofile">
                                <svg aria-label="My Profile" class="fill-none" width="19" height="21"
                                    viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="/css/menu.svg#myprofile-icon"></use>
                                </svg>
                                <span class="menu-item">My Profile </span>
                            </a>
                        </li>
                        <li role="menuitem" class="nav-item" id="company-profile">
                            <a class="nav-link" href="/customer/company-profile">
                                <svg aria-label="Company Profile" class="fill-none" width="19" height="18"
                                    viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="/css/menu.svg#company-profile-icon"></use>
                                </svg>
                                <span class="menu-item">Company Profile</span>
                            </a>
                        </li>
                        <li role="menuitem" class="nav-item">
                            <a class="nav-link"
                                href="/customer/departments/{{ encrypt(Auth()->user()->company_name) }}">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="/css/customer.svg#profile-nav-icon"></use>
                                </svg>
                                <span class="menu-item">Departments</span>
                            </a>
                        </li>
                        <li role="menuitem" class="nav-item" id="team-members">
                            <a class="nav-link" href="/customer/team-members">
                                <svg aria-label="Add Team Profile" width="19" height="20" viewBox="0 0 19 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="/css/menu.svg#add-team-icon"></use>
                                </svg>
                                <span class="menu-item">Team Members</span>
                            </a>
                        </li>
                        <li role="menuitem" class="nav-item" id="add-team">
                            <a class="nav-link" href="/customer/add-team">
                                <svg aria-label="Add Team Profile" width="19" height="20" viewBox="0 0 19 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="/css/menu.svg#add-team-icon"></use>
                                </svg>
                                <span class="menu-item">Add Team Members</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @else
            {{-- if(in_array(5, session()->get('customerRoles'))||in_array(9, session()->get('customerRoles'))) --}}
                {{-- Supervisor --}}
                <li class="nav-item has-sub">
                    <a class="d-flex align-items-center" href="#" aria-haspopup="true" aria-expanded="true">
                        <svg aria-label="Profile" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="/css/menu.svg#profile-icon"></use>
                        </svg>
                        <span class="menu-item">Profile</span>
                    </a>
                    <ul role="menu" class="menu-content" id="Profile">
                        <li role="menuitem" class="nav-item" id="myprofile">
                            <a class="nav-link" href="/customer/myprofile">
                                <svg aria-label="My Profile" class="fill-none" width="19" height="21"
                                    viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="/css/menu.svg#myprofile-icon"></use>
                                </svg>
                                <span class="menu-item">My Profile </span>
                            </a>
                        </li>
                        @if(in_array(5, session()->get('customerRoles')))
                        <li role="menuitem" class="nav-item">
                            <a class="nav-link"
                                href="/customer/department-profile/{{ encrypt(Auth()->user()->company_name) }}">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="/css/customer.svg#profile-nav-icon"></use>
                                </svg>
                                <span class="menu-item">Department Profile</span>
                            </a>
                        </li>
                        @endif
                        <li role="menuitem" class="nav-item" id="team-members">
                            <a class="nav-link" href="/customer/team-members">
                                <svg aria-label="Add Team Profile" width="19" height="20" viewBox="0 0 19 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="/css/menu.svg#add-team-icon"></use>
                                </svg>
                                <span class="menu-item">Team Members</span>
                            </a>
                        </li>
                        @if(in_array(5, session()->get('customerRoles')))

                        <li role="menuitem" class="nav-item" id="add-team">
                            <a class="nav-link" href="/customer/add-team">
                                <svg aria-label="Add Team Profile" width="19" height="20" viewBox="0 0 19 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="/css/menu.svg#add-team-icon"></use>
                                </svg>
                                <span class="menu-item">Add Team Members</span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
            {{-- @else
                <li role="menuitem" class="nav-item" id="myprofile">
                    <a class="nav-link" href="/customer/myprofile">
                        <svg aria-label="My Profile" class="fill-none" width="19" height="21"
                            viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="/css/menu.svg#myprofile-icon"></use>
                        </svg>
                        <span class="menu-item">My Profile </span>
                    </a>
                </li> --}}
            @endif
            <li class="nav-item" id="system-logs">
                <a href="/customer/system-logs">
                    <svg aria-label="System Logs" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/menu.svg#system-log-icon"></use>
                    </svg>
                    <span class="menu-item">System Logs</span>
                </a>
            </li>
            <li class="nav-item has-sub">
                <a class="d-flex align-items-center" href="#" aria-haspopup="true" aria-expanded="true">
                    <svg aria-label="Settings" width="20" height="19" viewBox="0 0 20 19" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/menu.svg#setting-icon"></use>
                    </svg>
                    <span class="menu-item">Settings</span>
                </a>
                <ul role="menu" class="menu-content" id="Settings">
                    <li role="menuitem" class="nav-item" id="settings">
                        <a class="nav-link" href="/customer/settings">
                            <svg aria-label="Notifications" class="fill-none" width="16" height="20"
                                viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="/css/menu.svg#notification-icon"></use>
                            </svg>
                            <span class="menu-item">Notifications</span>
                        </a>
                    </li>
                    <li role="menuitem" class="nav-item" id="change-password">
                        <a class="nav-link" href="/customer/change-password">
                            <svg aria-label="Password Reset" class="fill-none" width="20" height="20"
                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="/css/menu.svg#reset-password-icon"></use>
                            </svg>
                            <span class="menu-item">Password Reset</span>
                        </a>
                    </li>
                    <li role="menuitem" class="nav-item" id="edit-profile">
                        <a class="nav-link" href="/customer/edit-profile">
                            <svg aria-label="Edit Profile" width="24" height="17" viewBox="0 0 24 17"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="/css/admin-menu.svg#account-profile"></use>
                            </svg>
                            <span class="menu-item">Edit My Profile</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        {{-- </li> --}}
        {{-- </ul> --}}
    </div>
</div>
{{-- END: Main Menu --}}
