<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLMLAB - Dashboard</title>

    <link type="image/png" href="https://script.viserlab.com/mlmlab/assets/images/logoIcon/favicon.png"
        rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://script.viserlab.com/mlmlab/assets/global/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://script.viserlab.com/mlmlab/assets/admin/css/vendor/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="https://script.viserlab.com/mlmlab/assets/global/css/all.min.css" rel="stylesheet">
    <link href="https://script.viserlab.com/mlmlab/assets/global/css/line-awesome.min.css" rel="stylesheet">


    <link href="https://script.viserlab.com/mlmlab/assets/admin/css/vendor/select2.min.css" rel="stylesheet">
    <link href="https://script.viserlab.com/mlmlab/assets/admin/css/app.css" rel="stylesheet">

</head>

<body>
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">
        <div class="sidebar bg--dark">
            <button class="res-sidebar-close-btn"><i class="las la-times"></i></button>
            <div class="sidebar__inner">
                <div class="sidebar__logo">
                    <a href="{{route('admin_dashboard')}}" class="sidebar__main-logo"><img
                            src="https://script.viserlab.com/mlmlab/assets/images/logoIcon/logo.png" alt="image"></a>
                </div>

                <div class="sidebar__menu-wrapper" id="sidebar__menuWrapper">
                    <ul class="sidebar__menu">
                        <li class="sidebar-menu-item {{ Request::is('admin-dashboard')?'active':'' }}">
                            <a href="{{route('admin_dashboard')}}" class="nav-link ">
                                <i class="menu-icon las la-home"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item {{ Request::is('admin-plans')?'active':'' }}">
                            <a href="{{route('admin_plans')}}" class="nav-link ">
                                <i class="menu-icon las la-paper-plane"></i>
                                <span class="menu-title">Plans</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="{{ Request::is('admin-all-pins')?'side-menu--open':'' }}">
                                <i class="menu-icon las la-key"></i>
                                <span class="menu-title">Manage Pins</span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  {{ Request::is('admin-all-pins')?'active':'' }}">
                                        <a href="{{route('admin_all_pins')}}" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">All Pins</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item {{ Request::is('admin-all-user-pins')?'active':'' }} ">
                                        <a href="{{route('admin_all_user_pins')}}"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">User Pins</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item  {{ Request::is('admin-admin-pins')?'active':'' }}">
                                        <a href="{{route('admin_admin_pins')}}"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Admin Pins</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item  {{ Request::is('admin-used-pins')?'active':'' }}">
                                        <a href="{{route('admin_used_pins')}}" class="nav-link">
                                            <i class="menu-icon las la-lock-open"></i>
                                            <span class="menu-title">Used Pins</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item {{ Request::is('admin-unused-pins')?'active':'' }}  ">
                                        <a href="{{route('admin_unused_pins')}}" class="nav-link">
                                            <i class="menu-icon las la-lock"></i>
                                            <span class="menu-title">Unused Pins</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-menu-item {{ Request::is('admin-user-ranking')?'active':'' }}">
                            <a href="{{route('admin_user_ranking')}}" class="nav-link ">
                                <i class="menu-icon las la-medal"></i>
                                <span class="menu-title">User Ranking</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon las la-users"></i>
                                <span class="menu-title">Manage Users</span>

                                <span class="menu-badge pill bg--danger ms-auto">
                                    <i class="fa fa-exclamation"></i>
                                </span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  {{ Request::is('admin-active-user')?'active':'' }}">
                                        <a href="{{route('admin_active_user')}}"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Active Users</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item {{ Request::is('admin-banned-user')?'active':'' }} ">
                                        <a href="{{route('admin_banned_user')}}"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Banned Users</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item  {{ Request::is('admin-email-unverified')?'active':'' }}">
                                        <a href="{{route('admin_email_unverified')}}"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Email Unverified</span>

                                            <span class="menu-badge pill bg--danger ms-auto">23</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item ">
                                        <a href="{{route('admin_mobile_unverified')}}"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Mobile Unverified</span>
                                            <span class="menu-badge pill bg--danger ms-auto">1</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item ">
                                        <a href="{{route('admin_kyc_unverified')}}"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">KYC Unverified</span>
                                            <span class="menu-badge pill bg--danger ms-auto">501</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item ">
                                        <a href="{{route('admin_kyc_pending')}}"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">KYC Pending</span>
                                            <span class="menu-badge pill bg--danger ms-auto">61</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item ">
                                        <a href="{{route('admin_with_balance')}}"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">With Balance</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item ">
                                        <a href="{{route('admin_paid_users')}}" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Paid Users</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item  ">
                                        <a href="{{route('admin_all_users')}}" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">All Users</span>
                                        </a>
                                    </li>


                                    <li class="sidebar-menu-item ">
                                        <a href="#"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Notification to All</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        {{-- <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon las la-credit-card"></i>
                                <span class="menu-title">Payment Gateways</span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>

                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/gateway/automatic"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Automatic Gateways</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/gateway/manual"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Manual Gateways</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li> --}}

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon las la-file-invoice-dollar"></i>
                                <span class="menu-title">Deposits</span>
                                <span class="menu-badge pill bg--danger ms-auto">
                                    <i class="fa fa-exclamation"></i>
                                </span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>

                                    <li class="sidebar-menu-item  ">
                                        <a href="{{route('admin_pending_deposits')}}"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Pending Deposits</span>
                                            <span class="menu-badge pill bg--danger ms-auto">121</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item  ">
                                        <a href="{{route('admin_approved_deposits')}}"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Approved Deposits</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/deposit/successful"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Successful Deposits</span>
                                        </a>
                                    </li>


                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/deposit/rejected"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Rejected Deposits</span>
                                        </a>
                                    </li>


                                    <li class="sidebar-menu-item  ">

                                        <a href="https://script.viserlab.com/mlmlab/admin/deposit/initiated"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Initiated Deposits</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/deposit" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">All Deposits</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-bank"></i>
                                <span class="menu-title">Withdrawals </span>
                                <span class="menu-badge pill bg--danger ms-auto">
                                    <i class="fa fa-exclamation"></i>
                                </span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>

                                    <li class="sidebar-menu-item ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/withdraw/method"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Withdrawal Methods</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/withdraw/pending"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Pending Withdrawals</span>

                                            <span class="menu-badge pill bg--danger ms-auto">19</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/withdraw/approved"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Approved Withdrawals</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/withdraw/rejected"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Rejected Withdrawals</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/withdraw/log"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">All Withdrawals</span>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-ticket"></i>
                                <span class="menu-title">Support Ticket </span>
                                <span class="menu-badge pill bg--danger ms-auto">
                                    <i class="fa fa-exclamation"></i>
                                </span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/ticket/pending"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Pending Ticket</span>
                                            <span class="menu-badge pill bg--danger ms-auto">37</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/ticket/closed"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Closed Ticket</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/ticket/answered"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Answered Ticket</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/ticket" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">All Ticket</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-list"></i>
                                <span class="menu-title">Report </span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/report/transaction"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Transaction Log</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/report/invest"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Invest Log</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/report/bv-log"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">BV Log</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/report/referral-commission"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Referral Commission</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/report/binary-commission"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Binary Commission</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/report/login/history"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Login History</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/report/notification/history"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Notification History</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>


                        <li class="sidebar-menu-item  ">
                            <a href="https://script.viserlab.com/mlmlab/admin/subscriber" class="nav-link"
                                data-default-url="https://script.viserlab.com/mlmlab/admin/subscriber">
                                <i class="menu-icon las la-thumbs-up"></i>
                                <span class="menu-title">Subscribers </span>
                            </a>
                        </li>

                        <li class="sidebar__menu-header">Settings</li>

                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/mlmlab/admin/general-setting" class="nav-link">
                                <i class="menu-icon las la-life-ring"></i>
                                <span class="menu-title">General Setting</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/mlmlab/admin/setting/system-configuration"
                                class="nav-link">
                                <i class="menu-icon las la-cog"></i>
                                <span class="menu-title">System Configuration</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/mlmlab/admin/cron/index" class="nav-link">
                                <i class="menu-icon las la-clock"></i>
                                <span class="menu-title">Cron Job Setting</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/mlmlab/admin/matching-bonus" class="nav-link">
                                <i class="menu-icon las la-donate"></i>
                                <span class="menu-title">Matching Bonus</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/mlmlab/admin/setting/logo-icon" class="nav-link">
                                <i class="menu-icon las la-images"></i>
                                <span class="menu-title">Logo & Favicon</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/mlmlab/admin/extensions" class="nav-link">
                                <i class="menu-icon las la-cogs"></i>
                                <span class="menu-title">Extensions</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item  ">
                            <a href="https://script.viserlab.com/mlmlab/admin/language" class="nav-link"
                                data-default-url="https://script.viserlab.com/mlmlab/admin/language">
                                <i class="menu-icon las la-language"></i>
                                <span class="menu-title">Language </span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/mlmlab/admin/seo" class="nav-link">
                                <i class="menu-icon las la-globe"></i>
                                <span class="menu-title">SEO Manager</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/mlmlab/admin/kyc-setting" class="nav-link">
                                <i class="menu-icon las la-user-check"></i>
                                <span class="menu-title">KYC Setting</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon las la-bell"></i>
                                <span class="menu-title">Notification Setting</span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/notification/global"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Global Template</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/notification/email/setting"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Email Setting</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/notification/sms/setting"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">SMS Setting</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/notification/templates"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Notification Templates</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar__menu-header">Frontend Manager</li>

                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/mlmlab/admin/frontend/templates" class="nav-link ">
                                <i class="menu-icon la la-html5"></i>
                                <span class="menu-title">Manage Templates</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/mlmlab/admin/frontend/manage-pages" class="nav-link ">
                                <i class="menu-icon la la-list"></i>
                                <span class="menu-title">Manage Pages</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-puzzle-piece"></i>
                                <span class="menu-title">Manage Section</span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item   ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-sections/about"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">About Us</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-sections/banner"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Banner Section</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-sections/blog"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Blog Section</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-sections/breadcrumb"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Breadcrumb</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-sections/contact_us"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Contact Us</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-sections/counter"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Counter Section</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-sections/faq"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">FAQ Section</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-sections/footer"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Footer Section</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-sections/how_it_works"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">How It Works</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-sections/kyc_info"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">KYC Information</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-sections/login"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Login Section</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-sections/marketing_tool"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Marketing Tool</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-sections/notice"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">User Notice</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-sections/plan"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Plan Section</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-sections/policy_pages"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Policy Pages</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-sections/register"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Register Section</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-sections/service"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Service Section</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-sections/social_icon"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Social Icons</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-sections/subscribe"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Subscribe Section</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-sections/team"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Team Section</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-sections/testimonial"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Testimonial Section</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item   ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/frontend/frontend-sections/transactions"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Transactions</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar__menu-header">Extra</li>


                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/mlmlab/admin/maintenance-mode" class="nav-link">
                                <i class="menu-icon las la-robot"></i>
                                <span class="menu-title">Maintenance Mode</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/mlmlab/admin/cookie" class="nav-link">
                                <i class="menu-icon las la-cookie-bite"></i>
                                <span class="menu-title">GDPR Cookie</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item sidebar-dropdown">
                            <a href="javascript:void(0)" class="">
                                <i class="menu-icon la la-server"></i>
                                <span class="menu-title">System</span>
                            </a>
                            <div class="sidebar-submenu  ">
                                <ul>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/system/info" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Application</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/system/server-info"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Server</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/system/optimize"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Cache</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item  ">
                                        <a href="https://script.viserlab.com/mlmlab/admin/system/system-update"
                                            class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">Update</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-menu-item ">
                            <a href="https://script.viserlab.com/mlmlab/admin/custom-css" class="nav-link">
                                <i class="menu-icon lab la-css3-alt"></i>
                                <span class="menu-title">Custom CSS</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item  ">
                            <a href="https://script.viserlab.com/mlmlab/admin/request-report" class="nav-link"
                                data-default-url="https://script.viserlab.com/mlmlab/admin/request-report">
                                <i class="menu-icon las la-bug"></i>
                                <span class="menu-title">Report & Request </span>
                            </a>
                        </li>
                    </ul>
                    <div class="text-center mb-3 text-uppercase">
                        <span class="text--primary">mlmlab</span>
                        <span class="text--success">V2.5 </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- sidebar end -->

        <!-- navbar-wrapper start -->
        <nav class="navbar-wrapper bg--dark">
            <div class="navbar__left">
                <button type="button" class="res-sidebar-open-btn me-3"><i class="las la-bars"></i></button>
                <form class="navbar-search">
                    <input type="search" name="#0" class="navbar-search-field" id="searchInput" autocomplete="off"
                        placeholder="Search here...">
                    <i class="las la-search"></i>
                    <ul class="search-list"></ul>
                </form>
            </div>
            <div class="navbar__right">
                <ul class="navbar__action-list">

                    <li class="dropdown">
                        <button type="button" class="primary--layer" data-bs-toggle="dropdown" data-display="static"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="las la-bell text--primary  icon-left-right "></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu--md p-0 border-0 box--shadow1 dropdown-menu-right">
                            <div class="dropdown-menu__header">
                                <span class="caption">Notification</span>
                                <p>You have 19 unread notification</p>
                            </div>
                            <div class="dropdown-menu__body">
                                <a href="https://script.viserlab.com/mlmlab/admin/notification/read/823"
                                    class="dropdown-menu__item">
                                    <div class="navbar-notifi">
                                        <div class="navbar-notifi__left bg--green b-radius--rounded"></div>
                                        <div class="navbar-notifi__right">
                                            <h6 class="notifi__title">New member registered</h6>
                                            <span class="time"><i class="far fa-clock"></i>
                                                16 hours ago</span>
                                        </div>
                                    </div><!-- navbar-notifi end -->
                                </a>
                                <a href="https://script.viserlab.com/mlmlab/admin/notification/read/822"
                                    class="dropdown-menu__item">
                                    <div class="navbar-notifi">
                                        <div class="navbar-notifi__left bg--green b-radius--rounded"></div>
                                        <div class="navbar-notifi__right">
                                            <h6 class="notifi__title">Deposit successful via e-pin</h6>
                                            <span class="time"><i class="far fa-clock"></i>
                                                22 hours ago</span>
                                        </div>
                                    </div><!-- navbar-notifi end -->
                                </a>
                                <a href="https://script.viserlab.com/mlmlab/admin/notification/read/821"
                                    class="dropdown-menu__item">
                                    <div class="navbar-notifi">
                                        <div class="navbar-notifi__left bg--green b-radius--rounded"></div>
                                        <div class="navbar-notifi__right">
                                            <h6 class="notifi__title">New support ticket has opened</h6>
                                            <span class="time"><i class="far fa-clock"></i>
                                                23 hours ago</span>
                                        </div>
                                    </div><!-- navbar-notifi end -->
                                </a>
                                <a href="https://script.viserlab.com/mlmlab/admin/notification/read/820"
                                    class="dropdown-menu__item">
                                    <div class="navbar-notifi">
                                        <div class="navbar-notifi__left bg--green b-radius--rounded"></div>
                                        <div class="navbar-notifi__right">
                                            <h6 class="notifi__title">Withdraw successful via e-pin</h6>
                                            <span class="time"><i class="far fa-clock"></i>
                                                2 days ago</span>
                                        </div>
                                    </div><!-- navbar-notifi end -->
                                </a>
                                <a href="https://script.viserlab.com/mlmlab/admin/notification/read/819"
                                    class="dropdown-menu__item">
                                    <div class="navbar-notifi">
                                        <div class="navbar-notifi__left bg--green b-radius--rounded"></div>
                                        <div class="navbar-notifi__right">
                                            <h6 class="notifi__title">Withdraw successful via e-pin</h6>
                                            <span class="time"><i class="far fa-clock"></i>
                                                3 days ago</span>
                                        </div>
                                    </div><!-- navbar-notifi end -->
                                </a>
                                <a href="https://script.viserlab.com/mlmlab/admin/notification/read/818"
                                    class="dropdown-menu__item">
                                    <div class="navbar-notifi">
                                        <div class="navbar-notifi__left bg--green b-radius--rounded"></div>
                                        <div class="navbar-notifi__right">
                                            <h6 class="notifi__title">Withdraw successful via e-pin</h6>
                                            <span class="time"><i class="far fa-clock"></i>
                                                3 days ago</span>
                                        </div>
                                    </div><!-- navbar-notifi end -->
                                </a>
                                <a href="https://script.viserlab.com/mlmlab/admin/notification/read/817"
                                    class="dropdown-menu__item">
                                    <div class="navbar-notifi">
                                        <div class="navbar-notifi__left bg--green b-radius--rounded"></div>
                                        <div class="navbar-notifi__right">
                                            <h6 class="notifi__title">New member registered</h6>
                                            <span class="time"><i class="far fa-clock"></i>
                                                4 days ago</span>
                                        </div>
                                    </div><!-- navbar-notifi end -->
                                </a>
                                <a href="https://script.viserlab.com/mlmlab/admin/notification/read/816"
                                    class="dropdown-menu__item">
                                    <div class="navbar-notifi">
                                        <div class="navbar-notifi__left bg--green b-radius--rounded"></div>
                                        <div class="navbar-notifi__right">
                                            <h6 class="notifi__title">New member registered</h6>
                                            <span class="time"><i class="far fa-clock"></i>
                                                5 days ago</span>
                                        </div>
                                    </div><!-- navbar-notifi end -->
                                </a>
                                <a href="https://script.viserlab.com/mlmlab/admin/notification/read/815"
                                    class="dropdown-menu__item">
                                    <div class="navbar-notifi">
                                        <div class="navbar-notifi__left bg--green b-radius--rounded"></div>
                                        <div class="navbar-notifi__right">
                                            <h6 class="notifi__title">Deposit successful via e-pin</h6>
                                            <span class="time"><i class="far fa-clock"></i>
                                                5 days ago</span>
                                        </div>
                                    </div><!-- navbar-notifi end -->
                                </a>
                                <a href="https://script.viserlab.com/mlmlab/admin/notification/read/814"
                                    class="dropdown-menu__item">
                                    <div class="navbar-notifi">
                                        <div class="navbar-notifi__left bg--green b-radius--rounded"></div>
                                        <div class="navbar-notifi__right">
                                            <h6 class="notifi__title">Withdraw successful via e-pin</h6>
                                            <span class="time"><i class="far fa-clock"></i>
                                                5 days ago</span>
                                        </div>
                                    </div><!-- navbar-notifi end -->
                                </a>
                            </div>
                            <div class="dropdown-menu__footer">
                                <a href="https://script.viserlab.com/mlmlab/admin/notifications"
                                    class="view-all-message">View all notification</a>
                            </div>
                        </div>
                    </li>


                    <li class="dropdown">
                        <button type="button" class="" data-bs-toggle="dropdown" data-display="static"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="navbar-user">
                                <span class="navbar-user__thumb"><img
                                        src="https://script.viserlab.com/mlmlab/assets/admin/images/profile/6379b33c94bd11668920124.jpg"
                                        alt="image"></span>
                                <span class="navbar-user__info">
                                    <span class="navbar-user__name">admin</span>
                                </span>
                                <span class="icon"><i class="las la-chevron-circle-down"></i></span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">
                            <a href="https://script.viserlab.com/mlmlab/admin/profile"
                                class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                <i class="dropdown-menu__icon las la-user-circle"></i>
                                <span class="dropdown-menu__caption">Profile</span>
                            </a>

                            <a href="https://script.viserlab.com/mlmlab/admin/password"
                                class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                <i class="dropdown-menu__icon las la-key"></i>
                                <span class="dropdown-menu__caption">Password</span>
                            </a>

                            <a href="https://script.viserlab.com/mlmlab/admin/logout"
                                class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                                <i class="dropdown-menu__icon las la-sign-out-alt"></i>
                                <span class="dropdown-menu__caption">Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- navbar-wrapper end -->


        @yield('content')




    </div>




    <script src="https://script.viserlab.com/mlmlab/assets/global/js/jquery-3.6.0.min.js"></script>
    <script src="https://script.viserlab.com/mlmlab/assets/global/js/bootstrap.bundle.min.js"></script>
    <script src="https://script.viserlab.com/mlmlab/assets/admin/js/vendor/bootstrap-toggle.min.js"></script>
    <script src="https://script.viserlab.com/mlmlab/assets/admin/js/vendor/jquery.slimscroll.min.js"></script>

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


    <script src="https://script.viserlab.com/mlmlab/assets/admin/js/nicEdit.js"></script>

    <script src="https://script.viserlab.com/mlmlab/assets/admin/js/vendor/select2.min.js"></script>
    <script src="https://script.viserlab.com/mlmlab/assets/admin/js/app.js"></script>


    <script>
        "use strict";
        bkLib.onDomLoaded(function() {
            $(".nicEdit").each(function(index) {
                $(this).attr("id", "nicEditor" + index);
                new nicEditor({
                    fullPanel: true
                }).panelInstance('nicEditor' + index, {
                    hasPanel: true
                });
            });
        });
        (function($) {
            $(document).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain', function() {
                $('.nicEdit-main').focus();
            });
        })(jQuery);
    </script>

    <script src="https://script.viserlab.com/mlmlab/assets/admin/js/vendor/apexcharts.min.js"></script>
    <script src="https://script.viserlab.com/mlmlab/assets/admin/js/vendor/chart.js.2.8.0.js"></script>

    <script>
        "use strict";


        var options = {
            series: [{
                name: 'Total Deposit',
                data: [
                                            300,
                                            2550,
                                            6000,
                                            18200,
                                            13100,
                                            6200,
                                            13556,
                                            8800,
                                            640,
                                            16745,
                                            300,
                                            9843,
                                    ]
            }, {
                name: 'Total Withdraw',
                data: [
                                            0,
                                            0,
                                            0,
                                            0,
                                            0,
                                            0,
                                            233,
                                            1060,
                                            461,
                                            16644,
                                            1398,
                                            3215,
                                    ]
            }],
            chart: {
                type: 'bar',
                height: 450,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '50%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ["November-2022","December-2022","January-2023","March-2023","April-2023","May-2023","June-2023","July-2023","August-2023","September-2023","October-2023","November-2023"],
            },
            yaxis: {
                title: {
                    text: "$",
                    style: {
                        color: '#7c97bb'
                    }
                }
            },
            grid: {
                xaxis: {
                    lines: {
                        show: false
                    }
                },
                yaxis: {
                    lines: {
                        show: false
                    }
                },
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "$" + val + " "
                    }
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#apex-bar-chart"), options);
        chart.render();



        var ctx = document.getElementById('userBrowserChart');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Chrome","Handheld Browser","Firefox"],
                datasets: [{
                    data: [36,24,2],
                    backgroundColor: [
                        '#ff7675',
                        '#6c5ce7',
                        '#ffa62b',
                        '#ffeaa7',
                        '#D980FA',
                        '#fccbcb',
                        '#45aaf2',
                        '#05dfd7',
                        '#FF00F6',
                        '#1e90ff',
                        '#2ed573',
                        '#eccc68',
                        '#ff5200',
                        '#cd84f1',
                        '#7efff5',
                        '#7158e2',
                        '#fff200',
                        '#ff9ff3',
                        '#08ffc8',
                        '#3742fa',
                        '#1089ff',
                        '#70FF61',
                        '#bf9fee',
                        '#574b90'
                    ],
                    borderColor: [
                        'rgba(231, 80, 90, 0.75)'
                    ],
                    borderWidth: 0,

                }]
            },
            options: {
                aspectRatio: 1,
                responsive: true,
                maintainAspectRatio: true,
                elements: {
                    line: {
                        tension: 0 // disables bezier curves
                    }
                },
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });



        var ctx = document.getElementById('userOsChart');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Windows 10","Mac OS X","iPhone","Linux","Android"],
                datasets: [{
                    data: [33,4,6,1,18],
                    backgroundColor: [
                        '#ff7675',
                        '#6c5ce7',
                        '#ffa62b',
                        '#ffeaa7',
                        '#D980FA',
                        '#fccbcb',
                        '#45aaf2',
                        '#05dfd7',
                        '#FF00F6',
                        '#1e90ff',
                        '#2ed573',
                        '#eccc68',
                        '#ff5200',
                        '#cd84f1',
                        '#7efff5',
                        '#7158e2',
                        '#fff200',
                        '#ff9ff3',
                        '#08ffc8',
                        '#3742fa',
                        '#1089ff',
                        '#70FF61',
                        '#bf9fee',
                        '#574b90'
                    ],
                    borderColor: [
                        'rgba(0, 0, 0, 0.05)'
                    ],
                    borderWidth: 0,

                }]
            },
            options: {
                aspectRatio: 1,
                responsive: true,
                elements: {
                    line: {
                        tension: 0 // disables bezier curves
                    }
                },
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }]
                },
                legend: {
                    display: false,
                }
            },
        });


        // Donut chart
        var ctx = document.getElementById('userCountryChart');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["India","Nigeria","Indonesia","Bangladesh","Pakistan"],
                datasets: [{
                    data: [14,10,7,5,4],
                    backgroundColor: [
                        '#ff7675',
                        '#6c5ce7',
                        '#ffa62b',
                        '#ffeaa7',
                        '#D980FA',
                        '#fccbcb',
                        '#45aaf2',
                        '#05dfd7',
                        '#FF00F6',
                        '#1e90ff',
                        '#2ed573',
                        '#eccc68',
                        '#ff5200',
                        '#cd84f1',
                        '#7efff5',
                        '#7158e2',
                        '#fff200',
                        '#ff9ff3',
                        '#08ffc8',
                        '#3742fa',
                        '#1089ff',
                        '#70FF61',
                        '#bf9fee',
                        '#574b90'
                    ],
                    borderColor: [
                        'rgba(231, 80, 90, 0.75)'
                    ],
                    borderWidth: 0,

                }]
            },
            options: {
                aspectRatio: 1,
                responsive: true,
                elements: {
                    line: {
                        tension: 0 // disables bezier curves
                    }
                },
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });

        // apex-line chart
        var options = {
            chart: {
                height: 450,
                type: "area",
                toolbar: {
                    show: false
                },
                dropShadow: {
                    enabled: true,
                    enabledSeries: [0],
                    top: -2,
                    left: 0,
                    blur: 10,
                    opacity: 0.08
                },
                animations: {
                    enabled: true,
                    easing: 'linear',
                    dynamicAnimation: {
                        speed: 1000
                    }
                },
            },
            dataLabels: {
                enabled: false
            },
            series: [{
                    name: "Plus Transactions",
                    data: [
                                                    0,
                                                    0,
                                                    0,
                                                    0,
                                                    5573.78000000,
                                                    533.56000000,
                                                    1525.00000000,
                                                    125.00000000,
                                                    100.00000000,
                                                    16.83000000,
                                                    2580.93000000,
                                                    0,
                                                    0,
                                                    776.94000000,
                                                    100.00000000,
                                            ]
                },
                {
                    name: "Minus Transactions",
                    data: [
                                                    500.00000000,
                                                    10.00000000,
                                                    5.00000000,
                                                    1.00000000,
                                                    420.00000000,
                                                    810.00000000,
                                                    15.00000000,
                                                    100.00000000,
                                                    0,
                                                    1310.00000000,
                                                    3900.00000000,
                                                    10.00000000,
                                                    150.00000000,
                                                    1600.00000000,
                                                    0,
                                            ]
                }
            ],
            fill: {
                type: "gradient",
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.7,
                    opacityTo: 0.9,
                    stops: [0, 90, 100]
                }
            },
            xaxis: {
                categories: [
                                            "2023-10-28",
                                            "2023-10-29",
                                            "2023-10-30",
                                            "2023-11-03",
                                            "2023-11-07",
                                            "2023-11-10",
                                            "2023-11-12",
                                            "2023-11-13",
                                            "2023-11-14",
                                            "2023-11-15",
                                            "2023-11-16",
                                            "2023-11-18",
                                            "2023-11-19",
                                            "2023-11-20",
                                            "2023-11-21",
                                    ]
            },
            grid: {
                padding: {
                    left: 5,
                    right: 5
                },
                xaxis: {
                    lines: {
                        show: false
                    }
                },
                yaxis: {
                    lines: {
                        show: false
                    }
                },
            },
        };

        var chart = new ApexCharts(document.querySelector("#apex-line"), options);

        chart.render();
    </script>
    <script>
        if ($('li').hasClass('active')) {
            $('#sidebar__menuWrapper').animate({
                scrollTop: eval($(".active").offset().top - 320)
            }, 500);
        }
    </script>

</body>

</html>