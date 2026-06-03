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



  <!-- Breadcrumb -->
    <section class="breadcrumb-section py-80 bg-main-600 position-relative">
        <div class="container">
            <h2 class="text-white h1 mb-3">News & Events</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active text-white opacity-75" aria-current="page">Events</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Event Details Section -->
<section class="py-100">

    <div class="container">

        <div class="row gy-5">

            <!-- Main Content -->
            <div class="col-lg-8">

                <div class="blog-item mb-5 pb-5 border-bottom">

                    <!-- Event Image -->
                    <img src="{{ asset('storage/' . $event->image) }}"
                         alt="{{ $event->title }}"
                         class="w-100 tw-rounded-xl mb-4"
                         style="max-height:500px; object-fit:cover;">

                    <!-- Event Date -->
                    <div class="d-flex tw-gap-4 text-neutral-400 mb-3">

                        <span>

                            <i class="ph ph-calendar me-1"></i>

                            {{ \Carbon\Carbon::parse($event->event_date)->format('F d, Y') }}

                        </span>

                    </div>

                    <!-- Event Title -->
                    <h3 class="mb-3">

                        {{ $event->title }}

                    </h3>

                    <!-- Event Description -->
                    <p class="text-neutral-500"
                       style="line-height: 2; text-align: justify;">

                        {{ $event->description }}

                    </p>

                </div>

            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">

                <div class="p-4 bg-main-10 tw-rounded-xl">

                    <h5 class="mb-4">

                        Recent Events

                    </h5>

                    <ul class="d-flex flex-column tw-gap-4">

                        @foreach ($recentEvents as $recent)

                            <li>

                                <a href="{{ route('event.details', $recent->id) }}"
                                   class="text-neutral-500 hover-text-main-600">

                                    {{ $recent->title }}

                                </a>

                            </li>

                        @endforeach

                    </ul>

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
                        Start Your Child's Journey <br class="d-none d-md-block"> to <span
                            class="text-highlight">Excellence</span> Today
                    </h2>
                    <p class="cta-description text-white opacity-90 mb-0">
                        Join Puducherry's leading CBSE school. We provide a nurturing environment, <br
                            class="d-none d-lg-block">
                        state-of-the-art facilities, and a legacy of academic success.
                    </p>
                </div>
                <div class="col-lg-5 text-lg-end text-center" data-aos="fade-left" data-aos-duration="1000">
                    <div
                        class="cta-btn-group d-flex flex-column flex-sm-row justify-content-lg-end gap-3 align-items-center">
                        <a href="{{ route('contact') }}" class="btn btn-apply-now rounded-pill px-5 py-3 fw-bold">
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
  




    @include('user.layouts.script')
</body>
</html>
