<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Iniciar sesión - VentasFix</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-100 flex items-center justify-center">

    <main class="w-full max-w-md px-6">

        <div class="bg-white rounded-xl shadow-lg p-8">

            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-900">
                    VentasFix
                </h1>

                <p class="text-gray-500 mt-2">
                    Sistema de administración
                </p>
            </div>

            @if ($errors->any())
                <div class="mb-6 rounded-lg bg-red-100 border border-red-300 p-4 text-red-700">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login.store') }}" class="space-y-5">

                @csrf

                <div>
                    <label
                        for="email"
                        class="block text-sm font-medium text-gray-700 mb-1"
                    >
                        Correo electrónico
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>

                <div>
                    <label
                        for="password"
                        class="block text-sm font-medium text-gray-700 mb-1"
                    >
                        Contraseña
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                    >
                </div>

                <button
                    type="submit"
                    class="w-full rounded-lg bg-blue-600 px-4 py-3 font-semibold text-white hover:bg-blue-700 transition"
                >
                    Iniciar sesión
                </button>

            </form>

        </div>

    </main>

</body>
</html>