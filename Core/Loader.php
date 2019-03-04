<?php
namespace core;

require_once 'Route.php';

class Loader
{
    private $route;

    private $hostName;
    private $proyectConfig;

    public function __construct()
    {

        $this->hostName = $_SERVER['SERVER_NAME'];
        $this->proyectConfig = $this->loadConfig();

        $this->route = new Route();

        $this->init();
    }

    private function loadConfig()
    {
        $data = file_get_contents('Core/config.json');
        return json_decode($data, true);
    }

    public function init()
    {
        $url = $this->actualRoute();

        $controller = $this->route->controller($url);

        $this->includeContoller($controller['path']);
        $loadedController = new $controller['controller'];
        echo $this->formatTemplate($loadedController->{$controller['method']}());
    }

    private function actualRoute()
    {
        return str_replace('/'.$this->proyectConfig['proyectName'], '', $_SERVER['REQUEST_URI']);
    }

    private function includeContoller($controller)
    {
        include($controller);
        return str_replace(array("Controller/", ".php"), "", $controller);
    }

    private function formatTemplate($template) 
    {
        $search = array('{%', '%}');
        $replace = array( '<?php ', ' ?>');
        
        $content =  str_replace($search, $replace, $template);   

        ob_start();
        eval(' ?>' . $content . '<?php ');
        return ob_get_clean();
    }

}