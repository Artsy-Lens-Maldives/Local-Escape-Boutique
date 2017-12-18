@extends('layouts.app')

@section('body_id')
id="gallery_page" @endsection

@section('content')
        <!-- start breadcrumb -->
        <section class="breadcrumb_main_area margin-bottom-80">
            <div class="container-fluid">
                <div class="row">
                    <div class="breadcrumb_main nice_title">
                        <h2>Blog Detail</h2>
                    </div>
                </div>
            </div>            
        </section>
        <!-- end breadcrunb -->

        <!-- start single blog section -->
        <section class="single_blog_area margin-bottom-150">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="single_blog_post_area">
                            <div class="sing_blog_photo">
                                <img src="/img/sing_blog_photo_1.jpg" alt="">
                                <i class="fa fa-picture-o bottom"></i>
                            </div>
                            <div class="sing_blog_content">
                                <div class="sing_blog_heading">
                                    <h2>Restaurant Services open </h2>
                                    <ul>
                                        <li>By  Admin</li>
                                        <li>3 Jan 2015</li>
                                        <li>3 Comment</li>
                                    </ul>
                                </div>
                                <div class="sing_blog_post_cont">
                                    <p>Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam maximus a est vel fringilla. Etiam vestibulum iaculis tortor nec fringilla. Proin convallis dui a elementum mollis. Cras pulvinar tellus eget est ultrices, et porttitor ante aliquam. Proin congue ut nisl vel laoreet. Morbi aliquet ullamcorper turpis ac lobortis. </p>
                                    <p>Nam sed placerat libero, non eleifend Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam maximus a est vel fringilla. Etiam vestibulum iaculis tortor nec fringilla. Proin convallis dui a elementum mollis. Cras pulvinar tellus eget est ultrices, et porttitor ante aliquam. Proin congue ut nisl vel laoreet. </p>
                                    <p>Mauris ac augue quis lacus mollis tempor. Aenean tristique vulputate sapien non ultrices. Integer augue purus, vestibulum at vestibulum nec, cursus sed risus. Duis dapibusosuere nisi, et malesuada arcu luctus id.</p>
                                    <blockquote>Mauris ac augue quis lacus mollis tempor. Aenean tristique vulputate sapien non ultrices. Integer augue purus, vestibulum at vestibulum nec, cursus sed risus. </blockquote>
                                    <p>
                                    <img src="/img/sing_blog_photo_2.jpg" class="floatleft" alt="">
                                    <span class="side-img">Nam sed placerat libero, non eleifend Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam maximus a est vel fringilla. Etiam vestibulum iaculis tortor Eporttitor ante  Etiam vestibulum iaculis tortor Eporttitor ante aliquam.</span> </p>
                                    <p>Nam sed placerat libero, non eleifend Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam maximus a est vel fringilla. Etiam vestibulum iaculis tortor nec fringilla. Proin convallis dui a elementum mollis. Cras pulvinar tellus eget est ultrices, et porttitor ante aliquam. Proin congue ut nisl vel laoreet. </p>
                                    <p>Tag: <span class="tag"> lorem,ipsum,food,receipe</span></p>
                                </div>
                                <div class="single_post_author_area">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3">
                                            <div class="author_photo">
                                                <img alt="" src="/img/author_photo.jpg">
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="author_details">
                                                <h2>John Deo</h2>
                                                <h3>Author</h3>
                                                <p>Sed et sapien elit. Aliquam laoreet odio nunc, id imperdiet mauris auctor in. Ut eu norem tristique nibh, sit amet euismod felis. Quisque aliquet nulla justomauris auctor in. </p>
                                                <ul>
                                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href=""><i class="fa fa-tumblr"></i></a></li>
                                                </ul>
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
        <!-- end single blog section -->
@endsection

