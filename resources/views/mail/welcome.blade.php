{{-- Blade que laravel fourni avec style par défaut --}}
@component('mail::message')
# Introduction

{{-- The body of your message. --}}
Bienvenue dans l'équipe de Labs !

Votre e-mail : {{$mail->email}}

Votre compte devait être validé par le webmaster d'ici peu.

{{-- @component('mail::button', ['url' => '/xy'])
Se connecter au site
@endcomponent --}}

A bientôt,<br>
{{ config('app.name') }}
@endcomponent
