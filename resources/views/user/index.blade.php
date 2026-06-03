<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Maruthi Senior Secondary School Puducherry - CBSE Affiliated.">
    <meta name="keywords" content="school, cbse, puducherry, education, maruthi school">

    <!-- SITE TITLE -->
    <title>Maruthi Senior Secondary School Puducherry | CBSE Affiliated | Pre-KG to Class 12</title>
    @include('user.layouts.links')
</head>

<body>

    {{-- loader starts --}}
    @include('user.layouts.loader')
    {{-- loader ends --}}

    {{-- START HEADER --}}
    @include('user.layouts.header')
    {{-- END HEADER --}}

    <!-- ==================== ADMISSION MARQUEE TICKER ==================== -->
    <div class="marquee-ticker">
        <div class="marquee-container">
            <span class="marquee-item"><i class="fa fa-bullhorn"></i> Admissions Open for Academic Year 2026-27</span>
            <span class="marquee-item"><i class="fa fa-certificate"></i> CBSE Affiliated Curriculum (Pre-KG to Class XII)</span>
            <span class="marquee-item"><i class="fa fa-clock"></i> Limited Seats Available - Apply Today!</span>
            <!-- Duplicated for seamless looping -->
            <span class="marquee-item"><i class="fa fa-bullhorn"></i> Admissions Open for Academic Year 2026-27</span>
            <span class="marquee-item"><i class="fa fa-certificate"></i> CBSE Affiliated Curriculum (Pre-KG to Class XII)</span>
            <span class="marquee-item"><i class="fa fa-clock"></i> Limited Seats Available - Apply Today!</span>
        </div>
    </div>
    <!-- ==================== END ADMISSION MARQUEE TICKER ==================== -->

    <!-- ==================== HERO BANNER (CAROUSEL SLIDER) ==================== -->
    <section class="hero-swiper-container">
        <div class="swiper hero-swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide hero-slide-item" style="background-image: url('{{ asset('user/assets/images/thumbs/banner-campus.png') }}');">
                    <div class="container max-w-1360-px h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-lg-7 col-md-10 text-start">
                                <div class="hero-text-block">
                                    <div class="hero-badge">
                                        <i class="fa fa-certificate"></i> CBSE Affiliated &middot; Aff No. 2930027
                                    </div>
                                    <h1 class="hero-title text-start">
                                        Excellence in <span>CBSE Education</span> Since 1997
                                    </h1>
                                    <p class="hero-desc text-start">
                                        Maruthi Senior Secondary School is a premier CBSE-affiliated institution in Puducherry, committed to holistic development and academic excellence.
                                    </p>
                                    <div class="hero-stats-row">
                                        <div class="hero-stat-chip">
                                            <i class="fa fa-users"></i> 20K+ Alumni
                                        </div>
                                        <div class="hero-stat-chip">
                                            <i class="fa fa-chalkboard-teacher"></i> 50+ Expert Faculty
                                        </div>
                                        <div class="hero-stat-chip">
                                            <i class="fa fa-award"></i> 25+ Years Legacy
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start gap-3 flex-wrap">
                                        <a href="{{ route('contact') }}" class="btn-school-primary">Apply Online</a>
                                        <a href="{{ route('about') }}" class="btn-school-outline border-white text-white">About Campus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide hero-slide-item" style="background-image: url('{{ asset('user/assets/images/thumbs/school-science-lab.png') }}');">
                    <div class="container max-w-1360-px h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-lg-7 col-md-10 text-start">
                                <div class="hero-text-block">
                                    <div class="hero-badge">
                                        <i class="fa fa-flask"></i> Modern Infrastructure
                                    </div>
                                    <h1 class="hero-title text-start">
                                        State-of-the-Art <span>Science & Computer Labs</span>
                                    </h1>
                                    <p class="hero-desc text-start">
                                        Nurturing curiosity and scientific thinking with fully-equipped physics, chemistry, biology, and computer laboratories.
                                    </p>
                                    <div class="hero-stats-row">
                                        <div class="hero-stat-chip">
                                            <i class="fa fa-microscope"></i> Advanced Equipment
                                        </div>
                                        <div class="hero-stat-chip">
                                            <i class="fa fa-desktop"></i> Smart Classrooms
                                        </div>
                                        <div class="hero-stat-chip">
                                            <i class="fa fa-brain"></i> Hands-on Learning
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start gap-3 flex-wrap">
                                        <a href="{{ route('contact') }}" class="btn-school-primary">Apply Online</a>
                                        <a href="{{ route('about') }}" class="btn-school-outline border-white text-white">Explore Campus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide hero-slide-item" style="background-image: url('{{ asset('user/assets/images/thumbs/banner-sports.png') }}');">
                    <div class="container max-w-1360-px h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-lg-7 col-md-10 text-start">
                                <div class="hero-text-block">
                                    <div class="hero-badge">
                                        <i class="fa fa-trophy"></i> Holistic Development
                                    </div>
                                    <h1 class="hero-title text-start">
                                        Nurturing <span>Talent and Creativity</span>
                                    </h1>
                                    <p class="hero-desc text-start">
                                        Comprehensive coaching for sports, arts, drama, dance, and music to inspire student confidence and self-expression.
                                    </p>
                                    <div class="hero-stats-row">
                                        <div class="hero-stat-chip">
                                            <i class="fa fa-running"></i> Sports Arena
                                        </div>
                                        <div class="hero-stat-chip">
                                            <i class="fa fa-palette"></i> Arts & Crafts
                                        </div>
                                        <div class="hero-stat-chip">
                                            <i class="fa fa-music"></i> Performing Arts
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start gap-3 flex-wrap">
                                        <a href="{{ route('contact') }}" class="btn-school-primary">Apply Online</a>
                                        <a href="{{ route('about') }}" class="btn-school-outline border-white text-white">Our Facilities</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Swiper controls -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- ==================== END HERO BANNER ==================== -->

    <!-- ==================== THREE BENEFITS BANNER ==================== -->
    <section class="benefits-banner">
        <div class="container max-w-1360-px">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-item">
                        <div class="benefit-icon-box">
                            <i class="fa fa-certificate"></i>
                        </div>
                        <div class="benefit-text-box">
                            Get the desired certificate delivered
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-item">
                        <div class="benefit-icon-box">
                            <i class="fa fa-book-reader"></i>
                        </div>
                        <div class="benefit-text-box">
                            Help you understand yourself better
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-item">
                        <div class="benefit-icon-box">
                            <i class="fa fa-lightbulb"></i>
                        </div>
                        <div class="benefit-text-box">
                            Give the right advice to help life career
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== END THREE BENEFITS BANNER ==================== -->

    <!-- ==================== ABOUT SCHOOL OVERLAPPING LAYOUT ==================== -->
    <section class="section-padding">
        <div class="container max-w-1360-px">
            <div class="row gy-5 align-items-center">
                <!-- Left overlapping images column -->
                <div class="col-lg-6">
                    <div class="about-image-wrapper">
                        <!-- Yellow decoration shape -->
                        <svg class="decor-zigzag" width="80" height="30" viewBox="0 0 100 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M 0,20 L 20,0 L 40,20 L 60,0 L 80,20 L 100,0" stroke="#f59e0b" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        
                        <!-- Main large image -->
                        <img src="{{ asset('user/assets/images/thumbs/school-classroom.jpg') }}" alt="Student Learning" class="about-img-main">
                        
                        <!-- Overlapping smaller image -->
                        <img src="{{ asset('user/assets/images/thumbs/school-students-group.png') }}" alt="Group Activities" class="about-img-sub">
                        
                        <!-- Dotted shape -->
                        <svg class="decor-dots" width="80" height="60" viewBox="0 0 80 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="10" cy="10" r="4" fill="#047857" />
                            <circle cx="30" cy="10" r="4" fill="#047857" />
                            <circle cx="50" cy="10" r="4" fill="#047857" />
                            <circle cx="70" cy="10" r="4" fill="#047857" />
                            <circle cx="10" cy="30" r="4" fill="#047857" />
                            <circle cx="30" cy="30" r="4" fill="#047857" />
                            <circle cx="50" cy="30" r="4" fill="#047857" />
                            <circle cx="70" cy="30" r="4" fill="#047857" />
                            <circle cx="10" cy="50" r="4" fill="#047857" />
                            <circle cx="30" cy="50" r="4" fill="#047857" />
                            <circle cx="50" cy="50" r="4" fill="#047857" />
                            <circle cx="70" cy="50" r="4" fill="#047857" />
                        </svg>
                    </div>
                </div>

                <!-- Right content details column -->
                <div class="col-lg-6">
                    <span class="section-badge">Welcome</span>
                    <h2 class="section-title mb-3" style="font-size: 2.3rem; font-weight:800; line-height:1.2;">
                        Including large benefit when you enroll from our courses
                    </h2>
                    <p class="text-muted mb-4" style="font-size:0.95rem; line-height:1.6;">
                        At Maruthi Senior Secondary School, we create a supportive learning environment focused on character, science, and leadership. We guide our students to discover their potentials and achieve top board scores.
                    </p>

                    <!-- Feature Row Side-by-Side -->
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="about-feature-box">
                                <div class="about-feature-icon icon-orange">
                                    <i class="fa fa-book-open"></i>
                                </div>
                                <div>
                                    <h4 class="about-feature-title">Multiple course participation</h4>
                                    <p class="about-feature-desc">Rigorous CBSE standard curriculum with extracurricular focus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-feature-box">
                                <div class="about-feature-icon icon-blue">
                                    <i class="fa fa-bolt"></i>
                                </div>
                                <div>
                                    <h4 class="about-feature-title">Vert fast & so easy to create</h4>
                                    <p class="about-feature-desc">Smartboards and advanced science/comp lab practical programs.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="text-muted mb-4" style="font-size:0.92rem; line-height:1.6;">
                        Our institution has a legacy of excellence for more than 25 years. We prepare every child for future professional courses and global standard exams.
                    </p>

                    <div>
                        <a href="{{ route('about') }}" class="btn-school-primary" style="padding: 12px 28px !important;">Start Learning Now &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== END ABOUT SCHOOL OVERLAPPING LAYOUT ==================== -->

    <!-- ==================== FACILITIES CARD GRID ==================== -->
    <section class="section-padding-gray bg-main-10">
        <div class="container max-w-1360-px">
            <div class="section-header">
                <span class="section-badge">Campus Facilities</span>
                <h2 class="section-title">Academic & Extra-Curricular Facilities</h2>
                <p class="section-desc">Providing the best infrastructure to support interactive and practical learning.</p>
            </div>
            <div class="swiper facilities-swiper">
                <div class="swiper-wrapper">
                    <!-- Facility 1 -->
                    <div class="swiper-slide h-auto">
                        <div class="school-card">
                            <div class="school-card-img-wrap">
                                <img src="{{ asset('user/assets/images/thumbs/school-science-lab.png') }}" alt="Science Labs" class="school-card-img">
                            </div>
                            <div class="school-card-body">
                                <h3 class="school-card-title">Modern Science Labs</h3>
                                <p class="school-card-desc">Fully equipped physics, chemistry, and biology labs for hands-on experiments.</p>
                                <a href="{{ route('event_page') }}" class="btn-school-primary mt-auto text-center py-2">Explore Events <i class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Facility 2 -->
                    <div class="swiper-slide h-auto">
                        <div class="school-card">
                            <div class="school-card-img-wrap">
                                <img src="{{ asset('user/assets/images/thumbs/school-classroom.png') }}" alt="Computer Labs" class="school-card-img">
                            </div>
                            <div class="school-card-body">
                                <h3 class="school-card-title">Advanced Computer Labs</h3>
                                <p class="school-card-desc">High-speed computers and internet access to learn essential digital skills.</p>
                                <a href="{{ route('event_page') }}" class="btn-school-primary mt-auto text-center py-2">Explore Events <i class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Facility 3 -->
                    <div class="swiper-slide h-auto">
                        <div class="school-card">
                            <div class="school-card-img-wrap">
                                <img src="{{ asset('user/assets/images/thumbs/banner-classroom.png') }}" alt="Smart Classrooms" class="school-card-img">
                            </div>
                            <div class="school-card-body">
                                <h3 class="school-card-title">Smart Classrooms</h3>
                                <p class="school-card-desc">Interactive smart boards that make learning engaging and fun for students.</p>
                                <a href="{{ route('event_page') }}" class="btn-school-primary mt-auto text-center py-2">Explore Events <i class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Facility 4 -->
                    <div class="swiper-slide h-auto">
                        <div class="school-card">
                            <div class="school-card-img-wrap">
                                <img src="{{ asset('user/assets/images/thumbs/school-sports-ground.png') }}" alt="Sports Arena" class="school-card-img">
                            </div>
                            <div class="school-card-body">
                                <h3 class="school-card-title">Sports Arena</h3>
                                <p class="school-card-desc">Spacious playgrounds and tracks encouraging sports, fitness, and teamwork.</p>
                                <a href="{{ route('event_page') }}" class="btn-school-primary mt-auto text-center py-2">Explore Events <i class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Facility 5 -->
                    <div class="swiper-slide h-auto">
                        <div class="school-card">
                            <div class="school-card-img-wrap">
                                <img src="{{ asset('user/assets/images/thumbs/school-annual-day.png') }}" alt="Cultural Activities" class="school-card-img">
                            </div>
                            <div class="school-card-body">
                                <h3 class="school-card-title">Cultural Activities</h3>
                                <p class="school-card-desc">Guidance in drama, music, dance, and arts to build confidence and creativity.</p>
                                <a href="{{ route('event_page') }}" class="btn-school-primary mt-auto text-center py-2">Explore Events <i class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Facility 6 -->
                    <div class="swiper-slide h-auto">
                        <div class="school-card">
                            <div class="school-card-img-wrap">
                                <img src="{{ asset('user/assets/images/thumbs/school-library.png') }}" alt="Library" class="school-card-img">
                            </div>
                            <div class="school-card-body">
                                <h3 class="school-card-title">Resourceful Library</h3>
                                <p class="school-card-desc">Thousands of academic books, references, and fiction to nurture reading habits.</p>
                                <a href="{{ route('event_page') }}" class="btn-school-primary mt-auto text-center py-2">Explore Events <i class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination mt-4"></div>
                <!-- Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <!-- ==================== END FACILITIES CARD GRID ==================== -->

    <!-- ==================== LEADERS / TEACHERS SECTION ==================== -->
    <section class="section-padding">
        <div class="container max-w-1360-px">
            <div class="section-header text-center">
                <span class="section-badge"><i class="fa fa-users me-1"></i> Our Leaders</span>
                <h2 class="section-title">Meet Our Dedicated Leadership</h2>
                <p class="section-desc"><i class="fa fa-star text-warning me-1"></i> The experienced visionaries guiding our school towards academic excellence. <i class="fa fa-graduation-cap text-success ms-1"></i></p>
            </div>
            <div class="swiper leaders-swiper">
                <div class="swiper-wrapper">
                    <!-- Director -->
                    <div class="swiper-slide h-auto">
                        <div class="school-card">
                            <div class="school-card-img-wrap teacher-card-img-wrap">
                                <img src="{{ asset('user/assets/images/thumbs/director.png') }}" alt="Dr. K. Maruthirajan - Director" class="school-card-img teacher-card-img">
                            </div>
                            <div class="school-card-body">
                                <h3 class="school-card-title">Dr. K. Maruthirajan, <small class="text-muted" style="font-size: 0.85rem; font-weight: 500;">M.A., Ph.D.</small></h3>
                                <p class="leader-role mb-2"><i class="fa fa-user-shield me-1"></i> Director</p>
                                <p class="school-card-desc">A visionary educationist leading strategic growth, policy formulation, and global collaborations at Maruthi School.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Correspondent -->
                    <div class="swiper-slide h-auto">
                        <div class="school-card">
                            <div class="school-card-img-wrap teacher-card-img-wrap">
                                <img src="{{ asset('user/assets/images/thumbs/co-founder.png') }}" alt="Shri. V. Annamalai - Correspondent" class="school-card-img teacher-card-img">
                            </div>
                            <div class="school-card-body">
                                <h3 class="school-card-title">Shri. V. Annamalai, <small class="text-muted" style="font-size: 0.85rem; font-weight: 500;">B.E., M.B.A.</small></h3>
                                <p class="leader-role mb-2"><i class="fa fa-handshake me-1"></i> Correspondent</p>
                                <p class="school-card-desc">Co-founded the institution in 1997 with a vision to bring quality, accessible CBSE education to Puducherry.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Principal -->
                    <div class="swiper-slide h-auto">
                        <div class="school-card">
                            <div class="school-card-img-wrap teacher-card-img-wrap">
                                <img src="{{ asset('user/assets/images/thumbs/principal.png') }}" alt="Dr. S. Murugesan - Principal" class="school-card-img teacher-card-img">
                            </div>
                            <div class="school-card-body">
                                <h3 class="school-card-title">Dr. S. Murugesan, <small class="text-muted" style="font-size: 0.85rem; font-weight: 500;">M.Sc., M.Ed., Ph.D.</small></h3>
                                <p class="leader-role mb-2"><i class="fa fa-graduation-cap me-1"></i> Principal</p>
                                <p class="school-card-desc">With 28+ years of dedicated service in education, guiding Maruthi Senior Secondary School's academic success.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Treasurer -->
                    <div class="swiper-slide h-auto">
                        <div class="school-card">
                            <div class="school-card-img-wrap teacher-card-img-wrap">
                                <img src="{{ asset('user/assets/images/thumbs/vice-principal.png') }}" alt="Mrs. R. Kavitha - Treasurer" class="school-card-img teacher-card-img">
                            </div>
                            <div class="school-card-body">
                                <h3 class="school-card-title">Mrs. R. Kavitha, <small class="text-muted" style="font-size: 0.85rem; font-weight: 500;">M.Com., M.B.A.</small></h3>
                                <p class="leader-role mb-2"><i class="fa fa-wallet me-1"></i> Treasurer</p>
                                <p class="school-card-desc">Managing financial strategies, budgeting, and institutional resources to ensure state-of-the-art facilities.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination mt-4"></div>
                <!-- Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <!-- ==================== END LEADERS / TEACHERS SECTION ==================== -->

    <!-- ==================== QUICK STATS SECTION ==================== -->
    <section class="stats-grid">
        <div class="container max-w-1360-px">
            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="stat-block">
                        <div class="stat-num">25+</div>
                        <div class="stat-text">Years Excellence</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-block">
                        <div class="stat-num">20K+</div>
                        <div class="stat-text">Proud Alumni</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-block">
                        <div class="stat-num">50+</div>
                        <div class="stat-text">Expert Faculty</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-block">
                        <div class="stat-num">100%</div>
                        <div class="stat-text">CBSE Board Pass</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== END QUICK STATS SECTION ==================== -->

    <!-- ==================== NEWS & EVENTS SECTION ==================== -->
    <section class="section-padding-gray bg-main-10">
        <div class="container max-w-1360-px">
            <div class="section-header">
                <span class="section-badge">Updates</span>
                <h2 class="section-title">Latest News & Upcoming Events</h2>
                <p class="section-desc">Stay informed about the latest achievements, notices, and events at Maruthi School.</p>
            </div>
            <div class="row g-4">
                <!-- Event 1 -->
                <div class="col-md-4">
                    <div class="school-card position-relative">
                        <span class="news-date-badge">12 JUN</span>
                        <div class="school-card-img-wrap">
                            <img src="{{ asset('user/assets/images/thumbs/school-annual-day.png') }}" alt="Annual Day" class="school-card-img">
                        </div>
                        <div class="school-card-body">
                            <h3 class="school-card-title">Annual Day Celebrations</h3>
                            <p class="school-card-desc">Annual day cultural program celebrating student creativity and talents.</p>
                            <div class="school-card-footer">
                                <button type="button" class="btn-school-primary w-100 btn-sm" data-bs-toggle="modal" data-bs-target="#eventModal1">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Event 2 -->
                <div class="col-md-4">
                    <div class="school-card position-relative">
                        <span class="news-date-badge">08 JUN</span>
                        <div class="school-card-img-wrap">
                            <img src="{{ asset('user/assets/images/thumbs/school-science-lab.png') }}" alt="Science Day" class="school-card-img">
                        </div>
                        <div class="school-card-body">
                            <h3 class="school-card-title">National Science Day</h3>
                            <p class="school-card-desc">Students displaying creative physics and chemistry models at the exhibition.</p>
                            <div class="school-card-footer">
                                <button type="button" class="btn-school-primary w-100 btn-sm" data-bs-toggle="modal" data-bs-target="#eventModal2">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Event 3 -->
                <div class="col-md-4">
                    <div class="school-card position-relative">
                        <span class="news-date-badge">04 JUN</span>
                        <div class="school-card-img-wrap">
                            <img src="{{ asset('user/assets/images/thumbs/school-students-group.png') }}" alt="French Visit" class="school-card-img">
                        </div>
                        <div class="school-card-body">
                            <h3 class="school-card-title">French Cultural Exchange</h3>
                            <p class="school-card-desc">Welcoming students from partner schools for global educational interaction.</p>
                            <div class="school-card-footer">
                                <button type="button" class="btn-school-primary w-100 btn-sm" data-bs-toggle="modal" data-bs-target="#eventModal3">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== END NEWS & EVENTS SECTION ==================== -->

      <!-- ==================== GALLERY IMAGE CARDS SECTION ==================== -->
    <section class="section-padding">
        <div class="container max-w-1360-px">
            <div class="section-header">
                <span class="section-badge">Gallery</span>
                <h2 class="section-title">School Campus Highlights</h2>
                <p class="section-desc">Visual glimpses of learning activities, student life, and school infrastructure.</p>
            </div>
            <div class="row g-4">
                <!-- Gallery 1 -->
                <div class="col-md-4 col-sm-6">
                    <div class="school-card">
                        <div class="school-card-img-wrap">
                            <img src="{{ asset('user/assets/images/thumbs/banner-campus.png') }}" alt="Campus Landscape" class="school-card-img">
                        </div>
                        <div class="school-card-body">
                            <h3 class="school-card-title">School Campus View</h3>
                            <p class="school-card-desc">The beautiful exterior view of our primary and secondary school campus.</p>
                        </div>
                    </div>
                </div>
                <!-- Gallery 2 -->
                <div class="col-md-4 col-sm-6">
                    <div class="school-card">
                        <div class="school-card-img-wrap">
                            <img src="{{ asset('user/assets/images/thumbs/banner-classroom.png') }}" alt="Interactive Learning" class="school-card-img">
                        </div>
                        <div class="school-card-body">
                            <h3 class="school-card-title">Interactive Smart Class</h3>
                            <p class="school-card-desc">Students attending dynamic sessions using advanced digital smartboards.</p>
                        </div>
                    </div>
                </div>
                <!-- Gallery 3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="school-card">
                        <div class="school-card-img-wrap">
                            <img src="{{ asset('user/assets/images/thumbs/banner-sports.png') }}" alt="Sports Activities" class="school-card-img">
                        </div>
                        <div class="school-card-body">
                            <h3 class="school-card-title">Annual Sports Meet</h3>
                            <p class="school-card-desc">Students demonstrating sportsmanship and energy in tracks and field sports.</p>
                        </div>
                    </div>
                </div>
                <!-- Gallery 4 -->
                <div class="col-md-4 col-sm-6">
                    <div class="school-card">
                        <div class="school-card-img-wrap">
                            <img src="{{ asset('user/assets/images/thumbs/school-classroom.jpg') }}" alt="Students Class" class="school-card-img">
                        </div>
                        <div class="school-card-body">
                            <h3 class="school-card-title">General Classroom Sessions</h3>
                            <p class="school-card-desc">A standard classroom section focused on collaborative group discussions.</p>
                        </div>
                    </div>
                </div>
                <!-- Gallery 5 -->
                <div class="col-md-4 col-sm-6">
                    <div class="school-card">
                        <div class="school-card-img-wrap">
                            <img src="{{ asset('user/assets/images/thumbs/school-library.png') }}" alt="Library Session" class="school-card-img">
                        </div>
                        <div class="school-card-body">
                            <h3 class="school-card-title">Research & Reading Time</h3>
                            <p class="school-card-desc">Students expanding their horizons in our fully-stocked school library.</p>
                        </div>
                    </div>
                </div>
                <!-- Gallery 6 -->
                <div class="col-md-4 col-sm-6">
                    <div class="school-card">
                        <div class="school-card-img-wrap">
                            <img src="{{ asset('user/assets/images/thumbs/school-sports-ground.png') }}" alt="Outdoor Football" class="school-card-img">
                        </div>
                        <div class="school-card-body">
                            <h3 class="school-card-title">Outdoor Games & Playground</h3>
                            <p class="school-card-desc">Students playing football on the green grass sports field during games period.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="{{ route('gallery') }}" class="btn-school-outline">View Complete Gallery</a>
            </div>
        </div>
    </section>
    <!-- ==================== END GALLERY IMAGE CARDS SECTION ==================== -->

    <!-- ==================== TESTIMONIALS SECTION ==================== -->
    <section class="bg-main-10 pt-100 pb-100">
        <div class="container max-w-1400-px mx-auto">
            <div class="text-center tw-mb-15 mx-auto">
                <div class="tw-py-1 tw-ps-105 tw-pe-4 bg-white rounded-pill d-inline-flex align-items-center tw-gap-3 tw-mb-5"
                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <span class="tw-w-6 tw-h-6 border-main-100 border bg-white rounded-circle text-main-600 d-flex align-items-center justify-content-center tw-text-305">
                        <i class="ph-fill ph-star-four"></i>
                    </span>
                    <span class="fw-normal tw-text-4 text-main-600">
                        Parent & Student Testimonials
                    </span>
                </div>
                <h3 class="fw-semibold text-neutral-950 tw-mb-5" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    What Parents & Students Say About Us
                </h3>
                <p class="fw-normal tw-text-4 text-neutral-500" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    Hear from our community about their experience at Maruthi Senior Secondary School.
                </p>
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
                                    "My children have been studying at Maruthi School since Pre-KG. The teachers are incredibly dedicated, and the CBSE curriculum is delivered with great care. I've seen remarkable growth in my kids academically and personally."
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
                                    "The school's focus on both academics and extracurricular activities is outstanding. My daughter excels in sports and studies equally, thanks to the balanced approach at Maruthi School. Best CBSE school in Puducherry!"
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
                                    "Maruthi School gave me the foundation I needed for my career. The science labs, computer facilities, and the mentorship from teachers shaped who I am today. Forever grateful to this institution."
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
                                    "The school provides a safe, nurturing environment where children can thrive. The cultural exchange programs and sports events give students exposure beyond textbooks. Highly recommend Maruthi School!"
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
    <!-- ==================== END TESTIMONIALS SECTION ==================== -->

  

    <!-- ==================== CALL TO ACTION BANNER ==================== -->
    <section class="cta-flat">
        <div class="container max-w-1360-px">
            <div class="row align-items-center gy-4 text-lg-start text-center">
                <div class="col-lg-8">
                    <h2>Admissions Open for Academic Year 2026-27</h2>
                    <p>Enroll your child in Puducherry's leading CBSE school today and witness their comprehensive growth.</p>
                </div>
                <div class="col-lg-4 text-lg-end text-center">
                    <div class="d-inline-flex gap-3 flex-wrap">
                        <a href="{{ route('contact') }}" class="btn-school-primary bg-white text-dark border-white">Apply For Admission</a>
                        <a href="tel:+919442399777" class="btn-school-outline border-white text-white">Call Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== END CALL TO ACTION BANNER ==================== -->

    <!-- ==================== BASIC BOOTSTRAP MODALS (NO FANCY ANIMATIONS) ==================== -->
    <!-- Modal 1: Annual Day -->
    <div class="modal fade" id="eventModal1" tabindex="-1" aria-labelledby="eventModal1Label" aria-hidden="true" style="transition: none !important;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="eventModal1Label">Annual Day Celebrations</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('user/assets/images/thumbs/school-annual-day.png') }}" class="img-fluid rounded mb-3" alt="Annual Day">
                    <p class="fw-bold text-primary-school mb-2"><i class="fa fa-calendar me-2"></i>June 12, 2026</p>
                    <p>Our Annual Day Celebrations are a grand cultural extravaganza showcasing the diverse talents of our students in music, dance, drama, and arts. Parents and distinguished guests are cordially invited to witness this memorable event celebrating student achievements and creative expressions.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2: Science Day -->
    <div class="modal fade" id="eventModal2" tabindex="-1" aria-labelledby="eventModal2Label" aria-hidden="true" style="transition: none !important;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="eventModal2Label">National Science Day</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('user/assets/images/thumbs/school-science-lab.png') }}" class="img-fluid rounded mb-3" alt="Science Day">
                    <p class="fw-bold text-primary-school mb-2"><i class="fa fa-calendar me-2"></i>June 08, 2026</p>
                    <p>National Science Day at Maruthi School features a grand science exhibition where students display physics, chemistry, biology, and computer models. The objective is to foster a scientific temper and analytical spirit among students.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3: French Visit -->
    <div class="modal fade" id="eventModal3" tabindex="-1" aria-labelledby="eventModal3Label" aria-hidden="true" style="transition: none !important;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="eventModal3Label">French Cultural Exchange</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('user/assets/images/thumbs/school-students-group.png') }}" class="img-fluid rounded mb-3" alt="French Visit">
                    <p class="fw-bold text-primary-school mb-2"><i class="fa fa-calendar me-2"></i>June 04, 2026</p>
                    <p>In partnership with international educational organizations, our school welcomes students and teachers from France for an interactive cultural exchange program, highlighting multilingual learning and friendship building.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ==================== END BASIC BOOTSTRAP MODALS ==================== -->

    {{-- Footer starts --}}
    @include('user.layouts.footer')
    {{-- Footer ends --}}

    @include('user.layouts.script')

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Disable AOS animations programmatically
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    disable: true
                });
            }
            // Deactivate and stop Lenis smooth scrolling if active
            if (typeof Lenis !== 'undefined') {
                try {
                    const lenis = new Lenis();
                    lenis.destroy();
                } catch(e) {}
            }

            // Initialize Hero Swiper
            if (typeof Swiper !== 'undefined') {
                const heroSwiper = new Swiper('.hero-swiper', {
                    slidesPerView: 1,
                    loop: true,
                    speed: 1000,
                    autoplay: {
                        delay: 4500,
                        disableOnInteraction: false
                    },
                    pagination: {
                        el: '.hero-swiper-container .swiper-pagination',
                        clickable: true
                    },
                    navigation: {
                        nextEl: '.hero-swiper-container .swiper-button-next',
                        prevEl: '.hero-swiper-container .swiper-button-prev'
                    }
                });

                // Initialize Facilities Swiper
                const facilitiesSwiper = new Swiper('.facilities-swiper', {
                    slidesPerView: 3,
                    spaceBetween: 24,
                    loop: true,
                    speed: 800,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                        pauseOnMouseEnter: true
                    },
                    pagination: {
                        el: '.facilities-swiper .swiper-pagination',
                        clickable: true
                    },
                    navigation: {
                        nextEl: '.facilities-swiper .swiper-button-next',
                        prevEl: '.facilities-swiper .swiper-button-prev'
                    },
                    breakpoints: {
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 16
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 24
                        }
                    }
                });

                // Initialize Leaders Swiper
                const leadersSwiper = new Swiper('.leaders-swiper', {
                    slidesPerView: 3,
                    spaceBetween: 24,
                    loop: true,
                    speed: 800,
                    autoplay: {
                        delay: 6000,
                        disableOnInteraction: false,
                        pauseOnMouseEnter: true
                    },
                    pagination: {
                        el: '.leaders-swiper .swiper-pagination',
                        clickable: true
                    },
                    navigation: {
                        nextEl: '.leaders-swiper .swiper-button-next',
                        prevEl: '.leaders-swiper .swiper-button-prev'
                    },
                    breakpoints: {
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 16
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 24
                        }
                    }
                });
            }
        });
    </script>
</body>
</html>
