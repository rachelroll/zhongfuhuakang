<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Link Swiper's CSS -->
    <link href="https://cdn.bootcss.com/Swiper/4.5.0/css/swiper.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/customise.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
{{--    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}


    <script src="https://jkwedu-new.oss-cn-beijing.aliyuncs.com/public-cdn/jquery/jquery-3.3.1.min.js"></script>

    <script src="https://cdn.bootcss.com/popper.js/1.15.0/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    @yield('css')

    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }

        a.dropdown-item:hover, a.dropdown-item:focus {
            color: #AF0E22;
            /*text-decoration: none;*/
            background-color: #fff;
        }
    </style>

    <title>北京中福华康农业开发有限公司</title>
</head>

<body>
@include('layout.header')

@yield('content')

@include('layout.footer')

<!-- Swiper JS -->
<script src="https://cdn.bootcss.com/Swiper/4.5.1/js/swiper.min.js"></script>


<script>
    $(document).ready(function () {
        $('.second-button').on('click', function () {

            $('.animated-icon2').toggleClass('open');
        });
    });
</script>
@yield('js')
</body>
</html>
