@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">Footer Section</h6>
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 mb-30">
                    <div class="card">
                        <div class="card-body">
                            <form action="https://script.viserlab.com/mlmlab/admin/frontend/frontend-content/footer"
                                method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="4lNO83LNzdd3hmUGdrnjfaysA7rztQdLAhs2JWdA">
                                <input type="hidden" name="type" value="content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Short details</label>
                                            <input type="text" class="form-control" name="short_details"
                                                value="We are a worldwide trusted company . This secured website with a user-friendly interface and support of various languages is a breeze to use. Additionally, this site has both desktop and mobile. This secured website with a user-friendly interface and support of various languages is a breeze to use. Additionally, this site has both desktop and mobile."
                                                required />
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