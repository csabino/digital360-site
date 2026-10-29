@extends('layouts.site')

@section('title', $page->title . ' · digital360')
@section('seo_description', $page->seo_description)

@section('content')
    <section class="relative overflow-hidden bg-zinc-900 text-white">
        <div class="pointer-events-none absolute -top-24 -right-24 h-96 w-96 rounded-full bg-orange-500/20 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-32 -left-24 h-96 w-96 rounded-full bg-orange-500/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-6xl px-6 pt-24 pb-20 text-center">
            <p class="inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-wide text-orange-400">
                <x-brand-mark class="h-4 w-4" />
                {{ $page->subtitle }}
            </p>
            <h1 class="mt-5 text-4xl md:text-5xl font-bold tracking-tight">{{ $page->title }}</h1>
            <div class="prose prose-invert mx-auto mt-6 max-w-2xl text-lg text-zinc-300">
                {!! $page->content !!}
            </div>
            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <a href="{{ whatsapp_url() }}" target="_blank" rel="noopener" class="rounded-full bg-orange-500 px-6 py-3 text-white font-semibold hover:bg-orange-600 transition">Fale com a gente</a>
                <a href="{{ route('services.index') }}" class="rounded-full border border-zinc-700 px-6 py-3 font-medium text-white hover:border-orange-400 transition">Conheça nossos serviços</a>
            </div>
        </div>
    </section>

    @if ($services->isNotEmpty())
        <section class="mx-auto max-w-6xl px-6 py-20">
            <h2 class="text-2xl font-bold text-zinc-900 text-center mb-10">O que fazemos</h2>
            <div class="grid gap-8 md:grid-cols-3">
                @foreach ($services as $service)
                    <a href="{{ route('services.show', $service->slug) }}" class="group block rounded-2xl border border-zinc-100 p-6 hover:border-orange-300 hover:shadow-md transition">
                        @if ($service->icon)
                            <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-orange-50 text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition">
                                <x-dynamic-component :component="$service->icon" class="h-6 w-6" />
                            </span>
                        @endif
                        <h3 class="mt-4 text-lg font-semibold text-zinc-900">{{ $service->title }}</h3>
                        <p class="mt-2 text-sm text-zinc-600">{{ $service->excerpt }}</p>
                    </a>
                @endforeach
            </div>
        </section>
    @endif
@endsection
