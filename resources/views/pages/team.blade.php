@extends("layouts.template")
@section("style")
<link href="{{ asset('assets/css/blog.css') }} " rel="stylesheet" type="text/css">

@endsection
@section("contente")

<!-- Team -->
<section class="team-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center team_content" data-aos="fade-up">
                    <h6>Team Members</h6>
                    <h2>Team of Our Expert Lawyers</h2>
                    <p class="mx-auto mb-0 col-xl-8 col-lg-10 text-size-16">Qucimus qui blanditiis praesentium
                        voluptatum deleniti atque corrupti quos dolores ruas molestias excepturi
                        sint occaecati cupiditate non provident.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="blog-posts blogpage-section">

        <div class="container">
            <div class="gap-3 mb-4 filter-buttons d-flex justify-content-center mb-lg-5">
                <button data-filter="*" class="active btn btn-filter">All</button>
                @forelse ($fonction as $f)
                <button data-filter="{{ $f->fonction }}" class="btn btn-filter">{{ $f->fonction }}</button>

                @empty

                @endforelse
                {{-- <button data-filter="category2" class="btn btn-filter">Category 2</button>
                <button data-filter="category3" class="btn btn-filter">Category 3</button> --}}
            </div>
            <div class="row" data-aos="fade-up">
                @forelse ($teams as $t)
                <div class="col-xl-4 col-lg-4 col-md-6 grid-item" data-category="{{ $t->fonction->fonction }}">
                    <div class="team-box">
                        <a href="#" data-toggle="modal" data-target="#modal-detail-team{{$t->id}}">
                            <figure class="lawyer-image image-wrapper">
                                <img src="{{ asset('storage/'.$t->photo) }}" alt="image" class="img-fluid">
                            </figure>
                            <div class="content">
                                <h4>{{ $t->prenom." - ".$t->nom }}</h4>
                                <span class="text-size-14">{{ $t->fonction->fonction }}</span>
                                <ul class="mb-0 list-unstyled">
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
        </div>
    </section>

</section>

@include("parties.modalDetailTeam")

@endsection
