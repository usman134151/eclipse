@extends('layouts.email')

@section('content')
  <tr>
    @php
    $company = $data->company;
    // $company = isset($company->users_business)?$company->users_business->company_name:'';


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
@endsection