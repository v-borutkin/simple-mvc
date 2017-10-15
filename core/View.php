<?php
/**
 * Created by PhpStorm.
 * User: Atanvar
 * Date: 15.10.2017
 * Time: 20:13
 */

class View
{
    public $layout;

    public function __construct($layout)
    {
        $this->layout = $layout;
    }

    public function render_view($view, $data = null)
    {
        include BASE_DIR.'../views/layout/'.$this->layout.'.php';
        $content = include BASE_DIR.'/views/'.$view.'.php'; //todo
    }
}