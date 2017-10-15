<?php

class Route
{
    public static function start()
    {
        $controller_name = 'main';
        $action_name = 'index';

        $routes = [];

        if ($_SERVER['REQUEST_URI'])
        {
            $routes = explode('/', $_SERVER['REQUEST_URI']);

        }

        if (!empty($routes[1]))
        {
            $controller_name = $routes[1];
        }

        if (!empty($routes[2]))
        {
            $action_name = $routes[2];
        }

        $controller = $controller_name. '_Controller.php';
        $controller_path = BASE_DIR.'\controllers\\'.$controller;

        $controller_name_explode = explode('_', $controller_name);

        $class_name = ucfirst($controller_name_explode[0]);

        if (file_exists($controller_path)){
            include $controller_path;
            $class = new $class_name();

            if (method_exists($class, $action_name))
            {
                $class->$action_name();
            }
            else
            {
                self::View404();
            }
        }
        else
        {
            self::View404();
        }
    }

    public static function View404()
    {
        echo 'Not found';
    }
}