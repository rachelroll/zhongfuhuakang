@extends('layout.layout')

@section('content')
    <div class="container-fluit">
        <img class="banner" src="/img/new/Socialresponsibility-banner.jpg" alt=""/>
    </div>
    <div class="container">
        <div class="blank-block"></div>
        <div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">推动区域发展</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">创造和谐乡村</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">助力现代农业</a>
                </div>
            </div>
            <div class="col-9">
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
