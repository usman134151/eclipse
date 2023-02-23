<table style="background:#ffffff;max-width:100%" width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center">
    <tbody>
        <tr>
            <td style="background:#fbfbfb;" width="20" bgcolor="#3A3F51"><br></td>
            <td width="480">
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td style="background:#fff;text-align:center;padding:15px;">
                                <img src="{!! asset('images/inc-logo.png') !!}" style="width:150px; height:auto;" />
                            </td>
                        </tr>
                        <tr>
                            <td style="background:#fbfbfb;" height="20" bgcolor="#3A3F51"><br></td>
                        </tr>
                        <tr>
                            <td>
                                <table style="" width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                        <tr style="background-color: #0a1e46;color: white;height:47px;">
                                            <td style="color:#FFFFFF;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:25px;font-weight:bold;line-height:28px;margin:0;padding:0 24px 0 25px;" align="center">
                                                {{$templateName}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:normal;margin:0;padding:15px 15px 15px 15px;color:#000000;"><strong>Hello, {{$user}}</strong>
                                            <p>You have an invitation for assignment.</p>
                                                <p>Please log in to your ICS account to check the assignment  details.</p>

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
                                            <td style="background:#fbfbfb;color:#000;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:12px;line-height:20px;margin:0;padding:0 6px 0 6px;text-align:center" valign="middle" align="center">Need Help? Email us at <a href="mailto:{!! Helper::getAdmin()->email; !!}">{!! Helper::getAdmin()->email; !!}</a></td>
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
