<?php
namespace core;

class Controller
{

    public function view($view)
    {
        $filePath = "Resources/Views/$view.php";

        if(file_exists($filePath)){
            $injection = '{% use Core\Route %}';
            return $injection .= file_get_contents($filePath);
        }

        return "View not found.";
    }

}