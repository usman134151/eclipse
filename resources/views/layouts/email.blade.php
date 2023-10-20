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
                        <div style="height:110px; width:auto;">
                        <a class="navbar-brand" href="{{url('/')}}" aria-label="Eclipse Scheduling Brand Logo">
                                          <span class="brand-logo">
                                            @if($data['company_logo']!=null)
                                              <img height="100" width="100" src="{{$data['company_logo']}}" alt="">
                                            @else
                                            <img src="{{ url('/tenant-resources/images/logo.png') }}" style="height:118px; width:auto" />
                                            @endif
                                          </span>
                                        </a>
                        </div>
                        </td>
                      </tr>
                      <tr>
                        <td style="background:#fbfbfb;" height="20" bgcolor="#3A3F51"><br></td>
                      </tr>
                      @yield('content')
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
