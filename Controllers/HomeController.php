<?php
namespace Controllers;

class HomeController
{
    private $view;

    public function __construct(){
        $this->view = new \Views\MainView('home',null,null);

    }

    public function executar(){
        if(isset($_POST['login'])){
            if($_POST['password'] != '' && $_POST['Login'] != ''){
                \Models\usersModel::loginCheck($_POST['Login'],$_POST['password']);
            }
            else{
                echo '<script> alert("preencha todos os campos") </script>';
            }
        }
        $this->view->render();
    }
}



