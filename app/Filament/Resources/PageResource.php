<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Páginas (Home/Sobre)';

    protected static ?string $modelLabel = 'página';

    protected static ?string $pluralModelLabel = 'páginas';

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('slug')
                    ->label('Slug (URL)')
                    ->required()
                    ->disabled(),
                Forms\Components\TextInput::make('title')
                    ->label('Título')
                    ->required(),
                Forms\Components\TextInput::make('subtitle')
                    ->label('Subtítulo'),
                Forms\Components\FileUpload::make('image')
                    ->label('Imagem de destaque')
                    ->image()
                    ->directory('pages')
                    ->imageEditor()
                    ->helperText('Aparece ao lado do texto nesta página. Se não enviar nada, uma ilustração padrão é usada.')
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('content')
                    ->label('Conteúdo')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('seo_description')
                    ->label('Descrição para SEO')
                    ->helperText('Descrição curta usada em buscadores (meta description).')
                    ->maxLength(160),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Título')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subtitle')
                    ->label('Subtítulo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('seo_description')
                    ->label('Descrição SEO')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Atualizado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
