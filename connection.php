<?php

$pdo;
try {
    $pdo = new \PDO('mysql:host=localhost;dbname=pitzaphp', 'root', '');
} catch (\PDOException $e) {
    echo '<script> alert("não foi possivel se conectar"); </script>';
}


?>