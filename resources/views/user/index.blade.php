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

    <!-- SITE TITLE -->
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

        <!-- Slide 1: Campus / General -->
        <div class="swiper-slide">
          <div class="banner-fullbg-slide">
            <div class="banner-bg-img" style="background-image: url('{{ asset('user/assets/images/thumbs/banner-campus.png') }}');"></div>
            <div class="banner-overlay"></div>
            <div class="banner-float-icons" aria-hidden="true">
              <span class="bfi bfi-1"><i class="ph-fill ph-book-open"></i></span>
              <span class="bfi bfi-2"><i class="ph-fill ph-graduation-cap"></i></span>
              <span class="bfi bfi-3"><i class="ph-fill ph-certificate"></i></span>
              <span class="bfi bfi-4"><i class="ph-fill ph-pencil-simple"></i></span>
            </div>
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
                <div class="banner-stats-row" data-aos="fade-up" data-aos-duration="800" data-aos-delay="420">
                  <div class="banner-stat-chip"><span class="bsc-icon"><i class="ph-fill ph-users-three"></i></span><span class="bsc-text">20K+ Alumni</span></div>
                  <div class="banner-stat-chip"><span class="bsc-icon"><i class="ph-fill ph-chalkboard-teacher"></i></span><span class="bsc-text">50+ Faculty</span></div>
                  <div class="banner-stat-chip"><span class="bsc-icon"><i class="ph-fill ph-trophy"></i></span><span class="bsc-text">25+ Years</span></div>
                </div>
                <div class="d-flex align-items-center justify-content-center gap-3 flex-wrap" data-aos="fade-up" data-aos-duration="800" data-aos-delay="540">
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
            <div class="banner-float-icons" aria-hidden="true">
              <span class="bfi bfi-1"><i class="ph-fill ph-soccer-ball"></i></span>
              <span class="bfi bfi-2"><i class="ph-fill ph-trophy"></i></span>
              <span class="bfi bfi-3"><i class="ph-fill ph-music-notes"></i></span>
              <span class="bfi bfi-4"><i class="ph-fill ph-medal"></i></span>
            </div>
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
                <div class="banner-stats-row" data-aos="fade-up" data-aos-duration="800" data-aos-delay="420">
                  <div class="banner-stat-chip"><span class="bsc-icon"><i class="ph-fill ph-soccer-ball"></i></span><span class="bsc-text">Sports Arena</span></div>
                  <div class="banner-stat-chip"><span class="bsc-icon"><i class="ph-fill ph-music-notes"></i></span><span class="bsc-text">Cultural Events</span></div>
                  <div class="banner-stat-chip"><span class="bsc-icon"><i class="ph-fill ph-medal"></i></span><span class="bsc-text">State Champions</span></div>
                </div>
                <div class="d-flex align-items-center justify-content-center gap-3 flex-wrap" data-aos="fade-up" data-aos-duration="800" data-aos-delay="540">
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
            <div class="banner-float-icons" aria-hidden="true">
              <span class="bfi bfi-1"><i class="ph-fill ph-desktop"></i></span>
              <span class="bfi bfi-2"><i class="ph-fill ph-chalkboard"></i></span>
              <span class="bfi bfi-3"><i class="ph-fill ph-flask"></i></span>
              <span class="bfi bfi-4"><i class="ph-fill ph-atom"></i></span>
            </div>
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
                <div class="banner-stats-row" data-aos="fade-up" data-aos-duration="800" data-aos-delay="420">
                  <div class="banner-stat-chip"><span class="bsc-icon"><i class="ph-fill ph-desktop"></i></span><span class="bsc-text">Smart Boards</span></div>
                  <div class="banner-stat-chip"><span class="bsc-icon"><i class="ph-fill ph-wifi-high"></i></span><span class="bsc-text">Digital Labs</span></div>
                  <div class="banner-stat-chip"><span class="bsc-icon"><i class="ph-fill ph-flask"></i></span><span class="bsc-text">Science Labs</span></div>
                </div>
                <div class="d-flex align-items-center justify-content-center gap-3 flex-wrap" data-aos="fade-up" data-aos-duration="800" data-aos-delay="540">
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

  <!-- ======================== Marquee section start =========================== -->
  <div class="marquee ">
    <div class="marquee_left d-flex align-items-center overflow-hidden">
      <span class="text-neutral-500 tw-text-88-px text-stroke">Admissions Open -</span>
      <span class="text-neutral-500 tw-text-88-px text-stroke">Pre-KG to Class 12 -</span>
      <span class="text-neutral-500 tw-text-88-px text-stroke">CBSE Affiliated - </span>
      <span class="text-neutral-500 tw-text-88-px text-stroke">25+ Years of Excellence -</span>
    </div>
  </div>
  <!-- ======================== Marquee section end =========================== -->

  <!-- =================== brand section start =================== -->
  <!-- ============================== about eduly section start ============================ -->
  <section class="pb-100 pt-100">
    <div class="mb-100">
      <div class="container">
        <div class="position-relative">

          <div class="row gy-4">
             <div class="col-xl-6" data-aos="zoom-in" data-aos-duration="1500">
              <!-- <span class="d-flex justify-content-center">
                <img src="user/assets/images/thumbs/school-classroom.jpg" alt="Modern Smart Classroom at Maruthi School"
                  class="w-100 tw-rounded-xl" style="border-radius:18px; box-shadow:0 16px 48px rgba(0,0,0,0.12);">
              </span> -->


                <div class="position-relative hero-img-wrap">
            <span class="d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-duration="1500">
              <img src="{{ asset('user/assets/images/thumbs/school-classroom.jpg') }}"
                alt="Maruthi Senior Secondary School Campus - Students in Garden" class="w-100 hero-main-img">
            </span>
            <!-- Floating badge cards on hero image -->
            <div class="hero-badge hero-badge-cbse" data-aos="fade-left" data-aos-duration="800" data-aos-delay="600">
              <span class="hero-badge-icon"><i class="ph-fill ph-certificate"></i></span>
              <div>
                <span class="hero-badge-title">CBSE Affiliated</span>
                <span class="hero-badge-sub">Aff No. 2930027</span>
              </div>
            </div>
            
          </div>
            </div>
            <div class="col-xl-6">
              <div
                class="tw-py-1 tw-ps-105 tw-pe-4 bg-main-50 rounded-pill d-inline-flex align-items-center tw-gap-3 tw-mb-4"
                data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                <span
                  class="tw-w-6 tw-h-6 border-main-100 border bg-white rounded-circle text-main-600 d-flex align-items-center justify-content-center tw-text-305">
                  <i class="ph-fill ph-star-four"></i>
                </span>
                <span class="fw-normal tw-text-4 text-main-600">
                  Why Choose Us
                </span>
              </div>
              <h3 class="fw-semibold text-neutral-950 tw-mb-6" data-aos="fade-up" data-aos-duration="800"
                data-aos-delay="200">
                A School That Invests in Every Child
              </h3>
              <p class="fw-normal tw-text-4 text-neutral-400 tw-mb-4" data-aos="fade-up" data-aos-duration="800"
                data-aos-delay="300">
                At Maruthi Senior Secondary School, we believe every student has unique potential. Our environment is
                designed to bring out the best in each child through quality education, modern facilities, and holistic
                development.
              </p>
              <div class="d-flex align-items-center tw-gap-4 animation-item flex-sm-nowrap flex-wrap tw-mb-10"
                data-aos="fade-up" data-aos-duration="800" data-aos-delay="350">

                <div>
                  <h2 class="h5  fw-semibold text-neutral-500 tw-mb-3">
                    Experienced Faculty
                  </h2>
                  <p class="fw-normal tw-text-405 text-neutral-400">
                    Highly experienced and dedicated teachers focused on academic excellence and student growth across
                    all subjects.
                  </p>
                </div>
              </div>
              <div class="d-flex align-items-center tw-gap-5 flex-wrap tw-mb-8" data-aos="fade-up"
                data-aos-duration="800" data-aos-delay="400">
                <div class="d-flex flex-column flex-lg-row tw-gap-5 ">
                  <div class="d-flex align-items-center tw-gap-4">
                    <span
                      class="tw-w-16 tw-h-16 bg-main-50 text-main-600 rounded-circle d-flex align-items-center justify-content-center tw-text-3xl flex-shrink-0 shadow-sm border border-main-100">
                      <i class="ph-fill ph-certificate"></i>
                    </span>
                    <span class="fw-bold tw-text-lg text-neutral-800">
                      CBSE Affiliated Curriculum
                    </span>
                  </div>
                  <div class="d-flex align-items-center tw-gap-4">
                    <span
                      class="tw-w-16 tw-h-16 bg-main-three-50 text-main-three-600 rounded-circle d-flex align-items-center justify-content-center tw-text-3xl flex-shrink-0 shadow-sm border border-main-three-100">
                      <i class="ph-fill ph-chalkboard"></i>
                    </span>
                    <span class="fw-bold tw-text-lg text-neutral-800">
                      Modern Smart Classrooms
                    </span>
                  </div>
                </div>
                <div class="d-flex flex-column flex-lg-row tw-gap-5">
                  <div class="d-flex align-items-center tw-gap-4">
                    <span
                      class="tw-w-16 tw-h-16 bg-main-two-50 text-main-two-600 rounded-circle d-flex align-items-center justify-content-center tw-text-3xl flex-shrink-0 shadow-sm border border-main-two-100">
                      <i class="ph-fill ph-flask"></i>
                    </span>
                    <span class="fw-bold tw-text-lg text-neutral-800">
                      Science & Computer Labs
                    </span>
                  </div>
                  <div class="d-flex align-items-center tw-gap-4">
                    <span
                      class="tw-w-16 tw-h-16 bg-warning-50 text-warning-600 rounded-circle d-flex align-items-center justify-content-center tw-text-3xl flex-shrink-0 shadow-sm border border-warning-100">
                      <i class="ph-fill ph-soccer-ball"></i>
                    </span>
                    <span class="fw-bold tw-text-lg text-neutral-800">
                      Sports & Cultural Activities
                    </span>
                  </div>
                </div>
              </div>
              <a href="{{ route('about') }}" class="btn btn-main" data-aos="fade-up" data-aos-duration="1200">
                More About Us <i class="ph-bold ph-arrow-right ms-2"></i>
              </a>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============================== about eduly section end ============================ -->
  <!-- =================== brand section end =================== -->

  <!-- ====================== features section start ======================= -->
  <section class="bg-main-50 pt-100 pb-140 position-relative">
    
  <!-- icons -->

  

    <div class="container">
      <div class="text-center tw-mb-10">
        <div class="tw-py-1 tw-ps-105 tw-pe-4 bg-white rounded-pill d-inline-flex align-items-center tw-gap-3 tw-mb-4"
          data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
          <span
            class="tw-w-6 tw-h-6 border-main-100 border bg-white rounded-circle text-main-600 d-flex align-items-center justify-content-center tw-text-305">
            <i class="ph-fill ph-star-four"></i>
          </span>
          <span class="fw-normal tw-text-4 text-main-600">
            Our Programs
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

      <div class="swiper popular-category-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide group">
            <div
              class="tw-py-11 tw-px-5 bg-white  group tw-duration-300 text-center animation-item group-item border border-neutral-50"
              data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
              <span
                class="tw-w-84-px tw-h-84-px border-main-50 border rounded-circle mx-auto d-flex align-items-center justify-content-center tw-mb-4 text-main-600 group-hover-bg-main-600 tw-duration-300 bg-red-light tw-text-48-px">
                <i class="ph ph-flask group-hover-item-text-invert-white animate__bounce"></i>
              </span>
              <span class="fw-medium tw-text-4 text-neutral-500 max-w-110-px">
                Science Labs
              </span>
            </div>
          </div>
          <div class="swiper-slide group">
            <div
              class="tw-py-11 tw-px-5 bg-white  group tw-duration-300 text-center animation-item group-item border border-neutral-50"
              data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
              <span
                class="tw-w-84-px tw-h-84-px border-main-50 border rounded-circle mx-auto d-flex align-items-center justify-content-center tw-mb-4 text-main-600 group-hover-bg-main-600 tw-duration-300 bg-purple-light tw-text-48-px">
                <i class="ph ph-desktop group-hover-item-text-invert-white animate__bounce"></i>
              </span>
              <span class="fw-medium tw-text-4 text-neutral-500 max-w-110-px">
                Computer Labs
              </span>
            </div>
          </div>
          <div class="swiper-slide group">
            <div
              class="tw-py-11 tw-px-5 bg-white  group tw-duration-300 text-center animation-item group-item border border-neutral-50"
              data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
              <span
                class="tw-w-84-px tw-h-84-px border-main-50 border rounded-circle mx-auto d-flex align-items-center justify-content-center tw-mb-4 text-main-600 group-hover-bg-main-600 tw-duration-300 bg-warning-light tw-text-48-px">
                <i class="ph ph-chalkboard-teacher group-hover-item-text-invert-white animate__bounce"></i>
              </span>
              <span class="fw-medium tw-text-4 text-neutral-500 max-w-110-px">
                Smart Classrooms
              </span>
            </div>
          </div>
          <div class="swiper-slide group">
            <div
              class="tw-py-11 tw-px-5 bg-white  group tw-duration-300 text-center animation-item group-item border border-neutral-50"
              data-aos="fade-up" data-aos-duration="800" data-aos-delay="250">
              <span
                class="tw-w-84-px tw-h-84-px border-main-50 border rounded-circle mx-auto d-flex align-items-center justify-content-center tw-mb-4 text-main-600 group-hover-bg-main-600 tw-duration-300 bg-main-50 tw-text-48-px">
                <i class="ph ph-soccer-ball group-hover-item-text-invert-white animate__bounce"></i>
              </span>
              <span class="fw-medium tw-text-4 text-neutral-500 max-w-110-px">
                Sports Arena
              </span>
            </div>
          </div>
          <div class="swiper-slide group">
            <div
              class="tw-py-11 tw-px-5 bg-white  group tw-duration-300 text-center animation-item group-item border border-neutral-50"
              data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
              <span
                class="tw-w-84-px tw-h-84-px border-main-50 border rounded-circle mx-auto d-flex align-items-center justify-content-center tw-mb-4 text-main-600 group-hover-bg-main-600 tw-duration-300 bg-cyan-light tw-text-48-px">
                <i class="ph ph-palette group-hover-item-text-invert-white animate__bounce"></i>
              </span>
              <span class="fw-medium tw-text-4 text-neutral-500 max-w-110-px">
                Cultural Activities
              </span>
            </div>
          </div>
          <div class="swiper-slide group">
            <div
              class="tw-py-11 tw-px-5 bg-white  group tw-duration-300 text-center animation-item group-item border border-neutral-50"
              data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
              <span
                class="tw-w-84-px tw-h-84-px border-main-50 border rounded-circle mx-auto d-flex align-items-center justify-content-center tw-mb-4 text-main-600 group-hover-bg-main-600 tw-duration-300 bg-purple-light tw-text-48-px">
                <i class="ph ph-book-open group-hover-item-text-invert-white animate__bounce"></i>
              </span>
              <span class="fw-medium tw-text-4 text-neutral-500 max-w-110-px">
                Library
              </span>
            </div>
          </div>
        </div>
        <div
          class="popular-category-pagination position-relative tw-mt-8 style-circle-border d-flex justify-content-center">
        </div>
      </div>
    </div>
  </section>
  <!-- ====================== features section end ======================= -->

  <!-- ============================= popular categories section start ============================= -->
  <section class="tw-pt-15 mt-3 pb-0">
    <div class="container">
      <div class="text-center tw-mb-10">
        <div class="tw-py-1 tw-ps-105 tw-pe-4 bg-main-50 rounded-pill d-inline-flex align-items-center tw-gap-3 tw-mb-4"
          data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
          <span
            class="tw-w-6 tw-h-6 border-main-100 border bg-white rounded-circle text-main-600 d-flex align-items-center justify-content-center tw-text-305">
            <i class="ph-fill ph-star-four"></i>
          </span>
          <span class="fw-normal tw-text-4 text-main-600">
            Classes Offered
          </span>
        </div>
        <h3 class="fw-semibold text-neutral-950 tw-mb-6" data-aos="fade-up" data-aos-duration="800"
          data-aos-delay="200">
          Classes We Offer at Maruthi
        </h3>
        <p class="fw-normal tw-text-4 text-neutral-400" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
          From Pre-KG to Class 12, we provide a comprehensive CBSE curriculum<br> with dedicated attention to every
          student's growth and development.
        </p>
      </div>

    </div>
  </section>
  <!-- ============================= popular categories section end ============================= -->



  <!-- ======================== Promotional banner section start ====================== -->
  <section class="tw-pt-15 mt-5 pb-100">
    <div class="container max-w-1360-px">
      <div class="row gy-4">
        <div class="col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
          <div class="position-relative z-1 tw-py-12 tw-px-9 tw-rounded-3xl overflow-hidden h-100 bg-main-600">
            <div class="position-absolute start-0 top-0 w-100 h-100 z-n1">
              <img src="user/assets/images/thumbs/promo-banner-bg.png" alt="BG" class="w-100 h-100 object-fit-cover">
            </div>
            <div class="">
              <div
                class="tw-py-1 tw-ps-105 tw-pe-4 bg-white-22 rounded-pill d-inline-flex align-items-center tw-gap-3 tw-mb-4">
                <span
                  class="tw-w-6 tw-h-6 border-main-100 border bg-white rounded-circle text-main-600 d-flex align-items-center justify-content-center tw-text-305">
                  <i class="ph-fill ph-star-four"></i>
                </span>
                <span class="fw-normal tw-text-4 text-white">
                  Admissions Open
                </span>
              </div>
              <h2 class="text-white h4 max-w-330-px">Enroll Now for Pre-KG to Class 12 - CBSE Curriculum</h2>
              <div class="tw-mt-7">
                <a href="{{ route('about') }}" class="btn btn-main" data-aos="fade-up" data-aos-duration="1200">
                  More About Us <i class="ph-bold ph-arrow-right ms-2"></i>
                </a>
              </div>
            </div>
            <div class="position-absolute bottom-0 end-0 tw-me-3 z-n1 d-xl-block d-none">
              <img src="user/assets/images/thumbs/school-annual-day.png" alt="Happy Students at Maruthi School"
                class="w-100 tw-rounded-xl">
            </div>
          </div>
        </div>

        <div class="col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
          <div class="position-relative z-1 tw-py-12 tw-px-9 tw-rounded-3xl overflow-hidden h-100 bg-main-three-600">
            <div class="">
              <div
                class="tw-py-1 tw-ps-105 tw-pe-4 bg-black-22 rounded-pill d-inline-flex align-items-center tw-gap-3 tw-mb-4">
                <span
                  class="tw-w-6 tw-h-6 border-main-100 border bg-white rounded-circle text-main-600 d-flex align-items-center justify-content-center tw-text-305">
                  <i class="ph-fill ph-star-four"></i>
                </span>
                <span class="fw-normal tw-text-4 text-white">
                  Campus Highlights
                </span>
              </div>
              <h2 class="h4 max-w-330-px text-white">Celebrating 25+ Years of Shaping Future Leaders</h2>
              <div class="tw-mt-7">
                <a href="{{ route('about') }}" class="btn btn-main" data-aos="fade-up" data-aos-duration="1200">
                  More About Us <i class="ph-bold ph-arrow-right ms-2"></i>
                </a>
              </div>
            </div>
            <div class="position-absolute bottom-0 end-0 tw-me-3 z-n1 d-xl-block d-none">
              <img src="user/assets/images/thumbs/school-hero-banner.png" alt="Maruthi School Campus"
                class="w-100 tw-rounded-xl">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ======================== Promotional banner section end ====================== -->

  <div class="pb-110">
    <div class="container">
      <div class="row gy-4">
        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="600">
          <div class="max-w-240-px w-100">
            <h2 class="fw-medium text-main-600 tw-mb-4 counter">25+</h2>
            <div class="d-flex align-items-center tw-gap-405">
              <span class="tw-w-05 tw-h-10 bg-main-600 flex-shrink-0"></span>
              <p class="fw-normal tw-text-405 text-neutral-500">Years of Academic Excellence</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800">
          <div class="max-w-240-px w-100">
            <h2 class="fw-medium text-main-600 tw-mb-4 counter">20K+</h2>
            <div class="d-flex align-items-center tw-gap-405">
              <span class="tw-w-05 tw-h-10 bg-main-600 flex-shrink-0"></span>
              <p class="fw-normal tw-text-405 text-neutral-500">Proud Alumni Worldwide</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000">
          <div class="max-w-240-px w-100">
            <h2 class="fw-medium text-main-600 tw-mb-4 counter">50+</h2>
            <div class="d-flex align-items-center tw-gap-405">
              <span class="tw-w-05 tw-h-10 bg-main-600 flex-shrink-0"></span>
              <p class="fw-normal tw-text-405 text-neutral-500">Dedicated & Experienced Faculty</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200">
          <div class="max-w-240-px w-100">
            <h2 class="fw-medium text-main-600 tw-mb-4 counter"> 12th</h2>
            <div class="d-flex align-items-center tw-gap-405">
              <span class="tw-w-05 tw-h-10 bg-main-600 flex-shrink-0"></span>
              <p class="fw-normal tw-text-405 text-neutral-500">Classes Offered Under CBSE Curriculum</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ====================== online course section start ========================= -->






  <!-- ====================== online course section end ========================= -->





    <!-- ===================== popular categories section start ========================= -->
  <section class="leadership-section bg-main-10 py-100 position-relative z-2 overflow-hidden">
    <!-- Background Decorative Elements -->
    <div class="leader-bg-shape s-1"></div>
    <div class="leader-bg-shape s-2"></div>
    <div class="leader-bg-blob"></div>

    <div class="container position-relative z-1">
      <!-- Section Header -->
      <div class="d-flex align-items-end tw-gap-4 justify-content-between flex-wrap tw-mb-10">
        <div>
          <div class="tw-py-1 tw-ps-105 tw-pe-4 bg-white rounded-pill d-inline-flex align-items-center tw-gap-3 tw-mb-4"
            data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            <span class="tw-w-6 tw-h-6 border-main-100 border bg-white rounded-circle text-main-600 d-flex align-items-center justify-content-center tw-text-305">
              <i class="ph-fill ph-star-four"></i>
            </span>
            <span class="fw-normal tw-text-4 text-main-600">Our Leadership</span>
          </div>
          <h3 class="fw-semibold text-neutral-950" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            Meet the Visionaries Behind Maruthi
          </h3>
        </div>
        <!-- Tab Buttons -->
        <ul class="nav nav-tabs d-flex border-bottom-0 flex-wrap tw-gap-205" id="leaderTab" role="tablist"
          data-aos="fade-up" data-aos-duration="800" data-aos-delay="350">
          <li class="nav-item">
            <button class="nav-link rounded-pill bg-white active" id="principal-tab" data-bs-toggle="tab"
              data-bs-target="#principal-tab-pane" type="button" role="tab" aria-selected="true">
              <i class="ph-fill ph-user-circle me-1"></i> Principal
            </button>
          </li>
          <li class="nav-item">
            <button class="nav-link rounded-pill bg-white" id="viceprincipal-tab" data-bs-toggle="tab"
              data-bs-target="#viceprincipal-tab-pane" type="button" role="tab" aria-selected="false">
              <i class="ph-fill ph-user-circle me-1"></i> Vice Principal
            </button>
          </li>
          <li class="nav-item">
            <button class="nav-link rounded-pill bg-white" id="cofounder-tab" data-bs-toggle="tab"
              data-bs-target="#cofounder-tab-pane" type="button" role="tab" aria-selected="false">
              <i class="ph-fill ph-crown me-1"></i> Co-Founder
            </button>
          </li>
        </ul>
      </div>

      <!-- Tab Content -->
      <div class="tab-content" id="leaderTabContent">

        <!-- Principal -->
        <div class="tab-pane fade show active" id="principal-tab-pane" role="tabpanel" tabindex="0">
          <div class="row gy-4 align-items-center">
            <div class="col-xl-5 col-lg-5" data-aos="zoom-in" data-aos-duration="1200">
              <div class="leader-photo-wrap">
                <img src="user/assets/images/thumbs/principal.png" alt="Principal - Maruthi Senior Secondary School"
                  class="leader-photo">
                <div class="leader-role-badge">
                  <i class="ph-fill ph-graduation-cap"></i> Principal
                </div>
              </div>
            </div>
            <div class="col-xl-7 col-lg-7" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
              <div class="leader-info-block">
                <h2 class="leader-name">Dr. S. Murugesan</h2>
                <p class="leader-designation">Principal, Maruthi Senior Secondary School</p>
                <p class="fw-normal tw-text-4 text-neutral-400 tw-mb-5">
                  With over 28 years of dedicated service in education, Dr. S. Murugesan has been the guiding force of Maruthi Senior Secondary School. His visionary leadership has transformed the school into one of Puducherry's most respected CBSE institutions.
                </p>
                <p class="fw-normal tw-text-4 text-neutral-400 tw-mb-7">
                  Under his guidance, the school has achieved consistent 100% board results, numerous state-level academic honors, and a culture of holistic student development that blends academics, sports, and character-building.
                </p>
                <div class="leader-highlights d-flex flex-wrap gap-3 tw-mb-7">
                  <div class="leader-highlight-chip"><i class="ph-fill ph-check-fat"></i> M.Ed., Ph.D. in Education</div>
                  <div class="leader-highlight-chip"><i class="ph-fill ph-check-fat"></i> 28+ Years Experience</div>
                  <div class="leader-highlight-chip"><i class="ph-fill ph-check-fat"></i> State Award Recipient</div>
                  <div class="leader-highlight-chip"><i class="ph-fill ph-check-fat"></i> CBSE Resource Person</div>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-main">
                  Contact Principal <i class="ph-bold ph-arrow-right ms-2"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Vice Principal -->
        <div class="tab-pane fade" id="viceprincipal-tab-pane" role="tabpanel" tabindex="0">
          <div class="row gy-4 align-items-center">
            <div class="col-xl-5 col-lg-5" data-aos="zoom-in" data-aos-duration="1200">
              <div class="leader-photo-wrap">
                <img src="user/assets/images/thumbs/vice-principal.png" alt="Vice Principal - Maruthi Senior Secondary School"
                  class="leader-photo">
                <div class="leader-role-badge badge-green">
                  <i class="ph-fill ph-book-open"></i> Vice Principal
                </div>
              </div>
            </div>
            <div class="col-xl-7 col-lg-7" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
              <div class="leader-info-block">
                <h2 class="leader-name">Mrs. R. Kavitha</h2>
                <p class="leader-designation">Vice Principal, Maruthi Senior Secondary School</p>
                <p class="fw-normal tw-text-4 text-neutral-400 tw-mb-5">
                  Mrs. R. Kavitha brings 20 years of excellence in education administration to Maruthi School. A passionate educator and administrator, she oversees academic planning, student welfare programs, and faculty development initiatives.
                </p>
                <p class="fw-normal tw-text-4 text-neutral-400 tw-mb-7">
                  Her commitment to inclusive, student-centered learning has elevated the school's academic outcomes, and she is widely respected by both teachers and students for her empathetic and results-driven approach.
                </p>
                <div class="leader-highlights d-flex flex-wrap gap-3 tw-mb-7">
                  <div class="leader-highlight-chip"><i class="ph-fill ph-check-fat"></i> M.Sc., B.Ed.</div>
                  <div class="leader-highlight-chip"><i class="ph-fill ph-check-fat"></i> 20+ Years Experience</div>
                  <div class="leader-highlight-chip"><i class="ph-fill ph-check-fat"></i> Academic Excellence Award</div>
                  <div class="leader-highlight-chip"><i class="ph-fill ph-check-fat"></i> Child Development Expert</div>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-main">
                  Contact Vice Principal <i class="ph-bold ph-arrow-right ms-2"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Co-Founder -->
        <div class="tab-pane fade" id="cofounder-tab-pane" role="tabpanel" tabindex="0">
          <div class="row gy-4 align-items-center">
            <div class="col-xl-5 col-lg-5" data-aos="zoom-in" data-aos-duration="1200">
              <div class="leader-photo-wrap">
                <img src="user/assets/images/thumbs/co-founder.png" alt="Co-Founder - Maruthi Senior Secondary School"
                  class="leader-photo">
                <div class="leader-role-badge badge-gold">
                  <i class="ph-fill ph-crown"></i> Co-Founder
                </div>
              </div>
            </div>
            <div class="col-xl-7 col-lg-7" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
              <div class="leader-info-block">
                <h2 class="leader-name">Shri. V. Annamalai</h2>
                <p class="leader-designation">Co-Founder & Correspondent, Maruthi Senior Secondary School</p>
                <p class="fw-normal tw-text-4 text-neutral-400 tw-mb-5">
                  Shri. V. Annamalai co-founded Maruthi Senior Secondary School in 1997 with a singular vision: to bring world-class CBSE education to the families of Puducherry. His entrepreneurial spirit and dedication to community welfare have been the cornerstone of the school's founding values.
                </p>
                <p class="fw-normal tw-text-4 text-neutral-400 tw-mb-7">
                  His belief that "education is the greatest gift you can give a child" has shaped everything from the school's culture to its infrastructure. Today, he remains actively involved in guiding the school's long-term vision and community outreach programs.
                </p>
                <div class="leader-highlights d-flex flex-wrap gap-3 tw-mb-7">
                  <div class="leader-highlight-chip"><i class="ph-fill ph-check-fat"></i> Founder Vision 1997</div>
                  <div class="leader-highlight-chip"><i class="ph-fill ph-check-fat"></i> 25+ Years Leadership</div>
                  <div class="leader-highlight-chip"><i class="ph-fill ph-check-fat"></i> Community Champion</div>
                  <div class="leader-highlight-chip"><i class="ph-fill ph-check-fat"></i> Educational Philanthropist</div>
                </div>
                <a href="{{ route('about') }}" class="btn btn-main">
                  Our Story <i class="ph-bold ph-arrow-right ms-2"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div><!-- end tab-content -->
    </div>
  </section>
  <!-- ===================== popular categories section end ========================= -->





  <!-- ============================ teacher section start ========================== -->

  <!-- ============================ teacher section end ========================== -->

  <!-- ====================== categories section start ====================== -->

  <!-- ====================== categories section end ====================== -->

  <!-- ======================= student reviews section start ======================== -->

  <!-- ============================= student reviews section start ======================== -->
  <section class=" pt-140 pb-100">
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
              <div class="position-relative">
                <div
                  class="tw-p-10 bg-main-10 tw-rounded-xl border-white border border-2 border-white hover-border-main-600 tw-duration-300 tw-mb-1">
                  <h2 class="h5 fw-medium text-neutral-700 tw-line-height-37-px">
                    "My children have been studying at Maruthi School since Pre-KG. The teachers are incredibly
                    dedicated, and the CBSE curriculum is delivered with great care. I've seen remarkable growth in my
                    kids academically and personally."
                  </h2>
                  <div class="tw-mt-6 d-flex align-items-center tw-gap-3">
                    <div class="">
                      <span class="fw-semibold tw-text-405 text-neutral-950 tw-mb-1 d-block">
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
              <div class="position-relative">
                <div
                  class="tw-p-10 bg-main-10 tw-rounded-xl border-white border border-2 border-white hover-border-main-600 tw-duration-300 tw-mb-1">
                  <h2 class="h5 fw-medium text-neutral-700 tw-line-height-37-px">
                    "The school's focus on both academics and extracurricular activities is outstanding. My daughter
                    excels in sports and studies equally, thanks to the balanced approach at Maruthi School. Best CBSE
                    school in Puducherry!"
                  </h2>
                  <div class="tw-mt-6 d-flex align-items-center tw-gap-3">
                    <div class="">
                      <span class="fw-semibold tw-text-405 text-neutral-950 tw-mb-1 d-block">
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
              <div class="position-relative">
                <div
                  class="tw-p-10 bg-main-10 tw-rounded-xl border-white border border-2 border-white hover-border-main-600 tw-duration-300 tw-mb-1">
                  <h2 class="h5 fw-medium text-neutral-700 tw-line-height-37-px">
                    "Maruthi School gave me the foundation I needed for my career. The science labs, computer
                    facilities, and the mentorship from teachers shaped who I am today. Forever grateful to this
                    institution."
                  </h2>
                  <div class="tw-mt-6 d-flex align-items-center tw-gap-3">
                    <div class="">
                      <span class="fw-semibold tw-text-405 text-neutral-950 tw-mb-1 d-block">
                        Arun Prakash
                      </span>
                      <span class="fw-normal tw-text-4 text-neutral-400">
                        Alumni €“ Batch of 2018
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
              <div class="position-relative">
                <div
                  class="tw-p-10 bg-main-10 tw-rounded-xl border-white border border-2 border-white hover-border-main-600 tw-duration-300 tw-mb-1">
                  <h2 class="h5 fw-medium text-neutral-700 tw-line-height-37-px">
                    "The school provides a safe, nurturing environment where children can thrive. The cultural exchange
                    programs and sports events give students exposure beyond textbooks. Highly recommend Maruthi
                    School!"
                  </h2>
                  <div class="tw-mt-6 d-flex align-items-center tw-gap-3">
                    <div class="">
                      <span class="fw-semibold tw-text-405 text-neutral-950 tw-mb-1 d-block">
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
  <section class="py-100 bg-main-10">
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
  <section class="admissions-cta-redesign position-relative overflow-hidden">
    <!-- Floating Decorative Icons -->
    

    <div class="container position-relative z-1">
      <div class="row align-items-center gy-4">
        <div class="col-lg-7 text-lg-start text-center" data-aos="fade-right" data-aos-duration="1000">
          <div class="cta-pill-badge mb-3 d-inline-flex align-items-center gap-2">
            <span class="cta-pulse-dot"></span>
            <span class="text-white fw-medium">Admissions Open 2026-27</span>
          </div>
          <h2 class="cta-title text-white fw-bold mb-4">
            Start Your Child's Journey <br class="d-none d-md-block"> to <span class="text-highlight">Excellence</span> Today
          </h2>
          <p class="cta-description text-white opacity-90 mb-0">
            Join Puducherry's leading CBSE school. We provide a nurturing environment, <br class="d-none d-lg-block">
            state-of-the-art facilities, and a legacy of academic success.
          </p>
        </div>
        <div class="col-lg-5 text-lg-end text-center" data-aos="fade-left" data-aos-duration="1000">
          <div class="cta-btn-group d-flex flex-column flex-sm-row justify-content-lg-end gap-3 align-items-center">
            <a href="contact-us.html" class="btn btn-apply-now rounded-pill px-5 py-3 fw-bold">
              Apply For Admission <i class="ph-bold ph-arrow-right ms-2"></i>
            </a>
            <a href="tel:+919442399777" class="btn btn-call-us rounded-pill px-4 py-3 fw-bold border-white text-white border-2">
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
