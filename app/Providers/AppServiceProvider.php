<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Schema::defaultStringLength(191); //Solved by increasing StringLength

         //Counter::hit();
         //$data['visitors'] = Counter::count();
         //$bulan = date('Y-m');
         //$tgl = date('d');
         //$data['month'] = Counter::where('date', 'LIKE', '%'.$bulan.'%')->count();
         //$data['day'] = Counter::where('date', 'LIKE', '%'.$tgl.'%')->count();
         //view()->share('visitors', $data['visitors']);
         //view()->share('month', $data['month']);
         //view()->share('day', $data['day']);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
