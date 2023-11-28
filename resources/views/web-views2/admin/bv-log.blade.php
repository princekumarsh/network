@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">BV Log</h6>
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    <form class="d-flex flex-wrap gap-2" action="" method="GET">
                        <div class="input-group flex-fill w-auto">
                            <select class="form-control" name="type">
                                <option value="">All</option>
                                <option value="rightBV">Right BV</option>
                                <option value="leftBV">Left BV</option>
                                <option value="cutBV">Cut BV</option>
                            </select>
                            <button class="btn btn-primary" type="submit"><i class="la la-search"></i></button>
                        </div>
                        <div class="input-group w-auto flex-fill">
                            <input type="search" name="search" class="form-control bg--white" placeholder="Username"
                                value="">
                            <button class="btn btn--primary" type="submit"><i class="la la-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card b-radius--10">
                        <div class="card-body p-0">
                            <div class="table-responsive--sm table-responsive">
                                <table class="table--light style--two table">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>BV</th>
                                            <th>Position</th>
                                            <th>Detail</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/8"><span>@</span>admin</a>
                                                </span>
                                            </td>
                                            <td class="budget">
                                                <strong class="text--success">
                                                    +
                                                    100.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--success">Left</span>
                                            </td>
                                            <td>BV from johnpapi</td>
                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="fw-bold">Hedley Hubbard</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/35"><span>@</span>username55</a>
                                                </span>
                                            </td>
                                            <td class="budget">
                                                <strong class="text--success">
                                                    +
                                                    100.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--success">Left</span>
                                            </td>
                                            <td>BV from johnpapi</td>
                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="fw-bold">Hedley test</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/40"><span>@</span>username110</a>
                                                </span>
                                            </td>
                                            <td class="budget">
                                                <strong class="text--success">
                                                    +
                                                    100.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--success">Left</span>
                                            </td>
                                            <td>BV from johnpapi</td>
                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="fw-bold">Hedley Shepherd</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/43"><span>@</span>username5987</a>
                                                </span>
                                            </td>
                                            <td class="budget">
                                                <strong class="text--success">
                                                    +
                                                    100.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--success">Left</span>
                                            </td>
                                            <td>BV from johnpapi</td>
                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="fw-bold">Hedley test</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/44"><span>@</span>username5989</a>
                                                </span>
                                            </td>
                                            <td class="budget">
                                                <strong class="text--success">
                                                    +
                                                    100.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--success">Left</span>
                                            </td>
                                            <td>BV from johnpapi</td>
                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="fw-bold">Jddyksyk Hdbkxdh</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/305"><span>@</span>sssd67</a>
                                                </span>
                                            </td>
                                            <td class="budget">
                                                <strong class="text--success">
                                                    +
                                                    100.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--success">Left</span>
                                            </td>
                                            <td>BV from johnpapi</td>
                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="fw-bold">NJ Izpü</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/312"><span>@</span>usernamem</a>
                                                </span>
                                            </td>
                                            <td class="budget">
                                                <strong class="text--success">
                                                    +
                                                    100.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--success">Left</span>
                                            </td>
                                            <td>BV from johnpapi</td>
                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="fw-bold">rgrgtg rtgrtgrtgrt</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/347"><span>@</span>testte</a>
                                                </span>
                                            </td>
                                            <td class="budget">
                                                <strong class="text--success">
                                                    +
                                                    100.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--success">Left</span>
                                            </td>
                                            <td>BV from johnpapi</td>
                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="fw-bold">Sajin Rajesh</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/350"><span>@</span>sajinrajesh</a>
                                                </span>
                                            </td>
                                            <td class="budget">
                                                <strong class="text--success">
                                                    +
                                                    100.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--success">Left</span>
                                            </td>
                                            <td>BV from johnpapi</td>
                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="fw-bold">Test Testdemo</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/353"><span>@</span>demo00</a>
                                                </span>
                                            </td>
                                            <td class="budget">
                                                <strong class="text--success">
                                                    +
                                                    100.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--success">Left</span>
                                            </td>
                                            <td>BV from johnpapi</td>
                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="fw-bold">Montu utu</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/400"><span>@</span>montu123</a>
                                                </span>
                                            </td>
                                            <td class="budget">
                                                <strong class="text--success">
                                                    +
                                                    100.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--success">Left</span>
                                            </td>
                                            <td>BV from johnpapi</td>
                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="fw-bold">Teste Teste</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/426"><span>@</span>testeteste</a>
                                                </span>
                                            </td>
                                            <td class="budget">
                                                <strong class="text--success">
                                                    +
                                                    100.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--success">Left</span>
                                            </td>
                                            <td>BV from johnpapi</td>
                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="fw-bold">abc xya</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/442"><span>@</span>abcxyz</a>
                                                </span>
                                            </td>
                                            <td class="budget">
                                                <strong class="text--success">
                                                    +
                                                    100.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--success">Left</span>
                                            </td>
                                            <td>BV from johnpapi</td>
                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="fw-bold">Carlos Ignacio Ahid</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/444"><span>@</span>igahid</a>
                                                </span>
                                            </td>
                                            <td class="budget">
                                                <strong class="text--success">
                                                    +
                                                    100.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--success">Left</span>
                                            </td>
                                            <td>BV from johnpapi</td>
                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="fw-bold">Rehman Mani</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/448"><span>@</span>rehmabbb</a>
                                                </span>
                                            </td>
                                            <td class="budget">
                                                <strong class="text--success">
                                                    +
                                                    100.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--success">Left</span>
                                            </td>
                                            <td>BV from johnpapi</td>
                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="fw-bold">abc xya</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/454"><span>@</span>abcdefg</a>
                                                </span>
                                            </td>
                                            <td class="budget">
                                                <strong class="text--success">
                                                    +
                                                    100.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--success">Left</span>
                                            </td>
                                            <td>BV from johnpapi</td>
                                            <td>
                                                2023-11-20 09:38 AM<br>1 week ago
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="fw-bold">Cameron Pruitt</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/8"><span>@</span>admin</a>
                                                </span>
                                            </td>
                                            <td class="budget">
                                                <strong class="text--success">
                                                    +
                                                    50.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--success">Left</span>
                                            </td>
                                            <td>BV from johnpapi</td>
                                            <td>
                                                2023-11-20 09:37 AM<br>1 week ago
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="fw-bold">Hedley Hubbard</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/35"><span>@</span>username55</a>
                                                </span>
                                            </td>
                                            <td class="budget">
                                                <strong class="text--success">
                                                    +
                                                    50.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--success">Left</span>
                                            </td>
                                            <td>BV from johnpapi</td>
                                            <td>
                                                2023-11-20 09:37 AM<br>1 week ago
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="fw-bold">Hedley test</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/40"><span>@</span>username110</a>
                                                </span>
                                            </td>
                                            <td class="budget">
                                                <strong class="text--success">
                                                    +
                                                    50.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--success">Left</span>
                                            </td>
                                            <td>BV from johnpapi</td>
                                            <td>
                                                2023-11-20 09:37 AM<br>1 week ago
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <span class="fw-bold">Hedley Shepherd</span>
                                                <br>
                                                <span class="text--small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/43"><span>@</span>username5987</a>
                                                </span>
                                            </td>
                                            <td class="budget">
                                                <strong class="text--success">
                                                    +
                                                    50.00 USD</strong>
                                            </td>

                                            <td>
                                                <span class="badge badge--success">Left</span>
                                            </td>
                                            <td>BV from johnpapi</td>
                                            <td>
                                                2023-11-20 09:37 AM<br>1 week ago
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
                                            href="https://script.viserlab.com/mlmlab/admin/report/bv-log?page=2">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/bv-log?page=3">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/bv-log?page=4">4</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/bv-log?page=5">5</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/bv-log?page=6">6</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/bv-log?page=7">7</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/bv-log?page=8">8</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/bv-log?page=9">9</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/bv-log?page=10">10</a>
                                    </li>

                                    <li class="page-item disabled" aria-disabled="true"><span
                                            class="page-link">...</span></li>





                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/bv-log?page=21">21</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/bv-log?page=22">22</a>
                                    </li>


                                    <li class="page-item">
                                        <a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/bv-log?page=2"
                                            rel="next" aria-label="Next &raquo;">&rsaquo;</a>
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