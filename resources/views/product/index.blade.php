@extends('layouts.app')

@section('content')
	<div class="container container-products text-center py-4">
	    <div class="row">
	        <div class="col-12">
	            <div class="title mt-2 pt-5 pb-3">
	                <h1>{{ $categoryName ?? null }} Productos</h1>
	            </div>
	        </div><!-- /. col -->
	        @foreach( $products as $product)
	            @include('product._single_product')
	        @endforeach
	    </div><!-- /. row -->
	</div>
@endsection


