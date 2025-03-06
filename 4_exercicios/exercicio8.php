<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Calculo de bônus</legend>
        <form action="exercicio8.php" method="get">
            <label for="nome">Vendedor:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome do Vendedor">
            <br>
            <label for="totalVendas">Valor de vendas:</label>
            <input type="text" name="totalVendas" id="totalVendas" placeholder="Total de vendas">
            <br>
            <input type="submit" value="Calcular">

        </form>
    </fieldset>
    <br>

    <?php 
        $vendedor = $_GET['nome'];
        $totalVendas = $_GET['totalVendas'];
        $bonus;

        if($totalVendas >= 5000){
            $bonus = $totalVendas * 0.10;
            echo "Vendedor: $vendedor. <br>";
            echo "################ <br>";
            echo "Total de Vendas: $totalVendas. <br>";
            echo "Valor de bônus: 10%. <br>";
            $totalVendas+= $bonus;
            echo "Valor a receber: $totalVendas. <br>";
            echo "################";
            exit();
        }

        if($totalVendas >= 2000){
            $bonus = $totalVendas * 0.20;
            echo "Vendedor: $vendedor. <br>";
            echo "################ <br>";
            echo "Total de Vendas: $totalVendas. <br>";
            echo "Valor de bônus: 20%. <br>";
            $totalVendas+= $bonus;
            echo "Valor a receber: $totalVendas. <br>";
            echo "################";
            exit();
        }

        if($totalVendas >= 1000){
            $bonus = $totalVendas * 0.30;
            echo "Vendedor: $vendedor. <br>";
            echo "################ <br>";
            echo "Total de Vendas: $totalVendas. <br>";
            echo "Valor de bônus: 30%. <br>";
            $totalVendas+= $bonus;
            echo "Valor a receber: $totalVendas. <br>";
            echo "################";
        } else {
            echo "Vendedor: $vendedor. <br>";
            echo "################ <br>";
            echo "Total de Vendas: $totalVendas. <br>";
            echo "Valor de bônus: 0%. <br>";
            echo "Valor a receber: $totalVendas. <br>";
            echo "################";
        }
    ?>
</body>
</html>