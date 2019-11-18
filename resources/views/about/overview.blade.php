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
                <li class="breadcrumb-item"><a href="{{ route('about.overview') }}">关于我们</a></li>
                <li class="breadcrumb-item active" aria-current="page">公司概况</li>
            </ol>
        </nav>
    </div>

    <div class="blank-block"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-12">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" href="{{ route('about.overview') }}" role="tab" aria-selected="false">公司概况</a>
                    <a class="nav-link" id="v-pills-profile-tab" href="{{ route('about.structure') }}" role="tab" aria-selected="false">组织架构</a>
                    <a class="nav-link" id="v-pills-messages-tab" href="{{ route('about.culture') }}" role="tab" aria-selected="false">企业文化</a>
                </div>
            </div>
            <div class="col-md-9 col-12">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active font-normal" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="text-center">
                            <h2 class="content-title tite-with-decoration">北京中福华康农业开发有限公司</h2>
                            <span class="title-decoration"></span>
                        </div>
                        <div class="blank-block"></div>
                        <p>
                            北京中福华康农业开发有限公司致力于农业、农资领域龙头企业投资经营管理、农业全产业链的要素资源整合及农业高附加值优质项目的资本运作，通过整合、流动和优化配置，达到农业全产业链贯通；同时，积极参与各级政府主导的农业开发项目，帮助区域农业项目发展，追求“所属企业资本增值”和“特色农业区产业发展”的双重目标。
                        </p>
                        <p>
                            北京中福华康农业开发有限公司将围绕区域农业开发项目展开资产管理、生产经营和资本运作以土地成片开发为基础，充分利用项目业务板块间的关联性，进行协同运作和专业化管理，完成项目建设与运营，同时作为项目经营主体和资源配置平台，可以有效串联起下属独立经营的产业链内子分公司，将区域发展赋予的使命和任务分配至各业务板块。
                        </p>
                        <p>
                            公司将以最佳的商业模式、优秀的投资理念和服务效能，整合中国乃至全球的优质农业资源，建设为产业体系完整、服务功能健全的综合性农业集团，引领和推动中国现代农业的持续健康发展！
                        </p>
                        <br>
                        <br>
                        <img class="banner" src="/img/new/01-Company profile.jpg" alt=""/>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="text-center">
                            <h2>组织架构</h2>
                            <p>STRUCTURE</p>
                        </div>
                        <img class="banner" src="/img/new/02A-rchitecture diagram.jpg" alt=""/>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
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
