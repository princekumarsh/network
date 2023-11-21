<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> MLMLAB - Dashboard</title>
    <meta name="title" Content="MLMLAB - Dashboard">

    <meta name="description"
        content="MLMLab, a professional Multilevel Marketing Solution that comes with PHP laravel. It’s developed for those people who want to start their Multilevel business website.">
    <meta name="keywords"
        content="admin,blog,aaaa,ddd,aaa,viserlab,viserscript,mlm,mlmlab,multilevel,marketing,platform">
    <link type="image/x-icon" href="https://script.viserlab.com/mlmlab/assets/images/logoIcon/favicon.png"
        rel="shortcut icon">


    <link href="https://script.viserlab.com/mlmlab/assets/images/logoIcon/logo.png" rel="apple-touch-icon">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="MLMLAB - Dashboard">

    <meta itemprop="name" content="MLMLAB - Dashboard">
    <meta itemprop="description"
        content="MLMLab, a professional Multilevel Marketing Solution that comes with PHP laravel. It’s developed for those people who want to start their Multilevel business website.">
    <meta itemprop="image" content="https://script.viserlab.com/mlmlab/assets/images/seo/645b85642df9b1683719524.png">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Viserlab Limited">
    <meta property="og:description"
        content="MLMLab, a professional Multilevel Marketing Solution that comes with PHP laravel. It’s developed for those people who want to start their Multilevel business website.">
    <meta property="og:image"
        content="https://script.viserlab.com/mlmlab/assets/images/seo/645b85642df9b1683719524.png" />
    <meta property="og:image:type" content="png" />
    <meta property="og:image:width" content="1180" />
    <meta property="og:image:height" content="600" />
    <meta property="og:url" content="https://script.viserlab.com/mlmlab/user/dashboard">

    <meta name="twitter:card" content="summary_large_image">
    <!-- Bootstrap CSS -->
    <link href="https://script.viserlab.com/mlmlab/assets/global/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://script.viserlab.com/mlmlab/assets/global/css/all.min.css" rel="stylesheet">

    <link href="https://script.viserlab.com/mlmlab/assets/global/css/line-awesome.min.css" rel="stylesheet" />

    <link href="https://script.viserlab.com/mlmlab/assets/templates/basic/users/css/lib/animate.css" rel="stylesheet">
    <!-- Plugin Link -->
    <link href="https://script.viserlab.com/mlmlab/assets/templates/basic/users/css/lib/slick.css" rel="stylesheet">
    <link href="https://script.viserlab.com/mlmlab/assets/templates/basic/users/css/lib/magnific-popup.css"
        rel="stylesheet">
    <link href="https://script.viserlab.com/mlmlab/assets/templates/basic/users/css/lib/apexcharts.css"
        rel="stylesheet">

    <!-- Main css -->
    <link href="https://script.viserlab.com/mlmlab/assets/templates/basic/users/css/main.css" rel="stylesheet">


    <link href="https://script.viserlab.com/mlmlab/assets/templates/basic/users/css/custom.css" rel="stylesheet">
    <link href="https://script.viserlab.com/mlmlab/assets/templates/basic/users/css/color.php?color=1e90fF"
        rel="stylesheet">

    <style>
        .pb-120 {
            padding-bottom: clamp(40px, 4vw, 40px);
        }

        .pt-120 {
            padding-top: clamp(40px, 4vw, 40px);
        }

        .container {
            max-width: 1140px;
        }
        .copied::after {
            background-color: #1e90fF;
        }
    </style>

</head>

<body>

    <div class="d-flex flex-wrap">
        <div class="dashboard-sidebar" id="dashboard-sidebar">
            <button class="btn-close dash-sidebar-close d-xl-none"></button>
            <a href="https://script.viserlab.com/mlmlab" class="logo">
                <img src="https://script.viserlab.com/mlmlab/assets/images/logoIcon/logo_dark.png" alt="images">
            </a>
            <div class="bg--lights">
                <div class="profile-info">
                    <p class="fs--13px mb-3 fw-bold">ACCOUNT BALANCE</p>
                    <h4 class="usd-balance text--base mb-2 fs--30">
                        0.00
                        <sub class="top-0 fs--13px">USD</sub>
                    </h4>
                    <div class="mt-4 d-flex flex-wrap gap-2">
                        <a href="#"
                            class="btn btn--base btn--smd">Deposit</a>
                        <a href="#"
                            class="btn btn--secondary btn--smd">Withdraw</a>
                    </div>
                </div>
            </div>
            <ul class="sidebar-menu">
                <li>
                    <a href="{{route('dashboard')}}" class="{{ Request::is('dashboard')?'active':'' }}">
                        <img src="https://script.viserlab.com/mlmlab/assets/templates/basic/users/images/icon/dashboard.png"
                            alt="icon"> Dashboard </a>
                </li>
                <li>
                    <a href="{{route('dashboard_plan')}}" class="{{ Request::is('dashboard-plan')?'active':'' }}">
                        <img src="https://script.viserlab.com/mlmlab/assets/templates/basic/users/images/icon/plans.png"
                            alt="icon"> Plan </a>
                </li>
                <li>
                    <a href="{{route('dashboard_bvlog')}}" class="{{ Request::is('dashboard-bvlog')?'active':'' }}">
                        <img src="https://script.viserlab.com/mlmlab/assets/templates/basic/users/images/icon/bv_log.png"
                            alt="icon"> Bv Log </a>
                </li>
                <li>
                    <a href="{{route('dashboard_referral')}}" class="{{ Request::is('dashboard-referral')?'active':'' }}">
                        <img src="https://script.viserlab.com/mlmlab/assets/templates/basic/users/images/icon/referral.png"
                            alt="icon"> My Referrals </a>
                </li>
                <li>
                    <a href="{{route('dashboard_tree')}}" class="{{ Request::is('dashboard-tree')?'active':'' }}">
                        <img src="https://script.viserlab.com/mlmlab/assets/templates/basic/users/images/icon/tree.png"
                            alt="icon"> My Tree </a>
                </li>
                <li>
                    <a href="{{route('dashboard_deposit')}}" class="{{ Request::is('dashboard-deposit')?'active':'' }}">
                        <img src="https://script.viserlab.com/mlmlab/assets/templates/basic/users/images/icon/wallet.png"
                            alt="icon"> Deposit </a>
                </li>
                <li>
                    <a href="{{route('dashboard_withdraw')}}" class="{{ Request::is('dashboard-withdraw')?'active':'' }}">
                        <img src="https://script.viserlab.com/mlmlab/assets/templates/basic/users/images/icon/withdraw.png"
                            alt="icon"> Withdraw </a>
                </li>
                {{-- <li>
                    <a href="https://script.viserlab.com/mlmlab/user/transfer-balance" class="">
                        <img src="https://script.viserlab.com/mlmlab/assets/templates/basic/users/images/icon/transfer.png"
                            alt="icon"> Balance Transfer </a>
                </li> --}}
                <li>
                    <a href="{{route('dashboard_ePinRecharge')}}" class="{{ Request::is('dashboard-e-pin-recharge')?'active':'' }}">
                        <img src="https://script.viserlab.com/mlmlab/assets/templates/basic/users/images/icon/epin.png"
                            alt="icon"> E-pin Recharge </a>
                </li>
                <li>
                    <a href="{{route('dashboard_transaction')}}" class="{{ Request::is('dashboard-transaction')?'active':'' }}">
                        <img src="https://script.viserlab.com/mlmlab/assets/templates/basic/users/images/icon/transactions.png"
                            alt="icon"> Transactions </a>
                </li>
                <li>
                    <a href="{{route('dashboard_ranking')}}" class="{{ Request::is('dashboard-ranking')?'active':'' }}">
                        <img src="https://script.viserlab.com/mlmlab/assets/templates/basic/users/images/icon/ranking.png"
                            alt="icon"> Ranking </a>
                </li>
        
                <li>
                    <a href="{{route('dashboard_ticket')}}" class="{{ Request::is('dashboard-ticket*')?'active':'' }}">
                        <img src="https://script.viserlab.com/mlmlab/assets/templates/basic/users/images/icon/ticket.png"
                            alt="icon"> Support Ticket </a>
                </li>
                {{-- <li>
                    <a href="https://script.viserlab.com/mlmlab/user/twofactor" class="">
                        <img src="https://script.viserlab.com/mlmlab/assets/templates/basic/users/images/icon/2fa.png"
                            alt="icon"> 2FA </a>
                </li> --}}
                <li>
                    <a href="{{route('dashboard_profile_setting')}}" class="{{ Request::is('dashboard-profile-setting')?'active':'' }}">
                        <img src="https://script.viserlab.com/mlmlab/assets/templates/basic/users/images/icon/profile.png"
                            alt="icon"> Profile </a>
                </li>
                <li>
                    <a href="{{route('dashboard_change_password')}}" class="{{ Request::is('dashboard-change-password')?'active':'' }}">
                        <img src="https://script.viserlab.com/mlmlab/assets/templates/basic/users/images/icon/password.png"
                            alt="icon"> Change Password </a>
                </li>
                <li>
                    <a href="#" class="">
                        <img src="https://script.viserlab.com/mlmlab/assets/templates/basic/users/images/icon/logout.png"
                            alt="icon"> Logout </a>
                </li>
            </ul>
        </div>
        <div class="dashboard-wrapper">
            <div class="dashboard-nav d-flex align-items-center justify-content-between flex-wrap">
                <div class="nav-left d-flex align-items-center gap-4">
                    <div class="dash-sidebar-toggler d-xl-none" id="dash-sidebar-toggler">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
                <div class="nav-right d-flex align-items-center flex-wrap gap-3">
                    <ul class="nav-header-link d-flex flex-wrap gap-2">
                        <li>
                            <a class="link" href="javascript:void(0)">
                                <img src="https://script.viserlab.com/mlmlab/assets/images/default-member.png"
                                    alt="image">
                            </a>
                            <div class="dropdown-wrapper">
                                <div class="dropdown-header">
                                    <h6 class="name text--base">prince kumar</h6>
                                    <p class="fs--14px">princekumarsh</p>
                                </div>
                                <ul class="links">
                                    <li><a href="https://script.viserlab.com/mlmlab/user/profile-setting"><i
                                                class="las la-user"></i>
                                            Profile</a></li>
                                    <li><a href="https://script.viserlab.com/mlmlab/user/change-password"><i
                                                class="las la-key"></i>
                                            Change Password</a></li>
                                    <li><a href="https://script.viserlab.com/mlmlab/user/logout"><i
                                                class="las la-sign-out-alt"></i>
                                            Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


            @yield('content')


        </div>
    </div>



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://script.viserlab.com/mlmlab/assets/global/js/jquery-3.6.0.min.js"></script>
    <script src="https://script.viserlab.com/mlmlab/assets/global/js/bootstrap.bundle.min.js"></script>

    <!-- Pluglin Link -->
    <script src="https://script.viserlab.com/mlmlab/assets/templates/basic/users/js/lib/slick.min.js"></script>
    <script src="https://script.viserlab.com/mlmlab/assets/templates/basic/users/js/lib/magnific-popup.min.js"></script>
    <script src="https://script.viserlab.com/mlmlab/assets/templates/basic/users/js/lib/apexcharts.min.js"></script>


    <!-- Main js -->
    <script src="https://script.viserlab.com/mlmlab/assets/templates/basic/users/js/main.js"></script>



    <link rel="stylesheet" href="https://script.viserlab.com/mlmlab/assets/global/css/iziToast.min.css">
    <script src="https://script.viserlab.com/mlmlab/assets/global/js/iziToast.min.js"></script>

    <script>
            "use strict";
        function notify(status,message) {
            if (typeof message == 'string') {
                iziToast[status]({
                    message: message,
                    position: "topRight"
                });
            } else {
                $.each(message, function(i, val) {
                    iziToast[status]({
                        message: val,
                        position: "topRight"
                    });
                });
            }
        }
    </script>

    <script>
        (function($) {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "https://script.viserlab.com/mlmlab/change/" + $(this).val();
            });

            var inputElements = $('input,select');
            $.each(inputElements, function(index, element) {
                element = $(element);
                var type = element.attr('type');
                if (type != 'checkbox') {
                    element.closest('.form-group').find('label').attr('for', element.attr('name'));
                    element.attr('id', element.attr('name'))
                }
            });

            $('.policy').on('click', function() {
                $.get('https://script.viserlab.com/mlmlab/cookie/accept', function(response) {
                    $('.cookies-card').addClass('d-none');
                });
            });

            $.each($('input, select, textarea'), function(i, element) {

                if (element.hasAttribute('required')) {
                    $(element).closest('.form-group').find('label').addClass('required');
                }

            });

            $('.showFilterBtn').on('click', function() {
                $('.responsive-filter-card').slideToggle();
            });

            Array.from(document.querySelectorAll('table')).forEach(table => {
                let heading = table.querySelectorAll('thead tr th');
                Array.from(table.querySelectorAll('tbody tr')).forEach((row) => {
                    Array.from(row.querySelectorAll('td')).forEach((colum, i) => {
                        colum.setAttribute('data-label', heading[i].innerText)
                    });
                });
            });

        })(jQuery);
    </script>

</body>
</html>