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
    public const HOME = '/funcional';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

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
                ->group(base_path('routes/eventos/eventos-route.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/libros/libros-route.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/revistas/revistas-route.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/tesis/tesis-route.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/tdirigido/tdirigido-route.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/prestamo/prestamo-route.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/estudiante/estudiante-route.php'));
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/autor/autor-route.php'));
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/categoria/categoria-route.php'));
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/investigacion/investigacion-route.php'));
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/plan/plan-route.php'));
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/proyecto/proyecto-route.php'));
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/pap/pap-route.php'));
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/monografias/monografias-route.php'));
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/cuaderno/cuaderno-route.php'));
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/informe/informe-route.php'));
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/historia/historia-route.php'));
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/seminario/seminario-route.php'));
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/pasantia/pasantia-route.php'));
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/idioma/idioma-route.php'));
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/asesores/asesores-route.php'));
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
}
