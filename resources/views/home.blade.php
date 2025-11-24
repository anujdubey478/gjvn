<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gyan Jyoti Vidya Niketan - Nurturing Future Leaders</title>
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


</head>
<style>
.faculty-section {
  padding: 70px 0;
  background: linear-gradient(135deg, #f8fafc, #eef2ff);
  overflow-x: hidden;
  position: relative;
  text-align: center;
}

.section-title {
  font-size: 2.7rem;
  font-weight: 800;
  color: #1e293b;
  margin-bottom: 10px;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.lead {
  color: #475569;
  font-size: 1.2rem;
}

.faculty-slider {
  margin-top: 60px;
  overflow: hidden;
  position: relative;
}

.faculty-track {
  display: flex;
  width: max-content;
  animation: slide 40s linear infinite;
}

.faculty-slider:hover .faculty-track {
  animation-play-state: paused;
}

@keyframes slide {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}

.faculty-card {
  background: #fff;
  border-radius: 20px;
  margin: 0 15px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: transform 0.4s ease, box-shadow 0.4s ease;
  width: 260px;
}

.faculty-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
}

.faculty-image-wrapper {
  position: relative;
  overflow: hidden;
}

.faculty-image {
  width: 100%;
  height: 280px;
  object-fit: cover;
  transition: transform 0.6s ease;
}

.faculty-card:hover .faculty-image {
  transform: scale(1.1);
}

.faculty-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(30, 41, 59, 0.6);
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 0;
  transition: opacity 0.4s ease;
}

.faculty-card:hover .faculty-overlay {
  opacity: 1;
}

.faculty-name-hover {
  color: #fff;
  font-size: 1.5rem;
  font-weight: 700;
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
}

.faculty-content {
  padding: 20px;
}

.faculty-name {
  font-size: 1.4rem;
  font-weight: 700;
  color: #1e293b;
}

.faculty-position,
.faculty-department {
  font-size: 1.05rem;
  color: #64748b;
}

/* Responsive */
@media (max-width: 768px) {
  .faculty-card {
    width: 200px;
  }
  .faculty-track {
    animation-duration: 60s; /* slower scroll on mobile */
  }
  .section-title {
    font-size: 2rem;
  }
  .lead {
    font-size: 1rem;
  }
}
/* tooper section */


/* 🌟 Section Styling */
.toppers-section {
  text-align: center;
  padding: 80px 0;
  background: linear-gradient(135deg, #f0f6ff, #e8f0ff);
  overflow-x: hidden;
  position: relative;
}

/* Title */
.section-title {
  font-size: 2rem;
  font-weight: 700;
  color: #003366;
  margin-bottom: 10px;
  text-transform: uppercase;
}

.lead {
  color: #333;
  font-size: 1.1rem;
  margin-bottom: 40px;
}

/* 🌈 Slider Styles */
.toppers-slider {
  overflow: hidden;
  width: 100%;
  position: relative;
}

.toppers-track {
  display: flex;
  gap: 25px;
  width: max-content;
  animation: scroll 40s linear infinite;
}

@keyframes scroll {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}

.toppers-slider:hover .toppers-track {
  animation-play-state: paused;
}

/* 🏅 Card */
.topper-card {
  flex: 0 0 270px;
  background: white;
  border-radius: 16px;
  box-shadow: 0 8px 25px rgba(0,0,0,0.1);
  padding: 25px 20px;
  transition: all 0.4s ease;
  border: 2px solid transparent;
}

.topper-card:hover {
  transform: translateY(-8px) scale(1.04);
  border-color: #4a90e2;
  box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.topper-card h4 {
  color: #004080;
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 1.2rem;
  border-bottom: 2px solid #cce0ff;
  display: inline-block;
  padding-bottom: 4px;
}

/* 🎖️ Rank Rows */
.rank-row {
  display: flex;
  justify-content: flex-start; /* Left align */
  align-items: center;
  font-weight: 600;
  margin: 6px 0;
  font-size: 1rem;
}

.rank-row span:first-child {
  width: 70px;      /* Rank width */
  text-align: left; /* Left align emoji/text */
  color: #003366;
}

.rank-row .name {
  width: auto;      /* Adjust to content */
  text-align: left;
  margin-left: 10px;
}

/* ✨ Glowing background */
.toppers-section::before {
  content: "";
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle at center, rgba(255,255,255,0.2), transparent 60%);
  animation: glow 10s linear infinite;
  z-index: 0;
}

@keyframes glow {
  0%, 100% { transform: rotate(0deg); }
  50% { transform: rotate(180deg); }
}

/* 📱 Responsive */
@media (max-width: 768px) {
  .topper-card {
    flex: 0 0 220px;
    padding: 20px 15px;
  }

  .rank-row .name {
    width: 120px;
  }

  .toppers-track {
    animation-duration: 60s;
  }

  .section-title {
    font-size: 1.5rem;
  }
}
/* new section */
<style>
  /* General */
  .nwhs-section-heading {
    letter-spacing: 1px;
  }

  /* News Section */
  .nwhs-news-ticker-wrapper {
    max-height: 480px;
    overflow-y: auto;
    scroll-behavior: smooth;
  }

  .nwhs-news-card {
    display: flex;
    align-items: center;
    gap: 15px;
    background: #fff;
    border-radius: 15px;
    padding: 12px;
    margin-bottom: 15px;
    text-decoration: none;
    color: #333;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  }

  .nwhs-news-card:hover {
    transform: translateY(-5px);
    background: #e8f8ef;
    box-shadow: 0 4px 15px rgba(0, 128, 0, 0.2);
  }

  .nwhs-news-card img {
    width: 90px;
    height: 90px;
    border-radius: 10px;
    object-fit: cover;
  }

  .nwhs-news-card-text h5 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 5px;
    color: #0d6efd;
  }

  .nwhs-news-card-text p {
    margin: 0;
    font-size: 1rem;
    color: #555;
  }

  /* Accordion Enhancements */
  .accordion-button {
    background-color: #f8fff9;
    transition: 0.3s ease;
  }

  .accordion-button:not(.collapsed) {
    color: #fff;
    background-color: #198754;
    box-shadow: none;
  }

  .accordion-body {
    background: #ffffff;
    border-top: 1px solid #eee;
  }

  /* Scrollbar Styling */
  .nwhs-news-ticker-wrapper::-webkit-scrollbar {
    width: 8px;
  }

  .nwhs-news-ticker-wrapper::-webkit-scrollbar-thumb {
    background: #198754;
    border-radius: 4px;
  }
</style>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <img src="{{ asset('template/image/logo.png') }}" class="img-fluid logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#principal">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#programs">Programs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#campus">Campus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nwhs-main-content">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faculty">Faculty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <!-- Full Screen Image Slider -->
    <section id="home" class="hero-slider owl-carousel owl-theme">
        <!-- Slide 1 -->
        <div class="hero-slide" style="background-image: url('{{ asset('template/image/01.webp') }} ');">
            `
        </div>

        <!-- Slide 2 -->
        <div class="hero-slide" style="background-image: url('{{ asset('template/image/02.webp') }}');">

        </div>

        <!-- Slide 3 -->
        <div class="hero-slide" style="background-image: url('{{ asset('template/image/03.webp') }} ');">

        </div>

        <!-- Slide 4 -->
        <div class="hero-slide" style="background-image: url('{{ asset('template/image/04.webp') }}');">

        </div>

        <!-- Slide 5 -->
        <div class="hero-slide" style="background-image: url('{{ asset('template/image/05.webp') }}');">

        </div>
    </section>




    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="stat-number" data-target="25">0</div>
                        <div class="stat-label">Years of Excellence</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="stat-number" data-target="1200">0</div>
                        <div class="stat-label">Students</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="stat-number" data-target="20">0</div>
                        <div class="stat-label">Dedicated Teachers</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                        <div class="stat-number" data-target="100">0</div>
                        <div class="stat-label">Graduation Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="section-padding">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 animate-on-scroll animated">
                    <h2 class="section-title">About Our School</h2>
                    <p class="section-subtitle">Excellence in Education, Excellence in Life</p>
                    <p class="mb-4">Gyan Jyoti Vidya Niketan has been a beacon of quality education for over three decades. We
                        believe in creating an environment where students can explore, learn, and grow to their fullest
                        potential.</p>

                    <a href="#contact" class="btn btn-primary">Learn More</a>
                </div>
                <div class="col-lg-6 mb-4 mb-lg-0 animate-on-scroll animated">
                    <img src="{{ asset('template/image/aboutus.webp') }}" alt="About School" class="img-fluid rounded-3 shadow" style="    height: 422px;
    width: 100%;">
                </div>
            </div>
        </div>
    </section>

<!-- Toper section -->
<section id="toppers" class="toppers-section">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <h2 class="section-title">🏆 HALFYEARLY EXAMINATION - SCHOOL TOPPERS 🏆</h2>
      <p class="lead">Celebrating the brilliant achievers who excelled in the Half-Yearly Examination</p>
    </div>

    <div class="toppers-slider">
      <div class="toppers-track" id="toppersTrack">
        @forelse($toppers as $topper)
          <div class="topper-card">
            <h4>Class - {{ $topper->class_name }}</h4>
            @if($topper->first_rank_name)
              <div class="rank-row"><span>🥇 1st:</span><span class="name">{{ $topper->first_rank_name }}</span></div>
            @endif
            @if($topper->second_rank_name)
              <div class="rank-row"><span>🥈 2nd:</span><span class="name">{{ $topper->second_rank_name }}</span></div>
            @endif
            @if($topper->third_rank_name)
              <div class="rank-row"><span>🥉 3rd:</span><span class="name">{{ $topper->third_rank_name }}</span></div>
            @endif
          </div>
        @empty
          <div class="topper-card">
            <h4>No Toppers Available</h4>
            <p class="text-muted">Check back later for updates.</p>
          </div>
        @endforelse
      </div>
    </div>
  </div>
</section>

<!-- 🔁 Auto Duplicate for Smooth Scroll -->
<script>
  const track = document.getElementById("toppersTrack");
  track.innerHTML += track.innerHTML;
</script>



<!-- News Section -->
  <!-- =================== NEWS & EVENTS SECTION =================== -->
        <section id="nwhs-main-content" class="news-section py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="nwhs-section-heading display-5 fw-bold text-success">
        Latest News & Events
      </h2>
      <p class="lead text-muted fs-5">
        Stay connected with the latest happenings at our school!
      </p>
    </div>

    <div class="row">
      <!-- Left Column: News Feed -->
      <div class="col-lg-7 mb-4 mb-lg-0">
        <h3 class="mb-3 text-success fw-semibold">
          <i class="fas fa-newspaper me-2"></i> Latest News
        </h3>

        <div class="nwhs-news-ticker-wrapper p-3 bg-light rounded-4 shadow-sm">
          <div class="nwhs-news-scroll-feed">
            @forelse($news as $item)
              <a href="#" class="nwhs-news-card">
                @if($item->image)
                  <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" />
                @else
                  <img src="https://picsum.photos/seed/{{ $item->id }}/250/200" alt="{{ $item->title }}" />
                @endif
                <div class="nwhs-news-card-text">
                  <h5>{{ $item->title }}</h5>
                  <p>{{ $item->published_date->format('F d, Y') }} — {{ Str::limit($item->description, 100) }}</p>
                </div>
              </a>
            @empty
              <div class="nwhs-news-card">
                <div class="nwhs-news-card-text">
                  <h5>No News Available</h5>
                  <p>Check back later for updates.</p>
                </div>
              </div>
            @endforelse
          </div>
        </div>
      </div>

      <!-- Right Column: Events Accordion -->
      <div class="col-lg-5">
        <h3 class="mb-3 text-success fw-semibold">
          <i class="fas fa-calendar-alt me-2"></i> Upcoming Events
        </h3>

        <div class="accordion nwhs-events-accordion" id="nwhs-events-accordion">
          @forelse($events as $index => $event)
            <div class="accordion-item border-0 mb-3 shadow-sm rounded-4 overflow-hidden">
              <h2 class="accordion-header">
                <button
                  class="accordion-button {{ $index === 0 ? '' : 'collapsed' }} fs-5 fw-semibold text-success"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#event-{{ $event->id }}"
                  aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                  aria-controls="event-{{ $event->id }}"
                >
                  {{ $event->title }}
                </button>
              </h2>
              <div
                id="event-{{ $event->id }}"
                class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                data-bs-parent="#nwhs-events-accordion"
              >
                <div class="accordion-body fs-6">
                  @if($event->for_classes)
                    <p><strong>For:</strong> {{ $event->for_classes }}</p>
                  @endif
                  @if($event->event_date)
                    <p><strong>Date:</strong> {{ $event->event_date->format('F d, Y') }}</p>
                  @endif
                  <p>{{ $event->description }}</p>
                </div>
              </div>
            </div>
          @empty
            <div class="alert alert-info">
              <p class="mb-0">No upcoming events at the moment. Check back later!</p>
            </div>
          @endforelse
        </div>
      </div>
    </div>
  </div>
</section>



    

    <section id="principal" class="section-padding principal-section">
        <div class="container">
            <div class="text-center mb-1 animate-on-scroll animated">
                <h2 class="section-title">Director's Message</h2>
                <p class="section-subtitle">Words of wisdom from our leader</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4 text-center mb-4 mb-lg-0 animate-on-scroll animated">
                    <img src="{{ asset('template/image/founder.webp') }}" alt="Principal" class="principal-img">
                    <h4 class="mt-3">Dr. Kailash Ahlawat</h4>
                    <p class="text-muted">Director</p>
                </div>
                <div class="col-lg-8 animate-on-scroll animated">
                    <div class="principal-card">
                        <p class="lead mb-4">Dear Students, Parents, and Well-wishers,</p>
                        <p class="mb-3">At Gyan Jyoti Vidya Niketan, we believe that education is not just about acquiring
                            knowledge, but about nurturing the whole person. Our mission is to create a learning
                            environment where every student can discover their unique talents and develop the skills
                            needed to thrive in an ever-changing world.</p>
                        <p class="mb-3">We are committed to fostering a culture of excellence, innovation, and
                            compassion. Our dedicated faculty works tirelessly to provide personalized attention and
                            create engaging learning experiences that inspire curiosity and critical thinking.</p>
                        <p class="mb-3">As we navigate the challenges and opportunities of the 21st century, we remain
                            steadfast in our commitment to preparing students not just for exams, but for life. We
                            invite you to join us on this journey of discovery and growth.</p>
                        <div class="text-end">
                            <p class="principal-signature">Dr. Kailash Ahlawat</p>
                            <p class="text-muted mb-0">Director, Gyan Jyoti Vidya Niketan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="programs-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Academic Programs</h2>
                <p class="lead">Comprehensive education from kindergarten through high school</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="program-card">
                        <div class="program-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <h4>Elementary School</h4>
                        <p>Nurturing young minds with a focus on foundational skills, creativity, and social development
                            in a safe and caring environment.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="program-card">
                        <div class="program-icon">
                            <i class="bi bi-book"></i>
                        </div>
                        <h4>Middle School</h4>
                        <p>Bridging the gap between elementary and high school with a curriculum that encourages
                            critical thinking and personal growth.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="program-card">
                <div class="program-icon">
                <i class="bi bi-people"></i>
                </div>
                <h4>Co-Curricular Activity</h4>
                <p>Encouraging holistic development through sports, arts, music, debates, and various club activities that
                nurture creativity, teamwork, and leadership skills.</p>
                </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="program-card">
                        <div class="program-icon">
                            <i class="bi bi-palette"></i>
                        </div>
                        <h4>Arts & Music</h4>
                        <p>Fostering creativity and self-expression through comprehensive visual arts, music, theater,
                            and performing arts programs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="program-card">
                        <div class="program-icon">
                            <i class="bi bi-trophy"></i>
                        </div>
                        <h4>Athletics</h4>
                        <p>Building character, teamwork, and physical fitness through a wide range of competitive and
                            recreational sports programs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="program-card">
                <div class="program-icon">
                <i class="bi bi-laptop"></i>
                </div>
                <h4>Computer Education</h4>
                <p>Empowering students with essential computer skills, coding knowledge, and digital literacy to prepare them
                for the technology-driven world.</p>
                </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Campus Section -->
    <section id="campus" class="campus-section">
        <div class="container">
            <div class="campus-showcase" data-aos="fade-up">
                <img src="{{ asset('template/image/modern-campus.webp') }}" alt="School Library" class="campus-image">
                <div class="campus-overlay">
                    <div class="campus-content">
                        <h2>Modern Campus Facilities</h2>
                        <p>Discover our state-of-the-art facilities designed to inspire learning and creativity in every
                            student.</p>
                        <a href="#contact" class="btn btn-primary mt-3">Schedule a Tour</a>
                    </div>
                </div>
            </div>

            <div class="facility-grid">
                <div class="facility-item" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('template/image/SchoolLibrary.webp') }}" class="img-fluid">
                    <h4>School Library</h4>
                    <p>15,000+ books and digital learning resources</p>
                </div>
                <div class="facility-item" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('template/image/ComputerLabs.webp') }}" class="img-fluid">
                    <h4>Computer Labs</h4>
                    <p>Modern technology-equipped learning spaces</p>
                </div>
                <div class="facility-item" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('template/image/ScienceLabs.jpeg') }}" class="img-fluid">
                    <h4>Science Labs</h4>
                    <p>Hands-on experimental learning facilities</p>
                </div>
                <div class="facility-item" data-aos="fade-up" data-aos-delay="400">
                    <img src="{{ asset('template/image/SportsComplex.webp') }}" class="img-fluid">
                    <h4>Sports Complex</h4>
                    <p>Indoor and outdoor sports facilities</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->

 <section class="portfolio section">
   <div class="container">
    <div class="section-header aos-init aos-animate" data-aos="fade-up">
                <h2 class="section-title">Gallery</h2>
                <p class="lead">Comprehensive education from kindergarten through high school</p>
            </div>
      <div class="filters">
         <ul>
            <li class="active" data-filter="*">All</li>
            <li data-filter=".Art">Art</li>
            <li data-filter=".Pradarsani">Pradarsani</li>
            <li data-filter=".Activity">Activity</li>

         </ul>
      </div>
      <div class="filters-content">
         <div class="row grid gallery">
             @forelse($galleries as $gallery)
               <div class="col-sm-4 all {{ $gallery->category }}">
                 <div class="item">
                    <a href="{{ asset('storage/' . $gallery->image) }}">
                       <figure><img class="img-fluid img-thumbnail" src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title ?? 'Gallery Image' }}"></figure>
                    </a>
                 </div>
               </div>
             @empty
               <div class="col-12 text-center py-5">
                 <p class="text-muted">No gallery images available at the moment.</p>
               </div>
             @endforelse
         </div>
      </div>
   </div>
</section>


    

<!-- ===================== Faculty Section ===================== -->
<section id="faculty" class="faculty-section">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <h2 class="section-title">Our Dedicated Teachers</h2>
      <p class="lead">Meet the passionate educators shaping our students' futures</p>
    </div>

    <div class="faculty-slider">
      <div class="faculty-track" id="facultyTrack">
        <!-- Faculty Card Example -->
        <div class="faculty-card">
          <div class="faculty-image-wrapper">
            <img src="{{ asset('template/image/t1.jpg') }}" alt="Mr. Navdeep Ahlawat" class="faculty-image">
            <div class="faculty-overlay">
              <h4 class="faculty-name-hover">Mr. Navdeep Ahlawat</h4>
            </div>
          </div>
          <div class="faculty-content">
            <h4 class="faculty-name">Mr. Navdeep Ahlawat</h4>
            <p class="faculty-position">Admin</p>
            <p class="faculty-department">25 years of educational leadership</p>
          </div>
        </div>

        <div class="faculty-card">
          <div class="faculty-image-wrapper">
            <img src="{{ asset('template/image/t10.jpeg') }}" alt="Mrs. Sunita Ahlawat" class="faculty-image">
            <div class="faculty-overlay">
              <h4 class="faculty-name-hover">Mrs. Sunita Ahlawat</h4>
            </div>
          </div>
          <div class="faculty-content">
            <h4 class="faculty-name">Mrs. Sunita Ahlawat</h4>
            <p class="faculty-department">Principal</p>
          </div>
        </div>

        <div class="faculty-card">
          <div class="faculty-image-wrapper">
            <img src="{{ asset('template/image/t2.jpeg') }}" alt="Ms. Pallavi" class="faculty-image">
            <div class="faculty-overlay">
              <h4 class="faculty-name-hover">Ms. Pallavi</h4>
            </div>
          </div>
          <div class="faculty-content">
            <h4 class="faculty-name">Ms. Pallavi</h4>
            <p class="faculty-department">M.A and B.Ed</p>
          </div>
        </div>

        <div class="faculty-card">
          <div class="faculty-image-wrapper">
            <img src="{{ asset('template/image/t3.jpeg') }}" alt="Mrs. Kalpana" class="faculty-image">
            <div class="faculty-overlay">
              <h4 class="faculty-name-hover">Mrs. Kalpana</h4>
            </div>
          </div>
          <div class="faculty-content">
            <h4 class="faculty-name">Mrs. Kalpana</h4>
            <p class="faculty-department">B.Ed and NTT</p>
          </div>
        </div>

        <div class="faculty-card">
          <div class="faculty-image-wrapper">
            <img src="{{ asset('template/image/t4.jpeg') }}" alt="Ms. Supriya" class="faculty-image">
            <div class="faculty-overlay">
              <h4 class="faculty-name-hover">Ms. Supriya</h4>
            </div>
          </div>
          <div class="faculty-content">
            <h4 class="faculty-name">Ms. Supriya</h4>
            <p class="faculty-department">M.Com and B.Ed</p>
          </div>
        </div>

        <div class="faculty-card">
          <div class="faculty-image-wrapper">
            <img src="{{ asset('template/image/t5.jpeg') }}" alt="Mrs. Pratibha" class="faculty-image">
            <div class="faculty-overlay">
              <h4 class="faculty-name-hover">Mrs. Pratibha</h4>
            </div>
          </div>
          <div class="faculty-content">
            <h4 class="faculty-name">Mrs. Pratibha</h4>
            <p class="faculty-department">M.A. in English and B.Ed</p>
          </div>
        </div>

        <div class="faculty-card">
          <div class="faculty-image-wrapper">
            <img src="{{ asset('template/image/t6.jpeg') }}" alt="Mrs. Nisha" class="faculty-image">
            <div class="faculty-overlay">
              <h4 class="faculty-name-hover">Mrs. Nisha</h4>
            </div>
          </div>
          <div class="faculty-content">
            <h4 class="faculty-name">Mrs. Nisha</h4>
            <p class="faculty-department">B.A. Hons in Geography and B.Ed</p>
          </div>
        </div>

        <div class="faculty-card">
          <div class="faculty-image-wrapper">
            <img src="{{ asset('template/image/t7.jpeg') }}" alt="Mrs. Pooja" class="faculty-image">
            <div class="faculty-overlay">
              <h4 class="faculty-name-hover">Mrs. Pooja</h4>
            </div>
          </div>
          <div class="faculty-content">
            <h4 class="faculty-name">Mrs. Pooja</h4>
            <p class="faculty-department">M.A and NTT</p>
          </div>
        </div>

        <div class="faculty-card">
          <div class="faculty-image-wrapper">
            <img src="{{ asset('template/image/t8.jpeg') }}" alt="Ms. Roshni" class="faculty-image">
            <div class="faculty-overlay">
              <h4 class="faculty-name-hover">Ms. Roshni</h4>
            </div>
          </div>
          <div class="faculty-content">
            <h4 class="faculty-name">Ms. Roshni</h4>
            <p class="faculty-department">Graduation and NTT</p>
          </div>
        </div>

        <div class="faculty-card">
          <div class="faculty-image-wrapper">
            <img src="{{ asset('template/image/t9.jpeg') }}" alt="Mrs. Meghana" class="faculty-image">
            <div class="faculty-overlay">
              <h4 class="faculty-name-hover">Mrs. Meghana</h4>
            </div>
          </div>
          <div class="faculty-content">
            <h4 class="faculty-name">Mrs. Meghana</h4>
            <p class="faculty-department">M.A in English and B.Ed T.G.T</p>
          </div>
        </div>
        
        
        
         <div class="faculty-card">
          <div class="faculty-image-wrapper">
            <img src="{{ asset('template/image/t11.jpeg') }}" alt="Mrs. Anita" class="faculty-image">
            <div class="faculty-overlay">
              <h4 class="faculty-name-hover">Mrs. Anita</h4>
            </div>
          </div>
          <div class="faculty-content">
            <h4 class="faculty-name">Mrs. Anita</h4>
            <p class="faculty-department">M.A in Hindi and B.Ed T.G.T</p>
          </div>
        </div>
        
         <div class="faculty-card">
          <div class="faculty-image-wrapper">
            <img src="{{ asset('template/image/t12.jpeg') }}" alt="Ms. Kiran" class="faculty-image">
            <div class="faculty-overlay">
              <h4 class="faculty-name-hover">Mrs. Kiran</h4>
            </div>
          </div>
          <div class="faculty-content">
            <h4 class="faculty-name">Mrs. Kiran</h4>
            <p class="faculty-department">M.A in Hindi and T.G.T</p>
          </div>
        </div>
        
         <div class="faculty-card">
          <div class="faculty-image-wrapper">
            <img src="{{ asset('template/image/t13.jpeg') }}" alt="Ms. Priyanka Yadav" class="faculty-image">
            <div class="faculty-overlay">
              <h4 class="faculty-name-hover">Ms. Priyanka Yadav</h4>
            </div>
          </div>
          <div class="faculty-content">
            <h4 class="faculty-name">Ms. Priyanka Yadav</h4>
            <p class="faculty-department">M.A and NTT</p>
          </div>
        </div>
        
        <div class="faculty-card">
          <div class="faculty-image-wrapper">
            <img src="{{ asset('template/image/t14.jpeg') }}" alt="Mrs. Vineeta" class="faculty-image">
            <div class="faculty-overlay">
              <h4 class="faculty-name-hover">Mrs. Vineeta</h4>
            </div>
          </div>
          <div class="faculty-content">
            <h4 class="faculty-name">Mrs. Vineeta</h4>
            <p class="faculty-department"> M.Sc and B.ed</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ===================== JS: Auto duplicate for seamless scroll ===================== -->
<script>
  const facultyTrack = document.getElementById("facultyTrack");
  facultyTrack.innerHTML += facultyTrack.innerHTML; // duplicate for smooth infinite scroll
</script>



    <!-- CTA Section -->
   <section id="contact" class="section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll animated">
                <h2 class="section-title">Get In Touch</h2>
                <p class="section-subtitle">We'd love to hear from you</p>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0 animate-on-scroll animated">
                    <div class="contact-form">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{ old('name') }}" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email" value="{{ old('email') }}" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject') }}" required>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" rows="5" placeholder="Your Message" required>{{ old('message') }}</textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 animate-on-scroll animated">
                    <div class="ps-lg-5">
                        <h4 class="mb-4">Contact Information</h4>
                        <div class="d-flex align-items-start mb-4">
                            <i class="bi bi-geo-alt-fill text-primary fs-4 me-3"></i>
                            <div>
                                <h6 class="mb-1">Address</h6>
                                <p class="mb-0 text-muted"><b>GYAN JYOTI VIDYA NIKETAN W-21,</b> Anupam Garden, Ignou Road, Saidulazab, New Delhi -110068</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-4">
                            <i class="bi bi-telephone-fill text-primary fs-4 me-3"></i>
                            <div>
                                <h6 class="mb-1">Phone</h6>
                                <p class="mb-0 text-muted">+91 9212747235</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-4">
                            <i class="bi bi-envelope-fill text-primary fs-4 me-3"></i>
                            <div>
                                <h6 class="mb-1">Email</h6>
                                <p class="mb-0 text-muted">gyanjyotimail@rediffmail.com</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <i class="bi bi-clock-fill text-primary fs-4 me-3"></i>
                            <div>
                                <h6 class="mb-1">Office Hours</h6>
                                <p class="mb-0 text-muted">Monday - Friday: 8:00 AM - 4:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.820376910929!2d77.20434567536543!3d28.515051489406098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce1e749e46ab1%3A0xcfed5f9d018afe5a!2sGyan%20Jyoti%20Vidya%20Niketan!5e0!3m2!1sen!2sin!4v1753358831647!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-widget">
                        <h4>Gyan Jyoti Vidya Niketan</h4>
                        <p>Providing quality education and nurturing future leaders since 1999.</p>
                        <div class="social-icons">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <div class="footer-widget">
                        <h4>Quick Links</h4>
                        <ul class="footer-links">
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#programs">Programs</a></li>
                            <li><a href="#campus">Campus</a></li>
                            <li><a href="#faculty">Faculty</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <div class="footer-widget">
                        <h4>Resources</h4>
                        <ul class="footer-links">
                            <li><a href="#">School Calendar</a></li>
                            <li><a href="#">Parent Portal</a></li>
                            <li><a href="#">Library</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Alumni</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-widget">
                        <h4>Contact Us</h4>
                        <ul class="footer-links">
                            <li><i class="bi bi-geo-alt me-2"></i> <b>GYAN JYOTI VIDYA NIKETAN</b>
W-21, Anupam Garden, Ignou Road, Saidulazab, New Delhi -110068</li>
                            <li><i class="bi bi-telephone me-2"></i> +91 9212747235</li>
                            <li><i class="bi bi-envelope me-2"></i> gyanjyotimail@rediffmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
            <p>
            &copy; 2024 Gyan Jyoti Vidya Niketan. All rights reserved. |
            Developed by <a href="https://akwebservice.in" target="_blank" style="color: #fff; text-decoration: underline;">AK Web Service</a>
            </p>
            </div>

        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

        <!-- Magnific Popup JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Initialize Full Screen Hero Slider
        // Initialize Full Screen Hero Slider
        $('.hero-slider').owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            navText: ['<i class="bi bi-chevron-left"></i>', '<i class="bi bi-chevron-right"></i>'],
            responsive: {
                0: {
                    nav: false
                },
                768: {
                    nav: true
                }
            }
        });

        // Initialize Magnific Popup for Gallery
        $('.image-popup').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: false,
            fixedContentPos: true,
            mainClass: 'mfp-with-zoom',
            zoom: {
                enabled: true,
                duration: 300,
                easing: 'ease-in-out',
                opener: function(openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            },
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1],
                tCounter: '%curr% of %total%'
            },
            image: {
                titleSrc: function(item) {
                    return item.el.attr('title');
                }
            },
            callbacks: {
                open: function() {
                    $('body').css('overflow', 'hidden');
                },
                close: function() {
                    $('body').css('overflow', 'auto');
                }
            }
        });
        





        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Active navigation link on scroll
        window.addEventListener('scroll', () => {
            let current = '';
            const sections = document.querySelectorAll('section');

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });

            document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').slice(1) === current) {
                    link.classList.add('active');
                }
            });
        });

        // Counter animation for stats
        const counters = document.querySelectorAll('.stat-number');
        const speed = 200;

        const countUp = (counter) => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const increment = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(() => countUp(counter), 10);
            } else {
                counter.innerText = target;
                // Add appropriate symbols
                if (target === 25 || target === 1200 || target === 20) {
                    counter.innerText += '+';
                } else if (target === 100) {
                    counter.innerText += '%';
                }
            }
        };

        // Trigger counter animation when stats section is in view
        const statsSection = document.querySelector('.stats-section');
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    counters.forEach(counter => {
                        countUp(counter);
                    });
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        statsObserver.observe(statsSection);




        // filter gallery 
$('.filters ul li').click(function(){
    $('.filters ul li').removeClass('active');
    $(this).addClass('active');
    
    var data = $(this).attr('data-filter');
    $grid.isotope({
      filter: data
    })
  });
  
  var $grid = $(".grid").isotope({
    itemSelector: ".all",
    percentPosition: true,
    masonry: {
      columnWidth: ".all"
    }
  })

//   popup 
$(document).ready(function() {
	$(".gallery").magnificPopup({
		delegate: "a",
		type: "image",
		tLoading: "Loading image #%curr%...",
		mainClass: "mfp-img-mobile",
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
		}
	});
});
    </script>
</body>

</html>