@extends('partials.master')
@section('css')
<link rel="stylesheet" href="assets/css/swiper.bundle.min.css" />
@endsection

@section('content')

    <!-- start all cards -->
    <!-- Start Hero Image -->
    <section class="home_sec section">
        <div class="home_sec_layer"></div>
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-lg-7">
                    <div class="home_sec_content mt-3 text-white">
                        <!-- <p class="fst-italic first_small_lable text-custom">Since 1911</p> -->
                        <h1 class="mt-3">ERP isn't just for big business anymore!</h1>
                        <div class="home_divider"></div>
                        <p class="home_small_title mt-4">Magic Touch ERP is designed for small business</p>
                        <div class="mt-5">
                            <a href="javascript:void(0)" class="btn btn-custom">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Image-->

    <!-- Start Benefit Summary -->
    <section class="section bg_sec_features">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="service_side_services_sec mt-3">
                        <div class="d-flex align-items-center">
                            <div class="ser_img_icon me-3">
                                <img src="{{ URL::asset('assets/images/icon/lnterselect.svg') }}" class="" alt="...">
                            </div>
                            <h5 class="fw-bold mb-0">Save Time</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service_side_services_sec mt-3">
                        <div class="d-flex align-items-center">
                            <div class="ser_img_icon me-3">
                                <img src="{{ URL::asset('assets/images/icon/sketch.svg') }}" class="" alt="...">
                            </div>
                            <h5 class="fw-bold mb-0">Save Money</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service_side_services_sec mt-3">
                        <div class="d-flex align-items-center">
                            <div class="ser_img_icon me-3">
                                <img src="{{ URL::asset('assets/images/icon/bulb.svg') }}" class="" alt="...">
                            </div>
                            <h5 class="fw-bold mb-0">Best Practice</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center text-custom section_title">
                        <h2><span></span>Magic Touch ERP</h2>
                        <p class="text-muted mx-auto mb-0 mt-4">is a sales and inventory tracker designed for small business to SAVE TIME, by automating manual functions and SAVE MONEY, by deliverying expense management BEST PRACTICE.</p>
                    </div>
                </div>
            </div>

            <div class="row"><br><br></div>     <!-- Blank Line -->

            <div class="row mt-3 mb-5 align-items-center">
                <div class="col-lg-12">
                    <div class="mt-3 our_benifits">
                        <div class="text-center text-custom section_title our_benifits_title">
                            <h2><span></span>Benefits</h2>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <div class="our_benifits_box mt-3">
                                    <div class="our_benifits_icon">
                                        <img src="{{ URL::asset('assets/images/icon/dollar.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="our_benifits_con mt-4">
                                        <h5 class="fw-bold">Increased Savings</h5>
                                        <p class="text-muted mt-3">Magic Touch identifies cost savings across the internal product journey so you can increase your profits.  Also, replace multiple single task product with an all-inclusive, one-stop solution.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="our_benifits_box mt-3">
                                    <div class="our_benifits_icon">
                                        <img src="{{ URL::asset('assets/images/icon/chart-bar.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="our_benifits_con mt-4">
                                        <h5 class="fw-bold">Comprehensive Picture</h5>
                                        <p class="text-muted mt-3">Magic Touch gives you the comfort of an easy-to-use solution all integrated in once place to control sales, expenses & inventory. It’s syncs all the important data from wherever you need it with integrations to e-commerce, web-based POS systems, accounting software and even payroll. Easily turn on and off any modules you don’t use for even more simplification.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <div class="our_benifits_box mt-3">
                                    <div class="our_benifits_icon">
                                        <img src="{{ URL::asset('assets/images/icon/time-schedule.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="our_benifits_con mt-4">
                                        <h5 class="fw-bold">Process Efficiency</h5>
                                        <p class="text-muted mt-3">By reducing administrative tasks and manual data entry, Magic Touch helps you streamline processes so you can focus on the more important parts of your business.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="our_benifits_box mt-3">
                                    <div class="our_benifits_icon">
                                        <img src="{{ URL::asset('assets/images/icon/groupchat.svg') }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="our_benifits_con mt-4">
                                        <h5 class="fw-bold">Better Business Decision Making</h5>
                                        <p class="text-muted mt-3">Magic Touch gives you more data and insights to help make better business decisions such as setting the right prices based on supply, demand and other market conditions.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="client_mini_caption text-center">
                        <p class="text-muted mx-auto"></p>
                    </div>
                    <div class="text-center mt-4 pt-3">
                        <a href="javascript:void(0)" class="btn btn-custom">Learn More</a>
                    </div>
                </div>
            </div>
    </section>
    <!-- End Benefit Summary -->

    @endsection

    @section('scripts')
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/custom.js"></script>
    @endsection
