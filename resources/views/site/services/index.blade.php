@extends('layouts.site')

@section('title', 'Serviços · Digital360')

@section('content')
    <section class="mx-auto max-w-6xl px-6 py-20">
        <h1 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-900 text-center">Nossos serviços</h1>
        <p class="mt-4 text-center text-slate-600 max-w-2xl mx-auto">Soluções de consultoria pensadas para cada etapa da jornada da sua empresa.</p>

        <div class="mt-14 grid gap-8 md:grid-cols-3">
            @foreach ($services as $service)
                <a href="{{ route('services.show', $service->slug) }}" class="block rounded-2xl border border-slate-100 p-6 hover:border-indigo-200 hover:shadow-sm transition">
                    <h2 class="text-lg font-semibold text-slate-900">{{ $service->title }}</h2>
                    <p class="mt-2 text-sm text-slate-600">{{ $service->excerpt }}</p>
                    <span class="mt-4 inline-block text-sm font-medium text-indigo-600">Saiba mais →</span>
                </a>
            @endforeach
        </div>
    </section>
@endsection
