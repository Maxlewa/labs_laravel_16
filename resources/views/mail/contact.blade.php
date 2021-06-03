{{-- Blade que laravel fourni avec style par défaut --}}
@component('mail::message')
# Introduction

{{-- The body of your message. --}}
Nouveau message de {{ $mail->name }}, {{ $mail->mail }}

<div class="flex-column">
    <div>
        {{ $mail->message }}
    </div>
    <br>
</div>

{{-- 
@component('mail::button', ['url' => '/'])
Revenir au site
@endcomponent --}}

A bientôt,<br>
{{ config('app.name') }}
@endcomponent
