<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\Avocat;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Wizard\Step;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\AvocatResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AvocatResource\Pages\EditAvocat;
use App\Filament\Resources\AvocatResource\RelationManagers;
use App\Filament\Resources\AvocatResource\Pages\ListAvocats;
use App\Filament\Resources\AvocatResource\Pages\CreateAvocat;

class AvocatResource extends Resource
{
    protected static ?string $model = Avocat::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $recordTitleAttribute = 'Equipes';
    protected static ?int $navigationSort = 1;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    Step::make('Étape 1')
                        ->schema([
                            Section::make('Information générale')->schema([
                                TextInput::make('nom')
                                    ->required()
                                    ->columnSpan(4)
                                    ->maxLength(255),
                                TextInput::make('prenom')
                                    ->required()
                                    ->columnSpan(4)
                                    ->maxLength(255),
                                Select::make('sexe')
                                    ->columnSpan(4)
                                    ->options([
                                        'H' => 'Homme',
                                        'F' => 'Femme',
                                    ]),
                                DatePicker::make('datenaissance')
                                    ->columnSpan(4),
                                TextInput::make('telephone')
                                    ->tel()
                                    ->required()
                                    ->columnSpan(4)
                                    ->maxLength(255)
                                    ->unique(avocat::class, 'telephone', ignoreRecord: true),
                                TextInput::make('email')
                                    ->required()
                                    ->email()
                                    ->columnSpan(4)
                                    ->maxLength(255)
                                    ->unique(avocat::class, 'email', ignoreRecord: true),

                            ])->columns(12)
                        ]),
                    Step::make('Étape 2')
                        ->schema([
                            Section::make('Rôle')->schema([

                                Select::make('fonction_id')
                                    ->label('Fonction')
                                    ->columnSpan(6)
                                    ->preload()
                                    ->searchable()
                                    ->required()
                                    ->relationship('fonction', 'fonction'),
                                Select::make('niveau')
                                    ->columnSpan(6)
                                    ->options([
                                        '1' => '1',
                                        '2' => '2',
                                        '3' => '3',
                                        '4' => '4',
                                        '5' => '5',
                                    ]),
                                MarkdownEditor::make('biographie.fr')
                                    ->columnSpan(12)
                                    ->label('Biographie en (FR)'),
                                MarkdownEditor::make('biographie.en')
                                    ->columnSpan(12)
                                    ->label('Biographie en (EN)'),
                            ])->columns(12)
                        ]),
                    Step::make('Étape 3')
                        ->schema([
                            Section::make('Autres')->schema([
                                FileUpload::make('pdfbio')
                                    ->label('PDF de la biographie')
                                    ->directory('pdfbio')
                                    ->downloadable()
                                    ->acceptedFileTypes(['application/pdf'])
                                    ->uploadingMessage('Fichier en cours de téléchargement...')
                                    ->maxSize(20024)
                                    ->columnSpan(6),
                                FileUpload::make('photo')
                                    ->label('Photo de profil')
                                    ->directory('galerie')
                                    ->avatar()
                                    ->uploadingMessage('Fichier en cours de téléchargement...')
                                    ->imageEditor()
                                    ->imageEditorMode(2)
                                    ->circleCropper()
                                    ->downloadable()
                                    ->image()
                                    ->maxSize(3024)
                                    ->columnSpan(6)
                                    ->previewable(true)
                                    ->loadingIndicatorPosition('left')
                                    ->removeUploadedFileButtonPosition('right')
                                    ->uploadButtonPosition('left')
                                    ->uploadProgressIndicatorPosition('left'),
                                Toggle::make('visible')
                                    ->columnSpan(12)
                                    ->default(false)
                                    ->columnSpanFull()
                                    ->onColor('success')
                                    ->offColor('danger')
                                    ->required(),
                            ])->columns(12)
                        ]),
                ])->columnSpanFull(),






            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo')
                    ->circular()
                    ->width(100)
                    ->height(100)
                    ->defaultImageUrl(url('assets/lg.jpg'))
                    ->searchable(),
                TextColumn::make('nom')
                    ->searchable(),
                TextColumn::make('prenom')
                    ->searchable(),
                TextColumn::make('sexe')
                    ->searchable(),
                // TextColumn::make('datenaissance')
                //     ->searchable(),
                TextColumn::make('telephone')
                    ->searchable(),
                TextColumn::make('email')
                    ->searchable(),
                TextColumn::make('fonction.fonction')
                    ->numeric()
                    ->badge()->color('success')
                    ->searchable()
                    ->sortable(),
                // TextColumn::make('pdfbio')
                //     ->searchable(),
                TextColumn::make('niveau'),

                IconColumn::make('visible')
                    ->label('Est visible')
                    ->boolean(),
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
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
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
            'index' => Pages\ListAvocats::route('/'),
            'create' => Pages\CreateAvocat::route('/create'),
            'edit' => Pages\EditAvocat::route('/{record}/edit'),
        ];
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationBadgeColor(): string|array|null
    {
        return "success";
    }
}
