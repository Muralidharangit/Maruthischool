<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Maruthi Senior Secondary School" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mandatory Public Disclosure (CBSE SARAS format) - Maruthi Senior Secondary School Puducherry. Complete official information, certificates, staff details, academic results and infrastructure.">
    <meta name="keywords" content="Mandatory Disclosure, CBSE SARAS, Maruthi School, affiliation certificate, fee structure, academic calendar, SMC, school infrastructure">

    <!-- SITE TITLE -->
    <title>Mandatory Public Disclosure | Maruthi Senior Secondary School Puducherry</title>
    @include('user.layouts.links')

    <style>
        /* ══════════════════════════════════════════════════════
           MARUTHI MANDATORY DISCLOSURE (CBSE SARAS APPENDIX IX)
           ══════════════════════════════════════════════════════ */
        
        .md-page-wrapper {
            background-color: #f8fafc;
            min-height: 100vh;
        }

        /* ── Breadcrumb Hero Banner (Maruthi Emerald Theme) ── */
        .breadcrumb-section-md {
            background: linear-gradient(135deg, #064e3b 0%, #047857 60%, #059669 100%),
                        url("{{ asset('user/assets/images/thumbs/school-students-group.png') }}") center/cover no-repeat;
            background-blend-mode: overlay;
            padding: 70px 0;
            position: relative;
            color: #ffffff;
        }
        .breadcrumb-section-md::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 20% 50%, rgba(6, 78, 59, 0.85) 0%, rgba(4, 120, 87, 0.92) 100%);
            z-index: 1;
        }

        .md-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #ffffff;
            color: #047857;
            font-size: 0.8rem;
            font-weight: 800;
            padding: 6px 18px;
            border-radius: 100px;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }
        .md-hero-title {
            font-size: 2.75rem;
            font-weight: 900;
            color: #ffffff !important;
            letter-spacing: -0.02em;
            margin-top: 10px;
            margin-bottom: 8px;
            font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }
        @media (max-width: 768px) {
            .breadcrumb-section-md {
                padding: 45px 0;
            }
            .md-hero-title {
                font-size: 2rem;
            }
        }
        .md-breadcrumb-list {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.92rem;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.85);
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .md-breadcrumb-list a {
            color: #6ee7b7;
            text-decoration: none;
            transition: color 0.2s;
        }
        .md-breadcrumb-list a:hover {
            color: #ffffff;
            text-decoration: underline;
        }
        .md-breadcrumb-list .bc-sep {
            opacity: 0.6;
        }

        /* ── Main Section Title ── */
        .md-welcome-title-wrapper {
            margin-bottom: 28px;
            padding-bottom: 12px;
            border-bottom: 3px solid #e2e8f0;
            position: relative;
        }
        .md-welcome-title-wrapper::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 160px;
            height: 3px;
            background: linear-gradient(90deg, #047857, #10b981);
            border-radius: 2px;
        }
        .md-welcome-heading {
            font-size: 1.55rem;
            font-weight: 900;
            color: #1e293b;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            margin: 0;
            font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif;
        }
        .md-welcome-heading span {
            color: #047857;
        }

        /* ── Quick Action Bar ── */
        .md-quick-bar {
            background: #ffffff;
            border: 1px solid rgba(4, 120, 87, 0.15);
            border-left: 4px solid #047857;
            border-radius: 10px;
            padding: 14px 20px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
            box-shadow: 0 4px 16px rgba(4, 120, 87, 0.04);
        }
        .md-quick-info {
            font-size: 0.88rem;
            color: #334155;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .md-print-btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #047857;
            color: #ffffff !important;
            padding: 8px 18px;
            border-radius: 100px;
            font-size: 0.85rem;
            font-weight: 700;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: all 0.25s ease;
            box-shadow: 0 4px 12px rgba(4, 120, 87, 0.25);
        }
        .md-print-btn:hover {
            background: #065f46;
            transform: translateY(-1px);
            box-shadow: 0 6px 18px rgba(4, 120, 87, 0.35);
        }

        /* ── Card & Table Styling ── */
        .md-section-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            margin-bottom: 28px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
            overflow: hidden;
            transition: all 0.25s ease;
        }
        .md-section-card:hover {
            box-shadow: 0 8px 28px rgba(4, 120, 87, 0.08);
            border-color: #cbd5e1;
        }
        .md-section-header {
            padding: 14px 20px;
            background: linear-gradient(90deg, #ecfdf5 0%, #ffffff 100%);
            border-bottom: 2px solid #047857;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .md-section-title {
            font-size: 1.15rem;
            font-weight: 800;
            color: #064e3b;
            margin: 0;
            letter-spacing: 0.01em;
            font-family: 'Outfit', 'Plus Jakarta Sans', sans-serif;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* ── CBSE SARAS Table ── */
        .md-table {
            width: 100%;
            margin-bottom: 0;
            border-collapse: collapse;
            font-size: 0.88rem;
        }
        .md-table th {
            background-color: #f8fafc;
            color: #0f172a;
            font-weight: 800;
            font-size: 0.8rem;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            padding: 12px 16px;
            border: 1px solid #e2e8f0;
            vertical-align: middle;
        }
        .md-table td {
            padding: 12px 16px;
            border: 1px solid #e2e8f0;
            vertical-align: middle;
            color: #334155;
            line-height: 1.55;
            background: #ffffff;
        }
        .md-table tbody tr:hover td {
            background-color: #f0fdf9;
        }
        .md-col-sno {
            width: 55px;
            text-align: center;
            font-weight: 700;
            color: #64748b;
        }
        .md-col-info {
            font-weight: 700;
            color: #1e293b;
            font-size: 0.84rem;
            text-transform: uppercase;
            letter-spacing: 0.01em;
        }
        .md-col-details {
            color: #334155;
            font-weight: 500;
        }

        /* ── PDF Link Badge ── */
        .md-pdf-badge {
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            padding: 6px 12px;
            background: #ffffff;
            border: 1.5px solid #fee2e2;
            border-radius: 8px;
            transition: all 0.22s cubic-bezier(0.16,1,0.3,1);
            cursor: pointer;
            min-width: 115px;
            box-shadow: 0 2px 6px rgba(220, 38, 38, 0.06);
        }
        .md-pdf-badge:hover {
            background: #fef2f2;
            border-color: #f87171;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(220, 38, 38, 0.18);
        }
        .md-pdf-label {
            font-size: 0.72rem;
            font-weight: 800;
            color: #991b1b;
            text-transform: uppercase;
            text-align: center;
            line-height: 1.2;
            letter-spacing: 0.03em;
            margin-bottom: 4px;
        }
        .md-pdf-icon {
            font-size: 1.6rem;
            color: #dc2626;
            line-height: 1;
            transition: transform 0.2s ease;
        }
        .md-pdf-badge:hover .md-pdf-icon {
            transform: scale(1.12);
        }

        /* ── Bullet Sub-items in Teaching Staff Table ── */
        .md-sub-item {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 3px 0;
            font-weight: 600;
            color: #064e3b;
        }
        .md-sub-icon {
            color: #047857;
            font-size: 0.75rem;
        }

        /* ── Interactive PDF Modal ── */
        .md-modal-header {
            background: linear-gradient(135deg, #064e3b 0%, #047857 100%);
            color: #ffffff;
            padding: 16px 24px;
        }
        .md-modal-header .btn-close {
            filter: brightness(0) invert(1);
            opacity: 0.85;
        }
        .md-modal-header .btn-close:hover {
            opacity: 1;
        }
        .md-pdf-frame-container {
            width: 100%;
            height: 75vh;
            background: #f1f5f9;
            border: none;
            position: relative;
        }
        .md-pdf-iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        @media (max-width: 991px) {
            .md-table {
                font-size: 0.84rem;
            }
            .md-pdf-badge {
                min-width: 95px;
                padding: 5px 8px;
            }
        }
    </style>
</head>

<body>
    {{-- Loader --}}
    @include('user.layouts.loader')

    {{-- Header --}}
    @include('user.layouts.header')

    <div class="md-page-wrapper">
        
        <!-- ══════════════════════════════════════════════════════
             HERO BANNER (MARUTHI THEME)
             ══════════════════════════════════════════════════════ -->
        <section class="breadcrumb-section-md">
            <div class="container position-relative" style="z-index: 2;">
                <div class="text-center text-md-start">
                    <span class="md-hero-badge" data-aos="fade-down">
                        <i class="ph-fill ph-shield-check text-main-600"></i> CBSE Appendix IX Mandatory Disclosure
                    </span>
                    <h1 class="md-hero-title" data-aos="fade-up">Mandatory Disclosure</h1>
                    <ul class="md-breadcrumb-list" data-aos="fade-up" data-aos-delay="100">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="bc-sep">/</li>
                        <li class="text-white opacity-90">Mandatory Disclosure</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ══════════════════════════════════════════════════════
             MAIN DISCLOSURE CONTENT
             ══════════════════════════════════════════════════════ -->
        <section class="py-4 py-md-5">
            <div class="container max-w-1360-px">

                <!-- Title Underline Bar -->
                <div class="md-welcome-title-wrapper" data-aos="fade-up">
                    <h2 class="md-welcome-heading">
                        WELCOME TO <span>MANDATORY DISCLOSURE</span>
                    </h2>
                </div>

                <!-- Quick Action Bar -->
                <div class="md-quick-bar" data-aos="fade-up">
                    <div class="md-quick-info">
                        <i class="ph-fill ph-seal-check text-main-600 fs-4 flex-shrink-0"></i>
                        <span>Official Public Disclosure of <strong>Maruthi Senior Secondary School</strong> in accordance with <strong>CBSE SARAS Bye-Laws (Appendix IX)</strong>. Click any document button to view or download the certificate.</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <button type="button" class="md-print-btn" onclick="window.print()">
                            <i class="ph-fill ph-printer"></i> Print Disclosure
                        </button>
                    </div>
                </div>

                <!-- 2-COLUMN LAYOUT -->
                <div class="row gy-4">

                    <!-- ══════════════════════════════════════════════════
                         LEFT COLUMN
                         ══════════════════════════════════════════════════ -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        <!-- 1. GENERAL INFORMATION -->
                        <div class="md-section-card">
                            <div class="md-section-header">
                                <h3 class="md-section-title">
                                    <i class="ph-fill ph-buildings text-main-600"></i> General Information
                                </h3>
                            </div>
                            <div class="table-responsive">
                                <table class="md-table">
                                    <thead>
                                        <tr>
                                            <th class="md-col-sno">S.No</th>
                                            <th style="width: 44%;">INFORMATION</th>
                                            <th>DETAILS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="md-col-sno">1</td>
                                            <td class="md-col-info">NAME OF THE SCHOOL</td>
                                            <td class="md-col-details fw-bold text-main-800">MARUTHI SENIOR SECONDARY SCHOOL</td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">2</td>
                                            <td class="md-col-info">AFFILIATION NO</td>
                                            <td class="md-col-details font-monospace fw-bold text-dark">2930027</td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">3</td>
                                            <td class="md-col-info">SCHOOL CODE</td>
                                            <td class="md-col-details font-monospace fw-bold text-dark">56027</td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">4</td>
                                            <td class="md-col-info">COMPLETE ADDRESS WITH PIN CODE</td>
                                            <td class="md-col-details">Maruthi Nagar, Lawspet, Puducherry – 605008</td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">5</td>
                                            <td class="md-col-info">PRINCIPAL NAME &amp; QUALIFICATION</td>
                                            <td class="md-col-details fw-semibold">
                                                <strong>Mrs. Mahalakshmi K.</strong><br>
                                                <span class="text-muted small">M.Sc., M.Phil., B.Ed., DFL., PGDMLT</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">6</td>
                                            <td class="md-col-info">SCHOOL EMAIL ID</td>
                                            <td class="md-col-details">
                                                <a href="mailto:info@maruthischool.edu.in" class="text-main-600 text-decoration-none fw-semibold">
                                                    info@maruthischool.edu.in
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">7</td>
                                            <td class="md-col-info">CONTACT DETAILS</td>
                                            <td class="md-col-details font-monospace">0413-2251177 / +91 94423 99777</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- 2. RESULT AND ACADEMICS -->
                        <div class="md-section-card">
                            <div class="md-section-header">
                                <h3 class="md-section-title">
                                    <i class="ph-fill ph-chart-line-up text-main-600"></i> Result And Academics
                                </h3>
                            </div>
                            <div class="table-responsive">
                                <table class="md-table">
                                    <thead>
                                        <tr>
                                            <th class="md-col-sno">S.No</th>
                                            <th style="width: 58%;">DOCUMENTS/INFORMATION</th>
                                            <th class="text-center" style="width: 32%;">DETAILS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="md-col-sno">1</td>
                                            <td class="md-col-info">FEE STRUCTURE OF THE SCHOOL</td>
                                            <td class="text-center">
                                                <a href="{{ asset('user/assets/PDF-Documents And Information/1. Fee Structure.pdf') }}" target="_blank" rel="noopener noreferrer" class="md-pdf-badge" title="View Fee Structure PDF">
                                                    <span class="md-pdf-label">FEE STRUCTURE</span>
                                                    <i class="fa-solid fa-file-pdf md-pdf-icon"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">2</td>
                                            <td class="md-col-info">ANNUAL ACADEMIC CALENDAR</td>
                                            <td class="text-center">
                                                <a href="{{ asset('user/assets/PDF-Documents And Information/academic calendar 2026-27.pdf') }}" target="_blank" rel="noopener noreferrer" class="md-pdf-badge" title="View Academic Calendar PDF">
                                                    <span class="md-pdf-label">ANNUAL ACADEMIC CALENDAR</span>
                                                    <i class="fa-solid fa-file-pdf md-pdf-icon"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">3</td>
                                            <td class="md-col-info">LIST OF SCHOOL MANAGEMENT COMMITTEE (SMC)</td>
                                            <td class="text-center">
                                                <a href="{{ asset('user/assets/PDF-Documents And Information/SMC Members.pdf') }}" target="_blank" rel="noopener noreferrer" class="md-pdf-badge" title="View SMC Members List PDF">
                                                    <span class="md-pdf-label">SMC MEMBERS</span>
                                                    <i class="fa-solid fa-file-pdf md-pdf-icon"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">4</td>
                                            <td class="md-col-info">LIST OF PARENTS-TEACHERS-ASSOCIATION (PTA) MEMBERS</td>
                                            <td class="text-center">
                                                <a href="{{ asset('user/assets/PDF-Documents And Information/PTA Members.pdf') }}" target="_blank" rel="noopener noreferrer" class="md-pdf-badge" title="View PTA Members List PDF">
                                                    <span class="md-pdf-label">PTA MEMBERS</span>
                                                    <i class="fa-solid fa-file-pdf md-pdf-icon"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">5</td>
                                            <td class="md-col-info">LAST THREE YEAR RESULT OF THE BOARD EXAMINATION AS PER APPLICABILITY</td>
                                            <td class="text-center">
                                                <a href="{{ asset('user/assets/PDF-Documents And Information/Last Three Year Result.pdf') }}" target="_blank" rel="noopener noreferrer" class="md-pdf-badge" title="View Last Three Year Result PDF">
                                                    <span class="md-pdf-label">LAST THREE YEAR RESULT</span>
                                                    <i class="fa-solid fa-file-pdf md-pdf-icon"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">6</td>
                                            <td class="md-col-info">RESULT CLASS: X</td>
                                            <td class="text-center">
                                                <a href="{{ asset('user/assets/PDF-Documents And Information/Result Class X.pdf') }}" target="_blank" rel="noopener noreferrer" class="md-pdf-badge" title="View Class X Result PDF">
                                                    <span class="md-pdf-label">CLASS - X</span>
                                                    <i class="fa-solid fa-file-pdf md-pdf-icon"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">7</td>
                                            <td class="md-col-info">RESULT CLASS: XII</td>
                                            <td class="text-center">
                                                <a href="{{ asset('user/assets/PDF-Documents And Information/Result Class XII.pdf') }}" target="_blank" rel="noopener noreferrer" class="md-pdf-badge" title="View Class XII Result PDF">
                                                    <span class="md-pdf-label">CLASS - XII</span>
                                                    <i class="fa-solid fa-file-pdf md-pdf-icon"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- 3. STAFF (TEACHING) -->
                        <div class="md-section-card">
                            <div class="md-section-header">
                                <h3 class="md-section-title">
                                    <i class="ph-fill ph-chalkboard-teacher text-main-600"></i> Staff (Teaching)
                                </h3>
                            </div>
                            <div class="table-responsive">
                                <table class="md-table">
                                    <thead>
                                        <tr>
                                            <th class="md-col-sno">S.No</th>
                                            <th style="width: 44%;">INFORMATION</th>
                                            <th>DETAILS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="md-col-sno">1</td>
                                            <td class="md-col-info">PRINCIPAL</td>
                                            <td class="md-col-details fw-bold text-main-800">
                                                Mrs. Mahalakshmi K., <span class="fw-normal text-muted small">M.Sc., M.Phil., B.Ed.</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno"></td>
                                            <td class="md-col-info">VICE PRINCIPAL</td>
                                            <td class="md-col-details fw-bold text-main-800">
                                                Mr. Thangaraj <span class="fw-normal text-muted small"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno" rowspan="4">2</td>
                                            <td class="md-col-info">TOTAL NO. OF TEACHERS</td>
                                            <td class="md-col-details font-monospace fw-bold">42</td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-info ps-4">
                                                <span class="md-sub-item">
                                                    <i class="fa-solid fa-play md-sub-icon"></i> PGT
                                                </span>
                                            </td>
                                            <td class="md-col-details font-monospace">26</td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-info ps-4">
                                                <span class="md-sub-item">
                                                    <i class="fa-solid fa-play md-sub-icon"></i> TGT
                                                </span>
                                            </td>
                                            <td class="md-col-details font-monospace">10</td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-info ps-4">
                                                <span class="md-sub-item">
                                                    <i class="fa-solid fa-play md-sub-icon"></i> PRT
                                                </span>
                                            </td>
                                            <td class="md-col-details font-monospace">6</td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">3</td>
                                            <td class="md-col-info">TEACHERS SECTION RATIO</td>
                                            <td class="md-col-details font-monospace fw-bold">1.5:1</td>
                                        </tr>
                                        <!-- <tr>
                                            <td class="md-col-sno">4</td>
                                            <td class="md-col-info">DETAILS OF SPECIAL EDUCATOR</td>
                                            <td class="md-col-details">Mrs. A. Eliswa, B.B.A, B.Ed (Special Education)</td>
                                        </tr> -->
                                        <!-- <tr>
                                            <td class="md-col-sno">5</td>
                                            <td class="md-col-info">DETAILS OF COUNSELLOR AND WELLNESS TEACHER</td>
                                            <td class="md-col-details">
                                                <div class="lh-base">
                                                    <div>• Mrs. Sasirekha K. (Wellness Teacher)</div>
                                                    <div>• Mrs. Renuka Devi N. (Career Counselor)</div>
                                                    <div>• Mr. Sivabalan M. (PET)</div>
                                                    <div>• Mr. Rajesh S. (PET)</div>
                                                    <div>• Mrs. Jayashree R. (PET)</div>
                                                    <div>• Mr. Vimal Raj S. (PET)</div>
                                                </div>
                                            </td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                    <!-- ══════════════════════════════════════════════════
                         RIGHT COLUMN
                         ══════════════════════════════════════════════════ -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

                        <!-- 1. DOCUMENTS AND INFORMATION -->
                        <div class="md-section-card">
                            <div class="md-section-header">
                                <h3 class="md-section-title">
                                    <i class="ph-fill ph-files text-main-600"></i> Documents And Information
                                </h3>
                            </div>
                            <div class="table-responsive">
                                <table class="md-table">
                                    <thead>
                                        <tr>
                                            <th class="md-col-sno">S.No</th>
                                            <th style="width: 58%;">DOCUMENTS/INFORMATION</th>
                                            <th class="text-center" style="width: 32%;">DETAILS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="md-col-sno">1</td>
                                            <td class="md-col-info">COPIES OF AFFILIATION/UPGRADATION LETTER AND RECENT EXTENSION OF AFFILIATION, IF ANY</td>
                                            <td class="text-center">
                                                <a href="{{ asset('user/assets/PDF-Documents And Information/7. Affiliation Grant Letter.pdf') }}" target="_blank" rel="noopener noreferrer" class="md-pdf-badge" title="View Affiliation Letter PDF">
                                                    <span class="md-pdf-label">AFFILIATION COPY</span>
                                                    <i class="fa-solid fa-file-pdf md-pdf-icon"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">2</td>
                                            <td class="md-col-info">COPIES OF SOCIETIES/TRUST/COMPANY REGISTRATION/RENEWAL CERTIFICATE, AS APPLICABLE</td>
                                            <td class="text-center">
                                                <a href="{{ asset('user/assets/PDF-Documents And Information/11. LEASE DEED.pdf') }}" target="_blank" rel="noopener noreferrer" class="md-pdf-badge" title="View Lease / Trust Deed PDF">
                                                    <span class="md-pdf-label">TRUST / LEASE DEED</span>
                                                    <i class="fa-solid fa-file-pdf md-pdf-icon"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">3</td>
                                            <td class="md-col-info">COPY OF NO OBJECTION CERTIFICATE (NOC) ISSUED, IF APPLICABLE, BY THE STATE GOVT./UT</td>
                                            <td class="text-center">
                                                <a href="{{ asset('user/assets/PDF-Documents And Information/Recognition Grant letter.pdf') }}" target="_blank" rel="noopener noreferrer" class="md-pdf-badge" title="View Grant Letter PDF">
                                                    <span class="md-pdf-label">GRANT LETTER</span>
                                                    <i class="fa-solid fa-file-pdf md-pdf-icon"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">4</td>
                                            <td class="md-col-info">COPIES OF RECOGNITION CERTIFICATE UNDER RTE ACT, 2009, AND IT'S RENEWAL IF APPLICABLE</td>
                                            <td class="text-center">
                                                <a href="{{ asset('user/assets/PDF-Documents And Information/2. Recognition Certificate ( STATE GOVT).pdf') }}" target="_blank" rel="noopener noreferrer" class="md-pdf-badge" title="View Recognition Certificate PDF">
                                                    <span class="md-pdf-label">RECOGNITION CERTIFICATE</span>
                                                    <i class="fa-solid fa-file-pdf md-pdf-icon"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">5</td>
                                            <td class="md-col-info">COPY OF VALID BUILDING SAFETY CERTIFICATE AS PER THE NATIONAL BUILDING CODE</td>
                                            <td class="text-center">
                                                <a href="{{ asset('user/assets/PDF-Documents And Information/4. Building Safety Certificate.pdf') }}" target="_blank" rel="noopener noreferrer" class="md-pdf-badge" title="View Building Safety Certificate PDF">
                                                    <span class="md-pdf-label">BUILDING SAFETY CERTIFICATE</span>
                                                    <i class="fa-solid fa-file-pdf md-pdf-icon"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">6</td>
                                            <td class="md-col-info">COPY OF VALID FIRE SAFETY CERTIFICATE ISSUED BY THE COMPETENT AUTHORITY</td>
                                            <td class="text-center">
                                                <a href="{{ asset('user/assets/PDF-Documents And Information/5. Fire Safety Certificate.pdf') }}" target="_blank" rel="noopener noreferrer" class="md-pdf-badge" title="View Fire Safety Certificate PDF">
                                                    <span class="md-pdf-label">FIRE SAFETY CERTIFICATE</span>
                                                    <i class="fa-solid fa-file-pdf md-pdf-icon"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">7</td>
                                            <td class="md-col-info">COPY OF THE DEO CERTIFICATE SUBMITTED BY THE SCHOOL FOR AFFILIATION/UPGRADATION/EXTENSION OF AFFILIATION OR SELF CERTIFICATION BY SCHOOL</td>
                                            <td class="text-center">
                                                <a href="{{ asset('user/assets/PDF-Documents And Information/Self Certification .pdf') }}" target="_blank" rel="noopener noreferrer" class="md-pdf-badge" title="View Self Certification PDF">
                                                    <span class="md-pdf-label">SELF CERTIFICATION</span>
                                                    <i class="fa-solid fa-file-pdf md-pdf-icon"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">8</td>
                                            <td class="md-col-info">COPIES OF VALID WATER</td>
                                            <td class="text-center">
                                                <a href="{{ asset('user/assets/PDF-Documents And Information/8. Water Sample test report (PHED).pdf') }}" target="_blank" rel="noopener noreferrer" class="md-pdf-badge" title="View Water Test Report PDF">
                                                    <span class="md-pdf-label">WATER TEST REPORT</span>
                                                    <i class="fa-solid fa-file-pdf md-pdf-icon"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">9</td>
                                            <td class="md-col-info">HEALTH AND SANITATION CERTIFICATES</td>
                                            <td class="text-center">
                                                <a href="{{ asset('user/assets/PDF-Documents And Information/8. Water Sample test report (PHED).pdf') }}" target="_blank" rel="noopener noreferrer" class="md-pdf-badge" title="View Health & Sanitation Report PDF">
                                                    <span class="md-pdf-label">HEALTH &amp; SANITATION</span>
                                                    <i class="fa-solid fa-file-pdf md-pdf-icon"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- 2. SCHOOL INFRASTRUCTURE -->
                        <div class="md-section-card">
                            <div class="md-section-header">
                                <h3 class="md-section-title">
                                    <i class="ph-fill ph-desktop text-main-600"></i> School Infrastructure
                                </h3>
                            </div>
                            <div class="table-responsive">
                                <table class="md-table">
                                    <thead>
                                        <tr>
                                            <th class="md-col-sno">S.No</th>
                                            <th style="width: 50%;">INFORMATION</th>
                                            <th>DETAILS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="md-col-sno">1</td>
                                            <td class="md-col-info">TOTAL CAMPUS AREA OF THE SCHOOL (IN SQR MTR)</td>
                                            <td class="md-col-details font-monospace fw-bold text-main-800">4397.00 sq.m</td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">2</td>
                                            <td class="md-col-info">NO. AND SIZE OF THE CLASSROOM (IN SQR MTR)</td>
                                            <td class="md-col-details font-monospace fw-bold">20 (46.5 Sq.m)</td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">3</td>
                                            <td class="md-col-info">NO. AND SIZE OF LABORATORIES INCLUDING COMPUTER LABS (IN SQR MTR)</td>
                                            <td class="md-col-details">
                                                <div class="fw-bold text-dark mb-1 font-monospace">5 Laboratories:</div>
                                                <div class="lh-base font-monospace small">
                                                    <div>• Comp. Lab - (1100) - 102.19 Sq.m</div>
                                                    <div>• Bio Lab - (800) - 74.32 Sq.m</div>
                                                    <div>• Phy Lab - (1859) - 172.71 Sq.m</div>
                                                    <div>• Chem Lab - (1102) - 102.38 Sq.m</div>
                                                    <div>• Math Lab - (800) - 74.32 Sq.m</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">4</td>
                                            <td class="md-col-info">NO. AND SIZE OF LIBRARY (IN SQR MTR)</td>
                                            <td class="md-col-details font-monospace fw-bold">1 (127.74 Sq.m)</td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">5</td>
                                            <td class="md-col-info">INTERNET FACILITY (YES/NO)</td>
                                            <td class="md-col-details">
                                                <span class="badge bg-success-subtle text-success border border-success-subtle px-2.5 py-1 fw-bold">
                                                    <i class="ph-fill ph-wifi-high me-1"></i> Yes
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">6</td>
                                            <td class="md-col-info">NO. OF GIRLS TOILETS</td>
                                            <td class="md-col-details font-monospace fw-bold">50</td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">7</td>
                                            <td class="md-col-info">NO. OF BOYS TOILETS</td>
                                            <td class="md-col-details font-monospace fw-bold">50</td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">8</td>
                                            <td class="md-col-info">NO. OF CWSN TOILETS</td>
                                            <td class="md-col-details font-monospace fw-bold">2</td>
                                        </tr>
                                        <tr>
                                            <td class="md-col-sno">9</td>
                                            <td class="md-col-info">LINK OF YOUTUBE VIDEO OF THE INSPECTION OF SCHOOL COVERING THE INFRASTRUCTURE OF THE SCHOOL</td>
                                            <td class="md-col-details">
                                                <a href="https://www.youtube.com/watch?v=g6B91ffunTc0" target="_blank" rel="noopener noreferrer" class="text-main-600 text-decoration-underline font-monospace small fw-bold" style="word-break: break-all;">
                                                    <!-- https://www.youtube.com/watch?v=g6B91ffunTc0 -->
                                                     <!-- <i class="ph-bold ph-arrow-square-out ms-1"></i> -->
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>

    </div>

    <!-- ══════════════════════════════════════════════════════
         PDF VIEWER MODAL (INTERACTIVE EMBEDDED POPUP)
         ══════════════════════════════════════════════════════ -->
    <div class="modal fade" id="pdfViewerModal" tabindex="-1" aria-labelledby="pdfModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
                <div class="modal-header md-modal-header d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-2">
                        <i class="fa-solid fa-file-pdf fs-4 text-warning"></i>
                        <div>
                            <h5 class="modal-title text-white fw-bold mb-0 fs-6" id="pdfModalTitle">Official Document</h5>
                            <span class="text-white opacity-75 small">Maruthi Senior Secondary School Puducherry</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <a href="#" id="pdfDirectDownloadBtn" target="_blank" class="btn btn-sm btn-light fw-bold px-3 py-1.5 rounded-pill text-dark d-flex align-items-center gap-1">
                            <i class="ph-bold ph-arrow-square-out"></i> Open in New Tab
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <div class="modal-body p-0">
                    <div class="md-pdf-frame-container">
                        <iframe id="pdfModalFrame" src="" class="md-pdf-iframe" title="PDF Document Viewer"></iframe>
                    </div>
                </div>
                <div class="modal-footer bg-light py-2 px-3 d-flex justify-content-between align-items-center">
                    <span class="small text-muted">
                        <i class="ph-fill ph-seal-check text-success me-1"></i> Official Document Verified by Management
                    </span>
                    <button type="button" class="btn btn-secondary btn-sm px-4 rounded-pill" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('user.layouts.footer')

    {{-- Script --}}
    @include('user.layouts.script')

    <script>
        function openPdfModal(title, pdfUrl) {
            document.getElementById('pdfModalTitle').innerText = title;
            document.getElementById('pdfDirectDownloadBtn').setAttribute('href', pdfUrl);
            
            // Set PDF frame source
            const frame = document.getElementById('pdfModalFrame');
            frame.src = pdfUrl + '#toolbar=1&navpanes=0&scrollbar=1';
            
            // Trigger Bootstrap Modal
            const pdfModal = new bootstrap.Modal(document.getElementById('pdfViewerModal'));
            pdfModal.show();
        }

        // Clean up frame when modal is closed
        document.getElementById('pdfViewerModal').addEventListener('hidden.bs.modal', function () {
            document.getElementById('pdfModalFrame').src = '';
        });
    </script>
</body>

</html>
