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

    public function add(string $method, string $path, array $controller)
    {
        $path = $this->normalizePath($path);

        $this->routes[] = [
            "path" => $path,
            "method" => strtoupper($method),
            'controller' => $controller
        ];
    }

    private function normalizePath($path): string
    {
        // remove slash from path
        $path = trim($path, "/");
        // add slash ni frnt and back 
        $path = "/{$path}/";
        $path = preg_replace("#[/]{2,}#", "/", $path);


        return $path;
    }

    public function dispatch(string $path, string $method)
    {
        $path = $this->normalizePath($path);
        $method = strtoupper($method);

        foreach ($this->routes as $route) {
            // we check if path dont match and method also dont match
            if (!preg_match("#^{$route['path']}$#", $path) || $route['method'] !== $method) {
                continue;
            }

            // destructure the class name and functiona name from the route-cntroller
            [$class, $function] = $route['controller'];

            // create an instance of the class
            $controllerInstance = new $class;

            // invoke method passed into the route
            $controllerInstance->$function();
        }
    }
}
