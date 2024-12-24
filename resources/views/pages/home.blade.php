@extends("layouts.template")

@section("contente")
<!-- About -->
<section class="aboutpage-con position-relative">
    {{-- <figure class="about-sideimage mb-0">
        <img src="./assets/images/img/i2.jpg" alt="image" class="img-fluid">
    </figure> --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-2 text-lg-left text-center">
                <div class="about_wrapper position-relative" data-aos="zoom-in">
                    <figure class="about-image mb-0">
                        <img src="{{ asset('/assets/images/img/02.png') }}" alt="image" class="img-fluid">
                    </figure>
                    <figure class="about-circle mb-0">
                        <img src="./assets/images/aboutpage-circle.png" alt="image" class="img-fluid">
                    </figure>
                    <div class="about-box">
                        <figure class="about-icon">
                            <img src="./assets/images/aboutpage-icon.png" alt="image" class="img-fluid">
                        </figure>
                        <span class="number counter">10</span>
                        <sup class="plus">+</sup>
                        <span class="text">@lang('info.apropo.s11')</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-1">
                <div class="about_content" data-aos="fade-up">
                    <h6>{{ !empty($about->quisommenous)?$about->quisommenous:'Vide' }}</h6>
                    <h2>{{ !empty($about->titrecabinet)?$about->titrecabinet:'Vide' }}</h2>
                    <p class="text text-size-16">
                        {!! !empty($about->extrait)?Str::limit($about->contenu,450, '...'):'Vide '!!}
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
                    <a href="{{ route('about') }}" class="text-decoration-none read_more">@lang('info.apropo.accueilBtn')<i
                            class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Practice Area -->
<section class="practice-con">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="practice_content text-center" data-aos="fade-up">
                    <h6>Nos Expertises</h6>
                    <h2>Our Legal Practice Areas</h2>
                    <p class="col-xl-8 col-lg-10 mx-auto text-size-16 mb-0">Nucimus qui blanditiis praesentium
                        voluptatum deleniti atque corrupti quos dolores ruas molestias excepturi
                        sint occaecati cupiditate non provident.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            @forelse ($allExpertises as $e)
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="box">
                    <div class="bg-img" style="background-image: url('{{ asset('storage/' . $e->photo) }}'); background-size: cover; background-position: center;"></div>
                    <div class="practice-box"
                    data-background="{{ $e->photo ? asset("storage/".$e->photo) : asset('assets/images/img/lgmodif.png') }}">
                        <figure class="icon">
                            <img src="{{ asset('assets/images/img/lgmodif.png') }}" alt="image" class="img-fluid">
                        </figure>
                        <h5>{{ $e->titre1 }}</h5>
                        <p class="text-size-14">{{ $e->titre1 }}</p>
                        <a href="{{ route('detailExpertise',['id'=>$e->id]) }}" class="text-decoration-none"><i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @empty

            @endforelse
        </div>
        <div class="text-center mt-lg-5 mt-5">
            <a href="{{ route('expertise') }}" class="text-decoration-none read_more">@lang("info.autres.lirePlus")<i
                    class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<section class="violence-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="violence_wrapper position-relative">
                    <div class="violence_content" data-aos="fade-up">
                        <h1 class="text-white">We are here to fight against any violence</h1>
                        <p class="text-white text-size-16">Repudiandae sint et molestiae non recusandae itaque earum
                            rerum hic tenetur a sapiente delectus maiores alias soluta nobis
                            est eligendi optio cumque nihil imeit minus id quod maxime placeat facere possimus,.
                        </p>
                        <a href="./contact.html" class="text-decoration-none appointment">Book Appointment<i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="video_icon">
                    <a class="popup-vimeo"
                        href="https://video-previews.elements.envatousercontent.com/a4464fc1-719e-45da-bf4b-f3ad0e517555/watermarked_preview/watermarked_preview.mp4">
                        <figure class="mb-0">
                            <img class="thumb img-fluid" style="cursor: pointer"
                                src="./assets/images/client-videoicon.png" alt="image">
                        </figure>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Lawyer -->
<section class="lawyer-con position-relative">
    <figure class="lawyer-sideimage mb-0">
        <img src="./assets/images/lawyer-sideimage.png" alt="image" class="img-fluid">
    </figure>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="lawyer_content text-center" data-aos="fade-up">
                    <h6>Team Members</h6>
                    <h2>Team of our expert <span class="span_borderbootom">lawyers</span></h2>
                    <p class="col-xl-8 col-lg-10 mx-auto text-size-16 mb-0">Qucimus qui blanditiis praesentium
                        voluptatum deleniti atque corrupti quos dolores ruas molestias excepturi
                        sint occaecati cupiditate non provident.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            @forelse ($teams->take(6) as $t)
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 mb-5">
                <div class="lawyer-box">
                    <a href="">
                        <figure class="lawyer-image image-wrapper">
                            <img src="{{ asset('storage/'.$t->photo) }}" alt="image" class="img-fluid">
                        </figure>
                        <div class="content">
                            <h4>{{ $t->prenom." - ".$t->nom }}</h4>
                            <span class="text-size-14">{{ $t->fonction->fonction }}</span>
                            <ul class="list-unstyled mb-0">
                                <li class="icons"><a href="https://www.facebook.com/login/" target="blank"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li class="icons"><a href="https://twitter.com/i/flow/login" target="blank"><i
                                            class="fa-brands fa-x-twitter"></i></a></li>
                                <li class="icons"><a href="https://www.linkedin.com/login" target="blank"><i
                                            class="fa-brands fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
            @empty

            @endforelse


        </div>
        <div class="text-center mt-lg-5 mt-5">
            <a href="{{ route('team') }}" class="text-decoration-none read_more">@lang("info.autres.lirePlus")<i
                    class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
</section>
@include("parties.blog")
@endsection
