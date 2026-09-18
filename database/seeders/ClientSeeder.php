<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        $clients = [
            [
                'rut_empresa' => '76.123.456-7',
                'rubro' => 'Tecnología',
                'razon_social' => 'Comercial TecnoSur SpA',
                'telefono' => '+56 9 6123 4567',
                'direccion' => 'Av. Providencia 1234, Santiago',
                'nombre_contacto' => 'Carlos González',
                'email_contacto' => 'carlos.gonzalez@tecnosur.cl',
            ],
            [
                'rut_empresa' => '77.234.567-8',
                'rubro' => 'Tecnología',
                'razon_social' => 'Soluciones Digitales Chile SpA',
                'telefono' => '+56 9 6234 5678',
                'direccion' => 'Av. Apoquindo 2450, Las Condes',
                'nombre_contacto' => 'Marcela Rojas',
                'email_contacto' => 'marcela.rojas@solucionesdigitales.cl',
            ],
            [
                'rut_empresa' => '78.345.678-9',
                'rubro' => 'Comercio',
                'razon_social' => 'Comercial ElectroMax Ltda.',
                'telefono' => '+56 9 6345 6789',
                'direccion' => 'Av. Vicuña Mackenna 1890, Santiago',
                'nombre_contacto' => 'Rodrigo Pérez',
                'email_contacto' => 'rodrigo.perez@electromax.cl',
            ],
            [
                'rut_empresa' => '76.456.789-0',
                'rubro' => 'Servicios',
                'razon_social' => 'Servicios Informáticos Andes SpA',
                'telefono' => '+56 9 6456 7890',
                'direccion' => 'Av. Manuel Montt 850, Providencia',
                'nombre_contacto' => 'Andrea Muñoz',
                'email_contacto' => 'andrea.munoz@andesit.cl',
            ],
            [
                'rut_empresa' => '77.567.890-1',
                'rubro' => 'Comercio',
                'razon_social' => 'Distribuidora CentroTech Ltda.',
                'telefono' => '+56 9 6567 8901',
                'direccion' => 'San Diego 1450, Santiago',
                'nombre_contacto' => 'Felipe Soto',
                'email_contacto' => 'felipe.soto@centrotech.cl',
            ],
            [
                'rut_empresa' => '78.678.901-2',
                'rubro' => 'Ingeniería',
                'razon_social' => 'Ingeniería y Tecnología Austral SpA',
                'telefono' => '+56 9 6678 9012',
                'direccion' => 'Av. España 720, Santiago',
                'nombre_contacto' => 'Patricia Silva',
                'email_contacto' => 'patricia.silva@tecaustral.cl',
            ],
            [
                'rut_empresa' => '76.789.012-3',
                'rubro' => 'Tecnología',
                'razon_social' => 'Sistemas Computacionales del Pacífico Ltda.',
                'telefono' => '+56 9 6789 0123',
                'direccion' => 'Av. Irarrázaval 2200, Ñuñoa',
                'nombre_contacto' => 'Diego Morales',
                'email_contacto' => 'diego.morales@scp.cl',
            ],
            [
                'rut_empresa' => '77.890.123-4',
                'rubro' => 'Tecnología',
                'razon_social' => 'Comercial Innovatek SpA',
                'telefono' => '+56 9 6890 1234',
                'direccion' => 'Av. Kennedy 5600, Vitacura',
                'nombre_contacto' => 'Valentina Castro',
                'email_contacto' => 'valentina.castro@innovatek.cl',
            ],
            [
                'rut_empresa' => '78.901.234-5',
                'rubro' => 'Servicios',
                'razon_social' => 'Soluciones Empresariales Norte Ltda.',
                'telefono' => '+56 9 6901 2345',
                'direccion' => 'Av. Recoleta 980, Recoleta',
                'nombre_contacto' => 'Jorge Ramírez',
                'email_contacto' => 'jorge.ramirez@senorte.cl',
            ],
            [
                'rut_empresa' => '76.012.345-6',
                'rubro' => 'Telecomunicaciones',
                'razon_social' => 'Tecnología y Comunicaciones Sur SpA',
                'telefono' => '+56 9 6012 3456',
                'direccion' => 'Gran Avenida 3200, San Miguel',
                'nombre_contacto' => 'Natalia Herrera',
                'email_contacto' => 'natalia.herrera@teccomsur.cl',
            ],
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}