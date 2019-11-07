@extends('layout.layout')

@section('css')
    <style type="text/css">
        ul {
            list-style-type: none;
        }

        a, a:link, a:visited, a:hover, a:active {
            text-decoration:none;
            color:#333;
        }
    </style>
@endsection

@section('content')
    @include('news.banner')

    <div class="blank-block"></div>

    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="col-4">
                        <img class="banner" src="{{ 'http://' .env('CDN_DOMAIN').'/'. $promotion->cover }}" alt=""/>
                    </div>
                    <div class="col-8">
                        <a href="{{ route('news.show', ['id' => $promotion->id]) }}">
                            <h5>{{ $promotion->title }}</h5>
                            <p class="small-font">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($promotion->updated_at))->format('Y-m-d') }}</p>
                            <hr>
                            <p>
                                {{ $promotion->description }}
                            </p>
                        </a>
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
