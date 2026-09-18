<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define el estado por defecto del modelo.
     */
    public function definition(): array
    {
        $precioNeto = fake()->randomFloat(2, 1000, 500000);

        return [
            'sku' => 'SKU-' . fake()->unique()->numerify('#####'),
            'nombre' => fake()->words(3, true),
            'descripcion_corta' => fake()->sentence(8),
            'descripcion_larga' => fake()->paragraph(3),
            'imagen' => 'products/default.jpg',
            'precio_neto' => $precioNeto,
            'precio_venta' => round($precioNeto * 1.19, 2),
            'stock_actual' => fake()->numberBetween(0, 100),
            'stock_minimo' => fake()->numberBetween(1, 10),
            'stock_bajo' => fake()->numberBetween(11, 30),
            'stock_alto' => fake()->numberBetween(50, 100),
        ];
    }
}