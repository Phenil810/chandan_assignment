<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    // Other middleware...

    protected $routeMiddleware = [
        // Other middleware...
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
        'buyer' => \App\Http\Middleware\BuyerMiddleware::class,
    ];
}

