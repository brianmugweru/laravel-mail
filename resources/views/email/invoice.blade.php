@component('mail::message')
# Hello {{ $invoice->user->name }}

One of your products has been processed and here lies your invoice

@component('mail::button', ['url' => $url ])
View Invoice
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
