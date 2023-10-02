<?php

/**
 * this file is responsible for loading resorces needed by the app class
 */

declare(strict_types=1);

// include autoload files
require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;
use App\Config\Paths;

use function App\Config\registerRoutes;


$app = new App(Paths::SOURCE . "App/container-definitions.php");

registerRoutes($app);
// dd($app);

return $app;
