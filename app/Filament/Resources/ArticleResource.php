<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
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

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make(Lang::get('category.basic'))
                    ->description(Lang::get('category.basic_description'))
                    ->schema([
                        Forms\Components\Select::make('category_id')
                            ->label(Lang::get('article.category'))
                            ->options(Category::all()->pluck('name', 'id'))
                            ->required()
                            ->searchable(),
                        Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label(Lang::get('article.name'))
//                                    ->live()
//                                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                                    ->required(),
                                Forms\Components\TextInput::make('slug')
                                    ->label('Slug')
//                                    ->readOnly(true)
                                    ->required(),
                            ]),
                    ]),
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\RichEditor::make('content')
                            ->label(Lang::get('article.description'))
                            ->toolbarButtons([
                                'code',
                                'attachFiles',
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                                'code',
                            ]),
                    ]),
                Forms\Components\Textarea::make('short_content')
                    ->label(Lang::get('article.short_description'))
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\Section::make()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Forms\Components\DatePicker::make('published_date')
                                    ->label(Lang::get('article.published_date'))
                                    ->required(),
                                Forms\Components\TagsInput::make('tags')
                                    ->label(Lang::get('article.tags'))
                                    ->required(),
                            ]),
                        Forms\Components\TextInput::make('author')
                            ->label(Lang::get('article.author'))
                            ->required(),
                    ]),
                Forms\Components\FileUpload::make('images')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('order')
                    ->label(Lang::get('article.order'))
                    ->numeric()
                    ->columnSpanFull()
                    ->minValue(0),
                Forms\Components\Toggle::make('is_lesson')
                    ->label(Lang::get('article.is_lesson')),
                Forms\Components\Toggle::make('is_visible')
                    ->label(Lang::get('article.is_visible')),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('title')
                    ->label(Lang::get('article.name')),
                Tables\Columns\IconColumn::make('is_visible')
                    ->label(Lang::get('article.is_visible'))
                    ->alignCenter(true)
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_lesson')
                    ->label(Lang::get('article.is_lesson'))
                    ->alignCenter(true)
                    ->boolean(),
                Tables\Columns\TextColumn::make('category_id')
                    ->label(Lang::get('article.category')),
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
            RelationManagers\TaskArticleRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return Lang::get('article.articles');
    }

    public static function getBreadcrumb(): string
    {
        return Lang::get('article.articles');
    }

    public static function getNavigationGroup(): ?string
    {
        return Lang::get('article.articles');
    }
}
