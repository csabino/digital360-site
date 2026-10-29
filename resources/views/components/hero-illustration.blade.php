@props(['class' => 'w-full h-auto'])

<svg viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => $class]) }}>
    <defs>
        <linearGradient id="heroGradA" x1="40" y1="40" x2="360" y2="360" gradientUnits="userSpaceOnUse">
            <stop offset="0%" stop-color="#fdba74" />
            <stop offset="50%" stop-color="#f97316" />
            <stop offset="100%" stop-color="#c2410c" />
        </linearGradient>
        <linearGradient id="heroGradB" x1="400" y1="0" x2="0" y2="400" gradientUnits="userSpaceOnUse">
            <stop offset="0%" stop-color="#fb923c" />
            <stop offset="100%" stop-color="#7c2d12" />
        </linearGradient>
    </defs>

    <circle cx="200" cy="200" r="190" fill="white" fill-opacity="0.03" />

    <circle cx="200" cy="200" r="150" stroke="url(#heroGradA)" stroke-width="2" stroke-opacity="0.35" />
    <circle cx="200" cy="200" r="150" stroke="url(#heroGradA)" stroke-width="10" stroke-linecap="round" stroke-dasharray="260 680" transform="rotate(-90 200 200)" />

    <circle cx="200" cy="200" r="105" stroke="url(#heroGradB)" stroke-width="1.5" stroke-opacity="0.3" stroke-dasharray="4 8" />

    <circle cx="200" cy="200" r="70" stroke="url(#heroGradB)" stroke-width="6" stroke-linecap="round" stroke-dasharray="130 340" transform="rotate(60 200 200)" />

    <circle cx="200" cy="50" r="8" fill="url(#heroGradA)" />
    <circle cx="315" cy="265" r="5" fill="url(#heroGradB)" />
    <circle cx="130" cy="130" r="4" fill="#fdba74" />
    <circle cx="200" cy="200" r="14" fill="url(#heroGradA)" />
</svg>
