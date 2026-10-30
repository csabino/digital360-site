@extends('layouts.site')

@section('title', 'Serviços · digital360')

@section('content')
    <section class="mx-auto max-w-6xl px-6 py-20">
        <h1 class="text-3xl md:text-4xl font-bold tracking-tight text-zinc-900 text-center">Nossos serviços</h1>
        <p class="mt-4 text-center text-zinc-600 max-w-2xl mx-auto">Soluções de consultoria pensadas para cada etapa da jornada da sua empresa.</p>

        <div class="mt-14 flex flex-wrap justify-center gap-8">
            @foreach ($services as $service)
                <a href="{{ route('services.show', $service->slug) }}" class="group block w-full md:w-[calc((100%-4rem)/3)] overflow-hidden rounded-2xl border border-zinc-100 hover:border-orange-300 hover:shadow-md transition">
                    @if ($service->image)
                        <img src="{{ Storage::url($service->image) }}" alt="{{ $service->title }}" class="h-40 w-full object-cover">
                    @else
                        <div class="h-40 w-full bg-zinc-900 flex items-center justify-center overflow-hidden">
                            <x-service-illustration :slug="$service->slug" class="h-56 w-56" />
                        </div>
                    @endif
                    <div class="p-6">
                        @if ($service->icon)
                            <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-orange-50 text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition">
                                <x-dynamic-component :component="$service->icon" class="h-6 w-6" />
                            </span>
                        @endif
                        <h2 class="mt-4 text-lg font-semibold text-zinc-900">{{ $service->title }}</h2>
                        <p class="mt-2 text-sm text-zinc-600">{{ $service->excerpt }}</p>
                        <span class="mt-4 inline-block text-sm font-medium text-orange-500">Saiba mais →</span>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
