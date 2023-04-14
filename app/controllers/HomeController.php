<?php

namespace app\controllers;

class HomeController extends Controller
{
    public function index()
    {
        // this method view renders the view 'home' and passes the variable 'name' to the view as props
        // the key name 'name' is the name of the variable passed to the view in the array
        $this->view('home', ['name' => 'Victor Romero']);
    }
}
