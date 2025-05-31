<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\fonction;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\FonctionResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FonctionResource\RelationManagers;

class FonctionResource extends Resource
{
    protected static ?string $model = fonction::class;

    protected static ?string $navigationIcon = 'heroicon-o-shield-check';
    protected static ?string $recordTitleAttribute = 'Fonction';
    protected static ?int $navigationSort = 4;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    Section::make('Formulaire')->schema([
                        TextInput::make('fonction.fr')
                            ->label("Titre (FR)")
                            ->columnSpan(4)
                            ->required(),
                        TextInput::make('fonction.en')
                            ->label("Titre (EN)")
                            ->required()
                            ->columnSpan(4),
                        TextInput::make('Position')
                            ->label("L'ordre de l'hiyerarchie")
                            ->required()
                            ->numeric()
                            ->columnSpan(4),
                    ])->columns(12)
                ])->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make(name: 'fonction')
                    ->label("Nom de la fonction ")
                    ->searchable(),
                TextColumn::make(name: 'position')
                    ->label("Position dans l'hierarchie")
                    ->sortable()
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
            'index' => Pages\ListFonctions::route('/'),
            // 'create' => Pages\CreateFonction::route('/create'),
            // 'edit' => Pages\EditFonction::route('/{record}/edit'),
        ];
    }
}
