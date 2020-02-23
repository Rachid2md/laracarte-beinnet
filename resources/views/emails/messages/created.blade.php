@component('mail::message')
# Salut {{ $name }}



@component('mail::panel')
- {{ $name }}
- {{ $email }}
{{ $msg }}
@endcomponent

<?php
$url='http://beinnetcorporation.com';
?>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
