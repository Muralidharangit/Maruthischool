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

{{-- Starts --}}
<!--==================== Preloader Start ====================-->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
      <div></div>
    </div>
  </div>
  <!--==================== Preloader End ====================-->




  <!--==================== Overlay Start ====================-->
  <div class="overlay"></div>
  <!--==================== Overlay End ====================-->

  <!--==================== Sidebar Overlay End ====================-->
  <div class="side-overlay"></div>
  <!--==================== Sidebar Overlay End ====================-->

  <!-- Custom Toast Message start -->
  <div id="toast-container"></div>
  <!-- Custom Toast Message End -->

  <!-- ==================== Scroll to Top End Here ==================== -->
  <div class="progress-wrap cursor-big">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <!-- ==================== Scroll to Top End Here ==================== -->

  <!-- Custom Cursor Start -->
  <div class="cursor"></div>
  <span class="dot"></span>
  <!-- Custom Cursor End -->



  {{-- =============================== --}}
    <!-- START HEADER -->
        @include('user.layouts.header')
    <!-- END HEADER -->
  {{-- =============================== --}}


   <!-- Breadcrumb -->
  <section class="breadcrumb-section py-80 bg-main-600">
    <div class="container text-center">
      <h2 class="text-white h1 mb-3">Our Achievements</h2>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
          <li class="breadcrumb-item active text-white" aria-current="page">Achievements</li>
        </ol>
      </nav>
    </div>
  </section>

  <!-- Achievements Section -->
  <section class="py-100">
    <div class="container">
      <div class="row gy-4">
        <div class="col-md-6">
          <div class="p-5 border tw-rounded-xl bg-main-10">
            <h4 class="text-main-600 mb-3">100% Board Results</h4>
            <p class="text-neutral-500">Maruthi School has consistently achieved 100% results in CBSE Class 10 and 12
              Board examinations for the last 15 years.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="p-5 border tw-rounded-xl bg-main-10">
            <h4 class="text-main-600 mb-3">State Level Sports Awards</h4>
            <p class="text-neutral-500">Our students have secured multiple gold medals in state-level athletics,
              volleyball, and chess tournaments.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================= courses section start =========================== -->
  <section class="admissions-cta-redesign position-relative overflow-hidden">
    <!-- Floating Decorative Icons -->
    <div class="cta-decor-icons" aria-hidden="true">
      <div class="cta-icon-item ci-1"><i class="ph-fill ph-graduation-cap"></i></div>
      <div class="cta-icon-item ci-2"><i class="ph-fill ph-book-open"></i></div>
      <div class="cta-icon-item ci-3"><i class="ph-fill ph-pencil-simple"></i></div>
      <div class="cta-icon-item ci-4"><i class="ph-fill ph-trophy"></i></div>
    </div>

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
            <a href="contact-us.html" class="btn btn-apply-now rounded-pill px-5 py-3 fw-bold">
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
  {{-- =============================== --}}
    <!-- START HEADER -->
        @include('user.layouts.footer')
    <!-- END HEADER -->
  {{-- =============================== --}}

    @include('user.layouts.script')

</body>
</html>
