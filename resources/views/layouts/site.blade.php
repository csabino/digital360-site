<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Digital360 Consultoria')</title>
    <meta name="description" content="@yield('seo_description', 'Digital360 — consultoria especializada em estratégia, tecnologia e transformação digital.')">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-slate-800 antialiased">
    <header class="border-b border-slate-100">
        <div class="mx-auto max-w-6xl px-6 py-5 flex items-center justify-between">
            <a href="{{ route('home') }}" class="text-xl font-bold tracking-tight text-slate-900">
                Digital<span class="text-indigo-600">360</span>
            </a>
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-600">
                <a href="{{ route('home') }}" class="hover:text-indigo-600 {{ request()->routeIs('home') ? 'text-indigo-600' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="hover:text-indigo-600 {{ request()->routeIs('about') ? 'text-indigo-600' : '' }}">Sobre</a>
                <a href="{{ route('services.index') }}" class="hover:text-indigo-600 {{ request()->routeIs('services.*') ? 'text-indigo-600' : '' }}">Serviços</a>
                <a href="{{ route('contact') }}" class="rounded-full bg-indigo-600 px-4 py-2 text-white hover:bg-indigo-500">Fale com a gente</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="border-t border-slate-100 mt-24">
        <div class="mx-auto max-w-6xl px-6 py-10 flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-slate-500">
            <p>&copy; {{ now()->year }} Digital360. Todos os direitos reservados.</p>
            <div class="flex gap-6">
                <a href="{{ route('about') }}" class="hover:text-indigo-600">Sobre</a>
                <a href="{{ route('services.index') }}" class="hover:text-indigo-600">Serviços</a>
                <a href="{{ route('contact') }}" class="hover:text-indigo-600">Contato</a>
            </div>
        </div>
    </footer>
</body>
</html>
