<?php

namespace app\controllers;

class ProductsController extends Controller
{
    public function index()
    {
        $this->view('products');
    }

    public function update()
    {
        var_dump('product/update');
    }

    public function store($params)
    {
        var_dump($params);
    }
}
