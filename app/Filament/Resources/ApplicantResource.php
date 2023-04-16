<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApplicantResource\Pages;
use App\Filament\Resources\ApplicantResource\RelationManagers;
use App\Filament\Resources\ApplicantResource\Widgets\ApplicantStatsOverview;
use App\Models\Applicant;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;

class ApplicantResource extends Resource
{
    protected static ?string $model = Applicant::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationGroup = 'Recruitment';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('application_id')
                    ->relationship('application','name')->required(),
                TextInput::make('first_name')->required(),
                TextInput::make('middle_name'),
                TextInput::make('last_name')->required(),
                Radio::make('sex')
                ->options([
                    'male' => 'Male',
                    'female' => 'Female'
                ]),
                TextInput::make('address')->required(),
                TextInput::make('email')->required()->email(),
                TextInput::make('phone')->numeric()->required(),
                FileUpload::make('attachments')->multiple()->enableOpen()->enableDownload()->preserveFilenames(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // TextColumn::make('id')->sortable(),
                TextColumn::make('application.name')->sortable(),
                TextColumn::make('first_name')->sortable()->searchable(),
                TextColumn::make('last_name')->sortable()->searchable(),
                TextColumn::make('address')->sortable()->searchable()->wrap(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('phone'),
                // TextColumn::make('middle_name')->sortable()->searchable(),
                TextColumn::make('created_at')
                    // ->dateTime()
                    ->since()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('application')->relationship('application','name'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListApplicants::route('/'),
            'create' => Pages\CreateApplicant::route('/create'),
            'edit' => Pages\EditApplicant::route('/{record}/edit'),
        ];
    }
}
