<x-layouts.app title="Ver cliente - VentasFix">

    <div class="flex items-center justify-between mb-8">

        <div>
            <h1 class="text-2xl font-bold text-gray-900">
                Detalle del cliente
            </h1>

            <p class="text-gray-500 mt-1">
                Información del cliente empresa
            </p>
        </div>

        <a
            href="{{ route('clients.index') }}"
            class="rounded-lg bg-gray-200 px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-300"
        >
            Volver
        </a>

    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">

        <dl class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <dt class="text-sm text-gray-500">ID</dt>
                <dd class="mt-1 font-medium">{{ $client->id }}</dd>
            </div>

            <div>
                <dt class="text-sm text-gray-500">RUT empresa</dt>
                <dd class="mt-1 font-medium">{{ $client->rut_empresa }}</dd>
            </div>

            <div>
                <dt class="text-sm text-gray-500">Razón social</dt>
                <dd class="mt-1">{{ $client->razon_social }}</dd>
            </div>

            <div>
                <dt class="text-sm text-gray-500">Rubro</dt>
                <dd class="mt-1">{{ $client->rubro }}</dd>
            </div>

            <div>
                <dt class="text-sm text-gray-500">Teléfono</dt>
                <dd class="mt-1">{{ $client->telefono }}</dd>
            </div>

            <div>
                <dt class="text-sm text-gray-500">Dirección</dt>
                <dd class="mt-1">{{ $client->direccion }}</dd>
            </div>

            <div>
                <dt class="text-sm text-gray-500">Persona de contacto</dt>
                <dd class="mt-1">{{ $client->nombre_contacto }}</dd>
            </div>

            <div>
                <dt class="text-sm text-gray-500">Email de contacto</dt>
                <dd class="mt-1">{{ $client->email_contacto }}</dd>
            </div>

        </dl>

        <div class="mt-8">

            <a
                href="{{ route('clients.edit', $client) }}"
                class="rounded-lg bg-blue-600 px-5 py-2.5 font-semibold text-white hover:bg-blue-700"
            >
                Editar cliente
            </a>

        </div>

    </div>

</x-layouts.app>