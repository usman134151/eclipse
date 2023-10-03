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
                                              <img height="100" width="100" src="{{$data['company_logo']}}" alt="">
                                            @else
                                            <img src="{{ url('/tenant-resources/images/logo.png') }}" style="height:118px; width:auto" />
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
