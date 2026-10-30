<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Page::firstOrCreate(['slug' => 'home'], [
            'title' => 'Transformamos desafios de negócio em resultados concretos',
            'subtitle' => 'Consultoria digital360',
            'content' => '<p>Ajudamos empresas a crescer com estratégia, tecnologia e dados. Nossa equipe multidisciplinar atua de ponta a ponta, do diagnóstico à execução.</p>',
            'seo_description' => 'digital360 — consultoria especializada em estratégia, tecnologia e transformação digital para empresas.',
        ]);

        Page::firstOrCreate(['slug' => 'sobre'], [
            'title' => 'Quem somos',
            'subtitle' => 'Nossa história, missão e valores',
            'content' => '<p>A digital360 nasceu para ajudar empresas a navegar a transformação digital com clareza e resultado. Combinamos experiência de mercado com metodologias ágeis para entregar valor rápido e sustentável.</p>',
            'seo_description' => 'Conheça a história, missão e valores da digital360.',
        ]);

        $services = [
            [
                'title' => 'Estratégia e Planejamento',
                'icon' => 'heroicon-o-chart-bar',
                'excerpt' => 'Diagnóstico e plano de ação para acelerar o crescimento do seu negócio.',
                'description' => '<p>Analisamos o cenário atual da sua empresa e construímos um plano estratégico claro, com metas e indicadores de sucesso.</p>',
                'order' => 1,
            ],
            [
                'title' => 'Transformação Digital',
                'icon' => 'heroicon-o-cpu-chip',
                'excerpt' => 'Modernização de processos e adoção de tecnologia com foco em resultado.',
                'description' => '<p>Implementamos processos e ferramentas digitais que aumentam eficiência e reduzem custos operacionais.</p>',
                'order' => 2,
            ],
            [
                'title' => 'Dados e Performance',
                'icon' => 'heroicon-o-presentation-chart-line',
                'excerpt' => 'Decisões baseadas em dados, com dashboards e indicadores sob medida.',
                'description' => '<p>Estruturamos a coleta e análise de dados da sua empresa para apoiar decisões mais rápidas e assertivas.</p>',
                'order' => 3,
            ],
        ];

        foreach ($services as $service) {
            Service::firstOrCreate(
                ['slug' => \Illuminate\Support\Str::slug($service['title'])],
                $service + ['is_active' => true]
            );
        }
    }
}
