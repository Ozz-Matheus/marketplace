@component('mail::message')
# Solicitud para activar una tienda

Active la tienda. Aquí están los detalles de la tienda.

Nombre de tienda : {{$shop->name}}.

Dueño de la tienda : {{$shop->owner->name}}.

@component('mail::button', ['url' => url('/admin/shops')])
Administrar tiendas
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
