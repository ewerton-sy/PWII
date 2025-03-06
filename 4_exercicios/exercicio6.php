<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qual é o maior valor?</title>
</head>
<body>
    <fieldset>
        <legend>Comparação entre valores</legend>
        <form action="exercicio6.php" method="get">

            <label for="valor1">Primeiro valor</label>
            <input type="text" name="valor1" id="valor1" placeholder="Digite um valor">
            <br>
            <label for="valor2">Segundo valor</label>
            <input type="text" name="valor2" id="valor2" placeholder="Digite um valor">
            <br>
            <input type="submit" value="Comparar">
        </form>
    </fieldset>

    <?php 
        $numero1 = $_GET['valor1'];
        $numero2 = $_GET['valor2'];
        if($numero1 > $numero2){
            echo "O maior valor entre os valores digitados é $numero1.";
        } else{
            echo "O maior valor entre os valores digitados é $numero2.";
        }
    ?>
</body>
</html>