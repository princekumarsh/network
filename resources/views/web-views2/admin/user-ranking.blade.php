@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">User Rankings</h6>
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    <button class="btn btn-outline--primary btn-sm modalShow addBtn"
                        data-icon="https://script.viserlab.com/mlmlab/placeholder-image/100x100"><i
                            class="las la-plus"></i> Add New</button>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card b-radius--10 ">
                        <div class="card-body p-0">
                            <div class="table-responsive--md  table-responsive">
                                <table class="table table--light style--two">
                                    <thead>
                                        <tr>
                                            <th>Icon</th>
                                            <th>Level</th>
                                            <th>Name</th>
                                            <th>BV Left</th>
                                            <th>BV Right</th>
                                            <th>Bonus</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="https://script.viserlab.com/mlmlab/assets/images/user_rankings/6496ce6f8c6f81687604847.png"
                                                    alt=""></td>
                                            <td>1</td>
                                            <td>Silver</td>
                                            <td>1000</td>
                                            <td>1000</td>
                                            <td>$10.00</td>
                                            <td>
                                                <span class="badge badge--success">Enabled</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary editBtn me-1"
                                                    data-icon="https://script.viserlab.com/mlmlab/assets/images/user_rankings/6496ce6f8c6f81687604847.png"
                                                    data-ranking="{&quot;id&quot;:1,&quot;icon&quot;:&quot;6496ce6f8c6f81687604847.png&quot;,&quot;level&quot;:1,&quot;name&quot;:&quot;Silver&quot;,&quot;bv_left&quot;:1000,&quot;bv_right&quot;:1000,&quot;bonus&quot;:&quot;10.00000000&quot;,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2023-06-24T11:07:27.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-06-24T11:07:27.000000Z&quot;}"><i
                                                        class="las la-pen"></i>Edit</button>
                                                <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                    data-question="Are you sure to disable this ranking?"
                                                    data-action="https://script.viserlab.com/mlmlab/admin/user/ranking/status/1"><i
                                                        class="las la-eye-slash"></i>Disable</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="https://script.viserlab.com/mlmlab/assets/images/user_rankings/6496ceae7aa3e1687604910.png"
                                                    alt=""></td>
                                            <td>2</td>
                                            <td>Silver Pro</td>
                                            <td>500</td>
                                            <td>500</td>
                                            <td>$5.00</td>
                                            <td>
                                                <span class="badge badge--success">Enabled</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary editBtn me-1"
                                                    data-icon="https://script.viserlab.com/mlmlab/assets/images/user_rankings/6496ceae7aa3e1687604910.png"
                                                    data-ranking="{&quot;id&quot;:2,&quot;icon&quot;:&quot;6496ceae7aa3e1687604910.png&quot;,&quot;level&quot;:2,&quot;name&quot;:&quot;Silver Pro&quot;,&quot;bv_left&quot;:500,&quot;bv_right&quot;:500,&quot;bonus&quot;:&quot;5.00000000&quot;,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2023-06-24T11:08:30.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-06-24T11:08:30.000000Z&quot;}"><i
                                                        class="las la-pen"></i>Edit</button>
                                                <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                    data-question="Are you sure to disable this ranking?"
                                                    data-action="https://script.viserlab.com/mlmlab/admin/user/ranking/status/2"><i
                                                        class="las la-eye-slash"></i>Disable</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="https://script.viserlab.com/mlmlab/assets/images/user_rankings/6496cec192aa21687604929.png"
                                                    alt=""></td>
                                            <td>3</td>
                                            <td>Gold</td>
                                            <td>200</td>
                                            <td>200</td>
                                            <td>$2.00</td>
                                            <td>
                                                <span class="badge badge--success">Enabled</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary editBtn me-1"
                                                    data-icon="https://script.viserlab.com/mlmlab/assets/images/user_rankings/6496cec192aa21687604929.png"
                                                    data-ranking="{&quot;id&quot;:3,&quot;icon&quot;:&quot;6496cec192aa21687604929.png&quot;,&quot;level&quot;:3,&quot;name&quot;:&quot;Gold&quot;,&quot;bv_left&quot;:200,&quot;bv_right&quot;:200,&quot;bonus&quot;:&quot;2.00000000&quot;,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2023-06-24T11:08:49.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-06-24T11:08:49.000000Z&quot;}"><i
                                                        class="las la-pen"></i>Edit</button>
                                                <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                    data-question="Are you sure to disable this ranking?"
                                                    data-action="https://script.viserlab.com/mlmlab/admin/user/ranking/status/3"><i
                                                        class="las la-eye-slash"></i>Disable</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="https://script.viserlab.com/mlmlab/assets/images/user_rankings/6496ced357d951687604947.png"
                                                    alt=""></td>
                                            <td>4</td>
                                            <td>Gold Pro</td>
                                            <td>100</td>
                                            <td>100</td>
                                            <td>$1.00</td>
                                            <td>
                                                <span class="badge badge--success">Enabled</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary editBtn me-1"
                                                    data-icon="https://script.viserlab.com/mlmlab/assets/images/user_rankings/6496ced357d951687604947.png"
                                                    data-ranking="{&quot;id&quot;:4,&quot;icon&quot;:&quot;6496ced357d951687604947.png&quot;,&quot;level&quot;:4,&quot;name&quot;:&quot;Gold Pro&quot;,&quot;bv_left&quot;:100,&quot;bv_right&quot;:100,&quot;bonus&quot;:&quot;1.00000000&quot;,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2023-06-24T11:09:07.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-06-24T11:09:07.000000Z&quot;}"><i
                                                        class="las la-pen"></i>Edit</button>
                                                <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                    data-question="Are you sure to disable this ranking?"
                                                    data-action="https://script.viserlab.com/mlmlab/admin/user/ranking/status/4"><i
                                                        class="las la-eye-slash"></i>Disable</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="https://script.viserlab.com/mlmlab/assets/images/user_rankings/6496cee6c400d1687604966.png"
                                                    alt=""></td>
                                            <td>5</td>
                                            <td>Platinum</td>
                                            <td>50</td>
                                            <td>50</td>
                                            <td>$0.50</td>
                                            <td>
                                                <span class="badge badge--success">Enabled</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary editBtn me-1"
                                                    data-icon="https://script.viserlab.com/mlmlab/assets/images/user_rankings/6496cee6c400d1687604966.png"
                                                    data-ranking="{&quot;id&quot;:5,&quot;icon&quot;:&quot;6496cee6c400d1687604966.png&quot;,&quot;level&quot;:5,&quot;name&quot;:&quot;Platinum&quot;,&quot;bv_left&quot;:50,&quot;bv_right&quot;:50,&quot;bonus&quot;:&quot;0.50000000&quot;,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2023-06-24T11:09:26.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-06-24T11:09:26.000000Z&quot;}"><i
                                                        class="las la-pen"></i>Edit</button>
                                                <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                    data-question="Are you sure to disable this ranking?"
                                                    data-action="https://script.viserlab.com/mlmlab/admin/user/ranking/status/5"><i
                                                        class="las la-eye-slash"></i>Disable</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table><!-- table end -->
                            </div>
                        </div>
                    </div><!-- card end -->
                </div>
            </div>

            <div class="modal fade" id="rankingModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New User Ranking</h5>
                            <button type="button" class="close" data-bs-dismiss="modal">
                                <i class="las la-times"></i>
                            </button>
                        </div>
                        <form action="https://script.viserlab.com/mlmlab/admin/user/ranking/store" method="post"
                            enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="33FjmTH1MdyGTbosKHwbeOHGBjmEgzgztdO8Ic7k">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-5">
                                        <div class="form-group">
                                            <label class="icon">Icon</label>
                                            <div class="image-upload">
                                                <div class="thumb">
                                                    <div class="avatar-preview">
                                                        <div class="profilePicPreview">
                                                            <button type="button" class="remove-image"><i
                                                                    class="fa fa-times"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="avatar-edit">
                                                        <input type="file" class="profilePicUpload d-none"
                                                            name="icon" id="profilePicUpload1"
                                                            accept=".png, .jpg, .jpeg" required>
                                                        <label for="profilePicUpload1"
                                                            class="bg--success mt-3">Upload Image</label>
                                                        <small class="mt-2">Supported files: <b>png, jpeg, jpg.</b>
                                                            Image will be resized into 100x100 px</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Level</label>
                                                    <input type="number" class="form-control" name="level" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" name="name" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>BV Left</label>
                                            <div class="input-group">
                                                <input type="number" step="any" name="bv_left" min="0"
                                                    class="form-control" required>
                                                <span class="input-group-text">BV</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>BV Right</label>
                                            <div class="input-group">
                                                <input type="number" step="any" name="bv_right" min="0"
                                                    class="form-control" required>
                                                <span class="input-group-text">BV</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Bonus</label>
                                            <div class="input-group">
                                                <input type="number" step="any" name="bonus" min="0"
                                                    class="form-control" required>
                                                <span class="input-group-text">USD</span>
                                            </div>
                                        </div>
                                    </div>
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
                            <input type="hidden" name="_token" value="33FjmTH1MdyGTbosKHwbeOHGBjmEgzgztdO8Ic7k">
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