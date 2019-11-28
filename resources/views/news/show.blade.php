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

        .font-normal img {
            overflow: hidden;
        }
    </style>
    @endsection

@section('content')
   @include('news.banner')

    <div class="container-fluid">
        <div class="blank-block"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="artical-container">
                         <div class="text-center">
                             <h2 class="content-title">{{ $news->title ?? '标题'}}</h2>
                             <br>
                             <p class="small-font">发布时间: {{ \Carbon\Carbon::createFromTimeStamp(strtotime($news->updated_at))->format('Y-m-d') }}</p>
                         </div>
                         <div class="blank-block"></div>
                         <div class="font-normal" style="text-indent: 0">
                              {!! $news->content !!}
                         </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-center sticky-top search-border" >
                        <h5 style="color: #666">信息检索</h5>
                        <br>
                        <form action="{{ route('news.search')}}" METHOD="POST">
                            @csrf
                            <input class="form-control" type="text" name="news" placeholder="搜索">
                            <br>
                            <button type="submit" class="btn btn-primary mb-2 btn-block">搜索</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blank-block"></div>

@stop
