@component('mail::message')
# Hi, Admin Rumah Pustaka

Ada kritik dan saran dari <b>{{ config('app.name') }}</b>.

@component('mail::table')
| <!-- -->    | <!-- -->    |
|-------------|-------------|
| <b>Nama</b>         | {{ $userName }}         |
| <b>Email</b>        | {{ $userReplyTo }}        |
| <b>Subjek</b>     | {{ $subject }}         |
| <b>Pesan</b>     | {{ $message }}  
@endcomponent
@endcomponent