<?php

namespace app\controllers;

use League\Plates\Engine;

abstract class Controller
{

    public function view(string $view, array $data = [])
    {
        $viewPath = dirname(__FILE__, 2) . DIRECTORY_SEPARATOR.'views'; // get the path to the views folder
        $templates = new Engine($viewPath); // inform the path to the views folder in the league/plates

        //render a template
        echo $templates->render($view, $data);
    }
}
