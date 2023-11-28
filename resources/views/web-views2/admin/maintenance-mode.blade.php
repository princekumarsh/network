@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">Maintenance Mode</h6>
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <form action="https://script.viserlab.com/mlmlab/admin/maintenance-mode" method="post"
                            enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="4lNO83LNzdd3hmUGdrnjfaysA7rztQdLAhs2JWdA">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <div class="image-upload">
                                                <div class="thumb">
                                                    <div class="avatar-preview">
                                                        <div class="profilePicPreview"
                                                            style="background-image: url(https://script.viserlab.com/mlmlab/assets/images/maintenance/image.png)">
                                                            <button type="button" class="remove-image"><i
                                                                    class="fa fa-times"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="avatar-edit">
                                                        <input type="file" class="profilePicUpload" name="image"
                                                            id="profilePicUpload1" accept=".png">
                                                        <label for="profilePicUpload1"
                                                            class="bg--primary">Image</label>
                                                        <small class="mt-2  ">Supported files: <b>png</b>.
                                                            Will be resized to:
                                                            <b>540x270</b>
                                                            px.
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-8">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input type="checkbox" data-width="100%" data-height="50"
                                                data-onstyle="-success" data-offstyle="-danger"
                                                data-bs-toggle="toggle" data-on="Enable" data-off="Disabled"
                                                name="status">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control nicEdit" rows="10"
                                                name="description"><div class="mb-5" style="color: rgb(111, 111, 111); font-family: Nunito, sans-serif; margin-bottom: 3rem !important;"><h2 style="font-family: Poppins, sans-serif; text-align: center;"><font size="5">We're just tuning up a few things.</font></h2><h3 class="mb-3" style="text-align: center; font-weight: 600; line-height: 1.3; font-family: Exo, sans-serif; color: rgb(54, 54, 54);"><p style="text-align: center; font-family: Poppins, sans-serif;"><font size="3">We apologize for the inconvenience but Front is currently undergoing planned maintenance. Thanks for your patience.</font></p></h3></div></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn--primary w-100 h-45">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div><!-- bodywrapper__inner end -->
    </div>
@endsection