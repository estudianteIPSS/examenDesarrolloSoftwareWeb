<x-layouts.app title="Dashboard - VentasFix">

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">
            Dashboard
        </h1>

        <p class="text-gray-500 mt-1">
            Resumen general del sistema
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div class="bg-white rounded-xl shadow-sm p-6">
            <p class="text-sm text-gray-500">
                Usuarios
            </p>

            <p class="text-3xl font-bold text-gray-900 mt-2">
                {{ $usersCount }}
            </p>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-6">
            <p class="text-sm text-gray-500">
                Productos
            </p>

            <p class="text-3xl font-bold text-gray-900 mt-2">
                {{ $productsCount }}
            </p>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-6">
            <p class="text-sm text-gray-500">
                Clientes
            </p>

            <p class="text-3xl font-bold text-gray-900 mt-2">
                {{ $clientsCount }}
            </p>
        </div>

    </div>

</x-layouts.app>