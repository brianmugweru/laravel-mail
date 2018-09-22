@component('mail::message')
# Introduction

The body of your message. {{ $invoice->user->email }}

@component('mail::button', ['url' => $url ])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
