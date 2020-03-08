<?php

namespace MohsenBostan;

use Illuminate\Support\ServiceProvider;

class GhasedakSmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish Config File Into Base Laravel Application
        $this->publishes([
            __DIR__ . '/../config/ghasedak-sms.php' => config_path('ghasedak-sms.php')
        ],'config');
    }

    public function register()
    {
        // Register Main Package To Laravel Application
        $this->app->singleton(GhasedakSms::class, function () {
            return new GhasedakSms();
        });
    }
}
