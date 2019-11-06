<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Image;
use Ajhaupt7\ImageUploadPreview\ImageUploadPreview;
use Waynestate\Nova\CKEditor;
use Laravel\Nova\Http\Requests\NovaRequest;

class News extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\News';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    public static function label()
    {
        return '资讯中心';
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('新闻标题','title')->rules('required'),
            Text::make('记者','author'),
            Text::make('简介','description')->hideFromIndex(),
            //Trix::make('新闻正文', 'content')->withFiles('oss')->rules('required'),

            CKEditor::make('新闻正文', 'content')->options([
                'height' => 600,
            ])->hideFromIndex(),
            DateTime::make('发布时间', 'created_at')->hideFromIndex(),
            Select::make('分类', 'type')->options([
                '0' => '公司新闻',
                '1' => '圆梦乡村',
                '2' => '专题系列',
                '3' => '行业动态',
            ])->displayUsingLabels()->rules('required'),
            ImageUploadPreview::make('封面图', 'cover')->disk('oss')->maxWidth(255)
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
