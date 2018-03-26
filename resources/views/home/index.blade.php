@extends('layouts.app')

@section('body_id')
id="home_one" @endsection

@section('content')

        {{-- <div id="loader-wrapper">
            <div class="logo"><a href="#"><span style="text-align: center;">Local Escape<br>Boutique</span></a></div>
            <div id="loader">
            </div>
        </div> --}}

        <!-- start main slider -->
        <div class="main_slider_area">
            <div class="main_slider" id="slider_rev">
                <!-- start hotel booking -->
                <div class="hotel_booking_area">
                    <div class="container">
                        <div class="hotel_booking">
                            <form id="form1" role="form" action="https://hotels.cloudbeds.com/reservas/qiSDOa" method="POST">
                                <input type="hidden" name="date_format" value="d/m/Y" />
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <div class="room_book border-right-dark-1">
                                        <h6>Book Your</h6>
                                        <p>Rooms</p>
                                    </div>
                                </div>
                                <div class="form-group col-lg-4 col-md-4 col-sm-4">
                                    <div class="input-group border-bottom-dark-2">
                                        <input class="datepicker date-picker" name="widget_date" id="datepicker" placeholder="Arrival" type="text">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                <div class="form-group col-lg-4 col-md-4 col-sm-4">
                                    <div class="input-group border-bottom-dark-2">
                                        <input class="datepicker date-picker" name="widget_date_to" id="datepicker1" placeholder="Departure" type="text">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <button style="background: #3ac4fa none repeat scroll 0 0; color: white;" class="btn btn-primary" type="submit">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end hotel booking -->
                <div class="fullwidthbanner-container" >
                    <div class="fullwidth_home_banner">
                        <ul>
                            
                            <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="/img/custom/124765165.jpg" alt="slide" >
                                <div class="tp-caption large_black sfr" data-x="105" data-y="197" data-speed="1200" data-start="1100" data-easing="easeInOutBack"
                                    style="font-family: 'Playfair Display', serif; font-size: 48px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                    A brand New Hotel
                                </div>
                                <div class="tp-caption large_black sfr" data-x="105" data-y="255" data-speed="1500" data-start="1400" data-easing="easeInOutBack"
                                    style="font-family: 'Playfair Display', serif; font-size: 48px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                    Beyond Ordinary
                                </div>
                                <div class="tp-caption lfb carousel-caption-inner" data-x="105" data-y="313" data-speed="1300" data-start="1700" data-easing="easeInOutBack" 
                                    style="background: #3ac4fa; padding: 10px; cursor: pointer;">
                                    <a href="https://hotels.cloudbeds.com/reservation/qiSDOa" class="" style="background: #3ac4fa; border-radius: 0; color: #313a45; display: inline-block;  font-size: 18px; padding: 8px 34px; text-transform: uppercase; border: 1px solid #00a3d2;">Book Now</a>
                                </div>
                            </li>

                            <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="/img/custom/124753713.jpg" alt="slide" >
                                <div class="tp-caption large_black sfr" data-x="105" data-y="197" data-speed="1200" data-start="1100" data-easing="easeInOutBack"
                                    style="font-family: 'Playfair Display', serif; font-size: 48px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                    Book Your Summer Holidays
                                </div>
                                <div class="tp-caption large_black sfr" data-x="105" data-y="255" data-speed="1500" data-start="1400" data-easing="easeInOutBack"
                                    style="font-family: 'Playfair Display', serif; font-size: 48px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                                    With Local Escape Boutique
                                </div>
                                <div class="tp-caption lfb carousel-caption-inner" data-x="105" data-y="313" data-speed="1300" data-start="1700" data-easing="easeInOutBack" 
                                    style="background: #3ac4fa; padding: 10px; cursor: pointer;">
                                    <a href="#" class="" style="background: #3ac4fa; border-radius: 0; color: #313a45; display: inline-block;  font-size: 18px; padding: 8px 34px; text-transform: uppercase; border: 1px solid #00a3d2;">Book Now</a>
                                </div>
                            </li>							                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end main slider -->
        
        <!-- start welcome section -->
        <section class="welcome_area">  
            <div class="container">
                    <div class="welcome">
                        <div class="section_title nice_title content-center">
                            <h3>Welcome To Local Escape Boutique</h3>
                        </div>
                        <div class="section_description">
                            <p>Featuring free WiFi, Local Escape Boutique offers accommodation in Male City, 100 m from Sultan Park. Each accommodation at the 4-star guest house has city views, and guests can enjoy access to a sun terrace. National Football Stadium is a 2-minute walk from the property.</p>
                        </div>
                        {{-- <div class="row">
                            @foreach($rooms as $room)
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="single_room_wrapper clearfix">
                                        <figure class="uk-overlay uk-overlay-hover">
                                            <div class="room_media">
                                                <a href="https://hotels.cloudbeds.com/reservation/qiSDOa"><img src="{{ Helper::s3_url_gen($room->first_image->thumbnail) }}" height="" alt=""></a>
                                            </div>
                                            <div class="room_title border-bottom-whitesmoke clearfix">
                                                    <div class="left_room_title floatleft">
                                                        <h6>{{ $room->name }}</h6>
                                                        <p>${{ $room->price_night }}/ <span>night</span></p>
                                                    </div>
                                                    <div class="left_room_title floatright">
                                                        <a href="{{ url('room').'/'.$room->slug }}" class="btn">Book</a>
                                                    </div>
                                                </div>
                                            <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                    <h5>{{ $room->name }}</h5>
                                                    <p>{{ $room->short_description }}</p>
                                                    <div class="single_room_cost clearfix">
                                                        <div class="floatleft">
                                                            <p>${{ $room->price_night }}/ <span>night</span></p>
                                                        </div>
                                                        <div class="floatright">
                                                            <a href="https://hotels.cloudbeds.com/reservation/qiSDOa" class="btn">Book</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>    
                            @endforeach
                        </div> --}}
                    </div>
            </div>
        </section>
        <!-- end welcome section -->
        
        <!-- start Hotel Facilities section -->
        <section class="hotel_facilities_area margin-top-115 margin-bottom-100">
            <div class="container">
                <div class="hotel_facilities">
                    <div class="section_title nice_title content-center">
                        <h3>Hotel facilties</h3>
                    </div>
                    <div class="hotel_facilities_content">
                        <div role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#restaurant" aria-controls="restaurant" role="tab" data-toggle="tab"><svg class="bk-icon -iconset-food hp__facility_group_icon" fill="#04a4d3" height="48" width="32" viewBox="0 0 128 128"><g id="svg-1066b" data-name="8x"><path id="svg-121df" d="M44.11,8.88,48,44A12,12,0,0,1,36,56H32.44l3.32,59.78a4,4,0,0,1-4,4.22H24.23a4,4,0,0,1-4-4.22L23.56,56H20A12,12,0,0,1,8,44L11.89,8.88a1,1,0,0,1,1-.88H15a1,1,0,0,1,1,1V28a4,4,0,0,0,4,4h4.8L26,9a1,1,0,0,1,1-1H29a1,1,0,0,1,1,1L31.2,32H36a4,4,0,0,0,4-4V9a1,1,0,0,1,1-1h2.12A1,1,0,0,1,44.11,8.88ZM60,24V72h8l-3.77,43.78a4,4,0,0,0,4,4.22h7.54a4,4,0,0,0,4-4.22L80,8H76A16,16,0,0,0,60,24Zm60,8c0-13.25-7.16-24-16-24S88,18.75,88,32c0,11,4.91,20.21,11.61,23.08l-3.37,60.7a4,4,0,0,0,4,4.22h7.54a4,4,0,0,0,4-4.22l-3.37-60.7C115.09,52.21,120,43,120,32Z"></path></g></svg><br><span>restaurant</span></a>
                                </li>
                                <li role="presentation">
                                    <a href="#sports-club" aria-controls="swimming-pool" role="tab" data-toggle="tab"><svg class="bk-icon -iconset-pool hp__important_facility_icon" fill="#04a4d3" height="48" width="32" viewBox="0 0 128 128"><g id="svg-140c8" data-name="8x"><path id="svg-691b" d="M8.65,79.16a3.81,3.81,0,0,1,5.54-1.25c21.1,15,34.52,9.07,50.06,2.15,14.43-6.42,30.78-13.7,53.54-1.32a4.54,4.54,0,0,1,1.79,5.84,3.86,3.86,0,0,1-5.37,1.94C94.7,75.9,81.38,81.83,67.28,88.11,58.51,92,49.56,96,39.27,96,30.63,96,21,93.19,9.81,85.18A4.59,4.59,0,0,1,8.65,79.16ZM117.79,94.74C95,82.35,78.68,89.63,64.25,96.06c-15.54,6.92-29,12.89-50.06-2.15a3.81,3.81,0,0,0-5.54,1.25,4.59,4.59,0,0,0,1.15,6C21,109.19,30.63,112,39.27,112c10.29,0,19.23-4,28-7.89,14.1-6.28,27.41-12.21,46.93-1.59a3.86,3.86,0,0,0,5.37-1.94A4.54,4.54,0,0,0,117.79,94.74ZM100,56A12,12,0,1,0,88,44,12,12,0,0,0,100,56ZM64.25,71.94c7.15-3.2,15.11-7,23.75-8.1,0,0-4-8.8-6.82-13.93L63.24,20.71c-2.49-4.36-7.49-6-13.58-3.63L27.89,26a6.22,6.22,0,0,0-3.49,7.84,6,6,0,0,0,7.93,3.38l17.73-7.54a4,4,0,0,1,5.05,1.75l6,13.2L24,71.88C41.58,81.71,50.33,78.17,64.25,71.94Z"></path></g></svg><br><span>pool</span></a>
                                </li>
                                <li role="presentation">
                                    <a href="#pick-up" aria-controls="pick-up" role="tab" data-toggle="tab"><svg class="bk-icon -iconset-wifi hp__important_facility_icon" fill="#04a4d3" height="48" width="32" viewBox="0 0 128 128"><g id="svg-841b" data-name="8x"><circle cx="64" cy="100" r="12"></circle><path d="M118.28,32.71A94.88,94.88,0,0,0,64,16,94.88,94.88,0,0,0,9.72,32.71a4,4,0,1,0,4.55,6.58A86.92,86.92,0,0,1,64,24a86.92,86.92,0,0,1,49.72,15.29,4,4,0,1,0,4.55-6.58Z"></path><path d="M87.66,68.36a54.89,54.89,0,0,0-47.32,0,4,4,0,0,0,3.32,7.28,46.91,46.91,0,0,1,40.68,0,4,4,0,0,0,3.32-7.28Z"></path><path d="M104,50.53a81.2,81.2,0,0,0-80,0,4,4,0,0,0,4,6.93,73.2,73.2,0,0,1,72,0,4,4,0,0,0,4-6.95Z"></path></g></svg><br><span>Free WiFi</span></a>
                                </li>
                                <li role="presentation">
                                    <a href="#bar" aria-controls="bar" role="tab" data-toggle="tab"><svg class="bk-icon -iconset-hour hp__important_facility_icon" fill="#04a4d3" height="48" width="32" viewBox="0 0 128 128"><g id="svg-b2e6" data-name="8x"><path id="svg-5754" d="M120,64A56,56,0,1,1,64,8,54.17,54.17,0,0,1,95.59,18.81l9.49-9.49a4,4,0,0,1,6.79,2.26l4,28v.19a4,4,0,0,1,0,.63v.31a4,4,0,0,1-.11.55c0,.1-.09.19-.09.29a4,4,0,0,1-.24.52l-.14.25a4,4,0,0,1-.4.5l-.12.16-.27.21-.33.25-.37.19c-.11,0-.22.16-.33.16l-.4.12a1.31,1.31,0,0,1-.34.09h-1.3l-28-4a4,4,0,0,1-2.25-6.83L90,24.4A46,46,0,0,0,64,16a48,48,0,1,0,48,48,4,4,0,1,1,8,0ZM41.26,71.6l-4,3.65V80H59.7V75H46.58l3.64-3.47c4.31-3.82,8.32-8.11,8.32-13.57,0-6-3.82-9.93-10.58-9.93A17.34,17.34,0,0,0,37.7,51.25l-.16.12,2.08,5.21a12.22,12.22,0,0,1,6.9-2.45c4.17,0,5.8,2.53,5.8,4.13C52.29,61.71,48,65.54,41.26,71.6Zm43,8.4V74H88V69H84.3V61H77.84v8H70.51l8.82-21H73.17L64,69.36V74H77.84v6Z"></path></g></svg><br><span>front desk</span></a>
                                </li>
                                <li role="presentation">
                                    <a href="#gym" aria-controls="gym" role="tab" data-toggle="tab"><svg class="bk-icon -iconset-info_sign hp__facility_group_icon" fill="#04a4d3" height="48" width="32" viewBox="0 0 128 128"><g id="svg-53e5" data-name="8x"><path d="M49.4,85l4.17-17.19c.69-2.71.83-3.79,0-3.79-1.11,0-5.85,1.9-8.77,3.79l-1.81-3C51.9,57.33,62.2,53,66.65,53c3.76,0,4.31,4.33,2.5,11L64.29,82c-.83,3.25-.42,4.33.42,4.33,1.11,0,4.73-1.35,8.21-4.06L75,85c-8.63,8.66-18.23,12-21.84,12S46.76,94.7,49.4,85Z"></path><path d="M75,35.92A9.24,9.24,0,0,1,65.76,45c-4.41,0-6.89-2.74-6.76-7.06A9,9,0,0,1,68.1,29C72.65,29,75,32.17,75,35.92Z"></path><path d="M62,16A48,48,0,1,1,14,64,48.05,48.05,0,0,1,62,16m0-8a56,56,0,1,0,56,56A56,56,0,0,0,62,8Z"></path></g></svg><br><span>General</span></a>
                                </li>
                            </ul>                           

                          
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="restaurant">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="co-lg-5 col-md-5 col-sm-6">
                                                <div class="single-tab-image">
                                                    <a href="#"><img src="/img/custom/124761777.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="co-lg-7 col-md-7 col-sm-6">
                                                <div class="single-tab-details">
                                                    <h6>The world class</h6>
                                                    <h3>Restaurant</h3>
                                                    <p></p>
                                                    <div class="our_services">
                                                        <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                        <a href="#">service charge : $15</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="sports-club">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="co-lg-5 col-md-5">
                                                <div class="single-tab-image">
                                                    <a href="#"><img src="/img/custom/132322587.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="co-lg-7 col-md-7">
                                                <div class="single-tab-details">
                                                    <h6>The world class</h6>
                                                    <h3>Swimming Pool</h3>
                                                    <p>
                                                        At the stunning outdoor pool you can find that sense of calm and rejuvenation the way you want to.
                                                    </p>
                                                    <div class="our_services">
                                                        <a href="#" class="margin-right-33">Service Hours: 19.00-22:00 </a>
                                                        <a href="#">service charge : $15</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="pick-up">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="co-lg-5 col-md-5">
                                                <div class="single-tab-image">
                                                    <a href="#"><img src="/img/custom/124753713.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="co-lg-7 col-md-7">
                                                <div class="single-tab-details">
                                                    <h6>The world class</h6>
                                                    <h3>Free Wifi</h3>
                                                    <p></p>
                                                    <div class="our_services">
                                                        <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                        <a href="#">service charge : $15</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="bar">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="co-lg-5 col-md-5">
                                                <div class="single-tab-image">
                                                    <a href="#"><img src="/img/custom/124765165.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="co-lg-7 col-md-7">
                                                <div class="single-tab-details">
                                                    <h6>The world class</h6>
                                                    <h3>24 Hour Front Desk</h3>
                                                    <p></p>
                                                    <div class="our_services">
                                                        <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                        <a href="#">service charge : $15</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="gym">
                                    <div class="single-tab-content">
                                        <div class="row">
                                            <div class="co-lg-5 col-md-5">
                                                <div class="single-tab-image">
                                                    <a href="#"><img src="/img/custom/Boutique Photos-3-of-90.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="co-lg-7 col-md-7">
                                                <div class="single-tab-details">
                                                    <h6>The world class</h6>
                                                    <h3>Rooms</h3>
                                                    <p>
                                                        Our guestrooms have everything you need and nothing you don't. With a host of thoughtful touches ranging from fast, free WiFi to an absolutely delicious in-room Order-In menu, comfort is key. When you’re ready to put your feet up after a day of exploring all that Malé has to offer, I’ll be on hand to make you feel at home.
                                                    </p>
                                                    <div class="our_services">
                                                        <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                        <a href="#">service charge : $15</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                           
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end Hotel Facilities section -->

        <!-- start About Us section -->
        <section class="about_us_area margin-bottom-128">
            <div class="container">
                <div class="about_us clearfix">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="showcase">
                            <div class="section_title margin-bottom-50">
                                <h5>Hotel Gallery</h5>
                            </div>
                            <div class="section_description">
                                <div class="clearfix demo" style="">
                                    <ul id="vertical" class="gallery list-unstyled">
                                        <li data-thumb="img/custom/gallery/124765165.jpg">
                                            <img alt="slider" src="/img/custom/gallery/124765165.jpg" />
                                        </li>
                                        <li data-thumb="img/custom/gallery/124753766.jpg"> 
                                            <img alt="slider" src="/img/custom/gallery/124753766.jpg" />
                                        </li>
                                        <li data-thumb="img/custom/gallery/124753718.jpg"> 
                                            <img alt="slider" src="/img/custom/gallery/124753718.jpg" />
                                        </li>
                                        <li data-thumb="img/custom/gallery/132322587.jpg"> 
                                            <img alt="slider" src="/img/custom/gallery/132322587.jpg" />
                                        </li>
                                        <li data-thumb="img/custom/gallery/132322603.jpg"> 
                                            <img alt="slider" src="/img/custom/gallery/132322603.jpg" />
                                        </li>
                                        <li data-thumb="img/custom/gallery/126183121.jpg"> 
                                            <img alt="slider" src="/img/custom/gallery/126183121.jpg" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="customer_says">
                            <div class="section_title margin-bottom-50">
                                <h5>Customer Reviews</h5>
                            </div>
                            <div class="section_description">
                                <div id="customer_says_slider" class="carousel slide" data-ride="carousel" data-pause="none">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <div class="single_says">
                                                <div class="customer_comment">
                                                    <p>
                                                        "Reception lady and other staffs were really good helped get through the check in process in a very friendly and professional way. Want management to know how great reception and others staff were. The choice of the hotel was OK for my trip Place of residence I love the high roles The room is very knowledgeable about the location Very nice Deserving God willing in my next trip back to him"
                                                    </p>
                                                </div>
                                                <div class="customer_detail clearfix">
                                                    <div class="customer_identity floatleft">
                                                        <h6>Mohammad - Russia</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="single_says">
                                                <div class="customer_comment">
                                                    <p>
                                                        “Room was okay and bed is very soft but I d'like that. Personal was very helpful with carrying bags and also provide me with special breakfast because I'm celiac and didn't say that in advance. Although, normally the breakfast is somewhat more diverse in hotels but this breakfast is very basic (and it isn't cheap).”
                                                    </p>
                                                </div>
                                                <div class="customer_detail clearfix">
                                                    <div class="customer_identity floatleft">
                                                        <h6>Cecile - Netherlands</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Controls -->
                                    <a class="slider_says left" href="#customer_says_slider" role="button" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="slider_says right" href="#customer_says_slider" role="button" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end About Us section -->
        
        <!-- start contact us area -->
        <section class="contact_us_area content-left">
            <div class="container">
                <div class="contact_us clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                        <div class="call clearfix">
                            <h6>Call Us</h6>
                            <p>+960 400-8800</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="email_us clearfix">
                            <h6>Email us</h6>
                            <p>boutique@localescapemaldives.com</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="social_icons clearfix">
                            <ul>
                                <li><a href="https://facebook.com/localescapemaldives"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact us area -->

@endsection

@section('js')
    <script>
        $('#datepicker').datepicker({
            format: 'dd/mm/yyyy'
        });
        $('#datepicker1').datepicker({
            format: 'dd/mm/yyyy'
        });
    </script>
@endsection