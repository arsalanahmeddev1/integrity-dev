@extends('layouts.web.master')
{{-- @section('title', $page_title) --}}
@section('content')
    <style>
        .py-50 {
            padding: 50px 0;
        }

        h2.fs-40 {
            font-size: 4rem !important;
        }

        @media (max-width: 767.98px) {
            .card {
                padding: 1.5rem !important;
            }
        }
    </style>
    <!-- BANNER SEC -->
    <section class="inner-banner auth-banner"
        style="background-image: url('{{ asset('/assets/web/images/hero-bg-02.png') }}');">
        <div class="banner-wrapper position-relative z-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-xl-12 text-center" data-aos="fade-up" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <h1 class="title-theme-gradient banner-title text-uppercase">Register Now</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-50 auth-section" id="signup-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-7">
                    <div class="signup-form auth-card shadow-lg border-0 rounded-4 p-4 p-md-5" data-aos="flip-left"
                        data-aos-easing="linear" data-aos-duration="1500">
                        <h2 class="mb-4 text-center heading text-uppercase fw-bold text-black fs-40"><span>Integrity
                                Development Registration</span>
                        </h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row g-3">
                                <!-- First Name -->
                                <div class="col-12 col-md-6">
                                    <input type="text" class="form-control input-field fs-16 @error('name') is-invalid @enderror" name="name"
                                        id="input1" placeholder="Name" value="{{ old('name') }}" required autofocus
                                        autocomplete="name">
                                    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="email" class="form-control input-field fs-16 @error('email') is-invalid @enderror" name="email" id="input3" placeholder="Email" value="{{ old('email') }}" required required autocomplete="username">
                                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <input type="password" class="form-control input-field fs-16 @error('password') is-invalid @enderror" name="password" id="input5" placeholder="Password" required autocomplete="new-password">
                                    @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12 col-md-6">
                                    <input type="password" class="form-control input-field fs-16 @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="input6" placeholder="Confirm Password" required autocomplete="new-password">
                                    @error('password_confirmation') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn-dark-pill w-100 py-3 fs-18 fw-bold text-uppercase" id="register-btn">
                                        <span id="register-spinner" class="spinner-border spinner-border-sm d-none me-2" role="status"></span>
                                        Register Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
