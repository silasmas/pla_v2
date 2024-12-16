@extends("layouts.template")

@section("style")
<link href="{{ asset('assets/css/blog.css') }} " rel="stylesheet" type="text/css">
@endsection

@section("contente")
<!-- Single Blog -->
<section class="singleblog-section blogpage-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="main-box">
                    <figure class="mb-3 image1" data-aos="fade-up" data-aos-duration="700">
                        @php
                        $response = checkFileInDirectory("storage/", $avocat->photo);
                        @endphp
                        @if ($response['exists'])
                        <img src="{{ asset('storage/'.$avocat->photo) }}" alt="image" class="img-fluid"
                            loading="lazy">
                        @else
                        <img src="" alt="Default Photo">
                        @endif

                    </figure>
                    <div class="content1" data-aos="fade-up" data-aos-duration="700">
                        <h4>{{ $avocat->prenom }}</h4>
                        <div class="span-fa-outer-con">
                            <i class="fa-solid fa-user"></i>
                            <span class="text-size-14 text-mr">PLA</span>
                            <i class="mb-0 calendar fa-solid fa-calendar-days"></i>
                            <span class="mb-0 text-size-14">Dec 20,2022</span>
                        </div>
                        <p class="text-size-16">
                            {!! $avocat->biographie !!}
                        </p>
                    </div>

                    <div class="buttons aos-init aos-animate" data-aos="fade-up">
                        {{-- @if($avant!=null)
                        <a href="{{ route('detailExpertise',['id'=>$avant->id]) }}" class="prev">
                            <span class="prev-text">Prev</span>
                        </a>
                        @endif

                        @if ($apres!=null)

                        <a href="{{ route('detailExpertise',['id'=>$apres->id]) }}" class="next">
                            <span class="next-text">Next</span>
                        </a> 

                        @endif--}}
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
                        @lang("info.autres.teamViewmore")
                    </h4>
                    @forelse ($avocats as $e)
                    <div class="feed ">
                        <figure class="mb-0 feed-image" data-aos="fade-up">
                            <img src="{{ asset('storage/'.$e->photo) }}" alt="image" class="img-fluid" loading="lazy">
                        </figure>
                        <a href="{{ route('detailTeam',['id'=>$e->id]) }}" class="mb-0">
                            {{ $e->prenom }}</a>
                    </div>
                    @empty

                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
