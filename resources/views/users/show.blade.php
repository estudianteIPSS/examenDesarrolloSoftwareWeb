<x-layouts.app title="Ver usuario - VentasFix">

    <div class="flex items-center justify-between mb-8">

        <div>
            <h1 class="text-2xl font-bold text-gray-900">
                Detalle del usuario
            </h1>

            <p class="text-gray-500 mt-1">
                Información del usuario seleccionado
            </p>
        </div>

        <a
            href="{{ route('users.index') }}"
            class="rounded-lg bg-gray-200 px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-300"
        >
            Volver
        </a>

    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">

        <dl class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <dt class="text-sm font-medium text-gray-500">ID</dt>
                <dd class="mt-1 text-gray-900">{{ $user->id }}</dd>
            </div>

            <div>
                <dt class="text-sm font-medium text-gray-500">RUT</dt>
                <dd class="mt-1 text-gray-900">{{ $user->rut }}</dd>
            </div>

            <div>
                <dt class="text-sm font-medium text-gray-500">Nombre</dt>
                <dd class="mt-1 text-gray-900">{{ $user->nombre }}</dd>
            </div>

            <div>
                <dt class="text-sm font-medium text-gray-500">Apellido</dt>
                <dd class="mt-1 text-gray-900">{{ $user->apellido }}</dd>
            </div>

            <div>
                <dt class="text-sm font-medium text-gray-500">Correo electrónico</dt>
                <dd class="mt-1 text-gray-900">{{ $user->email }}</dd>
            </div>

            <div>
                <dt class="text-sm font-medium text-gray-500">Fecha de creación</dt>
                <dd class="mt-1 text-gray-900">
                    {{ $user->created_at->format('d/m/Y H:i') }}
                </dd>
            </div>

        </dl>

        <div class="mt-8">

            <a
                href="{{ route('users.edit', $user) }}"
                class="rounded-lg bg-blue-600 px-5 py-2.5 font-semibold text-white hover:bg-blue-700"
            >
                Editar usuario
            </a>

        </div>

    </div>

</x-layouts.app>