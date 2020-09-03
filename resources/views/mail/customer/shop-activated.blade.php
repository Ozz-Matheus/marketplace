@component('mail::message')
# Felicidades

Tu tienda ahora está activa

@component('mail::button', ['url' => route('shops.show', $shop->id)])
Visite su tienda
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent