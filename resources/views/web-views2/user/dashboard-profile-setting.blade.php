@extends('web-views2.partials.dashboard-app')
@section('content')

            <div class="dashboard-container">
                <div class="dashboard-inner">
                    <div class="mb-4">
                        <h3 class="mb-2">Profile</h3>
                    </div>
                    <div class="card custom--card">
                        <div class="card-body">
                            <form class="register" action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="fLx2nlrI4FszFHIIk7eUx24iUq6cvUX6v7ajNWgQ">
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control form--control" name="firstname"
                                            value="prince" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control form--control" name="lastname"
                                            value="kumar" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="form-label">E-mail Address</label>
                                        <input class="form-control form--control"
                                            value="princekumarsh@gmail.com" readonly>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="form-label">Mobile Number</label>
                                        <input class="form-control form--control"
                                            value="8210600193" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control form--control" name="address"
                                            value="Patna">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="form-label">State</label>
                                        <input type="text" class="form-control form--control" name="state"
                                            value="Bihar">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label class="form-label">Zip Code</label>
                                        <input type="text" class="form-control form--control" name="zip" value="800027">
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control form--control" name="city" value="PATNA">
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label class="form-label">Country</label>
                                        <input class="form-control form--control" value="India" disabled>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="image" class="form-label">Profile Picture</label>
                                    <input type="file" name="image" id="image" class="form-control form--control"
                                        accept=".png, .jpg, .jpeg">

                                </div>

                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn--base w-100">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
@endsection