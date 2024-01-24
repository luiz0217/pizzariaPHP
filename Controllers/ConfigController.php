<?php
namespace Controllers;

class ConfigController
{
    private $view;

    public function __construct(){
        if(isset($_GET['opt'])){
            switch($_GET['opt']){
                case 'users':
                    $this->view = new \Views\MainView('users');        
                    break;
                case 'vendors':
                    $this->view = new \Views\MainView('vendors');        
                    break;
                case 'client':
                    $this->view = new \Views\MainView('client');        
                    break;
                case 'addSab':
                    if(isset($_POST['addSab'])){
                        \Models\saborModel::addSabor($_POST['nome'],$_POST['preco']);
                    }
                    $this->view = new \Views\MainView('addSabor');
                    break;
                case 'editSabor':
                    if(isset($_POST['saborUpdate'])){
                        \Models\saborModel::editSabor($_POST['id'],$_POST['nome'],$_POST['preco']);
                    }
                    $this->view = new \Views\MainView('editSabor');
                    break;
                case 'addExtra':
                    if(isset($_POST['addExtra'])){
                        \Models\extraModel::addExtras($_POST['nome'],$_POST['preco']);
                    }
                    $this->view = new \Views\MainView('addExtra');
                    break;
                case 'editExtra':
                    if(isset($_POST['extraUpdate'])){
                        \Models\extraModel::editExtra($_POST['id'],$_POST['nome'],$_POST['preco']);
                    }
                    $this->view = new \Views\MainView('editExtra');
            }
        }
        else{
            $this->view = new \Views\MainView('config');
        }
    }

    public function executar(){
        $this->view->render();
    }
    
}



?>