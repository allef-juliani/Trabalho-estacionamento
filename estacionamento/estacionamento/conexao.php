<?php
$servername = "localhost";
$username = "vitor";
$password = "";
$database = "estacionamento";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão com o banco de dados falhou: " . $conn->connect_error);
}
?>