<?php

declare(strict_types=1);

// creating a sugar function

function dd(mixed $value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}