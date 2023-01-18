<table style="background:#ffffff;max-width:100%" width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center">
  <tbody>
    <tr>
      <td style="background:#fbfbfb;" width="20" bgcolor="#3A3F51"><br></td>
      <td width="480">
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
          <tbody>
            <tr>
              <td style="background:#fff;text-align:center;padding:15px;">
              </td>
            </tr>
            <tr>
              <td style="background:#fbfbfb;" height="20" bgcolor="#3A3F51"><br></td>
            </tr>
            <tr>
              <td>
                <table style="" width="100%" cellspacing="0" cellpadding="0" border="0">
                  <tbody>
                <tr>
                  <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:normal;margin:0;padding:15px 15px 15px 15px;color:#000000;"><strong>Hello {{ucfirst($data['user'])}},</strong>
                    <p>You've requested a One-time Passcode (OTP) to log into your Eclipse scheduling portal. This OTP will expire in 15-minutes.</p>
                    <p><b>{{$data['otp']}}</b></p>
                    <p>**Warning: Do not share this OTP with anyone. Report any suspicious account activity to {{$data['email']}}'s immediately.**</p>
                    <p>To access your's portal, enter the above OTP in the log-in prompt that follows your password submission.</p>
                    <p><strong>Web Link :</strong> <a href="{!! url('/otpverify') !!}">{!! url('/otpverify') !!}</a></p>
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
                  <td style="background:#fbfbfb;color:#000;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:12px;line-height:20px;margin:0;padding:0 6px 0 6px;text-align:center" valign="middle" align="center">Need Help? Email us at </td>
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
