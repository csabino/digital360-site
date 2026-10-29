@extends('layouts.site')

@section('title', $service->title . ' · digital360')
@section('seo_description', $service->excerpt)

@section('content')
    <section class="mx-auto max-w-3xl px-6 py-20">
        <a href="{{ route('services.index') }}" class="text-sm font-medium text-orange-500">&larr; Voltar para serviços</a>

        @if ($service->image)
            <img src="{{ Storage::url($service->image) }}" alt="{{ $service->title }}" class="mt-6 w-full rounded-3xl object-cover max-h-80 shadow-lg">
        @endif

        @if ($service->icon)
            <span class="mt-6 inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-orange-50 text-orange-500">
                <x-dynamic-component :component="$service->icon" class="h-7 w-7" />
            </span>
        @endif

        <h1 class="mt-4 text-3xl md:text-4xl font-bold tracking-tight text-zinc-900">{{ $service->title }}</h1>
        <div class="prose prose-zinc mt-8 max-w-none text-zinc-700">
            {!! $service->description !!}
        </div>
        <div class="mt-10">
            <a href="{{ whatsapp_url('Olá! Vim pelo site da digital360, tenho interesse em ' . $service->title . '.') }}" target="_blank" rel="noopener" class="rounded-full bg-orange-500 px-6 py-3 text-white font-semibold hover:bg-orange-600 transition">Quero falar com um especialista</a>
        </div>
    </section>
@endsection
