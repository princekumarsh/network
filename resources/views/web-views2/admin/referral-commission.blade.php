@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">Referral Commission Logs</h6>
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
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/referral-commission?search=admin"><span>@</span>admin</a>
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
                                                        href="https://script.viserlab.com/mlmlab/admin/report/referral-commission?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>VA6NW8UJU6T5</strong>
                                            </td>

                                            <td>
                                                2023-11-20 09:37 AM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 250.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                805.45 USD
                                            </td>

                                            <td>Direct referral commission from johnpapi</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/referral-commission?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>MNAJON1YE5DX</strong>
                                            </td>

                                            <td>
                                                2023-11-20 09:36 AM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 250.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                554.79 USD
                                            </td>

                                            <td>Direct referral commission from mizerosam45</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Kay Kay</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/referral-commission?search=fdk123"><span>@</span>fdk123</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>Q2M1BP5H9PPK</strong>
                                            </td>

                                            <td>
                                                2023-11-16 09:07 PM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 50.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                300.69 USD
                                            </td>

                                            <td>Direct referral commission from qaaaqq</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Kay Kay</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/referral-commission?search=fdk123"><span>@</span>fdk123</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>7WW5VT7M86RO</strong>
                                            </td>

                                            <td>
                                                2023-11-16 07:41 PM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 50.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                350.66 USD
                                            </td>

                                            <td>Direct referral commission from qa1111</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Faisal Ali</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/referral-commission?search=faisalali46"><span>@</span>faisalali46</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>USHB8NH91121</strong>
                                            </td>

                                            <td>
                                                2023-11-16 07:17 PM<br>1 week ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 50.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                475.99 USD
                                            </td>

                                            <td>Direct referral commission from fdk123</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/referral-commission?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>J9NTOJ4Q9ZZU</strong>
                                            </td>

                                            <td>
                                                2023-11-10 10:41 AM<br>2 weeks ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 250.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                502.09 USD
                                            </td>

                                            <td>Direct referral commission from johnpapi</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/referral-commission?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>799PZBAMC6ZX</strong>
                                            </td>

                                            <td>
                                                2023-11-07 11:35 PM<br>2 weeks ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 250.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                251.43 USD
                                            </td>

                                            <td>Direct referral commission from johnpapi</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Jddyksyk Hdbkxdh</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/referral-commission?search=sssd67"><span>@</span>sssd67</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>ZTR9FAMNKTR2</strong>
                                            </td>

                                            <td>
                                                2023-09-26 12:25 PM<br>2 months ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 250.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                765.98 USD
                                            </td>

                                            <td>Direct referral commission from maaaan</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Jddyksyk Hdbkxdh</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/referral-commission?search=sssd67"><span>@</span>sssd67</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>J6SAYTGTUJ43</strong>
                                            </td>

                                            <td>
                                                2023-09-25 12:03 PM<br>2 months ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 250.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                510.48 USD
                                            </td>

                                            <td>Direct referral commission from maaaan</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Jddyksyk Hdbkxdh</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/referral-commission?search=sssd67"><span>@</span>sssd67</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>QSXMYOG7RSK1</strong>
                                            </td>

                                            <td>
                                                2023-09-24 02:58 PM<br>2 months ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 250.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                259.82 USD
                                            </td>

                                            <td>Direct referral commission from maaaan</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/referral-commission?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>1G4VBCFYKRMB</strong>
                                            </td>

                                            <td>
                                                2023-09-24 02:23 PM<br>2 months ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 250.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                2,676.97 USD
                                            </td>

                                            <td>Direct referral commission from sssd67</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">abc xya</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/referral-commission?search=abcxyz"><span>@</span>abcxyz</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>CWKOCFCM6Y16</strong>
                                            </td>

                                            <td>
                                                2023-09-07 07:13 PM<br>2 months ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 5.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                2,115.18 USD
                                            </td>

                                            <td>Direct referral commission from abzxbc</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">abc xya</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/referral-commission?search=xyzabc"><span>@</span>xyzabc</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>X83BEAA4X2QF</strong>
                                            </td>

                                            <td>
                                                2023-09-07 03:48 PM<br>2 months ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 5.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                5.03 USD
                                            </td>

                                            <td>Direct referral commission from xyabzc</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">abc xya</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/referral-commission?search=abcxyz"><span>@</span>abcxyz</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>MKFSSZDTNEU8</strong>
                                            </td>

                                            <td>
                                                2023-09-07 03:34 PM<br>2 months ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 5.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                810.12 USD
                                            </td>

                                            <td>Direct referral commission from abcdefg</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/referral-commission?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>XD66O3UT34DJ</strong>
                                            </td>

                                            <td>
                                                2023-09-07 03:20 PM<br>2 months ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 250.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                2,430.93 USD
                                            </td>

                                            <td>Direct referral commission from rehmabbb</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">abc xya</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/referral-commission?search=abcxyz"><span>@</span>abcxyz</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>UAT5BKWO1VDY</strong>
                                            </td>

                                            <td>
                                                2023-09-07 03:08 PM<br>2 months ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 5.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                805.03 USD
                                            </td>

                                            <td>Direct referral commission from xyzabc</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/referral-commission?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>C2ATQTZO81TP</strong>
                                            </td>

                                            <td>
                                                2023-08-25 05:50 AM<br>3 months ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 250.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                2,180.81 USD
                                            </td>

                                            <td>Direct referral commission from testeteste</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Montu utu</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/referral-commission?search=montu123"><span>@</span>montu123</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>WFZ5RRUDBMCP</strong>
                                            </td>

                                            <td>
                                                2023-08-18 03:35 AM<br>3 months ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 5.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                15.03 USD
                                            </td>

                                            <td>Direct referral commission from frankwill007</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/referral-commission?search=admin"><span>@</span>admin</a>
                                                </span>
                                            </td>

                                            <td>
                                                <strong>JN2BMVMUK98E</strong>
                                            </td>

                                            <td>
                                                2023-07-19 12:14 PM<br>4 months ago
                                            </td>

                                            <td class="budget">
                                                <span class="fw-bold text--success ">
                                                    + 250.00 USD
                                                </span>
                                            </td>

                                            <td class="budget">
                                                2,230.72 USD
                                            </td>

                                            <td>Direct referral commission from sumiyabazar1210</td>
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
                                            href="https://script.viserlab.com/mlmlab/admin/report/referral-commission?page=2">2</a>
                                    </li>


                                    <li class="page-item">
                                        <a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/referral-commission?page=2"
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