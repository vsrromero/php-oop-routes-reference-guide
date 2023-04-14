<?php

namespace app\controllers;

class ContactController extends Controller
{
    public function index()
    {
        $this->view('contact');
    }
    // $params is an array with the parameters passed to the method from the request, eg: $_REQUEST from the browser, query string, form data, etc
    public function store($params)
    {
        $this->view('contact', ['name' => $params->name, 'email' => $params->email, 'message' => $params->message]);
        
    }


}
