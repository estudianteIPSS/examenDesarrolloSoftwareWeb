<x-layouts.app title="Productos - VentasFix">

    <div class="flex items-center justify-between mb-8">

        <div>
            <h1 class="text-2xl font-bold text-gray-900">
                Productos
            </h1>

            <p class="text-gray-500 mt-1">
                Administración de productos
            </p>
        </div>

        <a
            href="{{ route('products.create') }}"
            class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700"
        >
            Nuevo producto
        </a>

    </div>

    <div class="bg-white rounded-xl shadow-sm overflow-hidden">

        <div class="overflow-x-auto">

            <table class="w-full text-sm text-left">

                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">SKU</th>
                        <th class="px-6 py-4">Producto</th>
                        <th class="px-6 py-4">Precio venta</th>
                        <th class="px-6 py-4">Stock</th>
                        <th class="px-6 py-4">Acciones</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-100">

                    @forelse ($products as $product)

                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4">
                                {{ $product->id }}
                            </td>

                            <td class="px-6 py-4 font-medium">
                                {{ $product->sku }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $product->nombre }}
                            </td>
                            <td class="px-6 py-4">
                                @if ($product->imagen)
                                    <img
                                        src="{{ asset('storage/' . $product->imagen) }}"
                                        alt="{{ $product->nombre }}"
                                        class="h-16 w-16 rounded-lg object-cover border"
                                    >
                                @else
                                    <span class="text-sm text-gray-500">
                                        Sin imagen
                                    </span>
                                @endif
                            </td>

                            <td class="px-6 py-4">
                                ${{ number_format($product->precio_venta, 0, ',', '.') }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $product->stock_actual }}
                            </td>

                            <td class="px-6 py-4">

                                <div class="flex gap-2">

                                    <a
                                        href="{{ route('products.show', $product) }}"
                                        class="text-blue-600 hover:text-blue-800 font-medium"
                                    >
                                        Ver
                                    </a>

                                    <a
                                        href="{{ route('products.edit', $product) }}"
                                        class="text-gray-600 hover:text-gray-900 font-medium"
                                    >
                                        Editar
                                    </a>

                                    <form
                                        method="POST"
                                        action="{{ route('products.destroy', $product) }}"
                                        onsubmit="return confirm('¿Está seguro de eliminar este producto?');"
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
                                No existen productos registrados.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</x-layouts.app>