@extends('layouts.site')

@section('title', 'Produtos · digital360')

@section('content')
    <section class="mx-auto max-w-6xl px-6 py-20">
        <h1 class="text-3xl md:text-4xl font-bold tracking-tight text-zinc-900 text-center">Nossos produtos</h1>
        <p class="mt-4 text-center text-zinc-600 max-w-2xl mx-auto">Soluções digitais desenvolvidas pela digital360 para acelerar os resultados do seu negócio.</p>

        <div class="mt-14 flex flex-wrap justify-center gap-8">
            @foreach ($products as $product)
                <a href="{{ route('products.show', $product->slug) }}" class="group block w-full md:w-[calc((100%-4rem)/3)] overflow-hidden rounded-2xl border border-zinc-100 hover:border-orange-300 hover:shadow-md transition">
                    @if ($product->image)
                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->title }}" class="h-40 w-full object-cover">
                    @else
                        <div class="h-40 w-full bg-zinc-900 flex items-center justify-center overflow-hidden">
                            <x-illustrations.product class="h-56 w-56" />
                        </div>
                    @endif
                    <div class="p-6">
                        <h2 class="text-lg font-semibold text-zinc-900">{{ $product->title }}</h2>
                        <p class="mt-2 text-sm text-zinc-600">{{ $product->excerpt }}</p>
                        <span class="mt-4 inline-block text-sm font-medium text-orange-500">Saiba mais →</span>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
