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
                <div class="team_content text-center" data-aos="fade-up">
                    <h6>Team Members</h6>
                    <h2>Team of Our Expert Lawyers</h2>
                    <p class="col-xl-8 col-lg-10 mx-auto text-size-16 mb-0">Qucimus qui blanditiis praesentium
                        voluptatum deleniti atque corrupti quos dolores ruas molestias excepturi
                        sint occaecati cupiditate non provident.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="blog-posts blogpage-section">

        <div class="container">
            <div class="filter-buttons d-flex gap-3 justify-content-center mb-lg-5 mb-4">
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
        </div>
    </section>

</section>
@endsection
