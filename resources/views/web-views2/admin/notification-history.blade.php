@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">Notification History</h6>
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    <form class="d-flex flex-wrap gap-2" action="" method="GET">
                        <div class="input-group w-auto flex-fill">
                            <input type="search" name="search" class="form-control bg--white"
                                placeholder="Search Username" value="">
                            <button class="btn btn--primary" type="submit"><i class="la la-search"></i></button>
                        </div>

                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card b-radius--10 ">
                        <div class="card-body p-0">
                            <div class="table-responsive--sm table-responsive">
                                <table class="table table--light style--two">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Sent</th>
                                            <th>Sender</th>
                                            <th>Subject</th>
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
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/49"><span>@</span>mjss22</a>
                                                </span>
                                            </td>
                                            <td>
                                                2022-12-13 01:59 PM
                                                <br>
                                                11 months ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">php</span>
                                            </td>
                                            <td>Please verify your email address</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary notifyDetail"
                                                    data-type="email"
                                                    data-message="https://script.viserlab.com/mlmlab/admin/report/email/detail/50"
                                                    data-sent_to="[Email is protected for the demo]"
                                                    target="_blank"><i class="las la-desktop"></i> Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> </span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/49"><span>@</span>mjss22</a>
                                                </span>
                                            </td>
                                            <td>
                                                2022-12-13 01:52 PM
                                                <br>
                                                11 months ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">php</span>
                                            </td>
                                            <td>You Receive New Balance</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary notifyDetail"
                                                    data-type="email"
                                                    data-message="https://script.viserlab.com/mlmlab/admin/report/email/detail/49"
                                                    data-sent_to="[Email is protected for the demo]"
                                                    target="_blank"><i class="las la-desktop"></i> Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> </span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/49"><span>@</span>mjss22</a>
                                                </span>
                                            </td>
                                            <td>
                                                2022-12-13 01:52 PM
                                                <br>
                                                11 months ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">php</span>
                                            </td>
                                            <td>Balance Transfer Successfully</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary notifyDetail"
                                                    data-type="email"
                                                    data-message="https://script.viserlab.com/mlmlab/admin/report/email/detail/48"
                                                    data-sent_to="[Email is protected for the demo]"
                                                    target="_blank"><i class="las la-desktop"></i> Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Hedley Shepherd</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/43"><span>@</span>username5987</a>
                                                </span>
                                            </td>
                                            <td>
                                                2022-12-13 01:50 PM
                                                <br>
                                                11 months ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">php</span>
                                            </td>
                                            <td>Referral Commission</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary notifyDetail"
                                                    data-type="email"
                                                    data-message="https://script.viserlab.com/mlmlab/admin/report/email/detail/47"
                                                    data-sent_to="[Email is protected for the demo]"
                                                    target="_blank"><i class="las la-desktop"></i> Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/8"><span>@</span>admin</a>
                                                </span>
                                            </td>
                                            <td>
                                                2022-12-13 01:50 PM
                                                <br>
                                                11 months ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">php</span>
                                            </td>
                                            <td>You got tree commission</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary notifyDetail"
                                                    data-type="email"
                                                    data-message="https://script.viserlab.com/mlmlab/admin/report/email/detail/46"
                                                    data-sent_to="[Email is protected for the demo]"
                                                    target="_blank"><i class="las la-desktop"></i> Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Hedley Hubbard</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/35"><span>@</span>username55</a>
                                                </span>
                                            </td>
                                            <td>
                                                2022-12-13 01:50 PM
                                                <br>
                                                11 months ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">php</span>
                                            </td>
                                            <td>You got tree commission</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary notifyDetail"
                                                    data-type="email"
                                                    data-message="https://script.viserlab.com/mlmlab/admin/report/email/detail/45"
                                                    data-sent_to="[Email is protected for the demo]"
                                                    target="_blank"><i class="las la-desktop"></i> Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Hedley test</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/40"><span>@</span>username110</a>
                                                </span>
                                            </td>
                                            <td>
                                                2022-12-13 01:50 PM
                                                <br>
                                                11 months ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">php</span>
                                            </td>
                                            <td>You got tree commission</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary notifyDetail"
                                                    data-type="email"
                                                    data-message="https://script.viserlab.com/mlmlab/admin/report/email/detail/44"
                                                    data-sent_to="[Email is protected for the demo]"
                                                    target="_blank"><i class="las la-desktop"></i> Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Hedley Shepherd</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/43"><span>@</span>username5987</a>
                                                </span>
                                            </td>
                                            <td>
                                                2022-12-13 01:50 PM
                                                <br>
                                                11 months ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">php</span>
                                            </td>
                                            <td>You got tree commission</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary notifyDetail"
                                                    data-type="email"
                                                    data-message="https://script.viserlab.com/mlmlab/admin/report/email/detail/43"
                                                    data-sent_to="[Email is protected for the demo]"
                                                    target="_blank"><i class="las la-desktop"></i> Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Hedley test</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/44"><span>@</span>username5989</a>
                                                </span>
                                            </td>
                                            <td>
                                                2022-12-13 01:50 PM
                                                <br>
                                                11 months ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">php</span>
                                            </td>
                                            <td>Plan Purchase Successfully</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary notifyDetail"
                                                    data-type="email"
                                                    data-message="https://script.viserlab.com/mlmlab/admin/report/email/detail/42"
                                                    data-sent_to="[Email is protected for the demo]"
                                                    target="_blank"><i class="las la-desktop"></i> Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/8"><span>@</span>admin</a>
                                                </span>
                                            </td>
                                            <td>
                                                2022-12-13 04:29 AM
                                                <br>
                                                11 months ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">php</span>
                                            </td>
                                            <td>Withdraw Request Submitted Successfully</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary notifyDetail"
                                                    data-type="email"
                                                    data-message="https://script.viserlab.com/mlmlab/admin/report/email/detail/41"
                                                    data-sent_to="[Email is protected for the demo]"
                                                    target="_blank"><i class="las la-desktop"></i> Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/8"><span>@</span>admin</a>
                                                </span>
                                            </td>
                                            <td>
                                                2022-12-13 04:29 AM
                                                <br>
                                                11 months ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">php</span>
                                            </td>
                                            <td>Withdraw Request Submitted Successfully</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary notifyDetail"
                                                    data-type="email"
                                                    data-message="https://script.viserlab.com/mlmlab/admin/report/email/detail/40"
                                                    data-sent_to="[Email is protected for the demo]"
                                                    target="_blank"><i class="las la-desktop"></i> Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/8"><span>@</span>admin</a>
                                                </span>
                                            </td>
                                            <td>
                                                2022-12-13 04:27 AM
                                                <br>
                                                11 months ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">php</span>
                                            </td>
                                            <td>Withdraw Request Submitted Successfully</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary notifyDetail"
                                                    data-type="email"
                                                    data-message="https://script.viserlab.com/mlmlab/admin/report/email/detail/39"
                                                    data-sent_to="[Email is protected for the demo]"
                                                    target="_blank"><i class="las la-desktop"></i> Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> </span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/59"><span>@</span>techesprit</a>
                                                </span>
                                            </td>
                                            <td>
                                                2022-12-13 01:04 AM
                                                <br>
                                                11 months ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">php</span>
                                            </td>
                                            <td>Please verify your email address</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary notifyDetail"
                                                    data-type="email"
                                                    data-message="https://script.viserlab.com/mlmlab/admin/report/email/detail/38"
                                                    data-sent_to="[Email is protected for the demo]"
                                                    target="_blank"><i class="las la-desktop"></i> Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> </span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/59"><span>@</span>techesprit</a>
                                                </span>
                                            </td>
                                            <td>
                                                2022-12-12 06:21 AM
                                                <br>
                                                11 months ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">php</span>
                                            </td>
                                            <td>Please verify your email address</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary notifyDetail"
                                                    data-type="email"
                                                    data-message="https://script.viserlab.com/mlmlab/admin/report/email/detail/37"
                                                    data-sent_to="[Email is protected for the demo]"
                                                    target="_blank"><i class="las la-desktop"></i> Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> </span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/59"><span>@</span>techesprit</a>
                                                </span>
                                            </td>
                                            <td>
                                                2022-12-11 08:02 PM
                                                <br>
                                                11 months ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">php</span>
                                            </td>
                                            <td>Please verify your email address</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary notifyDetail"
                                                    data-type="email"
                                                    data-message="https://script.viserlab.com/mlmlab/admin/report/email/detail/36"
                                                    data-sent_to="[Email is protected for the demo]"
                                                    target="_blank"><i class="las la-desktop"></i> Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> </span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/58"><span>@</span>skmittal9296</a>
                                                </span>
                                            </td>
                                            <td>
                                                2022-12-11 08:01 PM
                                                <br>
                                                11 months ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">php</span>
                                            </td>
                                            <td>Please verify your email address</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary notifyDetail"
                                                    data-type="email"
                                                    data-message="https://script.viserlab.com/mlmlab/admin/report/email/detail/35"
                                                    data-sent_to="[Email is protected for the demo]"
                                                    target="_blank"><i class="las la-desktop"></i> Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> </span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/58"><span>@</span>skmittal9296</a>
                                                </span>
                                            </td>
                                            <td>
                                                2022-12-11 01:33 AM
                                                <br>
                                                11 months ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">php</span>
                                            </td>
                                            <td>Please verify your email address</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary notifyDetail"
                                                    data-type="email"
                                                    data-message="https://script.viserlab.com/mlmlab/admin/report/email/detail/34"
                                                    data-sent_to="[Email is protected for the demo]"
                                                    target="_blank"><i class="las la-desktop"></i> Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> </span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/59"><span>@</span>techesprit</a>
                                                </span>
                                            </td>
                                            <td>
                                                2022-12-10 05:16 PM
                                                <br>
                                                11 months ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">php</span>
                                            </td>
                                            <td>Please verify your email address</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary notifyDetail"
                                                    data-type="email"
                                                    data-message="https://script.viserlab.com/mlmlab/admin/report/email/detail/33"
                                                    data-sent_to="[Email is protected for the demo]"
                                                    target="_blank"><i class="las la-desktop"></i> Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> </span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/59"><span>@</span>techesprit</a>
                                                </span>
                                            </td>
                                            <td>
                                                2022-12-10 05:14 PM
                                                <br>
                                                11 months ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">php</span>
                                            </td>
                                            <td>Please verify your email address</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary notifyDetail"
                                                    data-type="email"
                                                    data-message="https://script.viserlab.com/mlmlab/admin/report/email/detail/32"
                                                    data-sent_to="[Email is protected for the demo]"
                                                    target="_blank"><i class="las la-desktop"></i> Detail</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> </span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/59"><span>@</span>techesprit</a>
                                                </span>
                                            </td>
                                            <td>
                                                2022-12-10 05:11 PM
                                                <br>
                                                11 months ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">php</span>
                                            </td>
                                            <td>Please verify your email address</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline--primary notifyDetail"
                                                    data-type="email"
                                                    data-message="https://script.viserlab.com/mlmlab/admin/report/email/detail/31"
                                                    data-sent_to="[Email is protected for the demo]"
                                                    target="_blank"><i class="las la-desktop"></i> Detail</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table><!-- table end -->
                            </div>
                        </div>
                        <div class="card-footer py-4">
                            <nav>
                                <ul class="pagination">

                                    <li class="page-item disabled" aria-disabled="true"
                                        aria-label="&laquo; Previous">
                                        <span class="page-link" aria-hidden="true">&lsaquo;</span>
                                    </li>





                                    <li class="page-item active" aria-current="page"><span
                                            class="page-link">1</span></li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/notification/history?page=2">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/notification/history?page=3">3</a>
                                    </li>


                                    <li class="page-item">
                                        <a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/notification/history?page=2"
                                            rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                    </div><!-- card end -->
                </div>
            </div>


            <div class="modal fade" id="notifyDetailModal" tabindex="-1" aria-labelledby="notifyDetailModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="notifyDetailModalLabel">Notification Details</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                                    class="las la-times"></i></button>
                        </div>
                        <div class="modal-body">
                            <h3 class="text-center mb-3">To: <span class="sent_to"></span></h3>
                            <div class="detail"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div><!-- bodywrapper__inner end -->
    </div>
@endsection