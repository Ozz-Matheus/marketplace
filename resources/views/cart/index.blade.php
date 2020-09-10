@extends('layouts.app')

@section('content')

    <h2> Carrito </h2>


	<table class="table">
	  <thead class="text-white bg-primary">
	    <tr>
	      <th scope="col">Producto</th>
	      <th scope="col">Precio</th>
	      <th scope="col">Cantidad</th>
	      <th scope="col">Eliminar</th>
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
	      		<button type="submit" class="btn btn-outline-primary btn-sm"><i class="fas fa-save text-primary"></i></button>
	      	</form>

	      </td>
	      <td>
	      	<a href="{{ route('cart.destroy', $item->id) }}"><i class="fas fa-window-close text-primary fa-2x"></i></a>
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>

	<div class="container">
		<div class="row no-gutters">
			<div class="col-6">
				<form class="pb-5" action="{{route('cart.coupon')}}" method='get'>
				  <div class="form-group row">
				    <div class="col-sm-6">
				      <input type="text" name="coupon_code" class="form-control" placeholder="Código promocional" required>
				    </div>
				    <div class="col-sm-6">
				    	<button type="submit" class="btn btn-primary">Aplicar cupón</button>
				    </div>
				  </div>
				</form>
			</div>
			<div class="col-12">
				<h3> Precio Total : $ {{ Cart::session(auth()->id())->getTotal() }} MXN </h3>
				<a href="{{ route('cart.checkout') }}" class="btn btn-primary btn-sm my-2" role="button">Finalizar Compra</a>
			</div>
		</div>
	</div>

@endsection
