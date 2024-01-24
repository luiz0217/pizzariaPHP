<?php
namespace Models;

class loginModel
{
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
                } else {
                    echo '<script> alert("falha ao logar") </script>';
                }
            } else {
                echo '<script> alert("falha ao logar") </script>';
            }
        }
    }
}



?>