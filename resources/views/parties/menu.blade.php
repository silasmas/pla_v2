<div class="banner_outer {{ Route::current()->getName()!="home"?"sub_banner":"banner_outer" }}  position-relative">
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand" href="">
                    <figure class="logo mb-0"><img height="100" width="300" src="{{asset('assets/images/PLA_logo1.png')}}" alt="image"
                            class="img-fluid"></figure>
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
                        <li class="nav-item dropdown active">
                            <a class="nav-link" href="{{ route('home') }}"
                                aria-expanded="false"> @lang('info.m1') </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">@lang('info.m2') </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('expertise') }}">@lang('info.m3') </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('team') }}">@lang('info.m4') </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('presence') }}">@lang('info.m6')</a>
                        </li>
                    </ul>
                    <div class="last_list">
                        <figure class="nav-phoneicon mb-0"><img class="img-fluid"
                                src="./assets/images/nav-phoneicon.png" alt="image"></figure>
                        <a class="text-decoration-none last_list_atag" href="tel:+243824233125">+243 82 423 3125</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    @include("parties.banner")
</div>
