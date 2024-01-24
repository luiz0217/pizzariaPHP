<?php
namespace Controllers;

class PedidoController
{
    private $view;

    public function __construct(){
        $this->view = new \Views\MainView('pedidos');
    }

    public function executar(){
        if(isset($_POST['cadastrar'])){
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
            \Models\PedidosModel::gerarPedidos($_POST['retirada'],$_POST['tamanho'],[$_POST['sabor'],$_POST['extra']],$_POST['cliente'],$_POST['vendedor']);
        }
        $this->view->render();
    }
}



?>