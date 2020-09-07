<?php

namespace o2oneLabs\HesabePayment;
use Illuminate\Support\ServiceProvider;

class HesabeServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'HesabePayment');

    }

    public function register()
    {
    }
}