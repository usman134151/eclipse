<?php
use app\Models\Tenant\User;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
     <meta property="og:title" content="*|MC:SUBJECT|*" />
        <title><?php env('SITE_TITLE'); ?></title>
    <style type="text/css" data-hse-inline-css="true">


        body{
            background: #f6f7fb !important;
            font-family: 'Poppins', sans-serif !important;
            color: #000 !important;
            font-size: 15px !important;
            text-align: -webkit-center;
            text-align: -moz-center;
            text-align: center;
           }
        .main-container{
            height: 100%;
            width: 100%;
            margin: 0 auto;

        }
        .inner-wrapper{
            width:auto;
            max-width: 600px;
            display: inline-block;
            border: 1px solid rgba(0,0,0,0.1);
            padding: 20px;border-bottom: 2px solid #71bce4;
        }
        .header{
            padding: 0 0 20px;
              text-align:center;
            /* border-bottom: #1b81b8 solid 2px; */
        }
        .content{
            color: #444;
            text-align: center;
            }
        .btn.btn-primary{
            color: #fff;
            background-color: #0a1e46;
            border-color: #0a1e46;
        }
        .btn.btn-success{
            color: #fff;
            background-color: #56bd5b;
            border-color: #56bd5b;
        }
        .btn.btn-danger{
            color: #fff;
            background-color: #cb041b;
            border-color: #cb041b;
        }
        .footer{
            text-align:center;
        }
         .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;cursor: pointer;
            border-radius: 1.25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            margin-top: 20px;
            margin-bottom: 10px;
            text-decoration: none;
        }
        .content div{
            background: #e6e6e6;
            padding: 1em 0 ;
        }
        .content p{
            padding: 0 5em;
            text-align: left;
        }
        .content h2 {
            padding: 20px;
            background: #75bfe6;
            color: #fff;
            margin-top: 0;
            text-align: center;
        }
        .ml-5{
          margin-left: 5px;
        }
        .Star_Rating{margin: 10px 0;}
        .Star_Rating .checked, .Star_Rating .fa-star-o:before {
    color: orange;
}
.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
}
.fa-star:before {
    content: "\f005";
}
a.btn.btn-primary.pull-right {
  width: fit-content;
    float: left;
    margin-left: 32%;
}
    </style>
  </head>
  <body text="#000000" bgcolor="#FFFFFF">
    <div>
      <br>
      <div dir="ltr">

        <div>
          <br>
          <div style="padding:0;margin:0">
            <center>
              

              <table style="background:#ffffff;max-width:100%" width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center">
                <tbody>
                  <tr>
                    <td style="background:#fbfbfb;" width="20" bgcolor="#3A3F51"><br></td>
                    <td width="480">
                      <table width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                          <tr>
                            <td style="background:#fff;text-align:center;padding:15px;">
                                <img src="" style="height:110px; width:auto;" />
                            </td>
                          </tr>
                          {{-- <tr>
                            <td style="background:#fbfbfb;" height="20" bgcolor="#3A3F51"><br></td>
                          </tr> --}}
                          <tr >
                              <td style="padding:0 24px 0 25px;" height="100" width="100" align="center">
                                        <a class="navbar-brand" href="/admin/dashboard" aria-label="Eclipse Scheduling Brand Logo">
                                          <span class="brand-logo">
                                            @if($data['company_logo']!=null)
                                              <img height="100" width="100" src="{{url($data['company_logo'])}}" alt="">
                                            @else
                                            <svg aria-label="Eclipse Scheduling Logo" height="50" viewBox="0 0 49 50" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                            @endif
                                          </span>
                                        </a>
                                </td>
                          </tr>
                          <tr>
                            <td>

                              <table style="" width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                  <tr style="background-color: #0a1e46;color: white;height:47px;">
                                    <td style="color:#FFFFFF;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:25px;font-weight:bold;line-height:28px;margin:0;padding:0 24px 0 25px;" align="center">
                                    {{$data['templateName'] ?? 'New Email'}}</td>
                                  </tr>
                                  <tr>
                                    <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:normal;margin:0;padding:15px 15px 15px 15px;color:#000000;">
                                    <?php
                                    $admin			= $data['admin'];

                                    if(!empty($data['templateBody'])){
                                      ?>
                                         {!! $data['templateBody'] !!}

                                                                        <?php }else{ ?>
                                      <strong>This is Default Template for email</strong></td>
                                    <?php } ?>
                                  </tr>
                                  <tr>
                                    <td height="30"><br></td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                  <tr>
                                    <td style="background:#fbfbfb;" height="19" bgcolor="#3A3F51"><br></td>
                                  </tr>
                                  @if(isset($admin->users_business->company_name))
                                  <tr style="background-color: #0a1e46;color: white;height:20px;">
                                    <td style="color:#FFFFFF;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:12px;font-weight:bold;line-height:20px;margin:0;padding:0 24px 0 25px;" align="center">
                                    {{$admin->users_business->company_name}}
                                    </td>
                                  </tr>
                                  @endif
                                  @if($admin->userdetail->address_line1)
                                  <tr style="background-color: #0a1e46;color: white;height:20px;">
                                    <td style="color:#FFFFFF;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:12px;font-weight:bold;line-height:20px;margin:0;padding:0 24px 0 25px;" align="center">
                                    {{$admin->userdetail->address_line1}}
                                    </td>
                                  </tr>
                                  @endif
                                  @if($admin->email)
                                  <tr style="background-color: #0a1e46;color: white;height:20px;">
                                    <td style="color:#FFFFFF;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:12px;font-weight:bold;line-height:20px;margin:0;padding:0 24px 0 25px;" align="center">
                                    {{$admin->email}}
                                    </td>
                                  </tr>
                                  @endif
                                  @if($admin->userdetail->phone)
                                  <tr style="background-color: #0a1e46;color: white;height:20px;">
                                    <td style="color:#FFFFFF;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:12px;font-weight:bold;line-height:20px;margin:0;padding:0 24px 0 25px;" align="center">
                                    {{$admin->userdetail->phone}}
                                    </td>
                                  </tr>
                                  @endif
                                  @if(isset($admin->users_business->company_website))
                                  <tr style="background-color: #0a1e46;color: white;height:20px;">
                                    <td style="color:#FFFFFF;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:12px;font-weight:bold;line-height:20px;margin:0;padding:0 24px 0 25px;" align="center">
                                    {{$admin->users_business->company_website}}
                                    </td>
                                  </tr>
                                  @endif
                                  <tr>
                                    <td style="background:#fbfbfb;color:#000;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:12px;line-height:20px;margin:0;padding:0 6px 0 6px;text-align:center" valign="middle" align="center">Need Help? Email us at <a href="mailto:{!! getAdmin()->email; !!}">{!! getAdmin()->email; !!}</a></td>
                                  </tr>
                                  <tr>
                                    <td style="background:#fbfbfb;" height="19" bgcolor="#3A3F51"><br></td>
                                  </tr>
                                  <tr>
                                    <td style="background:#fbfbfb;color:#000;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:12px;line-height:20px;margin:0;padding:0 6px 0 6px;text-align:center" valign="middle" align="center">Copyright © {!! date('Y') !!} - {!! env('SITE_NAME') !!}
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td style="background:#fbfbfb;" height="18" bgcolor="#3A3F51"><br></td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                    <td style="background:#fbfbfb;" width="20" bgcolor="#3A3F51"><br></td>
                  </tr>
                </tbody>
              </table>
              <div style="display:none;white-space:nowrap;font:15px courier;line-height:0"> </div>
            </center>
          </div>
        </div>
        <br>
      </div>
    </div>
  </body>
</html>
<?php


// die('here');
?>
