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
                        <h1 class="title-theme-gradient banner-title text-uppercase">TESTIMONIALS</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                
                <div class="col-12 col-lg-4" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
                    <div class="tmn-card h-100">
                        <div class="tmn-header">
                            <div class="tmn-avatar">
                                <img src="{{ asset('/assets/web/images/tes-profile-02.png') }}" alt="Sarah M.">
                            </div>
                            <div>
                                <div class="tmn-name">Sarah M.</div>
                                <div class="tmn-role">Project Manager</div>
                            </div>
                        </div>
                        <p class="tmn-text">The automated workflow has reduced our submittal processing time by 60%. What used to take days now happens in hours. Our clients are impressed with the speed and accuracy.</p>
                    </div>
                </div>
                
                <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                    <div class="tmn-card h-100">
                        <div class="tmn-header">
                            <div class="tmn-avatar">
                                <img src="{{ asset('/assets/web/images/tes-profile-01.png') }}" alt="Robert T.">
                            </div>
                            <div>
                                <div class="tmn-name">Robert T.</div>
                                <div class="tmn-role">Electrical Contractor</div>
                            </div>
                        </div>
                        <p class="tmn-text">Finally, a system that understands electrical contracting. The specification extraction feature alone has saved us countless hours of manual work. Highly recommend to any contractor.</p>
                    </div>
                </div>
                
                <div class="col-12 col-lg-4" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
                    <div class="tmn-card h-100">
                        <div class="tmn-header">
                            <div class="tmn-avatar">
                                <img src="{{ asset('/assets/web/images/tes-profile-02.png') }}" alt="Lisa P.">
                            </div>
                            <div>
                                <div class="tmn-name">Lisa P.</div>
                                <div class="tmn-role">Quality Control Manager</div>
                            </div>
                        </div>
                        <p class="tmn-text">The compliance tracking feature ensures we never miss a requirement. The system automatically flags potential issues before they become problems. It's like having a quality control expert built into our workflow.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end testimonials -->
@endsection
