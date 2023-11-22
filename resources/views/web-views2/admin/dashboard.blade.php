@extends('web-views2.admin.partials.admin-app')
@section('content')
        <div class="body-wrapper">
            <div class="bodywrapper__inner">

                <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                    <h6 class="page-title">Dashboard</h6>
                    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                        <button class="btn  btn--success ">
                            <i class="fa fa-fw fa-clock"></i>Last Cron Run :
                            4 minutes ago
                        </button>
                    </div>
                </div>


                <div class="row gy-4">
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card bg--primary overflow-hidden box--shadow2">
                            <a href="https://script.viserlab.com/mlmlab/admin/users" class="item-link"></a>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <i class="la las la-users f-size--56 f-size--56 text--white"></i>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span class="text--white text--small">Total Users</span>
                                        <h2 class="text--white">577</h2>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div><!-- dashboard-w1 end -->
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card bg--success overflow-hidden box--shadow2">
                            <a href="https://script.viserlab.com/mlmlab/admin/users/active" class="item-link"></a>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <i class="la las la-user-check f-size--56 f-size--56 text--white"></i>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span class="text--white text--small">Active Users</span>
                                        <h2 class="text--white">553</h2>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div><!-- dashboard-w1 end -->
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card bg--danger overflow-hidden box--shadow2">
                            <a href="https://script.viserlab.com/mlmlab/admin/users/email-unverified"
                                class="item-link"></a>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <i class="la lar la-envelope f-size--56 f-size--56 text--white"></i>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span class="text--white text--small">Email Unverified Users</span>
                                        <h2 class="text--white">23</h2>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div><!-- dashboard-w1 end -->
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card bg--red overflow-hidden box--shadow2">
                            <a href="https://script.viserlab.com/mlmlab/admin/users/mobile-unverified"
                                class="item-link"></a>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <i class="la las la-comment-slash f-size--56 f-size--56 text--white"></i>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span class="text--white text--small">Mobile Unverified Users</span>
                                        <h2 class="text--white">1</h2>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div><!-- dashboard-w1 end -->
                </div><!-- row end-->

                <div class="row gy-4 mt-2">
                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two box--shadow2 b-radius--5 bg--white">
                            <i class="fas fa-hand-holding-usd overlay-icon text--success"></i>

                            <div class="widget-two__icon b-radius--5   bg--success  ">
                                <i class="fas fa-hand-holding-usd"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3>$99,964.00</h3>
                                <p>Total Deposited</p>
                            </div>

                            <a href="https://script.viserlab.com/mlmlab/admin/deposit"
                                class="widget-two__btn btn btn-outline--success">View All</a>
                        </div>

                    </div><!-- dashboard-w1 end -->
                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two box--shadow2 b-radius--5 bg--white">
                            <i class="fas fa-spinner overlay-icon text--warning"></i>

                            <div class="widget-two__icon b-radius--5   bg--warning  ">
                                <i class="fas fa-spinner"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3>121</h3>
                                <p>Pending Deposits</p>
                            </div>

                            <a href="https://script.viserlab.com/mlmlab/admin/deposit/pending"
                                class="widget-two__btn btn btn-outline--warning">View All</a>
                        </div>

                    </div><!-- dashboard-w1 end -->
                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two box--shadow2 b-radius--5 bg--white">
                            <i class="fas fa-ban overlay-icon text--danger"></i>

                            <div class="widget-two__icon b-radius--5   bg--danger  ">
                                <i class="fas fa-ban"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3>0</h3>
                                <p>Rejected Deposits</p>
                            </div>

                            <a href="https://script.viserlab.com/mlmlab/admin/deposit/rejected"
                                class="widget-two__btn btn btn-outline--danger">View All</a>
                        </div>

                    </div><!-- dashboard-w1 end -->
                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two box--shadow2 b-radius--5 bg--white">
                            <i class="fas fa-percentage overlay-icon text--primary"></i>

                            <div class="widget-two__icon b-radius--5   bg--primary  ">
                                <i class="fas fa-percentage"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3>$816.33</h3>
                                <p>Deposited Charge</p>
                            </div>

                            <a href="https://script.viserlab.com/mlmlab/admin/deposit"
                                class="widget-two__btn btn btn-outline--primary">View All</a>
                        </div>

                    </div><!-- dashboard-w1 end -->
                </div><!-- row end-->

                <div class="row gy-4 mt-2">
                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two box--shadow2 b-radius--5 bg--white">
                            <i class="lar la-credit-card overlay-icon text--success"></i>

                            <div class="widget-two__icon b-radius--5   border border--success text--success  ">
                                <i class="lar la-credit-card"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3>$23,111.00</h3>
                                <p>Total Withdrawn</p>
                            </div>

                            <a href="https://script.viserlab.com/mlmlab/admin/withdraw/log"
                                class="widget-two__btn btn btn-outline--success">View All</a>
                        </div>

                    </div>
                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two box--shadow2 b-radius--5 bg--white">
                            <i class="las la-sync overlay-icon text--warning"></i>

                            <div class="widget-two__icon b-radius--5   border border--warning text--warning  ">
                                <i class="las la-sync"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3>19</h3>
                                <p>Pending Withdrawals</p>
                            </div>

                            <a href="https://script.viserlab.com/mlmlab/admin/withdraw/pending"
                                class="widget-two__btn btn btn-outline--warning">View All</a>
                        </div>

                    </div>
                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two box--shadow2 b-radius--5 bg--white">
                            <i class="las la-times-circle overlay-icon text--danger"></i>

                            <div class="widget-two__icon b-radius--5   border border--danger text--danger  ">
                                <i class="las la-times-circle"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3>1</h3>
                                <p>Rejected Withdrawals</p>
                            </div>

                            <a href="https://script.viserlab.com/mlmlab/admin/withdraw/rejected"
                                class="widget-two__btn btn btn-outline--danger">View All</a>
                        </div>

                    </div>
                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two box--shadow2 b-radius--5 bg--white">
                            <i class="las la-percent overlay-icon text--primary"></i>

                            <div class="widget-two__icon b-radius--5   border border--primary text--primary  ">
                                <i class="las la-percent"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3>$3.00</h3>
                                <p>Withdrawal Charge</p>
                            </div>

                            <a href="https://script.viserlab.com/mlmlab/admin/withdraw/log"
                                class="widget-two__btn btn btn-outline--primary">View All</a>
                        </div>

                    </div>
                </div><!-- row end-->

                <div class="row gy-4 mt-2">
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card bg--info overflow-hidden box--shadow2">
                            <a href="https://script.viserlab.com/mlmlab/admin/report/invest" class="item-link"></a>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <i class="la lar la-credit-card f-size--56 f-size--56 text--white"></i>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span class="text--white text--small">Total Invest</span>
                                        <h2 class="text--white">$66,300.00</h2>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div><!-- dashboard-w1 end -->
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card bg--success overflow-hidden box--shadow2">
                            <a href="https://script.viserlab.com/mlmlab/admin/report/invest?date=2023/11/15-2023/11/22"
                                class="item-link"></a>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <i class="la lar la-credit-card f-size--56 f-size--56 text--white"></i>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span class="text--white text--small">Last 7 Days Invest</span>
                                        <h2 class="text--white">$3,200.00</h2>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div><!-- dashboard-w1 end -->
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card bg--primary overflow-hidden box--shadow2">
                            <a href="https://script.viserlab.com/mlmlab/admin/report/referral-commission"
                                class="item-link"></a>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <i class="la las la-hand-holding-usd f-size--56 f-size--56 text--white"></i>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span class="text--white text--small">Total Referral Commission</span>
                                        <h2 class="text--white">$5,585.00</h2>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div><!-- dashboard-w1 end -->
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card bg--red overflow-hidden box--shadow2">
                            <a href="https://script.viserlab.com/mlmlab/admin/report/binary-commission"
                                class="item-link"></a>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <i class="la las la-tree f-size--56 f-size--56 text--white"></i>
                                    </div>
                                    <div class="col-8 text-end">
                                        <span class="text--white text--small">Total Binary Commission</span>
                                        <h2 class="text--white">$286.83</h2>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div><!-- dashboard-w1 end -->
                </div><!-- row end-->

                <div class="row gy-4 mt-2">
                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two box--shadow2 b-radius--5 bg--white">
                            <i class="las la-cut overlay-icon text--success"></i>

                            <div class="widget-two__icon b-radius--5   bg--success  ">
                                <i class="las la-cut"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3>0</h3>
                                <p>Users Total Bv Cut</p>
                            </div>

                            <a href="https://script.viserlab.com/mlmlab/admin/report/bv-log?type=cutBV"
                                class="widget-two__btn btn btn-outline--success">View All</a>
                        </div>

                    </div>

                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two box--shadow2 b-radius--5 bg--white">
                            <i class="las la-cart-arrow-down overlay-icon text--warning"></i>

                            <div class="widget-two__icon b-radius--5   bg--warning  ">
                                <i class="las la-cart-arrow-down"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3>26810</h3>
                                <p>Users Total BV</p>
                            </div>

                            <a href="https://script.viserlab.com/mlmlab/admin/report/bv-log?type=paidBV"
                                class="widget-two__btn btn btn-outline--warning">View All</a>
                        </div>


                    </div><!-- dashboard-w1 end -->

                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two box--shadow2 b-radius--5 bg--white">
                            <i class="las la-arrow-alt-circle-left overlay-icon text--danger"></i>

                            <div class="widget-two__icon b-radius--5   bg--danger  ">
                                <i class="las la-arrow-alt-circle-left"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3>22100</h3>
                                <p>Users Left BV</p>
                            </div>

                            <a href="https://script.viserlab.com/mlmlab/admin/report/bv-log?type=leftBV"
                                class="widget-two__btn btn btn-outline--danger">View All</a>
                        </div>

                    </div><!-- dashboard-w1 end -->

                    <div class="col-xxl-3 col-sm-6">
                        <div class="widget-two box--shadow2 b-radius--5 bg--white">
                            <i class="las la-arrow-alt-circle-right overlay-icon text--primary"></i>

                            <div class="widget-two__icon b-radius--5   bg--primary  ">
                                <i class="las la-arrow-alt-circle-right"></i>
                            </div>

                            <div class="widget-two__content">
                                <h3>4710</h3>
                                <p>Users Right BV</p>
                            </div>

                            <a href="https://script.viserlab.com/mlmlab/admin/report/bv-log?type=rightBV"
                                class="widget-two__btn btn btn-outline--primary">View All</a>
                        </div>


                    </div><!-- dashboard-w1 end -->

                </div><!-- row end-->

                <div class="row mb-none-30 mt-30">
                    <div class="col-xl-6 mb-30">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Monthly Deposit & Withdraw Report (Last 12 Month)</h5>
                                <div id="apex-bar-chart"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mb-30">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Transactions Report (Last 30 Days)</h5>
                                <div id="apex-line"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-none-30 mt-5">
                    <div class="col-xl-4 col-lg-6 mb-30">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <h5 class="card-title">Login By Browser (Last 30 days)</h5>
                                <canvas id="userBrowserChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 mb-30">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Login By OS (Last 30 days)</h5>
                                <canvas id="userOsChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 mb-30">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Login By Country (Last 30 days)</h5>
                                <canvas id="userCountryChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cron Job Setting Instruction</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="la la-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12 my-2">
                                        <p class="cron-p-style"> To automate BV Matching Bonus, choose your required
                                            setting from above and run the <code> cron job </code> on your server. Set
                                            the Cron time as minimum as possible. Once per <code>5-15</code> minutes is
                                            ideal. </p>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Cron Command</label>
                                        <div class="input-group ">
                                            <input id="ref" type="text" class="form-control form-control-lg"
                                                value="curl -s https://script.viserlab.com/mlmlab/cron" readonly="">
                                            <button type="button" class="btn btn--success" id="copyBtn">COPY</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn--danger h-45 w-100"
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>




            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->

@endsection