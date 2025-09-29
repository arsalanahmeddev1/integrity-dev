@extends('layouts.web.master')
{{-- @section('title', $page_title) --}}
@section('content')
<style>
    .hero-slide {
        width: 100%;
        height: 100vh;
        min-height: 600px;
        background-size: cover;
        background-position: bottom;
        background-repeat: no-repeat;
        position: relative;
    }
</style>

<section class="hero-banner position-relative">
    <div class="swiper hero-banner">
        <div class="swiper-wrapper"> 
            {{-- @foreach($homesliders as $slider) --}}
                <div class="swiper-slide">
                    <div class="hero-slide d-flex align-items-center position-relative"
                        style="background-image: url('{{ asset('assets/web/images/hero-bg-01.png') }}');">
                        <div class="position-absolute top-0 start-0 w-100 h-100 hero-overlay"></div>
                        <div class="container position-relative">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10 text-center text-white py-5" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                                    <h1 class="hero-title fw-bold lh-1 mb-3">
                                        {{-- @if($slider->heading) --}}
                                            {{-- <span class="d-block">{!! $slider->heading !!}</span> --}}
                                        {{-- @else --}}
                                            <span class="d-block">Simplify Submittals</span>
                                            <span class="d-block">Streamline Projects</span>
                                        {{-- @endif --}}
                                    </h1>
                                    {{-- @if($slider->description) --}}
                                        {{-- <p class="hero-subtext opacity-75 mb-4">{{ $slider->description }}</p> --}}
                                    {{-- @else --}}
                                        <p class="hero-subtext opacity-75 mb-4">Project Management Support built for Electrical Contractors.</p>
                                    {{-- @endif --}}
                                    <a href="{{ route('register') }}" class="btn-cta">Create Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- @endforeach --}}
        </div>    
    </div>
</section>

<section id="how-it-works" class="hiw-section py-80">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="hiw-title title-theme-gradient" data-aos="flip-left" data-aos-easing="linear"
                data-aos-duration="1500">How It Works</h2>
            </div>
        </div>
        <div class="row g-4 hiw-grid justify-content-center">
            <div class="col-6 col-md-3 text-center">
                <div class="hiw-item">
                    <div class="hiw-icon">
                        <img src="{{ asset('/assets/web/images/icons/hiw-01.png') }}" alt="Create Projects & Upload Specs">
                        <!-- <i class="fa-solid fa-pen"></i> -->
                    </div>
                    <div class="hiw-caption">Create Projects &<br/>Upload Specs</div>
                </div>
            </div>
            <div class="col-6 col-md-3 text-center">
                <div class="hiw-item">
                    <div class="hiw-icon">
                        <img src="{{ asset('/assets/web/images/icons/hiw-02.png') }}" alt="Auto‑Build Submittals from Specifications">
                        <!-- <i class="fa-regular fa-file-lines"></i> -->
                    </div>
                    <div class="hiw-caption">Auto‑Build Submittals<br/>from Specifications</div>
                </div>
            </div>
            <div class="col-6 col-md-3 text-center">
                <div class="hiw-item">
                    <div class="hiw-icon">
                        <img src="{{ asset('/assets/web/images/icons/hiw-03.png') }}" alt="Track Status: Pending, Approved, Revise">
                        <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                    </div>
                    <div class="hiw-caption">Track Status: Pending,<br/>Approved, Revise</div>
                </div>
            </div>
            <div class="col-6 col-md-3 text-center">
                <div class="hiw-item">
                    <div class="hiw-icon">
                        <img src="{{ asset('/assets/web/images/icons/hiw-04.png') }}" alt="Send Submittals & Email Vendors">
                        <!-- <i class="fa-regular fa-envelope"></i> -->
                    </div>
                    <div class="hiw-caption">Send Submittals &<br/>Email Vendors</div>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- key features -->
 <section id="key-features" class="kf-section py-80">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="kf-title title-theme-gradient" data-aos="flip-left" data-aos-easing="linear"
                data-aos-duration="1500">Key Features</h2>
            </div>
        </div>

        <div class="row g-4 kf-grid justify-content-center">
            <div class="col-12 col-md-6 col-lg-4" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
                <div class="kf-card h-100">
                    <h3 class="kf-card-title title-theme-gradient">
                        Submittal Management
                    </h3>
                    <p class="kf-card-text">Create, organize, and submit documents by spec section. Track every status from draft to approval, with full version control.</p>
                </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                <div class="kf-card h-100">
                    <h3 class="kf-card-title title-theme-gradient">
                        Specification Upload & Extraction
                    </h3>
                    <p class="kf-card-text">Upload project specification PDFs and let the system break out each section by division. Extract product types and manufacturer details automatically.</p>
                </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
                <div class="kf-card h-100">
                    <h3 class="kf-card-title title-theme-gradient">
                        Cover Page Generator
                    </h3>
                    <p class="kf-card-text">Easily create branded cover pages with your company logo and project info, or upload your own template for a consistent professional look.</p>
                </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
                <div class="kf-card h-100">
                    <h3 class="kf-card-title title-theme-gradient">
                        Email & Submittal Notifications
                    </h3>
                    <p class="kf-card-text">Send submittals directly through the platform. Set reminders to follow up with general contractors or vendors so nothing falls behind schedule.</p>
                </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                <div class="kf-card h-100">
                    <h3 class="kf-card-title title-theme-gradient">
                        Revise & Resubmit Workflow
                    </h3>
                    <p class="kf-card-text">When revisions are requested, extract reviewer comments, update the submittal, and resend with a new cover sheet — all in a few clicks.</p>
                </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
                <div class="kf-card h-100">
                    <h3 class="kf-card-title title-theme-gradient">
                        Approval Timeline Tracking
                    </h3>
                    <p class="kf-card-text">Track when submittals are sent, received, approved, or returned for revision. Maintain a clear history of actions and communication.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end key features -->

<section id="about-integrity" class="about-integrity-section py-80">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6">
                <h2 class="about-title mb-4 title-theme-gradient" data-aos="fade-down" data-aos-easing="linear"
                data-aos-duration="1500"> About Integrity Development </h2>
                <div class="about-subtext" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">Supporting Electrical Contractors with Smarter Submittal Management. You can add a construction‑themed background or image of your team/tools to make it visually engaging.
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <img src="{{ asset('/assets/web/images/about.png') }}" alt="Integrity Development" class="img-fluid" onerror="this.style.display='none'">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- testimonials -->
<section id="testimonials" class="testimonials-section py-80">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="testimonials-title title-theme-gradient" data-aos="flip-left" data-aos-easing="linear"
            data-aos-duration="1500">Testimonials</h2>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-12 col-lg-4" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
                <div class="tmn-card h-100">
                    <div class="tmn-header">
                        <div class="tmn-avatar">
                            <img src="{{ asset('/assets/web/images/tes-profile-01.png') }}" alt="Jason L.">
                        </div>
                        <div>
                            <div class="tmn-name">Jason L.</div>
                            <div class="tmn-role">Field Supervisor</div>
                        </div>
                    </div>
                    <p class="tmn-text">We used to lose time chasing down updated submittals. With this system, my field team has instant access to approved documents and revisions. Huge win for jobsite efficiency.</p>
                </div>
            </div>
            
            <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                <div class="tmn-card h-100">
                    <div class="tmn-header">
                        <div class="tmn-avatar">
                            <img src="{{ asset('/assets/web/images/tes-profile-02.png') }}" alt="Emily W.">
                        </div>
                        <div>
                            <div class="tmn-name">Emily W.</div>
                            <div class="tmn-role">Construction Planner</div>
                        </div>
                    </div>
                    <p class="tmn-text">Coordinating multiple trades used to be overwhelming. Now, I can keep everyone updated in real-time and ensure deadlines are met without constant follow-ups. It's streamlined my planning process immensely.</p>
                </div>
            </div>
            
            <div class="col-12 col-lg-4" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
                <div class="tmn-card h-100">
                    <div class="tmn-header">
                        <div class="tmn-avatar">
                            <img src="{{ asset('/assets/web/images/tes-profile-01.png') }}" alt="David K.">
                        </div>
                        <div>
                            <div class="tmn-name">David K.</div>
                            <div class="tmn-role">Procurement Specialist</div>
                        </div>
                    </div>
                    <p class="tmn-text">This platform has made sourcing and approving materials so much smoother. I can track every request and approval instantly, which means fewer delays and more cost savings for our projects.</p>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-center">
                <a href="{{ route('testimonials') }}" class="btn-ghost">View All</a>
            </div>
        </div>
    </div>
</section>
<!-- end testimonials -->
@endsection