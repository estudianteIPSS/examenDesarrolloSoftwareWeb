<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define el estado por defecto del modelo.
     */
    public function definition(): array
    {
        return [
            'rut_empresa' => fake()->unique()->numerify('##.###.###-#'),
            'rubro' => fake()->randomElement([
                'Comercio',
                'Construcción',
                'Tecnología',
                'Transporte',
                'Servicios',
                'Manufactura',
            ]),
            'razon_social' => fake()->company(),
            'telefono' => '+56 9 ' . fake()->numerify('########'),
            'direccion' => fake()->streetAddress(),
            'nombre_contacto' => fake()->name(),
            'email_contacto' => fake()->unique()->safeEmail(),
        ];
    }
}