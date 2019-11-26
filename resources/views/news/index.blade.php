@extends('layout.layout')

@section('css')
    <style type="text/css">
        /*ul {*/
        /*    list-style-type: none;*/
        /*}*/

        a:hover {
            color: #AF0E22;
        }
    </style>
    @endsection

@section('content')
    @include('news.banner')

    <div class="blank-block"></div>

    @foreach($news as $key => $items)
        <div class="container">
            <h2 class="content-title">
                <a href="{{ route('news.list', ['id'=> $key]) }}">{{ $items->type }}
                </a>
            </h2>
        </div>

        <div class="blank-block-m"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 wrap-img">
                    <a href="{{ route('news.show', ['id' => $items->promotion->id]) }}">
                        <img class="banner rounded scale-big" src="{{ 'http://' .env('CDN_DOMAIN').'/'. $items->promotion->cover }}" alt="" />
                    </a>
                </div>
                @if(Agent::isPhone())
                    <div class="blank-block-m"></div>
                @endif
                <div class="col-12 col-lg-4">
                    <a href="{{ route('news.show', ['id' => $items->promotion->id]) }}">
                        <h5>{{ $items->promotion->title }}</h5>
                    </a>
                    <p class="small-font">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($items->promotion->updated_at))->format('Y-m-d') }}</p>
                    <p>{{ $items->promotion->description }}</p>
                    <br>
{{--                    <p><a href="{{ route('news.show', ['id' => $items->promotion->id]) }}">查看详情</a></p>--}}
                </div>
                <div class="col-12 col-lg-5">
                    <ul style="padding-left: 0">
                        @foreach($items as $item)
                            <li>
{{--                                <div class="row">--}}
{{--                                    <div class="col-4 small-font">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($item->updated_at))->format('Y-m-d') }}</div>--}}
{{--                                    <div class="col-8">--}}
{{--                                        <p><a href="{{ route('news.show', ['id' => $items->promotion->id]) }}" style="color: #333">{{ $item->title }}</a></p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="font-normal" style="font-size: 17px; text-indent: 0em">
                                    <a href="{{ route('news.show', ['id' => $item->id]) }}" class="label">
                                    <span style="height: 40px; line-height: 40px">
                                        {{ \Carbon\Carbon::createFromTimeStamp(strtotime($item->updated_at))->format('Y-m-d') }}
                                    </span>
                                        &nbsp; &nbsp; &nbsp;
                                        <span style="height: 40px; line-height: 40px">
                                        {{ $item->title }}
                                    </span>
                                    </a>
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
