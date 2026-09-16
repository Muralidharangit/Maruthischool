<!-- START HEADER -->
<style>
/* ══════════════════════════════════════
   MARUTHI HEADER — PREMIUM REDESIGN
   ══════════════════════════════════════ */

/* ── Top Info Bar ── */
.hdr-topbar {
    background: linear-gradient(90deg, #064e3b 0%, #047857 100%);
    padding: 8px 0;
    border-bottom: 1px solid rgba(255,255,255,0.08);
}
.hdr-topbar a,
.hdr-topbar span { color: rgba(255,255,255,0.85); font-size: 0.82rem; text-decoration: none; transition: color 0.2s; }
.hdr-topbar a:hover { color: #6ee7b7; }
.hdr-topbar .tb-social a { font-size: 1rem; color: rgba(255,255,255,0.7); }
.hdr-topbar .tb-social a:hover { color: #6ee7b7; transform: translateY(-1px); display: inline-block; }
.hdr-topbar .tb-divider { width: 1px; height: 16px; background: rgba(255,255,255,0.2); }

/* ── Main Header ── */
.header {
    background: rgba(255,255,255,0.97) !important;
    backdrop-filter: blur(20px) !important;
    -webkit-backdrop-filter: blur(20px) !important;
    border-bottom: 1px solid rgba(4,120,87,0.08) !important;
    box-shadow: 0 4px 24px rgba(0,0,0,0.04) !important;
    padding: 0 !important;
    z-index: 1080 !important;
    transition: all 0.3s ease !important;
}

/* ── Logo Block ── */
.hdr-logo {
    display: flex;
    align-items: center;
    gap: 14px;
    text-decoration: none;
    padding: 10px 0;
}
.hdr-logo-img {
    width: 80px;
    height: 80px;
    object-fit: contain;
    border-radius: 50%;
    background: #ffffff;
    box-shadow: 0 0 0 3px rgba(4,120,87,0.15), 0 4px 16px rgba(4,120,87,0.12);
    padding: 4px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    flex-shrink: 0;
}
.hdr-logo:hover .hdr-logo-img {
    transform: scale(1.04);
    box-shadow: 0 0 0 4px rgba(4,120,87,0.25), 0 8px 24px rgba(4,120,87,0.18);
}
.hdr-logo-text { line-height: 1.1; }
.hdr-logo-name {
    display: block;
    font-size: 1.45rem;
    font-weight: 900;
    color: #047857;
    letter-spacing: -0.01em;
    font-family: 'Plus Jakarta Sans', 'Outfit', sans-serif;
    line-height: 1;
}
.hdr-logo-tagline {
    display: block;
    font-size: 0.68rem;
    font-weight: 600;
    color: #64748b;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    margin-top: 3px;
}
.hdr-logo-cbse {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    background: #ecfdf5;
    border: 1px solid rgba(4,120,87,0.2);
    color: #047857;
    font-size: 0.58rem;
    font-weight: 800;
    padding: 2px 8px;
    border-radius: 100px;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-top: 5px;
}

/* ── Nav Menu ── */
.hdr-nav { display: flex; align-items: center; gap: 2px; }
.hdr-nav-item { position: relative; }
.hdr-nav-link {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    padding: 28px 14px;
    font-size: 0.88rem;
    font-weight: 700;
    color: #334155;
    text-decoration: none;
    letter-spacing: 0.01em;
    transition: color 0.2s;
    white-space: nowrap;
    position: relative;
}
.hdr-nav-link::after {
    content: '';
    position: absolute;
    bottom: 0; left: 14px; right: 14px;
    height: 2.5px;
    background: #047857;
    border-radius: 2px 2px 0 0;
    transform: scaleX(0);
    transition: transform 0.25s ease;
}
.hdr-nav-link:hover,
.hdr-nav-item.active .hdr-nav-link { color: #047857; }
.hdr-nav-link:hover::after,
.hdr-nav-item.active .hdr-nav-link::after { transform: scaleX(1); }
.hdr-nav-link i.caret { font-size: 0.75rem; transition: transform 0.2s; }
.hdr-nav-item:hover .hdr-nav-link i.caret { transform: rotate(-180deg); }

/* ── Dropdown ── */
.hdr-dropdown {
    position: absolute;
    top: calc(100% + 2px);
    left: 0;
    min-width: 200px;
    background: #ffffff;
    border: 1px solid rgba(0,0,0,0.07);
    border-radius: 14px;
    box-shadow: 0 20px 48px rgba(0,0,0,0.1);
    padding: 8px;
    opacity: 0;
    visibility: hidden;
    transform: translateY(10px);
    transition: all 0.22s cubic-bezier(0.16,1,0.3,1);
    z-index: 200;
}
.hdr-nav-item:hover .hdr-dropdown {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}
.hdr-dropdown a {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 14px;
    border-radius: 8px;
    font-size: 0.88rem;
    font-weight: 600;
    color: #334155;
    text-decoration: none;
    transition: all 0.18s;
}
.hdr-dropdown a i { font-size: 1rem; color: #047857; }
.hdr-dropdown a:hover {
    background: #f0fdf9;
    color: #047857;
    padding-left: 18px;
}

/* ── CTA Button ── */
.hdr-cta {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #047857, #10b981);
    color: #ffffff !important;
    font-size: 0.82rem;
    font-weight: 700;
    padding: 10px 20px;
    border-radius: 100px;
    text-decoration: none;
    letter-spacing: 0.03em;
    white-space: nowrap;
    box-shadow: 0 4px 16px rgba(4,120,87,0.25);
    transition: all 0.25s ease;
    border: none;
}
.hdr-cta:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(4,120,87,0.35);
    color: #ffffff !important;
}

/* ── Mobile Toggle ── */
.hdr-mobile-toggle {
    width: 42px;
    height: 42px;
    border-radius: 10px;
    border: 1.5px solid rgba(4,120,87,0.15);
    background: #f0fdf9;
    color: #047857;
    font-size: 1.3rem;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s;
}
.hdr-mobile-toggle:hover { background: #047857; color: #ffffff; }

/* ── Mobile Drawer ── */
.hdr-mobile-drawer {
    position: fixed;
    top: 0; left: 0;
    width: 300px;
    height: 100vh;
    background: #ffffff;
    z-index: 9999;
    transform: translateX(-100%);
    transition: transform 0.35s cubic-bezier(0.16,1,0.3,1);
    overflow-y: auto;
    box-shadow: 8px 0 48px rgba(0,0,0,0.12);
    display: flex;
    flex-direction: column;
}
.hdr-mobile-drawer.open { transform: translateX(0); }
.hdr-drawer-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.4);
    z-index: 9998;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s;
    backdrop-filter: blur(3px);
}
.hdr-drawer-overlay.open { opacity: 1; visibility: visible; }

.hdr-drawer-header {
    background: linear-gradient(135deg, #064e3b 0%, #047857 100%);
    padding: 20px 20px 24px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.hdr-drawer-close {
    width: 34px; height: 34px;
    border-radius: 8px;
    background: rgba(255,255,255,0.15);
    border: none;
    color: #ffffff;
    font-size: 1.1rem;
    display: flex; align-items: center; justify-content: center;
    cursor: pointer; transition: background 0.2s;
}
.hdr-drawer-close:hover { background: rgba(255,255,255,0.25); }
.hdr-drawer-logo-img { width: 56px; height: 56px; border-radius: 50%; background: #fff; padding: 3px; box-shadow: 0 0 0 2px rgba(255,255,255,0.3); }
.hdr-drawer-logo-name { color: #ffffff; font-weight: 800; font-size: 1.1rem; line-height: 1; }
.hdr-drawer-logo-sub  { color: rgba(255,255,255,0.65); font-size: 0.68rem; letter-spacing: 0.08em; text-transform: uppercase; }

.hdr-drawer-nav { padding: 12px 0; flex: 1; }
.hdr-drawer-nav a {
    display: flex; align-items: center; gap: 12px;
    padding: 13px 20px;
    font-size: 0.92rem; font-weight: 600;
    color: #334155; text-decoration: none;
    border-left: 3px solid transparent;
    transition: all 0.2s;
}
.hdr-drawer-nav a i { font-size: 1.1rem; color: #94a3b8; }
.hdr-drawer-nav a:hover, .hdr-drawer-nav a.active-link {
    background: #f0fdf9;
    color: #047857;
    border-left-color: #047857;
}
.hdr-drawer-nav a:hover i, .hdr-drawer-nav a.active-link i { color: #047857; }
.hdr-drawer-submenu { padding-left: 16px; display: none; }
.hdr-drawer-submenu.open { display: block; }
.hdr-drawer-submenu a { padding: 10px 20px; font-size: 0.85rem; }
.hdr-drawer-toggle-btn {
    display: flex; align-items: center; justify-content: space-between;
    cursor: pointer;
}
.hdr-drawer-toggle-btn i.sub-caret { transition: transform 0.2s; font-size: 0.8rem; color: #94a3b8; }
.hdr-drawer-toggle-btn.open i.sub-caret { transform: rotate(-180deg); }
.hdr-drawer-divider { height: 1px; background: rgba(0,0,0,0.06); margin: 8px 20px; }
.hdr-drawer-footer {
    padding: 20px;
    border-top: 1px solid rgba(0,0,0,0.06);
}
.hdr-drawer-footer a.drawer-cta {
    display: flex; align-items: center; justify-content: center; gap: 8px;
    background: linear-gradient(135deg,#047857,#10b981);
    color: #fff; border-radius: 12px; padding: 13px;
    font-weight: 700; font-size: 0.88rem; text-decoration: none;
    box-shadow: 0 4px 16px rgba(4,120,87,0.25);
}
.hdr-drawer-footer .drawer-contact { margin-top: 14px; text-align: center; font-size: 0.8rem; color: #64748b; }
.hdr-drawer-footer .drawer-contact strong { color: #047857; }
</style>

{{-- ====================================================== --}}

<!-- ── SEARCH POPUP ─────────────────────────────── -->
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
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </button>
            </div>
          </div>
          <div class="search_form">
            <form action="#">
              <div class="search_input">
                <input class="search-input-field" type="text" placeholder="Type here to search...">
                <span class="search-focus-border"></span>
                <button type="submit">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
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

<!-- ── MOBILE DRAWER OVERLAY ─────────────────────────────── -->
<div class="hdr-drawer-overlay" id="drawerOverlay"></div>

<!-- ── MOBILE DRAWER ─────────────────────────────── -->
<div class="hdr-mobile-drawer" id="mobileDrawer">
  <!-- Drawer Header with Logo -->
  <div class="hdr-drawer-header">
    <div class="d-flex align-items-center gap-3">
      <img src="{{ asset('user/assets/images/logo/maruthi-logo-seal.png') }}" alt="Logo" class="hdr-drawer-logo-img">
      <div>
        <div class="hdr-drawer-logo-name">MARUTHI</div>
        <div class="hdr-drawer-logo-sub">Senior Secondary School</div>
      </div>
    </div>
    <button class="hdr-drawer-close" id="drawerClose"><i class="ph ph-x"></i></button>
  </div>

  <!-- Drawer Nav -->
  <nav class="hdr-drawer-nav">
    <a href="{{ route('index') }}" class="{{ Request::is('/') ? 'active-link' : '' }}">
      <i class="ph-fill ph-house"></i> Home
    </a>
    <a href="{{ route('about') }}" class="{{ Request::is('about') ? 'active-link' : '' }}">
      <i class="ph-fill ph-info"></i> About
    </a>
    <a href="{{ route('event_page') }}" class="{{ Request::is('events') ? 'active-link' : '' }}">
      <i class="ph-fill ph-calendar-blank"></i> Events
    </a>

    <div class="hdr-drawer-divider"></div>

    <!-- Academics submenu toggle -->
    <a href="javascript:void(0)" class="hdr-drawer-toggle-btn {{ Request::is('curriculum') || Request::is('year-calendar') || Request::is('achievements') ? 'active-link open' : '' }}" id="acadToggle">
      <span class="d-flex align-items-center gap-3">
        <i class="ph-fill ph-graduation-cap"></i> Academics
      </span>
      <i class="ph ph-caret-down sub-caret"></i>
    </a>
    <div class="hdr-drawer-submenu {{ Request::is('curriculum') || Request::is('year-calendar') || Request::is('achievements') ? 'open' : '' }}" id="acadSubmenu">
      <a href="{{ route('curriculum') }}" class="{{ Request::is('curriculum') ? 'active-link' : '' }}">
        <i class="ph-fill ph-book-open"></i> Curriculum
      </a>
      <a href="{{ route('calendar') }}" class="{{ Request::is('year-calendar') ? 'active-link' : '' }}">
        <i class="ph-fill ph-calendar"></i> Year Calendar
      </a>
      <a href="{{ route('achievements') }}" class="{{ Request::is('achievements') ? 'active-link' : '' }}">
        <i class="ph-fill ph-trophy"></i> Achievements
      </a>
    </div>

    <div class="hdr-drawer-divider"></div>

    <a href="{{ route('gallery') }}" class="{{ Request::is('gallery') ? 'active-link' : '' }}">
      <i class="ph-fill ph-images"></i> Gallery
    </a>
    <a href="{{ route('contact') }}" class="{{ Request::is('contact') ? 'active-link' : '' }}">
      <i class="ph-fill ph-envelope"></i> Contact
    </a>
  </nav>

  <!-- Drawer Footer CTA -->
  <div class="hdr-drawer-footer">
    <a href="{{ route('contact') }}" class="drawer-cta">
      <i class="ph-fill ph-pencil-simple"></i> Apply for Admission
    </a>
    <div class="drawer-contact mt-3">
      <i class="ph-fill ph-phone me-1"></i>
      <strong>+91 94423 99777</strong>
      <div class="mt-1">Lawspet, Puducherry</div>
    </div>
  </div>
</div>

<!-- ── TOP INFO BAR ─────────────────────────────── -->
<div class="hdr-topbar d-lg-block d-none">
  <div class="container max-w-1360-px">
    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
      <!-- Left: contact info -->
      <div class="d-flex align-items-center gap-4">
        <a href="mailto:info@maruthischool.edu.in" class="d-flex align-items-center gap-2">
          <i class="ph-fill ph-envelope"></i> info@maruthischool.edu.in
        </a>
        <div class="tb-divider"></div>
        <span class="d-flex align-items-center gap-2">
          <i class="ph-fill ph-map-pin"></i> Lawspet, Puducherry
        </span>
      </div>
      <!-- Right: social + phone -->
      <div class="d-flex align-items-center gap-4">
        <div class="tb-social d-flex align-items-center gap-3">
          <a href="#" aria-label="Facebook"><i class="ph-fill ph-facebook-logo"></i></a>
          <a href="#" aria-label="Instagram"><i class="ph-fill ph-instagram-logo"></i></a>
          <a href="#" aria-label="LinkedIn"><i class="ph-fill ph-linkedin-logo"></i></a>
          <a href="#" aria-label="YouTube"><i class="ph-fill ph-youtube-logo"></i></a>
        </div>
        <div class="tb-divider"></div>
        <a href="tel:+919442399777" class="d-flex align-items-center gap-2 fw-bold">
          <i class="ph-fill ph-phone"></i> +91 94423 99777
        </a>
      </div>
    </div>
  </div>
</div>

<!-- ── MAIN HEADER ─────────────────────────────── -->
<header class="header tw-z-99 sticky-top">
  <div class="container max-w-1360-px">
    <nav class="d-flex align-items-center justify-content-between">

      <!-- Logo -->
      <a href="{{ route('index') }}" class="hdr-logo">
        <img src="{{ asset('user/assets/images/logo/maruthi-logo-seal.png') }}"
             alt="Maruthi School Logo"
             class="hdr-logo-img">
        <div class="hdr-logo-text d-xl-block d-none">
          <span class="hdr-logo-name">MARUTHI</span>
          <span class="hdr-logo-tagline">Senior Secondary School</span>
          <span class="hdr-logo-cbse"><i class="ph-fill ph-seal-check"></i> CBSE Affiliated</span>
        </div>
        <!-- Show abbreviated text on md screens -->
        <div class="hdr-logo-text d-xl-none d-lg-block d-none">
          <span class="hdr-logo-name" style="font-size:1.15rem;">MARUTHI</span>
          <span class="hdr-logo-tagline">Senior Secondary School</span>
        </div>
      </a>

      <!-- Desktop Nav -->
      <ul class="hdr-nav list-unstyled mb-0 d-lg-flex d-none">
        <li class="hdr-nav-item {{ Request::is('/') ? 'active' : '' }}">
          <a href="{{ route('index') }}" class="hdr-nav-link">Home</a>
        </li>
        <li class="hdr-nav-item {{ Request::is('about') ? 'active' : '' }}">
          <a href="{{ route('about') }}" class="hdr-nav-link">About</a>
        </li>
        <li class="hdr-nav-item {{ Request::is('events') ? 'active' : '' }}">
          <a href="{{ route('event_page') }}" class="hdr-nav-link">Events</a>
        </li>

        <!-- Academics Dropdown -->
        <li class="hdr-nav-item {{ Request::is('curriculum') || Request::is('year-calendar') || Request::is('achievements') ? 'active' : '' }}">
          <a href="javascript:void(0)" class="hdr-nav-link">
            Academics <i class="ph ph-caret-down caret"></i>
          </a>
          <ul class="hdr-dropdown list-unstyled mb-0">
            <li>
              <a href="{{ route('curriculum') }}">
                <i class="ph-fill ph-book-open"></i> Curriculum
              </a>
            </li>
            <li>
              <a href="{{ route('calendar') }}">
                <i class="ph-fill ph-calendar"></i> Year Calendar
              </a>
            </li>
            <li>
              <a href="{{ route('achievements') }}">
                <i class="ph-fill ph-trophy"></i> Achievements
              </a>
            </li>
          </ul>
        </li>

        <li class="hdr-nav-item {{ Request::is('gallery') ? 'active' : '' }}">
          <a href="{{ route('gallery') }}" class="hdr-nav-link">Gallery</a>
        </li>
        <li class="hdr-nav-item {{ Request::is('contact') ? 'active' : '' }}">
          <a href="{{ route('contact') }}" class="hdr-nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right actions -->
      <div class="d-flex align-items-center gap-3">
        <a href="{{ route('contact') }}" class="hdr-cta d-lg-inline-flex d-none">
          <i class="ph-fill ph-pencil-simple"></i> Apply Now
        </a>
        <!-- Mobile toggle -->
        <button class="hdr-mobile-toggle d-lg-none" id="drawerOpen" type="button" aria-label="Open menu">
          <i class="ph ph-list"></i>
        </button>
      </div>

    </nav>
  </div>
</header>

<!-- ── DRAWER JAVASCRIPT ─────────────────────────────── -->
<script>
(function () {
  const drawer    = document.getElementById('mobileDrawer');
  const overlay   = document.getElementById('drawerOverlay');
  const openBtn   = document.getElementById('drawerOpen');
  const closeBtn  = document.getElementById('drawerClose');
  const acadToggle = document.getElementById('acadToggle');
  const acadSub    = document.getElementById('acadSubmenu');

  function openDrawer()  { drawer.classList.add('open');  overlay.classList.add('open');  document.body.style.overflow='hidden'; }
  function closeDrawer() { drawer.classList.remove('open'); overlay.classList.remove('open'); document.body.style.overflow=''; }

  openBtn.addEventListener('click', openDrawer);
  closeBtn.addEventListener('click', closeDrawer);
  overlay.addEventListener('click', closeDrawer);

  acadToggle.addEventListener('click', function () {
    this.classList.toggle('open');
    acadSub.classList.toggle('open');
  });
})();
</script>
<!-- END HEADER -->
