<?php
namespace core;

class routesHelper
{
    public static $routes = [];

    public static function add($url, $controller)
    {
        Route::$routes[$url] = $controller;
    }

    public static function resource($resource)
    {
        echo "Resources/$resource";
    }

}