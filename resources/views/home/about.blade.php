@extends('layout.layout')

@php
    $title = 'About';
    $subTitle='Home';
    $subTitle2='About';
@endphp

@section('content')
    <!-- About Section Start -->
    <section class="about-section fix section-padding">
        <div class="container">
            <div class="about-wrapper">
                <div class="row g-4 justify-content-between">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="about-image m-0">
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
                                I’m a passionate full stack web developer dedicated to crafting modern, efficient, and user-focused digital experiences. My approach blends clean code, thoughtful design, and a strong emphasis on performance to build websites and applications that not only look great—but also work seamlessly across all environments.
                            </p>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".7s">
                                Over the years, I’ve worked on various projects ranging from personal websites, landing pages, dashboards, and custom web applications. Each project has strengthened my ability to transform complex ideas into functional solutions that help individuals and businesses achieve their goals. I thrive on solving problems, optimizing workflows, and creating intuitive user experiences.
                            </p>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".6s">
                                Beyond the technical side, I value communication, reliability, and continuous growth. I consistently explore new technologies, refine my skills, and stay up-to-date with industry standards to ensure that every project I build is future-ready. My mission is simple: create digital solutions that are fast, functional, and meaningful.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Funfact Section Start -->
    <section class="funfact-section section-padding pt-0">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="funfact-box-items mt-0 style-2">
                        <h2><span class="count">10</span>+</h2>
                        <h6>Completed Web Projects</h6>
                        <p>
                            I’ve successfully delivered a wide range of custom web solutions, each built with precision, modern standards, and a focus on real-world results.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="funfact-box-items mt-0 style-2">
                        <h2><span class="count">3</span>+ Years</h2>
                        <h6>Professional Experience</h6>
                        <p>
                            With over three years of hands-on experience, I’ve built, improved, and scaled web applications for various businesses and use cases.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="funfact-box-items mt-0 style-2">
                        <h2><span class="count">98</span>%</h2>
                        <h6>Positive Client Feedback</h6>
                        <p>
                            Clients consistently appreciate my reliability, clear communication, and ability to turn complex requirements into efficient, user-friendly solutions.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="funfact-box-items mt-0 style-2">
                        <h2><span class="count">100</span>%</h2>
                        <h6>Commitment to Growth</h6>
                        <p>
                            I continuously improve my skills, adopt new technologies, and refine my workflow to deliver better, faster, and more impactful results.
                        </p>
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
@endsection