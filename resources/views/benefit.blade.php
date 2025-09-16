@extends('partials.master')
@section('css')
<link rel="stylesheet" href="assets/css/swiper.bundle.min.css" />
@endsection

@section('content')

    <!-- Start Content -->
    <section class="section">
        <div class="row"><br><br><br></div>
        <div class="container">
            <!-- Title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center section_title">
                        <h1 class="fw-bold"><span></span>Benefits</h1>
                        <p class="text-muted mx-auto mb-0 mt-4"></p>
                    </div>
                </div>
            </div>
            <!-- Everything in one place -->
            <div class="row align-items-center mt-5">
                <div class="col-lg-6">
                    <div class="content_fea_third mx-auto mt-3">
                        <p class="content_small_title_third mb-0 text-uppercase"><span class="content_bg_box"></span></p>
                        <h2 class="mb-0 mt-4 text-custom fw-bold">Everything in one place</h2>
                        <p class="text-muted mt-4">MTouch is a powerful online Order to Cash Software solution. Run your business smoothly, keep records tidy, and streamline the process.</p>
                        <p class="mb-0 text-muted"><span></span><i class="text-custom mdi mdi-check"></i> Automate tools like invoicing and reporting</p>
                        <p class="mb-0 mt-2 text-muted"><span></span><i class="text-custom mdi mdi-check"></i> Full picture on your cashflow</p>
                        <p class="mb-0 mt-2 text-muted"><span></span><i class="text-custom mdi mdi-check"></i> Shorter operation process.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="side_img_content mt-3">
                        <img src="{{ URL::asset('assets/images/benefit_1.jpg') }}" alt="com" class="img-fluid mx-auto d-block">
                    </div>
                </div>
            </div>
            <!-- Better business decision -->            
            <div class="row mt-5 align-items-center">
                <div class="col-lg-6">
                    <div class="side_img_content mt-3">
                        <img src="{{ URL::asset('assets/images/benefit_2.jpg') }}" alt="com" class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content_fea_third mx-auto mt-3">
                        <p class="content_small_title_third mb-0 text-uppercase"><span class="content_bg_box"></span></p>
                        <h2 class="mb-0 mt-4 text-custom fw-bold">Better businiess decision</h2>
                        <p class="text-muted mt-4">MTouch integrated different sources of data real time.</p>
                        <p class="mb-0 text-muted"><span></span><i class="text-custom mdi mdi-check"></i> Order, inventory and cash data are integrated</p>
                        <p class="mb-0 mt-2 text-muted"><span></span><i class="text-custom mdi mdi-check"></i> Pre-building reports with best practice in that area</p>
                        <p class="mb-0 mt-2 text-muted"><span></span><i class="text-custom mdi mdi-check"></i> Intelligent reports for stock level and sales trend</p>
                    </div>
                </div>
            </div>
            <!-- Easy order management -->                        
            <div class="row mt-5 align-items-center">
                <div class="col-lg-6">
                    <div class="content_fea_third mx-auto mt-3">
                        <p class="content_small_title_third mb-0 text-uppercase"><span class="content_bg_box"></span></p>
                        <h2 class="mb-0 mt-4 text-custom fw-bold">Easy Order Management</h2>
                        <p class="text-muted mt-4">MTouch easy order management tools all ease of use user interface.</p>
                        <p class="mb-0 text-muted"><span></span><i class="text-custom mdi mdi-check"></i> Few clicks order input One-click invoicing</p>
                        <p class="mb-0 mt-2 text-muted"><span></span><i class="text-custom mdi mdi-check"></i> Pre-built professional invoice template</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="side_img_content mt-3">
                        <img src="{{ URL::asset('assets/images/benefit_3.jpg') }}" alt="com" class="img-fluid mx-auto d-block">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Content -->

    @endsection

    @section('scripts')
    <!-- Swipre JS -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
    @endsection
