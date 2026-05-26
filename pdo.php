<?php   
$host = "localhost";
$banco = "musicas_db";
$usuario = "root";
$senha = "";


try {
    $pdo = new PDO("mysql:host=$host;dbname=$banco",$usuario, $senha);
    echo "Conectado com sucesso!";
} catch (PDOException $e) {
    echo "Error: ". $e->getMessage();
}

?>