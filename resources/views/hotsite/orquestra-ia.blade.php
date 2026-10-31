<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Orquestra IA — Seu WhatsApp atendendo e vendendo sozinho</title>
    <meta name="description" content="O Orquestra IA conecta múltiplos assistentes de Inteligência Artificial ao seu WhatsApp pra atender, agendar e vender — enquanto você foca no resto do negócio.">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Orquestra IA — Seu WhatsApp atendendo e vendendo sozinho">
    <meta property="og:description" content="Múltiplos assistentes de IA, cada um com seu número, personalidade e base de conhecimento. Atendimento, agendamento e campanhas, sem perder um lead.">
    <meta property="og:url" content="{{ url()->current() }}">
    <link rel="icon" type="image/svg+xml" href="/orquestra-ia-favicon.svg">
    <meta name="theme-color" content="#7c3aed">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-slate-800 antialiased">

    {{-- Top bar --}}
    <header class="border-b border-slate-100">
        <div class="mx-auto max-w-6xl px-6 py-5 flex items-center justify-between">
            <span class="flex items-center gap-2 text-xl font-bold tracking-tight text-slate-900">
                <span class="flex h-7 w-7 items-center justify-center rounded-lg bg-violet-600 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                        <g stroke="currentColor" stroke-width="1.3" stroke-linecap="round" opacity="0.85">
                            <line x1="12" y1="12" x2="12" y2="4.5" /><line x1="12" y1="12" x2="18.5" y2="8.3" /><line x1="12" y1="12" x2="18.5" y2="15.7" />
                            <line x1="12" y1="12" x2="12" y2="19.5" /><line x1="12" y1="12" x2="5.5" y2="15.7" /><line x1="12" y1="12" x2="5.5" y2="8.3" />
                        </g>
                        <circle cx="12" cy="4.5" r="1.6" /><circle cx="18.5" cy="8.3" r="1.6" /><circle cx="18.5" cy="15.7" r="1.6" />
                        <circle cx="12" cy="19.5" r="1.6" /><circle cx="5.5" cy="15.7" r="1.6" /><circle cx="5.5" cy="8.3" r="1.6" />
                        <circle cx="12" cy="12" r="3" />
                    </svg>
                </span>
                <span>Orquestra<span class="text-violet-600">IA</span></span>
            </span>
            <a href="{{ whatsapp_url('Quero saber mais sobre o Orquestra IA.') }}" target="_blank" rel="noopener" class="hidden sm:inline-flex rounded-full bg-emerald-500 px-5 py-2.5 text-sm font-semibold text-white hover:bg-emerald-600 transition">
                Fale com a gente no WhatsApp
            </a>
        </div>
    </header>

    {{-- Hero --}}
    <section class="relative overflow-hidden bg-slate-900 text-white">
        <div class="pointer-events-none absolute -top-24 -left-24 h-96 w-96 rounded-full bg-violet-500/20 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-32 -right-24 h-96 w-96 rounded-full bg-emerald-500/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-4xl px-6 pt-16 md:pt-24 text-center">
            <p class="inline-flex items-center gap-2 text-xs md:text-sm font-semibold uppercase tracking-wide text-violet-300">
                <span class="h-1.5 w-1.5 rounded-full bg-violet-300"></span>
                Atendimento com IA no WhatsApp
            </p>
            <h1 class="mt-5 text-3xl sm:text-4xl md:text-5xl font-bold tracking-tight leading-tight">
                Seu WhatsApp, atendendo e vendendo sozinho — com a IA certa, não um robô genérico.
            </h1>
            <p class="mt-6 text-base md:text-lg text-slate-300 max-w-2xl mx-auto">
                O Orquestra IA conecta múltiplos assistentes de Inteligência Artificial ao seu WhatsApp pra atender, agendar e vender — enquanto você foca no resto do negócio.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row flex-wrap justify-center gap-4">
                <a href="{{ whatsapp_url('Quero saber mais sobre o Orquestra IA.') }}" target="_blank" rel="noopener" class="rounded-full bg-emerald-500 px-6 py-3 text-white font-semibold hover:bg-emerald-600 transition">
                    Fale com a gente no WhatsApp
                </a>
                <a href="#funcionalidades" class="rounded-full border border-slate-600 px-6 py-3 font-medium text-white hover:border-violet-400 transition">
                    Ver funcionalidades
                </a>
            </div>
        </div>

        {{-- CSS mockup of the assistants panel --}}
        <div class="relative mx-auto max-w-5xl px-6 pb-16 md:pb-24 pt-12">
            <div class="rounded-2xl bg-slate-950 shadow-2xl ring-1 ring-white/10 overflow-hidden text-left">
                <div class="flex items-center justify-between px-5 py-4 border-b border-white/10">
                    <span class="flex items-center gap-2 text-sm font-bold text-white">
                        <span class="flex h-6 w-6 items-center justify-center rounded-md bg-violet-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 text-white" viewBox="0 0 24 24" fill="currentColor">
                                <g stroke="currentColor" stroke-width="1.3" stroke-linecap="round" opacity="0.85">
                                    <line x1="12" y1="12" x2="12" y2="4.5" /><line x1="12" y1="12" x2="18.5" y2="8.3" /><line x1="12" y1="12" x2="18.5" y2="15.7" />
                                    <line x1="12" y1="12" x2="12" y2="19.5" /><line x1="12" y1="12" x2="5.5" y2="15.7" /><line x1="12" y1="12" x2="5.5" y2="8.3" />
                                </g>
                                <circle cx="12" cy="4.5" r="1.6" /><circle cx="18.5" cy="8.3" r="1.6" /><circle cx="18.5" cy="15.7" r="1.6" />
                                <circle cx="12" cy="19.5" r="1.6" /><circle cx="5.5" cy="15.7" r="1.6" /><circle cx="5.5" cy="8.3" r="1.6" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                        </span>
                        <span>Painel de Assistentes</span>
                    </span>
                    <span class="flex items-center gap-2 text-xs text-slate-400">
                        5 de 5 ativos
                        <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                    </span>
                </div>

                <div class="grid gap-3 p-5 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-semibold text-white">Mia</span>
                            <span class="rounded-full bg-emerald-500/15 px-2 py-0.5 text-[10px] font-medium text-emerald-300">Ativo</span>
                        </div>
                        <p class="mt-1 text-xs text-slate-400">Atendimento &amp; Vendas</p>
                    </div>
                    <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-semibold text-white">Léo</span>
                            <span class="rounded-full bg-emerald-500/15 px-2 py-0.5 text-[10px] font-medium text-emerald-300">Ativo</span>
                        </div>
                        <p class="mt-1 text-xs text-slate-400">Suporte Técnico</p>
                    </div>
                    <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-semibold text-white">Sol</span>
                            <span class="rounded-full bg-emerald-500/15 px-2 py-0.5 text-[10px] font-medium text-emerald-300">Ativo</span>
                        </div>
                        <p class="mt-1 text-xs text-slate-400">Qualificação de Leads</p>
                    </div>
                    <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-semibold text-white">Vic</span>
                            <span class="rounded-full bg-emerald-500/15 px-2 py-0.5 text-[10px] font-medium text-emerald-300">Ativo</span>
                        </div>
                        <p class="mt-1 text-xs text-slate-400">Agendamentos</p>
                    </div>
                    <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-semibold text-white">Bia</span>
                            <span class="rounded-full bg-amber-500/15 px-2 py-0.5 text-[10px] font-medium text-amber-300">Em teste</span>
                        </div>
                        <p class="mt-1 text-xs text-slate-400">Campanhas</p>
                    </div>
                    <div class="rounded-xl border border-dashed border-white/20 bg-white/5 p-4 flex items-center justify-center text-center">
                        <span class="text-xs text-slate-400">+ Novo assistente, em minutos</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Problema --}}
    <section class="mx-auto max-w-5xl px-6 py-16 md:py-20">
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold tracking-tight text-slate-900">Seu WhatsApp pode estar deixando dinheiro na mesa</h2>
        </div>
        <div class="mt-10 grid gap-6 sm:grid-cols-3">
            <div class="rounded-2xl border border-red-100 bg-red-50/50 p-6">
                <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg bg-red-100 text-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.5 2"/></svg>
                </span>
                <p class="mt-4 text-sm text-slate-700">Cliente manda mensagem fora do horário e some.</p>
            </div>
            <div class="rounded-2xl border border-red-100 bg-red-50/50 p-6">
                <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg bg-red-100 text-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20V14M10 20V9M16 20V4"/></svg>
                </span>
                <p class="mt-4 text-sm text-slate-700">Atendente humano não escala quando as vendas crescem.</p>
            </div>
            <div class="rounded-2xl border border-red-100 bg-red-50/50 p-6">
                <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg bg-red-100 text-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8.5 9a3.5 3.5 0 116.2 2.2c-.9 1-1.7 1.4-1.7 2.8"/><path d="M12 17h.01"/></svg>
                </span>
                <p class="mt-4 text-sm text-slate-700">Você não sabe se o robô de atendimento está realmente respondendo certo até o cliente reclamar.</p>
            </div>
        </div>
    </section>

    {{-- Como funciona --}}
    <section class="bg-slate-50 py-16 md:py-20">
        <div class="mx-auto max-w-6xl px-6">
            <div class="text-center max-w-2xl mx-auto">
                <h2 class="text-2xl md:text-3xl font-bold tracking-tight text-slate-900">Como funciona</h2>
                <p class="mt-4 text-slate-600">Do primeiro WhatsApp conectado até rodar campanhas em massa.</p>
            </div>

            <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="text-center lg:text-left">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-violet-600 text-white font-bold">1</span>
                    <h3 class="mt-4 font-semibold text-slate-900">Conecte seu WhatsApp</h3>
                    <p class="mt-2 text-sm text-slate-600">Via QR Code ou API Oficial da Meta — no ar em minutos.</p>
                </div>
                <div class="text-center lg:text-left">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-violet-600 text-white font-bold">2</span>
                    <h3 class="mt-4 font-semibold text-slate-900">Treine a IA</h3>
                    <p class="mt-2 text-sm text-slate-600">Com seus documentos e o seu site — sem programar nada.</p>
                </div>
                <div class="text-center lg:text-left">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-violet-600 text-white font-bold">3</span>
                    <h3 class="mt-4 font-semibold text-slate-900">Teste e corrija</h3>
                    <p class="mt-2 text-sm text-slate-600">A IA atende, agenda e qualifica — você testa antes de rodar de verdade.</p>
                </div>
                <div class="text-center lg:text-left">
                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-violet-600 text-white font-bold">4</span>
                    <h3 class="mt-4 font-semibold text-slate-900">Escale com campanhas</h3>
                    <p class="mt-2 text-sm text-slate-600">Dispare em massa quando quiser, sem tomar bloqueio.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Funcionalidades --}}
    <section id="funcionalidades" class="mx-auto max-w-6xl px-6 py-16 md:py-24">
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold tracking-tight text-slate-900">Tudo que o seu atendimento no WhatsApp precisa</h2>
            <p class="mt-4 text-slate-600">Sem robô de decorar resposta — IA de verdade, testada antes de ir pro ar.</p>
        </div>

        <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <div class="rounded-2xl border border-slate-100 p-6 hover:border-violet-200 hover:shadow-md transition">
                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-violet-50 text-violet-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l1.8 5.6L19 10l-5.2 1.4L12 17l-1.8-5.6L5 10l5.2-1.4L12 3z"/></svg>
                </span>
                <h3 class="mt-4 text-lg font-semibold text-slate-900">Atendimento com IA de verdade</h3>
                <p class="mt-2 text-sm text-slate-600">Crie quantos assistentes quiser, cada um com seu número, personalidade e base de conhecimento. Escolha o motor de IA por assistente — GPT, Gemini, Claude ou Grok — e agende reuniões direto na conversa, com link de Meet e convite automático.</p>
            </div>
            <div class="rounded-2xl border border-slate-100 p-6 hover:border-violet-200 hover:shadow-md transition">
                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16v12H7l-3 3V4z"/></svg>
                </span>
                <h3 class="mt-4 text-lg font-semibold text-slate-900">Base de conhecimento que aprende seu negócio</h3>
                <p class="mt-2 text-sm text-slate-600">Suba PDFs e documentos, ou deixe a IA varrer seu site institucional sozinha. Tudo organizado num painel próprio, pronto pra consultar e exportar.</p>
            </div>
            <div class="rounded-2xl border border-slate-100 p-6 hover:border-violet-200 hover:shadow-md transition">
                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1015-6.7M3 12V6m0 6h6"/></svg>
                </span>
                <h3 class="mt-4 text-lg font-semibold text-slate-900">Nunca mais perca um cliente calado</h3>
                <p class="mt-2 text-sm text-slate-600">Se o cliente para de responder, o sistema retoma a conversa nos intervalos que você configurar — e encerra educadamente se o silêncio continuar. Pesquisa de satisfação disparada no fim do atendimento.</p>
            </div>
            <div class="rounded-2xl border border-slate-100 p-6 hover:border-violet-200 hover:shadow-md transition">
                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-sky-50 text-sky-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 3L4 7v10l6 4 6-4V7l-6-4z"/><path d="M8 11l2.5 2.5L16 8"/></svg>
                </span>
                <h3 class="mt-4 text-lg font-semibold text-slate-900">Teste o assistente antes do cliente testar por você</h3>
                <p class="mt-2 text-sm text-slate-600">Módulo de QA automatizado simula clientes reais conversando com seu assistente e entrega um relatório com cada falha já classificada — e a sugestão exata de correção.</p>
            </div>
            <div class="rounded-2xl border border-slate-100 p-6 hover:border-violet-200 hover:shadow-md transition">
                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-violet-50 text-violet-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11l18-7-7 18-2-8-9-3z"/></svg>
                </span>
                <h3 class="mt-4 text-lg font-semibold text-slate-900">Campanhas em massa sem tomar bloqueio</h3>
                <p class="mt-2 text-sm text-slate-600">Lista sanitizada automaticamente, disparo em lotes espaçados e mensagens variadas pela IA — sem parecer robô. Templates aprovados pela Meta ou texto livre, personalizado pelo nome do contato.</p>
            </div>
            <div class="rounded-2xl border border-slate-100 p-6 hover:border-violet-200 hover:shadow-md transition">
                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3"/><circle cx="17" cy="9" r="2.5"/><path d="M3 20c0-3 2.7-5 6-5s6 2 6 5M14.5 15c2.5 0 5 1.6 5 4.5"/></svg>
                </span>
                <h3 class="mt-4 text-lg font-semibold text-slate-900">IA e seu time humano, sem fricção</h3>
                <p class="mt-2 text-sm text-slate-600">Quando a IA não resolver, ela mesma identifica e transfere pro time certo, com protocolo e histórico centralizado. Gerencie agentes, agenda e setores num só lugar.</p>
            </div>
            <div class="rounded-2xl border border-slate-100 p-6 hover:border-violet-200 hover:shadow-md transition sm:col-span-2 lg:col-span-1">
                <span class="inline-flex h-11 w-11 items-center justify-center rounded-xl bg-sky-50 text-sky-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="7" height="7" rx="1"/><rect x="14" y="4" width="7" height="7" rx="1"/><rect x="3" y="15" width="7" height="5" rx="1"/><rect x="14" y="15" width="7" height="5" rx="1"/></svg>
                </span>
                <h3 class="mt-4 text-lg font-semibold text-slate-900">Painel único, controle total</h3>
                <p class="mt-2 text-sm text-slate-600">Todos os assistentes, conversas, equipe e campanhas num só lugar — com perfis de acesso por usuário (administrador, gestor, agente).</p>
            </div>
        </div>
    </section>

    {{-- Diferenciais --}}
    <section class="bg-slate-50 py-16 md:py-24">
        <div class="mx-auto max-w-5xl px-6">
            <div class="text-center max-w-2xl mx-auto">
                <h2 class="text-2xl md:text-3xl font-bold tracking-tight text-slate-900">Não é mais um robô de atendimento</h2>
            </div>

            <div class="mt-12 grid gap-6 sm:grid-cols-2">
                <div class="rounded-2xl border border-slate-200 bg-white p-6">
                    <h3 class="text-sm font-semibold uppercase tracking-wide text-slate-400">Robô de atendimento comum</h3>
                    <ul class="mt-4 space-y-3 text-sm text-slate-600">
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-4 w-4 shrink-0 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 6l12 12M18 6L6 18"/></svg>
                            Preso a um único provedor de IA
                        </li>
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-4 w-4 shrink-0 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 6l12 12M18 6L6 18"/></svg>
                            Você só descobre que algo está errado quando o cliente reclama
                        </li>
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-4 w-4 shrink-0 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 6l12 12M18 6L6 18"/></svg>
                            Disparo em massa idêntico pra todo mundo, com risco de bloqueio
                        </li>
                    </ul>
                </div>
                <div class="rounded-2xl border-2 border-violet-200 bg-white p-6 shadow-sm">
                    <h3 class="text-sm font-semibold uppercase tracking-wide text-violet-600">Orquestra IA</h3>
                    <ul class="mt-4 space-y-3 text-sm text-slate-700">
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-4 w-4 shrink-0 text-emerald-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg>
                            Escolha o motor de IA por assistente — GPT, Gemini, Claude ou Grok
                        </li>
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-4 w-4 shrink-0 text-emerald-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg>
                            Módulo de teste/QA automatizado, com relatório de falhas antes de publicar
                        </li>
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 h-4 w-4 shrink-0 text-emerald-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg>
                            Campanhas com variação por IA, lotes espaçados e lista sanitizada
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Prova social --}}
    {{-- inserir depoimentos/logos de clientes reais aqui --}}
    <section class="mx-auto max-w-5xl px-6 py-16 md:py-24">
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold tracking-tight text-slate-900">O que dizem sobre o Orquestra IA</h2>
            <p class="mt-3 text-xs font-semibold uppercase tracking-wide text-amber-600">Exemplo ilustrativo — substituir por depoimentos reais antes de publicar</p>
        </div>

        <div class="mt-10 grid gap-6 sm:grid-cols-3">
            <div class="relative rounded-2xl border border-dashed border-slate-300 bg-slate-50 p-6">
                <span class="absolute -top-2 right-4 rounded-full bg-amber-100 px-2 py-0.5 text-[10px] font-semibold text-amber-700">EXEMPLO FICTÍCIO</span>
                <p class="text-sm text-slate-600">"Deixamos de perder cliente por demora no atendimento. A IA responde na hora, e o time só entra quando precisa de verdade."</p>
                <div class="mt-5 flex items-center gap-3">
                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-violet-100 text-sm font-semibold text-violet-700">PS</span>
                    <div>
                        <p class="text-xs font-semibold text-slate-700">Patrícia Souza</p>
                        <p class="text-xs text-slate-500">Gerente de Atendimento — Ecomm Varejo (fictício)</p>
                    </div>
                </div>
            </div>
            <div class="relative rounded-2xl border border-dashed border-slate-300 bg-slate-50 p-6">
                <span class="absolute -top-2 right-4 rounded-full bg-amber-100 px-2 py-0.5 text-[10px] font-semibold text-amber-700">EXEMPLO FICTÍCIO</span>
                <p class="text-sm text-slate-600">"O módulo de teste pegou falha que a gente nunca teria percebido sozinho, antes de colocar no ar pro cliente."</p>
                <div class="mt-5 flex items-center gap-3">
                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-sm font-semibold text-emerald-700">RA</span>
                    <div>
                        <p class="text-xs font-semibold text-slate-700">Rodrigo Alves</p>
                        <p class="text-xs text-slate-500">Head de CX — Nexa Soluções (fictício)</p>
                    </div>
                </div>
            </div>
            <div class="relative rounded-2xl border border-dashed border-slate-300 bg-slate-50 p-6">
                <span class="absolute -top-2 right-4 rounded-full bg-amber-100 px-2 py-0.5 text-[10px] font-semibold text-amber-700">EXEMPLO FICTÍCIO</span>
                <p class="text-sm text-slate-600">"Rodamos campanha pra milhares de contatos sem tomar bloqueio. Antes era impossível fazer isso com segurança."</p>
                <div class="mt-5 flex items-center gap-3">
                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-sky-100 text-sm font-semibold text-sky-700">CD</span>
                    <div>
                        <p class="text-xs font-semibold text-slate-700">Camila Duarte</p>
                        <p class="text-xs text-slate-500">Coordenadora de Marketing — Vantte Serviços (fictício)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA final --}}
    <section class="bg-slate-900 text-white">
        <div class="mx-auto max-w-4xl px-6 py-16 md:py-20 text-center">
            <h2 class="text-2xl md:text-3xl font-bold tracking-tight">Pronto pra colocar seu atendimento no automático — de verdade?</h2>
            <p class="mt-4 text-slate-300 max-w-xl mx-auto">Sem compromisso. Em poucos minutos a gente te mostra funcionando.</p>
            <div class="mt-8">
                <a href="{{ whatsapp_url('Quero saber mais sobre o Orquestra IA.') }}" target="_blank" rel="noopener" class="inline-flex rounded-full bg-emerald-500 px-8 py-3.5 text-white font-semibold hover:bg-emerald-600 transition">
                    Falar no WhatsApp agora
                </a>
            </div>
        </div>
    </section>

    <footer class="py-10 text-center">
        <p class="text-sm font-bold text-slate-900">Orquestra<span class="text-violet-600">IA</span></p>
        <p class="mt-2 text-xs text-slate-500 max-w-md mx-auto">Plataforma de atendimento ao cliente via WhatsApp com Inteligência Artificial — múltiplos assistentes, uma única central de controle.</p>
        <a href="{{ whatsapp_url('Quero saber mais sobre o Orquestra IA.') }}" target="_blank" rel="noopener" class="mt-4 inline-block text-xs font-medium text-emerald-600 hover:text-emerald-700">Falar no WhatsApp</a>
        <p class="mt-6 text-xs text-slate-400">&copy; {{ now()->year }} Orquestra IA. Todos os direitos reservados.</p>
    </footer>

    {{-- Floating WhatsApp button --}}
    <a href="{{ whatsapp_url('Quero saber mais sobre o Orquestra IA.') }}" target="_blank" rel="noopener" aria-label="Falar no WhatsApp" class="fixed bottom-6 right-6 z-50 flex h-14 w-14 items-center justify-center rounded-full bg-emerald-500 text-white shadow-lg hover:bg-emerald-600 transition">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="h-7 w-7" fill="currentColor"><path d="M16.001 3C9.374 3 4 8.373 4 15c0 2.37.693 4.58 1.885 6.44L4 29l7.73-1.838A11.93 11.93 0 0016.001 27C22.627 27 28 21.627 28 15S22.627 3 16.001 3zm0 21.75c-1.98 0-3.823-.58-5.375-1.578l-.386-.242-4.59 1.092 1.113-4.472-.252-.398A9.71 9.71 0 016.25 15c0-5.376 4.374-9.75 9.751-9.75 5.376 0 9.75 4.374 9.75 9.75s-4.374 9.75-9.75 9.75zm5.344-7.302c-.293-.147-1.734-.856-2.003-.953-.269-.098-.465-.147-.66.147-.196.293-.758.953-.93 1.148-.171.196-.343.22-.635.073-.293-.147-1.237-.456-2.357-1.455-.871-.777-1.46-1.737-1.631-2.03-.171-.293-.018-.451.129-.597.133-.132.293-.343.44-.514.147-.172.196-.294.293-.49.098-.196.049-.367-.024-.514-.073-.147-.66-1.59-.904-2.178-.238-.571-.48-.494-.66-.503l-.562-.01c-.196 0-.514.073-.783.367-.269.293-1.026 1.003-1.026 2.446s1.051 2.837 1.198 3.033c.147.196 2.07 3.16 5.016 4.432.701.303 1.248.484 1.675.619.704.224 1.344.192 1.85.117.564-.084 1.734-.709 1.978-1.393.245-.685.245-1.271.172-1.393-.073-.123-.269-.196-.562-.343z"/></svg>
    </a>
</body>
</html>
