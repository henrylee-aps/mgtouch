@extends('partials.master')
@section('css')
@endsection

@section('content')

    <!-- Start All Cards -->

    <!-- Start About Section -->
    <section class="section">
        <div class="row"><br><br><br></div>
        <div class="container">
            <!-- Title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title">
                        <h1 class="fw-bold"><span></span>About Us</h1>
                        <p class="text-muted mb-0 mt-2">We have the small businesses at heart.</p>
                        <div>
                            <a href="contact" class="mt-4 btn btn-custom btn-sm">Contact US</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="about_page_images">
                        <img src="{{ URL::asset('assets/images/about_us.jpg') }}" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
            </div>
            <!-- We're small but experienced -->
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="ab_page_title mt-3">
                        <h2 class="fw-bold text-custom">We're small but experienced</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ab_page_sub_title mt-3">
                        <p class="text-muted">At Magic Touch, although we are small business people, we have extensive experience with ERP solutions, inventory and supply chain management and identifying insights to improve a business’ bottom line.</p>
                    </div>
                </div>
            </div>
            <!-- We understand you -->
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="ab_page_title mt-3">
                        <h2 class="fw-bold text-custom">We understand you</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ab_page_sub_title mt-3">
                        <p class="text-muted">We understand that the two key resources that small/medium enterprises (SMEs) lack are time and money. We have developed Magic Touch ERP to give you more of each. You can transform your manual operations. You can integrate your inventory and supply chain management. You can generate invoices automatically and manage cash more efficiently.</p>
                    </div>
                </div>
            </div>
            <!-- We understand you -->
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="ab_page_title mt-3">
                        <h2 class="fw-bold text-custom">We enable you</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ab_page_sub_title mt-3">
                        <p class="text-muted">Business is all about the bottom line. The bottom line about Magic Touch ERP is that it allows you to even the playing field with much larger competitors, leading to better results and a better work/life balance for you.</p>
                    </div>
                </div>
            </div>            
        </div>
    </section>
    <!-- End About Section -->

    @endsection

    @section('scripts')
    <!-- Swipre JS -->
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/custom.js"></script>
  
    @endsection
