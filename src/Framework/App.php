<?php

declare(strict_types=1);

namespace Framework;

class App
{

    private Router $router;

    public function __construct()
    {
        $this->router = new Router();
    }

    public function run()
    {
        echo "Application is running";
    }

    /**
     * since the $router is private, we define a public method to help us 
     * modify it
     * 
     *  */ 
    public function add(string $path)
    {
        $this->router->add($path);
    }
}