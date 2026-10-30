<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'digital360 · Consultoria')</title>
    <meta name="description" content="@yield('seo_description', 'digital360 — consultoria especializada em estratégia, tecnologia e transformação digital.')">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#18181b">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-zinc-800 antialiased">
    <header class="border-b border-zinc-100">
        <div class="mx-auto max-w-6xl px-6 py-5 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center gap-2.5 text-xl font-bold tracking-tight text-zinc-900">
                <x-brand-mark class="h-7 w-7 shrink-0" />
                <span>digital<span class="text-orange-500">360</span></span>
            </a>
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-zinc-600">
                <a href="{{ route('home') }}" class="hover:text-orange-500 {{ request()->routeIs('home') ? 'text-orange-500' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="hover:text-orange-500 {{ request()->routeIs('about') ? 'text-orange-500' : '' }}">Sobre</a>
                <a href="{{ route('services.index') }}" class="hover:text-orange-500 {{ request()->routeIs('services.*') ? 'text-orange-500' : '' }}">Serviços</a>
                <a href="{{ route('products.index') }}" class="hover:text-orange-500 {{ request()->routeIs('products.*') ? 'text-orange-500' : '' }}">Produtos</a>
                <a href="{{ whatsapp_url() }}" target="_blank" rel="noopener" class="rounded-full bg-orange-500 px-4 py-2 text-white font-semibold hover:bg-orange-600 transition">Fale com a gente</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="mt-24 bg-zinc-900 text-zinc-400">
        <div class="mx-auto max-w-6xl px-6 py-12">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <a href="{{ route('home') }}" class="flex items-center gap-2.5 text-lg font-bold tracking-tight text-white">
                    <x-brand-mark class="h-6 w-6 shrink-0" />
                    <span>digital<span class="text-orange-500">360</span></span>
                </a>
                <div class="flex gap-6 text-sm">
                    <a href="{{ route('about') }}" class="hover:text-orange-400">Sobre</a>
                    <a href="{{ route('services.index') }}" class="hover:text-orange-400">Serviços</a>
                    <a href="{{ route('products.index') }}" class="hover:text-orange-400">Produtos</a>
                    <a href="{{ whatsapp_url() }}" target="_blank" rel="noopener" class="hover:text-orange-400">Contato</a>
                </div>
            </div>
            <p class="mt-8 border-t border-zinc-800 pt-6 text-xs text-zinc-500 text-center md:text-left">
                &copy; {{ now()->year }} digital360. Todos os direitos reservados.
            </p>
        </div>
    </footer>
</body>
</html>
