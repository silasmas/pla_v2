@extends("layouts.template")

@section("contente")

<!-- About -->
<section class="aboutpage-con position-relative">
    <figure class="mb-0 about-sideimage">
        <img src="{{ asset('assets/images/img/i2.jpg') }}" alt="image" class="img-fluid">
    </figure>
    <div class="container">
        <div class="row">
            <div class="order-2 text-center col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 text-lg-left">
                <div class="about_wrapper position-relative" data-aos="zoom-in">
                    <figure class="mb-0 about-image">
                        <img src="{{ asset('assets/images/about2-image.jpg') }}" alt="image" class="img-fluid">
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
                    <h6>About us</h6>
                    <h2>Providing Top-Notch Legal Representation</h2>
                    <p class="text text-size-16">Quis autem vel eum iure reprehenderit rui in ea volurate veli esse ruam
                        nihil molestiae conseauatur vel illum rui dolorema
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
                    <a href="#" class="text-decoration-none read_more" data-toggle="modal"
                        data-target="#modalAbout">Read More<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Succeed -->
<section class="succeed-con position-relative">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="succeed_content" data-aos="fade-up">
                    <h6>Who We Are</h6>
                    <h2>Committed to Helping Our Clients Succeed</h2>
                    <p class="text text-size-16">Nucimus qui blanditiis praesentium voluptatum deleniti atrue corrupti
                        ruos dolores ruas molestias occaecati.</p>
                    <ul class="mb-0 list-unstyled">
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <p class="mb-0 text-size-16">Nxcepteur sint occaecat cupidatat noru even.</p>
                        </li>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <p class="mb-0 text-size-16">Guis aute irure dolor in reprehenderit in voluta facis.</p>
                        </li>
                        <li>
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <p class="mb-0 text-size-16">Kerum hic tenetur a sapiente delectus au occae.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="succeed_wrapper" data-aos="zoom-in">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="box">
                                <div class="succeed-box">
                                    <figure class="icon">
                                        <img src="{{ asset('assets/images/succeed-icon1.png') }}" alt="image" class="img-fluid">
                                    </figure>
                                    <span class="number counter">250</span>
                                    <sup class="plus">+</sup>
                                    <span class="text">Business Partners</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="succeed-box">
                                <figure class="icon">
                                    <img src="{{ asset('assets/images/succeed-icon2.png') }} " alt="image" class="img-fluid">
                                </figure>
                                <span class="number counter">180</span>
                                <sup class="plus">+</sup>
                                <span class="text">Cases Done</span>
                            </div>
                        </div>
                    </div>
                    <div class="succeed-downcontent">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="box">
                                    <div class="succeed-box">
                                        <figure class="icon">
                                            <img src="{{ asset('assets/images/succeed-icon3.png') }} " alt="image" class="img-fluid">
                                        </figure>
                                        <span class="number counter">370</span>
                                        <sup class="plus">+</sup>
                                        <span class="text">Happy Clients</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="succeed-box">
                                    <figure class="icon">
                                        <img src="{{ asset('assets/images/succeed-icon4.png') }} " alt="image" class="img-fluid">
                                    </figure>
                                    <span class="number counter">90</span>
                                    <sup class="plus">+</sup>
                                    <span class="text">Awards Won</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade modal-about" data-backdrop="static" data-keyboard="false" id="modalAbout" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border: none">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3>
                    A propos de nous
                </h3>
                <h1>PLA Law Firm</h1>
                <p> Est un cabinet d’avocats basé en République Démocratique du Congo, offrant ses services dans tous
                    les domaines du droit des affaires en Afrique francophone. <br>Nos avocats sont des experts
                    juridiques internationaux ayant plus de 15 ans de pratique en droit des affaires et des compétences
                    approfondies en analyse juridique.&nbsp; Ils suivent avec diligence les évolutions constantes des
                    cadres juridiques et réglementaires de nos différents secteurs d’intervention.</p>
                <p>Avec une équipe multiculturelle et multidisciplinaire respectant les standards internationaux de
                    leurs professions, nous fournissons à nos clients une assistance et une représentation efficaces
                    avec proactivité et une attention particulière à chaque détail dans la gestion des intérêts de nos
                    clients. &nbsp;<br><br></p>
            </div>
        </div>
    </div>
</div>

@include("parties.blog")
@endsection()
