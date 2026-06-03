<!-- START HEADER -->
<!-- Content CLick Capture-->
<style>
    .logo_img {
        width: 150px;
        background-size: contain;
        /* filter: invert(1); */
    }

    .navbar {
        z-index: 1000 !important;

    }

    @media (max-width: 560px) {

        .float {
            width: 185px;
        }

        .float i,
        .float span {
            font-size: 16px;
        }

        /* img {
            width: 83px !important;
            background-size: contain;
            margin: 0 !important;
        } */
    }
</style>




{{-- ========================================================== --}}


  <!-- ==================== Search Popup Start Here ==================== -->
  <div class="search_popup">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="search_wrapper">
            <div class="search_top d-flex justify-content-between align-items-center">
              <div class="search_logo">
                <a href="{{ route('index') }}">
                  <img src="{{ asset('user/assets/images/logo/logo.png') }}" alt="Maruthi School Logo" class="tw-h-12">
                </a>
              </div>
              <div class="search_close">
                <button type="button" class="search_close_btn">
                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="search_form">
              <form action="#">
                <div class="search_input">
                  <input class="search-input-field" type="text" placeholder="Type here to search...">
                  <span class="search-focus-border"></span>
                  <button type="submit">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="search-popup-overlay"></div>
  <!-- ==================== Search Popup End Here ==================== -->

  <!-- ==================== Mobile Menu Start Here ==================== -->
  <div
    class="mobile-menu d-lg-none d-block scroll-sm position-fixed bg-white tw-w-300-px tw-h-screen overflow-y-auto tw-p-6 tw-z-999 tw--translate-x-full tw-pb-68 ">

    <button type="button"
      class="close-button position-absolute tw-end-0 top-0 tw-me-2 tw-mt-2 tw-w-605 tw-h-605 rounded-circle d-flex justify-content-center align-items-center text-neutral-900 bg-warning-100 hover-bg-neutral-900 hover-text-white">
      <i class="ph ph-x"></i>
    </button>

    <div class="mobile-menu__inner">
      <a href="{{ route('index') }}" class="mobile-menu__logo">
        <img src="{{ asset('user/assets/images/logo/maruthi-logo-seal.png') }}" alt="Maruthi School Logo" class="tw-h-14">
      </a>
      <div class="mobile-menu__menu">
        <!-- Nav menu Start -->
        <ul class="nav-menu d-lg-flex align-items-center nav-menu--mobile d-block tw-mt-8">
          <li class="nav-menu__item has-submenu {{ Request::is('/') ? 'active' : '' }}">
            <a href="{{ route('index') }}" class="nav-menu__link tw-pe-5 text-heading tw-py-9 fw-medium w-100">Home</a>
          </li>
          <li class="nav-menu__item has-submenu position-relative {{ Request::is('about') ? 'active' : '' }}">
            <a href="{{ route('about') }}" class="nav-menu__link tw-pe-5 text-heading tw-py-9 fw-medium w-100">About</a>
           
          </li>
          <li class="nav-menu__item has-submenu position-relative {{ Request::is('events') ? 'active' : '' }}">
            <a href="{{ route('event_page') }}" class="nav-menu__link tw-pe-5 text-heading tw-py-9 fw-medium w-100">Events</a>
          
          </li>
          <li class="nav-menu__item has-submenu position-relative {{ Request::is('curriculum') || Request::is('year-calendar') || Request::is('achievements') ? 'active' : '' }}">
            <a href="javascript:void(0)" class="nav-menu__link tw-pe-5 text-heading tw-py-9 fw-medium w-100 d-flex justify-content-between align-items-center">Academics <i class="ph ph-caret-down"></i></a>
            <ul class="nav-submenu scroll-sm position-absolute start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-hidden tw-p-2 tw-duration-200 tw-z-99">
              <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                <a href="{{ route('curriculum') }}" class="nav-submenu__link hover-bg-gray-200 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">Curriculum</a>
              </li>
              <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                <a href="{{ route('calendar') }}" class="nav-submenu__link hover-bg-gray-200 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">Year Calendar</a>
              </li>
              <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                <a href="{{ route('achievements') }}" class="nav-submenu__link hover-bg-gray-200 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">Achievements</a>
              </li>
            </ul>
          </li>
          <li class="nav-menu__item has-submenu position-relative {{ Request::is('gallery') ? 'active' : '' }}">
            <a href="{{ route('gallery') }}" class="nav-menu__link tw-pe-5 text-heading tw-py-9 fw-medium w-100">Gallery</a>
          
          </li>
          
          <!-- <li class="nav-menu__item has-submenu position-relative {{ Request::is('achievements') ? 'active' : '' }}">
            <a href="{{ route('achievements') }}" class="nav-menu__link tw-pe-5 text-heading tw-py-9 fw-medium w-100">Achievements</a>
            
          </li> -->
          <li class="nav-menu__item {{ Request::is('contact') ? 'active' : '' }}">
            <a href="{{ route('contact') }}" class="nav-menu__link text-heading tw-py-9 fw-medium w-100">Contact</a>
          </li>
        </ul>
        <!-- Nav menu End  -->
      </div>
    </div>
  </div>

  {{-- <ul class="menu-list right-boxed">
        <li class="{{ Request::is('projects') ? 'active' : '' }}">
            <a href="{{ route('projects') }}">Projects</a>
        </li>
        <li class="{{ Request::is('services') ? 'active' : '' }}">
            <a href="{{ route('services') }}">Services</a>
        </li>
        <li class="{{ Request::is('about') ? 'active' : '' }}">
            <a href="{{ route('about') }}">About</a>
        </li>
        <li class="{{ Request::is('contact') ? 'active' : '' }}">
            <a href="{{ route('contact') }}">Contact</a>
        </li>
        <li class="{{ Request::is('/') ? 'active' : '' }}">
            <a href="{{ route('index') }}">Home</a>
        </li>
    </ul> --}}
  
  <!-- ==================== Mobile Menu End Here ==================== -->


  <!-- ====================== Top header new start ====================== -->
  <div class="bg-white d-lg-block d-none">
    <div class="container max-w-1360-px">
      <div class="d-flex align-items-center justify-content-between tw-gap-3 flex-wrap">
        <div class="d-flex align-items-center tw-gap-5 flex-wrap py-2">
          <div class="d-flex align-items-center tw-gap-1">
            <span class="tw-text-305 text-white tw-mt-1">
              <i class="ph-fill ph-envelope"></i>
            </span>
            <span class="fw-bold text-white tw-text-4">
              info@maruthischool.edu.in
            </span>
          </div>
          <div class="d-flex align-items-center tw-gap-1">
            <span class="tw-text-305 text-white tw-mt-1">
              <i class="ph-fill ph-map-pin"></i>
            </span>
            <span class="fw-bold text-white tw-text-4">
              Lawspet, Puducherry
            </span>
          </div>
        </div>
        <div class="d-flex align-items-center tw-gap-6">
          <div class="d-flex align-items-center tw-gap-4 py-2 border-end pe-4">
            <a href="#" class="text-white hover-text-main-two-600 tw-duration-300 tw-text-lg">
              <i class="ph-fill ph-facebook-logo"></i>
            </a>
            <a href="#" class="text-white hover-text-main-two-600 tw-duration-300 tw-text-lg">
              <i class="ph-fill ph-twitter-logo"></i>
            </a>
            <a href="#" class="text-white hover-text-main-two-600 tw-duration-300 tw-text-lg">
              <i class="ph-fill ph-instagram-logo"></i>
            </a>
            <a href="#" class="text-white hover-text-main-two-600 tw-duration-300 tw-text-lg">
              <i class="ph-fill ph-linkedin-logo"></i>
            </a>
          </div>
          <div class="py-2">
            <span class="fw-bold text-white tw-text-4">
             Call No. +91 94423 99777
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ====================== Top header new end ====================== -->

  <!-- ==================== Header Start Here ==================== -->
  <header class="header tw-transition-all tw-z-99 tw-shadow-sm sticky-top">
    <div class="container max-w-1360-px">
      <nav class="d-flex align-items-center justify-content-between position-relative ">

        <!-- Logo Start -->
        <a href="{{ route('index') }}" class="logo d-flex align-items-center tw-gap-3">
         <img src="{{ asset('user/assets/images/logo/maruthi-logo-seal.png') }}" 
alt="Maruthi School Logo"
class="logo-img-header tw-p-1 rounded-circle bg-white">
          <div class="d-xl-block d-none">
            <h1 class="logo-school-name fw-bold text-main-600 tw-mb-0 tw-leading-none ">MARUTHI</h1>
            <span class="logo-school-sub text-uppercase tracking-wider">Senior Secondary School</span>
          </div>
        </a>
        <!-- Logo End -->

        <!-- Menu Start  -->
        <div class="header-menu d-lg-block d-none">
          <ul class="nav-menu d-lg-flex align-items-center tw-gap-0">
            <li class="nav-menu__item {{ Request::is('/') ? 'active' : '' }}">
              <a href="{{ route('index') }}" class=" nav-menu__link text-heading tw-py-4 fw-bold hover-text-main-600">Home</a>
            </li>
            <li class="nav-menu__item {{ Request::is('about') ? 'active' : '' }}">
              <a href="{{ route('about') }}" class=" nav-menu__link text-heading tw-py-4 fw-bold hover-text-main-600">About</a>
            </li>
            <li class="nav-menu__item {{ Request::is('events') ? 'active' : '' }}">
              <a href="{{ route('event_page') }}"
                class=" nav-menu__link text-heading tw-py-4 fw-bold hover-text-main-600">Events</a>
            </li>
             <li class="nav-menu__item has-submenu position-relative {{ Request::is('curriculum') || Request::is('year-calendar') || Request::is('achievements') ? 'active' : '' }}">
    <a href="javascript:void(0)" class="nav-menu__link text-heading tw-py-4 fw-bold hover-text-main-600 d-inline-flex align-items-center">Academics <i class="ph ph-caret-down dropdown-arrow-icon ms-1"></i></a>
    <ul
      class="nav-submenu scroll-sm position-absolute start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-hidden tw-p-2 tw-duration-200 tw-z-99">
      <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
        <a href="{{ route('curriculum') }}"
          class="nav-submenu__link hover-bg-gray-200 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
          Curriculum
        </a>
      </li>
      <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
        <a href="{{ route('calendar') }}"
          class="nav-submenu__link hover-bg-gray-200 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
          Year Calendar
        </a>
      </li>
      <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
        <a href="{{ route('achievements') }}"
          class="nav-submenu__link hover-bg-gray-200 text-heading fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">
          Achievements
        </a>
      </li>
    </ul>
  </li>
            <li class="nav-menu__item {{ Request::is('gallery') ? 'active' : '' }}">
              <a href="{{ route('gallery') }}" class=" nav-menu__link text-heading tw-py-4 fw-bold hover-text-main-600">Gallery</a>
            </li>
            <li class="nav-menu__item {{ Request::is('achievements') ? 'active' : '' }}">
              <a href="{{ route('achievements') }}"
                class=" nav-menu__link text-heading tw-py-4 fw-bold hover-text-main-600">Achievements</a>
            </li> 
            <li class="nav-menu__item {{ Request::is('contact') ? 'active' : '' }}">
              <a href="{{ route('contact') }}"
                class=" nav-menu__link text-heading tw-py-4 fw-bold hover-text-main-600">Contact</a>
            </li>
          </ul>
        </div>
        <!-- Menu End  -->

        <!-- Header Right start -->
       
         

          <button type="button" class="toggle-mobileMenu d-lg-none ms-3 tw-text-3xl text-dark">
            <i class="ph ph-list"></i>
          </button>
        
        <!-- Header Right End  -->
      </nav>
    </div>
  </header>
  <!-- ==================== Header End Here ==================== -->
{{-- ========================================================== --}}




