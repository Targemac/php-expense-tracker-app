<?php

/**
 * this file is responsible for initializng our app
 */
include __DIR__ . "/../src/App/functions.php";

$app = include __DIR__ . "/../src/App/bootstrap.php";

$app->run();

// calling the dd function
// dd($app);