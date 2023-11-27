@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">Withdrawal Methods</h6>
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    <div class="input-group w-auto search-form">
                        <input type="text" name="search_table" class="form-control bg--white"
                            placeholder="Search...">
                        <button class="btn btn--primary input-group-text"><i class="fa fa-search"></i></button>
                    </div>
                    <a class="btn btn-outline--primary"
                        href="https://script.viserlab.com/mlmlab/admin/withdraw/method/create"><i
                            class="las la-plus"></i>Add New</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card b-radius--10 ">
                        <div class="card-body p-0">
                            <div class="table-responsive--sm table-responsive">
                                <table class="table table--light style--two custom-data-table">
                                    <thead>
                                        <tr>
                                            <th>Method</th>
                                            <th>Currency</th>
                                            <th>Charge</th>
                                            <th>Withdraw Limit</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Bank Transfer</td>

                                            <td class="fw-bold">USD</td>
                                            <td class="fw-bold">1.00 USD + 2.00 % </td>
                                            <td class="fw-bold">1
                                                - 1000 USD</td>
                                            <td>
                                                <span class="badge badge--success">Enabled</span>
                                            </td>
                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/withdraw/method/edit/1"
                                                        class="btn btn-sm btn-outline--primary ms-1"><i
                                                            class="las la-pen"></i> Edit</a>
                                                    <button
                                                        class="btn btn-sm btn-outline--danger ms-1 confirmationBtn"
                                                        data-question="Are you sure to disable this method?"
                                                        data-action="https://script.viserlab.com/mlmlab/admin/withdraw/method/status/1">
                                                        <i class="la la-eye-slash"></i> Disable </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mobile Money</td>

                                            <td class="fw-bold">USD</td>
                                            <td class="fw-bold">0.00 USD + 0.01 % </td>
                                            <td class="fw-bold">1
                                                - 1000 USD</td>
                                            <td>
                                                <span class="badge badge--success">Enabled</span>
                                            </td>
                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/withdraw/method/edit/2"
                                                        class="btn btn-sm btn-outline--primary ms-1"><i
                                                            class="las la-pen"></i> Edit</a>
                                                    <button
                                                        class="btn btn-sm btn-outline--danger ms-1 confirmationBtn"
                                                        data-question="Are you sure to disable this method?"
                                                        data-action="https://script.viserlab.com/mlmlab/admin/withdraw/method/status/2">
                                                        <i class="la la-eye-slash"></i> Disable </button>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table><!-- table end -->
                            </div>
                        </div>
                    </div><!-- card end -->
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
                            <input type="hidden" name="_token" value="ZYKhrnS6FPVBOstFKvpbKUpxcOEwatBhzdt0IrDD">
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