<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aniversairo</title>
</head>
<body>
    <form action="exercicio7.php" method="get">
        <label for="AnoDeNasci">Seu ano de Nascimento</label>
        <input type="number" name="AnoDeNasci" id="AnoDeNasci" placeholder="Ano de Nascimento">
        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php 
        $AnoNasceu = $_GET['AnoDeNasci'];
        $idade = 2025 - $AnoNasceu;

        echo $idade >= 18 ? "Você tem $idade anos e já é maior de idade." : "Você tem $idade anos e ainda é menor de idade.";
    ?>
</body>
</html>