<?php

/**
 * this file is responsible for loading resorces needed by the app class
 */

declare(strict_types=1);

// include autoload files
require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;
use App\Controllers\HomeController;


$app = new App();

// register controller with route
// pass path [namespace, and controller name]
/** 
 *  using the 'HomeController::class' magic constant, php knows where to find the class in the App\Controllers\HomeController namespace, 
 * this also helps reduce erros 
 * */
$app->get('/', [HomeController::class, 'home']);

// dd($app);

return $app;
