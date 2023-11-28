@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">User Login History</h6>
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    <form class="d-flex flex-wrap gap-2" action="" method="GET">
                        <div class="input-group w-auto flex-fill">
                            <input type="search" name="search" class="form-control bg--white"
                                placeholder="Enter Username" value="">
                            <button class="btn btn--primary" type="submit"><i class="la la-search"></i></button>
                        </div>

                    </form>
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
                                            <th>User</th>
                                            <th>Login at</th>
                                            <th>IP</th>
                                            <th>Location</th>
                                            <th>Browser | OS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>
                                                <span class="fw-bold">Shahidul Islam</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/597"><span>@</span>saudashahid</a>
                                                </span>
                                            </td>


                                            <td>
                                                2023-11-28 05:25 AM <br> 5 hours ago
                                            </td>



                                            <td>
                                                <span class="fw-bold">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/login/ipHistory/103.132.181.155">103.132.181.155</a>
                                                </span>
                                            </td>

                                            <td>Jamalpur <br> Bangladesh</td>
                                            <td>
                                                Chrome <br> Windows 10
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <span class="fw-bold">Kwame Owusu</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/596"><span>@</span>testing12</a>
                                                </span>
                                            </td>


                                            <td>
                                                2023-11-27 01:12 PM <br> 21 hours ago
                                            </td>



                                            <td>
                                                <span class="fw-bold">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/login/ipHistory/102.176.94.69">102.176.94.69</a>
                                                </span>
                                            </td>

                                            <td>Accra <br> Ghana</td>
                                            <td>
                                                Chrome <br> Windows 10
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <span class="fw-bold">Md Rajib</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/492"><span>@</span>rajib786</a>
                                                </span>
                                            </td>


                                            <td>
                                                2023-11-26 02:38 PM <br> 1 day ago
                                            </td>



                                            <td>
                                                <span class="fw-bold">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/login/ipHistory/2402:3a80:1c89:a2e5:478:5634:1232:5476">2402:3a80:1c89:a2e5:478:5634:1232:5476</a>
                                                </span>
                                            </td>

                                            <td> <br> India</td>
                                            <td>
                                                Chrome <br> Linux
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <span class="fw-bold">Md Rajib</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/492"><span>@</span>rajib786</a>
                                                </span>
                                            </td>


                                            <td>
                                                2023-11-26 02:27 PM <br> 1 day ago
                                            </td>



                                            <td>
                                                <span class="fw-bold">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/login/ipHistory/2402:3a80:1f6c:9267::67a3:3c75">2402:3a80:1f6c:9267::67a3:3c75</a>
                                                </span>
                                            </td>

                                            <td>Siliguri <br> India</td>
                                            <td>
                                                Handheld Browser <br> Android
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <span class="fw-bold">Uwem Dev</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/591"><span>@</span>uwemdev</a>
                                                </span>
                                            </td>


                                            <td>
                                                2023-11-24 10:29 AM <br> 3 days ago
                                            </td>



                                            <td>
                                                <span class="fw-bold">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/login/ipHistory/105.113.36.114">105.113.36.114</a>
                                                </span>
                                            </td>

                                            <td>Enugu <br> Nigeria</td>
                                            <td>
                                                Handheld Browser <br> Android
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <span class="fw-bold">ANil Kumar</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/595"><span>@</span>akashkumar</a>
                                                </span>
                                            </td>


                                            <td>
                                                2023-11-24 08:52 AM <br> 4 days ago
                                            </td>



                                            <td>
                                                <span class="fw-bold">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/login/ipHistory/103.211.52.253">103.211.52.253</a>
                                                </span>
                                            </td>

                                            <td>Delhi <br> India</td>
                                            <td>
                                                Chrome <br> Mac OS X
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <span class="fw-bold">mamit kumar</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/594"><span>@</span>mamitkumar</a>
                                                </span>
                                            </td>


                                            <td>
                                                2023-11-24 08:49 AM <br> 4 days ago
                                            </td>



                                            <td>
                                                <span class="fw-bold">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/login/ipHistory/103.211.52.253">103.211.52.253</a>
                                                </span>
                                            </td>

                                            <td>Delhi <br> India</td>
                                            <td>
                                                Safari <br> Mac OS X
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <span class="fw-bold">dew KENDRA</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/317"><span>@</span>sagame</a>
                                                </span>
                                            </td>


                                            <td>
                                                2023-11-23 05:11 PM <br> 4 days ago
                                            </td>



                                            <td>
                                                <span class="fw-bold">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/login/ipHistory/197.210.8.0">197.210.8.0</a>
                                                </span>
                                            </td>

                                            <td>Lagos <br> Nigeria</td>
                                            <td>
                                                Handheld Browser <br> iPhone
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <span class="fw-bold">dew KENDRA</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/317"><span>@</span>sagame</a>
                                                </span>
                                            </td>


                                            <td>
                                                2023-11-23 04:36 PM <br> 4 days ago
                                            </td>



                                            <td>
                                                <span class="fw-bold">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/login/ipHistory/197.210.8.0">197.210.8.0</a>
                                                </span>
                                            </td>

                                            <td>Lagos <br> Nigeria</td>
                                            <td>
                                                Handheld Browser <br> iPhone
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <span class="fw-bold">Manoj Kr</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/593"><span>@</span>manojkr</a>
                                                </span>
                                            </td>


                                            <td>
                                                2023-11-22 08:39 PM <br> 5 days ago
                                            </td>



                                            <td>
                                                <span class="fw-bold">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/login/ipHistory/223.228.234.208">223.228.234.208</a>
                                                </span>
                                            </td>

                                            <td>Patna <br> India</td>
                                            <td>
                                                Chrome <br> Windows 10
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <span class="fw-bold">Ram Bali</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/592"><span>@</span>rambali</a>
                                                </span>
                                            </td>


                                            <td>
                                                2023-11-22 08:37 PM <br> 5 days ago
                                            </td>



                                            <td>
                                                <span class="fw-bold">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/login/ipHistory/223.228.234.208">223.228.234.208</a>
                                                </span>
                                            </td>

                                            <td>Patna <br> India</td>
                                            <td>
                                                Chrome <br> Windows 10
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <span class="fw-bold">Uwem Dev</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/591"><span>@</span>uwemdev</a>
                                                </span>
                                            </td>


                                            <td>
                                                2023-11-22 07:45 PM <br> 5 days ago
                                            </td>



                                            <td>
                                                <span class="fw-bold">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/login/ipHistory/197.210.54.228">197.210.54.228</a>
                                                </span>
                                            </td>

                                            <td> <br> Nigeria</td>
                                            <td>
                                                Handheld Browser <br> Android
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <span class="fw-bold">Uwem Dev</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/591"><span>@</span>uwemdev</a>
                                                </span>
                                            </td>


                                            <td>
                                                2023-11-22 07:42 PM <br> 5 days ago
                                            </td>



                                            <td>
                                                <span class="fw-bold">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/login/ipHistory/197.210.77.34">197.210.77.34</a>
                                                </span>
                                            </td>

                                            <td> <br> Nigeria</td>
                                            <td>
                                                Handheld Browser <br> iPhone
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <span class="fw-bold">extra buck</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/432"><span>@</span>metaspace</a>
                                                </span>
                                            </td>


                                            <td>
                                                2023-11-22 07:26 PM <br> 5 days ago
                                            </td>



                                            <td>
                                                <span class="fw-bold">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/login/ipHistory/2001:e68:544d:a2fe:7115:a41e:61d2:d7a4">2001:e68:544d:a2fe:7115:a41e:61d2:d7a4</a>
                                                </span>
                                            </td>

                                            <td>Kuala Lumpur <br> Malaysia</td>
                                            <td>
                                                Chrome <br> Windows 10
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <span class="fw-bold">ANil Kumar</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/590"><span>@</span>anil12kuma</a>
                                                </span>
                                            </td>


                                            <td>
                                                2023-11-21 04:33 PM <br> 6 days ago
                                            </td>



                                            <td>
                                                <span class="fw-bold">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/login/ipHistory/2401:4900:1c22:fb3:91fb:d468:85b:b9d1">2401:4900:1c22:fb3:91fb:d468:85b:b9d1</a>
                                                </span>
                                            </td>

                                            <td>Delhi <br> India</td>
                                            <td>
                                                Chrome <br> Windows 10
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <span class="fw-bold">prince kumar</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/584"><span>@</span>princekumarsh</a>
                                                </span>
                                            </td>


                                            <td>
                                                2023-11-21 08:11 AM <br> 1 week ago
                                            </td>



                                            <td>
                                                <span class="fw-bold">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/login/ipHistory/157.42.194.241">157.42.194.241</a>
                                                </span>
                                            </td>

                                            <td>Patna <br> India</td>
                                            <td>
                                                Chrome <br> Windows 10
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <span class="fw-bold">joni takdim</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/589"><span>@</span>qwaszx</a>
                                                </span>
                                            </td>


                                            <td>
                                                2023-11-17 02:10 PM <br> 1 week ago
                                            </td>



                                            <td>
                                                <span class="fw-bold">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/login/ipHistory/120.188.92.200">120.188.92.200</a>
                                                </span>
                                            </td>

                                            <td>Jakarta <br> Indonesia</td>
                                            <td>
                                                Handheld Browser <br> Android
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <span class="fw-bold">max r</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/588"><span>@</span>ratnubank</a>
                                                </span>
                                            </td>


                                            <td>
                                                2023-11-17 06:34 AM <br> 1 week ago
                                            </td>



                                            <td>
                                                <span class="fw-bold">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/login/ipHistory/2402:3a80:4019:2dc2:51e2:869e:7cde:ad85">2402:3a80:4019:2dc2:51e2:869e:7cde:ad85</a>
                                                </span>
                                            </td>

                                            <td> <br> India</td>
                                            <td>
                                                Chrome <br> Windows 10
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <span class="fw-bold">Loll Kkeoe</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/587"><span>@</span>qaaaqq</a>
                                                </span>
                                            </td>


                                            <td>
                                                2023-11-16 09:06 PM <br> 1 week ago
                                            </td>



                                            <td>
                                                <span class="fw-bold">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/login/ipHistory/41.217.83.16">41.217.83.16</a>
                                                </span>
                                            </td>

                                            <td>Ketu <br> Nigeria</td>
                                            <td>
                                                Handheld Browser <br> Android
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <span class="fw-bold">Kay Kay</span>
                                                <br>
                                                <span class="small"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/585"><span>@</span>fdk123</a>
                                                </span>
                                            </td>


                                            <td>
                                                2023-11-16 09:03 PM <br> 1 week ago
                                            </td>



                                            <td>
                                                <span class="fw-bold">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/report/login/ipHistory/41.217.83.16">41.217.83.16</a>
                                                </span>
                                            </td>

                                            <td>Ketu <br> Nigeria</td>
                                            <td>
                                                Handheld Browser <br> Android
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
                                            href="https://script.viserlab.com/mlmlab/admin/report/login/history?page=2">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/login/history?page=3">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/login/history?page=4">4</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/login/history?page=5">5</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/login/history?page=6">6</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/login/history?page=7">7</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/login/history?page=8">8</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/login/history?page=9">9</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/login/history?page=10">10</a>
                                    </li>

                                    <li class="page-item disabled" aria-disabled="true"><span
                                            class="page-link">...</span></li>





                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/login/history?page=54">54</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/login/history?page=55">55</a>
                                    </li>


                                    <li class="page-item">
                                        <a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/report/login/history?page=2"
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