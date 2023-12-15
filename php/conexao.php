<?php
$servername = "nome_do_servidor";
$username = "nome_de_usuario";
$password = "senha";
$dbname = "nome_do_banco_de_dados";

// Criando conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
