@extends('layout.layout')

@section('css')
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

    <!-- Demo styles -->
<style>
        body {
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            /*font-size: 14px;*/
            color:#000;
            margin: 0;
            padding: 0;
        }
        .swiper-container {
            width: 100%;
            height: 240px;
            margin: 20px auto;
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            /*height: 120px;*/
        }
        .append-buttons {
            text-align: center;
            margin-top: 20px;
        }
        .append-buttons a {
            display: inline-block;
            border: 1px solid #007aff;
            color: #007aff;
            text-decoration: none;
            padding: 4px 10px;
            border-radius: 4px;
            margin: 0 10px;
            font-size: 13px;
        }

        .swiper-wrapper {
            height: 280px;
        }

        .swiper-slide img {
            width: 100%;
            border-radius: 5px;
        }

        :root {
            --swiper-theme-color: #AF0E22;
        }

        .mask {
            position: absolute;
            top: 0;
            filter: alpha(opacity=60);
            background-color: #000;
            z-index: 1002;
            left: 0;
            opacity:0.6;
            -moz-opacity:0.5;
            padding: 100px 16px 16px;
            font-size: 20px;
            line-height: 30px;
            color: #fff;
            border-radius: 5px;
        }

        a, a:link, a:visited, a:hover, a:active {
            text-decoration:none;
            color:#333;
        }

        button.more a:visited, button.more a:hover, button.more a:active {
            color: #fff;
        }

        button.more a, button.more a:link {
            color: #333;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid" style="padding: 0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/new/home-banner1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/new/home-banner2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/new/home-banner3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/new/home-banner4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="blank-block"></div>
    <div class="container">
        <div>
            <h2 class="text-center content-title">资讯中心</h2>
            <p class="text-center english-title">NEWS CENTER</p>
        </div>
    </div>
    <div class="blank-block"></div>
    <div class="container">
        <div class="row">
            <div class="col col-lg-7">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <img src="{{ 'http://' .env('CDN_DOMAIN').'/'. $promotion->cover }}" alt="" style="width: 100%;"/>
                    </div>
                    @if(Agent::isPhone())
                        <div class="blank-block-m"></div>
                    @endif
                    <div class="col-12 col-lg-7">
                        <div class="title font-normal" style="text-indent: 0; color: #333">{{ $promotion->title }}</div>
                        <p class="small-font">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($promotion->updated_at))->format('Y-m-d') }}</p>
                        <p class="content font-normal" style="font-size: 17px;">
                            {{ $promotion->description }}
                        </p>
                        <p>
                            <a href="{{ route('news.show', ['id' => $promotion->id]) }}" style="color: #AF0E22">
                                更多 ...
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col col-lg-5">
                <ul style="padding-left: 0px">
                    @foreach($news as $item)
                        <li>
                            <div class="font-normal" style="font-size: 17px; text-indent: 0">
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

    <div class="container">
        <button type="button" class="btn more btn-block">
            <a href="{{ route('news.index') }}" style="color: #AF0E22">MORE</a>
        </button>
    </div>

{{--     --}}

    <div class="container" style="padding: 60px 0;">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="img-block wrap-img">
                        <a href="{{ route('about.overview') }}">
                            <img class="image rounded scale-big" src="./img/new/370x290-aboutus.jpg" alt=""/>
                        </a>
                        <div class="label-swiper">
                            <h5>关于我们</h5>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-block wrap-img">
                        <a href="{{ route('business.system') }}">
                            <img class="image" src="./img/new/370x290-Business-layout.jpg" alt=""/>
                        </a>
                        <div class="label-swiper">
                            <h5>业务布局</h5>
                        </div>
{{--                        <div class="mask" style="display: none">--}}
{{--                            <h5>业务布局</h5>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-block wrap-img">
                        <a href="{{ route('news.index') }}">
                            <img class="image" src="./img/new/370x290-news.jpg" alt=""/>
                        </a>
                        <div class="label-swiper">
                            <h5>资讯中心</h5>
                        </div>
{{--                        <div class="mask" style="display: none">--}}
{{--                            <h5>资讯中心</h5>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-block wrap-img">
                        <a href="">
                            <img class="image" src="./img/new/370x290-Agriculturalresearch.jpg" alt=""/>
                        </a>
                        <div class="label-swiper">
                            <h5>农业研究</h5>
                        </div>
{{--                        <div class="mask" style="display: none" label = 'overview'>--}}
{{--                            <h5>农业研究</h5>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-block wrap-img">
                        <a href="{{ route('responsibility.index') }}">
                            <img class="image" src="./img/new/370x290-Socialresponsibility.jpg" alt=""/>
                        </a>
                        <div class="label-swiper">
                            <h5>社会责任</h5>
                        </div>
{{--                        <div class="mask" style="display: none" label = 'overview'>--}}
{{--                            <h5>社会责任</h5>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
{{--            <div class="swiper-pagination"></div>--}}
        <!-- Add Arrows -->
{{--            <div class="swiper-button-next"></div>--}}
{{--            <div class="swiper-button-prev"></div>--}}
        </div>
    </div>

{{--    <div class="blank-block"></div>--}}

    <div class="container" style="background-color: #fff; padding: 0;">
        <div>
            <h3 class="text-center content-title">商务合作</h3>
            <p class="text-center english-title">BUSINESS COOPERATOR</p>
        </div>

        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="">
                        <img src="/img/new/zhongfuxianglv.png" alt=""/>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img src="/img/new/yuanmengxiangcun.png" alt=""/>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img src="/img/new/tuancan.png" alt=""/>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img src="/img/new/jiaheyangguanglogo.jpg" alt=""/>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img src="/img/new/meinuologo.jpg" alt=""/>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img src="/img/new/nongjilogo.jpg" alt=""/>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img src="/img/new/bangdelogo.jpg" alt=""/>
                    </a>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
{{--            <div class="swiper-button-next"></div>--}}
{{--            <div class="swiper-button-prev"></div>--}}
        </div>
    </div>

    <div class="blank-block"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var appendNumber = 4;
        var prependNumber = 1;
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 4,
            centeredSlides: false,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

    </script>

    <script>
        $(document).ready(function(){
            $(".img-block").hover(function(){
                $(this).children(".mask").css("height",$(".image").height());
                $(this).children(".mask").css("width",$(".image").width());
                $(this).children(".mask").show();
            }, function(){
                $(this).children(".mask").hide();
            });

            $(".mask").click(function () {
                var url = $(this).attr('label');
                window.location.href = "./" + url;
            });
        });
    </script>

@stop
