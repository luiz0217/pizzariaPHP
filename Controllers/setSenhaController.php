<?php
namespace Controllers;

class SetSenhaController
{
    private $view;

    public function __construct(){
        $this->view = new \Views\MainView('setSenha');
    }

    public function executar(){
        if(isset($_POST['change'])){
            \Models\usersModel::updatePass($_SESSION['id'],$_POST['senha']);
        }
        $this->view->render();
    }
}



?>