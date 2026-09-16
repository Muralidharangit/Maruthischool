<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Maruthi Senior Secondary School" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Official School Circulars & Notices | Maruthi Senior Secondary School Puducherry.">
    <meta name="keywords" content="circular, notice, academic circular, CBSE, Maruthi school">

    <!-- SITE TITLE -->
    <title>Official Circular | Maruthi Senior Secondary School Puducherry</title>
    @include('user.layouts.links')

    <!-- PDF.js CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>

    <style>
        /* ══════════════════════════════════════════════════════
           SECURE PDF VIEWER STYLES — MARUTHI THEME
           ══════════════════════════════════════════════════════ */

        /* Prevent text selection */
        .secure-viewer-wrapper {
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -webkit-touch-callout: none;
        }

        /* Print restriction stylesheet */
        @media print {
            body * {
                display: none !important;
                visibility: hidden !important;
            }
            body::before {
                content: "RESTRICTED DOCUMENT: Printing and distribution of this official circular is strictly prohibited by Maruthi Senior Secondary School.";
                display: block !important;
                padding: 40px;
                font-size: 20px;
                font-weight: bold;
                color: #b91c1c;
                text-align: center;
                background: #fef2f2;
                border: 2px dashed #dc2626;
                margin: 40px auto;
                max-width: 600px;
                border-radius: 12px;
                font-family: sans-serif;
            }
        }

        /* Viewer Container */
        .pdf-viewer-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.06), 0 1px 3px rgba(0, 0, 0, 0.04);
            border: 1px solid rgba(4, 120, 87, 0.12);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            position: relative;
            transition: all 0.3s ease;
        }

        /* Fullscreen View Mode */
        .pdf-viewer-card.fullscreen-mode {
            position: fixed;
            inset: 0;
            z-index: 99999;
            border-radius: 0;
            width: 100vw;
            height: 100vh;
            max-width: none !important;
            margin: 0 !important;
            box-shadow: none;
        }

        /* Security Notice Bar */
        .viewer-security-bar {
            background: linear-gradient(90deg, #064e3b 0%, #047857 100%);
            color: #ffffff;
            padding: 8px 18px;
            font-size: 0.78rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 8px;
            z-index: 20;
        }
        .viewer-security-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(255, 255, 255, 0.16);
            padding: 3px 10px;
            border-radius: 100px;
            font-weight: 600;
            letter-spacing: 0.02em;
        }

        /* Controls Toolbar */
        .viewer-toolbar {
            background: #f8fafc;
            border-bottom: 1px solid #e2e8f0;
            padding: 10px 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
            z-index: 20;
            position: sticky;
            top: 0;
        }
        .toolbar-group {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .tb-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            height: 36px;
            padding: 0 12px;
            border-radius: 8px;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            color: #334155;
            font-size: 0.85rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.04);
        }
        .tb-btn:hover:not(:disabled) {
            background: #f0fdf9;
            border-color: #047857;
            color: #047857;
        }
        .tb-btn:disabled {
            opacity: 0.45;
            cursor: not-allowed;
        }

        .tb-icon-btn {
            width: 36px;
            height: 36px;
            padding: 0;
            border-radius: 8px;
            font-size: 1.1rem;
        }

        .page-num-indicator {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 0.86rem;
            font-weight: 700;
            color: #1e293b;
            padding: 0 4px;
        }
        .page-input {
            width: 44px;
            height: 32px;
            text-align: center;
            font-size: 0.85rem;
            font-weight: 700;
            border: 1.5px solid #cbd5e1;
            border-radius: 6px;
            background: #fff;
            color: #0f172a;
            outline: none;
            transition: border-color 0.2s;
        }
        .page-input:focus {
            border-color: #047857;
            box-shadow: 0 0 0 3px rgba(4, 120, 87, 0.12);
        }

        .zoom-level-label {
            font-size: 0.84rem;
            font-weight: 700;
            color: #475569;
            min-width: 48px;
            text-align: center;
        }

        /* ── Document Viewport Area with Smooth Scroll ── */
        .pdf-viewport {
            flex: 1;
            background: #334155;
            background: radial-gradient(circle, #334155 0%, #1e293b 100%);
            height: 750px;
            max-height: 80vh;
            overflow-y: scroll !important;
            overflow-x: auto !important;
            -webkit-overflow-scrolling: touch !important;
            overscroll-behavior: contain !important;
            touch-action: pan-y !important;
            padding: 24px 16px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 24px;
            position: relative;
        }
        .fullscreen-mode .pdf-viewport {
            height: calc(100vh - 92px);
            max-height: calc(100vh - 92px);
            padding: 20px;
        }

        /* Custom Scrollbar */
        .pdf-viewport::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }
        .pdf-viewport::-webkit-scrollbar-track {
            background: #1e293b;
        }
        .pdf-viewport::-webkit-scrollbar-thumb {
            background: #64748b;
            border-radius: 6px;
            border: 2px solid #1e293b;
        }
        .pdf-viewport::-webkit-scrollbar-thumb:hover {
            background: #10b981;
        }

        /* Page Container with Watermark Layer */
        .pdf-page-container {
            position: relative;
            box-shadow: 0 12px 36px rgba(0, 0, 0, 0.35), 0 2px 8px rgba(0, 0, 0, 0.2);
            border-radius: 4px;
            overflow: hidden;
            background: #ffffff;
            max-width: 100%;
            margin-bottom: 20px;
            flex-shrink: 0;
            touch-action: pan-y;
        }

        .pdf-page-canvas {
            display: block;
            margin: 0 auto;
            pointer-events: none;
            width: 100%;
            height: auto;
        }

        /* Repeating Security Watermark Layer */
        .pdf-watermark-layer {
            position: absolute;
            inset: 0;
            pointer-events: none;
            z-index: 5;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            overflow: hidden;
            opacity: 0.14;
            padding: 20px;
        }
        .watermark-row {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 150%;
            transform: rotate(-28deg);
            white-space: nowrap;
            font-size: 1.15rem;
            font-weight: 900;
            color: #047857;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            font-family: 'Plus Jakarta Sans', sans-serif;
            text-shadow: 1px 1px 0px rgba(255,255,255,0.8);
            gap: 40px;
        }

        /* Blur / Screen Shield Overlay on Focus Loss / Snipping */
        .screen-shield-overlay {
            position: absolute;
            inset: 0;
            background: rgba(15, 23, 42, 0.88);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            z-index: 999;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            padding: 30px;
            text-align: center;
            opacity: 0;
            visibility: hidden;
            transition: all 0.25s ease;
        }
        .screen-shield-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        .shield-icon {
            width: 70px;
            height: 70px;
            background: rgba(239, 68, 68, 0.2);
            border: 2px solid rgba(239, 68, 68, 0.6);
            color: #f87171;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-bottom: 16px;
            animation: pulseShield 2s infinite ease-in-out;
        }
        @keyframes pulseShield {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.06); }
        }

        /* Loading Spinner State */
        .pdf-loading-state {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 80px 20px;
            color: #ffffff;
            gap: 16px;
        }
        .spinner-ring {
            width: 50px;
            height: 50px;
            border: 4px solid rgba(255, 255, 255, 0.15);
            border-top-color: #10b981;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
        }
        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Quick Info Header Card */
        .circular-header-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 24px 28px;
            border: 1px solid rgba(4, 120, 87, 0.12);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
            margin-bottom: 24px;
        }

        /* Floating Security Toast */
        .security-toast {
            position: fixed;
            bottom: 24px;
            right: 24px;
            background: #1e293b;
            color: #ffffff;
            border-left: 4px solid #ef4444;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 0.85rem;
            font-weight: 600;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
            z-index: 100000;
            display: flex;
            align-items: center;
            gap: 10px;
            transform: translateY(100px);
            opacity: 0;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .security-toast.show {
            transform: translateY(0);
            opacity: 1;
        }

        @media (max-width: 768px) {
            .viewer-toolbar {
                padding: 8px 12px;
                gap: 6px;
            }
            .tb-btn {
                height: 32px;
                padding: 0 8px;
                font-size: 0.78rem;
            }
            .tb-icon-btn {
                width: 32px;
                height: 32px;
            }
            .pdf-viewport {
                height: 520px;
                max-height: 70vh;
                padding: 12px 8px;
            }
            .watermark-row {
                font-size: 0.85rem;
            }
        }
    </style>
</head>

<body class="body-fullpage secure-viewer-wrapper">

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
                        <i class="ph-fill ph-file-text"></i>
                    </div>
                    <div class="header-badge">
                        <i class="ph-fill ph-star-four"></i> Academics
                    </div>
                    <h1>School Circulars &amp; Notices</h1>
                    <p>Official announcements, examination circulars, and notifications for parents and students.</p>
                    <div class="subpage-breadcrumb-bar">
                        <a href="{{ route('index') }}">Home</a>
                        <span class="bc-sep">/</span>
                        <span>Academics</span>
                        <span class="bc-sep">/</span>
                        <span class="bc-current">Circular</span>
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
                        <div class="academics-sidebar-category">
                            <i class="ph ph-caret-double-right me-1"></i> Academics
                        </div>
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
                                <a href="{{ route('circular') }}" class="sidebar-link">
                                    <i class="ph ph-file-text"></i> Circular
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

                        <!-- Sidebar Security Badge -->
                        <div class="mt-4 p-3 bg-white rounded-3 border border-success-subtle shadow-sm">
                            <div class="d-flex align-items-center gap-2 text-success fw-bold fs-7 mb-1">
                                <i class="ph-fill ph-shield-check fs-5"></i> Official School Portal
                            </div>
                            <p class="text-muted mb-0" style="font-size: 0.78rem; line-height: 1.4;">
                                This circular is published for online viewing by enrolled students, parents, and authorized faculty only.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Content Area -->
                <div class="col-lg-9">

                    <!-- Info Header -->
                    <div class="circular-header-card">
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                            <div>
                                <div class="d-inline-flex align-items-center gap-2 px-3 py-1 bg-success-subtle text-success rounded-pill fw-bold fs-7 mb-2">
                                    <i class="ph-fill ph-bell-ringing"></i> Current Session 2026–2027
                                </div>
                                <h2 class="h4 fw-bold text-neutral-900 mb-1">General Academic Circular &amp; Information Bulletin</h2>
                                <p class="text-neutral-500 mb-0 fs-7">
                                    Published by Administration Office &middot; Maruthi Senior Secondary School, Puducherry
                                </p>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <button type="button" class="btn btn-outline-success btn-sm rounded-pill px-3 fw-bold d-inline-flex align-items-center gap-1" id="triggerFullscreenTop">
                                    <i class="ph-bold ph-arrows-out-simple"></i> Full View
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- ── SECURE RESPONSIVE PDF VIEWER ── -->
                    <div class="pdf-viewer-card" id="pdfViewerCard" data-lenis-prevent="true">

                        <!-- Top Security Strip -->
                        <div class="viewer-security-bar">
                            <div class="d-flex align-items-center gap-2">
                                <span class="viewer-security-badge">
                                    <i class="ph-fill ph-lock-key"></i> SECURE DIGITAL VIEWER
                                </span>
                                <span class="d-none d-sm-inline opacity-75">Confidential &bull; Maruthi Senior Secondary School</span>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <span class="opacity-75 fs-8">Screen Protection Active</span>
                                <i class="ph-fill ph-shield-check text-warning"></i>
                            </div>
                        </div>

                        <!-- Viewer Toolbar -->
                        <div class="viewer-toolbar">
                            <!-- Page Controls -->
                            <div class="toolbar-group">
                                <button type="button" class="tb-btn tb-icon-btn" id="prevPageBtn" title="Previous Page">
                                    <i class="ph-bold ph-caret-left"></i>
                                </button>
                                <div class="page-num-indicator">
                                    <span>Page</span>
                                    <input type="number" id="pageNumberInput" class="page-input" min="1" value="1">
                                    <span>of <span id="pageCountSpan">--</span></span>
                                </div>
                                <button type="button" class="tb-btn tb-icon-btn" id="nextPageBtn" title="Next Page">
                                    <i class="ph-bold ph-caret-right"></i>
                                </button>
                            </div>

                            <!-- Zoom Controls -->
                            <div class="toolbar-group">
                                <button type="button" class="tb-btn tb-icon-btn" id="zoomOutBtn" title="Zoom Out">
                                    <i class="ph-bold ph-minus"></i>
                                </button>
                                <span class="zoom-level-label" id="zoomLevelLabel">100%</span>
                                <button type="button" class="tb-btn tb-icon-btn" id="zoomInBtn" title="Zoom In">
                                    <i class="ph-bold ph-plus"></i>
                                </button>
                                <button type="button" class="tb-btn d-none d-md-inline-flex" id="fitWidthBtn" title="Fit to Width">
                                    <i class="ph-bold ph-arrows-in-line-horizontal"></i> Fit Width
                                </button>
                            </div>

                            <!-- View Mode & Fullscreen -->
                            <div class="toolbar-group">
                                <button type="button" class="tb-btn" id="scrollToTopBtn" title="Scroll to Top">
                                    <i class="ph-bold ph-arrow-up"></i>
                                </button>
                                <button type="button" class="tb-btn" id="fullscreenToggleBtn" title="Toggle Fullscreen Full View">
                                    <i class="ph-bold ph-arrows-out-simple" id="fsIcon"></i>
                                    <span class="d-none d-md-inline" id="fsText">Full Screen</span>
                                </button>
                            </div>
                        </div>

                        <!-- Document Viewport with Lenis prevention -->
                        <div class="pdf-viewport" id="pdfViewport" data-lenis-prevent="true" tabindex="0">
                            <!-- Loading State -->
                            <div class="pdf-loading-state" id="pdfLoadingState">
                                <div class="spinner-ring"></div>
                                <div class="fw-bold fs-6">Loading Official Document...</div>
                                <div class="text-white-50 fs-7">Verifying security &amp; rendering high-res pages</div>
                            </div>

                            <!-- Pages Container (populated via JS) -->
                            <div id="pagesContainer" class="d-flex flex-column align-items-center w-100" data-lenis-prevent="true" style="display: none !important;"></div>
                        </div>

                        <!-- Shield Overlay for Screen Capture / Focus Loss -->
                        <div class="screen-shield-overlay" id="screenShieldOverlay">
                            <div class="shield-icon">
                                <i class="ph-fill ph-shield-warning"></i>
                            </div>
                            <h3 class="h5 fw-bold text-white mb-2">Protected Document View</h3>
                            <p class="text-white-50 mb-3" style="max-width: 440px; font-size: 0.88rem;">
                                Document display is paused while switching windows or capturing the screen. Click the button below to resume.
                            </p>
                            <button type="button" class="btn btn-success rounded-pill px-4 py-2 fw-bold" id="resumeViewBtn">
                                <i class="ph-bold ph-eye me-1"></i> Resume Document View
                            </button>
                        </div>

                    </div>
                    <!-- ── END SECURE PDF VIEWER ── -->

                </div>
            </div>
        </div>
    </div>

    <!-- Security Toast Notification -->
    <div class="security-toast" id="securityToast">
        <i class="ph-fill ph-prohibit text-danger fs-5"></i>
        <span id="securityToastMessage">Action restricted for document security.</span>
    </div>

    <!-- START ADMISSIONS CTA -->
    <section class="admissions-cta-redesign position-relative overflow-hidden mt-5">
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
                        Got Questions About the <br class="d-none d-md-block"> Circular or <span class="text-highlight">Admissions?</span>
                    </h2>
                    <p class="cta-description text-white opacity-90 mb-0">
                        Our administrative office is happy to assist parents with clarifications, circular schedules, and admission processes.
                    </p>
                </div>
                <div class="col-lg-5 text-lg-end text-center">
                    <div class="cta-btn-group d-flex flex-column flex-sm-row justify-content-lg-end gap-3 align-items-center">
                        <a href="{{ route('contact') }}" class="btn btn-apply-now rounded-pill px-5 py-3 fw-bold">
                            Contact Administration <i class="ph-bold ph-arrow-right ms-2"></i>
                        </a>
                        <a href="tel:+919442399777" class="btn btn-call-us rounded-pill px-4 py-3 fw-bold border-white text-white border-2">
                            <i class="ph-fill ph-phone me-2"></i> Call School
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

    <!-- ══════════════════════════════════════════════════════
         SECURE PDF VIEWER JAVASCRIPT
         ══════════════════════════════════════════════════════ -->
    <script>
    (function () {
        'use strict';

        // Set PDF.js worker source
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

        const pdfUrl = '{{ asset("user/assets/circular.pdf") }}';

        // DOM elements
        const viewerCard       = document.getElementById('pdfViewerCard');
        const viewport         = document.getElementById('pdfViewport');
        const pagesContainer   = document.getElementById('pagesContainer');
        const loadingState     = document.getElementById('pdfLoadingState');
        const pageNumInput     = document.getElementById('pageNumberInput');
        const pageCountSpan    = document.getElementById('pageCountSpan');
        const prevPageBtn      = document.getElementById('prevPageBtn');
        const nextPageBtn      = document.getElementById('nextPageBtn');
        const zoomInBtn        = document.getElementById('zoomInBtn');
        const zoomOutBtn       = document.getElementById('zoomOutBtn');
        const fitWidthBtn      = document.getElementById('fitWidthBtn');
        const zoomLevelLabel   = document.getElementById('zoomLevelLabel');
        const scrollToTopBtn   = document.getElementById('scrollToTopBtn');
        const fullscreenBtn    = document.getElementById('fullscreenToggleBtn');
        const topFullscreenBtn = document.getElementById('triggerFullscreenTop');
        const fsIcon           = document.getElementById('fsIcon');
        const fsText           = document.getElementById('fsText');
        const shieldOverlay    = document.getElementById('screenShieldOverlay');
        const resumeViewBtn    = document.getElementById('resumeViewBtn');
        const toast            = document.getElementById('securityToast');
        const toastMsg         = document.getElementById('securityToastMessage');

        let pdfDoc        = null;
        let totalPages    = 0;
        let currentPage   = 1;
        let scale         = 1.1;
        let isFullscreen  = false;

        // Watermark text
        const watermarkText = 'MARUTHI SENIOR SECONDARY SCHOOL \u2022 OFFICIAL CIRCULAR \u2022 NOT FOR REPRODUCTION';

        // Security notification helper
        function showSecurityToast(message) {
            toastMsg.textContent = message;
            toast.classList.add('show');
            setTimeout(() => {
                toast.classList.remove('show');
            }, 3000);
        }

        // Initialize and load PDF
        function loadDocument() {
            const loadingTask = pdfjsLib.getDocument({
                url: pdfUrl,
                cMapUrl: 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/cmaps/',
                cMapPacked: true
            });

            loadingTask.promise.then(function (pdf) {
                pdfDoc = pdf;
                totalPages = pdf.numPages;
                pageCountSpan.textContent = totalPages;
                pageNumInput.max = totalPages;

                loadingState.style.setProperty('display', 'none', 'important');
                pagesContainer.style.setProperty('display', 'flex', 'important');

                calculateResponsiveScale();
                renderAllPages();
            }).catch(function (error) {
                console.error('Error loading PDF:', error);
                loadingState.innerHTML = `
                    <div class="text-danger fs-3 mb-2"><i class="ph-bold ph-warning-circle"></i></div>
                    <div class="fw-bold fs-6">Unable to load circular document.</div>
                    <div class="text-white-50 fs-7">Please check your internet connection and refresh the page.</div>
                `;
            });
        }

        // Calculate responsive scale based on viewport width
        function calculateResponsiveScale() {
            const availableWidth = viewport.clientWidth - 48; // padding
            if (availableWidth <= 0) return;

            const basePdfWidth = 595; // A4 standard width points
            let targetScale = availableWidth / basePdfWidth;

            if (targetScale < 0.6) targetScale = 0.6;
            if (targetScale > 1.6) targetScale = 1.6;

            scale = Math.round(targetScale * 20) / 20;
            updateZoomLabel();
        }

        function updateZoomLabel() {
            zoomLevelLabel.textContent = Math.round(scale * 100) + '%';
        }

        // Create watermark DOM structure
        function createWatermarkElement() {
            const watermarkLayer = document.createElement('div');
            watermarkLayer.className = 'pdf-watermark-layer';
            
            for (let i = 0; i < 5; i++) {
                const row = document.createElement('div');
                row.className = 'watermark-row';
                row.textContent = watermarkText;
                watermarkLayer.appendChild(row);
            }
            return watermarkLayer;
        }

        // Render all pages in continuous full-view scroll
        async function renderAllPages() {
            pagesContainer.innerHTML = '';

            const pixelRatio = window.devicePixelRatio || 1;

            for (let pageNum = 1; pageNum <= totalPages; pageNum++) {
                const pageWrapper = document.createElement('div');
                pageWrapper.className = 'pdf-page-container';
                pageWrapper.id = 'pdfPage_' + pageNum;
                pageWrapper.dataset.pageNumber = pageNum;
                pageWrapper.setAttribute('data-lenis-prevent', 'true');

                const canvas = document.createElement('canvas');
                canvas.className = 'pdf-page-canvas';
                pageWrapper.appendChild(canvas);

                // Add watermark layer
                pageWrapper.appendChild(createWatermarkElement());

                pagesContainer.appendChild(pageWrapper);

                await renderSinglePage(pageNum, canvas, pixelRatio);
            }
            updatePageNavControls();
        }

        // Render single canvas page
        async function renderSinglePage(pageNum, canvas, pixelRatio) {
            try {
                const page = await pdfDoc.getPage(pageNum);
                const viewportObj = page.getViewport({ scale: scale });

                const context = canvas.getContext('2d', { alpha: false });

                canvas.width = Math.floor(viewportObj.width * pixelRatio);
                canvas.height = Math.floor(viewportObj.height * pixelRatio);
                canvas.style.width = Math.floor(viewportObj.width) + 'px';
                canvas.style.height = Math.floor(viewportObj.height) + 'px';

                const renderContext = {
                    canvasContext: context,
                    viewport: viewportObj,
                    transform: pixelRatio !== 1 ? [pixelRatio, 0, 0, pixelRatio, 0, 0] : null
                };

                await page.render(renderContext).promise;
            } catch (err) {
                console.error('Page render error on page ' + pageNum, err);
            }
        }

        // Update page buttons
        function updatePageNavControls() {
            prevPageBtn.disabled = currentPage <= 1;
            nextPageBtn.disabled = currentPage >= totalPages;
            pageNumInput.value = currentPage;
        }

        // Scroll directly inside viewport
        function scrollToPage(pageNum) {
            if (pageNum < 1) pageNum = 1;
            if (pageNum > totalPages) pageNum = totalPages;
            currentPage = pageNum;
            updatePageNavControls();

            const targetPageEl = document.getElementById('pdfPage_' + pageNum);
            if (targetPageEl) {
                const targetTop = targetPageEl.offsetTop - viewport.offsetTop - 12;
                viewport.scrollTo({ top: targetTop, behavior: 'smooth' });
            }
        }

        // Track current visible page on scroll
        viewport.addEventListener('scroll', function () {
            const pageElements = pagesContainer.querySelectorAll('.pdf-page-container');
            const currentScrollTop = viewport.scrollTop;

            pageElements.forEach(el => {
                const elTop = el.offsetTop - viewport.offsetTop;
                const elBottom = elTop + el.offsetHeight;
                if (currentScrollTop + 150 >= elTop && currentScrollTop + 150 <= elBottom) {
                    const pageNum = parseInt(el.dataset.pageNumber, 10);
                    if (currentPage !== pageNum) {
                        currentPage = pageNum;
                        pageNumInput.value = currentPage;
                        prevPageBtn.disabled = currentPage <= 1;
                        nextPageBtn.disabled = currentPage >= totalPages;
                    }
                }
            });
        }, { passive: true });

        // Direct mousewheel handler to ensure flawless scrolling without interference
        viewport.addEventListener('wheel', function (e) {
            e.stopPropagation();
        }, { passive: true });

        // Navigation button listeners
        prevPageBtn.addEventListener('click', () => scrollToPage(currentPage - 1));
        nextPageBtn.addEventListener('click', () => scrollToPage(currentPage + 1));

        scrollToTopBtn.addEventListener('click', () => {
            viewport.scrollTo({ top: 0, behavior: 'smooth' });
            scrollToPage(1);
        });

        pageNumInput.addEventListener('change', function () {
            const val = parseInt(this.value, 10);
            if (!isNaN(val)) {
                scrollToPage(val);
            }
        });

        // Zoom In / Out / Fit
        zoomInBtn.addEventListener('click', function () {
            if (scale < 2.5) {
                scale = Math.min(2.5, Math.round((scale + 0.15) * 100) / 100);
                updateZoomLabel();
                renderAllPages();
            }
        });

        zoomOutBtn.addEventListener('click', function () {
            if (scale > 0.5) {
                scale = Math.max(0.5, Math.round((scale - 0.15) * 100) / 100);
                updateZoomLabel();
                renderAllPages();
            }
        });

        fitWidthBtn.addEventListener('click', function () {
            calculateResponsiveScale();
            renderAllPages();
        });

        // Fullscreen Toggle
        function toggleFullscreen() {
            isFullscreen = !isFullscreen;
            if (isFullscreen) {
                viewerCard.classList.add('fullscreen-mode');
                document.body.style.overflow = 'hidden';
                if (fsIcon) fsIcon.className = 'ph-bold ph-arrows-in-simple';
                if (fsText) fsText.textContent = 'Exit Full View';
            } else {
                viewerCard.classList.remove('fullscreen-mode');
                document.body.style.overflow = '';
                if (fsIcon) fsIcon.className = 'ph-bold ph-arrows-out-simple';
                if (fsText) fsText.textContent = 'Full Screen';
            }
            calculateResponsiveScale();
            renderAllPages();
        }

        fullscreenBtn.addEventListener('click', toggleFullscreen);
        if (topFullscreenBtn) {
            topFullscreenBtn.addEventListener('click', () => {
                if (!isFullscreen) toggleFullscreen();
                viewerCard.scrollIntoView({ behavior: 'smooth' });
            });
        }

        // Window resize debounced re-render
        let resizeTimer;
        window.addEventListener('resize', function () {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                calculateResponsiveScale();
                renderAllPages();
            }, 300);
        });

        // ══════════════════════════════════════════════════════
        // ANTI-DOWNLOAD, ANTI-SCREENSHOT & SECURITY ENFORCEMENT
        // ══════════════════════════════════════════════════════

        // 1. Disable Right Click across viewer & document
        document.addEventListener('contextmenu', function (e) {
            e.preventDefault();
            showSecurityToast('Right-click is disabled to protect official school documents.');
            return false;
        });

        // 2. Disable Dragging of canvas or images
        document.addEventListener('dragstart', function (e) {
            e.preventDefault();
            return false;
        });

        // 3. Disable Print, Save, Inspect, Copy & View-Source shortcuts
        document.addEventListener('keydown', function (e) {
            // Allow arrow and page keys for navigation inside viewport
            if (['ArrowUp', 'ArrowDown', 'PageUp', 'PageDown'].includes(e.key)) {
                if (document.activeElement === viewport || viewport.contains(document.activeElement)) {
                    return; // Allow native scroll navigation
                }
            }

            // PrintScreen key
            if (e.key === 'PrintScreen' || e.keyCode === 44) {
                e.preventDefault();
                if (navigator.clipboard && navigator.clipboard.writeText) {
                    navigator.clipboard.writeText('');
                }
                showShield('Screenshot key detected. Screen capture is restricted on official documents.');
                return false;
            }

            // Ctrl/Cmd shortcuts
            if (e.ctrlKey || e.metaKey) {
                // S: Save
                if (e.key === 's' || e.key === 'S' || e.keyCode === 83) {
                    e.preventDefault();
                    showSecurityToast('Document downloading / saving is disabled.');
                    return false;
                }
                // P: Print
                if (e.key === 'p' || e.key === 'P' || e.keyCode === 80) {
                    e.preventDefault();
                    showSecurityToast('Document printing is disabled.');
                    return false;
                }
                // U: View source
                if (e.key === 'u' || e.key === 'U' || e.keyCode === 85) {
                    e.preventDefault();
                    return false;
                }
                // C: Copy
                if (e.key === 'c' || e.key === 'C' || e.keyCode === 67) {
                    e.preventDefault();
                    showSecurityToast('Copying content is disabled.');
                    return false;
                }
                // Shift + I / Shift + J / Shift + C (DevTools)
                if (e.shiftKey && (e.key === 'I' || e.key === 'i' || e.key === 'J' || e.key === 'j' || e.key === 'C' || e.key === 'c')) {
                    e.preventDefault();
                    return false;
                }
            }

            // F12 key (Inspect)
            if (e.key === 'F12' || e.keyCode === 123) {
                e.preventDefault();
                return false;
            }

            // Escape in fullscreen
            if (e.key === 'Escape' && isFullscreen) {
                toggleFullscreen();
            }
        });

        // 4. Focus-loss & Snipping tool shield
        function showShield(customMessage) {
            if (customMessage) {
                const textEl = shieldOverlay.querySelector('p');
                if (textEl) textEl.textContent = customMessage;
            }
            shieldOverlay.classList.add('active');
        }

        function hideShield() {
            shieldOverlay.classList.remove('active');
        }

        // When window loses focus (e.g. Snipping tool opened)
        window.addEventListener('blur', function () {
            showShield('Document view shielded while window is inactive or screen capture tool is active.');
        });

        // When visibility changes (tab switch)
        document.addEventListener('visibilitychange', function () {
            if (document.hidden) {
                showShield('Document view shielded while switching tabs.');
            }
        });

        resumeViewBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            hideShield();
        });

        // Initialize viewer
        loadDocument();

    })();
    </script>

</body>
</html>
