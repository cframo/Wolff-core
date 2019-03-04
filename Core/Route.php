<?php

namespace core;

require_once 'routesHelper.php';

class Route extends routesHelper
{
    private $controller;
    private $controllerPath;

    public function controller($url)
     {
        $url = preg_replace('/[^a-zA-Z0-9_\/]/', '', $url);

        if ($this->controllerExists($url)) {
            return array(
                "path"          => $this->controllerPath,
                "controller"    => $this->controller[0],
                "method"        => $this->controller[1],
            );
        }

        return array(
            "path"          => "Controller/ElementalController.php",
            "controller"    => "ElementalController",
            "method"        => "notFound",
        );
    }

    public function controllerExists($url)
    {
        $this->controller = explode('@', Route::$routes[$url]);

        $this->controllerPath = 'Controller/' . $this->controller[0]. '.php';
        return file_exists($this->controllerPath);
    }

    public function getControllerPath($url)
    {
        return "Contoller/" . Route::$routes[$url] . ".php";
    }
}