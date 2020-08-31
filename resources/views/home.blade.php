@extends('layouts.app')

@section('content')
<div class="container text-center">
{{--
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
--}}

    <div class="title mt-2 pt-5 pb-3">
        <h2>Productos</h2>
    </div>
    <div class="row">
        @foreach( $products as $product)
        <div class="col-3 mb-5">
            <div class="card">
              <img src="{{ asset('images/product-default.jpg') }}" class="card-img-top" alt="Imagen de Producto">
              <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">${{ $product->price }} MXN</p>
                <a href="{{ route('cart.add', $product)}}" class="btn btn-outline-dark">Agregar al Carrito</a>
              </div>
            </div><!-- /. card -->
        </div><!-- /. col -->
        @endforeach
    </div><!-- /. row -->
</div>
@endsection
