<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

/**
 * Class SiteController
 * 
 * @package app\controllers;
 */

class SiteController extends Controller
{
    public function home()
    {
        $params = 
        [
            'name' => "Saboor Merchant"
        ];
        
        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact()
    {
        var_dump($_POST);
        return 'Handling Submitted Data from Controller';
    }
    
}