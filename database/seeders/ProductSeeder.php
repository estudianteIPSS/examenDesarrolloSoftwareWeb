<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'sku' => 'ELEC-001',
                'nombre' => 'Teclado mecánico RGB HyperX',
                'descripcion_corta' => 'Teclado mecánico con iluminación RGB.',
                'descripcion_larga' => 'Teclado mecánico para escritorio con iluminación RGB, conexión USB y diseño orientado a gaming y productividad.',
                'imagen' => 'products/teclado-mecanico.webp',
                'precio_neto' => 45000,
                'stock_actual' => 25,
                'stock_minimo' => 5,
                'stock_bajo' => 10,
                'stock_alto' => 40,
            ],
            [
                'sku' => 'ELEC-002',
                'nombre' => 'Mouse inalámbrico logitech',
                'descripcion_corta' => 'Mouse inalámbrico ergonómico Logitech.',
                'descripcion_larga' => 'Mouse inalámbrico de diseño ergonómico, conexión USB y sensor óptico para uso doméstico y profesional.',
                'imagen' => 'products/mouse-inalambrico.webp',
                'precio_neto' => 18000,
                'stock_actual' => 40,
                'stock_minimo' => 8,
                'stock_bajo' => 15,
                'stock_alto' => 50,
            ],
            [
                'sku' => 'ELEC-003',
                'nombre' => 'Monitor LED 24 pulgadas Xiaomi',
                'descripcion_corta' => 'Monitor LED Full HD de 24 pulgadas Xiaomi.',
                'descripcion_larga' => 'Monitor LED de 24 pulgadas con resolución Full HD, diseñado para trabajo, estudio y entretenimiento.',
                'imagen' => 'products/monitor-24.webp',
                'precio_neto' => 95000,
                'stock_actual' => 15,
                'stock_minimo' => 3,
                'stock_bajo' => 6,
                'stock_alto' => 25,
            ],
            [
                'sku' => 'ELEC-004',
                'nombre' => 'Audífonos Bluetooth Sony',
                'descripcion_corta' => 'Audífonos inalámbricos Bluetooth Sony.',
                'descripcion_larga' => 'Audífonos inalámbricos con conectividad Bluetooth, micrófono integrado y batería recargable.',
                'imagen' => 'products/audifonos-bluetooth.webp',
                'precio_neto' => 35000,
                'stock_actual' => 30,
                'stock_minimo' => 5,
                'stock_bajo' => 12,
                'stock_alto' => 40,
            ],
            [
                'sku' => 'ELEC-005',
                'nombre' => 'Webcam Full HD Logitech',
                'descripcion_corta' => 'Cámara web Full HD para videollamadas Logitech.',
                'descripcion_larga' => 'Webcam Full HD con micrófono integrado para videoconferencias, clases virtuales y transmisiones.',
                'imagen' => 'products/webcam-full-hd.webp',
                'precio_neto' => 28000,
                'stock_actual' => 20,
                'stock_minimo' => 4,
                'stock_bajo' => 8,
                'stock_alto' => 30,
            ],
            [
                'sku' => 'ELEC-006',
                'nombre' => 'SSD 1 TB NVMe Kingston',
                'descripcion_corta' => 'Unidad SSD NVMe de 1 TB Kingston.',
                'descripcion_larga' => 'Unidad de almacenamiento SSD NVMe de 1 TB para computadores de escritorio y notebooks compatibles.',
                'imagen' => 'products/disco-ssd-1tb.jpg',
                'precio_neto' => 65000,
                'stock_actual' => 18,
                'stock_minimo' => 4,
                'stock_bajo' => 8,
                'stock_alto' => 25,
            ],
            [
                'sku' => 'ELEC-007',
                'nombre' => 'Memoria RAM DDR4 16 GB Fury',
                'descripcion_corta' => 'Memoria RAM DDR4 de 16 GB Fury.',
                'descripcion_larga' => 'Módulo de memoria RAM DDR4 de 16 GB para equipos compatibles, orientado a mejorar el rendimiento del sistema.',
                'imagen' => 'products/memoria-ram-16gb.webp',
                'precio_neto' => 42000,
                'stock_actual' => 22,
                'stock_minimo' => 4,
                'stock_bajo' => 8,
                'stock_alto' => 30,
            ],
            [
                'sku' => 'ELEC-008',
                'nombre' => 'Rtx 3090 TI EVGA',
                'descripcion_corta' => 'Tarjeta gráfica dedicada RTX.',
                'descripcion_larga' => 'Tarjeta gráfica dedicada para computadores de escritorio, adecuada para videojuegos, diseño y aplicaciones de alto rendimiento.',
                'imagen' => 'products/tarjeta-grafica.jpg',
                'precio_neto' => 550000,
                'stock_actual' => 8,
                'stock_minimo' => 2,
                'stock_bajo' => 4,
                'stock_alto' => 12,
            ],
            [
                'sku' => 'ELEC-009',
                'nombre' => 'Router Wi-Fi 6',
                'descripcion_corta' => 'Router inalámbrico con Wi-Fi 6.',
                'descripcion_larga' => 'Router Wi-Fi 6 diseñado para ofrecer conectividad inalámbrica de mayor capacidad y estabilidad en redes domésticas y pequeñas empresas.',
                'imagen' => 'products/router-wifi-6.webp',
                'precio_neto' => 55000,
                'stock_actual' => 12,
                'stock_minimo' => 3,
                'stock_bajo' => 5,
                'stock_alto' => 20,
            ],
            [
                'sku' => 'ELEC-010',
                'nombre' => 'Parlante Bluetooth JBL',
                'descripcion_corta' => 'Parlante portátil con Bluetooth JBL Azul.',
                'descripcion_larga' => 'Parlante portátil con conectividad Bluetooth, batería recargable y diseño compacto para uso doméstico y exterior.',
                'imagen' => 'products/parlante-bluetooth.jpg',
                'precio_neto' => 32000,
                'stock_actual' => 16,
                'stock_minimo' => 3,
                'stock_bajo' => 7,
                'stock_alto' => 25,
            ],
        ];

        foreach ($products as $product) {
            $product['precio_venta'] = round($product['precio_neto'] * 1.19, 2);

            Product::create($product);
        }
    }
}