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
                            <h1 class="fw-bold">Services</h1>
                            <p>Our offer data science and analytics services.</p>
                            <div>
                                <a href="contact" class="btn btn-custom btn-sm">Contact US</a>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</section>
		<!-- Start Banner-->

        <!-- Start Services -->
        <section class="section">
            <div class="container">
                <div class="row">
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
                            <p class="mb-0">&copy; <script>document.write(new Date().getFullYear())</script> Landik. Design and coded by 
                                <a href="https://themeforest.net/user/themesboss" target="_blank" class="footer-text-color">ThemesBoss.</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-lg-end">
                            <ul class="list-inline mb-0 fot_social mt-4">
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
        <script src="assets/js/custom.js"></script>
        @endsection