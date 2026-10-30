@props(['class' => 'w-full h-auto'])

<svg viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => $class]) }}>
    <defs>
        <linearGradient id="aboutGradA" x1="40" y1="40" x2="360" y2="360" gradientUnits="userSpaceOnUse">
            <stop offset="0%" stop-color="#fdba74" />
            <stop offset="50%" stop-color="#f97316" />
            <stop offset="100%" stop-color="#c2410c" />
        </linearGradient>
        <linearGradient id="aboutGradB" x1="360" y1="40" x2="40" y2="360" gradientUnits="userSpaceOnUse">
            <stop offset="0%" stop-color="#71717a" />
            <stop offset="100%" stop-color="#18181b" />
        </linearGradient>
    </defs>

    <!-- overlapping people/team circles -->
    <circle cx="160" cy="210" r="78" fill="url(#aboutGradB)" fill-opacity="0.18" stroke="url(#aboutGradB)" stroke-width="2" stroke-opacity="0.5" />
    <circle cx="245" cy="180" r="78" fill="url(#aboutGradA)" fill-opacity="0.22" stroke="url(#aboutGradA)" stroke-width="2" />

    <!-- connecting link -->
    <circle cx="202" cy="195" r="10" fill="#27272a" />

    <!-- orbit of shared purpose -->
    <circle cx="200" cy="200" r="150" stroke="url(#aboutGradA)" stroke-width="1.5" stroke-opacity="0.25" stroke-dasharray="3 9" />

    <circle cx="90" cy="100" r="6" fill="#fdba74" />
    <circle cx="320" cy="300" r="7" fill="url(#aboutGradA)" />
    <circle cx="330" cy="100" r="4" fill="url(#aboutGradB)" />
</svg>
