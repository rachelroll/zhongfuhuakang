@extends('layout.layout')

@section('css')
    <style type="text/css">
        ul {
            list-style-type: none;
        }
    </style>
@endsection

@section('content')
    @include('news.banner')

    <div class="blank-block"></div>

    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="row" style="border: 1px solid #eee">
                    <div class="col-4">
                        <img class="banner" src="{{ 'http://' .env('CDN_DOMAIN').'/'. $promotion->cover }}" alt=""/>
                    </div>
                    <div class="col-8">
                        <h5>标题</h5>
                        <p class="small-font">2019-10-22</p>
                        <hr>
                        <p>
                            简介简介.....
                        </p>
                    </div>
                </div>
                <div class="blank-block"></div>
                <ul style="padding: 0">
                    @foreach($news as $item)
                        <a href="{{ route('news.show', ['id' => $item->id]) }}">
                            <li>
                                <div class="row justify-content-between">
                                    <div class="col-auto mr-auto">
                                        {{ $item->title }}
                                    </div>
                                    <div class="col-auto">
                                        {{ \Carbon\Carbon::createFromTimeStamp(strtotime($item->updated_at))->format('Y-m-d') }}
                                    </div>
                                </div>
                                <hr>
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>
            <div class="col-4">
                <div class="text-center" style="background-color: #eee; margin-left: 16px; padding: 36px;">
                    <h5 style="color: #666">信息检索</h5>
                    <br>
                    <input class="form-control" type="text" placeholder="搜索">
                    <br>
                    <button type="submit" class="btn btn-primary mb-2 btn-block">搜索</button>
                </div>
            </div>
        </div>
    </div>


    <div class="blank-block"></div>



@stop
