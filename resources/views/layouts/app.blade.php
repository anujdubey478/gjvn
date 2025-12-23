<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gyan Jyoti Vidya Niketan - Nurturing Future Leaders')</title>
    <link rel="canonical" href="{{ url('/') }}">
    <link rel="alternate" href="{{ url('/') }}" hreflang="en-IN">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap"
        rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!-- Custom CSS -->
    <link href="{{ asset('template/css/style.css')}}" rel="stylesheet" />
    <!-- SEO Meta Tags -->
    <meta name="description" content="Gyan Jyoti Vidya Niketan is a leading school in Saket, IGNOU Road, offering quality education from Nursery to Class 8. Nurturing young minds with excellence in academics, activities, and values.">
    <meta name="keywords" content="Gyan Jyoti Vidya Niketan, school in Saket, IGNOU Road school, best school in Saket Delhi, nursery school Saket, primary school IGNOU Road, middle school Saket, CBSE pattern school, English medium school in Saket, top schools near IGNOU, Gyan Jyoti school Delhi, nursery to 8th school in Saket, affordable school IGNOU road, best education for kids Saket">
    <meta name="author" content="AKWebService.in">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="geo.region" content="IN-DL">
    <meta name="geo.placename" content="Saket, New Delhi">
    <meta name="geo.position" content="28.5190;77.2060">
    <meta name="ICBM" content="28.5190, 77.2060">
    
    <!-- Open Graph Meta -->
    <meta property="og:title" content="Gyan Jyoti Vidya Niketan - Best School in Saket (Nursery to 8th)">
    <meta property="og:description" content="Top English Medium School in Saket near IGNOU Road offering Nursery to Class 8 education with modern teaching and values-based learning.">
    <meta property="og:image" content="{{ asset('template/image/SchoolLibrary.webp') }}">
    <meta property="og:image:alt" content="Gyan Jyoti Vidya Niketan campus image">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Gyan Jyoti Vidya Niketan - School in Saket, IGNOU Road">
    <meta name="twitter:description" content="Nurturing Future Leaders from Nursery to Class 8 at Saket, IGNOU Road, New Delhi.">
    <meta name="twitter:image" content="{{ asset('template/image/SchoolLibrary.webp') }}">
    <meta name="twitter:image:alt" content="Gyan Jyoti Vidya Niketan campus image">
    <meta name="twitter:url" content="{{ url('/') }}">
    <meta name="theme-color" content="#0d6efd">
    <meta name="format-detection" content="telephone=yes,address=no,email=no">
    
    @php
        $organizationSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'School',
            'name' => 'Gyan Jyoti Vidya Niketan',
            'url' => url('/'),
            'logo' => asset('template/image/logo.png'),
            'image' => asset('template/image/SchoolLibrary.webp'),
            'description' => 'Top English Medium School in Saket near IGNOU Road offering Nursery to Class 8 education.',
            'email' => 'mailto:gyanjyotimail@rediffmail.com',
            'telephone' => '+91-9212747235',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'W-21, Anupam Garden, IGNOU Road, Saidulazab',
                'addressLocality' => 'New Delhi',
                'addressRegion' => 'DL',
                'postalCode' => '110068',
                'addressCountry' => 'IN',
            ],
            'sameAs' => [
                'https://www.facebook.com/',
                'https://www.instagram.com/',
            ],
        ];

        $websiteSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            'url' => url('/'),
            'potentialAction' => [
                '@type' => 'SearchAction',
                'target' => url('/') . '?s={search_term_string}',
                'query-input' => 'required name=search_term_string',
            ],
        ];
    @endphp
    <script type="application/ld+json">
        {!! json_encode($organizationSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT) !!}
    </script>
    <script type="application/ld+json">
        {!! json_encode($websiteSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT) !!}
    </script>
 @stack('styles')

</head>
   
<body>
    {{-- Header --}}
    @include('partials.header')

    {{-- Page Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    @stack('scripts')
</body>
</html>
