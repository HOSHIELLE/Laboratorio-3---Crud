@extends('layouts.app')

@section('title','Productos')

@section('content')
  <div class="card-elevada mb-4">
    <div class="card-encabezado d-flex justify-content-between align-items-center">
      <h1 class="h4 m-0">Productos</h1>
      <a href="{{ route('products.create') }}" class="btn btn-light">Nuevo</a>
    </div>

    <div class="p-3 bg-white">
      @if($products->count())
        <table class="table table-hover table-bordered align-middle">
          <thead>
            <tr>
              <th>#</th>
              <th>Descripción</th>
              <th class="text-end">Precio</th>
              <th class="text-end">Stock</th>
              <th style="width: 220px;">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $p)
              <tr>
                <td>{{ ($i ?? 0) + $loop->iteration }}</td>
                <td>{{ $p->description }}</td>
                <td class="text-end">{{ number_format($p->price, 2) }}</td>
                <td class="text-end">{{ $p->stock }}</td>
                <td>
                  <a class="btn btn-sm btn-outline-secondary" href="{{ route('products.show', $p->id) }}">Ver</a>
                  <a class="btn btn-sm btn-warning" href="{{ route('products.edit', $p->id) }}">Editar</a>
                  <form action="{{ route('products.destroy', $p->id) }}" method="POST" class="d-inline"
                        onsubmit="return confirm('¿Eliminar este producto?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>

        {{ $products->links() }}
      @else
        <div class="alert alert-info mb-0">No hay productos aún.</div>
      @endif
    </div>
  </div>
@endsection