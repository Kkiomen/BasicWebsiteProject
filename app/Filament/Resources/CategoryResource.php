<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make(Lang::get('category.basic'))
                    ->description(Lang::get('category.basic_description'))
                    ->schema([
                        Forms\Components\Select::make('parent_id')
                            ->label(Lang::get('category.parent_id'))
                            ->options(Category::all()->pluck('name', 'id'))
                            ->searchable(),
                        Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label(Lang::get('category.name'))
                                    ->live()
                                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                                    ->required(),
                                Forms\Components\TextInput::make('slug')
                                    ->label('Slug')
                                    ->readOnly(true)
                                    ->required(),
                            ]),
                    ]),
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\MarkdownEditor::make('description')
                            ->label(Lang::get('category.description')),
                    ]),
                Forms\Components\Toggle::make('is_visible')
                    ->label(Lang::get('category.is_visible')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('name')
                    ->label(Lang::get('category.name')),
                Tables\Columns\IconColumn::make('is_visible')
                    ->label(Lang::get('category.is_visible'))
                    ->alignCenter(true)
                    ->boolean(),
                Tables\Columns\TextColumn::make('parent_id')
                    ->label(Lang::get('category.parent_id')),
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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return Lang::get('category.categories');
    }

    public static function getBreadcrumb(): string
    {
        return Lang::get('category.categories');
    }

    public static function getNavigationGroup(): ?string
    {
        return Lang::get('category.categories');
    }
}
