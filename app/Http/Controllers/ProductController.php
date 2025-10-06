<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProductController extends Controller
{
    /** Listado */
    public function index(Request $request): View
    {
        $products = Product::paginate(10);

        return view('product.index', compact('products'))
            ->with('i', ($request->input('page', 1) - 1) * $products->perPage());
    }

    /** Form crear */
    public function create(): View
    {
        $product = new Product();
        return view('product.create', compact('product'));
    }

    /** Guardar */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate(
            [
                'description' => ['required', 'string', 'max:255'],
                'price'       => ['required', 'numeric', 'min:0'],
                'stock'       => ['required', 'integer', 'min:0'],
            ],
            // Mensajes en español
            [
                'required' => 'El campo :attribute es obligatorio.',
                'string'   => 'El campo :attribute debe ser texto.',
                'numeric'  => 'El campo :attribute debe ser numérico.',
                'integer'  => 'El campo :attribute debe ser un número entero.',
                'max'      => 'El campo :attribute no debe superar :max caracteres.',
                'min'      => 'El campo :attribute debe ser como mínimo :min.',
            ],
            // Alias bonitos
            [
                'description' => 'descripción',
                'price'       => 'precio',
                'stock'       => 'stock',
            ]
        );

        Product::create($validated);

        return Redirect::route('products.index')
            ->with('success', 'Producto creado correctamente.');
    }

    /** Mostrar */
    public function show(Product $product): View
    {
        return view('product.show', compact('product'));
    }

    /** Form editar */
    public function edit(Product $product): View
    {
        return view('product.edit', compact('product'));
    }

    /** Actualizar */
    public function update(Request $request, Product $product): RedirectResponse
    {
        $validated = $request->validate(
            [
                'description' => ['required', 'string', 'max:255'],
                'price'       => ['required', 'numeric', 'min:0'],
                'stock'       => ['required', 'integer', 'min:0'],
            ],
            [
                'required' => 'El campo :attribute es obligatorio.',
                'string'   => 'El campo :attribute debe ser texto.',
                'numeric'  => 'El campo :attribute debe ser numérico.',
                'integer'  => 'El campo :attribute debe ser un número entero.',
                'max'      => 'El campo :attribute no debe superar :max caracteres.',
                'min'      => 'El campo :attribute debe ser como mínimo :min.',
            ],
            [
                'description' => 'descripción',
                'price'       => 'precio',
                'stock'       => 'stock',
            ]
        );

        $product->update($validated);

        return Redirect::route('products.index')
            ->with('success', 'Producto actualizado correctamente.');
    }

    /** Eliminar */
    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();

        return Redirect::route('products.index')
            ->with('success', 'Producto eliminado correctamente.');
    }
}