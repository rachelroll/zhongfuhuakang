@extends('layout.layout')

@section('css')
    <style type="text/css">
        ul {
            list-style-type: none;
        }
    </style>
    @endsection

@section('content')
    <div class="container-fluit">
        <img class="banner" src="./img/new/03-corporate culture-1.jpg" alt=""/>
    </div>

    <div class="blank-block"></div>

    @foreach($news as $key => $items)
        <div class="container">
            <h2>{{ $items->type }}</h2>
        </div>

        <div class="blank-block"></div>

        <div class="container">
            <div class="row">
                <div class="col-3">
                    <img class="banner" src="/img/new/01-Company profile.jpg" alt="" />
                </div>
                <div class="col-5">
                    <h5>{{ $items->first->title }}</h5>
                    <p class="small-font">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($items->first->created_at))->format('Y-m-d') }}</p>
                    <p>{{ $items->first->description }}</p>
                    <br>
                    <p><a href="{{ route('news.show', ['id' => $items->first->id]) }}">查看详情</a></p>
                </div>
                <div class="col-4">
                    <ul>
                        @foreach($items as $item)
                            <li>
                                <div class="row">
                                    <div class="col-4 small-font">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($item->created_at))->format('Y-m-d') }}</div>
                                    <div class="col-8">
                                        <p><a href="{{ route('news.show', ['id' => $items->first->id]) }}" style="color: #333">{{ $item->title }}</a></p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="blank-block"></div>
    @endforeach


    <div class="blank-block"></div>



@stop
