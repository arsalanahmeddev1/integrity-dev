@extends('layouts.web.master')
{{-- @section('title', $page_title) --}}
@section('content')
    <section class="inner-banner about-us-banner"
        style="background-image: url('{{ asset('/assets/web/images/hero-bg-02.png') }}');">
        <div class="banner-wrapper position-relative z-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-xl-12 text-center" data-aos="fade-up" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <h1 class="title-theme-gradient banner-title text-uppercase">About Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Hero Section -->
    <section class="about-hero-section py-80" style="background: #0f0f0f;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
                    <div class="about-hero-content">
                        <h2 class="about-hero-title title-theme-gradient" style="font-size: 48px; font-weight: 700; margin-bottom: 30px;">
                           Supporting Electrical Contractors with Smarter Submittal Management
                        </h2>
                        <p class="about-hero-text" style="color: #bdbdbd; font-size: 18px; line-height: 1.7; margin-bottom: 30px;">
                            At Integrity Development, we understand the challenges electrical contractors face when managing complex submittal processes. Our platform streamlines document management, reduces administrative overhead, and ensures compliance with project specifications.
                        </p>
                        <p class="about-hero-text" style="color: #bdbdbd; font-size: 18px; line-height: 1.7; margin-bottom: 40px;">
                            We've built our solution from the ground up with electrical contractors in mind, incorporating industry best practices and real-world feedback to create a tool that truly enhances productivity and project success.
                        </p>
                        <div class="about-stats d-flex gap-4">
                            <div class="stat-item title-theme-gradient text-center">
                                <h3 style="font-size: 36px; font-weight: 700; margin-bottom: 10px;">500+</h3>
                                <p style="font-size: 14px; margin: 0;">Projects Completed</p>
                            </div>
                            <div class="stat-item title-theme-gradient text-center">
                                <h3 style="font-size: 36px; font-weight: 700; margin-bottom: 10px;">25+</h3>
                                <p style=" font-size: 14px; margin: 0;">Team Members</p>
                            </div>
                            <div class="stat-item title-theme-gradient text-center">
                                <h3 style="font-size: 36px; font-weight: 700; margin-bottom: 10px;">10+</h3>
                                <p style=" font-size: 14px; margin: 0;">Years Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
                    <div class="about-hero-image">
                        <img src="{{ asset('/assets/web/images/about.png') }}"
                            class="img-fluid rounded-3" style="box-shadow: 0 20px 40px rgba(0,0,0,0.3);" alt="About Integrity Development">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section py-80" style="background: #000;">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="services-title title-theme-gradient" style="font-size: 48px; font-weight: 700; margin-bottom: 20px;">
                        Our <span>Services</span>
                    </h2>
                    <p class="services-subtitle" style="color: #bdbdbd; font-size: 18px; max-width: 600px; margin: 0 auto;">
                        Comprehensive submittal management solutions designed specifically for electrical contractors to streamline project workflows and ensure compliance.
                    </p>
                </div>
            </div>
            
            <div class="row g-4 services-grid">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card title-theme-gradient">
                        <div class="service-icon title-theme-gradient">
                            <i class="fa-solid fa-file-pen" style="font-size: 32px;"></i>
                        </div>
                        <h3 class="service-card-title title-theme-gradient">Submittal Management</h3>
                        <div class="service-card-text title-theme-gradient">Complete document lifecycle management from creation to approval with full version control and status tracking.</div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card title-theme-gradient">
                        <div class="service-icon title-theme-gradient">
                            <i class="fa-solid fa-upload" style="font-size: 32px;"></i>
                        </div>
                        <h3 class="service-card-title title-theme-gradient">Specification Processing</h3>
                        <div class="service-card-text title-theme-gradient">Automated PDF processing and extraction of product specifications, manufacturer details, and division breakdowns.</div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card title-theme-gradient">
                        <div class="service-icon title-theme-gradient">
                            <i class="fa-solid fa-envelope" style="font-size: 32px;"></i>
                        </div>
                        <h3 class="service-card-title title-theme-gradient">Communication Hub</h3>
                        <div class="service-card-text title-theme-gradient">Integrated email system with automated notifications and reminder management for all stakeholders.</div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card title-theme-gradient">
                        <div class="service-icon title-theme-gradient">
                            <i class="fa-solid fa-chart-line" style="font-size: 32px;"></i>
                        </div>
                        <h3 class="service-card-title title-theme-gradient">Project Analytics</h3>
                        <div class="service-card-text title-theme-gradient">Real-time project tracking with comprehensive reporting and timeline management for better decision making.</div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card title-theme-gradient">
                        <div class="service-icon title-theme-gradient">
                            <i class="fa-solid fa-shield-check" style="font-size: 32px;"></i>
                        </div>
                        <h3 class="service-card-title title-theme-gradient">Compliance Management</h3>
                        <div class="service-card-text title-theme-gradient">Ensure all submittals meet project specifications and regulatory requirements with automated compliance checking.</div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-card title-theme-gradient">
                        <div class="service-icon title-theme-gradient">
                            <i class="fa-solid fa-headset" style="font-size: 32px;"></i>
                        </div>
                        <h3 class="service-card-title title-theme-gradient">24/7 Support</h3>
                        <div class="service-card-text title-theme-gradient">Dedicated customer support team available around the clock to assist with any questions or technical issues.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission-section py-80" style="background: #0f0f0f;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
                    <div class="mission-content">
                        <h2 class="mission-title title-theme-gradient" style="font-size: 48px; font-weight: 700; margin-bottom: 30px;">
                            Our Mission
                        </h2>
                        <p class="mission-text" style="color: #bdbdbd; font-size: 18px; line-height: 1.7; margin-bottom: 30px;">
                            To revolutionize how electrical contractors manage submittals by providing intuitive, efficient, and reliable technology solutions that streamline project workflows and ensure compliance.
                        </p>
                        <div class="mission-points">
                            <div class="mission-point">
                                <div class="point-number">1</div>
                                <div class="point-content">
                                    <h4 style="color: #e6e6e6; font-size: 20px; font-weight: 600; margin-bottom: 10px;">Simplify Complex Processes</h4>
                                    <p style="color: #bdbdbd; font-size: 16px; margin: 0;">Transform complicated submittal workflows into streamlined, automated processes that save time and reduce errors.</p>
                                </div>
                            </div>
                            <div class="mission-point">
                                <div class="point-number">2</div>
                                <div class="point-content">
                                    <h4 style="color: #e6e6e6; font-size: 20px; font-weight: 600; margin-bottom: 10px;">Ensure Project Success</h4>
                                    <p style="color: #bdbdbd; font-size: 16px; margin: 0;">Help electrical contractors deliver projects on time and within budget by maintaining clear communication and compliance.</p>
                                </div>
                            </div>
                            <div class="mission-point">
                                <div class="point-number">3</div>
                                <div class="point-content">
                                    <h4 style="color: #e6e6e6; font-size: 20px; font-weight: 600; margin-bottom: 10px;">Drive Industry Innovation</h4>
                                    <p style="color: #bdbdbd; font-size: 16px; margin: 0;">Continuously evolve our platform based on industry feedback to meet the changing needs of electrical contractors.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
                    <div class="mission-image">
                        <img src="{{ asset('/assets/web/images/about.png') }}"
                            class="img-fluid rounded-3" style="box-shadow: 0 20px 40px rgba(0,0,0,0.3);" alt="Our Mission">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section py-80" style="background: #000;">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="team-title title-theme-gradient" style="font-size: 48px; font-weight: 700; margin-bottom: 20px;">
                        Meet Our <span>Team</span>
                    </h2>
                    <p class="team-subtitle" style="color: #bdbdbd; font-size: 18px; max-width: 600px; margin: 0 auto;">
                        Our dedicated team of professionals brings together decades of experience in construction technology, electrical contracting, and software development.
                    </p>
                </div>
            </div>
            
            <div class="row g-4 team-grid">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="{{ asset('/assets/web/images/about-profile-01.png') }}"
                                class="img-fluid" alt="Sarah Johnson">
                        </div>
                        <div class="team-content">
                            <h3 class="team-name" style="font-size: 24px; font-weight: 700; margin-bottom: 10px;">Jane Doe
                            </h3>
                            <p class="team-designation" style=" font-size: 16px; font-weight: 600; margin-bottom: 15px;">Executive Director

                            </p>
                            <p class="team-description" style=" font-size: 14px; line-height: 1.6; margin: 0;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="{{ asset('/assets/web/images/about-profile-02.png') }}"
                                class="img-fluid" alt="Michael Chen">
                        </div>
                        <div class="team-content">
                            <h3 class="team-name" style="font-size: 24px; font-weight: 700; margin-bottom: 10px;">John Smith
                            </h3>
                            <p class="team-designation" style=" font-size: 16px; font-weight: 600; margin-bottom: 15px;">Director of Business Development

                            </p>
                            <p class="team-description" style=" font-size: 14px; line-height: 1.6; margin: 0;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="{{ asset('/assets/web/images/about-profile-03.png') }}"
                                class="img-fluid" alt="David Rodriguez">
                        </div>
                        <div class="team-content">
                            <h3 class="team-name" style="font-size: 24px; font-weight: 700; margin-bottom: 10px;">Mary Johnson</h3>
                            <p class="team-designation" style=" font-size: 16px; font-weight: 600; margin-bottom: 15px;">Community Engagement Manager
                            </p>
                            <p class="team-description" style=" font-size: 14px; line-height: 1.6; margin: 0;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-card">
                        <div class="team-image">
                            <img src="{{ asset('/assets/web/images/about-profile-04.png') }}"
                                class="img-fluid" alt="David Rodriguez">
                        </div>
                        <div class="team-content">
                            <h3 class="team-name" style="font-size: 24px; font-weight: 700; margin-bottom: 10px;">David Brown
                            </h3>
                            <p class="team-designation" style=" font-size: 16px; font-weight: 600; margin-bottom: 15px;">Financial Officer

                            </p>
                            <p class="team-description" style=" font-size: 14px; line-height: 1.6; margin: 0;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
