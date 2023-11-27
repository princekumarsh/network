@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">Pending Withdrawals</h6>
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
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?method=1">
                                                        Bank Transfer</a></span>
                                                <br>
                                                <small>OCWK6M9K6YMS</small>
                                            </td>
                                            <td>
                                                2023-11-15 12:22 PM <br> 1 week ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>


                                            <td>
                                                $200.00 - <span class="text-danger" title="charge">5.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    195.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>195.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/92"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?method=2">
                                                        Mobile Money</a></span>
                                                <br>
                                                <small>7SBBHJ7GHPGF</small>
                                            </td>
                                            <td>
                                                2023-11-03 10:17 AM <br> 3 weeks ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>


                                            <td>
                                                $1.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    1.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>1.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/81"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?method=2">
                                                        Mobile Money</a></span>
                                                <br>
                                                <small>ZMDSUY9VAB3O</small>
                                            </td>
                                            <td>
                                                2023-08-19 01:49 PM <br> 3 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>


                                            <td>
                                                $100.00 - <span class="text-danger" title="charge">0.01 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    99.99 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>99.99 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/55"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?method=2">
                                                        Mobile Money</a></span>
                                                <br>
                                                <small>UKAPX6EZDQT9</small>
                                            </td>
                                            <td>
                                                2023-06-19 11:09 AM <br> 5 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>


                                            <td>
                                                $50.00 - <span class="text-danger" title="charge">0.01 </span>
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
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/36"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?method=2">
                                                        Mobile Money</a></span>
                                                <br>
                                                <small>E6145VPJ29HC</small>
                                            </td>
                                            <td>
                                                2023-05-29 04:38 PM <br> 5 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>


                                            <td>
                                                $100.00 - <span class="text-danger" title="charge">0.01 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    99.99 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>99.99 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/35"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?method=2">
                                                        Mobile Money</a></span>
                                                <br>
                                                <small>CDY69982C2S2</small>
                                            </td>
                                            <td>
                                                2023-05-07 09:36 AM <br> 6 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>


                                            <td>
                                                $1.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    1.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>1.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/33"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?method=2">
                                                        Mobile Money</a></span>
                                                <br>
                                                <small>YHGEW411FQ59</small>
                                            </td>
                                            <td>
                                                2023-04-21 06:11 AM <br> 7 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Hedley Shepherd</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?search=username5987"><span>@</span>username5987</a>
                                                </span>
                                            </td>


                                            <td>
                                                $14.00 - <span class="text-danger" title="charge">0.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    14.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>14.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/31"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?method=1">
                                                        Bank Transfer</a></span>
                                                <br>
                                                <small>R7UH9BEN1V5X</small>
                                            </td>
                                            <td>
                                                2023-04-20 11:57 PM <br> 7 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Hedley test</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?search=username110"><span>@</span>username110</a>
                                                </span>
                                            </td>


                                            <td>
                                                $98.00 - <span class="text-danger" title="charge">2.96 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    95.04 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>95.04 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/30"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?method=2">
                                                        Mobile Money</a></span>
                                                <br>
                                                <small>T87TF5PZYSCA</small>
                                            </td>
                                            <td>
                                                2023-01-24 03:49 PM <br> 10 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?search=admin"><span>@</span>admin</a>
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
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/28"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?method=2">
                                                        Mobile Money</a></span>
                                                <br>
                                                <small>V7KZ64SN1HGS</small>
                                            </td>
                                            <td>
                                                2023-01-18 10:43 AM <br> 10 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Hedley Shepherd</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?search=username5987"><span>@</span>username5987</a>
                                                </span>
                                            </td>


                                            <td>
                                                $200.00 - <span class="text-danger" title="charge">0.02 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    199.98 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>199.98 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/23"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?method=1">
                                                        Bank Transfer</a></span>
                                                <br>
                                                <small>GF7T2KBQ4CYH</small>
                                            </td>
                                            <td>
                                                2023-01-05 09:25 AM <br> 10 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Hedley test</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?search=username5989"><span>@</span>username5989</a>
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
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/22"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?method=2">
                                                        Mobile Money</a></span>
                                                <br>
                                                <small>KJ1J5Z81B8CG</small>
                                            </td>
                                            <td>
                                                2023-01-02 06:41 PM <br> 10 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Hedley test</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?search=username5989"><span>@</span>username5989</a>
                                                </span>
                                            </td>


                                            <td>
                                                $100.00 - <span class="text-danger" title="charge">0.01 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    99.99 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>99.99 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/20"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?method=2">
                                                        Mobile Money</a></span>
                                                <br>
                                                <small>8AV958JMYZGX</small>
                                            </td>
                                            <td>
                                                2022-12-22 02:16 PM <br> 11 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?search=admin"><span>@</span>admin</a>
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
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/19"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?method=1">
                                                        Bank Transfer</a></span>
                                                <br>
                                                <small>KK1WEB2WFS3K</small>
                                            </td>
                                            <td>
                                                2022-12-13 04:29 AM <br> 11 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>


                                            <td>
                                                $827.00 - <span class="text-danger" title="charge">17.54 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    809.46 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>809.46 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/17"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?method=1">
                                                        Bank Transfer</a></span>
                                                <br>
                                                <small>HEXAQJTJCQFJ</small>
                                            </td>
                                            <td>
                                                2022-12-13 04:29 AM <br> 11 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>


                                            <td>
                                                $1,000.00 - <span class="text-danger" title="charge">21.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    979.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>979.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/16"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?method=1">
                                                        Bank Transfer</a></span>
                                                <br>
                                                <small>TAOQWV8K23H3</small>
                                            </td>
                                            <td>
                                                2022-12-13 04:27 AM <br> 11 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>


                                            <td>
                                                $1,000.00 - <span class="text-danger" title="charge">21.00 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    979.00 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>979.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/15"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?method=1">
                                                        Bank Transfer</a></span>
                                                <br>
                                                <small>DDZJG7U5SMXJ</small>
                                            </td>
                                            <td>
                                                2022-11-21 11:44 PM <br> 1 year ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?search=admin"><span>@</span>admin</a>
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
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/13"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?method=1">
                                                        Bank Transfer</a></span>
                                                <br>
                                                <small>HAW9T1OZS4OD</small>
                                            </td>
                                            <td>
                                                2022-11-21 06:50 AM <br> 1 year ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>


                                            <td>
                                                $10.00 - <span class="text-danger" title="charge">1.20 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    8.80 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>8.80 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/12"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"><a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?method=1">
                                                        Bank Transfer</a></span>
                                                <br>
                                                <small>HFKZ6Q7VBDH1</small>
                                            </td>
                                            <td>
                                                2022-11-19 02:13 AM <br> 1 year ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">Hedley Shepherd</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/withdraw/pending?search=username5987"><span>@</span>username5987</a>
                                                </span>
                                            </td>


                                            <td>
                                                $10.00 - <span class="text-danger" title="charge">1.20 </span>
                                                <br>
                                                <strong title="Amount after charge">
                                                    8.80 USD
                                                </strong>

                                            </td>

                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>8.80 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/withdraw/details/11"
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