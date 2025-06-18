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
                    <h6>@lang('info.m3')</h6>
                    <h2>@lang('info.expertises.titre')</h2>
                    <p class="col-xl-8 col-lg-10 mx-auto text-size-16 mb-0">
                        @lang('info.expertises.description')
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
                        <h1 class="text-white">@lang("info.titrepage.tRdv")</h1>
                        <p class="text-white text-size-16">
                            @lang("info.titrepage.descRdv")
                        </p>
                        <a href="#"  id="book-appointment-btn" class="text-decoration-none appointment">
                            @lang("info.titrepage.btnRdv")<i class="fa-solid fa-arrow-right"></i></a>
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
                    <h6>@lang("info.team.titre")</h6>
                    <h2>@lang("info.team.desc1")<span class="span_borderbootom">@lang("info.team.desc2")</span></h2>
                    <p class="col-xl-8 col-lg-10 mx-auto text-size-16 mb-0">
                        @lang("info.team.description")
                    </p>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            @forelse ($teams->take(6) as $t)
               @php

                            // Génère une classe CSS basée sur la fonction de l'avocat (ex: "fonction-avocat")
$fonctionClass = 'fonction-' . Str::slug($t->fonction->fonction);

// Génère une ou plusieurs classes CSS basées sur les bureaux (ex: "bureau-kinshasa bureau-lubumbashi")
$bureauxClasses = $t->bureau->map(fn($b) => 'bureau-' . Str::slug($b->ville))->implode(' ');

// Vérifie si une photo est enregistrée et existe réellement dans le disque 'public'
$photoExists = $t->photo && Storage::disk('public')->exists($t->photo);

// Choisit l'image à afficher :
                            // - Si une photo personnelle existe → l'utiliser
// - Sinon :
//     - Si c'est un avocat homme → avatar-avocat-homme.png
                            //     - Si c'est une avocate femme → avatar-avocat-femme.png
//     - Sinon (non-avocat ou genre non précisé) → avatar générique
$photoUrl = $photoExists
    ? asset('storage/' . $t->photo)
    : match (true) {
        $t->fonction->fonction != 'Assistant administratif' ||
            ($t->fonction->fonction != 'Administrative assistant' && $t->sexe === 'H')
            => asset('assets/images/p2.png'),
        $t->fonction->fonction != 'Assistant administratif' ||
            ($t->fonction->fonction != 'Administrative assistant' && $t->sexe === 'F')
            => asset('assets/images/p3.png'),
        default => asset('assets/images/p1.png'),
                                };
                        @endphp
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 mb-5">
                <div class="lawyer-box">
                    <a href="#" data-toggle="modal" data-target="#modal-detail-team{{$t->id}}">
                        <figure class="lawyer-image image-wrapper">
                            <img src="{{ $photoUrl }}" alt="image" class="img-fluid">
                        </figure>
                        <div class="content">
                            <h4>{{ $t->prenom." - ".$t->nom }}</h4>
                            <span class="text-size-14">{{ $t->fonction->fonction }}</span>
                            {{-- <ul class="list-unstyled mb-0">
                                <li class="icons"><a href="https://www.facebook.com/login/" target="blank"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li class="icons"><a href="https://twitter.com/i/flow/login" target="blank"><i
                                            class="fa-brands fa-x-twitter"></i></a></li>
                                <li class="icons"><a href="https://www.linkedin.com/login" target="blank"><i
                                            class="fa-brands fa-linkedin"></i></a></li>
                            </ul> --}}
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

@include("parties.modalDetailTeam")
@endsection
