@extends('web-views2.partials.dashboard-app')
@section('content')
            <div class="dashboard-container">
                <div class="dashboard-inner">
                    <div class="row justify-content-center mt-4">
                        <div class="col-md-12">
                            <div class="mb-4">
                                <h3 class="mb-2">Change Password</h3>
                            </div>
                            <div class="card custom--card">
                                <div class="card-body">
                                    <form action="" method="post">
                                        <input type="hidden" name="_token"
                                            value="fLx2nlrI4FszFHIIk7eUx24iUq6cvUX6v7ajNWgQ">
                                        <div class="form-group">
                                            <label class="form-label">Current Password</label>
                                            <input type="password" class="form-control form--control"
                                                name="current_password" required autocomplete="current-password">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control form--control" name="password"
                                                required autocomplete="current-password">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control form--control"
                                                name="password_confirmation" required autocomplete="current-password">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn--base w-100">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection