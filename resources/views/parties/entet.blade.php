<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{config('app.name')}} | {{isset($titre)?$titre:""}}</title>
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
    <!-- Latest compiled and minified CSS -->
    <link href="{{ asset('assets/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/js/bootstrap.min.js') }}">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- StyleSheet link CSS -->
    <link href="{{ asset('assets/css/style.css') }} " rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/responsive.css') }} " rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/owl.carousel.min.css') }} " rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }} " rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
</head>
<body>
<!-- Back to top button -->
<a id="button"></a>
