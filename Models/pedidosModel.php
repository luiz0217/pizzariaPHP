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

    public static function gerarPedidos($retirada, $tamanho, $sabor, $cliente, $vendedor){
        include"connection.php";
        if($pdo != null){
            $preco = 0.00;
            $sabores = '';
            foreach ($sabor[0] as $key => $value) {
                $sql = $pdo->prepare('SELECT * FROM sabores WHERE id = ?;');
                $sql->execute([$key]);
                $resp = $sql->fetchAll();
                $sabores .= $resp[0]['nome'] . " ";
                $preco += $resp[0]['preco'];
            }
            $sabores .= " || ";
            foreach ($sabor[1] as $key => $value) {
                $sql = $pdo->prepare('SELECT * FROM extras WHERE id = ?;');
                $sql->execute([$key]);
                $resp = $sql->fetchAll();
                $sabores .= $resp[0]['nome'] . " ";
                $preco += $resp[0]['preco'];
            }
            $sql = $pdo->prepare('INSERT INTO pedidos(retirada,tamanho,sabor,clientID,vendedorID,preco) VALUES(?,?,?,?,?,?);');
            $sql->execute([$retirada, $tamanho, $sabores, $cliente,$vendedor,$preco]);
            echo '<script>alert(adicionado com suscesso)</script>';
        }
    }

    public static function removerPedido($id){
        include"connection.php";
        if($pdo != null){
            $sql = $pdo->prepare("UPDATE `pedidos` SET `done` = '1' WHERE `pedidos`.`id` = ?;");
            $sql->execute([$id]);
        }
    }

    public static function getTamanhos(){
        include"connection.php";
        if ($pdo != null) {
            $sql = $pdo->prepare("SELECT * FROM tamanhos;");
            $sql->execute();
            return $sql->fetchAll();
        }
    }


}
