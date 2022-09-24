<?php

namespace App\Providers;

use App\PaymentService\PayAPI;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider implements DeferrableProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /* use singleton for single value for every instance */

        // $this->app->singleton(PayAPI::class, function () {
        //     return new PayAPI("TXN-" . rand(50, 2000));
        // });

        /* or use bind for multiple value for every instance */

        $this->app->bind(PayAPI::class, function () {
            return new PayAPI("TXN-" . rand(50, 2000));
        });
    }
    public function provides()
    {
        return [PayAPI::class];
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
