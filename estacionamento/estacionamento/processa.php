<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $placa = $_POST["placa"];
    $entrada = $_POST["entrada"];
    $modelo = $_POST["modelo"];

    $sql = "INSERT INTO veiculos (placa, entrada, modelo, vaga) VALUES ('$placa', '$entrada', '$modelo', '$vaga')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Erro ao cadastrar o veículo: " . $conn->error;
    }
}

$conn->close();
?>