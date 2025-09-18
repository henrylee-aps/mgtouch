    <!-- Start Footer -->
    <footer class="footer_lan_two">
        <div class="container">
            <div class="row"><br><br><br><br></div>
            <div class="row">
                <div class="col-lg-2 order-2 order-lg-1">
                    <div class="foot_side_logo mt-3 mb-2">
                        <a href="index">
                            <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" class="img-fluid d-block text-md-center text-sm-center">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 order-2 order-lg-1">
                    <h6 class="mt-3 text-white font-weight-normal">Help Center</h6>
                    <div class="footer_title_border"></div>
                    <ul class="list-unstyled footer_menu_list mb-0 mt-4">
                        <li><a href="privacy">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 order-2 order-lg-1">
                    <!-- Blank Column
                    <h6 class="mt-3 text-white font-weight-normal">Customer</h6>
                    <div class="footer_title_border"></div>
                    <ul class="list-unstyled footer_menu_list mb-0 mt-4">
                        <li><a href="javascript:void(0)">Buyer</a></li>
                        <li><a href="javascript:void(0)">Supplier</a></li>
                    </ul>
                    -->
                </div>
                <div id="newsletter" class="col-lg-6 order-1 order-lg-2">
                    <div class="bg_footer_sub2 mx-auto rounded text-center">
                        <div class="section_title text-center text-white">
                            <h3>Be the first to know</h3>
                            <p class="mx-auto mb-0 mt-3">Join our mailing list and we'll keep you posted on when we launch (we might just send you an early bird offer too!).</p>
                        </div>
                        <div class="subcri_form mt-3">
                            <form action="{{ route('newsletter.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2 mb-3">
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Your email..." required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-white">
                                        <input type="submit" class="btn btn-custom w-100" value="Subcribe Now">
                                    </div>
                                </div>
                            </form>
                            @if(session('success'))
                                <div class="alert alert-warning mt-2">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger mt-2">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot_divider mt-5"></div>
            <div class="row mt-3 align-items-center">
                <div class="col-lg-6">
                    <div class="text_copyright mt-3">
                        <p class="mb-0">&copy;
                            <script>document.write(new Date().getFullYear())</script> Magic Touch Inc. - All right reserved
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-lg-end">
                        <ul class="list-inline mb-0 fot_social mt-3">
                            <li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100064449819400" class="social-icon"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.linkedin.com/company/magic-touch-innovation-inc/" class="social-icon"><i class="mdi mdi-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->