@extends('layout.layout')

@section('css')
    <style>
        .image-style-align-right {
            text-align: right;
        }

        .image-style-align-center, .image {
            text-align: center;
        }

        .image-style-align-left {
            text-align: left;
        }

        .attachment, .attachment--preview {
            text-align: center;
        }

        .attachment__caption {
            display: none;
        }

    </style>
    @endsection

@section('content')
   @include('news.banner')

    <div class="blank-block"></div>
    <div class="blank-block"></div>

    <div class="container" style="width: 90%;">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h2>{{ $news->title ?? '标题'}}</h2>
                    <br>
                    <p class="small-font">发布时间: {{ \Carbon\Carbon::createFromTimeStamp(strtotime($news->updated_at))->format('Y-m-d') }}</p>
                </div>

                <div class="blank-block"></div>
                <div class="font-normal" style="text-indent: 0">
                    {!! $news->content !!}
                </div>
            </div>
        </div>
    </div>

    <div class="blank-block"></div>

@stop
