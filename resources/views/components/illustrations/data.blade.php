@props(['class' => 'w-full h-auto'])

<svg viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => $class]) }}>
    <defs>
        <linearGradient id="dataGradA" x1="40" y1="360" x2="360" y2="40" gradientUnits="userSpaceOnUse">
            <stop offset="0%" stop-color="#fdba74" />
            <stop offset="50%" stop-color="#f97316" />
            <stop offset="100%" stop-color="#c2410c" />
        </linearGradient>
        <linearGradient id="dataGradB" x1="0" y1="0" x2="400" y2="400" gradientUnits="userSpaceOnUse">
            <stop offset="0%" stop-color="#52525b" />
            <stop offset="100%" stop-color="#18181b" />
        </linearGradient>
    </defs>

    <!-- grid baseline -->
    <line x1="60" y1="310" x2="340" y2="310" stroke="url(#dataGradB)" stroke-width="2" stroke-opacity="0.4" />
    <line x1="60" y1="310" x2="60" y2="90" stroke="url(#dataGradB)" stroke-width="2" stroke-opacity="0.4" />

    <!-- ascending line chart -->
    <path d="M70 270 L140 230 L200 250 L260 160 L330 110" stroke="url(#dataGradA)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" />
    <path d="M70 270 L140 230 L200 250 L260 160 L330 110 L330 310 L70 310 Z" fill="url(#dataGradA)" fill-opacity="0.08" />

    <circle cx="70" cy="270" r="6" fill="#27272a" />
    <circle cx="140" cy="230" r="6" fill="#27272a" />
    <circle cx="200" cy="250" r="6" fill="#27272a" />
    <circle cx="260" cy="160" r="7" fill="url(#dataGradA)" />
    <circle cx="330" cy="110" r="9" fill="url(#dataGradA)" />
    <circle cx="330" cy="110" r="16" stroke="url(#dataGradA)" stroke-width="1.5" stroke-opacity="0.45" />

    <!-- floating data dots -->
    <circle cx="100" cy="120" r="4" fill="#fdba74" />
    <circle cx="300" cy="300" r="5" fill="url(#dataGradB)" />
</svg>
