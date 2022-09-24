<?php

use App\PaymentService\PaypalAPI;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function (\App\PaymentService\PaymentInterface $payment) {

    // dump(app(App\PaymentService\PayAPI::class));
    dump($payment->checkout());
    // dd(app());
});
