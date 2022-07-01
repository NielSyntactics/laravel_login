
@component('mail::message')
Hello **{{$name}}**,  {{-- use double space for line break --}}

{{$body}}
@component('mail::button', ['url' => $link])
Go to your inbox
@endcomponent
Sincerely,
Mailtrap team.
@endcomponent
