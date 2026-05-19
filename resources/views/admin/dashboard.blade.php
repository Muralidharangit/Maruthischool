@extends('admin.layouts.index')
@section('content')
    <!-- Start Main Content -->
    <div
        class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] px-4 group-data-[theme-width=box]:xl:px-0 ac-transition">
        
        @if ($message = Session::get('success'))
            <div class="aleart aleart-success-solid" id="successAlert"
                style="position: fixed; top: 20px; right: 20px; width: 300px; z-index: 99999; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);">
                {{ $message }}
                <button class="close-button" onclick="this.parentElement.remove()">
                    <i class="ri-close-line text-inherit"></i>
                </button>
            </div>
        @endif

        <div id="loader" class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]">
            <img src="{{ asset('admin/assets/images/loader.gif') }}" alt="loader">
        </div>

        <div class="grid grid-cols-12 gap-4 mt-4">
            <!-- Start Header Section -->
            <div class="col-span-full mb-2">
                <div class="flex items-center justify-between bg-white dark:bg-dark-card p-4 rounded-15 shadow-sm border border-gray-100 dark:border-dark-border">
                    <div>
                        <h5 class="card-title text-2xl font-bold text-gray-800 dark:text-white">Dashboard Overview</h5>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Welcome back, Admin! Here's what's happening today.</p>
                    </div>
                    <div class="hidden sm:flex items-center gap-2">
                        <span class="flex items-center gap-1.5 px-3 py-1.5 bg-primary-100 dark:bg-primary-500/20 text-primary-500 rounded-full text-xs font-semibold">
                            <span class="size-2 bg-primary-500 rounded-full animate-pulse"></span>
                            Live Status
                        </span>
                    </div>
                </div>
            </div>
            <!-- End Header Section -->

            <!-- Start Attractive 3 Cards Row (Single Line Responsive) -->
            <!-- Card 1: Enquiries -->
            <div class="col-span-4">
                <div class="group relative overflow-hidden bg-white dark:bg-dark-card p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 dark:border-dark-border cursor-pointer h-full">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity duration-300">
                        <i class="ri-question-answer-line text-8xl text-blue-500"></i>
                    </div>
                    <div class="relative z-10">
                        <h3 class="text-4xl font-black text-gray-900 dark:text-white mb-1">{{ $contactCount }}</h3>
                        <p class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Total Enquiries</p>
                        <div class="mt-6 flex items-center gap-2 text-xs font-bold text-blue-500">
                            <span>View Details</span>
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </div>
                    <!-- Bottom Gradient Accent -->
                    <div class="absolute bottom-0 left-0 h-1.5 w-full bg-gradient-to-r from-blue-400 to-indigo-600"></div>
                </div>
            </div>

            <!-- Card 2: Events -->
            <div class="col-span-4">
                <div class="group relative overflow-hidden bg-white dark:bg-dark-card p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 dark:border-dark-border cursor-pointer h-full">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity duration-300">
                        <i class="ri-calendar-event-line text-8xl text-green-500"></i>
                    </div>
                    <div class="relative z-10">
                        <h3 class="text-4xl font-black text-gray-900 dark:text-white mb-1">{{ $eventCount }}</h3>
                        <p class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">School Events</p>
                        <div class="mt-6 flex items-center gap-2 text-xs font-bold text-green-500">
                            <span>Manage Events</span>
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </div>
                    <!-- Bottom Gradient Accent -->
                    <div class="absolute bottom-0 left-0 h-1.5 w-full bg-gradient-to-r from-green-400 to-teal-600"></div>
                </div>
            </div>

            <!-- Card 3: Gallery -->
            <div class="col-span-4">
                <div class="group relative overflow-hidden bg-white dark:bg-dark-card p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 dark:border-dark-border cursor-pointer h-full">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity duration-300">
                        <i class="ri-image-line text-8xl text-orange-500"></i>
                    </div>
                    <div class="relative z-10">
                        <h3 class="text-4xl font-black text-gray-900 dark:text-white mb-1">{{ $galleryCount }}</h3>
                        <p class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Gallery Media</p>
                        <div class="mt-6 flex items-center gap-2 text-xs font-bold text-orange-500">
                            <span>Browse Gallery</span>
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </div>
                    <!-- Bottom Gradient Accent -->
                    <div class="absolute bottom-0 left-0 h-1.5 w-full bg-gradient-to-r from-orange-400 to-red-600"></div>
                </div>
            </div>
            <!-- End Attractive 3 Cards Row -->

            <!-- Start Quick Links Section -->
            <div class="col-span-full mt-4">
                <div class="card p-6 rounded-15 bg-white dark:bg-dark-card border border-gray-100 dark:border-dark-border">
                    <h5 class="card-title text-lg font-bold mb-6 flex items-center gap-2">
                        <i class="ri-flashlight-fill text-primary-500"></i>
                        Quick Management
                    </h5>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                        <a href="{{ route('contact.index') }}" class="flex flex-col items-center p-4 rounded-xl bg-gray-50 dark:bg-dark-card-shade hover:bg-primary-50 dark:hover:bg-primary-500/10 transition-colors border border-gray-200 dark:border-dark-border-four group">
                            <i class="ri-mail-line text-2xl text-gray-500 group-hover:text-primary-500 mb-2"></i>
                            <span class="text-xs font-bold text-gray-700 dark:text-gray-300 group-hover:text-primary-500">Enquiries</span>
                        </a>
                        <a href="{{ route('event.index') }}" class="flex flex-col items-center p-4 rounded-xl bg-gray-50 dark:bg-dark-card-shade hover:bg-primary-50 dark:hover:bg-primary-500/10 transition-colors border border-gray-200 dark:border-dark-border-four group">
                            <i class="ri-calendar-line text-2xl text-gray-500 group-hover:text-primary-500 mb-2"></i>
                            <span class="text-xs font-bold text-gray-700 dark:text-gray-300 group-hover:text-primary-500">Events</span>
                        </a>
                        <a href="{{ route('project.index') }}" class="flex flex-col items-center p-4 rounded-xl bg-gray-50 dark:bg-dark-card-shade hover:bg-primary-50 dark:hover:bg-primary-500/10 transition-colors border border-gray-200 dark:border-dark-border-four group">
                            <i class="ri-image-line text-2xl text-gray-500 group-hover:text-primary-500 mb-2"></i>
                            <span class="text-xs font-bold text-gray-700 dark:text-gray-300 group-hover:text-primary-500">Gallery</span>
                        </a>
                        <a href="{{ route('slider.index') }}" class="flex flex-col items-center p-4 rounded-xl bg-gray-50 dark:bg-dark-card-shade hover:bg-primary-50 dark:hover:bg-primary-500/10 transition-colors border border-gray-200 dark:border-dark-border-four group">
                            <i class="ri-slideshow-line text-2xl text-gray-500 group-hover:text-primary-500 mb-2"></i>
                            <span class="text-xs font-bold text-gray-700 dark:text-gray-300 group-hover:text-primary-500">Sliders</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Quick Links Section -->

        </div>
    </div>
    <!-- End Main Content -->

    <script>
        // Automatically hide the alert after 5 seconds
        setTimeout(() => {
            const alertElement = document.getElementById('successAlert');
            if (alertElement) {
                alertElement.style.transition = 'opacity 0.5s';
                alertElement.style.opacity = '0';
                setTimeout(() => alertElement.remove(), 500); // Remove after transition
            }
        }, 5000);
    </script>
@endsection