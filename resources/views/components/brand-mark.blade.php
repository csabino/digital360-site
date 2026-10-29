@props(['class' => 'h-8 w-8'])
@php($gradientId = 'brand-grad-' . \Illuminate\Support\Str::random(8))

<svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => $class]) }}>
    <defs>
        <linearGradient id="{{ $gradientId }}" x1="6" y1="4" x2="42" y2="44" gradientUnits="userSpaceOnUse">
            <stop offset="0%" stop-color="#fdba74" />
            <stop offset="32%" stop-color="#f97316" />
            <stop offset="75%" stop-color="#c2410c" />
            <stop offset="100%" stop-color="#7c2d12" />
        </linearGradient>
    </defs>
    <circle cx="24" cy="24" r="18" stroke="url(#{{ $gradientId }})" stroke-width="3.5" stroke-linecap="round" stroke-dasharray="84 29" transform="rotate(-90 24 24)" />
    <circle cx="24" cy="6" r="4.5" fill="url(#{{ $gradientId }})" />
</svg>
