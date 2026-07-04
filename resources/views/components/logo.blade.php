@props([
    'variant' => 'dark',
    'size' => 'md',
    'align' => 'center',
])

@php
    $colorClasses = $variant === 'light'
        ? ['script' => 'text-white', 'subtitle' => 'text-white/90']
        : ['script' => 'text-ocean-deep', 'subtitle' => 'text-ocean-mid'];

    $sizeClasses = match ($size) {
        'sm' => ['script' => 'text-[2rem] leading-none', 'subtitle' => 'text-[0.55rem] mt-1', 'gap' => ''],
        'md' => ['script' => 'text-[2.75rem] leading-none', 'subtitle' => 'text-[0.65rem] mt-1.5', 'gap' => ''],
        'lg' => ['script' => 'text-6xl sm:text-7xl md:text-8xl leading-none', 'subtitle' => 'text-sm sm:text-base mt-3', 'gap' => ''],
        default => ['script' => 'text-[2.75rem] leading-none', 'subtitle' => 'text-[0.65rem] mt-1.5', 'gap' => ''],
    };

    $alignClass = match ($align) {
        'start' => 'items-start text-start',
        'end' => 'items-end text-end',
        default => 'items-center text-center',
    };
@endphp

<div {{ $attributes->merge(['class' => "logo-brand inline-flex flex-col {$alignClass}"]) }}>
    <span class="logo-script {{ $sizeClasses['script'] }} {{ $colorClasses['script'] }}">
        {{ config('motel.logo_script') }}
    </span>
    <span class="logo-subtitle {{ $sizeClasses['subtitle'] }} {{ $colorClasses['subtitle'] }} font-normal uppercase">
        {{ config('motel.logo_subtitle') }}
    </span>
</div>
