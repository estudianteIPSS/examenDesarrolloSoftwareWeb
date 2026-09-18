<x-layouts.app title="Nuevo usuario - VentasFix">

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">
            Nuevo usuario
        </h1>

        <p class="text-gray-500 mt-1">
            Registrar un nuevo usuario en el sistema
        </p>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">

        <form method="POST" action="{{ route('users.store') }}" class="space-y-6">

            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <label for="rut" class="block text-sm font-medium text-gray-700 mb-1">
                        RUT
                    </label>

                    <input
                        type="text"
                        id="rut"
                        name="rut"
                        value="{{ old('rut') }}"
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
                        value="{{ old('nombre') }}"
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
                        value="{{ old('apellido') }}"
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
                        value="{{ old('email') }}"
                        placeholder="usuario@ventasfix.cl"
                        required
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                        Contraseña
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                        minlength="8"
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                    >

                    <p class="text-xs text-gray-500 mt-1">
                        Mínimo 8 caracteres.
                    </p>
                </div>

            </div>

            <div class="flex gap-3 pt-4">

                <button
                    type="submit"
                    class="rounded-lg bg-blue-600 px-5 py-2.5 font-semibold text-white hover:bg-blue-700 transition"
                >
                    Guardar usuario
                </button>

                <a
                    href="{{ route('users.index') }}"
                    class="rounded-lg bg-gray-200 px-5 py-2.5 font-semibold text-gray-700 hover:bg-gray-300 transition"
                >
                    Cancelar
                </a>

            </div>

        </form>

    </div>

</x-layouts.app>