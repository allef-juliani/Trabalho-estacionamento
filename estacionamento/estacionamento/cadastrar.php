<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Veículo</title>
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
    <h2>Cadastro de Veículo</h2>
    <form action="processa.php" method="post">
        Placa do Veículo: <input type="text" name="placa"><br>
        Entrada: <input type="datetime-local" name="entrada"><br>
        Modelo: <input type="text" name="modelo"><br>
        Vaga: <input type="text" name="vaga"><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
