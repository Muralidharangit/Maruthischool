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

    <!-- ============================== BREADCRUMB BANNER ============================ -->
    <section class="breadcrumb-section py-4 py-md-5 bg-main-600 position-relative overflow-hidden">
        <img src="{{ asset('user/assets/images/shape/banner-shape-4.png') }}" alt="shape"
            class="position-absolute top-0 opacity-25 d-none d-md-block">
        <div class="container position-relative z-1 py-2 py-md-3">
            <div class="text-center text-md-start">
                <span class="badge bg-white text-main-600 px-3 py-2 rounded-pill fw-bold text-uppercase mb-2 shadow-sm">
                    <i class="ph-fill ph-camera me-1"></i> Campus Life &amp; Activities
                </span>
                <h1 class="text-white fw-bold mb-2 h2" data-aos="fade-up">Photo Gallery</h1>
                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="100">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-white opacity-75" aria-current="page">Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    @php
        use Illuminate\Support\Str;
        // Check if we have active categories with images
        $hasDynamicImages = false;
        if (isset($categories) && $categories->count() > 0) {
            foreach ($categories as $cat) {
                if ($cat->images && $cat->images->count() > 0) {
                    $hasDynamicImages = true;
                    break;
                }
            }
        }
    @endphp

    <!-- ============================== GALLERY SECTION ============================ -->
    <section class="py-100 bg-dot-grid">
        <div class="container">

            @if ($hasDynamicImages)
                <!-- Filter Buttons (Dynamic from DB) -->
                <div class="gallery-filter-wrap mb-5" data-aos="fade-up">
                    <button class="filter-btn active" data-filter="all">
                        <i class="ph-fill ph-squares-four me-1"></i> All Photos
                    </button>
                    @foreach ($categories as $category)
                        @if ($category->images && $category->images->count() > 0)
                            <button class="filter-btn" data-filter="{{ Str::slug($category->name) }}">
                                {{ $category->name }}
                            </button>
                        @endif
                    @endforeach
                </div>

                <!-- Swiper Gallery (Dynamic) -->
                <div class="swiper gallery-swiper" data-aos="fade-up" data-aos-delay="150">
                    <div class="swiper-wrapper" id="gallery-wrapper">
                        @foreach ($categories as $category)
                            @foreach ($category->images as $project)
                                <div class="swiper-slide gallery-slide" data-category="{{ Str::slug($category->name) }}">
                                    <div class="gallery-card">
                                        <img src="{{ Str::startsWith($project->image, 'http') ? $project->image : asset('storage/' . $project->image) }}"
                                             alt="{{ $project->name ?? $category->name }}"
                                             onerror="this.onerror=null;this.src='{{ asset('user/assets/images/thumbs/school-hero-banner.png') }}';">
                                        <div class="gallery-info">
                                            <h4>{{ $project->name ?: $category->name }}</h4>
                                            <p>{{ $project->description ?: 'Maruthi Senior Secondary School' }}</p>
                                        </div>
                                        <a href="{{ Str::startsWith($project->image, 'http') ? $project->image : asset('storage/' . $project->image) }}"
                                           class="stretched-link img-popup"></a>
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

            @else
                <!-- Filter Buttons (Curated Campus Categories) -->
                <div class="gallery-filter-wrap mb-5" data-aos="fade-up">
                    <button class="filter-btn active" data-filter="all"><i class="ph-fill ph-squares-four me-1"></i> All Photos</button>
                    <button class="filter-btn" data-filter="campus">Campus &amp; Facilities</button>
                    <button class="filter-btn" data-filter="academic">Academics &amp; Labs</button>
                    <button class="filter-btn" data-filter="sports">Sports &amp; Martial Arts</button>
                    <button class="filter-btn" data-filter="events">Events &amp; Celebrations</button>
                </div>

                <!-- Swiper Gallery (Curated Campus Collection) -->
                <div class="swiper gallery-swiper" data-aos="fade-up" data-aos-delay="150">
                    <div class="swiper-wrapper" id="gallery-wrapper">

                        <!-- Item 1: Main Campus -->
                        <div class="swiper-slide gallery-slide" data-category="campus">
                            <div class="gallery-card">
                                <img src="{{ asset('user/assets/images/thumbs/school-hero-banner.png') }}" alt="Main Campus">
                                <div class="gallery-info">
                                    <h4>Main Campus Building</h4>
                                    <p>Serene, green, modern infrastructure spanning Lawspet, Puducherry.</p>
                                </div>
                                <a href="{{ asset('user/assets/images/thumbs/school-hero-banner.png') }}" class="stretched-link img-popup"></a>
                            </div>
                        </div>

                        <!-- Item 2: Science Labs -->
                        <div class="swiper-slide gallery-slide" data-category="academic">
                            <div class="gallery-card">
                                <img src="{{ asset('user/assets/images/thumbs/school-science-lab.png') }}" alt="Science Laboratories">
                                <div class="gallery-info">
                                    <h4>Advanced Science Labs</h4>
                                    <p>Physics, Chemistry, and Biology laboratories for experiential learning.</p>
                                </div>
                                <a href="{{ asset('user/assets/images/thumbs/school-science-lab.png') }}" class="stretched-link img-popup"></a>
                            </div>
                        </div>

                        <!-- Item 3: Classroom -->
                        <div class="swiper-slide gallery-slide" data-category="academic">
                            <div class="gallery-card">
                                <img src="{{ asset('user/assets/images/thumbs/school-classroom.jpg') }}" alt="Smart Classrooms">
                                <div class="gallery-info">
                                    <h4>Interactive Smart Classrooms</h4>
                                    <p>Digital smartboards and multimedia learning pedagogy.</p>
                                </div>
                                <a href="{{ asset('user/assets/images/thumbs/school-classroom.jpg') }}" class="stretched-link img-popup"></a>
                            </div>
                        </div>

                        <!-- Item 4: Library -->
                        <div class="swiper-slide gallery-slide" data-category="academic">
                            <div class="gallery-card">
                                <img src="{{ asset('user/assets/images/thumbs/school-library.png') }}" alt="School Library">
                                <div class="gallery-info">
                                    <h4>5,000+ Books Library</h4>
                                    <p>Extensive repository of books, periodicals, and research journals.</p>
                                </div>
                                <a href="{{ asset('user/assets/images/thumbs/school-library.png') }}" class="stretched-link img-popup"></a>
                            </div>
                        </div>

                        <!-- Item 5: Annual Day -->
                        <div class="swiper-slide gallery-slide" data-category="events">
                            <div class="gallery-card">
                                <img src="{{ asset('user/assets/images/thumbs/school-annual-day.png') }}" alt="Annual Day Celebrations">
                                <div class="gallery-info">
                                    <h4>Annual Cultural Extravaganza</h4>
                                    <p>Showcasing vibrant music, classical dance, drama, and student talents.</p>
                                </div>
                                <a href="{{ asset('user/assets/images/thumbs/school-annual-day.png') }}" class="stretched-link img-popup"></a>
                            </div>
                        </div>

                        <!-- Item 6: Sports & Athletics -->
                        <div class="swiper-slide gallery-slide" data-category="sports">
                            <div class="gallery-card">
                                <img src="{{ asset('user/assets/images/thumbs/banner-sports.png') }}" alt="Sports and Athletics">
                                <div class="gallery-info">
                                    <h4>Sports &amp; Martial Arts Arena</h4>
                                    <p>Silambam, Karate, Taekwondo, Cricket, and Track Athletics.</p>
                                </div>
                                <a href="{{ asset('user/assets/images/thumbs/banner-sports.png') }}" class="stretched-link img-popup"></a>
                            </div>
                        </div>

                        <!-- Item 7: Student Community -->
                        <div class="swiper-slide gallery-slide" data-category="campus">
                            <div class="gallery-card">
                                <img src="{{ asset('user/assets/images/thumbs/school-students-group.png') }}" alt="Student Community">
                                <div class="gallery-info">
                                    <h4>Vibrant Student Community</h4>
                                    <p>Cultivating friendships, teamwork, leadership, and lifelong values.</p>
                                </div>
                                <a href="{{ asset('user/assets/images/thumbs/school-students-group.png') }}" class="stretched-link img-popup"></a>
                            </div>
                        </div>

                    </div>

                    <!-- Navigation -->
                    <div class="swiper-button-next swiper-nav-btn"></div>
                    <div class="swiper-button-prev swiper-nav-btn"></div>

                    <!-- Pagination -->
                    <div class="swiper-pagination mt-4"></div>
                </div>
            @endif

        </div>
    </section>

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
