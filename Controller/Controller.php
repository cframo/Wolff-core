<?php
namespace core;

class Controller
{

	public $storedView;
	
	protected $container;

    public function view($view)
    {
        $filePath = "Resources/Views/$view.php";

        if(file_exists($filePath)){
            $injection = '{% use Core\Route %}';
            $injection .= file_get_contents($filePath);
            $this->storedView = $injection;
            $this->exportContainer();
            return $this;
        }

        $this->storedView = "View not found.";
    }
    
    private function exportContainer()
    {
        if (!empty($this->container)){
            $this->pass($this->container);
        }
    }

    public function pass($variables)
    {
        if(is_array($variables)){
            foreach ($variables as $key => $variable) {
                $injection .= is_string($variable) ?
                '{% $'.$key.' = "'.$variable.'" %}' :
                '{% $'.$key.' = '.$variable.' %}';
            }
        }

    	$this->storedView = ($injection .= $this->storedView);
    }
    
    public function toContainer(String $name, $value)
    {
        $this->container[$name] = $value;
    }

}