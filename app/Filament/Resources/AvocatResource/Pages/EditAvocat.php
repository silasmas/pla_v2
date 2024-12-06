<?php

namespace App\Filament\Resources\AvocatResource\Pages;

use App\Filament\Resources\AvocatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAvocat extends EditRecord
{
    protected static string $resource = AvocatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
