@extends('layouts.app')

@section('content')
<div class="container container-products text-center py-4">
    <div class="row">
        <div class="col-12">
            <div class="title mt-2 py-5 pb-3">
                <p class="h1">
                    <span>{{$products->total()}}</span>
                    <span>-</span>
                    <span>Productos encontrados.</span>
                </p>
            </div>
        </div><!-- /. col -->
        @foreach( $products as $product)
            @include('product._single_product')
        @endforeach
        <div class="col-12 py-5 d-flex justify-content-center">
            {{$products->appends(['query'=>request('query')])->render()}}
        </div>
    </div><!-- /. row -->
</div>
@endsection