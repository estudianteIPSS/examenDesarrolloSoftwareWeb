<x-layouts.app title="Usuarios - VentasFix">

    <div class="flex items-center justify-between mb-8">

        <div>
            <h1 class="text-2xl font-bold text-gray-900">
                Usuarios
            </h1>

            <p class="text-gray-500 mt-1">
                Administración de usuarios del sistema
            </p>
        </div>

        <a
            href="{{ route('users.create') }}"
            class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700 transition"
        >
            Nuevo usuario
        </a>

    </div>

    <div class="bg-white rounded-xl shadow-sm overflow-hidden">

        <div class="overflow-x-auto">

            <table class="w-full text-sm text-left">

                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 font-semibold text-gray-700">
                            ID
                        </th>

                        <th class="px-6 py-4 font-semibold text-gray-700">
                            RUT
                        </th>

                        <th class="px-6 py-4 font-semibold text-gray-700">
                            Nombre
                        </th>

                        <th class="px-6 py-4 font-semibold text-gray-700">
                            Correo
                        </th>

                        <th class="px-6 py-4 font-semibold text-gray-700">
                            Acciones
                        </th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-100">

                    @forelse ($users as $user)

                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 text-gray-600">
                                {{ $user->id }}
                            </td>

                            <td class="px-6 py-4 text-gray-900">
                                {{ $user->rut }}
                            </td>

                            <td class="px-6 py-4 text-gray-900">
                                {{ $user->nombre }} {{ $user->apellido }}
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                {{ $user->email }}
                            </td>

                            <td class="px-6 py-4">

                                <div class="flex gap-2">

                                    <a
                                        href="{{ route('users.show', $user) }}"
                                        class="text-blue-600 hover:text-blue-800 font-medium"
                                    >
                                        Ver
                                    </a>

                                    <a
                                        href="{{ route('users.edit', $user) }}"
                                        class="text-gray-600 hover:text-gray-900 font-medium"
                                    >
                                        Editar
                                    </a>

                                    <form
                                        method="POST"
                                        action="{{ route('users.destroy', $user) }}"
                                        onsubmit="return confirm('¿Está seguro de eliminar este usuario?');"
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
                            <td
                                colspan="5"
                                class="px-6 py-8 text-center text-gray-500"
                            >
                                No existen usuarios registrados.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</x-layouts.app>