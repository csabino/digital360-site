@extends('layouts.site')

@section('title', $page->title . ' · digital360')
@section('seo_description', $page->seo_description)

@section('content')
    <section class="relative overflow-hidden bg-zinc-900 text-white">
        <div class="pointer-events-none absolute -top-24 -right-24 h-96 w-96 rounded-full bg-orange-500/20 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-32 -left-24 h-96 w-96 rounded-full bg-orange-500/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-6xl px-6 py-20 grid items-center gap-12 lg:grid-cols-2">
            <div>
                <p class="inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-wide text-orange-400">
                    <x-brand-mark class="h-4 w-4" />
                    {{ $page->subtitle }}
                </p>
                <h1 class="mt-5 text-4xl md:text-5xl font-bold tracking-tight">{{ $page->title }}</h1>
                <div class="prose prose-invert mt-6 max-w-xl text-lg text-zinc-300">
                    {!! $page->content !!}
                </div>
                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="{{ whatsapp_url() }}" target="_blank" rel="noopener" class="rounded-full bg-orange-500 px-6 py-3 text-white font-semibold hover:bg-orange-600 transition">Fale com a gente</a>
                    <a href="{{ route('services.index') }}" class="rounded-full border border-zinc-700 px-6 py-3 font-medium text-white hover:border-orange-400 transition">Conheça nossos serviços</a>
                </div>
            </div>

            <div class="order-first lg:order-last">
                @if ($page->image)
                    <img src="{{ Storage::url($page->image) }}" alt="{{ $page->title }}" class="w-full rounded-3xl object-cover aspect-square lg:aspect-[4/3] shadow-2xl">
                @else
                    <x-hero-illustration class="w-full max-w-md mx-auto" />
                @endif
            </div>
        </div>
    </section>

    @if ($services->isNotEmpty())
        <section class="mx-auto max-w-6xl px-6 py-20">
            <h2 class="text-2xl font-bold text-zinc-900 text-center mb-10">O que fazemos</h2>
            <div class="flex flex-wrap justify-center gap-8">
                @foreach ($services as $service)
                    <a href="{{ route('services.show', $service->slug) }}" data-match-height="home-services-cards" class="group flex flex-col w-full md:w-[calc((100%-4rem)/3)] overflow-hidden rounded-2xl border border-zinc-100 hover:border-orange-300 hover:shadow-md transition">
                        <div class="h-40 w-full shrink-0 bg-zinc-900 flex items-center justify-center overflow-hidden">
                            @if ($service->image)
                                <img src="{{ Storage::url($service->image) }}" alt="{{ $service->title }}" class="max-h-full max-w-full object-contain">
                            @else
                                <x-service-illustration :slug="$service->slug" class="h-56 w-56" />
                            @endif
                        </div>
                        <div class="p-6 flex flex-col flex-1">
                            @if ($service->icon)
                                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-orange-50 text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition">
                                    <x-dynamic-component :component="$service->icon" class="h-6 w-6" />
                                </span>
                            @endif
                            <h3 class="mt-4 text-lg font-semibold text-zinc-900">{{ $service->title }}</h3>
                            <p class="mt-2 text-sm text-zinc-600">{{ $service->excerpt }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    @endif
@endsection
