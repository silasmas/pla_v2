@extends('layouts.template')

@section('contente')

    <!-- About -->
    <section class="aboutpage-con position-relative">
        <figure class="mb-0 about-sideimage">
            <img src="{{ asset('assets/images/client-sideimage.png') }}" alt="image" class="img-fluid">
        </figure>
        <div class="container">
            <div class="row">
                <div class="order-2 text-center col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 text-lg-left">
                    <div class="about_wrapper position-relative" data-aos="zoom-in">
                        <figure class="mb-0 about-image">
                            <img src="{{ asset('/assets/images/img/02.png') }}" alt="image" class="img-fluid">
                        </figure>
                        <figure class="mb-0 about-circle">
                            <img src="{{ asset('assets/images/aboutpage-circle.png') }}" alt="image" class="img-fluid">
                        </figure>
                        <div class="about-box">
                            <figure class="about-icon">
                                <img src="{{ asset('assets/images/aboutpage-icon.png') }}" alt="image" class="img-fluid">
                            </figure>
                            <span class="number counter">30</span>
                            <sup class="plus">+</sup>
                            <span class="text">Years of Experience</span>
                        </div>
                    </div>
                </div>
                <div class="order-1 col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2">
                    <div class="about_content" data-aos="fade-up">
                        <h6>{{ !empty($about->quisommenous) ? $about->quisommenous : '' }}</h6>
                        <h2>{{ !empty($about->titrecabinet) ? $about->titrecabinet : '' }}</h2>
                        @if (!empty($about->contenu))
                            <p class="text text-size-16">
                                @if (Str::length($about->contenu) > 500)
                                    {!! Str::limit($about->contenu, 500, '...') !!}
                                @else
                                    {!! $about->contenu !!}
                                @endif
                            </p>
                            {{-- <ul class="list-unstyled">
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <p class="mb-0 text-size-16">Excepteur sint occaecat cupidatat noru even.</p>
                        </li>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <p class="mb-0 text-size-16">Duis aute irure dolor in reprehenderit in voluta facis.</p>
                        </li>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <p class="mb-0 text-size-16">Rerum hic tenetur a sapiente delectus au occae.</p>
                        </li>
                    </ul> --}}
                            @if (Str::length($about->extrait) > 800)
                                <a href="#" class="text-decoration-none read_more" data-toggle="modal"
                                    data-target="#modalAbout">@lang('info.apropo.accueilBtn')<i class="fa-solid fa-arrow-right"></i></a>
                            @endif
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Succeed -->
    <section class="succeed-con position-relative">
        <div class="container">
            <div class="row">
                <!-- Texte principal -->
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="succeed_content" data-aos="fade-up">
                        <h6>@lang('info.aboutStat.who_title')</h6>
                        <h2>@lang('info.aboutStat.who_heading')</h2>
                        <p class="text text-size-16">@lang('info.aboutStat.who_description')</p>
                        <ul class="mb-0 list-unstyled">
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p class="mb-0 text-size-16">@lang('info.aboutStat.who_bullet_1')</p>
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p class="mb-0 text-size-16">@lang('info.aboutStat.who_bullet_2')</p>
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p class="mb-0 text-size-16">@lang('info.aboutStat.who_bullet_3')</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Statistiques -->
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="succeed_wrapper" data-aos="zoom-in">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="box">
                                    <div class="succeed-box">
                                        <figure class="icon">
                                            <img src="{{ asset('assets/images/succeed-icon1.png') }}" alt="image"
                                                class="img-fluid">
                                        </figure>
                                        <span class="number counter">250</span>
                                        <sup class="plus">+</sup>
                                        <span class="text">@lang('info.aboutStat.stats_partners')</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="succeed-box">
                                    <figure class="icon">
                                        <img src="{{ asset('assets/images/succeed-icon2.png') }}" alt="image"
                                            class="img-fluid">
                                    </figure>
                                    <span class="number counter">180</span>
                                    <sup class="plus">+</sup>
                                    <span class="text">@lang('info.aboutStat.stats_cases')</span>
                                </div>
                            </div>
                        </div>
                        <div class="succeed-downcontent">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="box">
                                        <div class="succeed-box">
                                            <figure class="icon">
                                                <img src="{{ asset('assets/images/succeed-icon3.png') }}" alt="image"
                                                    class="img-fluid">
                                            </figure>
                                            <span class="number counter">370</span>
                                            <sup class="plus">+</sup>
                                            <span class="text">@lang('info.aboutStat.stats_clients')</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="succeed-box">
                                        <figure class="icon">
                                            <img src="{{ asset('assets/images/succeed-icon4.png') }}" alt="image"
                                                class="img-fluid">
                                        </figure>
                                        <span class="number counter">90</span>
                                        <sup class="plus">+</sup>
                                        <span class="text">@lang('info.aboutStat.stats_awards')</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="modal fade modal-about" data-backdrop="static" data-keyboard="false" id="modalAbout" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="border: none">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3>
                    {{ !empty($about->quisommenous) ? $about->quisommenous : '' }}
                    </h3>
                    <h1>{{ !empty($about->titrecabinet) ? $about->titrecabinet : '' }}</h1>
                    <p>
                         {!! $about->contenu  !!}
                    </p>
                </div>
            </div>
        </div>
    </div>

    @include('parties.blog')
@endsection()
