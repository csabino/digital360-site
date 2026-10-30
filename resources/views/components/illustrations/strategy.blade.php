@props(['class' => 'w-full h-auto'])

<svg viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => $class]) }}>
    <defs>
        <linearGradient id="stratGradA" x1="40" y1="360" x2="360" y2="40" gradientUnits="userSpaceOnUse">
            <stop offset="0%" stop-color="#fdba74" />
            <stop offset="50%" stop-color="#f97316" />
            <stop offset="100%" stop-color="#c2410c" />
        </linearGradient>
        <linearGradient id="stratGradB" x1="0" y1="400" x2="400" y2="0" gradientUnits="userSpaceOnUse">
            <stop offset="0%" stop-color="#52525b" />
            <stop offset="100%" stop-color="#18181b" />
        </linearGradient>
    </defs>

    <circle cx="200" cy="200" r="190" fill="white" fill-opacity="0.03" />

    <!-- target rings -->
    <circle cx="290" cy="110" r="70" stroke="url(#stratGradB)" stroke-width="1.5" stroke-opacity="0.25" />
    <circle cx="290" cy="110" r="46" stroke="url(#stratGradA)" stroke-width="2" stroke-opacity="0.5" />
    <circle cx="290" cy="110" r="22" fill="url(#stratGradA)" />
    <circle cx="290" cy="110" r="8" fill="white" fill-opacity="0.9" />

    <!-- rising bars -->
    <g>
        <rect x="60" y="260" width="34" height="80" rx="6" fill="url(#stratGradB)" fill-opacity="0.5" />
        <rect x="110" y="220" width="34" height="120" rx="6" fill="url(#stratGradB)" fill-opacity="0.7" />
        <rect x="160" y="170" width="34" height="170" rx="6" fill="url(#stratGradA)" />
        <rect x="210" y="130" width="34" height="210" rx="6" fill="url(#stratGradA)" />
    </g>

    <!-- trend line with arrow -->
    <path d="M60 300 L120 260 L170 230 L227 140" stroke="white" stroke-width="3" stroke-linecap="round" stroke-opacity="0.85" />
    <path d="M205 150 L227 140 L220 164" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-opacity="0.85" />

    <circle cx="340" cy="330" r="5" fill="url(#stratGradA)" />
    <circle cx="70" cy="90" r="4" fill="#fdba74" />
</svg>
