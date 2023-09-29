<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <title><?php env('SITE_TITLE'); ?></title>
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
                        <!-- <tr>
                      </tr> -->
                        <tr>
                            <td style="background:#fbfbfb;" width="20" bgcolor="#3A3F51"><br></td>
                            <td width="480">
                                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                    <tr>
                                        <td style="background:#fff;text-align:center;padding:15px;">
                                            <img src="{{ Helper::getAdminLogo() }}" style="height:110px; width:auto;" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#fbfbfb;" height="20" bgcolor="#3A3F51"><br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @php
                                               // $company = Helper::getAdmin();
                                             //   $company = isset($company->users_business)?$company->users_business->company_name:'';
                                             $company="Eclipse Scheduling";
                                            @endphp
                                            <table style="" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                <tbody>
                                                <!-- <tr style="background-color: #541f25;color: white;height:47px;">
                                                <td style="color:#FFFFFF;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:25px;font-weight:bold;line-height:28px;margin:0;padding:0 24px 0 25px;" align="center">Forgot Your Password</td>
                                              </tr> -->
                                                <tr>
                                                    <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:normal;margin:0;padding:15px 15px 15px 15px;color:#000000;"><strong>Hello {!!$data->first_name!!},</strong></td>
                                                </tr>
                                                <tr>
                                                    <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:normal;margin:0;padding:15px 30px 25px 25px;color:#000000;">You've requested to reset the password for your Eclipse scheduling portal.</td>
                                                </tr>
                                                <tr>
                                                    <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:normal;margin:0;padding:15px 30px 25px 25px;color:#000000;">Email: {!!$data->email!!}</td>
                                                </tr>
                                                <tr>
                                                    <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:normal;margin:0;padding:15px 30px 25px 25px;color:#000000;">**Warning: Do not share this link with anyone. Report any suspicious account activity to {{$company}}'s immediately.**</td>
                                                </tr>
                                                <tr>
                                                    <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:4px;margin:0;padding:0 30px 25px 25px;color:#000000;">
                                                        <a style="font-family:'-apple-system', BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';color:#fff;text-decoration:none;background-color:#0a1e46;border-bottom:8px solid #0a1e46;border-left:18px solid #0a1e46;border-right:18px solid #0a1e46;border-top:8px solid #0a1e46;" href="{{ str_replace('https://' , '' , URL::to('/reset-password/' . $token)) }}">Reset Password</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:4px;margin:0;padding:0 30px 25px 25px;color:#000000;">
                                                        <span style="line-height: 4px;">Or copy and paste the URL into your browser:</span><br><br><br><br>
                                                        <span style="line-height: 16px;font-size: 14px;">{!!  url('/reset-forgot-password/' . $data->remember_token) !!}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:normal;margin:0;padding:15px 30px 25px 25px;color:#000000;">To enter the portal, reset your password using the link above and log into your Eclipse account.</td>
                                                </tr>
                                                <tr>
                                                    @if($data->roles()->first()->name == 'admin')
                                                        <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:4px;margin:0;padding:0 30px 25px 25px;color:#000000;">
                                                            <a href="{!! str_replace('https://' , '' , url('')) !!}">{!! url('') !!}</a>
                                                        </td>
                                                    @else
                                                        <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:normal;margin:0;padding:15px 30px 25px 25px;color:#000000;">Question? Just reply to this email.</td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td height="30"><br></td>
                                                </tr>
                                                <!-- <tr>
                                                <td style="color:#000000;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:16px;font-weight:300;line-height:normal;margin:0;padding:0 30px 15px 25px;">
                                                If you did not request a password reset, no further action is required.
                                              </td>
                                            </tr> -->
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
                                                <tr>
                                                    <td style="background:#fbfbfb;color:#000;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:12px;line-height:20px;margin:0;padding:0 6px 0 6px;text-align:center" valign="middle" align="center"></td>
                                                </tr>
                                                <tr><td style="background:#fbfbfb;" height="19" bgcolor="#3A3F51"><br></td></tr>
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
