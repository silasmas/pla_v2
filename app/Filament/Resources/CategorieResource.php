<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\categorie;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CategorieResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CategorieResource\RelationManagers;

class CategorieResource extends Resource
{
    protected static ?string $model = categorie::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    protected static ?string $recordTitleAttribute = 'Type de publication';
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    Section::make('Formulaire')->schema([
                        TextInput::make('nom.fr')
                            ->label("Titre (FR)")
                            ->columnSpan(6)
                            ->required(),
                        TextInput::make('nom.en')
                            ->label("Titre (EN)")
                            ->required()
                            ->columnSpan(6),
                        Textarea::make('description.fr')
                            ->label("Titre (FR)")
                            ->columnSpan(6),
                        Textarea::make('description.en')
                            ->label("Titre (EN)")
                            ->columnSpan(6),
                    ])->columns(12)
                ])->columnSpanFull()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make(name: 'nom')
                    ->label("Nom de la catégorie")
                    ->searchable(),
                TextColumn::make(name: 'description')
                    ->label("Description de la fonction ")
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListCategories::route('/'),
            // 'create' => Pages\CreateCategorie::route('/create'),
            // 'edit' => Pages\EditCategorie::route('/{record}/edit'),
        ];
    }
}
