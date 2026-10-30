<?php

namespace App\Filament\Pages;

use App\Models\SiteSetting;
use Filament\Forms\Components\ColorPicker;
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
        $this->form->fill(SiteSetting::current()->only('card_frame_color'));
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
            ]);
    }

    public function save(): void
    {
        $setting = SiteSetting::current();
        $setting->update($this->form->getState());

        Cache::forget('site_setting_card_frame_color');

        Notification::make()
            ->title('Cor salva com sucesso')
            ->success()
            ->send();
    }
}
