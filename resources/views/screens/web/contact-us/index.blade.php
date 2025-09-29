@extends('layouts.web.master')
@section('content')
    <section class="inner-banner registration-banner" 
        style="background-image: url('{{ asset('/assets/web/images/hero-bg-02.png') }}');">
    <div class="banner-wrapper position-relative z-1">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-12 col-xl-12 text-center" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                    <h1 class="title-theme-gradient banner-title text-uppercase">Contact Us</h1>
                </div>
            </div> 
        </div>
    </div>
    </section>

    <section class="contact-page-sec pt-100" id="sec-1">
        <div class="container">
            <div class="row align-items-center row-gap-40">
                <div class="col-lg-6" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
                    <h2 class="hd-70 heading title-theme-gradient text-primary-theme mb-20">Get In Touch With Us</h2>
                    <ul class="contact-links">
                        <li class="d-flex align-items-center title-theme-gradient">
                            <span class="icon-wrapper title-theme-gradient">
                                <i class="fa-solid fa-phone"></i>
                            </span>
                            <a href="tel:+1234567891">+1234567891</a>
                        </li>
                        <li class="d-flex align-items-center title-theme-gradient">
                            <span class="icon-wrapper title-theme-gradient">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <a href="mailto:Info@submittal.com">Info@submittal.com</a>
                        </li>
                        <li class="d-flex align-items-center title-theme-gradient">
                            <span class="icon-wrapper title-theme-gradient">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <a href="#">
                                <span>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                            </a>
                        </li>
                    </ul>
                    <h3 class="heading hd-70 title-theme-gradient text-primary-theme mb-20">Connect With Us</h3>
                    <ul class="d-flex primary-list justify-content-between title-theme-gradient social-networks" style="max-width: 43rem;">
                        <li><a href="https://facebook.com/integritydevelopment" class="text-uppercase">FACEBOOK</a></li>
                        <li><a href="https://twitter.com/integritydev" class="text-uppercase">TWITTER</a></li>
                        <li><a href="https://linkedin.com/company/integritydevelopment" class="text-uppercase">LINKEDIN</a></li>
                    </ul>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
                   {{--  <div class="img-wrapper">
                        <img src="{{ asset('public/admin/assets/images/page') }}/{{ $home_page_data['contact_image'] }}" alt="contact">
                    </div> --}}
                    <div class="form-container">
                        <h2 class="heading-theme-gradient mb-20">GET <span>IN TOUCH</span></h2>
                        <form action="" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="label-field">Full Name</label>
                                <input type="text" class="input-field" id="name" name="name" placeholder="John Doe" required>
                                <div class="error-message">Please enter your full name</div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="label-field">Email Address</label>
                                <input type="email" class="input-field" id="email" name="email" placeholder="name@example.com" required>
                                <div class="error-message">Please enter a valid email address</div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="label-field">Phone Number</label>
                                <input type="text" class="input-field" id="phone" name="phone" placeholder="Phone Number" required>
                                <div class="error-message">Please enter your phone number</div>
                            </div> 
                            <div class="form-group">
                                <label for="message" class="label-field">Message</label>
                                <textarea class="input-field" id="message" name="message" rows="5" placeholder="How can we help you?" required></textarea>
                                <div class="error-message">Please enter your message</div>
                            </div>
                            <button type="submit" class="submit-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script> 
    $(document).ready(function() {
        // Form validation and enhancement
        const form = $('#regform');
        const inputs = form.find('.input-field');
        
        // Add focus effects
        inputs.on('focus', function() {
            $(this).parent().addClass('focused');
            $(this).removeClass('error');
            $(this).siblings('.error-message').hide();
        });
        
        inputs.on('blur', function() {
            $(this).parent().removeClass('focused');
            validateField($(this));
        });
        
        // Real-time validation
        inputs.on('input', function() {
            if ($(this).hasClass('error')) {
                validateField($(this));
            }
        });
        
        // Field validation function
        function validateField(field) {
            const value = field.val().trim();
            const type = field.attr('type');
            const errorMessage = field.siblings('.error-message');
            
            field.removeClass('error success');
            
            if (!value) {
                field.addClass('error');
                errorMessage.show();
                return false;
            }
            
            // Email validation
            if (type === 'email' && !isValidEmail(value)) {
                field.addClass('error');
                errorMessage.show();
                return false;
            }
            
            // Phone validation (basic)
            if (type === 'text' && field.attr('id') === 'phone' && !isValidPhone(value)) {
                field.addClass('error');
                errorMessage.show();
                return false;
            }
            
            field.addClass('success');
            errorMessage.hide();
            return true;
        }
        
        // Email validation
        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
        
        // Phone validation
        function isValidPhone(phone) {
            const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
            return phoneRegex.test(phone.replace(/[\s\-\(\)]/g, ''));
        }
        
        // Form submission
        $(document).on('submit', '#regform', function(e) {
            e.preventDefault();
            
            // Validate all fields
            let isValid = true;
            inputs.each(function() {
                if (!validateField($(this))) {
                    isValid = false;
                }
            });
            
            if (!isValid) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Validation Error',
                    text: 'Please fill in all required fields correctly.',
                });
                return;
            }
            
            // Show loading state
            const submitBtn = $(this).find('.submit-btn');
            const originalText = submitBtn.text();
            submitBtn.text('Sending...').prop('disabled', true);
            
            var formData = new FormData(this);

            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log('AJAX Success Response:', response);
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Thank you for contacting us! We will get back to you soon.',
                            showConfirmButton: false,
                            timer: 3000
                        });
                        $('#regform')[0].reset();
                        inputs.removeClass('success error');
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: response.message || 'Something went wrong! Please try again.',
                        });
                    }
                },
                error: function(xhr) {
                    console.log('AJAX Error XHR:', xhr);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong during submission. Please try again.',
                    });
                },
                complete: function() {
                    // Reset button state
                    submitBtn.text(originalText).prop('disabled', false);
                }
            });
        });
        
        // Add smooth animations
        inputs.on('focus', function() {
            $(this).addClass('focused');
        });
        
        inputs.on('blur', function() {
            $(this).removeClass('focused');
        });
    });
</script>
@endsection

