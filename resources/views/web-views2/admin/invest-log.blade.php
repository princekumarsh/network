@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">Invest Logs</h6>
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                </div>
            </div>

            <div class="row">

                <div class="col-lg-12">
                    <div class="show-filter mb-3 text-end">
                        <button type="button" class="btn btn-outline--primary showFilterBtn btn-sm"><i
                                class="las la-filter"></i> Filter</button>
                    </div>
                    <div class="card responsive-filter-card mb-4">
                        <div class="card-body">
                            <form action="">
                                <div class="d-flex flex-wrap gap-4">
                                    <div class="flex-grow-1">
                                        <label>TRX/Username</label>
                                        <input type="text" name="search" value="" class="form-control">
                                    </div>
                                    <div class="flex-grow-1">
                                        <label>Date</label>
                                        <input name="date" type="text" data-range="true"
                                            data-multiple-dates-separator=" - " data-language="en"
                                            class="datepicker-here form-control" data-position='bottom right'
                                            placeholder="Start date - End date" autocomplete="off" value="">
                                    </div>
                                    <div class="flex-grow-1 align-self-end">
                                        <button class="btn btn--primary w-100 h-45"><i class="fas fa-filter"></i>
                                            Filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card b-radius--10 ">
                        <div class="card-body p-0">
                            <div class="table-responsive--sm table-responsive">
                                <table class="table table--light style--two">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>TRX</th>
                                            <th>Transacted</th>
                                            <th>Amount</th>
                                            <th>Post Balance</th>
                                            <th>Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">dsf sfsdf</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/invest?search=johnpapi"><span>@</span>johnpapi</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>P8XKM29XSSG5</strong>
                                            </td>

                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold  text--danger ">
                                                    - 1,000.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                1,545.70 USD
                                            </td>

                                            <td>Purchased Silver</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">dsf sfsdf</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/invest?search=johnpapi"><span>@</span>johnpapi</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>VA6NW8UJU6T5</strong>
                                            </td>

                                            <td>
                                                2023-11-20 09:37 AM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold  text--danger ">
                                                    - 500.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                2,545.70 USD
                                            </td>

                                            <td>Purchased Premium</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">bskhgfdhjv,cxjb ghdfksdgljh</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/invest?search=mizerosam45"><span>@</span>mizerosam45</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>MNAJON1YE5DX</strong>
                                            </td>

                                            <td>
                                                2023-11-20 09:36 AM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold  text--danger ">
                                                    - 100.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                115.00 USD
                                            </td>

                                            <td>Purchased Basic</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Loll Kkeoe</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/invest?search=qaaaqq"><span>@</span>qaaaqq</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>Q2M1BP5H9PPK</strong>
                                            </td>

                                            <td>
                                                2023-11-16 09:07 PM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold  text--danger ">
                                                    - 100.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                0.00 USD
                                            </td>

                                            <td>Purchased Basic</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">qaq qaq</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/invest?search=qa1111"><span>@</span>qa1111</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>7WW5VT7M86RO</strong>
                                            </td>

                                            <td>
                                                2023-11-16 07:41 PM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold  text--danger ">
                                                    - 500.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                500.00 USD
                                            </td>

                                            <td>Purchased Premium</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Kay Kay</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/invest?search=fdk123"><span>@</span>fdk123</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>USHB8NH91121</strong>
                                            </td>

                                            <td>
                                                2023-11-16 07:17 PM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold  text--danger ">
                                                    - 1,000.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                300.00 USD
                                            </td>

                                            <td>Purchased Silver</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Faisal Ali</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/invest?search=faisalali46"><span>@</span>faisalali46</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>6QBMDEEGW9KV</strong>
                                            </td>

                                            <td>
                                                2023-11-15 06:48 PM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold  text--danger ">
                                                    - 1,000.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                425.00 USD
                                            </td>

                                            <td>Purchased Silver</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">dsf sfsdf</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/invest?search=johnpapi"><span>@</span>johnpapi</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>J9NTOJ4Q9ZZU</strong>
                                            </td>

                                            <td>
                                                2023-11-10 10:41 AM<br>2 weeks ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold  text--danger ">
                                                    - 300.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                4,580.00 USD
                                            </td>

                                            <td>Purchased Standard</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">dsf sfsdf</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/invest?search=johnpapi"><span>@</span>johnpapi</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>799PZBAMC6ZX</strong>
                                            </td>

                                            <td>
                                                2023-11-07 11:35 PM<br>2 weeks ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold  text--danger ">
                                                    - 100.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                4,900.00 USD
                                            </td>

                                            <td>Purchased Basic</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">demort tester</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/invest?search=fauzan123456"><span>@</span>fauzan123456</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>M2JHHYEER7OC</strong>
                                            </td>

                                            <td>
                                                2023-11-07 06:01 PM<br>2 weeks ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold  text--danger ">
                                                    - 300.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                0.00 USD
                                            </td>

                                            <td>Purchased Standard</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">demort tester</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/invest?search=fauzan123456"><span>@</span>fauzan123456</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>XA8QY1O266OP</strong>
                                            </td>

                                            <td>
                                                2023-10-11 04:11 AM<br>1 month ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold  text--danger ">
                                                    - 100.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                0.00 USD
                                            </td>

                                            <td>Purchased Basic</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Abrar Mehedi</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/invest?search=abrarmehedi"><span>@</span>abrarmehedi</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>AVF8B21X22BM</strong>
                                            </td>

                                            <td>
                                                2023-10-04 01:57 PM<br>1 month ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold  text--danger ">
                                                    - 100.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                100.00 USD
                                            </td>

                                            <td>Purchased Basic</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">asdjkb jkhsda</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/invest?search=maaaan"><span>@</span>maaaan</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>ZTR9FAMNKTR2</strong>
                                            </td>

                                            <td>
                                                2023-09-26 12:25 PM<br>2 months ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold  text--danger ">
                                                    - 5,000.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                8,174.00 USD
                                            </td>

                                            <td>Purchased Plutonium</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">asdjkb jkhsda</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/invest?search=maaaan"><span>@</span>maaaan</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>J6SAYTGTUJ43</strong>
                                            </td>

                                            <td>
                                                2023-09-25 12:03 PM<br>2 months ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold  text--danger ">
                                                    - 300.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                13,174.00 USD
                                            </td>

                                            <td>Purchased Standard</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">asdjkb jkhsda</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/invest?search=maaaan"><span>@</span>maaaan</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>QSXMYOG7RSK1</strong>
                                            </td>

                                            <td>
                                                2023-09-24 02:58 PM<br>2 months ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold  text--danger ">
                                                    - 100.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                13,474.00 USD
                                            </td>

                                            <td>Purchased Basic</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Jddyksyk Hdbkxdh</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/invest?search=sssd67"><span>@</span>sssd67</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>1G4VBCFYKRMB</strong>
                                            </td>

                                            <td>
                                                2023-09-24 02:23 PM<br>2 months ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold  text--danger ">
                                                    - 5,000.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                4,809.79 USD
                                            </td>

                                            <td>Purchased Plutonium</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Bella Sunday</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/invest?search=bellasunday"><span>@</span>bellasunday</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>NV1W1B63VXHY</strong>
                                            </td>

                                            <td>
                                                2023-09-22 11:17 PM<br>2 months ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold  text--danger ">
                                                    - 1,000.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                690.00 USD
                                            </td>

                                            <td>Purchased Silver</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">abc xya</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/invest?search=abcxyz"><span>@</span>abcxyz</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>24745BFUBH6S</strong>
                                            </td>

                                            <td>
                                                2023-09-22 11:15 PM<br>2 months ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold  text--danger ">
                                                    - 1,000.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                815.18 USD
                                            </td>

                                            <td>Purchased Silver</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">abc xya</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/invest?search=abcxyz"><span>@</span>abcxyz</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>Q7PKYSTM3FVP</strong>
                                            </td>

                                            <td>
                                                2023-09-22 11:15 PM<br>2 months ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold  text--danger ">
                                                    - 300.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                1,815.18 USD
                                            </td>

                                            <td>Purchased Standard</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">abc xzc</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/invest?search=abzxbc"><span>@</span>abzxbc</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>CWKOCFCM6Y16</strong>
                                            </td>

                                            <td>
                                                2023-09-07 07:13 PM<br>2 months ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold  text--danger ">
                                                    - 100.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                0.00 USD
                                            </td>

                                            <td>Purchased Basic</td>
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
                                            href="https://script.viserlab.com/mlmlab/admin/report/invest?page=2">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/invest?page=3">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/invest?page=4">4</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/invest?page=5">5</a>
                                    </li>


                                    <li class="page-item">
                                        <a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/invest?page=2"
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