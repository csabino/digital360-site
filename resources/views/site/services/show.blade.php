@extends('layouts.site')

@section('title', $service->title . ' · Digital360')
@section('seo_description', $service->excerpt)

@section('content')
    <section class="mx-auto max-w-3xl px-6 py-20">
        <a href="{{ route('services.index') }}" class="text-sm font-medium text-indigo-600">&larr; Voltar para serviços</a>
        <h1 class="mt-4 text-3xl md:text-4xl font-bold tracking-tight text-slate-900">{{ $service->title }}</h1>
        <div class="prose prose-slate mt-8 max-w-none text-slate-700">
            {!! $service->description !!}
        </div>
        <div class="mt-10">
            <a href="{{ route('contact') }}" class="rounded-full bg-indigo-600 px-6 py-3 text-white font-medium hover:bg-indigo-500">Quero falar com um especialista</a>
        </div>
    </section>
@endsection
