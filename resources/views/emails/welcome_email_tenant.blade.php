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
                        @php
                        $company = $data->company;
//                        $company = isset($company->users_business)?$company->users_business->company_name:'';


                          $desc2 = "To enter the portal, log into your Eclipse account.";
                          $desc3 = "Congratulations! You've successfully signed up for Eclipse! Your customer URL is: ".$data->domain ;
                          $desc = "You've received access to ".$company."'s Eclipse scheduling portal. After a few seconds, you can use the following admin credentials.";
                          $desc1 = "For reference, here's your login information:";

                        @endphp
                        <td>
                          <table style="" width="100%" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                              <!-- <tr style="background-color: #541f25;color: white;height:47px;">
                              <td style="color:#FFFFFF;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:25px;font-weight:bold;line-height:28px;margin:0;padding:0 24px 0 25px;" align="center">New User Registration</td>
                            </tr> -->
                            <tr>
                              <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:normal;margin:0;padding:15px 15px 15px 15px;color:#000000;"><strong>Hello {{$data->first_name}},</strong></td>
                            </tr>
                            <tr>
                              <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:normal;margin:0;padding:15px 15px 15px 15px;color:#000000;">{{$desc3}}</td>
                            </tr>
                              <tr>
                              <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:normal;margin:0;padding:15px 15px 15px 15px;color:#000000;">{{$desc}}</td>
                            </tr>
                              <tr>
                                  <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:4px;margin:0;padding:15px 15px 15px 15px;color:#000000;">
                                      <a style="font-family:'-apple-system', BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';color:#fff;text-decoration:none;background-color:#0a1e46;border-bottom:8px solid #0a1e46;border-left:18px solid #0a1e46;border-right:18px solid #0a1e46;border-top:8px solid #0a1e46;" href="{{ $data->domain }}">Log in</a>
                                  </td>
                              </tr>
                              <tr>
                                  <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:normal;margin:0;padding:15px 15px 15px 15px;color:#000000;">{{$desc1}}</td>
                              </tr>
                            <tr style="background: #d3d3d338;">
                              <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:4px;margin:0;padding:15px 15px 15px 15px;color:#000000;">
                                <strong>Email :</strong> {{ $data->email }}
                              </td>
                            </tr>
                              <tr style="background: #d3d3d338;">
                              <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:4px;margin:0;padding:15px 15px 15px 15px;color:#000000;">
                                <strong>Password :</strong> {{ $data->password }}
                              </td>
                            </tr>
                              <tr>
                                  <td height="10" style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:bold;line-height:4px;margin:0;padding:15px 15px 15px 15px;color:#000000;">or<br></td>
                              </tr>
                              <tr>
                                  <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;margin:0;padding:0px 15px 15px 15px;color:#000000;">
                                      If above button doesn't work, please click on this link.
                                  </td>
                              </tr>
                              <tr>
                                  <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;margin:0;padding:15px 15px 15px 15px;color:#000000;">

                                      <a href="{{ $data->domain }}">{{ 'https://' . $data->domain }}</a>
                                  </td>
                              </tr>
                            <tr>
                              <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:normal;margin:0;padding:15px 15px 15px 15px;color:#000000;">**Warning: Do not share these credentials with anyone. Report any suspicious account activity to {{$company}}'s immediately.** </td>
                            </tr>
                            <tr>
                              <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:normal;margin:0;padding:15px 15px 15px 15px;color:#000000;">{{$desc2}}</td>
                            </tr>
                            <tr>
                              <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:4px;margin:0;padding:15px 15px 15px 15px;color:#000000;">
                                  <strong>Web Link :</strong> <a href="{{$data->domain}}">{{ 'https://' . $data->domain }}</a>
                              </td>
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
                        <tr>
                          <td style="background:#fbfbfb;color:#000;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:12px;line-height:20px;margin:0;padding:0 6px 0 6px;text-align:center" valign="middle" align="center">Need Help? Email us at <a href="mailto:{!! "info@eclipsescheduling.com" !!}">{!! "info@eclipsescheduling.com"; !!}</a></td>
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
