<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::orderBy('id')->get();

        return view('products.index', compact('products'));
    }

    public function show(Product $product): View
    {
        return view('products.show', compact('product'));
    }

    public function create(): View
    {
        return view('products.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'sku' => ['required', 'string', 'max:100', 'unique:products,sku'],
            'nombre' => ['required', 'string', 'max:255'],
            'descripcion_corta' => ['required', 'string', 'max:255'],
            'descripcion_larga' => ['required', 'string'],
            'imagen' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'precio_neto' => ['required', 'numeric', 'min:0'],
            'stock_actual' => ['required', 'integer', 'min:0'],
            'stock_minimo' => ['required', 'integer', 'min:0'],
            'stock_bajo' => ['required', 'integer', 'min:0'],
            'stock_alto' => ['required', 'integer', 'min:0'],
        ]);

        // El precio de venta se calcula automáticamente con IVA del 19%.
        $validated['precio_venta'] = round($validated['precio_neto'] * 1.19, 2);

        // Guardar la imagen en storage/app/public/products.
        $validated['imagen'] = $request->file('imagen')->store('products', 'public');

        Product::create($validated);

        return redirect()
            ->route('products.index')
            ->with('success', 'Producto creado correctamente.');
    }

    public function edit(Product $product): View
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product): RedirectResponse
    {
        $validated = $request->validate([
            'sku' => [
                'required',
                'string',
                'max:100',
                'unique:products,sku,' . $product->id,
            ],
            'nombre' => ['required', 'string', 'max:255'],
            'descripcion_corta' => ['required', 'string', 'max:255'],
            'descripcion_larga' => ['required', 'string'],
            'imagen' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'precio_neto' => ['required', 'numeric', 'min:0'],
            'stock_actual' => ['required', 'integer', 'min:0'],
            'stock_minimo' => ['required', 'integer', 'min:0'],
            'stock_bajo' => ['required', 'integer', 'min:0'],
            'stock_alto' => ['required', 'integer', 'min:0'],
        ]);

        // Recalcular siempre el precio de venta en el servidor.
        $validated['precio_venta'] = round($validated['precio_neto'] * 1.19, 2);

        // Si se sube una nueva imagen, reemplazar la anterior.
        if ($request->hasFile('imagen')) {
            if ($product->imagen) {
                Storage::disk('public')->delete($product->imagen);
            }

            $validated['imagen'] = $request->file('imagen')->store('products', 'public');
        } else {
            // Mantener la imagen actual.
            unset($validated['imagen']);
        }

        // IMPORTANTE: actualizar la instancia actual, no el modelo estático.
        $product->update($validated);

        return redirect()
            ->route('products.index')
            ->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy(Product $product): RedirectResponse
    {
        if ($product->imagen) {
            Storage::disk('public')->delete($product->imagen);
        }

        $product->delete();

        return redirect()
            ->route('products.index')
            ->with('success', 'Producto eliminado correctamente.');
    }
}