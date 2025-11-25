@extends('layout.layout')

@php
    $breadcrumb = 'false';
    $specializations = ['Full Stack Development', 'API Development & Integration', 'Landing Page Development', 'Dashbord Development', 'UI/UX Implementation', 'Performance Optimization', 'Website Search Engine Optimization (SEO)', 'Web Deployment'];
    $services = [
        [
            'name' => 'Full Stack Web Development',
            'icon' => 'fas fa-code',
            'short_description' => 'I build complete, scalable web applications from backend to polished frontend interfaces.',
            'long_description' => 'I develop end-to-end web applications with clean architecture, optimized databases, responsive UI components, and maintainable code—ensuring your system is scalable, secure, and user-friendly.'
        ],
        [
            'name' => 'API Development & Integration',
            'icon' => 'fas fa-code-branch',
            'short_description' => 'I develop secure APIs and integrate third-party services to ensure seamless data communication.',
            'long_description' => 'I specialize in building well-structured, secure APIs and integrating external platforms or services, enabling smooth and reliable data flow across applications.'
        ],
        [
            'name' => 'Landing Page Development',
            'icon' => 'fas fa-layer-group',
            'short_description' => 'I create visually engaging landing pages optimized for performance and conversion.',
            'long_description' => 'I design and build high-impact landing pages focused on clarity, speed, SEO, and user engagement—tailored to effectively communicate your message and drive better results.'
        ],
        [
            'name' => 'Performance Optimization',
            'icon' => 'fas fa-tachometer-alt',
            'short_description' => 'I improve website speed and efficiency using best-practice optimization techniques.',
            'long_description' => 'I optimize website performance by refining code, improving asset delivery, implementing caching strategies, and ensuring fast load times that enhance user satisfaction and SEO rankings.'
        ]
    ];
    $portfolios = [
        [
            'name' => 'Laser Cutting Spesialis',
            'url' => 'https://lasercuttingspesialis.com/',
            'image' => 'LCS.png',
            'slug' => '#'
        ],
        [
            'name' => 'JAI Foundation',
            'url' => 'https://jaifoundation.or.id/',
            'image' => 'JAI.png',
            'slug' => '#'
        ],
        [
            'name' => 'GDSC UIN Jakarta',
            'url' => 'https://gdsc-uinjkt.github.io/',
            'image' => 'GDSC.png',
            'slug' => '#'
        ],
    ];
@endphp

@section('content')
    <!-- Hero Section Start -->
    <section class="hero-section hero-5">
        <div class="container">
            <div class="row g-4 align-items-center justify-content-between align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="hero-content">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">
                            <span>Hello, I’m</span>
                        </h2>
                        <h1 class="wow fadeInUp" data-wow-delay=".2s">
                            <span>Hendrie Ramdhani</span>
                        </h1>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">
                            <span>Full Stack Web Developer</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".5s">
                            Transforming ideas into elegant, high-performing web solutions.
                        </p>
                        <div class="button-items">
                            <div class="about-button wow fadeInUp" data-wow-delay=".3s">
                                <a href="#" class="theme-btn">
                                    Let’s Connect
                                    <i class="fas fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="hero-image">
                        <img src="{{ asset('build/assets/img/home-5/hero/01.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand Section Start -->
    <div class="brand-section-3 fix section-border section-border-2 pt-4 pb-4">
        <div class="container">
            <div class="brand-list">
                <div class="swiper brand-list-slider">
                    <div class="swiper-wrapper mt-slide-transtion">
                        @foreach ($specializations as $specialization)
                            <div class="swiper-slide mt-brand-slide-element ">
                                <div class="brand-list-items">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="me-3">
                                        <g clip-path="url(#clip0_67_3021)">
                                            <path d="M20 9H12.4L17.8 3.6L16.4 2.2L11 7.6V0H9V7.6L3.6 2.2L2.2 3.6L7.6 9H0V11H7.6L2.2 16.4L3.6 17.8L9 12.4V20H11V12.4L16.4 17.8L17.8 16.4L12.4 11H20V9Z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_67_302">
                                            <rect width="20" height="20" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    {{ $specialization }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section Start -->
    <section class="about-section fix section-padding">
        <div class="container">
            <div class="about-wrapper">
                <div class="row g-4 align-items-center justify-content-between">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="about-image">
                            <img src="{{ asset('build/assets/img/about/about.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <span class="sec-sub-text wow fadeInUp">About Me</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Turning Ideas Into Interactive Web Solutions
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                I’m a full stack web developer who focuses on creating modern, fast, and user-centered websites. Combining elegant design with clean and efficient code, I help brands and businesses stand out in the digital world.
                            </p>
                            <div class="about-counter-area">
                                <div class="row g-4">
                                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="about-counter-items">
                                            <h2><span class="count">10</span>+</h2>
                                            <p>Completed Web Projects</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="about-counter-items">
                                            <h2><span class="count">3</span>+ Years</h2>
                                            <p>Professional Experience</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="about-counter-items">
                                            <h2><span class="count">98</span>%</h2>
                                            <p>Positive Client Feedback</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="about-counter-items">
                                            <h2><span class="count">100</span>%</h2>
                                            <p>Commitment to Growth</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-button wow fadeInUp" data-wow-delay=".5s">
                                <a href="{{ route('landing.about') }}" class="theme-btn bg-2">
                                    Learn More
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Experience Section Start -->
    <section class="education-experience section-padding pt-0">
        <div class="container">
            <div class="section-title">
                <span class="sec-sub-text wow fadeInUp">Resume</span>
                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">Experience</h2>
            </div>
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="education-box-items">
                        <div class="icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="content">
                            <span>Mar 2023 - Present</span>
                            <h3>Mitra Programmer Web</h3>
                            <p>RPX - Jakarta Selatan</p>
                            <ul>
                                <li>Contributed to the development of visually appealing user interfaces to enhance the user experience.</li>
                                <li>Conducted thorough UI testing and debugging to deliver a polished and error-free user interface.</li>
                                <li>Responsible the end-to-end development of web applications, taking charge of both frontend and backend tasks to deliver fully functional and integrated solutions.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="education-box-items">
                        <div class="icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="content">
                            <span>Mar 2023 - Oct 2023</span>
                            <h3>Front-End Developer</h3>
                            <p>Viding - Tangerang</p>
                            <ul>
                                <li>Revamp user dashboard page to enhance its visual appeal, improve user experience, and optimize functionality.</li>
                                <li>Developed website using a mobile-first approach to ensure optimal display on various devices and screen sizes.</li>
                                <li>Translated UI/UX design prototypes and mockups into interactive and functional frontend code.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="education-box-items">
                        <div class="icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="content">
                            <span>May 2022 - Aug 2022</span>
                            <h3>Front-End Developer Intern</h3>
                            <p>Viding - Tangerang</p>
                            <ul>
                                <li>Responsible for developing website interface of user dashboard page.</li>
                                <li>Worked closely with UI/UX designers to achieve visually appealing and user-friendly interfaces.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="education-box-items">
                        <div class="icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="content">
                            <span>Jan 2021 - Mar 2021</span>
                            <h3>Web Developer Intern</h3>
                            <p>Yayasan Jaya Anak Indonesia - Tangerang Selatan</p>
                            <ul>
                                <li>Crafted a website for the company profile utilizing CMS WordPress, serving as a key information and communication platform for the foundation.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-title mt-3">
                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">Education</h2>
            </div>
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="education-box-items">
                        <div class="icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="content">
                            <h3>UIN Syarif Hidayatullah Jakarta</h3>
                            <p class="mb-0">Bachelor of Informatics Engineering - GPA 3.67/4.00</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section-title mt-3">
                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">Organization</h2>
            </div>
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="education-box-items">
                        <div class="icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="content">
                            <span>Sep 2021 - May 2022</span>
                            <h3>Google Developer Student Club - UIN Syarif Hidayatullah Jakarta</h3>
                            <p>Core Team as Web Developer and Facilitator</p>
                            <ul>
                                <li>Responsible to develop organization website.</li>
                                <li>Organize learning classes for members 1-2 times a week.</li>
                                <li>Design, create and provide knowledge material that will be given to members.</li>
                                <li>Organizing events, talk shows, seminars on technological developments.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="education-box-items">
                        <div class="icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="content">
                            <span>Dec 2020 - Jan 2022</span>
                            <h3>Himpunan Mahasiswa Teknik Informatika (HIMTI) - UIN Syarif Hidayatullah Jakarta</h3>
                            <p>Head of Professional Department</p>
                            <ul>
                                <li>Facilitate the development of skills and competencies of Informatics Engineering students in the IT field.</li>
                                <li>Encourage the creation of an active, successful, and competitive scientific climate for the Informatics Engineering environment of UIN Syarif Hidayatullah Jakarta.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="education-box-items">
                        <div class="icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="content">
                            <span>Apr 2019 - Nov 2020</span>
                            <h3>Himpunan Mahasiswa Teknik Informatika (HIMTI) - UIN Syarif Hidayatullah Jakarta</h3>
                            <p>Staff of Research and Development</p>
                            <ul>
                                <li>Development of competence in the IT field to prepare students for the professional level.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skill Section Start -->
    <section class="skill-section fix section-padding pt-0">
        <div class="section-title text-center">
            <span class="sec-sub-text wow fadeInUp">Skills</span>
            <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">Skills What I’m Experiences</h2>
        </div>
        <div class="skill-wrapper">
            <div class="skill-box-items wow fadeInUp" data-wow-delay=".5s">
                <img src="{{ asset('build/assets/img/home-5/skills/laravel.svg') }}" alt="img">
                <span>Laravel</span>
            </div>
            <div class="skill-box-items wow fadeInUp" data-wow-delay=".5s">
                <img src="{{ asset('build/assets/img/home-5/skills/nextjs.svg') }}" alt="img">
                <span>Next JS</span>
            </div>
            <div class="skill-box-items wow fadeInUp" data-wow-delay=".5s">
                <img src="{{ asset('build/assets/img/home-5/skills/react.svg') }}" alt="img">
                <span>React JS</span>
            </div>
            <div class="skill-box-items wow fadeInUp" data-wow-delay=".5s">
                <img src="{{ asset('build/assets/img/home-5/skills/wordpress.svg') }}" alt="img">
                <span>WordPress</span>
            </div>
            <div class="skill-box-items wow fadeInUp" data-wow-delay=".5s">
                <img src="{{ asset('build/assets/img/home-5/skills/jQuery.svg') }}" alt="img">
                <span>jQuery</span>
            </div>
            <div class="skill-box-items wow fadeInUp" data-wow-delay=".5s">
                <img src="{{ asset('build/assets/img/home-5/skills/tailwindcss.svg') }}" alt="img">
                <span>TailwindCSS</span>
            </div>
            <div class="skill-box-items wow fadeInUp" data-wow-delay=".5s">
                <img src="{{ asset('build/assets/img/home-5/skills/bootstrap.svg') }}" alt="img">
                <span>Bootstrap</span>
            </div>
            <div class="skill-box-items wow fadeInUp" data-wow-delay=".5s">
                <img src="{{ asset('build/assets/img/home-5/skills/sass.svg') }}" alt="img">
                <span>SASS</span>
            </div>
            <div class="skill-box-items wow fadeInUp" data-wow-delay=".5s">
                <img src="{{ asset('build/assets/img/home-5/skills/php.svg') }}" alt="img">
                <span>PHP</span>
            </div>
            <div class="skill-box-items wow fadeInUp" data-wow-delay=".5s">
                <img src="{{ asset('build/assets/img/home-5/skills/javascript.svg') }}" alt="img">
                <span>JavaScript</span>
            </div>
            <div class="skill-box-items wow fadeInUp" data-wow-delay=".5s">
                <img src="{{ asset('build/assets/img/home-5/skills/typescript.svg') }}" alt="img">
                <span>TypeScript</span>
            </div>
            <div class="skill-box-items wow fadeInUp" data-wow-delay=".5s">
                <img src="{{ asset('build/assets/img/home-5/skills/git.svg') }}" alt="img">
                <span>GIT</span>
            </div>
        </div>
    </section>

    <!-- Service Section Start -->
    <section class="service-section-4 fix section-border section-padding">
        <div class="container">
            <div class="section-title text-center">
                <span class="sec-sub-text wow fadeInUp">Service</span> <br>
                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                    Building powerful web solutions with precision and creativity
                </h2>
            </div>
            <div class="row g-3 mt-3">
                @foreach ($services as $service)
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="service-box-items">
                            <div class="icon">
                                <i class="{{ $service['icon'] }}"></i>
                            </div>
                            <h3>{{ $service['name'] }}</h3>
                            <p>
                                {{ $service['short_description'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Project Section Start -->
    <section class="project-section fix section-border section-padding">
        <div class="container">
            <div class="section-title text-center">
                <sub class="sec-sub-text">Portfolio</sub>
                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                    Real-world projects built with precision and attention to detail
                </h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="row justify-content-center">
                        @foreach ($portfolios as $portfolio)
                            <div class="col-md-4 wow fadeInUp" data-wow-delay=".3s">
                                <div class="project-card-items style-2">
                                    <div class="project-image">
                                        <img src="{{ asset('build/assets/img/project/'.$portfolio['image']) }}" alt="img">
                                    </div>
                                    <div class="project-content">
                                        <h3>
                                            <a href="{{ $portfolio['slug'] }}">
                                                {{ $portfolio['name'] }}
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="project-button text-center mt-5 wow fadeInUp" data-wow-delay=".3s">
                <a href="#" class="theme-btn">View More <i class="far fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Contact Section Section Start -->
    <section class="contact-section fix section-border section-padding">
        <div class="container">
            <div class="contact-wrapper style-2">
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="contact-content">
                            <div class="section-title">
                                <span class="sec-sub-text wow fadeInUp">Contact Me</span>
                                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                                    Have Any Project On Minds! <br>
                                    Let’s Work Together
                                </h2>
                                <div class="social-icon d-flex align-items-center">
                                    <a href="https://linkedin.com/in/hendrieramdhani/"><i class="fab fa-linkedin"></i></a>
                                    <a href="https://x.com/ramdhanihendrie/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://instagram.com/ramdhanihendrie/"><i class="fab fa-instagram"></i></a>
                                    <a href="https://github.com/ramdhanihendrie/"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-right">
                            <form action="#" id="contact-form" method="POST" class="contact-form-items mt-4 mt-md-0">
                                <div class="row g-4">
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="form-clt">
                                            <input type="text" name="name" id="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="form-clt">
                                            <input type="text" name="phone" id="phone" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="form-clt">
                                            <input type="text" name="email" id="email2" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="form-clt">
                                            <textarea name="message" id="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".7s">
                                        <button type="submit" class="theme-btn">
                                            Send a Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection