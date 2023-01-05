<?php

namespace App\Providers;

use App\Models\User;
use Blade;
use Gate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Nette\Utils\Paginator;
use Symfony\Component\HttpFoundation\Response;

class AppServiceProvider extends ServiceProvider
{
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
        Model::unguard();
        Gate::define('admin', function (User $user) {
            return $user->username ===  'pero2308';
        });
        Blade::if('admin', function () {
            return request()->user()?->can('admin');
        });
    }
}
