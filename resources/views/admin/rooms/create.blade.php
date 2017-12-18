@extends('layouts.admin')

@section('title')
    <span>Add a new Room</span> <a class="btn btn-lg btn-info" href="{{ url('admin/rooms') }}/">Go Back</a>
@endsection

@section('content')
    <div class="container">
        <form class="form-submit labels-uppercase" id="form-submit" method="post" enctype="multipart/form-data" action="{{ url()->current() }}">
            {{ csrf_field() }}
            <section id="main-information">
                <div class="title">
                    <h2>Main Information</h2>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="form-submit-title">Name<em>*</em></label>
                            <input type="text" class="form-control" id="form-submit-name" name="name" placeholder="Double Deluxe" required="">
                        </div>
                        <!--end form-group-->
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="form-submit-title">Price Per Night<em>*</em></label>
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
                                <input type="text" class="form-control" id="form-submit-name" name="price_night" placeholder="130" required="">
                                <div class="input-group-addon">per Night</div>
                            </div>
                        </div>
                        <!--end form-group-->
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="form-submit-title">No of Beds<em>*</em></label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="form-submit-beds" name="beds" placeholder="2" required="">
                                <div class="input-group-addon">Bed(s)</div>
                            </div>
                        </div>
                        <!--end form-group-->
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="form-submit-title">Maximum adults<em>*</em></label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="form-submit-mex_adults" name="max_adults" placeholder="3" required="">
                                <div class="input-group-addon">Adult(s)</div>
                            </div>
                        </div>
                        <!--end form-group-->
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="form-submit-title">Maximum Children<em>*</em></label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="form-submit-max_child" name="max_child" placeholder="2" required="">
                                <div class="input-group-addon">Children</div>
                            </div>
                        </div>
                        <!--end form-group-->
                    </div>
                </div>
                <!--end row-->
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form-submit-description">Short Description<em>*</em></label>
                            <input type="text" class="form-control" id="form-submit-short_description" name="short_description" placeholder="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor." max="120" required="">
                        </div>
                        <!--end form-group-->
                    </div>
                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form-submit-description">Long Description<em>*</em></label>
                            <textarea class="form-control" id="form-submit-description" rows="10" name="description" required="" placeholder="Describe your accommodation"></textarea>
                        </div>
                        <!--end form-group-->
                    </div>
                </div>
                <!--end row-->
            </section>
            <hr>
            <section id="gallery">
                <div class="title">
                    <h2>Gallery</h2>
                </div>
                <div id="image_preview_text"></div>
                <div id="image_preview" style="margin-top: 10px"></div>
                <div class="file-upload">
                    <input type="file" id="images" name="image[]" class="file-upload-input with-preview" title="Click to add files" multiple onchange="preview_images();" accept="gif|jpg|png">
                    <span>Click to add images</span>
                </div>
            </section>
            <hr>
            <section id="additional-information">
                <div class="title">
                    <h2>Additional Information</h2>
                </div>
                <!--end title-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form-submit-description">Cancellation Policy<em>*</em></label>
                            <textarea class="form-control" id="form-submit-policy-cancellation" rows="10" name="cancellation_policy" required="" placeholder="Describe your cancellation policy"></textarea>
                        </div>
                        <!--end form-group-->
                        <div class="form-group">
                            <label for="form-submit-description">Policy on Children and Extra beds<em>*</em></label>
                            <textarea class="form-control" id="form-submit-children-policy" rows="10" name="children_bed_policy" required="" placeholder="Describe your policy on children and extra beds"></textarea>
                        </div>
                        <!--end form-group-->
                        <div class="form-group">
                            <label for="form-submit-description">Policy on Pets<em>*</em></label>
                            <textarea class="form-control" id="form-submit-pets-policy" rows="10" name="pets_policy" required="" placeholder="Describe your policy on pets"></textarea>
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-12-->
                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-md-12">
                        
                        <h3>Check In and Out times</h3>
                        <div class="form-group-inline">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="check-in-from">Check in time</label>
                                        <input type="text" class="form-control" id="check_in" name="check_in" placeholder="12:00 - 13:30">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="check-in-to">Check out time</label>
                                        <input type="text" class="form-control" id="check_out" name="check_out" placeholder="20:00 - 21:00">
                                    </div>
                                </div>
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end form-group-inline-->
                    
                    </div>
                    <!--end col-md-12-->
                </div>
                <!--end row-->
            </section>
            <hr>
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group center">
                            <button type="submit" class="btn btn-success btn-block btn-rounded btn-lg">Submit Now</button>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
@endsection

@section('js')
    
<script>
    function preview_images() {
        var total_file = document.getElementById("images").files.length;
        $('#image_preview').empty();
        $('#image_preview_text').html('<h3>Upload Preview</h3>')
        for (var i = 0; i < total_file; i++) {
            $('#image_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "'>");
        }
    }
</script>

@endsection

@section('css')
    <style>
        #image_preview {
            /* Prevent vertical gaps */
            line-height: 0;

            -webkit-column-count: 5;
            -webkit-column-gap:   0px;
            -moz-column-count:    5;
            -moz-column-gap:      0px;
            column-count:         5;
            column-gap:           0px;
        }

        #image_preview img {
            /* Just in case there are inline attributes */
            width: 100% !important;
            height: auto !important;
        }

        @media (max-width: 1200px) {
            #image_preview {
                -moz-column-count:    4;
                -webkit-column-count: 4;
                column-count:         4;
            }
        }
        @media (max-width: 1000px) {
            #image_preview {
                -moz-column-count:    3;
                -webkit-column-count: 3;
                column-count:         3;
            }
        }
        @media (max-width: 800px) {
            #image_preview {
                -moz-column-count:    2;
                -webkit-column-count: 2;
                column-count:         2;
            }
        }
        @media (max-width: 400px) {
            #image_preview {
                -moz-column-count:    1;
                -webkit-column-count: 1;
                column-count:         1;
            }
        }
    </style>
@endsection

