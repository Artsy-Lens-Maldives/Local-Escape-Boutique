@extends('layouts.app')

@section('body_id')
id="accomodation_page" @endsection

@section('content')
        
        <!-- start breadcrumb -->
        <section class="breadcrumb_main_area margin-bottom-80">
            <div class="container-fluid">
                <div class="row">
                    <div class="breadcrumb_main nice_title">
                        <h2>Our Rooms</h2>
                    </div>
                </div>
            </div>            
        </section>
        <!-- end breadcrunb -->
        
        <!-- start other detect room section -->
        <section class="other_room_area" style="margin-bottom: 100px;">
            <div class="container">
                <div class="row">
                    <div class="other_room">
                        <div class="section_content">
                            @if(request()->exists('room') AND request()->exists('adult') AND request()->exists('child') AND request()->exists('check_in') AND request()->exists('check_out'))
                                <!-- start hotel booking -->
                                <div class="hotel_booking_area">
                                    <div class="container">
                                        <div class="hotel_booking margin-bottom-30">
                                            <form id="form1" role="form" action="{{ url('rooms') }}" method="GET">
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="room_book border-right-dark-1">
                                                        <h6>Book Your</h6>
                                                        <p>Rooms</p>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                                    <div class="input-group border-bottom-dark-2">
                                                        <input class="date-picker" name="check_in" id="datepicker" placeholder="Arrival" type="text" @if(request()->exists('check_in')) value="{{ request()->check_in }}" @endif>
                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                                    <div class="input-group border-bottom-dark-2">
                                                        <input class="date-picker" name="check_out" id="datepicker1" placeholder="Departure" type="text" @if(request()->exists('check_out')) value="{{ request()->check_out }}" @endif>
                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <div class="row">
                                                        <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
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
                                                        <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
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
                                                        <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
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
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <button class="btn btn-primary floatright" type="submit">Search</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end hotel booking --> 

                                <!-- start single room details -->
                                <div class="accomodation_single_room">
                                    <div class="container">
                                        <div class="row">
                                            @foreach($rooms as $room)
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="single_room_wrapper clearfix">
                                                        <figure class="uk-overlay uk-overlay-hover">
                                                            <div class="room_media">
                                                                <a href="{{ url('rooms').'/'.$room->slug }}?check_in={{ request()->check_in }}&check_out={{ request()->check_out }}&room={{ request()->room }}&adult={{ request()->adult }}&child={{ request()->child }}"><img src="{{ Helper::s3_url_gen($room->first_image->thumbnail) }}" height="" alt=""></a>
                                                            </div>
                                                            <div class="room_title border-bottom-whitesmoke clearfix">
                                                                    <div class="left_room_title floatleft">
                                                                        <h6>{{ $room->name }}</h6>
                                                                        <p>${{ $room->price_night }}/ <span>night</span></p>
                                                                    </div>
                                                                    <div class="left_room_title floatright">
                                                                        <a href="{{ url('rooms').'/'.$room->slug }}?check_in={{ request()->check_in }}&check_out={{ request()->check_out }}&room={{ request()->room }}&adult={{ request()->adult }}&child={{ request()->child }}" class="btn">Book</a>
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
                                                                            <a href="{{ url('rooms').'/'.$room->slug }}?check_in={{ request()->check_in }}&check_out={{ request()->check_out }}&room={{ request()->room }}&adult={{ request()->adult }}&child={{ request()->child }}" class="btn">Book</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                    </div>
                                                </div>    
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <!-- end single room details -->
                            @else
                                <div class="section_title nice_title content-center">
                                    <h3>Search For Your Room</h3>
                                </div>
                                <!-- start hotel booking -->
                                <div class="hotel_booking_area">
                                    <div class="container">
                                        <div class="hotel_booking margin-bottom-30">
                                            <form id="form1" role="form" action="{{ url('rooms') }}" method="GET">
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <div class="room_book border-right-dark-1">
                                                        <h6>Book Your</h6>
                                                        <p>Rooms</p>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                                    <div class="input-group border-bottom-dark-2">
                                                        <input class="date-picker" name="check_in" id="datepicker" placeholder="Arrival" type="text" @if(request()->exists('check_in')) value="{{ request()->check_in }}" @endif>
                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                                    <div class="input-group border-bottom-dark-2">
                                                        <input class="date-picker" name="check_out" id="datepicker1" placeholder="Departure" type="text" @if(request()->exists('check_out')) value="{{ request()->check_out }}" @endif>
                                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <div class="row">
                                                        <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
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
                                                        <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
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
                                                        <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
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
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <button class="btn btn-primary floatright" type="submit">Search</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end hotel booking -->    
                            @endif
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- end other detect room section -->

@endsection

