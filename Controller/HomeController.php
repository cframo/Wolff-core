<?php

use core\Controller;
require_once 'Controller.php';

class HomeController extends Controller
{

    public function index()
    {
        $this->view('Home');
    }

    public function test()
    {

    	$variable = 1;
    	$variable2 = "dos";

        $this->view("Test")->pass(compact('variable2'));
    }

}