<?php

/**
 * Store front routes.
 */

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

require 'store-front-routes.php';

/**
 * Customer routes. All routes related to customer
 * in storefront will be placed here.
 */
require 'customer-routes.php';

/**
 * Checkout routes. All routes related to checkout like
 * cart, coupons, etc will be placed here.
 */
require 'checkout-routes.php';

Route::post('/customer/contact-us', [FrontController::class, 'send_mail'])->name('front.send_mail');