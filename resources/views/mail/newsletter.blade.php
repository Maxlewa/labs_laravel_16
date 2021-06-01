{{-- Blade que laravel fourni avec style par défaut --}}
@component('mail::message')
# Introduction

{{-- The body of your message. --}}
Vous êtes bel et bien inscrit à la Newsletter de Labs !

Votre e-mail : {{$mail->email}}

{{-- @component('mail::button', ['url' => ''])
Dis wlh
@endcomponent --}}

A bientôt,<br>
{{ config('app.name') }}
@endcomponent
