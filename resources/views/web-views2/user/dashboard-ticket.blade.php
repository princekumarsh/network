@extends('web-views2.partials.dashboard-app')
@section('content')
    <div class="dashboard-container">
        <div class="dashboard-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-end mb-3 d-flex flex-wrap justify-content-between gap-1">
                        <h3>Support Tickets</h3>
                        <a href="{{route('dashboard_ticket_new')}}"
                            class="btn btn--base btn--smd">Open Support Ticket</a>
                    </div>
                    <div class="card custom--card">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table--responsive--md">
                                    <thead>
                                        <tr>
                                            <th>Subject</th>
                                            <th>Status</th>
                                            <th>Priority</th>
                                            <th>Last Reply</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="https://script.viserlab.com/mlmlab/ticket/view/945924"
                                                    class="fw-bold"> [Ticket#945924]
                                                    agsrdvdr </a>
                                            </td>
                                            <td>
                                                <span class="badge badge--success">Open</span>
                                            </td>
                                            <td>
                                                <span class="badge badge--primary">High</span>
                                            </td>
                                            <td>
                                                27 seconds ago
                                            </td>

                                            <td>
                                                <a href="{{route('dashboard_ticket_view')}}"
                                                    class="btn btn--icon btn--base">
                                                    <i class="fa fa-desktop"></i>
                                                </a>
                                            </td>
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





