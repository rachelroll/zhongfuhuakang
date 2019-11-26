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

        a:hover {
            color: #AF0E22;
        }
    </style>
@endsection

@section('content')
    @include('news.banner')

    <div class="container-fluid">
        <div class="blank-block"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <div class="artical-container">
                        <div class="r-shadow-wrapper">
                            <div class="row r-shadow-wrapper-card">
                                <div class="col-12 col-lg-4">
                                    <a href="{{ route('news.show', ['id' => $promotion->id]) }}" class="img-scale">
                                        <img class="banner rounded" src="{{ 'http://' .env('CDN_DOMAIN').'/'. $promotion->cover }}" alt=""/>
                                    </a>
                                </div>
                                @if(Agent::isPhone())
                                    <div class="blank-block-m"></div>
                                @endif
                                <div class="col-12 col-lg-8">
                                    <a href="{{ route('news.show', ['id' => $promotion->id]) }}">
                                        <h5>{{ $promotion->title }}</h5>
                                    </a>
                                    <p class="small-font">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($promotion->updated_at))->format('Y-m-d') }}</p>
                                    <hr>
                                    <p>
                                        {{ $promotion->description }}
                                    </p>
                                </div>
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
                </div>
                @if(Agent::isPhone())
                    <div class="blank-block-m"></div>
                @endif
                <div class="col-12 col-lg-3">
                    <div class="text-center search-border sticky-top">
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
        <div class="blank-block"></div>
    </div>
@stop
