@extends("layouts.template")

@section("contente")
<!-- Portfolio -->
<section class="portfolio-con">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="portfolio_content text-center" data-aos="fade-up">
                    <h6>Notre presence</h6>
                    <h2>Nos différents bureaux dans le monde</h2>
                    <p class="col-xl-8 col-lg-10 mx-auto text-size-16 mb-0">Auit zaser aut odit aut fugit sen quia conseauntur magni eos rui ratione voluptatem serui magni dolor eos rui ratione voluptatem.</p>
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="portfolio-box">
                    <div class="image position-relative">
                        <figure class="mb-0">
                            <img src="{{ asset('assets/images/img/b1.webp') }}" alt="image" class="img-fluid">
                        </figure>
                        <span class="text-white">RD Congo</span>
                    </div>
                    <div class="box-content">
                        <a href="./case-studies.html" class="text-decoration-none"><h5>Kinshasa</h5></a>
                        <p class="text-size-14">Dolor in reprehenderit in velit esse cillum maiores alias...</p>
                        <a href="./case-studies.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="portfolio-box">
                    <div class="image position-relative">
                        <figure class="mb-0">
                            <img src="{{ asset('assets/images/img/b2.webp') }}" alt="image" class="img-fluid">
                        </figure>
                        <span class="text-white">République du congo</span>
                    </div>
                    <div class="box-content">
                        <a href="./case-studies.html" class="text-decoration-none"><h5> Brazza Centre/Poto Poto</h5></a>
                        <p class="text-size-14">Nolor in reprehenderit in velit esse cillum maiores alias...</p>
                        <a href="./case-studies.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="portfolio-box">
                    <div class="image position-relative">
                        <figure class="mb-0">
                            <img src="{{ asset('assets/images/img/b3.webp') }}" alt="image" class="img-fluid">
                        </figure>
                        <span class="text-white">Afrique du sud</span>
                    </div>
                    <div class="box-content">
                        <a href="./case-studies.html" class="text-decoration-none"><h5>Business & Family</h5></a>
                        <p class="text-size-14">Golor in reprehenderit in velit esse cillum maiores alias...</p>
                        <a href="./case-studies.html" class="text-decoration-none"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
