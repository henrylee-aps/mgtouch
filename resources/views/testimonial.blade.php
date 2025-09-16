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
                        <h1 class="fw-bold">Testimonials</h1>
                        <p>See what our clients are saying about our services.</p>
                        <div>
                            <a href="contact" class="btn btn-custom btn-sm">Contact US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Banner-->

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
    </section>
    <!-- End Client -->

    <!-- Start Client -->
    <section class="section bg-light pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="mt-3">
                        <img src="{{ URL::asset('assets/images/client_side.png') }}" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="section_title mt-3">
                        <h2><span></span>What our users have to say.</h2>
                        <p class="mb-0 mt-4 text-muted position-relative">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                    </div>
                    <div class="testi_content mt-5">
                        <p class="text-muted">More Over <a class="text-custom" href="javascript:void(0)">3200+ Customers</a></p>
                        <!-- Swiper -->
                        <div class="swiper mySwiper pb-5" dir="ltr">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testi position-relative mt-4">
                                        <div class="testi-icon testi-left">
                                            <i class="mdi mdi-format-quote-open"></i>
                                        </div>
                                        <div class="testi-desc">
                                            <h3 class="testi-title mb-0 text-capitalize">“We all know the stigma around build times and the ever expanding arsenal of tooling in modern web apps.”</h3>
                                            <h5 class="mt-4 mb-0 fw-bold">Robert Goodwin</h5>
                                            <p class="text-muted">California USA</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi position-relative mt-4">
                                        <div class="testi-icon testi-left">
                                            <i class="mdi mdi-format-quote-open"></i>
                                        </div>
                                        <div class="testi-desc">
                                            <h3 class="testi-title mb-0 text-capitalize">“We all know the stigma around build times and the ever expanding arsenal of tooling in modern web apps.”</h3>
                                            <h5 class="mt-4 mb-0 fw-bold">Robert Goodwin</h5>
                                            <p class="text-muted">California USA</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi position-relative mt-4">
                                        <div class="testi-icon testi-left">
                                            <i class="mdi mdi-format-quote-open"></i>
                                        </div>
                                        <div class="testi-desc">
                                            <h3 class="testi-title mb-0 text-capitalize">“We all know the stigma around build times and the ever expanding arsenal of tooling in modern web apps.”</h3>
                                            <h5 class="mt-4 mb-0 fw-bold">Robert Goodwin</h5>
                                            <p class="text-muted">California USA</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi position-relative mt-4">
                                        <div class="testi-icon testi-left">
                                            <i class="mdi mdi-format-quote-open"></i>
                                        </div>
                                        <div class="testi-desc">
                                            <h3 class="testi-title mb-0 text-capitalize">“We all know the stigma around build times and the ever expanding arsenal of tooling in modern web apps.”</h3>
                                            <h5 class="mt-4 mb-0 fw-bold">Robert Goodwin</h5>
                                            <p class="text-muted">California USA</p>
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

    <!-- Start Footer -->
    <footer class="footer_lan_two">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 order-2 order-lg-1">
                    <div class="foot_side_logo mt-3 mb-2">
                        <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" class="img-fluid d-block text-md-center text-sm-center">
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
    <!-- end all cards -->
    @section('scripts')
    <!-- Swipre JS -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
    @endsection