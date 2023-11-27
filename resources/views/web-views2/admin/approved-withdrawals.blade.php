@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">Approved Withdrawals</h6>
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
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?">
                                                    </a></span>
                                                <br>
                                                <small>G7V9VTK6CXY1</small>
                                            </td>
                                            <td>
                                                2023-11-19 04:08 PM <br> 1 week ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">qaq qaq</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?search=qa1111"><span>@</span>qa1111</a>
                                                </span>
                                            </td>


                                            <td>
                                                $100.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    100.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>100.00 USD</strong>
                                            </td>

                                            <td>
                                                <span><span class="badge badge--success">Approved</span><br>1 week
                                                    ago</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/99"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?">
                                                    </a></span>
                                                <br>
                                                <small>7S9ZKYMDP218</small>
                                            </td>
                                            <td>
                                                2023-11-19 08:34 AM <br> 1 week ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">qaq qaq</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?search=qa1111"><span>@</span>qa1111</a>
                                                </span>
                                            </td>


                                            <td>
                                                $50.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    50.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>50.00 USD</strong>
                                            </td>

                                            <td>
                                                <span><span class="badge badge--success">Approved</span><br>1 week
                                                    ago</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/98"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?">
                                                    </a></span>
                                                <br>
                                                <small>CX2O5O3W9AU5</small>
                                            </td>
                                            <td>
                                                2023-11-18 10:13 AM <br> 1 week ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Kay Kay</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?search=fdk123"><span>@</span>fdk123</a>
                                                </span>
                                            </td>


                                            <td>
                                                $10.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    10.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>10.00 USD</strong>
                                            </td>

                                            <td>
                                                <span><span class="badge badge--success">Approved</span><br>1 week
                                                    ago</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/97"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?">
                                                    </a></span>
                                                <br>
                                                <small>CPHYR8VZQ7QN</small>
                                            </td>
                                            <td>
                                                2023-11-16 09:07 PM <br> 1 week ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Kay Kay</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?search=fdk123"><span>@</span>fdk123</a>
                                                </span>
                                            </td>


                                            <td>
                                                $100.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    100.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>100.00 USD</strong>
                                            </td>

                                            <td>
                                                <span><span class="badge badge--success">Approved</span><br>1 week
                                                    ago</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/95"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?">
                                                    </a></span>
                                                <br>
                                                <small>PDASRG2358XU</small>
                                            </td>
                                            <td>
                                                2023-11-16 07:39 PM <br> 1 week ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">asdjkb jkhsda</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?search=maaaan"><span>@</span>maaaan</a>
                                                </span>
                                            </td>


                                            <td>
                                                $1,000.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    1,000.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>1,000.00 USD</strong>
                                            </td>

                                            <td>
                                                <span><span class="badge badge--success">Approved</span><br>1 week
                                                    ago</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/94"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?">
                                                    </a></span>
                                                <br>
                                                <small>QQQB85KBUJSS</small>
                                            </td>
                                            <td>
                                                2023-11-16 07:16 PM <br> 1 week ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">dsf sfsdf</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?search=johnpapi"><span>@</span>johnpapi</a>
                                                </span>
                                            </td>


                                            <td>
                                                $1,200.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    1,200.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>1,200.00 USD</strong>
                                            </td>

                                            <td>
                                                <span><span class="badge badge--success">Approved</span><br>1 week
                                                    ago</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/93"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?">
                                                    </a></span>
                                                <br>
                                                <small>OW1V6PCF3T95</small>
                                            </td>
                                            <td>
                                                2023-11-15 04:27 AM <br> 1 week ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">dsf sfsdf</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?search=johnpapi"><span>@</span>johnpapi</a>
                                                </span>
                                            </td>


                                            <td>
                                                $100.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    100.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>100.00 USD</strong>
                                            </td>

                                            <td>
                                                <span><span class="badge badge--success">Approved</span><br>1 week
                                                    ago</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/88"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?">
                                                    </a></span>
                                                <br>
                                                <small>6MUY75DCKGWR</small>
                                            </td>
                                            <td>
                                                2023-11-15 04:23 AM <br> 1 week ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">bskhgfdhjv,cxjb ghdfksdgljh</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?search=mizerosam45"><span>@</span>mizerosam45</a>
                                                </span>
                                            </td>


                                            <td>
                                                $10.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    10.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>10.00 USD</strong>
                                            </td>

                                            <td>
                                                <span><span class="badge badge--success">Approved</span><br>1 week
                                                    ago</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/87"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?">
                                                    </a></span>
                                                <br>
                                                <small>8B65FTHQ1P2Z</small>
                                            </td>
                                            <td>
                                                2023-11-13 01:00 PM <br> 2 weeks ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Faisal Ali</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?search=faisalali46"><span>@</span>faisalali46</a>
                                                </span>
                                            </td>


                                            <td>
                                                $100.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    100.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>100.00 USD</strong>
                                            </td>

                                            <td>
                                                <span><span class="badge badge--success">Approved</span><br>2 weeks
                                                    ago</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/86"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?">
                                                    </a></span>
                                                <br>
                                                <small>KT1JKCFEGFF3</small>
                                            </td>
                                            <td>
                                                2023-11-12 03:59 AM <br> 2 weeks ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">sdfsdf sdfdsf</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?search=cliciknew"><span>@</span>cliciknew</a>
                                                </span>
                                            </td>


                                            <td>
                                                $15.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    15.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>15.00 USD</strong>
                                            </td>

                                            <td>
                                                <span><span class="badge badge--success">Approved</span><br>2 weeks
                                                    ago</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/85"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?">
                                                    </a></span>
                                                <br>
                                                <small>GDBGC15RNFOF</small>
                                            </td>
                                            <td>
                                                2023-11-10 05:58 PM <br> 2 weeks ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">dsf sfsdf</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?search=johnpapi"><span>@</span>johnpapi</a>
                                                </span>
                                            </td>


                                            <td>
                                                $10.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    10.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>10.00 USD</strong>
                                            </td>

                                            <td>
                                                <span><span class="badge badge--success">Approved</span><br>2 weeks
                                                    ago</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/84"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?">
                                                    </a></span>
                                                <br>
                                                <small>WEZ2YUWFNCNW</small>
                                            </td>
                                            <td>
                                                2023-11-10 10:42 AM <br> 2 weeks ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">dsf sfsdf</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?search=johnpapi"><span>@</span>johnpapi</a>
                                                </span>
                                            </td>


                                            <td>
                                                $500.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    500.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>500.00 USD</strong>
                                            </td>

                                            <td>
                                                <span><span class="badge badge--success">Approved</span><br>2 weeks
                                                    ago</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/83"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?">
                                                    </a></span>
                                                <br>
                                                <small>JYR74NSKS85U</small>
                                            </td>
                                            <td>
                                                2023-11-07 11:36 PM <br> 2 weeks ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">dsf sfsdf</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?search=johnpapi"><span>@</span>johnpapi</a>
                                                </span>
                                            </td>


                                            <td>
                                                $20.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    20.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>20.00 USD</strong>
                                            </td>

                                            <td>
                                                <span><span class="badge badge--success">Approved</span><br>2 weeks
                                                    ago</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/82"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?">
                                                    </a></span>
                                                <br>
                                                <small>AXHNSZP58N4D</small>
                                            </td>
                                            <td>
                                                2023-10-30 02:37 PM <br> 4 weeks ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>


                                            <td>
                                                $5.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    5.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>5.00 USD</strong>
                                            </td>

                                            <td>
                                                <span><span class="badge badge--success">Approved</span><br>4 weeks
                                                    ago</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/80"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?">
                                                    </a></span>
                                                <br>
                                                <small>W2SKPQTKS75E</small>
                                            </td>
                                            <td>
                                                2023-10-29 06:01 PM <br> 4 weeks ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Hedley User</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?search=username30"><span>@</span>username30</a>
                                                </span>
                                            </td>


                                            <td>
                                                $10.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    10.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>10.00 USD</strong>
                                            </td>

                                            <td>
                                                <span><span class="badge badge--success">Approved</span><br>4 weeks
                                                    ago</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/79"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?">
                                                    </a></span>
                                                <br>
                                                <small>ECPKMWVP1S69</small>
                                            </td>
                                            <td>
                                                2023-10-28 11:39 PM <br> 4 weeks ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Hedley User</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?search=username30"><span>@</span>username30</a>
                                                </span>
                                            </td>


                                            <td>
                                                $500.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    500.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>500.00 USD</strong>
                                            </td>

                                            <td>
                                                <span><span class="badge badge--success">Approved</span><br>4 weeks
                                                    ago</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/78"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?">
                                                    </a></span>
                                                <br>
                                                <small>7XZK3DHKG28R</small>
                                            </td>
                                            <td>
                                                2023-10-22 08:25 AM <br> 1 month ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Hedley User</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?search=username30"><span>@</span>username30</a>
                                                </span>
                                            </td>


                                            <td>
                                                $263.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    263.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>263.00 USD</strong>
                                            </td>

                                            <td>
                                                <span><span class="badge badge--success">Approved</span><br>1 month
                                                    ago</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/77"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?">
                                                    </a></span>
                                                <br>
                                                <small>BOWG3R2EEZAB</small>
                                            </td>
                                            <td>
                                                2023-10-20 02:47 AM <br> 1 month ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">asdjkb jkhsda</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?search=maaaan"><span>@</span>maaaan</a>
                                                </span>
                                            </td>


                                            <td>
                                                $500.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    500.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>500.00 USD</strong>
                                            </td>

                                            <td>
                                                <span><span class="badge badge--success">Approved</span><br>1 month
                                                    ago</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/76"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?">
                                                    </a></span>
                                                <br>
                                                <small>SWTZ21R978VY</small>
                                            </td>
                                            <td>
                                                2023-10-14 10:59 AM <br> 1 month ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">abc xya</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?search=abcdefg"><span>@</span>abcdefg</a>
                                                </span>
                                            </td>


                                            <td>
                                                $10.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    10.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>10.00 USD</strong>
                                            </td>

                                            <td>
                                                <span><span class="badge badge--success">Approved</span><br>1 month
                                                    ago</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/75"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?">
                                                    </a></span>
                                                <br>
                                                <small>956VTNU8MX9S</small>
                                            </td>
                                            <td>
                                                2023-10-10 08:07 PM <br> 1 month ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">asdjkb jkhsda</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?search=maaaan"><span>@</span>maaaan</a>
                                                </span>
                                            </td>


                                            <td>
                                                $10.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    10.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>10.00 USD</strong>
                                            </td>

                                            <td>
                                                <span><span class="badge badge--success">Approved</span><br>1 month
                                                    ago</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/74"
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
                                            href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?page=2">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?page=3">3</a>
                                    </li>


                                    <li class="page-item">
                                        <a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/withdraw/approved?page=2"
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