@extends('layout.layout')

@php
    $title = 'Contact';
    $subTitle='Home';
    $subTitle2='Contact';
@endphp

@section('content')
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