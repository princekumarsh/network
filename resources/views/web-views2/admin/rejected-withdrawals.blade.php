@extends('web-views2.admin.partials.admin-app')
@section('content')
<div class="body-wrapper">
    <div class="bodywrapper__inner">

        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
            <h6 class="page-title">Rejected Withdrawals</h6>
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
            <div class="col-lg-12">
                <div class="card b-radius--10 ">
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
                                            <span class="fw-bold"><a
                                                    href="https://script.viserlab.com/mlmlab/admin/withdraw/rejected?method=1">
                                                    Bank Transfer</a></span>
                                            <br>
                                            <small>63QSRS186WNB</small>
                                        </td>
                                        <td>
                                            2022-04-03 12:23 AM <br> 1 year ago
                                        </td>

                                        <td>
                                            <span class="fw-bold">Cameron Pruitt</span>
                                            <br>
                                            <span class="small"> <a
                                                    href="https://script.viserlab.com/mlmlab/admin/withdraw/rejected?search=admin"><span>@</span>admin</a>
                                            </span>
                                        </td>


                                        <td>
                                            $100.00 - <span class="text-danger" title="charge">3.00 </span>
                                            <br>
                                            <strong title="Amount after charge">
                                                97.00 USD
                                            </strong>

                                        </td>

                                        <td>
                                            1 USD = 1.00 USD
                                            <br>
                                            <strong>97.00 USD</strong>
                                        </td>

                                        <td>
                                            <span><span class="badge badge--danger">Rejected</span><br>1 year
                                                ago</span>
                                        </td>
                                        <td>
                                            <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/1"
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



    </div>
</div>
@endsection