@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">Transaction Logs</h6>
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
                                        <label>Type</label>
                                        <select name="trx_type" class="form-control">
                                            <option value="">All</option>
                                            <option value="+">Plus</option>
                                            <option value="-">Minus</option>
                                        </select>
                                    </div>
                                    <div class="flex-grow-1">
                                        <label>Remark</label>
                                        <select class="form-control" name="remark">
                                            <option value="">Any</option>
                                            <option value="balance_add">Balance add</option>
                                            <option value="balance_subtract">Balance subtract</option>
                                            <option value="balance_transfer">Balance transfer</option>
                                            <option value="binary_commission">Binary commission</option>
                                            <option value="deposit">Deposit</option>
                                            <option value="epin">Epin</option>
                                            <option value="purchased_plan">Purchased plan</option>
                                            <option value="ranking_bonus">Ranking bonus</option>
                                            <option value="referral_commission">Referral commission</option>
                                            <option value="withdraw">Withdraw</option>
                                            <option value="withdraw_reject">Withdraw reject</option>
                                        </select>
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
                                                <span class="fw-bold">Shahidul Islam</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/transaction?search=saudashahid"><span>@</span>saudashahid</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>P1SXVSV6P58O</strong>
                                            </td>

                                            <td>
                                                2023-11-28 05:38 AM<br>3 hours ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 2,000.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                2,000.00 USD
                                            </td>

                                            <td>Deposit Via Mollie - USD</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/transaction?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>Q485V5QRKW8S</strong>
                                            </td>

                                            <td>
                                                2023-11-27 06:44 PM<br>14 hours ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold  text--danger ">
                                                    - 5.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                1,051.44 USD
                                            </td>

                                            <td>Created E-pin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">qaq qaq</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/transaction?search=qa1111"><span>@</span>qa1111</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>5X2ZU9PJRXFY</strong>
                                            </td>

                                            <td>
                                                2023-11-27 06:38 PM<br>14 hours ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold  text--danger ">
                                                    - 60.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                290.00 USD
                                            </td>

                                            <td>Created E-pin</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">prince kumar</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/transaction?search=princekumarsh"><span>@</span>princekumarsh</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>5GHRA68SJ62Y</strong>
                                            </td>

                                            <td>
                                                2023-11-21 10:53 AM<br>6 days ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 100.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                100.00 USD
                                            </td>

                                            <td>E-Pin recharge via 96268188-40461585-94948166-77667874</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/transaction?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>P8XKM29XSSG5</strong>
                                            </td>

                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 250.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                1,056.44 USD
                                            </td>

                                            <td>Direct referral commission from johnpapi</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/transaction?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>P8XKM29XSSG5</strong>
                                            </td>

                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 0.99 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                806.44 USD
                                            </td>

                                            <td>Tree commission</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Hedley Hubbard</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/transaction?search=username55"><span>@</span>username55</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>P8XKM29XSSG5</strong>
                                            </td>

                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 0.99 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                81.44 USD
                                            </td>

                                            <td>Tree commission</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Hedley test</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/transaction?search=username110"><span>@</span>username110</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>P8XKM29XSSG5</strong>
                                            </td>

                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 0.99 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                27.28 USD
                                            </td>

                                            <td>Tree commission</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Hedley Shepherd</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/transaction?search=username5987"><span>@</span>username5987</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>P8XKM29XSSG5</strong>
                                            </td>

                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 0.99 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                225.62 USD
                                            </td>

                                            <td>Tree commission</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Hedley test</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/transaction?search=username5989"><span>@</span>username5989</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>P8XKM29XSSG5</strong>
                                            </td>

                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 0.99 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                123.73 USD
                                            </td>

                                            <td>Tree commission</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Jddyksyk Hdbkxdh</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/transaction?search=sssd67"><span>@</span>sssd67</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>P8XKM29XSSG5</strong>
                                            </td>

                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 0.99 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                779.55 USD
                                            </td>

                                            <td>Tree commission</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">NJ Izpü</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/transaction?search=usernamem"><span>@</span>usernamem</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>P8XKM29XSSG5</strong>
                                            </td>

                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 0.99 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                13.84 USD
                                            </td>

                                            <td>Tree commission</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">rgrgtg rtgrtgrtgrt</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/transaction?search=testte"><span>@</span>testte</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>P8XKM29XSSG5</strong>
                                            </td>

                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 0.99 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                7.65 USD
                                            </td>

                                            <td>Tree commission</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Sajin Rajesh</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/transaction?search=sajinrajesh"><span>@</span>sajinrajesh</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>P8XKM29XSSG5</strong>
                                            </td>

                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 0.99 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                97.65 USD
                                            </td>

                                            <td>Tree commission</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Test Testdemo</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/transaction?search=demo00"><span>@</span>demo00</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>P8XKM29XSSG5</strong>
                                            </td>

                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 0.99 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                136.99 USD
                                            </td>

                                            <td>Tree commission</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Montu utu</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/transaction?search=montu123"><span>@</span>montu123</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>P8XKM29XSSG5</strong>
                                            </td>

                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 0.99 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                21.96 USD
                                            </td>

                                            <td>Tree commission</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Teste Teste</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/transaction?search=testeteste"><span>@</span>testeteste</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>P8XKM29XSSG5</strong>
                                            </td>

                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 0.99 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                6.90 USD
                                            </td>

                                            <td>Tree commission</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">abc xya</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/transaction?search=abcxyz"><span>@</span>abcxyz</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>P8XKM29XSSG5</strong>
                                            </td>

                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 0.99 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                820.22 USD
                                            </td>

                                            <td>Tree commission</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Carlos Ignacio Ahid</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/transaction?search=igahid"><span>@</span>igahid</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>P8XKM29XSSG5</strong>
                                            </td>

                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 0.99 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                5.10 USD
                                            </td>

                                            <td>Tree commission</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Rehman Mani</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/transaction?search=rehmabbb"><span>@</span>rehmabbb</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>P8XKM29XSSG5</strong>
                                            </td>

                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 0.99 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                5.07 USD
                                            </td>

                                            <td>Tree commission</td>
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
                                            href="https://script.viserlab.com/mlmlab/admin/report/transaction?page=2">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/transaction?page=3">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/transaction?page=4">4</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/transaction?page=5">5</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/transaction?page=6">6</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/transaction?page=7">7</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/transaction?page=8">8</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/transaction?page=9">9</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/transaction?page=10">10</a>
                                    </li>

                                    <li class="page-item disabled" aria-disabled="true"><span
                                            class="page-link">...</span></li>





                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/transaction?page=39">39</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/transaction?page=40">40</a>
                                    </li>


                                    <li class="page-item">
                                        <a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/transaction?page=2"
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