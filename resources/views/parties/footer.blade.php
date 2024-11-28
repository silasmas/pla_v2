<!-- Footer -->
<section class="footer-con position-relative" id="footer">
    <div class="container position-relative">
        <div class="row">
            <div class="col-12">
                <div class="footer_portion" data-aos="fade-up">
                    <div class="row">
                        <div class="col-12">
                            <div class="upper_portion" data-aos="fade-up">
                                <div class="heading">
                                    <h6 class="text-white">Subscription</h6>
                                    <h3 class="text-white mb-0">Subscribe to our <span
                                            class="span_borderbootom">newsletter</span></h3>
                                </div>
                                <form action="javascript:;">
                                    <div class="form-group position-relative mb-0">
                                        <input type="text" class="form_style" placeholder="Your email address" name="email">
                                        <button>Subscribe<i class="fa-solid fa-arrow-right"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="middle_portion">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="logo-content">
                        <a href="./index.html" class="footer-logo">
                            <figure class="mb-0"><img height="100" src="{{ asset('assets/images/PLA_logo1.png') }}" alt="image"></figure>
                        </a>
                        <p class="text-size-14">Nemo enim ipsam voluptatem quia voluptas sit asperna tur aut odit
                            aut fugit, sed quia conseuntur magni dolor es eos rui ratione...</p>
                        <ul class="list-unstyled mb-0 social-icons">
                            <li><a href="https://www.facebook.com/login/" class="text-decoration-none"><i class="fa-brands fa-facebook-f social-networks"></i></a></li>
                            <li><a href="https://twitter.com/i/flow/login" class="text-decoration-none"><i class="fa-brands fa-x-twitter social-networks"></i></a></li>
                            <li><a href="https://www.linkedin.com/login" class="text-decoration-none"><i class="fa-brands fa-linkedin social-networks"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-2 col-md-4 col-sm-4 col-6">
                    <div class="links">
                        <h4 class="heading">Useful Links</h4>
                        <ul class="list-unstyled mb-0">
                            <li><i class="fa-solid fa-arrow-right"></i><a href="" class=" text-size-14 text text-decoration-none">@lang('info.m1')</a></li>
                            <li><i class="fa-solid fa-arrow-right"></i><a href="" class=" text-size-14 text text-decoration-none">@lang('info.m2')</a></li>
                            <li><i class="fa-solid fa-arrow-right"></i><a href="" class=" text-size-14 text text-decoration-none">@lang('info.m3')</a></li>
                            <li><i class="fa-solid fa-arrow-right"></i><a href="" class=" text-size-14 text text-decoration-none">@lang('info.m4')</a></li>
                            <li><i class="fa-solid fa-arrow-right"></i><a href="" class=" text-size-14 text text-decoration-none">@lang('info.m6')</a></li>
                            {{-- <li><i class="fa-solid fa-arrow-right"></i><a href="" class=" text-size-14 text text-decoration-none">Contact</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="timing">
                        <h4 class="heading">Office Hours</h4>
                        <ul class="list-unstyled mb-0">
                            <li><p>Monday – Saturday</p></li>
                            <li><span>12:00 – 14:45</span></li>
                            <li><p>Sunday – Thursday</p></li>
                            <li><span>17.30 – 21.45</span></li>
                            <li><p>Friday – Saturday</p></li>
                            <li><span class="mb-0">13.00 – 19.45</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
                    <div class="icon">
                        <h4 class="heading">@lang('info.footer.contact')</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="text">
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel:+568925896325" class="text-decoration-none">+5689 2589 6325</a>
                            </li>
                            <li class="text">
                                <i class="fa-solid fa-envelope"></i>
                                <a href="mailto:info@lawfinity.com"
                                    class="text-decoration-none">Info@lawfinity.com</a>
                            </li>
                            <li class="text">
                                <i class="fa-solid fa-location-dot"></i>
                                <p class="address mb-0">21 King Street Melbourne, 3000, Australia</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fixed-form-container">
        <div class="image">
            <figure class="footer-contactimage mb-0">
                <img src="./assets/images/footer-contactimage.png" alt="image" class="img-fluid">
            </figure>
        </div>
        <div class="body" style="display: none;">
            <form action="javascript:;">
                <div class="form-group mb-0">
                    <input type="text" class="form_style" placeholder="Nom complet" name="name">
                </div>
                <div class="form-group mb-0">
                    <input type="email" class="form_style" placeholder="Email" name="email">
                </div>
                <div class="form-group mb-0">
                    <input type="tel" class="form_style" placeholder="Téléphone" name="phone">
                </div>
                <div class="form-group mb-0">
                    <textarea class="form_style" placeholder="Message" rows="3" name="msg"></textarea>
                </div>
                <button type="submit" class="submit_now text-decoration-none">Envoyer</button>
            </form>
        </div>
    </div>
    <figure class="footer-sideimage mb-0">
        <img src="{{ asset('assets/images/footer-sideimage.png') }}" alt="image" class="img-fluid">
    </figure>
    <div class="copyright">
        <p class="mb-0">Copyright © Pathy Liongo & Associates 2024 <small>Designed By <a href="https://www.silasmas.com" target="_blank">SilasDev</a></small></p>
        {{-- <p class="mb-0" style="font-size: 14px;"></p> --}}

    </div>
</section>
