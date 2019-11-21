<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <link href="https://cdn.bootcss.com/Swiper/4.5.0/css/swiper.min.css" rel="stylesheet">

{{--    <link rel="stylesheet" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-4.9.0.min.css">--}}
    <link rel="stylesheet" href="/css/customise.css">

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


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

@yield('js')
<script>
    // $('.nav-pills > li > .dropdown-toggle').click(function () {
    //     window.location = $(this).attr('href');
    // });

    $(document).ready(function () {

        $('.second-button').on('click', function () {

            $('.animated-icon2').toggleClass('open');
        });
    });

</script>

</body>
</html>
