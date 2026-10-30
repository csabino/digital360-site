@extends('layouts.site')

@section('title', $product->title . ' · digital360')
@section('seo_description', $product->excerpt)

@section('content')
    <section class="mx-auto max-w-3xl px-6 py-20">
        <a href="{{ route('products.index') }}" class="text-sm font-medium text-orange-500">&larr; Voltar para produtos</a>

        <div class="mt-6 w-full h-80 rounded-3xl flex items-center justify-center overflow-hidden shadow-lg" style="background-color: {{ card_frame_color() }}">
            @if ($product->image)
                <img src="{{ Storage::url($product->image) }}" alt="{{ $product->title }}" class="max-h-full max-w-full object-contain">
            @else
                <x-illustrations.product class="h-72 w-72" />
            @endif
        </div>

        <h1 class="mt-6 text-3xl md:text-4xl font-bold tracking-tight text-zinc-900">{{ $product->title }}</h1>
        <div class="prose prose-zinc mt-8 max-w-none text-zinc-700">
            {!! $product->description !!}
        </div>
        <div class="mt-10">
            @if ($product->external_url)
                <a href="{{ $product->external_url }}" target="_blank" rel="noopener" class="rounded-full bg-orange-500 px-6 py-3 text-white font-semibold hover:bg-orange-600 transition">Conhecer o produto</a>
            @else
                <a href="{{ whatsapp_url('Olá! Vim pelo site da digital360, tenho interesse no produto ' . $product->title . '.') }}" target="_blank" rel="noopener" class="rounded-full bg-orange-500 px-6 py-3 text-white font-semibold hover:bg-orange-600 transition">Quero saber mais</a>
            @endif
        </div>
    </section>
@endsection
