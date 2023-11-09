<?php
namespace Models;

class VendedorModel{

    public static function getVendedor(){
        include"connection.php";
        $sql = $pdo->prepare('SELECT * FROM vendedor;');
        $sql->execute();
        return $sql->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    
    public static function getVendedorByID($id){
        include"connection.php";
        $sql = $pdo->prepare('SELECT nome FROM vendedor WHERE id = ?;');
        $sql->execute([(int)$id]);
        $resp = $sql->fetchAll(\PDO::FETCH_ASSOC);
        return $resp[0]['nome'];
    }

    public static function addVendedor($nome,$end,$tel){
        include"connection.php";
        if ($pdo != null) {
            $sql = $pdo->prepare('INSERT INTO vendedor(nome,endereco,numero) VALUES(?,?,?)');
            $sql->execute([$nome,$end,$tel]);
            echo '<script> alert("vendededor adicionado com suscesso") </script>';
        }
    }
}


?>