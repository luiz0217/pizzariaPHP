<?php

namespace Models;

class extraModel
{
    public static function getExtras(){
        include"connection.php";
        if ($pdo != null) {
            $sql = $pdo->prepare("SELECT * FROM extras;");
            $sql->execute();
            return $sql->fetchAll();
        }
    }
    
    public static function getExtra($id){
        include"connection.php";
        if ($pdo != null) {
            $sql = $pdo->prepare("SELECT * FROM extras WHERE id = ?;");
            $sql->execute([$id]);
            return $sql->fetchAll();
        }
    }

    public static function editExtra($id,$nome,$preco){
        include"connection.php";
        if($pdo != null){
            $sql = $pdo->prepare("UPDATE extras SET nome = ?, preco = ? WHERE id = ?;");
            $sql->execute([$nome,$preco,$id]);
            echo "<script> alert('extra atualizado'); </script>";
        }
    }

    public static function addExtras($nome,$preco) {
        include"connection.php";
        if($pdo != null){
            $sql = $pdo->prepare("INSERT INTO extras VALUES(null,?,?);");
            $sql->execute([$nome,$preco]);
            echo "<script> alert('extra dadicionado'); </script>";
        }
    }
}
