@extends('partials.master')
@section('css')
@endsection

@section('head')
    <!-- Page secific scripts - reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('captcha.site_key') }}"></script>
    <script>
        $skey = "{{ config('captcha.site_key') }}";
        grecaptcha.ready(function() {
            grecaptcha.execute($skey, {action: 'contact_us'}).then(function(token) {
                document.getElementById('recaptcha_token').value = token;
            });
        }); 
    </script>
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
                            <p class="text-muted mb-0 mt-2">We would love to talk about how we can help you.</p>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="row mt-4">
                    <!-- message -->  
                       
                    @if(session('success'))
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 alert alert-primary">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- input form -->
                    <div class="col-lg-12">
                        <div class="contact_thir_form bg-custom-lighter mx-auto p-3 rounded">
                            <br><br>
                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <!-- Google Recaptcha -->
                                <input type="hidden" name="recaptcha_token" id="recaptcha_token">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Your name..." value="{{old('name')}}" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Your email..." value="{{ old('email') }}"  required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Your Subject.." value="{{ old('subject') }}" required=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..." value="{{ old('comments') }}" required=""></textarea>
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
    