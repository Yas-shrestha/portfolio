@extends('Frontend.Layouts.main')
@use('Illuminate\Support\Str')
@section('section')
    <main class="main">

        {{-- ══════════════════════════════════════════════════
         HERO SECTION
    ══════════════════════════════════════════════════ --}}
        <section id="hero" class="hero section dark-background">

            <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in" class="">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h2>Yas Kumar <span>Shrestha</span></h2>
                <p>I'm <span class="typed" data-typed-items="Mentor, Developer, ">Developer</span><span
                        class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span
                        class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
            </div>

        </section><!-- /Hero Section -->

        <div class="container">

            {{-- ══════════════════════════════════════════════════
             ABOUT SECTION
        ══════════════════════════════════════════════════ --}}
            <section id="about" class="about section">

                <div class="container section-title reveal" data-aos="fade-up">
                    <h2>About</h2>
                    <p>I'm a Laravel-focused full-stack web developer who enjoys building practical, clean, and reliable
                        web applications. I work mainly with PHP, Laravel, MySQL, and Bootstrap, and I have hands-on
                        experience creating CRUD systems, authentication flows, and database-driven features.
                        <br>
                        I also teach full-stack web development, which has strengthened my fundamentals and helped me
                        explain complex concepts in simple terms. I'm continuously improving my backend skills, learning
                        better architecture and APIs, and focusing on writing maintainable, real-world code.
                    </p>
                </div>

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4 justify-content-center align-items-center">

                        <div class="col-lg-4 reveal-left">
                            <img src="assets/img/my-profile.jpeg" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-8 content reveal-right">
                            <h2>Mentor &amp; <span>Web Developer</span>.</h2>
                            <p class="fst-italic py-3">
                                Web developer and mentor with experience in Laravel and WHM server management.
                            </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 May
                                                2003</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                            <span>www.yas.com.np</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+977
                                                9806630977</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Nepal,
                                                Pokhara-19</span></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>22</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>BBS</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                            <span>yasshrestha1@gmail.com</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                            <span>Available</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="py-3">
                                I build and maintain practical web applications using Laravel, focusing on clean backend
                                logic and reliable server setups. Alongside development, I mentor students in full-stack
                                web development, helping them understand real-world workflows and best practices.
                            </p>
                        </div>

                    </div>
                </div>

            </section><!-- /About Section -->

            {{-- ══════════════════════════════════════════════════
             STATS SECTION
        ══════════════════════════════════════════════════ --}}
            <section id="stats" class="stats section">

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4">

                        <div class="col-lg-4 col-md-6 reveal delay-1">
                            <div class="stats-item">
                                <i class="bi bi-emoji-smile"></i>
                                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>Happy Clients</strong> <span>Personal Mentor for Project</span></p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-4 col-md-6 reveal delay-2">
                            <div class="stats-item">
                                <i class="bi bi-journal-richtext"></i>
                                <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>10+ Projects</strong> <span>Dynamic personal projects and project that was
                                        tweaked for new feature</span></p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-4 col-md-6 reveal delay-3">
                            <div class="stats-item">
                                <i class="bi bi-headset"></i>
                                <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>2+ year of Experience</strong><br>
                                    <span>2+ year of teaching and mentoring laravel intern experience</span>
                                </p>
                            </div>
                        </div><!-- End Stats Item -->

                    </div>
                </div>

            </section><!-- /Stats Section -->

            {{-- ══════════════════════════════════════════════════
             SKILLS SECTION
        ══════════════════════════════════════════════════ --}}
            <section id="skills" class="skills section light-background">

                <div class="container section-title reveal" data-aos="fade-up">
                    <h2>Skills</h2>
                    <p>Technologies I work with — from frontend to backend and beyond</p>
                </div>

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    {{-- Hidden original progress bars (required data preserved) --}}
                    <div class="row skills-content skills-animation" style="display:none!important">
                        <div class="col-lg-6">
                            <div class="progress"><span class="skill"><span>HTML</span> <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress"><span class="skill"><span>CSS</span> <i class="val">80%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress"><span class="skill"><span>JavaScript</span> <i
                                        class="val">60%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="progress"><span class="skill"><span>PHP</span> <i class="val">60%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress"><span class="skill"><span>WordPress/CMS</span> <i
                                        class="val">60%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress"><span class="skill"><span>Laravel</span> <i
                                        class="val">60%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Modern pill-style skill tags --}}
                    <div class="skills-pills reveal">
                        <span class="skill-pill"><i class="bi bi-filetype-html"></i> HTML <span
                                class="sp-pct">100%</span></span>
                        <span class="skill-pill"><i class="bi bi-filetype-css"></i> CSS <span
                                class="sp-pct">80%</span></span>
                        <span class="skill-pill"><i class="bi bi-filetype-js"></i> JavaScript <span
                                class="sp-pct">60%</span></span>
                        <span class="skill-pill"><i class="bi bi-filetype-php"></i> PHP <span
                                class="sp-pct">60%</span></span>
                        <span class="skill-pill"><i class="bi bi-database"></i> MySQL <span
                                class="sp-pct">65%</span></span>
                        <span class="skill-pill"><i class="bi bi-layers"></i> Laravel <span
                                class="sp-pct">60%</span></span>
                        <span class="skill-pill"><i class="bi bi-bootstrap"></i> Bootstrap <span
                                class="sp-pct">80%</span></span>
                        <span class="skill-pill"><i class="bi bi-wordpress"></i> WordPress/CMS <span
                                class="sp-pct">60%</span></span>
                        <span class="skill-pill"><i class="bi bi-server"></i> WHM / cPanel <span
                                class="sp-pct">55%</span></span>
                        <span class="skill-pill"><i class="bi bi-git"></i> Git / GitHub <span
                                class="sp-pct">55%</span></span>
                    </div>
                </div>

            </section><!-- /Skills Section -->

            {{-- ══════════════════════════════════════════════════
             RESUME SECTION
        ══════════════════════════════════════════════════ --}}
            <section id="resume" class="resume section">

                <div class="container section-title reveal" data-aos="fade-up">
                    <h2>Resume</h2>
                    <p>A concise overview of my professional journey, highlighting hands-on experience in web development,
                        mentoring, and problem-solving. This section outlines my skills, education, and practical work that
                        reflect my growth, adaptability, and commitment to building reliable, user-focused solutions.</p>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="resume-title">Summary</h3>
                            <div class="resume-item pb-0 reveal">
                                <h4>Yas Kumar Shrestha</h4>
                                <p><em>Innovative and detail-oriented Full Stack Web Developer with practical experience in
                                        mentoring and maintaining web applications. Currently working at Xdezo Technology
                                        since March 2024, supporting Laravel-based projects, handling hosting environments,
                                        and guiding interns through real-world development practices. Focused on continuous
                                        learning, problem-solving, and building a strong technical foundation.</em></p>
                                <ul>
                                    <li>Pokhara, Nepal</li>
                                    <li><a href="tel:+9779806630977">(+977) 9806630977</a></li>
                                    <li><a href="mailto:yasshrestha1@gmail.com">yasshrestha1@gmail.com</a></li>
                                </ul>
                            </div>

                            <h3 class="resume-title">Education</h3>
                            <div class="resume-item reveal delay-1">
                                <h4>Bachelor of Business Studies (BBS)</h4>
                                <h5>Ongoing</h5>
                                <p><em>Tribhuvan University, Nepal</em></p>
                                <p>
                                    Currently pursuing Bachelor of Business Studies, gaining foundational knowledge in
                                    management, finance, and organizational principles while building a parallel career in
                                    web
                                    development.
                                </p>
                            </div>
                            <div class="resume-item reveal delay-2">
                                <h4>Full Stack Web Development Training &amp; Internship</h4>
                                <h5>Nov 2022 - 2023</h5>
                                <p><em>Xdezo Technology</em></p>
                                <p>
                                    Completed hands-on training in full stack web development with a focus on PHP, Laravel,
                                    MySQL, and web fundamentals. Successfully completed a 3-6 month internship, developed
                                    multiple
                                    practice projects, and was recognized as a top-performing intern before being hired by
                                    the company.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="resume-title">Professional Experience</h3>
                            <div class="resume-item reveal delay-1">
                                <h4>Mentor &amp; Intern Supervisor / Full Stack Web Developer</h4>
                                <h5>March 2024 - Present</h5>
                                <p><em>Xdezo Technology, Nepal</em></p>
                                <ul>
                                    <li>Mentored and supervised interns in full stack web development, providing guidance on
                                        PHP, Laravel, and MySQL.</li>
                                    <li>Maintained and troubleshooted hosted Laravel applications, resolving configuration
                                        and runtime issues.</li>
                                    <li>Assisted with hosting management using WHM and cPanel, including site suspension,
                                        termination, and basic deployment tasks.</li>
                                    <li>Performed minor content updates and functional tweaks on WordPress-based launch
                                        websites.</li>
                                    <li>Provided technical support and oversight for ongoing projects to ensure stability
                                        and timely delivery.</li>
                                </ul>
                            </div>
                            <div class="resume-item reveal delay-2">
                                <h4>Intern - Full Stack Web Development</h4>
                                <h5>2022 - 2023</h5>
                                <p><em>Xdezo Technology, Nepal</em></p>
                                <ul>
                                    <li>Completed hands-on training in full stack web development using PHP, Laravel, MySQL,
                                        HTML, CSS, and JavaScript.</li>
                                    <li>Developed multiple practice projects during the internship period, strengthening
                                        backend and frontend fundamentals.</li>
                                    <li>Collaborated with team members to debug issues and improve application
                                        functionality.</li>
                                    <li>Recognized as a top-performing intern and subsequently hired by the organization.
                                    </li>
                                </ul>
                            </div>
                            <div class="resume-item reveal delay-3">
                                <h4>Project Oversight / Technical Support</h4>
                                <h5>2024</h5>
                                <p><em>Nepalese Trekking Website ( <a href="https://nepalesetrekking.com"
                                            target="_blank">nepalesetrekking.com</a> )</em></p>
                                <ul>
                                    <li>Provided project oversight for a live Laravel website developed by a team of interns
                                        using Laravel and Tailwind</li>
                                    <li>Reviewed progress, assisted in debugging issues, and ensured proper functionality
                                        before and after launch.</li>
                                    <li>Supported hosting setup and deployment to make the site publicly accessible.</li>
                                    <li>Acted as a point of technical guidance to ensure smooth collaboration and delivery.
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </section><!-- /Resume Section -->

            {{-- ══════════════════════════════════════════════════
             PORTFOLIO SECTION
        ══════════════════════════════════════════════════ --}}
            <section id="portfolio" class="portfolio section light-background">

                <div class="container section-title reveal" data-aos="fade-up">
                    <h2>Portfolio</h2>
                    <p>Below are Some of the Projects I have Personally Managed</p>
                </div>

                <div class="container">
                    <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                        data-sort="original-order">

                        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                            @foreach ($projects as $project)
                                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app reveal delay-1">
                                    <div class="portfolio-content h-100">
                                        @if ($project->images->first())
                                            <img src="{{ asset('storage/' . $project->images->first()->file->file_name) }}"
                                                class="img-fluid" alt="">
                                        @endif
                                        <div class="portfolio-info">
                                            <h4>{{ $project->name }}</h4>
                                            <p>{{ Str::words(strip_tags($project->description), 50, '...') }}</p>
                                            @if ($project->images->first())
                                                <a href="{{ asset('storage/' . $project->images->first()->file->file_name) }}"
                                                    title="{{ $project->name }}" data-gallery="portfolio-gallery-app"
                                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                            @endif
                                            <a href="/portfolio-detail/{{ $project->slug }}" title="More Details"
                                                class="details-link"><i class="bi bi-link-45deg"></i></a>
                                        </div>
                                    </div>
                                </div><!-- End Portfolio Item -->
                            @endforeach
                            <div>
                                {{ $projects->links() }}
                            </div>
                        </div><!-- End Portfolio Container -->

                    </div>
                </div>

            </section><!-- /Portfolio Section -->

            <section id="services" class="services section">

                <div class="container section-title reveal" data-aos="fade-up">
                    <h2>Services</h2>
                    <p>Here's what I can do for you — from building web applications to mentoring your team through
                        real-world development.</p>
                </div>

                <div class="container">
                    <div class="row gy-4">

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon flex-shrink-0"><i class="bi bi-code-slash"></i></div>
                            <div>
                                <h4 class="title text-white">Laravel Web Development</h4>
                                <p class="description">Building clean, reliable web applications using Laravel and PHP —
                                    from simple CRUD systems to multi-role platforms with authentication and database-driven
                                    features.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon flex-shrink-0"><i class="bi bi-server"></i></div>
                            <div>
                                <h4 class="title text-white">Server & Hosting Management</h4>
                                <p class="description">Setting up and managing hosting environments using WHM and cPanel —
                                    including deployment, site configuration, and ongoing maintenance.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon flex-shrink-0"><i class="bi bi-person-workspace"></i></div>
                            <div>
                                <h4 class="title text-white">Developer Mentoring</h4>
                                <p class="description">One-on-one or group mentoring for beginner to intermediate
                                    developers learning PHP, Laravel, and full stack web development through real project
                                    work.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon flex-shrink-0"><i class="bi bi-database"></i></div>
                            <div>
                                <h4 class="title text-white">Database Design & Management</h4>
                                <p class="description">Designing and managing MySQL databases — including relationships,
                                    migrations, and query optimization for Laravel applications.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon flex-shrink-0"><i class="bi bi-wordpress"></i></div>
                            <div>
                                <h4 class="title text-white">WordPress Development</h4>
                                <p class="description">Building and customizing WordPress sites — theme tweaks, plugin
                                    setup, content management, and basic maintenance for small businesses.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
                            <div class="icon flex-shrink-0"><i class="bi bi-bug"></i></div>
                            <div>
                                <h4 class="title text-white">Debugging & Technical Support</h4>
                                <p class="description">Troubleshooting and fixing issues in existing Laravel or PHP
                                    applications — runtime errors, configuration problems, and performance issues.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </section>
            <!-- /Services Section -->

            {{--
        <!-- Testimonials Section — kept commented as in original -->
        <section id="testimonials" class="testimonials section light-background">
            ...
        </section>
        --}}

            <section id="contact" class="contact section">

                <div class="container section-title reveal" data-aos="fade-up">
                    <h2>Contact</h2>
                    <p>Feel Free to contact me or Fill the form if you want to reach me</p>
                </div>

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4">

                        <div class="col-lg-5 reveal-left">
                            <div class="info-wrap">
                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                                    <div>
                                        <h3>Address</h3>
                                        <p>Pokhara-19 ,Lamachaur , Nepal</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <a href="tel:+9779806630977" class="info-item d-flex" data-aos="fade-up"
                                    data-aos-delay="300" aria-label="Call +977 9806630977">
                                    <i class="bi bi-telephone flex-shrink-0"></i>
                                    <div>
                                        <h3>Call Me</h3>
                                        +977 980 663 0977
                                    </div>
                                </a>

                                <a href="mailto:yasshrestha1@gmail.com" class="info-item d-flex" data-aos="fade-up"
                                    data-aos-delay="400">
                                    <i class="bi bi-envelope flex-shrink-0"></i>
                                    <div>
                                        <h3>Email Us</h3>
                                        yasshrestha1@gmail.com
                                    </div>
                                </a>

                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112488.41424431597!2d83.87421648336729!3d28.22969770585795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995937bbf0376ff%3A0xf6cf823b25802164!2sPokhara!5e0!3m2!1sen!2snp!4v1768838781139!5m2!1sen!2snp"
                                    frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>


                        <div class="col-lg-7 reveal-right">
                            <form action="{{ route('contact.store') }}" method="POST" class="form p-4 shadow"
                                data-aos="fade-up" data-aos-delay="200">
                                @csrf
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <label for="name-field" class="pb-2">Your Name</label>
                                        <input type="text" name="name" id="name-field"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email-field" class="pb-2">Your Email</label>
                                        <input type="email" name="email" id="email-field"
                                            class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="subject-field" class="pb-2">Subject</label>
                                        <input type="text" name="subject" id="subject-field"
                                            class="form-control @error('subject') is-invalid @enderror"
                                            value="{{ old('subject') }}" required>
                                        @error('subject')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="message-field" class="pb-2">Message</label>
                                        <textarea name="message" rows="10" id="message-field"
                                            class="form-control @error('message') is-invalid @enderror" required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary" id="submitBtn">Send
                                            Message</button>
                                    </div>

                                </div>
                            </form>
                        </div><!-- End Contact Form -->

                    </div>
                </div>
                {{-- Place this anywhere in your layout, before closing </body> --}}

                @if (session('toast_success') || session('toast_error') || $errors->any())

                    @php
                        $isSuccess = session('toast_success');
                        $message = session('toast_success') ?? session('toast_error');
                    @endphp

                    <div class="position-fixed top-0 end-0 p-3"
                        style="z-index: 1100; min-width: 320px; max-width: 420px;">
                        <div id="liveToast" class="toast hide border-0 shadow-sm" role="alert" aria-live="assertive"
                            aria-atomic="true" style="border-radius: 12px; overflow: hidden; width: 100%;">

                            <div class="d-flex align-items-center px-3 py-2"
                                style="background: {{ $isSuccess ? '#0f5132' : '#842029' }};">
                                <span class="me-2" style="font-size: 15px;">
                                    @if ($isSuccess)
                                        ✓
                                    @else
                                        ✗
                                    @endif
                                </span>
                                <strong class="text-white me-auto" style="font-size: 14px;">
                                    @if ($isSuccess)
                                        Success
                                    @else
                                        Error
                                    @endif
                                </strong>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"
                                    aria-label="Close" style="font-size: 11px;"></button>
                            </div>

                            <div class="toast-body py-3 px-3"
                                style="background: {{ $isSuccess ? '#d1e7dd' : '#f8d7da' }}; color: {{ $isSuccess ? '#0f5132' : '#842029' }}; font-size: 14px;">
                                @if ($message)
                                    {{ $message }}
                                @elseif($errors->any())
                                    <strong>Please fix the following:</strong>
                                    <ul class="mb-0 mt-1 ps-3" style="font-size: 13px;">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>

                        </div>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var toast = new bootstrap.Toast(document.getElementById('liveToast'), {
                                delay: 6000,
                                autohide: true
                            });
                            toast.show();
                        });
                    </script>

                @endif
            </section><!-- /Contact Section -->

        </div>
    </main>

    <script>
        const form = document.getElementById('contactForm');
        const msgBox = document.getElementById('formMessage');

        let hideTimer = null;

        function showMessage(type, message, errors = []) {
            if (hideTimer) clearTimeout(hideTimer);
            const isSuccess = type === 'success';
            msgBox.style.display = 'block';
            msgBox.className = 'mb-4 p-3 rounded ' + (isSuccess ? 'bg-success text-white' : 'bg-danger text-white');
            let html = `<div>${message}</div>`;
            if (errors.length) {
                html += `<ul class="mt-2 mb-0 ps-3">`;
                errors.forEach(err => {
                    html += `<li>${err}</li>`;
                });
                html += `</ul>`;
            }
            msgBox.innerHTML = html;
            hideTimer = setTimeout(() => {
                msgBox.style.display = 'none';
                msgBox.innerHTML = '';
            }, 5000);
        }

        function collectErrors(errorObj) {
            if (!errorObj || typeof errorObj !== 'object') return [];
            return Object.values(errorObj).flat().filter(Boolean);
        }

        ;
    </script>
@endsection
