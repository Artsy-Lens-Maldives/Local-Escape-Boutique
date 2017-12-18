@extends('layouts.app')

@section('body_id')
id="gallery_page" @endsection

@section('content')
        <!-- start breadcrumb -->
        <section class="breadcrumb_main_area margin-bottom-80">
            <div class="container-fluid">
                <div class="row">
                    <div class="breadcrumb_main nice_title">
                        <h2>Gallery</h2>
                        <!-- special offer start -->
                        <div class="special_offer_main">
                            <div class="container">
                                <div class="special_offer_sub">
                                    <img src="img/special-offer-yellow-main.png" alt="imf">
                                </div>
                            </div>
                        </div>         
                        <!-- end offer start -->
                    </div>
                </div>
            </div>            
        </section>
        <!-- end breadcrunb -->

        <!-- start other detect room section -->
        <div class="other_room_area">
            <div class="container">
                <div class="row">
                    <div class="other_room">
                        <div role="tabpanel">
                            <!-- <div class="section_title content-center"> -->

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- <div class="section_content"> -->
                                <div role="tabpanel" class="tab-pane active" id="all">
                                    <!-- start single room details -->
                                    <div class="accomodation_single_room">
                                        <div class="container">
                                            <div class="row">
                                                @foreach($photos as $photo)
                                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                                        <div class="single_room_wrapper clearfix">
                                                            <div class="room_wrapper">
                                                                <div class="room_media">
                                                                    <a href="{{ Helper::s3_url_gen($photo->photo_url) }}" data-uk-lightbox="{group:'group1'}" title="Gallery">
                                                                    <figure class="uk-overlay uk-overlay-hover">
                                                                        <img alt="img" src="{{ Helper::s3_url_gen($photo->thumbnail) }}" >
                                                                        <div class="uk-overlay-panel uk-overlay-background uk-overlay-icon"></div>
                                                                    </figure>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end single room details -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end other detect room section -->    
@endsection

