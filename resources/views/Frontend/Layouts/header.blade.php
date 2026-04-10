<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('meta_title', 'Yas-Portfolio')</title>
    <meta content="@yield('meta_desc')" name="description">
    <meta content="@yield('meta_keys')" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    {{-- ============================================================
     CUSTOM PORTFOLIO STYLES — Dark Premium Redesign
     Accent: Electric Blue #4f8ef7  |  BG: #0a0a0a  |  Text: #e8e8e0
     Fonts: Playfair Display (headings) + DM Sans (body)
============================================================ --}}
    <style>
        /* ── Google Fonts ─────────────────────────────────────────── */
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=DM+Sans:wght@300;400;500&display=swap');

        /* ── CSS Variables ────────────────────────────────────────── */
        :root {
            --bg: #0a0a0a;
            --bg-card: #111111;
            --bg-alt: #0f0f0f;
            --surface: #161616;
            --accent: #4f8ef7;
            --accent-dim: rgba(79, 142, 247, .12);
            --text: #bdbdb4;
            --muted: #888880;
            --border: rgba(255, 255, 255, .07);
            --font-head: 'Playfair Display', Georgia, serif;
            --font-body: 'DM Sans', system-ui, sans-serif;
            --radius: 12px;
            --transition: .35s cubic-bezier(.4, 0, .2, 1);
        }

        /* ── Base Reset ───────────────────────────────────────────── */
        html {
            scroll-behavior: smooth;
        }

        body.index-page {
            background: var(--bg);
            color: var(--text);
            font-family: var(--font-body);
            font-weight: 400;
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
        }

        /* ── Override template bg classes ────────────────────────── */
        .light-background {
            background: var(--bg-alt) !important;
        }

        .dark-background {
            background: var(--bg) !important;
        }

        /* ── Sidebar / Header (left nav) ─────────────────────────── */
        #header {
            background: #090909 !important;
            border-right: 1px solid var(--border);
        }

        #header .profile-img img {
            border: 3px solid var(--accent);
            box-shadow: 0 0 24px rgba(79, 142, 247, .25);
            transition: box-shadow var(--transition);
        }

        #header .profile-img img:hover {
            box-shadow: 0 0 40px rgba(79, 142, 247, .5);
        }

        #header .sitename {
            font-family: var(--font-head);
            color: var(--text);
            letter-spacing: .06em;
        }

        #header .social-links a {
            color: var(--muted);
            transition: color var(--transition), transform var(--transition);
            display: inline-flex;
            width: 34px;
            height: 34px;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--border);
            border-radius: 50%;
            margin: 0 3px;
        }

        #header .social-links a:hover {
            color: var(--accent);
            border-color: var(--accent);
            transform: translateY(-2px);
        }

        .navmenu ul li a {
            color: var(--muted) !important;
            font-family: var(--font-body);
            font-size: .8rem;
            letter-spacing: .1em;
            text-transform: uppercase;
            transition: color var(--transition);
            border-left: 2px solid transparent;
        }

        .navmenu ul li a:hover,
        .navmenu ul li a.active {
            color: var(--accent) !important;
            border-left-color: var(--accent);
        }

        .navmenu ul li a i {
            color: var(--accent);
        }

        /* ── Section Title ────────────────────────────────────────── */
        .section-title {
            text-align: center;
            margin-bottom: 3.5rem;
        }

        .section-title h2 {
            font-family: var(--font-head);
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 700;
            color: var(--text);
            position: relative;
            display: inline-block;
            padding-bottom: .6rem;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: var(--accent);
            border-radius: 2px;
        }

        .section-title p {
            color: var(--muted);
            max-width: 600px;
            margin: .8rem auto 0;
            font-size: .95rem;
        }

        /* ══════════════════════════════════════════════════
   HERO
══════════════════════════════════════════════════ */
        #hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            background: var(--bg);
        }

        #hero img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: .08;
            filter: grayscale(1);
        }

        #hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse at 30% 50%, rgba(79, 142, 247, .12) 0%, transparent 65%);
            pointer-events: none;
        }

        #hero .container {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 2rem 1rem;
        }

        #hero h2 {
            font-family: var(--font-head);
            font-size: clamp(2.8rem, 8vw, 6rem);
            font-weight: 700;
            color: var(--text);
            line-height: 1.1;
            letter-spacing: -.02em;
            animation: heroFadeUp .9s ease both;
        }

        #hero h2 span {
            color: var(--accent);
        }

        #hero p {
            font-size: clamp(1rem, 2.5vw, 1.4rem);
            color: var(--muted);
            margin-top: 1.2rem;
            animation: heroFadeUp .9s .2s ease both;
        }

        #hero p .typed {
            color: var(--accent);
            font-weight: 500;
        }

        @keyframes heroFadeUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Hero scroll indicator */
        #hero::after {
            content: '';
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            width: 1px;
            height: 60px;
            background: linear-gradient(to bottom, var(--accent), transparent);
            animation: scrollPulse 2s ease-in-out infinite;
        }

        @keyframes scrollPulse {

            0%,
            100% {
                opacity: .3;
            }

            50% {
                opacity: 1;
            }
        }

        /* Login/Register buttons in hero */
        #hero .position-absolute nav .btn {
            font-size: .75rem;
            border-radius: 99px;
            padding: .3rem .9rem;
        }

        #hero .position-absolute nav .btn-primary {
            background: var(--accent);
            border-color: var(--accent);
            color: #fff;
        }

        #hero .position-absolute nav .btn-outline-secondary {
            border-color: var(--border);
            color: var(--muted);
        }

        /* ══════════════════════════════════════════════════
   ABOUT
══════════════════════════════════════════════════ */
        #about {
            padding: 6rem 0;
        }

        #about .content h2 {
            font-family: var(--font-head);
            font-size: clamp(1.5rem, 3vw, 2.2rem);
            color: var(--text);
            margin-bottom: 1rem;
        }

        #about .content h2 span {
            color: var(--accent);
        }

        #about .content p.fst-italic {
            color: var(--accent);
            border-left: 3px solid var(--accent);
            padding-left: 1rem;
            font-style: normal !important;
            font-size: .95rem;
        }

        #about .content ul {
            list-style: none;
            padding: 0;
        }

        #about .content ul li {
            display: flex;
            align-items: flex-start;
            gap: .5rem;
            padding: .35rem 0;
            color: var(--text);
            font-size: .88rem;
        }

        #about .content ul li i {
            color: var(--accent);
            font-size: .7rem;
            margin-top: .35rem;
        }

        #about .content ul li strong {
            color: var(--muted);
            min-width: 70px;
            font-weight: 500;
        }

        #about .col-lg-4 img {
            border-radius: var(--radius);
            border: 2px solid var(--border);
            box-shadow: 0 20px 60px rgba(0, 0, 0, .5);
            transition: transform var(--transition), box-shadow var(--transition);
        }

        #about .col-lg-4 img:hover {
            transform: scale(1.02);
            box-shadow: 0 24px 80px rgba(79, 142, 247, .18);
        }

        /* ══════════════════════════════════════════════════
   STATS
══════════════════════════════════════════════════ */
        #stats {
            padding: 4rem 0;
            background: var(--surface);
        }

        #stats .stats-item {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 2rem 1.5rem;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: border-color var(--transition), transform var(--transition);
        }

        #stats .stats-item::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, var(--accent-dim), transparent);
            opacity: 0;
            transition: opacity var(--transition);
        }

        #stats .stats-item:hover {
            border-color: var(--accent);
            transform: translateY(-4px);
        }

        #stats .stats-item:hover::before {
            opacity: 1;
        }

        #stats .stats-item i {
            font-size: 2.2rem;
            color: var(--accent);
            margin-bottom: .8rem;
            display: block;
        }

        #stats .stats-item .purecounter {
            font-family: var(--font-head);
            font-size: 3rem;
            font-weight: 700;
            color: var(--text);
            line-height: 1;
        }

        #stats .stats-item p {
            color: var(--muted);
            font-size: .82rem;
            margin-top: .5rem;
        }

        #stats .stats-item p strong {
            color: var(--text);
            display: block;
            font-size: .9rem;
            margin-bottom: .2rem;
        }

        /* ══════════════════════════════════════════════════
   SKILLS
══════════════════════════════════════════════════ */
        #skills {
            padding: 6rem 0;
            background: var(--bg-alt);
        }

        /* Hide old progress bars, show pills instead */
        #skills .skills-content {
            display: none !important;
        }

        .skills-pills {
            display: flex;
            flex-wrap: wrap;
            gap: .75rem;
            justify-content: center;
        }

        .skill-pill {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            padding: .55rem 1.3rem;
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 99px;
            color: var(--text);
            font-size: .85rem;
            font-weight: 500;
            transition: border-color var(--transition), color var(--transition),
                background var(--transition), transform var(--transition);
            cursor: default;
        }

        .skill-pill:hover {
            border-color: var(--accent);
            color: var(--accent);
            background: var(--accent-dim);
            transform: translateY(-2px);
        }

        .skill-pill .sp-pct {
            font-size: .72rem;
            color: var(--muted);
            border-left: 1px solid var(--border);
            padding-left: .5rem;
            transition: color var(--transition);
        }

        .skill-pill:hover .sp-pct {
            color: var(--accent);
            border-color: var(--accent);
        }

        /* ══════════════════════════════════════════════════
   RESUME (Timeline)
══════════════════════════════════════════════════ */
        #resume {
            padding: 6rem 0;
            background: var(--bg);
        }

        .resume-title {
            font-family: var(--font-head);
            font-size: 1.3rem;
            color: var();
            text-transform: uppercase;
            letter-spacing: .12em;
            margin-bottom: 1.5rem;
            margin-top: 2rem;
        }

        .resume-item {
            position: relative;
            padding: 1.5rem 1.5rem 1.5rem 2rem !important;
            border-left: 2px solid var(--border);
            margin-bottom: 1rem;
            background: var(--bg-card);
            border-radius: 0 var(--radius) var(--radius) 0;
            transition: border-left-color var(--transition);
        }

        .resume-item::before {
            content: '';
            position: absolute;
            left: -6px;
            top: 1.8rem;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: var(--bg-card);
            border: 2px solid var(--border);
            transition: background var(--transition), border-color var(--transition);
        }

        .resume-item:hover {
            border-left-color: var(--accent);
        }

        .resume-item:hover::before {
            background: var(--accent);
            border-color: var(--accent);
        }

        .resume-item h4 {
            font-family: var(--font-head);
            font-size: 1.05rem;
            color: white !important;
            margin: 0 0 .3rem;
        }

        .resume-item h5 {
            display: inline-block;
            font-size: .72rem;
            font-weight: 500;
            padding: .2rem .8rem;
            background: var(--accent-dim);
            border: 1px solid rgba(79, 142, 247, .25);
            color: var(--accent);
            border-radius: 99px;
            margin-bottom: .6rem;
        }

        .resume-item p {
            color: var(--muted);
            font-size: .88rem;
            margin: 0 0 .4rem;
        }

        .resume-item ul {
            padding-left: 1.1rem;
            margin: 0;
        }

        .resume-item ul li {
            color: var(--muted);
            font-size: .85rem;
            padding: .15rem 0;
        }

        .resume-item a {
            color: var(--accent);
        }

        /* ══════════════════════════════════════════════════
   PORTFOLIO
══════════════════════════════════════════════════ */
        #portfolio {
            padding: 6rem 0;
            background: var(--bg-alt);
        }

        .portfolio-item {
            border-radius: var(--radius);
            overflow: hidden;
        }

        .portfolio-content {
            position: relative;
            border-radius: var(--radius);
            overflow: hidden;
            background: var(--bg-card);
            border: 1px solid var(--border);
        }

        .portfolio-content img {
            width: 100%;
            display: block;
            transition: transform .5s ease;
        }

        .portfolio-content:hover img {
            transform: scale(1.06);
        }

        .portfolio-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(10, 10, 10, .96) 60%, transparent);
            padding: 2rem 1.2rem 1.2rem;
            transform: translateY(30px);
            opacity: 0;
            transition: opacity var(--transition), transform var(--transition);
        }

        .portfolio-content:hover .portfolio-info {
            opacity: 1;
            transform: translateY(0);
        }

        .portfolio-info h4 {
            font-family: var(--font-head);
            font-size: 1.1rem;
            color: var(--text);
            margin: 0 0 .3rem;
        }

        .portfolio-info p {
            color: var(--muted);
            font-size: .82rem;
            margin: 0 0 .8rem;
        }

        .portfolio-info a {
            color: var(--text);
            font-size: 1.1rem;
            margin-right: .5rem;
            transition: color var(--transition);
        }

        .portfolio-info a:hover {
            color: var(--accent);
        }

        /* ══════════════════════════════════════════════════
   SERVICES
══════════════════════════════════════════════════ */
        #services {
            padding: 6rem 0;
            background: var(--bg);
        }

        .service-item {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 2rem !important;
            gap: 1.2rem !important;
            align-items: flex-start !important;
            transition: border-color var(--transition), transform var(--transition), box-shadow var(--transition);
            position: relative;
            overflow: hidden;
        }

        .service-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 3px;
            height: 0;
            background: var(--accent);
            transition: height var(--transition);
        }

        .service-item:hover {
            border-color: var(--accent);
            transform: translateY(-4px);
            box-shadow: 0 16px 48px rgba(0, 0, 0, .4);
        }

        .service-item:hover::before {
            height: 100%;
        }

        .service-item .icon {
            width: 52px;
            height: 52px;
            min-width: 52px;
            background: var(--accent-dim);
            border: 1px solid rgba(79, 142, 247, .2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background var(--transition);
        }

        .service-item .icon i {
            font-size: 1.4rem;
            color: var(--accent);
        }

        .service-item:hover .icon {
            background: var(--accent);
        }

        .service-item:hover .icon i {
            color: #fff;
        }

        .service-item .title a {
            font-family: var(--font-head);
            font-size: 1.05rem;
            color: var(--text) !important;
            text-decoration: none !important;
            transition: color var(--transition);
        }

        .service-item:hover .title a {
            color: var(--accent) !important;
        }

        .service-item .description {
            color: var(--muted);
            font-size: .85rem;
            margin: 0;
        }

        /* ══════════════════════════════════════════════════
   CONTACT
══════════════════════════════════════════════════ */
        #contact {
            padding: 6rem 0;
            background: var(--bg-alt);
        }

        .info-wrap {
            background: var(--bg-card) !important;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 1.5rem;
        }

        .info-item {
            background: transparent !important;
            border: none !important;
            border-bottom: 1px solid var(--border);
            padding: 1rem 0 !important;
            gap: 1rem !important;
            align-items: flex-start !important;
            text-decoration: none !important;
        }

        .info-item:last-of-type {
            border-bottom: none;
        }

        .info-item i {
            color: var(--accent) !important;
            font-size: 1.5rem;
            margin-top: .1rem;
        }

        .info-item h3 {
            color: var(--text) !important;
            font-size: .9rem;
            margin: 0 0 .2rem;
        }

        .info-item p,
        .info-item>div {
            color: var(--muted) !important;
            font-size: .85rem;
            margin: 0;
        }

        .info-item iframe {
            border-radius: 8px;
            margin-top: 1rem;
            filter: invert(.9) hue-rotate(180deg);
            opacity: .75;
        }

        /* contact form */
        #contact form.form {
            background: var(--bg-card) !important;
            border: 1px solid var(--border) !important;
            border-radius: var(--radius) !important;
            box-shadow: 0 20px 60px rgba(0, 0, 0, .4) !important;
        }

        #contact label {
            color: var(--muted) !important;
            font-size: .82rem;
            letter-spacing: .05em;
        }

        #contact .form-control {
            background: var(--surface) !important;
            border: 1px solid var(--border) !important;
            color: var(--text) !important;
            border-radius: 8px !important;
            font-family: var(--font-body);
            transition: border-color var(--transition), box-shadow var(--transition);
        }

        #contact .form-control::placeholder {
            color: #555;
        }

        #contact .form-control:focus {
            border-color: var(--accent) !important;
            box-shadow: 0 0 0 3px rgba(79, 142, 247, .15) !important;
            background: var(--bg-card) !important;
        }

        #contact .btn-primary {
            background: var(--accent) !important;
            border-color: var(--accent) !important;
            border-radius: 99px !important;
            padding: .6rem 2.5rem !important;
            font-weight: 500;
            letter-spacing: .04em;
            transition: background var(--transition), transform var(--transition), box-shadow var(--transition);
        }

        #contact .btn-primary:hover {
            background: #3a7ae0 !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(79, 142, 247, .35) !important;
        }

        /* ══════════════════════════════════════════════════
   FOOTER
══════════════════════════════════════════════════ */
        #footer {
            background: #060606 !important;
            border-top: 1px solid var(--border);
            color: var(--muted);
            font-size: .82rem;
            text-align: center;
            padding: 1.5rem 0;
        }

        #footer .sitename {
            color: var(--accent);
        }

        #footer a {
            color: var(--accent);
        }

        /* ── Scroll to top ────────────────────────────────────────── */
        .scroll-top {
            background: var(--accent) !important;
            border-radius: 50% !important;
            box-shadow: 0 4px 16px rgba(79, 142, 247, .4) !important;
        }

        .scroll-top i {
            color: #fff;
        }

        /* ── Fade-in observer animation ──────────────────────────── */
        .reveal {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity .7s ease, transform .7s ease;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .reveal-left {
            opacity: 0;
            transform: translateX(-30px);
            transition: opacity .7s ease, transform .7s ease;
        }

        .reveal-left.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .reveal-right {
            opacity: 0;
            transform: translateX(30px);
            transition: opacity .7s ease, transform .7s ease;
        }

        .reveal-right.visible {
            opacity: 1;
            transform: translateX(0);
        }

        /* Staggered delay helpers */
        .delay-1 {
            transition-delay: .1s;
        }

        .delay-2 {
            transition-delay: .2s;
        }

        .delay-3 {
            transition-delay: .3s;
        }

        .delay-4 {
            transition-delay: .4s;
        }

        .delay-5 {
            transition-delay: .5s;
        }

        /* ── Responsive tweaks ────────────────────────────────────── */
        @media (max-width: 1200px) {
            #hero h2 {
                font-size: clamp(2.4rem, 7vw, 4rem);
            }
        }
    </style>
</head>
