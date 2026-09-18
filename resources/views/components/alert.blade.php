@props(['type' => 'success'])

@php
    $classes = match ($type) {
        'error' => 'bg-red-100 border-red-300 text-red-700',
        'warning' => 'bg-yellow-100 border-yellow-300 text-yellow-700',
        default => 'bg-green-100 border-green-300 text-green-700',
    };
@endphp

<div class="mb-6 rounded-lg border p-4 {{ $classes }}">
    {{ $slot }}
</div>