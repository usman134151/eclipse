<!-- BEGIN: Main Menu-->
    <div role="navigation" aria-label="Main Menu" class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item me-auto">
            <a class="navbar-brand" href="/admin/dashboard" aria-label="Eclipse Scheduling Brand Logo">
            @if(session()->has('company_logo') && session()->get('company_logo')!=null)
              
            <span class="brand-logo">
                  <img src="{{session()->get('company_logo')}}" alt="" style="max-width:90%"></span>
                @elseif (session()->has('theme') && !session('theme'))
                <span class="brand-logo">
                <svg aria-label="Eclipse Scheduling Logo" height="38" viewBox="0 0 49 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M24.596 0.0127934C23.5834 0.128856 22.932 0.341638 22.2096 0.799441C20.0361 2.17285 19.2944 4.95836 20.4811 7.27317C21.1777 8.63368 22.3966 9.54929 23.9381 9.86524C26.06 10.3037 28.3303 9.19465 29.3236 7.22158C29.7234 6.43494 29.8202 5.97068 29.8137 4.93901C29.8137 4.05565 29.8008 3.97182 29.6073 3.43665C29.1172 2.06324 28.311 1.14763 27.0468 0.52218C26.3245 0.167544 25.2538 -0.0581339 24.596 0.0127934Z" fill="black"/>
                  <path d="M35.2505 2.06994C35.3343 2.31496 35.3601 2.6567 35.3601 3.52072C35.3666 4.52015 35.3472 4.70714 35.2182 5.16495C35.0248 5.81619 34.5152 6.8543 34.1411 7.35079C33.6445 8.02138 31.8386 9.89128 28.33 13.3861L24.9375 16.7712L24.9826 17.8996C25.0794 20.4788 25.189 22.4776 25.2213 22.5099C25.2664 22.5615 31.7032 17.2032 32.4255 16.5133C33.4381 15.5526 35.5407 13.3022 35.9535 12.7477C37.2305 11.0326 37.8948 8.77579 37.7143 6.75758C37.5659 5.10047 36.8113 3.46914 35.6181 2.23758L35.1473 1.74754L35.2505 2.06994Z" fill="black"/>
                  <path d="M14.1338 2.231C13.1277 3.30136 12.515 4.44264 12.1796 5.84185C11.9796 6.69297 11.9732 8.09862 12.1731 9.04647C12.4182 10.2393 12.9342 11.4644 13.5727 12.4252C14.2822 13.4762 16.3654 15.7136 18.21 17.403C18.9517 18.0865 19.7257 18.7893 19.9192 18.9698C20.1127 19.1504 20.9576 19.9241 21.7896 20.685C22.6216 21.4458 23.4213 22.1745 23.5632 22.3034C23.7051 22.4324 23.8406 22.542 23.8599 22.542C23.8793 22.542 23.9179 22.2712 23.9437 21.9423C23.9695 21.6199 24.0405 20.7559 24.1114 20.0273C24.1824 19.2987 24.2791 18.2541 24.3307 17.706L24.421 16.7066L23.6664 15.9329C20.4996 12.6638 16.5202 8.45971 15.9526 7.77623C15.2754 6.96379 14.7852 6.02239 14.5273 5.03585C14.3144 4.22986 14.2886 2.97252 14.4628 2.30193C14.5208 2.07625 14.5531 1.87637 14.5402 1.86347C14.5208 1.84413 14.3402 2.01177 14.1338 2.231Z" fill="black"/>
                  <path d="M6.5684 11.3228C5.32361 11.4324 4.03368 11.9611 2.85985 12.8445C2.36967 13.212 1.69246 13.8826 1.8795 13.8181C1.93755 13.7923 2.22778 13.7278 2.51801 13.6698C4.02723 13.3668 5.99438 13.8697 7.3746 14.9143C8.10986 15.4752 10.5801 17.8545 14.0048 21.3106L16.9523 24.2896L19.616 24.1541C21.0737 24.0768 22.2797 24.0058 22.2926 23.9929C22.3055 23.9865 20.5706 21.8845 18.4422 19.3311C14.6047 14.7337 14.0951 14.1663 12.96 13.2571C11.612 12.1739 9.84482 11.4646 8.14856 11.3163C7.4262 11.2583 7.34235 11.2583 6.5684 11.3228Z" fill="#023DB0"/>
                  <path d="M40.4286 12.1287C39.1194 12.3092 37.7262 12.8573 36.475 13.6891C35.7333 14.1791 35.4624 14.4693 29.1095 21.446C28.1936 22.4583 27.2907 23.4384 27.1101 23.6254C26.7038 24.0574 26.6457 24.1541 26.8005 24.1541C26.9231 24.1541 28.0711 24.2573 30.4639 24.4829C31.2443 24.5603 31.9473 24.6054 32.0247 24.599C32.1021 24.5861 33.3792 23.4061 34.9593 21.8973C41.2026 15.9136 41.6218 15.5397 42.7763 14.9787C44.0791 14.3468 45.9495 14.1791 47.1234 14.5918C47.3233 14.6627 46.659 14.0244 46.0656 13.5795C45.0079 12.7799 43.8727 12.3028 42.6215 12.1287C41.8218 12.0191 41.2606 12.0191 40.4286 12.1287Z" fill="#023DB0"/>
                  <path d="M3.8272 19.2793C3.27253 19.4341 2.80171 19.634 2.40828 19.8661C0.795866 20.8397 -0.100635 22.5484 0.00900881 24.4441C0.125103 26.501 1.47308 28.2162 3.47247 28.8738C4.03359 29.0544 4.15613 29.0737 4.95589 29.0737C5.75565 29.0737 5.87819 29.0544 6.43931 28.8738C8.05817 28.3387 9.21911 27.1587 9.73508 25.508C9.94147 24.8632 9.95437 23.5092 9.76733 22.8644C9.27716 21.1815 8.15492 19.995 6.48446 19.4018C6.08458 19.26 5.89109 19.2342 5.08488 19.2148C4.42057 19.1955 4.05939 19.2148 3.8272 19.2793Z" fill="#023DB0"/>
                  <path d="M42.944 20.0598C41.0736 20.4403 39.5322 22.0265 39.1645 23.9479C38.6744 26.5207 40.1771 28.9644 42.7183 29.706C43.3955 29.9058 44.4855 29.9187 45.2014 29.7382C46.9428 29.2997 48.3746 27.9005 48.8455 26.1854C49.2647 24.6314 48.8197 22.8067 47.7039 21.5429C47.1363 20.8916 45.9625 20.2275 45.0724 20.0534C44.5371 19.9438 43.4858 19.9502 42.944 20.0598Z" fill="#023DB0"/>
                  <path d="M16.0819 25.1599C15.869 25.3598 15.2886 25.9208 14.7919 26.4043C11.58 29.5187 8.35519 32.5621 7.63928 33.1424C6.83307 33.8066 5.96237 34.245 4.93043 34.503C4.13067 34.7028 2.92459 34.7222 2.23447 34.5416C1.98939 34.4836 1.7959 34.4514 1.7959 34.4772C1.7959 34.5481 2.6924 35.3218 3.15032 35.6442C5.13682 37.0434 7.60058 37.3529 10.1804 36.5276C11.0124 36.2568 12.2766 35.5669 12.986 34.9994C14.7403 33.5873 16.1335 32.1495 21.4157 26.3205L22.2929 25.3469L20.8675 25.2115C20.0807 25.1341 18.9133 25.0245 18.2748 24.9665C17.6362 24.9084 16.9719 24.8439 16.7913 24.8246C16.4689 24.7924 16.4689 24.7924 16.0819 25.1599Z" fill="#023DB0"/>
                  <path d="M30.0451 25.289C29.2453 25.3277 28.2392 25.3664 27.8135 25.3728C27.3814 25.3793 26.9428 25.3986 26.8331 25.4179L26.6396 25.4566L27.7425 26.7914C28.3553 27.5264 29.5742 28.9966 30.4514 30.054C31.7478 31.6144 32.354 32.285 33.6117 33.5294C34.4695 34.3741 35.4047 35.2639 35.6885 35.5025C37.0365 36.6374 38.3845 37.2821 40.1065 37.6368C41.0546 37.8238 42.48 37.7851 43.4281 37.5401C44.2085 37.3337 45.3178 36.805 45.9628 36.3214C46.4659 35.9474 47.156 35.3091 47.1108 35.2639C47.0979 35.251 46.8658 35.2833 46.5949 35.3349C45.3565 35.5928 43.828 35.3671 42.5961 34.7481C41.5706 34.2258 41.2223 33.9099 36.5205 29.2351L32.4572 25.1858L31.9735 25.1987C31.7155 25.1987 30.8448 25.2439 30.0451 25.289Z" fill="#023DB0"/>
                  <path d="M19.4354 30.4729C14.9722 34.1869 13.8435 35.2122 13.0631 36.2438C12.2634 37.3077 11.5668 38.9455 11.3282 40.3383C11.2121 41.0218 11.2314 42.3178 11.3669 43.0077C11.5733 44.0781 12.0376 45.1162 12.7149 46.0254C13.0954 46.5412 13.7275 47.2569 13.7662 47.2182C13.7855 47.2053 13.7468 46.9796 13.6888 46.7153C13.5404 46.0576 13.5404 44.9614 13.6888 44.278C13.9145 43.2141 14.3531 42.3049 15.0561 41.428C15.5914 40.7574 18.4937 37.7784 21.3961 34.9091L24.0598 32.2784L24.0211 31.9108C24.0017 31.7045 23.9501 30.6922 23.9114 29.6669C23.8728 28.6353 23.8212 27.5907 23.8018 27.3392L23.7567 26.8814L19.4354 30.4729Z" fill="black"/>
                  <path d="M25.0781 27.004C25.0781 27.0491 25.0329 27.5198 24.9813 28.055C24.8975 28.9061 24.7749 30.2344 24.633 31.8399L24.5879 32.33L24.9039 32.6781C25.0781 32.8651 25.5747 33.381 26.0068 33.8259C27.7289 35.5862 31.7792 39.8611 32.8176 41.0153C33.7399 42.0405 34.3462 43.2399 34.5655 44.465C34.6622 45.0453 34.6493 46.077 34.5333 46.6831C34.4752 46.9668 34.443 47.2053 34.4559 47.2182C34.4881 47.2505 35.1524 46.4961 35.5007 46.0318C36.9777 44.0652 37.3517 41.5247 36.552 39.0036C36.1973 37.8881 35.6748 36.9015 34.9912 36.044C34.817 35.8247 34.0947 35.1155 33.3788 34.4642C32.6629 33.813 31.8502 33.0586 31.56 32.7942C31.2762 32.5298 30.212 31.5562 29.2058 30.6342C28.1932 29.7056 26.8711 28.4999 26.2583 27.9389C25.6521 27.3844 25.1361 26.9266 25.1168 26.9266C25.0974 26.9266 25.0781 26.9653 25.0781 27.004Z" fill="black"/>
                  <path d="M23.4989 39.0875C21.6737 39.3776 20.158 40.5576 19.4872 42.2083C18.7842 43.9556 19.1712 46.0448 20.4611 47.4117C21.3189 48.3273 22.1767 48.7787 23.4022 48.9592C24.06 49.0624 24.1632 49.0624 24.8018 48.9592C26.4529 48.7142 27.8202 47.7406 28.5232 46.3156C28.8844 45.587 29.0069 45.1227 29.0585 44.3683C29.2069 41.9761 27.6783 39.8548 25.3564 39.2422C24.8598 39.1133 23.873 39.0294 23.4989 39.0875Z" fill="black"/>
                  <circle cx="24.999" cy="25.0001" r="18" transform="rotate(155.101 24.999 25.0001)" fill="url(#paint0_diamond_0_1)"/>
                  <defs>
                    <radialGradient id="paint0_diamond_0_1" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(24.999 25.0001) rotate(90) scale(18)">
                      <stop stop-color="white"/>
                      <stop offset="1" stop-color="white" stop-opacity="0"/>
                    </radialGradient>
                  </defs>
                </svg>
              
              </span>
              <h2 class="brand-text align-self-center">
                <svg aria-label="Eclipse Scheduling Logo" width="124" height="19" viewBox="0 0 124 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.14671 0.687832C0.120911 0.707176 0.101562 4.69845 0.101562 9.55374V18.3745H8.12493H16.1483L16.2837 17.9683C16.3547 17.7491 16.4385 17.4654 16.4708 17.3428C16.5095 17.2203 16.6901 16.6207 16.8707 16.021C17.0577 15.4149 17.2254 14.8604 17.2383 14.7766L17.2705 14.6347H10.8144H4.35833V13.0227V11.4107H9.84054H15.3227V9.54084V7.67094H9.84054H4.35833L4.37123 6.03962L4.39058 4.41474L10.2727 4.39539L16.1547 4.3825L16.4127 3.55716C16.5546 3.10581 16.7481 2.47391 16.8384 2.15796C16.9352 1.83556 17.0641 1.40355 17.1351 1.19722C17.1996 0.984438 17.2576 0.771656 17.2576 0.726521C17.2576 0.655592 15.7033 0.642696 8.72474 0.642696C4.0294 0.642696 0.166059 0.662041 0.14671 0.687832Z" fill="black"/>
                  <path d="M24.9344 0.713634C23.4123 0.932865 21.9805 1.65503 20.955 2.71894C19.8521 3.86023 19.0523 5.54959 18.7041 7.44528C18.5299 8.41892 18.5364 10.3468 18.7234 11.3785C19.2265 14.1447 20.6196 16.3434 22.6061 17.4976C23.1608 17.82 23.6896 18.0263 24.3862 18.2004C24.9667 18.3423 24.9925 18.3423 30.6359 18.3423H36.2987L36.6147 17.3106C36.7889 16.7432 36.9953 16.0726 37.0662 15.8276C37.1372 15.5761 37.2533 15.2086 37.3178 15.0087L37.4339 14.6412L31.6872 14.6218C25.9728 14.6025 25.9341 14.6025 25.5665 14.4606C24.1476 13.919 23.2833 12.5327 23.0576 10.4113C22.8189 8.15455 23.6574 5.75592 24.9925 4.90479C25.1666 4.78873 25.4762 4.63398 25.689 4.5566C26.0631 4.41475 26.0954 4.41475 31.1841 4.38251L36.3052 4.35027L36.4213 3.99563C36.4793 3.80219 36.7244 3.0091 36.9566 2.24179C37.1952 1.47449 37.4016 0.797459 37.421 0.739426C37.4597 0.655603 36.8405 0.642708 31.3776 0.649155C28.0303 0.655603 25.1279 0.681395 24.9344 0.713634Z" fill="black"/>
                  <path d="M39.2971 0.687832C39.2713 0.707176 39.252 4.69845 39.252 9.55374V18.3745H47.0496H54.8472L55.0536 17.7104C55.1632 17.3493 55.3309 16.8077 55.4212 16.5046C55.5115 16.2016 55.6663 15.6857 55.7695 15.3569C55.8727 15.028 55.9565 14.7314 55.9565 14.6992C55.9565 14.6541 53.7895 14.6347 49.7326 14.6347H43.5087V7.6387V0.642696H41.4255C40.2774 0.642696 39.3164 0.662041 39.2971 0.687832Z" fill="black"/>
                  <path d="M57.8262 9.5086V18.3745H59.9223H62.0184V9.5086V0.642696H59.9223H57.8262V9.5086Z" fill="black"/>
                  <path d="M65.502 9.5086V18.3745H67.5981H69.6942V15.6083V12.8357L74.1961 12.8164C78.4786 12.7906 78.7237 12.7842 79.3687 12.6487C81.2455 12.2683 82.4774 11.5075 83.3675 10.1792C84.0898 9.09594 84.3736 8.03848 84.3156 6.60703C84.2511 4.93057 83.7029 3.66678 82.5355 2.5126C81.6519 1.63568 80.8908 1.21011 79.5622 0.84903L78.9495 0.674934L72.2289 0.655592L65.502 0.636248V9.5086ZM78.7366 4.59528C79.1688 4.80806 79.4525 5.11111 79.6847 5.6076C79.8331 5.92355 79.8524 6.03962 79.8524 6.67151C79.8524 7.56778 79.7105 7.96755 79.2204 8.47049C78.6592 9.0379 78.8011 9.02501 73.8994 9.02501H69.6942V6.74889C69.6942 5.49154 69.7136 4.44698 69.7394 4.42118C69.7652 4.39539 71.7194 4.38894 74.08 4.39539L78.369 4.41474L78.7366 4.59528Z" fill="black"/>
                  <path d="M90.7194 0.713623C87.9847 1.11984 86.1272 2.66735 85.6177 4.95636C85.2372 6.69086 85.8112 8.56076 87.1011 9.74718C87.8751 10.4564 88.7393 10.9014 89.9454 11.198L90.6226 11.3656L94.6537 11.4043L98.6847 11.443L99.0394 11.6429C99.6779 11.9975 100.02 12.6939 99.8779 13.3258C99.7682 13.8223 99.5102 14.1318 98.9943 14.3897L98.5557 14.6025L92.5898 14.6218L86.6238 14.6412L86.095 16.395C85.8047 17.3622 85.5467 18.2004 85.5274 18.2649C85.4822 18.3681 85.8305 18.3745 92.1899 18.3745C98.6911 18.3745 98.9233 18.3681 99.5876 18.2456C100.91 17.9876 101.871 17.5234 102.69 16.7432C103.535 15.9501 104.031 15.0216 104.231 13.8932C104.354 13.1839 104.354 12.926 104.231 12.2232C104.025 11.0497 103.606 10.2372 102.78 9.41188C102.006 8.64458 101.265 8.22546 100.039 7.87728L99.4586 7.70963L95.3954 7.67739L91.3321 7.6387L90.8935 7.42592C90.384 7.17445 90.126 6.8714 90.0099 6.38136C89.8358 5.64629 90.2034 4.96281 90.9902 4.60173L91.3966 4.41474L97.0981 4.3825L102.8 4.35026L102.98 3.76994C103.696 1.41645 103.877 0.810341 103.877 0.732967C103.877 0.655592 102.845 0.642696 97.4786 0.649143C93.9571 0.655592 90.9129 0.681383 90.7194 0.713623Z" fill="black"/>
                  <path d="M106.844 9.5086V18.3745H114.861H122.878L123.413 16.582C123.716 15.6019 123.968 14.7572 123.987 14.7121C124.006 14.6541 122.697 14.6347 117.557 14.6347H111.101V13.0227V11.4107H116.583H122.065V9.54084V7.67094H116.583H111.101V6.02672V4.3825H116.989H122.884L123.013 3.94404C123.484 2.40298 124 0.687832 124 0.668489C124 0.655592 120.143 0.642696 115.422 0.642696H106.844V9.5086Z" fill="black"/>
                </svg>
              </h2>
              @else
              <span class="brand-logo"><img src="/tenant-resources/images/dark-logo-text.svg"></span>
              <h2 class="brand-text align-self-center"><img src="/tenant-resources/images/dark-logo-icon.svg"></h2>  
              @endif
            </a>
          </li>
          <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x d-block d-xl-none text-primary toggle-icon font-medium-4"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-disc d-none d-xl-block collapse-toggle-icon primary font-medium-4"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="3"></circle></svg></a></li>
        </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <script> window.userCurrent = "admin"; </script>
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class="nav-item" id="dashboard">
            <a href="/admin/dashboard">
              <svg aria-label="Home" width="20" height="20" viewBox="0 0 20 20">
                <use xlink:href="/css/admin-menu.svg#dashboard_icon"></use>
              </svg>
              <span class="menu-item">Dashboard</span>
            </a>
          </li>
          <li class="nav-item " id="chat">
            <a href="/chat" target="_blank" >
              <svg aria-label="Chat" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <use xlink:href="/css/admin-menu.svg#chat-icon"></use>
              </svg>
              <span class="menu-item">Chat</span>
            </a>
          </li>
          @if(userHasPermission(1,1))
          <li class="nav-item has-sub" id="assignments">
            <a class="d-flex align-items-center" href="#" aria-haspopup="true" aria-expanded="true">
              <svg aria-label="Assignments" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <use xlink:href="/css/admin-menu.svg#assignments-icon"></use>
              </svg>
              <span class="menu-item">Assignments</span>
            </a>
            <ul class="menu-content " id="Bookings">
              @if(userHasPermission(1,2))
              <li class="nav-item " id="create">
                <a class="nav-link" href="/admin/booknow/create">
                  <svg aria-label="Create" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#create-icon"></use>
                </svg>
                  <span class="menu-item">Create</span>
                </a>
              </li>
              @endif
              @if(userHasPermission(15,1))
              <li class="nav-item " id="today">
                <a class="nav-link" href="/admin/bookings/today">
                  <svg aria-label="Today's Assignments" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#today-icon"></use>
                  </svg>
                  <span class="menu-item">Today's</span>
                </a>
              </li>
              <li class="nav-item  " id="upcoming">
                <a class="nav-link" href="/admin/bookings/upcoming">
                  <svg aria-label="Upcoming" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#upcoming-icon"></use>
                  </svg>
                  <span class="menu-item" >Upcoming</span>
                </a>
              </li>
              <li class="nav-item  " id="past">
                <a class="nav-link" href="/admin/bookings/past">
                  <svg aria-label="Past Assignments" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#past-icon"></use>
                  </svg>
                  <span class="menu-item">Past</span>
                </a>
              </li>
              <li class="nav-item  " id="pending-approval">
                <a class="nav-link" href="/admin/bookings/pending-approval">
                  <svg aria-label="Pending Review" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#pending-review-icon"></use>
                  </svg>
                  <span class="menu-item">Pending Review</span>
                </a>
              </li>
              <li class="nav-item  " id="active-assignments">
                <a class="nav-link" href="/admin/bookings/active-assignments">
                  <svg aria-label="Check-Out-Sidebar" width="23" height="21" viewBox="0 0 23 21"
                  fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <use xlink:href="/css/common-icons.svg#Check-Out-Sidebar">
                  </use>
                    </svg>
                  <span class="menu-item">Active</span>
                </a>
              </li>
              @endif
              <li class="nav-item  " id="drafts">
                <a class="nav-link" href="/admin/bookings/drafts">
                  <svg aria-label="Draft Assignments" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#draft-icon"></use>
                  </svg>
                  <span class="menu-item">Draft</span>
                </a>
              </li>
              <li class="nav-item  " id="unassigned">
                <a class="nav-link" href="/admin/bookings/unassigned">
                  <svg class="fill-none" aria-label="Unassigned Assignments" width="17" height="20" viewBox="0 0 17 20"  fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#unassigned-icon"></use>
                  </svg>
                  <span class="menu-item">Unassigned</span>
                </a>
              </li>
              <li class="nav-item  " id="invitations">
                <a class="nav-link" href="/admin/bookings/invitations">
                  <svg aria-label="Invitations Assignments" width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#invitations-icon"></use>
                  </svg>
                  <span class="menu-item">Invitations</span>
                </a>
              </li>
              @if(userHasPermission(17,1))
              <li class="nav-item has-sub">
                <a class="d-flex align-items-center" href="#" aria-haspopup="true" aria-expanded="true">
                  <svg  aria-label="Quotes And Leads" width="18" height="22" viewBox="0 0 18 22" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#qoutes-icon"></use>

                  </svg>
                  <span class="menu-item">Quotes & Leads</span>
                </a>
                <ul class="menu-content  " id="Quote">
                  <li class="nav-item " id="leads">
                    <a class="nav-link" href="/admin/leads" >
                      <svg aria-label="Leads" width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#lead-icon"></use>
                      </svg>
                      <span class="menu-item">Leads</span>
                    </a>
                  </li>
                  <li class="nav-item " id="quotes">
                    <a class="nav-link" href="/admin/quotes">
                      <svg  aria-label="Quotes" width="18" height="22" viewBox="0 0 18 22" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#qoutes-icon"></use>
                    </svg>
                      <span class="menu-item">Quotes</span>
                    </a>
                  </li>
                </ul>
              </li>
              @endif
            </ul>
          </li>
          @endif
          @if(userHasPermission(2,1))
          <li class="nav-item has-sub">
            <a class="d-flex align-items-center" href="#" aria-haspopup="true" aria-expanded="true">
              <svg aria-label="Customers" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <use xlink:href="/css/admin-menu.svg#customers-icon"></use>
              </svg>
              <span class="menu-item">Customers</span>
            </a>
            <ul class="menu-content " id="Customers">
            <li class="nav-item  " id="company">
                <a class="nav-link" href="/admin/company">
                  <svg class="fill-none" aria-label="All Companies" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#all-companies-icon"></use>
                  </svg>
                  <span class="menu-item">All Companies</span>
                </a>
              </li>
              <li class="nav-item " id="create-customer">
                <a class="nav-link" href="/admin/customer/create-customer">
                  <svg class="fill-none" aria-label="Add Customer User" width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#add-customer-icon"></use>
                  </svg>
                  <span class="menu-item">Add Customer User</span>
                </a>
              </li>
              <li class="nav-item  " id="customer">
                <a class="nav-link" href="/admin/customer">
                  <svg class="fill-none"  aria-label="Active Customers" width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#all-customer-icon"></use>
                  </svg>
                  <span class="menu-item">Active Customers</span>
                </a>
              </li>

              <li class="nav-item" id="deactivated-customer">
                <a class="nav-link" href="/admin/deactivated-customer">
                  <svg class="fill-none" aria-label="Deactivated Customers" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#deactivated-customer-icon"></use>
                  </svg>
                  <span class="menu-item">Deactivated Customers</span>
                </a>
              </li>
              <li class="nav-item  " id="draft-invoices">
                <a class="nav-link" href="/admin/draft-invoices">
                  <svg aria-label="Invoice Generator" width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#invoice-genrator-icon"></use>
                  </svg>
                  <span class="menu-item">Invoice Generator</span>
                </a>
              </li>
              <li class="nav-item  " id="customer-invoices">
                <a class="nav-link" href="/admin/customer-invoices">
                  <svg aria-label="Customer Invoices" width="18" height="20" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#customer-invoices"></use>
                  </svg>
                  <span class="menu-item">Customer Invoices</span>
                </a>
              </li>
            </ul>
          </li>
          @endif
          @if(userHasPermission(3,1))
          <li class="nav-item has-sub">
            <a class="d-flex align-items-center" href="#" aria-haspopup="true" aria-expanded="true">
              <svg aria-label="Providers" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <use xlink:href="/css/admin-menu.svg#provider_icon"></use>
              </svg>
              <span class="menu-item">Providers</span>
            </a>
            <ul role="menu" class="menu-content  " id="Providers">
            <li role="menuitem" class="nav-item  " id="teams">
                <a class="nav-link" href="/admin/teams" >
                  <svg aria-label="Provider Teams" width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#team-provider-icon"></use>
                  </svg>
                  <span class="menu-item">Provider Teams</span>
                </a>
              </li>
              <li role="menuitem" class="nav-item " id="create-provider">
                <a class="nav-link" href="/admin/provider/create-provider">
                  <svg class="fill-none" aria-label="Add Provider"  width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#add-provider-icon"></use>
                  </svg>
                  <span class="menu-item">Add Provider</span>
                </a>
              </li>

              <li role="menuitem" class="nav-item  " id="provider">
                <a class="nav-link" href="/admin/provider">
                  <svg class="fill-none" aria-label="Active Providers"  width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#all-provider-icon"></use>

                  </svg>
                  <span class="menu-item">Active Providers</span>
                </a>
              </li>
              <li role="menuitem" class="nav-item  " id="deactivated-provider">
                <a class="fill-none" class="nav-link" href="/admin/deactivated-provider">
                  <svg aria-label="Deactivated Providers"  width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#deactivated-providers-icon"></use>
                  </svg>
                  <span class="menu-item">Deactivated Providers</span>
                </a>
              </li>
              <li role="menuitem" class="nav-item " id="reimbursement">
                <a class="nav-link" href="/admin/reimbursement">
                  <svg aria-label="Reimbursements" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#reimbursements-icon"></use>
                  </svg>
                  <span class="menu-item">Reimbursements</span>
                </a>
              </li>
              <li role="menuitem" class="nav-item  " id="remittances">
                <a class="nav-link" href="/admin/provider/remittances">
                  <svg aria-label="Remittances" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#remittances-icon"></use>
                  </svg>
                  <span class="menu-item">Remittances</span>
                </a>
              </li>
              <li role="menuitem" class="nav-item  " id="pending-payments">
                <a class="nav-link" href="/admin/provider/pending-payments">
                  <svg  aria-label="Payment Manager" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#payment-manager-icon"></use>
                  </svg>
                  <span class="menu-item">Payment Manager</span>
                </a>
              </li>

              <li role="menuitem" class="nav-item has-sub">
                <a class="d-flex align-items-center" href="#" aria-haspopup="true" aria-expanded="true">
                  <svg aria-label="Provider Applicants" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#provider-applicants-icon"></use>
                  </svg>
                  Provider Applicants
                </a>
                <ul role="menu" class="menu-content  " id="ProSc">
                  <li role="menuitem" class="nav-item " id="provider-applications">
                    <a class="nav-link" href="/admin/provider-applications">
                      <svg aria-label="Provider Applications" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="path-1-inside-1_2655_98124" fill="white">
                          <path d="M15 0H1C0.734784 0 0.48043 0.105357 0.292893 0.292893C0.105357 0.48043 0 0.734784 0 1V13C0 13.2652 0.105357 13.5196 0.292893 13.7071C0.48043 13.8946 0.734784 14 1 14H15C15.2652 14 15.5196 13.8946 15.7071 13.7071C15.8946 13.5196 16 13.2652 16 13V1C16 0.734784 15.8946 0.48043 15.7071 0.292893C15.5196 0.105357 15.2652 0 15 0ZM1 1H15V3.1H1V1ZM1 13V3.9H15V13H1Z"/>
                        </mask>
                        <path d="M15 0H1C0.734784 0 0.48043 0.105357 0.292893 0.292893C0.105357 0.48043 0 0.734784 0 1V13C0 13.2652 0.105357 13.5196 0.292893 13.7071C0.48043 13.8946 0.734784 14 1 14H15C15.2652 14 15.5196 13.8946 15.7071 13.7071C15.8946 13.5196 16 13.2652 16 13V1C16 0.734784 15.8946 0.48043 15.7071 0.292893C15.5196 0.105357 15.2652 0 15 0ZM1 1H15V3.1H1V1ZM1 13V3.9H15V13H1Z"/>
                        <path d="M1 0V-5V0ZM0 1H-5H0ZM0 13H-5H0ZM1 1V-4H-4V1H1ZM15 1H20V-4H15V1ZM15 3.1V8.1H20V3.1H15ZM1 3.1H-4V8.1H1V3.1ZM1 13H-4V18H1V13ZM1 3.9V-1.1H-4V3.9H1ZM15 3.9H20V-1.1H15V3.9ZM15 13V18H20V13H15ZM15 -5H1V5H15V-5ZM1 -5C-0.591298 -5 -2.11742 -4.36786 -3.24264 -3.24264L3.82843 3.82843C3.07828 4.57857 2.06087 5 1 5V-5ZM-3.24264 -3.24264C-4.36786 -2.11742 -5 -0.591298 -5 1H5C5 2.06087 4.57857 3.07828 3.82843 3.82843L-3.24264 -3.24264ZM-5 1V13H5V1H-5ZM-5 13C-5 14.5913 -4.36786 16.1174 -3.24264 17.2426L3.82843 10.1716C4.57857 10.9217 5 11.9391 5 13H-5ZM-3.24264 17.2426C-2.11742 18.3679 -0.591301 19 1 19V9C2.06087 9 3.07828 9.42143 3.82843 10.1716L-3.24264 17.2426ZM1 19H15V9H1V19ZM15 19C16.5913 19 18.1174 18.3679 19.2426 17.2426L12.1716 10.1716C12.9217 9.42143 13.9391 9 15 9V19ZM19.2426 17.2426C20.3679 16.1174 21 14.5913 21 13H11C11 11.9391 11.4214 10.9217 12.1716 10.1716L19.2426 17.2426ZM21 13V1H11V13H21ZM21 1C21 -0.591289 20.3679 -2.11742 19.2426 -3.24264L12.1716 3.82843C11.4214 3.07827 11 2.06086 11 1H21ZM19.2426 -3.24264C18.1174 -4.36786 16.5913 -5 15 -5V5C13.9391 5 12.9217 4.57858 12.1716 3.82843L19.2426 -3.24264ZM1 6H15V-4H1V6ZM10 1V3.1H20V1H10ZM15 -1.9H1V8.1H15V-1.9ZM6 3.1V1H-4V3.1H6ZM6 13V3.9H-4V13H6ZM1 8.9H15V-1.1H1V8.9ZM10 3.9V13H20V3.9H10ZM15 8H1V18H15V8Z" mask="url(#path-1-inside-1_2655_98124)"/>
                      </svg>
                      <span class="menu-item">Provider Applications</span>
                    </a>
                  </li>
                  <li role="menuitem" class="nav-item " id="provider-screenings">
                    <a class="nav-link" href="/admin/provider-screenings">
                      <svg class="fill-none" aria-label="Provider Screenings"  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#provider-screenings-icon"></use>
                      </svg>
                      <span class="menu-item">Provider Screenings</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          @endif
          @if(userHasPermission(4,1))
          <li class="nav-item " id="reports">
            <a href="/admin/reports">
              <svg aria-label="Reports" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <use xlink:href="/css/admin-menu.svg#report-icon"></use>
              </svg>
              <span class="menu-item">Reports</span>
            </a>
          </li>
          @endif
          @if(userHasPermission(5,1))
          <li class="nav-item " id="logs">
            <a href="/admin/system-logs">
              <svg aria-label="System Logs" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <use xlink:href="/css/admin-menu.svg#system-log-icon"></use>
              </svg>
              <span class="menu-item">System Logs</span>
            </a>
          </li>
          @endif
          <li class="nav-item has-sub">
            <a class="d-flex align-items-center" href="#" aria-haspopup="true" aria-expanded="true">
              <svg fill="none" aria-label="Settings" width="20" height="20" viewBox="0 0 20 20"  xmlns="http://www.w3.org/2000/svg">
                <use xlink:href="/css/admin-menu.svg#settings"></use>
              </svg>
              <span class="menu-item">Settings</span>
            </a>
            <ul role="menu" class="menu-content  " id="Settings">
              <?php /*
              <li role="menuitem" class="nav-item ">
                <a class="nav-link" href="/admin/jira-status">
                  <svg width="18" height="18" viewBox="0 0 18 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.9999 18.0001C9.71192 18.0001 10.4079 17.789 11 17.3934C11.592 16.9978 12.0534 16.4356 12.3259 15.7778C12.5983 15.1199 12.6696 14.3961 12.5307 13.6978C12.3918 12.9994 12.049 12.358 11.5455 11.8545C11.042 11.351 10.4006 11.0082 9.70223 10.8693C9.0039 10.7304 8.28006 10.8017 7.62224 11.0741C6.96443 11.3466 6.40219 11.808 6.00661 12.4C5.61104 12.9921 5.3999 13.6881 5.3999 14.4001C5.3999 15.3549 5.77919 16.2705 6.45432 16.9457C7.12945 17.6208 8.04512 18.0001 8.9999 18.0001ZM8.9999 12.6001C9.35591 12.6001 9.70392 12.7057 9.99993 12.9035C10.2959 13.1012 10.5266 13.3824 10.6629 13.7113C10.7991 14.0402 10.8348 14.4021 10.7653 14.7513C10.6959 15.1004 10.5244 15.4212 10.2727 15.6729C10.021 15.9246 9.70023 16.0961 9.35106 16.1655C9.0019 16.235 8.63998 16.1993 8.31107 16.0631C7.98217 15.9268 7.70104 15.6961 7.50326 15.4001C7.30547 15.1041 7.1999 14.7561 7.1999 14.4001C7.1999 13.9227 7.38954 13.4649 7.72711 13.1273C8.06468 12.7897 8.52251 12.6001 8.9999 12.6001ZM7.1999 3.6001H10.7999V5.4001H7.1999V3.6001Z"/>
                    <path d="M16.2 0H1.8C1.32276 0.000476529 0.865196 0.190272 0.527734 0.527734C0.190272 0.865196 0.000476529 1.32276 0 1.8V23.4C0.000476529 23.8772 0.190272 24.3348 0.527734 24.6723C0.865196 25.0097 1.32276 25.1995 1.8 25.2H16.2C16.6772 25.1993 17.1346 25.0094 17.472 24.672C17.8094 24.3346 17.9993 23.8772 18 23.4V1.8C17.9995 1.32276 17.8097 0.865196 17.4723 0.527734C17.1348 0.190272 16.6772 0.000476529 16.2 0ZM12.6 23.4H5.4V21.6C5.4 21.3613 5.49482 21.1324 5.6636 20.9636C5.83239 20.7948 6.06131 20.7 6.3 20.7H11.7C11.9387 20.7 12.1676 20.7948 12.3364 20.9636C12.5052 21.1324 12.6 21.3613 12.6 21.6V23.4ZM14.4 23.4V21.6C14.4 20.8839 14.1155 20.1972 13.6092 19.6908C13.1028 19.1845 12.4161 18.9 11.7 18.9H6.3C5.58392 18.9 4.89716 19.1845 4.39081 19.6908C3.88446 20.1972 3.6 20.8839 3.6 21.6V23.4H1.8V1.8H16.2V23.4H14.4Z"/>
                  </svg>
                  <span class="menu-item">Credentials Manager</span>
                </a>
              </li>
              */ ?>
              @if(userHasPermission(6,1))
              <li role="menuitem" class="nav-item has-sub">
                <a class="d-flex align-items-center" href="#" aria-haspopup="true" aria-expanded="true">
                  <svg aria-label="Business Profile & Settings" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#business-profile-settings-icon"></use>
                </svg>
                  <span class="menu-item">Business Profile & &nbsp Settings</span>
                </a>
                <ul role="menu" class="menu-content " id="Business-rofile-settings">
                  <li role="menuitem" class="nav-item  " id="profile">
                    <a class="nav-link" href="/admin/profile">
                      <svg  aria-label="Account Profile" width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#account-profile"></use>
                    </svg>
                      <span class="menu-item">Account Profile</span>
                    </a>
                  </li>
                  <li role="menuitem" class="nav-item " id="business-setup">
                    <a class="nav-link" href="/admin/business-setup">
                      <svg aria-label="Business Setup" width="13" height="19" viewBox="0 0 13 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#buisness-profile-icon"></use>
                      </svg>
                      <span class="menu-item">Business Setup</span>
                    </a>
                  </li>
                  <li role="menuitem" class="nav-item " id="settings">
                    <a class="nav-link" href="/admin/settings">
                      <svg aria-label="Notifications"  width="16" height="20" viewBox="0 0 16 20" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#notification-icon"></use>
                      </svg>
                      <span class="menu-item">Email Notifications</span>
                    </a>
                  </li>
                  <li role="menuitem" class="nav-item " id="templates">
                    <a class="nav-link" href="/admin/templates">
                      <svg aria-label="Email Templates"  width="22" height="19" viewBox="0 0 22 19" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#email-template-icon"></use>
                      </svg>
                      <span class="menu-item">System Notifications</span>
                    </a>
                  </li>
                  <li role="menuitem" class="nav-item " id="sms-templates">
                    <a class="nav-link" href="/admin/sms-templates">
                      <svg aria-label="SMS Notifications" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle fill-none">
                        <circle cx="12" cy="12" r="10"></circle>
                      </svg>
                      <span class="menu-item">SMS Notifications</span>
                    </a>
                  </li>
                  <li role="menuitem" class="nav-item  " id="setup-values">
                    <a class="nav-link" href="/admin/setup-values">
                      <svg id="setup-values-icon" hight="20" width="20" viewBox="0 0 20 20" fill="none">
                        <mask id="" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="1" width="19" height="19">
                        <path d="M1 1.83838H18.194V19.0129H1V1.83838Z" fill="" stroke="" stroke-width="0.6"></path>
                        </mask>
                        <g mask="">
                        <path d="M17.615 8.36573L16.5934 8.21374L15.6256 9.17962L16.9899 9.38736V11.5095L15.5699 11.6999C15.3795 11.7367 15.2099 11.8519 15.1331 12.0404L14.6214 13.2911C14.5465 13.462 14.5656 13.67 14.679 13.822L15.5315 14.9573L14.0347 16.4541L12.8977 15.6018C12.7457 15.4897 12.5379 15.469 12.3683 15.5457L11.1352 16.0575C10.9659 16.1327 10.8331 16.2847 10.7947 16.4748L10.587 17.8948H8.48401L8.27444 16.4748C8.25678 16.2847 8.12428 16.1327 7.9339 16.0575L6.68322 15.5457C6.51386 15.469 6.3043 15.4897 6.15413 15.6018L5.01706 16.4541L3.52026 14.9573L4.37253 13.822C4.48614 13.67 4.50533 13.462 4.42857 13.2911L3.93603 12.0404C3.8608 11.8692 3.7088 11.7367 3.50107 11.6999L2.09869 11.5095V9.38736L3.50107 9.17962C3.68961 9.16043 3.8608 9.02763 3.93603 8.83908L4.44776 7.58839C4.52452 7.41721 4.50533 7.20947 4.39172 7.05748L3.53945 5.92041L5.03472 4.4236L6.17149 5.2777C6.32348 5.39132 6.53305 5.41051 6.70241 5.35294L7.95309 4.84121C8.12428 4.76597 8.25678 4.61398 8.27597 4.40624L8.48401 2.98437H10.6062L10.8139 4.34867L11.7798 3.38279L11.6278 2.35933C11.5912 2.09372 11.364 1.88599 11.0795 1.88599H8.00914C7.74505 1.88599 7.49893 2.09372 7.46055 2.35933L7.23332 3.93107L6.55072 4.21587L5.28236 3.26917C5.0731 3.09799 4.77064 3.13637 4.56138 3.32522L2.42004 5.48544C2.23119 5.67429 2.212 5.97798 2.364 6.20521L3.31069 7.47478L3.02772 8.15617L1.47335 8.36573C1.20774 8.40411 1 8.63104 1 8.91401V11.9844C1 12.0596 1.01919 12.154 1.05757 12.2293C1.07524 12.2868 1.11362 12.3444 1.17118 12.381C1.24612 12.4577 1.35973 12.5153 1.47335 12.533L3.04691 12.7602L3.32988 13.4236L2.38319 14.6935C2.19281 14.9012 2.23119 15.2052 2.42004 15.4129L4.58057 17.5719C4.77064 17.7623 5.09229 17.7815 5.30003 17.6295L6.56991 16.6828L7.25251 16.9658L7.47974 18.5394C7.5166 18.8031 7.74505 19.0127 8.02833 19.0127H11.0987C11.364 19.0127 11.6104 18.8031 11.647 18.5394L11.8742 16.9658L12.5571 16.6828L13.8267 17.6295C14.0539 17.8007 14.3561 17.7623 14.5465 17.5719L16.7067 15.4129C16.8955 15.2229 16.9147 14.9204 16.7627 14.6935L15.816 13.4236L16.099 12.7602L17.6726 12.533C17.9382 12.4961 18.1459 12.2676 18.1459 12.0036V8.91401C18.0902 8.6487 17.8806 8.40411 17.615 8.36573Z" fill="" stroke="" stroke-width="0.6"></path>
                        </g>
                        <mask id="" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="7" y="0" width="13" height="13">
                        <path d="M7.19922 1H19V12.8331H7.19922V1Z" fill="" stroke="" stroke-width="0.2"></path>
                        </mask>
                        <g mask="">
                        <path d="M17.7476 3.81791L11.5526 10.0144L9.98058 8.44082L16.1563 2.24587C16.3644 2.03783 16.7256 2.03783 16.9337 2.24587L17.7284 3.0421C17.8435 3.15571 17.8996 3.28852 17.8996 3.43868C17.8996 3.57149 17.8435 3.72348 17.7476 3.81791ZM8.38783 11.6056L9.24162 9.23734L10.7384 10.7341L8.38783 11.6056ZM18.5249 2.26506L17.7284 1.46853C17.103 0.843496 16.0238 0.843496 15.3985 1.46853L8.42621 8.44082C8.37016 8.49839 8.33178 8.57362 8.2934 8.64886L7.27147 11.4536C7.13897 11.8136 7.23309 12.2118 7.4987 12.4963C7.68725 12.6851 7.93367 12.7795 8.19898 12.7795C8.31259 12.7795 8.42621 12.7603 8.53983 12.7235L11.3446 11.7C11.4198 11.6808 11.4966 11.6248 11.5526 11.5672L18.5249 4.59494C18.8286 4.29126 18.9982 3.87548 18.9982 3.43868C18.9982 2.98453 18.8286 2.56722 18.5249 2.26506Z" fill="" stroke="" stroke-width="0.2"></path>
                        </g>
                    </svg>

                      <span class="menu-item">Setup Values</span>
                    </a>
                  </li>
                  <li role="menuitem" class="nav-item  " id="credential-manager">
                    <a class="nav-link" href="/admin/credential-manager">
                      <svg aria-label="Credentials Manager" width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#account-profile-icon"></use>
                    </svg>
                      <span class="menu-item">Credentials Manager</span>
                    </a>
                  </li>
                  <li role="menuitem" class="nav-item " id="change-password">
                    <a class="nav-link" href="/admin/change-password">
                      <svg aria-label="Password Reset"  width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#reset-password-icon"></use>
                      </svg>
                      <span class="menu-item">Password Reset</span>
                    </a>
                  </li>
                </ul>
              </li>
              @endif
              @if(userHasPermission(7,1))
              <li class="nav-item has-sub">
                <a class="d-flex align-items-start" href="#" aria-haspopup="true" aria-expanded="true">
                  <svg class="fill-none" aria-label="Accommodations & Services Setup"  width="21" height="18" viewBox="0 0 21 18" xmlns="http://www.w3.org/2000/svg" stroke-width="0.5">
                    <use xlink:href="/css/admin-menu.svg#accommodations-services-setup-icon"></use>

                  </svg>
                  <span class="menu-item text-wrap">Accommodations & Services Setup</span>
                </a>
                <ul role="menu" class="menu-content " id="Accommodation">
                  <li role="menuitem" class="nav-item  " id="all-accommodation">
                    <a class="nav-link" href="/admin/all-accommodation">
                      <svg class="fill-none" aria-label="All Accommodations"  width="23" height="19" viewBox="0 0 23 19" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#all-accommodations"></use>
                      </svg>
                      <span class="menu-item">All Accommodations</span>
                    </a>
                  </li>
                  <li role="menuitem" class="nav-item" id="create-accommodation">
                    <a class="nav-link" href="/admin/accommodation/create-accommodation">
                      <svg aria-label="Create Accommodations"  width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#create-accommodations"></use>

                      </svg>
                      <span class="menu-item">Create Accommodations</span>
                    </a>
                  </li>
                  <li class="nav-item" id="all-services">
                    <a class="nav-link" href="/admin/accommodation/all-services">
                      <svg aria-label="All Services"  width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#services-icon"></use>
                      </svg>
                      <span class="menu-item">All Services</span>
                    </a>
                  </li>
                  <li class="nav-item" id="create-service">
                    <a class="nav-link" href="/admin/accommodation/create-service">
                      <svg aria-label="Create Services"  width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#create-service"></use>
                      </svg>
                      <span class="menu-item">Create Services</span>
                    </a>
                  </li>
                </ul>
              </li>
              @endif
              @if(userHasPermission(8,1))
              <li role="menuitem" class="nav-item has-sub">
                <a class="d-flex align-items-center" href="#" aria-haspopup="true" aria-expanded="true">
                  <svg aria-label="Specializations"  width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor">
                    <use xlink:href="/css/admin-menu.svg#specialization-icon"></use>
                  </svg>
                  <span class="menu-item">Specializations</span>
                </a>
                <ul role="menu" class="menu-content " id="Specialization">
                  <li role="menuitem" class="nav-item " id="create-specialization">
                    <a class="nav-link" href="/admin/specialization/create-specialization">
                      <svg aria-label="Add Specialization"  width="13" height="19" viewBox="0 0 13 19" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#add-specialization-icon"></use>
                      </svg>
                      <span class="menu-item">Add Specialization</span>
                    </a>
                  </li>
                  <li role="menuitem" class="nav-item  " id="all-specialization">
                    <a class="nav-link" href="/admin/all-specialization">
                      <svg aria-label="Specializations"  width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#specialiazation"></use>
                      </svg>
                      <span class="menu-item">Specializations</span>
                    </a>
                  </li>
                </ul>
              </li>
              @endif
              <li role="menuitem" class="nav-item has-sub">
                <a class="d-flex align-items-center" href="#" aria-haspopup="true" aria-expanded="true">
                  <svg aria-label="Specializations"  width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor" >
                    <use xlink:href="/css/admin-menu.svg#specialization-icon"></use>
                  </svg>
                  <span class="menu-item">Tags</span>
                </a>
                <ul role="menu" class="menu-content " id="Tag">
                  <li role="menuitem" class="nav-item " id="create-tag">
                    <a class="nav-link" href="/admin/tags/create-tags">
                      <svg aria-label="Add Tag"  width="13" height="19" viewBox="0 0 13 19" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#add-specialization-icon"></use>
                      </svg>
                      <span class="menu-item">Add Tag</span>
                    </a>
                  </li>
                  <li role="menuitem" class="nav-item  " id="all-tag">
                    <a class="nav-link" href="/admin/all-tags">
                      <svg aria-label="Tags"  width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#specialiazation"></use>
                      </svg>
                      <span class="menu-item">Tags</span>
                    </a>
                  </li>
                </ul>
              </li>
              @if(userHasPermission(9,1))
              <li role="menuitem" class="nav-item has-sub">
                <a class="d-flex align-items-center" href="#" aria-haspopup="true" aria-expanded="true">
                  <svg aria-label="Industries"  width="20" height="19" viewBox="0 0 20 19" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#industries-icon"></use>
                  </svg>
                  <span class="menu-item">Industries</span>
                </a>
                <ul role="menu" class="menu-content " id="Industry">
                  @if(userHasPermission(9,2))
                  <li role="menuitem" class="nav-item " id="create-industry">
                    <a class="nav-link" href="/admin/industry/create-industry">
                      <svg aria-label="Add Industry"  width="16" height="19" viewBox="0 0 16 19" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#add-industries"></use>
                      </svg>
                      <span class="menu-item">Add Industry</span>
                    </a>
                  </li>
                  @endif
                  <li role="menuitem" class="nav-item  " id="all-industry">
                    <a class="nav-link" href="/admin/all-industry">
                      <svg aria-label="Industries"  width="20" height="19" viewBox="0 0 20 19" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#industries"></use>
                      </svg>
                      <span class="menu-item">Industries</span>
                    </a>
                  </li>
                </ul>
              </li>
              @endif
              @if(userHasPermission(10,1))
              <li role="menuitem" class="nav-item has-sub">
                <a class="d-flex align-items-center" href="#" aria-haspopup="true" aria-expanded="true">
                  <svg aria-label="Saved Forms"  width="21" height="19" viewBox="0 0 21 19" xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="currentColor" stroke-width="0.2" >
                    <use xlink:href="/css/admin-menu.svg#saved-forms-icon"></use>
                  </svg>
                  <span class="menu-item">Saved Forms</span>
                </a>
                <ul role="menu" class="menu-content " id="CustomizeForm">
                  <li role="menuitem" class="nav-item " id="create-form">
                    <a class="nav-link" href="/admin/customize-form/create-form">
                      <svg aria-label="Add Customized Form"  width="18" height="20" viewBox="0 0 18 20" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#add-form-icon"></use>
                      </svg>
                      <span class="menu-item">Add Customized Form</span>
                    </a>
                  </li>
                  <li role="menuitem" class="nav-item  " id="customize-form">
                    <a class="nav-link" href="/admin/customize-form">
                      <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#saved-form"></use>
                        </svg>

                      <span class="menu-item">Saved Forms</span>
                    </a>
                  </li>
                </ul>
              </li>
              {{--
              @endif
              @if(userHasPermission(11,1))
              <li role="menuitem" class="nav-item has-sub">
                <a class="d-flex align-items-center" href="#" aria-haspopup="true" aria-expanded="true">
                  <svg aria-label="Coupons & Referrals Setup"  width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#coupon-reffrerals-icon"></use>
                </svg>
                  <span class="menu-item">Coupons & Referrals Setup
                </a>
                </span>
                <ul role="menu" class="menu-content " id="Coupon">
                  <li role="menuitem" class="nav-item" id="all-coupon">
                    <a class="nav-link" href="/admin/all-coupon">
                      <svg aria-label="Coupons"  width="24" height="16" viewBox="0 0 24 16" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#coupons-icon"></use>
                    </svg>
                      <span class="menu-item">Coupons
                    </a>
                    </span>
                  </li>
                  <li role="menuitem" class="nav-item" id="referral-setting">
                    <a class="nav-link" href="/admin/referral-setting">
                      <svg aria-label="Referral Settings"  width="19" height="19" viewBox="0 0 19 19" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#refferrals-setting-icon"></use>
                      </svg>
                      <span class="menu-item">Referral Settings</span>
                    </a>
                  </li>
                </ul>
              </li>
              @endif
              @if(userHasPermission(12,1))
              <li role="menuitem" class="nav-item has-sub">
                <a class="d-flex align-items-center" href="#" aria-haspopup="true" aria-expanded="true">
                  <svg aria-label="Platform Integrations"  width="21" height="21" viewBox="0 0 21 21" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#plateform-integration-icon"></use>
                  </svg>
                  <span class="menu-item">Platform Integrations</span>
                </a>
                <ul role="menu" class="list-unstyled flex-column quickbooks collapse " id="thirdParty">
                  <li role="menuitem" class="nav-item has-sub">
                    <a class="d-flex align-items-center" href="#">
                      <svg aria-label="Quickbooks"  width="21" height="21" viewBox="0 0 21 21" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#quick-book-icon"></use>
                    </svg>
                      <span class="menu-item">Quickbooks</span>
                    </a>
                    <ul role="menu" class="list-unstyled quickbooksInner flex-column collapse " id="quickbook">
                      <li role="menuitem" class=" nav-item" id="quickbook-setup">
                        <a class="nav-link nav-links-padding" href="/admin/quickbook-setup">
                          <svg aria-label="Add Setup"  width="21" height="21" viewBox="0 0 21 21" xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="/css/admin-menu.svg#add-setup-icon"></use>
                        </svg>
                          <span class="menu-item">Add Setup</span>
                        </a>
                      </li>
                      <li role="menuitem" class=" nav-item" id="quickbook-connect">
                        <a class="nav-link nav-links-padding" href="/admin/quickbook-connect">
                          <svg aria-label="Quickbooks"  width="20" height="18" viewBox="0 0 20 18">
                            <use xlink:href="/css/admin-menu.svg#quickbooks"></use>
                          </svg>
                          <span class="menu-item">Quickbooks</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li role="menuitem" class="nav-item" id="stripe-setup">
                    <a class="nav-link" href="/admin/stripe-setup">
                      <svg aria-label="Stripe Setup"  width="18" height="25" viewBox="0 0 18 25" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#stripe-setup"></use>
                    </svg>
                      <span class="menu-item">Stripe Setup</span>
                    </a>
                  </li>

                </ul>
              </li>
              --}}
              @endif
              @if(userHasPermission(13,1))
              <li role="menuitem" class="nav-item has-sub">
                <a class="d-flex align-items-center" href="#" aria-haspopup="true" aria-expanded="true">
                  <svg class="fill-none" aria-label="Admin Staff"  width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#admin-staff-icon"></use>
                </svg>
                  <span class="menu-item">Admin Staff</span>
                </a>
                <ul role="menu" class="menu-content " id="Admin-Staff">
                  <li role="menuitem" class="nav-item" id="role-permission">
                    <a class="nav-link" href="/admin/role-permission">
                      <svg aria-label="Roles And Permissions"  width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#roles-permission-icon"></use>
                    </svg>
                      <span class="menu-item">Roles &amp; Permissions</span>
                    </a>
                  </li>
                  <li role="menuitem" class="nav-item " id="create-admin-team">
                    <a class="nav-link" href="/admin/admin-team/create-admin-team">
                      <svg aria-label="Add Admin Teams"  width="29" height="20" viewBox="0 0 29 20" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#admin-teams-icon"></use>
                    </svg>
                      <span class="menu-item">Add Admin Teams</span>
                    </a>
                  </li>
                  <li role="menuitem" class="nav-item " id="admin-team">
                    <a class="nav-link" href="/admin/admin-team">
                      <svg aria-label="List Admin Teams"  width="25" height="20" viewBox="0 0 25 20" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#list-admin-teams"></use>
                      </svg>
                      <span class="menu-item">List Admin Teams</span>
                    </a>
                  </li>
                  <li role="menuitem" class="nav-item " id="create-staff">
                    <a class="nav-link" href="/admin/admin-staff/create-staff">
                      <svg class="fill-none" aria-label="Add Admin Staff"  width="19" height="20" viewBox="0 0 19 20" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#add-admin-staff"></use>
                    </svg>
                      <span class="menu-item">Add Admin Staff</span>
                    </a>
                  </li>
                  <li role="menuitem" class="nav-item" id="admin-staff">
                    <a class="nav-link" href="/admin/admin-staff">
                      <svg aria-label="Active Admin-Staff"  width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#all-admin-staff"></use>
                      </svg>
                      <span class="menu-item">Active Admin-Staff</span>
                    </a>
                  </li>
                  <li role="menuitem" class="nav-item" id="deactivated-admin-staff">
                    <a class="nav-link" href="/admin/deactivated-admin-staff">
                      <svg class="fill-none" aria-label="Deactivated Admin-Staff"  width="20" height="21" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/admin-menu.svg#deactivated-icon"></use>
                    </svg>
                      <span class="menu-item">Deactivated Admin-Staff</span>
                    </a>
                  </li>
                </ul>
              </li>
              @endif
              @if(userHasPermission(14,1))
              <li role="menuitem" class="nav-item" id="jira-status">
                <a class="nav-link" href="/admin/jira-status">
                  <svg aria-label="Support Tickets"  width="23" height="21" viewBox="0 0 23 21" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/admin-menu.svg#support-tickets-icon"></use>
                  </svg>
                  <span class="menu-item">Support Tickets</span>
                </a>
              </li>
              @endif
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->
