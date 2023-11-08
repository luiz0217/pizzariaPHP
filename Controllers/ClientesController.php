<?php
namespace Controllers;

class ClientesController
{
    private $view;

    public function __construct(){
        $this->view = new \Views\MainView('clientes');
    }

    public function executar(){
        if(isset($_POST['clienteCadastrar'])){
            if($_POST['nome'] != '' && $_POST['end'] != '' && $_POST['tel'] != ''){
                \Models\ClientesModel::addClientes($_POST['nome'],$_POST['end'],$_POST['tel']);
            }
            else{
                echo '<script> alert("preencha todos os campos") </script>';
            }
        }
        $this->view->render();
    }
}



?>