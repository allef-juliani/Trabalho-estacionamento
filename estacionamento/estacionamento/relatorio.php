<?php
include("conexao.php");

$sql = "SELECT placa, modelo, vaga, entrada, saida FROM veiculos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Relatório de Veículos</title>
     <!-- ESTILO DO CSS -->
     <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <nav>
        <!-- IMAGEM -->
    <img src="imagens/images2.png" height="80" alt="Logo">
    <h1>Bem-vindo ao Estacionamento</h1>
    <a href="index.php">Home</a><br>
    <a href="cadastrar.php">Cadastrar Veículo</a><br>
    <a href="relatorio.php">Ver Relatório</a><br>
    <a href="saida.php">Registrar Saída</a><br>
    <a href="logout.php">Sair</a>
    </nav>
    <h2>Relatório de Veículos</h2>
    <table>
        <tr>
            <th>Placa</th>
            <th>Modelo</th>
            <th>Vaga</th>
            <th>Entrada</th>
            <th>Saída</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["placa"]."</td><td>".$row["modelo"]."</td><td>".$row["vaga"]."</td><td>".$row["entrada"]."</td><td>".$row["saida"]."</td></tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Nenhum veículo cadastrado.</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
