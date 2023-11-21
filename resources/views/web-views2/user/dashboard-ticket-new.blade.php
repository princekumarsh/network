@extends('web-views2.partials.dashboard-app')
@section('content')
            <div class="dashboard-container">
                <div class="dashboard-inner">
                    <div class="text-end mb-3 d-flex flex-wrap justify-content-between gap-1">
                        <h3>Open Ticket</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card custom--card">
                                <div class="card-body">
                                    <form action="https://script.viserlab.com/mlmlab/ticket/create" method="post"
                                        enctype="multipart/form-data">
                                        <input type="hidden" name="_token"
                                            value="fLx2nlrI4FszFHIIk7eUx24iUq6cvUX6v7ajNWgQ">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Name</label>
                                                <input type="text" name="name" value="prince kumar"
                                                    class="form-control form--control" required readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Email Address</label>
                                                <input type="email" name="email"
                                                    value="[Email is protected for the demo]"
                                                    class="form-control form--control" required readonly>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label class="form-label">Subject</label>
                                                <input type="text" name="subject" value=""
                                                    class="form-control form--control" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Priority</label>
                                                <select name="priority" class="form-control form--control" required>
                                                    <option value="3">High</option>
                                                    <option value="2">Medium</option>
                                                    <option value="1">Low</option>
                                                </select>
                                            </div>
                                            <div class="col-12 form-group">
                                                <label class="form-label">Message</label>
                                                <textarea name="message" id="inputMessage" rows="6"
                                                    class="form-control form--control" required></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="text-end">
                                                <button type="button" class="btn btn--base btn--sm addFile">
                                                    <i class="fa fa-plus"></i> Add New </button>
                                            </div>
                                            <div class="file-upload">
                                                <label class="form-label">Attachments</label> <small
                                                    class="text--danger">Max 5 files can be uploaded. Maximum upload
                                                    size is 256M</small>
                                                <input type="file" name="attachments[]" id="inputAttachments"
                                                    class="form-control form--control mb-2" />
                                                <div id="fileUploadsContainer"></div>
                                                <p class="ticket-attachments-message text-muted">
                                                    Allowed File Extensions: .jpg, .jpeg, .png,
                                                    .pdf, .doc, .docx </p>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn--base w-100" type="submit"><i
                                                    class="fa fa-paper-plane"></i>&nbsp;Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <script>
        (function($) {
            "use strict";
            var fileAdded = 0;
            $('.addFile').on('click', function() {
                if (fileAdded >= 4) {
                    notify('error', 'You\'ve added maximum number of file');
                    return false;
                }
                fileAdded++;
                $("#fileUploadsContainer").append(`
                    <div class="input-group my-3">
                        <input type="file" name="attachments[]" class="form-control form--control" required />
                        <button type="button" class="input-group-text btn--danger remove-btn"><i class="las la-times"></i></button>
                    </div>
                `)
            });
            $(document).on('click', '.remove-btn', function() {
                fileAdded--;
                $(this).closest('.input-group').remove();
            });
        })(jQuery);
    </script>


@endsection