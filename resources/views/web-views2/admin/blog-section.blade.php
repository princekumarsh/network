@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">Blog Section</h6>
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-element/blog"
                        class="btn btn-sm btn-outline--primary"><i class="las la-plus"></i>Add New</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 mb-30">
                    <div class="card">
                        <div class="card-body">
                            <form action="https://script.viserlab.com/mlmlab/admin/frontend/frontend-content/blog"
                                method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="4lNO83LNzdd3hmUGdrnjfaysA7rztQdLAhs2JWdA">
                                <input type="hidden" name="type" value="content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Heading</label>
                                            <input type="text" class="form-control" name="heading"
                                                value="Latest News" required />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Sub heading</label>
                                            <input type="text" class="form-control" name="sub_heading"
                                                value="Welcome! Please check our latest news and article here..."
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
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="customer-details d-block">
                                                    <a href="javascript:void(0)" class="thumb">
                                                        <img src="https://script.viserlab.com/mlmlab/assets/images/frontend/blog/6381eb23e3df01669458723.jpg"
                                                            alt="image">
                                                    </a>
                                                </div>
                                            </td>
                                            <td>Popular Words in the Multi-Level Marketing Industry</td>
                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-element/blog/72"
                                                        class="btn btn-sm btn-outline--primary"><i
                                                            class="la la-pencil-alt"></i> Edit</a>
                                                    <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                        data-action="https://script.viserlab.com/mlmlab/admin/frontend/remove/72"
                                                        data-question="Are you sure to remove this item?"><i
                                                            class="la la-trash"></i> Remove</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="customer-details d-block">
                                                    <a href="javascript:void(0)" class="thumb">
                                                        <img src="https://script.viserlab.com/mlmlab/assets/images/frontend/blog/6381eaff00fce1669458687.jpg"
                                                            alt="image">
                                                    </a>
                                                </div>
                                            </td>
                                            <td>History of Multi-Level Marketing</td>
                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-element/blog/73"
                                                        class="btn btn-sm btn-outline--primary"><i
                                                            class="la la-pencil-alt"></i> Edit</a>
                                                    <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                        data-action="https://script.viserlab.com/mlmlab/admin/frontend/remove/73"
                                                        data-question="Are you sure to remove this item?"><i
                                                            class="la la-trash"></i> Remove</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <div class="customer-details d-block">
                                                    <a href="javascript:void(0)" class="thumb">
                                                        <img src="https://script.viserlab.com/mlmlab/assets/images/frontend/blog/6381eaf2b989a1669458674.jpg"
                                                            alt="image">
                                                    </a>
                                                </div>
                                            </td>
                                            <td>What is Multi-Level Marketing? What You Need to Know About the
                                                Industry</td>
                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-element/blog/74"
                                                        class="btn btn-sm btn-outline--primary"><i
                                                            class="la la-pencil-alt"></i> Edit</a>
                                                    <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                        data-action="https://script.viserlab.com/mlmlab/admin/frontend/remove/74"
                                                        data-question="Are you sure to remove this item?"><i
                                                            class="la la-trash"></i> Remove</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <div class="customer-details d-block">
                                                    <a href="javascript:void(0)" class="thumb">
                                                        <img src="https://script.viserlab.com/mlmlab/assets/images/frontend/blog/6381eaebb1e881669458667.png"
                                                            alt="image">
                                                    </a>
                                                </div>
                                            </td>
                                            <td>Melaleuca CEO Frank VanderSloot Promises to Resign if World Record
                                                Attempt Fails</td>
                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-element/blog/75"
                                                        class="btn btn-sm btn-outline--primary"><i
                                                            class="la la-pencil-alt"></i> Edit</a>
                                                    <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                        data-action="https://script.viserlab.com/mlmlab/admin/frontend/remove/75"
                                                        data-question="Are you sure to remove this item?"><i
                                                            class="la la-trash"></i> Remove</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>
                                                <div class="customer-details d-block">
                                                    <a href="javascript:void(0)" class="thumb">
                                                        <img src="https://script.viserlab.com/mlmlab/assets/images/frontend/blog/6381eae20f24c1669458658.png"
                                                            alt="image">
                                                    </a>
                                                </div>
                                            </td>
                                            <td>Amway Co-Founder Richard DeVos Passes Away at Age 92</td>
                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-element/blog/76"
                                                        class="btn btn-sm btn-outline--primary"><i
                                                            class="la la-pencil-alt"></i> Edit</a>
                                                    <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                        data-action="https://script.viserlab.com/mlmlab/admin/frontend/remove/76"
                                                        data-question="Are you sure to remove this item?"><i
                                                            class="la la-trash"></i> Remove</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>
                                                <div class="customer-details d-block">
                                                    <a href="javascript:void(0)" class="thumb">
                                                        <img src="https://script.viserlab.com/mlmlab/assets/images/frontend/blog/6381ec415660a1669459009.jpg"
                                                            alt="image">
                                                    </a>
                                                </div>
                                            </td>
                                            <td>2022 Top 50 MLM Companies in the U.S.</td>
                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-element/blog/77"
                                                        class="btn btn-sm btn-outline--primary"><i
                                                            class="la la-pencil-alt"></i> Edit</a>
                                                    <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                        data-action="https://script.viserlab.com/mlmlab/admin/frontend/remove/77"
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
                            <h5 class="modal-title"> Add New Blog Item</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="las la-times"></i>
                            </button>
                        </div>
                        <form action="https://script.viserlab.com/mlmlab/admin/frontend/frontend-content/blog"
                            method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="4lNO83LNzdd3hmUGdrnjfaysA7rztQdLAhs2JWdA">
                            <input type="hidden" name="type" value="element">
                            <div class="modal-body">
                                <input type="hidden" name="has_image" value="1">
                                <div class="form-group">
                                    <label>Images</label>
                                    <div class="image-upload">
                                        <div class="thumb">
                                            <div class="avatar-preview">
                                                <div class="profilePicPreview"
                                                    style="background-image: url(https://script.viserlab.com/mlmlab/placeholder-image/850x450)">
                                                    <button type="button" class="remove-image"><i
                                                            class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <div class="avatar-edit">
                                                <input type="file" class="profilePicUpload"
                                                    name="image_input[blog_image]" id="addImage0"
                                                    accept=".png, .jpg, .jpeg">
                                                <label for="addImage0" class="bg--success">Blog image</label>
                                                <small class="mt-2  ">Supported files: <b>jpeg, jpg, png</b>.
                                                    | Will be resized to: <b>850x450</b> px.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" required />
                                </div>


                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea rows="4" class="form-control nicEdit" name="description"></textarea>
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
                            <h5 class="modal-title"> Update Blog Item</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="las la-times"></i>
                            </button>
                        </div>
                        <form action="https://script.viserlab.com/mlmlab/admin/frontend/frontend-content/blog"
                            class="edit-route" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="4lNO83LNzdd3hmUGdrnjfaysA7rztQdLAhs2JWdA">
                            <input type="hidden" name="type" value="element">
                            <input type="hidden" name="id">
                            <div class="modal-body">
                                <input type="hidden" name="has_image" value="1">
                                <div class="form-group">
                                    <label>Images</label>
                                    <div class="image-upload">
                                        <div class="thumb">
                                            <div class="avatar-preview">
                                                <div class="profilePicPreview imageModalUpdate0">
                                                    <button type="button" class="remove-image"><i
                                                            class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <div class="avatar-edit">
                                                <input type="file" class="profilePicUpload"
                                                    name="image_input[blog_image]" id="fileUploader0"
                                                    accept=".png, .jpg, .jpeg">
                                                <label for="fileUploader0" class="bg--success">Blog image</label>
                                                <small class="mt-2  ">Supported files: <b>jpeg, jpg, png</b>.
                                                    | Will be resized to: <b>850x450</b> px.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" required />
                                </div>


                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea rows="4" class="form-control nicEdit" name="description"></textarea>
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