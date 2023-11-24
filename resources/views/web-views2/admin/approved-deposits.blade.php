@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">Approved Deposits</h6>
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    <form class="d-flex flex-wrap gap-2" action="" method="GET">
                        <div class="input-group w-auto flex-fill">
                            <input type="search" name="search" class="form-control bg--white"
                                placeholder="Search..." value="">
                            <button class="btn btn--primary" type="submit"><i class="la la-search"></i></button>
                        </div>
                        <div class="input-group w-auto flex-fill">
                            <input name="date" type="search" data-range="true" data-multiple-dates-separator=" - "
                                data-language="en" data-format="Y-m-d"
                                class="datepicker-here form-control bg--white pe-2" data-position='bottom right'
                                placeholder="Start Date - End Date" autocomplete="off" value="">
                            <button class="btn btn--primary input-group-text"><i class="la la-search"></i></button>
                        </div>



                    </form>
                </div>
            </div>

            <div class="row justify-content-center">

                <div class="col-md-12">
                    <div class="card b-radius--10">
                        <div class="card-body p-0">
                            <div class="table-responsive--sm table-responsive">
                                <table class="table table--light style--two">
                                    <thead>
                                        <tr>
                                            <th>Gateway | Transaction</th>
                                            <th>Initiated</th>
                                            <th>User</th>
                                            <th>Amount</th>
                                            <th>Conversion</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/approved?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> GZZWH33G55JA </small>
                                            </td>

                                            <td>
                                                2022-11-20 01:46 AM<br>1 year ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/approved?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>
                                            <td>
                                                $300.00 + <span class="text-danger" title="charge">8.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    308.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>308.00 USD</strong>
                                            </td>
                                            <td>
                                                <span><span class="badge badge--success">Approved</span><br>1 year
                                                    ago</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/38"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/approved?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> 242BVFV25T7B </small>
                                            </td>

                                            <td>
                                                2022-11-19 10:25 PM<br>1 year ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/approved?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>
                                            <td>
                                                $10.00 + <span class="text-danger" title="charge">2.20 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    12.20 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>12.20 USD</strong>
                                            </td>
                                            <td>
                                                <span><span class="badge badge--success">Approved</span><br>1 year
                                                    ago</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/36"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table><!-- table end -->
                            </div>
                        </div>
                    </div><!-- card end -->
                </div>
            </div>




        </div><!-- bodywrapper__inner end -->
    </div>
@endsection