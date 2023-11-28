@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">Contact Us</h6>
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 mb-30">
                    <div class="card">
                        <div class="card-body">
                            <form
                                action="https://script.viserlab.com/mlmlab/admin/frontend/frontend-content/contact_us"
                                method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="4lNO83LNzdd3hmUGdrnjfaysA7rztQdLAhs2JWdA">
                                <input type="hidden" name="type" value="content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="hidden" name="has_image" value="1">
                                        <div class="form-group">
                                            <label>Background image</label>
                                            <div class="image-upload">
                                                <div class="thumb">
                                                    <div class="avatar-preview">
                                                        <div class="profilePicPreview"
                                                            style="background-image: url(https://script.viserlab.com/mlmlab/assets/images/frontend/contact_us/6369ffac604441667891116.png)">
                                                            <button type="button" class="remove-image"><i
                                                                    class="fa fa-times"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="avatar-edit">
                                                        <input type="file" class="profilePicUpload"
                                                            name="image_input[background_image]"
                                                            id="profilePicUpload0" accept=".png, .jpg, .jpeg">
                                                        <label for="profilePicUpload0"
                                                            class="bg--primary">Background image</label>
                                                        <small class="mt-2  ">Supported files: <b>jpeg, jpg,
                                                                png</b>.
                                                            | Will be resized to:
                                                            <b>650x780</b>
                                                            px.
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-8 ">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Heading</label>
                                                <input type="text" class="form-control" name="heading"
                                                    value="Contact Information" required />
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Short details</label>
                                                <input type="text" class="form-control" name="short_details"
                                                    value="We are here for you always! please fill up the information and feel free ask if you have any query."
                                                    required />
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email address</label>
                                                <input type="text" class="form-control" name="email_address"
                                                    value="demo@email.com" required />
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Contact details</label>
                                                <input type="text" class="form-control" name="contact_details"
                                                    value="Demo World Expo/Demo Enterprise Events" required />
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Contact number</label>
                                                <input type="text" class="form-control" name="contact_number"
                                                    value="00123547895" required />
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn--primary w-100 h-45">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>




            <div class="modal fade" id="confirmationModal" role="dialog" tabindex="-1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Confirmation Alert!</h5>
                            <button class="close" data-bs-dismiss="modal" type="button" aria-label="Close">
                                <i class="las la-times"></i>
                            </button>
                        </div>
                        <form action="" method="POST">
                            <input type="hidden" name="_token" value="4lNO83LNzdd3hmUGdrnjfaysA7rztQdLAhs2JWdA">
                            <div class="modal-body">
                                <p class="question"></p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn--dark " data-bs-dismiss="modal" type="button">No</button>
                                <button class="btn  btn--primary " type="submit">Yes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>




        </div><!-- bodywrapper__inner end -->
    </div>
@endsection