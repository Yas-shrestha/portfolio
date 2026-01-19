@extends('Frontend.Layouts.main')

@section('section')
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in" class="">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h2>Yas Kumar Shrestha</h2>
                <p>I'm <span class="typed" data-typed-items="Mentor, Developer, ">Developer</span><span
                        class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span
                        class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
            </div>
            <div class="position-absolute z-3 top-0 end-0">
                @if (Route::has('login'))
                    <nav class="d-flex align-items-center justify-content-end gap-2 p-3">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-outline-secondary btn-sm">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary btn-sm text-decoration-none">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-secondary btn-sm">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </section><!-- /Hero Section -->

        <div class="container">
            <!-- About Section -->
            <section id="about" class="about section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>About</h2>
                    <p>I'm a Laravel-focused full-stack web developer who enjoys building practical, clean, and reliable
                        web applications. I work mainly with PHP, Laravel, MySQL, and Bootstrap, and I have hands-on
                        experience creating CRUD systems, authentication flows, and database-driven features.
                        <br>
                        I also teach full-stack web development, which has strengthened my fundamentals and helped me
                        explain complex concepts in simple terms. I'm continuously improving my backend skills, learning
                        better architecture and APIs, and focusing on writing maintainable, real-world code.
                    </p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4 justify-content-center">
                        <div class="col-lg-4">
                            <img src="assets/img/my-profile.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-8 content">
                            <h2>Mentor &amp; Web Developer.</h2>
                            <p class="fst-italic py-3">
                                Web developer and mentor with experience in Laravel and WHM server management. </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 May
                                                2003</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                            <span>www.OnProgress.com</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+977
                                                9806630977</span></li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                            <span>Nepal, Pokhara-19</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>22</span>
                                        </li>
                                        <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                            <span>BBS</span>
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

            <!-- Stats Section -->
            <section id="stats" class="stats section">

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">

                        <div class="col-lg-4 col-md-6">
                            <div class="stats-item">
                                <i class="bi bi-emoji-smile"></i>
                                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>Happy Clients</strong> <span>Personal Mentor for Project</span></p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-4 col-md-6">
                            <div class="stats-item">
                                <i class="bi bi-journal-richtext"></i>
                                <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>10+ Projects</strong> <span> Dynamic personal projects and project that was
                                        tweaked for new feature</span></p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-4 col-md-6">
                            <div class="stats-item">
                                <i class="bi bi-headset"></i>
                                <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p><strong>2+ year of Experience</strong> <br>
                                    <span>2+ year of teaching and mentoring laravel
                                        intern experience</span>
                                </p>
                            </div>
                        </div><!-- End Stats Item -->



                    </div>

                </div>

            </section><!-- /Stats Section -->

            <!-- Skills Section -->
            <section id="skills" class="skills section light-background">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Skills</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row skills-content skills-animation">

                        <div class="col-lg-6">

                            <div class="progress">
                                <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div><!-- End Skills Item -->

                            <div class="progress">
                                <span class="skill"><span>CSS</span> <i class="val">80%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div><!-- End Skills Item -->

                            <div class="progress">
                                <span class="skill"><span>JavaScript</span> <i class="val">60%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div><!-- End Skills Item -->

                        </div>

                        <div class="col-lg-6">

                            <div class="progress">
                                <span class="skill"><span>PHP</span> <i class="val">60%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div><!-- End Skills Item -->

                            <div class="progress">
                                <span class="skill"><span>WordPress/CMS</span> <i class="val">60%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div><!-- End Skills Item -->

                            <div class="progress">
                                <span class="skill"><span>Laravel</span> <i class="val">60%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div><!-- End Skills Item -->

                        </div>

                    </div>

                </div>

            </section><!-- /Skills Section -->

            <!-- Resume Section -->
            <section id="resume" class="resume section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Resume</h2>
                    <p>A concise overview of my professional journey, highlighting hands-on experience in web development,
                        mentoring, and problem-solving. This section outlines my skills, education, and practical work that
                        reflect my growth, adaptability, and commitment to building reliable, user-focused solutions.</p>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="row">

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="resume-title">Sumary</h3>

                            <div class="resume-item pb-0">
                                <h4>Yas Kumar Shrestha</h4>
                                <p><em>Innovative and detail-oriented Full Stack Web Developer with practical experience in
                                        mentoring and maintaining web applications. Currently working at Xdezo Technology
                                        since March 2024, supporting Laravel-based projects, handling hosting environments,
                                        and guiding interns through real-world development practices. Focused on continuous
                                        learning, problem-solving, and building a strong technical foundation.</em></p>
                                <ul>
                                    <li>Pokhara, Nepal</li>
                                    <li><a class="text-dark" href="tel:+9779806630977">(+977) 9806630977</a></li>
                                    <li><a class="text-dark"
                                            href="mailto:yasshrestha1@gmail.com">yasshrestha1@gmail.com</a></li>
                                </ul>
                            </div><!-- Edn Resume Item -->

                            <h3 class="resume-title">Education</h3>

                            <div class="resume-item">
                                <h4>Bachelor of Business Studies (BBS)</h4>
                                <h5>Ongoing</h5>
                                <p><em>Tribhuvan University, Nepal</em></p>
                                <p>
                                    Currently pursuing Bachelor of Business Studies, gaining foundational knowledge in
                                    management,
                                    finance, and organizational principles while building a parallel career in web
                                    development.
                                </p>
                            </div><!-- End Resume Item -->

                            <div class="resume-item">
                                <h4>Full Stack Web Development Training & Internship</h4>
                                <h5>Nov 2022 - 2023</h5>
                                <p><em>Xdezo Technology</em></p>
                                <p>
                                    Completed hands-on training in full stack web development with a focus on PHP, Laravel,
                                    MySQL,
                                    and web fundamentals. Successfully completed a 3-6 month internship, developed multiple
                                    practice projects, and was recognized as a top-performing intern before being hired by
                                    the company.
                                </p>
                            </div><!-- End Resume Item -->

                        </div>

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="resume-title">Professional Experience</h3>

                            <div class="resume-item">
                                <h4>Mentor & Intern Supervisor / Full Stack Web Developer</h4>
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
                            </div><!-- End Resume Item -->

                            <div class="resume-item">
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
                            </div><!-- End Resume Item -->

                            <div class="resume-item">
                                <h4>Project Oversight / Technical Support</h4>
                                <h5>2024</h5>
                                <p><em>Nepalese Trekking Website ( <a href="https://nepalesetrekking.com"
                                            target="_blank">nepalesetrekking.com</a>
                                        )</em></p>
                                <ul>
                                    <li>Provided project oversight for a live WordPress website developed by a team of
                                        interns.</li>
                                    <li>Reviewed progress, assisted in debugging issues, and ensured proper functionality
                                        before and after launch.</li>
                                    <li>Supported hosting setup and deployment to make the site publicly accessible.</li>
                                    <li>Acted as a point of technical guidance to ensure smooth collaboration and delivery.
                                    </li>
                                </ul>
                            </div><!-- End Resume Item -->
                        </div>


                    </div>

                </div>

            </section><!-- /Resume Section -->

            <!-- Portfolio Section -->
            <section id="portfolio" class="portfolio section light-background">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Portfolio</h2>
                    <p>Below are Some of the Projects I have Personally Managed</p>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                        data-sort="original-order">

                        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-product">Product</li>
                            <li data-filter=".filter-branding">Branding</li>
                            <li data-filter=".filter-books">Books</li>
                        </ul><!-- End Portfolio Filters -->

                        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                                <div class="portfolio-content h-100">
                                    <img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>App 1</h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                        <a href="assets/img/portfolio/app-1.jpg" title="App 1"
                                            data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                                <div class="portfolio-content h-100">
                                    <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>Product 1</h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                        <a href="assets/img/portfolio/product-1.jpg" title="Product 1"
                                            data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                                <div class="portfolio-content h-100">
                                    <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>Branding 1</h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                        <a href="assets/img/portfolio/branding-1.jpg" title="Branding 1"
                                            data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                                <div class="portfolio-content h-100">
                                    <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>Books 1</h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                        <a href="assets/img/portfolio/books-1.jpg" title="Branding 1"
                                            data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                                <div class="portfolio-content h-100">
                                    <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>App 2</h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                        <a href="assets/img/portfolio/app-2.jpg" title="App 2"
                                            data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                                <div class="portfolio-content h-100">
                                    <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>Product 2</h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                        <a href="assets/img/portfolio/product-2.jpg" title="Product 2"
                                            data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                                <div class="portfolio-content h-100">
                                    <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>Branding 2</h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                        <a href="assets/img/portfolio/branding-2.jpg" title="Branding 2"
                                            data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                                <div class="portfolio-content h-100">
                                    <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>Books 2</h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                        <a href="assets/img/portfolio/books-2.jpg" title="Branding 2"
                                            data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                                <div class="portfolio-content h-100">
                                    <img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>App 3</h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                        <a href="assets/img/portfolio/app-3.jpg" title="App 3"
                                            data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                                <div class="portfolio-content h-100">
                                    <img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>Product 3</h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                        <a href="assets/img/portfolio/product-3.jpg" title="Product 3"
                                            data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                                <div class="portfolio-content h-100">
                                    <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>Branding 3</h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                        <a href="assets/img/portfolio/branding-3.jpg" title="Branding 2"
                                            data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                                <div class="portfolio-content h-100">
                                    <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>Books 3</h4>
                                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                                        <a href="assets/img/portfolio/books-3.jpg" title="Branding 3"
                                            data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                                class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->

                        </div><!-- End Portfolio Container -->

                    </div>

                </div>

            </section><!-- /Portfolio Section -->

            <!-- Services Section -->
            <section id="services" class="services section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Services</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                        Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="row gy-4">

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                            <div>
                                <h4 class="title"><a href="service-details.html" class="stretched-link">Lorem
                                        Ipsum</a>
                                </h4>
                                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas
                                    molestias
                                    excepturi sint occaecati cupiditate non provident</p>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                            <div>
                                <h4 class="title"><a href="service-details.html" class="stretched-link">Dolor
                                        Sitema</a>
                                </h4>
                                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequat tarad limino ata</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                            <div>
                                <h4 class="title"><a href="service-details.html" class="stretched-link">Sed ut
                                        perspiciatis</a></h4>
                                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                            <div>
                                <h4 class="title"><a href="service-details.html" class="stretched-link">Magni
                                        Dolores</a></h4>
                                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                    qui
                                    officia deserunt mollit anim id est laborum</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                            <div>
                                <h4 class="title"><a href="service-details.html" class="stretched-link">Nemo
                                        Enim</a>
                                </h4>
                                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                    blanditiis praesentium voluptatum deleniti atque</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
                            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
                            <div>
                                <h4 class="title"><a href="service-details.html" class="stretched-link">Eiusmod
                                        Tempor</a></h4>
                                <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam
                                    libero
                                    tempore, cum soluta nobis est eligendi</p>
                            </div>
                        </div><!-- End Service Item -->

                    </div>

                </div>

            </section><!-- /Services Section -->

            <!-- Testimonials Section -->
            <section id="testimonials" class="testimonials section light-background">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Testimonials</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="swiper init-swiper">
                        <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                            suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                            Maecen aliquam, risus at semper.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Export tempor illum tamen malis malis eram quae irure esse labore quem
                                            cillum
                                            quid malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                            legam anim culpa.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                            quem veniam duis minim tempor labore quem eram duis noster aute amet eram
                                            fore
                                            quis sint minim.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export
                                            minim
                                            fugiat dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                            labore
                                            illum veniam.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam
                                            tempor
                                            noster veniam sunt culpa nulla illum cillum fugiat legam esse veniam culpa
                                            fore
                                            nisi cillum quid.</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                </div>
                            </div><!-- End testimonial item -->

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>

            </section><!-- /Testimonials Section -->

            <!-- Contact Section -->
            <section id="contact" class="contact section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Contact</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">

                        <div class="col-lg-5">

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

                        <div class="col-lg-7">
                            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <label for="name-field" class="pb-2">Your Name</label>
                                        <input type="text" name="name" id="name-field" class="form-control"
                                            required="">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email-field" class="pb-2">Your Email</label>
                                        <input type="email" class="form-control" name="email" id="email-field"
                                            required="">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="subject-field" class="pb-2">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject-field"
                                            required="">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="message-field" class="pb-2">Message</label>
                                        <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>

                                        <button type="submit">Send Message</button>
                                    </div>

                                </div>
                            </form>
                        </div><!-- End Contact Form -->

                    </div>

                </div>

            </section><!-- /Contact Section -->

        </div>
    </main>
@endsection
