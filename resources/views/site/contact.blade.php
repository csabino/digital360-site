@extends('layouts.site')

@section('title', 'Contato · digital360')

@section('content')
    <section class="mx-auto max-w-2xl px-6 py-20">
        <h1 class="text-3xl md:text-4xl font-bold tracking-tight text-zinc-900 text-center">Fale com a gente</h1>
        <p class="mt-4 text-center text-zinc-600">Conte um pouco sobre o seu desafio e retornaremos em breve.</p>

        @if (session('success'))
            <div class="mt-8 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 text-sm">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('contact.store') }}" class="mt-10 space-y-5">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-zinc-700">Nome</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                    class="mt-1 w-full rounded-lg border border-zinc-200 px-4 py-2.5 focus:border-orange-400 focus:ring-orange-400">
                @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label for="email" class="block text-sm font-medium text-zinc-700">E-mail</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required
                        class="mt-1 w-full rounded-lg border border-zinc-200 px-4 py-2.5 focus:border-orange-400 focus:ring-orange-400">
                    @error('email') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-zinc-700">Telefone</label>
                    <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                        class="mt-1 w-full rounded-lg border border-zinc-200 px-4 py-2.5 focus:border-orange-400 focus:ring-orange-400">
                </div>
            </div>

            <div>
                <label for="company" class="block text-sm font-medium text-zinc-700">Empresa</label>
                <input type="text" name="company" id="company" value="{{ old('company') }}"
                    class="mt-1 w-full rounded-lg border border-zinc-200 px-4 py-2.5 focus:border-orange-400 focus:ring-orange-400">
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-zinc-700">Mensagem</label>
                <textarea name="message" id="message" rows="5" required
                    class="mt-1 w-full rounded-lg border border-zinc-200 px-4 py-2.5 focus:border-orange-400 focus:ring-orange-400">{{ old('message') }}</textarea>
                @error('message') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <button type="submit" class="w-full rounded-full bg-orange-500 px-6 py-3 text-white font-semibold hover:bg-orange-600 transition">
                Enviar mensagem
            </button>
        </form>
    </section>
@endsection
