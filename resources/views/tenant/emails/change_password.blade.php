@extends('layouts.email')

@section('content')
	<tr>
		<td>
			@php
				$company = getAdmin();
				$company = isset($company->users_business)?$company->users_business->company_name:''; 
			@endphp
			<table style="" width="100%" cellspacing="0" cellpadding="0" border="0">
				<tbody>
					<!-- <tr style="background-color: #541f25;color: white;height:47px;">
						<td style="color:#FFFFFF;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:25px;font-weight:bold;line-height:28px;margin:0;padding:0 24px 0 25px;" align="center">Forgot Your Password</td>
					</tr> -->
					<tr>
						<td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:normal;margin:0;padding:15px 15px 15px 15px;color:#000000;">
							<strong>
								Hello {!! $data['data']->first_name !!},
							</strong>
						</td>
					</tr>
					<tr>
						<td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:normal;margin:0;padding:15px 30px 25px 25px;color:#000000;">
							Your password for your Eclipse Scheduling Portal has been changed.
						</td>
					</tr>
					<tr>
						<td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:normal;margin:0;padding:15px 30px 25px 25px;color:#000000;">
							Email: {!! $data['data']->email !!}
						</td>
					</tr>
					<tr>
						<td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:normal;margin:0;padding:15px 30px 25px 25px;color:#000000;">
							** Report any suspicious account activity to {{$company}}'s immediately.**
						</td>
					</tr>
					<tr>
						@if($data['data']->roles->contains('name', 'admin'))
						<td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:4px;margin:0;padding:0 30px 25px 25px;color:#000000;">
							<a href="{!! str_replace('https://' , '' , url('')) !!}">
								{!! url('') !!}
							</a>
						</td>
						@else
						<td style="color:#757575;font-family:&quot;Roboto&quot;,OpenSans,&quot;OpenSans&quot;,Arial,sans-serif;font-size:15px;font-weight:300;line-height:normal;margin:0;padding:15px 30px 25px 25px;color:#000000;">
							Question? Just reply to this email.
						</td>
						@endif
					</tr>
					<tr>
						<td height="30">
							<br>
						</td>
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
@endsection