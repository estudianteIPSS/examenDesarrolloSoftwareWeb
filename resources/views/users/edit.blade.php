<x-layouts.app title="Editar usuario - VentasFix">

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">
            Editar usuario
        </h1>

        <p class="text-gray-500 mt-1">
            Modificar información del usuario
        </p>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">

        <form
            method="POST"
            action="{{ route('users.update', $user) }}"
            class="space-y-6"
        >

            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <label for="rut" class="block text-sm font-medium text-gray-700 mb-1">
                        RUT
                    </label>

                    <input
                        type="text"
                        id="rut"
                        name="rut"
                        value="{{ old('rut', $user->rut) }}"
                        required
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>

                <div>
                    <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">
                        Nombre
                    </label>

                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        value="{{ old('nombre', $user->nombre) }}"
                        required
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>

                <div>
                    <label for="apellido" class="block text-sm font-medium text-gray-700 mb-1">
                        Apellido
                    </label>

                    <input
                        type="text"
                        id="apellido"
                        name="apellido"
                        value="{{ old('apellido', $user->apellido) }}"
                        required
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                        Correo electrónico
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email', $user->email) }}"
                        required
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                        Nueva contraseña
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        minlength="8"
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                    >

                    <p class="mt-1 text-sm text-gray-500">
                        Déjalo vacío para conservar la contraseña actual.
                    </p>

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
                    href="{{ route('users.index') }}"
                    class="rounded-lg bg-gray-200 px-5 py-2.5 font-semibold text-gray-700 hover:bg-gray-300"
                >
                    Cancelar
                </a>

            </div>

        </form>

    </div>

</x-layouts.app>