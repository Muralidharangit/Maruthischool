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

    <!-- Redesign Overrides: Mastery Theme Visuals with Maruthi Branding -->
    <style>
        /* Feature Overlapping Cards */
        .features-overlap-row {
            margin-top: 0;
            position: relative;
            z-index: 10;
            padding-bottom: 0;
        }

        .feature-overlap-card {
            border-radius: 16px;
            padding: 40px 35px;
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.08);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            border: none;
            height: 100%;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .feature-overlap-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(15, 23, 42, 0.15);
        }

        .feature-icon-circle {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            margin-bottom: 25px;
            transition: all 0.3s ease;
        }

        /* Card 2: Gray Background with Black Text & Green Accents */
        .feature-overlap-card.card-gray {
            background: #f1f5f9;
            color: #111111;
            border: 1px solid rgba(18, 142, 75, 0.08);
        }
        .feature-overlap-card.card-gray h4 {
            color: #111111 !important;
        }
        .feature-overlap-card.card-gray p {
            color: #555555 !important;
        }
        .feature-overlap-card.card-gray .feature-icon-circle {
            background-color: #ffffff;
            color: var(--brand);
            box-shadow: 0 8px 20px rgba(18, 142, 75, 0.08);
        }
        .feature-overlap-card.card-gray .feature-card-btn {
            color: var(--brand) !important;
        }

        /* Card 2: White Background with Black Text & Green Accents */
        .feature-overlap-card.card-white {
            background: #ffffff;
            color: #111111;
            border: 1px solid rgba(18, 142, 75, 0.12);
        }
        .feature-overlap-card.card-white h4 {
            color: #111111 !important;
        }
        .feature-overlap-card.card-white p {
            color: #555555 !important;
        }
        .feature-overlap-card.card-white .feature-icon-circle {
            background-color: var(--brand-pale, #e8f8ef);
            color: var(--brand);
            box-shadow: 0 8px 20px rgba(18, 142, 75, 0.08);
        }
        .feature-overlap-card.card-white .feature-card-btn {
            color: var(--brand) !important;
        }

        /* Card 3: Black Background with White Text & Green Accents */
        .feature-overlap-card.card-black {
            background: linear-gradient(135deg, #111111, #1e1e1e);
            color: #ffffff;
        }
        .feature-overlap-card.card-black h4 {
            color: #ffffff !important;
        }
        .feature-overlap-card.card-black p {
            color: rgba(255, 255, 255, 0.8) !important;
        }
        .feature-overlap-card.card-black .feature-icon-circle {
            background-color: rgba(18, 142, 75, 0.15);
            color: var(--brand-light, #1aad5d);
        }
        .feature-overlap-card.card-black .feature-card-btn {
            color: var(--brand-light, #1aad5d) !important;
        }

        .feature-card-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 20px;
            font-weight: 700;
            font-size: 0.88rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .feature-card-btn:hover {
            opacity: 0.85;
            padding-left: 5px;
        }

        /* About Campus Overrides */
        .about-section-styled {
            padding: 120px 0 100px 0;
            position: relative;
            background-color: #f8fafc;
        }

        .about-main-img {
            border-radius: 24px;
            box-shadow: 0 25px 50px -12px rgba(15, 23, 42, 0.15);
            transition: all 0.4s ease;
        }

        .about-main-img:hover {
            transform: scale(1.02);
            box-shadow: 0 35px 60px -15px rgba(18, 142, 75, 0.2);
        }

        .about-badge-floating {
            position: absolute;
            bottom: -20px;
            right: -10px;
            background: #ffffff;
            border-left: 6px solid var(--brand);
            border-radius: 16px;
            padding: 20px 28px;
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.12);
            z-index: 10;
            transition: all 0.3s ease;
        }

        .about-badge-floating:hover {
            transform: translateY(-5px);
        }

        /* Admissions & Glassmorphic Inquiry Form Section */
        .admission-banner-section {
            background: linear-gradient(135deg, #111111, rgba(18, 142, 75, 0.9)), url('{{ asset("user/assets/images/thumbs/promo-banner-bg.png") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 100px 0;
            position: relative;
            border-radius: 0 !important;
            margin: 0 !important;
            box-shadow: none !important;
        }

        .glass-inquiry-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 40px 35px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
        }

        .glass-inquiry-card h4 {
            color: #ffffff !important;
            font-weight: 800;
            margin-bottom: 5px;
            font-family: var(--font-heading) !important;
        }

        .glass-inquiry-card p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
            margin-bottom: 25px;
        }

        .glass-form-input {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.25);
            border-radius: 10px;
            color: #ffffff !important;
            padding: 12px 18px;
            transition: all 0.3s ease;
            font-size: 0.92rem;
        }

        .glass-form-input:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: var(--brand) !important;
            box-shadow: 0 0 15px rgba(18, 142, 75, 0.25) !important;
            outline: none;
        }

        .glass-form-input::placeholder {
            color: rgba(255, 255, 255, 0.55);
        }

        .glass-form-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e") !important;
            background-repeat: no-repeat !important;
            background-position: right 1rem center !important;
            background-size: 16px 12px !important;
        }

        .glass-form-select option {
            background-color: #111111;
            color: #ffffff;
        }

        .btn-inquiry-submit {
            background: var(--brand) !important;
            color: #ffffff !important;
            font-weight: 700;
            border: none;
            border-radius: 10px;
            padding: 14px 20px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(18, 142, 75, 0.2);
        }

        .btn-inquiry-submit:hover {
            background: #ffffff !important;
            color: var(--brand) !important;
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(255, 255, 255, 0.25);
        }

        /* Classes We Offer Grid */
        .class-stage-card {
            background: #ffffff;
            border-radius: 16px;
            border: 1px solid rgba(15, 23, 42, 0.05);
            padding: 40px 30px;
            height: 100%;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.02);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .class-stage-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(18, 142, 75, 0.08);
            border-color: rgba(18, 142, 75, 0.18);
        }

        .class-stage-icon {
            width: 65px;
            height: 65px;
            border-radius: 14px;
            background-color: var(--brand-pale);
            color: var(--brand);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            margin-bottom: 24px;
            transition: all 0.3s ease;
        }

        .class-stage-card:hover .class-stage-icon {
            background-color: var(--brand);
            color: #ffffff;
            box-shadow: 0 12px 24px rgba(18, 142, 75, 0.22);
        }

        .class-stage-title {
            font-family: var(--font-heading) !important;
            font-size: 1.25rem !important;
            font-weight: 700 !important;
            color: #111111 !important;
            margin-bottom: 12px;
        }

        .class-stage-desc {
            font-size: 0.95rem;
            color: var(--slate-gray);
            line-height: 1.6;
        }

        /* News & Events Overrides */
        .event-card-modern {
            border-radius: 18px !important;
            box-shadow: 0 15px 30px rgba(15, 23, 42, 0.05) !important;
            border: 1px solid rgba(15, 23, 42, 0.04) !important;
            overflow: hidden;
            transition: all 0.4s ease;
        }

        .event-card-modern:hover {
            transform: translateY(-6px);
            box-shadow: 0 25px 45px rgba(18, 142, 75, 0.12) !important;
        }

        .news-date-overlay {
            position: absolute;
            top: 0;
            left: 0;
            background: linear-gradient(135deg, var(--brand), var(--brand-light)) !important;
            color: #ffffff !important;
            padding: 12px 18px;
            border-bottom-right-radius: 18px;
            text-align: center;
            z-index: 10;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.15);
        }

        .news-date-overlay h2 {
            font-size: 1.6rem !important;
            font-weight: 800 !important;
            color: #ffffff !important;
            margin: 0 !important;
            line-height: 1 !important;
        }

        .news-date-overlay span {
            font-size: 0.72rem !important;
            font-weight: 700 !important;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* CTA Banner Gold/Orange text overrides */
        .cta-title .text-highlight {
            color: var(--brand-light, #1aad5d) !important;
            background: none !important;
            -webkit-text-fill-color: initial !important;
        }

        .btn-apply-now {
            background: var(--brand) !important;
            color: #ffffff !important;
        }
        
        .btn-apply-now:hover {
            background: #ffffff !important;
            color: var(--brand) !important;
            box-shadow: 0 10px 25px rgba(255, 255, 255, 0.2) !important;
        }

        /* Program Slider Card with Hover Image Transition */
        .program-slider-card {
            background-color: #ffffff;
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 20px;
            padding: 40px 30px;
            height: 420px; /* fixed height for cards in slider */
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.03);
            z-index: 1;
            text-align: left;
        }

        .program-slider-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 30px 60px rgba(4, 120, 87, 0.15);
            border-color: rgba(4, 120, 87, 0.2);
        }

        /* Background Image that animates on hover */
        .program-card-bg-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transform: scale(1.15);
            transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
            z-index: -2;
        }

        .program-slider-card:hover .program-card-bg-img {
            opacity: 1;
            transform: scale(1.02);
        }

        /* Dark Overlay that appears on hover for readability */
        .program-card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, rgba(15, 23, 42, 0.15), rgba(15, 23, 42, 0.85));
            opacity: 0;
            transition: all 0.4s ease;
            z-index: -1;
        }

        .program-slider-card:hover .program-card-overlay {
            opacity: 1;
        }

        /* Content Styling */
        .program-card-content {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            z-index: 2;
        }

        .program-card-icon {
            width: 65px;
            height: 65px;
            border-radius: 16px;
            background-color: var(--brand-pale, #f1f5f9);
            color: var(--brand);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            margin-bottom: 25px;
            transition: all 0.4s ease;
            flex-shrink: 0;
        }

        .program-slider-card:hover .program-card-icon {
            background-color: rgba(255, 255, 255, 0.2);
            color: #ffffff;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .program-card-title {
            font-family: var(--font-heading) !important;
            font-size: 1.3rem !important;
            font-weight: 700 !important;
            color: #111111;
            margin-bottom: 12px;
            transition: all 0.3s ease;
        }

        .program-slider-card:hover .program-card-title {
            color: #ffffff !important;
        }

        .program-card-desc {
            font-size: 0.95rem;
            color: #555555;
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1;
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
            opacity: 1;
            visibility: visible;
            max-height: 150px;
            overflow: hidden;
        }

        .program-slider-card:hover .program-card-desc {
            opacity: 0;
            visibility: hidden;
            max-height: 0;
            margin-bottom: 0;
            padding: 0;
        }

        .program-card-link {
            font-weight: 700;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--brand) !important;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.3s ease;
        }

        .program-slider-card:hover .program-card-link {
            color: #ffffff !important;
            gap: 10px;
        }

        /* Visionary Leadership Grid Overhaul */
        .visionary-card {
            background: #ffffff;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(15, 23, 42, 0.05);
            border: 1px solid rgba(0, 0, 0, 0.05);
            height: 540px; /* fixed height for alignment */
            position: relative;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            display: flex;
            flex-direction: column;
        }

        .visionary-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(4, 120, 87, 0.12);
            border-color: rgba(4, 120, 87, 0.15);
        }

        .visionary-photo-wrap {
            width: 100%;
            height: 400px;
            position: relative;
            overflow: hidden;
            background-color: #f8fafc;
        }

        .visionary-photo {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .visionary-card:hover .visionary-photo {
            transform: scale(1.08);
        }

        /* Float Role Badge */
        .visionary-role-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background: var(--brand);
            color: #ffffff;
            font-size: 0.78rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            padding: 8px 16px;
            border-radius: 30px;
            z-index: 10;
            box-shadow: 0 8px 20px rgba(4, 120, 87, 0.25);
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Default Info Panel at the bottom */
        .visionary-info-panel {
            padding: 25px 25px;
            background: #ffffff;
            border-top: 1px solid rgba(0, 0, 0, 0.03);
            text-align: center;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            transition: all 0.4s ease;
        }

        .visionary-name {
            font-family: var(--font-heading) !important;
            font-size: 1.35rem !important;
            font-weight: 800 !important;
            color: #111111;
            margin-bottom: 6px;
        }

        .visionary-designation {
            font-size: 0.88rem;
            color: var(--brand);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 0;
        }

        /* Sliding Bio Overlay */
        .visionary-bio-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, rgba(15, 23, 42, 0.95) 0%, #090d16 100%);
            padding: 40px 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            opacity: 0;
            transform: translateY(100%);
            transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
            z-index: 20;
            text-align: left;
        }

        .visionary-card:hover .visionary-bio-overlay {
            opacity: 1;
            transform: translateY(0);
        }

        .visionary-bio-text {
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.92rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .visionary-bio-highlights {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 25px;
        }

        .visionary-highlight-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #ffffff;
            font-size: 0.88rem;
            font-weight: 500;
        }

        .visionary-highlight-item i {
            color: var(--brand-light, #10b981);
        }

        .btn-visionary-contact {
            background: var(--brand) !important;
            color: #ffffff !important;
            font-weight: 700;
            border: none;
            border-radius: 12px;
            padding: 12px 20px;
            text-align: center;
            text-transform: uppercase;
            font-size: 0.82rem;
            letter-spacing: 0.05em;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }

        .btn-visionary-contact:hover {
            background: #ffffff !important;
            color: var(--brand) !important;
        }
    </style>
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

        <!-- Slide 1: Campus / General -->
        <div class="swiper-slide">
          <div class="banner-fullbg-slide">
            <div class="banner-bg-img" style="background-image: url('{{ asset('user/assets/images/thumbs/banner-campus.png') }}');"></div>
            <div class="banner-overlay"></div>
            <div class="container max-w-1360-px position-relative banner-content-container">
              <div class="banner-content-wrap">
                <div class="banner-badge-pill" data-aos="fade-down" data-aos-duration="700">
                  <span class="banner-badge-icon-circle"><i class="ph-fill ph-star-four"></i></span>
                  <span class="banner-badge-text">CBSE Affiliated &middot; Aff No. 2930027</span>
                </div>
                <h1 class="banner-hero-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
                  Excellence in <span class="banner-title-highlight">CBSE Education</span><br>Since 1997
                </h1>
                <p class="banner-hero-desc" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                  Maruthi Senior Secondary School is a premier CBSE-affiliated institution in Puducherry, committed to holistic development and academic excellence from Pre-KG to Class 12.
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

        <!-- Slide 2: Sports -->
        <div class="swiper-slide">
          <div class="banner-fullbg-slide">
            <div class="banner-bg-img" style="background-image: url('{{ asset('user/assets/images/thumbs/banner-sports.png') }}');"></div>
            <div class="banner-overlay banner-overlay-gold"></div>
            <div class="container max-w-1360-px position-relative banner-content-container">
              <div class="banner-content-wrap">
                <div class="banner-badge-pill" data-aos="fade-down" data-aos-duration="700">
                  <span class="banner-badge-icon-circle"><i class="ph-fill ph-trophy"></i></span>
                  <span class="banner-badge-text">Holistic Development</span>
                </div>
                <h1 class="banner-hero-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
                  Nurturing Talent <span class="banner-title-highlight">Beyond Academics</span>
                </h1>
                <p class="banner-hero-desc" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                  From sports arenas to cultural stages, we encourage students to discover their passions and excel in every field of their choice.
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

        <!-- Slide 3: Smart Classrooms -->
        <div class="swiper-slide">
          <div class="banner-fullbg-slide">
            <div class="banner-bg-img" style="background-image: url('{{ asset('user/assets/images/thumbs/banner-classroom.png') }}');"></div>
            <div class="banner-overlay banner-overlay-teal"></div>
            <div class="container max-w-1360-px position-relative banner-content-container">
              <div class="banner-content-wrap">
                <div class="banner-badge-pill" data-aos="fade-down" data-aos-duration="700">
                  <span class="banner-badge-icon-circle"><i class="ph-fill ph-chalkboard"></i></span>
                  <span class="banner-badge-text">Modern Infrastructure</span>
                </div>
                <h1 class="banner-hero-title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
                  State-of-the-Art <span class="banner-title-highlight">Smart Classrooms</span>
                </h1>
                <p class="banner-hero-desc" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                  We provide interactive learning environments equipped with modern technology to ensure our students stay ahead in a rapidly evolving digital world.
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
        <!-- Card 1: CBSE Curriculum -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
          <div class="feature-overlap-card card-gray">
            <div>
              <div class="feature-icon-circle">
                <i class="ph-fill ph-certificate"></i>
              </div>
              <h4 class="h5 fw-bold mb-3">Academic Excellence</h4>
              <p class="mb-0" style="font-size: 0.95rem;">
                Offering a robust CBSE-affiliated curriculum from Pre-KG to Class 12, focusing on conceptual clarity, creativity, and student success.
              </p>
            </div>
            <div>
              <a href="{{ route('curriculum') }}" class="feature-card-btn" style="color: var(--brand) !important;">
                Explore Curriculum <i class="ph-bold ph-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 2: Holistic Growth -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          <div class="feature-overlap-card card-gray">
            <div>
              <div class="feature-icon-circle">
                <i class="ph-fill ph-trophy"></i>
              </div>
              <h4 class="h5 fw-bold mb-3">Beyond Academics</h4>
              <p class="mb-0" style="font-size: 0.95rem;">
                Nurturing multi-faceted talents in state-of-the-art sports arenas, music, dance, visual arts, and vibrant cultural activities.
              </p>
            </div>
            <div>
              <a href="{{ route('gallery') }}" class="feature-card-btn" style="color: var(--brand) !important;">
                View Student Life <i class="ph-bold ph-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 3: Modern Labs & Facilities -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
          <div class="feature-overlap-card card-gray">
            <div>
              <div class="feature-icon-circle">
                <i class="ph-fill ph-chalkboard"></i>
              </div>
              <h4 class="h5 text-white fw-bold mb-3">Expert Guidance</h4>
              <p class="text-white opacity-90 mb-0" style="font-size: 0.95rem;">
                Highly qualified and dedicated teachers mentoring students in tech-enabled smart classrooms and advanced science/computer labs.
              </p>
            </div>
            <div>
              <a href="{{ route('about') }}" class="feature-card-btn" style="color: var(--brand-light) !important;">
                Meet Our Faculty <i class="ph-bold ph-arrow-right"></i>
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
                <i class="ph-fill ph-star-four"></i>
              </span>
              <span class="fw-bold text-main-600" style="font-size: 0.85rem; letter-spacing: 0.05em; text-transform: uppercase;">
                Welcome to Our Campus
              </span>
            </div>
            
            <h3 class="fw-semibold text-neutral-950 mb-4 display-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
              A School That Invests in Every Child's Future
            </h3>
            
            <p class="text-neutral-400 mb-5" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" style="font-size: 1.05rem; line-height: 1.7;">
              At Maruthi Senior Secondary School, we believe every student has unique potential. Our environment is designed to bring out the best in each child through quality education, modern facilities, and holistic development.
            </p>

            <div class="row g-4 mb-5" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
              <!-- Feature 1 -->
              <div class="col-sm-6 d-flex align-items-start gap-3">
                <div class="class-stage-icon m-0 flex-shrink-0" style="width: 48px; height: 48px; font-size: 20px;">
                  <i class="ph-fill ph-certificate"></i>
                </div>
                <div>
                  <h5 class="fw-bold text-neutral-900 mb-1" style="font-size: 1.05rem;">CBSE Curriculum</h5>
                  <p class="text-muted mb-0" style="font-size: 0.88rem;">Robust and structured education model.</p>
                </div>
              </div>

              <!-- Feature 2 -->
              <div class="col-sm-6 d-flex align-items-start gap-3">
                <div class="class-stage-icon m-0 flex-shrink-0" style="width: 48px; height: 48px; font-size: 20px; background-color: var(--brand-pale); color: var(--brand);">
                  <i class="ph-fill ph-chalkboard"></i>
                </div>
                <div>
                  <h5 class="fw-bold text-neutral-900 mb-1" style="font-size: 1.05rem;">Smart Classrooms</h5>
                  <p class="text-muted mb-0" style="font-size: 0.88rem;">Interactive digital boards for quick learning.</p>
                </div>
              </div>

              <!-- Feature 3 -->
              <div class="col-sm-6 d-flex align-items-start gap-3">
                <div class="class-stage-icon m-0 flex-shrink-0" style="width: 48px; height: 48px; font-size: 20px;">
                  <i class="ph-fill ph-flask"></i>
                </div>
                <div>
                  <h5 class="fw-bold text-neutral-900 mb-1" style="font-size: 1.05rem;">Modern Science Labs</h5>
                  <p class="text-muted mb-0" style="font-size: 0.88rem;">Well-equipped Physics, Chemistry & Bio labs.</p>
                </div>
              </div>

              <!-- Feature 4 -->
              <div class="col-sm-6 d-flex align-items-start gap-3">
                <div class="class-stage-icon m-0 flex-shrink-0" style="width: 48px; height: 48px; font-size: 20px;">
                  <i class="ph-fill ph-soccer-ball"></i>
                </div>
                <div>
                  <h5 class="fw-bold text-neutral-900 mb-1" style="font-size: 1.05rem;">Co-Curricular Activities</h5>
                  <p class="text-muted mb-0" style="font-size: 0.88rem;">Encouraging sports, arts and coding.</p>
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
                  <span class="text-muted text-uppercase fw-semibold" style="font-size: 0.72rem; letter-spacing: 0.05em;">Of Academic Excellence</span>
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
        <div class="col-xl-3 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="600">
          <div class="stat-card">
            <div class="stat-card-icon">
              <i class="ph-fill ph-trophy"></i>
            </div>
            <div class="stat-card-body">
              <h2 class="counter">25+</h2>
              <p>Years of Academic Excellence</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="800">
          <div class="stat-card">
            <div class="stat-card-icon">
              <i class="ph-fill ph-users-four"></i>
            </div>
            <div class="stat-card-body">
              <h2 class="counter">20K+</h2>
              <p>Proud Alumni Worldwide</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000">
          <div class="stat-card">
            <div class="stat-card-icon">
              <i class="ph-fill ph-chalkboard-teacher"></i>
            </div>
            <div class="stat-card-body">
              <h2 class="counter">50+</h2>
              <p>Dedicated & Experienced Faculty</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200">
          <div class="stat-card">
            <div class="stat-card-icon">
              <i class="ph-fill ph-certificate"></i>
            </div>
            <div class="stat-card-body">
              <h2>Pre-KG–12</h2>
              <p>Classes Offered Under CBSE Curriculum</p>
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
            Our Programs & Facilities
          </span>
        </div>
        <h3 class="fw-semibold text-neutral-950 tw-mb-6" data-aos="fade-up" data-aos-duration="800"
          data-aos-delay="200">
          Academic Programs & Facilities
        </h3>
        <p class="fw-normal tw-text-4 text-neutral-400" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
          State-of-the-art facilities and comprehensive programs designed to<br> nurture academic excellence and
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
                  <h4 class="program-card-title">Science Labs</h4>
                  <p class="program-card-desc">
                    State-of-the-art Physics, Chemistry, and Biology laboratories equipped with modern tools to foster scientific inquiry and learning.
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
                  <h4 class="program-card-title">Computer Labs</h4>
                  <p class="program-card-desc">
                    High-speed computing systems and internet access, helping students develop advanced digital skills and tech concepts.
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
                    Equipped with interactive whiteboards and digital projectors to make learning an engaging visual experience.
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

          <!-- Slide 4: Sports Arena -->
          <div class="swiper-slide">
            <div class="program-slider-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="250">
              <div class="program-card-bg-img" style="background-image: url('{{ asset('user/assets/images/thumbs/school-annual-day.png') }}');"></div>
              <div class="program-card-overlay"></div>
              <div class="program-card-content">
                <div>
                  <div class="program-card-icon">
                    <i class="ph-fill ph-soccer-ball"></i>
                  </div>
                  <h4 class="program-card-title">Sports Arena</h4>
                  <p class="program-card-desc">
                    Expansive fields and facilities for athletics, soccer, basketball, and indoor gaming to build physical health and teamwork.
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

          <!-- Slide 5: Cultural Activities -->
          <div class="swiper-slide">
            <div class="program-slider-card" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
              <div class="program-card-bg-img" style="background-image: url('{{ asset('user/assets/images/thumbs/school-hero-banner.png') }}');"></div>
              <div class="program-card-overlay"></div>
              <div class="program-card-content">
                <div>
                  <div class="program-card-icon">
                    <i class="ph-fill ph-palette"></i>
                  </div>
                  <h4 class="program-card-title">Cultural Arts</h4>
                  <p class="program-card-desc">
                    Dedicated music, art, and dance programs to help students explore creative boundaries and perform at various events.
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
              <div class="program-card-bg-img" style="background-image: url('{{ asset('user/assets/images/thumbs/school-hero-banner.png') }}');"></div>
              <div class="program-card-overlay"></div>
              <div class="program-card-content">
                <div>
                  <div class="program-card-icon">
                    <i class="ph-fill ph-book-open"></i>
                  </div>
                  <h4 class="program-card-title">Modern Library</h4>
                  <p class="program-card-desc">
                    A quiet space with a vast collection of books, references, and digital resources to inspire a love for reading.
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
            <p class="csc-desc">Activity-led play learning to build motor skills, creativity, and social confidence.</p>
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
            <p class="csc-desc">Foundational literacy, numeracy, environmental sciences, and holistic development.</p>
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
            <p class="csc-desc">Advanced logic in sciences, maths, AI & Robotics with language depth and arts.</p>
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
            <p class="csc-desc">Intensive board exam prep with core stream choices, computer science & sports.</p>
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
            <p class="csc-desc">Specialized Science, Commerce & Humanities streams with CBSE board excellence.</p>
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



  <!-- ====================== online course section start ========================= -->






  <!-- ====================== online course section end ========================= -->





    <!-- ===================== popular categories section start ========================= -->
  <section class="leadership-section bg-light py-100 position-relative z-2 overflow-hidden bg-dot-grid">
    <div class="container position-relative z-1">
      <!-- Section Header -->
      <div class="text-center tw-mb-15">
        <div class="tw-py-1 tw-ps-105 tw-pe-4 bg-white rounded-pill d-inline-flex align-items-center tw-gap-3 tw-mb-4"
          data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
          <span class="tw-w-6 tw-h-6 border-main-100 border bg-white rounded-circle text-main-600 d-flex align-items-center justify-content-center tw-text-305">
            <i class="ph-fill ph-star-four"></i>
          </span>
          <span class="fw-bold text-main-600" style="font-size: 0.85rem; letter-spacing: 0.05em; text-transform: uppercase;">Our Leadership</span>
        </div>
        <h3 class="fw-semibold text-neutral-950" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          Meet the Visionaries Behind Maruthi
        </h3>
        <p class="text-neutral-400 max-w-600-px mx-auto mt-2" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="font-size: 1.05rem;">
          Our dedicated leadership team brings decades of academic excellence, administrative experience, and strategic vision to guide Maruthi School.
        </p>
      </div>

      <!-- Visionary Cards Grid -->
      <div class="row g-4 justify-content-center">
        <!-- Visionary 1: Principal -->
        <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
          <div class="visionary-card">
            <div class="visionary-photo-wrap">
              <div class="visionary-role-badge">
                <i class="ph-fill ph-graduation-cap"></i> Principal
              </div>
              <img src="{{ asset('user/assets/images/thumbs/principal.png') }}" alt="Dr. S. Murugesan" class="visionary-photo">
            </div>
            
            <div class="visionary-info-panel">
              <h4 class="visionary-name">Dr. S. Murugesan</h4>
              <p class="visionary-designation">Principal</p>
            </div>

            <!-- Sliding Bio Overlay on Hover -->
            <div class="visionary-bio-overlay">
              <div>
                <h4 class="text-white fw-bold mb-2">Dr. S. Murugesan</h4>
                <p class="text-success mb-3 fw-medium" style="font-size: 0.85rem; color: var(--brand-light, #10b981) !important;">Principal, M.Ed., Ph.D. in Education</p>
                <p class="visionary-bio-text">
                  With over 28 years of dedicated service in education, Dr. S. Murugesan has been the guiding force of Maruthi Senior Secondary School, transforming it into one of Puducherry's most respected CBSE institutions.
                </p>
                
                <div class="visionary-bio-highlights">
                  <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> 28+ Years Experience</div>
                  <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> State Award Recipient</div>
                  <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> CBSE Resource Person</div>
                </div>
              </div>
              
              <a href="{{ route('contact') }}" class="btn-visionary-contact">
                Contact Principal <i class="ph-bold ph-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Visionary 2: Vice Principal -->
        <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          <div class="visionary-card">
            <div class="visionary-photo-wrap">
              <div class="visionary-role-badge">
                <i class="ph-fill ph-book-open"></i> Vice Principal
              </div>
              <img src="{{ asset('user/assets/images/thumbs/vice-principal.png') }}" alt="Mrs. R. Kavitha" class="visionary-photo">
            </div>
            
            <div class="visionary-info-panel">
              <h4 class="visionary-name">Mrs. R. Kavitha</h4>
              <p class="visionary-designation">Vice Principal</p>
            </div>

            <!-- Sliding Bio Overlay on Hover -->
            <div class="visionary-bio-overlay">
              <div>
                <h4 class="text-white fw-bold mb-2">Mrs. R. Kavitha</h4>
                <p class="text-success mb-3 fw-medium" style="font-size: 0.85rem; color: var(--brand-light, #10b981) !important;">Vice Principal, M.Sc., B.Ed.</p>
                <p class="visionary-bio-text">
                  Mrs. R. Kavitha brings 20 years of administrative excellence to Maruthi School. She passionately oversees academic planning, student welfare programs, and faculty development.
                </p>
                
                <div class="visionary-bio-highlights">
                  <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> 20+ Years Experience</div>
                  <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Academic Excellence Award</div>
                  <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Child Development Expert</div>
                </div>
              </div>
              
              <a href="{{ route('contact') }}" class="btn-visionary-contact">
                Contact Vice Principal <i class="ph-bold ph-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Visionary 3: Co-Founder -->
        <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
          <div class="visionary-card">
            <div class="visionary-photo-wrap">
              <div class="visionary-role-badge">
                <i class="ph-fill ph-crown"></i> Co-Founder
              </div>
              <img src="{{ asset('user/assets/images/thumbs/co-founder.png') }}" alt="Shri. V. Annamalai" class="visionary-photo">
            </div>
            
            <div class="visionary-info-panel">
              <h4 class="visionary-name">Shri. V. Annamalai</h4>
              <p class="visionary-designation">Co-Founder</p>
            </div>

            <!-- Sliding Bio Overlay on Hover -->
            <div class="visionary-bio-overlay">
              <div>
                <h4 class="text-white fw-bold mb-2">Shri. V. Annamalai</h4>
                <p class="text-success mb-3 fw-medium" style="font-size: 0.85rem; color: var(--brand-light, #10b981) !important;">Co-Founder & Correspondent</p>
                <p class="visionary-bio-text">
                  Shri. V. Annamalai co-founded Maruthi School in 1997 with a singular vision: to bring world-class CBSE education to the families of Puducherry and guide community welfare programs.
                </p>
                
                <div class="visionary-bio-highlights">
                  <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Co-Founded in 1997</div>
                  <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> 25+ Years Leadership</div>
                  <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Educational Philanthropist</div>
                </div>
              </div>
              
              <a href="{{ route('about') }}" class="btn-visionary-contact">
                Our Story <i class="ph-bold ph-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- ===================== popular categories section end ========================= -->





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
                      <img src="user/assets/images/thumbs/school-hero-banner.png" alt="Annual Day Event"
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
                    <a href="javascript:void(0)"
                      class="fw-semibold tw-text-5 text-neutral-500 tw-mb-6 hover-text-main-600 tw-duration-300">
                      Annual Day Celebrations €“ A Grand Cultural Extravaganza
                    </a>
                    <a href="course-details.html"
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
                      <img src="user/assets/images/thumbs/school-science-lab.png" alt="Science Day Competition"
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
                    <a href="javascript:void(0)"
                      class="fw-semibold tw-text-5 text-neutral-500 tw-mb-6 hover-text-main-600 tw-duration-300">
                      Students Excel at National Science Day Competition
                    </a>
                    <a href="course-details.html"
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
                      <img src="user/assets/images/thumbs/school-annual-day.png" alt="Cultural Exchange Program"
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
                    <a href="javascript:void(0)"
                      class="fw-semibold tw-text-5 text-neutral-500 tw-mb-6 hover-text-main-600 tw-duration-300">
                      International Cultural Exchange €“ French School Visit
                    </a>
                    <a href="course-details.html"
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
                      <img src="user/assets/images/thumbs/blog-news-two-img2.png" alt="img"
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
                    <a href="javascript:void(0)"
                      class="fw-semibold tw-text-5 text-neutral-500 tw-mb-6 hover-text-main-600 tw-duration-300">
                      How to Avoid the Biggest College Admission Mistakes
                    </a>
                    <a href="course-details.html"
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
        <a href="gallery.html"
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
  <section class="admissions-cta-redesign position-relative overflow-hidden bg-lightgreen">
    <!-- Floating Decorative Icons -->
    

    <div class="container position-relative z-1">
      <div class="row align-items-center gy-4">
        <div class="col-lg-7 text-lg-start text-center" data-aos="fade-right" data-aos-duration="1000">
          <div class="cta-pill-badge mb-3 d-inline-flex align-items-center gap-2">
            <span class="cta-pulse-dot"></span>
            <span class=" fw-medium">Admissions Open 2026-27</span>
          </div>
          <h2 class="cta-title  fw-bold mb-4">
            Start Your Child's Journey <br class="d-none d-md-block"> to <span class="text-highlight">Excellence</span> Today
          </h2>
          <p class="cta-description opacity-90 mb-0">
            Join Puducherry's leading CBSE school. We provide a nurturing environment, <br class="d-none d-lg-block">
            state-of-the-art facilities, and a legacy of academic success.
          </p>
        </div>
        <div class="col-lg-5 text-lg-end text-center" data-aos="fade-left" data-aos-duration="1000">
          <div class="cta-btn-group d-flex flex-column flex-sm-row justify-content-lg-end gap-3 align-items-center">
            <a href="contact-us.html" class="btn btn-apply-now rounded-pill px-5 py-3 fw-bold">
              Apply For Admission <i class="ph-bold ph-arrow-right ms-2"></i>
            </a>
            <a href="tel:+919442399777" class="btn btn-call-us rounded-pill px-4 py-3 fw-bold border-black  border-2">
              <i class="ph-fill ph-phone me-2"></i> Inquiry
            </a>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Background Accents -->
    <div class="cta-accent-circle"></div>
  </section>
  <!-- ========================= courses section end =========================== -->

 {{-- Footer starts --}}
      @include('user.layouts.footer')
  {{-- Footer ends --}}
  


    @include('user.layouts.script')
</body>
</html>
