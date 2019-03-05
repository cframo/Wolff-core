<?php
namespace core;

class Controller
{

	public $storedView;

    public function view($view)
    {
        $filePath = "Resources/Views/$view.php";

        if(file_exists($filePath)){
            $injection = '{% use Core\Route %}';
            $injection .= file_get_contents($filePath);
            $this->storedView = $injection;
            return $this;
        }

        $this->storedView = "View not found.";
    }

    public function pass($variables)
    {
    	foreach ($variables as $key => $variable) {
    		$injection .= is_string($variable) ? 
    			'{% $'.$key.' = "'.$variable.'" %}' : 
    			'{% $'.$key.' = '.$variable.' %}';
    	}

    	$this->storedView = ($injection .= $this->storedView);
    }

}