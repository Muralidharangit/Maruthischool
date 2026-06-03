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
          <div class="p-4 bg-white rounded-4 border border-neutral-100 shadow-sm d-flex align-items-center tw-gap-4 tw-mb-6 hover-card-premium"
            data-aos="fade-up" data-aos-duration="800" data-aos-delay="350">
            <span
              class="tw-w-20 tw-h-20 rounded-3 bg-main-three-600 d-flex align-items-center justify-content-center flex-shrink-0 tw-text-4xl text-white icon-box shadow-sm">
              <i class="ph-fill ph-users-four animate__bounce"></i>
            </span>
            <div>
              <h3 class="h5 fw-bold text-neutral-900 mb-2">Experienced Faculty</h3>
              <p class="fw-normal tw-text-md text-neutral-600 mb-0">Highly experienced and dedicated teachers focused on academic excellence and student growth.</p>
            </div>
          </div>

          <div class="row g-4 tw-mb-8" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
            <!-- Item 1 -->
            <div class="col-sm-6">
              <div class="p-3 bg-white rounded-3 border border-neutral-100 shadow-sm d-flex align-items-center tw-gap-4 hover-card-premium">
                <span
                  class="tw-w-14 tw-h-14 bg-main-50 text-main-600 rounded-3 d-flex align-items-center justify-content-center tw-text-2xl flex-shrink-0 border border-main-100 icon-box">
                  <i class="ph-fill ph-certificate"></i>
                </span>
                <span class="fw-bold tw-text-md text-neutral-800">CBSE Affiliated Curriculum</span>
              </div>
            </div>
            <!-- Item 2 -->
            <div class="col-sm-6">
              <div class="p-3 bg-white rounded-3 border border-neutral-100 shadow-sm d-flex align-items-center tw-gap-4 hover-card-premium">
                <span
                  class="tw-w-14 tw-h-14 bg-main-two-50 text-main-two-600 rounded-3 d-flex align-items-center justify-content-center tw-text-2xl flex-shrink-0 border border-main-two-100 icon-box">
                  <i class="ph-fill ph-flask"></i>
                </span>
                <span class="fw-bold tw-text-md text-neutral-800">Science & Computer Labs</span>
              </div>
            </div>
            <!-- Item 3 -->
            <div class="col-sm-6">
              <div class="p-3 bg-white rounded-3 border border-neutral-100 shadow-sm d-flex align-items-center tw-gap-4 hover-card-premium">
                <span
                  class="tw-w-14 tw-h-14 bg-main-three-50 text-main-three-600 rounded-3 d-flex align-items-center justify-content-center tw-text-2xl flex-shrink-0 border border-main-three-100 icon-box">
                  <i class="ph-fill ph-chalkboard"></i>
                </span>
                <span class="fw-bold tw-text-md text-neutral-800">Modern Smart Classrooms</span>
              </div>
            </div>
            <!-- Item 4 -->
            <div class="col-sm-6">
              <div class="p-3 bg-white rounded-3 border border-neutral-100 shadow-sm d-flex align-items-center tw-gap-4 hover-card-premium">
                <span
                  class="tw-w-14 tw-h-14 bg-warning-50 text-warning-600 rounded-3 d-flex align-items-center justify-content-center tw-text-2xl flex-shrink-0 border border-warning-100 icon-box">
                  <i class="ph-fill ph-soccer-ball"></i>
                </span>
                <span class="fw-bold tw-text-md text-neutral-800">Sports & Cultural Activities</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 position-relative" data-aos="zoom-in" data-aos-duration="1500">
          <div class="image-hover-zoom overflow-hidden rounded-4 shadow-lg border border-neutral-100">
            <img src="user/assets/images/thumbs/school-students-group.png" alt="Classroom" class="w-100 img-fluid">
          </div>
          <!-- Floating Badge -->
          <div class="position-absolute bottom-0 start-0 bg-white p-3 m-4 rounded-3 shadow-lg border border-success d-flex align-items-center gap-3 floating-school-badge" style="max-width: 240px; backdrop-filter: blur(8px); background: rgba(255,255,255,0.92) !important;">
            <div class="tw-w-12 tw-h-12 bg-main-50 text-main-600 rounded-circle d-flex align-items-center justify-content-center fs-3 flex-shrink-0">
              <i class="fa fa-award"></i>
            </div>
            <div>
              <h4 class="small mb-1 fw-bold text-neutral-950">Affiliated to CBSE</h4>
              <p class="mb-0 text-neutral-500" style="font-size: 0.8rem;">Puducherry's Premier Institution</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================== Counter Section Exact from Index ========================== -->
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
            <h2 class="fw-medium text-main-600 tw-mb-4 counter">100%</h2>
            <div class="d-flex align-items-center tw-gap-405">
              <span class="tw-w-05 tw-h-10 bg-main-600 flex-shrink-0"></span>
              <p class="fw-normal tw-text-405 text-neutral-500">Board Results Success Rate</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ============================= Testimonial Section Exact from Index ======================== -->
  <section class="bg-main-10 pt-140 pb-100">
    <div class="container max-w-1400-px mx-auto">
      <div class="d-flex align-items-center justify-content-between">
        <img src="user/assets/images/shape/student-review-two-shape1.png" alt="shape"
          class="animation-upDown d-xl-block d-none">
        <div class="text-center tw-mb-15 mx-auto">
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
            What Parents & Students Say About Us
          </h3>
          <p class="fw-normal tw-text-4 text-neutral-500" data-aos="fade-up" data-aos-duration="800"
            data-aos-delay="300">
            Hear from our community about their experience at Maruthi Senior Secondary School.
          </p>
        </div>
        <img src="user/assets/images/shape/student-review-two-shape2.png" alt="shape"
          class="animation-scalation d-xl-block d-none">
      </div>

      <!-- Testimonials Slider Wrapper -->
      <div class="testimonials-wrapper-relative">
        <div class="swiper student-two-slider">
          <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
              <div class="tw-p-10 bg-white tw-rounded-xl border-white border border-2 border-white hover-border-main-600 tw-duration-300 tw-mb-1 text-center h-100">
                <i class="fa fa-quote-left text-main-600 fs-3 mb-4 opacity-50"></i>
                <h2 class="h5 fw-medium text-neutral-700 tw-line-height-37-px mb-4">
                  "My children have been studying at Maruthi School since Pre-KG. The teachers are incredibly
                  dedicated, and the CBSE curriculum is delivered with great care. I've seen remarkable growth in my
                  kids academically and personally."
                </h2>
                <div class="d-flex justify-content-center align-items-center">
                  <div>
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

            <!-- Slide 2 -->
            <div class="swiper-slide">
              <div class="tw-p-10 bg-white tw-rounded-xl border-white border border-2 border-white hover-border-main-600 tw-duration-300 tw-mb-1 text-center h-100">
                <i class="fa fa-quote-left text-main-600 fs-3 mb-4 opacity-50"></i>
                <h2 class="h5 fw-medium text-neutral-700 tw-line-height-37-px mb-4">
                  "The school's focus on both academics and extracurricular activities is outstanding. My daughter
                  excels in sports and studies equally, thanks to the balanced approach at Maruthi School. Best CBSE
                  school in Puducherry!"
                </h2>
                <div class="d-flex justify-content-center align-items-center">
                  <div>
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

            <!-- Slide 3 -->
            <div class="swiper-slide">
              <div class="tw-p-10 bg-white tw-rounded-xl border-white border border-2 border-white hover-border-main-600 tw-duration-300 tw-mb-1 text-center h-100">
                <i class="fa fa-quote-left text-main-600 fs-3 mb-4 opacity-50"></i>
                <h2 class="h5 fw-medium text-neutral-700 tw-line-height-37-px mb-4">
                  "Maruthi School gave me the foundation I needed for my career. The science labs, computer
                  facilities, and the mentorship from teachers shaped who I am today. Forever grateful to this
                  institution."
                </h2>
                <div class="d-flex justify-content-center align-items-center">
                  <div>
                    <span class="fw-semibold tw-text-405 text-neutral-950 tw-mb-1 d-block">
                      Arun Prakash
                    </span>
                    <span class="fw-normal tw-text-4 text-neutral-400">
                      Alumni – Batch of 2018
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 4 -->
            <div class="swiper-slide">
              <div class="tw-p-10 bg-white tw-rounded-xl border-white border border-2 border-white hover-border-main-600 tw-duration-300 tw-mb-1 text-center h-100">
                <i class="fa fa-quote-left text-main-600 fs-3 mb-4 opacity-50"></i>
                <h2 class="h5 fw-medium text-neutral-700 tw-line-height-37-px mb-4">
                  "The school provides a safe, nurturing environment where children can thrive. The cultural exchange
                  programs and sports events give students exposure beyond textbooks. Highly recommend Maruthi
                  School!"
                </h2>
                <div class="d-flex justify-content-center align-items-center">
                  <div>
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

        <!-- Navigation Buttons -->
        <div class="testimonials-nav-container">
          <button type="button" id="student-two-button-prev"
            class="btn rounded-circle d-flex align-items-center justify-content-center hover-text-white tw-duration-300 testimonials-nav-btn prev-btn">
            <i class="fa fa-chevron-left"></i>
          </button>
          <button type="button" id="student-two-button-next"
            class="btn rounded-circle d-flex align-items-center justify-content-center hover-text-white tw-duration-300 testimonials-nav-btn next-btn">
            <i class="fa fa-chevron-right"></i>
          </button>
        </div>
      </div>
    </div>
  </section>

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
            Start Your Child's Journey <br class="d-none d-md-block"> to <span class="text-highlight">Excellence</span>
            Today
          </h2>
          <p class="cta-description text-white opacity-90 mb-0">
            Join Puducherry's leading CBSE school. We provide a nurturing environment, <br class="d-none d-lg-block">
            state-of-the-art facilities, and a legacy of academic success.
          </p>
        </div>
        <div class="col-lg-5 text-lg-end text-center" data-aos="fade-left" data-aos-duration="1000">
          <div class="cta-btn-group d-flex flex-column flex-sm-row justify-content-lg-end gap-3 align-items-center">
            <a href="{{ route('contact') }}" class="btn btn-apply-now rounded-pill px-5 py-3 fw-bold">
              Apply For Admission <i class="ph-bold ph-arrow-right ms-2"></i>
            </a>
            <a href="tel:+919442399777"
              class="btn btn-call-us rounded-pill px-4 py-3 fw-bold border-white text-white border-2">
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
