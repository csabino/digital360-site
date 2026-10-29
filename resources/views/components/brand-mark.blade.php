@props(['class' => 'h-8 w-8'])

<svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => $class]) }}>
    <circle cx="24" cy="24" r="18" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-dasharray="84 29" transform="rotate(-90 24 24)" />
    <circle cx="24" cy="6" r="4.5" fill="currentColor" />
</svg>
