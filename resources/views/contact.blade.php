@extends('partials.master')
@section('css')
@endsection

@section('content')
        <!-- Start All Cards -->

        <!-- Start Contact -->
        <section class="section">
            <div class="row"><br><br><br></div>
            <div class="container">
                <!-- Title -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title">
                            <h1 class="fw-bold"><span></span>Contact Us</h1>
                            <p class="text-muted mb-0 mt-2">We'd love to talk about how we can help you.</p>
                        </div>
                    </div>
                </div>
                <!-- Content -->
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <div class="bg-custom-lighter">
                        <div class="contact_thir_form mx-auto">
                            <br><br>
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Your name..." required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Your email..."  required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input type="text" class="form-control" id="subject" placeholder="Your Subject.."  required=""/>
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
                                    <div class="col-lg-12 text-white mt-2">
                                        <input type="submit" class="btn btn-custom w-50" value="Sumbit">
                                    </div>
                                </div>
                                <br>
                            </form>
                        </div>
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
                                <p class="mb-0 text-muted">info@magictouch-inc.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact_add_third mt-3 text-center">
                            <div class="contact_icon_shape mx-auto">
                                <img src="{{ URL::asset('assets/images/icon/mail.svg') }}" alt="mail" class="img-fluid">
                            </div>
                            <div class="contact_content mt-3">
                                <h5 class="fw-bold">Address</h5>
                                <p class="mb-0 text-muted">Suite 420, 744 West Hastings Street, Vancouver, BC V6C 1A5, Canada</p>
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
                                <p class="mb-0 text-muted">9:00am To 5:00pm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact -->
        
        @endsection

        @section('scripts')
        <!-- Swipre JS -->
        <script src="assets/js/custom.js"></script>
      
        @endsection
    