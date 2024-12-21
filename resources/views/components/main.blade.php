<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="{{asset('asset/img/logo.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('asset/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">

    @php
        $seo = $seos->first();
    @endphp

    @if ($seo && $seo->title)
        <title>{{ $seo->title }}</title>
    @endif

    @if ($seo && $seo->description)
        <meta name="description" content="{{ $seo->description }}">
    @endif

    {{--    @if ($seo && $seo->canonical) --}}
    {{--        <link rel="canonical" href="{{ $seo->canonical }}"> --}}
    {{--    @endif --}}

    <!-- Open Graph data -->
    @if ($seo && $seo->og_title)
        <meta property="og:title" content="{{ $seo->og_title }}">
    @endif

    @if ($seo && $seo->og_description)
        <meta property="og:description" content="{{ $seo->og_description }}">
    @endif

    @if ($seo && $seo->og_type)
        <meta property="og:type" content="{{ $seo->og_type }}">
    @endif

    @if ($seo && $seo->og_url)
        <meta property="og:url" content="{{ $seo->og_url }}">
    @endif

    @if ($seo && $seo->og_image)
        <meta property="og:image" content="{{ $seo->og_image }}">
    @endif

    @if ($seo && $seo->og_site_name)
        <meta property="og:site_name" content="{{ $seo->og_site_name }}">
    @endif

    @if ($seo && $seo->og_locale)
        <meta property="og:locale" content="{{ $seo->og_locale }}">
    @endif

    <!-- Twitter data -->
    @if ($seo && $seo->og_title)
        <meta name="twitter:title" content="{{ $seo->og_title }}">
    @endif

    @if ($seo && $seo->og_description)
        <meta name="twitter:description" content="{{ $seo->og_description }}">
    @endif

    @if ($seo && $seo->og_image)
        <meta name="twitter:image" content="{{ $seo->og_image }}">
    @endif

</head>

<body>



    @include('components.header')

    @yield('content')

    @include('components.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
        });
    </script>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('asset/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('asset/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('asset/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('asset/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('asset/js/main.js') }}"></script>
</body>

</html>
