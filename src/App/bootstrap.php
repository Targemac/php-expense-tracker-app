<?php
/**
 * this file is responsible for loading resorces needed by the app class
 */

declare(strict_types=1);

// include autoload files
require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;

$app = new App();

return $app;