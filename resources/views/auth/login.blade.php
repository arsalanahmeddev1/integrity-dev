
{{-- @props(['messages'])
@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 dark:text-red-400 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif --}}

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
                        <h1 class="title-theme-gradient banner-title text-uppercase">Login Now</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="auth-section pt-b-80 pt-150 pb-150">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 login-content">
                    <div>
                        <h4 class="text-uppercase title title-login mb-20" data-aos="fade-down" data-aos-easing="linear"
                            data-aos-duration="1500"><span>WELCOME</span> TO</h4>
                        <h1 class="text-uppercase title-login mb-20" data-aos="fade-down" data-aos-easing="linear"
                            data-aos-duration="1500">Integrity Development
                        </h1>
                        <p class="hd-20 fw-medium login-subtext text-capitalize" data-aos="fade-up" data-aos-easing="linear"
                            data-aos-duration="1500">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna alion.</p>
                    </div>
                </div>
                <div class="col-md-6 form-bg card-body" data-aos="flip-left" data-aos-easing="linear"
                    data-aos-duration="1500">
                    <div class="auth-card">
                        <h1 class="login-head text-uppercase hd-42 heading mb-20"><span>LOGIN NOW</span></h1>
                        @if (Session::has('error'))
                            <p class="alert alert-danger" id="error-alert">{{ Session::get('error') }}</p>
                        @endif
                        @if (Session::has('message'))
                            <p class="alert alert-success" id="success-alert">{{ Session::get('message') }}</p>
                        @endif
                        {{-- <form method="POST" action="{{ route('user.authenticate') }}">
                            @csrf
                            <div class="form-group field-wrap">
                                <input class="input-field" name="email" value="{{ old('email') }}" type="email"
                                    placeholder="Email Address" style="border: 1px solid #fcfcfc;">
                                <span style="color: red">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="form-group field-wrap">
                                <input class="input-field" type="password" placeholder="Password" name="password" required
                                    autocomplete="current-password" style="border: 1px solid #fcfcfc;">
                                <span style="color: red">{{ $errors->first('password') }}</span>
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                    class="btn-dark-pill mx-auto d-flex justify-content-center text-capitalize w-100 mb-20"
                                    name="form1">Login</button>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="flexCheckDefault">
                                <label class="login-head fs-18" for="flexCheckDefault">
                                    Keep me logged in
                                </label>
                            </div>
                        </form> --}}
                        {{-- <div class="form-under-btn">
                            <div class="forgot"><a href="{{ route('forgot-password') }}">Forgot Password?</a></div>
                            <p>Don't have an account? <a href="{{ route('registration') }}">Register</a> </p>
                        </div> --}}

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group field-wrap">
                                <input name="email" class="input-field" type="email" placeholder="Email Email" required>
                            </div>
                            <div class="form-group field-wrap">
                                <input name="password" class="input-field" type="password" placeholder="Enter Password"
                                    required>
                                <span>
                                    @error('password') {{$message}} @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                    class="btn-dark-pill mx-auto d-flex justify-content-center text-capitalize w-100 mb-20">Log
                                    in</button>
                            </div>
                            <div class="form-check">
                                <input id="remember_me" name="remember" class="form-check-input" type="checkbox"
                                    name="remember">
                                <label for="remember_me" class="login-head mb-10 fs-18">
                                    Keep me logged in
                                </label>
                            </div>
                            <div class="form-under-btn">
                                <div class="forgot"><a href="{{ route('password.request') }}">Forgot Password?</a></div>
                                <p>Don't have an account? <a href="{{ route('registration') }}">Register</a> </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
    <!-- BANNER SEC -->
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var errorAlert = document.getElementById('error-alert');
        if (errorAlert) {
            setTimeout(function() {
                errorAlert.style.display = 'none';
            }, 10000); // 10 seconds
        }
    });
</script>
