@extends('layouts.seller')
@section('content')
<h3>Resumen de la orden</h3>
<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
        <tr>
            <td scope="row">
                {{$item->name}}
            </td>
            <td>
                {{$item->pivot->quantity}}
            </td>
            <td>
                {{$item->pivot->price}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
