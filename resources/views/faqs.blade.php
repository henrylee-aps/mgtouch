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
                        <h1 class="fw-bold">FAQ</h1>
                        <p>If you don't see an answer to your question, you can send us an email from our contact form.</p>
                        <div>
                            <a href="contact" class="btn btn-custom btn-sm">Contact US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Banner-->

    <!-- Start Features -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center section_title">
                        <h2><span></span>Landik provide Unique smart features</h2>
                        <p class="text-muted mx-auto mb-0 mt-4">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5 align-items-center">
                <div class="col-lg-6">
                    <div class="feature_fir_images mt-3">
                        <img src="{{ URL::asset('assets/images/features/1.png') }}" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt-3 feature_fir_content">
                        <h2 class="text-capitalize">Speed up your workflow with our features.</h2>
                        <p class="text-muted mt-4 mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        <div class="fea_icon_list mt-4">
                            <div class=" mt-3">
                                <div class="fea_icon_bg">
                                    <img src="{{ URL::asset('assets/images/icon/features-1.png') }}" alt="" class="img-fluid mx-auto">
                                </div>
                                <span class="text-muted ml-2">Built with latest Bootstrap</span>
                            </div>
                            <div class=" mt-3">
                                <div class="fea_icon_bg">
                                    <img src="{{ URL::asset('assets/images/icon/features-2.png') }}" alt="" class="img-fluid mx-auto">
                                </div>
                                <span class="text-muted ml-2">Awesome Support 24/7</span>
                            </div>
                            <div class=" mt-3">
                                <div class="fea_icon_bg">
                                    <img src="{{ URL::asset('assets/images/icon/features-3.png') }}" alt="" class="img-fluid mx-auto">
                                </div>
                                <span class="text-muted ml-2">Well documented and structured code</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features -->

    <!-- Start FAQ -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center section_title">
                        <h2><span></span>Want to ask something from us?</h2>
                        <p class="text-muted mx-auto mb-0 mt-4">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-7">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-box">
                            <div class="accordion-head" id="faqHeadingOne">
                                <button class="btn accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                                    What does royalty free mean?
                                </button>
                            </div>
                            <div id="faqOne" class="collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#accordionExample">
                                <p class="text-muted mb-0 fs-15 p-4">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, +
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                            </div>
                        </div><!-- END box-->

                        <div class="accordion-box">
                            <div class="accordion-head" id="faqHeadingTwo">
                                <button class="btn accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
                                    What do you mean by item and end product?
                                </button>
                            </div>
                            <div id="faqTwo" class="collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#accordionExample">
                                <p class="text-muted mb-0 fs-15 p-4">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, +
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                            </div>
                        </div><!-- END box-->

                        <div class="accordion-box">
                            <div class="accordion-head" id="faqHeadingThree">
                                <button class="btn accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                                    What are some examples of permitted end products?
                                </button>
                            </div>
                            <div id="faqThree" class="collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#accordionExample">
                                <p class="text-muted mb-0 fs-15 p-4">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, +
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                            </div>
                        </div><!-- END box-->

                        <div class="accordion-box">
                            <div class="accordion-head" id="faqHeadingFour">
                                <button class="btn accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFour" aria-expanded="false" aria-controls="faqFour">
                                    Am i allowed to modify the item that i purchased?
                                </button>
                            </div>
                            <div id="faqFour" class="collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#accordionExample">
                                <p class="text-muted mb-0 fs-15 p-4">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, +
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                            </div>
                        </div><!-- END box-->

                        <div class="accordion-box">
                            <div class="accordion-head" id="faqHeadingFive">
                                <button class="btn accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFive" aria-expanded="false" aria-controls="faqFive">
                                    I'm not sure if my use is covered. what should i do?
                                </button>
                            </div>
                            <div id="faqFive" class="collapse" aria-labelledby="faqHeadingFive" data-bs-parent="#accordionExample">
                                <p class="text-muted mb-0 fs-15 p-4">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, +
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                            </div>
                        </div><!-- END box-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ -->

    <!-- Start Footer -->
    <footer class="footer_fir">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="foot_logo mt-3">
                        <a href="index">
                            <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" class="img-fluid d-block text-md-center text-sm-center">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="subcribe_foot mt-3">
                        <form class="position-relative">
                            <input type="email" name="email" placeholder="Email" required>
                            <button type="submit" class="btn btn-custom" id="subscribe">Subcribe</button>
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
                        <p class="mb-0">&copy;
                            <script>document.write(new Date().getFullYear())</script> Landik. Design and coded by
                            <a href="https://themeforest.net/user/themesboss" target="_blank" class="text-white">ThemesBoss.</a>
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
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
    @endsection