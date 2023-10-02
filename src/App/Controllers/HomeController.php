<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\Paths;


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


    public function __construct(private TemplateEngine $view)
    {
        // $this->view = new TemplateEngine(Paths::VIEW);
    }


    // define a method that would be called by the router
    public function home()
    {
        echo $this->view->render("/index.php", ['title' => "home page"]);
    }
}
