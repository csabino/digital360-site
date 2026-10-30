@extends('layouts.site')

@section('title', $page->title . ' · digital360')
@section('seo_description', $page->seo_description)

@section('content')
    <section class="mx-auto max-w-6xl px-6 py-20 grid items-center gap-12 lg:grid-cols-2">
        <div>
            <p class="text-sm font-semibold uppercase tracking-wide text-orange-500">{{ $page->subtitle }}</p>
            <h1 class="mt-4 text-3xl md:text-4xl font-bold tracking-tight text-zinc-900">{{ $page->title }}</h1>
            <div class="prose prose-zinc mt-8 max-w-none text-zinc-700">
                {!! $page->content !!}
            </div>
        </div>

        <div>
            @if ($page->image)
                <img src="{{ Storage::url($page->image) }}" alt="{{ $page->title }}" class="w-full rounded-3xl object-cover aspect-square lg:aspect-[4/3] shadow-lg">
            @else
                <x-illustrations.about class="w-full max-w-md mx-auto" />
            @endif
        </div>
    </section>
@endsection
