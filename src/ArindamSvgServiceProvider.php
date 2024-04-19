<?php

namespace Arindam\Svg;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Contracts\Http\Kernel;
use Arindam\Svg\Svg\SvgClass;

class ArindamSvgServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(Kernel $kernel): void
    {
        $this->app->bind('svgclass', function() {
            return new SvgClass();
        });
    }
}