<x-layouts.app title="Clientes - VentasFix">

    <div class="flex items-center justify-between mb-8">

        <div>
            <h1 class="text-2xl font-bold text-gray-900">
                Clientes
            </h1>

            <p class="text-gray-500 mt-1">
                Administración de clientes empresa
            </p>
        </div>

        <a
            href="{{ route('clients.create') }}"
            class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700"
        >
            Nuevo cliente
        </a>

    </div>

    <div class="bg-white rounded-xl shadow-sm overflow-hidden">

        <div class="overflow-x-auto">

            <table class="w-full text-sm text-left">

                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">RUT empresa</th>
                        <th class="px-6 py-4">Razón social</th>
                        <th class="px-6 py-4">Rubro</th>
                        <th class="px-6 py-4">Contacto</th>
                        <th class="px-6 py-4">Acciones</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-100">

                    @forelse ($clients as $client)

                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4">
                                {{ $client->id }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $client->rut_empresa }}
                            </td>

                            <td class="px-6 py-4 font-medium">
                                {{ $client->razon_social }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $client->rubro }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $client->nombre_contacto }}
                            </td>

                            <td class="px-6 py-4">

                                <div class="flex gap-2">

                                    <a
                                        href="{{ route('clients.show', $client) }}"
                                        class="text-blue-600 hover:text-blue-800 font-medium"
                                    >
                                        Ver
                                    </a>

                                    <a
                                        href="{{ route('clients.edit', $client) }}"
                                        class="text-gray-600 hover:text-gray-900 font-medium"
                                    >
                                        Editar
                                    </a>

                                    <form
                                        method="POST"
                                        action="{{ route('clients.destroy', $client) }}"
                                        onsubmit="return confirm('¿Está seguro de eliminar este cliente?');"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="text-red-600 hover:text-red-800 font-medium"
                                        >
                                            Eliminar
                                        </button>
                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="6" class="px-6 py-8 text-center text-gray-500">
                                No existen clientes registrados.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</x-layouts.app>