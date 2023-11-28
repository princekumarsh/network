@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">FAQ Section</h6>
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-element/faq"
                        class="btn btn-sm btn-outline--primary"><i class="las la-plus"></i>Add New</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 mb-30">
                    <div class="card">
                        <div class="card-body">
                            <form action="https://script.viserlab.com/mlmlab/admin/frontend/frontend-content/faq"
                                method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="4lNO83LNzdd3hmUGdrnjfaysA7rztQdLAhs2JWdA">
                                <input type="hidden" name="type" value="content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Heading</label>
                                            <input type="text" class="form-control" name="heading"
                                                value="Frequently Asked Questions" required />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Sub heading</label>
                                            <input type="text" class="form-control" name="sub_heading"
                                                value="We always care for our clients, we have tried to answer some frequent questions about your business"
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
                                            <th>Question</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <td>1</td>
                                            <td>How to making a withdrawal?</td>
                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-element/faq/96"
                                                        class="btn btn-sm btn-outline--primary"><i
                                                            class="la la-pencil-alt"></i> Edit</a>
                                                    <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                        data-action="https://script.viserlab.com/mlmlab/admin/frontend/remove/96"
                                                        data-question="Are you sure to remove this item?"><i
                                                            class="la la-trash"></i> Remove</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>I have not received my withdrawal</td>
                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-element/faq/97"
                                                        class="btn btn-sm btn-outline--primary"><i
                                                            class="la la-pencil-alt"></i> Edit</a>
                                                    <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                        data-action="https://script.viserlab.com/mlmlab/admin/frontend/remove/97"
                                                        data-question="Are you sure to remove this item?"><i
                                                            class="la la-trash"></i> Remove</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Advantages/Benefits of Binary MLM Plan</td>
                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-element/faq/98"
                                                        class="btn btn-sm btn-outline--primary"><i
                                                            class="la la-pencil-alt"></i> Edit</a>
                                                    <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                        data-action="https://script.viserlab.com/mlmlab/admin/frontend/remove/98"
                                                        data-question="Are you sure to remove this item?"><i
                                                            class="la la-trash"></i> Remove</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>How Does the Binary MLM Plan Works?</td>
                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-element/faq/99"
                                                        class="btn btn-sm btn-outline--primary"><i
                                                            class="la la-pencil-alt"></i> Edit</a>
                                                    <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                        data-action="https://script.viserlab.com/mlmlab/admin/frontend/remove/99"
                                                        data-question="Are you sure to remove this item?"><i
                                                            class="la la-trash"></i> Remove</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>What is a Binary MLM Plan?</td>
                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-element/faq/100"
                                                        class="btn btn-sm btn-outline--primary"><i
                                                            class="la la-pencil-alt"></i> Edit</a>
                                                    <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                        data-action="https://script.viserlab.com/mlmlab/admin/frontend/remove/100"
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
                            <h5 class="modal-title"> Add New Faq Item</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="las la-times"></i>
                            </button>
                        </div>
                        <form action="https://script.viserlab.com/mlmlab/admin/frontend/frontend-content/faq"
                            method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="4lNO83LNzdd3hmUGdrnjfaysA7rztQdLAhs2JWdA">
                            <input type="hidden" name="type" value="element">
                            <div class="modal-body">

                                <div class="form-group">
                                    <label>Question</label>
                                    <input type="text" class="form-control" name="question" required />
                                </div>


                                <div class="form-group">
                                    <label>Answer</label>
                                    <textarea rows="4" class="form-control" name="answer" required></textarea>
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
                            <h5 class="modal-title"> Update Faq Item</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="las la-times"></i>
                            </button>
                        </div>
                        <form action="https://script.viserlab.com/mlmlab/admin/frontend/frontend-content/faq"
                            class="edit-route" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="4lNO83LNzdd3hmUGdrnjfaysA7rztQdLAhs2JWdA">
                            <input type="hidden" name="type" value="element">
                            <input type="hidden" name="id">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Question</label>
                                    <input type="text" class="form-control" name="question" required />
                                </div>


                                <div class="form-group">
                                    <label>Answer</label>
                                    <textarea rows="4" class="form-control" name="answer" required></textarea>
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