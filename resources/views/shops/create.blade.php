@extends('layouts.app')


@section('content')
<h2>Crea tu tienda</h2>

<form action="{{route('shops.store')}}" method="post">
    @csrf

    <div class="form-group">
        <label for="name">Nombre de la tienda</label>
        <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
    </div>

    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea class="form-control" name="description" id="" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-dark">Enviar</button>

</form>

@endsection