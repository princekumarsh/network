@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">Answered Tickets</h6>
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card b-radius--10 ">
                        <div class="card-body p-0">
                            <div class="table-responsive--sm table-responsive">
                                <table class="table table--light">
                                    <thead>
                                        <tr>
                                            <th>Subject</th>
                                            <th>Submitted By</th>
                                            <th>Status</th>
                                            <th>Priority</th>
                                            <th>Last Reply</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/ticket/view/60"
                                                    class="fw-bold"> [Ticket#144469] Eaque do natus id ut </a>
                                            </td>

                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/users/detail/43">
                                                    Hedley Shepherd</a>
                                            </td>
                                            <td>
                                                <span class="badge badge--primary">Answered</span>
                                            </td>
                                            <td>
                                                <span class="badge badge--dark">Low</span>
                                            </td>

                                            <td>
                                                1 year ago
                                            </td>

                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/ticket/view/60"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="las la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/ticket/view/47"
                                                    class="fw-bold"> [Ticket#54666280] Qui saepe harum quam </a>
                                            </td>

                                            <td>
                                                <p class="fw-bold"> Destiny Wise</p>
                                            </td>
                                            <td>
                                                <span class="badge badge--primary">Answered</span>
                                            </td>
                                            <td>
                                                <span class="badge  badge--warning">Medium</span>
                                            </td>

                                            <td>
                                                1 year ago
                                            </td>

                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/ticket/view/47"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="las la-desktop"></i> Details </a>
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