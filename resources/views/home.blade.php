@extends('layouts.app')

@section('content')
{{-- nav --}}
<div class="category-menu-list">
    <ul class="nav flex-column">
        @foreach($categories as $category)
            <li class="nav-item dropdown">
                <a
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    href="{{route('products.index', ['category_id' => $category->id])}}"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                >{{$category->name}}</a>
               @php
                   $children = TCG\Voyager\Models\Category::where('parent_id', $category->id)->get();
               @endphp
               @if($children->isNotEmpty())
                <div class="dropdown-menu">
                    @foreach ($children as $child)
                    <a class="nav-link" href="{{route('products.index', ['category_id' => $child->id])}}">
                        {{$child->name}}
                    </a>
                    @php
                        $grandChild = TCG\Voyager\Models\Category::where('parent_id', $child->id)->get();
                    @endphp
                    @if($grandChild->isNotEmpty())
                        <div class="dropdown-divider"></div>
                        <ul class="nav nav-pills">
                            @foreach ($grandChild as $c)
                                <li class="nav-item "><a class="nav-link pl-5" href="{{route('products.index', ['category_id' => $c->id])}}">{{$c->name}}</a></li>
                            @endforeach
                        </ul>
                    @endif
                    @endforeach
                </div>
              @endif
            </li>
        @endforeach
    </ul>
</div>
{{-- nav --}}
<div class="container container-products text-center py-4">
    <div class="row">
        <div class="col-12">
            <div class="title mt-2 pt-5 pb-3">
                <h2>Productos</h2>
            </div>
        </div><!-- /. col -->
        @foreach( $products as $product)
            @include('product._single_product')
        @endforeach
    </div><!-- /. row -->
</div>
@endsection
