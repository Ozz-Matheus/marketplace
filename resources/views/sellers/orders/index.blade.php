@extends('layouts.seller')
@section('content')
    <h4>Ordenes</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Número de orden</th>
                <th>Estado</th>
                <th>Recuento de elementos</th>
                <th>Dirección de Envío</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $subOrder)
                <tr>
                    <td scope="row">
                        {{$subOrder->order->order_number}}
                    </td>
                    <td>
                        {{$subOrder->status}}
                        @if($subOrder->status != 'completed')
                            <a href=" {{route('seller.order.delivered', $subOrder)}} " class="btn btn-primary btn-sm">Marcar como entregado</button>
                        @endif
                    </td>
                    <td>
                        {{$subOrder->item_count}}
                    </td>
                    <td>
                       {!! $subOrder->order->shipping_address !!}
                    </td>
                    <td>
                        <a name="" id="" class="btn btn-primary btn-sm" href="{{route('seller.orders.show', $subOrder)}}" role="button">Ver</a>
                    </td>
                </tr>
            @empty
            @endforelse
        </tbody>
    </table>
@endsection
