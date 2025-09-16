@extends('partials.master')
@section('css')
<link rel="stylesheet" href="assets/css/swiper.bundle.min.css" />
@endsection

@section('content')

    <!-- Header Start -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top horizontal-nav">
            <div class="container">
                <a class="navbar-brand" href="javascript:void(0)">
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
    <section class="home_first section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="home_fir_full_content">
                        <div>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="me-3 text-white learn_more"><i class="mdi mdi-play text-center"></i></a>
                        </div>

                        <div class="mt-4 home_fir_content">
                            <h1>The power of subscription economy.</h1>
                            <p class="text-muted mt-4">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime The standard chunk of those interested.</p>
                            <div class="home_fir_fea_list">
                                <p class="mb-0 text-muted"><span></span>Satisfied Guarantee</p>
                                <p class="mb-0 mt-2 text-muted"><span></span>Awesome Support 24/7</p>
                            </div>
                            <div class="header_btn mt-4 pt-2">
                                <a href="javascript:void(0)" class="btn btn-custom">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Home -->

    <!-- Start Logo -->
    <section class="img_logo section">
        <div class="container bg-light rounded">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo_img">
                        <a href="javascript:void(0)">
                            <img src="{{ URL::asset('assets/images/clients/1.png') }}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="logo_img">
                        <a href="javascript:void(0)">
                            <img src="{{ URL::asset('assets/images/clients/2.png') }}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="logo_img">
                        <a href="javascript:void(0)">
                            <img src="{{ URL::asset('assets/images/clients/3.png') }}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="logo_img">
                        <a href="javascript:void(0)">
                            <img src="{{ URL::asset('assets/images/clients/4.png') }}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Logo -->

    <!-- Start Services -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center section_title">
                        <h2><span></span>solution made for you.</h2>
                        <p class="text-muted mx-auto mb-0 mt-4">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="ser_fir_box text-center p-3 mt-3">
                        <div class="service_icon">
                            <i class="mdi mdi-compass-rose"></i>
                        </div>
                        <div class="service_content mt-4">
                            <h4 class="fw-bold">Easy access</h4>
                            <p class="text-muted mt-3">Take Ehya wherever you go so that you know what’s going on with your money at all times.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ser_fir_box text-center p-3 mt-3">
                        <div class="service_icon">
                            <i class="mdi mdi-drag-variant"></i>
                        </div>
                        <div class="service_content mt-4">
                            <h4 class="fw-bold">Budgets that work</h4>
                            <p class="text-muted mt-3">Create budgets you can actually stick to, and can actually see how you’re spending your money.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ser_fir_box text-center p-3 mt-3">
                        <div class="service_icon">
                            <i class="mdi mdi-google-circles-extended"></i>
                        </div>
                        <div class="service_content mt-4">
                            <h4 class="fw-bold">Total control</h4>
                            <p class="text-muted mt-3">Take a full control of your expenses. Landy will control of help you to do that anywhere anytime.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->

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

    <!-- Start Cta -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center cta_sec bg-custom position-relative text-white section_title">
                        <div class="bg-cta-video-overlay"></div>
                        <h2>Get Started with Landik</h2>
                        <p class="mx-auto mb-0 mt-4 position-relative">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                        <div class="mt-4 pt-3 position-relative z-index">
                            <div class="text-center">
                                <a href="#" class="video_presentation_play" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="mdi mdi-play presentation_icon"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cta -->

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
                        <p class="text-muted">More Over <a href="javascript:void(0)" class="text-custom">3200+ Customers</a></p>
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
                            <h1 class="mb-0">$29<sub class="font-weight-normal">/Per Month</sub></h1>
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
                            <h1 class="mb-0">$49<sub class="font-weight-normal">/Per Month</sub></h1>
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

    <!-- Start Contact -->
    <section class="section bg-contact">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center contact_section rounded bg-body section_title">
                        <h2><span></span>Still need help?</h2>
                        <p class="mx-auto mb-0 mt-4">Due to its widespread use as filler text for layouts, non-readability is of great importance.</p>
                        <div class="mt-5">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-custom w-75" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Get In Touch
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="contact_form p-3 mx-auto rounded">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <input name="name" id="name" type="text" class="form-control" placeholder="Your name..." required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group mt-2">
                                                                <input name="email" id="email" type="email" class="form-control" placeholder="Your email..." required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group mt-2">
                                                                <input type="text" class="form-control" id="subject" placeholder="Your Subject.." required="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group mt-2">
                                                                <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..." required=""></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 text-end mt-2">
                                                            <input type="submit" class="btn btn-custom w-100" value="Send Message">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end modal -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->

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
                        <form class="position-relative ms-auto">
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
    <div class="position-fixed end-0 top-50 translate-middle-y rounded-start-2 z-3">
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
    @endsection

    @section('scripts')
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
    @endsection
