<?php

/**
 * CREATING A ROUTER class
 * 
 * NAME
 * 
 * DESCRI
 * 
 * @params name type desc
 */

declare(strict_types=1);

namespace Framework;

class Router
{
    private array $routes = [];

    public function add(string $path)
    {
        $this->routes[] = [
            "path" => $path
        ];
    }
}