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
    <style>
        .map {
            overflow: hidden;
            width: 100%;
            /* height: 32rem; */
            margin-top: 20px
        }

        @media (max-width: 768px) {
            .map {
                height: 33rem;
            }
        }

        @media (max-width: 480px) {
            .map {
                height: 35rem;
            }
        }

        .logo_img {
            width: 111px !important;
            background-size: contain;
            filter: invert(1) !important;
        }

        .navbar {
            height: 10rem;
        }

        @media (max-width:969px) {
            .logo_img {
                width: 90px !important;
            }
        }
    </style>

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
      <h2 class="text-white h1 mb-3">Contact Us</h2>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
          <li class="breadcrumb-item active text-white opacity-75" aria-current="page">Contact</li>
        </ol>
      </nav>
    </div>
  </section>

  <!-- Contact Form & Info -->
  <section class="py-100">
    <div class="container">
      <div class="row gy-5">
        <div class="col-lg-4">
          <div class="tw-p-10 bg-main-10 tw-rounded-xl">
            <h4 class="mb-4">Get in Touch</h4>
            <div class="d-flex align-items-start tw-gap-4 mb-4">
              <span class="tw-text-2xl text-main-600"><i class="ph ph-map-pin"></i></span>
              <div>
                <h6 class="mb-1">Address</h6>
                <p class="text-neutral-500">Maruthi Nagar, Lawspet, Puducherry – 605008</p>
              </div>
            </div>
            <div class="d-flex align-items-start tw-gap-4 mb-4">
              <span class="tw-text-2xl text-main-600"><i class="ph ph-phone"></i></span>
              <div>
                <h6 class="mb-1">Phone</h6>
                <p class="text-neutral-500">+91 94423 99777</p>
              </div>
            </div>
            <div class="d-flex align-items-start tw-gap-4">
              <span class="tw-text-2xl text-main-600"><i class="ph ph-envelope"></i></span>
              <div>
                <h6 class="mb-1">Email</h6>
                <p class="text-neutral-500">info@maruthischool.edu.in</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <form method="post" action="{{ route('contact.store') }}" class="tw-p-10 border tw-rounded-xl" id="contactForm">
            @csrf
            <div class="row g-4">
              <div class="col-md-6">
                <input type="text" class="form-control tw-py-3" placeholder="Name" id="first-name" name="name" value="{{ old('name') }}">
                @error('name')
                <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

              <div class="col-md-6">
                <input class="form-control tw-py-3" placeholder="Email" id="email" name="email" type="email" value="{{ old('email') }}">
                @error('email')
                  <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

              <div class="col-md-6">
                <input class="form-control tw-py-3" placeholder="Phone Number" id="phone" name="mobile_no" type="text" value="{{ old('mobile_no') }}">
                  @error('mobile_no')
                   <span style="color: red">{{ $message }}</span>
                  @enderror
             </div>


              <div class="col-md-6">
                <input class="form-control tw-py-3" placeholder="Subject" name="subject" type="text" value="{{ old('subject') }}" >
                @error('subject')
                <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
              <div class="col-12">
                <textarea class="form-control tw-py-3" rows="5" placeholder="Enter Message" id="description"  name="enquiry" value="{{ old('enquiry') }}" placeholder="Message*"></textarea>
                @error('enquiry')
                <span style="color: red">{{ $message }}</span>
                @enderror
              </div>
              <div class="col-12"><button type="submit" class="btn btn-main rounded-pill px-5 py-3"  id="submitButton" name="submit" value="Submit">Send
                  Message</button></div>

              <div class="col-md-12">
                <div id="alert-msg" class="alert-msg text-center"></div>
              </div>
              
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Map Section -->
  <section class="map-section">
    <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.0911159363413!2d79.81432337505986!3d11.968193188262495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a53614fb795f777%3A0x31ab09967c3454df!2sMaruthi%20Matriculation%20Higher%20Secondary%20School!5e0!3m2!1sen!2sin!4v1778822995946!5m2!1sen!2sin" width="100%" height="450" style="border:0; display: block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
            Start Your Child's Journey <br class="d-none d-md-block"> to <span class="text-highlight">Excellence</span>
            Today
          </h2>
          <p class="cta-description text-white opacity-90 mb-0">
            Join Puducherry's leading CBSE school. We provide a nurturing environment, <br class="d-none d-lg-block">
            state-of-the-art facilities, and a legacy of academic success.
          </p>
        </div>
        <div class="col-lg-5 text-lg-end text-center" data-aos="fade-left" data-aos-duration="1000">
          <div class="cta-btn-group d-flex flex-column flex-sm-row justify-content-lg-end gap-3 align-items-center">
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
    {{-- =========================== --}}
 

    @include('user.layouts.script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("contactForm");
            const submitButton = document.getElementById("submitButton");

            form.addEventListener("submit", function(event) {
                // Disable the button to prevent multiple submissions
                submitButton.disabled = true;
                submitButton.textContent = "Submitting...";
            });

            @if (session('success'))
                Swal.fire({
                    title: "Success!",
                    text: "{{ session('success') }}",
                    icon: "success",
                    confirmButtonText: "OK"
                });
            @endif
        });
    </script>
</body>

</html>
