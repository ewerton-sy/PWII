<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem crecente</title>
</head>
<body>
    <fieldset>
        <form action="exercicio9.php" method="get">
            <label for="valor1">Primeiro Valor</label>
            <input type="text" name="valor1" id="valor1" placeholder="Digite o valor">
            <br>
            <label for="valor2">Segundo Valor</label>
            <input type="text" name="valor2" id="valor2" placeholder="Digite o valor">
            <br>
            <label for="valor3">Terçeiro Valor</label>
            <input type="text" name="valor3" id="valor3" placeholder="Digite o valor">
            <br>
            <input type="submit" value="Ordenar">
        </form>
    </fieldset>
    
    <?php
        $valores = array($_GET['valor1'], $_GET['valor2'], $_GET['valor3']);
        sort($valores);

        echo "Os valores em ordem crecente: " . implode(", ", $valores) . ".";
    ?>
</body>
</html>