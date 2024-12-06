<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\expertise;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\ExpertiseResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ExpertiseResource\RelationManagers;

class ExpertiseResource extends Resource
{
    protected static ?string $model = expertise::class;

    protected static ?string $navigationIcon = 'heroicon-o-light-bulb';

    protected static ?string $recordTitleAttribute = 'Expertises';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    Section::make('Formulaire')->schema([
                        TextInput::make('titre1.fr')
                            ->label("Titre (FR)")
                            ->columnSpan(4)
                            ->required(),
                        TextInput::make('titre1.en')
                            ->label("Titre (EN)")
                            ->required()
                            ->columnSpan(4),
                        Select::make('sorte')
                            ->columnSpan(4)
                            ->label("Type")
                            ->options([
                                '1' => 'Secteur d\'activité',
                                '2' => 'Domaine de compétence',
                            ]),
                        FileUpload::make('photo')
                            ->label('Image')
                            ->directory('expertise')
                            ->uploadingMessage('Fichier en cours de téléchargement...')
                            ->imageEditor()
                            ->imageEditorMode(2)
                            ->downloadable()
                            ->image()
                            ->maxSize(3024)
                            ->columnSpan(12)
                            ->previewable(true),
                        RichEditor::make('contenu.fr')
                            ->toolbarButtons([
                                'attachFiles',
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ])
                            ->columnSpan(12)
                            ->label('Description en (FR)'),
                        RichEditor::make('contenu.en')
                            ->toolbarButtons([
                                'attachFiles',
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ])
                            ->columnSpan(12)
                            ->label('Description en (EN)'),
                    ])->columns(12)
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
                TextColumn::make('titre1')
                    ->searchable(),
                TextColumn::make('sorte')
                    ->badge()
                    ->colors([
                        'success' => fn($state) => $state === '1',
                        'warning' => fn($state) => $state === '2',
                    ])
                    ->formatStateUsing(function ($state) {
                        // Exemple de condition
                        if ($state === '1') {
                            return 'Secteur d\'activité';
                        } elseif ($state === '2') {
                            return 'Domaine de competence';
                        }
                        // Valeur par défaut
                        return $state ?: '';
                    })->searchable(),
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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListExpertises::route('/'),
            'create' => Pages\CreateExpertise::route('/create'),
            'edit' => Pages\EditExpertise::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationBadgeColor(): string|array|null
    {
        return "info";
    }
}
