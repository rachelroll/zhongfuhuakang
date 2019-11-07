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
use Laravel\Nova\Fields\Boolean;
use Davidpiesse\NovaToggle\Toggle;
use MarkRassamni\InlineBoolean\InlineBoolean;
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
            Text::make('新闻标题','title')->rules('required')->updateRules('sometimes'),
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
            ])->displayUsingLabels()->rules('required')->updateRules('sometimes'),
            ImageUploadPreview::make('封面图', 'cover')->disk('oss')->maxWidth(255),

            InlineBoolean::make('是否推在首页', 'promotion')
                ->inlineOnIndex()  // Use inline field on the index page
                ->inlineOnDetail()  // Use inline field on the detail page
                ->enableMessage('设为推荐新闻成功')  // Toast message when enabling boolean
                ->disableMessage('设为非推荐新闻成功')  // Toast message when disabling boolean
                ->trueText('推荐')  // Change the text describing true boolean values
                ->falseText('非推荐')  // Change the text describing false boolean values
                ->showTextOnIndex()  // Show true/false text beside the checkbox on the index page

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
