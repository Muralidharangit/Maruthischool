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
    <title>Academic Year Calendar | Maruthi Senior Secondary School Puducherry</title>
    @include('user.layouts.links')
</head>

<body class="body-fullpage">

    {{-- preloader starts --}}
    @include('user.layouts.loader')
    {{-- preloader ends --}}

    <!-- START HEADER -->
    @include('user.layouts.header')
    <!-- END HEADER -->

    <!-- Main Content Subpage Container -->
    <div class="subpage-container bg-neutral-50">
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
                            <li class="sidebar-item active">
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
                        <div class="subpage-breadcrumbs">
                            <a href="{{ route('index') }}">Home</a>
                            <span class="separator">/</span>
                            <span>Academics</span>
                            <span class="separator">/</span>
                            <span class="text-neutral-500">Year Calendar</span>
                        </div>

                        <h2 class="subpage-highlight-heading">Academic Year Calendar</h2>
                        <p class="text-neutral-500 fw-bold mb-4">YEAR PLANNER & ACADEMIC SCHEDULE 2026 - 2027</p>
                        
                        <!-- Calendar Table -->
                        <div class="academics-table-wrapper">
                            <table class="academics-table">
                                <thead>
                                    <tr>
                                        <th style="width: 25%;">Month</th>
                                        <th style="width: 55%;">Planned Activities & Events</th>
                                        <th style="width: 20%;">Category</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="class-cell">June 2026</td>
                                        <td>School Reopens for new Academic Year 2026-27 &middot; Term I Commencement</td>
                                        <td>Academic</td>
                                    </tr>
                                    <tr>
                                        <td class="class-cell">August 2026</td>
                                        <td>Independence Day Celebrations &middot; Unit Test I Examinations</td>
                                        <td>Events / Exams</td>
                                    </tr>
                                    <tr>
                                        <td class="class-cell">September 2026</td>
                                        <td>Teachers Day &middot; Quarterly / Mid-Term Examinations</td>
                                        <td>Examinations</td>
                                    </tr>
                                    <tr>
                                        <td class="class-cell">October 2026</td>
                                        <td>Vijayadashami / Dussehra Holidays &middot; Annual Science Exhibition</td>
                                        <td>Holidays / Expo</td>
                                    </tr>
                                    <tr>
                                        <td class="class-cell">November 2026</td>
                                        <td>Childrens Day Celebration &middot; Sports Day Competitions</td>
                                        <td>Sports & Co</td>
                                    </tr>
                                    <tr>
                                        <td class="class-cell">December 2026</td>
                                        <td>Christmas Celebrations &middot; Half Yearly Exams &middot; Winter Vacations</td>
                                        <td>Exams / Holidays</td>
                                    </tr>
                                    <tr>
                                        <td class="class-cell">January 2027</td>
                                        <td>Pongal Harvest Festival Holidays &middot; Republic Day Parade</td>
                                        <td>Cultural / Holidays</td>
                                    </tr>
                                    <tr>
                                        <td class="class-cell">March 2027</td>
                                        <td>CBSE Board Practical & Written Examinations &middot; Final Term Evaluations</td>
                                        <td>Assessments</td>
                                    </tr>
                                    <tr>
                                        <td class="class-cell">April 2027</td>
                                        <td>Annual Results Declaration &middot; Summer Vacation Commencement</td>
                                        <td>Results</td>
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
