@extends('layouts.app')
@section('title','Nuevo producto')
@section('content')
  <div class="card-elevada">
    <div class="card-encabezado"><h1 class="h5 m-0">Nuevo producto</h1></div>
    <div class="p-3 bg-white">
      @include('product.form', [
        'action' => route('products.store'),
        'method' => 'POST',
        'product' => $product
      ])
    </div>
  </div>
@endsection
