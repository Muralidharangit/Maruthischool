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

  <!-- Gallery Section -->
  {{-- <section class="py-100">
    <div class="container">
      
      <!-- Gallery Filter Buttons -->
      <div class="gallery-filter-wrap" data-aos="fade-up">
        <button class="filter-btn active" data-filter="all">All Photos</button>
        <button class="filter-btn" data-filter="campus">Campus Life</button>
        <button class="filter-btn" data-filter="academic">Academics</button>
        <button class="filter-btn" data-filter="events">School Events</button>
      </div>

      <!-- Swiper Gallery -->
      <div class="swiper gallery-swiper" data-aos="fade-up" data-aos-delay="200">
        <div class="swiper-wrapper" id="gallery-wrapper">
          
          <!-- Campus -->
          <div class="swiper-slide gallery-slide" data-category="campus">
            <div class="gallery-card">
               <img src="user/assets/images/thumbs/school-hero-banner.png" alt="Campus View">
              <div class="gallery-info">
                <h4>Main Campus</h4>
                <p>Modern architecture and lush green surroundings.</p>
              </div>
              <a href="user/assets/images/thumbs/school-hero-banner.png" class="stretched-link img-popup"></a>
            </div>
          </div>

          <div class="swiper-slide gallery-slide" data-category="campus">
            <div class="gallery-card">
               <img src="user/assets/images/thumbs/school-sports-ground.png" alt="Sports Ground">
              <div class="gallery-info">
                <h4>Sports Complex</h4>
                <p>World-class facilities for athletic excellence.</p>
              </div>
              <a href="user/assets/images/thumbs/school-sports-ground.png" class="stretched-link img-popup"></a>
            </div>
          </div>

          <!-- Academic -->
          <div class="swiper-slide gallery-slide" data-category="academic">
            <div class="gallery-card">
               <img src="user/assets/images/thumbs/school-classroom.png" alt="Classroom">
              <div class="gallery-info">
                <h4>Smart Classrooms</h4>
                <p>Interactive learning with modern technology.</p>
              </div>
              <a href="user/assets/images/thumbs/school-classroom.png" class="stretched-link img-popup"></a>
            </div>
          </div>

          <div class="swiper-slide gallery-slide" data-category="academic">
            <div class="gallery-card">
               <img src="user/assets/images/thumbs/school-science-lab.png" alt="Science Lab">
              <div class="gallery-info">
                <h4>Science Laboratories</h4>
                <p>Fostering innovation through practical experiments.</p>
              </div>
              <a href="user/assets/images/thumbs/school-science-lab.png" class="stretched-link img-popup"></a>
            </div>
          </div>

          <div class="swiper-slide gallery-slide" data-category="academic">
            <div class="gallery-card">
               <img src="user/assets/images/thumbs/school-library.png" alt="Library">
              <div class="gallery-info">
                <h4>Digital Library</h4>
                <p>A vast collection of knowledge and resources.</p>
              </div>
              <a href="user/assets/images/thumbs/school-library.png" class="stretched-link img-popup"></a>
            </div>
          </div>

          <!-- Events -->
          <div class="swiper-slide gallery-slide" data-category="events">
            <div class="gallery-card">
               <img src="user/assets/images/thumbs/school-annual-day.png" alt="Annual Day">
              <div class="gallery-info">
                <h4>Annual Day Celebrations</h4>
                <p>Showcasing the diverse talents of our students.</p>
              </div>
              <a href="user/assets/images/thumbs/school-annual-day.png" class="stretched-link img-popup"></a>
            </div>
          </div>

          <div class="swiper-slide gallery-slide" data-category="events">
            <div class="gallery-card">
               <img src="user/assets/images/thumbs/school-students-group.png" alt="Students">
              <div class="gallery-info">
                <h4>Student Community</h4>
                <p>Building friendships and lifelong memories.</p>
              </div>
              <a href="user/assets/images/thumbs/school-students-group.png" class="stretched-link img-popup"></a>
            </div>
          </div>

          <div class="swiper-slide gallery-slide" data-category="events">
            <div class="gallery-card">
               <img src="user/assets/images/thumbs/school-students-sports.png" alt="Sports Event">
              <div class="gallery-info">
                <h4>Inter-School Sports</h4>
                <p>Competitive spirit and teamwork in action.</p>
              </div>
              <a href="user/assets/images/thumbs/school-students-sports.png" class="stretched-link img-popup"></a>
            </div>
          </div>

        </div>

        <!-- Navigation Buttons -->
        <div class="swiper-button-next swiper-nav-btn"></div>
        <div class="swiper-button-prev swiper-nav-btn"></div>

        <!-- Pagination -->
        <div class="swiper-pagination mt-4"></div>
      </div>
    </div>
  </section> --}}


  @php
    use Illuminate\Support\Str;
@endphp

<!-- Gallery Section -->
<section class="py-100">

    <div class="container">

        <!-- Filter Buttons -->
        <div class="gallery-filter-wrap" data-aos="fade-up">

            <button class="filter-btn active" data-filter="all">
                All Photos
            </button>

            @foreach ($categories as $category)

                <button class="filter-btn"
                        data-filter="{{ Str::slug($category->name) }}">

                    {{ $category->name }}

                </button>

            @endforeach

        </div>

        <!-- Swiper Gallery -->
        <div class="swiper gallery-swiper"
             data-aos="fade-up"
             data-aos-delay="200">

            <div class="swiper-wrapper" id="gallery-wrapper">

                @foreach ($categories as $category)

                    @foreach ($category->images as $project)

                        <div class="swiper-slide gallery-slide"
                             data-category="{{ Str::slug($category->name) }}">

                            <div class="gallery-card">

                                <img src="{{ asset('storage/' . $project->image) }}"
                                     alt="{{ $project->name }}">

                                <div class="gallery-info">

                                    <h4>
                                        {{ $project->name ?? $category->name }}
                                    </h4>

                                    <p>
                                        {{ $project->description ?? 'Gallery Image' }}
                                    </p>

                                </div>

                                <a href="{{ asset('storage/' . $project->image) }}"
                                   class="stretched-link img-popup">
                                </a>

                            </div>

                        </div>

                    @endforeach

                @endforeach

            </div>

            <!-- Navigation -->
            <div class="swiper-button-next swiper-nav-btn"></div>

            <div class="swiper-button-prev swiper-nav-btn"></div>

            <!-- Pagination -->
            <div class="swiper-pagination mt-4"></div>

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


{{-- Footer starts --}}
      @include('user.layouts.footer')
  {{-- Footer ends --}}
    {{-- =========================== --}}
 

    @include('user.layouts.script')
    
  <script>
    $(document).ready(function () {
      // Initialize Magnific Popup
      $('.img-popup').magnificPopup({ 
        type: 'image', 
        gallery: { enabled: true } 
      });

      // Initialize AOS
      AOS.init();

      // Initialize Swiper
      const swiper = new Swiper('.gallery-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        centeredSlides: false,
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          },
        }
      });

      // Gallery Filtering Logic
      $('.filter-btn').on('click', function () {
        const filterValue = $(this).attr('data-filter');
        
        // Update active button
        $('.filter-btn').removeClass('active');
        $(this).addClass('active');

        // Filter slides
        if (filterValue === 'all') {
          $('.gallery-slide').show();
        } else {
          $('.gallery-slide').hide();
          $(`.gallery-slide[data-category="${filterValue}"]`).show();
        }

        // Update Swiper
        swiper.update();
        swiper.slideTo(0);
      });
    });
  </script>
</body>
</html>
