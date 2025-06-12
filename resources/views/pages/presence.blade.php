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
            @forelse ($presence as $b)
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="portfolio-box">
                    <div class="image position-relative">
                        <figure class="mb-0">
                            <img src="{{ asset('storage/'.$b->photo) }}" alt="image" class="img-fluid">
                        </figure>
                        <span class="text-white">{{ $b->ville }}</span>
                    </div>
                    <div class="box-content">
                        <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#modal-detail-office{{ $b->id}}"><h5>{{ $b->adresse }}</h5></a>
                        <p class="text-size-14">{{ $b->detail }}</p>
                        <a href="" class="text-decoration-none" data-toggle="modal" data-target="#modal-detail-office{{ $b->id}}"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @empty

            @endforelse


        </div>
    </div>
</section>
@include("parties.modalDetailOfficec")
 @include("parties.modalDetailTeam")
@endsection
