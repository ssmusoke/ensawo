@component('mail::message')
# Contact from the Website

From: {{ $names }}<br>
Email: {{ $email }}<br>
Title: {{ $title }}<br>
@component('mail::panel')
{{ $message }}
@endcomponent
@endcomponent