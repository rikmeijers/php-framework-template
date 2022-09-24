<?php

namespace framework\secure\libs;

class Bootstrap
{
    private static string $DIR = '../secure';

    public function __construct()
    {
        $url = isset($_SERVER["PATH_INFO"]) ? explode("/", ltrim($_SERVER["PATH_INFO"],"/")) : "/";

        if ($url == '/' || $url[0] == 'home')
        {
            $controllerName = 'IndexController';
            $controller = self::$DIR . '/controllers/' . $controllerName . '.php';
            if (file_exists($controller))
            {
                require $controller;
                $controller = "framework\secure\controllers\\$controllerName";
                $controller = new $controller();
                $controller->Index(null);
            } else self::show404();

            return;
        }

        $urlName = ucfirst(strtolower(strip_tags($url[0])));
        $controllerName = $urlName . 'Controller';
        $controller = self::$DIR . '/controllers/' . $controllerName . '.php';
        if (file_exists($controller))
        {
            require $controller;
            $controller = "framework\secure\controllers\\$controllerName";
            $controller = new $controller();

            if (isset($url[1]))
            {
                $methodName = ucfirst(strtolower(strip_tags($url[1])));
                if (method_exists($controller, $methodName))
                {
                    if ($_POST) $controller->$methodName($_POST);
                    else if ($_GET) $controller->$methodName($_GET);
                    else $controller->$methodName(null);
                    return;
                }
            }
            if ($_POST) $controller->Index($_POST);
            else if ($_GET) $controller->Index($_GET);
            else $controller->Index(null);
        } else self::show404();
    }

    public static function getDIR(): string
    {
        return self::$DIR;
    }

    public static function show404(): void
    {
        $controllerName = 'ErrorController';
        $controller = self::$DIR . '/controllers/' . $controllerName . '.php';
        if (file_exists($controller))
        {
            require $controller;
            $controller = "framework\secure\controllers\\$controllerName";
            $controller = new $controller();
            $controller->Error(404);
        } else header("HTTP/1.0 404 Not Found");
    }
}