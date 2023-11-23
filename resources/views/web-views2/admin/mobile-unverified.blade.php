@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">Mobile Unverified Users</h6>
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    <form class="d-flex flex-wrap gap-2" action="" method="GET">
                        <div class="input-group w-auto flex-fill">
                            <input type="search" name="search" class="form-control bg--white"
                                placeholder="Username / Email" value="">
                            <button class="btn btn--primary" type="submit"><i class="la la-search"></i></button>
                        </div>

                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card b-radius--10">
                        <div class="card-body p-0">
                            <div class="table-responsive--md table-responsive">
                                <table class="table--light style--two table">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Email-Phone</th>
                                            <th>Country</th>
                                            <th>Joined At</th>
                                            <th>Balance</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> </span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/45"><span>@</span>gyzyb6</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Afghanistan">AF</span>
                                            </td>

                                            <td>
                                                2022-11-26 03:39 AM <br> 11 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/45"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                </div>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table><!-- table end -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div><!-- bodywrapper__inner end -->
    </div>
@endsection