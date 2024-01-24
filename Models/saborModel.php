<?php

namespace Models;

class saborModel
{
    public static function getSabores(){
        include"connection.php";
        if ($pdo != null) {
            $sql = $pdo->prepare("SELECT * FROM sabores;");
            $sql->execute();
            return $sql->fetchAll();
        }
    }
    
    public static function getSabor($id){
        include"connection.php";
        if ($pdo != null) {
            $sql = $pdo->prepare("SELECT * FROM sabores WHERE id = ?;");
            $sql->execute([$id]);
            return $sql->fetchAll();
        }
    }

    public static function editSabor($id,$nome,$preco){
        include"connection.php";
        if($pdo != null){
            $sql = $pdo->prepare("UPDATE sabores SET nome = ?, preco = ? WHERE id = ?;");
            $sql->execute([$nome,$preco,$id]);
            echo "<script> alert('sabor alterado'); </script>";
        }
    }

    public static function addSabor($nome,$preco){
        include"connection.php";
        if($pdo != null){
            $sql = $pdo->prepare('INSERT INTO sabores VALUES(null,?,?);');
            $sql->execute([$nome,$preco]);
            echo "<script> alert('sabor adicionado'); </script>";
        }
    }
}


