@extends('layouts.app')

@section('body_id')
id="gallery_page" @endsection

@section('content')
        <!-- start breadcrumb -->
        <section class="breadcrumb_main_area margin-bottom-80">
            <div class="container-fluid">
                <div class="row">
                    <div class="breadcrumb_main nice_title">
                        <h2>Blog</h2>
                    </div>
                </div>
            </div>            
        </section>
        <!-- end breadcrunb -->
        
        <section class="blog_area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="clearfix blog_inner" data-uk-grid>
								
                                <div class="margin-bottom-30 col-md-4 col-sm-6 col-xs-12">
									<div class="single_blog_style1">
										<div class="style_blog_img_box">
											<img src="/img/blog-pic6.jpg" alt="" />
											<a class="style_b_link" href="{{ url('blog/detail') }}"><i class="fa fa-link"></i></a>
										</div>
										<div class="blog_text_box">
											<h5>Restaurant Services open </h5>
											<ul class="clearfix">
												<li><a href="">By  Admin  |</a></li>
												<li><a href="">3 Jan 2015  |</a></li>
												<li><a href="">3 Comment</a></li>
											</ul>
											<p>Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor. </p>
											<a href="{{ url('blog/detail') }}">Read More</a>
										</div>
									</div>
								</div>
                                
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection

