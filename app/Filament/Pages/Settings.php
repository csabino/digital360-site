<?php

namespace App\Filament\Pages;

use App\Models\SiteSetting;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Cache;

class Settings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-swatch';

    protected static ?string $navigationLabel = 'Configurações';

    protected static string $view = 'filament.pages.settings';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill(SiteSetting::current()->only('card_frame_color', 'product_carousel_seconds'));
    }

    public function form(Form $form): Form
    {
        return $form
            ->statePath('data')
            ->schema([
                ColorPicker::make('card_frame_color')
                    ->label('Cor de fundo dos quadros de imagem')
                    ->helperText('Usada nas molduras de imagem de Serviços e Produtos (home, listagens e páginas de detalhe).')
                    ->required(),
                TextInput::make('product_carousel_seconds')
                    ->label('Duração de cada produto no carrossel (segundos)')
                    ->helperText('Tempo que cada produto fica em destaque antes de passar para o próximo, na página de Produtos.')
                    ->numeric()
                    ->minValue(2)
                    ->maxValue(60)
                    ->required(),
            ]);
    }

    public function save(): void
    {
        $setting = SiteSetting::current();
        $setting->update($this->form->getState());

        Cache::forget('site_setting_card_frame_color');
        Cache::forget('site_setting_product_carousel_seconds');

        Notification::make()
            ->title('Configurações salvas com sucesso')
            ->success()
            ->send();
    }
}
