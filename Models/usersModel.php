<?php
namespace Models;

class usersModel
{
    public static function getUsers(){
        include"connection.php";
        if($pdo != null){
            $sql = $pdo->prepare("SELECT login FROM users;");
            $sql->execute();
            return $sql->fetchAll(\PDO::FETCH_ASSOC);
        }
    }

    public static function updatePass($id, $sen){
        include"connection.php";
        if($pdo != null){
            $sql = $pdo->prepare("UPDATE users SET senha = ? WHERE id = ?;");
            $sql->execute([$sen,$id]);
        }
    }
}



?>