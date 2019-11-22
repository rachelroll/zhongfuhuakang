@if (Agent::isDesktop() )
    <div class="container">
        <div class="row justify-content-between sticky-top" style=" height: 60px; margin-top: 30px">
            <div class="col-xs-auto mr-auto">
                <img style="width: 80%" src="/img/new/logo.png" alt=""/>
            </div>
            <div class="col-xs-auto" style="top: 10px">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link @if(request()->fullUrl() == route('index')) active @endif" href="{{ route('index') }}">首页</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle @if(in_array(request()->fullUrl(), [ route('about.overview'), route('about.structure'), route('about.culture') ])) active @endif" href="{{ route('about.overview') }}" role="button" aria-haspopup="true" aria-expanded="false">关于我们</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('about.overview') }}">公司概况</a>
                            <a class="dropdown-item" href="{{ route('about.structure') }}">组织架构</a>
                            <a class="dropdown-item" href="{{ route('about.culture') }}">企业文化</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link @if(request()->fullUrl() == route('business.system')) active @endif" href="{{ route('business.system') }}" role="button" aria-haspopup="true" aria-expanded="false">业务布局</a>
                        {{--                    <div class="dropdown-menu">--}}
                        {{--                        <a class="dropdown-item" href="{{ route('business.system') }}">业务体系</a>--}}
                        {{--                        <a class="dropdown-item" href="#">战略布局</a>--}}
                        {{--                        <a class="dropdown-item" href="#">农业生产</a>--}}
                        {{--                        <a class="dropdown-item" href="#">乡村旅游观光</a>--}}
                        {{--                        <a class="dropdown-item" href="#">电子商务+农业</a>--}}
                        {{--                        <a class="dropdown-item" href="#">规划计划</a>--}}
                        {{--                        <a class="dropdown-item" href="#">民宿</a>--}}
                        {{--                    </div>--}}
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle @if(in_array(request()->fullUrl(), [ route('news.list', ['id' => 0]), route('news.list', ['id' => 1]), route('news.list', ['id' => 2]), route('news.list', ['id' => 3]), route('news.index') ])) active @endif" href="{{ route('news.index') }}" role="button" aria-haspopup="true" aria-expanded="false">资讯中心</a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="{{ route('news.list', ['id' => 0]) }}">公司新闻</a>
                            <a class="dropdown-item" href="{{ route('news.list', ['id' => 1]) }}">圆梦乡村</a>
                            <a class="dropdown-item" href="{{ route('news.list', ['id' => 2]) }}">专题系列</a>
                            <a class="dropdown-item" href="{{ route('news.list', ['id' => 3]) }}">行业动态</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">农业研究</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">农业论坛</a>
                            <a class="dropdown-item" href="#">学术科研</a>
                            <a class="dropdown-item" href="#">专利研究</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">社会责任</a>
{{--                        <div class="dropdown-menu">--}}
{{--                            <a class="dropdown-item" href="#">公司概况</a>--}}
{{--                            <a class="dropdown-item" href="#">组织架构</a>--}}
{{--                            <a class="dropdown-item" href="#">企业文化</a>--}}
{{--                        </div>--}}
                    </li>
                </ul>
            </div>
        </div>
        <br>
    </div>
@elseif (Agent::isPhone())
    <!--Navbar-->
    <nav class="navbar navbar-dark red lighten-1 mb-4">

        <!-- Navbar brand -->
{{--        <a class="navbar-brand" href="#">--}}
            <img src="/img/new/logo.png" alt="" style="width: 40%; height: 40%"/>
{{--        </a>--}}

        <!-- Collapse button -->
        <button class="navbar-toggler second-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent23"
                aria-controls="navbarSupportedContent23" aria-expanded="false" aria-label="Toggle navigation">
            <div class="animated-icon2">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent23">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item @if(request()->fullUrl() == route('index')) active @endif">
                    <a class="nav-link @if(request()->fullUrl() == route('index')) active @endif" href="/">首页 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item @if(request()->fullUrl() == route('about.overview')) active @endif">
                    <a class="nav-link @if(request()->fullUrl() == route('about.overview')) active @endif" href="{{ route('about.overview') }}">关于我们</a>
                </li>
                <li class="nav-item @if(request()->fullUrl() == route('business.system')) active @endif">
                    <a class="nav-link @if(request()->fullUrl() == route('business.system')) active @endif" href="{{ route('business.system') }}">业务布局</a>
                </li>
                <li class="nav-item @if(request()->fullUrl() == route('news.index')) active @endif">
                    <a class="nav-link @if(request()->fullUrl() == route('news.index')) active @endif" href="{{ route('news.index') }}">资讯中心</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">农业研究</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">社会责任</a>
                </li>
            </ul>
            <!-- Links -->

        </div>
        <!-- Collapsible content -->

    </nav>
    <!--/.Navbar-->
@endif


