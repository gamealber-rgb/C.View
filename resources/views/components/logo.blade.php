@props([
    'variant' => 'dark',
    'size' => 'md',
])

@php
    $src = $variant === 'light'
        ? asset('images/logo-light.png')
        : asset('images/logo.png');

    $sizeClasses = match ($size) {
        'sm' => 'h-11 sm:h-12',
        'md' => 'h-14 sm:h-16',
        'lg' => 'h-24 sm:h-28 md:h-32',
        default => 'h-14 sm:h-16',
    };
@endphp

<img
    src="{{ $src }}"
    alt="{{ config('motel.name') }}"
    {{ $attributes->merge(['class' => "w-auto max-w-full object-contain {$sizeClasses}"]) }}
    width="220"
    height="80"
    decoding="async"
>
