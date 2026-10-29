@extends('layouts.site')

@section('title', $page->title . ' · Digital360')
@section('seo_description', $page->seo_description)

@section('content')
    <section class="mx-auto max-w-6xl px-6 pt-20 pb-16 text-center">
        <p class="text-sm font-semibold uppercase tracking-wide text-indigo-600">{{ $page->subtitle }}</p>
        <h1 class="mt-4 text-4xl md:text-5xl font-bold tracking-tight text-slate-900">{{ $page->title }}</h1>
        <div class="prose prose-slate mx-auto mt-6 max-w-2xl text-lg text-slate-600">
            {!! $page->content !!}
        </div>
        <div class="mt-10 flex justify-center gap-4">
            <a href="{{ route('contact') }}" class="rounded-full bg-indigo-600 px-6 py-3 text-white font-medium hover:bg-indigo-500">Fale com a gente</a>
            <a href="{{ route('services.index') }}" class="rounded-full border border-slate-200 px-6 py-3 font-medium text-slate-700 hover:border-indigo-300">Conheça nossos serviços</a>
        </div>
    </section>

    @if ($services->isNotEmpty())
        <section class="mx-auto max-w-6xl px-6 pb-24">
            <h2 class="text-2xl font-bold text-slate-900 text-center mb-10">O que fazemos</h2>
            <div class="grid gap-8 md:grid-cols-3">
                @foreach ($services as $service)
                    <a href="{{ route('services.show', $service->slug) }}" class="block rounded-2xl border border-slate-100 p-6 hover:border-indigo-200 hover:shadow-sm transition">
                        <h3 class="text-lg font-semibold text-slate-900">{{ $service->title }}</h3>
                        <p class="mt-2 text-sm text-slate-600">{{ $service->excerpt }}</p>
                    </a>
                @endforeach
            </div>
        </section>
    @endif
@endsection
