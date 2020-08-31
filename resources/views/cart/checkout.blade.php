@extends('layouts.app')

@section('content')

    <h2> Finalizar compra </h2>

	<form action="{{route('orders.store')}}" method="post">
	    @csrf

	    <div class="form-group">
	        <label for="">Nombre y apellido</label>
	        <input type="text" name="shipping_fullname" id="" class="form-control">
	    </div>

	    <div class="form-group">
	        <label for="">Estado</label>
	        <input type="text" name="shipping_state" id="" class="form-control">
	    </div>

	    <div class="form-group">
	        <label for="">Delegación / Municipio</label>
	        <input type="text" name="shipping_city" id="" class="form-control">
	    </div>

	    <div class="form-group">
	        <label for="">Código postal</label>
	        <input type="number" name="shipping_zipcode" id="" class="form-control">
	    </div>

	    <div class="form-group">
	        <label for="">Dirrección completa</label>
	        <input type="text" name="shipping_address" id="" class="form-control">
	    </div>

	    <div class="form-group">
	        <label for="">Teléfono</label>
	        <input type="text" name="shipping_phone" id="" class="form-control">
	    </div>

	    <h4>Metodos de Pago</h4>

	    <div class="form-check">
	        <label class="form-check-label">
	            <input type="radio" class="form-check-input" name="payment_method" id="" value="cash_on_delivery">
	            Pago contra entrega

	        </label>

	    </div>

{{-- 	    <div class="form-check">
	        <label class="form-check-label">
	            <input type="radio" class="form-check-input" name="payment_method" id="" value="paypal">
	            Paypal

	        </label>

	    </div>
 --}}

	    <button type="submit" class="btn btn-primary mt-3">Realizar pedido</button>


	</form>


@endsection
