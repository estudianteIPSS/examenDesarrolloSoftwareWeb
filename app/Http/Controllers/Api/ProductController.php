<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function index(): JsonResponse
    {
        $products = Product::orderBy('id')->get();

        return response()->json([
            'data' => $products,
        ], 200);
    }

    public function store(Request $request): JsonResponse
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

        $validated['precio_venta'] = round(
            $validated['precio_neto'] * 1.19,
            2
        );

        $validated['imagen'] = $request
            ->file('imagen')
            ->store('products', 'public');

        $product = Product::create($validated);

        return response()->json([
            'message' => 'Producto creado correctamente.',
            'data' => $product,
        ], 201);
    }

    public function show(Product $product): JsonResponse
    {
        return response()->json([
            'data' => $product,
        ], 200);
    }

    public function update(Request $request, Product $product): JsonResponse
    {
        $validated = $request->validate([
            'sku' => [
                'required',
                'string',
                'max:100',
                Rule::unique('products', 'sku')->ignore($product->id),
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

        $validated['precio_venta'] = round(
            $validated['precio_neto'] * 1.19,
            2
        );

        if ($request->hasFile('imagen')) {
            if ($product->imagen) {
                Storage::disk('public')->delete($product->imagen);
            }

            $validated['imagen'] = $request
                ->file('imagen')
                ->store('products', 'public');
        } else {
            unset($validated['imagen']);
        }

        $product->update($validated);

        return response()->json([
            'message' => 'Producto actualizado correctamente.',
            'data' => $product->fresh(),
        ], 200);
    }

    public function destroy(Product $product): JsonResponse
    {
        if ($product->imagen) {
            Storage::disk('public')->delete($product->imagen);
        }

        $product->delete();

        return response()->json([
            'message' => 'Producto eliminado correctamente.',
        ], 200);
    }
}