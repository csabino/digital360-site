<?php

namespace App\Filament\Widgets;

use App\Models\Page;
use App\Models\Product;
use App\Models\Service;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class GeneralStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Páginas', Page::count())
                ->description('Home e Sobre')
                ->icon('heroicon-o-document-text')
                ->color('warning'),

            Stat::make('Serviços', Service::count())
                ->description(Service::where('is_active', true)->count() . ' ativos')
                ->icon('heroicon-o-rectangle-stack')
                ->color('success'),

            Stat::make('Produtos', Product::count())
                ->description(Product::where('is_active', true)->count() . ' ativos')
                ->icon('heroicon-o-cube')
                ->color('info'),
        ];
    }
}
