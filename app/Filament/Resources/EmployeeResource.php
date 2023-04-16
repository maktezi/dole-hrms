<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeResource\Pages;
use App\Models\Employee;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\FileUpload;
use Closure;
use Carbon\Carbon;
use Livewire\TemporaryUploadedFile;
use Filament\Tables\Actions\BulkAction;
use Illuminate\Database\Eloquent\Collection;
use Filament\Forms\Components\Radio;

class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'HR Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('department_id')
                    ->relationship('department','name')->required(),
                TextInput::make('first_name')->required(),
                TextInput::make('middle_name'),
                TextInput::make('last_name')->required(),
                Radio::make('sex')
                ->options([
                    'male' => 'Male',
                    'female' => 'Female'
                ]),
                TextInput::make('position')->required(),
                TextInput::make('salary')
                    ->mask(fn (TextInput\Mask $mask) => $mask->money(prefix: 'P ', thousandsSeparator: ',', isSigned: false)),
                DatePicker::make('date_hired'),
                TextInput::make('address'),
                TextInput::make('email')->email(),
                TextInput::make('phone')->numeric(),
                DatePicker::make('birth_date')->required()
                    ->afterStateUpdated(function (Closure $set, $state)
                    {$set('age', Carbon::parse($state)->age);}),
                // TextInput::make('age')
                //     ->disabled()
                //     ->dehydrated(false),
                FileUpload::make('attachments')
                    ->multiple()
                    ->enableDownload()
                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                        $fileName = $file->hashName();
                        $name = explode('.', $fileName);
                        return (string) str('attachments/'.$name[0].'.png');
                    })

            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // TextColumn::make('id')->sortable(),
                TextColumn::make('first_name')->sortable()->searchable()->limit(20),
                TextColumn::make('last_name',)->sortable()->searchable()->limit(20),
                // TextColumn::make('middle_name')->sortable()->searchable(),
                TextColumn::make('age')
                ->extraAttributes(function (Employee $record) { 
                    if ($record->birth_date->isBirthday()) {
                        return ['class' => 'bg-success-500'];
                    }
                    return [];}),
                // TextColumn::make('email')->searchable(),
                // TextColumn::make('phone'),
                TextColumn::make('position')->sortable()->searchable()->limit(30),
                TextColumn::make('department.name')->sortable(),
                TextColumn::make('salary')->sortable()->prefix('P '),
                TextColumn::make('address')->wrap(),
                // TextColumn::make('date_hired')->date(),
                // TextColumn::make('created_at')->dateTime()->sortable(),
                // TextColumn::make('updated_at')->dateTime()->sortable(),
                // TextColumn::make('updated_at')->since(),

            ])
            ->filters([
                SelectFilter::make('department')->relationship('department','name'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),

                // BulkAction::make('delete')
                // ->label('Export Selected')
                // ->icon('heroicon-o-document-download')
                //     ->action(fn (Collection $records) => $records->each->delete())
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
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
        ];
    }
}
