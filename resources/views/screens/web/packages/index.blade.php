@extends('layouts.web.master')
@section('title', 'Packages - Integrity Development')
@section('content')
<!-- Hero Banner Section -->
<section class="inner-banner about-us-banner"
    style="background-image: url('{{ asset('/assets/web/images/hero-bg-02.png') }}');">
    <div class="banner-wrapper position-relative z-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12 text-center" data-aos="fade-up" data-aos-easing="linear"
                    data-aos-duration="1500">
                    <h1 class="title-theme-gradient banner-title text-uppercase">Packages</h1>
                    <p class="banner-subtitle" style="color: #bdbdbd; font-size: 18px; margin-top: 20px; max-width: 600px; margin-left: auto; margin-right: auto;">
                        Choose the perfect plan for your electrical contracting business. All plans include our comprehensive submittal management platform.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="pricing-section py-80" style="background: #0f0f0f;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="pricing-title title-theme-gradient" style="font-size: 48px; font-weight: 700; margin-bottom: 20px;">
                    Choose Your <span>Plan</span>
                </h2>
                <p class="pricing-subtitle" style="color: #bdbdbd; font-size: 18px; max-width: 600px; margin: 0 auto 40px;">
                    Flexible pricing options designed to scale with your business needs
                </p>
                
                <!-- Pricing Toggle -->
                <div class="pricing-toggle-wrapper d-flex justify-content-center mb-5">
                    <div class="pricing-toggle" style="background: #1b1b1b; border-radius: 50px; padding: 5px; display: inline-flex; border: 1px solid #333;">
                        <button class="toggle-btn active" data-plan="monthly" style="background: linear-gradient(90deg, rgb(255 255 255) 0%, rgb(120 120 120) 100%); color: #000; border: none; padding: 12px 30px; border-radius: 50px; font-weight: 600; font-size: 16px; transition: all 0.3s ease;">
                            Monthly
                        </button>
                        <button class="toggle-btn" data-plan="yearly" style="background: transparent; color: #bdbdbd; border: none; padding: 12px 30px; border-radius: 50px; font-weight: 600; font-size: 16px; transition: all 0.3s ease;">
                            Yearly <span class="discount-badge" style="background: #ff6b6b; color: #fff; font-size: 12px; padding: 2px 8px; border-radius: 10px; margin-left: 8px;">Save $20</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pricing Cards -->
        <div class="row g-4 pricing-cards">
            <!-- Package 1 - Basic -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3 class="pricing-plan-title">Basic</h3>
                        <div class="pricing-price">
                            <span class="currency">$</span>
                            <span class="price monthly-price">10</span>
                            <span class="price yearly-price" style="display: none;">100</span>
                            <span class="period">/month</span>
                        </div>
                        <div class="yearly-savings" style="display: none;">
                            <span class="original-price">$120/year</span>
                            <span class="savings">Save $20</span>
                        </div>
                    </div>
                    <div class="pricing-features">
                        <ul class="feature-list">
                            <li class="feature-item">
                                <i class="fa-solid fa-check" style="color: #00d4aa; margin-right: 10px;"></i>
                                1 Admin Account
                            </li>
                            <li class="feature-item">
                                <i class="fa-solid fa-check" style="color: #00d4aa; margin-right: 10px;"></i>
                                2 Project Managers
                            </li>
                            {{-- <li class="feature-item">
                                <i class="fa-solid fa-check" style="color: #00d4aa; margin-right: 10px;"></i>
                                Basic Submittal Management
                            </li> --}}
                            {{-- <li class="feature-item">
                                <i class="fa-solid fa-check" style="color: #00d4aa; margin-right: 10px;"></i>
                                Email Support
                            </li> --}}
                            {{-- <li class="feature-item">
                                <i class="fa-solid fa-check" style="color: #00d4aa; margin-right: 10px;"></i>
                                Up to 10 Projects
                            </li> --}}
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <a href="#" class="pricing-btn">Get Started</a>
                    </div>
                </div>
            </div>

            <!-- Package 2 - Professional -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="pricing-card featured">
                    <div class="popular-badge">Most Popular</div>
                    <div class="pricing-header">
                        <h3 class="pricing-plan-title">Professional</h3>
                        <div class="pricing-price">
                            <span class="currency">$</span>
                            <span class="price monthly-price">20</span>
                            <span class="price yearly-price" style="display: none;">200</span>
                            <span class="period">/month</span>
                        </div>
                        <div class="yearly-savings" style="display: none;">
                            <span class="original-price">$240/year</span>
                            <span class="savings">Save $20</span>
                        </div>
                    </div>
                    <div class="pricing-features">
                        <ul class="feature-list">
                            <li class="feature-item">
                                <i class="fa-solid fa-check" style="color: #00d4aa; margin-right: 10px;"></i>
                                1 Admin Account
                            </li>
                            <li class="feature-item">
                                <i class="fa-solid fa-check" style="color: #00d4aa; margin-right: 10px;"></i>
                                3 Project Managers
                            </li>
                            <li class="feature-item">
                                <i class="fa-solid fa-check" style="color: #00d4aa; margin-right: 10px;"></i>
                                Advanced Submittal Management
                            </li>
                            {{-- <li class="feature-item">
                                <i class="fa-solid fa-check" style="color: #00d4aa; margin-right: 10px;"></i>
                                Priority Email Support
                            </li> --}}
                            {{-- <li class="feature-item">
                                <i class="fa-solid fa-check" style="color: #00d4aa; margin-right: 10px;"></i>
                                Up to 25 Projects
                            </li> --}}
                            <li class="feature-item">
                                <i class="fa-solid fa-check" style="color: #00d4aa; margin-right: 10px;"></i>
                                Project Analytics
                            </li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <a href="#" class="pricing-btn">Get Started</a>
                    </div>
                </div>
            </div>

            <!-- Package 3 - Enterprise -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3 class="pricing-plan-title">Enterprise</h3>
                        <div class="pricing-price">
                            <span class="currency">$</span>
                            <span class="price monthly-price">30</span>
                            <span class="price yearly-price" style="display: none;">300</span>
                            <span class="period">/month</span>
                        </div>
                        <div class="yearly-savings" style="display: none;">
                            <span class="original-price">$360/year</span>
                            <span class="savings">Save $20</span>
                        </div>
                    </div>
                    <div class="pricing-features">
                        <ul class="feature-list">
                            <li class="feature-item">
                                <i class="fa-solid fa-check" style="color: #00d4aa; margin-right: 10px;"></i>
                                1 Admin Account
                            </li>
                            <li class="feature-item">
                                <i class="fa-solid fa-check" style="color: #00d4aa; margin-right: 10px;"></i>
                                5 Project Managers
                            </li>
                            <li class="feature-item">
                                <i class="fa-solid fa-check" style="color: #00d4aa; margin-right: 10px;"></i>
                                Complete Submittal Management
                            </li>
                            {{-- <li class="feature-item">
                                <i class="fa-solid fa-check" style="color: #00d4aa; margin-right: 10px;"></i>
                                24/7 Phone & Email Support
                            </li> --}}
                            <li class="feature-item">
                                <i class="fa-solid fa-check" style="color: #00d4aa; margin-right: 10px;"></i>
                                Unlimited Projects
                            </li>
                            <li class="feature-item">
                                <i class="fa-solid fa-check" style="color: #00d4aa; margin-right: 10px;"></i>
                                Advanced Analytics & Reporting
                            </li>
                            {{-- <li class="feature-item">
                                <i class="fa-solid fa-check" style="color: #00d4aa; margin-right: 10px;"></i>
                                Custom Integrations
                            </li> --}}
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <a href="#" class="pricing-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Info Section -->
        {{-- <div class="row mt-5">
            <div class="col-12 text-center">
                <div class="pricing-info" style="background: #1b1b1b; border-radius: 18px; padding: 40px; border: 1px solid #333;">
                    <h3 class="info-title title-theme-gradient" style="font-size: 24px; font-weight: 700; margin-bottom: 20px;">
                        All Plans Include
                    </h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info-item">
                                <i class="fa-solid fa-shield-check" style="color: #00d4aa; font-size: 24px; margin-bottom: 15px;"></i>
                                <h4 style="color: #e6e6e6; font-size: 18px; font-weight: 600; margin-bottom: 10px;">Secure Platform</h4>
                                <p style="color: #bdbdbd; font-size: 14px; margin: 0;">Enterprise-grade security with data encryption</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-item">
                                <i class="fa-solid fa-cloud" style="color: #00d4aa; font-size: 24px; margin-bottom: 15px;"></i>
                                <h4 style="color: #e6e6e6; font-size: 18px; font-weight: 600; margin-bottom: 10px;">Cloud Storage</h4>
                                <p style="color: #bdbdbd; font-size: 14px; margin: 0;">Unlimited cloud storage for all your documents</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-item">
                                <i class="fa-solid fa-mobile-alt" style="color: #00d4aa; font-size: 24px; margin-bottom: 15px;"></i>
                                <h4 style="color: #e6e6e6; font-size: 18px; font-weight: 600; margin-bottom: 10px;">Mobile Access</h4>
                                <p style="color: #bdbdbd; font-size: 14px; margin: 0;">Access your projects from anywhere, anytime</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>

<!-- Custom CSS for Pricing Section -->
<style>
.pricing-card {
    background: #1b1b1b;
    border-radius: 18px;
    padding: 40px 30px;
    color: #cfcfcf;
    position: relative;
    border: 1px solid #333;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.pricing-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.3);
    border-color: #555;
}

.pricing-card.featured {
    border: 2px solid #f0f0f0;
    transform: scale(1.05);
}

.pricing-card.featured:hover {
    transform: scale(1.05) translateY(-10px);
}

.popular-badge {
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
    background: linear-gradient(90deg, rgb(255 255 255) 0%, rgb(120 120 120) 100%);
    color: #000;
    padding: 8px 20px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 600;
}

.pricing-header {
    text-align: center;
    margin-bottom: 30px;
}

.pricing-plan-title {
    font-size: 24px;
    font-weight: 700;
    color: #e6e6e6;
    margin-bottom: 15px;
}

.pricing-price {
    margin-bottom: 15px;
}

.currency {
    font-size: 24px;
    color: #bdbdbd;
    vertical-align: top;
}

.price {
    font-size: 48px;
    font-weight: 700;
    background: var(--primary-theme-gradient);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    line-height: 1;
}

.period {
    font-size: 16px;
    color: #bdbdbd;
}

.yearly-savings {
    text-align: center;
}

.original-price {
    text-decoration: line-through;
    color: #666;
    font-size: 16px;
    margin-right: 10px;
}

.savings {
    background: #ff6b6b;
    color: #fff;
    padding: 4px 12px;
    border-radius: 15px;
    font-size: 14px;
    font-weight: 600;
}

.pricing-features {
    flex-grow: 1;
    margin-bottom: 30px;
}

.feature-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.feature-item {
    padding: 12px 0;
    color: #bdbdbd;
    font-size: 16px;
    line-height: 1.5;
    display: flex;
    align-items: center;
}

.pricing-footer {
    text-align: center;
}

.pricing-btn {
    background: linear-gradient(90deg, rgb(255 255 255) 0%, rgb(120 120 120) 100%);
    color: #000;
    padding: 15px 40px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 16px;
    display: inline-block;
    transition: all 0.3s ease;
    border: none;
    width: 100%;
    text-align: center;
}

.pricing-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    color: #000;
}

.pricing-toggle-wrapper {
    margin-bottom: 40px;
}

.toggle-btn {
    cursor: pointer;
    transition: all 0.3s ease;
}

.toggle-btn.active {
    background: linear-gradient(90deg, rgb(255 255 255) 0%, rgb(120 120 120) 100%) !important;
    color: #000 !important;
}

.discount-badge {
    display: inline-block;
}

@media (max-width: 768px) {
    .pricing-card.featured {
        transform: none;
    }
    
    .pricing-card.featured:hover {
        transform: translateY(-10px);
    }
    
    .pricing-toggle {
        flex-direction: column;
        gap: 10px;
    }
    
    .toggle-btn {
        width: 100%;
    }
}
</style>

<!-- JavaScript for Pricing Toggle -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggleButtons = document.querySelectorAll('.toggle-btn');
    const monthlyPrices = document.querySelectorAll('.monthly-price');
    const yearlyPrices = document.querySelectorAll('.yearly-price');
    const yearlySavings = document.querySelectorAll('.yearly-savings');
    const periods = document.querySelectorAll('.period');

    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            toggleButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');

            const plan = this.getAttribute('data-plan');

            if (plan === 'yearly') {
                // Show yearly prices
                monthlyPrices.forEach(price => price.style.display = 'none');
                yearlyPrices.forEach(price => price.style.display = 'inline');
                yearlySavings.forEach(saving => saving.style.display = 'block');
                periods.forEach(period => period.textContent = '/year');
            } else {
                // Show monthly prices
                monthlyPrices.forEach(price => price.style.display = 'inline');
                yearlyPrices.forEach(price => price.style.display = 'none');
                yearlySavings.forEach(saving => saving.style.display = 'none');
                periods.forEach(period => period.textContent = '/month');
            }
        });
    });
});
</script>
@endsection