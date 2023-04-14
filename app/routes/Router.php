<?php

namespace app\routes;

use app\helpers\HttpRequest;
use app\helpers\Uri;
use Exception, Throwable;

class Router
{

    const CONTROLLER_NAMESPACE = 'app\\controllers';

    public static function load(string $controller, string $action)
    {

        try {
            $controllerNamespace = self::CONTROLLER_NAMESPACE . '\\' . $controller;
            //check if controller exists
            if (!class_exists($controllerNamespace)) {
                throw new Exception("Controller {$controller} not found");
            }
            //instantiate controller
            $controllerInstance = new $controllerNamespace;

            //check if action exists
            if (!method_exists($controllerInstance, $action)) {
                throw new Exception("Action {$action} not found");
            }

            //call action
            //pass request params as object to action in controller, works for both get and post request
            $controllerInstance->$action((object)$_REQUEST); 
        } catch (Throwable $th) {
            echo $th->getMessage();
        }
    }

    public static function routes(): array
    {
        return [
            'get' => [
                '/' => fn () => self::load('HomeController', 'index'),
                '/contact' => fn () => self::load('ContactController', 'index'),
                '/products' => fn () => self::load('ProductsController', 'index'),
            ],
            'post' => [
                '/products' => fn () => self::load('ProductsController', 'store'),
                '/contact' => fn () => self::load('ContactController', 'store'),
            ],
            'put' => [
                '/products' => fn () => self::load('ProductsController', 'update'),
            ],
            'delete' => []
        ];
    }

    public static function execute()
    {

        try {
            $routes = self::routes();
            $request = HttpRequest::getHttpRequest();
            $uri = Uri::get('path');

            if (!isset($routes[$request])) {
                throw new Exception("Route/Path not found");
            }

            if (!array_key_exists($uri, $routes[$request])) {
                throw new Exception("Route not found for {$request} request");
            }

            $router = $routes[$request][$uri];
            if (!is_callable($router)) {
                throw new Exception("Error calling route, route must be callable, check Router.php->routes()");
            }
            $router();
        } catch (Throwable $th) {
            echo $th->getMessage();
        }
    }
}
