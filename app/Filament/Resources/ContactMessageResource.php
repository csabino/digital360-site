<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactMessageResource\Pages;
use App\Models\ContactMessage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ContactMessageResource extends Resource
{
    protected static ?string $model = ContactMessage::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationLabel = 'Mensagens de contato';

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->label('Nome')->disabled(),
                Forms\Components\TextInput::make('email')->label('E-mail')->disabled(),
                Forms\Components\TextInput::make('phone')->label('Telefone')->disabled(),
                Forms\Components\TextInput::make('company')->label('Empresa')->disabled(),
                Forms\Components\Textarea::make('message')->label('Mensagem')->columnSpanFull()->disabled(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nome')->searchable(),
                Tables\Columns\TextColumn::make('email')->label('E-mail')->searchable(),
                Tables\Columns\TextColumn::make('company')->label('Empresa')->searchable(),
                Tables\Columns\TextColumn::make('created_at')->label('Recebido em')->dateTime('d/m/Y H:i')->sortable(),
                Tables\Columns\IconColumn::make('read_at')->label('Lido')->boolean()->getStateUsing(fn ($record) => (bool) $record->read_at),
            ])
            ->defaultSort('created_at', 'desc')
            ->actions([
                Tables\Actions\EditAction::make()->label('Ver'),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactMessages::route('/'),
            'edit' => Pages\EditContactMessage::route('/{record}/edit'),
        ];
    }
}
