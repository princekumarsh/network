@extends('layouts.front-end.app')
@section('content')


    <section class="page-header bg_img"
        data-background="https://script.viserlab.com/mlmlab/assets/images/frontend/breadcrumb/63821bed5b0bb1669471213.jpg">
        <div class="container">
            <div class="page-header-wrapper">
                <h2 class="title">Login</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="https://script.viserlab.com/mlmlab">
                            Home </a>
                    </li>
                    <li>Login</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="account-section padding-bottom padding-top">
        <div class="container">
            <div class="account-wrapper">
                <div class="signup-area account-area">
                    <div class="row m-0 flex-wrap-reverse">
                        <div class="col-lg-6 p-0">
                            <div class="change-catagory-area bg_img"
                                data-background="https://script.viserlab.com/mlmlab/assets/images/frontend/login/63821b0737fa81669470983.jpg">
                                <h4 class="title">Welcome To MLMLAB</h4>
                                <p>Haven't registered yet! don't worry just fillip all the information below and get
                                    your account now.</p>
                                <a class="custom-button account-control-button"
                                    href="{{route('register')}}">Register Now</a>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <div class="common-form-style bg-one login-account">
                                <h4 class="title">Login Account</h4>
                                <p class="mb-sm-4 mb-3">To login into the site please enter your username and password
                                </p>
                                <form class="create-account-form verify-gcaptcha" method="post"
                                    action="https://script.viserlab.com/mlmlab/user/login">
                                    <input type="hidden" name="_token" value="9aYe2sHx3yJtebAUVo38xddRkovrkjWZ0BGpa1Qa">
                                    <div class="form-group">
                                        <label class="form-label">Email or Username</label>
                                        <input name="username" type="text" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Password</label>
                                        <input id="myInputThree" name="password" type="password" required>
                                    </div>

                                    <div class="mb-3">

                                        <script data-cfasync="false"
                                            src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
                                        </script>
                                        <script src="https://www.google.com/recaptcha/api.js"></script>
                                        <div class="g-recaptcha" data-sitekey="6LdPC88fAAAAADQlUf_DV6Hrvgm-pZuLJFSLDOWV"
                                            data-callback="verifyCaptcha"></div>
                                        <div id="g-recaptcha-error"></div>
                                    </div>

                                    <div class="form-group d-flex justify-content-between flex-wrap">
                                        <div class="form--check">
                                            <input class="form-check-input" id="remember" name="remember"
                                                type="checkbox">
                                            <label class="form-check-label" for="remember">Remember Me</label>
                                        </div>
                                        <a class="text--base"
                                            href="https://script.viserlab.com/mlmlab/user/password/reset">Forget
                                            Password?</a>
                                    </div>

                                    <div class="form-group mb-0">
                                        <input class="w-100 mt-0" type="submit" value="Login">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script>
        (function($) {
                "use strict"
                $('.verify-gcaptcha').on('submit', function() {
                    var response = grecaptcha.getResponse();
                    if (response.length == 0) {
                        document.getElementById('g-recaptcha-error').innerHTML = '<span class="text-danger">Captcha field is required.</span>';
                        return false;
                    }
                    return true;
                });
            })(jQuery);
    </script>


    <link rel="stylesheet" href="https://script.viserlab.com/mlmlab/assets/global/css/iziToast.min.css">
    <script src="https://script.viserlab.com/mlmlab/assets/global/js/iziToast.min.js"></script>

    <script>
        "use strict";
    function notify(status,message) {
        if (typeof message == 'string') {
            iziToast[status]({
                message: message,
                position: "topRight"
            });
        } else {
            $.each(message, function(i, val) {
                iziToast[status]({
                    message: val,
                    position: "topRight"
                });
            });
        }
    }
    </script>


    <script>
        (function($) {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "https://script.viserlab.com/mlmlab/change/" + $(this).val();
            });

            var inputElements = $('input,select');
            $.each(inputElements, function(index, element) {
                element = $(element);
                var type = element.attr('type');
                if (type != 'checkbox') {
                    element.closest('.form-group').find('label').attr('for', element.attr('name'));
                    element.attr('id', element.attr('name'))
                }
            });

            $('.policy').on('click', function() {
                $.get('https://script.viserlab.com/mlmlab/cookie/accept', function(response) {
                    $('.cookies-card').addClass('d-none');
                });
            });

            setTimeout(function() {
                $('.cookies-card').removeClass('hide')
            }, 2000);

            $.each($('input, select, textarea'), function(i, element) {

                if (element.hasAttribute('required')) {
                    $(element).closest('.form-group').find('label').addClass('required');
                }

            });

            $('.showFilterBtn').on('click', function() {
                $('.responsive-filter-card').slideToggle();
            });

            Array.from(document.querySelectorAll('table')).forEach(table => {
                let heading = table.querySelectorAll('thead tr th');
                Array.from(table.querySelectorAll('tbody tr')).forEach(row => {
                    Array.from(row.querySelectorAll('td')).forEach((column, i) => {
                        (column.colSpan == 100) || column.setAttribute('data-label', heading[i].innerText)
                    });
                });
            });

        })(jQuery);
    </script>


    <script>
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5fe0b9b2a8a254155ab5421d/1eq2tap1m';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
  })();
    </script>

    <script>
        if (window.top != window.self) {
    document.body.innerHTML += '<div style="position:fixed;top:0;width:100%;z-index:9999999;background:#f8d7da;color:#721c24;text-align:center; padding: 20px;"><p style="font-size:20px; font-weight: bold;">You are using this website under an external iframe!!</p><p style="font-size:16px; margin-top: 20px;">for a better experience, please browse directly instead of an external iframe.</p><a href="'+window.self.location+'" target="_blank" style=" margin-top:20px; color: #fff;background-color: #dc3545; padding: 5px 10px; border-radius: 5px; text-decoration: none;">Browse Directly</a></div>';
}
    </script>


    <script>
        adroll_adv_id = "YXRNNTO7ZBAMFBH67UUE5M";
    adroll_pix_id = "MMQQDWGN25EXPHGRPA3NLR";
    adroll_version = "2.0";
    (function(w, d, e, o, a) {
        w.__adroll_loaded = true;
        w.adroll  = w.adroll  || [];
        w.adroll.f = [ 'setProperties', 'identify', 'track' ];
        var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id
                + "/roundtrip.js";
        for (a = 0; a < w.adroll.f.length; a++) {
            w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function(n) {
                return function() {
                    w.adroll.push([ n, arguments ])
                }
            })(w.adroll.f[a])
        }
        e = d.createElement('script');
        o = d.getElementsByTagName('script')[0];
        e.async  = 1;
        e.src  = roundtripUrl;
        o.parentNode.insertBefore(e, o);
    })(window, document);
    adroll.track("pageView");
    </script>


    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8940522890323334"
        crossorigin="anonymous"></script>

@endsection