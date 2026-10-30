@extends('layouts.site')

@section('title', 'Produtos · digital360')

@section('content')
    <section class="mx-auto max-w-4xl px-6 py-6 min-h-[calc(100vh-5rem)] flex flex-col justify-center">
        <div class="text-center">
            <h1 class="text-2xl md:text-3xl font-bold tracking-tight text-zinc-900">Nossos produtos</h1>
            <p class="mt-2 text-sm md:text-base text-zinc-600 max-w-xl mx-auto">Soluções digitais desenvolvidas pela digital360 para acelerar os resultados do seu negócio.</p>
        </div>

        @if ($products->isEmpty())
            <p class="mt-10 text-center text-zinc-500">Nenhum produto cadastrado no momento.</p>
        @else
            <div class="mt-8 relative" data-carousel data-interval="{{ product_carousel_seconds() * 1000 }}">
                <div class="overflow-hidden rounded-3xl">
                    <div class="flex transition-transform duration-500 ease-in-out" data-carousel-track>
                        @foreach ($products as $product)
                            <a href="{{ route('products.show', $product->slug) }}" class="group flex w-full shrink-0 flex-col md:flex-row items-center gap-6 md:gap-10 rounded-3xl border border-zinc-100 p-6 md:p-10 hover:border-orange-300 hover:shadow-md transition">
                                <div class="w-full md:w-72 aspect-[43/24] shrink-0 rounded-2xl flex items-center justify-center overflow-hidden" style="background-color: {{ card_frame_color() }}">
                                    @if ($product->image)
                                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->title }}" class="h-full w-full object-cover">
                                    @else
                                        <x-illustrations.product class="h-24 w-24" />
                                    @endif
                                </div>
                                <div class="text-center md:text-left">
                                    <h2 class="text-xl md:text-2xl font-semibold text-zinc-900">{{ $product->title }}</h2>
                                    <p class="mt-3 text-zinc-600">{{ $product->excerpt }}</p>
                                    <span class="mt-4 inline-block text-sm font-medium text-orange-500">Saiba mais →</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                @if ($products->count() > 1)
                    <button type="button" data-carousel-prev aria-label="Produto anterior" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-2 md:-translate-x-5 h-10 w-10 rounded-full bg-white shadow-md border border-zinc-100 flex items-center justify-center text-zinc-600 hover:text-orange-500 hover:border-orange-300 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 010 1.06L9.06 10l3.73 3.71a.75.75 0 11-1.06 1.06l-4.25-4.25a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 0z" clip-rule="evenodd" /></svg>
                    </button>
                    <button type="button" data-carousel-next aria-label="Próximo produto" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-2 md:translate-x-5 h-10 w-10 rounded-full bg-white shadow-md border border-zinc-100 flex items-center justify-center text-zinc-600 hover:text-orange-500 hover:border-orange-300 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 010-1.06L10.94 10 7.21 6.29a.75.75 0 111.06-1.06l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06 0z" clip-rule="evenodd" /></svg>
                    </button>

                    <div class="mt-6 flex justify-center gap-2" data-carousel-dots>
                        @foreach ($products as $i => $product)
                            <button type="button" data-carousel-dot="{{ $i }}" aria-label="Ir para {{ $product->title }}" class="h-2 w-2 rounded-full bg-zinc-300 transition"></button>
                        @endforeach
                    </div>
                @endif
            </div>
        @endif
    </section>
@endsection
