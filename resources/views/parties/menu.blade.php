<div class="banner_outer {{ Route::current()->getName()!=" home" ||Route::current()->
    getName()=="detailExpertise"?"sub_banner":"banner_outer" }} position-relative">
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand" href="">
                    <figure class="logo mb-0"><img height="100" width="300"
                            src="{{asset('assets/images/PLA_logo1.png')}}" alt="image" class="img-fluid"></figure>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown {{ Route::current()->getName()=="home"?"active":"" }}">
                            <a class="nav-link" href="{{ route('home') }}" aria-expanded="false"> @lang('info.m1') </a>
                        </li>
                        <li class="nav-item {{ Route::current()->getName()=="about"?"active":"" }}">
                            <a class="nav-link" href="{{ route('about') }}">@lang('info.m2') </a>
                        </li>
                        <li class="nav-item {{ Route::current()->getName()=="expertise"?"active":"" }}">
                            <a class="nav-link" href="{{ route('expertise') }}">@lang('info.m3') </a>
                        </li>
                        <li class="nav-item {{ Route::current()->getName()=="team"?"active":"" }}">
                            <a class="nav-link" href="{{ route('team') }}">@lang('info.m4') </a>
                        </li>
                        <li class="nav-item {{ Route::current()->getName()=="presence"?"active":"" }}">
                            <a class="nav-link" href="{{ route('presence') }}">@lang('info.m6')</a>
                        </li>
                        <li class="nav-item {{ Route::current()->getName()=="publication"?"active":"" }}">
                            <a class="nav-link" href="{{ route('publication') }}">@lang('info.m5')</a>
                        </li>
                    </ul>
                    <div class="last_list">
                        <figure class="nav-phoneicon mb-0"><img class="img-fluid"
                                src="{{ asset('assets/images/nav-phoneicon.png') }}" alt="image"></figure>
                        <a class="text-decoration-none last_list_atag" href="tel:+243824233125">+243 82 423 3125</a>
                    </div>
                    <div class="dropdown drop-langue">
                        <button class="btn btn-langue ml-lg-3" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa-solid fa-globe"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a class="dropdown-item d-flex align-items-center {{App::currentLocale() ===$localeCode?"active":""}}"
                                hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">

                                    {{ $properties['native']}}
                                </a>
                            </li>
                            @endforeach
                            {{-- @foreach ($available_locales as $locale_name => $available_locale)
                            @if ($available_locale === $current_locale)
                            <li>
                                <a class="dropdown-item disabled d-flex align-items-center active" href="#">
                                    @switch($available_locale)
                                    @case('en')
                                    <span class="fi fi-us me-2 align-middle"></span>
                                    @break
                                    @case('ln')
                                    <span class="fi fi-cd me-2 align-middle"></span>
                                    @break
                                    @default
                                    <span class="fi fi-be me-2 align-middle"></span>

                                    @endswitch
                                    {{ $locale_name }}
                                </a>
                            </li>
                            @else
                            <li>
                                <a class="dropdown-item d-flex align-items-center"
                                    href="{{ route('change_language', ['locale' => $available_locale]) }}">
                                    @switch($available_locale)
                                    @case('en')
                                    <span class="fi fi-us me-2 align-middle"></span>
                                    @break

                                    @case('ln')
                                    <span class="fi fi-cd me-2 align-middle"></span>
                                    @break

                                    @default
                                    <span class="fi fi-be me-2 align-middle"></span>

                                    @endswitch

                                    {{ $locale_name }}
                                </a>
                            </li>
                            @endif
                            @endforeach --}}
                            {{-- <a class="dropdown-item active" href="#">Anglais</a>
                            <a class="dropdown-item" href="#">
                                Français
                            </a> --}}

                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    @include("parties.banner")
</div>
