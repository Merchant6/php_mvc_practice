<?php

namespace app\controllers;

/**
 * Class SiteController
 * 
 * @package app\controllers;
 */

class Response
{

    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }
    
}