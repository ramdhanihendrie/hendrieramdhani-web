@extends('layout.layout')

@php
    $title = 'Services';
    $subTitle='Home';
    $subTitle2='Services';
@endphp

@section('content')
    <!-- Service Section Start -->
    <section class="service-section fix bg-cover section-padding pb-0">
        <div class="container">
            <div class="section-title text-center mb-5">
                <span class="sec-sub-text wow fadeInUp">Services</span>
                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                    Building powerful web solutions with precision and creativity
                </h2>
            </div>
            @foreach ($services as $key => $service)
                <div class="row g-4 service-items py-5 my-3 {{ $key != 0 ? "section-border" : "" }} {{ $key % 2 ? "flex-row-reverse" : "flex-row" }}">
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon">
                            <i class="{{ $service['icon'] }}"></i>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="content text-center {{ $key % 2 ? "text-lg-end" : "text-lg-start" }}">
                            <h3>{{ $service['name'] }}</h3>
                            <p>
                                {{ $service['long_description'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection