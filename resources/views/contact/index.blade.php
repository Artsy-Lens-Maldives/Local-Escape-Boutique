@extends('layouts.app')

@section('body_id')
id="contact_us_page" @endsection

@section('content')
        <!-- start breadcrumb -->
        <section class="breadcrumb_main_area margin-bottom-80">
            <div class="container-fluid">
                <div class="row">
                    <div class="breadcrumb_main nice_title">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>            
        </section>
        <!-- end breadcrunb -->

        <!-- start other detect room section -->
        <div class="contact_google_map_area margin-bottom-75">
            <div class="container">
                <div class="contact_google_map">
                    <div id="contactgoogleMap" style="width:100%;height:374px;"></div>
                </div>
            </div>
        </div>
        <!-- end other detect room section -->

        <!-- start contact mail area -->
        <section class="contact_mail_area margin-bottom-90">
            <div class="container">
                <div class="row">
                    <div class="contact_mail">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="send_mail">
                                <div class="section_title margin-bottom-40">
                                    <h4>send us an email</h4>
                                </div>
                                <form action="contact_process.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <input type="text" placeholder="First Name *" name="fname" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input type="text" placeholder="Last Name *" required name="lname">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input  type="text" placeholder="Your Email Id *" required name="email"/>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input  type="text" placeholder="Phone Number *" required name="phone"/>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <textarea name="message" placeholder="Message" required></textarea>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <!-- <a href="#" class="btn btn-warning btn-md"></a> -->
                                            <input class="btn btn-warning btn-md" type="submit" name="submit" value="Submit Now" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="contact_info margin-top-65">
                                <div class="section_title margin-bottom-45">
                                    <h4>Contact Info</h4>
                                </div>
                                <ul class="clearul">
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        Local Escape Boutique
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        1234567890
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        boutique@localescapemaldives.com
                                    </li>
                                </ul>
                                <div class="social_icons clearfix">
                                    <ul class="clearul">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact mail area -->

        <!-- start contact us area -->
        <section class="contact_us_area content-left">
            <div class="container">
                <div class="contact_us clearfix">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="call clearfix">
                            <h6>Call Us</h6>
                            <p>+960 777 7777</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="email_us clearfix">
                            <h6>Email us</h6>
                            <p>boutique@localescapemaldives.com</p>
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
@endsection

@section('js')
        <!-- Google maps API -->
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        
        <script>

            var myCenter=new google.maps.LatLng(-37.831208, 144.998499);

            function initialize()
            {
            var mapProp = {
              center:myCenter,
              zoom:15,
                scrollwheel: false,
              mapTypeId:google.maps.MapTypeId.ROADMAP
              };

            var map=new google.maps.Map(document.getElementById("contactgoogleMap"),mapProp);

            var marker=new google.maps.Marker({
              position:myCenter,
              animation:google.maps.Animation.BOUNCE,
              icon:'img/google-pin-one.png'
            });
            
            var infowindow = new google.maps.InfoWindow({
              content:"united-states"
            });

            marker.setMap(map);
            }

            google.maps.event.addDomListener(window, 'load', initialize);        

        </script>    
@endsection