<?php
/**
 * Created by PhpStorm.
 * User: Atanvar
 * Date: 15.10.2017
 * Time: 20:12
 */
namespace core;
include __DIR__.'\View.php';
use View;



class Controller
{

    public $view;
    public $layout = 'main';

    public function __construct()
    {
        $this->view = new View($this->layout);
    }

    public function render($view, $data = null)
    {
       $this->view->render_view($view, $data);
    }
}