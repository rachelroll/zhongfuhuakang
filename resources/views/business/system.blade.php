@extends('layout.layout')

@section('css')
    <style>
        h2 {
            color: #343434;
            font-size: 38px;
        }

        p {
            text-indent: 0;
        }

        .strategy p {
            text-indent: 0
        }

        h5 {
            color: #343434;
        }
    </style>
    @endsection

@section('content')
    <div class="container-fluit">
        <img class="banner" src="/img/new/bussniesslayout-banner.jpg" alt=""/>
    </div>

    <div class="blank-block"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-12">
                <div class="nav flex-column nav-pills sticky-top" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">业务体系</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">战略布局</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">农业生产</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">乡村旅游观光</a>

                    <a class="nav-link" id="v-pills-ecommerce-tab" data-toggle="pill" href="#v-pills-ecommerce" role="tab" aria-controls="v-pills-ecommerce" aria-selected="false">电子商务 + 农业</a>

                    <a class="nav-link" id="v-pills-plans-tab" data-toggle="pill" href="#v-pills-plans" role="tab" aria-controls="v-pills-plans" aria-selected="false">规划计划</a>
                    <a class="nav-link" id="v-pills-homestay-tab" data-toggle="pill" href="#v-pills-homestay" role="tab" aria-controls="v-pills-homestay" aria-selected="false">民宿</a>
                </div>
            </div>
            <div class="col-md-9 col-12 font-normal" style="text-indent: 0">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="blank-block"></div>
                        <div class="text-center">
                            <h2 class="tite-with-decoration">业务体系</h2>
                            <span class="title-decoration"></span>
                        </div>
                        <div class="blank-block"></div>
                        <div class="special-title">
                            <div class="float-title-left">
                                <p>聚焦农业</p>
                                <span></span>
                            </div>
                            <div class="english-title">Focus agriculture</div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 col-12">
                                <img class="banner" src="/img/new/04-Business system-01.jpg" alt=""/>
                            </div>
                            <div class="col-md-5 col-12">
                                <p>
                                    北京中福华康农业开发有限公司定位于综合性农业开发企业，一方面投资经营农业、农资领域的龙头企业，致力于农业全产业链的要素资源整合和农业高附加值优质项目的资本运作，通过整合、流动和优化配置，达到投入产出的效益最大化；同时，自身又直接参与各级政府主导的农业开发项目，获得区域发展带来的综合效益。
                                </p>
                            </div>
                        </div>
                        <div class="blank-block"></div>
                        <div class="special-title-right">
                            <div class="float-title-right" style="right: 290px">
                                <p>区域发展</p>
                                <span></span>
                            </div>
                            <div class="english-title">Regional development</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-12">
                                <p>
                                    公司围绕区域农业开发项目展开资产管理、生产经营和资本运作以土地成片开发为基础，充分利用项目业务板块间的关联性，进行协同运作和专业化管理，完成项目建设与运营。同时作为项目经营主体和资源配置平台，有效串联下属独立经营的产业链内子分公司，将区域发展赋予的使命和任务分配至各业务板块，实现“资源-资产-资本”盈利增长。
                                </p>
                            </div>
                            <div class="col-md-7 col-12">
                                <img class="banner" src="/img/new/04-Business system-02.jpg" alt=""/>
                            </div>
                        </div>
                        <div class="blank-block"></div>
                        <div class="special-title">
                            <div class="float-title-left">
                                <p>农业基地</p>
                                <span></span>
                            </div>
                            <div class="english-title">Agricultural base</div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 col-12">
                                <img class="banner" src="/img/new/04-Business system-03.jpg" alt=""/>
                            </div>
                            <div class="col-md-5 col-12">
                                <p>
                                    公司将建立众多的国内外农业基地，伴随基地农产品种类多样，基于农业标准化、市场化、品牌化、产业化的核心运营模式生产的农产品种类将越来越丰富，同时着力推动解决一定区域内农业产业一体化进程，将区域品牌、产品品牌、国家“三品一标”战略和 “食品安全”战略紧密结合，打造一系列优质农资产品。
                                </p>
                            </div>
                        </div>
                        <div class="blank-block"></div>
                        <div class="special-title-right">
                            <div class="float-title-right">
                                <p>资本运作</p>
                                <span></span>
                            </div>
                            <div class="english-title">Capital operation</div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-12">
                                <p>
                                    企业投资运营方面，公司着力培育特色农企、潜力农企、拟上市公司，培育行业龙头企业，全面实施以品牌为核心，产业投资、渠道整合、品牌建设和金融服务四轮驱动的整体发展战略，整合社会资源，聚集政府资本、金融资本、社会资金，聚集市场规模、人才、科技，推动农业龙头企业的建设和发展，用科技和金融带动现代农业、农资全产业链的高效、安全和可持续发展。
                                </p>
                            </div>
                            <div class="col-md-7 col-12">
                                <img class="banner" src="/img/new/04-Business system-04.jpg" alt=""/>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="blank-block"></div>
                        <div class="text-center">
                            <h2 class="tite-with-decoration">战略布局</h2>
                            <span class="title-decoration"></span>
                        </div>
                        <div class="blank-block"></div>
                        <div>
                            <img class="banner" src="/img/new/05-Strategic layout.jpg" alt=""/>
                        </div>
                        <div class="blank-block"></div>
                        <p>
                            中国的现代农业经营战略，一定是从“资源农业”向“资产农业”再向“资本农业”跨越，从“产品经营”向“产业经营”再向“资本经营”跨越。以此为战略导向，我们就一定能够顺利在市场、社会阶层形成广泛共识，塑造一个现代化、国际化的农业集团品牌，实现既定位高远，又能脚踏实地、可操作、可执行的产业化破局。
                        </p>
                        <p>
                            整合社会资源建立示范企业，聚集政府资本、金融资本、社会资金，聚集市场规模、人才、科技，推动农业龙头企业的建设和发展，促进农业企业上市融资突破发展瓶颈，为涉农各类产业提供资金支持，培育特色农企、潜力农企、拟上市公司，培育延伸农业产业链。
                        </p>

                        <div class="blank-block"></div>

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">产业基地</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">农业金融</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">农业科技</a>
                            </li>
                        </ul>
                        <div class="blank-block"></div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="">
                                    <img class="banner" src="/img/new/05_01-Strategic layout.jpg" alt=""/>
                                </div>
                                <div class="blank-block"></div>
                                <p>
                                    北京中福华康农业开发有限公司将建立众多的国内外农业基地，伴随基地农产品种类多样，基于农业标准化、市场化、品牌化、产业化的核心运营模式生产的农产品种类将越来越丰富，同时着力推动解决一定区域内农业产业一体化进程，将区域品牌、产品品牌、国家“三品一标”战略和 “食品安全”战略紧密结合，打造一系列优质农资产品。
                                </p>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="">
                                    <img class="banner" src="/img/new/05_02-Strategic-layout.jpg" alt=""/>
                                </div>
                                <div class="blank-block"></div>
                                <p>北京中福华康农业开发有限公司着力培育特色农企、潜力农企、拟上市公司，培育行业龙头企业，全面实施以品牌为核心，产业投资、渠道整合、品牌建设和金融服务四轮驱动的整体发展战略，整合社会资源，聚集政府资本、金融资本、社会资金，聚集市场规模、人才、科技，推动农业龙头企业的建设和发展，用科技和金融带动现代农业、农资全产业链的高效、安全和可持续发展。</p>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="">
                                    <img class="banner" src="/img/new/05_03-Strategic-layout.jpg" alt=""/>
                                </div>
                                <div class="blank-block"></div>
                                <p>北京中福华康农业开发有限公司成立研究院，把握未来新技术发展方向，逐步加深主导产业技术密集度，全面寻求创新技术和项目并进行孵化，整合研发资源；新技术和新成果的引进和推广；对国内外的科技交流与合作；承担技术职能管理工作；构建能统筹规划及高效运作的多级研发体系与建立公共技术服务平台。</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="blank-block"></div>
                        <div class="text-center">
                            <h2 class="tite-with-decoration">农业生产</h2>
                            <span class="title-decoration"></span>
                        </div>
                        <div class="blank-block"></div>
                        <div>
                            <img class="banner" src="/img/new/06-agricultural-production.jpg" alt=""/>
                        </div>
                        <div class="blank-block"></div>
                        <div>
                            <p>以蔬果类生鲜农产品规模化生产为产业核心，从种子、有机肥农业生产资料开发到农产品种植加工，再到连锁专卖、单位配送、市场批发和出口外销“四位一体”的现代农产品营销网络，构建形成上下游环节一体化、综合配套集群化的现代农业产业链。</p>
                            <p>建立现代农业产业基地，利用不同经纬度气候分布特征，最大限度规避自然灾害风险，最大限度开发农作物种质资源效益，主营蔬菜品种基本实现周年化、大批量均衡供应。</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <div class="blank-block"></div>
                        <div class="text-center">
                            <h2 class="tite-with-decoration">乡村旅游观光</h2>
                            <span class="title-decoration"></span>
                        </div>
                        <div class="blank-block"></div>
                        <div>
                            <img class="banner" src="/img/new/07-Agricultural-Tourism.jpg" alt=""/>
                        </div>
                        <div class="blank-block"></div>
                        <div>
                            <p>通过农村设施与空间、农业生产场地、特色农业产品、农业经营活动、农村生态环境、农村人文风俗等资源的整合，经过规划设计发挥农业和农村的休闲农业旅游功能，形成农业旅游消费。将“风土”——特有的地理环境；“风物”——地方特有的物产；“风俗”——地方民俗；“风景”——可供欣赏的景色、景象、景观；“风昧”——地方特色建筑、特色食品、特色服饰；“民谣”——民歌民谣和民间传说故事；“习俗”——地方特有的风俗习惯包装为产品，将乡村特殊的自然风貌和风土人情产业化、产权化。</p>
                            <p>建设新农村的目的就是要改变城乡二元结构，实现城乡一体化。一是通过城镇公共基础设施向乡村延伸，配套乡村农业旅游服务需要的基础设施。二是统筹“城区、景区、园区、郊区”等农业旅游资源，统一规划，形成上至城市的都市农业旅游、景区农业旅游、工业农业旅游，下至乡村的“农家乐”、“生态游”等农业旅游线路。通过城乡一体化发展。实现农民就地转移，增加农民收入。</p>
                        </div>`
                    </div>
                    <div class="tab-pane fade" id="v-pills-ecommerce" role="tabpanel" aria-labelledby="v-pills-ecommerce-tab">
                        <div class="blank-block"></div>
                        <div class="text-center">
                            <h2 class="tite-with-decoration">电子商务 + 农业</h2>
                            <span class="title-decoration"></span>
                        </div>
                        <div class="blank-block"></div>
                        <div>
                            <img class="banner" src="/img/new/08-E-commerce-agriculture.jpg" alt=""/>
                        </div>
                        <div class="blank-block"></div>
                        <div>
                            <p>全面实施以品牌为核心，产业投资、渠道整合、品牌建设和金融服务四轮驱动的整体发展战略，用科技和金融带动现代农业的高效、安全和可持续发展：在产业端，通过产业投资获取全球优质农产品资源和权益，形成农资、农机产品的有效供给；在渠道端，积极推动供销系统、传统农批市场向智慧物流中心转型升级，打造全球优质农产品的线下、线上交易平台，实现资源整合和供销流通；贯穿全产业链金融服务、冷链物流及全程质量监管，构建农业产业链生态体系。</p>
                            <p>以品牌建设为驱动，全面建立农产品育种开发、生产种植、物流运营、电子商务及金融服务体系，着力塑造“健康农业、放心食品、安心服务”的产品品牌形象。联合政府创办农业论坛，促进农业科研和理论创新，增强品牌核心竞争力。</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-plans" role="tabpanel" aria-labelledby="v-pills-plans-tab">
                        <div class="blank-block"></div>
                        <div class="text-center">
                            <h2 class="tite-with-decoration">2017 - 2025年战略规划</h2>
                            <span class="title-decoration"></span>
                        </div>
                        <div class="blank-block"></div>

                        <ul class="nav nav-tabs sticky-top" style="background-color: #fff;" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">2017 - 2019年</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">2019 - 2022年</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false">2022 - 2025年</a>
                            </li>
                        </ul>
                        <div class="blank-block"></div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane strategy fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                                <div class="">
                                    <img class="banner" src="/img/new/09_123Planning-plan-1.jpg" alt=""/>
                                </div>
                                <div class="blank-block"></div>
                                <h5>战略目标体系：</h5>
                                <p>
                                    完成新农村建设及农业旅游、现代农业综合开发示范区的初期建设，布局农业复合产业及乡村旅游的核心产业链，成为当地旗舰企业。
                                </p>
                                <br>
                                <h5>完善农业产业链：</h5>
                                <p>
                                    完成农业机械行业龙头企业及农产品和农业生产资料龙头企业的控股，综合实力进入国内前十，实现品牌统一。
                                </p>
                                <br>
                                <h5>新农村建设及农业旅游：</h5>
                                <p>
                                    以新农村建设及农业旅游为主体，完成现代农业开发产业链基本布局；布局产业、产品、农业旅游业务的制高点；快速开发品牌产品、服务设施；建立整合营销平台。
                                </p>
                                <br>
                                <h5>现代农业综合开发示范区：</h5>
                                <p>
                                    现代农业综合开发示范区为主体，参与农业现代化升级及PPP项目，以现代农业技术为主题，协力政府完成项目一级开发，形成对地块资源的掌控；完成房地产业务储备。
                                </p>
                                <br>
                                <h5>专业化经营：</h5>
                                <p>
                                    通过旗下二级企业，对现代农业开发、农业旅游业务、PPP板块进行统一经营、分类管理，并进一步通过所属项目公司对现代农业产业链要素进行专业化经营，提升经营效益。
                                </p>
                                <br>
                                <h5>品牌经营：</h5>
                                <p>
                                    通过区域品牌推广，概念营销，预热区域，吸引客源，以区域品牌整体营销品牌统领各产业链。
                                </p>
                            </div>
                            <div class="tab-pane strategy fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                                <div class="">
                                    <img class="banner" src="/img/new/09_123Planning-plan-2.jpg" alt=""/>
                                </div>
                                <div class="blank-block"></div>
                                <h5>战略目标体系：</h5>
                                <p>
                                    通过多元多层次投资体系，将旗下现代农业示范区的产业链裂变为产业集群，成为拥有核心资源和服务产品的区域发展商。
                                </p>
                                <br>
                                <h5>完善农业产业链：</h5>
                                <p>
                                    推动农业机械行业、农产品及农业生产资料、畜牧业、种子产品龙头企业上市，完成畜牧业、种子产品龙头企业的控股实现品牌统一。综合实力进入国内前十。
                                </p>
                                <p>新农村建设及农业旅游布局：农业旅游集群：围绕农业旅游核心产业链，建设区域布局完整、产品类型丰富、业务结构合理、品牌影响广泛的农业旅游集群。</p>
                                <br>
                                <h5>现代农业综合开发示范区：</h5>
                                <p>
                                    参与农业现代化升级及PPP项目，以现代农业技术为主题，深化项目运营；开展区域开发，快速开发住宅地产形成短期现金流，支持滚动开发；开发商业地产，持有核心业态，对主力店周边商铺进行定位和销售，吸引休闲消费。
                                </p>
                            </div>
                            <div class="tab-pane strategy fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                                <div class="">
                                    <img class="banner" src="/img/new/09_123Planning-plan-3.jpg" alt=""/>
                                </div>
                                <div class="blank-block"></div>
                                <h5>战略目标体系：</h5>
                                <p>
                                    通过“品牌+资本”双驱动，实现农业产业集群向农业旅游文化产业、养生养老产业的扩张，实现从资源扩张型向能力扩张型的转变，成为国内领先的区域发展商。
                                </p>
                                <br>
                                <h5>完善农业产业链：</h5>
                                <p>
                                    推动农业机械行业、农产品及农业生产资料、畜牧业、种子产品龙头企业上市，实现品牌统一。综合实力进入国内前十。
                                </p>
                                <br>
                                <h5>打造农业旅游地产品牌：</h5>
                                <p>
                                    以农业旅游地产为龙头，全面整合“吃住行游购娱”农业旅游要素，建成农业旅游小镇、休闲度假地的综合型、规模化产品。带动基础设施建设。
                                </p>
                                <br>
                                <h5>发展农业旅游文化娱乐产业：</h5>
                                <p>
                                    积极探索歌舞演艺、影视传媒等文化农业旅游产品的经营模式，实现独立运作。未来业务蓬勃发展，择机实现农业、文化农业旅游地产业务的上市，探索品牌的异地复制。通过品牌和资本输出，探索养生产业、文化产业的跨区域发展。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-homestay" role="tabpanel" aria-labelledby="v-pills-homestay-tab">
                        <div class="blank-block"></div>
                        <div class="text-center">
                            <h2 class="tite-with-decoration">民宿</h2>
                            <span class="title-decoration"></span>
                        </div>
                        <div class="blank-block"></div>
                        <div>
                            <img class="banner" src="/img/new/10-Homestay.jpg" alt=""/>
                        </div>
                        <div class="blank-block"></div>
                        <div>
                            <p>随着我国旅游事业的蓬勃发展，乡村民宿成为重要载体。北京中福华康农业开发有限公司致力于推进乡村民宿，依托传统村落、美丽乡村、共享农庄等乡村旅游资源，结合全域旅游空间布局和城乡交通网络体系，将乡村民宿与本地资源禀赋、区域优势、产业基础、乡村文化和生态条件结合起来，坚持政府引导、市场推动、社会参与、利益共享原则，统筹规划、因地制宜、循序渐进，真正发挥乡村民宿在促进城乡融合发展、产业转型创新、乡村文化振兴、生态环境保护、农民持续增收、农村治理有效的功能作用。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="blank-block"></div>
    <div class="blank-block"></div>

@stop
