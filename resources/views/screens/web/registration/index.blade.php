@extends('layouts.web.master')
{{-- @section('title', $page_title) --}}
@section('content')
    <!-- BANNER SEC -->
    <section class="inner-banner auth-banner"
        style="background-image: url('{{ asset('/assets/web/images/hero-bg-02.png') }}');">
        <div class="banner-wrapper position-relative z-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-xl-12 text-center" data-aos="fade-up" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <h1 class="title-theme-gradient banner-title text-uppercase">REGISTRATION</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="registration-sec auth-section pt-100 pb-100" id="sec-1">
        <div class="container">
            <h2 class="registration-title mb-20 text-center" data-aos="flip-left" data-aos-easing="linear"
                data-aos-duration="1500">Registration Now</h2>
            <h6 class="text-white fs-20 fw-700 mb-20 text-center" data-aos="fade-up" data-aos-easing="linear"
                data-aos-duration="1500">Thank you for your interest in Integrity Development!</h6>
            <p class="registration-subtext mb-60 text-center" data-aos="fade-up" data-aos-easing="linear"
                data-aos-duration="1500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic numquam accusantium pariatur cumque corrupti quas necessitatibus, ab debitis distinctio sunt exercitationem mollitia eum, autem voluptatem cupiditate dolore sequi. Unde, magnam?
            </p>
            <div class="row row-gap-40 justify-content-center">
                {{-- @foreach($packages as $package) --}}
                <div class="col-lg-4" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
                    <div class="card-lg text-center auth-card">
                        <h3 class="hd-20 text-white mb-30">Registration for Electrical contractors
                        </h3>
                        <div class="text-white mb-30 package_description">Electrical contractors
                        </div>
                        <h3 class="hd-20 text-white mb-30">$150.00 Year
                        </h3>
                        <a href="{{route('register')}}" 
                           class="btn-dark-pill pack mx-auto d-flex justify-content-center text-uppercase w-100"
                           style="font-size: 2rem;">ADD TO CART</a>
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
            {{-- <div class="text-center mt-4">
                <span>Already a user or?</span>
                <a href="{{ route('login') }}" class="btn btn-primary ms-2">
                    <i class="fa fa-sign-in-alt"></i> Login
                </a>
            </div> --}}
        </div>
    </section>
@endsection
