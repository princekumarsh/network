@extends('web-views2.partials.dashboard-app')
@section('content')
            <div class="dashboard-container">
                <div class="dashboard-inner">
                    <div class="mb-4">
                        <div class="d-flex justify-content-between">
                            <h3 class="mb-2">E-pin Recharge</h3>
                            <span>
                                <a href="https://script.viserlab.com/mlmlab/user/e-pin/recharge/log"
                                    class="btn btn--base btn--smd">
                                    Recharge Logs </a>
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                                        <form action="https://script.viserlab.com/mlmlab/user/e-recharge" method="POST">
                                            <input type="hidden" name="_token"
                                                value="9YEsQNTJg1LnGqkZekAgF2scaTun8A9AgTciPJj2">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Enter Pin"
                                                    name="pin" required>
                                                <button type="submit" class="btn btn--base">Recharge Now</button>
                                            </div>
                                        </form>
                                        <button data-bs-toggle="modal" data-bs-target="#generatePin"
                                            class="btn btn--base"><i class="fa fa-fw fa-paper-plane"></i> Create
                                            Pin</button>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion table--acordion mt-4" id="transactionAccordion">
                                <div class="accordion-body text-center">
                                    <h4 class="text--muted"><i class="far fa-frown"></i> Data not found</h4>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

                <div class="modal fade custom--modal" id="generatePin" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Created Pin</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="la la-times"></i>
                                </button>
                            </div>
                            <form action="https://script.viserlab.com/mlmlab/user/pin/generate" method="post">
                                <input type="hidden" name="_token" value="9YEsQNTJg1LnGqkZekAgF2scaTun8A9AgTciPJj2">
                                <div class="modal-body">
                                    <div class="contact-form-group">
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control form--control" name="amount"
                                                placeholder="Enter Amount" value="" step="any" required="">
                                            <div class="input-group-text">
                                                USD
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn--dark" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn--base">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection



    
