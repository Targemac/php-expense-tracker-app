<?php

declare(strict_types=1);

namespace App\Controllers;


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
    // define a method that would be called by the router
    public function Home()
    {
        echo 'Home page';
    }
}
