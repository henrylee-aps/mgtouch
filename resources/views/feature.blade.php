@extends('partials.master')
@section('css')
<link rel="stylesheet" href="assets/css/swiper.bundle.min.css" />
@endsection

@section('content')

    <!-- Start Services -->
    <section class="section">
        <div class="row"><br><br><br></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center section_title">
                        <h1 class="fw-bold"><span></span>Features</h1>
                        <p class="text-muted mx-auto mb-0 mt-4"></p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="ser_fir_box text-center p-3 mt-3">
                        <div class="service_icon">
                            <i class="mdi mdi-cash-usd"></i>
                        </div>
                        <div class="service_content mt-4">
                            <h4 class="text-custom fw-bold">Automated Invoicing</h4>
                            <p class="text-muted mt-3">Save administrative time by fully automating your invoicing with simplified e-commerce.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ser_fir_box text-center p-3 mt-3">
                        <div class="service_icon">
                            <i class="mdi mdi-cube-scan"></i>
                        </div>
                        <div class="service_content mt-4">
                            <h4 class="text-custom fw-bold">Inventory Tracking</h4>
                            <p class="text-muted mt-3">Having a big sale, on-site celebrity, or other event? Be sure to announce it so everybody knows and gets excited about it.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ser_fir_box text-center p-3 mt-3">
                        <div class="service_icon">
                            <i class="mdi mdi-cube-send"></i>
                        </div>
                        <div class="service_content mt-4">
                            <h4 class="text-custom fw-bold">Supply Chain Tracker</h4>
                            <p class="text-muted mt-3">Identify sales trends and demand planning so you can manage your supply chain better. Know where your orders are so you can optimize your resources.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ser_fir_box text-center p-3 mt-3">
                        <div class="service_icon">
                            <i class="mdi mdi-chart-histogram"></i>
                        </div>
                        <div class="service_content mt-4">
                            <h4 class="text-custom fw-bold">Insights Portal</h4>
                            <p class="text-muted mt-3">Magic Touch automatically identifies areas where you can save ANDtime and money through its in-depth AI powered analytics.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->

    @endsection

    @section('scripts')
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
    @endsection
