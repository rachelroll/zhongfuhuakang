@extends('layout.layout')
@section('css')
    <style>
        .wrap-iconic-case .text-image-row div.single-image {
            background-color: #ddd;
            padding: 32px;
            margin-right: 30px;
        }


        ul.nav {
            /*background-color: #333;*/
            /*overflow: auto;*/
            /*white-space: nowrap;*/
        }

        li.nav-item {
            /*display: inline-block;*/
            /*color: white;*/
            /*text-align: center;*/
            /*padding: 14px;*/
            /*text-decoration: none;*/
        }


        div.scrollmenu {
            background-color: #333;
            overflow: auto;
            white-space: nowrap;
        }

        div.scrollmenu div {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px;
            text-decoration: none;
        }

        div.scrollmenu div:hover {
            background-color: #777;
        }

        /* clear float */
        .clear:after {
            display: block;
            clear: both;
            content: "";
            visibility: hidden;
            height: 0
        }

        .clear {
            zoom: 1

        }

        /* end clear float */
        .swiper-container .swiper-wrapper {
            position: relative;
        }

        .swiper-container .swiper-wrapper .swiper-slide {
            /*border: 1px solid red;*/
            /*text-align: center;*/
            padding: 6px 0;
        }

        .child {
            display: none;
            /*position: absolute;*/
            /*z-index:999;*/
            /*top: 100px;*/
            width: 100%;
            font-weight: normal;
            /*padding: 10px;*/
            font-size: 18px;
            color: #666;
        }

        .child li {
            line-height: 60px;
            border-bottom: solid 1px #8a8a8a;

        }

        .parent {
            font-size: 18px;
            color: #666;

        }

        .show {
            display: block;
        }

        .hide {
            display: none;
        }

        .horizontal-container {
            margin: 0 auto;
            /*background-color: #f4ffe3;*/
            width: 100%;
            position: relative;
            /*border: 1px solid #e0ebcf;*/
        }

        .scroll-wrapper::-webkit-scrollbar {
            display: none;
        }

        .scroll-wrapper {
            margin: 0 auto;
            /* overflow: hidden; */
            border-radius: 5px;
            overflow-x: auto;
            -webkit-backface-visibility: hidden;
            -webkit-overflow-scrolling: touch; /* 2 */
        }

        .scroll-content {
            display: inline-block;
            white-space: nowrap;
        }

        .scroll-item {
            height: 48px;
            font-size: 24px;
            line-height: 48px;
            display: inline-block;
            padding: 0 10px;
        }

        .text-red {
            color: black;
            font-weight: bold;
            background-image: url(../img/red-back.png);
        }

        .h5, h5 {
            font-size: 1.1rem;
        }
    </style>
    @endsection
@section('content')
    <div class="container-fluit">
        <img class="banner" src="/img/new/Socialresponsibility-banner.jpg" alt=""/>
    </div>
    <div class="container">
        <div class="blank-block"></div>
        <div class="row">
            @if(Agent::isDeskTop())
            <div class="col-lg-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">推动区域发展</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">创造和谐乡村</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">助力现代农业</a>
                </div>
            </div>

            @elseif(Agent::isPhone())
                <div class="horizontal-container">
                    <div class="scroll-wrapper" ref="scroll">
                        <ul class="scroll-content nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item scroll-item">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">推动区域发展</a>
                            </li>
                            <li class="nav-item scroll-item">
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">创造和谐乡村</a>
                            </li>
                            <li class="nav-item scroll-item">
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">助力现代农业</a>
                            </li>
                        </ul>
                    </div>
                </div>
            @endif
            <div class="col-12 col-lg-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="blank-block"></div>
                        <div class="text-center">
                            <h2 class="content-title tite-with-decoration">推动区域发展</h2>
                            <span class="title-decoration"></span>
                        </div>
                        <div class="blank-block"></div>
                        <img class="banner" src="/img/new/Social-development.jpg" alt=""/>
                        <div class="blank-block"></div>
                        <p class="font-normal">中福华康农业开发集团致力于打造乡村与城镇共生共存、互促互进的关系，系统性地通过品牌营销手段将农产品、地理标识、旅游目的地和产业集群等多种类型统一管理，获得乡村内生动力，促进区域发展，带动农村建设。</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="blank-block"></div>
                        <div class="text-center">
                            <h2 class="content-title tite-with-decoration">创造和谐乡村</h2>
                            <span class="title-decoration"></span>
                        </div>
                        <div class="blank-block"></div>
                        <img class="banner" src="/img/new/Social-countryside.jpg" alt=""/>
                        <div class="blank-block"></div>
                        <p class="font-normal">中福华康农业开发集团整合资源，以农业旅游地产为龙头，全面整合“吃住行游购娱”农业旅游要素，建成农业旅游小镇、休闲度假地的综合型、规模化产品。带动基础设施建设，为公众创造健康、和谐的新乡村生活体验。</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="blank-block"></div>
                        <div class="text-center">
                            <h2 class="content-title tite-with-decoration">助力现代农业</h2>
                            <span class="title-decoration"></span>
                        </div>
                        <div class="blank-block"></div>
                        <img class="banner" src="/img/new/Social-Agriculture.jpg" alt=""/>
                        <div class="blank-block"></div>
                        <br>
                        <p class="font-normal">整合社会资源，聚集政府资本、金融资本、社会资金，聚集市场规模、人才、科技，推动农业龙头企业的建设和发展，用科技和金融带动现代农业、农资全产业链的高效、安全和可持续发展。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="blank-block"></div>
        <div class="blank-block"></div>
    </div>
    @endsection

@section('js')
    <script src="https://jkwedu-new.oss-cn-beijing.aliyuncs.com/script/bscroll.min.js"></script>
    <script>
        window.onload = function () {
            let wrapper = document.querySelector('.scroll-wrapper')
            let scroll = new BScroll(wrapper, {
                scrollX: true,
                scrollY: false,
                click: true,
            })
        }
    </script>
@endsection
