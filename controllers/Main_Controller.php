<?php
include BASE_DIR.'../core/Controller.php';
include BASE_DIR.'../core/Model.php';
use core\Controller;

class Main extends Controller
{
    public function index()
    {   $model = new Model();
        $this->render('main/index', $model->get_data());
    }
}
