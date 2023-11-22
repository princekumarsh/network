@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">All Unused Pins</h6>
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
                                                4 days ago
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
                                    </tbody>
                                </table>
                            </div>
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