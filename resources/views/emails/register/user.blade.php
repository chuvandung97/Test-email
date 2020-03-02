@component('mail::message')

Xin chào {{$name}}.<br>
{{$actionText1}} "{{ $actionButton }}" {{$actionText2}}

@component('mail::button', ['url' => " "])
{{ $actionButton }}
@endcomponent

Cảm ơn,<br>
{{ config('app.name') }}

@component('mail::subcopy')
If you’re having trouble clicking the "{{ $actionButton }}" button, copy and paste the URL below
into your web browser: [{{ " " }}]({{ " " }})
@endcomponent
@endcomponent

