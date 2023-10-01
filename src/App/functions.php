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
/**
 * e
 * 
 * @method e this function is used to escape malcious characters from been inserted into our page
 * @param mixed $value
 */
function e(mixed $value): string
{
    return htmlspecialchars((string) $value);
}
