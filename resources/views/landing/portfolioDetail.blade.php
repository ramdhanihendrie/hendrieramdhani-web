@extends('layout.layout')

@php
    $title = $portfolio['title'];
    $subTitle='Home';
    $subTitle2='Portfolio';
@endphp

@section('content')
    <div class="container mt-5">
        <a href="{{ route('landing.portfolio') }}" class="back-btn">
            <i class="far fa-arrow-left"></i>
            <span>See More Portfolio</span>
        </a>
    </div>

    <!-- Project Details Section Start -->
    <section class="project-details-section fix section-padding pt-5">
        <div class="container">
            <div class="project-details-wrapper">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-6">
                        <div class="project-details-image">
                            <img src="{{ asset('build/assets/img/project/'. $portfolio['image']) }}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="row g-4 justify-content-between mt-3">
                    <div class="col-lg-8">
                        <div class="project-details-content">
                            <h2 class="mb-5">{{ $portfolio['title'] }}</h2>
                            {!! $portfolio['detail_content'] !!}
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-information">
                            <h4>Project Information's</h4>
                            <h6>Category :</h6>
                            <ul>
                                @foreach ($portfolio['category'] as $category)
                                    <li>
                                        {{ $category }}
                                    </li>
                                @endforeach
                            </ul>
                            <h6>Technology :</h6>
                            <div class="row g-4">
                                @foreach ($portfolio['tech'] as $tech)
                                <div class="col-3 d-flex justify-content-center">
                                    <img src="{{ asset('build/assets/img/home-5/skills/'. $tech['icon']) }}" alt="" data-bs-toggle="tooltip" data-bs-title="{{ $tech['title'] }}">
                                </div>
                                @endforeach
                            </div>
                            <div class="row">
                                @if ($portfolio['repository'] != "")
                                    <div class="col">
                                        <a href="{{ $portfolio['repository'] }}" class="btn btn-primary w-100 mt-3" target="_blank">View Repository</a>
                                    </div>
                                @endif
                                @if ($portfolio['url'] != "")
                                    <div class="col">
                                        <a href="{{ $portfolio['url'] }}" class="btn btn-primary w-100 mt-3" target="_blank">View Website</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection