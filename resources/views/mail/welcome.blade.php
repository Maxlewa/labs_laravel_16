{{-- Blade que laravel fourni avec style par défaut --}}
@component('mail::message')
# Introduction

{{-- The body of your message. --}}
Bienvenue dans l'équipe de Labs !

Votre e-mail : {{$mail->email}}

{{-- 
@component('mail::button', ['url' => '/'])
Revenir au site
@endcomponent --}}

A bientôt,<br>
{{ config('app.name') }}
@endcomponent
