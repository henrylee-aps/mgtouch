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
    <section class="home_third section">
        <div class="home-table">
            <div class="home-table-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="home_thi_full_content rounded text-center bg-light">
                                <div class="sub_sec_third">
                                    <form class="position-relative  mx-auto">
                                        <input type="email" placeholder="Email Address" required>
                                        <button type="submit" class="btn btn-custom btn-rounded">Get Started</button>
                                    </form>
                                </div>
                                <div class="home_thi_border"></div>
                                <div class="home_third_content mx-auto">
                                    <h1>We Design & Build Products For All.</h1>
                                    <p class="text-muted mx-auto mt-3 mb-0">We created a simple, safe, and easy-to-use platform for managing the complex banking of startups.</p>
                                </div>
                                <div class="home_third_video_btn mt-4">
                                    <a href="#" class="me-3 text-white video_third_home" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="mdi mdi-play text-center"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Home -->

    <!-- Start Features -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h2><span></span>The Best Awesome startup landing tamplate</h2>
                        <p class="text-muted mx-auto mt-4">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="feat_third_box mt-3 text-center p-3">
                        <h5 class="fw-bold">Suits Your Style</h5>
                        <p class="text-muted mt-3">Ned ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                        <div class="feat_read_more_third">
                            <a href="javascript:void(0)"><i class="mdi mdi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feat_third_box mt-3 text-center p-3">
                        <h5 class="fw-bold">Well Documented</h5>
                        <p class="text-muted mt-3">Ned ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                        <div class="feat_read_more_third">
                            <a href="javascript:void(0)"><i class="mdi mdi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feat_third_box mt-3 text-center p-3">
                        <h5 class="fw-bold">Highly Customizable</h5>
                        <p class="text-muted mt-3">Ned ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                        <div class="feat_read_more_third">
                            <a href="javascript:void(0)"><i class="mdi mdi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features -->

    <!-- Start Conetent -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content_fea_third mx-auto mt-3">
                        <p class="content_small_title_third mb-0 text-uppercase"><span class="content_bg_box"></span>Perfact Design</p>
                        <h3 class="content_main_title_third mb-0 mt-4">It’s everything you’ll ever need.</h3>
                        <p class="text-muted mt-4">Create custom landing pages with Landik that converts more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>
                        <div class="mt-4 pt-3">
                            <a href="javascript:void(0)" class="btn btn-custom btn-rounded">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="side_img_content mt-3">
                        <img src="{{ URL::asset('assets/images/about_com.jpg') }}" alt="com" class="img-fluid mx-auto d-block">
                    </div>
                </div>
            </div>
            <div class="row mt-5 align-items-center">
                <div class="col-lg-6">
                    <div class="side_img_content mt-3">
                        <img src="{{ URL::asset('assets/images/about_lap.jpg') }}" alt="com" class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content_fea_third mx-auto mt-3">
                        <p class="content_small_title_third mb-0 text-uppercase"><span class="content_bg_box"></span>User Interface</p>
                        <h3 class="content_main_title_third mb-0 mt-4">Unlimited features awaiting for you</h3>
                        <p class="text-muted mt-4">Create custom landing pages with Landik that converts more visitors than any website. With lots of unique blocks, you can easily build a page without coding.</p>
                        <div class="mt-4 pt-3">
                            <a href="javascript:void(0)" class="btn btn-custom btn-rounded">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Conetent -->

    <!-- Start Logo -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo_img mt-3">
                        <img src="{{ URL::asset('assets/images/clients/1.png') }}" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="logo_img mt-3">
                        <img src="{{ URL::asset('assets/images/clients/2.png') }}" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="logo_img mt-3">
                        <img src="{{ URL::asset('assets/images/clients/3.png') }}" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="logo_img mt-3">
                        <img src="{{ URL::asset('assets/images/clients/4.png') }}" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
            </div>
            <div class="client_logo_bot_bor"></div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="client_mini_caption text-center">
                        <p class="text-muted mx-auto">Velit sed ullamcorper morbi tincidunt ornare. Ipsum consequat nisl vel pretium. Odio ut sem nulla pharetra diam sit. Amet est placerat in egestas erat imperdiet sed euismod.</p>
                    </div>
                    <div class="text-center mt-4 pt-3">
                        <a href="javascript:void(0)" class="btn btn-custom btn-rounded">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Logo -->

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
                            <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Monthly</a>
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

    <!-- Start Contact -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h2><span></span>Get in tuch with us with any questions</h2>
                        <p class="text-muted mx-auto mt-4">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="contact_thir_form mx-auto">
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
                                    <div class="form-group mt-2 mb-3">
                                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..." required=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-end mt-2">
                                    <input type="submit" class="btn btn-custom w-100" value="Send A Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="cont_bot_third_bor"></div>
            <div class="row mt-3">
                <div class="col-lg-4">
                    <div class="contact_add_third mt-3 text-center">
                        <div class="contact_icon_shape mx-auto">
                            <img src="{{ URL::asset('assets/images/icon/mail.svg') }}" alt="mail" class="img-fluid">
                        </div>
                        <div class="contact_content mt-3">
                            <h5 class="fw-bold">Email</h5>
                            <p class="mb-0 text-muted">information@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact_add_third mt-3 text-center">
                        <div class="contact_icon_shape mx-auto">
                            <img src="{{ URL::asset('assets/images/icon/active-call.svg') }}" alt="mail" class="img-fluid">
                        </div>
                        <div class="contact_content mt-3">
                            <h5 class="fw-bold">Telephone</h5>
                            <p class="mb-0 text-muted">+(485) 874 249 23</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact_add_third mt-3 text-center">
                        <div class="contact_icon_shape mx-auto">
                            <img src="{{ URL::asset('assets/images/icon/time-schedule.svg') }}" alt="mail" class="img-fluid">
                        </div>
                        <div class="contact_content mt-3">
                            <h5 class="fw-bold">Business Hours</h5>
                            <p class="text-muted mb-1">Monday To Friday</p>
                            <p class="mb-0 text-muted">9:00am To 6:00pm (GMT)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->

    <!-- Start Footer -->
    <footer class="footer_third">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer_sub_third">
                        <h6 class="mt-3 fw-bold">Subcribe Our Newslatter</h6>
                        <div class="footer_title_border"></div>
                        <form class="position-relative mt-4">
                            <input type="email" placeholder="Email" required>
                            <button type="submit" class="btn btn-custom">Subcribe</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 order-2 order-lg-1">
                    <h6 class="mt-3 fw-bold">Social</h6>
                    <div class="footer_title_border"></div>
                    <ul class="list-unstyled footer_menu_list mb-0 mt-4">
                        <li><a href="javascript:void(0)">Blog</a></li>
                        <li><a href="javascript:void(0)">Facebook</a></li>
                        <li><a href="javascript:void(0)">Instagram</a></li>
                        <li><a href="javascript:void(0)">Twitter</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 order-2 order-lg-1">
                    <h6 class="mt-3 fw-bold">Product</h6>
                    <div class="footer_title_border"></div>
                    <ul class="list-unstyled footer_menu_list mb-0 mt-4">
                        <li><a href="javascript:void(0)">Service</a></li>
                        <li><a href="javascript:void(0)">Features</a></li>
                        <li><a href="javascript:void(0)">Credit</a></li>
                        <li><a href="javascript:void(0)">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 order-2 order-lg-1">
                    <h6 class="mt-3 fw-bold">Support</h6>
                    <div class="footer_title_border"></div>
                    <ul class="list-unstyled footer_menu_list mb-0 mt-4">
                        <li><a href="javascript:void(0)">Privcy</a></li>
                        <li><a href="javascript:void(0)">Tearms</a></li>
                        <li><a href="javascript:void(0)">Help</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer_third_copy_border"></div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_third text-center">
                        <div class="copy_icon_box mx-auto text-center">
                            <img src="{{ URL::asset('assets/images/icon/heart.svg') }}" alt="heart" class="img-fluid mx-auto">
                        </div>
                        <p class="mb-0 text-muted mt-4">&copy;
                            <script>document.write(new Date().getFullYear())</script> Landik. Design and coded by
                            <a href="https://themeforest.net/user/themesboss" target="_blank" class="text-muted">ThemesBoss.</a>
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
    <!-- Swipre JS -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
    @endsection
