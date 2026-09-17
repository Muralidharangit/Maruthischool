<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Templatemanja" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Educone Is Online Courses HTML5 Template.">
    <meta name="keywords"
        content="academy, course, education, elearning, learning, education html template, university template, college template, school template, online education template, tution center template">

    <title>Maruthi Senior Secondary School Puducherry | CBSE Affiliated | Pre-KG to Class 12</title>
    @include('user.layouts.links')
</head>

<body class="body-fullpage">

   {{-- loader AND SCROLL starts --}}
      @include('user.layouts.loader')
  {{-- loader AND SCROLL ends --}}




  {{-- =============================== --}}
    <!-- START HEADER -->
        @include('user.layouts.header')
    <!-- END HEADER -->
  {{-- =============================== --}}

  <!-- ================== Banner section start =================== -->
  <section class="p-0 z-2 overflow-hidden position-relative" id="hero-section">
    <div class="swiper banner-slider">
      <div class="swiper-wrapper">

        <!-- Slide 1: Welcome & Overview -->
        <div class="swiper-slide">
          <div class="banner-fullbg-slide">
            <div class="banner-bg-img" style="background-image: url('{{ asset('user/assets/images/thumbs/banner-campus.png') }}');"></div>
            <div class="banner-overlay"></div>
            <div class="container max-w-1360-px position-relative banner-content-container">
              <div class="banner-content-wrap">
                <div class="banner-badge-pill" data-aos="fade-down" data-aos-duration="700">
                  <span class="banner-badge-icon-circle"><i class="ph-fill ph-graduation-cap"></i></span>
                  <span class="banner-badge-text">CBSE Affiliated &middot; Aff No. 2930027</span>
                </div>
                <h1 class="banner-hero-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
                  Welcome to <span class="banner-title-highlight">Maruthi Senior Secondary School</span>
                </h1>
                <p class="banner-hero-desc" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                  A premier educational institution in Puducherry committed to nurturing young minds through academic excellence, character, discipline, creativity, and holistic development.
                </p>
                <div class="d-flex align-items-center justify-content-start gap-3 flex-wrap" data-aos="fade-up" data-aos-duration="800" data-aos-delay="540">
                  <a href="{{ route('contact') }}" class="banner-custom-pill-btn">
                    <span class="btn-icon-circle"><i class="ph ph-caret-right"></i></span>
                    <span class="btn-text">Apply Now</span>
                  </a>
                  <a href="{{ route('about') }}" class="banner-custom-pill-btn banner-custom-pill-btn-outline">
                    <span class="btn-icon-circle"><i class="ph ph-caret-right"></i></span>
                    <span class="btn-text">About Us</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2: Educational Philosophy "Wisdom Wins" -->
        <div class="swiper-slide">
          <div class="banner-fullbg-slide">
            <div class="banner-bg-img" style="background-image: url('{{ asset('user/assets/images/thumbs/banner-sports.png') }}');"></div>
            <div class="banner-overlay banner-overlay-gold"></div>
            <div class="container max-w-1360-px position-relative banner-content-container">
              <div class="banner-content-wrap">
                <div class="banner-badge-pill" data-aos="fade-down" data-aos-duration="700">
                  <span class="banner-badge-icon-circle"><i class="ph-fill ph-lightbulb"></i></span>
                  <span class="banner-badge-text">Educational Philosophy</span>
                </div>
                <h1 class="banner-hero-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
                  Guided by Our Motto <span class="banner-title-highlight">“Wisdom Wins”</span>
                </h1>
                <p class="banner-hero-desc" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                  True education develops the wisdom to think, the courage to question, the discipline to act, and the compassion to contribute meaningfully to society.
                </p>
                <div class="d-flex align-items-center justify-content-start gap-3 flex-wrap" data-aos="fade-up" data-aos-duration="800" data-aos-delay="540">
                  <a href="{{ route('contact') }}" class="banner-custom-pill-btn">
                    <span class="btn-icon-circle"><i class="ph ph-caret-right"></i></span>
                    <span class="btn-text">Apply Now</span>
                  </a>
                  <a href="{{ route('about') }}" class="banner-custom-pill-btn banner-custom-pill-btn-outline">
                    <span class="btn-icon-circle"><i class="ph ph-caret-right"></i></span>
                    <span class="btn-text">Discover More</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3: 25 Years Silver Jubilee -->
        <div class="swiper-slide">
          <div class="banner-fullbg-slide">
            <div class="banner-bg-img" style="background-image: url('{{ asset('user/assets/images/thumbs/banner-classroom.png') }}');"></div>
            <div class="banner-overlay banner-overlay-teal"></div>
            <div class="container max-w-1360-px position-relative banner-content-container">
              <div class="banner-content-wrap">
                <div class="banner-badge-pill" data-aos="fade-down" data-aos-duration="700">
                  <span class="banner-badge-icon-circle"><i class="ph-fill ph-medal"></i></span>
                  <span class="banner-badge-text">Silver Jubilee &middot; 25+ Years Legacy</span>
                </div>
                <h1 class="banner-hero-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
                  25 Years of <span class="banner-title-highlight">Educational Excellence</span>
                </h1>
                <p class="banner-hero-desc" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                  Shaping responsible citizens and lifelong learners through core values: Discipline, Knowledge, Integrity, Responsibility, Respect, and Leadership.
                </p>
                <div class="d-flex align-items-center justify-content-start gap-3 flex-wrap" data-aos="fade-up" data-aos-duration="800" data-aos-delay="540">
                  <a href="{{ route('contact') }}" class="banner-custom-pill-btn">
                    <span class="btn-icon-circle"><i class="ph ph-caret-right"></i></span>
                    <span class="btn-text">Apply Now</span>
                  </a>
                  <a href="{{ route('about') }}" class="banner-custom-pill-btn banner-custom-pill-btn-outline">
                    <span class="btn-icon-circle"><i class="ph ph-caret-right"></i></span>
                    <span class="btn-text">Our Journey</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Pagination -->
      <div class="banner-pagination swiper-pagination"></div>

      <!-- Navigation -->
      <div class="swiper-button-prev banner-button-prev"></div>
      <div class="swiper-button-next banner-button-next"></div>
    </div>
  </section>
  <!-- ================== Banner section end =================== -->

  <!-- ================== Separated Feature Cards =================== -->
  <section class="py-80 bg-white bg-dot-grid">
    <div class="container">
      <div class="row g-4 justify-content-center features-overlap-row">
        <!-- Card 1: Academic Excellence -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
          <div class="feature-overlap-card">
            <div>
              <div class="feature-icon-circle">
                <i class="ph-fill ph-certificate"></i>
              </div>
              <h4 class="h5 fw-bold mb-3">Academic Excellence</h4>
              <p class="mb-0">
                Following the CBSE curriculum with concept-based learning, strong foundations, continuous assessment, and individual academic mentoring.
              </p>
            </div>
            <div>
              <a href="{{ route('curriculum') }}" class="feature-card-btn">
                Explore Curriculum <i class="ph-bold ph-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 2: Beyond The Classroom -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          <div class="feature-overlap-card">
            <div>
              <div class="feature-icon-circle">
                <i class="ph-fill ph-trophy"></i>
              </div>
              <h4 class="h5 fw-bold mb-3">Beyond The Classroom</h4>
              <p class="mb-0">
                Learning beyond textbooks through Silambam, Karate, Taekwondo, Classical Dance, Yoga, Chess, Sports, Athletics, and student clubs.
              </p>
            </div>
            <div>
              <a href="{{ route('gallery') }}" class="feature-card-btn">
                View Activities <i class="ph-bold ph-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 3: Holistic Development -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
          <div class="feature-overlap-card">
            <div>
              <div class="feature-icon-circle">
                <i class="ph-fill ph-heartbeat"></i>
              </div>
              <h4 class="h5 fw-bold mb-3">Holistic Development</h4>
              <p class="mb-0">
                Mind. Body. Character. Fostering Intellectual, Physical, Emotional, Social, and Moral growth to build capable and compassionate leaders.
              </p>
            </div>
            <div>
              <a href="{{ route('about') }}" class="feature-card-btn">
                Our Philosophy <i class="ph-bold ph-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================== Separated Feature Cards End =================== -->


  <!-- =================== brand section start =================== -->
  <!-- ============================== Redesigned About Section (Mastery style) ============================ -->
  <section class="about-section-styled bg-dot-grid">
    <div class="container">
      <div class="row align-items-center gy-5">
        <!-- Left: Text & Features -->
        <div class="col-lg-6">
          <div class="pe-lg-4">
            <div class="tw-py-1 tw-ps-105 tw-pe-4 bg-main-50 rounded-pill d-inline-flex align-items-center tw-gap-3 mb-4"
              data-aos="fade-up" data-aos-duration="800">
              <span class="tw-w-6 tw-h-6 border-main-100 border bg-white rounded-circle text-main-600 d-flex align-items-center justify-content-center">
                <i class="ph-fill ph-medal"></i>
              </span>
              <span class="fw-bold text-main-600" style="font-size: 0.85rem; letter-spacing: 0.05em; text-transform: uppercase;">
                25 Years of Educational Excellence
              </span>
            </div>
            
            <h3 class="fw-semibold text-neutral-950 mb-4 display-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
              Nurturing Young Minds with Character, Wisdom &amp; Excellence
            </h3>
            
            <p class="text-neutral-400 mb-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" style="font-size: 1.05rem; line-height: 1.7;">
              Welcome to <strong>Maruthi Senior Secondary School</strong>, a vibrant learning community where every child is encouraged to discover their potential, develop confidence, and pursue excellence under our guiding philosophy: <em>“Wisdom Wins.”</em>
            </p>

            <div class="row g-4 mb-5" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
              <!-- Feature 1 -->
              <div class="col-sm-6 d-flex align-items-start gap-3">
                <div class="class-stage-icon m-0 flex-shrink-0" style="width: 48px; height: 48px; font-size: 20px;">
                  <i class="ph-fill ph-certificate"></i>
                </div>
                <div>
                  <h5 class="fw-bold text-neutral-900 mb-1" style="font-size: 1.05rem;">CBSE Pedagogy</h5>
                  <p class="text-muted mb-0" style="font-size: 0.88rem;">Concept-based learning, problem-solving &amp; analytical inquiry.</p>
                </div>
              </div>

              <!-- Feature 2 -->
              <div class="col-sm-6 d-flex align-items-start gap-3">
                <div class="class-stage-icon m-0 flex-shrink-0" style="width: 48px; height: 48px; font-size: 20px; background-color: var(--brand-pale); color: var(--brand);">
                  <i class="ph-fill ph-flask"></i>
                </div>
                <div>
                  <h5 class="fw-bold text-neutral-900 mb-1" style="font-size: 1.05rem;">Science &amp; Tech Labs</h5>
                  <p class="text-muted mb-0" style="font-size: 0.88rem;">Advanced labs for Physics, Chemistry, Biology &amp; Digital computing.</p>
                </div>
              </div>

              <!-- Feature 3 -->
              <div class="col-sm-6 d-flex align-items-start gap-3">
                <div class="class-stage-icon m-0 flex-shrink-0" style="width: 48px; height: 48px; font-size: 20px;">
                  <i class="ph-fill ph-books"></i>
                </div>
                <div>
                  <h5 class="fw-bold text-neutral-900 mb-1" style="font-size: 1.05rem;">5,000+ Books Library</h5>
                  <p class="text-muted mb-0" style="font-size: 0.88rem;">Gateway to knowledge building lifelong reading &amp; research habits.</p>
                </div>
              </div>

              <!-- Feature 4 -->
              <div class="col-sm-6 d-flex align-items-start gap-3">
                <div class="class-stage-icon m-0 flex-shrink-0" style="width: 48px; height: 48px; font-size: 20px;">
                  <i class="ph-fill ph-globe-hemisphere-west"></i>
                </div>
                <div>
                  <h5 class="fw-bold text-neutral-900 mb-1" style="font-size: 1.05rem;">International Exposure</h5>
                  <p class="text-muted mb-0" style="font-size: 0.88rem;">Cultural exchange association with Institution Sainte Marie, France.</p>
                </div>
              </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
              <a href="{{ route('about') }}" class="btn btn-main px-4 py-3 rounded-pill">
                More About Us <i class="ph-bold ph-arrow-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Right: Image & Badge -->
        <div class="col-lg-6" data-aos="zoom-in" data-aos-duration="1200">
          <div class="about-image-wrap ps-lg-4 text-center">
            <img src="{{ asset('user/assets/images/thumbs/school-classroom.jpg') }}" 
                 alt="Maruthi School Campus classroom" 
                 class="img-fluid about-main-img">
            
            <div class="about-badge-floating d-none d-sm-block text-start">
              <div class="d-flex align-items-center gap-3">
                <div class="feature-icon-circle m-0" style="width: 50px; height: 50px; background-color: var(--brand-pale); color: var(--brand); font-size: 22px;">
                  <i class="ph-fill ph-star"></i>
                </div>
                <div>
                  <h4 class="fw-bold text-neutral-950 mb-0 h5">25+ Years</h4>
                  <span class="text-muted text-uppercase fw-semibold" style="font-size: 0.72rem; letter-spacing: 0.05em;">Silver Jubilee of Excellence</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============================== about section end ============================ -->
  <!-- =================== brand section end =================== -->

  <!-- ============================== stats section start ============================ -->
  <section class="py-80 bg-white bg-dot-grid">
    <div class="container">

      <!-- Section Divider Ribbon -->
      <div class="section-divider-ribbon mb-5">
        <div class="divider-line"></div>
        <div class="divider-icon"><i class="ph-fill ph-star-four"></i></div>
        <span class="fw-bold text-neutral-500" style="font-size:0.78rem; letter-spacing:0.1em; text-transform:uppercase;">Our Numbers Speak</span>
        <div class="divider-icon"><i class="ph-fill ph-star-four"></i></div>
        <div class="divider-line right"></div>
      </div>

      <div class="row g-4">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 d-flex" data-aos="fade-up" data-aos-duration="600">
          <div class="stat-card w-100">
            <div class="stat-card-icon">
              <i class="ph-fill ph-trophy"></i>
            </div>
            <div class="stat-card-body">
              <h2 class="counter">25+</h2>
              <p>Years of Educational Excellence</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 d-flex" data-aos="fade-up" data-aos-duration="800">
          <div class="stat-card w-100">
            <div class="stat-card-icon">
              <i class="ph-fill ph-users-four"></i>
            </div>
            <div class="stat-card-body">
              <h2 class="counter">20K+</h2>
              <p>Proud Alumni Worldwide</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 d-flex" data-aos="fade-up" data-aos-duration="1000">
          <div class="stat-card w-100">
            <div class="stat-card-icon">
              <i class="ph-fill ph-books"></i>
            </div>
            <div class="stat-card-body">
              <h2 class="counter">5,000+</h2>
              <p>Library Resources &amp; Books</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 d-flex" data-aos="fade-up" data-aos-duration="1200">
          <div class="stat-card w-100">
            <div class="stat-card-icon">
              <i class="ph-fill ph-certificate"></i>
            </div>
            <div class="stat-card-body">
              <h2>Pre-KG–12</h2>
              <p>CBSE Affiliated Comprehensive Education</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============================== stats section end ============================ -->

  <!-- ====================== features section start ======================= -->
  <section class="py-100 bg-light position-relative bg-dot-grid">
    <div class="container">
      <div class="text-center tw-mb-15">
        <div class="tw-py-1 tw-ps-105 tw-pe-4 bg-white rounded-pill d-inline-flex align-items-center tw-gap-3 tw-mb-4"
          data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
          <span
            class="tw-w-6 tw-h-6 border-main-100 border bg-white rounded-circle text-main-600 d-flex align-items-center justify-content-center tw-text-305">
            <i class="ph-fill ph-star-four"></i>
          </span>
          <span class="fw-bold text-main-600" style="font-size: 0.85rem; letter-spacing: 0.05em; text-transform: uppercase;">
            Our Programs &amp; Facilities
          </span>
        </div>
        <h3 class="fw-semibold text-neutral-950 tw-mb-6" data-aos="fade-up" data-aos-duration="800"
          data-aos-delay="200">
          Academic Programs &amp; Facilities
        </h3>
        <p class="fw-normal tw-text-4 text-neutral-400" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
          State-of-the-art facilities and comprehensive learning programs designed to<br> nurture academic excellence and
          holistic development in every student.
        </p>
      </div>

      <div class="swiper popular-category-slider mt-4">
        <div class="swiper-wrapper">
          <!-- Slide 1: Science Labs -->
          <div class="swiper-slide">
            <div class="program-slider-card card-gray" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
              <div class="program-card-bg-img" style="background-image: url('{{ asset('user/assets/images/thumbs/school-science-lab.png') }}');"></div>
              <div class="program-card-overlay"></div>
              <div class="program-card-content">
                <div>
                  <div class="program-card-icon">
                    <i class="ph-fill ph-flask"></i>
                  </div>
                  <h4 class="program-card-title">Science Laboratories</h4>
                  <p class="program-card-desc">
                    Well-equipped Physics, Chemistry, and Biology laboratories enabling practical, experiential, and inquiry-based scientific learning.
                  </p>
                </div>
                <div>
                  <a href="{{ route('curriculum') }}" class="program-card-link">
                    Explore Labs <i class="ph-bold ph-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2: Computer Labs -->
          <div class="swiper-slide">
            <div class="program-slider-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
              <div class="program-card-bg-img" style="background-image: url('{{ asset('user/assets/images/thumbs/school-students-group.png') }}');"></div>
              <div class="program-card-overlay"></div>
              <div class="program-card-content">
                <div>
                  <div class="program-card-icon">
                    <i class="ph-fill ph-desktop"></i>
                  </div>
                  <h4 class="program-card-title">Computer &amp; Tech Labs</h4>
                  <p class="program-card-desc">
                    Modern computing systems developing digital literacy, computational thinking, and technology skills for the future.
                  </p>
                </div>
                <div>
                  <a href="{{ route('curriculum') }}" class="program-card-link">
                    Explore Computers <i class="ph-bold ph-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3: Smart Classrooms -->
          <div class="swiper-slide">
            <div class="program-slider-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
              <div class="program-card-bg-img" style="background-image: url('{{ asset('user/assets/images/thumbs/school-classroom.jpg') }}');"></div>
              <div class="program-card-overlay"></div>
              <div class="program-card-content">
                <div>
                  <div class="program-card-icon">
                    <i class="ph-fill ph-chalkboard-teacher"></i>
                  </div>
                  <h4 class="program-card-title">Smart Classrooms</h4>
                  <p class="program-card-desc">
                    Interactive digital pedagogy making concepts engaging, visual, and easy to understand for learners of all ages.
                  </p>
                </div>
                <div>
                  <a href="{{ route('curriculum') }}" class="program-card-link">
                    Explore Classes <i class="ph-bold ph-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 4: Sports Arena & Martial Arts -->
          <div class="swiper-slide">
            <div class="program-slider-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="250">
              <div class="program-card-bg-img" style="background-image: url('{{ asset('user/assets/images/thumbs/school-annual-day.png') }}');"></div>
              <div class="program-card-overlay"></div>
              <div class="program-card-content">
                <div>
                  <div class="program-card-icon">
                    <i class="ph-fill ph-sword"></i>
                  </div>
                  <h4 class="program-card-title">Sports &amp; Martial Arts</h4>
                  <p class="program-card-desc">
                    Silambam, Karate, Taekwondo, Cricket, Badminton, and Athletics building physical fitness, discipline, and teamwork.
                  </p>
                </div>
                <div>
                  <a href="{{ route('gallery') }}" class="program-card-link">
                    Explore Sports <i class="ph-bold ph-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 5: Cultural Arts & Mind Sports -->
          <div class="swiper-slide">
            <div class="program-slider-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
              <div class="program-card-bg-img" style="background-image: url('{{ asset('user/assets/images/thumbs/school-hero-banner.png') }}');"></div>
              <div class="program-card-overlay"></div>
              <div class="program-card-content">
                <div>
                  <div class="program-card-icon">
                    <i class="ph-fill ph-palette"></i>
                  </div>
                  <h4 class="program-card-title">Arts, Yoga &amp; Mind Sports</h4>
                  <p class="program-card-desc">
                    Classical Dance, Yoga, Chess, Carrom, and cultural programmes nurturing creativity, emotional balance, and focus.
                  </p>
                </div>
                <div>
                  <a href="{{ route('gallery') }}" class="program-card-link">
                    Explore Arts <i class="ph-bold ph-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 6: Modern Library -->
          <div class="swiper-slide">
            <div class="program-slider-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="350">
              <div class="program-card-bg-img" style="background-image: url('{{ asset('user/assets/images/thumbs/school-library.png') }}');"></div>
              <div class="program-card-overlay"></div>
              <div class="program-card-content">
                <div>
                  <div class="program-card-icon">
                    <i class="ph-fill ph-book-open"></i>
                  </div>
                  <h4 class="program-card-title">5,000+ Books Library</h4>
                  <p class="program-card-desc">
                    Rich collection of books, periodicals, and research materials inspiring curiosity and a lifelong love for reading.
                  </p>
                </div>
                <div>
                  <a href="{{ route('curriculum') }}" class="program-card-link">
                    Explore Library <i class="ph-bold ph-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Scroll navigation and paginations -->
        <div class="popular-category-pagination position-relative tw-mt-8 style-circle-border d-flex justify-content-center"></div>
      </div>
    </div>
  </section>
  <!-- ====================== features section end ======================= -->

  <!-- ============================= popular categories section start ============================= -->
  <section class="classes-grid-section pt-100 pb-100 bg-light bg-cross-grid">
    <div class="container">
      <div class="text-center mb-5">
        <div class="tw-py-1 tw-ps-105 tw-pe-4 bg-white rounded-pill d-inline-flex align-items-center tw-gap-3 mb-4"
          data-aos="fade-up" data-aos-duration="800" data-aos-delay="100"
          style="border:1px solid rgba(4,120,87,0.12); box-shadow:0 2px 12px rgba(4,120,87,0.06);">
          <span class="tw-w-6 tw-h-6 border-main-100 border bg-white rounded-circle text-main-600 d-flex align-items-center justify-content-center">
            <i class="ph-fill ph-graduation-cap"></i>
          </span>
          <span class="fw-bold text-main-600" style="font-size: 0.85rem; letter-spacing: 0.05em; text-transform: uppercase;">
            Academic Stages
          </span>
        </div>
        <h3 class="fw-semibold text-neutral-950 mb-3 display-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          Classes We Offer at Maruthi
        </h3>
        <p class="text-neutral-400 max-w-600-px mx-auto" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="font-size: 1.05rem;">
          From Pre-KG to Class 12, a comprehensive CBSE curriculum with dedicated attention to every student's growth.
        </p>
      </div>

      <!-- Premium Class Stage Cards -->
      <div class="row g-4 justify-content-center mt-2">

        <!-- KG -->
        <div class="col-xl col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
          <div class="class-stage-card-v2 csc-green">
            <div class="csc-step">01</div>
            <div class="csc-icon-wrap">
              <i class="ph-fill ph-smiley"></i>
            </div>
            <div class="csc-badge">Pre-KG · LKG · UKG</div>
            <h4 class="csc-title">Kindergarten</h4>
            <p class="csc-desc">Activity-based play learning to build motor skills, creativity, and foundational social confidence.</p>
            <a href="{{ route('curriculum') }}" class="csc-link">
              Learn More <i class="ph-bold ph-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- Primary -->
        <div class="col-xl col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
          <div class="class-stage-card-v2 csc-blue">
            <div class="csc-step">02</div>
            <div class="csc-icon-wrap">
              <i class="ph-fill ph-book-open"></i>
            </div>
            <div class="csc-badge">Class 1 – 5</div>
            <h4 class="csc-title">Primary</h4>
            <p class="csc-desc">Foundational literacy, numeracy, environmental sciences, reading habits, and moral character.</p>
            <a href="{{ route('curriculum') }}" class="csc-link">
              Learn More <i class="ph-bold ph-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- Middle School -->
        <div class="col-xl col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          <div class="class-stage-card-v2 csc-purple">
            <div class="csc-step">03</div>
            <div class="csc-icon-wrap">
              <i class="ph-fill ph-flask"></i>
            </div>
            <div class="csc-badge">Class 6 – 8</div>
            <h4 class="csc-title">Middle School</h4>
            <p class="csc-desc">Conceptual logic in sciences, maths, computational thinking, language depth, and creative arts.</p>
            <a href="{{ route('curriculum') }}" class="csc-link">
              Learn More <i class="ph-bold ph-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- Secondary -->
        <div class="col-xl col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="250">
          <div class="class-stage-card-v2 csc-amber">
            <div class="csc-step">04</div>
            <div class="csc-icon-wrap">
              <i class="ph-fill ph-trophy"></i>
            </div>
            <div class="csc-badge">Class 9 – 10</div>
            <h4 class="csc-title">Secondary</h4>
            <p class="csc-desc">Structured CBSE board exam preparation, diagnostic evaluations, problem-solving, and sports.</p>
            <a href="{{ route('curriculum') }}" class="csc-link">
              Learn More <i class="ph-bold ph-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- Sr. Secondary -->
        <div class="col-xl col-lg-4 col-sm-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
          <div class="class-stage-card-v2 csc-dark">
            <div class="csc-step">05</div>
            <div class="csc-icon-wrap">
              <i class="ph-fill ph-graduation-cap"></i>
            </div>
            <div class="csc-badge">Class 11 – 12</div>
            <h4 class="csc-title">Sr. Secondary</h4>
            <p class="csc-desc">Specialized Science, Commerce &amp; Humanities streams with competitive entrance guidance (NEET, JEE, CUET).</p>
            <a href="{{ route('curriculum') }}" class="csc-link">
              Learn More <i class="ph-bold ph-arrow-right"></i>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- ============================= popular categories section end ============================= -->

  <script>
    function prepareInquiryForm(form) {
      const grade = form.querySelector('#inquiry-grade').value;
      const message = form.querySelector('#inquiry-message').value;
      form.querySelector('input[name="subject"]').value = "Admission Inquiry - " + grade;
      form.querySelector('textarea[name="enquiry"]').value = "Grade Interested: " + grade + "\nMessage: " + message;
      return true;
    }
  </script>
  <!-- ======================== Redesigned Admissions & Inquiry Section End ====================== -->

  <!-- ===================== leadership / teachers section start ========================= -->
  <section class="leadership-section bg-light py-100 position-relative z-2 overflow-hidden bg-dot-grid">
    <div class="container position-relative z-1">
      <!-- Section Header -->
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-4 tw-mb-12">
        <div>
          <div class="tw-py-1 tw-ps-105 tw-pe-4 bg-white rounded-pill d-inline-flex align-items-center tw-gap-3 tw-mb-4"
            data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            <span class="tw-w-6 tw-h-6 border-main-100 border bg-white rounded-circle text-main-600 d-flex align-items-center justify-content-center tw-text-305">
              <i class="ph-fill ph-star-four"></i>
            </span>
            <span class="fw-bold text-main-600" style="font-size: 0.85rem; letter-spacing: 0.05em; text-transform: uppercase;">Our Leadership &amp; Faculty</span>
          </div>
          <h3 class="fw-semibold text-neutral-950 mb-2" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            Meet the Visionaries Behind Maruthi
          </h3>
          <p class="text-neutral-400 mb-0" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="font-size: 1.02rem; max-width: 620px;">
            Guided by Experience and Vision. Spearheading Maruthi Senior Secondary School with high standards of discipline, academic quality, and holistic student growth.
          </p>
        </div>

        <!-- Slider Navigation Controls -->
        <div class="d-flex align-items-center gap-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
          <button type="button" id="teachers-button-prev"
            class="tw-w-12 tw-h-12 bg-white tw-student-two-shadow d-flex align-items-center justify-content-center text-main-600 tw-text-505 rounded-circle hover-bg-main-600 hover-text-white tw-duration-300 flex-shrink-0" aria-label="Previous Slide">
            <i class="ph-bold ph-arrow-left"></i>
          </button>
          <button type="button" id="teachers-button-next"
            class="tw-w-12 tw-h-12 bg-white tw-student-two-shadow d-flex align-items-center justify-content-center text-main-600 tw-text-505 rounded-circle hover-bg-main-600 hover-text-white tw-duration-300 flex-shrink-0" aria-label="Next Slide">
            <i class="ph-bold ph-arrow-right"></i>
          </button>
        </div>
      </div>

      <!-- Visionary / Teachers Automatic Swiper Slider -->
      <div class="swiper teachers-slider tw-pb-6">
        <div class="swiper-wrapper">

          <!-- Slide 1: Chairman - Dr. S. Ramadasse -->
          <div class="swiper-slide">
            <div class="visionary-card">
              <div class="visionary-photo-wrap">
                <div class="visionary-role-badge">
                  <i class="ph-fill ph-crown"></i> Chairman
                </div>
                <img src="{{ asset('user/assets/images/Teachers/chairman-dr-s-ramadasse.png') }}" alt="Dr. S. Ramadasse - Chairman" class="visionary-photo">
              </div>
              
              <div class="visionary-info-panel">
                <h4 class="visionary-name">Dr. S. Ramadasse</h4>
                <p class="visionary-designation">Chairman &amp; Founder</p>
              </div>

              <!-- Sliding Bio Overlay on Hover -->
              <div class="visionary-bio-overlay">
                <div>
                  <h4 class="text-white fw-bold mb-2">Dr. S. Ramadasse</h4>
                  <p class="text-success mb-3 fw-medium" style="font-size: 0.85rem; color: var(--brand-light, #10b981) !important;">Correspondent &amp; Academician</p>
                  <p class="visionary-bio-text">
                    A distinguished academician and Physics scholar, Dr. S. Ramdasse contributes to the academic vision of the institution, encouraging students towards scientific thinking, higher education, and excellence.
                  </p>
                  
                  <div class="visionary-bio-highlights">
                    <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Visionary Leadership</div>
                    <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Academic Excellence</div>
                    <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Scientific Inquiry</div>
                  </div>
                </div>
                
                <a href="{{ route('about') }}" class="btn-visionary-contact">
                  Know More <i class="ph-bold ph-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Slide 2: Secretary - Mr. Sridhar -->
          <div class="swiper-slide">
            <div class="visionary-card">
              <div class="visionary-photo-wrap">
                <div class="visionary-role-badge">
                  <i class="ph-fill ph-briefcase"></i> Secretary
                </div>
                <img src="{{ asset('user/assets/images/Teachers/secretary-mr-sridhar.png') }}" alt="Mr. Sridhar - Secretary" class="visionary-photo">
              </div>
              
              <div class="visionary-info-panel">
                <h4 class="visionary-name">Mr. Sridhar</h4>
                <p class="visionary-designation">Secretary</p>
              </div>

              <!-- Sliding Bio Overlay on Hover -->
              <div class="visionary-bio-overlay">
                <div>
                  <h4 class="text-white fw-bold mb-2">Mr. Sridhar</h4>
                  <p class="text-success mb-3 fw-medium" style="font-size: 0.85rem; color: var(--brand-light, #10b981) !important;">Secretary &amp; Administrator</p>
                  <p class="visionary-bio-text">
                    Overseeing administrative governance, institutional development, campus operations, and student welfare with dedicated leadership.
                  </p>
                  
                  <div class="visionary-bio-highlights">
                    <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Institutional Governance</div>
                    <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Campus Development</div>
                    <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Student Welfare</div>
                  </div>
                </div>
                
                <a href="{{ route('about') }}" class="btn-visionary-contact">
                  Know More <i class="ph-bold ph-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Slide 3: Treasurer - Dr. S. Sattianandame -->
          <div class="swiper-slide">
            <div class="visionary-card">
              <div class="visionary-photo-wrap">
                <div class="visionary-role-badge">
                  <i class="ph-fill ph-coins"></i> Treasurer
                </div>
                <img src="{{ asset('user/assets/images/Teachers/treasurer-dr-s-sattianandame.png') }}" alt="Dr. S. Sattianandame - Treasurer" class="visionary-photo">
              </div>
              
              <div class="visionary-info-panel">
                <h4 class="visionary-name">Dr. S. Sattianandame</h4>
                <p class="visionary-designation">Treasurer</p>
              </div>

              <!-- Sliding Bio Overlay on Hover -->
              <div class="visionary-bio-overlay">
                <div>
                  <h4 class="text-white fw-bold mb-2">Dr. S. Sattianandame</h4>
                  <p class="text-success mb-3 fw-medium" style="font-size: 0.85rem; color: var(--brand-light, #10b981) !important;">Treasurer</p>
                  <p class="visionary-bio-text">
                    Managing strategic financial stewardship, resource allocation, and sustained investments in top-tier educational facilities and technology.
                  </p>
                  
                  <div class="visionary-bio-highlights">
                    <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Strategic Planning</div>
                    <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Resource Allocation</div>
                    <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Academic Stewardship</div>
                  </div>
                </div>
                
                <a href="{{ route('about') }}" class="btn-visionary-contact">
                  Know More <i class="ph-bold ph-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Slide 4: Principal - Mrs. Mahalakshmi K. -->
          <div class="swiper-slide">
            <div class="visionary-card">
              <div class="visionary-photo-wrap">
                <div class="visionary-role-badge">
                  <i class="ph-fill ph-graduation-cap"></i> Principal
                </div>
                <img src="{{ asset('user/assets/images/Teachers/principal-mrs-mahalakshmi-k.png') }}" alt="Mrs. Mahalakshmi K. - Principal" class="visionary-photo">
              </div>
              
              <div class="visionary-info-panel">
                <h4 class="visionary-name">Mrs. Mahalakshmi K.</h4>
                <p class="visionary-designation">Principal</p>
              </div>

              <!-- Sliding Bio Overlay on Hover -->
              <div class="visionary-bio-overlay">
                <div>
                  <h4 class="text-white fw-bold mb-2">Mrs. Mahalakshmi K.</h4>
                  <p class="text-success mb-3 fw-medium" style="font-size: 0.85rem; color: var(--brand-light, #10b981) !important;">M.Sc., M.Phil., B.Ed., DFL., PGDMLT</p>
                  <p class="visionary-bio-text">
                    Leading academic functioning and teacher development with extensive experience, focusing on quality, discipline, and holistic student growth.
                  </p>
                  
                  <div class="visionary-bio-highlights">
                    <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> CBSE Curriculum Leader</div>
                    <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Faculty Mentorship</div>
                    <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Student Development</div>
                  </div>
                </div>
                
                <a href="{{ route('contact') }}" class="btn-visionary-contact">
                  Contact Principal <i class="ph-bold ph-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

        </div>

        <!-- Swiper Pagination -->
        <div class="teachers-pagination swiper-pagination position-relative tw-mt-8"></div>
      </div>

    </div>
  </section>
  <!-- ===================== leadership / teachers section end ========================= -->





  <!-- ============================ teacher section start ========================== -->

  <!-- ============================ teacher section end ========================== -->

  <!-- ====================== categories section start ====================== -->

  <!-- ====================== categories section end ====================== -->

  <!-- ======================= student reviews section start ======================== -->

  <!-- ============================= student reviews section start ======================== -->
  <section class="bg-white pt-140 pb-100 bg-dot-grid">
<!-- icons -->
   
    <div class="container max-w-1400-px mx-auto">
      <div class="d-flex align-items-center justify-content-center">
        <!-- <img src="user/assets/images/shape/student-review-two-shape1.png" alt="shape"
          class="animation-upDown d-xl-block d-none"> -->
        <div class="text-center tw-mb-15">
          <div class="tw-py-1 tw-ps-105 tw-pe-4 bg-white rounded-pill d-inline-flex align-items-center tw-gap-3 tw-mb-5"
            data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            <span
              class="tw-w-6 tw-h-6 border-main-100 border bg-white rounded-circle text-main-600 d-flex align-items-center justify-content-center tw-text-305">
              <i class="ph-fill ph-star-four"></i>
            </span>
            <span class="fw-normal tw-text-4 text-main-600">
              Parent & Student Testimonials
            </span>
          </div>
          <h3 class="fw-semibold text-neutral-950 tw-mb-5" data-aos="fade-up" data-aos-duration="800"
            data-aos-delay="200">
            What Parents & Students Say !
          </h3>
          <p class="fw-normal tw-text-4 text-neutral-500" data-aos="fade-up" data-aos-duration="800"
            data-aos-delay="300">
            Hear from our community about their experience at Maruthi Senior Secondary School.
          </p>
        </div>
        <!-- <img src="user/assets/images/shape/student-review-two-shape2.png" alt="shape"
          class="animation-scalation d-xl-block d-none"> -->
      </div>


      <div class="d-flex align-items-center tw-gap-11 flex-sm-nowrap flex-wrap">
        <button type="button" id="student-two-button-prev"
          class="tw-w-13 tw-h-13 bg-white tw-student-two-shadow d-flex align-items-center justify-content-center text-main-600 tw-text-505 rounded-circle hover-bg-main-600 hover-text-white tw-duration-300 flex-shrink-0">
          <i class="ph-bold ph-arrow-left"></i>
        </button>
        <div class="swiper student-two-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
              <div class="position-relative h-100">
                <div
                  class="tw-p-10 bg-main-10 tw-rounded-xl border-white border border-2 border-white hover-border-main-600 tw-duration-300 tw-mb-1 position-relative overflow-hidden h-100 d-flex flex-column justify-content-between">
                  <!-- Decorative Quotation Mark -->
                  <i class="ph-fill ph-quotes text-main-600 position-absolute" style="font-size: 5rem; top: 10px; right: 15px; opacity: 0.08; pointer-events: none;"></i>
                  
                  <div>
                    <!-- 5 Star Rating -->
                    <div class="d-flex tw-gap-1 text-main-600 tw-mb-4">
                      <i class="ph-fill ph-star"></i>
                      <i class="ph-fill ph-star"></i>
                      <i class="ph-fill ph-star"></i>
                      <i class="ph-fill ph-star"></i>
                      <i class="ph-fill ph-star"></i>
                    </div>
                    <h2 class="h5 fw-medium text-neutral-700 tw-line-height-37-px tw-mb-6" style="font-size: 1.05rem;">
                      "My children have been studying at Maruthi School since Pre-KG. The teachers are incredibly
                      dedicated, and the CBSE curriculum is delivered with great care. I've seen remarkable growth in my
                      kids academically and personally."
                    </h2>
                  </div>
                  
                  <div class="tw-mt-6 d-flex align-items-center tw-gap-3 border-top tw-pt-5" style="border-color: rgba(0,0,0,0.06) !important;">
                    <div class="avatar-circle bg-main-50 text-main-600 d-flex align-items-center justify-content-center rounded-circle" style="width: 46px; height: 46px; flex-shrink: 0;">
                      <i class="ph-bold ph-user" style="font-size: 1.25rem;"></i>
                    </div>
                    <div>
                      <span class="fw-semibold tw-text-405 text-neutral-950 tw-mb-05 d-block">
                        Rajesh Kumar
                      </span>
                      <span class="fw-normal tw-text-4 text-neutral-400">
                        Parent of Class 8 Student
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
              <div class="position-relative h-100">
                <div
                  class="tw-p-10 bg-main-10 tw-rounded-xl border-white border border-2 border-white hover-border-main-600 tw-duration-300 tw-mb-1 position-relative overflow-hidden h-100 d-flex flex-column justify-content-between">
                  <!-- Decorative Quotation Mark -->
                  <i class="ph-fill ph-quotes text-main-600 position-absolute" style="font-size: 5rem; top: 10px; right: 15px; opacity: 0.08; pointer-events: none;"></i>
                  
                  <div>
                    <!-- 5 Star Rating -->
                    <div class="d-flex tw-gap-1 text-main-600 tw-mb-4">
                      <i class="ph-fill ph-star"></i>
                      <i class="ph-fill ph-star"></i>
                      <i class="ph-fill ph-star"></i>
                      <i class="ph-fill ph-star"></i>
                      <i class="ph-fill ph-star"></i>
                    </div>
                    <h2 class="h5 fw-medium text-neutral-700 tw-line-height-37-px tw-mb-6" style="font-size: 1.05rem;">
                      "The school's focus on both academics and extracurricular activities is outstanding. My daughter
                      excels in sports and studies equally, thanks to the balanced approach at Maruthi School. Best CBSE
                      school in Puducherry!"
                    </h2>
                  </div>
                  
                  <div class="tw-mt-6 d-flex align-items-center tw-gap-3 border-top tw-pt-5" style="border-color: rgba(0,0,0,0.06) !important;">
                    <div class="avatar-circle bg-main-50 text-main-600 d-flex align-items-center justify-content-center rounded-circle" style="width: 46px; height: 46px; flex-shrink: 0;">
                      <i class="ph-bold ph-user" style="font-size: 1.25rem;"></i>
                    </div>
                    <div>
                      <span class="fw-semibold tw-text-405 text-neutral-950 tw-mb-05 d-block">
                        Priya Lakshmi
                      </span>
                      <span class="fw-normal tw-text-4 text-neutral-400">
                        Parent of Class 10 Student
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
              <div class="position-relative h-100">
                <div
                  class="tw-p-10 bg-main-10 tw-rounded-xl border-white border border-2 border-white hover-border-main-600 tw-duration-300 tw-mb-1 position-relative overflow-hidden h-100 d-flex flex-column justify-content-between">
                  <!-- Decorative Quotation Mark -->
                  <i class="ph-fill ph-quotes text-main-600 position-absolute" style="font-size: 5rem; top: 10px; right: 15px; opacity: 0.08; pointer-events: none;"></i>
                  
                  <div>
                    <!-- 5 Star Rating -->
                    <div class="d-flex tw-gap-1 text-main-600 tw-mb-4">
                      <i class="ph-fill ph-star"></i>
                      <i class="ph-fill ph-star"></i>
                      <i class="ph-fill ph-star"></i>
                      <i class="ph-fill ph-star"></i>
                      <i class="ph-fill ph-star"></i>
                    </div>
                    <h2 class="h5 fw-medium text-neutral-700 tw-line-height-37-px tw-mb-6" style="font-size: 1.05rem;">
                      "Maruthi School gave me the foundation I needed for my career. The science labs, computer
                      facilities, and the mentorship from teachers shaped who I am today. Forever grateful to this
                      institution."
                    </h2>
                  </div>
                  
                  <div class="tw-mt-6 d-flex align-items-center tw-gap-3 border-top tw-pt-5" style="border-color: rgba(0,0,0,0.06) !important;">
                    <div class="avatar-circle bg-main-50 text-main-600 d-flex align-items-center justify-content-center rounded-circle" style="width: 46px; height: 46px; flex-shrink: 0;">
                      <i class="ph-bold ph-graduation-cap" style="font-size: 1.25rem;"></i>
                    </div>
                    <div>
                      <span class="fw-semibold tw-text-405 text-neutral-950 tw-mb-05 d-block">
                        Arun Prakash
                      </span>
                      <span class="fw-normal tw-text-4 text-neutral-400">
                        Alumni – Batch of 2018
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
              <div class="position-relative h-100">
                <div
                  class="tw-p-10 bg-main-10 tw-rounded-xl border-white border border-2 border-white hover-border-main-600 tw-duration-300 tw-mb-1 position-relative overflow-hidden h-100 d-flex flex-column justify-content-between">
                  <!-- Decorative Quotation Mark -->
                  <i class="ph-fill ph-quotes text-main-600 position-absolute" style="font-size: 5rem; top: 10px; right: 15px; opacity: 0.08; pointer-events: none;"></i>
                  
                  <div>
                    <!-- 5 Star Rating -->
                    <div class="d-flex tw-gap-1 text-main-600 tw-mb-4">
                      <i class="ph-fill ph-star"></i>
                      <i class="ph-fill ph-star"></i>
                      <i class="ph-fill ph-star"></i>
                      <i class="ph-fill ph-star"></i>
                      <i class="ph-fill ph-star"></i>
                    </div>
                    <h2 class="h5 fw-medium text-neutral-700 tw-line-height-37-px tw-mb-6" style="font-size: 1.05rem;">
                      "The school provides a safe, nurturing environment where children can thrive. The cultural exchange
                      programs and sports events give students exposure beyond textbooks. Highly recommend Maruthi
                      School!"
                    </h2>
                  </div>
                  
                  <div class="tw-mt-6 d-flex align-items-center tw-gap-3 border-top tw-pt-5" style="border-color: rgba(0,0,0,0.06) !important;">
                    <div class="avatar-circle bg-main-50 text-main-600 d-flex align-items-center justify-content-center rounded-circle" style="width: 46px; height: 46px; flex-shrink: 0;">
                      <i class="ph-bold ph-user" style="font-size: 1.25rem;"></i>
                    </div>
                    <div>
                      <span class="fw-semibold tw-text-405 text-neutral-950 tw-mb-05 d-block">
                        Meenakshi Devi
                      </span>
                      <span class="fw-normal tw-text-4 text-neutral-400">
                        Parent of Class 5 Student
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button type="button" id="student-two-button-next"
          class="tw-w-13 tw-h-13 bg-white tw-student-two-shadow d-flex align-items-center justify-content-center text-main-600 tw-text-505 rounded-circle hover-bg-main-600 hover-text-white tw-duration-300 flex-shrink-0">
          <i class="ph-bold ph-arrow-right"></i>
        </button>
      </div>
    </div>
  </section>
  <!-- ============================= student reviews section end ======================== -->

  <!-- ======================= student reviews section end ======================== -->


  <!-- =============================== blog section start ============================= -->
  <section class="py-100 bg-main-10 bg-dot-grid">
    <div class="container max-w-1400-px mx-auto">
      <div class="d-flex align-items-center justify-content-between tw-mb-15 flex-wrap">
        <div class="">
          <div class="tw-py-1 tw-ps-105 tw-pe-4 bg-white rounded-pill d-inline-flex align-items-center tw-gap-3 tw-mb-5"
            data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            <span
              class="tw-w-6 tw-h-6 border-main-100 border bg-white rounded-circle text-main-600 d-flex align-items-center justify-content-center tw-text-305">
              <i class="ph-fill ph-star-four"></i>
            </span>
            <span class="fw-normal tw-text-4 text-main-600">
              School News & Events
            </span>
          </div>
          <h3 class="fw-semibold text-neutral-950 tw-mb-5" data-aos="fade-up" data-aos-duration="800"
            data-aos-delay="350">
            Latest News & Upcoming Events
          </h3>
        </div>
        <p class="fw-normal tw-text-405 text-neutral-500 max-w-500-px" data-aos="fade-up" data-aos-duration="800"
          data-aos-delay="300">
          Stay updated with the latest happenings, achievements, and upcoming events at Maruthi Senior Secondary School.
        </p>
      </div>
      <div class="d-flex align-items-center tw-gap-11 flex-sm-nowrap flex-wrap">
        <button type="button" id="blog-two-button-prev"
          class="tw-w-13 tw-h-13 bg-white tw-student-two-shadow d-flex align-items-center justify-content-center text-main-600 tw-text-505 rounded-circle hover-bg-main-600 hover-text-white tw-duration-300 flex-shrink-0">
          <i class="ph-bold ph-arrow-left"></i>
        </button>
        <div class="swiper blog-two-slider tw-pb-5">
          <div class="swiper-wrapper">
            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
              <div class="tw-mt-12">
                <div class="tw-p-205 bg-white tw-rounded-xl animation-item">
                  <div class="position-relative tw-mb-5">
                    <span class="w-100 tw-rounded-xl overflow-hidden">
                      <img src="{{ asset('user/assets/images/thumbs/school-hero-banner.png') }}" alt="Annual Day Event"
                        class="w-100 course-item__img tw-duration-300">
                    </span>
                    <div
                      class="tw-py-5 tw-px-6 bg-main-600 tw-rounded-top-bottom-12-px position-absolute top-0 tw-start-0">
                      <h2 class="h5 tw-text-details-two-32-px d-block fw-bold text-white tw-leading-none">
                        12
                      </h2>
                      <span class="fw-normal tw-text-4 text-white">
                        JUN
                      </span>
                    </div>
                  </div>
                  <div class="tw-px-4 tw-pb-3">

                    <span class="w-100 tw-h-px bg-neutral-12-persent tw-mt-4 tw-mb-4"></span>
                    <a href="{{ route('event_page') }}"
                      class="fw-semibold tw-text-5 text-neutral-500 tw-mb-6 hover-text-main-600 tw-duration-300">
                      Annual Day Celebrations — A Grand Cultural Extravaganza
                    </a>
                    <a href="{{ route('event_page') }}"
                      class="btn btn-main-two hover-style-four button--stroke active-scale-094 tw-duration-100 tw-py-305 tw-px-6 group active--translate-y-2 tw-p-1 rounded-pill border-main-600 border"
                      data-block="button">
                      <span class="button__flair"></span>
                      <span class="button__label fw-bold tw-text-4">View Details</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
              <div class="">
                <div class="tw-p-205 bg-white tw-rounded-xl animation-item">
                  <div class="position-relative tw-mb-5">
                    <span class="w-100 tw-rounded-xl overflow-hidden">
                      <img src="{{ asset('user/assets/images/thumbs/school-science-lab.png') }}" alt="Science Day Competition"
                        class="w-100 course-item__img tw-duration-300">
                    </span>
                    <div
                      class="tw-py-5 tw-px-6 bg-main-600 tw-rounded-top-bottom-12-px position-absolute top-0 tw-start-0">
                      <h2 class="h5 tw-text-details-two-32-px d-block fw-bold text-white tw-leading-none">
                        08
                      </h2>
                      <span class="fw-normal tw-text-4 text-white">
                        JUN
                      </span>
                    </div>
                  </div>
                  <div class="tw-px-4 tw-pb-3">

                    <span class="w-100 tw-h-px bg-neutral-12-persent tw-mt-4 tw-mb-4"></span>
                    <a href="{{ route('event_page') }}"
                      class="fw-semibold tw-text-5 text-neutral-500 tw-mb-6 hover-text-main-600 tw-duration-300">
                      Students Excel at National Science Day Competition
                    </a>
                    <a href="{{ route('event_page') }}"
                      class="btn btn-main-two hover-style-four button--stroke active-scale-094 tw-duration-100 tw-py-305 tw-px-6 group active--translate-y-2 tw-p-1 rounded-pill border-main-600 border"
                      data-block="button">
                      <span class="button__flair"></span>
                      <span class="button__label fw-bold tw-text-4">View Details</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
              <div class="tw-mt-12">
                <div class="tw-p-205 bg-white tw-rounded-xl animation-item">
                  <div class="position-relative tw-mb-5">
                    <span class="w-100 tw-rounded-xl overflow-hidden">
                      <img src="{{ asset('user/assets/images/thumbs/school-annual-day.png') }}" alt="Cultural Exchange Program"
                        class="w-100 course-item__img tw-duration-300">
                    </span>
                    <div
                      class="tw-py-5 tw-px-6 bg-main-600 tw-rounded-top-bottom-12-px position-absolute top-0 tw-start-0">
                      <h2 class="h5 tw-text-details-two-32-px d-block fw-bold text-white tw-leading-none">
                        04
                      </h2>
                      <span class="fw-normal tw-text-4 text-white">
                        JUN
                      </span>
                    </div>
                  </div>
                  <div class="tw-px-4 tw-pb-3">

                    <span class="w-100 tw-h-px bg-neutral-12-persent tw-mt-4 tw-mb-4"></span>
                    <a href="{{ route('event_page') }}"
                      class="fw-semibold tw-text-5 text-neutral-500 tw-mb-6 hover-text-main-600 tw-duration-300">
                      International Cultural Exchange — French School Visit
                    </a>
                    <a href="{{ route('event_page') }}"
                      class="btn btn-main-two hover-style-four button--stroke active-scale-094 tw-duration-100 tw-py-305 tw-px-6 group active--translate-y-2 tw-p-1 rounded-pill border-main-600 border"
                      data-block="button">
                      <span class="button__flair"></span>
                      <span class="button__label fw-bold tw-text-4">View Details</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="800" data-aos-delay="350">
              <div class="">
                <div class="tw-p-205 bg-white tw-rounded-xl animation-item">
                  <div class="position-relative tw-mb-5">
                    <span class="w-100 tw-rounded-xl overflow-hidden">
                      <img src="{{ asset('user/assets/images/thumbs/school-classroom.jpg') }}" alt="Classroom Innovations"
                        class="w-100 course-item__img tw-duration-300">
                    </span>
                    <div
                      class="tw-py-5 tw-px-6 bg-main-600 tw-rounded-top-bottom-12-px position-absolute top-0 tw-start-0">
                      <h2 class="h5 tw-text-details-two-32-px d-block fw-bold text-white tw-leading-none">
                        28
                      </h2>
                      <span class="fw-normal tw-text-4 text-white">
                        MAY
                      </span>
                    </div>
                  </div>
                  <div class="tw-px-4 tw-pb-3">

                    <span class="w-100 tw-h-px bg-neutral-12-persent tw-mt-4 tw-mb-4"></span>
                    <a href="{{ route('event_page') }}"
                      class="fw-semibold tw-text-5 text-neutral-500 tw-mb-6 hover-text-main-600 tw-duration-300">
                      Smart Classrooms &amp; Pedagogical Innovations for 2026-27
                    </a>
                    <a href="{{ route('event_page') }}"
                      class="btn btn-main-two hover-style-four button--stroke active-scale-094 tw-duration-100 tw-py-305 tw-px-6 group active--translate-y-2 tw-p-1 rounded-pill border-main-600 border"
                      data-block="button">
                      <span class="button__flair"></span>
                      <span class="button__label fw-bold tw-text-4">View Details</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button type="button" id="blog-two-button-next"
          class="tw-w-13 tw-h-13 bg-white tw-student-two-shadow d-flex align-items-center justify-content-center text-main-600 tw-text-505 rounded-circle hover-bg-main-600 hover-text-white tw-duration-300 flex-shrink-0">
          <i class="ph-bold ph-arrow-right"></i>
        </button>
      </div>
      <div class="tw-mt-9 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="800"
        data-aos-delay="300">
        <a href="{{ route('event_page') }}"
          class="btn btn-main-four hover-style-four button--stroke active-scale-094 tw-duration-100 tw-py-405 tw-px-10 group active--translate-y-2 tw-p-1 tw-pe-8 rounded-pill"
          data-block="button">
          <span class="button__flair"></span>
          <span class="button__label fw-bold tw-text-4">View All Events</span>
        </a>
      </div>
    </div>
  </section>
  <!-- =============================== blog section end ============================= -->

  <!-- ========================= courses section start =========================== -->
  <section class="admissions-cta-redesign position-relative overflow-hidden">
    <div class="container position-relative z-1">
      <div class="row align-items-center gy-4">
        <div class="col-lg-7 text-lg-start text-center" data-aos="fade-right" data-aos-duration="1000">
          <div class="cta-pill-badge mb-3 d-inline-flex align-items-center gap-2">
            <span class="cta-pulse-dot"></span>
            <span class="fw-semibold">Admissions Open 2026-27</span>
          </div>
          <h2 class="cta-title fw-bold mb-3">
            Start Your Child's Journey <br class="d-none d-md-block"> to <span class="text-highlight">Excellence</span> Today
          </h2>
          <p class="cta-description mb-3">
            Join Puducherry's leading CBSE school with a legacy of 25+ years. Guided by <strong>“Wisdom Wins”</strong> — developing wisdom to think, courage to question, discipline to act, and compassion to contribute.
          </p>
          <div class="cta-tamil-quote-badge mb-2">
            <span class="small fw-semibold">"கல்வியின் நோக்கம் அறிவு மட்டுமல்ல; ஞானமும் நற்பண்பும் வளர்ப்பதே."</span>
          </div>
        </div>
        <div class="col-lg-5 text-lg-end text-center" data-aos="fade-left" data-aos-duration="1000">
          <div class="cta-btn-group d-flex flex-column flex-sm-row justify-content-lg-end gap-3 align-items-center">
            <a href="{{ route('contact') }}" class="btn btn-apply-now rounded-pill px-5 py-3 fw-bold text-decoration-none">
              Apply For Admission <i class="ph-bold ph-arrow-right ms-2"></i>
            </a>
            <a href="tel:+919442399777" class="btn btn-call-us rounded-pill px-4 py-3 fw-bold text-decoration-none">
              <i class="ph-fill ph-phone-call me-2"></i> Inquire Now
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ========================= courses section end =========================== -->

 {{-- Footer starts --}}
      @include('user.layouts.footer')
  {{-- Footer ends --}}
  


    @include('user.layouts.script')

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        if (typeof Swiper !== 'undefined' && document.querySelector('.teachers-slider')) {
          new Swiper('.teachers-slider', {
            spaceBetween: 30,
            loop: true,
            speed: 1000,
            grabCursor: true,
            autoplay: {
              delay: 3000,
              disableOnInteraction: false,
              pauseOnMouseEnter: true,
            },
            slidesPerView: 1,
            breakpoints: {
              576: {
                slidesPerView: 1,
              },
              768: {
                slidesPerView: 2,
              },
              992: {
                slidesPerView: 3,
              },
              1200: {
                slidesPerView: 3,
              },
            },
            pagination: {
              el: '.teachers-pagination',
              clickable: true,
            },
            navigation: {
              nextEl: '#teachers-button-next',
              prevEl: '#teachers-button-prev',
            },
          });
        }
      });
    </script>
</body>
</html>
