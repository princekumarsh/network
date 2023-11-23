@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">KYC Unverified Users</h6>
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    <form class="d-flex flex-wrap gap-2" action="" method="GET">
                        <div class="input-group w-auto flex-fill">
                            <input type="search" name="search" class="form-control bg--white"
                                placeholder="Username / Email" value="">
                            <button class="btn btn--primary" type="submit"><i class="la la-search"></i></button>
                        </div>

                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card b-radius--10">
                        <div class="card-body p-0">
                            <div class="table-responsive--md table-responsive">
                                <table class="table--light style--two table">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Email-Phone</th>
                                            <th>Country</th>
                                            <th>Joined At</th>
                                            <th>Balance</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">prince kumar</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/584"><span>@</span>princekumarsh</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="India">IN</span>
                                            </td>

                                            <td>
                                                2023-11-14 09:10 AM <br> 1 week ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $100.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/584"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/kyc-data/584"
                                                        target="_blank" class="btn btn-sm btn-outline--dark">
                                                        <i class="las la-user-check"></i>KYC Data </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Faisal Ali</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/581"><span>@</span>faisalali46</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Pakistan">PK</span>
                                            </td>

                                            <td>
                                                2023-11-11 08:25 PM <br> 1 week ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $476.71
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/581"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/kyc-data/581"
                                                        target="_blank" class="btn btn-sm btn-outline--dark">
                                                        <i class="las la-user-check"></i>KYC Data </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Emmanuel Effiong</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/557"><span>@</span>9jagoviral</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Nigeria">NG</span>
                                            </td>

                                            <td>
                                                2023-10-28 11:39 PM <br> 3 weeks ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/557"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/kyc-data/557"
                                                        target="_blank" class="btn btn-sm btn-outline--dark">
                                                        <i class="las la-user-check"></i>KYC Data </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Brian Banda</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/497"><span>@</span>bandab45</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="South Africa">ZA</span>
                                            </td>

                                            <td>
                                                2023-09-25 12:09 PM <br> 1 month ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/497"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/kyc-data/497"
                                                        target="_blank" class="btn btn-sm btn-outline--dark">
                                                        <i class="las la-user-check"></i>KYC Data </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">asdjkb jkhsda</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/494"><span>@</span>maaaan</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Thailand">AF</span>
                                            </td>

                                            <td>
                                                2023-09-24 02:24 PM <br> 1 month ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $6,464.03
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/494"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/kyc-data/494"
                                                        target="_blank" class="btn btn-sm btn-outline--dark">
                                                        <i class="las la-user-check"></i>KYC Data </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">fughj hgjkl</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/486"><span>@</span>hvmvfv</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Thailand">TH</span>
                                            </td>

                                            <td>
                                                2023-09-22 08:44 PM <br> 2 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/486"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/kyc-data/486"
                                                        target="_blank" class="btn btn-sm btn-outline--dark">
                                                        <i class="las la-user-check"></i>KYC Data </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Test User</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/482"><span>@</span>testfk</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Pakistan">PK</span>
                                            </td>

                                            <td>
                                                2023-09-21 08:40 PM <br> 2 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/482"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/kyc-data/482"
                                                        target="_blank" class="btn btn-sm btn-outline--dark">
                                                        <i class="las la-user-check"></i>KYC Data </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Gowtham V</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/471"><span>@</span>gowthamv07</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="India">IN</span>
                                            </td>

                                            <td>
                                                2023-09-15 02:00 PM <br> 2 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/471"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/kyc-data/471"
                                                        target="_blank" class="btn btn-sm btn-outline--dark">
                                                        <i class="las la-user-check"></i>KYC Data </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Muhammad Feezan</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/469"><span>@</span>hafizhafiz</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Pakistan">PK</span>
                                            </td>

                                            <td>
                                                2023-09-14 04:19 PM <br> 2 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/469"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/kyc-data/469"
                                                        target="_blank" class="btn btn-sm btn-outline--dark">
                                                        <i class="las la-user-check"></i>KYC Data </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Qeerty Qwerty</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/451"><span>@</span>qwertyqwerty</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Indonesia">AF</span>
                                            </td>

                                            <td>
                                                2023-09-06 07:02 PM <br> 2 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/451"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/kyc-data/451"
                                                        target="_blank" class="btn btn-sm btn-outline--dark">
                                                        <i class="las la-user-check"></i>KYC Data </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">abc xya</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/442"><span>@</span>abcxyz</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="India">IN</span>
                                            </td>

                                            <td>
                                                2023-09-01 03:06 PM <br> 2 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $820.22
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/442"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/kyc-data/442"
                                                        target="_blank" class="btn btn-sm btn-outline--dark">
                                                        <i class="las la-user-check"></i>KYC Data </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">John Doe</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/437"><span>@</span>johndoe</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Nigeria">AF</span>
                                            </td>

                                            <td>
                                                2023-08-29 08:53 AM <br> 2 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/437"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/kyc-data/437"
                                                        target="_blank" class="btn btn-sm btn-outline--dark">
                                                        <i class="las la-user-check"></i>KYC Data </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Timur şarlak</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/436"><span>@</span>timur171</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Spain">ES</span>
                                            </td>

                                            <td>
                                                2023-08-27 08:22 PM <br> 2 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/436"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/kyc-data/436"
                                                        target="_blank" class="btn btn-sm btn-outline--dark">
                                                        <i class="las la-user-check"></i>KYC Data </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Muhammad Sohail Aslam</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/388"><span>@</span>medipe5929</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="United States">US</span>
                                            </td>

                                            <td>
                                                2023-08-03 09:54 PM <br> 3 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/388"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/kyc-data/388"
                                                        target="_blank" class="btn btn-sm btn-outline--dark">
                                                        <i class="las la-user-check"></i>KYC Data </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Bella Sunday</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/373"><span>@</span>bellasunday</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Nigeria">NG</span>
                                            </td>

                                            <td>
                                                2023-07-30 12:42 PM <br> 3 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $690.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/373"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/kyc-data/373"
                                                        target="_blank" class="btn btn-sm btn-outline--dark">
                                                        <i class="las la-user-check"></i>KYC Data </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Encargada Numero 2</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/364"><span>@</span>johnwickjajaja2023</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Croatia">HR</span>
                                            </td>

                                            <td>
                                                2023-07-22 09:03 PM <br> 4 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/364"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/kyc-data/364"
                                                        target="_blank" class="btn btn-sm btn-outline--dark">
                                                        <i class="las la-user-check"></i>KYC Data </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Theja k</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/359"><span>@</span>thejak</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="India">IN</span>
                                            </td>

                                            <td>
                                                2023-07-20 08:32 PM <br> 4 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/359"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/kyc-data/359"
                                                        target="_blank" class="btn btn-sm btn-outline--dark">
                                                        <i class="las la-user-check"></i>KYC Data </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Prabhat Ch</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/358"><span>@</span>prabhatchand</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="India">IN</span>
                                            </td>

                                            <td>
                                                2023-07-19 11:47 AM <br> 4 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/358"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/kyc-data/358"
                                                        target="_blank" class="btn btn-sm btn-outline--dark">
                                                        <i class="las la-user-check"></i>KYC Data </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Sumiyabazar Buyanjargal</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/357"><span>@</span>sumiyabazar1210</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="Mongolia">MN</span>
                                            </td>

                                            <td>
                                                2023-07-19 08:56 AM <br> 4 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/357"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/kyc-data/357"
                                                        target="_blank" class="btn btn-sm btn-outline--dark">
                                                        <i class="las la-user-check"></i>KYC Data </a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Ayrudi Dydu</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/users/detail/356"><span>@</span>resolute</a>
                                                </span>
                                            </td>

                                            <td>
                                                [Email is protected for the demo]<br>[Mobile number is protected for
                                                the demo]
                                            </td>
                                            <td>
                                                <span class="fw-bold" title="India">IN</span>
                                            </td>

                                            <td>
                                                2023-07-18 06:10 PM <br> 4 months ago
                                            </td>

                                            <td>
                                                <span class="fw-bold">

                                                    $0.00
                                                </span>
                                            </td>

                                            <td>
                                                <div class="button--group">
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/detail/356"
                                                        class="btn btn-sm btn-outline--primary">
                                                        <i class="las la-desktop"></i> Details </a>
                                                    <a href="https://script.viserlab.com/mlmlab/admin/users/kyc-data/356"
                                                        target="_blank" class="btn btn-sm btn-outline--dark">
                                                        <i class="las la-user-check"></i>KYC Data </a>
                                                </div>
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
                                            href="https://script.viserlab.com/mlmlab/admin/users/kyc-pending?page=2">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/users/kyc-pending?page=3">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/users/kyc-pending?page=4">4</a>
                                    </li>


                                    <li class="page-item">
                                        <a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/users/kyc-pending?page=2"
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