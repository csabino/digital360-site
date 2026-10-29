@extends('layouts.site')

@section('title', 'Contato · Digital360')

@section('content')
    <section class="mx-auto max-w-2xl px-6 py-20">
        <h1 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-900 text-center">Fale com a gente</h1>
        <p class="mt-4 text-center text-slate-600">Conte um pouco sobre o seu desafio e retornaremos em breve.</p>

        @if (session('success'))
            <div class="mt-8 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 text-sm">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('contact.store') }}" class="mt-10 space-y-5">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-slate-700">Nome</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                    class="mt-1 w-full rounded-lg border border-slate-200 px-4 py-2.5 focus:border-indigo-400 focus:ring-indigo-400">
                @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700">E-mail</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required
                        class="mt-1 w-full rounded-lg border border-slate-200 px-4 py-2.5 focus:border-indigo-400 focus:ring-indigo-400">
                    @error('email') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-slate-700">Telefone</label>
                    <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                        class="mt-1 w-full rounded-lg border border-slate-200 px-4 py-2.5 focus:border-indigo-400 focus:ring-indigo-400">
                </div>
            </div>

            <div>
                <label for="company" class="block text-sm font-medium text-slate-700">Empresa</label>
                <input type="text" name="company" id="company" value="{{ old('company') }}"
                    class="mt-1 w-full rounded-lg border border-slate-200 px-4 py-2.5 focus:border-indigo-400 focus:ring-indigo-400">
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-slate-700">Mensagem</label>
                <textarea name="message" id="message" rows="5" required
                    class="mt-1 w-full rounded-lg border border-slate-200 px-4 py-2.5 focus:border-indigo-400 focus:ring-indigo-400">{{ old('message') }}</textarea>
                @error('message') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <button type="submit" class="w-full rounded-full bg-indigo-600 px-6 py-3 text-white font-medium hover:bg-indigo-500">
                Enviar mensagem
            </button>
        </form>
    </section>
@endsection
