<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Tikvaah Tech Solutions</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <meta name="robots" content="noindex, nofollow">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/img/tikvahTechSolution.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/bootstrap/css/aos.css">
    <link rel="stylesheet" href="vendors/bootstrap/css/glightbox.min.css">
    <link rel="stylesheet" href="vendors/bootstrap/css/swiper-bundle.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        .error-message {
            transition: opacity 0.6s ease;
        }

        .error-message.fade-out {
            opacity: 0;
        }
    </style>

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <img src="assets/img/tikvahTechSolution.png" alt="">
                <h1 class="sitename">Tikvaah</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    {{-- <li><a href="#portfolio">Portfolio</a></li> --}}
                    <li><a href="#team">Team</a></li>
                    <li><a href="#join">Join Our Team</a></li>
                    <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Dropdown 1</a></li>
                    <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                      <ul>
                        <li><a href="#">Deep Dropdown 1</a></li>
                        <li><a href="#">Deep Dropdown 2</a></li>
                        <li><a href="#">Deep Dropdown 3</a></li>
                        <li><a href="#">Deep Dropdown 4</a></li>
                        <li><a href="#">Deep Dropdown 5</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Dropdown 2</a></li>
                    <li><a href="#">Dropdown 3</a></li>
                    <li><a href="#">Dropdown 4</a></li>
                  </ul>
                  </li> -->
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#login">Login</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="#user">Enroll Now</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                        data-aos="zoom-out">
                        <h2>Empowering Your Business with Smart Digital Solutions</h2>
                        <p>At Tikvaah Tech Solutions, our talented team of software developers, graphics designers, and
                            data analysts craft responsive websites, engaging visuals, and data-driven insights using
                            technologies and modern analytics tools.</p>
                        <div class="d-flex">
                            <a href="#about" class="btn-get-started">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->


        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About Us</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <p>
                            Tikvaah Tech Solutions is a forward-thinking ICT company based in Nigeria, dedicated to
                            delivering high-quality digital services that drive innovation and growth. We specialize in
                            software development, graphic design, data analysis, and ICT training, offering tailored
                            solutions that meet the unique needs of individuals, businesses, and institutions.
                        </p>
                        <p>
                            Our team is made up of passionate developers, creative graphic designers, and skilled data
                            analysts who work collaboratively to solve real-world problems using modern technologies
                            such as PHP, MySQL, Bootstrap, JavaScript, and data visualization tools.
                        </p>
                        <p>
                            Beyond building websites and applications, Tikvaah Tech Solutions is committed to empowering
                            the next generation of tech professionals through hands-on training and mentorship. Whether
                            you’re a startup, an educational institution, or an organization seeking digital
                            transformation, we are your trusted partner for smart and scalable solutions.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Duis aute irure dolor in reprehenderit in
                                    voluptate velit.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea
                                    commodo</span></li>
                        </ul>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <p><strong>Mission</strong>To empower individuals and businesses through innovative software
                            solutions, impactful graphic designs, and data-driven strategies. We are committed to
                            delivering top-notch ICT services and training that foster digital transformation, skill
                            development, and sustainable growth.</p>
                        <p><strong>Vision</strong>To become a leading tech hub in Africa, recognized for excellence in
                            software development, digital design, data analytics, and ICT education—shaping a future
                            where technology unlocks opportunities for all.</p>
                        <a href="#" class="read-more"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Services Section -->
        <section id="services" class="services section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>At Tikvaah Tech Solutions, we provide a wide range of digital and ICT services designed to meet the
                    needs of businesses, institutions, and individuals. Our services include:</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-activity icon"></i></div>
                            <h4><a href="" class="stretched-link">Software & Web Development</a></h4>
                            <p>We design and develop custom websites, web applications, and management systems using
                                modern tools.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                            <h4><a href="" class="stretched-link">Data Analysis & Reporting</a></h4>
                            <p>We help organizations make informed decisions through powerful data collection, analysis,
                                and visualization, using modern tools and techniques.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                            <h4><a href="" class="stretched-link">Graphic Design</a></h4>
                            <p>Our creative team delivers eye-catching designs for branding, marketing, and user
                                interfaces including logos, flyers, posters, business cards, and digital ads.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                            <h4><a href="" class="stretched-link">Tech Consultancy & Support</a></h4>
                            <p>From business automation to system integration, we provide expert advice and ongoing
                                technical support to help our clients stay ahead in the digital space.</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section -->


        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section dark-background">

            <img src="assets/img/bg/bg-8.webp" alt="">

            <div class="container">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-9 text-center text-xl-start">
                        <h3>Call To Action</h3>
                        <p>Whether you need a custom website, a smart business solution, professional designs, or
                            hands-on ICT training — Tikvaah Tech Solutions is here to help you succeed in the digital
                            world.</p>
                    </div>
                    <div class="col-xl-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>

            </div>

        </section><!-- /Call To Action Section -->

        <!-- Team Section -->
        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>At Tikvaah Tech Solutions, our strength lies in our passionate, creative, and tech-savvy team. Each
                    member brings unique skills and experience that power our mission to deliver excellence.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/img/ceo1.jpg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Hamza Ibrahim Danasabe</h4>
                                <span>Chief Executive Officer</span>
                                <span>Software Developer & Data Analyst</span>
                                <p>Founder of Tikvaah Tech Solutions. Full-stack developer with a passion for empowering
                                    others through tech education.</p>
                                <div class="social">
                                    <a href="https://x.com/hamxah23?t=f5qYuwX5Rlw3RQtRV6GlZQ&s=09"><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href="https://wa.me/238037856962"><i class="bi bi-whatsapp"></i> </a>
                                    <a href="https://t.me/Hamxah4u"><i class="bi bi-telegram"></i> </a>
                                    <a href="https://www.instagram.com/hamxah4u?igsh=Y3N3MmtrOWhnMGps"><i class="bi bi-instagram"></i></a>
                                    <a href=" https://www.linkedin.com/in/hamza-ibrahim-danasabe-b14010173"><i class="bi bi-linkedin"></i> </a>
                                    <a href="https://github.com/hamxah4u"><i class="bi bi-github"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/img/usman_tikvaah.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Usman Abubakar</h4>
                                <span>Senior Graphics Designer</span>
                                <p>Specialist in branding, digital illustrations, and UI design. Usman brings ideas to
                                    life through stunning visual designs that engage and inspire.</p>
                                <div class="social">
                                    <a href="https://x.com/ELDER128US?t=kxzGtDlDeeSNt77nfA8FUQ&s=09"><i class="bi bi-twitter-x"></i></a>
                                    <a href="https://www.facebook.com/share/1BR2ok1t69"><i class="bi bi-facebook"></i></a>
                                    <a href="https://wa.me/2349034898360"><i class="bi bi-whatsapp"></i> </a>
                                    <a href=""><i class="bi bi-telegram"></i> </a>
                                    <a href="https://www.instagram.com/usmanelder128?igsh=Yms2ZHY1dDN3c2Uz"><i class="bi bi-instagram"></i></a>
                                    <a href="https://www.tiktok.com/@usmanelder128?_t=ZS-90SkMlVT2t6&_r=1"><i class="bi bi-tiktok"></i> </a>
                                    <a href=""><i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/person/person-m-6.webp" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Muktar Ibrahim</h4>
                                <span>SIWES Coordinator</span>
                                <p>Muktar coordinates our Student Industrial Work Experience Scheme (SIWES), ensuring
                                    that students receive valuable hands-on training and mentorship in real-world ICT
                                    projects.</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/person/person-f-4.webp" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Ibrahim Sulaiman Ibrahim</h4>
                                <span>Graphic Designer (Trainee)</span>
                                <p>Ibrahim is a passionate design intern currently honing his skills in branding, layout
                                    design, and digital creativity. Under the guidance of our senior designers, he’s
                                    growing into a capable visual storyteller.</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section><!-- /Team Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>We’d love to hear from you! Whether you’re ready to start a project, need technical support, or want
                    to learn more about our training programs reach out to us today.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-5">

                        <div class="info-wrap">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Address</h3>
                                    <p>No. 10 Sheikh Dahiru Street Bauchi</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Call Us</h3>
                                    <p>+234 803 785 6962</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email Us</h3>
                                    <p><a href="#" class="__cf_email__"
                                            data-cfemail="abc2c5cdc4ebced3cac6dbc7ce85c8c4c6">Tikvaah</a></p>
                                </div>
                            </div><!-- End Info Item -->

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!4v1760197861322!6m8!1m7!1s4H_0FzaQpAwidk5O-cflvw!2m2!1d10.31410751337709!2d9.84429688718017!3f323.92015750344785!4f-0.8774349022515935!5f0.7820865974627469"
                                frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
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

        <!-- Login/enroll -->
        <section id="user" class="contact section">
            <div id="login">
                <div class="container section-title" data-aos="fade-up">
                    <h2>Users / Enrollment</h2>
                </div>

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4 justify-content-center">

                        <!-- Login Card (Left) -->
                        <div class="col-lg-5" id="">
                            <div class="card shadow-lg border-0 rounded-4">
                                <div class="card-header bg-info text-white text-center py-3">
                                    <h4 class="mb-0">Login</h4>
                                </div>

                                <div class="card-body">
                                    @if (session('error'))
                                        <x-alert-error type="danger" :message="session('error')" />
                                    @endif

                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="login-field" class="pb-2 fw-semibold">Email / Phone /
                                                Username</label>
                                            <input type="text" name="email" id="login-field"
                                                class="form-control" placeholder="Enter your login ID"
                                                value="{{ old('email') }}">
                                            <x-form-error name="email" :bag="'login'" />
                                        </div>

                                        <div class="mb-3">
                                            <label for="password-field" class="pb-2 fw-semibold">Password</label>
                                            <input type="password" name="password" id="user_password"
                                                class="form-control" placeholder="Enter your password">
                                            <x-form-error name="password" :bag="'login'" />
                                        </div>

                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-danger px-4">Login</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="card-footer text-center bg-light py-3">
                                    <small>Don’t have an account?
                                        <a href="#user" class="text-danger fw-semibold">Register</a>
                                    </small>
                                </div>
                            </div>
                        </div>

                        <!-- Register Card (Right) -->
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-4">
                                <div class="card-header bg-info text-white text-center py-3">
                                    <h4 class="mb-0">Register</h4>
                                </div>

                                <div class="card-body">
                                    @if (session('success'))
                                        <x-alert-error type="success" :message="session('success')" />
                                    @endif

                                    <form action="{{ route('store') }}" method="POST">
                                        @csrf
                                        <div class="row gy-4">

                                            <div class="col-md-6">
                                                <label for="name" class="pb-2 fw-semibold">Full Name</label>
                                                <input type="text" value="{{ old('name') }}" name="name"
                                                    id="name" class="form-control"
                                                    placeholder="Enter full name">
                                                <x-form-error name="name" :bag="'register'" />
                                            </div>

                                            <div class="col-md-6">
                                                <label for="email" class="pb-2 fw-semibold">Email</label>
                                                <input type="email" value="{{ old('email') }}"
                                                    class="form-control" name="email" id="email"
                                                    placeholder="Enter email">
                                                <x-form-error name="email" :bag="'register'" />
                                            </div>

                                            <div class="col-md-6">
                                                <label for="phone" class="pb-2 fw-semibold">Phone</label>
                                                <input type="text" value="{{ old('phone') }}"
                                                    class="form-control" name="phone" id="phone"
                                                    placeholder="Enter phone number">
                                                <x-form-error name="phone" :bag="'register'" />
                                            </div>

                                            <div class="col-md-6">
                                                <label for="gender" class="pb-2 fw-semibold">Gender</label>
                                                <select name="gender_id" id="gender_id" class="form-select">
                                                    <option value="">Select Gender</option>
                                                    @foreach ($genders as $gender)
                                                        <option value="{{ $gender->id }}"
                                                            {{ $gender->id == old('gender_id') ? 'selected' : '' }}>
                                                            {{ $gender->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <x-form-error name="gender_id" :bag="'register'" />
                                            </div>

                                            <div class="col-md-6">
                                                <label for="password" class="pb-2 fw-semibold">Password</label>
                                                <input type="password" class="form-control" name="password"
                                                    id="password" placeholder="Enter password">
                                                <x-form-error name="password" :bag="'register'" />
                                            </div>

                                            <div class="col-md-6">
                                                <label for="password_confirmation" class="pb-2 fw-semibold">Confirm
                                                    Password</label>
                                                <input type="password" class="form-control"
                                                    name="password_confirmation" id="password_confirmation"
                                                    placeholder="Re-enter password">
                                            </div>

                                            <div class="col-12 text-center mt-3">
                                                <button type="submit" class="btn btn-info px-4">Register</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div> <!-- End Row -->
                </div> <!-- End Container -->
            </div>
        </section>

    </main>

    <footer id="footer" class="footer">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">Tikvaah</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>No. 10 Sheikh Dahiru Street</p>
                        <p>Bauchi, Bauchi State</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+234 803 785 6962</span></p>
                        <p><strong>Email:</strong> <span>infor@tikvaah.org.ng</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Follow Us</h4>
                    <p>Stay connected and get the latest updates, tech tips, and behind-the-scenes from Tikvaah Tech
                        Solutions.</p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Tikvaah</strong> <span>All Rights Reserved</span>
            </p>
            {{-- <div class="credits">
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div> --}}
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    {{-- <div id="preloader"></div> --}}

    <!-- Vendor JS Files -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

    <script src="../../vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendors/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="../../vendors/php-email-form/validate.js"></script>
    <script src="vendors/bootstrap/js/validate.js"></script>


    <script src="../../vendors/aos/aos.js"></script>
    <script src="vendors/bootstrap/js/aos.js"></script>


    <script src="../../vendors/glightbox/js/glightbox.min.js"></script>
    <script src="vendors/bootstrap/js/glightbox.min.js"></script>


    <script src="../../vendors/swiper/swiper-bundle.min.js"></script>
    <script src="vendors/bootstrap/js/swiper-bundle.min.js"></script>


    <script src="../../vendors/waypoints/noframework.waypoints.js"></script>
    <script src="vendors/bootstrap/js/noframework.waypoints.js"></script>

    <script src="../../vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/bootstrap/js/imagesloaded.pkgd.min.js"></script>

    <script src="../../vendors/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendors/bootstrap/js/isotope.pkgd.min.js"></script>

    <script src="vendors/bootstrap/js/"></script>


    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/css/main.css"></script>

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"version":"2024.11.0","token":"68c5ca450bae485a842ff76066d69420","server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>

</body>

</html>
