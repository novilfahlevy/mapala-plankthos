<?php

namespace App\Providers;

use App\Models\Division;
use App\Trait\Information;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    use Information;

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Carbon::setlocale(config('app.locale'));

        // Pass information data to footer
        View::composer(
            ['frontend.layouts.header', 'frontend.layouts.footer'],
            function($view) {
                $information = $this->getAllInformations();
                $view->with('information', $information);
            }
        );
    }
}
