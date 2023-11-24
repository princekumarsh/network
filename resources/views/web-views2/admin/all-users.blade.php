@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">All Users</h6>
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
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/595"><span>@</span>akashkumar</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="India">IN</span>
                                            </td>

                                            <td>
                                                2023-11-24 08:52 AM <br> 33 minutes ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/595"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">mamit kumar</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/594"><span>@</span>mamitkumar</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="India">IN</span>
                                            </td>

                                            <td>
                                                2023-11-24 08:49 AM <br> 36 minutes ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/594"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Manoj Kr</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/593"><span>@</span>manojkr</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="India">IN</span>
                                            </td>

                                            <td>
                                                2023-11-22 08:39 PM <br> 1 day ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/593"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Ram Bali</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/592"><span>@</span>rambali</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="India">IN</span>
                                            </td>

                                            <td>
                                                2023-11-22 08:37 PM <br> 1 day ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/592"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Uwem Dev</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/591"><span>@</span>uwemdev</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Nigeria">NG</span>
                                            </td>

                                            <td>
                                                2023-11-22 07:42 PM <br> 1 day ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/591"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">ANil Kumar</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/590"><span>@</span>anil12kuma</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="India">IN</span>
                                            </td>

                                            <td>
                                                2023-11-21 04:33 PM <br> 2 days ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/590"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">joni takdim</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/589"><span>@</span>qwaszx</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Indonesia">ID</span>
                                            </td>

                                            <td>
                                                2023-11-17 02:10 PM <br> 6 days ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/589"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">max r</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/588"><span>@</span>ratnubank</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="India">IN</span>
                                            </td>

                                            <td>
                                                2023-11-17 06:34 AM <br> 1 week ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/588"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Loll Kkeoe</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/587"><span>@</span>qaaaqq</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Nigeria">NG</span>
                                            </td>

                                            <td>
                                                2023-11-16 09:06 PM <br> 1 week ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/587"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">qaq qaq</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/586"><span>@</span>qa1111</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Nigeria">NG</span>
                                            </td>

                                            <td>
                                                2023-11-16 07:31 PM <br> 1 week ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $350.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/586"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Kay Kay</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/585"><span>@</span>fdk123</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Nigeria">NG</span>
                                            </td>

                                            <td>
                                                2023-11-16 07:04 PM <br> 1 week ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $290.69
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/585"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">prince kumar</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/584"><span>@</span>princekumarsh</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="India">IN</span>
                                            </td>

                                            <td>
                                                2023-11-14 09:10 AM <br> 1 week ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $100.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/584"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">bskhgfdhjv,cxjb ghdfksdgljh</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/583"><span>@</span>mizerosam45</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Rwanda">RW</span>
                                            </td>

                                            <td>
                                                2023-11-13 10:44 PM <br> 1 week ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $115.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/583"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">john dow</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/582"><span>@</span>user2023</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Philippines">PH</span>
                                            </td>

                                            <td>
                                                2023-11-13 06:50 PM <br> 1 week ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/582"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Faisal Ali</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/581"><span>@</span>faisalali46</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Pakistan">PK</span>
                                            </td>

                                            <td>
                                                2023-11-11 08:25 PM <br> 1 week ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $476.71
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/581"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Rohit Hr</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/580"><span>@</span>rohithr</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="India">IN</span>
                                            </td>

                                            <td>
                                                2023-11-11 01:14 PM <br> 1 week ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/580"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">vivivi vivivi</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/579"><span>@</span>admin222222</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="India">IN</span>
                                            </td>

                                            <td>
                                                2023-11-11 12:38 PM <br> 1 week ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/579"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Fazal Baloch</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/578"><span>@</span>fazal12f</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Pakistan">PK</span>
                                            </td>

                                            <td>
                                                2023-11-11 11:00 AM <br> 1 week ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/578"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Marios Ioannou</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/577"><span>@</span>marios</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Cyprus">CY</span>
                                            </td>

                                            <td>
                                                2023-11-10 08:35 AM <br> 2 weeks ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/577"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Rajveer Singh</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/576"><span>@</span>asd123</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="India">IN</span>
                                            </td>

                                            <td>
                                                2023-11-09 10:01 PM <br> 2 weeks ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/576"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                </div>
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
                                            href="https://script.viserlab.com/mlmlab/admin/users?page=2">2</a></li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/users?page=3">3</a></li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/users?page=4">4</a></li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/users?page=5">5</a></li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/users?page=6">6</a></li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/users?page=7">7</a></li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/users?page=8">8</a></li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/users?page=9">9</a></li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/users?page=10">10</a>
                                    </li>

                                    <li class="page-item disabled" aria-disabled="true"><span
                                            class="page-link">...</span></li>





                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/users?page=29">29</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/users?page=30">30</a>
                                    </li>


                                    <li class="page-item">
                                        <a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/users?page=2" rel="next"
                                            aria-label="Next &raquo;">&rsaquo;</a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>

            </div>


        </div><!-- bodywrapper__inner end -->
    </div>
@endsection