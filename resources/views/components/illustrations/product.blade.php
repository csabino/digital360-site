@props(['class' => 'w-full h-auto'])

<svg viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => $class]) }}>
    <defs>
        <linearGradient id="prodGradA" x1="40" y1="360" x2="360" y2="40" gradientUnits="userSpaceOnUse">
            <stop offset="0%" stop-color="#fdba74" />
            <stop offset="50%" stop-color="#f97316" />
            <stop offset="100%" stop-color="#c2410c" />
        </linearGradient>
        <linearGradient id="prodGradB" x1="0" y1="400" x2="400" y2="0" gradientUnits="userSpaceOnUse">
            <stop offset="0%" stop-color="#71717a" />
            <stop offset="100%" stop-color="#18181b" />
        </linearGradient>
    </defs>

    <circle cx="200" cy="200" r="190" fill="white" fill-opacity="0.03" />

    <!-- orbit path -->
    <circle cx="200" cy="200" r="140" stroke="url(#prodGradB)" stroke-width="1.5" stroke-opacity="0.3" stroke-dasharray="3 9" />

    <!-- rocket body -->
    <g transform="rotate(45 200 200)">
        <path d="M200 110 C225 150 230 210 200 260 C170 210 175 150 200 110 Z" fill="url(#prodGradA)" />
        <circle cx="200" cy="165" r="12" fill="white" fill-opacity="0.85" />
        <path d="M182 230 L160 270 L192 252 Z" fill="url(#prodGradB)" />
        <path d="M218 230 L240 270 L208 252 Z" fill="url(#prodGradB)" />
        <path d="M192 255 C196 280 204 280 208 255 Z" fill="#fdba74" />
    </g>

    <!-- motion trail sparkles -->
    <circle cx="300" cy="100" r="6" fill="#fdba74" />
    <circle cx="320" cy="140" r="4" fill="url(#prodGradA)" />
    <circle cx="90" cy="300" r="5" fill="url(#prodGradB)" />
    <circle cx="110" cy="260" r="3" fill="#fdba74" />
</svg>
