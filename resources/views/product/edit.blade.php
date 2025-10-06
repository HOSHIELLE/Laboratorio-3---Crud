@extends('layouts.app')
@section('title','Editar producto')
@section('content')
  <div class="card-elevada">
    <div class="card-encabezado"><h1 class="h5 m-0">Editar producto</h1></div>
    <div class="p-3 bg-white">
      @include('product.form', [
        'action' => route('products.update', $product->id),
        'method' => 'PUT',
        'product' => $product
      ])
    </div>
  </div>
@endsection
