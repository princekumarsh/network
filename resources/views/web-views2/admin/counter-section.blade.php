@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">Counter Section</h6>
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    <a href="javascript:void(0)" class="btn btn-sm btn-outline--primary addBtn"><i
                            class="las la-plus"></i>Add New</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 mb-30">
                    <div class="card">
                        <div class="card-body">
                            <form
                                action="https://script.viserlab.com/mlmlab/admin/frontend/frontend-content/counter"
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
                                                            style="background-image: url(https://script.viserlab.com/mlmlab/assets/images/frontend/counter/638219f1423511669470705.jpg)">
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
                                                            <b>1920x400</b>
                                                            px.
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-8 ">
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



            <div class="d-flex flex-wrap justify-content-end mb-3">
                <div class="d-inline">
                    <div class="input-group justify-content-end">
                        <input type="text" name="search_table" class="form-control bg--white"
                            placeholder="Search...">
                        <button class="btn btn--primary input-group-text"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive--sm table-responsive">
                                <table class="table table--light style--two custom-data-table">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Title</th>
                                            <th>Counter value</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <td>1</td>
                                            <td>Total Invest</td>
                                            <td>5M+</td>
                                            <td>
                                                <div class="button--group">
                                                    <button class="btn btn-sm btn-outline--primary updateBtn"
                                                        data-id="62"
                                                        data-all="{&quot;title&quot;:&quot;Total Invest&quot;,&quot;counter_value&quot;:&quot;5M+&quot;}">
                                                        <i class="la la-pencil-alt"></i> Edit </button>
                                                    <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                        data-action="https://script.viserlab.com/mlmlab/admin/frontend/remove/62"
                                                        data-question="Are you sure to remove this item?"><i
                                                            class="la la-trash"></i> Remove</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Total Deposit</td>
                                            <td>8M+</td>
                                            <td>
                                                <div class="button--group">
                                                    <button class="btn btn-sm btn-outline--primary updateBtn"
                                                        data-id="63"
                                                        data-all="{&quot;title&quot;:&quot;Total Deposit&quot;,&quot;counter_value&quot;:&quot;8M+&quot;}">
                                                        <i class="la la-pencil-alt"></i> Edit </button>
                                                    <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                        data-action="https://script.viserlab.com/mlmlab/admin/frontend/remove/63"
                                                        data-question="Are you sure to remove this item?"><i
                                                            class="la la-trash"></i> Remove</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Total Withdraw</td>
                                            <td>3M+</td>
                                            <td>
                                                <div class="button--group">
                                                    <button class="btn btn-sm btn-outline--primary updateBtn"
                                                        data-id="64"
                                                        data-all="{&quot;title&quot;:&quot;Total Withdraw&quot;,&quot;counter_value&quot;:&quot;3M+&quot;}">
                                                        <i class="la la-pencil-alt"></i> Edit </button>
                                                    <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                        data-action="https://script.viserlab.com/mlmlab/admin/frontend/remove/64"
                                                        data-question="Are you sure to remove this item?"><i
                                                            class="la la-trash"></i> Remove</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Total Users</td>
                                            <td>5K+</td>
                                            <td>
                                                <div class="button--group">
                                                    <button class="btn btn-sm btn-outline--primary updateBtn"
                                                        data-id="65"
                                                        data-all="{&quot;title&quot;:&quot;Total Users&quot;,&quot;counter_value&quot;:&quot;5K+&quot;}">
                                                        <i class="la la-pencil-alt"></i> Edit </button>
                                                    <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                        data-action="https://script.viserlab.com/mlmlab/admin/frontend/remove/65"
                                                        data-question="Are you sure to remove this item?"><i
                                                            class="la la-trash"></i> Remove</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="addModal" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"> Add New Counter Item</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="las la-times"></i>
                            </button>
                        </div>
                        <form action="https://script.viserlab.com/mlmlab/admin/frontend/frontend-content/counter"
                            method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="4lNO83LNzdd3hmUGdrnjfaysA7rztQdLAhs2JWdA">
                            <input type="hidden" name="type" value="element">
                            <div class="modal-body">

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" required />
                                </div>


                                <div class="form-group">
                                    <label>Counter value</label>
                                    <input type="text" class="form-control" name="counter_value" required />
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn--primary w-100 h-45">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div id="updateBtn" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"> Update Counter Item</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="las la-times"></i>
                            </button>
                        </div>
                        <form action="https://script.viserlab.com/mlmlab/admin/frontend/frontend-content/counter"
                            class="edit-route" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="4lNO83LNzdd3hmUGdrnjfaysA7rztQdLAhs2JWdA">
                            <input type="hidden" name="type" value="element">
                            <input type="hidden" name="id">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" required />
                                </div>

                                <div class="form-group">
                                    <label>Counter value</label>
                                    <input type="text" class="form-control" name="counter_value" required />
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn--primary w-100 h-45">Submit</button>
                            </div>
                        </form>
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