<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Templatemanja" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SITE TITLE -->
    <title>Maruthi Senior Secondary School Puducherry | CBSE Affiliated | Pre-KG to Class 12</title>
    @include('user.layouts.links')
  
</head>

<body>
 {{-- loader AND SCROLL starts --}}
 @include('user.layouts.loader')
  {{-- loader AND SCROLL ends --}}


   {{-- =============================== --}}
    <!-- START HEADER -->
        @include('user.layouts.header')
    <!-- END HEADER -->
  {{-- =============================== --}}




  <!-- Breadcrumb -->
  <section class="breadcrumb-section py-120 bg-main-600 position-relative overflow-hidden">
    <img src="user/assets/images/shape/banner-shape-4.png" alt="shape"
      class="position-absolute top-0 animation-scalation tw-mt-120-px tw-ms-80-px tw-start-0 opacity-25">
    <div class="container position-relative z-1">
      <h2 class="text-white h1 mb-3" data-aos="fade-up">About Our School</h2>
      <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="100">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('index') }}" class="text-white">Home</a></li>
          <li class="breadcrumb-item active text-white opacity-75" aria-current="page">About Us</li>
        </ol>
      </nav>
    </div>
  </section>

  <!-- ============================== about section start ============================ -->
  <section class="pb-100 pt-100">
    <div class="container">
      <div class="row gy-4 align-items-center">
        <div class="col-xl-6">
          <div
            class="tw-py-1 tw-ps-105 tw-pe-4 bg-main-50 rounded-pill d-inline-flex align-items-center tw-gap-3 tw-mb-4"
            data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            <span
              class="tw-w-6 tw-h-6 border-main-100 border bg-white rounded-circle text-main-600 d-flex align-items-center justify-content-center tw-text-305">
              <i class="ph-fill ph-star-four"></i>
            </span>
            <span class="fw-normal tw-text-4 text-main-600">Why Choose Us</span>
          </div>
          <h3 class="fw-semibold text-neutral-950 tw-mb-6" data-aos="fade-up" data-aos-duration="800"
            data-aos-delay="200">
            A School That Invests in Every Child
          </h3>
          <p class="fw-normal tw-text-4 text-neutral-400 tw-mb-9" data-aos="fade-up" data-aos-duration="800"
            data-aos-delay="300">
            At Maruthi Senior Secondary School, we believe every student has unique potential. Our environment is
            designed to bring out the best in each child through quality education, modern facilities, and holistic
            development.
          </p>
          <div class="d-flex align-items-center tw-gap-4 animation-item flex-sm-nowrap flex-wrap tw-mb-10"
            data-aos="fade-up" data-aos-duration="800" data-aos-delay="350">
            <span
              class="tw-w-88-px tw-h-88-px rounded-circle bg-main-three-600 d-flex align-items-center justify-content-center flex-shrink-0 tw-text-40-px text-white">
              <i class="ph-fill ph-users-four animate__bounce"></i>
            </span>
            <div>
              <h2 class="h5 fw-semibold text-neutral-500 tw-mb-3">Experienced Faculty</h2>
              <p class="fw-normal tw-text-405 text-neutral-400">Highly experienced and dedicated teachers focused on
                academic excellence and student growth.</p>
            </div>
          </div>

          <div class="row g-3 tw-mb-8" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
            <div class="col-sm-6">
              <div class="about-feature-pill">
                <div class="pill-icon green"><i class="ph-fill ph-certificate"></i></div>
                <span>CBSE Affiliated Curriculum</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="about-feature-pill">
                <div class="pill-icon blue"><i class="ph-fill ph-chalkboard"></i></div>
                <span>Modern Smart Classrooms</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="about-feature-pill">
                <div class="pill-icon purple"><i class="ph-fill ph-flask"></i></div>
                <span>Science &amp; Computer Labs</span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="about-feature-pill">
                <div class="pill-icon amber"><i class="ph-fill ph-soccer-ball"></i></div>
                <span>Sports &amp; Cultural Activities</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6" data-aos="zoom-in" data-aos-duration="1500">
          <img src="user/assets/images/thumbs/school-classroom.png" alt="Classroom" class="w-100 tw-rounded-xl shadow-lg">
        </div>
      </div>
    </div>
  </section>

  <!-- ========================== Counter Section ========================== -->
  <div class="pb-110">
    <div class="container">
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
              <p>Dedicated &amp; Experienced Faculty</p>
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
  </div>

  <!-- ============================== Vision, Mission & Goals Section ============================ -->
  <section class="py-120 bg-main-10 bg-cross-grid">
    <div class="container">
      <div class="text-center mb-5">
        <div class="tw-py-1 tw-ps-105 tw-pe-4 bg-white rounded-pill d-inline-flex align-items-center tw-gap-3 mb-4"
          data-aos="fade-up" data-aos-duration="800" data-aos-delay="100"
          style="border: 1px solid rgba(4,120,87,0.12); box-shadow: 0 2px 12px rgba(4,120,87,0.06);">
          <span class="tw-w-6 tw-h-6 border-main-100 border bg-white rounded-circle text-main-600 d-flex align-items-center justify-content-center">
            <i class="ph-fill ph-compass"></i>
          </span>
          <span class="fw-bold text-main-600" style="font-size: 0.85rem; letter-spacing: 0.05em; text-transform: uppercase;">
            Our Core Values
          </span>
        </div>
        <h3 class="fw-semibold text-neutral-950 mb-3 display-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          Vision, Mission &amp; Goals
        </h3>
        <p class="text-neutral-400 max-w-600-px mx-auto" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" style="font-size: 1.05rem;">
          Driving academic excellence, fostering character development, and preparing leaders for tomorrow.
        </p>
      </div>

      <div class="row g-4 justify-content-center">
        <!-- Vision Card -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
          <div class="vision-mission-card vmc-green">
            <div class="vmc-icon-wrap">
              <i class="ph-fill ph-eye"></i>
            </div>
            <h4 class="vmc-title">Our Vision</h4>
            <p class="vmc-desc">
              To be a premier institution of learning, recognized for our commitment to academic brilliance, character formation, and the development of socially responsible global citizens.
            </p>
          </div>
        </div>

        <!-- Mission Card -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          <div class="vision-mission-card vmc-blue">
            <div class="vmc-icon-wrap">
              <i class="ph-fill ph-target"></i>
            </div>
            <h4 class="vmc-title">Our Mission</h4>
            <p class="vmc-desc">
              To provide a nurturing, value-based environment that fosters intellectual curiosity, physical fitness, emotional resilience, and standard-setting academic achievements.
            </p>
          </div>
        </div>

        <!-- Goal Card -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
          <div class="vision-mission-card vmc-purple">
            <div class="vmc-icon-wrap">
              <i class="ph-fill ph-rocket-launch"></i>
            </div>
            <h4 class="vmc-title">Our Strategic Goals</h4>
            <p class="vmc-desc">
              To ensure 100% board success, continuous modern technological integration (Robotics, AI), and active participation of students in national level sports and cultural arenas.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================= Testimonial Section ======================== -->
  <section class="bg-white pt-140 pb-100 bg-dot-grid">
    <div class="container max-w-1400-px mx-auto">
      <div class="d-flex align-items-center justify-content-center">
        <div class="text-center tw-mb-15">
          <div class="tw-py-1 tw-ps-105 tw-pe-4 bg-white rounded-pill d-inline-flex align-items-center tw-gap-3 tw-mb-5"
            data-aos="fade-up" data-aos-duration="800" data-aos-delay="100"
            style="border: 1px solid rgba(4,120,87,0.12); box-shadow: 0 2px 12px rgba(4,120,87,0.06);">
            <span class="tw-w-6 tw-h-6 border-main-100 border bg-white rounded-circle text-main-600 d-flex align-items-center justify-content-center tw-text-305">
              <i class="ph-fill ph-star-four"></i>
            </span>
            <span class="fw-normal tw-text-4 text-main-600">Parent &amp; Student Testimonials</span>
          </div>
          <h3 class="fw-semibold text-neutral-950 tw-mb-5" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            What Parents &amp; Students Say About Us
          </h3>
          <p class="fw-normal tw-text-4 text-neutral-500" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
            Hear from our community about their experience at Maruthi Senior Secondary School.
          </p>
        </div>
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
                <div class="tw-p-10 bg-main-10 tw-rounded-xl border-white border border-2 border-white hover-border-main-600 tw-duration-300 tw-mb-1 position-relative overflow-hidden h-100 d-flex flex-column justify-content-between">
                  <i class="ph-fill ph-quotes text-main-600 position-absolute" style="font-size: 5rem; top: 10px; right: 15px; opacity: 0.08; pointer-events: none;"></i>
                  <div>
                    <div class="d-flex tw-gap-1 text-main-600 tw-mb-4">
                      <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i>
                    </div>
                    <h2 class="h5 fw-medium text-neutral-700 tw-line-height-37-px tw-mb-6" style="font-size: 1.05rem;">
                      "My children have been studying at Maruthi School since Pre-KG. The teachers are incredibly dedicated, and the CBSE curriculum is delivered with great care. I've seen remarkable growth in my kids academically and personally."
                    </h2>
                  </div>
                  <div class="tw-mt-6 d-flex align-items-center tw-gap-3 border-top tw-pt-5" style="border-color: rgba(0,0,0,0.06) !important;">
                    <div class="avatar-circle bg-main-50 text-main-600 d-flex align-items-center justify-content-center rounded-circle" style="width: 46px; height: 46px; flex-shrink: 0;">
                      <i class="ph-bold ph-user" style="font-size: 1.25rem;"></i>
                    </div>
                    <div>
                      <span class="fw-semibold tw-text-405 text-neutral-950 tw-mb-05 d-block">Rajesh Kumar</span>
                      <span class="fw-normal tw-text-4 text-neutral-400">Parent of Class 8 Student</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
              <div class="position-relative h-100">
                <div class="tw-p-10 bg-main-10 tw-rounded-xl border-white border border-2 border-white hover-border-main-600 tw-duration-300 tw-mb-1 position-relative overflow-hidden h-100 d-flex flex-column justify-content-between">
                  <i class="ph-fill ph-quotes text-main-600 position-absolute" style="font-size: 5rem; top: 10px; right: 15px; opacity: 0.08; pointer-events: none;"></i>
                  <div>
                    <div class="d-flex tw-gap-1 text-main-600 tw-mb-4">
                      <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i>
                    </div>
                    <h2 class="h5 fw-medium text-neutral-700 tw-line-height-37-px tw-mb-6" style="font-size: 1.05rem;">
                      "The school's focus on both academics and extracurricular activities is outstanding. My daughter excels in sports and studies equally, thanks to the balanced approach at Maruthi School. Best CBSE school in Puducherry!"
                    </h2>
                  </div>
                  <div class="tw-mt-6 d-flex align-items-center tw-gap-3 border-top tw-pt-5" style="border-color: rgba(0,0,0,0.06) !important;">
                    <div class="avatar-circle bg-main-50 text-main-600 d-flex align-items-center justify-content-center rounded-circle" style="width: 46px; height: 46px; flex-shrink: 0;">
                      <i class="ph-bold ph-user" style="font-size: 1.25rem;"></i>
                    </div>
                    <div>
                      <span class="fw-semibold tw-text-405 text-neutral-950 tw-mb-05 d-block">Priya Lakshmi</span>
                      <span class="fw-normal tw-text-4 text-neutral-400">Parent of Class 10 Student</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
              <div class="position-relative h-100">
                <div class="tw-p-10 bg-main-10 tw-rounded-xl border-white border border-2 border-white hover-border-main-600 tw-duration-300 tw-mb-1 position-relative overflow-hidden h-100 d-flex flex-column justify-content-between">
                  <i class="ph-fill ph-quotes text-main-600 position-absolute" style="font-size: 5rem; top: 10px; right: 15px; opacity: 0.08; pointer-events: none;"></i>
                  <div>
                    <div class="d-flex tw-gap-1 text-main-600 tw-mb-4">
                      <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i>
                    </div>
                    <h2 class="h5 fw-medium text-neutral-700 tw-line-height-37-px tw-mb-6" style="font-size: 1.05rem;">
                      "Maruthi School gave me the foundation I needed for my career. The science labs, computer facilities, and the mentorship from teachers shaped who I am today. Forever grateful to this institution."
                    </h2>
                  </div>
                  <div class="tw-mt-6 d-flex align-items-center tw-gap-3 border-top tw-pt-5" style="border-color: rgba(0,0,0,0.06) !important;">
                    <div class="avatar-circle bg-main-50 text-main-600 d-flex align-items-center justify-content-center rounded-circle" style="width: 46px; height: 46px; flex-shrink: 0;">
                      <i class="ph-bold ph-graduation-cap" style="font-size: 1.25rem;"></i>
                    </div>
                    <div>
                      <span class="fw-semibold tw-text-405 text-neutral-950 tw-mb-05 d-block">Arun Prakash</span>
                      <span class="fw-normal tw-text-4 text-neutral-400">Alumni – Batch of 2018</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
              <div class="position-relative h-100">
                <div class="tw-p-10 bg-main-10 tw-rounded-xl border-white border border-2 border-white hover-border-main-600 tw-duration-300 tw-mb-1 position-relative overflow-hidden h-100 d-flex flex-column justify-content-between">
                  <i class="ph-fill ph-quotes text-main-600 position-absolute" style="font-size: 5rem; top: 10px; right: 15px; opacity: 0.08; pointer-events: none;"></i>
                  <div>
                    <div class="d-flex tw-gap-1 text-main-600 tw-mb-4">
                      <i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i><i class="ph-fill ph-star"></i>
                    </div>
                    <h2 class="h5 fw-medium text-neutral-700 tw-line-height-37-px tw-mb-6" style="font-size: 1.05rem;">
                      "The school provides a safe, nurturing environment where children can thrive. The cultural exchange programs and sports events give students exposure beyond textbooks. Highly recommend Maruthi School!"
                    </h2>
                  </div>
                  <div class="tw-mt-6 d-flex align-items-center tw-gap-3 border-top tw-pt-5" style="border-color: rgba(0,0,0,0.06) !important;">
                    <div class="avatar-circle bg-main-50 text-main-600 d-flex align-items-center justify-content-center rounded-circle" style="width: 46px; height: 46px; flex-shrink: 0;">
                      <i class="ph-bold ph-user" style="font-size: 1.25rem;"></i>
                    </div>
                    <div>
                      <span class="fw-semibold tw-text-405 text-neutral-950 tw-mb-05 d-block">Meenakshi Devi</span>
                      <span class="fw-normal tw-text-4 text-neutral-400">Parent of Class 5 Student</span>
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
