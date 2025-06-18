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
                                    <h6 class="text-white">@lang('info.footer.tNewsletter')</h6>
                                    <h3 class="text-white mb-0" style="font-size: 20px;"><span
                                            class="span_borderbootom">@lang('info.footer.txtNewsletter')</span></h3>
                                </div>
                                <form action="#" id="newsletter-form">
                                    <div class="form-group position-relative mb-0">
                                        <input type="text" class="form_style" placeholder="@lang('info.footer.placeholderNewsletter')"
                                            name="email" id="newsletter-email" required>
                                        <button id="newsletter-button">@lang('info.footer.btnNewsletter')<i class="fa-solid fa-arrow-right"></i></button>
                                    </div>
                                    {{-- Zone pour afficher les messages d’erreur / succès --}}
                                    <div id="newsletter-feedback" style="margin-top:0.5rem; font-size:0.9rem;"></div>
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
                            <figure class="mb-0"><img height="100" src="{{ asset('assets/images/PLA_logo1.png') }}"
                                    alt="image"></figure>
                        </a>
                        <p class="text-size-14">
                            {!! $accueil->txtfooter ?? '' !!}
                        </p>
                        <ul class="list-unstyled mb-0 social-icons">
                            <li {{ $accueil->facebook ?? 'hidden' }}><a href="{{ $accueil->facebook ?? '' }}"
                                    class="text-decoration-none"><i
                                        class="fa-brands fa-facebook-f social-networks"></i></a></li>
                            <li {{ $accueil->tweeter ?? 'hidden' }}><a href="{{ $accueil->tweeter ?? ' hidden' }}"
                                    class="text-decoration-none"><i
                                        class="fa-brands fa-x-twitter social-networks"></i></a></li>
                            <li {{ $accueil->tweeter ?? 'hidden' }}><a href="{{ $accueil->tweeter ?? ' hidden' }}"
                                    class="text-decoration-none"><i
                                        class="fa-brands fa-linkedin social-networks"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-2 col-md-4 col-sm-4 col-6">
                    <div class="links">
                        <h4 class="heading">@lang('info.footer.titreMenuRaccourci')</h4>
                        <ul class="list-unstyled mb-0">
                            <li><i class="fa-solid fa-arrow-right"></i><a href=""
                                    class=" text-size-14 text text-decoration-none">@lang('info.m1')</a></li>
                            <li><i class="fa-solid fa-arrow-right"></i><a href=""
                                    class=" text-size-14 text text-decoration-none">@lang('info.m2')</a></li>
                            <li><i class="fa-solid fa-arrow-right"></i><a href=""
                                    class=" text-size-14 text text-decoration-none">@lang('info.m3')</a></li>
                            <li><i class="fa-solid fa-arrow-right"></i><a href=""
                                    class=" text-size-14 text text-decoration-none">@lang('info.m4')</a></li>
                            <li><i class="fa-solid fa-arrow-right"></i><a href=""
                                    class=" text-size-14 text text-decoration-none">@lang('info.m6')</a></li>
                            {{-- <li><i class="fa-solid fa-arrow-right"></i><a href=""
                                    class=" text-size-14 text text-decoration-none">Contact</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                    <div class="timing">
                        <h4 class="heading">@lang('info.footer.temps') </h4>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <p>@lang('info.footer.lundi') – @lang('info.footer.vendredi') </p>
                            </li>
                            <li><span>@lang('info.footer.heure') </span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
                    <div class="icon">
                        <h4 class="heading">@lang('info.footer.contact')</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="text">
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel:{{ $accueil->telphone ?? '' }}"
                                    class="text-decoration-none">{{ $accueil->telphone ?? '' }}</a>
                            </li>
                            <li class="text">
                                <i class="fa-solid fa-envelope"></i>
                                <a href="mailto:{{ $accueil->email ?? '' }}"
                                    class="text-decoration-none">{{ $accueil->email ?? '' }}</a>
                            </li>
                            <li class="text">
                                <i class="fa-solid fa-location-dot"></i>
                                <p class="address mb-0">@lang("info.site.add1")</p>
                                <p>@lang("info.site.add2")</p>
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
        <p class="mb-0">Copyright © Pathy Liongo & Associates 2024 <small>Designed By <a
                    href="https://www.silasmas.com" target="_blank">SilasDev</a></small></p>
        {{-- <p class="mb-0" style="font-size: 14px;"></p> --}}

    </div>
</section>
