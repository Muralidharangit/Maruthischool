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
    <title>Curriculum | Maruthi Senior Secondary School Puducherry</title>
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
                        <i class="ph-fill ph-book-open"></i>
                    </div>
                    <div class="header-badge">
                        <i class="ph-fill ph-star-four"></i> Academics
                    </div>
                    <h1>CBSE Curriculum</h1>
                    <p>Comprehensive academic structure from Pre-KG to Class XII under the CBSE framework.</p>
                    <div class="subpage-breadcrumb-bar">
                        <a href="{{ route('index') }}">Home</a>
                        <span class="bc-sep">/</span>
                        <span>Academics</span>
                        <span class="bc-sep">/</span>
                        <span class="bc-current">Curriculum</span>
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
                            <li class="sidebar-item active">
                                <a href="{{ route('curriculum') }}" class="sidebar-link">
                                    <i class="ph ph-book-open"></i> Curriculum
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('calendar') }}" class="sidebar-link">
                                    <i class="ph ph-calendar"></i> Year Calendar
                                </a>
                            </li>
                            <li class="sidebar-item">
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
                        <h2 class="subpage-highlight-heading">Curriculum Overview</h2>
                        <p class="text-neutral-500 fw-bold mb-4">Curriculum for the Senior Secondary School</p>
                        
                        <!-- Curriculum Table -->
                        <div class="academics-table-wrapper">
                            <table class="academics-table">
                                <thead>
                                    <tr>
                                        <th style="width: 25%;">Class</th>
                                        <th style="width: 75%;">Subjects</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="class-cell">Foundation stage (KG)</td>
                                        <td>Literacy, Numeracy, Tamil / Hindi, PT, Value Education, General awareness & Art.</td>
                                    </tr>
                                    <tr>
                                        <td class="class-cell">Foundational stage (I & II)</td>
                                        <td>English, Maths, EVS, Tamil / Hindi, Computer Science, PT, Art, Swimming, Music, Value Education, Dance.</td>
                                    </tr>
                                    <tr>
                                        <td class="class-cell">Preparatory Stage (III - V)</td>
                                        <td>English, Maths, EVS, II Lang (Tamil / Hindi), III Lang (Tamil / Hindi), Computer Science, PT, Art, Swimming, Music, Value Education, Dance.</td>
                                    </tr>
                                    <tr>
                                        <td class="class-cell">Middle stage (VI - VIII)</td>
                                        <td>English, Maths, Science, Social studies, II Lang (Tamil / Hindi / French), III Lang (Tamil / Hindi / French), Value Education, PT, Art, Swimming, Music, Dance, AI, Robotics.</td>
                                    </tr>
                                    <tr>
                                        <td class="class-cell">Senior stage (IX & X)</td>
                                        <td>English, Maths, Science, Social studies, II Lang (Tamil / Hindi / French), Computer Science, PT, Art, Swimming, Music, Dance, AI, Robotics.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- START FOOTER -->
    @include('user.layouts.footer')
    <!-- END FOOTER -->

    @include('user.layouts.script')

</body>
</html>
