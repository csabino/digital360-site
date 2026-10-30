@props(['class' => 'w-full h-auto'])

<svg viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => $class]) }}>
    <defs>
        <linearGradient id="digiGradA" x1="40" y1="40" x2="360" y2="360" gradientUnits="userSpaceOnUse">
            <stop offset="0%" stop-color="#fdba74" />
            <stop offset="50%" stop-color="#f97316" />
            <stop offset="100%" stop-color="#c2410c" />
        </linearGradient>
        <linearGradient id="digiGradB" x1="400" y1="400" x2="0" y2="0" gradientUnits="userSpaceOnUse">
            <stop offset="0%" stop-color="#71717a" />
            <stop offset="100%" stop-color="#18181b" />
        </linearGradient>
    </defs>

    <circle cx="200" cy="200" r="190" fill="white" fill-opacity="0.03" />

    <!-- chip core -->
    <rect x="160" y="160" width="80" height="80" rx="14" stroke="url(#digiGradA)" stroke-width="3" fill="white" fill-opacity="0.04" />
    <rect x="182" y="182" width="36" height="36" rx="6" fill="url(#digiGradA)" />

    <!-- chip pins -->
    <g stroke="url(#digiGradB)" stroke-width="3" stroke-linecap="round" stroke-opacity="0.6">
        <line x1="160" y1="180" x2="120" y2="180" />
        <line x1="160" y1="220" x2="120" y2="220" />
        <line x1="240" y1="180" x2="280" y2="180" />
        <line x1="240" y1="220" x2="280" y2="220" />
        <line x1="180" y1="160" x2="180" y2="120" />
        <line x1="220" y1="160" x2="220" y2="120" />
        <line x1="180" y1="240" x2="180" y2="280" />
        <line x1="220" y1="240" x2="220" y2="280" />
    </g>

    <!-- network nodes -->
    <circle cx="90" cy="150" r="8" fill="url(#digiGradA)" />
    <circle cx="90" cy="150" r="16" stroke="url(#digiGradA)" stroke-width="1.5" stroke-opacity="0.4" />
    <circle cx="310" cy="260" r="8" fill="url(#digiGradA)" />
    <circle cx="310" cy="260" r="16" stroke="url(#digiGradA)" stroke-width="1.5" stroke-opacity="0.4" />
    <circle cx="300" cy="100" r="6" fill="#fdba74" />
    <circle cx="80" cy="300" r="6" fill="#fdba74" />

    <path d="M106 150 H160" stroke="url(#digiGradA)" stroke-width="2" stroke-dasharray="4 6" stroke-opacity="0.6" />
    <path d="M240 260 H294" stroke="url(#digiGradA)" stroke-width="2" stroke-dasharray="4 6" stroke-opacity="0.6" />
</svg>
