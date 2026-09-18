<x-layouts.app title="Nuevo producto - VentasFix">

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">
            Nuevo producto
        </h1>

        <p class="text-gray-500 mt-1">
            Registrar un nuevo producto
        </p>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">

        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" class="space-y-6">

            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <label for="sku" class="block text-sm font-medium text-gray-700 mb-1">SKU</label>
                    <input type="text" id="sku" name="sku" value="{{ old('sku') }}" required
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div class="md:col-span-2">
                    <label for="descripcion_corta" class="block text-sm font-medium text-gray-700 mb-1">
                        Descripción corta
                    </label>
                    <input type="text" id="descripcion_corta" name="descripcion_corta"
                        value="{{ old('descripcion_corta') }}" required
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div class="md:col-span-2">
                    <label for="descripcion_larga" class="block text-sm font-medium text-gray-700 mb-1">
                        Descripción larga
                    </label>
                    <textarea id="descripcion_larga" name="descripcion_larga" rows="5" required
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">{{ old('descripcion_larga') }}</textarea>
                </div>

                <div>
                    <label for="imagen" class="block text-sm font-medium text-gray-700 mb-1">
                        Imagen del producto
                    </label>

                    <input
                        type="file"
                        id="imagen"
                        name="imagen"
                        accept=".jpg,.jpeg,.png,.webp"
                        required
                        class="w-full rounded-lg border border-gray-300 bg-white px-3 py-2"
                    >

                    <p class="mt-1 text-sm text-gray-500">
                        Formatos permitidos: JPG, JPEG, PNG o WEBP. Máximo 5 MB.
                    </p>

                    <p
                        id="imagen-error"
                        class="mt-2 hidden text-sm text-red-600"
                    ></p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div>
                        <label for="precio_neto" class="block text-sm font-medium text-gray-700 mb-1">
                            Precio neto
                        </label>

                        <input
                            type="number"
                            id="precio_neto"
                            name="precio_neto"
                            value="{{ old('precio_neto') }}"
                            min="0"
                            step="0.01"
                            required
                            class="w-full rounded-lg border border-gray-300 px-3 py-2"
                        >
                    </div>

                    <div>
                        <label for="precio_venta" class="block text-sm font-medium text-gray-700 mb-1">
                            Precio de venta (IVA 19%)
                        </label>

                        <input
                            type="number"
                            id="precio_venta"
                            value=""
                            step="0.01"
                            readonly
                            class="w-full rounded-lg border border-gray-300 bg-gray-100 px-3 py-2"
                        >

                        <p class="mt-1 text-sm text-gray-500">
                            Calculado automáticamente a partir del precio neto.
                        </p>
                    </div>

                </div>                
                
                <div>
                    <label for="stock_actual" class="block text-sm font-medium text-gray-700 mb-1">
                        Stock actual
                    </label>
                    <input type="number" min="0" id="stock_actual" name="stock_actual"
                        value="{{ old('stock_actual') }}" required
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="stock_minimo" class="block text-sm font-medium text-gray-700 mb-1">
                        Stock mínimo
                    </label>
                    <input type="number" min="0" id="stock_minimo" name="stock_minimo"
                        value="{{ old('stock_minimo') }}" required
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="stock_bajo" class="block text-sm font-medium text-gray-700 mb-1">
                        Stock bajo
                    </label>
                    <input type="number" min="0" id="stock_bajo" name="stock_bajo"
                        value="{{ old('stock_bajo') }}" required
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="stock_alto" class="block text-sm font-medium text-gray-700 mb-1">
                        Stock alto
                    </label>
                    <input type="number" min="0" id="stock_alto" name="stock_alto"
                        value="{{ old('stock_alto') }}" required
                        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                </div>

            </div>

            <div class="flex gap-3 pt-4">

                <button
                    type="submit"
                    class="rounded-lg bg-blue-600 px-5 py-2.5 font-semibold text-white hover:bg-blue-700"
                >
                    Guardar producto
                </button>

                <a
                    href="{{ route('products.index') }}"
                    class="rounded-lg bg-gray-200 px-5 py-2.5 font-semibold text-gray-700 hover:bg-gray-300"
                >
                    Cancelar
                </a>

            </div>

        </form>

    </div>

</x-layouts.app>

<script>
    const precioNeto = document.getElementById('precio_neto');
    const precioVenta = document.getElementById('precio_venta');

    function calcularPrecioVenta() {
        const neto = parseFloat(precioNeto.value);

        if (Number.isFinite(neto)) {
            precioVenta.value = (neto * 1.19).toFixed(2);
        } else {
            precioVenta.value = '';
        }
    }

    precioNeto.addEventListener('input', calcularPrecioVenta);
    calcularPrecioVenta();


    const imagenInput = document.getElementById('imagen');
    const imagenError = document.getElementById('imagen-error');
    const formulario = imagenInput.closest('form');

    const maximoImagen = 5 * 1024 * 1024;

    imagenInput.addEventListener('change', function () {
        const archivo = this.files[0];

        imagenError.textContent = '';
        imagenError.classList.add('hidden');

        if (!archivo) {
            return;
        }

        if (archivo.size > maximoImagen) {
            imagenError.textContent =
                'La imagen seleccionada supera el tamaño máximo permitido de 5 MB.';

            imagenError.classList.remove('hidden');

            this.value = '';
        }
    });

    formulario.addEventListener('submit', function (event) {
        const archivo = imagenInput.files[0];

        if (archivo && archivo.size > maximoImagen) {
            event.preventDefault();

            imagenError.textContent =
                'La imagen seleccionada supera el tamaño máximo permitido de 5 MB.';

            imagenError.classList.remove('hidden');
        }
    });
</script>