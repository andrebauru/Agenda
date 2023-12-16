<?php
$servername = "localhost";
$username = "terreiro_calendar";
$password = "Wilhelm1988";
$dbname = "terreiro_calendar";

// Criando conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
