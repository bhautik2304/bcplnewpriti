@component('mail::message')
<center><strong>{{$data['subject']}} Contact Us </strong></center>

Hello {{$data['department_user_name']}} This Mail From {{ config('app.name') }} Bot.

Costomer Name {{$data['name']}}

<b>mobail</b>:<a href="tel:{{$data['mobail']}}">{{$data['mobail']}}</a><br>
<b>email</b>:<a href="mailto:{{$data['email']}}">{{$data['email']}}</a><br>

<b>User Message</b>: {{$data['msg']}}

@php
    $btn=$data['email'];
@endphp
@component('mail::button', ['url' => "mailto:".$btn])
Mail To user
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
