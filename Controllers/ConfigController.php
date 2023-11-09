<?php
namespace Controllers;

class ConfigController
{
    private $view;

    public function __construct(){
        if(isset($_GET['opt'])){
            switch($_GET['opt']){
                case '1':
                    $this->view = new \Views\MainView('users');        
                    break;
                case '2':
                    $this->view = new \Views\MainView('vendors');        
                    break;
                case '3':
                    $this->view = new \Views\MainView('client');        
                    break;
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