@extends('web-views2.admin.partials.admin-app')
@section('content')

    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">All Used Pins</h6>
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
                                            <th>Username</th>
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
                                                <span>prince kumar</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/584"><span>@</span>princekumarsh</a>
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
                                                23 hours ago
                                            </td>
                                            <td>
                                                2023-11-19 04:08 PM <br>
                                                2 days ago
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
                                                <span>Loll Kkeoe</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/587"><span>@</span>qaaaqq</a>
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
                                                <span>qaq qaq</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/586"><span>@</span>qa1111</a>
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
                                                <span>Kay Kay</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/585"><span>@</span>fdk123</a>
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
                                                <span>Kay Kay</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/585"><span>@</span>fdk123</a>
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
                                                Created via faisalali46
                                                <br>
                                                <span class="small text-center">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/581"><span>@</span><span>faisalali46</span></a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>bskhgfdhjv,cxjb ghdfksdgljh</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/583"><span>@</span>mizerosam45</a>
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
                                                <span>Faisal Ali</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/581"><span>@</span>faisalali46</a>
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
                                                <span>Faisal Ali</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/581"><span>@</span>faisalali46</a>
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
                                                <span>Faisal Ali</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/581"><span>@</span>faisalali46</a>
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
                                                <span>sdfsdf sdfdsf</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/573"><span>@</span>cliciknew</a>
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
                                                <span>bskhgfdhjv,cxjb ghdfksdgljh</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/583"><span>@</span>mizerosam45</a>
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
                                                <span>dsf sfsdf</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/572"><span>@</span>johnpapi</a>
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
                                                <span>Faisal Ali</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/581"><span>@</span>faisalali46</a>
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
                                                <span>dsf sfsdf</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/572"><span>@</span>johnpapi</a>
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
                                                <span>Faisal Ali</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/581"><span>@</span>faisalali46</a>
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
                                                <span>bskhgfdhjv,cxjb ghdfksdgljh</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/583"><span>@</span>mizerosam45</a>
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
                                                <span>bskhgfdhjv,cxjb ghdfksdgljh</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/583"><span>@</span>mizerosam45</a>
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
                                        <tr>
                                            <td>
                                                Created via abrarmehedi
                                                <br>
                                                <span class="small text-center">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/520"><span>@</span><span>abrarmehedi</span></a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>demort tester</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/529"><span>@</span>fauzan123456</a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>100
                                                    USD</span>
                                            </td>
                                            <td>
                                                61408641-36259825-60350742-46971023
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Used</span>
                                                <br>
                                                1 month ago
                                            </td>
                                            <td>
                                                2023-10-06 04:44 PM <br>
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
                                                <span>Abrar Mehedi</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/520"><span>@</span>abrarmehedi</a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>200
                                                    USD</span>
                                            </td>
                                            <td>
                                                46986830-83256416-80782419-42353685
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Used</span>
                                                <br>
                                                1 month ago
                                            </td>
                                            <td>
                                                2023-09-29 04:05 AM <br>
                                                1 month ago
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
                                                <span>asdjkb jkhsda</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/494"><span>@</span>maaaan</a>
                                                </span>
                                            </td>
                                            <td>
                                                <span>2600
                                                    USD</span>
                                            </td>
                                            <td>
                                                54042125-96470252-37514835-98140808
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Used</span>
                                                <br>
                                                1 month ago
                                            </td>
                                            <td>
                                                2023-09-24 02:32 PM <br>
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
                                            href="https://script.viserlab.com/mlmlab/admin/pin/used?page=2">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/pin/used?page=3">3</a>
                                    </li>


                                    <li class="page-item">
                                        <a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/pin/used?page=2"
                                            rel="next" aria-label="Next &raquo;">&rsaquo;</a>
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