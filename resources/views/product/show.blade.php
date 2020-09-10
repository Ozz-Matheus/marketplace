@extends('layouts.app')

@section('content')
	<div class="container text-center py-4">
	    	<div class="text-left">
	            <div class="title mt-2 pt-5 pb-3">
	                <h1>{{ $product->name }}</h1>
	            </div>
	       </div>
	    <div class="row ">
	        <div class="col-6">
	            @if(!empty($product->cover_img))
	                <img src="{{asset('storage/'.$product->cover_img)}}" alt="Imagen de producto" class="img-fluid">
	            @else
	                <img src="{{ asset('images/product-default.jpg') }}" alt="Imagen de producto" class="img-fluid">
	            @endif
	        </div><!-- /. col -->
	        <div class="col-6 col-lg-4 mb-5">
	            <div class="card text-right border-white bg-white p-5">
	              <div class="card-body">
	                <h5 class="card-title">{{ $product->name }}</h5>
	                <p class="card-text">${{ $product->price }} MXN</p>
	                <a href="{{ route('cart.add', $product)}}" class="btn btn-outline-primary">Agregar al Carrito</a>
	              </div>
	            </div><!-- /. card -->
	        </div><!-- /. col -->
	    </div>
	</div>
@endsection


