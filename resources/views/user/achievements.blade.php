<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Templatemanja" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Educone Is Online Courses HTML5 Template.">
    <meta name="keywords" content="academy, course, education, elearning, learning, CBSE">

    <!-- SITE TITLE -->
    <title>Achievements | Maruthi Senior Secondary School Puducherry</title>
    @include('user.layouts.links')
</head>

<body class="body-fullpage">

    {{-- preloader starts --}}
    @include('user.layouts.loader')
    {{-- preloader ends --}}

    <!-- START HEADER -->
    @include('user.layouts.header')
    <!-- END HEADER -->

    <!-- Professional Page Header -->
    <div class="subpage-page-header">
        <div class="container position-relative z-1">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="header-icon-bg">
                        <i class="ph-fill ph-trophy"></i>
                    </div>
                    <div class="header-badge">
                        <i class="ph-fill ph-star-four"></i> Academics
                    </div>
                    <h1>Student Achievements</h1>
                    <p>Celebrating excellence in academics, sports, arts, science, and beyond.</p>
                    <div class="subpage-breadcrumb-bar">
                        <a href="{{ route('index') }}">Home</a>
                        <span class="bc-sep">/</span>
                        <span>Academics</span>
                        <span class="bc-sep">/</span>
                        <span class="bc-current">Achievements</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Subpage Container -->
    <div class="subpage-container bg-dot-grid">
        <div class="container max-w-1360-px">
            <div class="row gy-4">
                
                <!-- Left Sidebar -->
                <div class="col-lg-3">
                    <div class="subpage-sidebar">
                        <div class="academics-sidebar-category"><i class="ph ph-caret-double-right me-1"></i> Academics</div>
                        <ul class="subpage-sidebar-menu">
                            <li class="sidebar-item">
                                <a href="{{ route('curriculum') }}" class="sidebar-link">
                                    <i class="ph ph-book-open"></i> Curriculum
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('calendar') }}" class="sidebar-link">
                                    <i class="ph ph-calendar"></i> Year Calendar
                                </a>
                            </li>
                            <li class="sidebar-item active">
                                <a href="{{ route('achievements') }}" class="sidebar-link">
                                    <i class="ph ph-trophy"></i> Achievements
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('gallery') }}" class="sidebar-link">
                                    <i class="ph ph-image"></i> Gallery
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('event_page') }}" class="sidebar-link">
                                    <i class="ph ph-calendar-blank"></i> Event Calendar
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Right Content Area -->
                <div class="col-lg-9">
                    <div class="subpage-content-card">
                        
                        <!-- Breadcrumbs & Heading -->
                        <h2 class="subpage-highlight-heading">Our Honors & Recognitions</h2>
                        <p class="text-neutral-500 fw-bold mb-4">Awards, medals, and milestones our students have achieved</p>
                        
                        <!-- Achievements Grid -->
                        <div class="row gy-4 mt-2">
                            <div class="col-md-6">
                                <div class="achievement-card h-100">
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <span class="tw-w-12 tw-h-12 bg-main-50 text-main-600 rounded-circle d-flex align-items-center justify-content-center fs-4">
                                            <i class="ph ph-chalkboard-teacher"></i>
                                        </span>
                                        <h4 class="text-neutral-950 fs-5 fw-bold mb-0">100% Board Results</h4>
                                    </div>
                                    <p class="text-neutral-500 mb-0">
                                        Maruthi Senior Secondary School has consistently achieved a flawless 100% pass percentage in the CBSE Class X and Class XII board evaluations for the past 15 consecutive years.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="achievement-card h-100">
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <span class="tw-w-12 tw-h-12 bg-main-50 text-main-600 rounded-circle d-flex align-items-center justify-content-center fs-4">
                                            <i class="ph ph-trophy"></i>
                                        </span>
                                        <h4 class="text-neutral-950 fs-5 fw-bold mb-0">State-Level Sports Honors</h4>
                                    </div>
                                    <p class="text-neutral-500 mb-0">
                                        Our student athletes secured multiple gold medals in state-level events including Cricket, Athletics, Volleyball tournaments, and Chess championships.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="achievement-card h-100">
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <span class="tw-w-12 tw-h-12 bg-main-50 text-main-600 rounded-circle d-flex align-items-center justify-content-center fs-4">
                                            <i class="ph ph-palette"></i>
                                        </span>
                                        <h4 class="text-neutral-950 fs-5 fw-bold mb-0">Cultural & Art Champions</h4>
                                    </div>
                                    <p class="text-neutral-500 mb-0">
                                        Proud winners of the Inter-School Cultural Meet trophy, excelling in painting, debating, music recitals, and theater competitions.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="achievement-card h-100">
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <span class="tw-w-12 tw-h-12 bg-main-50 text-main-600 rounded-circle d-flex align-items-center justify-content-center fs-4">
                                            <i class="ph ph-atom"></i>
                                        </span>
                                        <h4 class="text-neutral-950 fs-5 fw-bold mb-0">Science & Robotics Exhibition</h4>
                                    </div>
                                    <p class="text-neutral-500 mb-0">
                                        Winner of the Young Scientists Innovation Award for our solar-powered smart irrigation model in the regional Science and Technology Expo.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- START ADMISSIONS CTA -->
    <section class="admissions-cta-redesign position-relative overflow-hidden">
        <div class="cta-decor-icons" aria-hidden="true">
            <div class="cta-icon-item ci-1"><i class="ph-fill ph-graduation-cap"></i></div>
            <div class="cta-icon-item ci-2"><i class="ph-fill ph-book-open"></i></div>
            <div class="cta-icon-item ci-3"><i class="ph-fill ph-pencil-simple"></i></div>
            <div class="cta-icon-item ci-4"><i class="ph-fill ph-trophy"></i></div>
        </div>
        <div class="container position-relative z-1">
            <div class="row align-items-center gy-4">
                <div class="col-lg-7 text-lg-start text-center">
                    <div class="cta-pill-badge mb-3 d-inline-flex align-items-center gap-2">
                        <span class="cta-pulse-dot"></span>
                        <span class="text-white fw-medium">Admissions Open 2026-27</span>
                    </div>
                    <h2 class="cta-title text-white fw-bold mb-4">
                        Start Your Child's Journey <br class="d-none d-md-block"> to <span class="text-highlight">Excellence</span> Today
                    </h2>
                    <p class="cta-description text-white opacity-90 mb-0">
                        Join Puducherry's leading CBSE school. We provide a nurturing environment, state-of-the-art facilities, and a legacy of academic success.
                    </p>
                </div>
                <div class="col-lg-5 text-lg-end text-center">
                    <div class="cta-btn-group d-flex flex-column flex-sm-row justify-content-lg-end gap-3 align-items-center">
                        <a href="{{ route('contact') }}" class="btn btn-apply-now rounded-pill px-5 py-3 fw-bold">
                            Apply For Admission <i class="ph-bold ph-arrow-right ms-2"></i>
                        </a>
                        <a href="tel:+919442399777" class="btn btn-call-us rounded-pill px-4 py-3 fw-bold border-white text-white border-2">
                            <i class="ph-fill ph-phone me-2"></i> Inquiry
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-accent-circle"></div>
    </section>
    <!-- END ADMISSIONS CTA -->

    <!-- START FOOTER -->
    @include('user.layouts.footer')
    <!-- END FOOTER -->

    @include('user.layouts.script')

</body>
</html>
