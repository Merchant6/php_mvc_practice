<?php

namespace app\core;


/**
 * Class Controller
 * 
 * @package app\core;
 */

class Controller
{
   public function render($view, $params = [])
   {
        return Application::$app->router->renderView($view, $params);
   }
    
}