<?php

namespace App\Filament\Resources\MeetingResource\Pages;

use App\Filament\Resources\MeetingResource;
use App\Models\Meeting;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\Page;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\User;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Hidden;

class MakeMinutes extends EditRecord
{
    protected static string $resource = MeetingResource::class;

    protected static ?string $title = 'Hacer Acta';

    protected static ?string $model = Meeting::class;




    protected static string $view = 'filament.resources.meeting-resource.pages.make-minutes';

    protected function beforeSave(): void
    {
       $this->record->status='done';
       $this->record->update(
        $this->form->getState(),
    );
    }


    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),

            Actions\RestoreAction::make(),
        ];
    }



    protected function getFormSchema(): array
    {
        return [


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
                                        Select::make('status')
                                        ->label('Estado')
                                        ->options([
                                            'attends' => 'Asiste',
                                            'absent' => 'Ausente',

                                        ])
                                            ])
                                    ->columns(2)
                                    ->grid(1)
                                    ->collapsible()
                                    ->disableItemMovement()
                                    ->minItems(1)
                                    ->required(),


                                Repeater::make('meeting_order')
                                ->label('Desarrollo del Orden del Día')
                                ->columnSpan([
                                    'sm' => 12,
                                    'lg' => 12,
                                ])
                                ->schema([
                                    TextInput::make('topic')
                                        ->label('Tema')
                                        ->required(),

                                    RichEditor::make('Tema')
                                    ->toolbarButtons([

                                        'blockquote',
                                        'bold',
                                        'bulletList',

                                        'italic',
                                        'link',
                                        'orderedList',
                                        'redo',

                                        'undo',
                                    ])
                                        ])
                                ->columns(1)
                                ->grid(1)
                                ->collapsible()
                                ->disableItemMovement()
                                ->minItems(1)
                                ->required(),

                                Repeater::make('commitments')
                                ->label('Compromisos')
                                ->columnSpan([
                                    'sm' => 12,
                                    'lg' => 12,
                                ])
                                ->schema([
                                    TextInput::make('commitment')
                                        ->label('Compromiso')
                                        ->required(),

                                    TextInput::make('responsible')
                                        ->label('Responsable')
                                        ->required(),
                                    DatePicker::make('deadline')
                                        ->label('Tiempo de Entrega')

                                        ])
                                ->columns(3)
                                ->grid(1)
                                ->collapsible()
                                ->disableItemMovement()


        ];
    }


}
