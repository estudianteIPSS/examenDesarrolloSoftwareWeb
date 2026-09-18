<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['title' => 'Dashboard - VentasFix']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Dashboard - VentasFix']); ?>

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
                <?php echo e($usersCount); ?>

            </p>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-6">
            <p class="text-sm text-gray-500">
                Productos
            </p>

            <p class="text-3xl font-bold text-gray-900 mt-2">
                <?php echo e($productsCount); ?>

            </p>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-6">
            <p class="text-sm text-gray-500">
                Clientes
            </p>

            <p class="text-3xl font-bold text-gray-900 mt-2">
                <?php echo e($clientsCount); ?>

            </p>
        </div>

    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $attributes = $__attributesOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__attributesOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $component = $__componentOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__componentOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?><?php /**PATH C:\Users\Eduardo\Downloads\examenDesarrolloSoftwareWeb-main\resources\views/dashboard.blade.php ENDPATH**/ ?>