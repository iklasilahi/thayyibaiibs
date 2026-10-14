<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Pesantren Thayyiba - Lembaga Pendidikan Islam Modern Terpadu dengan Nilai Luhur dan Fasilitas Berstandar Unggul.')">
    <title>@yield('title', 'Beranda') | Pesantren Modern Thayyiba</title>

    <!-- Google Fonts: Plus Jakarta Sans & Playfair Display -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600&family=Amiri:wght@400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Swiper & AOS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    <style>
        :root {
            /* Palette Luxury Merah-Putih & Emas */
            --primary: #991b1b;
            --primary-dark: #7f1d1d;
            --primary-light: #dc2626;
            --primary-glow: rgba(220, 38, 38, 0.25);
            --gold: #d97706;
            --gold-light: #fbbf24;
            --dark: #0f172a;
            --dark-card: #1e293b;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --bg-body: #f8fafc;
            --white: #ffffff;
            --border-light: rgba(226, 232, 240, 0.8);
            --radius-sm: 8px;
            --radius-md: 14px;
            --radius-lg: 24px;
            --radius-full: 9999px;
            --shadow-subtle: 0 4px 20px -2px rgba(15, 23, 42, 0.05);
            --shadow-card: 0 10px 30px -5px rgba(15, 23, 42, 0.08), 0 4px 10px -2px rgba(15, 23, 42, 0.03);
            --shadow-luxury: 0 20px 45px -10px rgba(153, 27, 27, 0.2);
            --transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }

        /* RESET & VIEWPORT ANTI OVERFLOW */
        *, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
        }

        html {
            scroll-behavior: smooth;
            font-size: 16px;
            width: 100%;
            overflow-x: hidden;
        }

        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            color: var(--text-main);
            background-color: var(--bg-body);
            line-height: 1.6;
            width: 100%;
            overflow-x: hidden;
            position: relative;
        }

        /* ===== CONTAINER GLOBAL ===== */
        .container {
            width: 100%;
            max-width: 1240px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 20px;
            padding-right: 20px;
        }

        @media (max-width: 768px) {
            .container {
                padding-left: 16px;
                padding-right: 16px;
            }
        }

        /* ===== TOP BAR (DESKTOP ONLY) ===== */
        .top-bar {
            background: linear-gradient(90deg, #7f1d1d 0%, #991b1b 100%);
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.8rem;
            padding: 8px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .top-bar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .top-bar-left, .top-bar-right {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .top-bar a {
            color: rgba(255, 255, 255, 0.85);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .top-bar .badge-gold {
            background: rgba(251, 191, 36, 0.2);
            color: #fef08a;
            border: 1px solid rgba(251, 191, 36, 0.35);
            padding: 2px 10px;
            border-radius: var(--radius-full);
            font-size: 0.72rem;
            font-weight: 600;
        }

        @media (max-width: 991px) {
            .top-bar { display: none; }
        }

        /* ===== SITE HEADER ===== */
        .site-header {
            position: sticky;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: #ffffff;
            border-bottom: 1px solid var(--border-light);
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
        }

        .site-header.is-scrolled {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border-bottom-color: rgba(153, 27, 27, 0.15);
        }

        .nav-wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 76px;
            width: 100%;
        }

        @media (max-width: 991px) {
            .nav-wrapper {
                height: 66px;
            }
        }

        /* Brand / Logo */
        .brand {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            max-width: 80%;
        }

        .brand-emblem {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-family: 'Amiri', serif;
            font-size: 1.6rem;
            font-weight: 700;
            flex-shrink: 0;
            box-shadow: 0 4px 14px var(--primary-glow);
        }

        .brand-logo-img {
            height: 48px;
            width: auto;
            max-width: 140px;
            object-fit: contain;
            border-radius: 8px;
            flex-shrink: 0;
            display: block;
        }

        .mobile-drawer-logo-img {
            height: 40px;
            width: auto;
            max-width: 120px;
            object-fit: contain;
            border-radius: 8px;
            flex-shrink: 0;
            display: block;
        }

        .footer-logo-img {
            height: 46px;
            width: auto;
            max-width: 140px;
            object-fit: contain;
            border-radius: 8px;
            flex-shrink: 0;
            background: #ffffff;
            padding: 2px 4px;
            display: block;
        }

        .brand-meta {
            display: flex;
            flex-direction: column;
            overflow: hidden;
            justify-content: center;
        }

        .brand-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--dark);
            line-height: 1.25;
            white-space: nowrap;
        }

        .brand-name span { color: var(--primary); }

        .brand-tagline {
            font-size: 0.68rem;
            text-transform: uppercase;
            letter-spacing: 0.7px;
            color: var(--text-muted);
            font-weight: 600;
            white-space: nowrap;
        }

        @media (max-width: 576px) {
            .brand-logo-img {
                height: 38px;
            }
            .brand-emblem {
                width: 36px;
                height: 36px;
                font-size: 1.35rem;
                border-radius: 9px;
            }
            .brand-name {
                font-size: 0.98rem;
            }
            .brand-tagline {
                font-size: 0.58rem;
                letter-spacing: 0.4px;
            }
        }

        /* Desktop Nav Menu */
        .nav-menu {
            display: flex;
            align-items: center;
            list-style: none;
            gap: 4px;
        }

        .nav-item {
            position: relative;
        }

        .nav-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 10px 16px;
            font-size: 0.92rem;
            font-weight: 600;
            color: #334155;
            text-decoration: none;
            border-radius: var(--radius-sm);
            transition: var(--transition);
        }

        .nav-link:hover, .nav-link.active {
            color: var(--primary);
            background: rgba(153, 27, 27, 0.05);
        }

        /* Dropdown Desktop */
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 230px;
            background: #ffffff;
            border-radius: var(--radius-md);
            padding: 8px;
            box-shadow: 0 16px 36px rgba(15, 23, 42, 0.12);
            border: 1px solid var(--border-light);
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: var(--transition);
            z-index: 1050;
        }

        @media (min-width: 992px) {
            .nav-item:hover .dropdown-menu {
                opacity: 1;
                visibility: visible;
                transform: translateY(4px);
            }
        }

        .dropdown-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 14px;
            font-size: 0.88rem;
            font-weight: 500;
            color: #334155;
            text-decoration: none;
            border-radius: var(--radius-sm);
            transition: var(--transition);
        }

        .dropdown-item i {
            width: 24px;
            color: var(--primary);
        }

        .dropdown-item:hover {
            background: rgba(153, 27, 27, 0.05);
            color: var(--primary);
            padding-left: 18px;
        }

        /* Desktop CTA Button */
        .nav-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .btn-luxury-psb {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: #ffffff !important;
            padding: 10px 22px;
            border-radius: var(--radius-full);
            font-size: 0.88rem;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 15px var(--primary-glow);
            transition: var(--transition);
            border: none;
        }

        .btn-luxury-psb:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 22px rgba(153, 27, 27, 0.35);
        }

        /* Hamburger Toggle Button */
        .hamburger-btn {
            display: none;
            background: #f8fafc;
            border: 1px solid var(--border-light);
            width: 42px;
            height: 42px;
            border-radius: 10px;
            cursor: pointer;
            padding: 9px;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            z-index: 1100;
            flex-shrink: 0;
            transition: var(--transition);
        }

        .hamburger-btn span {
            display: block;
            width: 22px;
            height: 2px;
            background: var(--dark);
            border-radius: 2px;
            transition: var(--transition);
        }

        .hamburger-btn.is-active {
            background: #fef2f2;
            border-color: #fca5a5;
        }

        .hamburger-btn.is-active span {
            background: var(--primary);
        }

        .hamburger-btn.is-active span:nth-child(1) {
            transform: translateY(6px) rotate(45deg);
        }
        .hamburger-btn.is-active span:nth-child(2) {
            opacity: 0;
        }
        .hamburger-btn.is-active span:nth-child(3) {
            transform: translateY(-6px) rotate(-45deg);
        }

        /* Drawer header for mobile */
        .mobile-drawer-header {
            display: none;
        }

        /* Backdrop (Must have z-index LOWER than site-header 1000 so it doesn't cover the nav drawer) */
        .mobile-backdrop {
            position: fixed;
            inset: 0;
            background: rgba(15, 23, 42, 0.5);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            z-index: 998;
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .mobile-backdrop.is-visible {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        /* Mobile View Rules (<= 991px) */
        @media (max-width: 991px) {
            .hamburger-btn { display: flex; }
            .nav-actions { display: none; }

            .mobile-drawer-header {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding-bottom: 14px;
                margin-bottom: 8px;
                border-bottom: 1px solid var(--border-light);
            }

            .mobile-drawer-brand {
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .mobile-drawer-emblem {
                width: 36px;
                height: 36px;
                border-radius: 10px;
                background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
                color: #ffffff;
                display: flex;
                align-items: center;
                justify-content: center;
                font-family: 'Amiri', serif;
                font-size: 1.35rem;
                font-weight: 700;
                box-shadow: 0 4px 10px var(--primary-glow);
            }

            .mobile-drawer-title {
                font-family: 'Playfair Display', serif;
                font-size: 1.05rem;
                font-weight: 700;
                color: var(--dark);
                line-height: 1.2;
            }

            .mobile-drawer-subtitle {
                font-size: 0.65rem;
                color: var(--text-muted);
                text-transform: uppercase;
                letter-spacing: 0.8px;
                font-weight: 600;
            }

            .mobile-drawer-close {
                width: 34px;
                height: 34px;
                border-radius: 8px;
                background: #f1f5f9;
                border: 1px solid #e2e8f0;
                color: #475569;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 0.95rem;
                cursor: pointer;
                transition: var(--transition);
            }

            .mobile-drawer-close:hover {
                background: #fee2e2;
                color: var(--primary);
                border-color: #fca5a5;
            }

            .nav-menu {
                position: fixed;
                top: 0;
                right: -360px;
                width: min(88vw, 340px);
                height: 100vh;
                height: 100dvh;
                background: #ffffff;
                flex-direction: column;
                align-items: stretch;
                padding: 18px 18px 36px;
                overflow-y: auto;
                box-shadow: -10px 0 35px rgba(0, 0, 0, 0.25);
                z-index: 1090;
                transition: right 0.35s cubic-bezier(0.16, 1, 0.3, 1);
                gap: 6px;
                -webkit-overflow-scrolling: touch;
            }

            .nav-menu.is-open {
                right: 0;
            }

            .nav-link {
                width: 100%;
                padding: 12px 16px;
                font-size: 0.95rem;
                justify-content: space-between;
                border-radius: 10px;
                background: #f8fafc;
                border: 1px solid rgba(226, 232, 240, 0.8);
                cursor: pointer;
            }

            .nav-link:hover, .nav-link.active {
                background: rgba(153, 27, 27, 0.08);
                border-color: rgba(153, 27, 27, 0.2);
                color: var(--primary);
            }

            .nav-link i.fa-chevron-down {
                transition: transform 0.25s ease;
                font-size: 0.78rem;
                margin-left: auto;
            }

            .nav-link.is-expanded i.fa-chevron-down {
                transform: rotate(180deg);
                color: var(--primary);
            }

            .dropdown-menu {
                position: static;
                opacity: 1;
                visibility: visible;
                transform: none;
                box-shadow: none;
                border: 1px solid #e2e8f0;
                border-radius: 10px;
                background: #f8fafc;
                margin: 4px 0 10px 0;
                display: none;
                padding: 6px;
            }

            .dropdown-menu.is-open {
                display: block;
            }

            .dropdown-item {
                padding: 10px 14px;
                border-radius: 8px;
                font-size: 0.88rem;
            }

            .dropdown-item:hover {
                background: #ffffff;
            }

            .mobile-cta-wrap {
                display: block !important;
                margin-top: 14px;
                padding-top: 14px;
                border-top: 1px dashed var(--border-light);
            }

            .mobile-cta-wrap .btn-luxury-psb {
                width: 100%;
                justify-content: center;
                padding: 14px;
            }
        }

        /* ===== COMMON COMPONENTS ===== */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 13px 28px;
            border-radius: var(--radius-full);
            font-size: 0.95rem;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: #ffffff;
            box-shadow: var(--shadow-luxury);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            color: #ffffff;
            box-shadow: 0 12px 28px rgba(153, 27, 27, 0.35);
        }

        .btn-outline {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }

        .btn-outline:hover {
            background: var(--primary);
            color: #ffffff;
            transform: translateY(-2px);
        }

        .btn-white {
            background: #ffffff;
            color: var(--primary);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        }

        .btn-white:hover {
            background: var(--primary);
            color: #ffffff;
            transform: translateY(-2px);
        }

        /* Section Headings */
        .section-header {
            text-align: center;
            max-width: 760px;
            margin: 0 auto 50px;
        }

        .section-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #fef2f2;
            color: var(--primary);
            padding: 6px 18px;
            border-radius: var(--radius-full);
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 14px;
            border: 1px solid rgba(220, 38, 38, 0.15);
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(1.8rem, 3.5vw, 2.75rem);
            font-weight: 700;
            color: var(--dark);
            line-height: 1.25;
            margin-bottom: 14px;
        }

        .section-title span { color: var(--primary); }

        .section-desc {
            font-size: 1rem;
            color: var(--text-muted);
            line-height: 1.7;
        }

        /* ===== FOOTER MEWAH ===== */
        .site-footer {
            background: #090e17;
            color: #e2e8f0;
            padding-top: 60px;
            border-top: 4px solid var(--primary);
            width: 100%;
            overflow: hidden;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 40px;
            padding-bottom: 45px;
        }

        @media (max-width: 991px) {
            .footer-grid { grid-template-columns: 1fr 1fr; gap: 30px; }
        }

        @media (max-width: 576px) {
            .footer-grid { grid-template-columns: 1fr; gap: 30px; }
        }

        .footer-logo-wrap {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
            text-decoration: none;
            color: #ffffff;
        }

        .footer-logo-wrap .logo-box {
            width: 44px;
            height: 44px;
            background: var(--primary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Amiri', serif;
            font-size: 1.6rem;
            font-weight: 700;
        }

        .footer-desc {
            font-size: 0.9rem;
            color: #94a3b8;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .footer-social-row {
            display: flex;
            gap: 10px;
        }

        .footer-social-btn {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #cbd5e1;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-social-btn:hover {
            background: var(--primary);
            color: #ffffff;
            border-color: var(--primary);
        }

        .footer-title {
            font-size: 1.05rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 18px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 30px;
            height: 2px;
            background: var(--primary);
        }

        .footer-links-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .footer-links-list a {
            color: #94a3b8;
            text-decoration: none;
            font-size: 0.9rem;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .footer-links-list a:hover {
            color: #ffffff;
            padding-left: 5px;
        }

        .footer-contact-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            color: #94a3b8;
            font-size: 0.9rem;
            margin-bottom: 12px;
            line-height: 1.6;
        }

        .footer-contact-item i {
            color: var(--primary-light);
            margin-top: 4px;
        }

        .footer-bottom {
            background: #030712;
            padding: 20px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            font-size: 0.82rem;
            color: #64748b;
        }

        .footer-bottom .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        .footer-bottom a { color: var(--primary-light); text-decoration: none; }

        /* Floating WA Button */
        .floating-wa {
            position: fixed;
            bottom: 24px;
            right: 24px;
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background: #25d366;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.7rem;
            box-shadow: 0 8px 24px rgba(37, 211, 102, 0.4);
            z-index: 990;
            text-decoration: none;
            transition: var(--transition);
        }

        .floating-wa:hover { transform: scale(1.08); color: #ffffff; }

        @media (max-width: 576px) {
            .floating-wa {
                bottom: 18px;
                right: 18px;
                width: 46px;
                height: 46px;
                font-size: 1.5rem;
            }
        }

        /* Scroll Top */
        .scroll-top-btn {
            position: fixed;
            bottom: 84px;
            right: 27px;
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: #ffffff;
            color: var(--dark);
            border: 1px solid var(--border-light);
            box-shadow: var(--shadow-card);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 989;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
        }

        .scroll-top-btn.is-active { opacity: 1; visibility: visible; }
        .scroll-top-btn:hover { background: var(--primary); color: #ffffff; }

        @media (max-width: 576px) {
            .scroll-top-btn {
                bottom: 74px;
                right: 20px;
                width: 38px;
                height: 38px;
            }
        }

        /* ===== PSB PAGE & HUB STYLES ===== */
        .psb-hero {
            background: linear-gradient(135deg, #4A0E17 0%, #7F1D1D 45%, #991B1B 100%);
            padding: 85px 0 75px;
            color: #ffffff;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .psb-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 20% 30%, rgba(217, 119, 6, 0.18) 0%, transparent 50%),
                        radial-gradient(circle at 80% 70%, rgba(255, 255, 255, 0.08) 0%, transparent 60%);
            pointer-events: none;
        }
        .psb-hero .container { position: relative; z-index: 2; }
        .psb-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(251, 191, 36, 0.4);
            color: #FBBF24;
            padding: 7px 18px;
            border-radius: var(--radius-full);
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 18px;
        }
        .psb-hero h1 {
            font-size: 2.6rem;
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 16px;
            color: #ffffff;
            letter-spacing: -0.5px;
        }
        .psb-hero h1 span {
            color: #FBBF24;
            display: block;
            font-size: 1.35rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            margin-bottom: 6px;
        }
        .psb-hero-desc {
            font-size: 1.05rem;
            max-width: 700px;
            margin: 0 auto 28px;
            color: rgba(255, 255, 255, 0.92);
            line-height: 1.8;
            font-weight: 400;
        }
        .psb-hero-meta {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 14px;
            margin-bottom: 28px;
        }
        .psb-hero-pill {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            padding: 8px 20px;
            border-radius: var(--radius-full);
            font-size: 0.88rem;
            color: #ffffff;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .psb-hero-pill i { color: #FBBF24; }
        .psb-hero-actions {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 14px;
            flex-wrap: wrap;
        }
        .psb-btn-primary {
            background: linear-gradient(135deg, #F59E0B 0%, #D97706 100%);
            color: #451A03 !important;
            font-weight: 700;
            padding: 12px 28px;
            border-radius: var(--radius-full);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 0.92rem;
            box-shadow: 0 8px 22px rgba(217, 119, 6, 0.35);
            text-decoration: none;
            transition: var(--transition);
            border: none;
        }
        .psb-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 28px rgba(217, 119, 6, 0.5);
            color: #1c0a00 !important;
        }
        .psb-btn-outline {
            background: rgba(255, 255, 255, 0.1);
            color: #ffffff !important;
            border: 1.5px solid rgba(255, 255, 255, 0.4);
            font-weight: 600;
            padding: 11px 26px;
            border-radius: var(--radius-full);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 0.92rem;
            text-decoration: none;
            backdrop-filter: blur(6px);
            transition: var(--transition);
        }
        .psb-btn-outline:hover {
            background: #ffffff;
            color: var(--primary) !important;
            border-color: #ffffff;
            transform: translateY(-2px);
        }
        .psb-status {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 18px;
            border-radius: var(--radius-full);
            font-weight: 700;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }
        .psb-status.buka { background: #15803d; color: #fff; }
        .psb-status.tutup { background: #b91c1c; color: #fff; }
        .psb-status.segera { background: #d97706; color: #fff; }
        .psb-status .pulse {
            width: 8px; height: 8px;
            border-radius: 50%;
            background: #fff;
            animation: pulse 1.5s infinite;
        }

        /* ===== PSB PAGE HEADER (Sub-pages) ===== */
        .psb-page-header {
            background: linear-gradient(135deg, #4A0E17 0%, #7F1D1D 50%, #991B1B 100%);
            padding: 55px 0 50px;
            color: #ffffff;
            position: relative;
            overflow: hidden;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .psb-page-header::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 85% 30%, rgba(217, 119, 6, 0.15) 0%, transparent 60%);
            pointer-events: none;
        }
        .psb-page-header .container { position: relative; z-index: 2; }
        .psb-page-header-tag {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(255, 255, 255, 0.12);
            color: #FBBF24;
            font-size: 0.75rem;
            font-weight: 700;
            padding: 4px 14px;
            border-radius: var(--radius-full);
            text-transform: uppercase;
            letter-spacing: 1.2px;
            margin-bottom: 12px;
        }
        .psb-page-header h1 {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 10px;
            color: #ffffff;
            letter-spacing: -0.5px;
        }
        .psb-breadcrumb {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.8);
            flex-wrap: wrap;
        }
        .psb-breadcrumb a {
            color: #FBBF24;
            text-decoration: none;
            transition: var(--transition);
        }
        .psb-breadcrumb a:hover { text-decoration: underline; color: #ffffff; }
        .psb-breadcrumb .divider { color: rgba(255, 255, 255, 0.4); font-size: 0.75rem; }

        /* ===== SUBNAV TABS ===== */
        .psb-subnav-wrapper {
            background: #ffffff;
            border-bottom: 1px solid var(--border-light);
            box-shadow: 0 4px 12px rgba(15, 23, 42, 0.04);
            position: sticky;
            top: 72px;
            z-index: 890;
        }
        .psb-subnav {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 12px 0;
            overflow-x: auto;
            white-space: nowrap;
            scrollbar-width: none;
        }
        .psb-subnav::-webkit-scrollbar { display: none; }
        .psb-subnav-item {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 9px 20px;
            border-radius: var(--radius-full);
            font-size: 0.88rem;
            font-weight: 600;
            color: #475569;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            text-decoration: none;
            transition: var(--transition);
        }
        .psb-subnav-item:hover {
            color: var(--primary);
            background: rgba(153, 27, 27, 0.05);
            border-color: rgba(153, 27, 27, 0.25);
            transform: translateY(-1px);
        }
        .psb-subnav-item.active {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: #ffffff !important;
            border-color: var(--primary);
            box-shadow: 0 4px 14px rgba(153, 27, 27, 0.28);
        }
        .psb-subnav-item.active i { color: #FBBF24; }

        @media (max-width: 768px) {
            .psb-subnav { justify-content: flex-start; padding-left: 10px; padding-right: 10px; }
            .psb-subnav-item { padding: 8px 16px; font-size: 0.82rem; }
        }

        /* ===== PSB HUB CARDS ===== */
        .psb-section-header { text-align: center; margin-bottom: 40px; }
        .psb-section-header .section-tag {
            display: inline-block;
            background: rgba(153, 27, 27, 0.08);
            color: var(--primary);
            font-weight: 700;
            font-size: 0.78rem;
            padding: 5px 16px;
            border-radius: var(--radius-full);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 10px;
        }
        .psb-section-header h2 {
            font-size: 2.1rem;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 8px;
            letter-spacing: -0.5px;
        }
        .psb-section-header p {
            font-size: 1rem;
            color: var(--text-muted);
            max-width: 580px;
            margin: 0 auto;
        }

        .psb-info-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
            margin-bottom: 45px;
        }
        .psb-info-card {
            background: #ffffff;
            border-radius: var(--radius-md);
            border: 1px solid var(--border-light);
            padding: 28px 22px 24px;
            display: flex;
            flex-direction: column;
            position: relative;
            box-shadow: var(--shadow-subtle);
            transition: var(--transition);
            overflow: hidden;
        }
        .psb-info-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), #F59E0B);
            opacity: 0;
            transition: var(--transition);
        }
        .psb-info-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 36px rgba(153, 27, 27, 0.1);
            border-color: rgba(153, 27, 27, 0.25);
        }
        .psb-info-card:hover::before { opacity: 1; }
        .psb-card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 18px;
        }
        .psb-card-badge {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: #ffffff;
            font-size: 0.72rem;
            font-weight: 800;
            letter-spacing: 1px;
            padding: 4px 12px;
            border-radius: var(--radius-full);
            text-transform: uppercase;
        }
        .psb-card-icon {
            width: 48px;
            height: 48px;
            border-radius: 14px;
            background: rgba(153, 27, 27, 0.08);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            transition: var(--transition);
        }
        .psb-info-card:hover .psb-card-icon {
            background: var(--primary);
            color: #FBBF24;
            transform: scale(1.06) rotate(3deg);
        }
        .psb-card-title {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 10px;
            line-height: 1.35;
        }
        .psb-card-desc {
            font-size: 0.88rem;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1;
        }
        .psb-card-action {
            margin-top: auto;
            border-top: 1px dashed #e2e8f0;
            padding-top: 16px;
        }
        .psb-card-btn {
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            padding: 9px 16px;
            border-radius: var(--radius-full);
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--primary);
            background: rgba(153, 27, 27, 0.05);
            border: 1px solid rgba(153, 27, 27, 0.15);
            text-decoration: none;
            transition: var(--transition);
        }
        .psb-card-btn i { transition: transform 0.25s ease; }
        .psb-info-card:hover .psb-card-btn {
            background: var(--primary);
            color: #ffffff;
            border-color: var(--primary);
        }
        .psb-info-card:hover .psb-card-btn i { transform: translateX(4px); color: #FBBF24; }

        /* ===== DETAIL CONTENT CARDS ===== */
        .psb-content-card {
            background: #ffffff;
            border-radius: var(--radius-md);
            padding: 34px 30px;
            box-shadow: var(--shadow-card);
            margin-bottom: 26px;
            border: 1px solid var(--border-light);
        }
        .psb-content-card h3 {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 18px;
            padding-bottom: 12px;
            border-bottom: 2px solid #f1f5f9;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .psb-content-card h3 i { color: var(--primary); font-size: 1.15rem; }
        .psb-list-check { list-style: none; padding: 0; margin: 0; }
        .psb-list-check li {
            position: relative;
            padding-left: 32px;
            margin-bottom: 12px;
            font-size: 0.92rem;
            color: #334155;
            line-height: 1.65;
        }
        .psb-list-check li::before {
            content: "\f058";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            left: 0; top: 2px;
            color: #16a34a;
            font-size: 1.05rem;
        }

        /* Timeline for Jadwal */
        .psb-timeline { position: relative; padding: 15px 0; }
        .psb-timeline::before {
            content: '';
            position: absolute;
            left: 26px; top: 10px; bottom: 20px;
            width: 3px;
            background: linear-gradient(to bottom, var(--primary), #F59E0B);
            border-radius: 3px;
        }
        .psb-timeline-item { position: relative; padding-left: 72px; margin-bottom: 30px; }
        .psb-timeline-badge {
            position: absolute;
            left: 11px; top: 0;
            width: 34px; height: 34px;
            border-radius: 50%;
            background: var(--primary);
            color: #ffffff;
            display: flex; align-items: center; justify-content: center;
            font-weight: 800; font-size: 0.9rem;
            box-shadow: 0 0 0 5px rgba(153, 27, 27, 0.15);
            z-index: 2;
        }
        .psb-timeline-content {
            background: #f8fafc;
            border: 1px solid var(--border-light);
            padding: 22px;
            border-radius: var(--radius-md);
            transition: var(--transition);
        }
        .psb-timeline-content:hover {
            box-shadow: 0 6px 20px rgba(15, 23, 42, 0.06);
            background: #ffffff;
            border-color: rgba(153, 27, 27, 0.3);
        }
        .psb-timeline-date {
            display: inline-block;
            background: rgba(153, 27, 27, 0.08);
            color: var(--primary);
            font-size: 0.75rem; font-weight: 700;
            padding: 3px 12px; border-radius: var(--radius-full);
            margin-bottom: 8px;
            text-transform: uppercase;
        }

        /* Materi Cards */
        .materi-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        .materi-card {
            background: #f8fafc;
            border: 1px solid var(--border-light);
            border-radius: var(--radius-md);
            padding: 22px;
            transition: var(--transition);
        }
        .materi-card:hover {
            background: #ffffff;
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.06);
            border-color: rgba(153, 27, 27, 0.3);
            transform: translateY(-3px);
        }
        .materi-card-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 12px;
        }
        .materi-icon {
            width: 44px; height: 44px;
            border-radius: 12px;
            background: rgba(153, 27, 27, 0.08);
            color: var(--primary);
            display: flex; align-items: center; justify-content: center;
            font-size: 1.15rem;
            flex-shrink: 0;
        }
        .materi-card h4 { font-size: 1.05rem; font-weight: 700; color: var(--dark); margin: 0; }

        /* Contact Channels */
        .contact-channel-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 26px;
        }
        .contact-channel-card {
            display: flex; align-items: flex-start; gap: 16px;
            padding: 22px;
            background: #ffffff;
            border: 1px solid var(--border-light);
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-subtle);
            transition: var(--transition);
        }
        .contact-channel-card:hover {
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.06);
            border-color: rgba(153, 27, 27, 0.3);
            transform: translateY(-2px);
        }
        .contact-channel-icon {
            width: 50px; height: 50px;
            border-radius: 14px;
            background: rgba(153, 27, 27, 0.08);
            color: var(--primary);
            display: flex; align-items: center; justify-content: center;
            font-size: 1.35rem; flex-shrink: 0;
        }
        .contact-channel-icon.whatsapp {
            background: #E8F5E9; color: #16a34a;
        }
        .contact-channel-card h4 { font-size: 1.05rem; font-weight: 700; color: var(--dark); margin-bottom: 4px; }
        .contact-channel-card p { font-size: 0.88rem; color: var(--text-muted); margin: 0; line-height: 1.5; }

        /* CTA Banner */
        .psb-cta-banner {
            background: linear-gradient(135deg, #4A0E17 0%, #7F1D1D 50%, #991B1B 100%);
            border-radius: var(--radius-md);
            padding: 36px 32px;
            color: #ffffff;
            display: flex; align-items: center; justify-content: space-between;
            gap: 24px;
            box-shadow: var(--shadow-luxury);
            margin-top: 36px;
        }
        .psb-cta-banner h3 { font-size: 1.45rem; font-weight: 800; margin-bottom: 6px; color: #ffffff; }
        .psb-cta-banner p { font-size: 0.92rem; opacity: 0.92; max-width: 600px; color: #f8fafc; margin: 0; line-height: 1.6; }

        /* Form Card */
        .psb-form-card {
            max-width: 820px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-card);
            padding: 38px 32px;
            border: 1px solid var(--border-light);
        }
        .psb-form-card h3 { font-size: 1.45rem; font-weight: 800; color: var(--dark); margin-bottom: 6px; }
        .psb-form-card .subtitle { color: var(--text-muted); font-size: 0.9rem; margin-bottom: 26px; }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }

        @media (max-width: 992px) {
            .psb-info-grid { grid-template-columns: repeat(2, 1fr); }
            .psb-hero h1 { font-size: 2.2rem; }
            .materi-grid { grid-template-columns: 1fr; }
            .contact-channel-grid { grid-template-columns: 1fr; }
            .psb-cta-banner { flex-direction: column; text-align: center; }
        }
        @media (max-width: 600px) {
            .psb-info-grid { grid-template-columns: 1fr; }
            .psb-hero { padding: 60px 0 50px; }
            .psb-hero h1 { font-size: 1.85rem; }
            .psb-hero h1 span { font-size: 1.15rem; }
            .psb-page-header h1 { font-size: 1.7rem; }
            .psb-timeline::before { left: 18px; }
            .psb-timeline-badge { left: 3px; width: 30px; height: 30px; font-size: 0.8rem; }
            .psb-timeline-item { padding-left: 52px; }
            .form-row { grid-template-columns: 1fr; }
            .psb-form-card { padding: 24px 18px; }
            .psb-content-card { padding: 24px 18px; }
        }

        /* ===== PUBLIC INNER PAGE HEADER ===== */
        .page-header {
            background: linear-gradient(135deg, #4A0E17 0%, #7F1D1D 50%, #991B1B 100%);
            padding: 55px 0 45px;
            color: #ffffff;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
        .page-header::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 85% 20%, rgba(217, 119, 6, 0.18) 0%, transparent 60%);
            pointer-events: none;
        }
        .page-header h2 {
            font-size: 2.3rem;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 10px;
            letter-spacing: -0.5px;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.88rem;
            color: rgba(255, 255, 255, 0.75);
        }
        .breadcrumb a {
            color: rgba(255, 255, 255, 0.85);
            text-decoration: none;
            transition: var(--transition);
        }
        .breadcrumb a:hover {
            color: var(--gold-light);
        }
        .breadcrumb span {
            color: rgba(255, 255, 255, 0.6);
        }

        /* ===== SECTION GLOBAL ===== */
        .section {
            padding: 60px 0 80px;
        }

        /* ===== BERITA / INFORMASI / ALBUM CARDS GRID ===== */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
            gap: 30px;
            margin-top: 20px;
        }
        .card {
            background: #ffffff;
            border-radius: var(--radius-lg);
            overflow: hidden;
            border: 1px solid var(--border-light);
            box-shadow: var(--shadow-subtle);
            display: flex;
            flex-direction: column;
            transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.35s ease, border-color 0.35s ease;
        }
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 35px -8px rgba(15, 23, 42, 0.12);
            border-color: rgba(153, 27, 27, 0.25);
        }
        .card-img {
            position: relative;
            width: 100%;
            height: 220px;
            overflow: hidden;
            background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
        }
        .card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .card:hover .card-img img {
            transform: scale(1.08);
        }
        .card-badge {
            position: absolute;
            top: 14px;
            left: 14px;
            background: rgba(153, 27, 27, 0.92);
            backdrop-filter: blur(8px);
            color: #ffffff;
            font-size: 0.72rem;
            font-weight: 700;
            padding: 4px 12px;
            border-radius: var(--radius-full);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            z-index: 2;
        }
        .card-date {
            position: absolute;
            bottom: 12px;
            right: 12px;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(8px);
            color: var(--dark);
            font-size: 0.76rem;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: var(--radius-full);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            z-index: 2;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .card-body {
            padding: 24px;
            display: flex;
            flex-direction: column;
            flex: 1;
        }
        .card-body h3 {
            font-size: 1.18rem;
            font-weight: 700;
            color: var(--dark);
            line-height: 1.45;
            margin-bottom: 10px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .card-body h3 a {
            color: inherit;
            text-decoration: none;
            transition: color 0.2s;
        }
        .card-body h3 a:hover {
            color: var(--primary);
        }
        .card-body p {
            font-size: 0.9rem;
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 18px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            flex: 1;
        }
        .card-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--primary);
            font-weight: 700;
            font-size: 0.88rem;
            text-decoration: none;
            transition: gap 0.25s ease, color 0.2s;
            margin-top: auto;
        }
        .card-link i {
            transition: transform 0.25s ease;
        }
        .card-link:hover {
            color: var(--primary-dark);
        }
        .card-link:hover i {
            transform: translateX(5px);
        }

        /* ===== DETAIL BERITA & GAMBAR UTAMA ===== */
        .berita-detail {
            max-width: 860px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: var(--radius-lg);
            padding: 42px 38px;
            border: 1px solid var(--border-light);
            box-shadow: var(--shadow-card);
        }
        .berita-detail .meta {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 14px;
            font-size: 0.86rem;
            color: var(--text-muted);
            flex-wrap: wrap;
        }
        .berita-detail .meta span {
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .berita-detail h1 {
            font-size: 2.1rem;
            font-weight: 800;
            color: var(--dark);
            line-height: 1.35;
            margin-bottom: 24px;
        }
        .berita-img {
            width: 100%;
            height: 420px;
            max-height: 460px;
            border-radius: var(--radius-md);
            overflow: hidden;
            margin-bottom: 30px;
            background: #0f172a;
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.1);
        }
        .berita-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
        }
        .berita-detail .content {
            font-size: 1.05rem;
            line-height: 1.85;
            color: #334155;
        }
        .berita-detail .content p {
            margin-bottom: 20px;
        }
        .berita-detail .content img {
            max-width: 100%;
            height: auto;
            border-radius: var(--radius-sm);
            margin: 20px 0;
        }

        /* ===== GALERI / ALBUM FOTO KEGIATAN ===== */
        .filter-tabs {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 36px;
        }
        .filter-tab {
            background: #ffffff;
            color: var(--text-muted);
            border: 1px solid var(--border-light);
            padding: 8px 22px;
            border-radius: var(--radius-full);
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.25s ease;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
        }
        .filter-tab:hover, .filter-tab.active {
            background: var(--primary);
            color: #ffffff;
            border-color: var(--primary);
            box-shadow: 0 4px 14px rgba(153, 27, 27, 0.3);
            transform: translateY(-2px);
        }
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 24px;
        }
        .gallery-item {
            position: relative;
            height: 250px;
            border-radius: var(--radius-md);
            overflow: hidden;
            box-shadow: var(--shadow-subtle);
            border: 1px solid var(--border-light);
            background: #f1f5f9;
            cursor: pointer;
        }
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
            transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .gallery-item:hover img {
            transform: scale(1.08);
        }
        .gallery-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(15, 23, 42, 0.1) 0%, rgba(15, 23, 42, 0.4) 40%, rgba(15, 23, 42, 0.88) 100%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 20px;
            color: #ffffff;
            transition: opacity 0.3s ease;
        }
        .gallery-overlay h4 {
            font-size: 1.05rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 4px;
            text-shadow: 0 2px 8px rgba(0,0,0,0.4);
        }
        .gallery-overlay p {
            font-size: 0.82rem;
            color: rgba(255, 255, 255, 0.88);
            margin: 0;
            line-height: 1.4;
        }

        /* ===== PAGINATION & NO DATA ===== */
        .pagination-wrap {
            margin-top: 45px;
            display: flex;
            justify-content: center;
        }
        .no-data {
            text-align: center;
            padding: 70px 20px;
            background: #ffffff;
            border-radius: var(--radius-lg);
            border: 1px dashed var(--border-light);
            color: var(--text-muted);
        }
        .no-data i {
            font-size: 44px;
            color: var(--primary);
            opacity: 0.3;
            margin-bottom: 16px;
            display: block;
        }
        .no-data p {
            font-size: 1.05rem;
            font-weight: 500;
        }

        @media (max-width: 768px) {
            .page-header h2 { font-size: 1.85rem; }
            .card-grid { grid-template-columns: 1fr; gap: 20px; }
            .card-img { height: 200px; }
            .berita-detail { padding: 24px 20px; }
            .berita-detail h1 { font-size: 1.6rem; }
            .berita-img { height: 240px; }
            .gallery-grid { grid-template-columns: repeat(2, 1fr); gap: 16px; }
            .gallery-item { height: 200px; }
        }
        @media (max-width: 480px) {
            .gallery-grid { grid-template-columns: 1fr; }
        }
    </style>

    @yield('styles')
</head>
<body>

    <!-- Top Info Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-left">
                <span><i class="fas fa-envelope"></i> thayyibaiibs@gmail.com</span>
                <span style="margin-left: 16px;"><i class="fas fa-map-marker-alt"></i> Agam, Sumatera Barat</span>
            </div>
            <div class="top-bar-right">
                <a href="https://wa.me/6281234567890" target="_blank"><i class="fab fa-whatsapp"></i> Hubungi Kami</a>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <header class="site-header" id="mainHeader">
        <div class="container">
            <div class="nav-wrapper">
                <!-- Brand Logo -->
                <a href="{{ route('home') }}" class="brand">
                    @if(file_exists(public_path('images/logo-emblem.png')))
                        <img src="{{ asset('images/logo-emblem.png') }}" alt="Logo Thayyiba" class="brand-logo-img">
                    @elseif(file_exists(public_path('images/logo.png')))
                        <img src="{{ asset('images/logo.png') }}" alt="Logo Thayyiba" class="brand-logo-img">
                    @elseif(file_exists(public_path('images/logo.jpg')))
                        <img src="{{ asset('images/logo.jpg') }}" alt="Logo Thayyiba" class="brand-logo-img">
                    @elseif(file_exists(public_path('images/logo.svg')))
                        <img src="{{ asset('images/logo.svg') }}" alt="Logo Thayyiba" class="brand-logo-img">
                    @elseif(file_exists(public_path('images/logo.webp')))
                        <img src="{{ asset('images/logo.webp') }}" alt="Logo Thayyiba" class="brand-logo-img">
                    @else
                        <div class="brand-emblem">ط</div>
                    @endif
                    <div class="brand-meta">
                        <span class="brand-name">Yayasan Pesantren <span>Thayyiba IIBS</span></span>
                        <span class="brand-tagline">Membangun Karakter Islami & Intelektual</span>
                    </div>
                </a>

                <!-- Nav Menu Items -->
                <ul class="nav-menu" id="navMenu">
                    <!-- Drawer Header (Mobile only) -->
                    <li class="mobile-drawer-header">
                        <div class="mobile-drawer-brand">
                            @if(file_exists(public_path('images/logo-emblem.png')))
                                <img src="{{ asset('images/logo-emblem.png') }}" alt="Logo Thayyiba" class="mobile-drawer-logo-img">
                            @elseif(file_exists(public_path('images/logo.png')))
                                <img src="{{ asset('images/logo.png') }}" alt="Logo Thayyiba" class="mobile-drawer-logo-img">
                            @elseif(file_exists(public_path('images/logo.jpg')))
                                <img src="{{ asset('images/logo.jpg') }}" alt="Logo Thayyiba" class="mobile-drawer-logo-img">
                            @elseif(file_exists(public_path('images/logo.svg')))
                                <img src="{{ asset('images/logo.svg') }}" alt="Logo Thayyiba" class="mobile-drawer-logo-img">
                            @elseif(file_exists(public_path('images/logo.webp')))
                                <img src="{{ asset('images/logo.webp') }}" alt="Logo Thayyiba" class="mobile-drawer-logo-img">
                            @else
                                <span class="mobile-drawer-emblem">ط</span>
                            @endif
                            <div>
                                <div class="mobile-drawer-title">Pesantren Thayyiba IIBS</div>
                                <div class="mobile-drawer-subtitle">Menu Navigasi</div>
                            </div>
                        </div>
                        <button type="button" class="mobile-drawer-close" onclick="closeMobileMenu()" aria-label="Tutup Menu">
                            <i class="fas fa-times"></i>
                        </button>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                            <i class="fas fa-home-alt"></i> Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link {{ request()->is('profil*') ? 'active' : '' }}" onclick="toggleDropdown(this, event)" data-dropdown-toggle="true">
                            <span><i class="fas fa-landmark" style="width: 20px; color: var(--primary);"></i> Profil</span>
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ route('profil.sejarah') }}" class="dropdown-item">
                                <i class="fas fa-landmark"></i> Sejarah Pesantren
                            </a>
                            <a href="{{ route('profil.visi-misi') }}" class="dropdown-item">
                                <i class="fas fa-compass"></i> Visi & Misi
                            </a>
                            <a href="{{ route('profil.fasilitas') }}" class="dropdown-item">
                                <i class="fas fa-mosque"></i> Fasilitas Kampus
                            </a>
                            <a href="{{ route('profil.struktur') }}" class="dropdown-item">
                                <i class="fas fa-sitemap"></i> Struktur Organisasi
                            </a>
                            <a href="{{ route('profil.pengurus') }}" class="dropdown-item">
                                <i class="fas fa-users-gear"></i> Dewan Pengurus
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link {{ request()->is('program*') ? 'active' : '' }}" onclick="toggleDropdown(this, event)" data-dropdown-toggle="true">
                            <span><i class="fas fa-graduation-cap" style="width: 20px; color: var(--primary);"></i> Program</span>
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu">
                            @if(isset($navPrograms) && $navPrograms->count() > 0)
                                @foreach($navPrograms as $navProg)
                                    <a href="{{ route('program.show', $navProg->slug) }}" class="dropdown-item">
                                        <i class="fas fa-certificate"></i> {{ $navProg->nama }}
                                    </a>
                                @endforeach
                            @endif
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('galeri.index') }}" class="nav-link {{ request()->is('galeri*') ? 'active' : '' }}">
                            <i class="fas fa-images"></i> Galeri
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('berita.index') }}" class="nav-link {{ request()->is('berita*') ? 'active' : '' }}">
                            <i class="fas fa-newspaper"></i> Berita & Artikel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link {{ request()->is('psb*') ? 'active' : '' }}" onclick="toggleDropdown(this, event)" data-dropdown-toggle="true">
                            <span><i class="fas fa-graduation-cap" style="width: 20px; color: var(--primary);"></i> PSB</span>
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ route('psb.index') }}" class="dropdown-item {{ request()->routeIs('psb.index') ? 'active' : '' }}">
                                <i class="fas fa-home-alt"></i> Beranda PSB
                            </a>
                            <a href="{{ route('psb.syarat') }}" class="dropdown-item {{ request()->routeIs('psb.syarat') ? 'active' : '' }}">
                                <i class="fas fa-file-contract"></i> Syarat Pendaftaran
                            </a>
                            <a href="{{ route('psb.jadwal') }}" class="dropdown-item {{ request()->routeIs('psb.jadwal') ? 'active' : '' }}">
                                <i class="fas fa-calendar-alt"></i> Jadwal Pendaftaran
                            </a>
                            <a href="{{ route('psb.materi') }}" class="dropdown-item {{ request()->routeIs('psb.materi') ? 'active' : '' }}">
                                <i class="fas fa-book-open-reader"></i> Materi Ujian
                            </a>
                            <a href="{{ route('psb.kontak') }}" class="dropdown-item {{ request()->routeIs('psb.kontak') ? 'active' : '' }}">
                                <i class="fas fa-headset"></i> Kontak Informasi
                            </a>
                        </div>
                    </li>
                </ul>

                <button class="hamburger-btn" id="hamburgerBtn" aria-label="Buka Menu" aria-expanded="false" onclick="toggleMobileMenu()">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Drawer Backdrop -->
    <div class="mobile-backdrop" id="mobileBackdrop" onclick="closeMobileMenu()"></div>

    <!-- Main Dynamic Content -->
    <main style="width: 100%; overflow-x: hidden;">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Col 1: Identity -->
                <div>
                    <a href="{{ route('home') }}" class="footer-logo-wrap">
                        @if(file_exists(public_path('images/logo.png')))
                            <img src="{{ asset('images/logo.png') }}" alt="Logo Thayyiba" class="footer-logo-img">
                        @elseif(file_exists(public_path('images/logo.jpg')))
                            <img src="{{ asset('images/logo.jpg') }}" alt="Logo Thayyiba" class="footer-logo-img">
                        @elseif(file_exists(public_path('images/logo.svg')))
                            <img src="{{ asset('images/logo.svg') }}" alt="Logo Thayyiba" class="footer-logo-img">
                        @elseif(file_exists(public_path('images/logo.webp')))
                            <img src="{{ asset('images/logo.webp') }}" alt="Logo Thayyiba" class="footer-logo-img">
                        @else
                            <div class="logo-box">ط</div>
                        @endif
                        <div class="brand-meta">
                            <span style="font-family:'Playfair Display',serif; font-size:1.3rem; font-weight:700;">Yayasan Pesantren <span style="color:var(--primary);">Thayyiba IIBS</span></span>
                            <span style="font-size:0.75rem; color:#94a3b8; text-transform:uppercase; letter-spacing:1px;">Membangun Karakter Islami & Intelektual</span>
                        </div>
                    </a>
                    <p class="footer-desc">
                        Mewujudkan generasi rabbani berwawasan global, berakhlak mulia, dan siap memimpin peradaban dengan landasan syariat Islam yang kaffah.
                    </p>
                    <div class="footer-social-row">
                        <a href="#" class="footer-social-btn" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="footer-social-btn" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="footer-social-btn" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="https://wa.me/6281234567890" target="_blank" class="footer-social-btn" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

                <!-- Col 2: Profil & Info -->
                <div>
                    <h4 class="footer-title">Profil & Informasi</h4>
                    <ul class="footer-links-list">
                        <li><a href="{{ route('profil.sejarah') }}"><i class="fas fa-chevron-right"></i> Sejarah Pesantren</a></li>
                        <li><a href="{{ route('profil.visi-misi') }}"><i class="fas fa-chevron-right"></i> Visi & Misi</a></li>
                        <li><a href="{{ route('profil.fasilitas') }}"><i class="fas fa-chevron-right"></i> Sarana & Prasarana</a></li>
                        <li><a href="{{ route('profil.struktur') }}"><i class="fas fa-chevron-right"></i> Struktur Organisasi</a></li>
                        <li><a href="{{ route('profil.pengurus') }}"><i class="fas fa-chevron-right"></i> Dewan Pengurus</a></li>
                    </ul>
                </div>

                <!-- Col 3: Program -->
                <div>
                    <h4 class="footer-title">Program & Ekskul</h4>
                    <ul class="footer-links-list">
                        @if(isset($navPrograms) && $navPrograms->count() > 0)
                            @foreach($navPrograms->take(5) as $navProg)
                                <li><a href="{{ route('program.show', $navProg->slug) }}"><i class="fas fa-chevron-right"></i> {{ $navProg->nama }}</a></li>
                            @endforeach
                        @endif
                        <li><a href="{{ route('psb.index') }}"><i class="fas fa-chevron-right"></i> PSB</a></li>
                    </ul>
                </div>

                <!-- Col 4: Kontak -->
                <div>
                    <h4 class="footer-title">Sekretariat & Lokasi</h4>
                    <div class="footer-contact-item">
                        <i class="fas fa-map-location-dot"></i>
                        <span>Jorong Tobo Ladang, Nagari Pakan Sinayan, Kec. Banuhampu, Kab. Agam, Sumatera Barat</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+62 812-3456-7890</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>thayyibaiibs@gmail.com</span>
                    </div>
                    <div style="margin-top: 16px;">
                        <a href="{{ route('psb.index') }}" class="btn-luxury-psb" style="font-size:0.8rem; padding:8px 18px;">
                            <i class="fas fa-circle-info"></i> PSB
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container footer-bottom-inner">
                <p>&copy; {{ date('Y') }} Pesantren Thayyiba International Islamic Boarding School. All Rights Reserved.</p>
                <div class="footer-bottom-links">
                    <a href="{{ route('home') }}">Beranda</a>
                    <a href="{{ route('profil.sejarah') }}">Profil</a>
                    <a href="{{ route('profil.fasilitas') }}">Fasilitas</a>
                    <a href="{{ route('psb.index') }}">PSB</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="scroll-top-btn" id="scrollTopBtn" aria-label="Kembali ke atas">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Scripts -->
    <script>
        function toggleMobileMenu() {
            var menu = document.getElementById('navMenu');
            var btn = document.getElementById('hamburgerBtn');
            var backdrop = document.getElementById('mobileBackdrop');
            if (!menu) return;
            
            var isOpen = menu.classList.contains('is-open');
            if (isOpen) {
                closeMobileMenu();
            } else {
                menu.classList.add('is-open');
                if (btn) {
                    btn.classList.add('is-active');
                    btn.setAttribute('aria-expanded', 'true');
                }
                if (backdrop) backdrop.classList.add('is-active');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeMobileMenu() {
            var menu = document.getElementById('navMenu');
            var btn = document.getElementById('hamburgerBtn');
            var backdrop = document.getElementById('mobileBackdrop');
            if (menu) menu.classList.remove('is-open');
            if (btn) {
                btn.classList.remove('is-active');
                btn.setAttribute('aria-expanded', 'false');
            }
            if (backdrop) backdrop.classList.remove('is-active');
            document.body.style.overflow = '';
        }

        function toggleDropdown(el, event) {
            if (event) {
                event.preventDefault();
                event.stopPropagation();
            }
            
            var parent = el.closest('.nav-item');
            if (!parent) return;
            var dropdown = parent.querySelector('.dropdown-menu');
            if (!dropdown) return;
            
            var isAlreadyOpen = dropdown.classList.contains('is-open');

            // Tutup dropdown lain yang terbuka di mobile
            document.querySelectorAll('.dropdown-menu.is-open').forEach(function(d) {
                if (d !== dropdown) {
                    d.classList.remove('is-open');
                    var pLink = d.closest('.nav-item').querySelector('.nav-link');
                    if (pLink) pLink.classList.remove('is-expanded');
                }
            });

            if (isAlreadyOpen) {
                dropdown.classList.remove('is-open');
                el.classList.remove('is-expanded');
            } else {
                dropdown.classList.add('is-open');
                el.classList.add('is-expanded');
            }
        }

        // Close dropdown when clicked outside on desktop
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.nav-item')) {
                document.querySelectorAll('.dropdown-menu.is-open').forEach(function(d) {
                    d.classList.remove('is-open');
                    var pLink = d.closest('.nav-item').querySelector('.nav-link');
                    if (pLink) pLink.classList.remove('is-expanded');
                });
            }
        });

        // Scroll to top button visibility
        window.addEventListener('scroll', function() {
            var scrollBtn = document.getElementById('scrollTopBtn');
            if (scrollBtn) {
                if (window.pageYOffset > 300) {
                    scrollBtn.classList.add('is-active');
                } else {
                    scrollBtn.classList.remove('is-active');
                }
            }
        });
    </script>

    @yield('scripts')
    @stack('scripts')
</body>
</html>