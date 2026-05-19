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
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active text-white opacity-75" aria-current="page">Events</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Events Section (extracted from index) -->
    {{-- <section class="py-100 bg-main-10">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class=" bg-white tw-rounded-xl animation-item">
                        <div class="position-relative tw-mb-5">
                            <span class="w-100 tw-rounded-xl overflow-hidden">
                                 <img src="user/assets/images/thumbs/school-students-group.png"
                                    alt="Cultural Exchange Program" class="w-100 course-item__img tw-duration-300">
                            </span>
                            <div
                                class="tw-py-5 tw-px-6 bg-main-600 tw-rounded-top-bottom-12-px position-absolute top-0 tw-start-0">
                                <h2 class="h5 tw-text-details-two-32-px d-block fw-bold text-white tw-leading-none">
                                    04
                                </h2>
                                <span class="fw-normal tw-text-4 text-white">
                                    JUN
                                </span>
                            </div>
                        </div>
                        <div class="tw-px-4 tw-pb-3">

                            <span class="w-100 tw-h-px bg-neutral-12-persent tw-mt-4 tw-mb-4"></span>
                            <a href="javascript:void(0)"
                                class="fw-semibold tw-text-5 text-neutral-500 tw-mb-6 hover-text-main-600 tw-duration-300">
                                International Cultural Exchange – French School Visit
                            </a>
                            <a href="course-details.html"
                                class="btn btn-main-two hover-style-four button--stroke active-scale-094 tw-duration-100 tw-py-305 tw-px-6 group active--translate-y-2 tw-p-1 rounded-pill border-main-600 border"
                                data-block="button">
                                <span class="button__flair" style="translate: none; rotate: none; scale: none;"></span>
                                <span class="button__label fw-bold tw-text-4">View Details</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class=" bg-white tw-rounded-xl animation-item">
                        <div class="position-relative tw-mb-5">
                            <span class="w-100 tw-rounded-xl overflow-hidden">
                                 <img src="user/assets/images/thumbs/school-students-group.png"
                                    alt="Cultural Exchange Program" class="w-100 course-item__img tw-duration-300">
                            </span>
                            <div
                                class="tw-py-5 tw-px-6 bg-main-600 tw-rounded-top-bottom-12-px position-absolute top-0 tw-start-0">
                                <h2 class="h5 tw-text-details-two-32-px d-block fw-bold text-white tw-leading-none">
                                    04
                                </h2>
                                <span class="fw-normal tw-text-4 text-white">
                                    JUN
                                </span>
                            </div>
                        </div>
                        <div class="tw-px-4 tw-pb-3">

                            <span class="w-100 tw-h-px bg-neutral-12-persent tw-mt-4 tw-mb-4"></span>
                            <a href="javascript:void(0)"
                                class="fw-semibold tw-text-5 text-neutral-500 tw-mb-6 hover-text-main-600 tw-duration-300">
                                International Cultural Exchange – French School Visit
                            </a>
                            <a href="course-details.html"
                                class="btn btn-main-two hover-style-four button--stroke active-scale-094 tw-duration-100 tw-py-305 tw-px-6 group active--translate-y-2 tw-p-1 rounded-pill border-main-600 border"
                                data-block="button">
                                <span class="button__flair" style="translate: none; rotate: none; scale: none;"></span>
                                <span class="button__label fw-bold tw-text-4">View Details</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class=" bg-white tw-rounded-xl animation-item">
                        <div class="position-relative tw-mb-5">
                            <span class="w-100 tw-rounded-xl overflow-hidden">
                                 <img src="user/assets/images/thumbs/school-students-group.png"
                                    alt="Cultural Exchange Program" class="w-100 course-item__img tw-duration-300">
                            </span>
                            <div
                                class="tw-py-5 tw-px-6 bg-main-600 tw-rounded-top-bottom-12-px position-absolute top-0 tw-start-0">
                                <h2 class="h5 tw-text-details-two-32-px d-block fw-bold text-white tw-leading-none">
                                    04
                                </h2>
                                <span class="fw-normal tw-text-4 text-white">
                                    JUN
                                </span>
                            </div>
                        </div>
                        <div class="tw-px-4 tw-pb-3">

                            <span class="w-100 tw-h-px bg-neutral-12-persent tw-mt-4 tw-mb-4"></span>
                            <a href="javascript:void(0)"
                                class="fw-semibold tw-text-5 text-neutral-500 tw-mb-6 hover-text-main-600 tw-duration-300">
                                International Cultural Exchange – French School Visit
                            </a>
                            <a href="course-details.html"
                                class="btn btn-main-two hover-style-four button--stroke active-scale-094 tw-duration-100 tw-py-305 tw-px-6 group active--translate-y-2 tw-p-1 rounded-pill border-main-600 border"
                                data-block="button">
                                <span class="button__flair" style="translate: none; rotate: none; scale: none;"></span>
                                <span class="button__label fw-bold tw-text-4">View Details</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <!-- Events Section -->
<section class="py-100 bg-main-10">

    <div class="container">

        <div class="row gy-4">

            @foreach ($events as $event)

                <div class="col-lg-4 col-md-6">

                    <div class="bg-white tw-rounded-xl animation-item h-100">

                        <!-- Image -->
                        <div class="position-relative tw-mb-5">

                            <span class="w-100 tw-rounded-xl overflow-hidden">

                                <img src="{{ asset('storage/' . $event->image) }}"
                                     alt="{{ $event->title }}"
                                     class="w-100 course-item__img tw-duration-300"
                                     style="height: 250px; object-fit: cover;">

                            </span>

                            <!-- Date -->
                            <div class="tw-py-5 tw-px-6 bg-main-600 tw-rounded-top-bottom-12-px position-absolute top-0 tw-start-0">

                                <h2 class="h5 tw-text-details-two-32-px d-block fw-bold text-white tw-leading-none">

                                    {{ \Carbon\Carbon::parse($event->event_date)->format('d') }}

                                </h2>

                                <span class="fw-normal tw-text-4 text-white">

                                    {{ \Carbon\Carbon::parse($event->event_date)->format('M') }}

                                </span>

                            </div>

                        </div>

                        <!-- Content -->
                        <div class="tw-px-4 tw-pb-4">

                            <span class="w-100 tw-h-px bg-neutral-12-persent tw-mt-4 tw-mb-4"></span>

                            <!-- Title -->
                            <h5 class="fw-semibold tw-text-5 text-neutral-500 tw-mb-3">

                                {{ $event->title }}

                            </h5>

                            <!-- Description -->
                            <p class="text-muted tw-mb-4">

                                {{ \Illuminate\Support\Str::limit($event->description, 120) }}

                            </p>

                            <!-- Button -->
                            <a href="{{ route('event.details', $event->id) }}"
   class="btn btn-main-two hover-style-four button--stroke active-scale-094 tw-duration-100 tw-py-305 tw-px-6 group active--translate-y-2 tw-p-1 rounded-pill border-main-600 border">

    <span class="button__label fw-bold tw-text-4">

        View Details

    </span>

</a>
                        </div>

                    </div>

                </div>

            @endforeach

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
  




    @include('user.layouts.script')
</body>
</html>
