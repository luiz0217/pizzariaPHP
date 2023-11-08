<?php
namespace Models;

class ClientesModel
{

    public static function getClientes()
    {
        include"connection.php";
        $sql = $pdo->prepare('SELECT id,nome FROM clientes;');
        $sql->execute();
        return $sql->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function getClientesByID($id){
        include"connection.php";
        $sql = $pdo->prepare('SELECT nome FROM clientes WHERE id = ?;');
        $sql->execute([(int)$id]);
        $resp = $sql->fetchAll(\PDO::FETCH_ASSOC);
        return $resp[0]['nome'];
    }

    public static function addClientes($nome, $end, $tel)
    {
        include"connection.php";
        if ($pdo != null) {
            $sql = $pdo->prepare('INSERT INTO clientes(nome,endereco,telefone) VALUES(?,?,?)');
            $sql->execute([$nome, $end, $tel]);
            echo '<script> alert("cliente adicionado com suscesso") </script>';
        }
    }

}

?>