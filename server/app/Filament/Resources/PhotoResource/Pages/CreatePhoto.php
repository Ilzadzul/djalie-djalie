<?php

namespace App\Filament\Resources\PhotoResource\Pages;

use App\Filament\Resources\PhotoResource;
use App\Models\Photo;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreatePhoto extends CreateRecord
{
    protected static string $resource = PhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('form-fake-filler')
                ->label('Add Photo')
                ->icon('heroicon-o-photo')
                ->color('info')
                ->action(function (self $livewire): void {
                    $data = Photo::factory()->make()->toArray();

                    $livewire->form->fill($data);
                })
                ->visible(fn() => app()->environment('local'))
        ];
    }
}
