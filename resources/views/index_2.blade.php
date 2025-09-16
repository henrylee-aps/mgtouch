@extends('partials.master')
@section('css')
<link rel="stylesheet" href="assets/css/swiper.bundle.min.css" />
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
                                <li><a href="index_5">Landing Page 5</a></li>
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

    <!-- start all cards -->
    <!-- Start Home -->
    <section class="home_sec section">
        <div class="home_sec_layer"></div>
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-lg-7">
                    <div class="home_sec_content mt-3 text-white">
                        <p class="fst-italic first_small_lable text-custom">Since 1911</p>
                        <h1 class="mt-3">Smart and effective solutions for businesses.</h1>
                        <p class="home_small_title mt-4">Make a website you’ll be proud of.</p>
                        <div class="mt-5">
                            <a href="javascript:void(0)" class="btn btn-custom border-radius-none">See How It Works</a>
                        </div>
                        <div class="home_divider"></div>
                        <div class="home_top_brand_title">
                            <div class="align-items-center d-lg-inline-block d-sm-block">
                                <span class="text-white-50 text-capitalize">Trusted partners:</span>
                            </div>
                            <a href="javascript:void(0)">
                                <img src="{{ URL::asset('assets/images/clients/6.png') }}" alt="" class="img-fluid">
                            </a>
                            <a href="javascript:void(0)">
                                <img src="{{ URL::asset('assets/images/clients/7.png') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="home_sec_side_form mt-3 mx-auto rounded">
                        <h2 class="text-center">Get 30 days FREE Trial</h2>
                        <p class="text-muted text-center mt-3 mb-0">Landik offers functional contact forms that are fully customizable. Try it yourself!</p>
                        <form class="mt-5">
                            <input type="text" id="exampleInputName1" class="form-control mb-3 trial-input" placeholder="First Name" required>
                            <input type="email" id="exampleInputEmail1" class="form-control mb-3 trial-input" placeholder="Email Id" required>
                            <input type="text" id="text" class="form-control mb-3 trial-input" placeholder="Mobile Number" required>
                            <button class="btn btn-custom border-radius-none w-100 mt-3">Start Trial</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Home -->

    <!-- Start Features -->
    <section class="section bg_sec_features">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="service_side_services_sec mt-3">
                        <div class="d-flex align-items-center">
                            <div class="ser_img_icon me-3">
                                <img src="{{ URL::asset('assets/images/icon/sketch.svg') }}" class="" alt="...">
                            </div>
                            <h5 class="fw-bold mb-0">Quality Customer Service</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service_side_services_sec mt-3">
                        <div class="d-flex align-items-center">
                            <div class="ser_img_icon me-3">
                                <img src="{{ URL::asset('assets/images/icon/bulb.svg') }}" class="" alt="...">
                            </div>
                            <h5 class="fw-bold mb-0">Dedicated Support</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service_side_services_sec mt-3">
                        <div class="d-flex align-items-center">
                            <div class="ser_img_icon me-3">
                                <img src="{{ URL::asset('assets/images/icon/lnterselect.svg') }}" class="" alt="...">
                            </div>
                            <h5 class="fw-bold mb-0">We're a True Partner</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center section_title">
                        <h2><span></span>Beautifully handcrafted templates for your website</h2>
                        <p class="text-muted mx-auto mb-0 mt-4">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5 align-items-center">
                <div class="col-lg-6">
                    <div class="mt-3">
                        <img src="{{ URL::asset('assets/images/features/3.png') }}" alt="business" class="mx-auto img-fluid rounded business_about position-relative">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt-3 about_desc_sec">
                        <div>
                            <h3 class="features-heading fw-bold">Save tons on design and development</h3>
                        </div>
                        <div class="features">
                            <div class="features-icon features-left">
                                <i class="mdi mdi-check"></i>
                            </div>
                            <div class="features-desc">
                                <h3 class="features-title">Clean & Minimal Design</h3>
                                <p class="features-sub-title pt-2 text-muted">You want customer to your store. Easily publish your coupans and when a user has manage to catch one of your coupens.</p>
                            </div>
                        </div>

                        <div class="features">
                            <div class="features-icon features-left">
                                <i class="mdi mdi-check"></i>
                            </div>
                            <div class="features-desc">
                                <h3 class="features-title">Planing & Strategy</h3>
                                <p class="features-sub-title pt-2 text-muted">You want customer to your store. Easily publish your coupans and when a user has manage to catch one of your coupens.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 mb-5 align-items-center">
                <div class="col-lg-6">
                    <div class="mt-3 our_benifits">
                        <div class="our_benifits_title">
                            <h3>Here's how we do things differently</h3>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <div class="our_benifits_box mt-3">
                                    <div class="our_benifits_icon">
                                        <img src="{{ URL::asset('assets/images/icon/pen&ruller.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="our_benifits_con mt-4">
                                        <h5 class="fw-bold">Well Documented</h5>
                                        <p class="text-muted mt-3">Easily publish your coupans and one of your coupens.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="our_benifits_box mt-3">
                                    <div class="our_benifits_icon">
                                        <img src="{{ URL::asset('assets/images/icon/code.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="our_benifits_con mt-4">
                                        <h5 class="fw-bold">Highly Customizable</h5>
                                        <p class="text-muted mt-3">Easily publish your coupans and one of your coupens.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <div class="our_benifits_box mt-3">
                                    <div class="our_benifits_icon">
                                        <img src="{{ URL::asset('assets/images/icon/headphones.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="our_benifits_con mt-4">
                                        <h5 class="fw-bold">24/7 Support</h5>
                                        <p class="text-muted mt-3">Easily publish your coupans and one of your coupens.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="our_benifits_box mt-3">
                                    <div class="our_benifits_icon">
                                        <img src="{{ URL::asset('assets/images/icon/groupchat.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="our_benifits_con mt-4">
                                        <h5 class="fw-bold">Community</h5>
                                        <p class="text-muted mt-3">Easily publish your coupans and one of your coupens.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt-3">
                        <img src="{{ URL::asset('assets/images/features/5.png') }}" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start About -->

    <!-- Start Funfact & Video -->
    <section class="bg_fun_vid mt-5">
        <div class="bg_fun_vid_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="vidoe_sec_img mx-auto">
                        <a href="#" class="video_hit" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="mdi mdi-play hit_video_icon"></i></a>
                        <img src="{{ URL::asset('assets/images/screen-1.png') }}" alt="" class="img-fluid mx-auto d-block shadow">
                    </div>
                </div>
            </div>
            <div class="row position-relative align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="video_head_title mt-3 text-white">
                        <h2>50k+ users are using this landing page.</h2>
                        <p class="text-white-50 mt-4">With lots of unique blocks, you can easily build a page without coding.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt-3 video_sec_in_btn">
                        <a href="javascript:void(0)" class="btn btn-custom">Download Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Funfact & Video -->

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

    <!-- Start Counter -->
    <section class="section counter_bg" id="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta_counter bg-custom position-relative">
                        <div class="section_title text-white text-center">
                            <h2>People Using Our Software & Counting</h2>
                            <p class="mx-auto mb-0 mt-4">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                        </div>
                        <div class="text-center mt-5 position-relative" id="counter">
                            <h1 class="fw-bold text-white mb-0 count count_custom" data-count="195468">1234</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter -->

    <!-- Start Client -->
    <section class="section pad_lan_client">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h2><span></span>Customers loving it</h2>
                        <p class="text-muted mx-auto mb-0 mt-4">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <!-- Swiper -->
                    <div class="swiper pb-5 landingtwo" dir="ltr">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="text-center testi_boxes_landing mt-3 rounded">
                                    <div class="bus_testi_icon_img position-relative text-custom">
                                        <img src="{{ URL::asset('assets/images/testi/testi-1.jpg') }}" alt="" class="img-fluid img-rounded rounded-circle mx-auto d-block">
                                        <i class="mdi mdi-format-quote-open"></i>
                                    </div>
                                    <div class="mt-3">
                                        <h5 class="client_review mx-auto text-center">“We cut our build times in half compared to our previous process. Love it.”</h5>
                                        <p class="client_name text-center mb-0 mt-3 fw-bold">- Scott Ross</p>
                                        <a href="javascript:void(0)" class="text-custom">Landik</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text-center testi_boxes_landing mt-3 rounded">
                                    <div class="bus_testi_icon_img position-relative text-custom">
                                        <img src="{{ URL::asset('assets/images/testi/testi-2.jpg') }}" alt="" class="img-fluid img-rounded rounded-circle mx-auto d-block">
                                        <i class="mdi mdi-format-quote-open"></i>
                                    </div>
                                    <div class="mt-3">
                                        <h5 class="client_review mx-auto text-center">“The support team is super helpful. We're so glad to have them on call.”</h5>
                                        <p class="client_name text-center mb-0 mt-3 fw-bold">- Scott Ross</p>
                                        <a href="javascript:void(0)" class="text-custom">Landik</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text-center testi_boxes_landing mt-3 rounded">
                                    <div class="bus_testi_icon_img position-relative text-custom">
                                        <img src="{{ URL::asset('assets/images/testi/testi-3.jpg') }}" alt="" class="img-fluid img-rounded rounded-circle mx-auto d-block">
                                        <i class="mdi mdi-format-quote-open"></i>
                                    </div>
                                    <div class="mt-3">
                                        <h5 class="client_review mx-auto text-center">“Reliability is what Landik is known for, and they've totally delivered this time.”</h5>
                                        <p class="client_name text-center mb-0 mt-3 fw-bold">- Scott Ross</p>
                                        <a href="javascript:void(0)" class="text-custom">Landik</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text-center testi_boxes_landing mt-3 rounded">
                                    <div class="bus_testi_icon_img position-relative text-custom">
                                        <img src="{{ URL::asset('assets/images/testi/testi-1.jpg') }}" alt="" class="img-fluid img-rounded rounded-circle mx-auto d-block">
                                        <i class="mdi mdi-format-quote-open"></i>
                                    </div>
                                    <div class="mt-3">
                                        <h5 class="client_review mx-auto text-center">“We cut our build times in half compared to our previous process. Love it.”</h5>
                                        <p class="client_name text-center mb-0 mt-3 fw-bold">- Scott Ross</p>
                                        <a href="javascript:void(0)" class="text-custom">Landik</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End Client -->

    <!-- Start Client Logo -->
    <section class="section lan_two_client_img">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h2><span></span>10,000+ companies</h2>
                        <p class="text-muted mx-auto mb-0 mt-4">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5 bg-custom rounded">
                <div class="col-lg-3">
                    <div class="logo_img">
                        <a href="javascript:void(0)">
                            <img src="{{ URL::asset('assets/images/clients/5.png') }}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="logo_img">
                        <a href="javascript:void(0)">
                            <img src="{{ URL::asset('assets/images/clients/6.png') }}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="logo_img">
                        <a href="javascript:void(0)">
                            <img src="{{ URL::asset('assets/images/clients/7.png') }}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="logo_img">
                        <a href="javascript:void(0)">
                            <img src="{{ URL::asset('assets/images/clients/8.png') }}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Client Logo -->

    <!-- Start Footer -->
    <footer class="footer_lan_two">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 order-2 order-lg-1">
                    <div class="foot_side_logo mt-3 mb-2">
                        <a href="index">
                            <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" class="img-fluid d-block text-md-center text-sm-center">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 order-2 order-lg-1">
                    <h6 class="mt-3 text-white font-weight-normal">Customer</h6>
                    <div class="footer_title_border"></div>
                    <ul class="list-unstyled footer_menu_list mb-0 mt-4">
                        <li><a href="javascript:void(0)">Buyer</a></li>
                        <li><a href="javascript:void(0)">Supplier</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 order-2 order-lg-1">
                    <h6 class="mt-3 text-white font-weight-normal">Help Center</h6>
                    <div class="footer_title_border"></div>
                    <ul class="list-unstyled footer_menu_list mb-0 mt-4">
                        <li><a href="javascript:void(0)">Billing</a></li>
                        <li><a href="javascript:void(0)">Accounting</a></li>
                        <li><a href="javascript:void(0)">General Question</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="bg_footer_sub mx-auto rounded text-center">
                        <div class="section_title text-center text-white">
                            <h2>Get latest updates</h2>
                            <p class="text-white mx-auto mb-0 mt-4">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                        </div>
                        <div class="subcri_form mt-5">
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2 mb-3">
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Your email..." required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" class="btn btn-white w-100" value="Subcribe Now">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot_divider mt-5"></div>
            <div class="row mt-3 align-items-center">
                <div class="col-lg-6">
                    <div class="text_copyright mt-3">
                        <p class="mb-0">&copy;
                            <script>document.write(new Date().getFullYear())</script> Landik. Design and coded by
                            <a href="https://themeforest.net/user/themesboss" target="_blank" class="text_copyright">ThemesBoss.</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-lg-end">
                        <ul class="list-inline mb-0 fot_social mt-3">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="social-icon"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="social-icon"><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="social-icon"><i class="mdi mdi-reddit"></i></a></li>
                        </ul>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 900px;">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-0 w-auto h-auto overflow-hidden d-inline-flex justify-content-center">
                    <div>
                        <div class="modal-header border-0">
                            <button type="button" class="bg-transparent border-0 ms-auto p-0 me-4 pe-5" data-bs-dismiss="modal" aria-label="Close"><i class="mdi mdi-close text-white fs-5"></i></button>
                        </div>
                        <iframe src="https://player.vimeo.com/video/109054393?h=853aa52fde&title=0&byline=0&portrait=0&badge=0" width="990" height="460" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end all cards -->
    @endsection

    @section('scripts')
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/custom.js"></script>
    @endsection
