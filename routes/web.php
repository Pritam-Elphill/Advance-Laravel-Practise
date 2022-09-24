<?php

use App\PaymentService\PayAPI;
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

Route::get('/', function (PayAPI $pay_api) {

    dump(app(App\PaymentService\PayAPI::class));
    dump(app(App\PaymentService\PayAPI::class));
    // dd(app());
});
