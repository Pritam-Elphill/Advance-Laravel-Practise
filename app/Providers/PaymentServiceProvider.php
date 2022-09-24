<?php

namespace App\Providers;

use App\PaymentService\PaypalAPI;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use App\PaymentService\PaymentInterface;
use App\PaymentService\StripeAPI;

class PaymentServiceProvider extends ServiceProvider implements DeferrableProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /* Using Methods */
        // $this->app->bind()   |OR|   app()->bind()   |OR|   \Illuminate\Support\Facades\App::bind()

        /* use singleton / bind(*,true) / instance for single value for every instance */

        // $this->app->singleton(PaypalAPI::class, function () {
        //     return new PaypalAPI("TXN-" . rand(50, 2000));
        // });

        /* OR */

        // $this->app->singleton(PaypalAPI::class, function () {
        //     return new PaypalAPI("TXN-" . rand(50, 2000));
        // },true);

        /* OR */

        /* Using Instance without function */
        // $instance = new PaypalAPI("TXN-" . rand(50, 2000));
        // $this->app->instance(PaypalAPI::class, $instance);

        /* or use bind for multiple value for every instance */

        // $this->app->bind(PaypalAPI::class, function () {
        //     return new PaypalAPI("TXN-" . rand(50, 2000));
        // });

        // app()->bind(PaymentInterface::class, StripeAPI::class);
        app()->bind(PaymentInterface::class, PaypalAPI::class);
    }
    public function provides()
    {
        return [PaypalAPI::class];
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
