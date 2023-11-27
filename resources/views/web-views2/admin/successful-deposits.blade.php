@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">Successful Deposits</h6>
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
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?"></a>
                                                </span>
                                                <br>
                                                <small> 5GHRA68SJ62Y </small>
                                            </td>

                                            <td>
                                                2023-11-21 10:53 AM<br>6 days ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">prince kumar</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?search=princekumarsh"><span>@</span>princekumarsh</a>
                                                </span>
                                            </td>
                                            <td>
                                                $100.00 + <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    100.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>100.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Succeed</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/879"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?"></a>
                                                </span>
                                                <br>
                                                <small> MS1NKG6XOOMH </small>
                                            </td>

                                            <td>
                                                2023-11-16 09:07 PM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Loll Kkeoe</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?search=qaaaqq"><span>@</span>qaaaqq</a>
                                                </span>
                                            </td>
                                            <td>
                                                $100.00 + <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    100.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>100.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Succeed</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/865"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?"></a>
                                                </span>
                                                <br>
                                                <small> 92EXHQYGJ2R5 </small>
                                            </td>

                                            <td>
                                                2023-11-16 07:39 PM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">qaq qaq</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?search=qa1111"><span>@</span>qa1111</a>
                                                </span>
                                            </td>
                                            <td>
                                                $1,000.00 + <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    1,000.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>1,000.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Succeed</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/864"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?"></a>
                                                </span>
                                                <br>
                                                <small> 82WFMU966XPF </small>
                                            </td>

                                            <td>
                                                2023-11-16 07:16 PM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Kay Kay</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?search=fdk123"><span>@</span>fdk123</a>
                                                </span>
                                            </td>
                                            <td>
                                                $1,200.00 + <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    1,200.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>1,200.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Succeed</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/860"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?"></a>
                                                </span>
                                                <br>
                                                <small> OO8VURDW3O34 </small>
                                            </td>

                                            <td>
                                                2023-11-16 07:09 PM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Kay Kay</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?search=fdk123"><span>@</span>fdk123</a>
                                                </span>
                                            </td>
                                            <td>
                                                $100.00 + <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    100.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>100.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Succeed</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/858"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?method=NMI">NMI</a>
                                                </span>
                                                <br>
                                                <small> SAA92NSCJ6GJ </small>
                                            </td>

                                            <td>
                                                2023-11-14 05:33 AM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">bskhgfdhjv,cxjb ghdfksdgljh</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?search=mizerosam45"><span>@</span>mizerosam45</a>
                                                </span>
                                            </td>
                                            <td>
                                                $100.00 + <span class="text-danger" title="charge">2.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    102.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>102.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Succeed</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/845"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?"></a>
                                                </span>
                                                <br>
                                                <small> GJE4976TM2SY </small>
                                            </td>

                                            <td>
                                                2023-11-13 10:46 PM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">bskhgfdhjv,cxjb ghdfksdgljh</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?search=mizerosam45"><span>@</span>mizerosam45</a>
                                                </span>
                                            </td>
                                            <td>
                                                $10.00 + <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    10.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>10.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Succeed</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/844"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?"></a>
                                                </span>
                                                <br>
                                                <small> 8MG74AGHXDF7 </small>
                                            </td>

                                            <td>
                                                2023-11-13 10:46 PM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">bskhgfdhjv,cxjb ghdfksdgljh</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?search=mizerosam45"><span>@</span>mizerosam45</a>
                                                </span>
                                            </td>
                                            <td>
                                                $10.00 + <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    10.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>10.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Succeed</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/843"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?"></a>
                                                </span>
                                                <br>
                                                <small> CD9XYU2GD3Q9 </small>
                                            </td>

                                            <td>
                                                2023-11-13 10:46 PM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">bskhgfdhjv,cxjb ghdfksdgljh</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?search=mizerosam45"><span>@</span>mizerosam45</a>
                                                </span>
                                            </td>
                                            <td>
                                                $5.00 + <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    5.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>5.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Succeed</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/842"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?"></a>
                                                </span>
                                                <br>
                                                <small> 1QEFG6KZ7BV7 </small>
                                            </td>

                                            <td>
                                                2023-11-13 10:45 PM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">bskhgfdhjv,cxjb ghdfksdgljh</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?search=mizerosam45"><span>@</span>mizerosam45</a>
                                                </span>
                                            </td>
                                            <td>
                                                $100.00 + <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    100.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>100.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Succeed</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/841"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?"></a>
                                                </span>
                                                <br>
                                                <small> UUH3SJT5TBQA </small>
                                            </td>

                                            <td>
                                                2023-11-12 11:30 AM<br>2 weeks ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Faisal Ali</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?search=faisalali46"><span>@</span>faisalali46</a>
                                                </span>
                                            </td>
                                            <td>
                                                $500.00 + <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    500.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>500.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Succeed</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/839"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?"></a>
                                                </span>
                                                <br>
                                                <small> AOPFTYH8U8GZ </small>
                                            </td>

                                            <td>
                                                2023-11-12 11:29 AM<br>2 weeks ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Faisal Ali</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?search=faisalali46"><span>@</span>faisalali46</a>
                                                </span>
                                            </td>
                                            <td>
                                                $500.00 + <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    500.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>500.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Succeed</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/838"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?"></a>
                                                </span>
                                                <br>
                                                <small> NZ4K4XWEGTJP </small>
                                            </td>

                                            <td>
                                                2023-11-12 11:28 AM<br>2 weeks ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Faisal Ali</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?search=faisalali46"><span>@</span>faisalali46</a>
                                                </span>
                                            </td>
                                            <td>
                                                $500.00 + <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    500.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>500.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Succeed</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/837"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?"></a>
                                                </span>
                                                <br>
                                                <small> O2BAOFSJEWWM </small>
                                            </td>

                                            <td>
                                                2023-11-12 11:27 AM<br>2 weeks ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Faisal Ali</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?search=faisalali46"><span>@</span>faisalali46</a>
                                                </span>
                                            </td>
                                            <td>
                                                $10.00 + <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    10.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>10.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Succeed</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/836"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?"></a>
                                                </span>
                                                <br>
                                                <small> 2128RRX1D7C3 </small>
                                            </td>

                                            <td>
                                                2023-11-12 11:26 AM<br>2 weeks ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Faisal Ali</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?search=faisalali46"><span>@</span>faisalali46</a>
                                                </span>
                                            </td>
                                            <td>
                                                $15.00 + <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    15.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>15.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Succeed</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/835"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?"></a>
                                                </span>
                                                <br>
                                                <small> 5AO3P3GWG2FA </small>
                                            </td>

                                            <td>
                                                2023-11-10 10:45 AM<br>2 weeks ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">dsf sfsdf</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?search=johnpapi"><span>@</span>johnpapi</a>
                                                </span>
                                            </td>
                                            <td>
                                                $263.00 + <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    263.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>263.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Succeed</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/834"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?"></a>
                                                </span>
                                                <br>
                                                <small> 16FFG556R33B </small>
                                            </td>

                                            <td>
                                                2023-11-10 10:44 AM<br>2 weeks ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">dsf sfsdf</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?search=johnpapi"><span>@</span>johnpapi</a>
                                                </span>
                                            </td>
                                            <td>
                                                $10.00 + <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    10.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>10.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Succeed</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/833"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?"></a>
                                                </span>
                                                <br>
                                                <small> ORCOCSBQD9PH </small>
                                            </td>

                                            <td>
                                                2023-11-07 11:54 PM<br>2 weeks ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">sdfsdf sdfdsf</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?search=cliciknew"><span>@</span>cliciknew</a>
                                                </span>
                                            </td>
                                            <td>
                                                $20.00 + <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    20.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>20.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Succeed</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/828"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?method=Stripe">Stripe
                                                        Hosted</a> </span>
                                                <br>
                                                <small> GF84GRGT2KA9 </small>
                                            </td>

                                            <td>
                                                2023-11-07 11:35 PM<br>2 weeks ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">dsf sfsdf</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?search=johnpapi"><span>@</span>johnpapi</a>
                                                </span>
                                            </td>
                                            <td>
                                                $5,000.00 + <span class="text-danger" title="charge">51.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    5,051.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>5,051.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Succeed</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/827"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?method=Mollie">Mollie</a>
                                                </span>
                                                <br>
                                                <small> M2JHHYEER7OC </small>
                                            </td>

                                            <td>
                                                2023-11-07 06:00 PM<br>2 weeks ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">demort tester</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/successful?search=fauzan123456"><span>@</span>fauzan123456</a>
                                                </span>
                                            </td>
                                            <td>
                                                $300.00 + <span class="text-danger" title="charge">4.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    304.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>304.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Succeed</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/826"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
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
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/successful?page=2">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/successful?page=3">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/successful?page=4">4</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/successful?page=5">5</a>
                                    </li>


                                    <li class="page-item">
                                        <a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/successful?page=2"
                                            rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div><!-- card end -->
                </div>
            </div>




        </div><!-- bodywrapper__inner end -->
    </div>
@endsection