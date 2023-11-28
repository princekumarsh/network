@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">How It Works</h6>
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
                                action="https://script.viserlab.com/mlmlab/admin/frontend/frontend-content/how_it_works"
                                method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="4lNO83LNzdd3hmUGdrnjfaysA7rztQdLAhs2JWdA">
                                <input type="hidden" name="type" value="content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Heading</label>
                                            <input type="text" class="form-control" name="heading"
                                                value="How It Works" required />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Sub heading</label>
                                            <input type="text" class="form-control" name="sub_heading"
                                                value="This secured website with a user-friendly interface and support of various languages is a breeze to use. Additionally, this site has both desktop and mobile views!!"
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
                                            <th>Icon</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <td>1</td>
                                            <td><i class="fas fa-money-bill-wave"></i></td>
                                            <td>Get Paid</td>
                                            <td>
                                                <div class="button--group">
                                                    <button class="btn btn-sm btn-outline--primary updateBtn"
                                                        data-id="54"
                                                        data-all="{&quot;icon&quot;:&quot;&lt;i class=\&quot;fas fa-money-bill-wave\&quot;&gt;&lt;\/i&gt;&quot;,&quot;title&quot;:&quot;Get Paid&quot;,&quot;description&quot;:&quot;Each member will get a commission by adding a new member. So it&#039;s a profitable process for all.&quot;}">
                                                        <i class="la la-pencil-alt"></i> Edit </button>
                                                    <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                        data-action="https://script.viserlab.com/mlmlab/admin/frontend/remove/54"
                                                        data-question="Are you sure to remove this item?"><i
                                                            class="la la-trash"></i> Remove</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><i class="fas fa-users"></i></td>
                                            <td>Bring People</td>
                                            <td>
                                                <div class="button--group">
                                                    <button class="btn btn-sm btn-outline--primary updateBtn"
                                                        data-id="55"
                                                        data-all="{&quot;icon&quot;:&quot;&lt;i class=\&quot;fas fa-users\&quot;&gt;&lt;\/i&gt;&quot;,&quot;title&quot;:&quot;Bring People&quot;,&quot;description&quot;:&quot;The strategy is new members sponsored by distributors are added either on the left or right leg.&quot;}">
                                                        <i class="la la-pencil-alt"></i> Edit </button>
                                                    <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                        data-action="https://script.viserlab.com/mlmlab/admin/frontend/remove/55"
                                                        data-question="Are you sure to remove this item?"><i
                                                            class="la la-trash"></i> Remove</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><i class="fas fa-user-edit"></i></td>
                                            <td>Sign Up</td>
                                            <td>
                                                <div class="button--group">
                                                    <button class="btn btn-sm btn-outline--primary updateBtn"
                                                        data-id="56"
                                                        data-all="{&quot;icon&quot;:&quot;&lt;i class=\&quot;fas fa-user-edit\&quot;&gt;&lt;\/i&gt;&quot;,&quot;title&quot;:&quot;Sign Up&quot;,&quot;description&quot;:&quot;Just click the register button on the website and fill up all the information there and get your account.&quot;}">
                                                        <i class="la la-pencil-alt"></i> Edit </button>
                                                    <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                        data-action="https://script.viserlab.com/mlmlab/admin/frontend/remove/56"
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
                            <h5 class="modal-title"> Add New How it works Item</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="las la-times"></i>
                            </button>
                        </div>
                        <form
                            action="https://script.viserlab.com/mlmlab/admin/frontend/frontend-content/how_it_works"
                            method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="4lNO83LNzdd3hmUGdrnjfaysA7rztQdLAhs2JWdA">
                            <input type="hidden" name="type" value="element">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Icon</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control iconPicker icon" autocomplete="off"
                                            name="icon" required>
                                        <span class="input-group-text  input-group-addon" data-icon="las la-home"
                                            role="iconpicker"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" required />
                                </div>


                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea rows="4" class="form-control" name="description" required></textarea>
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
                            <h5 class="modal-title"> Update How it works Item</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="las la-times"></i>
                            </button>
                        </div>
                        <form
                            action="https://script.viserlab.com/mlmlab/admin/frontend/frontend-content/how_it_works"
                            class="edit-route" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="4lNO83LNzdd3hmUGdrnjfaysA7rztQdLAhs2JWdA">
                            <input type="hidden" name="type" value="element">
                            <input type="hidden" name="id">
                            <div class="modal-body">

                                <div class="form-group">
                                    <label>Icon</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control iconPicker icon" autocomplete="off"
                                            name="icon" required>
                                        <span class="input-group-text  input-group-addon" data-icon="las la-home"
                                            role="iconpicker"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" required />
                                </div>


                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea rows="4" class="form-control" name="description" required></textarea>
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