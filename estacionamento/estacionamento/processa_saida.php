<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $placa = $_POST["placa"];
    $horaSaida = date("Y-m-d H:i:s"); // Obtém a data e hora atual

    $sql = "UPDATE veiculos SET saida='$horaSaida' WHERE placa='$placa'";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Erro ao registrar a saída do veículo: " . $conn->error;
    }
}

$conn->close();
?>
