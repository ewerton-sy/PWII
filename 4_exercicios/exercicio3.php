<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio3.php" method="get">
        <label for="valor1">Digite um número</label>
        <input type="text" name="valor1" id="valor1" placeholder="Digite o número">
        <input type="submit" value="Enviar">
    </form>

    <?php 
        $valor = $_GET['valor1'];
        $valorInt = round($valor);

        if($valorInt > 100){
            echo "O valor $valorInt é maior que 100";
            exit();
        }
        
        if($valorInt < 100){
            echo "O valor $valorInt é menor que 100";
        } else{
            echo "o valor $valorInt é igual a 100";
        }
    
    ?>
</body>
</html>