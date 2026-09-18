<x-layouts.app title="Editar cliente - VentasFix">

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">
            Editar cliente
        </h1>

        <p class="text-gray-500 mt-1">
            Modificar información del cliente
        </p>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">

        <form method="POST" action="{{ route('clients.update', $client) }}" class="space-y-6">

            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <label for="rut_empresa" class="block text-sm font-medium text-gray-700 mb-1">
                        RUT empresa
                    </label>
                    <input type="text" id="rut_empresa" name="rut_empresa"
                        value="{{ old('rut_empresa', $client->rut_empresa) }}" required
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="rubro" class="block text-sm font-medium text-gray-700 mb-1">
                        Rubro
                    </label>
                    <input type="text" id="rubro" name="rubro"
                        value="{{ old('rubro', $client->rubro) }}" required
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div class="md:col-span-2">
                    <label for="razon_social" class="block text-sm font-medium text-gray-700 mb-1">
                        Razón social
                    </label>
                    <input type="text" id="razon_social" name="razon_social"
                        value="{{ old('razon_social', $client->razon_social) }}" required
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="telefono" class="block text-sm font-medium text-gray-700 mb-1">
                        Teléfono
                    </label>
                    <input type="text" id="telefono" name="telefono"
                        value="{{ old('telefono', $client->telefono) }}" required
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="direccion" class="block text-sm font-medium text-gray-700 mb-1">
                        Dirección
                    </label>
                    <input type="text" id="direccion" name="direccion"
                        value="{{ old('direccion', $client->direccion) }}" required
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="nombre_contacto" class="block text-sm font-medium text-gray-700 mb-1">
                        Persona de contacto
                    </label>
                    <input type="text" id="nombre_contacto" name="nombre_contacto"
                        value="{{ old('nombre_contacto', $client->nombre_contacto) }}" required
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="email_contacto" class="block text-sm font-medium text-gray-700 mb-1">
                        Email de contacto
                    </label>
                    <input type="email" id="email_contacto" name="email_contacto"
                        value="{{ old('email_contacto', $client->email_contacto) }}" required
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>

            </div>

            <div class="flex gap-3 pt-4">

                <button
                    type="submit"
                    class="rounded-lg bg-blue-600 px-5 py-2.5 font-semibold text-white hover:bg-blue-700"
                >
                    Guardar cambios
                </button>

                <a
                    href="{{ route('clients.index') }}"
                    class="rounded-lg bg-gray-200 px-5 py-2.5 font-semibold text-gray-700 hover:bg-gray-300"
                >
                    Cancelar
                </a>

            </div>

        </form>

    </div>

</x-layouts.app>