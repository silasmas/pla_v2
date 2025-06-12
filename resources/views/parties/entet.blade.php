<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
      {{-- Title et meta description dynamiques --}}
    <title>{{ config('app.name') }} | {{ isset($titre) ? $titre : '' }}</title>
    <!-- /SEO Ultimate -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/PlaLogo.ico') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/PlaLogo.ico') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/PlaLogo.ico') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/PlaLogo.ico') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/PlaLogo.ico') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/PlaLogo.ico') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/PlaLogo.ico') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/PlaLogo.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/PlaLogo.ico') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/images/PlaLogo.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/PlaLogo.ico') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/images/PlaLogo.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/PlaLogo.ico') }}">
    <link rel="manifest" href="{{ asset('assets/images/favicon/manifest.json') }}">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="@yield('meta_description', __('info.site.description'))">
    <meta name="keywords" content="@yield('meta_keywords', __('info.site.keywords'))">
    <meta name="author" content="@yield('meta_author', __('info.site.author'))">
    <meta name="robots" content="index, follow">
     <link rel="canonical" href="{{ Request::url() }}">
     <meta name="csrf-token" content="{{ csrf_token() }}">


    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('og_title', config('app.name'))" />
    <meta property="og:description" content="@yield('og_description', 'Description Open Graph par défaut')" />
    <meta property="og:image" content="@yield('og_image', asset('images/default-share.png'))" />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:type" content="@yield('og_type', 'website')" />
  {{-- Twitter Cards --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@votre_compte_twitter" />
    <meta name="twitter:title" content="@yield('twitter_title', config('app.name'))" />
    <meta name="twitter:description" content="@yield('twitter_description', 'Description Twitter par défaut')" />
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/default-twitter.png'))" />

    <!-- Latest compiled and minified CSS -->
    <link href="{{ asset('assets/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- StyleSheet link CSS -->
    <link href="{{ asset('assets/css/style.css') }} " rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/responsive.css') }} " rel="stylesheet" type="text/css">
    @yield('style')
    <link href="{{ asset('assets/css/owl.carousel.min.css') }} " rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }} " rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">




</head>

<body>
    <!-- Back to top button -->
    <a id="button"></a>
