<x-layouts.app title="Ver producto - VentasFix">

    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">
                Detalle del producto
            </h1>
            <p class="text-gray-500 mt-1">
                Información del producto
            </p>
        </div>

        <a href="{{ route('products.index') }}"
           class="rounded-lg bg-gray-200 px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-300">
            Volver
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">

        <dl class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div>
                <dt class="text-sm text-gray-500">ID</dt>
                <dd class="mt-1 font-medium">{{ $product->id }}</dd>
            </div>

            <div>
                <dt class="text-sm text-gray-500">SKU</dt>
                <dd class="mt-1 font-medium">{{ $product->sku }}</dd>
            </div>

            <div>
                <dt class="text-sm text-gray-500">Nombre</dt>
                <dd class="mt-1 font-medium">{{ $product->nombre }}</dd>
            </div>

            <div>
                <dt class="text-sm text-gray-500">Precio neto</dt>
                <dd class="mt-1">${{ number_format($product->precio_neto, 2, ',', '.') }}</dd>
            </div>

            <div>
                <dt class="text-sm text-gray-500">Precio de venta</dt>
                <dd class="mt-1">${{ number_format($product->precio_venta, 2, ',', '.') }}</dd>
            </div>

            <div>
                <dt class="text-sm text-gray-500">Stock actual</dt>
                <dd class="mt-1">{{ $product->stock_actual }}</dd>
            </div>

            <div class="md:col-span-2">
                <dt class="text-sm text-gray-500">Descripción corta</dt>
                <dd class="mt-1">{{ $product->descripcion_corta }}</dd>
            </div>

            <div class="md:col-span-2">
                <dt class="text-sm text-gray-500">Descripción larga</dt>
                <dd class="mt-1">{{ $product->descripcion_larga }}</dd>
            </div>

            <div>
                <dt class="text-sm text-gray-500">Stock mínimo</dt>
                <dd class="mt-1">{{ $product->stock_minimo }}</dd>
            </div>

            <div>
                <dt class="text-sm text-gray-500">Stock bajo</dt>
                <dd class="mt-1">{{ $product->stock_bajo }}</dd>
            </div>

            <div>
                <dt class="text-sm text-gray-500">Stock alto</dt>
                <dd class="mt-1">{{ $product->stock_alto }}</dd>
            </div>

            <div>
                <p class="text-sm font-medium text-gray-500">
                    Imagen
                </p>

                @if ($product->imagen)
                    <img
                        src="{{ asset('storage/' . $product->imagen) }}"
                        alt="{{ $product->nombre }}"
                        class="mt-2 h-64 w-96 rounded-lg object-cover border"
                    >
                @else
                    <p class="mt-2 text-gray-500">
                        Sin imagen
                    </p>
                @endif
            </div>


        </dl>

        <div class="mt-8">
            <a href="{{ route('products.edit', $product) }}"
               class="rounded-lg bg-blue-600 px-5 py-2.5 font-semibold text-white hover:bg-blue-700">
                Editar producto
            </a>
        </div>

    </div>

</x-layouts.app>