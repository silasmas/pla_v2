@extends('layouts.template')
@section("style")
    <link href="{{ asset('assets/css/blog.css') }} " rel="stylesheet" type="text/css">

@endsection
@section('contente')
    <!-- Article -->
    <section class="blog-posts blogpage-section three-column-con">
        <div class="container">
            <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div id="blog" class="col-xl-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="700">
                            <div class="blog-box blog-box1">
                                <figure class="blog-image mb-0">
                                    <img src="{{ asset('assets/images/article-image1.jpg') }}" alt="" loading="lazy"
                                        class="img-fluid">
                                </figure>
                                <div class="lower-portion">
                                    <div class="span-i-con">
                                        <i class="fa-solid fa-user"> </i><span class="text-size-14 text-mr">Publier par : Me Pathy Liongo</span>
                                        <i class="tag-mb fa-solid fa-tag"> </i><span class="text-size-14">Electricité</span>
                                    </div>
                                    <a href="{{ route('detailPublication', ['id'=>1]) }}">
                                        <h5>Why You Need Virtual Assistant for Your Company</h5>
                                    </a>
                                </div>
                                <div class="button-portion ">
                                    <div class="date">
                                        <i class="mb-0 calendar-ml fa-solid fa-calendar-days"></i>
                                        <span class="mb-0 text-size-14">Dec 20,2022</span>
                                    </div>
                                    <div class="button">
                                        <a href="{{ route('detailPublication', ['id'=>1]) }}" class="mb-0 read_more text-decoration-none">Voir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="700">
                            <div class="blog-box blog-box1">
                                <figure class="blog-image mb-0">
                                    <img src="{{ asset('assets/images/article-image1.jpg') }}" alt="" loading="lazy"
                                        class="img-fluid">
                                </figure>
                                <div class="lower-portion">
                                    <div class="span-i-con">
                                        <i class="fa-solid fa-user"> </i><span class="text-size-14 text-mr">Publier par : Me Pathy Liongo</span>
                                        <i class="tag-mb fa-solid fa-tag"> </i><span class="text-size-14">Electricité</span>
                                    </div>
                                    <a href="{{ route('detailPublication', ['id'=>1]) }}">
                                        <h5>Why You Need Virtual Assistant for Your Company</h5>
                                    </a>
                                </div>
                                <div class="button-portion ">
                                    <div class="date">
                                        <i class="mb-0 calendar-ml fa-solid fa-calendar-days"></i>
                                        <span class="mb-0 text-size-14">Dec 20,2022</span>
                                    </div>
                                    <div class="button">
                                        <a href="{{ route('detailPublication', ['id'=>1]) }}" class="mb-0 read_more text-decoration-none">Voir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="700">
                            <div class="blog-box blog-box1">
                                <figure class="blog-image mb-0">
                                    <img src="{{ asset('assets/images/article-image1.jpg') }}" alt="" loading="lazy"
                                        class="img-fluid">
                                </figure>
                                <div class="lower-portion">
                                    <div class="span-i-con">
                                        <i class="fa-solid fa-user"> </i><span class="text-size-14 text-mr">Publier par : Me Pathy Liongo</span>
                                        <i class="tag-mb fa-solid fa-tag"> </i><span class="text-size-14">Electricité</span>
                                    </div>
                                    <a href="{{ route('detailPublication', ['id'=>1]) }}">
                                        <h5>Why You Need Virtual Assistant for Your Company</h5>
                                    </a>
                                </div>
                                <div class="button-portion ">
                                    <div class="date">
                                        <i class="mb-0 calendar-ml fa-solid fa-calendar-days"></i>
                                        <span class="mb-0 text-size-14">Dec 20,2022</span>
                                    </div>
                                    <div class="button">
                                        <a href="{{ route('detailPublication', ['id'=>1]) }}" class="mb-0 read_more text-decoration-none">Voir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="700">
                            <div class="blog-box blog-box1">
                                <figure class="blog-image mb-0">
                                    <img src="{{ asset('assets/images/article-image1.jpg') }}" alt="" loading="lazy"
                                        class="img-fluid">
                                </figure>
                                <div class="lower-portion">
                                    <div class="span-i-con">
                                        <i class="fa-solid fa-user"> </i><span class="text-size-14 text-mr">Publier par : Me Pathy Liongo</span>
                                        <i class="tag-mb fa-solid fa-tag"> </i><span class="text-size-14">Electricité</span>
                                    </div>
                                    <a href="{{ route('detailPublication', ['id'=>1]) }}">
                                        <h5>Why You Need Virtual Assistant for Your Company</h5>
                                    </a>
                                </div>
                                <div class="button-portion ">
                                    <div class="date">
                                        <i class="mb-0 calendar-ml fa-solid fa-calendar-days"></i>
                                        <span class="mb-0 text-size-14">Dec 20,2022</span>
                                    </div>
                                    <div class="button">
                                        <a href="{{ route('detailPublication', ['id'=>1]) }}" class="mb-0 read_more text-decoration-none">Voir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="700">
                            <div class="blog-box blog-box1">
                                <figure class="blog-image mb-0">
                                    <img src="{{ asset('assets/images/article-image1.jpg') }}" alt="" loading="lazy"
                                        class="img-fluid">
                                </figure>
                                <div class="lower-portion">
                                    <div class="span-i-con">
                                        <i class="fa-solid fa-user"> </i><span class="text-size-14 text-mr">Publier par : Me Pathy Liongo</span>
                                        <i class="tag-mb fa-solid fa-tag"> </i><span class="text-size-14">Electricité</span>
                                    </div>
                                    <a href="{{ route('detailPublication', ['id'=>1]) }}">
                                        <h5>Why You Need Virtual Assistant for Your Company</h5>
                                    </a>
                                </div>
                                <div class="button-portion ">
                                    <div class="date">
                                        <i class="mb-0 calendar-ml fa-solid fa-calendar-days"></i>
                                        <span class="mb-0 text-size-14">Dec 20,2022</span>
                                    </div>
                                    <div class="button">
                                        <a href="{{ route('detailPublication', ['id'=>1]) }}" class="mb-0 read_more text-decoration-none">Voir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="700">
                            <div class="blog-box blog-box1">
                                <figure class="blog-image mb-0">
                                    <img src="{{ asset('assets/images/article-image1.jpg') }}" alt="" loading="lazy"
                                        class="img-fluid">
                                </figure>
                                <div class="lower-portion">
                                    <div class="span-i-con">
                                        <i class="fa-solid fa-user"> </i><span class="text-size-14 text-mr">Publier par : Me Pathy Liongo</span>
                                        <i class="tag-mb fa-solid fa-tag"> </i><span class="text-size-14">Electricité</span>
                                    </div>
                                    <a href="{{ route('detailPublication', ['id'=>1]) }}">
                                        <h5>Why You Need Virtual Assistant for Your Company</h5>
                                    </a>
                                </div>
                                <div class="button-portion ">
                                    <div class="date">
                                        <i class="mb-0 calendar-ml fa-solid fa-calendar-days"></i>
                                        <span class="mb-0 text-size-14">Dec 20,2022</span>
                                    </div>
                                    <div class="button">
                                        <a href="{{ route('detailPublication', ['id'=>1]) }}" class="mb-0 read_more text-decoration-none">Voir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="700">
                            <div class="blog-box blog-box1">
                                <figure class="blog-image mb-0">
                                    <img src="{{ asset('assets/images/article-image1.jpg') }}" alt="" loading="lazy"
                                        class="img-fluid">
                                </figure>
                                <div class="lower-portion">
                                    <div class="span-i-con">
                                        <i class="fa-solid fa-user"> </i><span class="text-size-14 text-mr">Publier par : Me Pathy Liongo</span>
                                        <i class="tag-mb fa-solid fa-tag"> </i><span class="text-size-14">Electricité</span>
                                    </div>
                                    <a href="{{ route('detailPublication', ['id'=>1]) }}">
                                        <h5>Why You Need Virtual Assistant for Your Company</h5>
                                    </a>
                                </div>
                                <div class="button-portion ">
                                    <div class="date">
                                        <i class="mb-0 calendar-ml fa-solid fa-calendar-days"></i>
                                        <span class="mb-0 text-size-14">Dec 20,2022</span>
                                    </div>
                                    <div class="button">
                                        <a href="{{ route('detailPublication', ['id'=>1]) }}" class="mb-0 read_more text-decoration-none">Voir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="700">
                            <div class="blog-box blog-box1">
                                <figure class="blog-image mb-0">
                                    <img src="{{ asset('assets/images/article-image1.jpg') }}" alt="" loading="lazy"
                                        class="img-fluid">
                                </figure>
                                <div class="lower-portion">
                                    <div class="span-i-con">
                                        <i class="fa-solid fa-user"> </i><span class="text-size-14 text-mr">Publier par : Me Pathy Liongo</span>
                                        <i class="tag-mb fa-solid fa-tag"> </i><span class="text-size-14">Electricité</span>
                                    </div>
                                    <a href="{{ route('detailPublication', ['id'=>1]) }}">
                                        <h5>Why You Need Virtual Assistant for Your Company</h5>
                                    </a>
                                </div>
                                <div class="button-portion ">
                                    <div class="date">
                                        <i class="mb-0 calendar-ml fa-solid fa-calendar-days"></i>
                                        <span class="mb-0 text-size-14">Dec 20,2022</span>
                                    </div>
                                    <div class="button">
                                        <a href="{{ route('detailPublication', ['id'=>1]) }}" class="mb-0 read_more text-decoration-none">Voir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="700">
                            <div class="blog-box blog-box1">
                                <figure class="blog-image mb-0">
                                    <img src="{{ asset('assets/images/article-image1.jpg') }}" alt="" loading="lazy"
                                        class="img-fluid">
                                </figure>
                                <div class="lower-portion">
                                    <div class="span-i-con">
                                        <i class="fa-solid fa-user"> </i><span class="text-size-14 text-mr">Publier par : Me Pathy Liongo</span>
                                        <i class="tag-mb fa-solid fa-tag"> </i><span class="text-size-14">Electricité</span>
                                    </div>
                                    <a href="{{ route('detailPublication', ['id'=>1]) }}">
                                        <h5>Why You Need Virtual Assistant for Your Company</h5>
                                    </a>
                                </div>
                                <div class="button-portion ">
                                    <div class="date">
                                        <i class="mb-0 calendar-ml fa-solid fa-calendar-days"></i>
                                        <span class="mb-0 text-size-14">Dec 20,2022</span>
                                    </div>
                                    <div class="button">
                                        <a href="{{ route('detailPublication', ['id'=>1]) }}" class="mb-0 read_more text-decoration-none">Voir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="700">
                            <div class="blog-box blog-box1">
                                <figure class="blog-image mb-0">
                                    <img src="{{ asset('assets/images/article-image1.jpg') }}" alt="" loading="lazy"
                                        class="img-fluid">
                                </figure>
                                <div class="lower-portion">
                                    <div class="span-i-con">
                                        <i class="fa-solid fa-user"> </i><span class="text-size-14 text-mr">Publier par : Me Pathy Liongo</span>
                                        <i class="tag-mb fa-solid fa-tag"> </i><span class="text-size-14">Electricité</span>
                                    </div>
                                    <a href="{{ route('detailPublication', ['id'=>1]) }}">
                                        <h5>Why You Need Virtual Assistant for Your Company</h5>
                                    </a>
                                </div>
                                <div class="button-portion ">
                                    <div class="date">
                                        <i class="mb-0 calendar-ml fa-solid fa-calendar-days"></i>
                                        <span class="mb-0 text-size-14">Dec 20,2022</span>
                                    </div>
                                    <div class="button">
                                        <a href="{{ route('detailPublication', ['id'=>1]) }}" class="mb-0 read_more text-decoration-none">Voir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
