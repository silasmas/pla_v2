@extends('layouts.template')
@section("style")
    <link href="{{ asset('assets/css/blog.css') }} " rel="stylesheet" type="text/css">

@endsection
@section('contente')
<section class="singleblog-section blogpage-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="main-box">
                    <figure class="image1 mb-3" data-aos="fade-up" data-aos-duration="700">

                        <img src="{{ asset('assets/images/article-image5.jpg') }}" alt="Default Photo"  class="img-fluid">

                    </figure>
                    <div class="content1" data-aos="fade-up" data-aos-duration="700">
                        <h4>Titre de la publication</h4>
                        <div class="span-fa-outer-con">
                            <i class="fa-solid fa-user"></i>
                            <span class="text-size-14 text-mr">Me Pathy Liongo</span>
                            <i class="mb-0 calendar fa-solid fa-calendar-days"></i>
                            <span class="mb-0 text-size-14">Dec 20,2022</span>
                        </div>
                        <p class="text-size-16">
En raison de ses immenses ressources naturelles, l’Afrique représente aujourd’hui une destination importante pour l'industrie minière et celle des hydrocarbures. Pour de nombreux pays africains, l'exploration et la production de ces ressources constituent une part importante de leurs économies et restent la clef de leur croissance économique.

Nos avocats fournissent une large gamme de services juridiques couvrant toutes les étapes des projets miniers et des hydrocarbures, notamment l’assistance dans :
                        </p>
                    </div>

                    <div class="buttons aos-init aos-animate" data-aos="fade-up">
                        {{-- @if($avant!=null) --}}
                        <a href="" class="prev">
                            <span class="prev-text">Prev</span>
                        </a>
                        {{-- @endif --}}

                        {{-- @if ($apres!=null) --}}

                        <a href="" class="next">
                            <span class="next-text">Next</span>
                        </a>

                        {{-- @endif --}}
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 column">
                {{-- <div class="box1" data-aos="fade-up" data-aos-duration="700">
                    <h4>Search News</h4>
                    <form method="POST">
                        <div class="form-row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input type="text" name="search" id="searchblog" class="form-control upper_layer"
                                    placeholder="Search Here...">
                                <div class="input-group-append form-button">
                                    <button class="btn search" name="btnsearch" id="searchbtn"><i
                                            class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div> --}}
                <div class="box1 box5" data-aos="fade-up" data-aos-duration="700">
                    <h4>
                       Autres publications
                    </h4>
                    <div class="feed">
                        <figure class="feed-image mb-0" data-aos="fade-up">
                            <img src="{{ asset('assets/images/article-image1.jpg') }}" alt="image" class="img-fluid" loading="lazy">
                        </figure>
                        <a href="" class="mb-0">
                            Titre</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
