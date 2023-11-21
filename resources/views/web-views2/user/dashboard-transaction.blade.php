@extends('web-views2.partials.dashboard-app')
@section('content')
            <div class="dashboard-container">
                <div class="dashboard-inner">
                    <div class="mb-4">
                        <h3 class="mb-2">Transactions</h3>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="show-filter mb-3 text-end">
                                <button type="button" class="btn btn--base showFilterBtn btn-sm"><i
                                        class="las la-filter"></i>
                                    Filter</button>
                            </div>
                            <div class="card responsive-filter-card mb-4">
                                <div class="card-body">
                                    <form action="">
                                        <div class="d-flex flex-wrap gap-4">
                                            <div class="flex-grow-1">
                                                <label>Transaction Number</label>
                                                <input type="text" name="search" value=""
                                                    class="form-control form--control">
                                            </div>
                                            <div class="flex-grow-1">
                                                <label>Type</label>
                                                <select name="trx_type" class="form-select form--control">
                                                    <option value="">All</option>
                                                    <option value="+">Plus</option>
                                                    <option value="-">Minus</option>
                                                </select>
                                            </div>
                                            <div class="flex-grow-1">
                                                <label>Remark</label>
                                                <select class="form-select form--control" name="remark">
                                                    <option value="">Any</option>
                                                    <option value="balance_add">
                                                        Balance add</option>
                                                    <option value="balance_subtract">
                                                        Balance subtract</option>
                                                    <option value="balance_transfer">
                                                        Balance transfer</option>
                                                    <option value="binary_commission">
                                                        Binary commission</option>
                                                    <option value="deposit">
                                                        Deposit</option>
                                                    <option value="epin">
                                                        Epin</option>
                                                    <option value="purchased_plan">
                                                        Purchased plan</option>
                                                    <option value="ranking_bonus">
                                                        Ranking bonus</option>
                                                    <option value="referral_commission">
                                                        Referral commission</option>
                                                    <option value="withdraw">
                                                        Withdraw</option>
                                                    <option value="withdraw_reject">
                                                        Withdraw reject</option>
                                                </select>
                                            </div>
                                            <div class="flex-grow-1 align-self-end">
                                                <button class="btn btn--base w-100"><i class="las la-filter"></i>
                                                    Filter</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="accordion table--acordion" id="transactionAccordion">
                                <div class="accordion-body text-center">
                                    <h4 class="text--muted"><i class="far fa-frown"></i> Data not found</h4>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
@endsection
