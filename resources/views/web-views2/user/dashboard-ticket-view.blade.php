@extends('web-views2.partials.dashboard-app')
@section('content')
            <div class="dashboard-container">
                <div class="dashboard-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card custom--card">
                                <div
                                    class="card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
                                    <h5>
                                        <span class="badge badge--success">Open</span> [Ticket#945924] agsrdvdr
                                    </h5>
                                    <button class="btn btn--danger btn-sm confirmationBtn" type="button"
                                        data-question="Are you sure to close this ticket?"
                                        data-action="https://script.viserlab.com/mlmlab/ticket/close/68"><i
                                            class="fa fa-lg fa-times-circle"></i>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="https://script.viserlab.com/mlmlab/ticket/reply/68"
                                        enctype="multipart/form-data">
                                        <input type="hidden" name="_token"
                                            value="fLx2nlrI4FszFHIIk7eUx24iUq6cvUX6v7ajNWgQ">
                                        <div class="row justify-content-between">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control form--control"
                                                        rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-end mb-sm-0 mb-1">
                                            <button type="button" class="btn btn--base btn--sm addFile w-auto h-auto"><i
                                                    class="fa fa-plus"></i>
                                                Add New</button>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label mb-0">Attachments</label> <small
                                                class="text--danger">Max 5 files can be uploaded. Maximum upload size is
                                                256M</small>
                                            <input type="file" name="attachments[]"
                                                class="form-control form--control h-auto" />
                                            <div id="fileUploadsContainer"></div>
                                            <p class="my-2 ticket-attachments-message text-muted">
                                                Allowed File Extensions: .jpg, .jpeg,
                                                .png, .pdf, .doc,
                                                .docx </p>
                                        </div>
                                        <button type="submit" class="btn btn--base w-100"> <i class="fa fa-reply"></i>
                                            Reply</button>
                                    </form>
                                </div>
                            </div>

                            <div class="card mt-4">
                                <div class="card-body">
                                    <div class="row border border-primary border-radius-3 my-3 py-3 mx-2">
                                        <div class="col-md-3 border-end text-end">
                                            <h5 class="my-3">prince kumar</h5>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-muted fw-bold my-3">
                                                Posted on Tuesday, 21st November 2023 @ 09:39
                                            </p>
                                            <p>sbdavsr</p>
                                            <div class="mt-2">
                                                <a href="https://script.viserlab.com/mlmlab/ticket/download/eyJpdiI6Imt1VTVlbThxdXVrY2d1R0ZrUy93aGc9PSIsInZhbHVlIjoiNUtFZXUwOHVqV2R0UUp1aG84aTVudz09IiwibWFjIjoiNWMyYzliM2IwMzgxYjgyY2RjYjQxMjc0Njk5M2Q0ZjYwODg1NDllMTc1YTZkMDRkY2FiZWExYzA2MTlmODU1MyIsInRhZyI6IiJ9"
                                                    class="me-3"><i class="fa fa-file"></i> Attachment 1 </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal fade" id="confirmationModal" role="dialog" tabindex="-1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Confirmation Alert!</h5>
                                <button class="close" data-bs-dismiss="modal" type="button" aria-label="Close">
                                    <i class="las la-times"></i>
                                </button>
                            </div>
                            <form action="" method="POST">
                                <input type="hidden" name="_token" value="fLx2nlrI4FszFHIIk7eUx24iUq6cvUX6v7ajNWgQ">
                                <div class="modal-body">
                                    <p class="question"></p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn--dark  btn--sm " data-bs-dismiss="modal"
                                        type="button">No</button>
                                    <button class="btn  btn--base btn--sm " type="submit">Yes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

    <script>
        (function($) {
            "use strict";
            $(document).on('click', '.confirmationBtn', function() {
                var modal = $('#confirmationModal');
                let data = $(this).data();
                modal.find('.question').text(`${data.question}`);
                modal.find('form').attr('action', `${data.action}`);
                modal.modal('show');
            });
        })(jQuery);
    </script>
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
                        <input type="file" name="attachments[]" class="form-control form--control h-auto" required />
                        <button type="button" class="input-group-text btn--danger remove-btn h-auto w-auto"><i class="las la-times"></i></button>
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
