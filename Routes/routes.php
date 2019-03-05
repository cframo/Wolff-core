<?php

use core\Route;

Route::add('/test', 'HomeController@test');

Route::add('/', 'HomeController@index');
