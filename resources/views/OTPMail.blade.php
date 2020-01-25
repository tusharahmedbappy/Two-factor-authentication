@component('mail::message')
# Introduction

This is your OTP {{$OTP}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
