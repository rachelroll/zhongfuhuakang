@extends('layout.layout')

@section('content')
   @include('news.banner')

    <div class="blank-block"></div>
    <div class="blank-block"></div>

    <div class="container">
        <div class="text-center">
            <h2>{{ $news->title ?? '标题'}}</h2>
            <br>
            <p class="small-font">发布时间: {{ \Carbon\Carbon::createFromTimeStamp(strtotime($news->created_at))->format('Y-m-d') }}</p>
        </div>

        <div class="blank-block"></div>
        <div>
            {!! $news->content !!}
        </div>
    </div>

    <div class="blank-block"></div>

@stop
