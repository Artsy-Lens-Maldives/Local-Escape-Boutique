@extends('layouts.app')

@section('body_id')
id="room_detail_page" @endsection

@section('content')

        <!-- start breadcrumb -->
        <section class="breadcrumb_main_area margin-bottom-80">
            <div class="container-fluid">
                <div class="row">
                    <div class="breadcrumb_main nice_title">
                        <h2>{{ $room->name }}</h2>
                    </div>
                </div>
            </div>            
        </section>
        <!-- end breadcrunb -->

        <div class="room_detail_main margin-bottom-55">
            <div class="container">
                <div class="row main" id="main-content">
                    <div class="col-lg-9 col-md-9 col-sm-12 content" id="content">
                        <div class="deluxe_room_detail">
                            <div class="section_title content-left margin-bottom-5">
                                <h5>{{ $room->name }} Detail <span class="price floatright">$ 130</span> <br> <span class="day floatright">/ night</span></h5>
                            </div>
                            <div class="section_content">
                                <div class="showcase">
                                    <div class="section_description">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="clearfix" style="">
                                                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                                    <!-- <ul id="vertical" class="gallery list-unstyled"> -->
                                                        @foreach($room->photos as $photo)
                                                            <li data-thumb="{{ Helper::s3_url_gen($photo->thumbnail) }}">
                                                                <img alt="slider" src="{{ Helper::s3_url_gen($photo->photo_url) }}" />
                                                            </li>    
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="facilities_name clearfix margin-bottom-40 margin-top-65">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="section_title margin-bottom-35 padding-bottom-25 border-bottom-whitesmoke">
                                                        <h5>Room Fecilities</h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 no-padding-left">
                                                    <ul class="single_facilities_name clearul">
                                                        <li>
                                                            <img src="/img/home-facilities-icon-one.png" alt="">
                                                            <p>Breakfast</p>
                                                        </li>
                                                        <li>
                                                            <img src="/img/home-facilities-icon-four.png" alt="">
                                                            <p>Room service</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                    <ul class="single_facilities_name clearul">
                                                        <li>
                                                            <img src="/img/home-facilities-icon-two.png" alt="">
                                                            <p>Air conditioning</p>
                                                        </li>
                                                        <li>
                                                            <img src="/img/home-facilities-icon-ten.png" alt="">
                                                            <p>GYM fecility</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                    <ul class="single_facilities_name clearul">
                                                        <li>
                                                            <img src="/img/home-facilities-icon-eight.png" alt="">
                                                            <p>Free Parking</p>
                                                        </li>
                                                        <li>
                                                            <img src="/img/home-facilities-icon-five.png" alt="">
                                                            <p>TV LCD</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                    <ul class="single_facilities_name clearul">
                                                        <li>
                                                            <img src="/img/home-facilities-icon-three.png" alt="">
                                                            <p>Pet allowed</p>
                                                        </li>
                                                        <li>
                                                            <img src="/img/home-facilities-icon-twelve.png" alt="">
                                                            <p>Wi-fi service</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="room_facilities_des padding-top-50 padding-bottom-50 border-bottom-whitesmoke border-top-whitesmoke">
                                                    <p>
                                                        {{ $room->description }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- start welcome section -->
                                            <section class="welcome_area">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="welcome">
                                                        <div class="section_title content-left margin-top-50 margin-bottom-30">
                                                            <h5>You may Also like</h5>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                                <div class="single_room_wrapper clearfix">
                                                                    <div class="room_wrapper">
                                                                        <div class="room_media">
                                                                            <a href="#"><img src="/img/room-image-ten.jpg" alt=""></a>
                                                                        </div>
                                                                        <div class="room_title clearfix">
                                                                            <div class="left_room_title floatleft">
                                                                                <h6>Deluxe Room</h6>
                                                                                <p>$180/ <span>night</span></p>
                                                                            </div>
                                                                            <div class="left_room_title floatright">
                                                                                <a href="#" class="btn">Book</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                                <div class="single_room_wrapper clearfix">
                                                                    <div class="room_wrapper">
                                                                        <div class="room_media">
                                                                            <a href="#"><img src="/img/room-image-twelve.jpg" alt=""></a>
                                                                        </div>
                                                                        <div class="room_title clearfix">
                                                                            <div class="left_room_title floatleft">
                                                                                <h6>Deluxe Room</h6>
                                                                                <p>$180/ <span>night</span></p>
                                                                            </div>
                                                                            <div class="left_room_title floatright">
                                                                                <a href="#" class="btn">Book</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                                <div class="single_room_wrapper clearfix">
                                                                    <div class="room_wrapper">
                                                                        <div class="room_media">
                                                                            <a href="#"><img src="/img/room-image-thirteen.jpg" alt=""></a>
                                                                        </div>
                                                                        <div class="room_title clearfix">
                                                                            <div class="left_room_title floatleft">
                                                                                <h6>Deluxe Room</h6>
                                                                                <p>$180/ <span>night</span></p>
                                                                            </div>
                                                                            <div class="left_room_title floatright">
                                                                                <a href="#" class="btn">Book</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <!-- end welcome section -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 sidebar" id="sidebar">
                        <!-- start hotel booking -->
                        <div class="col-lg-12 col-md-12 col-sm-4 sidebar__inner">
                            <div class="hotel_booking_area clearfix">
                                <div class="hotel_booking">
                                    <form id="form1" role="form" action="{{ url('booking') }}" method="GET">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="room_book">
                                                <h6>Book This</h6>
                                                <p>Rooms</p>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12">
                                            <div class="input-group border-bottom-dark-2">
                                                <input class="date-picker" name="check_in" id="datepicker" placeholder="Arrival" type="text" @if(request()->exists('check_in')) value="{{ request()->check_in }}" @endif>
                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>               
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12">
                                            <div class="input-group border-bottom-dark-2">
                                                <input class="date-picker" name="check_in" id="datepicker1" placeholder="Departure" type="text" @if(request()->exists('check_out')) value="{{ request()->check_out }}" @endif>
                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>                
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="row">
                                                <div class="form-group col-lg-12 col-md-12 icon_arrow">
                                                    <div class="input-group border-bottom-dark-2">
                                                        <select class="form-control" name="room" id="room">
                                                            <option value="1" @if(request()->room == '1') selected @endif>1 Room</option>
                                                            <option value="2" @if(request()->room == '2') selected @endif>2 Rooms</option>
                                                            <option value="3" @if(request()->room == '3') selected @endif>3 Rooms</option>
                                                            <option value="4" @if(request()->room == '4') selected @endif>4 Rooms</option>
                                                            <option value="5" @if(request()->room == '5') selected @endif>5 Room</option>
                                                        </select>               
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6 col-md-6 icon_arrow">
                                                    <div class="input-group border-bottom-dark-2">
                                                        <select class="form-control" name="adult" id="adult">
                                                                <option value="1" @if(request()->adult == '1') selected @endif>1 Adult</option>
                                                                <option value="2" @if(request()->adult == '2') selected @endif>2 Adults</option>
                                                                <option value="3" @if(request()->adult == '3') selected @endif>3 Adults</option>
                                                                <option value="4" @if(request()->adult == '4') selected @endif>4 Adults</option>
                                                                <option value="5" @if(request()->adult == '5') selected @endif>5 Adults</option>
                                                                <option value="6" @if(request()->adult == '6') selected @endif>6 Adults</option>
                                                                <option value="7" @if(request()->adult == '7') selected @endif>7 Adults</option>
                                                                <option value="8" @if(request()->adult == '8') selected @endif>8 Adults</option>
                                                                <option value="9" @if(request()->adult == '9') selected @endif>9 Adults</option>
                                                                <option value="10" @if(request()->adult == '10') selected @endif>10 Adults</option>
                                                        </select>               
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6 col-md-6 icon_arrow">
                                                    <div class="input-group border-bottom-dark-2">
                                                        <select class="form-control" name="child" id="child">
                                                            <option value="0" @if(request()->child == '0') selected @endif>0 Child</option>
                                                            <option value="1" @if(request()->child == '1') selected @endif>1 Child</option>
                                                            <option value="2" @if(request()->child == '2') selected @endif>2 Children</option>
                                                            <option value="3" @if(request()->child == '3') selected @endif>3 Children</option>
                                                            <option value="4" @if(request()->child == '4') selected @endif>4 Children</option>
                                                            <option value="5" @if(request()->child == '5') selected @endif>5 Children</option>
                                                        </select>               
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <button class="btn btn-warning btn-md floatright" type="submit">Book</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end hotel booking -->
                    </div>
                </div>
            </div>
        </div>        

@endsection



@section('js')

    <script src="/js/ResizeSensor.js"></script>
    <script src="/js/sticky-sidebar.js"></script>

    <script>
        var sidebar = new StickySidebar('#sidebar', {topSpacing: 20,resizeSensor: true, minWidth: 1000});
    </script>
@endsection

@section('css')
    <style>
        .sidebar{
            will-change: min-height;
        }

        .sidebar__inner{
            transform: translate(0, 0); /* For browsers don't support translate3d. */
            transform: translate3d(0, 0, 0);
            will-change: position, transform;
        }
    </style>
@endsection
