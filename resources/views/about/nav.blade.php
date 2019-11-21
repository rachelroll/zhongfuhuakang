@section('css')

@endsection

@if (Agent::isDesktop() )
    <div class="col-md-3 col-12">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link @if(request()->fullUrl() == route('about.overview')) active @endif" id="v-pills-home-tab" href="{{ route('about.overview') }}" role="tab" aria-selected="false">公司概况</a>
            <a class="nav-link @if(request()->fullUrl() == route('about.structure')) active @endif" id="v-pills-profile-tab" href="{{ route('about.structure') }}" role="tab" aria-selected="false">组织架构</a>
            <a class="nav-link @if(request()->fullUrl() == route('about.culture')) active @endif" id="v-pills-messages-tab" href="{{ route('about.culture') }}" role="tab" aria-selected="false">企业文化</a>
        </div>
    </div>
@else
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="{{ route('about.overview') }}">
                    <p style="margin-bottom: 0">公司概况</p>
                    <span class="active_nav" @if(request()->fullUrl() == route('about.overview')) style="display: block;" @else style="display: none" @endif></span>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ route('about.structure') }}">
                    <p style="margin-bottom: 0">组织架构</p>
                    <span class="active_nav" @if(request()->fullUrl() == route('about.structure')) style="display: block;" @else style="display: none" @endif></span>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ route('about.culture') }}">
                    <p style="margin-bottom: 0">企业文化</p>
                    <span class="active_nav" @if(request()->fullUrl() == route('about.culture')) style="display: block;" @else style="display: none" @endif></span>
                </a>
            </div>
        </div>
        <!-- Add Pagination -->
{{--        <div class="swiper-pagination"></div>--}}
        <!-- Add Arrows -->
        {{--            <div class="swiper-button-next"></div>--}}
        {{--            <div class="swiper-button-prev"></div>--}}
    </div>
@endif

@section('js')
    <script>
        <!-- Initialize Swiper -->
        var appendNumber = 4;
        var prependNumber = 1;
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            centeredSlides: false,
            spaceBetween: 3,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

    @endsection
