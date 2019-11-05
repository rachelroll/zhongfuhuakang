@extends('layout.layout')

@section('content')
    <div class="container-fluit">
        <img class="banner" src="./img/new/03-corporate culture-1.jpg" alt=""/>
    </div>

    <div class="blank-block"></div>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">主页</a></li>
                <li class="breadcrumb-item"><a href="{{ route('about.overview') }}">关于公司</a></li>
                <li class="breadcrumb-item active" aria-current="page">公司概况</li>
            </ol>
        </nav>
    </div>

    <div class="blank-block"></div>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" id="v-pills-home-tab" href="#" role="tab" aria-selected="true">公司概况</a>
                    <a class="nav-link" id="v-pills-profile-tab" href="{{ route('about.structure') }}" role="tab" aria-selected="false">组织架构</a>
                    <a class="nav-link active" id="v-pills-messages-tab" href="{{ route('about.culture') }}" role="tab" aria-selected="false">企业文化</a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="">
                        <div class="text-center">
                            <h2>企业理念</h2>
                            <p>ENTERPRISE CONCEPT</p>
                        </div>
                        <br>
                        <br>
                        <img class="banner" src="/img/new/03-corporate culture-1.jpg" alt=""/>
                        <div class="blank-block"></div>
                        <img class="banner" src="/img/new/03-corporate culture-2.jpg" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blank-block"></div>
    <div class="blank-block"></div>

@stop