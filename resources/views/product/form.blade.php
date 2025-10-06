<form action="{{ $action }}" method="POST" class="row g-3">
  @csrf
  @if($method !== 'POST') @method($method) @endif

  <div class="col-12">
    <label class="form-label">Descripción</label>
    <input type="text" name="description" class="form-control"
           value="{{ old('description', $product->description ?? '') }}" required>
  </div>

  <div class="col-md-6">
    <label class="form-label">Precio</label>
    <input type="number" step="0.01" min="0" name="price" class="form-control"
           value="{{ old('price', $product->price ?? 0) }}" required>
  </div>

  <div class="col-md-6">
    <label class="form-label">Stock</label>
    <input type="number" step="1" min="0" name="stock" class="form-control"
           value="{{ old('stock', $product->stock ?? 0) }}" required>
  </div>

  <div class="col-12 d-flex gap-2">
    <button class="btn btn-primary" type="submit">Guardar</button>
    <a class="btn btn-outline-secondary" href="{{ route('products.index') }}">Volver</a>
  </div>
</form>
