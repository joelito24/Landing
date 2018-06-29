<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\EmailService;
use App\Services\FileServices;
use App\Models\User;
Use App\Services\UserService;
use App\Services\PaypalService;
use App\Services\CartService;
use App\Models\Products;
use App\Models\ShippingCosts;
use App\Models\ShippingCountries;
use App\Models\Carts;
use App\Models\CartsProducts;
use App\Models\Orders;
use App\Models\OrdersDetails;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // \Carbon\Carbon::setLocale(config('app.locale'));
    }

    /**
     * Register any application services.
     *
     * This service provider is a great spot to register your various container
     * bindings with the application. As you can see, we are registering our
     * "Registrar" implementation here. You can add your own bindings too!
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
                'Illuminate\Contracts\Auth\Registrar', 'App\Services\Registrar'
        );

        $this->registerFileServices();
        $this->registerEmailService();
        $this->registerUserService();
        $this->registerPaypalService();
        $this->registerTpvService();

        $this->registerCartService();
        $this->registerEcommerceService();
    }

    public function registerFileServices()
    {
        $this->app->singleton(FileServices::class, function ()
        {
            return new FileServices();
        });
    }

    public function registerEmailService()
    {
        $this->app->singleton(EmailService::class, function ()
        {
            return new EmailService();
        });
    }

    public function registerUserService()
    {
        $this->app->singleton(UserService::class, function ($app)
        {
            return new UserService($app[User::class]);
        });
    }

    public function registerPaypalService()
    {
        $this->app->singleton(PaypalService::class, function ()
        {
            return new PaypalService();
        });
    }

    public function registerTpvService()
    {
        $this->app->singleton(TpvService::class, function ()
        {
            return new TpvService();
        });
    }

    public function registerCartService()
    {
        $this->app->singleton(CartService::class, function ($app)
        {
            return new CartService($app[Products::class], $app[ShippingCosts::class] , $app[ShippingCountries::class]);
        });
    }
    
    
    public function registerEcommerceService(){
        $this->app->singleton(EcommerceService::class, function ($app)
        {
            return new EcommerceService($app[UserService::class], $app[Carts::class], $app[CartService::class],$app[CartsProducts::class], $app[Orders::class], $app[OrdersDetails::class]);
        });
    }

}
