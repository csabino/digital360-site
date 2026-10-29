@extends('layouts.site')

@section('title', $page->title . ' · digital360')
@section('seo_description', $page->seo_description)

@section('content')
    <section class="mx-auto max-w-3xl px-6 py-20">
        <p class="text-sm font-semibold uppercase tracking-wide text-orange-500">{{ $page->subtitle }}</p>
        <h1 class="mt-4 text-3xl md:text-4xl font-bold tracking-tight text-zinc-900">{{ $page->title }}</h1>
        <div class="prose prose-zinc mt-8 max-w-none text-zinc-700">
            {!! $page->content !!}
        </div>
    </section>
@endsection
