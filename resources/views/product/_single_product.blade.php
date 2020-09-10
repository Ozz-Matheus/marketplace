        <div class="col-6 col-lg-4 mb-5">
            <div class="card">
                @if(!empty($product->cover_img))
                    <img src="{{asset('storage/'.$product->cover_img)}}" alt="Imagen de producto" class="img-fluid">
                @else
                    <img src="{{ asset('images/product-default.jpg') }}" alt="Imagen de producto" class="img-fluid">
                @endif
              <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">${{ $product->price }} MXN</p>
                <a href="{{ route('cart.add', $product)}}" class="btn btn-outline-primary">Agregar al Carrito</a>
              </div>
            </div><!-- /. card -->
        </div><!-- /. col -->
