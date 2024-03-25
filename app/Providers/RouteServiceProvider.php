<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/lotfi.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/imene.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/afaf.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/chaima.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/rahma.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/meriem.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/selma.php'));

            /**/
        });
    }



    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }

    public function getHomeRouteForGuard($guard)
    {
        switch ($guard) 
        {
            case 'admin':  return '/admin'; break;
             
            case 'gestionnaire':  return '/gestionnaire'; break;

            default: return '/home'; break;

        }
        // Replace with your logic
    }    

}
