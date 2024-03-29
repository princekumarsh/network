<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;




//for maintenance mode
Route::get('maintenance-mode', 'Web\WebController@maintenance_mode')->name('maintenance-mode');


Route::group(['namespace' => 'Web','middleware'=>['maintenance_mode']], function () {
    Route::get('/', 'WebController@home1')->name('home');

    Route::get('quick-view', 'WebController@quick_view')->name('quick-view');
    Route::get('searched-products', 'WebController@searched_products')->name('searched-products');

    Route::group(['middleware'=>['customer']], function () {
        Route::get('checkout-details', 'WebController@checkout_details')->name('checkout-details');
        Route::get('checkout-shipping', 'WebController@checkout_shipping')->name('checkout-shipping')->middleware('customer');
        Route::get('checkout-payment', 'WebController@checkout_payment')->name('checkout-payment')->middleware('customer');
        Route::get('checkout-review', 'WebController@checkout_review')->name('checkout-review')->middleware('customer');
        Route::get('checkout-complete', 'WebController@checkout_complete')->name('checkout-complete')->middleware('customer');
        Route::get('order-placed', 'WebController@order_placed')->name('order-placed')->middleware('customer');
        Route::get('shop-cart', 'WebController@shop_cart')->name('shop-cart');
        Route::post('order_note', 'WebController@order_note')->name('order_note');
        Route::get('digital-product-download/{id}', 'WebController@digital_product_download')->name('digital-product-download')->middleware('customer');
        Route::get('submit-review/{id}','UserProfileController@submit_review')->name('submit-review');
        Route::post('review', 'ReviewController@store')->name('review.store');
        Route::get('deliveryman-review/{id}','ReviewController@delivery_man_review')->name('deliveryman-review');
        Route::post('submit-deliveryman-review','ReviewController@delivery_man_submit')->name('submit-deliveryman-review');
    });

    //wallet payment
    Route::get('checkout-complete-wallet', 'WebController@checkout_complete_wallet')->name('checkout-complete-wallet');

    Route::post('subscription', 'WebController@subscription')->name('subscription');
    Route::get('search-shop', 'WebController@search_shop')->name('search-shop');

    Route::get('categories', 'WebController@all_categories')->name('categories');
    Route::get('category-ajax/{id}', 'WebController@categories_by_category')->name('category-ajax');

    Route::get('brands', 'WebController@all_brands')->name('brands');
    Route::get('sellers', 'WebController@all_sellers')->name('sellers');
    Route::get('seller-profile/{id}', 'WebController@seller_profile')->name('seller-profile');

    Route::get('flash-deals/{id}', 'WebController@flash_deals')->name('flash-deals');
    Route::get('terms', 'WebController@termsandCondition')->name('terms');
    Route::get('privacy-policy', 'WebController@privacy_policy')->name('privacy-policy');
    Route::get('refund-policy', 'WebController@refund_policy')->name('refund-policy');
    Route::get('return-policy', 'WebController@return_policy')->name('return-policy');
    Route::get('cancellation-policy', 'WebController@cancellation_policy')->name('cancellation-policy');

    Route::get('/product/{slug}', 'WebController@product')->name('product');
    Route::get('products', 'WebController@products')->name('products');
    Route::get('orderDetails', 'WebController@orderdetails')->name('orderdetails');
    Route::get('discounted-products', 'WebController@discounted_products')->name('discounted-products');

    Route::post('review-list-product','WebController@review_list_product')->name('review-list-product');
    //Chat with seller from product details
    Route::get('chat-for-product', 'WebController@chat_for_product')->name('chat-for-product');

    Route::get('wishlists', 'WebController@viewWishlist')->name('wishlists')->middleware('customer');
    Route::post('store-wishlist', 'WebController@storeWishlist')->name('store-wishlist');
    Route::post('delete-wishlist', 'WebController@deleteWishlist')->name('delete-wishlist');

    Route::post('/currency', 'CurrencyController@changeCurrency')->name('currency.change');

    Route::get('about-us', 'WebController@about_us')->name('about-us');

    //profile Route
    Route::get('user-account', 'UserProfileController@user_account')->name('user-account');
    Route::post('user-account-update', 'UserProfileController@user_update')->name('user-update');
    Route::post('user-account-picture', 'UserProfileController@user_picture')->name('user-picture');
    Route::get('account-address', 'UserProfileController@account_address')->name('account-address');
    Route::post('account-address-store', 'UserProfileController@address_store')->name('address-store');
    Route::get('account-address-delete', 'UserProfileController@address_delete')->name('address-delete');
    ROute::get('account-address-edit/{id}','UserProfileController@address_edit')->name('address-edit');
    Route::post('account-address-update', 'UserProfileController@address_update')->name('address-update');
    Route::get('account-payment', 'UserProfileController@account_payment')->name('account-payment');
    Route::get('account-oder', 'UserProfileController@account_oder')->name('account-oder');
    Route::get('account-order-details', 'UserProfileController@account_order_details')->name('account-order-details')->middleware('customer');
    Route::get('generate-invoice/{id}', 'UserProfileController@generate_invoice')->name('generate-invoice');
    Route::get('account-wishlist', 'UserProfileController@account_wishlist')->name('account-wishlist'); //add to card not work
    Route::get('refund-request/{id}','UserProfileController@refund_request')->name('refund-request');
    Route::get('refund-details/{id}','UserProfileController@refund_details')->name('refund-details');
    Route::post('refund-store','UserProfileController@store_refund')->name('refund-store');
    Route::get('account-tickets', 'UserProfileController@account_tickets')->name('account-tickets');
    Route::get('order-cancel/{id}', 'UserProfileController@order_cancel')->name('order-cancel');
    Route::post('ticket-submit', 'UserProfileController@ticket_submit')->name('ticket-submit');
    Route::get('account-delete/{id}','UserProfileController@account_delete')->name('account-delete');
    // Chatting start
    Route::get('chat/{type}', 'ChattingController@chat_list')->name('chat');
    Route::get('messages', 'ChattingController@messages')->name('messages');
    Route::post('messages-store', 'ChattingController@messages_store')->name('messages_store');
    // chatting end

    //Support Ticket
    Route::group(['prefix' => 'support-ticket', 'as' => 'support-ticket.'], function () {
        Route::get('{id}', 'UserProfileController@single_ticket')->name('index');
        Route::post('{id}', 'UserProfileController@comment_submit')->name('comment');
        Route::get('delete/{id}', 'UserProfileController@support_ticket_delete')->name('delete');
        Route::get('close/{id}', 'UserProfileController@support_ticket_close')->name('close');
    });

    Route::get('account-transaction', 'UserProfileController@account_transaction')->name('account-transaction');
    Route::get('account-wallet-history', 'UserProfileController@account_wallet_history')->name('account-wallet-history');

    Route::get('wallet','UserWalletController@index')->name('wallet');
    Route::get('loyalty','UserLoyaltyController@index')->name('loyalty');
    Route::post('loyalty-exchange-currency','UserLoyaltyController@loyalty_exchange_currency')->name('loyalty-exchange-currency');

    Route::group(['prefix' => 'track-order', 'as' => 'track-order.'], function () {
        Route::get('', 'UserProfileController@track_order')->name('index');
        Route::get('result-view', 'UserProfileController@track_order_result')->name('result-view');
        Route::get('last', 'UserProfileController@track_last_order')->name('last');
        Route::any('result', 'UserProfileController@track_order_result')->name('result');
    });
    //FAQ route
    Route::get('helpTopic', 'WebController@helpTopic')->name('helpTopic');
    //Contacts
    Route::get('contacts', 'WebController@contacts')->name('contacts');

    //sellerShop
    Route::get('shopView/{id}', 'WebController@seller_shop')->name('shopView');
    Route::post('shopView/{id}', 'WebController@seller_shop_product');

    //top Rated
    Route::get('top-rated', 'WebController@top_rated')->name('topRated');
    Route::get('best-sell', 'WebController@best_sell')->name('bestSell');
    Route::get('new-product', 'WebController@new_product')->name('newProduct');

    Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
        Route::post('store', 'WebController@contact_store')->name('store');
        Route::get('/code/captcha/{tmp}', 'WebController@captcha')->name('default-captcha');
    });

    // routes by prince
    Route::get('/about', 'WebController@about')->name('about');
    Route::get('/marketing-tool', 'WebController@marketing_tool')->name('marketing_tool');
    Route::get('/plan', 'WebController@plan')->name('plan');
    Route::get('/blog', 'WebController@blog')->name('blog');
    Route::get('/contact', 'WebController@contact')->name('contact');
    Route::get('/dashboard', 'WebController@dashboard')->name('dashboard');
    Route::get('/blog1', 'WebController@blog1')->name('blog1');
    Route::get('/login', 'WebController@login')->name('login');
    Route::get('/register', 'WebController@register')->name('register');
    Route::get('/dashboard-plan', 'WebController@dashboard_plan')->name('dashboard_plan');
    Route::get('/dashboard-bvlog', 'WebController@dashboard_bvlog')->name('dashboard_bvlog');
    Route::get('/dashboard-referral', 'WebController@dashboard_referral')->name('dashboard_referral');
    Route::get('/dashboard-tree', 'WebController@dashboard_tree')->name('dashboard_tree');
    Route::get('/dashboard-deposit', 'WebController@dashboard_deposit')->name('dashboard_deposit');
    Route::get('/dashboard-withdraw', 'WebController@dashboard_withdraw')->name('dashboard_withdraw');
    Route::get('/dashboard-e-pin-recharge', 'WebController@dashboard_ePinRecharge')->name('dashboard_ePinRecharge');
    Route::get('/dashboard-transaction', 'WebController@dashboard_transaction')->name('dashboard_transaction');
    Route::get('/dashboard-ranking', 'WebController@dashboard_ranking')->name('dashboard_ranking');
    Route::get('/dashboard-ticket', 'WebController@dashboard_ticket')->name('dashboard_ticket');
    Route::get('/dashboard-ticket-new', 'WebController@dashboard_ticket_new')->name('dashboard_ticket_new');
    Route::get('/dashboard-ticket-view', 'WebController@dashboard_ticket_view')->name('dashboard_ticket_view');
    Route::get('/dashboard-profile-setting', 'WebController@dashboard_profile_setting')->name('dashboard_profile_setting');
    Route::get('/dashboard-change-password', 'WebController@dashboard_change_password')->name('dashboard_change_password');

    // routes for admin
    Route::get('/admin-dashboard','WebController@admin_dashboard')->name('admin_dashboard');
    Route::get('/admin-plans','WebController@admin_plans')->name('admin_plans');
    Route::get('/admin-all-pins','WebController@admin_all_pins')->name('admin_all_pins');
    Route::get('/admin-all-user-pins','WebController@admin_all_user_pins')->name('admin_all_user_pins');
    Route::get('/admin-admin-pins','WebController@admin_admin_pins')->name('admin_admin_pins');
    Route::get('/admin-admin-pins','WebController@admin_admin_pins')->name('admin_admin_pins');
    Route::get('/admin-used-pins','WebController@admin_used_pins')->name('admin_used_pins');
    Route::get('/admin-unused-pins','WebController@admin_unused_pins')->name('admin_unused_pins');
    Route::get('/admin-user-ranking','WebController@admin_user_ranking')->name('admin_user_ranking');
    Route::get('/admin-active-user','WebController@admin_active_user')->name('admin_active_user');
    Route::get('/admin-banned-user','WebController@admin_banned_user')->name('admin_banned_user');
    Route::get('/admin-email-unverified','WebController@admin_email_unverified')->name('admin_email_unverified');
    Route::get('/admin-mobile-unverified','WebController@admin_mobile_unverified')->name('admin_mobile_unverified');
    Route::get('/admin-kyc-unverified','WebController@admin_kyc_unverified')->name('admin_kyc_unverified');
    Route::get('/admin-kyc-pending','WebController@admin_kyc_pending')->name('admin_kyc_pending');
    Route::get('/admin-with-balance','WebController@admin_with_balance')->name('admin_with_balance');
    Route::get('/admin-paid-users','WebController@admin_paid_users')->name('admin_paid_users');
    Route::get('/admin-all-users','WebController@admin_all_users')->name('admin_all_users');
    Route::get('/admin-pending-deposits','WebController@admin_pending_deposits')->name('admin_pending_deposits');
    Route::get('/admin-approved-deposits','WebController@admin_approved_deposits')->name('admin_approved_deposits');
    Route::get('/admin-successful-deposits','WebController@admin_successful_deposits')->name('admin_successful_deposits');
    Route::get('/admin-rejected-deposits','WebController@admin_rejected_deposits')->name('admin_rejected_deposits');
    Route::get('/admin-initiated-deposits','WebController@admin_initiated_deposits')->name('admin_initiated_deposits');
    Route::get('/admin-all-deposits','WebController@admin_all_deposits')->name('admin_all_deposits');
    Route::get('/admin-withdrawal-methods','WebController@admin_withdrawal_methods')->name('admin_withdrawal_methods');
    Route::get('/admin-pending-withdrawals','WebController@admin_pending_withdrawals')->name('admin_pending_withdrawals');
    Route::get('/admin-approved-withdrawals','WebController@admin_approved_withdrawals')->name('admin_approved_withdrawals');
    Route::get('/admin-rejected-withdrawals','WebController@admin_rejected_withdrawals')->name('admin_rejected_withdrawals');
    Route::get('/admin-all-withdrawals','WebController@admin_all_withdrawals')->name('admin_all_withdrawals');
    Route::get('/admin-pending-tickets','WebController@admin_pending_tickets')->name('admin_pending_tickets');
    Route::get('/admin-closed-tickets','WebController@admin_closed_tickets')->name('admin_closed_tickets');
    Route::get('/admin-answered-tickets','WebController@admin_answered_tickets')->name('admin_answered_tickets');
    Route::get('/admin-all-tickets','WebController@admin_all_tickets')->name('admin_all_tickets');
    Route::get('/admin-transaction-log','WebController@admin_transaction_log')->name('admin_transaction_log');
    Route::get('/admin-invest-log','WebController@admin_invest_log')->name('admin_invest_log');
    Route::get('/admin-bv-log','WebController@admin_bv_log')->name('admin_bv_log');
    Route::get('/admin-referral-commission','WebController@admin_referral_commission')->name('admin_referral_commission');
    Route::get('/admin-binary-commission','WebController@admin_binary_commission')->name('admin_binary_commission');
    Route::get('/admin-login-history','WebController@admin_login_history')->name('admin_login_history');
    Route::get('/admin-notification-history','WebController@admin_notification_history')->name('admin_notification_history');
    Route::get('/admin-subscriber','WebController@admin_subscriber')->name('admin_subscriber');
    Route::get('/admin-logo-favicon','WebController@admin_logo_favicon')->name('admin_logo_favicon');
    Route::get('/admin-maintenance-mode','WebController@admin_maintenance_mode')->name('admin_maintenance_mode');
    Route::get('/admin-about-us','WebController@admin_about_us')->name('admin_about_us');
    Route::get('/admin-banner-section','WebController@admin_banner_section')->name('admin_banner_section');
    Route::get('/admin-blog-section','WebController@admin_blog_section')->name('admin_blog_section');
    Route::get('/admin-breadcrumb','WebController@admin_breadcrumb')->name('admin_breadcrumb');
    Route::get('/admin-contact-us','WebController@admin_contact_us')->name('admin_contact_us');
    Route::get('/admin-counter-section','WebController@admin_counter_section')->name('admin_counter_section');
    Route::get('/admin-faq-section','WebController@admin_faq_section')->name('admin_faq_section');
    Route::get('/admin-footer-section','WebController@admin_footer_section')->name('admin_footer_section');
    Route::get('/admin-how-it-works','WebController@admin_how_it_works')->name('admin_how_it_works');


});

//Seller shop apply
Route::group(['prefix' => 'shop', 'as' => 'shop.', 'namespace' => 'Seller\Auth'], function () {
    Route::get('apply', 'RegisterController@create')->name('apply');
    Route::post('apply', 'RegisterController@store');

});

//check done
Route::group(['prefix' => 'cart', 'as' => 'cart.', 'namespace' => 'Web'], function () {
    Route::post('variant_price', 'CartController@variant_price')->name('variant_price');
    Route::post('add', 'CartController@addToCart')->name('add');
    Route::post('remove', 'CartController@removeFromCart')->name('remove');
    Route::post('nav-cart-items', 'CartController@updateNavCart')->name('nav-cart');
    Route::post('updateQuantity', 'CartController@updateQuantity')->name('updateQuantity');
});

//Seller shop apply
Route::group(['prefix' => 'coupon', 'as' => 'coupon.', 'namespace' => 'Web'], function () {
    Route::post('apply', 'CouponController@apply')->name('apply');
});
//check done

// SSLCOMMERZ Start
/*Route::get('/example1', 'SslCommerzPaymentController@exampleEasyCheckout');
Route::get('/example2', 'SslCommerzPaymentController@exampleHostedCheckout');*/
Route::post('pay-ssl', 'SslCommerzPaymentController@index');
Route::post('/success', 'SslCommerzPaymentController@success')->name('ssl-success');
Route::post('/fail', 'SslCommerzPaymentController@fail')->name('ssl-fail');
Route::post('/cancel', 'SslCommerzPaymentController@cancel')->name('ssl-cancel');
Route::post('/ipn', 'SslCommerzPaymentController@ipn')->name('ssl-ipn');
//SSLCOMMERZ END

/*paypal*/
/*Route::get('/paypal', function (){return view('paypal-test');})->name('paypal');*/
Route::post('pay-paypal', 'PaypalPaymentController@payWithpaypal')->name('pay-paypal');
Route::get('paypal-status', 'PaypalPaymentController@getPaymentStatus')->name('paypal-status');
Route::get('paypal-success', 'PaypalPaymentController@success')->name('paypal-success');
Route::get('paypal-fail', 'PaypalPaymentController@fail')->name('paypal-fail');
/*paypal*/

/*Route::get('stripe', function (){
return view('stripe-test');
});*/
Route::get('pay-stripe', 'StripePaymentController@payment_process_3d')->name('pay-stripe');
Route::get('pay-stripe/success', 'StripePaymentController@success')->name('pay-stripe.success');
Route::get('pay-stripe/fail', 'StripePaymentController@success')->name('pay-stripe.fail');

// Get Route For Show Payment razorpay Form
Route::get('paywithrazorpay', 'RazorPayController@payWithRazorpay')->name('paywithrazorpay');
Route::post('payment-razor', 'RazorPayController@payment')->name('payment-razor');
Route::post('payment-razor/payment2', 'RazorPayController@payment_mobile')->name('payment-razor.payment2');
Route::get('payment-razor/success', 'RazorPayController@success')->name('payment-razor.success');
Route::get('payment-razor/fail', 'RazorPayController@success')->name('payment-razor.fail');

Route::get('payment-success', 'Customer\PaymentController@success')->name('payment-success');
Route::get('payment-fail', 'Customer\PaymentController@fail')->name('payment-fail');


//senang pay
Route::match(['get', 'post'], '/return-senang-pay', 'SenangPayController@return_senang_pay')->name('return-senang-pay');

//paystack
Route::post('/paystack-pay', 'PaystackController@redirectToGateway')->name('paystack-pay');
Route::get('/paystack-callback', 'PaystackController@handleGatewayCallback')->name('paystack-callback');
Route::get('/paystack',function (){
    return view('paystack');
});

// paymob
Route::post('/paymob-credit', 'PaymobController@credit')->name('paymob-credit');
Route::get('/paymob-callback', 'PaymobController@callback')->name('paymob-callback');


//paytabs
Route::any('/paytabs-payment', 'PaytabsController@payment')->name('paytabs-payment');
Route::any('/paytabs-response', 'PaytabsController@callback_response')->name('paytabs-response');

//bkash
Route::group(['prefix'=>'bkash'], function () {
    // Payment Routes for bKash
    Route::post('get-token', 'BkashPaymentController@getToken')->name('bkash-get-token');
    Route::post('create-payment', 'BkashPaymentController@createPayment')->name('bkash-create-payment');
    Route::post('execute-payment', 'BkashPaymentController@executePayment')->name('bkash-execute-payment');
    Route::get('query-payment', 'BkashPaymentController@queryPayment')->name('bkash-query-payment');
    Route::post('success', 'BkashPaymentController@bkashSuccess')->name('bkash-success');

    // Refund Routes for bKash
    Route::get('refund', 'BkashRefundController@index')->name('bkash-refund');
    Route::post('refund', 'BkashRefundController@refund')->name('bkash-refund');
});

//fawry
Route::get('/fawry', 'FawryPaymentController@index')->name('fawry');
Route::any('/fawry-payment', 'FawryPaymentController@payment')->name('fawry-payment');

// The callback url after a payment
Route::get('mercadopago/home', 'MercadoPagoController@index')->name('mercadopago.index');
Route::post('mercadopago/make-payment', 'MercadoPagoController@make_payment')->name('mercadopago.make_payment');
Route::get('mercadopago/get-user', 'MercadoPagoController@get_test_user')->name('mercadopago.get-user');

// The route that the button calls to initialize payment
Route::post('/flutterwave-pay','FlutterwaveController@initialize')->name('flutterwave_pay');
// The callback url after a payment
Route::get('/rave/callback', 'FlutterwaveController@callback')->name('flutterwave_callback');

// The callback url after a payment PAYTM
Route::get('paytm-payment', 'PaytmController@payment')->name('paytm-payment');
Route::any('paytm-response', 'PaytmController@callback')->name('paytm-response');

// The callback url after a payment LIQPAY
Route::get('liqpay-payment', 'LiqPayController@payment')->name('liqpay-payment');
Route::any('liqpay-callback', 'LiqPayController@callback')->name('liqpay-callback');

Route::get('/test', function (){
    return view('welcome');
});
