<!-- START FOOTER -->



  <!-- ==================== Footer top Start Here ==================== -->
  <footer class="bg-lightgreen position-relative">
    <img src="{{ asset('user/assets/images/shape/footer-shape2.png') }}" alt="shape"
      class="position-absolute bottom-0 tw-end-0 animation-scalation d-xl-block d-none tw-me-17 tw-mb-106-px opacity-25">
    <img src="{{ asset('user/assets/images/shape/footer-shape5.png') }}" alt="shape"
      class="position-absolute bottom-0 tw-start-0 tw-ms-17 tw-mb-150-px animation-scalation d-xl-block d-none opacity-25">
    
    <div class="container position-relative" style="z-index: 1;">
      <div class="py-60">
        <div class="row gy-5 gx-4">
          
          <!-- Column 1: School Identity & Socials -->
          <div class="col-xl-4 col-lg-4 col-md-6 col-12">
            <a href="{{ route('index') }}" class="logo d-flex align-items-center tw-gap-3 mb-3 text-decoration-none">
              <img src="{{ asset('user/assets/images/logo/maruthi-logo-seal.png') }}" alt="Maruthi School Logo"
                class="bg-white tw-p-2 rounded-circle shadow-sm" style="height:64px;width:64px;object-fit:contain;border:2px solid rgba(4,120,87,0.15);">
              <div>
                <h1 class="h4 fw-bold tw-mb-0 logo-school-name" style="color:#047857; letter-spacing:0.02em;">MARUTHI</h1>
                <span class="fw-semibold text-neutral-700" style="font-size:0.72rem; letter-spacing:0.08em; display:block;">SENIOR SECONDARY SCHOOL</span>
                <span class="badge bg-main-100 text-main-700 fw-bold px-2 py-0.5 mt-1" style="font-size:0.65rem; border-radius:4px;">Wisdom Wins</span>
              </div>
            </a>
            
            <p class="text-neutral-600 mb-4" style="font-size:0.88rem; line-height:1.65;">
              Nurturing young minds through academic excellence, character, discipline, creativity, and holistic development in Puducherry since 1997. Affiliated to CBSE, New Delhi (Aff. No. 2930027).
            </p>

            <div class="d-flex align-items-center gap-2 flex-wrap">
              <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="footer-social-btn" title="Facebook">
                <i class="ph-bold ph-facebook-logo"></i>
              </a>
              <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="footer-social-btn" title="Instagram">
                <i class="ph-bold ph-instagram-logo"></i>
              </a>
              <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer" class="footer-social-btn" title="YouTube">
                <i class="ph-bold ph-youtube-logo"></i>
              </a>
              <a href="https://www.x.com/" target="_blank" rel="noopener noreferrer" class="footer-social-btn" title="X (Twitter)">
                <i class="ph-bold ph-x-logo"></i>
              </a>
            </div>
          </div>

          <!-- Column 2: Quick Links -->
          <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6">
            <h2 class="h6 fw-bold mb-2 footer-widget-title" style="font-size:1.05rem;">Quick Links</h2>
            <span class="footer-divider-bar mb-4"></span>
            
            <ul class="d-flex flex-column gap-3 ps-0 mb-0 list-unstyled">
              <li>
                <a href="{{ route('about') }}" class="footer-nav-link">
                  <i class="ph-bold ph-caret-right"></i>
                  <span>About Us</span>
                </a>
              </li>
              <li>
                <a href="{{ route('gallery') }}" class="footer-nav-link">
                  <i class="ph-bold ph-caret-right"></i>
                  <span>Campus &amp; Facilities</span>
                </a>
              </li>
              <li>
                <a href="{{ route('achievements') }}" class="footer-nav-link">
                  <i class="ph-bold ph-caret-right"></i>
                  <span>Achievements</span>
                </a>
              </li>
              <li>
                <a href="{{ route('mandatory_disclosure') }}" class="footer-nav-link">
                  <i class="ph-bold ph-caret-right"></i>
                  <span>Mandatory Disclosure</span>
                </a>
              </li>
              <li>
                <a href="{{ route('event_page') }}" class="footer-nav-link">
                  <i class="ph-bold ph-caret-right"></i>
                  <span>Events &amp; News</span>
                </a>
              </li>
              <li>
                <a href="{{ route('contact') }}" class="footer-nav-link">
                  <i class="ph-bold ph-caret-right"></i>
                  <span>Contact Us</span>
                </a>
              </li>
            </ul>
          </div>

          <!-- Column 3: Academics & Admissions -->
          <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6">
            <h2 class="h6 fw-bold mb-2 footer-widget-title" style="font-size:1.05rem;">Academics</h2>
            <span class="footer-divider-bar mb-4"></span>
            
            <ul class="d-flex flex-column gap-3 ps-0 mb-0 list-unstyled">
              <li>
                <a href="{{ route('curriculum') }}" class="footer-nav-link">
                  <i class="ph-bold ph-caret-right"></i>
                  <span>CBSE Curriculum</span>
                </a>
              </li>
              <li>
                <a href="{{ route('calendar') }}" class="footer-nav-link">
                  <i class="ph-bold ph-caret-right"></i>
                  <span>Academic Calendar</span>
                </a>
              </li>
              <li>
                <a href="{{ route('circular') }}" class="footer-nav-link">
                  <i class="ph-bold ph-caret-right"></i>
                  <span>Circulars &amp; Notices</span>
                </a>
              </li>
              <li>
                <a href="{{ route('services') }}" class="footer-nav-link">
                  <i class="ph-bold ph-caret-right"></i>
                  <span>School Programs</span>
                </a>
              </li>
              <li>
                <a href="{{ route('contact') }}" class="footer-nav-link">
                  <i class="ph-bold ph-caret-right"></i>
                  <span>Admissions Info</span>
                </a>
              </li>
            </ul>
          </div>

          <!-- Column 4: Contact & Campus Info -->
          <div class="col-xl-4 col-lg-4 col-md-12 col-12">
            <h2 class="h6 fw-bold mb-2 footer-widget-title" style="font-size:1.05rem;">Campus &amp; Contact</h2>
            <span class="footer-divider-bar mb-4"></span>

            <div>
              <!-- Address -->
              <div class="footer-contact-item">
                <div class="footer-contact-icon">
                  <i class="ph-fill ph-map-pin"></i>
                </div>
                <div class="footer-contact-text">
                  <span class="footer-contact-label">Campus Address</span>
                  <div class="footer-contact-value">Maruthi Nagar, Lawspet, Puducherry – 605008</div>
                </div>
              </div>

              <!-- Phone -->
              <div class="footer-contact-item">
                <div class="footer-contact-icon">
                  <i class="ph-fill ph-phone-call"></i>
                </div>
                <div class="footer-contact-text">
                  <span class="footer-contact-label">Phone Support</span>
                  <div>
                    <a href="tel:+919442399777" class="footer-contact-link">+91 94423 99777</a>
                  </div>
                </div>
              </div>

              <!-- Email -->
              <div class="footer-contact-item">
                <div class="footer-contact-icon">
                  <i class="ph-fill ph-envelope-simple"></i>
                </div>
                <div class="footer-contact-text">
                  <span class="footer-contact-label">Email Address</span>
                  <div>
                    <a href="mailto:info@maruthischool.edu.in" class="footer-contact-link">info@maruthischool.edu.in</a>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>

    <!-- ================= footer bottom start ================= -->
    <div class="footer-bottom-bar">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 text-center text-md-start">
          <p class="mb-0 text-white" style="font-size:0.86rem; opacity:0.95;">
            &copy; 2026 Maruthi Senior Secondary School, Puducherry. All rights reserved.
          </p>
          <div class="d-flex align-items-center gap-3 ms-auto me-auto ms-md-auto me-md-0">
            <span class="badge bg-white text-main-700 fw-bold px-2.5 py-1" style="font-size:0.75rem; border-radius:100px;">
              CBSE Affiliation No. 2930027
            </span>
          </div>
        </div>
      </div>
    </div>
    <!-- ================= footer bottom end ================= -->
  </footer>
  <!-- ==================== Footer top End Here ==================== -->



<!-- END FOOTER -->