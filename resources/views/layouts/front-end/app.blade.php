<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> MLMLAB - Home</title>
    <meta name="title" Content="MLMLAB - Home">

    <meta name="description"
        content="MLMLab, a professional Multilevel Marketing Solution that comes with PHP laravel. It’s developed for those people who want to start their Multilevel business website.">
    <meta name="keywords"
        content="admin,blog,aaaa,ddd,aaa,viserlab,viserscript,mlm,mlmlab,multilevel,marketing,platform">
    <link type="image/x-icon" href="https://script.viserlab.com/mlmlab/assets/images/logoIcon/favicon.png"
        rel="shortcut icon">


    <link href="https://script.viserlab.com/mlmlab/assets/images/logoIcon/logo.png" rel="apple-touch-icon">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="MLMLAB - Home">

    <meta itemprop="name" content="MLMLAB - Home">
    <meta itemprop="description"
        content="MLMLab, a professional Multilevel Marketing Solution that comes with PHP laravel. It’s developed for those people who want to start their Multilevel business website.">
    <meta itemprop="image" content="https://script.viserlab.com/mlmlab/assets/images/seo/645b85642df9b1683719524.png">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Viserlab Limited">
    <meta property="og:description"
        content="MLMLab, a professional Multilevel Marketing Solution that comes with PHP laravel. It’s developed for those people who want to start their Multilevel business website.">
    <meta property="og:image"
        content="https://script.viserlab.com/mlmlab/assets/images/seo/645b85642df9b1683719524.png" />
    <meta property="og:image:type" content="png" />
    <meta property="og:image:width" content="1180" />
    <meta property="og:image:height" content="600" />
    <meta property="og:url" content="https://script.viserlab.com/mlmlab">

    <meta name="twitter:card" content="summary_large_image">
    <!-- Bootstrap CSS -->
    <link href="https://script.viserlab.com/mlmlab/assets/global/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://script.viserlab.com/mlmlab/assets/global/css/all.min.css" rel="stylesheet">

    <link href="https://script.viserlab.com/mlmlab/assets/global/css/line-awesome.min.css" rel="stylesheet" />

    <link href="https://script.viserlab.com/mlmlab/assets/templates/basic/css/animate.css" rel="stylesheet">
    <link href="https://script.viserlab.com/mlmlab/assets/templates/basic/css/nice-select.css" rel="stylesheet">
    <link href="https://script.viserlab.com/mlmlab/assets/templates/basic/css/swiper.min.css" rel="stylesheet">
    <link href="https://script.viserlab.com/mlmlab/assets/templates/basic/css/magnific-popup.css" rel="stylesheet">
    <link href="https://script.viserlab.com/mlmlab/assets/templates/basic/css/odometer.css" rel="stylesheet">
    <link href="https://script.viserlab.com/mlmlab/assets/templates/basic/css/main.css" rel="stylesheet">
    <link href="https://script.viserlab.com/mlmlab/assets/templates/basic/css/custom.css" rel="stylesheet">


    <link href="https://script.viserlab.com/mlmlab/assets/templates/basic/css/color.php?color=1e90fF" rel="stylesheet">
</head>

<body>


    <div class="overlay"></div>
    <a class="scrollToTop" href="#0"><i class="flaticon-arrow"></i></a>
    <div class="overlayer" id="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>


    @include('layouts.front-end.partials._header')
    @yield('content')
    @include('layouts.front-end.partials._footer')




    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://script.viserlab.com/mlmlab/assets/global/js/jquery-3.6.0.min.js"></script>
    <script src="https://script.viserlab.com/mlmlab/assets/global/js/bootstrap.bundle.min.js"></script>

    <!-- magnific popup plugin -->
    <script src="https://script.viserlab.com/mlmlab/assets/templates/basic/js/modernizr-3.6.0.min.js"></script>
    <script src="https://script.viserlab.com/mlmlab/assets/templates/basic/js/magnific-popup.min.js"></script>
    <script src="https://script.viserlab.com/mlmlab/assets/templates/basic/js/isotope.pkgd.min.js"></script>
    <script src="https://script.viserlab.com/mlmlab/assets/templates/basic/js/wow.min.js"></script>
    <script src="https://script.viserlab.com/mlmlab/assets/templates/basic/js/swiper.min.js"></script>
    <script src="https://script.viserlab.com/mlmlab/assets/templates/basic/js/odometer.min.js"></script>
    <script src="https://script.viserlab.com/mlmlab/assets/templates/basic/js/viewport.jquery.js"></script>
    <script src="https://script.viserlab.com/mlmlab/assets/templates/basic/js/nice-select.js"></script>

    <!-- dashboard custom js -->
    <script src="https://script.viserlab.com/mlmlab/assets/templates/basic/js/app.js"></script>


    <script>
        (function($) {
                "use strict";
                $('.subscribeBtn').click(function() {
                    var modal = $('#purchaseModal');
                    var price = $(this).data('amount');
                    var id = $(this).data('id');
                    modal.find('[name=amount]').val(price);
                    modal.find('[name=id]').val(id);
                    modal.modal('show');
                    $('[name=payment_method]').trigger('change');
                });

                $(document).on('change', '[name=payment_method]', function() {
                    var amount = $('[name=amount]').val();
                    if ($(this).val() != 'balance' && amount) {
                        var resource = $('select[name=payment_method] option:selected').data('gateway');
                        var max_amount = parseFloat(resource.max_amount);
                        var min_amount = parseFloat(resource.min_amount);
                        var fixed_charge = parseFloat(resource.fixed_charge);
                        var percent_charge = parseFloat(resource.percent_charge);
                        var charge = parseFloat(fixed_charge + (amount * percent_charge / 100)).toFixed(2);
                        $('.charge').text(charge);
                        $('.gateway-rate').text(parseFloat(resource.rate));
                        $('.gateway-info').removeClass('d-none');
                        $('.gateway-limit').addClass('d-none');
                        $('.rate-info').removeClass('d-none');
                        if (resource.currency == 'USD') {
                            $('.rate-info').addClass('d-none');
                        }
                        if (amount < min_amount || amount > max_amount) {
                            $('.gateway-limit').text(`${resource.name} cannot process ${amount} USD due to transaction limit. Gateway limit: ${min_amount} USD - ${max_amount} USD`);
                            $('.gateway-info').addClass('d-none');
                            $('.gateway-limit').removeClass('d-none');
                        }
                        $('.method_currency').text(resource.currency);
                        $('.total').text(parseFloat(charge) + parseFloat(amount));
                    } else {
                        $('.gateway-info').addClass('d-none');
                        $('.gateway-limit').addClass('d-none');
                    }
                });
            })(jQuery)
    </script>
    <script>
        'use strict';
        (function($) {
            $(document).on('submit', '.subscribe-form', function(e) {
                e.preventDefault();
                var email = $("#email").val();
                if (email) {
                    $.ajax({
                        headers: {
                            "X-CSRF-TOKEN": "VBr7qUXJbsQNhR3Hmfb7AARaJtQtKPxLLmRUGtJm",
                        },
                        url: "https://script.viserlab.com/mlmlab/subscriber",
                        method: "POST",
                        data: {
                            email: email
                        },
                        success: function(response) {
                            if (response.success) {
                                notify('success', response.success);
                                $("#email").val('');
                            } else {
                                $.each(response.error, function(i, val) {
                                    notify('error', val);
                                });
                            }
                        }
                    });
                } else {
                    notify('error', "Please Input Your Email");
                }
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

</body>

</html>