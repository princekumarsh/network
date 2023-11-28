@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">Logo &amp; Favicon</h6>
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                </div>
            </div>

            <div class="row mb-none-30">
                <div class="col-md-12 mb-30">
                    <div class="card bl--5-primary">
                        <div class="card-body">
                            <p class="text--primary">If the logo and favicon are not changed after you update from
                                this page, please <span class="text--danger">clear the cache</span> from your
                                browser. As we keep the filename the same after the update, it may show the old
                                image for the cache. usually, it works after clear the cache but if you still see
                                the old logo or favicon, it may be caused by server level or network level caching.
                                Please clear them too.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-30">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="4lNO83LNzdd3hmUGdrnjfaysA7rztQdLAhs2JWdA">
                                <div class="row">
                                    <div class="form-group col-sm-6 col-xl-3">
                                        <div class="image-upload">
                                            <div class="thumb">
                                                <div class="">
                                                    <div class="row">
                                                        <div class="avatar-preview">
                                                            <div class="profilePicPreview logoPicPrev"
                                                                style="background-image: url(https://script.viserlab.com/mlmlab/assets/images/logoIcon/logo_dark.png)">
                                                                <button class="remove-image" type="button"><i
                                                                        class="fa fa-times"></i></button>
                                                            </div>
                                                            <div class="avatar-edit">
                                                                <input class="profilePicUpload"
                                                                    id="profilePicUpload1" name="logo_dark"
                                                                    type="file" accept=".png, .jpg, .jpeg">
                                                                <label class="bg--primary"
                                                                    for="profilePicUpload1">Select Dark Logo</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6 col-xl-3">
                                        <div class="image-upload">
                                            <div class="thumb">
                                                <div class="">
                                                    <div class="row">
                                                        <div class="avatar-preview">
                                                            <div class="profilePicPreview logoPicPrev bg--dark"
                                                                style="background-image: url(https://script.viserlab.com/mlmlab/assets/images/logoIcon/logo.png)">
                                                                <button class="remove-image" type="button"><i
                                                                        class="fa fa-times"></i></button>
                                                            </div>
                                                            <div class="avatar-edit">
                                                                <input class="profilePicUpload"
                                                                    id="profilePicUploadDark" name="logo"
                                                                    type="file" accept=".png, .jpg, .jpeg">
                                                                <label class="bg--primary"
                                                                    for="profilePicUploadDark">Select Logo</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-6">
                                        <div class="image-upload">
                                            <div class="thumb">
                                                <div class="avatar-preview">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="profilePicPreview logoPicPrev"
                                                                style="background-image: url(https://script.viserlab.com/mlmlab/assets/images/logoIcon/favicon.png)">
                                                                <button class="remove-image" type="button"><i
                                                                        class="fa fa-times"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mt-sm-0 mt-4">
                                                            <div class="profilePicPreview logoPicPrev bg--dark"
                                                                style="background-image: url(https://script.viserlab.com/mlmlab/assets/images/logoIcon/favicon.png)">
                                                                <button class="remove-image" type="button"><i
                                                                        class="fa fa-times"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="avatar-edit">
                                                    <input class="profilePicUpload" id="profilePicUpload2"
                                                        name="favicon" type="file" accept=".png">
                                                    <label class="bg--primary" for="profilePicUpload2">Select
                                                        Favicon</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn--primary w-100 h-45" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div><!-- bodywrapper__inner end -->
    </div>
@endsection