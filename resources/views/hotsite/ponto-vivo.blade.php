<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PontoVivo — Escritório virtual com presença em tempo real e auditoria completa</title>
    <meta name="description" content="PontoVivo é o escritório virtual self-hosted que mostra quem está online em tempo real, organiza reuniões com histórico completo e registra tudo com auditoria total — rodando na sua própria infraestrutura.">
    <meta property="og:type" content="website">
    <meta property="og:title" content="PontoVivo — Escritório virtual com presença em tempo real e auditoria completa">
    <meta property="og:description" content="Presença em tempo real, reuniões organizadas e auditoria completa — self-hosted, sem depender de nuvem de terceiros.">
    <meta property="og:url" content="{{ url()->current() }}">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#4338ca">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-slate-800 antialiased">

    {{-- Top bar --}}
    <header class="border-b border-slate-100">
        <div class="mx-auto max-w-6xl px-6 py-5 flex items-center justify-between">
            <span class="flex items-center gap-2 text-xl font-bold tracking-tight text-slate-900">
                <span class="h-2.5 w-2.5 rounded-full bg-emerald-500"></span>
                Ponto<span class="text-indigo-600">Vivo</span>
            </span>
            <a href="{{ whatsapp_url('Olá! Quero saber mais sobre o PontoVivo.') }}" target="_blank" rel="noopener" class="hidden sm:inline-flex rounded-full bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white hover:bg-indigo-700 transition">
                Falar no WhatsApp
            </a>
        </div>
    </header>

    {{-- Hero --}}
    <section class="relative overflow-hidden bg-slate-900 text-white">
        <div class="pointer-events-none absolute -top-24 -left-24 h-96 w-96 rounded-full bg-indigo-500/20 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-32 -right-24 h-96 w-96 rounded-full bg-emerald-500/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-6xl px-6 py-16 md:py-24 grid items-center gap-12 lg:grid-cols-2">
            <div class="text-center lg:text-left">
                <p class="inline-flex items-center gap-2 text-xs md:text-sm font-semibold uppercase tracking-wide text-emerald-400">
                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                    Escritório virtual self-hosted
                </p>
                <h1 class="mt-5 text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight leading-tight">
                    Sua equipe sempre visível. Suas reuniões sempre organizadas. Seus dados sempre seus.
                </h1>
                <p class="mt-6 text-base md:text-lg text-slate-300 max-w-xl mx-auto lg:mx-0">
                    O PontoVivo mostra quem da sua equipe está online em tempo real, organiza reuniões com histórico completo e registra cada ação com auditoria total — tudo rodando na sua própria infraestrutura, sem depender de nuvem de terceiros.
                </p>
                <div class="mt-10 flex flex-col sm:flex-row flex-wrap justify-center lg:justify-start gap-4">
                    <a href="{{ whatsapp_url('Olá! Quero saber mais sobre o PontoVivo.') }}" target="_blank" rel="noopener" class="rounded-full bg-emerald-500 px-6 py-3 text-white font-semibold hover:bg-emerald-600 transition">
                        Falar no WhatsApp
                    </a>
                    <a href="#como-funciona" class="rounded-full border border-slate-600 px-6 py-3 font-medium text-white hover:border-indigo-400 transition">
                        Ver como funciona
                    </a>
                </div>
            </div>

            {{-- CSS mockup of the virtual office panel --}}
            <div class="mx-auto w-full max-w-sm rounded-2xl bg-white text-slate-800 shadow-2xl p-5">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-sm font-semibold text-slate-700">Equipe online</span>
                    <span class="flex items-center gap-1.5 text-xs font-medium text-emerald-600">
                        <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                        12 ativos agora
                    </span>
                </div>

                <div class="space-y-3">
                    <div class="flex items-center gap-3">
                        <div class="relative h-9 w-9 shrink-0 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 text-sm font-semibold">
                            AM
                            <span class="absolute -bottom-0.5 -right-0.5 h-3 w-3 rounded-full bg-emerald-500 ring-2 ring-white"></span>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-slate-800">Ana Martins</p>
                            <p class="text-xs text-slate-500">Online agora</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="relative h-9 w-9 shrink-0 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 text-sm font-semibold">
                            RC
                            <span class="absolute -bottom-0.5 -right-0.5 h-3 w-3 rounded-full bg-blue-500 ring-2 ring-white"></span>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-slate-800">Rafael Costa</p>
                            <p class="text-xs text-slate-500">Em reunião</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="relative h-9 w-9 shrink-0 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 text-sm font-semibold">
                            JL
                            <span class="absolute -bottom-0.5 -right-0.5 h-3 w-3 rounded-full bg-amber-400 ring-2 ring-white"></span>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-slate-800">Juliana Lima</p>
                            <p class="text-xs text-slate-500">Ausente</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4 pt-4 border-t border-slate-100">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide mb-2">Próxima reunião</p>
                    <div class="rounded-lg bg-indigo-50 p-3 flex items-center justify-between">
                        <span class="text-sm text-indigo-700 font-medium">Alinhamento semanal</span>
                        <span class="text-xs text-indigo-500">14:00</span>
                    </div>
                </div>

                <div class="mt-4 pt-4 border-t border-slate-100">
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide mb-2">Log de auditoria</p>
                    <p class="text-xs text-slate-500">Ana Martins acessou o painel às 09:12</p>
                    <p class="text-xs text-slate-500">Rafael Costa entrou na reunião às 09:45</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Benefits --}}
    <section class="mx-auto max-w-6xl px-6 py-16 md:py-24">
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold tracking-tight text-slate-900">Tudo que o seu escritório virtual precisa</h2>
            <p class="mt-4 text-slate-600">Presença, reuniões e auditoria num só lugar — sem depender de ferramentas soltas ou de nuvem de terceiros.</p>
        </div>

        <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <div class="rounded-2xl border border-slate-100 p-6 hover:border-indigo-200 hover:shadow-md transition">
                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="3" fill="currentColor" stroke="none"/></svg>
                </span>
                <h3 class="mt-4 text-lg font-semibold text-slate-900">Presença em tempo real</h3>
                <p class="mt-2 text-sm text-slate-600">Veja instantaneamente quem da equipe está online, ausente ou em reunião, sem precisar perguntar no chat.</p>
            </div>
            <div class="rounded-2xl border border-slate-100 p-6 hover:border-indigo-200 hover:shadow-md transition">
                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-50 text-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="17" rx="2"/><path d="M8 2v4M16 2v4M3 10h18"/></svg>
                </span>
                <h3 class="mt-4 text-lg font-semibold text-slate-900">Reuniões organizadas</h3>
                <p class="mt-2 text-sm text-slate-600">Agenda, histórico e status de cada reunião num só lugar, sem planilha solta ou e-mail perdido.</p>
            </div>
            <div class="rounded-2xl border border-slate-100 p-6 hover:border-indigo-200 hover:shadow-md transition">
                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
                </span>
                <h3 class="mt-4 text-lg font-semibold text-slate-900">Auditoria completa</h3>
                <p class="mt-2 text-sm text-slate-600">Cada acesso, ação e alteração fica registrado — rastreabilidade total quando você precisar explicar o que aconteceu.</p>
            </div>
            <div class="rounded-2xl border border-slate-100 p-6 hover:border-indigo-200 hover:shadow-md transition">
                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-50 text-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>
                </span>
                <h3 class="mt-4 text-lg font-semibold text-slate-900">Self-hosted</h3>
                <p class="mt-2 text-sm text-slate-600">Roda na sua própria infraestrutura. Seus dados nunca saem do seu controle nem dependem de nuvem de terceiros.</p>
            </div>
            <div class="rounded-2xl border border-slate-100 p-6 hover:border-indigo-200 hover:shadow-md transition">
                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h8l-1 8 10-12h-8l1-8z"/></svg>
                </span>
                <h3 class="mt-4 text-lg font-semibold text-slate-900">Implantação rápida</h3>
                <p class="mt-2 text-sm text-slate-600">Suba o sistema e comece a usar em poucas horas, sem contrato longo nem dependência de fornecedor externo.</p>
            </div>
            <div class="rounded-2xl border border-slate-100 p-6 hover:border-indigo-200 hover:shadow-md transition">
                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-50 text-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="10" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                </span>
                <h3 class="mt-4 text-lg font-semibold text-slate-900">Controle de acesso</h3>
                <p class="mt-2 text-sm text-slate-600">Defina quem vê o quê, com permissões por usuário e por equipe.</p>
            </div>
        </div>
    </section>

    {{-- Como funciona --}}
    <section id="como-funciona" class="bg-slate-50 py-16 md:py-24">
        <div class="mx-auto max-w-6xl px-6">
            <div class="text-center max-w-2xl mx-auto">
                <h2 class="text-2xl md:text-3xl font-bold tracking-tight text-slate-900">Como funciona</h2>
                <p class="mt-4 text-slate-600">Do primeiro deploy ao dia a dia da equipe, em quatro passos simples.</p>
            </div>

            <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="text-center lg:text-left">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-indigo-600 text-white font-bold">1</span>
                    <h3 class="mt-4 font-semibold text-slate-900">Instale no seu servidor</h3>
                    <p class="mt-2 text-sm text-slate-600">Self-hosted, sem depender de nuvem de terceiros.</p>
                </div>
                <div class="text-center lg:text-left">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-indigo-600 text-white font-bold">2</span>
                    <h3 class="mt-4 font-semibold text-slate-900">Convide sua equipe</h3>
                    <p class="mt-2 text-sm text-slate-600">Cada colaborador entra com seu próprio acesso.</p>
                </div>
                <div class="text-center lg:text-left">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-indigo-600 text-white font-bold">3</span>
                    <h3 class="mt-4 font-semibold text-slate-900">Acompanhe em tempo real</h3>
                    <p class="mt-2 text-sm text-slate-600">Presença, status e reuniões, tudo ao vivo.</p>
                </div>
                <div class="text-center lg:text-left">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-indigo-600 text-white font-bold">4</span>
                    <h3 class="mt-4 font-semibold text-slate-900">Audite quando precisar</h3>
                    <p class="mt-2 text-sm text-slate-600">Histórico completo de tudo que aconteceu, sempre disponível.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="mx-auto max-w-3xl px-6 py-16 md:py-24">
        <h2 class="text-2xl md:text-3xl font-bold tracking-tight text-slate-900 text-center">Perguntas frequentes</h2>

        <div class="mt-10 space-y-4">
            <details class="group rounded-2xl border border-slate-100 p-5">
                <summary class="flex cursor-pointer items-center justify-between font-medium text-slate-900">
                    Preciso de um servidor próprio para usar o PontoVivo?
                    <span class="ml-4 shrink-0 text-indigo-500 group-open:rotate-45 transition">+</span>
                </summary>
                <p class="mt-3 text-sm text-slate-600">Sim — é exatamente essa a proposta: você instala no seu ambiente e mantém total controle sobre os dados.</p>
            </details>
            <details class="group rounded-2xl border border-slate-100 p-5">
                <summary class="flex cursor-pointer items-center justify-between font-medium text-slate-900">
                    Meus dados ficam seguros?
                    <span class="ml-4 shrink-0 text-indigo-500 group-open:rotate-45 transition">+</span>
                </summary>
                <p class="mt-3 text-sm text-slate-600">Por ser self-hosted, os dados nunca saem da sua infraestrutura — você decide onde ficam armazenados e quem tem acesso.</p>
            </details>
            <details class="group rounded-2xl border border-slate-100 p-5">
                <summary class="flex cursor-pointer items-center justify-between font-medium text-slate-900">
                    Quantos usuários posso cadastrar?
                    <span class="ml-4 shrink-0 text-indigo-500 group-open:rotate-45 transition">+</span>
                </summary>
                <p class="mt-3 text-sm text-slate-600">Não há limite artificial — a capacidade depende apenas do servidor onde o sistema está instalado.</p>
            </details>
            <details class="group rounded-2xl border border-slate-100 p-5">
                <summary class="flex cursor-pointer items-center justify-between font-medium text-slate-900">
                    Como funciona o suporte?
                    <span class="ml-4 shrink-0 text-indigo-500 group-open:rotate-45 transition">+</span>
                </summary>
                <p class="mt-3 text-sm text-slate-600">Fale direto com a equipe pelo WhatsApp — sem fila de chamados nem burocracia.</p>
            </details>
        </div>
    </section>

    {{-- Final CTA --}}
    <section class="bg-slate-900 text-white">
        <div class="mx-auto max-w-4xl px-6 py-16 md:py-20 text-center">
            <h2 class="text-2xl md:text-3xl font-bold tracking-tight">Pronto para ter seu escritório virtual sob controle?</h2>
            <p class="mt-4 text-slate-300 max-w-xl mx-auto">Fale agora com a equipe e veja como o PontoVivo se encaixa na sua operação.</p>
            <div class="mt-8">
                <a href="{{ whatsapp_url('Olá! Quero saber mais sobre o PontoVivo.') }}" target="_blank" rel="noopener" class="inline-flex rounded-full bg-emerald-500 px-8 py-3.5 text-white font-semibold hover:bg-emerald-600 transition">
                    Falar no WhatsApp
                </a>
            </div>
        </div>
    </section>

    <footer class="py-8 text-center text-xs text-slate-400">
        &copy; {{ now()->year }} PontoVivo. Desenvolvido por digital360.
    </footer>

    {{-- Floating WhatsApp button --}}
    <a href="{{ whatsapp_url('Olá! Quero saber mais sobre o PontoVivo.') }}" target="_blank" rel="noopener" aria-label="Falar no WhatsApp" class="fixed bottom-6 right-6 z-50 flex h-14 w-14 items-center justify-center rounded-full bg-emerald-500 text-white shadow-lg hover:bg-emerald-600 transition">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="h-7 w-7" fill="currentColor"><path d="M16.001 3C9.374 3 4 8.373 4 15c0 2.37.693 4.58 1.885 6.44L4 29l7.73-1.838A11.93 11.93 0 0016.001 27C22.627 27 28 21.627 28 15S22.627 3 16.001 3zm0 21.75c-1.98 0-3.823-.58-5.375-1.578l-.386-.242-4.59 1.092 1.113-4.472-.252-.398A9.71 9.71 0 016.25 15c0-5.376 4.374-9.75 9.751-9.75 5.376 0 9.75 4.374 9.75 9.75s-4.374 9.75-9.75 9.75zm5.344-7.302c-.293-.147-1.734-.856-2.003-.953-.269-.098-.465-.147-.66.147-.196.293-.758.953-.93 1.148-.171.196-.343.22-.635.073-.293-.147-1.237-.456-2.357-1.455-.871-.777-1.46-1.737-1.631-2.03-.171-.293-.018-.451.129-.597.133-.132.293-.343.44-.514.147-.172.196-.294.293-.49.098-.196.049-.367-.024-.514-.073-.147-.66-1.59-.904-2.178-.238-.571-.48-.494-.66-.503l-.562-.01c-.196 0-.514.073-.783.367-.269.293-1.026 1.003-1.026 2.446s1.051 2.837 1.198 3.033c.147.196 2.07 3.16 5.016 4.432.701.303 1.248.484 1.675.619.704.224 1.344.192 1.85.117.564-.084 1.734-.709 1.978-1.393.245-.685.245-1.271.172-1.393-.073-.123-.269-.196-.562-.343z"/></svg>
    </a>
</body>
</html>
