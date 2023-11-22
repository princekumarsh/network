@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">All Pins</h6>
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    <form class="d-flex flex-wrap gap-2" action="" method="GET">
                        <div class="input-group w-auto flex-fill">
                            <input type="search" name="search" class="form-control bg--white"
                                placeholder="Search pin" value="">
                            <button class="btn btn--primary" type="submit"><i class="la la-search"></i></button>
                        </div>

                    </form>
                    <button class="btn btn-outline--primary addPin"><i class="las la-paper-plane"></i>Created
                        Pin</button>
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
                                            <th>User|Admin</th>
                                            <th>Amount</th>
                                            <th>Pin</th>
                                            <th>Status</th>
                                            <th>Creations Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Created via qa1111
                                                <br>
                                                <span class="small text-center">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/586"><span>@</span><span>qa1111</span></a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>100
                                                    USD</span>
                                            </td>
                                            <td>
                                                96268188-40461585-94948166-77667874
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Used</span>
                                                <br>
                                                22 hours ago
                                            </td>
                                            <td>
                                                2023-11-19 04:08 PM <br>
                                                2 days ago
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Created via qa1111
                                                <br>
                                                <span class="small text-center">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/586"><span>@</span><span>qa1111</span></a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>50
                                                    USD</span>
                                            </td>
                                            <td>
                                                53011744-83308397-62113826-51751357
                                            </td>
                                            <td>
                                                <span class="badge badge--danger">Unused</span>
                                            </td>
                                            <td>
                                                2023-11-19 08:34 AM <br>
                                                3 days ago
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Created via fdk123
                                                <br>
                                                <span class="small text-center">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/585"><span>@</span><span>fdk123</span></a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>10
                                                    USD</span>
                                            </td>
                                            <td>
                                                53879863-90480432-71134711-74804757
                                            </td>
                                            <td>
                                                <span class="badge badge--danger">Unused</span>
                                            </td>
                                            <td>
                                                2023-11-18 10:13 AM <br>
                                                3 days ago
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Created via fdk123
                                                <br>
                                                <span class="small text-center">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/585"><span>@</span><span>fdk123</span></a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>100
                                                    USD</span>
                                            </td>
                                            <td>
                                                41904497-39458980-64309144-95682609
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Used</span>
                                                <br>
                                                5 days ago
                                            </td>
                                            <td>
                                                2023-11-16 09:07 PM <br>
                                                5 days ago
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Created via maaaan
                                                <br>
                                                <span class="small text-center">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/494"><span>@</span><span>maaaan</span></a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>1000
                                                    USD</span>
                                            </td>
                                            <td>
                                                58465903-25576714-87422180-10528103
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Used</span>
                                                <br>
                                                5 days ago
                                            </td>
                                            <td>
                                                2023-11-16 07:39 PM <br>
                                                5 days ago
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Created via johnpapi
                                                <br>
                                                <span class="small text-center">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/572"><span>@</span><span>johnpapi</span></a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>1200
                                                    USD</span>
                                            </td>
                                            <td>
                                                94549312-71062805-55123244-51007875
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Used</span>
                                                <br>
                                                5 days ago
                                            </td>
                                            <td>
                                                2023-11-16 07:16 PM <br>
                                                5 days ago
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Created via johnpapi
                                                <br>
                                                <span class="small text-center">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/572"><span>@</span><span>johnpapi</span></a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>100
                                                    USD</span>
                                            </td>
                                            <td>
                                                38119582-95879494-90670755-25648032
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Used</span>
                                                <br>
                                                5 days ago
                                            </td>
                                            <td>
                                                2023-11-15 04:27 AM <br>
                                                1 week ago
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Created via mizerosam45
                                                <br>
                                                <span class="small text-center">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/583"><span>@</span><span>mizerosam45</span></a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>10
                                                    USD</span>
                                            </td>
                                            <td>
                                                80531558-42004546-50199116-99728513
                                            </td>
                                            <td>
                                                <span class="badge badge--danger">Unused</span>
                                            </td>
                                            <td>
                                                2023-11-15 04:23 AM <br>
                                                1 week ago
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Created via faisalali46
                                                <br>
                                                <span class="small text-center">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/581"><span>@</span><span>faisalali46</span></a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>100
                                                    USD</span>
                                            </td>
                                            <td>
                                                77332335-44253262-39572808-66564157
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Used</span>
                                                <br>
                                                1 week ago
                                            </td>
                                            <td>
                                                2023-11-13 01:00 PM <br>
                                                1 week ago
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Created via cliciknew
                                                <br>
                                                <span class="small text-center">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/573"><span>@</span><span>cliciknew</span></a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>15
                                                    USD</span>
                                            </td>
                                            <td>
                                                46376521-86275733-16974052-33039807
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Used</span>
                                                <br>
                                                1 week ago
                                            </td>
                                            <td>
                                                2023-11-12 03:59 AM <br>
                                                1 week ago
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Created via johnpapi
                                                <br>
                                                <span class="small text-center">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/572"><span>@</span><span>johnpapi</span></a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>10
                                                    USD</span>
                                            </td>
                                            <td>
                                                50289300-42386089-61534936-27006877
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Used</span>
                                                <br>
                                                1 week ago
                                            </td>
                                            <td>
                                                2023-11-10 05:58 PM <br>
                                                1 week ago
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Created via johnpapi
                                                <br>
                                                <span class="small text-center">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/572"><span>@</span><span>johnpapi</span></a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>500
                                                    USD</span>
                                            </td>
                                            <td>
                                                25437823-80228348-75680746-92041024
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Used</span>
                                                <br>
                                                1 week ago
                                            </td>
                                            <td>
                                                2023-11-10 10:42 AM <br>
                                                1 week ago
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Created via johnpapi
                                                <br>
                                                <span class="small text-center">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/572"><span>@</span><span>johnpapi</span></a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>20
                                                    USD</span>
                                            </td>
                                            <td>
                                                44518811-94767558-80705576-21166380
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Used</span>
                                                <br>
                                                2 weeks ago
                                            </td>
                                            <td>
                                                2023-11-07 11:36 PM <br>
                                                2 weeks ago
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Created via admin
                                                <br>
                                                <span class="small text-center">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/8"><span>@</span><span>admin</span></a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>5
                                                    USD</span>
                                            </td>
                                            <td>
                                                69295743-51261221-57526886-51130870
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Used</span>
                                                <br>
                                                1 week ago
                                            </td>
                                            <td>
                                                2023-10-30 02:37 PM <br>
                                                3 weeks ago
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Created via username30
                                                <br>
                                                <span class="small text-center">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/34"><span>@</span><span>username30</span></a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>10
                                                    USD</span>
                                            </td>
                                            <td>
                                                99004710-58677683-56494381-16173827
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Used</span>
                                                <br>
                                                1 week ago
                                            </td>
                                            <td>
                                                2023-10-29 06:01 PM <br>
                                                3 weeks ago
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Created via username30
                                                <br>
                                                <span class="small text-center">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/34"><span>@</span><span>username30</span></a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>500
                                                    USD</span>
                                            </td>
                                            <td>
                                                55670957-61040477-36152786-59743634
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Used</span>
                                                <br>
                                                1 week ago
                                            </td>
                                            <td>
                                                2023-10-28 11:39 PM <br>
                                                3 weeks ago
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Created via username30
                                                <br>
                                                <span class="small text-center">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/34"><span>@</span><span>username30</span></a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>263
                                                    USD</span>
                                            </td>
                                            <td>
                                                36462025-93470000-96588758-79644727
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Used</span>
                                                <br>
                                                1 week ago
                                            </td>
                                            <td>
                                                2023-10-22 08:25 AM <br>
                                                1 month ago
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Created via maaaan
                                                <br>
                                                <span class="small text-center">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/494"><span>@</span><span>maaaan</span></a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>500
                                                    USD</span>
                                            </td>
                                            <td>
                                                60634850-62328502-96577417-26405751
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Used</span>
                                                <br>
                                                1 week ago
                                            </td>
                                            <td>
                                                2023-10-20 02:47 AM <br>
                                                1 month ago
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Created via abcdefg
                                                <br>
                                                <span class="small text-center">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/454"><span>@</span><span>abcdefg</span></a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>10
                                                    USD</span>
                                            </td>
                                            <td>
                                                52988369-57183359-31775162-56358535
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Used</span>
                                                <br>
                                                1 week ago
                                            </td>
                                            <td>
                                                2023-10-14 10:59 AM <br>
                                                1 month ago
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Created via maaaan
                                                <br>
                                                <span class="small text-center">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/494"><span>@</span><span>maaaan</span></a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>10
                                                    USD</span>
                                            </td>
                                            <td>
                                                93929390-39475795-48284318-79576185
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Used</span>
                                                <br>
                                                1 week ago
                                            </td>
                                            <td>
                                                2023-10-10 08:07 PM <br>
                                                1 month ago
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
                                            href="https://script.viserlab.com/mlmlab/admin/pin?page=2">2</a></li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/pin?page=3">3</a></li>


                                    <li class="page-item">
                                        <a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/pin?page=2" rel="next"
                                            aria-label="Next &raquo;">&rsaquo;</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div id="addModalPin" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Created Pin</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="las la-times"></i>
                            </button>
                        </div>
                        <form action="https://script.viserlab.com/mlmlab/admin/pin/store" method="POST">
                            <input type="hidden" name="_token" value="33FjmTH1MdyGTbosKHwbeOHGBjmEgzgztdO8Ic7k">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <div class="input-group mb-3">
                                        <input type="number" id="amount" class="form-control"
                                            placeholder="Enter Amount" name="amount" step="any" required="">
                                        <div class="input-group-text">
                                            USD
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="number">Total Number of Pin</label>
                                    <input type="number" class="form-control" name="number"
                                        placeholder="Enter Number" required="">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn--primary w-100 h-45">Created</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div><!-- bodywrapper__inner end -->
    </div>
@endsection