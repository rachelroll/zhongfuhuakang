@extends('layout.layout')

@section('css')
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

    <!-- Demo styles -->
    <style>
        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            /*font-size: 14px;*/
            color:#000;
            margin: 0;
            padding: 0;
        }
        .swiper-container {
            width: 100%;
            height: 300px;
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

        .swiper-slide img {
            width: 100%;
        }

        .mask {
            position: absolute;
            top: 50px;
            filter: alpha(opacity=60);
            background-color: #000;
            z-index: 1002;
            left: 0;
            opacity:0.6;
            -moz-opacity:0.5;
            padding: 80px 16px 16px;
            font-size: 16px;
            line-height: 30px;
            color: white;
        }

        a, a:link, a:visited, a:hover, a:active {
            text-decoration:none;
            color:#333;
        }

        button.more a, button.more a:link, button.more a:visited, button.more a:hover, button.more a:active {
            color: #fff;
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
            <h3 class="text-center">资讯中心</h3>
            <p class="text-center font-weight-lighter">NEWS CENTER</p>
        </div>
    </div>
    <div class="blank-block"></div>
    <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="row">
                    <div class="col-4" style="padding: 0 20px 0 0">
                        <img src="{{ 'http://' .env('CDN_DOMAIN').'/'. $promotion->cover }}" alt="" style="width: 100%;"/>
                    </div>
                    <div class="col-8">
                        <div class="title">{{ $promotion->title }}</div>
                        <p class="small-font">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($promotion->updated_at))->format('Y-m-d') }}</p>
                        <p class="content">
                            {{ $promotion->description }}
                        </p>
                        <p>
                            <a href="{{ route('news.show', ['id' => $promotion->id]) }}">
                                查看详情
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <ul>
                    @foreach($news as $item)
                        <li>
                            <div class="row">
                                <div class="col-4">
                                    <p class="small-font">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($item->updated_at))->format('Y-m-d') }}</p>
                                </div>
                                <div class="col-8">
                                    <a href="{{ route('news.show', ['id' => $item->id]) }}">
                                        <p>
                                            {{ $item->title }}
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="blank-block"></div>

    <div class="container">
        <button type="button" class="btn btn-primary more btn-block">
            <a href="{{ route('news.index') }}">MORE</a>
        </button>
    </div>

    <div class="blank-block"></div>

    <div class="container" style="background-color: #fff; padding: 40px 0;">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="img-block">
                        <a href="">
                            <img class="image" src="./img/new/01-Company profile.jpg" alt=""/>
                        </a>
                        <div class="mask" style="display: none">
                            <h5>关于我们</h5>
                            <p>这里是关于我们</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-block">
                        <a href="">
                            <img class="image" src="./img/new/01-Company profile.jpg" alt=""/>
                        </a>
                        <div class="mask" style="display: none">
                            <h5>关于我们</h5>
                            <p>这里是关于我们</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-block">
                        <a href="">
                            <img class="image" src="./img/new/01-Company profile.jpg" alt=""/>
                        </a>
                        <div class="mask" style="display: none">
                            <h5>资讯中心</h5>
                            <p>这里是关于我们</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-block">
                        <a href="">
                            <img class="image" src="./img/new/01-Company profile.jpg" alt=""/>
                        </a>
                        <div class="mask" style="display: none">
                            <h5>业务布局</h5>
                            <p>这里是关于我们</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-block">
                        <a href="">
                            <img class="image" src="./img/new/01-Company profile.jpg" alt=""/>
                        </a>
                        <div class="mask" style="display: none">
                            <h5>关于我们</h5>
                            <p>这里是关于我们</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-block">
                        <a href="">
                            <img class="image" src="./img/new/01-Company profile.jpg" alt=""/>
                        </a>
                        <div class="mask" style="display: none">
                            <h5>关于我们</h5>
                            <p>这里是关于我们</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img-block">
                        <a href="">
                            <img class="image" src="./img/new/01-Company profile.jpg" alt=""/>
                        </a>
                        <div class="mask" style="display: none">
                            <h5>关于我们</h5>
                            <p>这里是关于我们</p>
                        </div>
                    </div>
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

    <div class="container" style="background-color: #fff; padding: 80px 0 0 0;">
        <div>
            <h3 class="text-center">合作伙伴</h3>
            <p class="text-center font-weight-lighter">COOPERATOR PARTNER</p>
        </div>

        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="">
                        <img src="http://www.dsgd.co/Upload/%E5%8C%97%E4%BA%AC%E9%A6%96%E5%86%9C1-11171468689.jpg" alt=""/>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img src="http://www.dsgd.co/Upload/link1-11191440673.jpg" alt=""/>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img src="http://www.dsgd.co/Upload/link1-11191440673.jpg" alt=""/>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img src="http://www.dsgd.co/Upload/link1-11191440673.jpg" alt=""/>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img src="http://www.dsgd.co/Upload/link1-11191440673.jpg" alt=""/>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="">
                        <img src="http://www.dsgd.co/Upload/link1-11191440673.jpg" alt=""/>
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
        document.querySelector('.prepend-2-slides').addEventListener('click', function (e) {
            e.preventDefault();
            swiper.prependSlide([
                '<div class="swiper-slide">Slide ' + (--prependNumber) + '</div>',
                '<div class="swiper-slide">Slide ' + (--prependNumber) + '</div>'
            ]);
        });
        document.querySelector('.prepend-slide').addEventListener('click', function (e) {
            e.preventDefault();
            swiper.prependSlide('<div class="swiper-slide">Slide ' + (--prependNumber) + '</div>');
        });
        document.querySelector('.append-slide').addEventListener('click', function (e) {
            e.preventDefault();
            swiper.appendSlide('<div class="swiper-slide">Slide ' + (++appendNumber) + '</div>');
        });
        document.querySelector('.append-2-slides').addEventListener('click', function (e) {
            e.preventDefault();
            swiper.appendSlide([
                '<div class="swiper-slide">Slide ' + (++appendNumber) + '</div>',
                '<div class="swiper-slide">Slide ' + (++appendNumber) + '</div>'
            ]);
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
        });
    </script>

@stop
