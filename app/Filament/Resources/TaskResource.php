<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TaskResource\Pages;
use App\Models\Task;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TaskResource extends Resource
{
    protected static ?string $model = Task::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?string $navigationLabel = 'Daftar Tugas';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Input untuk memilih Kategori dari tabel categories
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->label('Kategori')
                    ->searchable()
                    ->preload()
                    ->required(),
                    
                Forms\Components\TextInput::make('title')
                    ->label('Judul Tugas')
                    ->required()
                    ->maxLength(255),
                    
                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi')
                    ->columnSpanFull(),
                    
                // Input Status dengan pilihan Dropdown
                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        'pending' => 'Pending',
                        'in-progress' => 'In Progress',
                        'done' => 'Done',
                    ])
                    ->default('pending')
                    ->required(),
                    
                Forms\Components\DatePicker::make('deadline')
                    ->label('Deadline'),
                    
                // Input Prioritas dengan pilihan Dropdown
                Forms\Components\Select::make('priority')
                    ->label('Prioritas')
                    ->options([
                        'low' => 'Low',
                        'medium' => 'Medium',
                        'high' => 'High',
                    ])
                    ->default('medium')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),
                    
                // Menampilkan nama kategori dari relasi database
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Kategori')
                    ->sortable()
                    ->searchable()
                    ->badge(),
                    
                // Status dengan Badge Warna (abu, kuning, hijau)
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'gray',
                        'in-progress' => 'warning',
                        'done' => 'success',
                        default => 'primary',
                    })
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('deadline')
                    ->label('Deadline')
                    ->date()
                    ->sortable(),
                    
                // Prioritas dengan Badge Warna
                Tables\Columns\TextColumn::make('priority')
                    ->label('Prioritas')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'low' => 'info',
                        'medium' => 'warning',
                        'high' => 'danger',
                        default => 'gray',
                    })
                    ->sortable(),
            ])
            ->filters([
                // Filter untuk menyaring berdasarkan status
                Tables\Filters\SelectFilter::make('status')
                    ->label('Filter Status')
                    ->options([
                        'pending' => 'Pending',
                        'in-progress' => 'In Progress',
                        'done' => 'Done',
                    ]),
                    
                // Tambahan: Filter untuk menyaring berdasarkan Kategori
                Tables\Filters\SelectFilter::make('category_id')
                    ->relationship('category', 'name')
                    ->label('Filter Kategori')
                    ->searchable()
                    ->preload(),
          
            ])
            ->actions([
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
            'index' => Pages\ListTasks::route('/'),
            'create' => Pages\CreateTask::route('/create'),
            'edit' => Pages\EditTask::route('/{record}/edit'),
        ];
    }
}