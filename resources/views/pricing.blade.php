@extends('partials.master')
@section('css')
@endsection

@section('content')
		<!-- Header Start -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light fixed-top horizontal-nav">
                <div class="container">
                   <a class="navbar-brand" href="index">
                        <img src="{{ URL::asset('assets/images/logo-dark.png') }}" class="img-fluid logo-dark" alt="logo">
                        <img src="{{ URL::asset('assets/images/logo-light.png') }}" class="img-fluid logo-light" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="ti-menu icon-align-right"></i>
                    </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav horizontal-menu">
                            <li class="scroll dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-bs-toggle="dropdown"><span>Landing</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index">Landing Page 1</a></li>
                                    <li><a href="index_2">Landing Page 2</a></li>
                                    <li><a href="index_3">Landing Page 3</a></li>
                                    <li><a href="index_4">Landing Page 4</a></li>
                                </ul>
                            </li>
                            <li class="scroll dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-bs-toggle="dropdown"><span>Pages</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="about">About</a></li>
                                    <li><a href="service">Service</a></li>
                                    <li class="dropdown">
                                        <a href="javaScript:void();" class="dropdown-toggle" data-bs-toggle="dropdown">Widget</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="pricing">Pricing</a></li>
                                            <li><a href="testimonial">Testimonial</a></li>
                                            <li><a href="faqs">FAQs</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact">Contact</a></li>
                                </ul>
                            </li> 
                            <li class="scroll dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-bs-toggle="dropdown"><span>Account</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="login">Login</a></li>
                                    <li><a href="ragister">Ragister</a></li>
                                    <li><a href="pwreset">Password Reset</a></li>
                                </ul>
                            </li>                           
                            
                        <button class="btn btn-sm btn-custom navbar-btn btn-rounded">Buy Now</button>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Header End -->

        <!-- Start All Cards -->
		<!-- Start Banner -->
		<section class="bg-page-head section">
			<div class="container">
				<div class="row">
                    <div class="col-lg-12">
                        <div class="pages_banner_content">
                            <h1 class="fw-bold">Pricing</h1>
                            <p>We offer great prices, premium products and quality service for your business.</p>
                            <div>
                                <a href="contact" class="btn btn-custom btn-sm">Contact US</a>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</section>
		<!-- Start Banner-->

        <!-- Start Price -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center section_title">
                            <h2><span></span>What’s our monthly pricing subscription</h2>
                            <p class="text-muted mx-auto mb-0 mt-4">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="price_box_fir mx-auto mt-3">
                            <div class="price_name text-center">
                                <h6 class="mb-0">Starter Plan</h6>
                            </div>
                            <div class="plan_price text-center">
                                <h1 class="mb-0">$29<sub class="text-custom font-weight-normal">/Per Month</sub></h1>
                            </div>
                            <div class="price_divider"></div>
                            <div class="price_features pb-2 text-center">
                                <p class="mb-0">Nulla metus metus vel tincidunt sed euismod nibh Quisque volutpat.</p>
                            </div>
                            <div class="text-center mt-5">
                                <a href="javascript:void(0)" class="btn btn-custom-light btn-hover btn-rounded">Join Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="price_box_fir active bg-custom rounded mx-auto mt-3">
                            <div class="lable">
                                <h6 class="mb-0 text-uppercase">Best &nbsp;Plan</h6>
                            </div>
                            <div class="price_name text-center">
                                <h6 class="mb-0">Enterprice Plan</h6>
                            </div>
                            <div class="plan_price text-center">
                                <h1 class="mb-0">$39<sub class="font-weight-normal">/Per Month</sub></h1>
                            </div>
                            <div class="price_divider"></div>
                            <div class="price_features pb-2 text-center">
                                <p class="mb-0">Nulla metus metus vel tincidunt sed euismod nibh Quisque volutpat.</p>
                            </div>
                            <div class="text-center mt-5">
                                <a href="javascript:void(0)" class="btn btn-white btn-hover btn-rounded">Join Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="price_box_fir mx-auto mt-3">
                            <div class="price_name text-center">
                                <h6 class="mb-0">Unlimited Plan</h6>
                            </div>
                            <div class="plan_price text-center">
                                <h1 class="mb-0">$49<sub class="text-custom font-weight-normal">/Per Month</sub></h1>
                            </div>
                            <div class="price_divider"></div>
                            <div class="price_features pb-2 text-center">
                                <p class="mb-0">Nulla metus metus vel tincidunt sed euismod nibh Quisque volutpat.</p>
                            </div>
                            <div class="text-center mt-5">
                                <a href="javascript:void(0)" class="btn btn-custom-light btn-hover btn-rounded">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Price -->

        <!-- Start Price -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center">
                            <h2><span></span>Choose the right plan for your Landik</h2>
                            <p class="text-muted mx-auto mb-0 mt-4">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="nav nav-pills price_nav_custom mt-3 d-block" id="pills-tab" role="tablist">
                            <div class="nav-item" role="presentation">
                                <a class="nav-link active" id="v-pills-starter-tab" data-bs-toggle="pill" href="#v-pills-starter" role="tab" aria-controls="v-pills-starter" aria-selected="true">
                                    <div class="d-flex justify-content-between">
                                        <div class="float-start responsive_none_float">
                                            <h5 class="fw-bold">Starter</h5>
                                            <p class="price_budges mb-0">20% Save</p>
                                        </div>
                                        <div class="float-end price_plan responsive_none_float">
                                            <h2 class="mb-0">$29<sub class="font-weight-normal">/Per Month</sub></h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="nav-item" role="presentation">
                                <a class="nav-link" id="v-pills-enterprice-tab" data-bs-toggle="pill" href="#v-pills-enterprice" role="tab" aria-controls="v-pills-enterprice" aria-selected="false">
                                    <div class="d-flex justify-content-between">
                                        <div class="float-start responsive_none_float">
                                            <h5 class="fw-bold">Enterprice</h5>
                                            <p class="price_budges mb-0">25% Save</p>
                                        </div>
                                        <div class="float-end price_plan responsive_none_float">
                                            <h2 class="mb-0">$59<sub class="font-weight-normal">/Per Month</sub></h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="nav-item" role="presentation">
                                <a class="nav-link mb-0" id="v-pills-ultd-tab" data-bs-toggle="pill" href="#v-pills-ultd" role="tab" aria-controls="v-pills-ultd" aria-selected="false">
                                    <div class="d-flex justify-content-between">
                                        <div class="float-start responsive_none_float">
                                            <h5 class="fw-bold">Unlimited</h5>
                                            <p class="price_budges mb-0">30% Save</p>
                                        </div>
                                        <div class="float-end price_plan responsive_none_float">
                                            <h2 class="mb-0">$89<sub class="font-weight-normal">/Per Month</sub></h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tab-content price_tab_detail mx-auto mt-3" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-starter" role="tabpanel" aria-labelledby="v-pills-starter-tab" tabindex="0">
                                <div class="price_bg_squre"></div>
                                <div class="price_features position-relative">
                                    <p class="mt-0"><i class="mdi mdi-check-circle text-custom me-1"></i> 2GB Cloud Storage</p>
                                    <p><i class="mdi mdi-check-circle text-custom me-1"></i> 100GB CDN Bandwidth</p>
                                    <p><i class="mdi mdi-check-circle text-custom me-1"></i> 98.88% Uptime Guarantee</p>
                                    <p class=mb-0><i class="mdi mdi-check-circle text-custom me-1"></i> Email Power Tools</p>
                                </div>
                                <div class="mt-5 text-end position-relative">
                                    <a href="javascript:void(0)" class="btn btn-custom btn-rounded">Get Started</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-enterprice" role="tabpanel" aria-labelledby="v-pills-enterprice-tab" tabindex="0">
                                <div class="price_bg_squre"></div>
                                <div class="price_features position-relative">
                                    <p class="mt-0"><i class="mdi mdi-check-circle text-custom me-1"></i> 20GB Cloud Storage</p>
                                    <p><i class="mdi mdi-check-circle text-custom me-1"></i> 1TB CDN Bandwidth</p>
                                    <p><i class="mdi mdi-check-circle text-custom me-1"></i> 99.95% Uptime Guarantee</p>
                                    <p class=mb-0><i class="mdi mdi-check-circle text-custom me-1"></i> Personal Account Manager</p>
                                </div>
                                <div class="mt-5 text-end position-relative">
                                    <a href="javascript:void(0)" class="btn btn-custom btn-rounded">Get Started</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-ultd" role="tabpanel" aria-labelledby="v-pills-ultd-tab" tabindex="0">    
                                <div class="price_bg_squre"></div>
                                <div class="price_features position-relative">
                                    <p class="mt-0"><i class="mdi mdi-check-circle text-custom me-1"></i> 100TB CDN Bandwidth</p>
                                    <p><i class="mdi mdi-check-circle text-custom me-1"></i> API/Formulas Support*</p>
                                    <p><i class="mdi mdi-check-circle text-custom me-1"></i> 99.99% Uptime Guarantee</p>
                                    <p class=mb-0><i class="mdi mdi-check-circle text-custom me-1"></i> Enterprise SLA</p>
                                </div>
                                <div class="mt-5 text-end position-relative">
                                    <a href="javascript:void(0)" class="btn btn-custom btn-rounded">Get Started</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">dcddc.</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Price -->

        <!-- Start Price -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center">
                            <h2><span></span>Simple Plan for everyone</h2>
                            <p class="text-muted mx-auto mt-4">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills justify-content-center price_plan_third_tab mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab"aria-controls="pills-home" aria-selected="true">Monthly</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Yearly</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="price_plan_third mt-3 py-5 px-4 text-center">
                                            <div class="plan_name">
                                                <h4 class="mb-0">Landik Starter </h4>
                                                <div class="plan_icon my-4">
                                                    <i class="mdi mdi-star text-custom"></i>
                                                </div>
                                                <p class="text-muted">Nulla metus metus vel tincidunt sed euismod nibh volutpat.</p>
                                            </div>
                                            <div class="plan_divider my-5"></div>
                                            <div class="plan_price">
                                                <h1 class="fw-bold mb-1">$19.99</h1>
                                                <p class="text-muted mb-0">Per Month</p>
                                            </div>
                                            <div class="price_btn mt-5">
                                                <a href="javascript:void(0)" class="btn btn-custom">Choose Plan</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="price_plan_third mt-3 py-5 px-4 text-center">
                                            <div class="plan_name">
                                                <h4>Landik Enterprice </h4>
                                                <div class="plan_icon my-4">
                                                    <i class="mdi mdi-star text-custom"></i>
                                                    <i class="mdi mdi-star text-custom"></i>
                                                </div>
                                                <p class="text-muted">Nulla metus metus vel tincidunt sed euismod nibh volutpat.</p>
                                            </div>
                                            <div class="plan_divider my-5"></div>
                                            <div class="plan_price">
                                                <h1 class="fw-bold mb-1">$29.99</h1>
                                                <p class="text-muted mb-0">Per Month</p>
                                            </div>
                                            <div class="price_btn mt-5">
                                                <a href="javascript:void(0)" class="btn btn-custom">Choose Plan</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="price_plan_third mt-3 py-5 px-4 text-center">
                                            <div class="plan_name">
                                                <h4>Landik Unlimited </h4>
                                                <div class="plan_icon my-4">
                                                    <i class="mdi mdi-star text-custom"></i>
                                                    <i class="mdi mdi-star text-custom"></i>
                                                    <i class="mdi mdi-star text-custom"></i>
                                                </div>
                                                <p class="text-muted">Nulla metus metus vel tincidunt sed euismod nibh volutpat.</p>
                                            </div>
                                            <div class="plan_divider my-5"></div>
                                            <div class="plan_price">
                                                <h1 class="fw-bold mb-1">$49.99</h1>
                                                <p class="text-muted mb-0">Per Month</p>
                                            </div>
                                            <div class="price_btn mt-5">
                                                <a href="javascript:void(0)" class="btn btn-custom">Choose Plan</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="price_plan_third mt-3 py-5 px-4 text-center">
                                            <div class="plan_name">
                                                <h4 class="mb-0">Landik Starter </h4>
                                                <div class="plan_icon my-4">
                                                    <i class="mdi mdi-star text-custom"></i>
                                                </div>
                                                <p class="text-muted">Nulla metus metus vel tincidunt sed euismod nibh volutpat.</p>
                                            </div>
                                            <div class="plan_divider my-5"></div>
                                            <div class="plan_price">
                                                <h1 class="fw-bold mb-1">$199.99</h1>
                                                <p class="text-muted mb-0">Per Year</p>
                                            </div>
                                            <div class="price_btn mt-5">
                                                <a href="javascript:void(0)" class="btn btn-custom">Choose Plan</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="price_plan_third mt-3 py-5 px-4 text-center">
                                            <div class="plan_name">
                                                <h4>Landik Enterprice </h4>
                                                <div class="plan_icon my-4">
                                                    <i class="mdi mdi-star text-custom"></i>
                                                    <i class="mdi mdi-star text-custom"></i>
                                                </div>
                                                <p class="text-muted">Nulla metus metus vel tincidunt sed euismod nibh volutpat.</p>
                                            </div>
                                            <div class="plan_divider my-5"></div>
                                            <div class="plan_price">
                                                <h1 class="fw-bold mb-1">$299.99</h1>
                                                <p class="text-muted mb-0">Per Year</p>
                                            </div>
                                            <div class="price_btn mt-5">
                                                <a href="javascript:void(0)" class="btn btn-custom">Choose Plan</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="price_plan_third mt-3 py-5 px-4 text-center">
                                            <div class="plan_name">
                                                <h4>Landik Unlimited </h4>
                                                <div class="plan_icon my-4">
                                                    <i class="mdi mdi-star text-custom"></i>
                                                    <i class="mdi mdi-star text-custom"></i>
                                                    <i class="mdi mdi-star text-custom"></i>
                                                </div>
                                                <p class="text-muted">Nulla metus metus vel tincidunt sed euismod nibh volutpat.</p>
                                            </div>
                                            <div class="plan_divider my-5"></div>
                                            <div class="plan_price">
                                                <h1 class="fw-bold mb-1">$499.99</h1>
                                                <p class="text-muted mb-0">Per Year</p>
                                            </div>
                                            <div class="price_btn mt-5">
                                                <a href="javascript:void(0)" class="btn btn-custom">Choose Plan</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Price -->
        
        <!-- Start Footer -->
        <footer class="footer_fir">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="foot_logo mt-3">
                            <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" class="img-fluid d-block text-md-center text-sm-center">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="subcribe_foot mt-3">
                            <form class="position-relative">
                                <input type="email" placeholder="Email" required>
                                <button type="submit" class="btn btn-custom">Subcribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="foot_divider mt-5"></div>
                <div class="row mt-3 align-items-center">
                    <div class="col-lg-6">
                        <div class="footer_menu mt-4">
                            <ul class="mb-0 list-inline">
                                <li class="list-inline-item me-0"><a href="javascript:void(0)">Demo</a></li>
                                <li class="list-inline-item me-0"><a href="javascript:void(0)">Pages</a></li>
                                <li class="list-inline-item me-0"><a href="javascript:void(0)">Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-lg-end">
                            <ul class="list-inline mb-0 fot_social mt-4">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="social-icon"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="social-icon"><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="social-icon"><i class="mdi mdi-reddit"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="text_copyright text-center mt-3">
                            <p class="mb-0">&copy; <script>document.write(new Date().getFullYear())</script> Landik. Design and coded by 
                                <a class="text-white" target="_blank" href="https://themeforest.net/user/themesboss">ThemesBoss.</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

       <!-- Dark and RTL Button -->
        <div class="position-fixed end-0 top-50 translate-middle-y rounded-start-2">
            <button type="button" class="btn dark-light-btn rounded-0 rounded-start-5 fs-5 d-flex align-items-center justify-content-center" id="dataTheme"><i class="mdi mdi-weather-night"></i> <i class="mdi mdi-weather-sunny"></i></button>
            <button type="button" class="btn rtl-ltr-btn rounded-0 rounded-start-5 fs-14 d-flex align-items-center justify-content-center text-cnter" id="theme_Rtl_Ltr"><span class="rtl">RTL</span><span class="ltr">LTR</span></button>
        </div>
        <!-- end all cards -->
        
        @section('scripts')
        <script src="assets/js/custom.js"></script>
        @endsection