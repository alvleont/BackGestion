<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MeetingResource\Pages;
use App\Filament\Resources\MeetingResource\RelationManagers;
use App\Models\Meeting;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use App\Models\User;
use Filament\Forms\Components\Hidden;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\BadgeColumn;

class MeetingResource extends Resource
{
    protected static ?string $model = Meeting::class;

    protected static ?string $modelLabel = 'reunión';
    protected static ?string $pluralModelLabel = 'reuniones';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(

                Wizard::make([
                    Wizard\Step::make('Datos de la reunión')
                        ->schema([
                            Grid::make([
                                'default' => 1,
                                'sm' => 3,
                                'xl' => 6,
                                '2xl' => 8,
                            ])
                                ->schema([
                                DateTimePicker::make('meeting_date')
                                    ->label('Fecha y Hora de la Reunión')->columnSpan([
                                        'sm' => 12,
                                        'lg' => 4,
                                    ])
                                    ->required(),

                                Select::make('type')
                                    ->label('Tipo')
                                    ->options([
                                        'online' => 'En línea',
                                        'in-person' => 'En persona',
                                    ])
                                    ->columnSpan([
                                        'sm' => 12,
                                        'lg' => 4,
                                    ])
                                    ->required(),
                                Select::make('organizer_id')
                                    ->label('Organizada por:')
                                    ->options(User::all()->pluck('name', 'id'))
                                    ->getSearchResultsUsing(fn (string $search) => User::where('name', 'like', "%{$search}%")->limit(50)->pluck('name', 'id'))
                                    ->searchable()
                                    ->columnSpan([
                                        'sm' => 12,
                                        'lg' => 4,
                                    ])
                                    ->required(),
                                Textarea::make('description')
                                    ->label('Descripción de la reunión')
                                    ->columnSpan([
                                        'sm' => 6,
                                        'lg' => 6,
                                    ])
                                    ->required(),
                                    Textarea::make('meeting_data')
                                    ->label('Dirección de la reunión')
                                    ->helperText('Incluir en este campo el link de la reunión, si es online')
                                    ->columnSpan([
                                        'sm' => 6,
                                        'lg' => 6,
                                    ])
                                    ->required(),

                                Repeater::make('participants')
                                    ->label('Participantes')
                                    ->columnSpan([
                                        'sm' => 12,
                                        'lg' => 12,
                                    ])
                                    ->schema([
                                        Select::make('participant_id')
                                            ->label('Participante')
                                            ->options(User::all()->pluck('name', 'id'))
                                            ->getSearchResultsUsing(fn (string $search) => User::where('name', 'like', "%{$search}%")->limit(50)->pluck('name', 'id'))
                                            ->searchable(),
                                            ])
                                    ->columns(1)
                                    ->grid(1)
                                    ->collapsible()
                                    ->disableItemMovement()
                                    ->minItems(1)
                                    ->required()
                                ]),
                        ]),

                    Wizard\Step::make('Orden del día')
                        ->schema([
                            Repeater::make('meeting_order')
                                    ->label('Orden del día')
                                    ->columnSpan([
                                        'sm' => 12,
                                        'lg' => 12,
                                    ])
                                    ->schema([
                                        TextInput::make('topic')
                                        ->label('Tema')
                                        ->required()
                                            ])
                                    ->columns(1)
                                    ->minItems(1)

                                    ->grid(1)
                                    ->collapsible()
                                    ->required()
                                ]),



                            ]),
                            Hidden::make('status')->default('scheduled')



                // $table->json('meeting_order');

                // $table->enum('status',['scheduled','done','cancelled']);
                // $table->json('minutes')->nullable();
                // $table->json('commitments')->nullable();
                //
            );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('meeting_date')
                    ->dateTime()
                    ->label('Fecha de Reunión'),
                Tables\Columns\TextColumn::make('organizer.name')
                    ->label('Organizada por'),
                BadgeColumn::make('status')
                    ->label('Estado')
                    ->enum([
                        'cancelled' => 'Cancelada',
                        'scheduled' => 'Programada',
                        'done' => 'Realizada',
                    ])
                    ->colors([
                        'primary',
                        'danger' => 'cancelled',
                        'warning' => 'scheduled',
                        'success' => 'done',
                    ])

            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('minutes')->label('Acta')
                ->icon('heroicon-o-bookmark')
                ->color('success')
                ->url(function (Meeting $record) {
                    return MeetingResource::getUrl('minutes',$record);
                }),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
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
            'index' => Pages\ListMeetings::route('/'),
            'create' => Pages\CreateMeeting::route('/create'),
            'view' => Pages\ViewMeeting::route('/{record}'),
            'edit' => Pages\EditMeeting::route('/{record}/edit'),
            'minutes'  => Pages\MakeMinutes::route('/{record}/minutes'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }


}
