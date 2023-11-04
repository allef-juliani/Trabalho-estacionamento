<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Saída do Veículo</title>
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
    <h2>Saída do Veículo</h2>
    <form action="processa_saida.php" method="post">
        Placa do Veículo: <input type="text" name="placa"><br>
        <input type="submit" value="Registrar Saída">
    </form>
</body>
</html>
