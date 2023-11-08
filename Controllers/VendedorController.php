<?php
namespace Controllers;

class VendedorController
{
    private $view;

    public function __construct(){
        $this->view = new \Views\MainView('vendedor');
    }

    public function executar(){
        if(isset($_POST["vendedorCadastro"])){
            if($_POST['nome'] != '' && $_POST['end'] != '' && $_POST['tel'] != ''){
                \Models\VendedorModel::addVendedor($_POST['nome'],$_POST['end'],$_POST['tel']);
            }
        }
        $this->view->render();
    }
}



?>