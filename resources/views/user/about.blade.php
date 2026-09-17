<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Maruthi Senior Secondary School" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SITE TITLE -->
    <title>About Us | Maruthi Senior Secondary School Puducherry | CBSE Affiliated</title>
    @include('user.layouts.links')
    <!-- External About Custom CSS -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/about.css') }}">
</head>

<body>
    {{-- Loader --}}
    @include('user.layouts.loader')

    {{-- Header --}}
    @include('user.layouts.header')

    <div class="about-page-wrapper overflow-hidden">
        <!-- ============================== BREADCRUMB BANNER ============================ -->
        <section class="breadcrumb-section py-4 py-md-5 bg-main-600 position-relative overflow-hidden">
            <img src="{{ asset('user/assets/images/shape/banner-shape-4.png') }}" alt="shape"
                class="position-absolute top-0 opacity-25 d-none d-md-block">
            <div class="container position-relative z-1 py-2 py-md-3">
                <div class="text-center text-md-start">
                    <span class="badge bg-white text-main-600 px-3 py-2 rounded-pill fw-bold text-uppercase mb-2 shadow-sm">
                        <i class="ph-fill ph-graduation-cap me-1"></i> Wisdom Wins
                    </span>
                    <h1 class="text-white fw-bold mb-2 h2" data-aos="fade-up">About Maruthi</h1>
                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="100">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}" class="text-white text-decoration-none">Home</a></li>
                            <li class="breadcrumb-item active text-white opacity-75" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <!-- ============================== SECTION 1: ABOUT US & WELCOME ============================ -->
        <section class="about-section py-4 py-md-5 bg-white">
            <div class="container">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="about-hero-badge mb-3">
                            <i class="ph-fill ph-sparkle"></i>
                            <span>Welcome to Maruthi</span>
                        </div>
                        <h2 class="h3 fw-bold text-neutral-950 mb-3">
                            Nurturing Young Minds Through Academic &amp; Holistic Excellence
                        </h2>
                        <p class="text-neutral-700 mb-3 about-text-lead">
                            Welcome to <strong>Maruthi Senior Secondary School</strong>, a premier educational institution in Puducherry committed to nurturing young minds through academic excellence, character, discipline, creativity, and holistic development.
                        </p>
                        <p class="text-neutral-600 mb-4 about-text-body">
                            Established with a vision to provide quality education and shape responsible citizens, Maruthi Senior Secondary School has grown into a vibrant learning community where every child is encouraged to discover their potential, develop confidence, and pursue excellence.
                        </p>

                        <!-- Motto Highlight Box -->
                        <div class="motto-banner-card mb-4" data-aos="zoom-in" data-aos-delay="150">
                            <div class="d-flex align-items-start gap-3">
                                <span class="p-2 bg-white bg-opacity-20 rounded-circle text-white d-flex align-items-center justify-content-center motto-icon-box">
                                    <i class="ph-fill ph-lightbulb-filament"></i>
                                </span>
                                <div>
                                    <h3 class="h6 fw-bold text-white mb-1">Guided by Our Motto: “Wisdom Wins”</h3>
                                    <p class="text-white opacity-90 mb-0 small about-text-body">
                                        We believe education is not merely about acquiring knowledge. True education develops the wisdom to think, the courage to question, the discipline to act, and the compassion to contribute meaningfully to society.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="p-3 bg-main-50 rounded-3 border border-main-100 d-flex align-items-center gap-3">
                            <i class="ph-fill ph-check-circle text-main-600 fs-4 flex-shrink-0"></i>
                            <span class="fw-semibold text-neutral-800 small about-text-body">
                                For us, every student is unique. We provide an environment where children learn with confidence, participate with enthusiasm, and grow into responsible individuals.
                            </span>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="position-relative">
                            <div class="rounded-4 overflow-hidden shadow-sm border border-2 border-white">
                                <img src="{{ asset('user/assets/images/thumbs/school-classroom.png') }}" alt="Maruthi School Classroom" class="about-thumb-img">
                            </div>
                            <!-- Floating Silver Jubilee Badge -->
                            <div class="jubilee-floating-badge p-3 bg-white rounded-3 shadow border border-light d-flex align-items-center gap-3">
                                <div class="rounded-circle bg-main-600 text-white d-flex align-items-center justify-content-center fs-4 icon-box-44">
                                    <i class="ph-fill ph-medal"></i>
                                </div>
                                <div>
                                    <h3 class="h6 fw-bold text-neutral-900 mb-0">Silver Jubilee</h3>
                                    <p class="small text-neutral-500 mb-0">25+ Years of Legacy</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================== COUNTER BAR ============================ -->
        <section class="about-section py-4 bg-light border-top border-bottom">
            <div class="container">
                <div class="row g-3">
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-duration="600">
                        <div class="stat-card p-3 bg-white rounded-3 shadow-sm h-100 d-flex align-items-center gap-3">
                            <div class="stat-card-icon fs-2 text-main-600"><i class="ph-fill ph-trophy"></i></div>
                            <div class="stat-card-body">
                                <h2 class="h4 fw-bold counter mb-0">25+</h2>
                                <p class="small text-muted mb-0">Years of Excellence</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-duration="800">
                        <div class="stat-card p-3 bg-white rounded-3 shadow-sm h-100 d-flex align-items-center gap-3">
                            <div class="stat-card-icon fs-2 text-main-600"><i class="ph-fill ph-users-four"></i></div>
                            <div class="stat-card-body">
                                <h2 class="h4 fw-bold counter mb-0">20K+</h2>
                                <p class="small text-muted mb-0">Proud Alumni</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="stat-card p-3 bg-white rounded-3 shadow-sm h-100 d-flex align-items-center gap-3">
                            <div class="stat-card-icon fs-2 text-main-600"><i class="ph-fill ph-books"></i></div>
                            <div class="stat-card-body">
                                <h2 class="h4 fw-bold counter mb-0">5,000+</h2>
                                <p class="small text-muted mb-0">Library Resources</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-duration="1200">
                        <div class="stat-card p-3 bg-white rounded-3 shadow-sm h-100 d-flex align-items-center gap-3">
                            <div class="stat-card-icon fs-2 text-main-600"><i class="ph-fill ph-certificate"></i></div>
                            <div class="stat-card-body">
                                <h2 class="h4 fw-bold mb-0">Pre-KG–12</h2>
                                <p class="small text-muted mb-0">CBSE Affiliated</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================== SECTION 2: OUR JOURNEY & 25 YEARS MILESTONE ============================ -->
        <section class="about-section py-4 py-md-5 bg-main-50 bg-cross-grid">
            <div class="container">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-5" data-aos="fade-right">
                        <div class="about-hero-badge mb-3">
                            <i class="ph-fill ph-hourglass-high"></i>
                            <span>Our Journey</span>
                        </div>
                        <h2 class="h3 fw-bold text-neutral-950 mb-3">
                            25 Years of Educational Excellence
                        </h2>
                        <p class="text-neutral-700 mb-3 about-text-lead">
                            For more than two decades, Maruthi has been associated with quality education and the holistic development of young learners. Our journey reflects a continuous commitment to academic standards, disciplined learning, co-curricular development, and student welfare.
                        </p>
                        <p class="text-neutral-600 mb-4 about-text-body">
                            The <strong>Silver Jubilee</strong> marks an important milestone in our journey and provides an opportunity to celebrate our students, teachers, parents, alumni, and well-wishers who have contributed to the growth of the institution.
                        </p>
                        <div class="p-3 bg-white rounded-3 border-start border-4 border-main-600 shadow-sm">
                            <h3 class="h6 fw-bold text-neutral-900 mb-1">Evolving with Modern Needs</h3>
                            <p class="text-neutral-500 mb-0 small">
                                Over the years, the institution has evolved with changing educational needs while keeping our foundational values firmly at the center of every classroom.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-7" data-aos="fade-left">
                        <div class="text-center text-lg-start mb-3">
                            <h3 class="h5 fw-bold text-neutral-800 mb-1">Our Core Institutional Values</h3>
                            <p class="small text-neutral-500 mb-0">The foundational pillars that guide every step of our journey</p>
                        </div>
                        <div class="row g-3">
                            <div class="col-6 col-md-4">
                                <div class="feature-box-card text-center p-3">
                                    <div class="icon-circle-badge green mx-auto"><i class="ph-fill ph-shield-check"></i></div>
                                    <h3 class="h6 fw-bold text-neutral-900 mb-1">Discipline</h3>
                                    <p class="small text-neutral-500 mb-0">Self-control &amp; focus</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="feature-box-card text-center p-3">
                                    <div class="icon-circle-badge blue mx-auto"><i class="ph-fill ph-book-open-text"></i></div>
                                    <h3 class="h6 fw-bold text-neutral-900 mb-1">Knowledge</h3>
                                    <p class="small text-neutral-500 mb-0">Deep understanding</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="feature-box-card text-center p-3">
                                    <div class="icon-circle-badge purple mx-auto"><i class="ph-fill ph-scales"></i></div>
                                    <h3 class="h6 fw-bold text-neutral-900 mb-1">Integrity</h3>
                                    <p class="small text-neutral-500 mb-0">Moral principles</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="feature-box-card text-center p-3">
                                    <div class="icon-circle-badge amber mx-auto"><i class="ph-fill ph-handshake"></i></div>
                                    <h3 class="h6 fw-bold text-neutral-900 mb-1">Responsibility</h3>
                                    <p class="small text-neutral-500 mb-0">Ownership of duties</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="feature-box-card text-center p-3">
                                    <div class="icon-circle-badge rose mx-auto"><i class="ph-fill ph-heart"></i></div>
                                    <h3 class="h6 fw-bold text-neutral-900 mb-1">Respect</h3>
                                    <p class="small text-neutral-500 mb-0">Valuing individuals</p>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="feature-box-card text-center p-3">
                                    <div class="icon-circle-badge indigo mx-auto"><i class="ph-fill ph-crown"></i></div>
                                    <h3 class="h6 fw-bold text-neutral-900 mb-1">Leadership</h3>
                                    <p class="small text-neutral-500 mb-0">Inspiring impact</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="p-3 bg-white rounded-3 border border-main-200 text-center shadow-sm">
                                    <span class="fw-bold text-main-600"><i class="ph-fill ph-hands-praying me-2"></i>Service to Society:</span>
                                    <span class="text-neutral-600 small ms-1">Preparing students to contribute meaningfully to the community.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================== SECTION 3: VISION & MISSION ============================ -->
        <section class="about-section py-4 py-md-5 bg-white">
            <div class="container">
                <div class="text-center mb-4">
                    <div class="about-hero-badge mb-2">
                        <i class="ph-fill ph-compass"></i>
                        <span>Guiding Light</span>
                    </div>
                    <h2 class="h3 fw-bold text-neutral-950 mb-2">Our Vision &amp; Mission</h2>
                    <p class="text-neutral-500 max-w-600 mx-auto small">
                        Empowering students to think independently, embrace challenges, and lead purposeful lives.
                    </p>
                </div>

                <div class="row g-4">
                    <!-- Vision Card -->
                    <div class="col-lg-6" data-aos="fade-up">
                        <div class="vision-mission-card vmc-green h-100 d-flex flex-column p-4">
                            <div class="vmc-icon-wrap mb-3">
                                <i class="ph-fill ph-eye"></i>
                            </div>
                            <h3 class="h5 vmc-title mb-2">Our Vision</h3>
                            <p class="vmc-desc mb-4 small about-text-lead">
                                To nurture knowledgeable, confident, compassionate, and responsible individuals who are capable of thinking independently, embracing challenges, and contributing positively to society.
                            </p>
                            <div class="mt-auto">
                                <h4 class="h6 fw-bold text-neutral-800 mb-2 small">We envision a school where learners:</h4>
                                <div class="row g-2">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center gap-2 p-2 bg-white rounded-2 border border-main-100">
                                            <i class="ph-bold ph-check text-main-600 flex-shrink-0"></i>
                                            <span class="small text-neutral-700">Discover and develop individual talents</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex align-items-center gap-2 p-2 bg-white rounded-2 border border-main-100">
                                            <i class="ph-bold ph-check text-main-600 flex-shrink-0"></i>
                                            <span class="small text-neutral-700">Think critically and creatively</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex align-items-center gap-2 p-2 bg-white rounded-2 border border-main-100">
                                            <i class="ph-bold ph-check text-main-600 flex-shrink-0"></i>
                                            <span class="small text-neutral-700">Communicate confidently</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex align-items-center gap-2 p-2 bg-white rounded-2 border border-main-100">
                                            <i class="ph-bold ph-check text-main-600 flex-shrink-0"></i>
                                            <span class="small text-neutral-700">Develop strong values and character</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex align-items-center gap-2 p-2 bg-white rounded-2 border border-main-100">
                                            <i class="ph-bold ph-check text-main-600 flex-shrink-0"></i>
                                            <span class="small text-neutral-700">Appreciate diversity and respect others</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex align-items-center gap-2 p-2 bg-white rounded-2 border border-main-100">
                                            <i class="ph-bold ph-check text-main-600 flex-shrink-0"></i>
                                            <span class="small text-neutral-700">Become responsible citizens &amp; lifelong learners</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mission Card -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="vision-mission-card vmc-blue h-100 d-flex flex-column p-4">
                            <div class="vmc-icon-wrap vmc-icon-blue mb-3">
                                <i class="ph-fill ph-target"></i>
                            </div>
                            <h3 class="h5 vmc-title vmc-title-blue mb-2">Our Mission</h3>
                            <p class="vmc-desc mb-4 small about-text-lead">
                                To provide a safe, disciplined, inclusive, and stimulating learning environment where academic learning is complemented by physical, emotional, social, cultural, and ethical development.
                            </p>
                            <div class="mt-auto">
                                <h4 class="h6 fw-bold text-neutral-800 mb-2 small">We continuously strive to:</h4>
                                <div class="row g-2">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center gap-2 p-2 bg-white rounded-2 border border-info border-opacity-25">
                                            <i class="ph-bold ph-check text-info flex-shrink-0"></i>
                                            <span class="small text-neutral-700">Provide quality education based on CBSE curriculum</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex align-items-center gap-2 p-2 bg-white rounded-2 border border-info border-opacity-25">
                                            <i class="ph-bold ph-check text-info flex-shrink-0"></i>
                                            <span class="small text-neutral-700">Encourage curiosity &amp; independent thinking</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex align-items-center gap-2 p-2 bg-white rounded-2 border border-info border-opacity-25">
                                            <i class="ph-bold ph-check text-info flex-shrink-0"></i>
                                            <span class="small text-neutral-700">Strengthen literacy, numeracy &amp; leadership</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex align-items-center gap-2 p-2 bg-white rounded-2 border border-info border-opacity-25">
                                            <i class="ph-bold ph-check text-info flex-shrink-0"></i>
                                            <span class="small text-neutral-700">Promote sports, arts, and cultural activities</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex align-items-center gap-2 p-2 bg-white rounded-2 border border-info border-opacity-25">
                                            <i class="ph-bold ph-check text-info flex-shrink-0"></i>
                                            <span class="small text-neutral-700">Integrate technology into active learning</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex align-items-center gap-2 p-2 bg-white rounded-2 border border-info border-opacity-25">
                                            <i class="ph-bold ph-check text-info flex-shrink-0"></i>
                                            <span class="small text-neutral-700">Support individual needs &amp; higher education prep</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================== SECTION 4: EDUCATIONAL PHILOSOPHY ============================ -->
        <section class="about-section py-4 py-md-5 bg-main-50 bg-dot-grid">
            <div class="container">
                <div class="text-center mb-4">
                    <div class="about-hero-badge mb-2">
                        <i class="ph-fill ph-brain"></i>
                        <span>Educational Philosophy</span>
                    </div>
                    <h2 class="h3 fw-bold text-neutral-950 mb-2">“WISDOM WINS”</h2>
                    <p class="text-neutral-600 max-w-700 mx-auto small">
                        At Maruthi, <em>Wisdom Wins</em> is more than a motto — it represents our educational philosophy.
                    </p>
                </div>

                <!-- Distinction Cards -->
                <div class="row g-3 mb-4 justify-content-center">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-box-card text-center p-3">
                            <div class="icon-circle-badge blue mx-auto mb-2"><i class="ph-fill ph-book"></i></div>
                            <h3 class="h6 fw-bold text-neutral-900 mb-1">Knowledge</h3>
                            <p class="text-neutral-500 mb-0 small">Tells us <strong>what</strong> to learn through concepts &amp; discovery.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
                        <div class="feature-box-card text-center p-3">
                            <div class="icon-circle-badge purple mx-auto mb-2"><i class="ph-fill ph-gear"></i></div>
                            <h3 class="h6 fw-bold text-neutral-900 mb-1">Understanding</h3>
                            <p class="text-neutral-500 mb-0 small">Tells us <strong>how</strong> things work and principles behind them.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-box-card featured-card text-center p-3">
                            <div class="icon-circle-badge green mx-auto mb-2"><i class="ph-fill ph-sparkle"></i></div>
                            <h3 class="h6 fw-bold text-main-600 mb-1">Wisdom</h3>
                            <p class="text-neutral-600 mb-0 small">Teaches us <strong>how to use</strong> what we learn responsibly.</p>
                        </div>
                    </div>
                </div>

                <!-- 5 Step Learning Cycle -->
                <div class="p-3 p-md-4 bg-white rounded-3 shadow-sm border border-light" data-aos="fade-up">
                    <div class="text-center mb-3">
                        <h3 class="h6 fw-bold text-neutral-900 mb-0">Our 5-Step Learning Cycle</h3>
                        <p class="small text-neutral-500">How we develop well-rounded thinkers inside every classroom</p>
                    </div>

                    <div class="row g-2 align-items-center">
                        <div class="col-lg col-md-6">
                            <div class="flow-step-card">
                                <div class="flow-step-num">1</div>
                                <h4 class="h6 fw-bold text-neutral-900 mb-1 small">Think</h4>
                                <p class="small text-neutral-500 mb-0">Ask questions &amp; ignite curiosity</p>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="flow-arrow-indicator"><i class="ph-bold ph-arrow-right"></i></div>
                        </div>
                        <div class="col-lg col-md-6">
                            <div class="flow-step-card">
                                <div class="flow-step-num">2</div>
                                <h4 class="h6 fw-bold text-neutral-900 mb-1 small">Understand</h4>
                                <p class="small text-neutral-500 mb-0">Grasp concepts deeply</p>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="flow-arrow-indicator"><i class="ph-bold ph-arrow-right"></i></div>
                        </div>
                        <div class="col-lg col-md-6">
                            <div class="flow-step-card">
                                <div class="flow-step-num">3</div>
                                <h4 class="h6 fw-bold text-neutral-900 mb-1 small">Apply</h4>
                                <p class="small text-neutral-500 mb-0">Solve real-world problems</p>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="flow-arrow-indicator"><i class="ph-bold ph-arrow-right"></i></div>
                        </div>
                        <div class="col-lg col-md-6">
                            <div class="flow-step-card">
                                <div class="flow-step-num">4</div>
                                <h4 class="h6 fw-bold text-neutral-900 mb-1 small">Reflect</h4>
                                <p class="small text-neutral-500 mb-0">Evaluate &amp; refine outcomes</p>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="flow-arrow-indicator"><i class="ph-bold ph-arrow-right"></i></div>
                        </div>
                        <div class="col-lg col-md-12">
                            <div class="flow-step-card highlight">
                                <div class="flow-step-num">5</div>
                                <h4 class="h6 fw-bold text-main-600 mb-1 small">Act Responsibly</h4>
                                <p class="small text-neutral-500 mb-0">Create positive impact</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================== SECTION 5: ACADEMIC EXCELLENCE ============================ -->
        <section class="about-section py-4 py-md-5 bg-white">
            <div class="container">
                <div class="row gy-4 align-items-center mb-4">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="about-hero-badge mb-2">
                            <i class="ph-fill ph-certificate"></i>
                            <span>Pillar of Strength</span>
                        </div>
                        <h2 class="h3 fw-bold text-neutral-950 mb-3">
                            Academic Excellence &amp; CBSE Pedagogy
                        </h2>
                        <p class="text-neutral-700 mb-3 about-text-lead">
                            Academic excellence remains one of the most important pillars of Maruthi Senior Secondary School. Following the <strong>CBSE curriculum</strong>, we focus on conceptual understanding, strong foundational skills, and continuous academic improvement.
                        </p>
                        <p class="text-neutral-600 mb-0 small about-text-body">
                            We believe that academic achievement becomes meaningful when it is accompanied by understanding, confidence, and the responsible application of knowledge.
                        </p>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="rounded-3 overflow-hidden shadow-sm border border-2 border-white">
                            <img src="{{ asset('user/assets/images/thumbs/school-science-lab.png') }}" alt="Science Laboratory" class="school-lab-img">
                        </div>
                    </div>
                </div>

                <!-- 9 Academic Approach Cards -->
                <div class="row g-3">
                    <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="50">
                        <div class="feature-box-card p-3">
                            <div class="icon-circle-badge green mb-2"><i class="ph-fill ph-lightbulb"></i></div>
                            <h3 class="h6 fw-bold text-neutral-900 mb-1">Concept-Based Learning</h3>
                            <p class="small text-neutral-500 mb-0">Focus on root principles rather than passive rote memorization.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-box-card p-3">
                            <div class="icon-circle-badge blue mb-2"><i class="ph-fill ph-chart-line-up"></i></div>
                            <h3 class="h6 fw-bold text-neutral-900 mb-1">Continuous Assessment &amp; Feedback</h3>
                            <p class="small text-neutral-500 mb-0">Regular diagnostic evaluations &amp; constructive feedback loops.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
                        <div class="feature-box-card p-3">
                            <div class="icon-circle-badge purple mb-2"><i class="ph-fill ph-hand-heart"></i></div>
                            <h3 class="h6 fw-bold text-neutral-900 mb-1">Individual Academic Support</h3>
                            <p class="small text-neutral-500 mb-0">Personalized mentoring for every learner to excel at their pace.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-box-card p-3">
                            <div class="icon-circle-badge amber mb-2"><i class="ph-fill ph-pen-nib"></i></div>
                            <h3 class="h6 fw-bold text-neutral-900 mb-1">Reading &amp; Writing Development</h3>
                            <p class="small text-neutral-500 mb-0">Language mastery, vocabulary building, and expressive writing.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="250">
                        <div class="feature-box-card p-3">
                            <div class="icon-circle-badge rose mb-2"><i class="ph-fill ph-puzzle-piece"></i></div>
                            <h3 class="h6 fw-bold text-neutral-900 mb-1">Problem-Solving Activities</h3>
                            <p class="small text-neutral-500 mb-0">Exercises designed to cultivate analytical &amp; logical inquiry.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-box-card p-3">
                            <div class="icon-circle-badge indigo mb-2"><i class="ph-fill ph-cpu"></i></div>
                            <h3 class="h6 fw-bold text-neutral-900 mb-1">Critical &amp; Computational Thinking</h3>
                            <p class="small text-neutral-500 mb-0">Modern digital literacy and algorithmic problem solving.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="350">
                        <div class="feature-box-card p-3">
                            <div class="icon-circle-badge teal mb-2"><i class="ph-fill ph-flask"></i></div>
                            <h3 class="h6 fw-bold text-neutral-900 mb-1">Practical &amp; Experiential Learning</h3>
                            <p class="small text-neutral-500 mb-0">Hands-on lab experiments, workshops, and project tasks.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="feature-box-card p-3">
                            <div class="icon-circle-badge green mb-2"><i class="ph-fill ph-newspaper"></i></div>
                            <h3 class="h6 fw-bold text-neutral-900 mb-1">Examination Preparation</h3>
                            <p class="small text-neutral-500 mb-0">Structured board revision, mock tests, and stress management.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="450">
                        <div class="feature-box-card p-3">
                            <div class="icon-circle-badge blue mb-2"><i class="ph-fill ph-compass"></i></div>
                            <h3 class="h6 fw-bold text-neutral-900 mb-1">Career &amp; Higher-Ed Guidance</h3>
                            <p class="small text-neutral-500 mb-0">Mentorship for entrance tests (NEET, JEE, CUET) &amp; university paths.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================== SECTION 6: BEYOND THE CLASSROOM ============================ -->
        <section class="about-section py-4 py-md-5 bg-main-50 bg-cross-grid">
            <div class="container">
                <div class="text-center mb-4">
                    <div class="about-hero-badge mb-2">
                        <i class="ph-fill ph-trophy"></i>
                        <span>Holistic Growth</span>
                    </div>
                    <h2 class="h3 fw-bold text-neutral-950 mb-2">Beyond The Classroom</h2>
                    <p class="text-neutral-600 max-w-700 mx-auto small">
                        Education at Maruthi extends beyond textbooks. Students discover their passions, hone athletic talents, and build lasting friendships.
                    </p>
                </div>

                <!-- Activities Showcase Grid -->
                <div class="row g-3 mb-3">
                    <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="50">
                        <div class="p-3 bg-white rounded-3 shadow-sm border border-light h-100">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <span class="p-2 bg-main-100 text-main-600 rounded-2 fs-5"><i class="ph-fill ph-sword"></i></span>
                                <h3 class="h6 fw-bold text-neutral-900 mb-0">Martial Arts</h3>
                            </div>
                            <div class="d-flex flex-wrap gap-1">
                                <span class="activity-tag"><i class="ph-bold ph-shield text-main-600"></i> Silambam</span>
                                <span class="activity-tag"><i class="ph-bold ph-shield text-main-600"></i> Karate</span>
                                <span class="activity-tag"><i class="ph-bold ph-shield text-main-600"></i> Taekwondo</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="p-3 bg-white rounded-3 shadow-sm border border-light h-100">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <span class="p-2 bg-info bg-opacity-10 text-info rounded-2 fs-5"><i class="ph-fill ph-music-notes"></i></span>
                                <h3 class="h6 fw-bold text-neutral-900 mb-0">Arts &amp; Wellness</h3>
                            </div>
                            <div class="d-flex flex-wrap gap-1">
                                <span class="activity-tag"><i class="ph-bold ph-sparkle text-info"></i> Classical Dance</span>
                                <span class="activity-tag"><i class="ph-bold ph-heartbeat text-info"></i> Yoga &amp; Wellness</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="150">
                        <div class="p-3 bg-white rounded-3 shadow-sm border border-light h-100">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <span class="p-2 bg-warning bg-opacity-10 text-warning rounded-2 fs-5"><i class="ph-fill ph-game-controller"></i></span>
                                <h3 class="h6 fw-bold text-neutral-900 mb-0">Mind Sports</h3>
                            </div>
                            <div class="d-flex flex-wrap gap-1">
                                <span class="activity-tag"><i class="ph-bold ph-crown text-warning"></i> Chess</span>
                                <span class="activity-tag"><i class="ph-bold ph-circle text-warning"></i> Carrom</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="p-3 bg-white rounded-3 shadow-sm border border-light h-100">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <span class="p-2 bg-success bg-opacity-10 text-success rounded-2 fs-5"><i class="ph-fill ph-baseball"></i></span>
                                <h3 class="h6 fw-bold text-neutral-900 mb-0">Field Sports</h3>
                            </div>
                            <div class="d-flex flex-wrap gap-1">
                                <span class="activity-tag"><i class="ph-bold ph-baseball-cap text-success"></i> Cricket</span>
                                <span class="activity-tag"><i class="ph-bold ph-sneaker-move text-success"></i> Badminton</span>
                                <span class="activity-tag"><i class="ph-bold ph-flag-banner text-success"></i> Athletics</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Values Fostered Banner -->
                <div class="p-3 bg-white rounded-3 border border-main-200 shadow-sm d-flex flex-wrap align-items-center justify-content-between gap-2" data-aos="fade-up">
                    <div>
                        <span class="fw-bold text-neutral-900 small">Character Built Through Co-Curriculars:</span>
                        <span class="small text-neutral-500 ms-1">Discipline • Teamwork • Perseverance • Leadership • Sportsmanship</span>
                    </div>
                    <div class="d-flex gap-2 flex-wrap">
                        <span class="badge bg-main-50 text-main-600 px-2 py-1 rounded-pill small"><i class="ph-fill ph-users me-1"></i> Cultural Events</span>
                        <span class="badge bg-main-50 text-main-600 px-2 py-1 rounded-pill small"><i class="ph-fill ph-trophy me-1"></i> Competitions</span>
                        <span class="badge bg-main-50 text-main-600 px-2 py-1 rounded-pill small"><i class="ph-fill ph-puzzle-piece me-1"></i> Student Clubs</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================== SECTION 7: OUR LIBRARY ============================ -->
        <section class="about-section py-4 py-md-5 bg-white">
            <div class="container">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="about-hero-badge mb-2">
                            <i class="ph-fill ph-book-open"></i>
                            <span>Knowledge Center</span>
                        </div>
                        <h2 class="h3 fw-bold text-neutral-950 mb-3">
                            Our Library — A Gateway to Knowledge
                        </h2>
                        <p class="text-neutral-700 mb-3 about-text-lead">
                            Our school library is an important part of the learning environment at Maruthi. With a rich collection of <strong>5,000+ books</strong>, periodicals, reference encyclopedias, and digital media, it provides students with opportunities to explore subjects beyond their textbooks and develop a lifelong love for reading.
                        </p>

                        <div class="p-3 bg-main-50 rounded-3 border-start border-4 border-main-600 mb-3">
                            <p class="fw-semibold text-main-800 mb-0 font-italic small">
                                “A child who develops the habit of reading develops a lifelong tool for learning.”
                            </p>
                        </div>

                        <h3 class="h6 fw-bold text-neutral-800 mb-2 small">We actively encourage students to:</h3>
                        <div class="row g-2">
                            <div class="col-6">
                                <div class="d-flex align-items-center gap-2 p-2 bg-light rounded-2">
                                    <i class="ph-bold ph-check text-main-600"></i>
                                    <span class="small text-neutral-700">Read regularly &amp; consistently</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center gap-2 p-2 bg-light rounded-2">
                                    <i class="ph-bold ph-check text-main-600"></i>
                                    <span class="small text-neutral-700">Explore varied genres</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center gap-2 p-2 bg-light rounded-2">
                                    <i class="ph-bold ph-check text-main-600"></i>
                                    <span class="small text-neutral-700">Develop independent research</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center gap-2 p-2 bg-light rounded-2">
                                    <i class="ph-bold ph-check text-main-600"></i>
                                    <span class="small text-neutral-700">Strengthen language fluency</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="rounded-3 overflow-hidden shadow-sm border border-2 border-white">
                            <img src="{{ asset('user/assets/images/thumbs/school-library.png') }}" alt="Maruthi School Library" class="about-thumb-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================== SECTION 8: INTERNATIONAL EXPOSURE & LEGACY ============================ -->
        <section class="about-section py-4 py-md-5 bg-main-50 bg-dot-grid">
            <div class="container">
                <div class="row g-4">
                    <!-- International Exposure -->
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="p-4 bg-white rounded-3 shadow-sm border border-light h-100 d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <span class="p-2 bg-main-100 text-main-600 rounded-circle fs-4"><i class="ph-fill ph-globe-hemisphere-west"></i></span>
                                <div>
                                    <span class="badge bg-main-50 text-main-600 px-2 py-1 small rounded-pill">Global Partnership</span>
                                    <h3 class="h5 fw-bold text-neutral-900 mb-0">International Exposure</h3>
                                </div>
                            </div>
                            <h4 class="h6 fw-semibold text-main-700 mb-2">Learning Beyond Borders with France</h4>
                            <p class="text-neutral-600 mb-2 small about-text-body">
                                Maruthi Senior Secondary School has maintained an active educational association with <strong>Institution Sainte Marie, France, since 2015</strong>.
                            </p>
                            <p class="text-neutral-500 mb-3 small about-text-body">
                                This association provides rich opportunities for students to experience cultural exchange, appreciate international educational environments, and collaborate in sports, cultural programmes, and student interaction sessions.
                            </p>
                            <div class="mt-auto p-2 bg-light rounded-2">
                                <span class="small fw-bold text-neutral-800"><i class="ph-fill ph-airplane-tilt text-main-600 me-1"></i>Global Mindset:</span>
                                <span class="small text-neutral-600 ms-1">Helping children understand that learning extends far beyond geographical boundaries.</span>
                            </div>
                        </div>
                    </div>

                    <!-- Educational Legacy: Maruthi Institute -->
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="p-4 bg-white rounded-3 shadow-sm border border-light h-100 d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <span class="p-2 legacy-icon-wrap rounded-circle fs-4"><i class="ph-fill ph-buildings"></i></span>
                                <div>
                                    <span class="badge bg-warning bg-opacity-10 text-dark px-2 py-1 small rounded-pill">Historic Legacy (1997 – 2020)</span>
                                    <h3 class="h5 fw-bold text-neutral-900 mb-0">Our Educational Legacy</h3>
                                </div>
                            </div>
                            <h4 class="h6 fw-semibold text-neutral-800 mb-2">Maruthi Institute</h4>
                            <p class="text-neutral-600 mb-2 small about-text-body">
                                The educational journey of the Maruthi group also includes the monumental contribution of <strong>Maruthi Institute</strong>, which functioned with academic excellence from <strong>1997 to 2020</strong>.
                            </p>
                            <p class="text-neutral-500 mb-3 small about-text-body">
                                Over its decades of academic service, the institution shaped the higher-education aspirations of thousands of students, with alumni flourishing in medicine, engineering, civil services, and top corporate fields worldwide.
                            </p>
                            <div class="mt-auto p-2 bg-light rounded-2">
                                <span class="small fw-bold text-neutral-800"><i class="ph-fill ph-star text-warning me-1"></i>Inspiring Foundation:</span>
                                <span class="small text-neutral-600 ms-1">This rich heritage continues to inspire our commitment to strong academic foundations.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================== SECTION 9: HOLISTIC DEVELOPMENT ============================ -->
        <section class="about-section py-4 py-md-5 bg-white">
            <div class="container">
                <div class="text-center mb-4">
                    <div class="about-hero-badge mb-2">
                        <i class="ph-fill ph-heartbeat"></i>
                        <span>Whole Child Education</span>
                    </div>
                    <h2 class="h3 fw-bold text-neutral-950 mb-2">Holistic Development</h2>
                    <p class="text-neutral-600 max-w-700 mx-auto small">
                        <strong>Mind. Body. Character.</strong> We believe true education develops the whole child across all dimensions of human potential.
                    </p>
                </div>

                <div class="row g-3">
                    <!-- 1. Intellectual -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="50">
                        <div class="holistic-card p-3">
                            <div class="icon-circle-badge green mb-2"><i class="ph-fill ph-brain"></i></div>
                            <h3 class="h6 fw-bold text-neutral-900 mb-1">Intellectual</h3>
                            <p class="text-neutral-500 small mb-0">
                                Knowledge, conceptual understanding, reasoning, and real-world problem-solving abilities.
                            </p>
                        </div>
                    </div>

                    <!-- 2. Physical -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="holistic-card blue p-3">
                            <div class="icon-circle-badge blue mb-2"><i class="ph-fill ph-barbell"></i></div>
                            <h3 class="h6 fw-bold text-neutral-900 mb-1">Physical</h3>
                            <p class="text-neutral-500 small mb-0">
                                Fitness, athletics, martial arts, yoga, active recreation, and lifelong healthy habits.
                            </p>
                        </div>
                    </div>

                    <!-- 3. Emotional -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
                        <div class="holistic-card purple p-3">
                            <div class="icon-circle-badge purple mb-2"><i class="ph-fill ph-smiley"></i></div>
                            <h3 class="h6 fw-bold text-neutral-900 mb-1">Emotional</h3>
                            <p class="text-neutral-500 small mb-0">
                                Self-confidence, emotional resilience, empathy, stress management, and positive self-awareness.
                            </p>
                        </div>
                    </div>

                    <!-- 4. Social -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="holistic-card amber p-3">
                            <div class="icon-circle-badge amber mb-2"><i class="ph-fill ph-users-three"></i></div>
                            <h3 class="h6 fw-bold text-neutral-900 mb-1">Social Development</h3>
                            <p class="text-neutral-500 small mb-0">
                                Collaboration, clear communication, cross-cultural empathy, and respect for every individual.
                            </p>
                        </div>
                    </div>

                    <!-- 5. Moral -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="holistic-card rose p-3">
                            <div class="icon-circle-badge rose mb-2"><i class="ph-fill ph-scales"></i></div>
                            <h3 class="h6 fw-bold text-neutral-900 mb-1">Moral Development</h3>
                            <p class="text-neutral-500 small mb-0">
                                Honesty, responsibility, integrity, civic duty, and the courage to do what is right.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================== SECTION 10: STUDENT ACHIEVEMENTS ============================ -->
        <section class="about-section py-4 py-md-5 bg-main-50 bg-cross-grid">
            <div class="container">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="about-hero-badge mb-2">
                            <i class="ph-fill ph-medal"></i>
                            <span>Student Achievements</span>
                        </div>
                        <h2 class="h3 fw-bold text-neutral-950 mb-3">
                            Celebrating Every Learner
                        </h2>
                        <p class="text-neutral-700 mb-3 about-text-lead">
                            At Maruthi, achievement is not measured solely by examination marks. We celebrate excellence in all spheres of learning:
                        </p>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-white text-dark border px-2 py-1 rounded-pill small"><i class="ph-fill ph-check-circle text-main-600 me-1"></i> Academics</span>
                            <span class="badge bg-white text-dark border px-2 py-1 rounded-pill small"><i class="ph-fill ph-check-circle text-main-600 me-1"></i> Sports</span>
                            <span class="badge bg-white text-dark border px-2 py-1 rounded-pill small"><i class="ph-fill ph-check-circle text-main-600 me-1"></i> Yoga</span>
                            <span class="badge bg-white text-dark border px-2 py-1 rounded-pill small"><i class="ph-fill ph-check-circle text-main-600 me-1"></i> Arts &amp; Culture</span>
                            <span class="badge bg-white text-dark border px-2 py-1 rounded-pill small"><i class="ph-fill ph-check-circle text-main-600 me-1"></i> Competitions</span>
                            <span class="badge bg-white text-dark border px-2 py-1 rounded-pill small"><i class="ph-fill ph-check-circle text-main-600 me-1"></i> Leadership</span>
                        </div>
                        <p class="text-neutral-500 mb-0 small about-text-body">
                            Our students have represented the school in state and national competitions, bringing immense pride to the institution. Every achievement inspires continuous improvement.
                        </p>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="rounded-3 overflow-hidden shadow-sm border border-2 border-white">
                            <img src="{{ asset('user/assets/images/thumbs/school-students-group.png') }}" alt="Student Achievements" class="about-thumb-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================== SECTION 11: OUR LEADERSHIP (TEACHER SLIDER) ============================ -->
        <section class="about-section py-4 py-md-5 bg-light position-relative overflow-hidden bg-dot-grid">
            <div class="container position-relative z-1">
                <!-- Section Header & Slider Controls -->
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3 mb-4">
                    <div>
                        <div class="about-hero-badge mb-2" data-aos="fade-up">
                            <i class="ph-fill ph-users-four"></i>
                            <span>Our Leadership &amp; Faculty</span>
                        </div>
                        <h2 class="h3 fw-bold text-neutral-950 mb-2" data-aos="fade-up" data-aos-delay="50">
                            Meet the Visionaries Behind Maruthi
                        </h2>
                        <p class="text-neutral-600 max-w-700 mb-0 small" data-aos="fade-up" data-aos-delay="100">
                            Our dedicated leadership team brings decades of academic excellence, administrative experience, and strategic vision to guide Maruthi School.
                        </p>
                    </div>

                    <!-- Slider Navigation Controls -->
                    <div class="d-flex align-items-center gap-2" data-aos="fade-up" data-aos-delay="150">
                        <button type="button" id="teachers-button-prev"
                            class="p-2 bg-white shadow-sm d-flex align-items-center justify-content-center text-main-600 rounded-circle border border-light flex-shrink-0" style="width: 44px; height: 44px;" aria-label="Previous Slide">
                            <i class="ph-bold ph-arrow-left fs-5"></i>
                        </button>
                        <button type="button" id="teachers-button-next"
                            class="p-2 bg-white shadow-sm d-flex align-items-center justify-content-center text-main-600 rounded-circle border border-light flex-shrink-0" style="width: 44px; height: 44px;" aria-label="Next Slide">
                            <i class="ph-bold ph-arrow-right fs-5"></i>
                        </button>
                    </div>
                </div>

                <!-- Visionary / Teachers Automatic Swiper Slider -->
                <div class="swiper teachers-slider pb-4">
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
                                    <h3 class="visionary-name">Dr. S. Ramadasse</h3>
                                    <p class="visionary-designation">Chairman &amp; Founder</p>
                                </div>

                                <!-- Sliding Bio Overlay on Hover -->
                                <div class="visionary-bio-overlay">
                                    <div>
                                        <h4 class="text-white fw-bold mb-1 h5">Dr. S. Ramadasse</h4>
                                        <p class="text-success mb-2 fw-semibold small">Chairman &amp; Academician</p>
                                        <p class="visionary-bio-text">
                                            Guiding Maruthi Senior Secondary School with an enduring vision for holistic education, ethical values, and scientific thinking for every student.
                                        </p>
                                        
                                        <div class="visionary-bio-highlights">
                                            <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Visionary Leadership</div>
                                            <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Academic Excellence</div>
                                            <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Community Empowerment</div>
                                        </div>
                                    </div>
                                    
                                    <a href="{{ route('contact') }}" class="btn-visionary-contact">
                                        Contact Office <i class="ph-bold ph-arrow-right"></i>
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
                                    <h3 class="visionary-name">Mr. Sridhar</h3>
                                    <p class="visionary-designation">Secretary &amp; Administrator</p>
                                </div>

                                <!-- Sliding Bio Overlay on Hover -->
                                <div class="visionary-bio-overlay">
                                    <div>
                                        <h4 class="text-white fw-bold mb-1 h5">Mr. Sridhar</h4>
                                        <p class="text-success mb-2 fw-semibold small">Secretary &amp; Administrator</p>
                                        <p class="visionary-bio-text">
                                            Overseeing administrative governance, campus development, and operational excellence to ensure a world-class learning environment.
                                        </p>
                                        
                                        <div class="visionary-bio-highlights">
                                            <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Institutional Governance</div>
                                            <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Campus Development</div>
                                            <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Student Welfare</div>
                                        </div>
                                    </div>
                                    
                                    <a href="{{ route('contact') }}" class="btn-visionary-contact">
                                        Contact Office <i class="ph-bold ph-arrow-right"></i>
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
                                    <h3 class="visionary-name">Dr. S. Sattianandame</h3>
                                    <p class="visionary-designation">Treasurer</p>
                                </div>

                                <!-- Sliding Bio Overlay on Hover -->
                                <div class="visionary-bio-overlay">
                                    <div>
                                        <h4 class="text-white fw-bold mb-1 h5">Dr. S. Sattianandame</h4>
                                        <p class="text-success mb-2 fw-semibold small">Treasurer</p>
                                        <p class="visionary-bio-text">
                                            Managing strategic financial stewardship, resource allocation, and sustained investments in top-tier educational facilities and technology.
                                        </p>
                                        
                                        <div class="visionary-bio-highlights">
                                            <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Strategic Planning</div>
                                            <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Resource Allocation</div>
                                            <div class="visionary-highlight-item"><i class="ph-bold ph-check"></i> Academic Stewardship</div>
                                        </div>
                                    </div>
                                    
                                    <a href="{{ route('contact') }}" class="btn-visionary-contact">
                                        Contact Office <i class="ph-bold ph-arrow-right"></i>
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
                                    <h3 class="visionary-name">Mrs. Mahalakshmi K.</h3>
                                    <p class="visionary-designation">Principal</p>
                                </div>

                                <!-- Sliding Bio Overlay on Hover -->
                                <div class="visionary-bio-overlay">
                                    <div>
                                        <h4 class="text-white fw-bold mb-1 h5">Mrs. Mahalakshmi K.</h4>
                                        <p class="text-success mb-2 fw-semibold small">M.Sc., M.Phil., B.Ed., DFL., PGDMLT</p>
                                        <p class="visionary-bio-text">
                                            Leading academic curriculum, teacher mentorship, and student development to foster leadership, curiosity, and high scholastic achievement.
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
                    <div class="teachers-pagination swiper-pagination position-relative mt-4"></div>
                </div>
            </div>
        </section>

        <!-- ============================== SECTION 12: OUR TEACHERS ============================ -->
        <section class="about-section py-4 py-md-5 bg-main-50 bg-cross-grid">
            <div class="container">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="about-hero-badge mb-2">
                            <i class="ph-fill ph-chalkboard-teacher"></i>
                            <span>Dedicated Faculty</span>
                        </div>
                        <h2 class="h3 fw-bold text-neutral-950 mb-3">
                            Our Teachers — The People Behind Every Learner
                        </h2>
                        <p class="text-neutral-700 mb-3 about-text-lead">
                            Teachers are at the very heart of our educational journey. Our faculty members work closely with students to understand their learning needs, nurture their strengths, and patiently support their areas of improvement.
                        </p>
                        <p class="text-neutral-600 mb-3 small about-text-body">
                            We encourage our educators to continuously develop their professional knowledge, adopting modern child-centred pedagogy and active learning technologies.
                        </p>

                        <div class="p-3 bg-white rounded-3 border-start border-4 border-main-600 shadow-sm">
                            <p class="fw-bold text-main-800 mb-0 small">
                                “A great teacher does not simply teach a lesson; a great teacher inspires a learner.”
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="rounded-3 overflow-hidden shadow-sm border border-2 border-white">
                            <img src="{{ asset('user/assets/images/thumbs/school-classroom.jpg') }}" alt="Teachers and Classroom" class="about-thumb-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================== SECTION 13: CORE VALUES & COMMITMENTS ============================ -->
        <section class="about-section py-4 py-md-5 bg-white">
            <div class="container">
                <div class="text-center mb-4">
                    <div class="about-hero-badge mb-2">
                        <i class="ph-fill ph-handshake"></i>
                        <span>Shared Commitments</span>
                    </div>
                    <h2 class="h3 fw-bold text-neutral-950 mb-2">Our Commitments &amp; Core Values</h2>
                    <p class="text-neutral-500 max-w-700 mx-auto small">
                        Working in harmony with parents and the community to build a thriving foundation for future generations.
                    </p>
                </div>

                <div class="row g-3">
                    <!-- Values Breakdown -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="50">
                        <div class="p-3 bg-light rounded-3 h-100 border border-light">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <i class="ph-fill ph-shield-check fs-4 text-main-600"></i>
                                <h3 class="h6 fw-bold text-neutral-900 mb-0">Our Core Values</h3>
                            </div>
                            <ul class="list-unstyled mb-0 d-flex flex-column gap-1 small text-neutral-700">
                                <li><strong class="text-main-600">Integrity:</strong> Doing what is right always.</li>
                                <li><strong class="text-main-600">Discipline:</strong> Self-control &amp; responsibility.</li>
                                <li><strong class="text-main-600">Respect:</strong> Valuing every individual.</li>
                                <li><strong class="text-main-600">Responsibility:</strong> Ownership of actions.</li>
                                <li><strong class="text-main-600">Compassion:</strong> Caring genuinely for others.</li>
                                <li><strong class="text-main-600">Perseverance:</strong> Continuing despite challenges.</li>
                                <li><strong class="text-main-600">Excellence:</strong> Striving to become better daily.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Commitment to Parents -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="p-3 bg-light rounded-3 h-100 border border-light">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <i class="ph-fill ph-users-three fs-4 text-info"></i>
                                <h3 class="h6 fw-bold text-neutral-900 mb-0">Commitment to Parents</h3>
                            </div>
                            <p class="small text-neutral-600 mb-2 about-text-compact">
                                Education is an active partnership. We value parent trust through transparent communication:
                            </p>
                            <ul class="list-unstyled mb-0 d-flex flex-column gap-1 small text-neutral-700">
                                <li><i class="ph-bold ph-check text-info me-1"></i> Safe &amp; inclusive environment</li>
                                <li><i class="ph-bold ph-check text-info me-1"></i> Strong academic foundations</li>
                                <li><i class="ph-bold ph-check text-info me-1"></i> Habit formation &amp; discipline</li>
                                <li><i class="ph-bold ph-check text-info me-1"></i> Talent development opportunities</li>
                                <li><i class="ph-bold ph-check text-info me-1"></i> Preparation for future careers</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Commitment to the Future -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
                        <div class="p-3 bg-light rounded-3 h-100 border border-light">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <i class="ph-fill ph-rocket-launch fs-4 text-warning"></i>
                                <h3 class="h6 fw-bold text-neutral-900 mb-0">Commitment to Future</h3>
                            </div>
                            <p class="small text-neutral-600 mb-2 about-text-compact">
                                Education must prepare children for tomorrow's complex challenges. We develop learners who can:
                            </p>
                            <ul class="list-unstyled mb-0 d-flex flex-column gap-1 small text-neutral-700">
                                <li><i class="ph-bold ph-arrow-circle-right text-warning me-1"></i> <strong>Think independently</strong> with clarity</li>
                                <li><i class="ph-bold ph-arrow-circle-right text-warning me-1"></i> <strong>Learn continuously</strong> throughout life</li>
                                <li><i class="ph-bold ph-arrow-circle-right text-warning me-1"></i> <strong>Adapt confidently</strong> to rapid changes</li>
                                <li><i class="ph-bold ph-arrow-circle-right text-warning me-1"></i> <strong>Create responsibly</strong> with empathy</li>
                                <li><i class="ph-bold ph-arrow-circle-right text-warning me-1"></i> <strong>Lead with integrity</strong> in society</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================== SECTION 14: MARUTHI TODAY & TAMIL QUOTE ============================ -->
        <section class="about-section py-4 py-md-5 bg-main-50 bg-cross-grid">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10" data-aos="zoom-in">
                        <div class="p-4 bg-white rounded-3 shadow-sm border border-main-200 text-center">
                            <div class="about-hero-badge mb-2">
                                <i class="ph-fill ph-flag-pennant"></i>
                                <span>Maruthi Today</span>
                            </div>
                            <h2 class="h4 fw-bold text-neutral-950 mb-2">Marching Forward With Clear Purpose</h2>
                            
                            <div class="d-flex flex-wrap justify-content-center gap-2 my-3">
                                <span class="px-3 py-1 bg-main-50 text-main-600 rounded-pill fw-bold small"><i class="ph-bold ph-check me-1"></i> To Educate</span>
                                <span class="px-3 py-1 bg-main-50 text-main-600 rounded-pill fw-bold small"><i class="ph-bold ph-check me-1"></i> To Empower</span>
                                <span class="px-3 py-1 bg-main-50 text-main-600 rounded-pill fw-bold small"><i class="ph-bold ph-check me-1"></i> To Inspire</span>
                                <span class="px-3 py-1 bg-main-50 text-main-600 rounded-pill fw-bold small"><i class="ph-bold ph-check me-1"></i> To Build Character</span>
                                <span class="px-3 py-1 bg-main-50 text-main-600 rounded-pill fw-bold small"><i class="ph-bold ph-check me-1"></i> To Prepare for the Future</span>
                            </div>

                            <p class="text-neutral-600 max-w-700 mx-auto mb-3 small about-text-body">
                                With the continued support of our management, teachers, parents, students, alumni, and well-wishers, we look forward to creating many more milestones in the years ahead.
                            </p>

                            <!-- Tamil Quote -->
                            <div class="tamil-quote-box max-w-700 mx-auto">
                                <p class="fw-bold text-main-800 mb-1 h6 tamil-quote-text font-sans">
                                    "கல்வியின் நோக்கம் அறிவு மட்டுமல்ல; ஞானமும் நற்பண்பும் வளர்ப்பதே."
                                </p>
                                <span class="small fw-semibold text-neutral-500 text-uppercase tracking-wider">— Maruthi Senior Secondary School • “Wisdom Wins”</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      
    </div>

    {{-- Footer --}}
    @include('user.layouts.footer')

    @include('user.layouts.script')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof Swiper !== 'undefined' && document.querySelector('.teachers-slider')) {
                new Swiper('.teachers-slider', {
                    spaceBetween: 24,
                    loop: true,
                    speed: 900,
                    grabCursor: true,
                    autoplay: {
                        delay: 3500,
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
