@extends("layouts.template")

@section("contente")

<!-- About -->
<section class="aboutpage-con position-relative">
    <figure class="about-sideimage mb-0">
        <img src="./assets/images/img/i2.jpg" alt="image" class="img-fluid">
    </figure>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-2 text-lg-left text-center">
                <div class="about_wrapper position-relative" data-aos="zoom-in">
                    <figure class="about-image mb-0">
                        <img src="./assets/images/about2-image.jpg" alt="image" class="img-fluid">
                    </figure>
                    <figure class="about-circle mb-0">
                        <img src="./assets/images/aboutpage-circle.png" alt="image" class="img-fluid">
                    </figure>
                    <div class="about-box">
                        <figure class="about-icon">
                            <img src="./assets/images/aboutpage-icon.png" alt="image" class="img-fluid">
                        </figure>
                        <span class="number counter">30</span>
                        <sup class="plus">+</sup>
                        <span class="text">Years of Experience</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-1">
                <div class="about_content" data-aos="fade-up">
                    <h6>About us</h6>
                    <h2>Providing Top-Notch Legal Representation</h2>
                    <p class="text text-size-16">Quis autem vel eum iure reprehenderit rui in ea volurate veli esse ruam nihil molestiae conseauatur vel illum rui dolorema
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
                    <a href="./about.html" class="text-decoration-none read_more">Read More<i class="fa-solid fa-arrow-right"></i></a>
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
                    <p class="text text-size-16">Nucimus qui blanditiis praesentium voluptatum deleniti atrue corrupti ruos dolores ruas molestias occaecati.</p>
                    <ul class="list-unstyled mb-0">
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
                                        <img src="./assets/images/succeed-icon1.png" alt="image" class="img-fluid">
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
                                    <img src="./assets/images/succeed-icon2.png" alt="image" class="img-fluid">
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
                                            <img src="./assets/images/succeed-icon3.png" alt="image" class="img-fluid">
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
                                        <img src="./assets/images/succeed-icon4.png" alt="image" class="img-fluid">
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

@include("parties.blog")
@endsection()
