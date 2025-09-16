@extends('partials.master')
@section('css')
@endsection

@section('content')
        <!-- Start Login -->
        <section class="account_page_logo align-items-center d-flex">
            <div class="overlay_account"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="index">
                            <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="logo" class="img-fluid mx-auto d-block">
                        </a>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="account_box mt-3 mx-auto">
                            <div class="acc_head text-center">
                                <h4 class="fw-bold text-capitalize">Signup Now!</h4>
                                <p class="text-muted">Registration takes less than a minute but gives you full control over your orders.</p>
                            </div>
                            <form class="mt-4">
                                <div class="col-lg-12 mt-3">
                                    <label class="fw-bold">First Name</label>
                                    <input type="text" class="form-control trial-input" placeholder="First Name" required="">
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <label class="fw-bold">Email Address</label>
                                    <input type="email" id="exampleInputEmail1" class="form-control trial-input" placeholder="Email Id" required />
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <label class="fw-bold">Password</label>
                                    <input type="password" id="password1" class="form-control trial-input" placeholder="Password" required />
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">I agree to the <a href="#" class="text-custom">Terams & Conditions</a></label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="btn btn-custom w-100 mt-3">Sign Up</button>
                                </div>
                            </form>
                        </div>
                        <div class="text-center mt-4">
                            <p class="text-white"><small class="me-2">Already have an account?</small> <a href="login" class="text-white fw-bold">Sign in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Login -->
        @section('scripts')
        <script src="assets/js/custom.js"></script>
        @endsection