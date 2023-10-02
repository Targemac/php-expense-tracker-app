<?php

declare(strict_types=1);

namespace App\Config;

use Framework\App;
use App\Controllers\HomeController;
use App\Controllers\AboutController;


function registerRoutes(App $app)
{
    // register controller with route
    // pass path [namespace, and controller name]
    /** 
     *  using the 'HomeController::class' magic constant, php knows where to find the class in the App\Controllers\HomeController namespace, 
     * this also helps reduce erros 
     * */
    $app->get('/', [HomeController::class, 'home']);
    $app->get('/about', [AboutController::class, 'about']);
}
