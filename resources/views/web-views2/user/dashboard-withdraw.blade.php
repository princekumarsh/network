@extends('web-views2.partials.dashboard-app')
@section('content')
            <div class="dashboard-container">
                <div class="dashboard-inner">
                    <div class="mb-4">
                        <h3 class="dashboard-title">KYC Submission <i
                                class="fas fa-question-circle text-muted text--small" data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="The system requires you to submit KYC (know your client) information. Your submitted data will be verified by the system\s admin. If all of your information is correct, the admin will approve the KYC data and you'll be able to make withdrawal requests"></i>
                        </h3>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card custom--card">
                                <div class="card-body">
                                    <form action="https://script.viserlab.com/mlmlab/user/kyc-submit" method="post"
                                        enctype="multipart/form-data">
                                        <input type="hidden" name="_token"
                                            value="9YEsQNTJg1LnGqkZekAgF2scaTun8A9AgTciPJj2">
                                        <div class="form-group">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" class="form-control form--control" name="full_name"
                                                value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">NID Number</label>
                                            <input type="text" class="form-control form--control" name="nid_number"
                                                value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Gender</label>
                                            <select class="form-control form--control" name="gender" required>
                                                <option value="">Select One</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">You Hobby</label>
                                            <div class="form-check">
                                                <input class="form-check-input" name="you_hobby[]" type="checkbox"
                                                    value="Programming" id="you_hobby_programming">
                                                <label class="form-check-label"
                                                    for="you_hobby_programming">Programming</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" name="you_hobby[]" type="checkbox"
                                                    value="Gardening" id="you_hobby_gardening">
                                                <label class="form-check-label"
                                                    for="you_hobby_gardening">Gardening</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" name="you_hobby[]" type="checkbox"
                                                    value="Traveling" id="you_hobby_traveling">
                                                <label class="form-check-label"
                                                    for="you_hobby_traveling">Traveling</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" name="you_hobby[]" type="checkbox"
                                                    value="Others" id="you_hobby_others">
                                                <label class="form-check-label" for="you_hobby_others">Others</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">NID Photo</label>
                                            <input type="file" class="form-control form--control" name="nid_photo"
                                                required accept=" .jpg,  .png, ">
                                            <pre class="text--base mt-1">Supported mimes: jpg,png</pre>
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
    <script>
        "use strict";
            iziToast.error({message:"You are not KYC verified. For being KYC verified, please provide these information", position: "topRight"});
    </script>


@endsection