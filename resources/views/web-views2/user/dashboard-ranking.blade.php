@extends('web-views2.partials.dashboard-app')
@section('content')

            <div class="dashboard-container">
                <div class="dashboard-inner">
                    <div class="mb-4">
                        <h3>Rankings</h3>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12 mb-4">
                            <div class="card custom--card">
                                <div class="card-body">
                                    <div class="row gy-4 align-items-center">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="d-flex align-items-center raking-invest">
                                                <img class="me-3"
                                                    src="https://script.viserlab.com/mlmlab/assets/images/user_rankings/6496ce6f8c6f81687604847.png"
                                                    alt="image">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="raking-common text-center">
                                                <span>BV Left</span>
                                                <h5>0 / 1000</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="raking-common text-center">
                                                <span>BV Right</span>
                                                <h5>0 / 1000</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row gy-4">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="invest-badge text-center">
                                        <div class="invest-badge__thumb">
                                            <div class="invest-badge__thumb__mask " data-progress="0">
                                                <img src="https://script.viserlab.com/mlmlab/assets/images/user_rankings/6496ce6f8c6f81687604847.png"
                                                    alt="image">
                                            </div>
                                        </div>
                                        <h4 class="invest-badge__title">
                                            Silver
                                        </h4>
                                        <p class=invest-badge__subtitle>Bonus - $10.00</p>
                                        <ul
                                            class="invest-badge__list invest-badge__details  invest-badge__details-1 invest-badge__detail_two">
                                            <li class="d-flex "><span>Level </span>
                                                <span>: 1</span>
                                            </li>
                                            <li class="d-flex "><span>BV Left </span>
                                                <span>: 1,000.00</span>
                                            </li>
                                            <li class="d-flex "><span>BV Left </span>
                                                <span>: 1,000.00</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="invest-badge text-center">
                                        <div class="invest-badge__thumb">
                                            <div class="invest-badge__thumb__mask badge-lock" data-progress="0">
                                                <img src="https://script.viserlab.com/mlmlab/assets/images/user_rankings/6496ceae7aa3e1687604910.png"
                                                    alt="image">
                                            </div>
                                        </div>
                                        <h4 class="invest-badge__title">
                                            Silver Pro
                                        </h4>
                                        <p class=invest-badge__subtitle>Bonus - $5.00</p>
                                        <ul
                                            class="invest-badge__list invest-badge__details  invest-badge__details-2 invest-badge__detail_two">
                                            <li class="d-flex "><span>Level </span>
                                                <span>: 2</span>
                                            </li>
                                            <li class="d-flex "><span>BV Left </span>
                                                <span>: 500.00</span>
                                            </li>
                                            <li class="d-flex "><span>BV Left </span>
                                                <span>: 500.00</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="invest-badge text-center">
                                        <div class="invest-badge__thumb">
                                            <div class="invest-badge__thumb__mask badge-lock" data-progress="0">
                                                <img src="https://script.viserlab.com/mlmlab/assets/images/user_rankings/6496cec192aa21687604929.png"
                                                    alt="image">
                                            </div>
                                        </div>
                                        <h4 class="invest-badge__title">
                                            Gold
                                        </h4>
                                        <p class=invest-badge__subtitle>Bonus - $2.00</p>
                                        <ul
                                            class="invest-badge__list invest-badge__details  invest-badge__details-3 invest-badge__detail_one">
                                            <li class="d-flex "><span>Level </span>
                                                <span>: 3</span>
                                            </li>
                                            <li class="d-flex "><span>BV Left </span>
                                                <span>: 200.00</span>
                                            </li>
                                            <li class="d-flex "><span>BV Left </span>
                                                <span>: 200.00</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="invest-badge text-center">
                                        <div class="invest-badge__thumb">
                                            <div class="invest-badge__thumb__mask badge-lock" data-progress="0">
                                                <img src="https://script.viserlab.com/mlmlab/assets/images/user_rankings/6496ced357d951687604947.png"
                                                    alt="image">
                                            </div>
                                        </div>
                                        <h4 class="invest-badge__title">
                                            Gold Pro
                                        </h4>
                                        <p class=invest-badge__subtitle>Bonus - $1.00</p>
                                        <ul
                                            class="invest-badge__list invest-badge__details  invest-badge__details-4 invest-badge__detail_two">
                                            <li class="d-flex "><span>Level </span>
                                                <span>: 4</span>
                                            </li>
                                            <li class="d-flex "><span>BV Left </span>
                                                <span>: 100.00</span>
                                            </li>
                                            <li class="d-flex "><span>BV Left </span>
                                                <span>: 100.00</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                    <div class="invest-badge text-center">
                                        <div class="invest-badge__thumb">
                                            <div class="invest-badge__thumb__mask badge-lock" data-progress="0">
                                                <img src="https://script.viserlab.com/mlmlab/assets/images/user_rankings/6496cee6c400d1687604966.png"
                                                    alt="image">
                                            </div>
                                        </div>
                                        <h4 class="invest-badge__title">
                                            Platinum
                                        </h4>
                                        <p class=invest-badge__subtitle>Bonus - $0.50</p>
                                        <ul
                                            class="invest-badge__list invest-badge__details  invest-badge__details-1 invest-badge__detail_two">
                                            <li class="d-flex "><span>Level </span>
                                                <span>: 5</span>
                                            </li>
                                            <li class="d-flex "><span>BV Left </span>
                                                <span>: 50.00</span>
                                            </li>
                                            <li class="d-flex "><span>BV Left </span>
                                                <span>: 50.00</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <script>
        (function($) {
            "use strict";

            var elements = $('.invest-badge__thumb__mask');
            elements.each(function(index, element) {
                let progress = $(element).data('progress');
                element.style.setProperty('--before-height', `${progress}%`);
            });

        })(jQuery);
    </script>

@endsection
