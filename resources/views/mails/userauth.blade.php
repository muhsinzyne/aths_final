@component('mail::message')
Dear **{{$name}}**

<div style="text-align:center;">
    <div>Tap <b>Start</b> to login<br> before {{$validity}}</div>

@component('mail::button', ['url' => $link])
Start
@endcomponent

<div>Or enter the following OTP</div>
    <br />
    <div style="font-size: 30pt; letter-spacing: 30px; margin-left: 30px;">{{$otp}}</div>
</div>

@endcomponent
