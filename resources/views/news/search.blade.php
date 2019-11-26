@extends('layout.layout')

@section('content')
    @include('news.banner')

    <div class="container-fluid grid-back">
        <div class="blank-block"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="artical-container">
                        @if($count != 0)
                            <p>为您找到 <span style="color: #AF0E22">{{ $count }}</span> 条关于 <span style="color: #AF0E22">[ {{ $info }} ]</span> 的内容</p>
                            <hr style="background-color: #AF0E22; margin-bottom: 40px; margin-top: 16px ">
                            <ul style="padding: 0">
                                @foreach($result as $item)
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
                        @else
                            <p>抱歉, 没有关于 <span style="color: #AF0E22">[ {{ $info }} ]</span> 的相关内容, 试试其他搜索项吧</p>
                        @endif
                    </div>
                </div>
                @if(Agent::isPhone())
                    <div class="blank-block-m"></div>
                @endif
                <div class="col-12 col-lg-4">
                    <div class="text-center artical-container sticky-top">
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
    @endsection
