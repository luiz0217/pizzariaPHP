<?php
namespace Controllers;

class CozinhaController
{
    private $view;

    public function __construct(){
        $this->view = new \Views\MainView('cozinha');
    }

    public function executar(){
        if(isset($_GET['rem'])){
            \Models\PedidosModel::removerPedido($_GET['rem']);
        }
        $this->view->render();
    }
}



?>