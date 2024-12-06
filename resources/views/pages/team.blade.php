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
                <button data-filter="category1" class="btn btn-filter">Category 1</button>
                <button data-filter="category2" class="btn btn-filter">Category 2</button>
                <button data-filter="category3" class="btn btn-filter">Category 3</button>
            </div>
            <div class="row" data-aos="fade-up">

                <div class="col-xl-4 col-lg-4 col-md-6 grid-item" data-category="category1">
                    <div class="team-box">
                        <a href="">
                            <figure class="lawyer-image">
                                <img src="./assets/images/lawyer-image1.jpg" alt="image" class="img-fluid">
                            </figure>
                            <div class="content">
                                <h4>Marvin Joner</h4>
                                <span class="text-size-14">Senior Lawyer</span>
                                <ul class="list-unstyled mb-0">
                                    <li class="icons"><a href="https://www.facebook.com/login/"><i
                                                class="fa-brands fa-facebook-f"></i></a></li>
                                    <li class="icons"><a href="https://twitter.com/i/flow/login"><i
                                                class="fa-brands fa-x-twitter"></i></a></li>
                                    <li class="icons"><a href="https://www.linkedin.com/login"><i
                                                class="fa-brands fa-linkedin"></i></a></li>
                                </ul>
                            </div>

                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 grid-item" data-category="category2">
                    <div class="team-box">
                        <figure class="lawyer-image">
                            <img src="./assets/images/lawyer-image2.jpg" alt="image" class="img-fluid">
                        </figure>
                        <div class="content">
                            <h4>Patricia Woodrum</h4>
                            <span class="text-size-14">Assistant Lawyer</span>
                            <ul class="list-unstyled mb-0">
                                <li class="icons"><a href="https://www.facebook.com/login/"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li class="icons"><a href="https://twitter.com/i/flow/login"><i
                                            class="fa-brands fa-x-twitter"></i></a></li>
                                <li class="icons"><a href="https://www.linkedin.com/login"><i
                                            class="fa-brands fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 grid-item" data-category="category3">
                    <div class="team-box">
                        <figure class="lawyer-image">
                            <img src="./assets/images/lawyer-image3.jpg" alt="image" class="img-fluid">
                        </figure>
                        <div class="content">
                            <h4>Hannaz Stone</h4>
                            <span class="text-size-14">Junior Lawyer</span>
                            <ul class="list-unstyled mb-0">
                                <li class="icons"><a href="https://www.facebook.com/login/"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li class="icons"><a href="https://twitter.com/i/flow/login"><i
                                            class="fa-brands fa-x-twitter"></i></a></li>
                                <li class="icons"><a href="https://www.linkedin.com/login"><i
                                            class="fa-brands fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 grid-item" data-category="category2">
                    <div class="team-box">
                        <figure class="lawyer-image">
                            <img src="./assets/images/lawyer-image4.jpg" alt="image" class="img-fluid">
                        </figure>
                        <div class="content">
                            <h4>Marvin Joner</h4>
                            <span class="text-size-14">Senior Lawyer</span>
                            <ul class="list-unstyled mb-0">
                                <li class="icons"><a href="https://www.facebook.com/login/"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li class="icons"><a href="https://twitter.com/i/flow/login"><i
                                            class="fa-brands fa-x-twitter"></i></a></li>
                                <li class="icons"><a href="https://www.linkedin.com/login"><i
                                            class="fa-brands fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 grid-item" data-category="category1">
                    <div class="team-box">
                        <figure class="lawyer-image">
                            <img src="./assets/images/lawyer-image5.jpg" alt="image" class="img-fluid">
                        </figure>
                        <div class="content">
                            <h4>Patricia Woodrum</h4>
                            <span class="text-size-14">Assistant Lawyer</span>
                            <ul class="list-unstyled mb-0">
                                <li class="icons"><a href="https://www.facebook.com/login/"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li class="icons"><a href="https://twitter.com/i/flow/login"><i
                                            class="fa-brands fa-x-twitter"></i></a></li>
                                <li class="icons"><a href="https://www.linkedin.com/login"><i
                                            class="fa-brands fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 grid-item" data-category="category2">
                    <div class="team-box mb-0">
                        <figure class="lawyer-image">
                            <img src="./assets/images/lawyer-image6.jpg" alt="image" class="img-fluid">
                        </figure>
                        <div class="content">
                            <h4>Hannaz Stone</h4>
                            <span class="text-size-14">Junior Lawyer</span>
                            <ul class="list-unstyled mb-0">
                                <li class="icons"><a href="https://www.facebook.com/login/"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li class="icons"><a href="https://twitter.com/i/flow/login"><i
                                            class="fa-brands fa-x-twitter"></i></a></li>
                                <li class="icons"><a href="https://www.linkedin.com/login"><i
                                            class="fa-brands fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>
@endsection
