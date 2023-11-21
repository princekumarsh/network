@extends('web-views2.partials.dashboard-app')
@section('content')
    
        
        
            <div class="dashboard-container">
                <div class="dashboard-inner">
                    <div class="alert border--info border" role="alert">
                        <div class="alert__icon d-flex align-items-center text--info">
                            <i class="fas fa-file-signature"></i>
                        </div>
                        <p class="alert__message">
                            <span class="fw-bold">KYC Verification Required</span>
                            <br>
                            <small><i>Please submit the required KYC information to verify yourself. Otherwise, you
                                    couldn\&#039;t make any withdrawal requests to the system. <a class="link-color"
                                        href="https://script.viserlab.com/mlmlab/user/kyc-form">Click Here to
                                        Verify</a></i></small>
                        </p>
                    </div>

                    <script>
                        var alertList = document.querySelectorAll('.alert');
                alertList.forEach(function(alert) {
                    new bootstrap.Alert(alert)
                })
                    </script>

                    <div class="card custom--card">
                        <div class="card-header">
                            <h5>Notice</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Multi-level marketing is a diverse and varied industry, employing many different
                                structures and methods of selling. Although there may be significant differences in how
                                multi-level marketers sell their products or services, core consumer protection
                                principles are applicable to every member of the industry. The Commission staff offers
                                this non-binding guidance to assist multi-level marketers in applying those core
                                principles to their business practices.
                            </p>
                        </div>
                    </div>

                    <div class="row g-3 mt-3 mb-4">

                        <div class="col-lg-4">
                            <div class="dashboard-widget">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-secondary">Total Deposit</h5>
                                </div>
                                <h3 class="text--secondary my-4">0.00 USD</h3>
                                <div class="widget-lists">
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="fw-bold">Submitted</p>
                                            <span>$0.00</span>
                                        </div>
                                        <div class="col-4">
                                            <p class="fw-bold">Pending</p>
                                            <span>$0.00</span>
                                        </div>
                                        <div class="col-4">
                                            <p class="fw-bold">Rejected</p>
                                            <span>$0.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="dashboard-widget">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-secondary">Total Widthdraw</h5>
                                </div>
                                <h3 class="text--secondary my-4">0.00 USD</h3>
                                <div class="widget-lists">
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="fw-bold">Submitted</p>
                                            <span>$0.00</span>
                                        </div>
                                        <div class="col-4">
                                            <p class="fw-bold">Pending</p>
                                            <span>$0.00</span>
                                        </div>
                                        <div class="col-4">
                                            <p class="fw-bold">Rejected</p>
                                            <span>$0.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="dashboard-widget">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-secondary">Total Referral Commission</h5>
                                </div>
                                <h3 class="text--secondary my-4">0.00 USD
                                </h3>
                                <div class="widget-lists">
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="fw-bold">Referrals</p>
                                            <span>0</span>
                                        </div>
                                        <div class="col-4">
                                            <p class="fw-bold">Left</p>
                                            <span>0</span>
                                        </div>
                                        <div class="col-4">
                                            <p class="fw-bold">Right</p>
                                            <span>0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="dashboard-widget">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-secondary">Total Invest</h5>
                                </div>
                                <h3 class="text--secondary my-4">0.00 USD
                                </h3>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="dashboard-widget">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-secondary">Total Binary Commission</h5>
                                </div>
                                <h3 class="text--secondary my-4">0.00
                                    USD</h3>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="dashboard-widget">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-secondary">Total BV</h5>
                                </div>
                                <h3 class="text--secondary my-4">0</h3>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="dashboard-widget">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-secondary">Left BV</h5>
                                </div>
                                <h3 class="text--secondary my-4">0</h3>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="dashboard-widget">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-secondary">Right BV</h5>
                                </div>
                                <h3 class="text--secondary my-4">0</h3>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="dashboard-widget">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-secondary">Total Bv Cut</h5>
                                </div>
                                <h3 class="text--secondary my-4">0</h3>
                            </div>
                        </div>

                    </div>

                    <div class="mb-4">
                        <h4 class="mb-2">Binary Summery</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card custom--card">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table--responsive--md table">
                                            <thead>
                                                <tr>
                                                    <th>Paid left</th>
                                                    <th>Paid right</th>
                                                    <th>Free left</th>
                                                    <th>Free right</th>
                                                    <th>Bv left</th>
                                                    <th>Bv right</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    

    
    
@endsection