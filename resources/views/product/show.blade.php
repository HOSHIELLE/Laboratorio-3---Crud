@extends('layouts.app')
@section('title','Detalle de producto')
@section('content')
  <div class="card-elevada">
    <div class="card-encabezado"><h1 class="h5 m-0">Detalle de producto</h1></div>
    <div class="p-3 bg-white">
      <dl class="row">
        <dt class="col-sm-3">Descripción</dt><dd class="col-sm-9">{{ $product->description }}</dd>
        <dt class="col-sm-3">Precio</dt><dd class="col-sm-9">{{ number_format($product->price,2) }}</dd>
        <dt class="col-sm-3">Stock</dt><dd class="col-sm-9">{{ $product->stock }}</dd>
      </dl>
      <a class="btn btn-outline-secondary" href="{{ route('products.index') }}">Volver</a>
    </div>
  </div>
@endsection
