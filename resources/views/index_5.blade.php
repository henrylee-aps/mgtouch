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
    <section class="home_four section">
        <div class="bg-over-img"></div>
        <div class="home-table position-relative">
            <div class="home-table-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="home_four_content header-tween mx-auto text-center">
                                <p class="text-uppercase small_title"><span class="small_title_bor"></span> Awesome <span class="small_title_bor"></span> </p>
                                <h1 class="fw-bold">Welcome To The Landik Ui kit</h1>
                                <p class="text-muted mt-4 mb-0">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime The standard chunk of those interested.</p>
                                <div class="down_scroll mt-5">
                                    <a href="#cta_sec" class="scroll_btn">
                                        <i class="text-white mdi mdi-chevron-double-down"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Home -->

    <!-- Start Cta -->
    <section class="cta_bg_four section" id="cta_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center cta_img_bg">
                        <h2 class="fw-bold text-white mx-auto">Landing Design tamplate for your startup.</h2>
                        <p class="mx-auto mb-0 mt-4">Making a decision to do something – this is the first step. We all know that nothing moves until someone makes a decision.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cta -->

    <!-- Start Features -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center section_title">
                        <h2><span></span>Our Featured Service that We Provide</h2>
                        <p class="text-muted mx-auto mb-0 mt-4">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="features_box_four py-5 px-3 mt-3 text-center">
                        <div class="features_icon">
                            <h3 class="fw-bold mb-0">1.</h3>
                        </div>
                        <div class="features_content mt-4">
                            <h5 class="fw-bold">Download our app</h5>
                            <p class="text-muted mb-0 mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <div class="featres_btn mt-4">
                                <a href="javascript:void(0)">Learn More <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features_box_four py-5 px-3 active mt-3 text-center">
                        <div class="features_icon">
                            <h3 class="fw-bold mb-0">2.</h3>
                        </div>
                        <div class="features_content mt-4">
                            <h5 class="fw-bold">Create a free account</h5>
                            <p class="text-muted mb-0 mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <div class="featres_btn mt-4">
                                <a href="javascript:void(0)">Learn More <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features_box_four py-5 px-3 mt-3 text-center">
                        <div class="features_icon">
                            <h3 class="fw-bold mb-0">3.</h3>
                        </div>
                        <div class="features_content mt-4">
                            <h5 class="fw-bold">Now Start your journey</h5>
                            <p class="text-muted mb-0 mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <div class="featres_btn mt-4">
                                <a href="javascript:void(0)">Learn More <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features -->

    <!-- Start Product Doc -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center section_title">
                        <h2><span></span>Product Doc</h2>
                        <p class="text-muted mx-auto mb-0 mt-4">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="featres_box_images mt-3">
                        <div class="features_img">
                            <img src="{{ URL::asset('assets/images/screenshot/1.png') }}" alt="ss" class="img-fluid mx-auto d-block rounded">
                        </div>
                        <div class="features_content_img py-4">
                            <div class="icon_features d-flex align-items-center">
                                <div class="icon_box">
                                    <i class="mdi mdi-monitor text-custom"></i>
                                </div>
                                <h5 class="mb-0 fw-bold">Fully Responsive</h5>
                            </div>
                            <p class="text-muted mb-0 mt-4">It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="featres_box_images mt-3">
                        <div class="features_img">
                            <img src="{{ URL::asset('assets/images/screenshot/2.png') }}" alt="ss" class="img-fluid mx-auto d-block rounded">
                        </div>
                        <div class="features_content_img py-4">
                            <div class="icon_features d-flex align-items-center">
                                <div class="icon_box">
                                    <i class="mdi mdi-code-tags text-custom"></i>
                                </div>
                                <h5 class="mb-0 fw-bold">W3c Valid Code</h5>
                            </div>
                            <p class="text-muted mb-0 mt-4">It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="featres_box_images mt-3">
                        <div class="features_img">
                            <img src="{{ URL::asset('assets/images/screenshot/3.jpg') }}" alt="ss" class="img-fluid mx-auto d-block rounded">
                        </div>
                        <div class="features_content_img py-4">
                            <div class="icon_features d-flex align-items-center">
                                <div class="icon_box">
                                    <i class="mdi mdi-tune text-custom"></i>
                                </div>
                                <h5 class="mb-0 fw-bold">Easy to customize</h5>
                            </div>
                            <p class="text-muted mb-0 mt-4">It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4">
                    <div class="featres_box_images mt-3">
                        <div class="features_img">
                            <img src="{{ URL::asset('assets/images/screenshot/4.png') }}" alt="ss" class="img-fluid mx-auto d-block rounded">
                        </div>
                        <div class="features_content_img py-4">
                            <div class="icon_features d-flex align-items-center">
                                <div class="icon_box">
                                    <i class="mdi mdi-google-chrome text-custom"></i>
                                </div>
                                <h5 class="mb-0 fw-bold">Browser Compatibility</h5>
                            </div>
                            <p class="text-muted mb-0 mt-4">It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="featres_box_images mt-3">
                        <div class="features_img">
                            <img src="{{ URL::asset('assets/images/screenshot/5.png') }}" alt="ss" class="img-fluid mx-auto d-block rounded">
                        </div>
                        <div class="features_content_img py-4">
                            <div class="icon_features d-flex align-items-center">
                                <div class="icon_box">
                                    <i class="mdi mdi-bootstrap text-custom"></i>
                                </div>
                                <h5 class="mb-0 fw-bold">Based On Bootstrap 4</h5>
                            </div>
                            <p class="text-muted mb-0 mt-4">It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="featres_box_images mt-3">
                        <div class="features_img">
                            <img src="{{ URL::asset('assets/images/screenshot/6.png') }}" alt="ss" class="img-fluid mx-auto d-block rounded">
                        </div>
                        <div class="features_content_img py-4">
                            <div class="icon_features d-flex align-items-center">
                                <div class="icon_box">
                                    <i class="mdi mdi-atom-variant text-custom"></i>
                                </div>
                                <h5 class="mb-0 fw-bold">Retina Ready</h5>
                            </div>
                            <p class="text-muted mb-0 mt-4">It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Doc -->

    <!-- Start Team -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center section_title">
                        <h2><span></span>Team better crew for your startup</h2>
                        <p class="text-muted mx-auto mb-0 mt-4">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="team_sec_sim mt-3">
                        <div class="team_img">
                            <img src="{{ URL::asset('assets/images/team/1.jpg') }}" class="img-fluid mx-auto d-block">
                        </div>
                        <div class="team_detail text-center mt-3">
                            <h4 class="fw-bold">Hannah Sharpe</h4>
                            <p class="text-muted mb-0">CEO, Co-Founder</p>
                        </div>
                        <div class="team_divider"></div>
                        <div>
                            <ul class="list-inline team_social text-center mb-0">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" class=""><i class="mdi mdi-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" class=""><i class="mdi mdi-google-plus color_google"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" class=""><i class="mdi mdi-linkedin color_linkdin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team_sec_sim mt-3">
                        <div class="team_img">
                            <img src="{{ URL::asset('assets/images/team/2.jpg') }}" class="img-fluid mx-auto d-block">
                        </div>
                        <div class="team_detail text-center mt-3">
                            <h4 class="fw-bold">CLee Carter</h4>
                            <p class="text-muted mb-0">Managing Partner</p>
                        </div>
                        <div class="team_divider"></div>
                        <div>
                            <ul class="list-inline team_social text-center mb-0">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" class=""><i class="mdi mdi-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" class=""><i class="mdi mdi-google-plus color_google"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" class=""><i class="mdi mdi-linkedin color_linkdin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team_sec_sim mt-3">
                        <div class="team_img">
                            <img src="{{ URL::asset('assets/images/team/3.jpg') }}" class="img-fluid mx-auto d-block">
                        </div>
                        <div class="team_detail text-center mt-3">
                            <h4 class="fw-bold">Mary Merrill</h4>
                            <p class="text-muted mb-0">Operations Director</p>
                        </div>
                        <div class="team_divider"></div>
                        <div>
                            <ul class="list-inline team_social text-center mb-0">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" class=""><i class="mdi mdi-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" class=""><i class="mdi mdi-google-plus color_google"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" class=""><i class="mdi mdi-linkedin color_linkdin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team -->

    <!-- Start CTA -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center cta_four_bg">
                <div class="col-lg-6">
                    <div class="cta_title_four mt-3 mx-auto text-center text-lg-end text-xl-start">
                        <h2 class="fw-bold text-white">Get Started With Landik</h2>
                        <p class="text-white mt-3">It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="btn_cta_four mt-3 text-center text-lg-end text-xl-right mx-auto">
                        <a href="javascript:void(0)" class="btn btn-white fw-bold btn-rounded">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End CTA -->

    <!-- Start Subcribe -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center section_title">
                        <h2><span></span>Subcribe of our new versions</h2>
                        <p class="text-muted mx-auto mb-0 mt-4">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="four_sub_sec mt-3">
                        <form class="form-inline justify-content-center align-items-center">
                            <div class="form-group position-relative mb-0 mt-3">
                                <i class="mdi mdi-email-outline"></i>
                                <input type="email" class="form-control position-relative me-2 ps-5" placeholder="Your Email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                            <button type="submit" class="btn btn-custom btn-rounded mt-3">Subcribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Subcribe -->

    <!-- Start Footer -->
    <footer class="footer_four">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="footer_logo mt-4">
                        <a href="index">
                            <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="Logo" class="img-fluid d-block">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="footer_four_menu text-lg-end mt-4">
                        <ul class="mb-0 list-inline">
                            <li class="list-inline-item me-0"><a href="javascript:void(0)">Home</a></li>
                            <li class="list-inline-item me-0"><a href="javascript:void(0)">Product</a></li>
                            <li class="list-inline-item me-0"><a href="javascript:void(0)">Services</a></li>
                            <li class="list-inline-item me-0"><a href="javascript:void(0)">Pages</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer_divider"></div>
            <div class="row align-items-center py-3">
                <div class="col-lg-6">
                    <div class="copyright_content">
                        <p class="mb-0">&copy;
                            <script>document.write(new Date().getFullYear())</script> Landik. Design and coded by
                            <a href="https://themeforest.net/user/themesboss" target="_blank" class="footer-text-color">ThemesBoss.</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-lg-end">
                        <ul class="list-inline mb-0 fot_social align-items-center">
                            <span class="d-inline-block me-2">Follow Us :</span>
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
    <!-- end all cards -->
    @endsection

    @section('scripts')
    <!-- Swipre JS -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
    @endsection