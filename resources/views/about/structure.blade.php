@extends('layout.layout')

@section('content')
    <div class="container-fluit">
        <img class="banner" src="/img/new/aboutus-banner.jpg" alt=""/>
    </div>

    <div class="blank-block"></div>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">主页</a></li>
                <li class="breadcrumb-item"><a href="{{ route('about.overview') }}">关于公司</a></li>
                <li class="breadcrumb-item active" aria-current="page">组织架构</li>
            </ol>
        </nav>
    </div>
    @if(Agent::isDesktop())
        <div class="blank-block"></div>
    @endif
    <div class="container">
        <div class="row">
            @include('about.nav')
            <div class="col-md-9 col-12">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="">
                        <div class="text-center">
                            <h2 class="content-title tite-with-decoration">组织架构</h2>
                            <span class="title-decoration"></span>
{{--                            <p style="color: #343434; font-size: 24px;">STRUCTURE</p>--}}
                        </div>
                        <img class="banner" src="/img/new/02A-rchitecture diagram.jpg" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blank-block"></div>
    <div class="blank-block"></div>

@stop
