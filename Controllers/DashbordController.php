<?php
namespace Controllers;

class DashbordController
{
    private $view;

    public function __construct(){
        $this->view = new \Views\MainView('dashbord');
    }

    public function executar(){
        $this->view->render();
    }
}



?>