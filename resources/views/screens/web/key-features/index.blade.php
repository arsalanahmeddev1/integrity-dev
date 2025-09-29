@extends('layouts.web.master')
{{-- @section('title', $page_title) --}}
@section('content')
   <section class="inner-banner key-features-banner"
        style="background-image: url('{{ asset('/assets/web/images/hero-bg-02.png') }}');">
        <div class="banner-wrapper position-relative z-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-xl-12 text-center" data-aos="fade-up" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <h1 class="title-theme-gradient banner-title text-uppercase">Key Features</h1>
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
@endsection
