@extends('layout.layout')

@php
    $title = 'Portfolio';
    $subTitle='Home';
    $subTitle2='Portfolio';
@endphp

@section('content')
    <!-- Project Section Start -->
    <section class="project-section fix section-padding">
        <div class="container">
            <div class="section-title text-center">
                <span class="sec-sub-text wow fadeInUp">Portfolio</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    Real-world projects built with precision and attention to detail
                </h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="row justify-content-center">
                        @foreach ($portfolios as $portfolio)
                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="project-card-items">
                                    <div class="project-image">
                                        <a href="{{ route('landing.portfolio.detail', ['slug' => $portfolio['slug']]) }}">
                                            <img src="{{ asset('build/assets/img/project/'. $portfolio['image']) }}" alt="img">
                                        </a>
                                    </div>
                                    <div class="project-content">
                                        <h3>
                                            <a href="{{ route('landing.portfolio.detail', ['slug' => $portfolio['slug']]) }}">
                                                {{ $portfolio['title'] }}
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection