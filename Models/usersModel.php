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

    public static function addUser($login,$senha){
        $criptSen = password_hash($senha,PASSWORD_DEFAULT);
        include"connection.php";
        if($pdo != null){
            $sql = $pdo->prepare("INSERT INTO users VALUES(null,?,?);");
            $sql->execute([$login,$criptSen]);
            echo '<script> alert("usuario adicionado") </script>';
        }
    }

    public static function updatePass($id, $sen){
        include"connection.php";
        $cripSen = password_hash($sen,PASSWORD_DEFAULT);
        if($pdo != null){
            $sql = $pdo->prepare("UPDATE users SET senha = ? WHERE id = ?;");
            $sql->execute([$cripSen,$id]);
        }
    }

    public static function loginCheck($log, $sen)
    {
        include "connection.php";

        if ($pdo != null) {
            $sql = $pdo->prepare("SELECT * FROM users WHERE login = ?");
            $sql->execute([$log]);
            $arr = $sql->fetchAll(\PDO::FETCH_ASSOC);
            if (count($arr) > 0) {
                if (password_verify($sen, $arr[0]["senha"])) {
                    foreach ($arr[0] as $key => $value) {
                        $_SESSION[$key] = $value;
                        print_r($_SESSION[$key]);
                    }
                    echo "<br>";
                    print_r($_SESSION);
                    echo '<script> location.href="'.INCLUDE_PATH.'dashbord"</script>';
                } 
                else {
                    echo '<script> alert("falha ao logar") </script>';
                }
            } 
            else {
                echo '<script> alert("falha ao logar") </script>';
            }
        }
    }

    public static function logOut(){
        session_destroy();
        echo '<script> location.href="'.INCLUDE_PATH.'"</script>';
    }
}



?>