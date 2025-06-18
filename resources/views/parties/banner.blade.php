@if (Route::current()->getName() != 'home')
    <!-- Sub Banner -->
    <section class="sub_banner_con position-relative">
        <div class="container position-relative">
            <div class="row">
                <div class="col-12">
                    @switch(Route::current()->getName())
                        @case('about')
                            <div class="sub_banner_content" data-aos="fade-up">
                                <h1 class="text-white">@lang('info.m2')</h1>
                                <p class="col-xl-7 col-lg-9 mx-auto text-white text-size-16">
                                    @lang('info.banner.desc_about')
                                </p>
                                <div class="box">
                                    <a href="{{ route('home') }}" class="text-decoration-none">
                                        <span class="mb-0">@lang('info.m1') </span>
                                    </a>
                                    <i class="arrow fa-solid fa-arrow-right"></i>
                                    <span class="mb-0 box_span">@lang('info.m2') </span>
                                </div>
                            </div>
                        @break

                        @case('expertise')
                            <div class="sub_banner_content" data-aos="fade-up">
                                <h1 class="text-white">@lang('info.m3')</h1>
                                <p class="col-xl-7 col-lg-9 mx-auto text-white text-size-16">
                                    @lang('info.banner.desc_expertise')
                                </p>
                                <div class="box">
                                    <a href="{{ route('home') }}" class="text-decoration-none">
                                        <span class="mb-0">@lang('info.m1') </span>
                                    </a>
                                    <i class="arrow fa-solid fa-arrow-right"></i>
                                    <span class="mb-0 box_span">@lang('info.m3') </span>
                                </div>
                            </div>
                        @break

                        @case('team')
                            <div class="sub_banner_content" data-aos="fade-up">
                                <h1 class="text-white">@lang('info.m4')</h1>
                                <p class="col-xl-7 col-lg-9 mx-auto text-white text-size-16">
                                    @lang('info.banner.desc_team')
                                </p>
                                <div class="box">
                                    <a href="index.html" class="text-decoration-none">
                                        <span class="mb-0">@lang('info.m1')</span>
                                    </a>
                                    <i class="arrow fa-solid fa-arrow-right"></i>
                                    <span class="mb-0 box_span">@lang('info.m4')</span>
                                </div>
                            </div>
                        @break

                        @case('presence')
                            <div class="sub_banner_content" data-aos="fade-up">
                                <h1 class="text-white">@lang('info.m6')</h1>
                                <p class="col-xl-7 col-lg-9 mx-auto text-white text-size-16">
                                    @lang('info.banner.desc_presence')
                                </p>
                                <div class="box">
                                    <a href="index.html" class="text-decoration-none">
                                        <span class="mb-0">@lang('info.m1')</span>
                                    </a>
                                    <i class="arrow fa-solid fa-arrow-right"></i>
                                    <span class="mb-0 box_span">@lang('info.m6')</span>
                                </div>
                            </div>
                        @break

                        @case('publication')
                            <div class="sub_banner_content" data-aos="fade-up">
                                <h1 class="text-white">@lang('info.m5')</h1>
                                <p class="col-xl-7 col-lg-9 mx-auto text-white text-size-16">
                                    @lang('info.banner.desc_publication')
                                </p>
                                <div class="box">
                                    <a href="index.html" class="text-decoration-none">
                                        <span class="mb-0">@lang('info.m1')</span>
                                    </a>
                                    <i class="arrow fa-solid fa-arrow-right"></i>
                                    <span class="mb-0 box_span">@lang('info.m5')</span>
                                </div>
                            </div>
                        @break

                        @case('detailExpertise')
                            <div class="sub_banner_content" data-aos="fade-up">
                                <h1 class="text-white">@lang('info.m3')</h1>
                                <p class="col-xl-7 col-lg-9 mx-auto text-white text-size-16">
                                    {{ $allExpertise->titre1 }}
                                </p>
                                <div class="box">
                                    <a href="{{ route('home') }}" class="text-decoration-none">
                                        <span class="mb-0">@lang('info.m1')</span>
                                    </a>
                                    <i class="arrow fa-solid fa-arrow-right"></i>
                                    <a href="{{ route('expertise') }}" class="text-decoration-none">
                                        <span class="mb-0">@lang('info.m3')</span>
                                    </a>
                                    <i class="arrow fa-solid fa-arrow-right"></i>
                                    <span class="mb-0 box_span">Detail</span>
                                </div>
                            </div>
                        @break

                        @default
                    @endswitch

                </div>
            </div>
        </div>
    </section>
@else
    <!-- Banner -->
    <section class="banner-con position-relative">
        <div class="container position-relative">
            <div class="row">
                <div class="col-12">
                    <div class="banner_content">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 col-12">
                                        <h1 class="text-white mb-0">
                                            @lang('info.slides.s3Titre')
                                        </h1>
                                    </div>
                                    <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12 col-12">
                                        <div class="content">
                                            <p class="text-white text-size-18">
                                                @lang('info.slides.s3desc')
                                            </p>
                                            <a href="{{ route('about') }}" class="text-decoration-none appointment">
                                                @lang('info.apropo.accueilBtn')<i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 col-12">
                                        <h1 class="text-white mb-0">
                                            @lang('info.slides.s5Titre')
                                        </h1>
                                    </div>
                                    <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12 col-12">
                                        <div class="content">
                                            <p class="text-white text-size-18">
                                                @lang('info.slides.s5desc')
                                            </p>
                                            <a href="{{ route('presence') }}" class="text-decoration-none appointment">
                                                @lang('info.apropo.accueilBtn')<i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 col-12">
                                        <h1 class="text-white mb-0">
                                            @lang('info.slides.s4Titre')
                                        </h1>
                                    </div>
                                    <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12 col-12">
                                        <div class="content">
                                            <p class="text-white text-size-18">
                                                @lang('info.slides.s4desc')
                                            </p>
                                            <a href="{{ route('presence') }}"
                                                class="text-decoration-none appointment">
                                                @lang('info.apropo.accueilBtn')<i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 col-12">
                                        <h1 class="text-white mb-0">
                                            @lang('info.slides.s1Titre')
                                        </h1>
                                    </div>
                                    <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12 col-12">
                                        <div class="content">
                                            <p class="text-white text-size-18">
                                                @lang('info.slides.s1desc')
                                            </p>
                                            <a href="{{ route('presence') }}"
                                                class="text-decoration-none appointment">
                                                @lang('info.apropo.accueilBtn')<i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 col-12">
                                        <h1 class="text-white mb-0">
                                            @lang('info.slides.s2Titre')
                                        </h1>
                                    </div>
                                    <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12 col-12">
                                        <div class="content">
                                            <p class="text-white text-size-18">
                                                @lang('info.slides.s2desc')
                                            </p>
                                            <a href="{{ route('team') }}" class="text-decoration-none appointment">
                                                @lang('info.apropo.accueilBtn')<i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="banner_wrapper position-relative">
                        <div class="owl-carousel owl-theme">
                            @forelse ($allExpertises as $s)
                                <div class="item">
                                    <div class="case-box">
                                        <a href="{{ route('detailExpertise', ['id' => $s->id]) }}">
                                            <figure class="mb-0">
                                                <img src="{{ asset('storage/' . $s->photo) }}" alt="image"
                                                    class="img-fluid">
                                            </figure>
                                            <div class="box-content d-flex flex-column">
                                                <div class="icon ml-auto">
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </div>
                                                <h5 class="field mt-auto">{{ $s->titre1 }}</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                            {{-- <div class="item">
                                <div class="case-box">
                                    <a href="#">
                                        <figure class="mb-0">
                                            <img src="./assets/images/article-image3.jpg" alt="image" class="img-fluid">
                                        </figure>
                                        <div class="box-content d-flex flex-column">
                                            <div class="icon ml-auto">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                            <h5 class="field mt-auto">Car Insurance</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="case-box">
                                    <a href="#">
                                        <figure class="banner-image1 mb-0">
                                            <img src="./assets/images/banner-image1.jpg" alt="image" class="img-fluid">
                                        </figure>
                                        <div class="box-content d-flex flex-column">
                                            <div class="icon ml-auto">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                            <h5 class="field mt-auto">Car Insurance</h5>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="item">
                                <div class="case-box">
                                    <a href="#">
                                        <figure class="banner-image2 mb-0">
                                            <img src="./assets/images/banner-image2.jpg" alt="image" class="img-fluid">
                                        </figure>
                                        <div class="box-content d-flex flex-column">
                                            <div class="icon ml-auto">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                            <h5 class="field mt-auto">Car Insurance</h5>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="item">
                               <div class="case-box">
                                <a href="#">
                                    <figure class="banner-image1 mb-0">
                                        <img src="./assets/images/banner-image3.jpg" alt="image" class="img-fluid">
                                    </figure>
                                    <div class="box-content d-flex flex-column">
                                        <div class="icon ml-auto">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>
                                        <h5 class="field mt-auto">Car Insurance</h5>
                                    </div>
                                </a>
                               </div>

                            </div>
                            <div class="item">
                                <div class="case-box">
                                    <a href="#">
                                        <figure class="banner-image2 mb-0">
                                            <img src="./assets/images/banner-image4.jpg" alt="image" class="img-fluid">
                                        </figure>
                                        <div class="box-content d-flex flex-column">
                                            <div class="icon ml-auto">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                            <h5 class="field mt-auto">Car Insurance</h5>
                                        </div>
                                    </a>
                                </div>

                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner_sideicon">
                <a href="#footer" class="scroll text-decoration-none">
                    <figure class="scroll-arrow">
                        <img src="./assets/images/banner-scrolldownarrow.png" alt="image" class="img-fluid">
                    </figure>
                    <span>@lang('info.site.decouvrir1')<br>@lang('info.site.decouvrir2')</span>
                </a>
                <ul class="list-unstyled mb-0 social-icons">
                    <li><a href="https://www.facebook.com/login/" class="text-decoration-none"><i
                                class="fa-brands fa-facebook-f social-networks"></i></a></li>
                    <li><a href="https://twitter.com/i/flow/login" class="text-decoration-none"><i
                                class="fa-brands fa-x-twitter social-networks"></i></a></li>
                    <li><a href="https://www.linkedin.com/login" class="text-decoration-none"><i
                                class="fa-brands fa-linkedin social-networks"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
@endif
