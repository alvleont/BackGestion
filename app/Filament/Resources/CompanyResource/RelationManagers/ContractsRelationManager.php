<?php

namespace App\Filament\Resources\CompanyResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\User;

class ContractsRelationManager extends RelationManager
{
    protected static string $relationship = 'contracts';
    protected static ?string $modelLabel = 'contrato';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('responsible_id')
                    ->label('Responsable del contrato')
                    ->options(User::all()->pluck('name', 'id'))
                    ->getSearchResultsUsing(fn (string $search) => User::where('name', 'like', "%{$search}%")->limit(50)->pluck('name', 'id'))
                    ->searchable(),
                Forms\Components\Select::make('external_contact_id')
                    ->label('Contacto del externo')
                    ->options(User::all()->pluck('name', 'id'))
                    ->getSearchResultsUsing(fn (string $search) => User::where('name', 'like', "%{$search}%")->limit(50)->pluck('name', 'id'))
                    ->searchable(),
                Forms\Components\Select::make('status')
                    ->label('Estado')
                    ->options([
                        'active' => 'Activo',
                        'inactive' => 'Inactivo',
                        'pending' => 'Pendiente',
                    ]),
                    Forms\Components\Select::make('invoice_mode')
                    ->label('Modo de facturación')
                    ->options([
                        'monthly' => 'Mensual',
                        'weekly' => 'Semanal',
                        'daily' => 'Diario',
                        'event' => 'Eventual',
                    ]),
                Forms\Components\DatePicker::make('start_date')
                    ->label('Fecha de inicio')
                    ->required(),
                Forms\Components\DatePicker::make('end_date')
                    ->label('Fecha de fin')
                    ->required(),
                Forms\Components\TextInput::make('max_hours_cycle')
                    ->label('Horas máximas por ciclo')
                    ->numeric()
                        ->mask(fn (TextInput\Mask $mask) => $mask
                            ->numeric()

                            ->integer() // Disallow decimal numbers.

                            ->minValue(1) // Set the minimum value that the number can be.
                            ->maxValue(200) // Set the maximum value that the number can be.

                        )
                    ->required(),
                Forms\Components\TextInput::make('max_weekly_meetings')
                    ->label('Máximo de Reuniones Semanales')
                    ->numeric()
                        ->mask(fn (TextInput\Mask $mask) => $mask
                            ->numeric()

                            ->integer() // Disallow decimal numbers.

                            ->minValue(1) // Set the minimum value that the number can be.
                            ->maxValue(5) // Set the maximum value that the number can be.

                        )
                    ->required(),

                Forms\Components\TextInput::make('price_per_hour')
                    ->label('Precio por hora')
                    ->numeric()
                        ->mask(fn (TextInput\Mask $mask) => $mask
                            ->numeric()

                            ->integer() // Disallow decimal numbers.

                            ->minValue(1) // Set the minimum value that the number can be.
                            ->maxValue(100) // Set the maximum value that the number can be.

                    ),
                Forms\Components\TextInput::make('price_per_cycle')
                    ->label('Precio por ciclo')
                    ->numeric()
                    ->mask(fn (TextInput\Mask $mask) => $mask->money('$', ',', 2))

            ]);


    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('start_date')
                    ->label('Fecha de Inicio'),
                Tables\Columns\TextColumn::make('end_date')
                    ->label('Fecha de Fin'),
                Tables\Columns\BadgeColumn::make('status')
                    ->label('Estado')
                    ->colors([
                        'primary',
                        'danger' => 'inactive',
                        'warning' => 'pending',
                        'success' => 'active',
                    ])

            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
