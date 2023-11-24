@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">Pending Deposits</h6>
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
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> HYPXBNTKGQ8U </small>
                                            </td>

                                            <td>
                                                2023-11-22 08:41 PM<br>1 day ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Ram Bali</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?search=rambali"><span>@</span>rambali</a>
                                                </span>
                                            </td>
                                            <td>
                                                $100.00 + <span class="text-danger" title="charge">4.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    104.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>104.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/880"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> 7Q9JPEKJ8ET9 </small>
                                            </td>

                                            <td>
                                                2023-11-16 07:08 PM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Kay Kay</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?search=fdk123"><span>@</span>fdk123</a>
                                                </span>
                                            </td>
                                            <td>
                                                $900.00 + <span class="text-danger" title="charge">20.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    920.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>920.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/857"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> JHSOJPA1URA2 </small>
                                            </td>

                                            <td>
                                                2023-11-15 01:11 PM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Faisal Ali</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?search=faisalali46"><span>@</span>faisalali46</a>
                                                </span>
                                            </td>
                                            <td>
                                                $5,000.00 + <span class="text-danger" title="charge">102.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    5,102.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>5,102.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/853"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> VCW1VBZPQKUS </small>
                                            </td>

                                            <td>
                                                2023-11-14 05:00 PM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Faisal Ali</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?search=faisalali46"><span>@</span>faisalali46</a>
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
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/849"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> DFWUNHCR157W </small>
                                            </td>

                                            <td>
                                                2023-11-03 11:05 AM<br>2 weeks ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">asdjkb jkhsda</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?search=maaaan"><span>@</span>maaaan</a>
                                                </span>
                                            </td>
                                            <td>
                                                $1,500.00 + <span class="text-danger" title="charge">32.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    1,532.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>1,532.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/819"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> 2KPWP3QC5B4G </small>
                                            </td>

                                            <td>
                                                2023-11-01 04:45 AM<br>3 weeks ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">teste teste20293</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?search=teste1"><span>@</span>teste1</a>
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
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/814"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> GTXTVJQ1QEDT </small>
                                            </td>

                                            <td>
                                                2023-10-29 01:05 AM<br>3 weeks ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Hjdjd Hjdjdje</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?search=taher7378388"><span>@</span>taher7378388</a>
                                                </span>
                                            </td>
                                            <td>
                                                $100.00 + <span class="text-danger" title="charge">4.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    104.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>104.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/804"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> ZC9NXQNP6GWO </small>
                                            </td>

                                            <td>
                                                2023-10-27 04:58 PM<br>3 weeks ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">1 1</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?search=test4444"><span>@</span>test4444</a>
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
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/800"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> P9GJEPTHXXUD </small>
                                            </td>

                                            <td>
                                                2023-10-20 11:50 PM<br>1 month ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">okok okok</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?search=okokok"><span>@</span>okokok</a>
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
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/781"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> WSZZ1G5K87XH </small>
                                            </td>

                                            <td>
                                                2023-10-18 06:18 AM<br>1 month ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">เทพพิรัก แก่นโสม</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?search=demo009"><span>@</span>demo009</a>
                                                </span>
                                            </td>
                                            <td>
                                                $100.00 + <span class="text-danger" title="charge">4.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    104.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>104.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/774"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> EY6WZ9JOR5JU </small>
                                            </td>

                                            <td>
                                                2023-10-15 04:57 PM<br>1 month ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Madushan Serasinghe</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?search=usercs01"><span>@</span>usercs01</a>
                                                </span>
                                            </td>
                                            <td>
                                                $1,000.00 + <span class="text-danger" title="charge">22.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    1,022.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>1,022.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/768"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> G3ZM6FE4CRPQ </small>
                                            </td>

                                            <td>
                                                2023-10-14 12:58 PM<br>1 month ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Samir Husain</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?search=samir123"><span>@</span>samir123</a>
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
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/765"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> SUUPMJ8ZHZBE </small>
                                            </td>

                                            <td>
                                                2023-10-14 11:00 AM<br>1 month ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">abc xya</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?search=abcdefg"><span>@</span>abcdefg</a>
                                                </span>
                                            </td>
                                            <td>
                                                $1,000.00 + <span class="text-danger" title="charge">22.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    1,022.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>1,022.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/763"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> U7PADAWMY69B </small>
                                            </td>

                                            <td>
                                                2023-10-12 04:10 PM<br>1 month ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Jutawan Elegance</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?search=elegance"><span>@</span>elegance</a>
                                                </span>
                                            </td>
                                            <td>
                                                $100.00 + <span class="text-danger" title="charge">4.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    104.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>104.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/757"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> 7PV4GOKCYTMP </small>
                                            </td>

                                            <td>
                                                2023-10-08 07:18 PM<br>1 month ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Fauzan Fauzan</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?search=fauzan428"><span>@</span>fauzan428</a>
                                                </span>
                                            </td>
                                            <td>
                                                $100.00 + <span class="text-danger" title="charge">4.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    104.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>104.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/741"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> TBNK2Z2NSR3G </small>
                                            </td>

                                            <td>
                                                2023-10-06 10:11 AM<br>1 month ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Rupam Tarua</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?search=youe_rupam_1"><span>@</span>youe_rupam_1</a>
                                                </span>
                                            </td>
                                            <td>
                                                $1,000.00 + <span class="text-danger" title="charge">22.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    1,022.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>1,022.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/740"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> PJO941CG28X5 </small>
                                            </td>

                                            <td>
                                                2023-10-05 10:32 AM<br>1 month ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Pass Word</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?search=clemmy"><span>@</span>clemmy</a>
                                                </span>
                                            </td>
                                            <td>
                                                $1,000.00 + <span class="text-danger" title="charge">22.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    1,022.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>1,022.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/738"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> MGMV8RARP5PC </small>
                                            </td>

                                            <td>
                                                2023-10-04 11:48 AM<br>1 month ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">EASG sdrh</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?search=afegraehstr"><span>@</span>afegraehstr</a>
                                                </span>
                                            </td>
                                            <td>
                                                $51.00 + <span class="text-danger" title="charge">3.02 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    54.02 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>54.02 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/735"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> RUE9FCKMCK5B </small>
                                            </td>

                                            <td>
                                                2023-10-03 04:56 PM<br>1 month ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Aaron Li</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?search=error_lee"><span>@</span>error_lee</a>
                                                </span>
                                            </td>
                                            <td>
                                                $500.00 + <span class="text-danger" title="charge">12.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    512.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>512.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/730"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> XYWPX8K7BS64 </small>
                                            </td>

                                            <td>
                                                2023-10-03 06:39 AM<br>1 month ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Ahmad Fawad</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/pending?search=bbcttttt"><span>@</span>bbcttttt</a>
                                                </span>
                                            </td>
                                            <td>
                                                $1,000.00 + <span class="text-danger" title="charge">22.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    1,022.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>1,022.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/729"
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
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/pending?page=2">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/pending?page=3">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/pending?page=4">4</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/pending?page=5">5</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/pending?page=6">6</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/pending?page=7">7</a>
                                    </li>


                                    <li class="page-item">
                                        <a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/pending?page=2"
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