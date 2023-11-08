<?php
namespace Models;

class PedidosModel
{

    public static function checkPedidos(){
        include"connection.php";
        if($pdo != null){
            $sql = $pdo->prepare("SELECT * FROM pedidos WHERE done = false;");
            $sql->execute();
            return $sql->fetchAll();
        }
    }

    public static function gerarPedidos($retirada, $tamanho, $sabor, $cliente,$vendedor){
        include"connection.php";
        if($pdo != null){
            $sql = $pdo->prepare('INSERT INTO pedidos(retirada,tamanho,sabor,clientID,vendedorID) VALUES(?,?,?,?,?);');
            $sql->execute([$retirada, $tamanho, $sabor, $cliente,$vendedor]);
            echo '<script>alert(adicionado com suscesso)</script>';
        }
    }

    public static function removerPedido($id){
        include"connection.php";
        if($pdo != null){
            $sql = $pdo->prepare("DELETE IGNORE FROM pedidos WHERE id = ?;");
            $sql->execute([$id]);
        }
    }
}

?>