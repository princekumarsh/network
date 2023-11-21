@extends('web-views2.partials.dashboard-app')
@section('content')

<link href="https://script.viserlab.com/mlmlab/assets/templates/basic/users/css/tree.css" rel="stylesheet">
<div class="dashboard-container">

    <div class="dashboard-inner">
        <div class="mb-4">
            <h3 class="mb-2">My Tree</h3>
        </div>

        <div class="mb-4">
            <div class="card custom--card">
                <div class="card-header">
                    <h5 class="text-center">Referrer Link</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                <div class="form-group">
                                    <label class="form-label">Join left</label>
                                    <div class="copy-link">
                                        <input class="copyURL w-100" type="text"
                                            value="https://script.viserlab.com/mlmlab/?ref=princekumarsh&position=left"
                                            readonly>
                                        <span class="copyBoard" id="copyBoard">
                                            <i class="las la-copy"></i>
                                            <strong class="copyText">Copy</strong>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-6">
                            <form>
                                <div class="form-group">
                                    <label class="form-label">Join right</label>
                                    <div class="copy-link">
                                        <input class="copyURL2 w-100" type="text"
                                            value="https://script.viserlab.com/mlmlab/?ref=princekumarsh&position=right"
                                            readonly>
                                        <span class="copyBoard2" id="copyBoard2">
                                            <i class="las la-copy"></i>
                                            <strong class="copyText2">Copy</strong>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card custom--card mt-4 mb-4">
            <div class="card-body">
                <div class="row justify-content-center llll text-center">
                    <div class="w-1">
                        <div class="user showDetails" type="button" data-name="prince kumar"
                            data-treeurl="https://script.viserlab.com/mlmlab/user/tree/princekumarsh" data-status="Free"
                            data-plan=""
                            data-image="https://script.viserlab.com/mlmlab/assets/images/default-member.png"
                            data-refby="bskhgfdhjv,cxjb ghdfksdgljh" data-lpaid="0" data-rpaid="0" data-lfree="0"
                            data-rfree="0" data-lbv="0.00" data-rbv="0.00"><img
                                src="https://script.viserlab.com/mlmlab/assets/images/default-member.png" alt="*"
                                class="free-user">
                            <p class="user-name">princekumarsh</p>
                        </div> <span class="line"></span>
                    </div>
                </div>
                <div class="row justify-content-center llll text-center">
                    <div class="w-2">
                        <div class="user" type="button"><img
                                src="https://script.viserlab.com/mlmlab/assets/images/default.png" alt="*"
                                class="no-user">
                            <p class="user-name">No User</p>
                        </div> <span class="line"></span>
                    </div>
                    <div class="w-2">
                        <div class="user" type="button"><img
                                src="https://script.viserlab.com/mlmlab/assets/images/default.png" alt="*"
                                class="no-user">
                            <p class="user-name">No User</p>
                        </div> <span class="line"></span>
                    </div>
                </div>
                <div class="row justify-content-center llll text-center">
                    <div class="w-4">
                        <div class="user" type="button"><img
                                src="https://script.viserlab.com/mlmlab/assets/images/default.png" alt="*"
                                class="no-user">
                            <p class="user-name">No User</p>
                        </div> <span class="line"></span>
                    </div>
                    <div class="w-4">
                        <div class="user" type="button"><img
                                src="https://script.viserlab.com/mlmlab/assets/images/default.png" alt="*"
                                class="no-user">
                            <p class="user-name">No User</p>
                        </div> <span class="line"></span>
                    </div>
                    <div class="w-4">
                        <div class="user" type="button"><img
                                src="https://script.viserlab.com/mlmlab/assets/images/default.png" alt="*"
                                class="no-user">
                            <p class="user-name">No User</p>
                        </div> <span class="line"></span>
                    </div>
                    <div class="w-4">
                        <div class="user" type="button"><img
                                src="https://script.viserlab.com/mlmlab/assets/images/default.png" alt="*"
                                class="no-user">
                            <p class="user-name">No User</p>
                        </div> <span class="line"></span>
                    </div>
                </div>
                <div class="row justify-content-center llll text-center">
                    <div class="w-8">
                        <div class="user" type="button"><img
                                src="https://script.viserlab.com/mlmlab/assets/images/default.png" alt="*"
                                class="no-user">
                            <p class="user-name">No User</p>
                        </div> <span class="line"></span>
                    </div>
                    <div class="w-8">
                        <div class="user" type="button"><img
                                src="https://script.viserlab.com/mlmlab/assets/images/default.png" alt="*"
                                class="no-user">
                            <p class="user-name">No User</p>
                        </div> <span class="line"></span>
                    </div>
                    <div class="w-8">
                        <div class="user" type="button"><img
                                src="https://script.viserlab.com/mlmlab/assets/images/default.png" alt="*"
                                class="no-user">
                            <p class="user-name">No User</p>
                        </div> <span class="line"></span>
                    </div>
                    <div class="w-8">
                        <div class="user" type="button"><img
                                src="https://script.viserlab.com/mlmlab/assets/images/default.png" alt="*"
                                class="no-user">
                            <p class="user-name">No User</p>
                        </div> <span class="line"></span>
                    </div>
                    <div class="w-8">
                        <div class="user" type="button"><img
                                src="https://script.viserlab.com/mlmlab/assets/images/default.png" alt="*"
                                class="no-user">
                            <p class="user-name">No User</p>
                        </div> <span class="line"></span>
                    </div>
                    <div class="w-8">
                        <div class="user" type="button"><img
                                src="https://script.viserlab.com/mlmlab/assets/images/default.png" alt="*"
                                class="no-user">
                            <p class="user-name">No User</p>
                        </div> <span class="line"></span>
                    </div>
                    <div class="w-8">
                        <div class="user" type="button"><img
                                src="https://script.viserlab.com/mlmlab/assets/images/default.png" alt="*"
                                class="no-user">
                            <p class="user-name">No User</p>
                        </div> <span class="line"></span>
                    </div>
                    <div class="w-8">
                        <div class="user" type="button"><img
                                src="https://script.viserlab.com/mlmlab/assets/images/default.png" alt="*"
                                class="no-user">
                            <p class="user-name">No User</p>
                        </div> <span class="line"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade user-details-modal-area" id="exampleModalCenter" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">User Details</h5>
                    <button class="close" data-bs-dismiss="modal" type="button" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="user-details-modal">
                        <div class="user-details-header">
                            <div class="thumb"><img class="tree_image w-h-100-p" src="#" alt="*"></div>
                            <div class="content">
                                <a class="user-name tree_url tree_name" href=""></a>
                                <span class="user-status tree_status"></span>
                                <span class="user-status tree_plan"></span>
                            </div>
                        </div>
                        <div class="user-details-body text-center">

                            <h6 class="my-3">Referred By: <span class="tree_ref"></span></h6>

                            <table class="table--responsive--md table">
                                <thead>
                                    <th>&nbsp;</th>
                                    <th>LEFT</th>
                                    <th>RIGHT</th>
                                </thead>

                                <tr>
                                    <td>Current BV</td>
                                    <td><span class="lbv"></span></td>
                                    <td><span class="rbv"></span></td>
                                </tr>
                                <tr>
                                    <td>Free Member</td>
                                    <td><span class="lfree"></span></td>
                                    <td><span class="rfree"></span></td>
                                </tr>

                                <tr>
                                    <td>Paid Member</td>
                                    <td><span class="lpaid"></span></td>
                                    <td><span class="rpaid"></span></td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    "use strict";
            (function($) {
                $('.showDetails').on('click', function() {
                    var modal = $('#exampleModalCenter');

                    $('.tree_name').text($(this).data('name'));
                    $('.tree_url').attr({
                        "href": $(this).data('treeurl')
                    });
                    $('.tree_status').text($(this).data('status'));
                    $('.tree_plan').text($(this).data('plan'));
                    $('.tree_image').attr({
                        "src": $(this).data('image')
                    });
                    $('.user-details-header').removeClass('Paid');
                    $('.user-details-header').removeClass('Free');
                    $('.user-details-header').addClass($(this).data('status'));
                    $('.tree_ref').text($(this).data('refby'));
                    $('.lbv').text($(this).data('lbv'));
                    $('.rbv').text($(this).data('rbv'));
                    $('.lpaid').text($(this).data('lpaid'));
                    $('.rpaid').text($(this).data('rpaid'));
                    $('.lfree').text($(this).data('lfree'));
                    $('.rfree').text($(this).data('rfree'));
                    $('#exampleModalCenter').modal('show');
                });

                $('#copyBoard').click(function() {
                    var copyText = document.getElementsByClassName("copyURL");
                    copyText = copyText[0];
                    copyText.select();
                    copyText.setSelectionRange(0, 99999);

                    /*For mobile devices*/
                    document.execCommand("copy");
                    $('.copyText').text('Copied');
                    setTimeout(() => {
                        $('.copyText').text('Copy');
                    }, 2000);
                });
                $('#copyBoard2').click(function() {
                    var copyText = document.getElementsByClassName("copyURL2");
                    copyText = copyText[0];
                    copyText.select();
                    copyText.setSelectionRange(0, 99999);

                    /*For mobile devices*/
                    document.execCommand("copy");
                    $('.copyText2').text('Copied');
                    setTimeout(() => {
                        $('.copyText2').text('Copy');
                    }, 2000);
                });


            })(jQuery);
</script>




@endsection





