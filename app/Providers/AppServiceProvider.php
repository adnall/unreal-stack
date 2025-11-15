<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;
use Lucide\IconManager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(IconManager::class, function ($app) {
            return new IconManager();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Vite::prefetch();

        Blade::directive('icon', function ($expression) {
            return "<?php echo app(\\Lucide\\IconManager::class)->getIcon($expression); ?>";
        });
    }
}
