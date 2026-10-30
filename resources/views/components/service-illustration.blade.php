@props(['slug' => null, 'class' => 'w-full h-auto'])

@php
    $map = [
        'estrategia-e-planejamento' => 'illustrations.strategy',
        'transformacao-digital' => 'illustrations.digital',
        'dados-e-performance' => 'illustrations.data',
    ];
    $component = $map[$slug] ?? 'hero-illustration';
@endphp

<x-dynamic-component :component="$component" :class="$class" />
