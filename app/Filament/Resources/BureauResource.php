<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Bureau;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\BureauResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BureauResource\Pages\EditBureau;
use App\Filament\Resources\BureauResource\RelationManagers;
use App\Filament\Resources\BureauResource\Pages\ListBureaus;
use App\Filament\Resources\BureauResource\Pages\CreateBureau;

class BureauResource extends Resource
{
    protected static ?string $model = Bureau::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    protected static ?string $recordTitleAttribute = 'Nos bureau';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    Section::make('Formulaire')->schema([
                        TextInput::make('titre.fr')
                            ->label("Nom du bureau (FR)")
                            ->columnSpan(4),
                        TextInput::make('titre.en')
                            ->label("Nom du bureau (EN)")
                            ->columnSpan(4),
                        TextInput::make('email')
                            ->email()
                            ->columnSpan(4)
                            ->label("Email")
                            ->maxLength(255),
                        TextInput::make('telephone')
                            ->tel()
                            ->label("Téléphone")
                            ->columnSpan(4)
                            ->maxLength(255),
                        Textarea::make('physique.fr')
                            ->label("Adresse physique (FR)")
                            ->columnSpan(6),
                        Textarea::make('physique.en')
                            ->label("Adresse physique (EN)")
                            ->columnSpan(6),
                        Textarea::make('detail.fr')
                            ->label("Pus de detail (FR)")
                            ->columnSpan(6),
                        Textarea::make('detail.en')
                            ->label("Pus de detail  (EN)")
                            ->columnSpan(6),
                        FileUpload::make('photo')
                            ->label('Image du bureau')
                            ->directory('bureau')
                            ->uploadingMessage('Fichier en cours de téléchargement...')
                            ->imageEditor()
                            ->imageEditorMode(2)
                            ->downloadable()
                            ->image()
                            ->maxSize(3024)
                            ->columnSpanFull(),
                    ])
                ])->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo')
                    ->width(100)
                    ->height(100)
                    ->defaultImageUrl(url('assets/lg.jpg'))
                    ->searchable(),
                TextColumn::make('titre')
                    ->label("Nom du bureau")
                    ->searchable(),
                TextColumn::make('email')
                    ->searchable(),
                TextColumn::make('telephone')
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
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ])
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
            'index' => Pages\ListBureaus::route('/'),
            'create' => Pages\CreateBureau::route('/create'),
            'edit' => Pages\EditBureau::route('/{record}/edit'),
        ];
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationBadgeColor(): string|array|null
    {
        return "warning";
    }
}
