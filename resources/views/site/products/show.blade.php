@extends('layouts.site')

@section('title', $product->title . ' · digital360')
@section('seo_description', $product->excerpt)

@section('content')
    <section class="mx-auto max-w-5xl px-6 py-10 min-h-[calc(100vh-5rem)] flex items-center">
        <div class="w-full">
            <a href="{{ route('products.index') }}" class="text-sm font-medium text-orange-500">&larr; Voltar para produtos</a>

            <div class="mt-6 flex flex-col md:flex-row md:items-center gap-8 md:gap-12">
                <div class="w-full md:w-64 aspect-[43/24] mx-auto md:mx-0 shrink-0 rounded-3xl flex items-center justify-center overflow-hidden shadow-lg" style="background-color: {{ card_frame_color() }}">
                    @if ($product->image)
                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->title }}" class="h-full w-full object-cover">
                    @else
                        <x-illustrations.product class="h-28 w-28" />
                    @endif
                </div>

                <div class="text-center md:text-left">
                    <h1 class="text-3xl md:text-4xl font-bold tracking-tight text-zinc-900">{{ $product->title }}</h1>
                    <div class="prose prose-zinc mt-4 max-w-none text-zinc-700">
                        {!! $product->description !!}
                    </div>
                    <div class="mt-6">
                        @if ($product->external_url)
                            <a href="{{ $product->external_url }}" target="_blank" rel="noopener" class="rounded-full bg-orange-500 px-6 py-3 text-white font-semibold hover:bg-orange-600 transition">Conhecer o produto</a>
                        @else
                            <a href="{{ whatsapp_url('Olá! Vim pelo site da digital360, tenho interesse no produto ' . $product->title . '.') }}" target="_blank" rel="noopener" class="rounded-full bg-orange-500 px-6 py-3 text-white font-semibold hover:bg-orange-600 transition">Quero saber mais</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
