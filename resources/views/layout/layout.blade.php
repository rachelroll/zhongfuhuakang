<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/customise.css">

    @yield('css')

    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>

    <title>北京中福华康农业开发有限公司</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-between" style=" height: 60px; margin-top: 30px">
        <div class="col-auto mr-auto">
            <img style="width: 100%" src="" alt=""/>
        </div>
        <div class="col-auto">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('index') }}">首页</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">关于我们</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('about.overview') }}">公司概况</a>
                        <a class="dropdown-item" href="{{ route('about.structure') }}">组织架构</a>
                        <a class="dropdown-item" href="{{ route('about.culture') }}">企业文化</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  href="{{ route('news.index') }}" role="button" aria-haspopup="true" aria-expanded="false">资讯中心</a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="{{ route('news.list', ['id' => 1]) }}">公司新闻</a>
                        <a class="dropdown-item" href="{{ route('news.list', ['id' => 2]) }}">圆梦乡村</a>
                        <a class="dropdown-item" href="{{ route('news.list', ['id' => 3]) }}">专题系列</a>
                        <a class="dropdown-item" href="{{ route('news.list', ['id' => 4]) }}">行业动态</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">业务布局</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('business.system') }}">业务体系</a>
                        <a class="dropdown-item" href="#">战略布局</a>
                        <a class="dropdown-item" href="#">农业生产</a>
                        <a class="dropdown-item" href="#">乡村旅游观光</a>
                        <a class="dropdown-item" href="#">电子商务+农业</a>
                        <a class="dropdown-item" href="#">规划计划</a>
                        <a class="dropdown-item" href="#">民宿</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">资讯中心</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">公司概况</a>
                        <a class="dropdown-item" href="#">组织架构</a>
                        <a class="dropdown-item" href="#">企业文化</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">资讯中心</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">公司概况</a>
                        <a class="dropdown-item" href="#">组织架构</a>
                        <a class="dropdown-item" href="#">企业文化</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


@yield('content')

@include('layout.footer')


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

{{--<script>--}}
{{--    $('.nav-pills > li > .dropdown-toggle').click(function () {--}}
{{--        window.location = $(this).attr('href');--}}
{{--    });--}}

{{--</script>--}}
</body>
</html>
