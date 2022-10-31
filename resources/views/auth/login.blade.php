@extends('layouts.auth')

@section('content')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <!-- Start Contact section -->
        <div class="rn-contact-area rn-section-gap section-separator" id="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">login</span>
                            <h2 class="title">Login</h2>
                        </div>
                    </div>
                </div>

                <x-alert />

                <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                    
                    <div data-aos-delay="600" class="col-lg-6 offset-lg-3 contact-input">
                        <div class="contact-form-wrapper">
                            <div class="introduce">

                                <form class="rnt-contact-form row" method="POST" action="{{ route('auth.login') }}">
                                    @csrf
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input class="form-control form-control-sm" id="email" name="email" type="email" value="{{ old('email') }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input class="form-control form-control-sm" id="password" name="password" type="password">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <button type="submit" class="rn-btn">
                                            <span>Login</span>
                                            <i data-feather="arrow-right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contuct section -->

@endsection