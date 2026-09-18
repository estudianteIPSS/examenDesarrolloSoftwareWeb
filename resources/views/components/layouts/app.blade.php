<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'VentasFix' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-100">

    <header class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <div>
                <a href="{{ route('dashboard') }}"
                   class="text-2xl font-bold text-gray-900">
                    VentasFix
                </a>

                <p class="text-sm text-gray-500">
                    Sistema de administración
                </p>
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button
                    type="submit"
                    class="rounded-lg bg-gray-800 px-4 py-2 text-sm font-medium text-white hover:bg-gray-900 transition"
                >
                    Cerrar sesión
                </button>
            </form>

        </div>

        <nav class="border-t border-gray-100">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex gap-6">

                    <a
                        href="{{ route('dashboard') }}"
                        class="py-3 text-sm font-medium text-gray-600 hover:text-gray-900"
                    >
                        Dashboard
                    </a>

                    @if (auth()->user()->rol === 'admin')
                        <a href="{{ route('users.index') }}"
                        class="py-3 text-sm font-medium text-gray-600 hover:text-gray-900">
                            Usuarios
                        </a>
                    @endif

                    <a
                        href="{{ route('products.index') }}"
                        class="py-3 text-sm font-medium text-gray-600 hover:text-gray-900"
                    >
                        Productos
                    </a>

                    <a
                        href="{{ route('clients.index') }}"
                        class="py-3 text-sm font-medium text-gray-600 hover:text-gray-900"
                    >
                        Clientes
                    </a>

                </div>
            </div>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-8">

        @if (session('success'))
            <x-alert type="success">
                {{ session('success') }}
            </x-alert>
        @endif

        @if ($errors->any())
            <x-alert type="error">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </x-alert>
        @endif

        {{ $slot }}

    </main>

</body>
</html>