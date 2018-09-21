@component('mail::message')
# Hola {{$user->name}}

Hola, esta es la noticia del día.

@component('mail::button', ['url' => route('home')])
Presioname
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
