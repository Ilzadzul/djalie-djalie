<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PackageResource\Pages;
use App\Filament\Resources\PackageResource\RelationManagers;
use App\Models\Package;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextInput\Mas;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Support\RawJs;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class PackageResource extends Resource
{
  protected static ?string $model = Package::class;

  protected static ?string $navigationIcon = 'heroicon-o-gift';

  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        TextInput::make('name')
          ->helperText('ex: "Platinum Venue Package"')
          ->required()
          ->maxLength(255),

        FileUpload::make('thumbnail')
          ->image()
          ->required(),

        Textarea::make('description')
          ->helperText('ex: "Perfect for ballrooms"')
          ->required()
          ->rows(3)
          ->cols(20),

        Textarea::make('consult_msg')
          ->helperText('ex: "Hello, I would like to ask about the platinum package."')
          ->required()
          ->rows(3)
          ->cols(20)
          ->label('Consultation Message'),

        Repeater::make('benefits')
          ->relationship('benefits')
          ->schema([
            TextInput::make('description')
              ->helperText('ex: "3-5 meter altar + a set of chairs for the couple"')
              ->required(),
          ])
          ->columns(1)
          ->reorderableWithButtons()
          ->addActionLabel('Add benefit'),

        TextInput::make('price')
          ->required()
          ->mask(RawJs::make('$money($input)'))
          ->stripCharacters(',')
          ->numeric()
          ->prefix('IDR'),
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->columns([
        TextColumn::make('name')
          ->searchable(),
        ImageColumn::make('thumbnail'),
        TextColumn::make('price')
          ->money('idr')
      ])
      ->filters([
        //
      ])
      ->actions([
        Tables\Actions\EditAction::make(),
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
      'index' => Pages\ListPackages::route('/'),
      'create' => Pages\CreatePackage::route('/create'),
      'edit' => Pages\EditPackage::route('/{record}/edit'),
    ];
  }
}
