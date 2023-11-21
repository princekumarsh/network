@extends('layouts.front-end.app')
@section('content')


    <section class="page-header bg_img"
        data-background="https://script.viserlab.com/mlmlab/assets/images/frontend/breadcrumb/63821bed5b0bb1669471213.jpg">
        <div class="container">
            <div class="page-header-wrapper">
                <h2 class="title">Plan</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="https://script.viserlab.com/mlmlab">
                            Home </a>
                    </li>
                    <li>Plan</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="blog-section padding-top padding-bottom">
        <div class="container">
            <div class="row mb-30-none">
                <div class="col-lg-4 col-md-6 col-sm-10 mb-30">
                    <div class="plan-card bg_img text-center"
                        data-background="https://script.viserlab.com/mlmlab/assets/images/frontend/plan/637da77c41ab91669179260.jpg">
                        <h4 class="plan-card__title text--base mb-2">Basic</h4>
                        <div class="price-range mt-5 text-white"> 100.00
                            USD </div>
                        <ul class="plan-card__features mt-4">
                            <li> Business Volume (BV) : <span class="amount">10</span>
                                <span class="icon float-right" data-bs-toggle="modal" data-bs-target="#bvInfoModal"><i
                                        class="fas fa-question-circle"></i></span>
                            </li>
                            <li>
                                Referral Commission : <span class="amount">$5.00</span>
                                <span class="icon float-right" data-bs-toggle="modal"
                                    data-bs-target="#refComInfoModal"><i class="fas fa-question-circle"></i></span>
                            </li>

                            <li>
                                Commission To Tree : <span class="amount">$0.03</span>
                                <span class="icon float-right" data-bs-toggle="modal"
                                    data-bs-target="#treeComInfoModal"><i class="fas fa-question-circle"></i></span>
                            </li>
                        </ul>

                        <button class="subscribeBtn custom-button theme mt-3 w-auto text-white" data-amount="100"
                            data-id="1" type="button">
                            Subscribe Now </button>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 mb-30">
                    <div class="plan-card bg_img text-center"
                        data-background="https://script.viserlab.com/mlmlab/assets/images/frontend/plan/637da77c41ab91669179260.jpg">
                        <h4 class="plan-card__title text--base mb-2">Standard</h4>
                        <div class="price-range mt-5 text-white"> 300.00
                            USD </div>
                        <ul class="plan-card__features mt-4">
                            <li> Business Volume (BV) : <span class="amount">30</span>
                                <span class="icon float-right" data-bs-toggle="modal" data-bs-target="#bvInfoModal"><i
                                        class="fas fa-question-circle"></i></span>
                            </li>
                            <li>
                                Referral Commission : <span class="amount">$15.00</span>
                                <span class="icon float-right" data-bs-toggle="modal"
                                    data-bs-target="#refComInfoModal"><i class="fas fa-question-circle"></i></span>
                            </li>

                            <li>
                                Commission To Tree : <span class="amount">$0.66</span>
                                <span class="icon float-right" data-bs-toggle="modal"
                                    data-bs-target="#treeComInfoModal"><i class="fas fa-question-circle"></i></span>
                            </li>
                        </ul>

                        <button class="subscribeBtn custom-button theme mt-3 w-auto text-white" data-amount="300"
                            data-id="2" type="button">
                            Subscribe Now </button>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 mb-30">
                    <div class="plan-card bg_img text-center"
                        data-background="https://script.viserlab.com/mlmlab/assets/images/frontend/plan/637da77c41ab91669179260.jpg">
                        <h4 class="plan-card__title text--base mb-2">Premium</h4>
                        <div class="price-range mt-5 text-white"> 500.00
                            USD </div>
                        <ul class="plan-card__features mt-4">
                            <li> Business Volume (BV) : <span class="amount">50</span>
                                <span class="icon float-right" data-bs-toggle="modal" data-bs-target="#bvInfoModal"><i
                                        class="fas fa-question-circle"></i></span>
                            </li>
                            <li>
                                Referral Commission : <span class="amount">$25.00</span>
                                <span class="icon float-right" data-bs-toggle="modal"
                                    data-bs-target="#refComInfoModal"><i class="fas fa-question-circle"></i></span>
                            </li>

                            <li>
                                Commission To Tree : <span class="amount">$0.66</span>
                                <span class="icon float-right" data-bs-toggle="modal"
                                    data-bs-target="#treeComInfoModal"><i class="fas fa-question-circle"></i></span>
                            </li>
                        </ul>

                        <button class="subscribeBtn custom-button theme mt-3 w-auto text-white" data-amount="500"
                            data-id="3" type="button">
                            Subscribe Now </button>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 mb-30">
                    <div class="plan-card bg_img text-center"
                        data-background="https://script.viserlab.com/mlmlab/assets/images/frontend/plan/637da77c41ab91669179260.jpg">
                        <h4 class="plan-card__title text--base mb-2">Silver</h4>
                        <div class="price-range mt-5 text-white"> 1,000.00
                            USD </div>
                        <ul class="plan-card__features mt-4">
                            <li> Business Volume (BV) : <span class="amount">100</span>
                                <span class="icon float-right" data-bs-toggle="modal" data-bs-target="#bvInfoModal"><i
                                        class="fas fa-question-circle"></i></span>
                            </li>
                            <li>
                                Referral Commission : <span class="amount">$50.00</span>
                                <span class="icon float-right" data-bs-toggle="modal"
                                    data-bs-target="#refComInfoModal"><i class="fas fa-question-circle"></i></span>
                            </li>

                            <li>
                                Commission To Tree : <span class="amount">$0.99</span>
                                <span class="icon float-right" data-bs-toggle="modal"
                                    data-bs-target="#treeComInfoModal"><i class="fas fa-question-circle"></i></span>
                            </li>
                        </ul>

                        <button class="subscribeBtn custom-button theme mt-3 w-auto text-white" data-amount="1000"
                            data-id="4" type="button">
                            Subscribe Now </button>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 mb-30">
                    <div class="plan-card bg_img text-center"
                        data-background="https://script.viserlab.com/mlmlab/assets/images/frontend/plan/637da77c41ab91669179260.jpg">
                        <h4 class="plan-card__title text--base mb-2">Gold</h4>
                        <div class="price-range mt-5 text-white"> 3,000.00
                            USD </div>
                        <ul class="plan-card__features mt-4">
                            <li> Business Volume (BV) : <span class="amount">300</span>
                                <span class="icon float-right" data-bs-toggle="modal" data-bs-target="#bvInfoModal"><i
                                        class="fas fa-question-circle"></i></span>
                            </li>
                            <li>
                                Referral Commission : <span class="amount">$150.00</span>
                                <span class="icon float-right" data-bs-toggle="modal"
                                    data-bs-target="#refComInfoModal"><i class="fas fa-question-circle"></i></span>
                            </li>

                            <li>
                                Commission To Tree : <span class="amount">$1.50</span>
                                <span class="icon float-right" data-bs-toggle="modal"
                                    data-bs-target="#treeComInfoModal"><i class="fas fa-question-circle"></i></span>
                            </li>
                        </ul>

                        <button class="subscribeBtn custom-button theme mt-3 w-auto text-white" data-amount="3000"
                            data-id="5" type="button">
                            Subscribe Now </button>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 mb-30">
                    <div class="plan-card bg_img text-center"
                        data-background="https://script.viserlab.com/mlmlab/assets/images/frontend/plan/637da77c41ab91669179260.jpg">
                        <h4 class="plan-card__title text--base mb-2">Plutonium</h4>
                        <div class="price-range mt-5 text-white"> 5,000.00
                            USD </div>
                        <ul class="plan-card__features mt-4">
                            <li> Business Volume (BV) : <span class="amount">500</span>
                                <span class="icon float-right" data-bs-toggle="modal" data-bs-target="#bvInfoModal"><i
                                        class="fas fa-question-circle"></i></span>
                            </li>
                            <li>
                                Referral Commission : <span class="amount">$250.00</span>
                                <span class="icon float-right" data-bs-toggle="modal"
                                    data-bs-target="#refComInfoModal"><i class="fas fa-question-circle"></i></span>
                            </li>

                            <li>
                                Commission To Tree : <span class="amount">$5.50</span>
                                <span class="icon float-right" data-bs-toggle="modal"
                                    data-bs-target="#treeComInfoModal"><i class="fas fa-question-circle"></i></span>
                            </li>
                        </ul>

                        <button class="subscribeBtn custom-button theme mt-3 w-auto text-white" data-amount="5000"
                            data-id="6" type="button">
                            Subscribe Now </button>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="how-to-section padding-bottom padding-top section-bg">
        <div class="container">
            <div class="section-header">
                <h2 class="title">Our Services</h2>
                <p>This secured website with a user-friendly interface and support of various languages is a breeze to
                    use. Additionally, this site has both desktop and mobile views!!</p>
            </div>
            <div class="row justify-content-center mb-30-none how-wrapper">
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="how-item">
                        <div class="how-thumb">
                            <i class="fas fa-globe-americas"></i>
                        </div>
                        <div class="how-content">
                            <h5 class="title">Global</h5>
                            <p>We support a variety of the most popular digital currencies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="how-item">
                        <div class="how-thumb">
                            <i class="far fa-life-ring"></i>
                        </div>
                        <div class="how-content">
                            <h5 class="title">Support</h5>
                            <p>We always provide the best
                                support to all our users.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="how-item">
                        <div class="how-thumb">
                            <i class="fab fa-btc"></i>
                        </div>
                        <div class="how-content">
                            <h5 class="title">Crypto</h5>
                            <p>Cryptocurrency stored on our servers is covered by our insurance policy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="how-item">
                        <div class="how-thumb">
                            <i class="fas fa-language"></i>
                        </div>
                        <div class="how-content">
                            <h5 class="title">Language</h5>
                            <p>This site can be easily translated into your own language.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="how-item">
                        <div class="how-thumb">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="how-content">
                            <h5 class="title">Secure</h5>
                            <p>Gives ultimate security with 2FA authentication with this system</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="how-item">
                        <div class="how-thumb">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <div class="how-content">
                            <h5 class="title">Profitable</h5>
                            <p>You can get the golden opportunity to actually win a lot of profit here.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="bvInfoModal" role="dialog" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title m-0">Business Volume (BV) info</h5>
                    <button class="close" data-bs-dismiss="modal" type="button" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <span class="text--danger">When someone from your below tree subscribe this plan, You will get this
                        Business Volume which will be used for matching bonus.</span>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-dark w-100" data-bs-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="refComInfoModal" role="dialog" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title m-0">Referral Commission info</h5>
                    <button class="close" data-bs-dismiss="modal" type="button" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <span class="text--danger">When Your Direct-Referred/Sponsored User Subscribe in <b> ANY PLAN </b>,
                        You will get this amount.</span>
                    <br>
                    <br>
                    <span class="text--success"> This is the reason You should Choose a Plan With Bigger Referral
                        Commission.</span>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-dark w-100" data-bs-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="treeComInfoModal" role="dialog" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title m-0">Commission to tree info</h5>
                    <button class="close" data-bs-dismiss="modal" type="button" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <span class="text--danger">When someone from your below tree subscribe this plan, You will get this
                        amount as Tree Commission. </span>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-dark w-100" data-bs-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="purchaseModal">
        <div class="modal-dialog" role="dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title m-0">Subscribe to the plan</h5>
                    <button class="close" data-bs-dismiss="modal" type="button" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <form action="https://script.viserlab.com/mlmlab/user/plan" method="post">
                    <input type="hidden" name="_token" value="VBr7qUXJbsQNhR3Hmfb7AARaJtQtKPxLLmRUGtJm"> <input
                        name="amount" type="hidden" value="0">
                    <input name="id" type="hidden">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Select Method</label>
                            <select class="form-control form--control form-select" name="payment_method" required>
                                <option value="">Select One</option>
                                <option
                                    data-gateway="{&quot;id&quot;:168,&quot;name&quot;:&quot;2Checkout - USD&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:124,&quot;gateway_alias&quot;:&quot;TwoCheckout&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;1.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2023-05-10T12:33:10.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-05-10T12:33:10.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:52,&quot;form_id&quot;:0,&quot;code&quot;:&quot;124&quot;,&quot;name&quot;:&quot;2Checkout&quot;,&quot;alias&quot;:&quot;TwoCheckout&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;AFN&quot;:&quot;AFN&quot;,&quot;ALL&quot;:&quot;ALL&quot;,&quot;DZD&quot;:&quot;DZD&quot;,&quot;ARS&quot;:&quot;ARS&quot;,&quot;AUD&quot;:&quot;AUD&quot;,&quot;AZN&quot;:&quot;AZN&quot;,&quot;BSD&quot;:&quot;BSD&quot;,&quot;BDT&quot;:&quot;BDT&quot;,&quot;BBD&quot;:&quot;BBD&quot;,&quot;BZD&quot;:&quot;BZD&quot;,&quot;BMD&quot;:&quot;BMD&quot;,&quot;BOB&quot;:&quot;BOB&quot;,&quot;BWP&quot;:&quot;BWP&quot;,&quot;BRL&quot;:&quot;BRL&quot;,&quot;GBP&quot;:&quot;GBP&quot;,&quot;BND&quot;:&quot;BND&quot;,&quot;BGN&quot;:&quot;BGN&quot;,&quot;CAD&quot;:&quot;CAD&quot;,&quot;CLP&quot;:&quot;CLP&quot;,&quot;CNY&quot;:&quot;CNY&quot;,&quot;COP&quot;:&quot;COP&quot;,&quot;CRC&quot;:&quot;CRC&quot;,&quot;HRK&quot;:&quot;HRK&quot;,&quot;CZK&quot;:&quot;CZK&quot;,&quot;DKK&quot;:&quot;DKK&quot;,&quot;DOP&quot;:&quot;DOP&quot;,&quot;XCD&quot;:&quot;XCD&quot;,&quot;EGP&quot;:&quot;EGP&quot;,&quot;EUR&quot;:&quot;EUR&quot;,&quot;FJD&quot;:&quot;FJD&quot;,&quot;GTQ&quot;:&quot;GTQ&quot;,&quot;HKD&quot;:&quot;HKD&quot;,&quot;HNL&quot;:&quot;HNL&quot;,&quot;HUF&quot;:&quot;HUF&quot;,&quot;INR&quot;:&quot;INR&quot;,&quot;IDR&quot;:&quot;IDR&quot;,&quot;ILS&quot;:&quot;ILS&quot;,&quot;JMD&quot;:&quot;JMD&quot;,&quot;JPY&quot;:&quot;JPY&quot;,&quot;KZT&quot;:&quot;KZT&quot;,&quot;KES&quot;:&quot;KES&quot;,&quot;LAK&quot;:&quot;LAK&quot;,&quot;MMK&quot;:&quot;MMK&quot;,&quot;LBP&quot;:&quot;LBP&quot;,&quot;LRD&quot;:&quot;LRD&quot;,&quot;MOP&quot;:&quot;MOP&quot;,&quot;MYR&quot;:&quot;MYR&quot;,&quot;MVR&quot;:&quot;MVR&quot;,&quot;MRO&quot;:&quot;MRO&quot;,&quot;MUR&quot;:&quot;MUR&quot;,&quot;MXN&quot;:&quot;MXN&quot;,&quot;MAD&quot;:&quot;MAD&quot;,&quot;NPR&quot;:&quot;NPR&quot;,&quot;TWD&quot;:&quot;TWD&quot;,&quot;NZD&quot;:&quot;NZD&quot;,&quot;NIO&quot;:&quot;NIO&quot;,&quot;NOK&quot;:&quot;NOK&quot;,&quot;PKR&quot;:&quot;PKR&quot;,&quot;PGK&quot;:&quot;PGK&quot;,&quot;PEN&quot;:&quot;PEN&quot;,&quot;PHP&quot;:&quot;PHP&quot;,&quot;PLN&quot;:&quot;PLN&quot;,&quot;QAR&quot;:&quot;QAR&quot;,&quot;RON&quot;:&quot;RON&quot;,&quot;RUB&quot;:&quot;RUB&quot;,&quot;WST&quot;:&quot;WST&quot;,&quot;SAR&quot;:&quot;SAR&quot;,&quot;SCR&quot;:&quot;SCR&quot;,&quot;SGD&quot;:&quot;SGD&quot;,&quot;SBD&quot;:&quot;SBD&quot;,&quot;ZAR&quot;:&quot;ZAR&quot;,&quot;KRW&quot;:&quot;KRW&quot;,&quot;LKR&quot;:&quot;LKR&quot;,&quot;SEK&quot;:&quot;SEK&quot;,&quot;CHF&quot;:&quot;CHF&quot;,&quot;SYP&quot;:&quot;SYP&quot;,&quot;THB&quot;:&quot;THB&quot;,&quot;TOP&quot;:&quot;TOP&quot;,&quot;TTD&quot;:&quot;TTD&quot;,&quot;TRY&quot;:&quot;TRY&quot;,&quot;UAH&quot;:&quot;UAH&quot;,&quot;AED&quot;:&quot;AED&quot;,&quot;USD&quot;:&quot;USD&quot;,&quot;VUV&quot;:&quot;VUV&quot;,&quot;VND&quot;:&quot;VND&quot;,&quot;XOF&quot;:&quot;XOF&quot;,&quot;YER&quot;:&quot;YER&quot;},&quot;crypto&quot;:1,&quot;description&quot;:null,&quot;created_at&quot;:null,&quot;updated_at&quot;:&quot;2023-05-10T12:33:10.000000Z&quot;}}"
                                    value="168">2Checkout - USD</option>
                                <option
                                    data-gateway="{&quot;id&quot;:154,&quot;name&quot;:&quot;Authorize.net - USD&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:120,&quot;gateway_alias&quot;:&quot;Authorize&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;10.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2022-08-28T01:03:06.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-08-28T01:03:06.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:37,&quot;form_id&quot;:0,&quot;code&quot;:&quot;120&quot;,&quot;name&quot;:&quot;Authorize.net&quot;,&quot;alias&quot;:&quot;Authorize&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;USD&quot;:&quot;USD&quot;,&quot;CAD&quot;:&quot;CAD&quot;,&quot;CHF&quot;:&quot;CHF&quot;,&quot;DKK&quot;:&quot;DKK&quot;,&quot;EUR&quot;:&quot;EUR&quot;,&quot;GBP&quot;:&quot;GBP&quot;,&quot;NOK&quot;:&quot;NOK&quot;,&quot;PLN&quot;:&quot;PLN&quot;,&quot;SEK&quot;:&quot;SEK&quot;,&quot;AUD&quot;:&quot;AUD&quot;,&quot;NZD&quot;:&quot;NZD&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:null,&quot;updated_at&quot;:&quot;2022-08-28T01:03:06.000000Z&quot;}}"
                                    value="154">Authorize.net - USD</option>
                                <option
                                    data-gateway="{&quot;id&quot;:164,&quot;name&quot;:&quot;Bank Payment&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;&quot;,&quot;method_code&quot;:1000,&quot;gateway_alias&quot;:&quot;bank_payment&quot;,&quot;min_amount&quot;:&quot;10.00000000&quot;,&quot;max_amount&quot;:&quot;5000.00000000&quot;,&quot;percent_charge&quot;:&quot;2.00&quot;,&quot;fixed_charge&quot;:&quot;2.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2022-11-14T18:42:40.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-11-19T22:16:12.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:50,&quot;form_id&quot;:19,&quot;code&quot;:&quot;1000&quot;,&quot;name&quot;:&quot;Bank Payment&quot;,&quot;alias&quot;:&quot;bank_payment&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:[],&quot;crypto&quot;:0,&quot;description&quot;:&quot;&lt;div&gt;&lt;br&gt;&lt;\/div&gt;Blank details below:&lt;div&gt;&lt;br&gt;&lt;\/div&gt;&quot;,&quot;created_at&quot;:&quot;2022-11-14T18:42:40.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-11-14T18:42:40.000000Z&quot;}}"
                                    value="164">Bank Payment</option>
                                <option
                                    data-gateway="{&quot;id&quot;:142,&quot;name&quot;:&quot;Blockchain - BTC&quot;,&quot;currency&quot;:&quot;BTC&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:501,&quot;gateway_alias&quot;:&quot;Blockchain&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;1.11000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;11.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2022-03-20T20:23:18.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-03-20T20:23:18.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:13,&quot;form_id&quot;:0,&quot;code&quot;:&quot;501&quot;,&quot;name&quot;:&quot;Blockchain&quot;,&quot;alias&quot;:&quot;Blockchain&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;BTC&quot;:&quot;BTC&quot;},&quot;crypto&quot;:1,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-03-21T00:11:56.000000Z&quot;}}"
                                    value="142">Blockchain - BTC</option>
                                <option
                                    data-gateway="{&quot;id&quot;:165,&quot;name&quot;:&quot;BTCPay - BTC&quot;,&quot;currency&quot;:&quot;BTC&quot;,&quot;symbol&quot;:&quot;\u20bf&quot;,&quot;method_code&quot;:122,&quot;gateway_alias&quot;:&quot;BTCPay&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;100.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;0.00003600&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2023-05-10T12:31:08.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-05-10T12:31:08.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:55,&quot;form_id&quot;:0,&quot;code&quot;:&quot;122&quot;,&quot;name&quot;:&quot;BTCPay&quot;,&quot;alias&quot;:&quot;BTCPay&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;BTC&quot;:&quot;Bitcoin&quot;,&quot;LTC&quot;:&quot;Litecoin&quot;},&quot;crypto&quot;:1,&quot;description&quot;:null,&quot;created_at&quot;:null,&quot;updated_at&quot;:null}}"
                                    value="165">BTCPay - BTC</option>
                                <option
                                    data-gateway="{&quot;id&quot;:121,&quot;name&quot;:&quot;Cashmaal - PKR&quot;,&quot;currency&quot;:&quot;PKR&quot;,&quot;symbol&quot;:&quot;pkr&quot;,&quot;method_code&quot;:116,&quot;gateway_alias&quot;:&quot;Cashmaal&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;10000.00000000&quot;,&quot;percent_charge&quot;:&quot;10.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;100.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2021-06-21T23:35:04.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-06-21T23:35:04.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:30,&quot;form_id&quot;:0,&quot;code&quot;:&quot;116&quot;,&quot;name&quot;:&quot;Cashmaal&quot;,&quot;alias&quot;:&quot;Cashmaal&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;PKR&quot;:&quot;PKR&quot;,&quot;USD&quot;:&quot;USD&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:null,&quot;updated_at&quot;:&quot;2021-06-21T23:35:04.000000Z&quot;}}"
                                    value="121">Cashmaal - PKR</option>
                                <option
                                    data-gateway="{&quot;id&quot;:169,&quot;name&quot;:&quot;Checkout - USD&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:125,&quot;gateway_alias&quot;:&quot;Checkout&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;100.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2023-05-10T12:33:36.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-05-10T12:33:36.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:51,&quot;form_id&quot;:0,&quot;code&quot;:&quot;125&quot;,&quot;name&quot;:&quot;Checkout&quot;,&quot;alias&quot;:&quot;Checkout&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;USD&quot;:&quot;USD&quot;,&quot;EUR&quot;:&quot;EUR&quot;,&quot;GBP&quot;:&quot;GBP&quot;,&quot;HKD&quot;:&quot;HKD&quot;,&quot;AUD&quot;:&quot;AUD&quot;,&quot;CAN&quot;:&quot;CAN&quot;,&quot;CHF&quot;:&quot;CHF&quot;,&quot;SGD&quot;:&quot;SGD&quot;,&quot;JPY&quot;:&quot;JPY&quot;,&quot;NZD&quot;:&quot;NZD&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:null,&quot;updated_at&quot;:null}}"
                                    value="169">Checkout - USD</option>
                                <option
                                    data-gateway="{&quot;id&quot;:144,&quot;name&quot;:&quot;Coinbase Commerce - USD&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:506,&quot;gateway_alias&quot;:&quot;CoinbaseCommerce&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;10000.00000000&quot;,&quot;percent_charge&quot;:&quot;10.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;10.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2022-03-29T23:18:19.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-03-29T23:18:19.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:18,&quot;form_id&quot;:0,&quot;code&quot;:&quot;506&quot;,&quot;name&quot;:&quot;Coinbase Commerce&quot;,&quot;alias&quot;:&quot;CoinbaseCommerce&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;USD&quot;:&quot;USD&quot;,&quot;EUR&quot;:&quot;EUR&quot;,&quot;JPY&quot;:&quot;JPY&quot;,&quot;GBP&quot;:&quot;GBP&quot;,&quot;AUD&quot;:&quot;AUD&quot;,&quot;CAD&quot;:&quot;CAD&quot;,&quot;CHF&quot;:&quot;CHF&quot;,&quot;CNY&quot;:&quot;CNY&quot;,&quot;SEK&quot;:&quot;SEK&quot;,&quot;NZD&quot;:&quot;NZD&quot;,&quot;MXN&quot;:&quot;MXN&quot;,&quot;SGD&quot;:&quot;SGD&quot;,&quot;HKD&quot;:&quot;HKD&quot;,&quot;NOK&quot;:&quot;NOK&quot;,&quot;KRW&quot;:&quot;KRW&quot;,&quot;TRY&quot;:&quot;TRY&quot;,&quot;RUB&quot;:&quot;RUB&quot;,&quot;INR&quot;:&quot;INR&quot;,&quot;BRL&quot;:&quot;BRL&quot;,&quot;ZAR&quot;:&quot;ZAR&quot;,&quot;AED&quot;:&quot;AED&quot;,&quot;AFN&quot;:&quot;AFN&quot;,&quot;ALL&quot;:&quot;ALL&quot;,&quot;AMD&quot;:&quot;AMD&quot;,&quot;ANG&quot;:&quot;ANG&quot;,&quot;AOA&quot;:&quot;AOA&quot;,&quot;ARS&quot;:&quot;ARS&quot;,&quot;AWG&quot;:&quot;AWG&quot;,&quot;AZN&quot;:&quot;AZN&quot;,&quot;BAM&quot;:&quot;BAM&quot;,&quot;BBD&quot;:&quot;BBD&quot;,&quot;BDT&quot;:&quot;BDT&quot;,&quot;BGN&quot;:&quot;BGN&quot;,&quot;BHD&quot;:&quot;BHD&quot;,&quot;BIF&quot;:&quot;BIF&quot;,&quot;BMD&quot;:&quot;BMD&quot;,&quot;BND&quot;:&quot;BND&quot;,&quot;BOB&quot;:&quot;BOB&quot;,&quot;BSD&quot;:&quot;BSD&quot;,&quot;BTN&quot;:&quot;BTN&quot;,&quot;BWP&quot;:&quot;BWP&quot;,&quot;BYN&quot;:&quot;BYN&quot;,&quot;BZD&quot;:&quot;BZD&quot;,&quot;CDF&quot;:&quot;CDF&quot;,&quot;CLF&quot;:&quot;CLF&quot;,&quot;CLP&quot;:&quot;CLP&quot;,&quot;COP&quot;:&quot;COP&quot;,&quot;CRC&quot;:&quot;CRC&quot;,&quot;CUC&quot;:&quot;CUC&quot;,&quot;CUP&quot;:&quot;CUP&quot;,&quot;CVE&quot;:&quot;CVE&quot;,&quot;CZK&quot;:&quot;CZK&quot;,&quot;DJF&quot;:&quot;DJF&quot;,&quot;DKK&quot;:&quot;DKK&quot;,&quot;DOP&quot;:&quot;DOP&quot;,&quot;DZD&quot;:&quot;DZD&quot;,&quot;EGP&quot;:&quot;EGP&quot;,&quot;ERN&quot;:&quot;ERN&quot;,&quot;ETB&quot;:&quot;ETB&quot;,&quot;FJD&quot;:&quot;FJD&quot;,&quot;FKP&quot;:&quot;FKP&quot;,&quot;GEL&quot;:&quot;GEL&quot;,&quot;GGP&quot;:&quot;GGP&quot;,&quot;GHS&quot;:&quot;GHS&quot;,&quot;GIP&quot;:&quot;GIP&quot;,&quot;GMD&quot;:&quot;GMD&quot;,&quot;GNF&quot;:&quot;GNF&quot;,&quot;GTQ&quot;:&quot;GTQ&quot;,&quot;GYD&quot;:&quot;GYD&quot;,&quot;HNL&quot;:&quot;HNL&quot;,&quot;HRK&quot;:&quot;HRK&quot;,&quot;HTG&quot;:&quot;HTG&quot;,&quot;HUF&quot;:&quot;HUF&quot;,&quot;IDR&quot;:&quot;IDR&quot;,&quot;ILS&quot;:&quot;ILS&quot;,&quot;IMP&quot;:&quot;IMP&quot;,&quot;IQD&quot;:&quot;IQD&quot;,&quot;IRR&quot;:&quot;IRR&quot;,&quot;ISK&quot;:&quot;ISK&quot;,&quot;JEP&quot;:&quot;JEP&quot;,&quot;JMD&quot;:&quot;JMD&quot;,&quot;JOD&quot;:&quot;JOD&quot;,&quot;KES&quot;:&quot;KES&quot;,&quot;KGS&quot;:&quot;KGS&quot;,&quot;KHR&quot;:&quot;KHR&quot;,&quot;KMF&quot;:&quot;KMF&quot;,&quot;KPW&quot;:&quot;KPW&quot;,&quot;KWD&quot;:&quot;KWD&quot;,&quot;KYD&quot;:&quot;KYD&quot;,&quot;KZT&quot;:&quot;KZT&quot;,&quot;LAK&quot;:&quot;LAK&quot;,&quot;LBP&quot;:&quot;LBP&quot;,&quot;LKR&quot;:&quot;LKR&quot;,&quot;LRD&quot;:&quot;LRD&quot;,&quot;LSL&quot;:&quot;LSL&quot;,&quot;LYD&quot;:&quot;LYD&quot;,&quot;MAD&quot;:&quot;MAD&quot;,&quot;MDL&quot;:&quot;MDL&quot;,&quot;MGA&quot;:&quot;MGA&quot;,&quot;MKD&quot;:&quot;MKD&quot;,&quot;MMK&quot;:&quot;MMK&quot;,&quot;MNT&quot;:&quot;MNT&quot;,&quot;MOP&quot;:&quot;MOP&quot;,&quot;MRO&quot;:&quot;MRO&quot;,&quot;MUR&quot;:&quot;MUR&quot;,&quot;MVR&quot;:&quot;MVR&quot;,&quot;MWK&quot;:&quot;MWK&quot;,&quot;MYR&quot;:&quot;MYR&quot;,&quot;MZN&quot;:&quot;MZN&quot;,&quot;NAD&quot;:&quot;NAD&quot;,&quot;NGN&quot;:&quot;NGN&quot;,&quot;NIO&quot;:&quot;NIO&quot;,&quot;NPR&quot;:&quot;NPR&quot;,&quot;OMR&quot;:&quot;OMR&quot;,&quot;PAB&quot;:&quot;PAB&quot;,&quot;PEN&quot;:&quot;PEN&quot;,&quot;PGK&quot;:&quot;PGK&quot;,&quot;PHP&quot;:&quot;PHP&quot;,&quot;PKR&quot;:&quot;PKR&quot;,&quot;PLN&quot;:&quot;PLN&quot;,&quot;PYG&quot;:&quot;PYG&quot;,&quot;QAR&quot;:&quot;QAR&quot;,&quot;RON&quot;:&quot;RON&quot;,&quot;RSD&quot;:&quot;RSD&quot;,&quot;RWF&quot;:&quot;RWF&quot;,&quot;SAR&quot;:&quot;SAR&quot;,&quot;SBD&quot;:&quot;SBD&quot;,&quot;SCR&quot;:&quot;SCR&quot;,&quot;SDG&quot;:&quot;SDG&quot;,&quot;SHP&quot;:&quot;SHP&quot;,&quot;SLL&quot;:&quot;SLL&quot;,&quot;SOS&quot;:&quot;SOS&quot;,&quot;SRD&quot;:&quot;SRD&quot;,&quot;SSP&quot;:&quot;SSP&quot;,&quot;STD&quot;:&quot;STD&quot;,&quot;SVC&quot;:&quot;SVC&quot;,&quot;SYP&quot;:&quot;SYP&quot;,&quot;SZL&quot;:&quot;SZL&quot;,&quot;THB&quot;:&quot;THB&quot;,&quot;TJS&quot;:&quot;TJS&quot;,&quot;TMT&quot;:&quot;TMT&quot;,&quot;TND&quot;:&quot;TND&quot;,&quot;TOP&quot;:&quot;TOP&quot;,&quot;TTD&quot;:&quot;TTD&quot;,&quot;TWD&quot;:&quot;TWD&quot;,&quot;TZS&quot;:&quot;TZS&quot;,&quot;UAH&quot;:&quot;UAH&quot;,&quot;UGX&quot;:&quot;UGX&quot;,&quot;UYU&quot;:&quot;UYU&quot;,&quot;UZS&quot;:&quot;UZS&quot;,&quot;VEF&quot;:&quot;VEF&quot;,&quot;VND&quot;:&quot;VND&quot;,&quot;VUV&quot;:&quot;VUV&quot;,&quot;WST&quot;:&quot;WST&quot;,&quot;XAF&quot;:&quot;XAF&quot;,&quot;XAG&quot;:&quot;XAG&quot;,&quot;XAU&quot;:&quot;XAU&quot;,&quot;XCD&quot;:&quot;XCD&quot;,&quot;XDR&quot;:&quot;XDR&quot;,&quot;XOF&quot;:&quot;XOF&quot;,&quot;XPD&quot;:&quot;XPD&quot;,&quot;XPF&quot;:&quot;XPF&quot;,&quot;XPT&quot;:&quot;XPT&quot;,&quot;YER&quot;:&quot;YER&quot;,&quot;ZMW&quot;:&quot;ZMW&quot;,&quot;ZWL&quot;:&quot;ZWL&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T17:32:47.000000Z&quot;}}"
                                    value="144">Coinbase Commerce - USD</option>
                                <option
                                    data-gateway="{&quot;id&quot;:97,&quot;name&quot;:&quot;CoinPayments - BTC&quot;,&quot;currency&quot;:&quot;BTC&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:503,&quot;gateway_alias&quot;:&quot;Coinpayments&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;10000.00000000&quot;,&quot;percent_charge&quot;:&quot;10.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;10.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2021-05-20T17:37:14.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T17:37:14.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:15,&quot;form_id&quot;:0,&quot;code&quot;:&quot;503&quot;,&quot;name&quot;:&quot;CoinPayments&quot;,&quot;alias&quot;:&quot;Coinpayments&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;BTC&quot;:&quot;Bitcoin&quot;,&quot;BTC.LN&quot;:&quot;Bitcoin (Lightning Network)&quot;,&quot;LTC&quot;:&quot;Litecoin&quot;,&quot;CPS&quot;:&quot;CPS Coin&quot;,&quot;VLX&quot;:&quot;Velas&quot;,&quot;APL&quot;:&quot;Apollo&quot;,&quot;AYA&quot;:&quot;Aryacoin&quot;,&quot;BAD&quot;:&quot;Badcoin&quot;,&quot;BCD&quot;:&quot;Bitcoin Diamond&quot;,&quot;BCH&quot;:&quot;Bitcoin Cash&quot;,&quot;BCN&quot;:&quot;Bytecoin&quot;,&quot;BEAM&quot;:&quot;BEAM&quot;,&quot;BITB&quot;:&quot;Bean Cash&quot;,&quot;BLK&quot;:&quot;BlackCoin&quot;,&quot;BSV&quot;:&quot;Bitcoin SV&quot;,&quot;BTAD&quot;:&quot;Bitcoin Adult&quot;,&quot;BTG&quot;:&quot;Bitcoin Gold&quot;,&quot;BTT&quot;:&quot;BitTorrent&quot;,&quot;CLOAK&quot;:&quot;CloakCoin&quot;,&quot;CLUB&quot;:&quot;ClubCoin&quot;,&quot;CRW&quot;:&quot;Crown&quot;,&quot;CRYP&quot;:&quot;CrypticCoin&quot;,&quot;CRYT&quot;:&quot;CryTrExCoin&quot;,&quot;CURE&quot;:&quot;CureCoin&quot;,&quot;DASH&quot;:&quot;DASH&quot;,&quot;DCR&quot;:&quot;Decred&quot;,&quot;DEV&quot;:&quot;DeviantCoin&quot;,&quot;DGB&quot;:&quot;DigiByte&quot;,&quot;DOGE&quot;:&quot;Dogecoin&quot;,&quot;EBST&quot;:&quot;eBoost&quot;,&quot;EOS&quot;:&quot;EOS&quot;,&quot;ETC&quot;:&quot;Ether Classic&quot;,&quot;ETH&quot;:&quot;Ethereum&quot;,&quot;ETN&quot;:&quot;Electroneum&quot;,&quot;EUNO&quot;:&quot;EUNO&quot;,&quot;EXP&quot;:&quot;EXP&quot;,&quot;Expanse&quot;:&quot;Expanse&quot;,&quot;FLASH&quot;:&quot;FLASH&quot;,&quot;GAME&quot;:&quot;GameCredits&quot;,&quot;GLC&quot;:&quot;Goldcoin&quot;,&quot;GRS&quot;:&quot;Groestlcoin&quot;,&quot;KMD&quot;:&quot;Komodo&quot;,&quot;LOKI&quot;:&quot;LOKI&quot;,&quot;LSK&quot;:&quot;LSK&quot;,&quot;MAID&quot;:&quot;MaidSafeCoin&quot;,&quot;MUE&quot;:&quot;MonetaryUnit&quot;,&quot;NAV&quot;:&quot;NAV Coin&quot;,&quot;NEO&quot;:&quot;NEO&quot;,&quot;NMC&quot;:&quot;Namecoin&quot;,&quot;NVST&quot;:&quot;NVO Token&quot;,&quot;NXT&quot;:&quot;NXT&quot;,&quot;OMNI&quot;:&quot;OMNI&quot;,&quot;PINK&quot;:&quot;PinkCoin&quot;,&quot;PIVX&quot;:&quot;PIVX&quot;,&quot;POT&quot;:&quot;PotCoin&quot;,&quot;PPC&quot;:&quot;Peercoin&quot;,&quot;PROC&quot;:&quot;ProCurrency&quot;,&quot;PURA&quot;:&quot;PURA&quot;,&quot;QTUM&quot;:&quot;QTUM&quot;,&quot;RES&quot;:&quot;Resistance&quot;,&quot;RVN&quot;:&quot;Ravencoin&quot;,&quot;RVR&quot;:&quot;RevolutionVR&quot;,&quot;SBD&quot;:&quot;Steem Dollars&quot;,&quot;SMART&quot;:&quot;SmartCash&quot;,&quot;SOXAX&quot;:&quot;SOXAX&quot;,&quot;STEEM&quot;:&quot;STEEM&quot;,&quot;STRAT&quot;:&quot;STRAT&quot;,&quot;SYS&quot;:&quot;Syscoin&quot;,&quot;TPAY&quot;:&quot;TokenPay&quot;,&quot;TRIGGERS&quot;:&quot;Triggers&quot;,&quot;TRX&quot;:&quot; TRON&quot;,&quot;UBQ&quot;:&quot;Ubiq&quot;,&quot;UNIT&quot;:&quot;UniversalCurrency&quot;,&quot;USDT&quot;:&quot;Tether USD (Omni Layer)&quot;,&quot;USDT.BEP20&quot;:&quot;Tether USD (BSC Chain)&quot;,&quot;USDT.ERC20&quot;:&quot;Tether USD (ERC20)&quot;,&quot;USDT.TRC20&quot;:&quot;Tether USD (Tron\/TRC20)&quot;,&quot;VTC&quot;:&quot;Vertcoin&quot;,&quot;WAVES&quot;:&quot;Waves&quot;,&quot;XCP&quot;:&quot;Counterparty&quot;,&quot;XEM&quot;:&quot;NEM&quot;,&quot;XMR&quot;:&quot;Monero&quot;,&quot;XSN&quot;:&quot;Stakenet&quot;,&quot;XSR&quot;:&quot;SucreCoin&quot;,&quot;XVG&quot;:&quot;VERGE&quot;,&quot;XZC&quot;:&quot;ZCoin&quot;,&quot;ZEC&quot;:&quot;ZCash&quot;,&quot;ZEN&quot;:&quot;Horizen&quot;},&quot;crypto&quot;:1,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T17:37:14.000000Z&quot;}}"
                                    value="97">CoinPayments - BTC</option>
                                <option
                                    data-gateway="{&quot;id&quot;:145,&quot;name&quot;:&quot;CoinPayments - ETH&quot;,&quot;currency&quot;:&quot;JPY&quot;,&quot;symbol&quot;:&quot;111&quot;,&quot;method_code&quot;:506,&quot;gateway_alias&quot;:&quot;CoinbaseCommerce&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;11.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2022-03-29T23:18:19.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-03-29T23:18:19.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:18,&quot;form_id&quot;:0,&quot;code&quot;:&quot;506&quot;,&quot;name&quot;:&quot;Coinbase Commerce&quot;,&quot;alias&quot;:&quot;CoinbaseCommerce&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;USD&quot;:&quot;USD&quot;,&quot;EUR&quot;:&quot;EUR&quot;,&quot;JPY&quot;:&quot;JPY&quot;,&quot;GBP&quot;:&quot;GBP&quot;,&quot;AUD&quot;:&quot;AUD&quot;,&quot;CAD&quot;:&quot;CAD&quot;,&quot;CHF&quot;:&quot;CHF&quot;,&quot;CNY&quot;:&quot;CNY&quot;,&quot;SEK&quot;:&quot;SEK&quot;,&quot;NZD&quot;:&quot;NZD&quot;,&quot;MXN&quot;:&quot;MXN&quot;,&quot;SGD&quot;:&quot;SGD&quot;,&quot;HKD&quot;:&quot;HKD&quot;,&quot;NOK&quot;:&quot;NOK&quot;,&quot;KRW&quot;:&quot;KRW&quot;,&quot;TRY&quot;:&quot;TRY&quot;,&quot;RUB&quot;:&quot;RUB&quot;,&quot;INR&quot;:&quot;INR&quot;,&quot;BRL&quot;:&quot;BRL&quot;,&quot;ZAR&quot;:&quot;ZAR&quot;,&quot;AED&quot;:&quot;AED&quot;,&quot;AFN&quot;:&quot;AFN&quot;,&quot;ALL&quot;:&quot;ALL&quot;,&quot;AMD&quot;:&quot;AMD&quot;,&quot;ANG&quot;:&quot;ANG&quot;,&quot;AOA&quot;:&quot;AOA&quot;,&quot;ARS&quot;:&quot;ARS&quot;,&quot;AWG&quot;:&quot;AWG&quot;,&quot;AZN&quot;:&quot;AZN&quot;,&quot;BAM&quot;:&quot;BAM&quot;,&quot;BBD&quot;:&quot;BBD&quot;,&quot;BDT&quot;:&quot;BDT&quot;,&quot;BGN&quot;:&quot;BGN&quot;,&quot;BHD&quot;:&quot;BHD&quot;,&quot;BIF&quot;:&quot;BIF&quot;,&quot;BMD&quot;:&quot;BMD&quot;,&quot;BND&quot;:&quot;BND&quot;,&quot;BOB&quot;:&quot;BOB&quot;,&quot;BSD&quot;:&quot;BSD&quot;,&quot;BTN&quot;:&quot;BTN&quot;,&quot;BWP&quot;:&quot;BWP&quot;,&quot;BYN&quot;:&quot;BYN&quot;,&quot;BZD&quot;:&quot;BZD&quot;,&quot;CDF&quot;:&quot;CDF&quot;,&quot;CLF&quot;:&quot;CLF&quot;,&quot;CLP&quot;:&quot;CLP&quot;,&quot;COP&quot;:&quot;COP&quot;,&quot;CRC&quot;:&quot;CRC&quot;,&quot;CUC&quot;:&quot;CUC&quot;,&quot;CUP&quot;:&quot;CUP&quot;,&quot;CVE&quot;:&quot;CVE&quot;,&quot;CZK&quot;:&quot;CZK&quot;,&quot;DJF&quot;:&quot;DJF&quot;,&quot;DKK&quot;:&quot;DKK&quot;,&quot;DOP&quot;:&quot;DOP&quot;,&quot;DZD&quot;:&quot;DZD&quot;,&quot;EGP&quot;:&quot;EGP&quot;,&quot;ERN&quot;:&quot;ERN&quot;,&quot;ETB&quot;:&quot;ETB&quot;,&quot;FJD&quot;:&quot;FJD&quot;,&quot;FKP&quot;:&quot;FKP&quot;,&quot;GEL&quot;:&quot;GEL&quot;,&quot;GGP&quot;:&quot;GGP&quot;,&quot;GHS&quot;:&quot;GHS&quot;,&quot;GIP&quot;:&quot;GIP&quot;,&quot;GMD&quot;:&quot;GMD&quot;,&quot;GNF&quot;:&quot;GNF&quot;,&quot;GTQ&quot;:&quot;GTQ&quot;,&quot;GYD&quot;:&quot;GYD&quot;,&quot;HNL&quot;:&quot;HNL&quot;,&quot;HRK&quot;:&quot;HRK&quot;,&quot;HTG&quot;:&quot;HTG&quot;,&quot;HUF&quot;:&quot;HUF&quot;,&quot;IDR&quot;:&quot;IDR&quot;,&quot;ILS&quot;:&quot;ILS&quot;,&quot;IMP&quot;:&quot;IMP&quot;,&quot;IQD&quot;:&quot;IQD&quot;,&quot;IRR&quot;:&quot;IRR&quot;,&quot;ISK&quot;:&quot;ISK&quot;,&quot;JEP&quot;:&quot;JEP&quot;,&quot;JMD&quot;:&quot;JMD&quot;,&quot;JOD&quot;:&quot;JOD&quot;,&quot;KES&quot;:&quot;KES&quot;,&quot;KGS&quot;:&quot;KGS&quot;,&quot;KHR&quot;:&quot;KHR&quot;,&quot;KMF&quot;:&quot;KMF&quot;,&quot;KPW&quot;:&quot;KPW&quot;,&quot;KWD&quot;:&quot;KWD&quot;,&quot;KYD&quot;:&quot;KYD&quot;,&quot;KZT&quot;:&quot;KZT&quot;,&quot;LAK&quot;:&quot;LAK&quot;,&quot;LBP&quot;:&quot;LBP&quot;,&quot;LKR&quot;:&quot;LKR&quot;,&quot;LRD&quot;:&quot;LRD&quot;,&quot;LSL&quot;:&quot;LSL&quot;,&quot;LYD&quot;:&quot;LYD&quot;,&quot;MAD&quot;:&quot;MAD&quot;,&quot;MDL&quot;:&quot;MDL&quot;,&quot;MGA&quot;:&quot;MGA&quot;,&quot;MKD&quot;:&quot;MKD&quot;,&quot;MMK&quot;:&quot;MMK&quot;,&quot;MNT&quot;:&quot;MNT&quot;,&quot;MOP&quot;:&quot;MOP&quot;,&quot;MRO&quot;:&quot;MRO&quot;,&quot;MUR&quot;:&quot;MUR&quot;,&quot;MVR&quot;:&quot;MVR&quot;,&quot;MWK&quot;:&quot;MWK&quot;,&quot;MYR&quot;:&quot;MYR&quot;,&quot;MZN&quot;:&quot;MZN&quot;,&quot;NAD&quot;:&quot;NAD&quot;,&quot;NGN&quot;:&quot;NGN&quot;,&quot;NIO&quot;:&quot;NIO&quot;,&quot;NPR&quot;:&quot;NPR&quot;,&quot;OMR&quot;:&quot;OMR&quot;,&quot;PAB&quot;:&quot;PAB&quot;,&quot;PEN&quot;:&quot;PEN&quot;,&quot;PGK&quot;:&quot;PGK&quot;,&quot;PHP&quot;:&quot;PHP&quot;,&quot;PKR&quot;:&quot;PKR&quot;,&quot;PLN&quot;:&quot;PLN&quot;,&quot;PYG&quot;:&quot;PYG&quot;,&quot;QAR&quot;:&quot;QAR&quot;,&quot;RON&quot;:&quot;RON&quot;,&quot;RSD&quot;:&quot;RSD&quot;,&quot;RWF&quot;:&quot;RWF&quot;,&quot;SAR&quot;:&quot;SAR&quot;,&quot;SBD&quot;:&quot;SBD&quot;,&quot;SCR&quot;:&quot;SCR&quot;,&quot;SDG&quot;:&quot;SDG&quot;,&quot;SHP&quot;:&quot;SHP&quot;,&quot;SLL&quot;:&quot;SLL&quot;,&quot;SOS&quot;:&quot;SOS&quot;,&quot;SRD&quot;:&quot;SRD&quot;,&quot;SSP&quot;:&quot;SSP&quot;,&quot;STD&quot;:&quot;STD&quot;,&quot;SVC&quot;:&quot;SVC&quot;,&quot;SYP&quot;:&quot;SYP&quot;,&quot;SZL&quot;:&quot;SZL&quot;,&quot;THB&quot;:&quot;THB&quot;,&quot;TJS&quot;:&quot;TJS&quot;,&quot;TMT&quot;:&quot;TMT&quot;,&quot;TND&quot;:&quot;TND&quot;,&quot;TOP&quot;:&quot;TOP&quot;,&quot;TTD&quot;:&quot;TTD&quot;,&quot;TWD&quot;:&quot;TWD&quot;,&quot;TZS&quot;:&quot;TZS&quot;,&quot;UAH&quot;:&quot;UAH&quot;,&quot;UGX&quot;:&quot;UGX&quot;,&quot;UYU&quot;:&quot;UYU&quot;,&quot;UZS&quot;:&quot;UZS&quot;,&quot;VEF&quot;:&quot;VEF&quot;,&quot;VND&quot;:&quot;VND&quot;,&quot;VUV&quot;:&quot;VUV&quot;,&quot;WST&quot;:&quot;WST&quot;,&quot;XAF&quot;:&quot;XAF&quot;,&quot;XAG&quot;:&quot;XAG&quot;,&quot;XAU&quot;:&quot;XAU&quot;,&quot;XCD&quot;:&quot;XCD&quot;,&quot;XDR&quot;:&quot;XDR&quot;,&quot;XOF&quot;:&quot;XOF&quot;,&quot;XPD&quot;:&quot;XPD&quot;,&quot;XPF&quot;:&quot;XPF&quot;,&quot;XPT&quot;:&quot;XPT&quot;,&quot;YER&quot;:&quot;YER&quot;,&quot;ZMW&quot;:&quot;ZMW&quot;,&quot;ZWL&quot;:&quot;ZWL&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T17:32:47.000000Z&quot;}}"
                                    value="145">CoinPayments - ETH</option>
                                <option
                                    data-gateway="{&quot;id&quot;:137,&quot;name&quot;:&quot;CoinPayments Fiat - AUD&quot;,&quot;currency&quot;:&quot;AUD&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:504,&quot;gateway_alias&quot;:&quot;CoinpaymentsFiat&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;10000.00000000&quot;,&quot;percent_charge&quot;:&quot;0.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2022-03-09T19:25:32.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-03-09T19:25:32.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:16,&quot;form_id&quot;:0,&quot;code&quot;:&quot;504&quot;,&quot;name&quot;:&quot;CoinPayments Fiat&quot;,&quot;alias&quot;:&quot;CoinpaymentsFiat&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;USD&quot;:&quot;USD&quot;,&quot;AUD&quot;:&quot;AUD&quot;,&quot;BRL&quot;:&quot;BRL&quot;,&quot;CAD&quot;:&quot;CAD&quot;,&quot;CHF&quot;:&quot;CHF&quot;,&quot;CLP&quot;:&quot;CLP&quot;,&quot;CNY&quot;:&quot;CNY&quot;,&quot;DKK&quot;:&quot;DKK&quot;,&quot;EUR&quot;:&quot;EUR&quot;,&quot;GBP&quot;:&quot;GBP&quot;,&quot;HKD&quot;:&quot;HKD&quot;,&quot;INR&quot;:&quot;INR&quot;,&quot;ISK&quot;:&quot;ISK&quot;,&quot;JPY&quot;:&quot;JPY&quot;,&quot;KRW&quot;:&quot;KRW&quot;,&quot;NZD&quot;:&quot;NZD&quot;,&quot;PLN&quot;:&quot;PLN&quot;,&quot;RUB&quot;:&quot;RUB&quot;,&quot;SEK&quot;:&quot;SEK&quot;,&quot;SGD&quot;:&quot;SGD&quot;,&quot;THB&quot;:&quot;THB&quot;,&quot;TWD&quot;:&quot;TWD&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T17:37:44.000000Z&quot;}}"
                                    value="137">CoinPayments Fiat - AUD</option>
                                <option
                                    data-gateway="{&quot;id&quot;:136,&quot;name&quot;:&quot;CoinPayments Fiat - USD&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:504,&quot;gateway_alias&quot;:&quot;CoinpaymentsFiat&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;10000.00000000&quot;,&quot;percent_charge&quot;:&quot;10.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;10.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2022-03-09T19:25:32.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-03-09T19:25:32.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:16,&quot;form_id&quot;:0,&quot;code&quot;:&quot;504&quot;,&quot;name&quot;:&quot;CoinPayments Fiat&quot;,&quot;alias&quot;:&quot;CoinpaymentsFiat&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;USD&quot;:&quot;USD&quot;,&quot;AUD&quot;:&quot;AUD&quot;,&quot;BRL&quot;:&quot;BRL&quot;,&quot;CAD&quot;:&quot;CAD&quot;,&quot;CHF&quot;:&quot;CHF&quot;,&quot;CLP&quot;:&quot;CLP&quot;,&quot;CNY&quot;:&quot;CNY&quot;,&quot;DKK&quot;:&quot;DKK&quot;,&quot;EUR&quot;:&quot;EUR&quot;,&quot;GBP&quot;:&quot;GBP&quot;,&quot;HKD&quot;:&quot;HKD&quot;,&quot;INR&quot;:&quot;INR&quot;,&quot;ISK&quot;:&quot;ISK&quot;,&quot;JPY&quot;:&quot;JPY&quot;,&quot;KRW&quot;:&quot;KRW&quot;,&quot;NZD&quot;:&quot;NZD&quot;,&quot;PLN&quot;:&quot;PLN&quot;,&quot;RUB&quot;:&quot;RUB&quot;,&quot;SEK&quot;:&quot;SEK&quot;,&quot;SGD&quot;:&quot;SGD&quot;,&quot;THB&quot;:&quot;THB&quot;,&quot;TWD&quot;:&quot;TWD&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T17:37:44.000000Z&quot;}}"
                                    value="136">CoinPayments Fiat - USD</option>
                                <option
                                    data-gateway="{&quot;id&quot;:115,&quot;name&quot;:&quot;Flutterwave - USD&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;USD&quot;,&quot;method_code&quot;:109,&quot;gateway_alias&quot;:&quot;Flutterwave&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;2000.00000000&quot;,&quot;percent_charge&quot;:&quot;0.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2021-06-05T03:07:45.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-06-05T03:07:45.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:9,&quot;form_id&quot;:0,&quot;code&quot;:&quot;109&quot;,&quot;name&quot;:&quot;Flutterwave&quot;,&quot;alias&quot;:&quot;Flutterwave&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;BIF&quot;:&quot;BIF&quot;,&quot;CAD&quot;:&quot;CAD&quot;,&quot;CDF&quot;:&quot;CDF&quot;,&quot;CVE&quot;:&quot;CVE&quot;,&quot;EUR&quot;:&quot;EUR&quot;,&quot;GBP&quot;:&quot;GBP&quot;,&quot;GHS&quot;:&quot;GHS&quot;,&quot;GMD&quot;:&quot;GMD&quot;,&quot;GNF&quot;:&quot;GNF&quot;,&quot;KES&quot;:&quot;KES&quot;,&quot;LRD&quot;:&quot;LRD&quot;,&quot;MWK&quot;:&quot;MWK&quot;,&quot;MZN&quot;:&quot;MZN&quot;,&quot;NGN&quot;:&quot;NGN&quot;,&quot;RWF&quot;:&quot;RWF&quot;,&quot;SLL&quot;:&quot;SLL&quot;,&quot;STD&quot;:&quot;STD&quot;,&quot;TZS&quot;:&quot;TZS&quot;,&quot;UGX&quot;:&quot;UGX&quot;,&quot;USD&quot;:&quot;USD&quot;,&quot;XAF&quot;:&quot;XAF&quot;,&quot;XOF&quot;:&quot;XOF&quot;,&quot;ZMK&quot;:&quot;ZMK&quot;,&quot;ZMW&quot;:&quot;ZMW&quot;,&quot;ZWD&quot;:&quot;ZWD&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-06-05T03:07:45.000000Z&quot;}}"
                                    value="115">Flutterwave - USD</option>
                                <option
                                    data-gateway="{&quot;id&quot;:113,&quot;name&quot;:&quot;Instamojo - INR&quot;,&quot;currency&quot;:&quot;INR&quot;,&quot;symbol&quot;:&quot;\u20b9&quot;,&quot;method_code&quot;:112,&quot;gateway_alias&quot;:&quot;Instamojo&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;10000.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;75.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2021-05-20T18:27:00.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T18:27:00.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:12,&quot;form_id&quot;:0,&quot;code&quot;:&quot;112&quot;,&quot;name&quot;:&quot;Instamojo&quot;,&quot;alias&quot;:&quot;Instamojo&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;INR&quot;:&quot;INR&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T18:26:20.000000Z&quot;}}"
                                    value="113">Instamojo - INR</option>
                                <option
                                    data-gateway="{&quot;id&quot;:163,&quot;name&quot;:&quot;Mercado Pago - USD&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:119,&quot;gateway_alias&quot;:&quot;MercadoPago&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;10.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2022-09-13T23:11:14.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-09-13T23:11:14.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:36,&quot;form_id&quot;:0,&quot;code&quot;:&quot;119&quot;,&quot;name&quot;:&quot;Mercado Pago&quot;,&quot;alias&quot;:&quot;MercadoPago&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;USD&quot;:&quot;USD&quot;,&quot;CAD&quot;:&quot;CAD&quot;,&quot;CHF&quot;:&quot;CHF&quot;,&quot;DKK&quot;:&quot;DKK&quot;,&quot;EUR&quot;:&quot;EUR&quot;,&quot;GBP&quot;:&quot;GBP&quot;,&quot;NOK&quot;:&quot;NOK&quot;,&quot;PLN&quot;:&quot;PLN&quot;,&quot;SEK&quot;:&quot;SEK&quot;,&quot;AUD&quot;:&quot;AUD&quot;,&quot;NZD&quot;:&quot;NZD&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:null,&quot;updated_at&quot;:&quot;2022-09-13T23:11:14.000000Z&quot;}}"
                                    value="163">Mercado Pago - USD</option>
                                <option
                                    data-gateway="{&quot;id&quot;:109,&quot;name&quot;:&quot;Mollie - USD&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:115,&quot;gateway_alias&quot;:&quot;Mollie&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;10000.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2021-05-20T18:14:45.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T18:14:45.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:27,&quot;form_id&quot;:0,&quot;code&quot;:&quot;115&quot;,&quot;name&quot;:&quot;Mollie&quot;,&quot;alias&quot;:&quot;Mollie&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;AED&quot;:&quot;AED&quot;,&quot;AUD&quot;:&quot;AUD&quot;,&quot;BGN&quot;:&quot;BGN&quot;,&quot;BRL&quot;:&quot;BRL&quot;,&quot;CAD&quot;:&quot;CAD&quot;,&quot;CHF&quot;:&quot;CHF&quot;,&quot;CZK&quot;:&quot;CZK&quot;,&quot;DKK&quot;:&quot;DKK&quot;,&quot;EUR&quot;:&quot;EUR&quot;,&quot;GBP&quot;:&quot;GBP&quot;,&quot;HKD&quot;:&quot;HKD&quot;,&quot;HRK&quot;:&quot;HRK&quot;,&quot;HUF&quot;:&quot;HUF&quot;,&quot;ILS&quot;:&quot;ILS&quot;,&quot;ISK&quot;:&quot;ISK&quot;,&quot;JPY&quot;:&quot;JPY&quot;,&quot;MXN&quot;:&quot;MXN&quot;,&quot;MYR&quot;:&quot;MYR&quot;,&quot;NOK&quot;:&quot;NOK&quot;,&quot;NZD&quot;:&quot;NZD&quot;,&quot;PHP&quot;:&quot;PHP&quot;,&quot;PLN&quot;:&quot;PLN&quot;,&quot;RON&quot;:&quot;RON&quot;,&quot;RUB&quot;:&quot;RUB&quot;,&quot;SEK&quot;:&quot;SEK&quot;,&quot;SGD&quot;:&quot;SGD&quot;,&quot;THB&quot;:&quot;THB&quot;,&quot;TWD&quot;:&quot;TWD&quot;,&quot;USD&quot;:&quot;USD&quot;,&quot;ZAR&quot;:&quot;ZAR&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T18:14:45.000000Z&quot;}}"
                                    value="109">Mollie - USD</option>
                                <option
                                    data-gateway="{&quot;id&quot;:156,&quot;name&quot;:&quot;NMI - USD&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:121,&quot;gateway_alias&quot;:&quot;NMI&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;10000.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2022-08-28T02:02:31.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-08-28T02:02:31.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:46,&quot;form_id&quot;:0,&quot;code&quot;:&quot;121&quot;,&quot;name&quot;:&quot;NMI&quot;,&quot;alias&quot;:&quot;NMI&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;AED&quot;:&quot;AED&quot;,&quot;ARS&quot;:&quot;ARS&quot;,&quot;AUD&quot;:&quot;AUD&quot;,&quot;BOB&quot;:&quot;BOB&quot;,&quot;BRL&quot;:&quot;BRL&quot;,&quot;CAD&quot;:&quot;CAD&quot;,&quot;CHF&quot;:&quot;CHF&quot;,&quot;CLP&quot;:&quot;CLP&quot;,&quot;CNY&quot;:&quot;CNY&quot;,&quot;COP&quot;:&quot;COP&quot;,&quot;DKK&quot;:&quot;DKK&quot;,&quot;EUR&quot;:&quot;EUR&quot;,&quot;GBP&quot;:&quot;GBP&quot;,&quot;HKD&quot;:&quot;HKD&quot;,&quot;IDR&quot;:&quot;IDR&quot;,&quot;ILS&quot;:&quot;ILS&quot;,&quot;INR&quot;:&quot;INR&quot;,&quot;JPY&quot;:&quot;JPY&quot;,&quot;KRW&quot;:&quot;KRW&quot;,&quot;MXN&quot;:&quot;MXN&quot;,&quot;MYR&quot;:&quot;MYR&quot;,&quot;NOK&quot;:&quot;NOK&quot;,&quot;NZD&quot;:&quot;NZD&quot;,&quot;PEN&quot;:&quot;PEN&quot;,&quot;PHP&quot;:&quot;PHP&quot;,&quot;PLN&quot;:&quot;PLN&quot;,&quot;PYG&quot;:&quot;PYG&quot;,&quot;RUB&quot;:&quot;RUB&quot;,&quot;SEC&quot;:&quot;SEC&quot;,&quot;SGD&quot;:&quot;SGD&quot;,&quot;THB&quot;:&quot;THB&quot;,&quot;TRY&quot;:&quot;TRY&quot;,&quot;TWD&quot;:&quot;TWD&quot;,&quot;USD&quot;:&quot;USD&quot;,&quot;ZAR&quot;:&quot;ZAR&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:null,&quot;updated_at&quot;:&quot;2022-08-28T02:02:31.000000Z&quot;}}"
                                    value="156">NMI - USD</option>
                                <option
                                    data-gateway="{&quot;id&quot;:166,&quot;name&quot;:&quot;Now payments checkout - BTC&quot;,&quot;currency&quot;:&quot;BTC&quot;,&quot;symbol&quot;:&quot;\u20bf&quot;,&quot;method_code&quot;:509,&quot;gateway_alias&quot;:&quot;NowPaymentsCheckout&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;1000.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;0.00003600&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2023-05-10T12:31:57.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-05-10T12:31:57.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:53,&quot;form_id&quot;:0,&quot;code&quot;:&quot;509&quot;,&quot;name&quot;:&quot;Now payments checkout&quot;,&quot;alias&quot;:&quot;NowPaymentsCheckout&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;BTG&quot;:&quot;BTG&quot;,&quot;ETH&quot;:&quot;ETH&quot;,&quot;XMR&quot;:&quot;XMR&quot;,&quot;ZEC&quot;:&quot;ZEC&quot;,&quot;XVG&quot;:&quot;XVG&quot;,&quot;ADA&quot;:&quot;ADA&quot;,&quot;LTC&quot;:&quot;LTC&quot;,&quot;BCH&quot;:&quot;BCH&quot;,&quot;QTUM&quot;:&quot;QTUM&quot;,&quot;DASH&quot;:&quot;DASH&quot;,&quot;XLM&quot;:&quot;XLM&quot;,&quot;XRP&quot;:&quot;XRP&quot;,&quot;XEM&quot;:&quot;XEM&quot;,&quot;DGB&quot;:&quot;DGB&quot;,&quot;LSK&quot;:&quot;LSK&quot;,&quot;DOGE&quot;:&quot;DOGE&quot;,&quot;TRX&quot;:&quot;TRX&quot;,&quot;KMD&quot;:&quot;KMD&quot;,&quot;REP&quot;:&quot;REP&quot;,&quot;BAT&quot;:&quot;BAT&quot;,&quot;ARK&quot;:&quot;ARK&quot;,&quot;WAVES&quot;:&quot;WAVES&quot;,&quot;BNB&quot;:&quot;BNB&quot;,&quot;XZC&quot;:&quot;XZC&quot;,&quot;NANO&quot;:&quot;NANO&quot;,&quot;TUSD&quot;:&quot;TUSD&quot;,&quot;VET&quot;:&quot;VET&quot;,&quot;ZEN&quot;:&quot;ZEN&quot;,&quot;GRS&quot;:&quot;GRS&quot;,&quot;FUN&quot;:&quot;FUN&quot;,&quot;NEO&quot;:&quot;NEO&quot;,&quot;GAS&quot;:&quot;GAS&quot;,&quot;PAX&quot;:&quot;PAX&quot;,&quot;USDC&quot;:&quot;USDC&quot;,&quot;ONT&quot;:&quot;ONT&quot;,&quot;XTZ&quot;:&quot;XTZ&quot;,&quot;LINK&quot;:&quot;LINK&quot;,&quot;RVN&quot;:&quot;RVN&quot;,&quot;BNBMAINNET&quot;:&quot;BNBMAINNET&quot;,&quot;ZIL&quot;:&quot;ZIL&quot;,&quot;BCD&quot;:&quot;BCD&quot;,&quot;USDT&quot;:&quot;USDT&quot;,&quot;USDTERC20&quot;:&quot;USDTERC20&quot;,&quot;CRO&quot;:&quot;CRO&quot;,&quot;DAI&quot;:&quot;DAI&quot;,&quot;HT&quot;:&quot;HT&quot;,&quot;WABI&quot;:&quot;WABI&quot;,&quot;BUSD&quot;:&quot;BUSD&quot;,&quot;ALGO&quot;:&quot;ALGO&quot;,&quot;USDTTRC20&quot;:&quot;USDTTRC20&quot;,&quot;GT&quot;:&quot;GT&quot;,&quot;STPT&quot;:&quot;STPT&quot;,&quot;AVA&quot;:&quot;AVA&quot;,&quot;SXP&quot;:&quot;SXP&quot;,&quot;UNI&quot;:&quot;UNI&quot;,&quot;OKB&quot;:&quot;OKB&quot;,&quot;BTC&quot;:&quot;BTC&quot;},&quot;crypto&quot;:1,&quot;description&quot;:null,&quot;created_at&quot;:null,&quot;updated_at&quot;:&quot;2023-02-14T01:12:09.000000Z&quot;}}"
                                    value="166">Now payments checkout - BTC</option>
                                <option
                                    data-gateway="{&quot;id&quot;:167,&quot;name&quot;:&quot;Now payments hosted - BTC&quot;,&quot;currency&quot;:&quot;BTC&quot;,&quot;symbol&quot;:&quot;\u20bf&quot;,&quot;method_code&quot;:123,&quot;gateway_alias&quot;:&quot;NowPaymentsHosted&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;1000.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;0.00003600&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2023-05-10T12:32:39.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-05-10T12:32:39.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:54,&quot;form_id&quot;:0,&quot;code&quot;:&quot;123&quot;,&quot;name&quot;:&quot;Now payments hosted&quot;,&quot;alias&quot;:&quot;NowPaymentsHosted&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;BTG&quot;:&quot;BTG&quot;,&quot;ETH&quot;:&quot;ETH&quot;,&quot;XMR&quot;:&quot;XMR&quot;,&quot;ZEC&quot;:&quot;ZEC&quot;,&quot;XVG&quot;:&quot;XVG&quot;,&quot;ADA&quot;:&quot;ADA&quot;,&quot;LTC&quot;:&quot;LTC&quot;,&quot;BCH&quot;:&quot;BCH&quot;,&quot;QTUM&quot;:&quot;QTUM&quot;,&quot;DASH&quot;:&quot;DASH&quot;,&quot;XLM&quot;:&quot;XLM&quot;,&quot;XRP&quot;:&quot;XRP&quot;,&quot;XEM&quot;:&quot;XEM&quot;,&quot;DGB&quot;:&quot;DGB&quot;,&quot;LSK&quot;:&quot;LSK&quot;,&quot;DOGE&quot;:&quot;DOGE&quot;,&quot;TRX&quot;:&quot;TRX&quot;,&quot;KMD&quot;:&quot;KMD&quot;,&quot;REP&quot;:&quot;REP&quot;,&quot;BAT&quot;:&quot;BAT&quot;,&quot;ARK&quot;:&quot;ARK&quot;,&quot;WAVES&quot;:&quot;WAVES&quot;,&quot;BNB&quot;:&quot;BNB&quot;,&quot;XZC&quot;:&quot;XZC&quot;,&quot;NANO&quot;:&quot;NANO&quot;,&quot;TUSD&quot;:&quot;TUSD&quot;,&quot;VET&quot;:&quot;VET&quot;,&quot;ZEN&quot;:&quot;ZEN&quot;,&quot;GRS&quot;:&quot;GRS&quot;,&quot;FUN&quot;:&quot;FUN&quot;,&quot;NEO&quot;:&quot;NEO&quot;,&quot;GAS&quot;:&quot;GAS&quot;,&quot;PAX&quot;:&quot;PAX&quot;,&quot;USDC&quot;:&quot;USDC&quot;,&quot;ONT&quot;:&quot;ONT&quot;,&quot;XTZ&quot;:&quot;XTZ&quot;,&quot;LINK&quot;:&quot;LINK&quot;,&quot;RVN&quot;:&quot;RVN&quot;,&quot;BNBMAINNET&quot;:&quot;BNBMAINNET&quot;,&quot;ZIL&quot;:&quot;ZIL&quot;,&quot;BCD&quot;:&quot;BCD&quot;,&quot;USDT&quot;:&quot;USDT&quot;,&quot;USDTERC20&quot;:&quot;USDTERC20&quot;,&quot;CRO&quot;:&quot;CRO&quot;,&quot;DAI&quot;:&quot;DAI&quot;,&quot;HT&quot;:&quot;HT&quot;,&quot;WABI&quot;:&quot;WABI&quot;,&quot;BUSD&quot;:&quot;BUSD&quot;,&quot;ALGO&quot;:&quot;ALGO&quot;,&quot;USDTTRC20&quot;:&quot;USDTTRC20&quot;,&quot;GT&quot;:&quot;GT&quot;,&quot;STPT&quot;:&quot;STPT&quot;,&quot;AVA&quot;:&quot;AVA&quot;,&quot;SXP&quot;:&quot;SXP&quot;,&quot;UNI&quot;:&quot;UNI&quot;,&quot;OKB&quot;:&quot;OKB&quot;,&quot;BTC&quot;:&quot;BTC&quot;},&quot;crypto&quot;:1,&quot;description&quot;:null,&quot;created_at&quot;:null,&quot;updated_at&quot;:&quot;2023-02-14T01:12:09.000000Z&quot;}}"
                                    value="167">Now payments hosted - BTC</option>
                                <option
                                    data-gateway="{&quot;id&quot;:140,&quot;name&quot;:&quot;Payeer - USD&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:106,&quot;gateway_alias&quot;:&quot;Payeer&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;10000.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2022-03-20T19:24:29.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-03-20T19:24:29.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:6,&quot;form_id&quot;:0,&quot;code&quot;:&quot;106&quot;,&quot;name&quot;:&quot;Payeer&quot;,&quot;alias&quot;:&quot;Payeer&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;USD&quot;:&quot;USD&quot;,&quot;EUR&quot;:&quot;EUR&quot;,&quot;RUB&quot;:&quot;RUB&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-08-28T01:41:14.000000Z&quot;}}"
                                    value="140">Payeer - USD</option>
                                <option
                                    data-gateway="{&quot;id&quot;:83,&quot;name&quot;:&quot;Paypal - USD&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:101,&quot;gateway_alias&quot;:&quot;Paypal&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;10000.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2021-05-20T15:34:38.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T15:34:38.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:1,&quot;form_id&quot;:0,&quot;code&quot;:&quot;101&quot;,&quot;name&quot;:&quot;Paypal&quot;,&quot;alias&quot;:&quot;Paypal&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;AUD&quot;:&quot;AUD&quot;,&quot;BRL&quot;:&quot;BRL&quot;,&quot;CAD&quot;:&quot;CAD&quot;,&quot;CZK&quot;:&quot;CZK&quot;,&quot;DKK&quot;:&quot;DKK&quot;,&quot;EUR&quot;:&quot;EUR&quot;,&quot;HKD&quot;:&quot;HKD&quot;,&quot;HUF&quot;:&quot;HUF&quot;,&quot;INR&quot;:&quot;INR&quot;,&quot;ILS&quot;:&quot;ILS&quot;,&quot;JPY&quot;:&quot;JPY&quot;,&quot;MYR&quot;:&quot;MYR&quot;,&quot;MXN&quot;:&quot;MXN&quot;,&quot;TWD&quot;:&quot;TWD&quot;,&quot;NZD&quot;:&quot;NZD&quot;,&quot;NOK&quot;:&quot;NOK&quot;,&quot;PHP&quot;:&quot;PHP&quot;,&quot;PLN&quot;:&quot;PLN&quot;,&quot;GBP&quot;:&quot;GBP&quot;,&quot;RUB&quot;:&quot;RUB&quot;,&quot;SGD&quot;:&quot;SGD&quot;,&quot;SEK&quot;:&quot;SEK&quot;,&quot;CHF&quot;:&quot;CHF&quot;,&quot;THB&quot;:&quot;THB&quot;,&quot;USD&quot;:&quot;$&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T15:34:38.000000Z&quot;}}"
                                    value="83">Paypal - USD</option>
                                <option
                                    data-gateway="{&quot;id&quot;:82,&quot;name&quot;:&quot;Paypal Express - USD&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:113,&quot;gateway_alias&quot;:&quot;PaypalSdk&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;1000000.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2021-05-20T15:30:14.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T15:30:14.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:24,&quot;form_id&quot;:0,&quot;code&quot;:&quot;113&quot;,&quot;name&quot;:&quot;Paypal Express&quot;,&quot;alias&quot;:&quot;PaypalSdk&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;AUD&quot;:&quot;AUD&quot;,&quot;BRL&quot;:&quot;BRL&quot;,&quot;CAD&quot;:&quot;CAD&quot;,&quot;CZK&quot;:&quot;CZK&quot;,&quot;DKK&quot;:&quot;DKK&quot;,&quot;EUR&quot;:&quot;EUR&quot;,&quot;HKD&quot;:&quot;HKD&quot;,&quot;HUF&quot;:&quot;HUF&quot;,&quot;INR&quot;:&quot;INR&quot;,&quot;ILS&quot;:&quot;ILS&quot;,&quot;JPY&quot;:&quot;JPY&quot;,&quot;MYR&quot;:&quot;MYR&quot;,&quot;MXN&quot;:&quot;MXN&quot;,&quot;TWD&quot;:&quot;TWD&quot;,&quot;NZD&quot;:&quot;NZD&quot;,&quot;NOK&quot;:&quot;NOK&quot;,&quot;PHP&quot;:&quot;PHP&quot;,&quot;PLN&quot;:&quot;PLN&quot;,&quot;GBP&quot;:&quot;GBP&quot;,&quot;RUB&quot;:&quot;RUB&quot;,&quot;SGD&quot;:&quot;SGD&quot;,&quot;SEK&quot;:&quot;SEK&quot;,&quot;CHF&quot;:&quot;CHF&quot;,&quot;THB&quot;:&quot;THB&quot;,&quot;USD&quot;:&quot;$&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T14:31:08.000000Z&quot;}}"
                                    value="82">Paypal Express - USD</option>
                                <option
                                    data-gateway="{&quot;id&quot;:96,&quot;name&quot;:&quot;PayStack - NGN&quot;,&quot;currency&quot;:&quot;NGN&quot;,&quot;symbol&quot;:&quot;\u20a6&quot;,&quot;method_code&quot;:107,&quot;gateway_alias&quot;:&quot;Paystack&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;10000.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;420.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2021-05-20T17:22:11.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T17:22:11.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:7,&quot;form_id&quot;:0,&quot;code&quot;:&quot;107&quot;,&quot;name&quot;:&quot;PayStack&quot;,&quot;alias&quot;:&quot;Paystack&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;USD&quot;:&quot;USD&quot;,&quot;NGN&quot;:&quot;NGN&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T17:19:51.000000Z&quot;}}"
                                    value="96">PayStack - NGN</option>
                                <option
                                    data-gateway="{&quot;id&quot;:116,&quot;name&quot;:&quot;PayTM - AUD&quot;,&quot;currency&quot;:&quot;AUD&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:105,&quot;gateway_alias&quot;:&quot;Paytm&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;10000.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2021-06-14T03:46:39.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-06-14T03:46:39.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:5,&quot;form_id&quot;:0,&quot;code&quot;:&quot;105&quot;,&quot;name&quot;:&quot;PayTM&quot;,&quot;alias&quot;:&quot;Paytm&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;AUD&quot;:&quot;AUD&quot;,&quot;ARS&quot;:&quot;ARS&quot;,&quot;BDT&quot;:&quot;BDT&quot;,&quot;BRL&quot;:&quot;BRL&quot;,&quot;BGN&quot;:&quot;BGN&quot;,&quot;CAD&quot;:&quot;CAD&quot;,&quot;CLP&quot;:&quot;CLP&quot;,&quot;CNY&quot;:&quot;CNY&quot;,&quot;COP&quot;:&quot;COP&quot;,&quot;HRK&quot;:&quot;HRK&quot;,&quot;CZK&quot;:&quot;CZK&quot;,&quot;DKK&quot;:&quot;DKK&quot;,&quot;EGP&quot;:&quot;EGP&quot;,&quot;EUR&quot;:&quot;EUR&quot;,&quot;GEL&quot;:&quot;GEL&quot;,&quot;GHS&quot;:&quot;GHS&quot;,&quot;HKD&quot;:&quot;HKD&quot;,&quot;HUF&quot;:&quot;HUF&quot;,&quot;INR&quot;:&quot;INR&quot;,&quot;IDR&quot;:&quot;IDR&quot;,&quot;ILS&quot;:&quot;ILS&quot;,&quot;JPY&quot;:&quot;JPY&quot;,&quot;KES&quot;:&quot;KES&quot;,&quot;MYR&quot;:&quot;MYR&quot;,&quot;MXN&quot;:&quot;MXN&quot;,&quot;MAD&quot;:&quot;MAD&quot;,&quot;NPR&quot;:&quot;NPR&quot;,&quot;NZD&quot;:&quot;NZD&quot;,&quot;NGN&quot;:&quot;NGN&quot;,&quot;NOK&quot;:&quot;NOK&quot;,&quot;PKR&quot;:&quot;PKR&quot;,&quot;PEN&quot;:&quot;PEN&quot;,&quot;PHP&quot;:&quot;PHP&quot;,&quot;PLN&quot;:&quot;PLN&quot;,&quot;RON&quot;:&quot;RON&quot;,&quot;RUB&quot;:&quot;RUB&quot;,&quot;SGD&quot;:&quot;SGD&quot;,&quot;ZAR&quot;:&quot;ZAR&quot;,&quot;KRW&quot;:&quot;KRW&quot;,&quot;LKR&quot;:&quot;LKR&quot;,&quot;SEK&quot;:&quot;SEK&quot;,&quot;CHF&quot;:&quot;CHF&quot;,&quot;THB&quot;:&quot;THB&quot;,&quot;TRY&quot;:&quot;TRY&quot;,&quot;UGX&quot;:&quot;UGX&quot;,&quot;UAH&quot;:&quot;UAH&quot;,&quot;AED&quot;:&quot;AED&quot;,&quot;GBP&quot;:&quot;GBP&quot;,&quot;USD&quot;:&quot;USD&quot;,&quot;VND&quot;:&quot;VND&quot;,&quot;XOF&quot;:&quot;XOF&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T18:30:44.000000Z&quot;}}"
                                    value="116">PayTM - AUD</option>
                                <option
                                    data-gateway="{&quot;id&quot;:117,&quot;name&quot;:&quot;PayTM - USD&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:105,&quot;gateway_alias&quot;:&quot;Paytm&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;10000.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;2.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2021-06-14T03:46:39.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-06-14T03:46:39.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:5,&quot;form_id&quot;:0,&quot;code&quot;:&quot;105&quot;,&quot;name&quot;:&quot;PayTM&quot;,&quot;alias&quot;:&quot;Paytm&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;AUD&quot;:&quot;AUD&quot;,&quot;ARS&quot;:&quot;ARS&quot;,&quot;BDT&quot;:&quot;BDT&quot;,&quot;BRL&quot;:&quot;BRL&quot;,&quot;BGN&quot;:&quot;BGN&quot;,&quot;CAD&quot;:&quot;CAD&quot;,&quot;CLP&quot;:&quot;CLP&quot;,&quot;CNY&quot;:&quot;CNY&quot;,&quot;COP&quot;:&quot;COP&quot;,&quot;HRK&quot;:&quot;HRK&quot;,&quot;CZK&quot;:&quot;CZK&quot;,&quot;DKK&quot;:&quot;DKK&quot;,&quot;EGP&quot;:&quot;EGP&quot;,&quot;EUR&quot;:&quot;EUR&quot;,&quot;GEL&quot;:&quot;GEL&quot;,&quot;GHS&quot;:&quot;GHS&quot;,&quot;HKD&quot;:&quot;HKD&quot;,&quot;HUF&quot;:&quot;HUF&quot;,&quot;INR&quot;:&quot;INR&quot;,&quot;IDR&quot;:&quot;IDR&quot;,&quot;ILS&quot;:&quot;ILS&quot;,&quot;JPY&quot;:&quot;JPY&quot;,&quot;KES&quot;:&quot;KES&quot;,&quot;MYR&quot;:&quot;MYR&quot;,&quot;MXN&quot;:&quot;MXN&quot;,&quot;MAD&quot;:&quot;MAD&quot;,&quot;NPR&quot;:&quot;NPR&quot;,&quot;NZD&quot;:&quot;NZD&quot;,&quot;NGN&quot;:&quot;NGN&quot;,&quot;NOK&quot;:&quot;NOK&quot;,&quot;PKR&quot;:&quot;PKR&quot;,&quot;PEN&quot;:&quot;PEN&quot;,&quot;PHP&quot;:&quot;PHP&quot;,&quot;PLN&quot;:&quot;PLN&quot;,&quot;RON&quot;:&quot;RON&quot;,&quot;RUB&quot;:&quot;RUB&quot;,&quot;SGD&quot;:&quot;SGD&quot;,&quot;ZAR&quot;:&quot;ZAR&quot;,&quot;KRW&quot;:&quot;KRW&quot;,&quot;LKR&quot;:&quot;LKR&quot;,&quot;SEK&quot;:&quot;SEK&quot;,&quot;CHF&quot;:&quot;CHF&quot;,&quot;THB&quot;:&quot;THB&quot;,&quot;TRY&quot;:&quot;TRY&quot;,&quot;UGX&quot;:&quot;UGX&quot;,&quot;UAH&quot;:&quot;UAH&quot;,&quot;AED&quot;:&quot;AED&quot;,&quot;GBP&quot;:&quot;GBP&quot;,&quot;USD&quot;:&quot;USD&quot;,&quot;VND&quot;:&quot;VND&quot;,&quot;XOF&quot;:&quot;XOF&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T18:30:44.000000Z&quot;}}"
                                    value="117">PayTM - USD</option>
                                <option
                                    data-gateway="{&quot;id&quot;:94,&quot;name&quot;:&quot;Perfect Money - USD&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:102,&quot;gateway_alias&quot;:&quot;PerfectMoney&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;10000.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2021-05-20T17:06:32.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T17:06:32.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:2,&quot;form_id&quot;:0,&quot;code&quot;:&quot;102&quot;,&quot;name&quot;:&quot;Perfect Money&quot;,&quot;alias&quot;:&quot;PerfectMoney&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;USD&quot;:&quot;$&quot;,&quot;EUR&quot;:&quot;\u20ac&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T17:05:33.000000Z&quot;}}"
                                    value="94">Perfect Money - USD</option>
                                <option
                                    data-gateway="{&quot;id&quot;:39,&quot;name&quot;:&quot;RazorPay - INR&quot;,&quot;currency&quot;:&quot;INR&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:110,&quot;gateway_alias&quot;:&quot;Razorpay&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;10000.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2020-09-25T21:21:34.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-09-25T21:21:34.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:10,&quot;form_id&quot;:0,&quot;code&quot;:&quot;110&quot;,&quot;name&quot;:&quot;RazorPay&quot;,&quot;alias&quot;:&quot;Razorpay&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;INR&quot;:&quot;INR&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T18:21:32.000000Z&quot;}}"
                                    value="39">RazorPay - INR</option>
                                <option
                                    data-gateway="{&quot;id&quot;:75,&quot;name&quot;:&quot;Skrill - AED&quot;,&quot;currency&quot;:&quot;AED&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:104,&quot;gateway_alias&quot;:&quot;Skrill&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;10000.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;10.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2021-05-19T03:34:56.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-19T03:34:56.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:4,&quot;form_id&quot;:0,&quot;code&quot;:&quot;104&quot;,&quot;name&quot;:&quot;Skrill&quot;,&quot;alias&quot;:&quot;Skrill&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;AED&quot;:&quot;AED&quot;,&quot;AUD&quot;:&quot;AUD&quot;,&quot;BGN&quot;:&quot;BGN&quot;,&quot;BHD&quot;:&quot;BHD&quot;,&quot;CAD&quot;:&quot;CAD&quot;,&quot;CHF&quot;:&quot;CHF&quot;,&quot;CZK&quot;:&quot;CZK&quot;,&quot;DKK&quot;:&quot;DKK&quot;,&quot;EUR&quot;:&quot;EUR&quot;,&quot;GBP&quot;:&quot;GBP&quot;,&quot;HKD&quot;:&quot;HKD&quot;,&quot;HRK&quot;:&quot;HRK&quot;,&quot;HUF&quot;:&quot;HUF&quot;,&quot;ILS&quot;:&quot;ILS&quot;,&quot;INR&quot;:&quot;INR&quot;,&quot;ISK&quot;:&quot;ISK&quot;,&quot;JOD&quot;:&quot;JOD&quot;,&quot;JPY&quot;:&quot;JPY&quot;,&quot;KRW&quot;:&quot;KRW&quot;,&quot;KWD&quot;:&quot;KWD&quot;,&quot;MAD&quot;:&quot;MAD&quot;,&quot;MYR&quot;:&quot;MYR&quot;,&quot;NOK&quot;:&quot;NOK&quot;,&quot;NZD&quot;:&quot;NZD&quot;,&quot;OMR&quot;:&quot;OMR&quot;,&quot;PLN&quot;:&quot;PLN&quot;,&quot;QAR&quot;:&quot;QAR&quot;,&quot;RON&quot;:&quot;RON&quot;,&quot;RSD&quot;:&quot;RSD&quot;,&quot;SAR&quot;:&quot;SAR&quot;,&quot;SEK&quot;:&quot;SEK&quot;,&quot;SGD&quot;:&quot;SGD&quot;,&quot;THB&quot;:&quot;THB&quot;,&quot;TND&quot;:&quot;TND&quot;,&quot;TRY&quot;:&quot;TRY&quot;,&quot;TWD&quot;:&quot;TWD&quot;,&quot;USD&quot;:&quot;USD&quot;,&quot;ZAR&quot;:&quot;ZAR&quot;,&quot;COP&quot;:&quot;COP&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T17:00:16.000000Z&quot;}}"
                                    value="75">Skrill - AED</option>
                                <option
                                    data-gateway="{&quot;id&quot;:76,&quot;name&quot;:&quot;Skrill - USD&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:104,&quot;gateway_alias&quot;:&quot;Skrill&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;10000.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;2.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2021-05-19T03:34:56.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-19T03:34:56.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:4,&quot;form_id&quot;:0,&quot;code&quot;:&quot;104&quot;,&quot;name&quot;:&quot;Skrill&quot;,&quot;alias&quot;:&quot;Skrill&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;AED&quot;:&quot;AED&quot;,&quot;AUD&quot;:&quot;AUD&quot;,&quot;BGN&quot;:&quot;BGN&quot;,&quot;BHD&quot;:&quot;BHD&quot;,&quot;CAD&quot;:&quot;CAD&quot;,&quot;CHF&quot;:&quot;CHF&quot;,&quot;CZK&quot;:&quot;CZK&quot;,&quot;DKK&quot;:&quot;DKK&quot;,&quot;EUR&quot;:&quot;EUR&quot;,&quot;GBP&quot;:&quot;GBP&quot;,&quot;HKD&quot;:&quot;HKD&quot;,&quot;HRK&quot;:&quot;HRK&quot;,&quot;HUF&quot;:&quot;HUF&quot;,&quot;ILS&quot;:&quot;ILS&quot;,&quot;INR&quot;:&quot;INR&quot;,&quot;ISK&quot;:&quot;ISK&quot;,&quot;JOD&quot;:&quot;JOD&quot;,&quot;JPY&quot;:&quot;JPY&quot;,&quot;KRW&quot;:&quot;KRW&quot;,&quot;KWD&quot;:&quot;KWD&quot;,&quot;MAD&quot;:&quot;MAD&quot;,&quot;MYR&quot;:&quot;MYR&quot;,&quot;NOK&quot;:&quot;NOK&quot;,&quot;NZD&quot;:&quot;NZD&quot;,&quot;OMR&quot;:&quot;OMR&quot;,&quot;PLN&quot;:&quot;PLN&quot;,&quot;QAR&quot;:&quot;QAR&quot;,&quot;RON&quot;:&quot;RON&quot;,&quot;RSD&quot;:&quot;RSD&quot;,&quot;SAR&quot;:&quot;SAR&quot;,&quot;SEK&quot;:&quot;SEK&quot;,&quot;SGD&quot;:&quot;SGD&quot;,&quot;THB&quot;:&quot;THB&quot;,&quot;TND&quot;:&quot;TND&quot;,&quot;TRY&quot;:&quot;TRY&quot;,&quot;TWD&quot;:&quot;TWD&quot;,&quot;USD&quot;:&quot;USD&quot;,&quot;ZAR&quot;:&quot;ZAR&quot;,&quot;COP&quot;:&quot;COP&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T17:00:16.000000Z&quot;}}"
                                    value="76">Skrill - USD</option>
                                <option
                                    data-gateway="{&quot;id&quot;:91,&quot;name&quot;:&quot;Stripe Checkout - USD&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;USD&quot;,&quot;method_code&quot;:114,&quot;gateway_alias&quot;:&quot;StripeV3&quot;,&quot;min_amount&quot;:&quot;10.00000000&quot;,&quot;max_amount&quot;:&quot;1000.00000000&quot;,&quot;percent_charge&quot;:&quot;0.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2021-05-20T16:51:58.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T16:51:58.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:25,&quot;form_id&quot;:0,&quot;code&quot;:&quot;114&quot;,&quot;name&quot;:&quot;Stripe Checkout&quot;,&quot;alias&quot;:&quot;StripeV3&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;USD&quot;:&quot;USD&quot;,&quot;AUD&quot;:&quot;AUD&quot;,&quot;BRL&quot;:&quot;BRL&quot;,&quot;CAD&quot;:&quot;CAD&quot;,&quot;CHF&quot;:&quot;CHF&quot;,&quot;DKK&quot;:&quot;DKK&quot;,&quot;EUR&quot;:&quot;EUR&quot;,&quot;GBP&quot;:&quot;GBP&quot;,&quot;HKD&quot;:&quot;HKD&quot;,&quot;INR&quot;:&quot;INR&quot;,&quot;JPY&quot;:&quot;JPY&quot;,&quot;MXN&quot;:&quot;MXN&quot;,&quot;MYR&quot;:&quot;MYR&quot;,&quot;NOK&quot;:&quot;NOK&quot;,&quot;NZD&quot;:&quot;NZD&quot;,&quot;PLN&quot;:&quot;PLN&quot;,&quot;SEK&quot;:&quot;SEK&quot;,&quot;SGD&quot;:&quot;SGD&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T16:28:38.000000Z&quot;}}"
                                    value="91">Stripe Checkout - USD</option>
                                <option
                                    data-gateway="{&quot;id&quot;:84,&quot;name&quot;:&quot;Stripe Hosted - USD&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:103,&quot;gateway_alias&quot;:&quot;Stripe&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;10000.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2021-05-20T16:18:36.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T16:18:36.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:3,&quot;form_id&quot;:0,&quot;code&quot;:&quot;103&quot;,&quot;name&quot;:&quot;Stripe Hosted&quot;,&quot;alias&quot;:&quot;Stripe&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;USD&quot;:&quot;USD&quot;,&quot;AUD&quot;:&quot;AUD&quot;,&quot;BRL&quot;:&quot;BRL&quot;,&quot;CAD&quot;:&quot;CAD&quot;,&quot;CHF&quot;:&quot;CHF&quot;,&quot;DKK&quot;:&quot;DKK&quot;,&quot;EUR&quot;:&quot;EUR&quot;,&quot;GBP&quot;:&quot;GBP&quot;,&quot;HKD&quot;:&quot;HKD&quot;,&quot;INR&quot;:&quot;INR&quot;,&quot;JPY&quot;:&quot;JPY&quot;,&quot;MXN&quot;:&quot;MXN&quot;,&quot;MYR&quot;:&quot;MYR&quot;,&quot;NOK&quot;:&quot;NOK&quot;,&quot;NZD&quot;:&quot;NZD&quot;,&quot;PLN&quot;:&quot;PLN&quot;,&quot;SEK&quot;:&quot;SEK&quot;,&quot;SGD&quot;:&quot;SGD&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T16:18:36.000000Z&quot;}}"
                                    value="84">Stripe Hosted - USD</option>
                                <option
                                    data-gateway="{&quot;id&quot;:86,&quot;name&quot;:&quot;Stripe Storefront - USD&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:111,&quot;gateway_alias&quot;:&quot;StripeJs&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;10000.00000000&quot;,&quot;percent_charge&quot;:&quot;1.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2021-05-20T16:23:13.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T16:23:13.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:11,&quot;form_id&quot;:0,&quot;code&quot;:&quot;111&quot;,&quot;name&quot;:&quot;Stripe Storefront&quot;,&quot;alias&quot;:&quot;StripeJs&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;USD&quot;:&quot;USD&quot;,&quot;AUD&quot;:&quot;AUD&quot;,&quot;BRL&quot;:&quot;BRL&quot;,&quot;CAD&quot;:&quot;CAD&quot;,&quot;CHF&quot;:&quot;CHF&quot;,&quot;DKK&quot;:&quot;DKK&quot;,&quot;EUR&quot;:&quot;EUR&quot;,&quot;GBP&quot;:&quot;GBP&quot;,&quot;HKD&quot;:&quot;HKD&quot;,&quot;INR&quot;:&quot;INR&quot;,&quot;JPY&quot;:&quot;JPY&quot;,&quot;MXN&quot;:&quot;MXN&quot;,&quot;MYR&quot;:&quot;MYR&quot;,&quot;NOK&quot;:&quot;NOK&quot;,&quot;NZD&quot;:&quot;NZD&quot;,&quot;PLN&quot;:&quot;PLN&quot;,&quot;SEK&quot;:&quot;SEK&quot;,&quot;SGD&quot;:&quot;SGD&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T16:23:10.000000Z&quot;}}"
                                    value="86">Stripe Storefront - USD</option>
                                <option
                                    data-gateway="{&quot;id&quot;:42,&quot;name&quot;:&quot;VoguePay - USD&quot;,&quot;currency&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;$&quot;,&quot;method_code&quot;:108,&quot;gateway_alias&quot;:&quot;Voguepay&quot;,&quot;min_amount&quot;:&quot;1.00000000&quot;,&quot;max_amount&quot;:&quot;1000.00000000&quot;,&quot;percent_charge&quot;:&quot;0.00&quot;,&quot;fixed_charge&quot;:&quot;1.00000000&quot;,&quot;rate&quot;:&quot;1.00000000&quot;,&quot;image&quot;:null,&quot;created_at&quot;:&quot;2020-09-25T21:22:09.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-09-25T21:22:09.000000Z&quot;,&quot;method&quot;:{&quot;id&quot;:8,&quot;form_id&quot;:0,&quot;code&quot;:&quot;108&quot;,&quot;name&quot;:&quot;VoguePay&quot;,&quot;alias&quot;:&quot;Voguepay&quot;,&quot;status&quot;:1,&quot;supported_currencies&quot;:{&quot;USD&quot;:&quot;USD&quot;,&quot;GBP&quot;:&quot;GBP&quot;,&quot;EUR&quot;:&quot;EUR&quot;,&quot;GHS&quot;:&quot;GHS&quot;,&quot;NGN&quot;:&quot;NGN&quot;,&quot;ZAR&quot;:&quot;ZAR&quot;},&quot;crypto&quot;:0,&quot;description&quot;:null,&quot;created_at&quot;:&quot;2019-09-14T04:44:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-20T16:52:38.000000Z&quot;}}"
                                    value="42">VoguePay - USD</option>
                            </select>
                            <code class="gateway-info d-none"><span class="rate-info">Rate: 1
                                        USD = <span class="gateway-rate"></span> <span
                                            class="method_currency"></span>.</span> Charge: <span
                                        class="charge"></span> USD. Total amount: <span
                                        class="total"></span> USD. </code>
                            <code class="gateway-limit"></code>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn--base w-100" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    

    <script>
        (function($) {
                "use strict";
                $('.subscribeBtn').click(function() {
                    var modal = $('#purchaseModal');
                    var price = $(this).data('amount');
                    var id = $(this).data('id');
                    modal.find('[name=amount]').val(price);
                    modal.find('[name=id]').val(id);
                    modal.modal('show');
                    $('[name=payment_method]').trigger('change');
                });

                $(document).on('change', '[name=payment_method]', function() {
                    var amount = $('[name=amount]').val();
                    if ($(this).val() != 'balance' && amount) {
                        var resource = $('select[name=payment_method] option:selected').data('gateway');
                        var max_amount = parseFloat(resource.max_amount);
                        var min_amount = parseFloat(resource.min_amount);
                        var fixed_charge = parseFloat(resource.fixed_charge);
                        var percent_charge = parseFloat(resource.percent_charge);
                        var charge = parseFloat(fixed_charge + (amount * percent_charge / 100)).toFixed(2);
                        $('.charge').text(charge);
                        $('.gateway-rate').text(parseFloat(resource.rate));
                        $('.gateway-info').removeClass('d-none');
                        $('.gateway-limit').addClass('d-none');
                        $('.rate-info').removeClass('d-none');
                        if (resource.currency == 'USD') {
                            $('.rate-info').addClass('d-none');
                        }
                        if (amount < min_amount || amount > max_amount) {
                            $('.gateway-limit').text(`${resource.name} cannot process ${amount} USD due to transaction limit. Gateway limit: ${min_amount} USD - ${max_amount} USD`);
                            $('.gateway-info').addClass('d-none');
                            $('.gateway-limit').removeClass('d-none');
                        }
                        $('.method_currency').text(resource.currency);
                        $('.total').text(parseFloat(charge) + parseFloat(amount));
                    } else {
                        $('.gateway-info').addClass('d-none');
                        $('.gateway-limit').addClass('d-none');
                    }
                });
            })(jQuery)
    </script>


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

            setTimeout(function() {
                $('.cookies-card').removeClass('hide')
            }, 2000);

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
                Array.from(table.querySelectorAll('tbody tr')).forEach(row => {
                    Array.from(row.querySelectorAll('td')).forEach((column, i) => {
                        (column.colSpan == 100) || column.setAttribute('data-label', heading[i].innerText)
                    });
                });
            });

        })(jQuery);
    </script>


    <script>
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5fe0b9b2a8a254155ab5421d/1eq2tap1m';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
  })();
    </script>

    <script>
        if (window.top != window.self) {
    document.body.innerHTML += '<div style="position:fixed;top:0;width:100%;z-index:9999999;background:#f8d7da;color:#721c24;text-align:center; padding: 20px;"><p style="font-size:20px; font-weight: bold;">You are using this website under an external iframe!!</p><p style="font-size:16px; margin-top: 20px;">for a better experience, please browse directly instead of an external iframe.</p><a href="'+window.self.location+'" target="_blank" style=" margin-top:20px; color: #fff;background-color: #dc3545; padding: 5px 10px; border-radius: 5px; text-decoration: none;">Browse Directly</a></div>';
}
    </script>


    <script>
        adroll_adv_id = "YXRNNTO7ZBAMFBH67UUE5M";
    adroll_pix_id = "MMQQDWGN25EXPHGRPA3NLR";
    adroll_version = "2.0";
    (function(w, d, e, o, a) {
        w.__adroll_loaded = true;
        w.adroll  = w.adroll  || [];
        w.adroll.f = [ 'setProperties', 'identify', 'track' ];
        var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id
                + "/roundtrip.js";
        for (a = 0; a < w.adroll.f.length; a++) {
            w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function(n) {
                return function() {
                    w.adroll.push([ n, arguments ])
                }
            })(w.adroll.f[a])
        }
        e = d.createElement('script');
        o = d.getElementsByTagName('script')[0];
        e.async  = 1;
        e.src  = roundtripUrl;
        o.parentNode.insertBefore(e, o);
    })(window, document);
    adroll.track("pageView");
    </script>


    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8940522890323334"
        crossorigin="anonymous"></script>

    @endsection