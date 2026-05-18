<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProjectResource\Pages;
use App\Filament\Admin\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Kartu Utama
                Forms\Components\Section::make('Detail Project')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->label('Nama Project'),
                        
                        // Pilihan Status (Sesuai mau dosen)
                        Forms\Components\Select::make('status')
                            ->options([
                                'Planned' => 'Planned 📅',
                                'In Progress' => 'In Progress 🏗️',
                                'Completed' => 'Completed ✅',
                            ])
                            ->required()
                            ->default('In Progress'),

                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->rows(5),
                            
                        Forms\Components\TextInput::make('tags')
                            ->placeholder('Contoh: Java, Laravel, ERP'),
                    ])->columnSpan(2),

                // Kartu Samping (Media)
                Forms\Components\Section::make('Media')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->directory('projects'),
                    ])->columnSpan(1),
            ])->columns(3);
    }

        public static function table(Table $table): Table
        {
            return $table
            ->columns([
                // Tambahkan kolom-kolom ini ✨
                Tables\Columns\ImageColumn::make('image')
                    ->circular(), // Biar fotonya bulat lucu
                
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('status')
                    ->badge() // Biar ada warnanya seperti label
                    ->color(fn (string $state): string => match ($state) {
                        'Planned' => 'gray',
                        'In Progress' => 'warning',
                        'Completed' => 'success',
                    }),

                Tables\Columns\TextColumn::make('tags')
                    ->limit(20),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
