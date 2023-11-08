<?php
namespace Models;

class loginModel
{
    public static function loginCheck($log, $sen)
    {
        
        include"connection.php";
        if ($pdo != null) {
            $sql = $pdo->prepare("SELECT * FROM users WHERE login = ?");
            $sql->execute([$log]);
            $arr = $sql->fetchAll(\PDO::FETCH_ASSOC);
            if(count($arr) > 0){
                if (password_verify($sen, $arr[0]["senha"])) {
                    echo"senha certa";
                    session_start();
                    foreach ($arr as $key => $value) {
                        $_SESSION[$key] = $value;
                    }
                    echo '<script> location.href="'.INCLUDE_PATH.'dashbord"</script>';
                }
                else{
                    echo '<script> alert("falha ao logar") </script>';
                }
            }
            else{
                echo '<script> alert("falha ao logar") </script>';
            }
        }
    }
}



?>

