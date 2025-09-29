<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <meta name="robots" content="index, follow">
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/assets/web') }}/images/logo.png">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/assets/web') }}/images/logo.png">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/assets/web') }}/images/logo.png">
        {{-- <link rel="icon" href="{{ asset('public/admin/assets/images/page') }}/{{ $home_page_data['header_favicon'] }}"
            type="image/png" sizes="32x32"> --}}
        <!-- Stylesheets -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/assets/web') }}/libs/libs.css">
        <link rel="stylesheet" href="{{ asset('/assets/web') }}/css/utilities.css">
        <link rel="stylesheet" href="{{ asset('/assets/web') }}/css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body class="position-relative"> 
        @include('layouts.web.header')

        @yield('content')

        @include('layouts.web.footer')
        
        <!-- Logout Form -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="{{ asset('/assets/web') }}/libs/libs.js"></script>
        <script src="{{ asset('/assets/web') }}/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var swiper = new Swiper(".hero-banner .swiper", {
                    loop: true,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    effect: "fade",
                    fadeEffect: {
                        crossFade: true
                    },
                    speed: 1000,
                    grabCursor: true,
                });
                
                // Check for success message in session
                @if(Session::has('message'))
                    Swal.fire({
                        title: 'Thank You!',
                        text: '{{ Session::get("message") }}',
                        icon: 'success',
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#3085d6'
                    });
                @endif
                
                // Handle contact form submission
                const contactForm = document.getElementById('contactForm');
                if (contactForm) {
                    contactForm.addEventListener('submit', function(e) {
                        e.preventDefault();
                        
                        // Disable submit button to prevent multiple submissions
                        const submitBtn = document.getElementById('submitBtn');
                        submitBtn.disabled = true;
                        submitBtn.innerHTML = 'Sending...';
                        
                        // Get form data
                        const formData = new FormData(this);
                        
                        // Send AJAX request
                        fetch(this.action, {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            // Show success message
                            Swal.fire({
                                title: 'Thank You!',
                                text: 'Thank You for Contacting us',
                                icon: 'success',
                                confirmButtonText: 'OK',
                                confirmButtonColor: '#3085d6'
                            });
                            
                            // Reset form
                            contactForm.reset();
                        })
                        .catch(error => {
                            // Show error message
                            Swal.fire({
                                title: 'Error!',
                                text: 'Something went wrong. Please try again.',
                                icon: 'error',
                                confirmButtonText: 'OK',
                                confirmButtonColor: '#3085d6'
                            });
                        })
                        .finally(() => {
                            // Re-enable submit button
                            submitBtn.disabled = false;
                            submitBtn.innerHTML = 'Send Now';
                        });
                    });
                }
            });
        </script>
    </body>
</html>
