<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Kolom Kiri: Detail Utama & Analisis (Dibuat lebar agar enak ngetik analisis)
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Detail Project')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->label('Nama Project'),
                                
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
                                    ->rows(3),
                                    
                                Forms\Components\TextInput::make('tags')
                                    ->placeholder('Contoh: Java, Laravel, ERP'),
                            ]),

                        // SEKSI BARU: Analisis Masalah & Tech Stack
                        Forms\Components\Section::make('Analisis & Spesifikasi')
                            ->description('Data ini akan muncul di pop-up detail proyek')
                            ->schema([
                                Forms\Components\Textarea::make('problem_analysis')
                                    ->label('Analisis Masalah')
                                    ->rows(5)
                                    ->placeholder('Jelaskan masalah yang diselesaikan proyek ini...'),
                                
                                Forms\Components\TextInput::make('tech_stack')
                                    ->label('Tech Stack')
                                    ->placeholder('Contoh: PHP, Tailwind, MariaDB'),
                            ]),
                    ])->columnSpan(2),

                // Kolom Kanan: Media & Visualisasi
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Media Utama')
                            ->schema([
                                Forms\Components\FileUpload::make('image')
                                    ->image()
                                    ->directory('projects')
                                    ->label('Cover Project'),
                            ]),

                        Forms\Components\Section::make('Visualisasi Sistem')
                            ->schema([
                                Forms\Components\FileUpload::make('erd_image')
                                    ->label('Upload ERD')
                                    ->image()
                                    ->directory('projects/diagrams'),
                                
                                Forms\Components\FileUpload::make('flowchart_image')
                                    ->label('Upload Flowchart')
                                    ->image()
                                    ->directory('projects/diagrams'),
                            ]),
                    ])->columnSpan(1),

            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->circular(),
                
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Planned' => 'gray',
                        'In Progress' => 'warning',
                        'Completed' => 'success',
                        default => 'gray',
                    }),

                Tables\Columns\TextColumn::make('tags')
                    ->limit(20),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
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