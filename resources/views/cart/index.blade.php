@extends('layouts.app')

@section('content')

    <h2> Carrito </h2>


	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">Producto</th>
	      <th scope="col">Precio</th>
	      <th scope="col">Cantidad</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($cartItems as $item)
	    <tr>
	      <td>{{ $item->name }}</td>
	      <td>
	      	{{ Cart::session(auth()->id())->get($item->id)->getPriceSum() }}
	      </td>
	      <td>
	      	<form action="{{ route('cart.update', $item->id) }}">
	      		<input type="number" min="1" name="quantity" value="{{ $item->quantity }}">
	      		<button type="submit" class="btn btn-outline-dark btn-sm">Guardar</button>
	      	</form>

	      </td>
	      <td>
	      	<a href="{{ route('cart.destroy', $item->id) }}">Eliminar</a>
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>
	<h3>
		Precio Total : $ {{ Cart::session(auth()->id())->getTotal() }} MXN
	</h3>
	<a href="{{ route('cart.checkout') }}" class="btn btn-dark btn-sm" role="button">Finalizar Compra</a>

@endsection
