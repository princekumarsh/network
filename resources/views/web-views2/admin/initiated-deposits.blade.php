@extends('web-views2.admin.partials.admin-app')
@section('content')
    <div class="body-wrapper">
        <div class="bodywrapper__inner">

            <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
                <h6 class="page-title">Initiated Deposits</h6>
                <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
                    <form class="d-flex flex-wrap gap-2" action="" method="GET">
                        <div class="input-group w-auto flex-fill">
                            <input type="search" name="search" class="form-control bg--white"
                                placeholder="Search..." value="">
                            <button class="btn btn--primary" type="submit"><i class="la la-search"></i></button>
                        </div>
                        <div class="input-group w-auto flex-fill">
                            <input name="date" type="search" data-range="true" data-multiple-dates-separator=" - "
                                data-language="en" data-format="Y-m-d"
                                class="datepicker-here form-control bg--white pe-2" data-position='bottom right'
                                placeholder="Start Date - End Date" autocomplete="off" value="">
                            <button class="btn btn--primary input-group-text"><i class="la la-search"></i></button>
                        </div>



                    </form>
                </div>
            </div>

            <div class="row justify-content-center">

                <div class="col-md-12">
                    <div class="card b-radius--10">
                        <div class="card-body p-0">
                            <div class="table-responsive--sm table-responsive">
                                <table class="table table--light style--two">
                                    <thead>
                                        <tr>
                                            <th>Gateway | Transaction</th>
                                            <th>Initiated</th>
                                            <th>User</th>
                                            <th>Amount</th>
                                            <th>Conversion</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?method=Razorpay">RazorPay</a>
                                                </span>
                                                <br>
                                                <small> EYMGKCKFGCBH </small>
                                            </td>

                                            <td>
                                                2023-11-25 02:18 PM<br>1 day ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">ANil Kumar</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?search=akashkumar"><span>@</span>akashkumar</a>
                                                </span>
                                            </td>
                                            <td>
                                                $100.00 + <span class="text-danger" title="charge">2.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    102.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 INR
                                                <br>
                                                <strong>102.00 INR</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--dark">Initiated</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/883"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?method=Blockchain">Blockchain</a>
                                                </span>
                                                <br>
                                                <small> DXJ6SJTNMUO6 </small>
                                            </td>

                                            <td>
                                                2023-11-23 12:32 PM<br>4 days ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Manoj Kr</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?search=manojkr"><span>@</span>manojkr</a>
                                                </span>
                                            </td>
                                            <td>
                                                $1.00 + <span class="text-danger" title="charge">11.01 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    12.01 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 BTC
                                                <br>
                                                <strong>12.01 BTC</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--dark">Initiated</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/882"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?method=Blockchain">Blockchain</a>
                                                </span>
                                                <br>
                                                <small> PO56XD8HDBXQ </small>
                                            </td>

                                            <td>
                                                2023-11-23 12:32 PM<br>4 days ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Manoj Kr</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?search=manojkr"><span>@</span>manojkr</a>
                                                </span>
                                            </td>
                                            <td>
                                                $1.00 + <span class="text-danger" title="charge">11.01 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    12.01 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 BTC
                                                <br>
                                                <strong>12.01 BTC</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--dark">Initiated</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/881"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?method=Paypal">Paypal</a>
                                                </span>
                                                <br>
                                                <small> ZWRN4FRBZPQV </small>
                                            </td>

                                            <td>
                                                2023-11-20 11:33 PM<br>6 days ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">joni takdim</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?search=qwaszx"><span>@</span>qwaszx</a>
                                                </span>
                                            </td>
                                            <td>
                                                $100.00 + <span class="text-danger" title="charge">2.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    102.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>102.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--dark">Initiated</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/878"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?method=Stripe">Stripe
                                                        Hosted</a> </span>
                                                <br>
                                                <small> R27OFA6ZYE55 </small>
                                            </td>

                                            <td>
                                                2023-11-20 11:30 PM<br>6 days ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">joni takdim</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?search=qwaszx"><span>@</span>qwaszx</a>
                                                </span>
                                            </td>
                                            <td>
                                                $100.00 + <span class="text-danger" title="charge">2.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    102.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>102.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--dark">Initiated</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/877"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?method=Paytm">PayTM</a>
                                                </span>
                                                <br>
                                                <small> HPO2KPW2M8B5 </small>
                                            </td>

                                            <td>
                                                2023-11-19 10:30 PM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">qaq qaq</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?search=qa1111"><span>@</span>qa1111</a>
                                                </span>
                                            </td>
                                            <td>
                                                $10.00 + <span class="text-danger" title="charge">1.10 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    11.10 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 AUD
                                                <br>
                                                <strong>11.10 AUD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--dark">Initiated</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/876"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?method=StripeJs">Stripe
                                                        Storefront</a> </span>
                                                <br>
                                                <small> J5FYOEDHNOWV </small>
                                            </td>

                                            <td>
                                                2023-11-18 05:52 AM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">joni takdim</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?search=qwaszx"><span>@</span>qwaszx</a>
                                                </span>
                                            </td>
                                            <td>
                                                $300.00 + <span class="text-danger" title="charge">4.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    304.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>304.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--dark">Initiated</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/875"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?method=Voguepay">VoguePay</a>
                                                </span>
                                                <br>
                                                <small> XGG3QPJECWG4 </small>
                                            </td>

                                            <td>
                                                2023-11-18 05:52 AM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">joni takdim</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?search=qwaszx"><span>@</span>qwaszx</a>
                                                </span>
                                            </td>
                                            <td>
                                                $300.00 + <span class="text-danger" title="charge">1.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    301.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>301.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--dark">Initiated</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/874"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?method=Paytm">PayTM</a>
                                                </span>
                                                <br>
                                                <small> PPN65QP3CQKF </small>
                                            </td>

                                            <td>
                                                2023-11-18 05:51 AM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">joni takdim</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?search=qwaszx"><span>@</span>qwaszx</a>
                                                </span>
                                            </td>
                                            <td>
                                                $300.00 + <span class="text-danger" title="charge">4.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    304.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 AUD
                                                <br>
                                                <strong>304.00 AUD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--dark">Initiated</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/873"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?method=Paytm">PayTM</a>
                                                </span>
                                                <br>
                                                <small> XNSOPJTSPEE9 </small>
                                            </td>

                                            <td>
                                                2023-11-18 05:51 AM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">joni takdim</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?search=qwaszx"><span>@</span>qwaszx</a>
                                                </span>
                                            </td>
                                            <td>
                                                $300.00 + <span class="text-danger" title="charge">4.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    304.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 2.00 USD
                                                <br>
                                                <strong>608.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--dark">Initiated</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/872"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?method=bank_payment">Bank
                                                        Payment</a> </span>
                                                <br>
                                                <small> JUUK7AO69GEQ </small>
                                            </td>

                                            <td>
                                                2023-11-18 05:51 AM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">joni takdim</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?search=qwaszx"><span>@</span>qwaszx</a>
                                                </span>
                                            </td>
                                            <td>
                                                $300.00 + <span class="text-danger" title="charge">8.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    308.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>308.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--dark">Initiated</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/871"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?method=Razorpay">RazorPay</a>
                                                </span>
                                                <br>
                                                <small> FH1X5XVY15NN </small>
                                            </td>

                                            <td>
                                                2023-11-18 05:51 AM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">joni takdim</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?search=qwaszx"><span>@</span>qwaszx</a>
                                                </span>
                                            </td>
                                            <td>
                                                $100.00 + <span class="text-danger" title="charge">2.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    102.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 INR
                                                <br>
                                                <strong>102.00 INR</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--dark">Initiated</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/870"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?method=PerfectMoney">Perfect
                                                        Money</a> </span>
                                                <br>
                                                <small> 91PYWVM2MZE7 </small>
                                            </td>

                                            <td>
                                                2023-11-18 05:31 AM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">joni takdim</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?search=qwaszx"><span>@</span>qwaszx</a>
                                                </span>
                                            </td>
                                            <td>
                                                $10.00 + <span class="text-danger" title="charge">1.10 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    11.10 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>11.10 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--dark">Initiated</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/869"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?method=Coinpayments">CoinPayments</a>
                                                </span>
                                                <br>
                                                <small> WCGUD9E3X24S </small>
                                            </td>

                                            <td>
                                                2023-11-18 05:31 AM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">joni takdim</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?search=qwaszx"><span>@</span>qwaszx</a>
                                                </span>
                                            </td>
                                            <td>
                                                $10.00 + <span class="text-danger" title="charge">2.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    12.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 10.00 BTC
                                                <br>
                                                <strong>120.00 BTC</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--dark">Initiated</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/868"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?method=Razorpay">RazorPay</a>
                                                </span>
                                                <br>
                                                <small> KCKRDX6PFR99 </small>
                                            </td>

                                            <td>
                                                2023-11-17 07:36 PM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">max r</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?search=ratnubank"><span>@</span>ratnubank</a>
                                                </span>
                                            </td>
                                            <td>
                                                $100.00 + <span class="text-danger" title="charge">2.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    102.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 INR
                                                <br>
                                                <strong>102.00 INR</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--dark">Initiated</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/867"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?method=BTCPay">BTCPay</a>
                                                </span>
                                                <br>
                                                <small> UX4OY4QYO6NT </small>
                                            </td>

                                            <td>
                                                2023-11-17 06:37 AM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">max r</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?search=ratnubank"><span>@</span>ratnubank</a>
                                                </span>
                                            </td>
                                            <td>
                                                $10.00 + <span class="text-danger" title="charge">1.10 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    11.10 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 0.00 BTC
                                                <br>
                                                <strong>0.00 BTC</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--dark">Initiated</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/866"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?method=Paypal">Paypal</a>
                                                </span>
                                                <br>
                                                <small> HGOJ7A4FZ4DE </small>
                                            </td>

                                            <td>
                                                2023-11-16 07:26 PM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Justine Beever</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?search=username1"><span>@</span>username1</a>
                                                </span>
                                            </td>
                                            <td>
                                                $5.00 + <span class="text-danger" title="charge">1.05 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    6.05 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>6.05 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--dark">Initiated</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/863"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?method=Paytm">PayTM</a>
                                                </span>
                                                <br>
                                                <small> QDATT3D4GBDQ </small>
                                            </td>

                                            <td>
                                                2023-11-16 07:24 PM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Justine Beever</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?search=username1"><span>@</span>username1</a>
                                                </span>
                                            </td>
                                            <td>
                                                $1.00 + <span class="text-danger" title="charge">1.01 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    2.01 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 AUD
                                                <br>
                                                <strong>2.01 AUD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--dark">Initiated</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/862"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?method=Paytm">PayTM</a>
                                                </span>
                                                <br>
                                                <small> 1MKOVPOMT7AT </small>
                                            </td>

                                            <td>
                                                2023-11-16 07:24 PM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Justine Beever</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?search=username1"><span>@</span>username1</a>
                                                </span>
                                            </td>
                                            <td>
                                                $12.00 + <span class="text-danger" title="charge">1.12 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    13.12 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 2.00 USD
                                                <br>
                                                <strong>26.24 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--dark">Initiated</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/861"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold"> <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?method=Stripe">Stripe
                                                        Hosted</a> </span>
                                                <br>
                                                <small> AM8RHAAOCNO5 </small>
                                            </td>

                                            <td>
                                                2023-11-16 07:15 PM<br>1 week ago
                                            </td>
                                            <td>
                                                <span class="fw-bold">Kay Kay</span>
                                                <br>
                                                <span class="small">
                                                    <a
                                                        href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?search=fdk123"><span>@</span>fdk123</a>
                                                </span>
                                            </td>
                                            <td>
                                                $9,000.00 + <span class="text-danger" title="charge">91.00 </span>
                                                <br>
                                                <strong title="Amount with charge">
                                                    9,091.00 USD
                                                </strong>
                                            </td>
                                            <td>
                                                1 USD = 1.00 USD
                                                <br>
                                                <strong>9,091.00 USD</strong>
                                            </td>
                                            <td>
                                                <span class="badge badge--dark">Initiated</span>
                                            </td>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/admin/deposit/details/859"
                                                    class="btn btn-sm btn-outline--primary ms-1">
                                                    <i class="la la-desktop"></i> Details </a>
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
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?page=2">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?page=3">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?page=4">4</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?page=5">5</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?page=6">6</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?page=7">7</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?page=8">8</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?page=9">9</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?page=10">10</a>
                                    </li>

                                    <li class="page-item disabled" aria-disabled="true"><span
                                            class="page-link">...</span></li>





                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?page=33">33</a>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?page=34">34</a>
                                    </li>


                                    <li class="page-item">
                                        <a class="page-link"
                                            href="https://script.viserlab.com/mlmlab/admin/deposit/initiated?page=2"
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