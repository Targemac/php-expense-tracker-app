<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;


/**
 *Home COntroller
 * 
 * @method home method that would be called by the router
 * 
 * @param
 * 
 * controllers are classes responsible for rendering a pages contents
 *
 */

class HomeController
{
    private TemplateEngine $view;

    public function __construct()
    {
        $this->view = new TemplateEngine();
    }


    // define a method that would be called by the router
    public function Home()
    {
        dd($this->view);
        echo 'Home page';
    }
}
