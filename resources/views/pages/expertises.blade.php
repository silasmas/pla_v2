@extends('layouts.template')

@section('contente')
    {{-- @php
// $styles = '';
// foreach ($secteur as $e) {
// $styles .= "
// .dynamic-bg-{$e->id}::before {
// content: '';
// height: 100%;
// width: 100%;
// top: 0;
// left: 0;
// opacity: 0.17;
// display: block;
// position: absolute;
// border-radius: 20px;
// background-size: cover;
// background-repeat: no-repeat;
// background-position: center;
// background-image: url('" . asset('storage/' . $e->background_image) . "');
// transition: all 0.3s ease-in-out;
// }
// ";
// }
// @endphp

<style>
    {
         ! ! $styles  ! !
    }
</style> --}}


    <!-- Practice Area -->
    <section class="practice-con">
        <div class="container">
            {{-- <div class="row">
                <div class="col-12">
                    <div class="text-center practice_content" data-aos="fade-up">
                        <h6>Our Expertise</h6>
                        <h2>Our Legal Practice Areas</h2>
                        <p class="mx-auto mb-0 col-xl-8 col-lg-10 text-size-16">Nucimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores ruas molestias excepturi
                            sint occaecati cupiditate non provident.
                        </p>
                    </div>
                </div>
            </div> --}}
            <div class="tabs">
                <ul class="mb-4 nav nav-tabs mb-lg-5" id="tabs-posts" role="tablist" data-aos="fade-up"
                    data-aos-duration="700">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular" role="tab"
                            aria-controls="popular" aria-selected="true">@lang('info.expertises.menu')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#featured" role="tab"
                            aria-controls="featured" aria-selected="false">@lang('info.domaine.menu')</a>
                    </li>
                    <!--nav-tabs-->
                </ul>
                <div class="tab-content" id="tabs-posts-content" data-aos="fade-up" data-aos-duration="700">
                    <div class="tab-pane fade show active" id="popular" role="tabpanel">
                        <div class="row" data-aos="fade-up">
                            @forelse ($secteur as $e)
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="box dynamic-bg-{{ $e->id }}">
                                        <div class="bg-img"
                                            style="background-image: url('{{ asset('storage/' . $e->photo) }}'); background-size: cover; background-position: center;">
                                        </div>
                                        <div class="practice-box">
                                            <a href="{{ route('detailExpertise', ['id' => $e->id]) }}">
                                                <figure class="icon">
                                                    <img src="{{ asset('assets/images/img/lgmodif.png') }}" alt="image"
                                                        class="img-fluid">
                                                </figure>
                                            </a>
                                            <h5>
                                                {{ $e->titre1 }}
                                            </h5>
                                            <a href="{{ route('detailExpertise', ['id' => $e->id]) }}"
                                                class="text-decoration-none"><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                            @empty
                                <p>Aucune donnée trouvée</p>
                            @endforelse
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="featured" role="tabpanel">
                        <div class="row" data-aos="fade-up">
                            @forelse ($domaine as $e)
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="box dynamic-bg-{{ $e->id }}">
                                        <div class="bg-img"
                                               style="background-image: url('{{ asset('storage/' . $e->photo) }}'); background-size: cover; background-position: center;">
                                           </div>
                                        <div class="practice-box">
                                            <figure class="icon">
                                                <img src="{{ asset('assets/images/img/lgmodif.png') }}" alt="image"
                                                    class="img-fluid">
                                            </figure>
                                            <h5>{{ $e->titre1 }}</h5>
                                            <p class="text-size-14">
                                                {{ $e->titre1 }}
                                            </p>
                                            <a href="{{ route('detailExpertise', ['id' => $e->id]) }}"
                                                class="text-decoration-none"><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- About -->
    <section class="about-con position-relative">
        <figure class="mb-0 about-sideimage">
            <img src="{{ asset('assets/images/lawyer-sideimage.png') }}" alt="image" class="image-fluid">
        </figure>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="about_wrapper position-relative">
                        <figure class="mb-0 about-image">
                            <img src="{{ asset('assets/images/img/12A.jpg') }}" alt="image" class="image-fluid">
                            {{-- <img src="assets/images/about-image.jpg" alt="image" class="image-fluid"> --}}
                        </figure>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="about_content" data-aos="fade-up">
                        <div class="content">
                            <h6>About us</h6>
                            <h2>Providing Top-Notch Legal Representation</h2>
                            <p class="text-size-16">Quis autem vel eum iure reprehenderit rui in ea volurate veli
                                esse ruam nihil molestiae conseauatur vel illum rui dolorema
                                eum fugiat ruo voluetas nulla pariatur.
                            </p>
                            <ul class="list-unstyled">
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
                            </ul>
                            <a href="{{ route('about') }}" class="text-decoration-none read_more">Read More<i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ -->
    <section class="faq-con practicearea-faq position-relative">
        <div class="container">
            <div class="faq">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="left_column" data-aos="fade-up">
                            <div class="mb-0 faq_content">
                                <h6>Faq’s</h6>
                                <h2>Frequently Asked Questions</h2>
                                <p class="text-size-16">Nucimus qui blanditiis praesentium voluptatum deleniti atque
                                    corrupti quos dolores ruas molestias.
                                </p>
                            </div>
                            <div class="accordian-section-inner position-relative">
                                <div class="accordian-inner">
                                    <div id="faq_accordion1">
                                        <div class="accordion-card">
                                            <div class="card-header" id="headingOne">
                                                <a href="#" class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="false"
                                                    aria-controls="collapseOne">
                                                    <h5>How do I choose a personal injury lawyer?</h5>
                                                </a>
                                            </div>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <p class="mb-0 text-left text-size-14">Labore et dolore magna aliqua
                                                        quis ipsum suspendis seultrices gravida risus commo ddolore.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="card-header" id="headingTwo">
                                                <a href="#" class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    <h5>What should I do if I am involved in a car accident?</h5>
                                                </a>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                                <div class="card-body">
                                                    <p class="mb-0 text-left text-size-14">Labore et dolore magna aliqua
                                                        quis ipsum suspendis seultrices gravida risus commo ddolore.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="card-header" id="headingThree">
                                                <a href="#" class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                    <h5>How much does legal representation cost?</h5>
                                                </a>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                                <div class="card-body">
                                                    <p class="mb-0 text-left text-size-14">Labore et dolore magna aliqua
                                                        quis ipsum suspendis seultrices gravida risus commo ddolore.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="card-header" id="headingFour">
                                                <a href="#" class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseFour" aria-expanded="false"
                                                    aria-controls="collapseFour">
                                                    <h5>How Do I Choose the Right Attorney?</h5>
                                                </a>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                                <div class="card-body">
                                                    <p class="mb-0 text-left text-size-14">Labore et dolore magna aliqua
                                                        quis ipsum suspendis seultrices gravida risus commo ddolore.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="practicearea_wrapper position-relative" data-aos="zoom-in">
                            <figure class="mb-0 practicearea-faqimage">
                                <img src="assets/images/practicearea-faqimage.png" alt="image" class="image-fluid">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
