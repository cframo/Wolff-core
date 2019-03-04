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
    	$server = parse_ini_file('config.ini', true);
    	echo $server['APP']['APP_URL'].'/'.$server['APP']['APP_NAME']."/Resources/$resource";
    }

}