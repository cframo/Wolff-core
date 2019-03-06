<?php

use core\Controller;
require_once 'Controller.php';

class HomeController extends Controller
{

    public function index()
    {
        $this->view('Home');
    }

}