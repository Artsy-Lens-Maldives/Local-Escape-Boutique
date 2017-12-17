@extends('layouts.app')

@section('content')
    
        <!-- start erroe area -->
        <section class="error_area text-center">
            <div class="container">
                <div class="error margin-tb-170">
                    <p>404</p>
                    <div class="section_title nice_title">
                        <h3>Error</h3>                        
                    </div>
                    <a href="index.html" class="btn btn-warning btn-lg">Back to Homepage</a>
                </div>
                <!-- start contact us area -->
                <section class="contact_us_area content-left">
                    <div class="container">
                        <div class="contact_us clearfix">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="call clearfix">
                                    <h6>Call Us</h6>
                                    <p>123 456 7890</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="email_us clearfix">
                                    <h6>Email us</h6>
                                    <p>info@hotelbooking.com</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="news_letter clearfix">
                                    <input type="text" placeholder="Enter ID  for News Letter">
                                    <a href="#" class="btn btn-blue">go</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="social_icons clearfix">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end contact us area -->
            </div>
        </section>
        <!-- end error area -->

@endsection