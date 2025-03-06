<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vogal ou consoante</title>
</head>
<body>
    <fieldset>
        <legend>Consoante ou Vogal</legend>
        <form action="exercicio5.php" method="get">
            <label for="letra">Digite uma Letra:</label>
            <br>
            <input type="text" name="letra" id="letra" placeholder="Digite uma letra" maxlength="1">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </fieldset>

    <?php 
        $letra = strtoupper($_GET['letra']);

        if($letra == "A" || $letra == "E"){
            echo "A letra <strong>$letra</strong> é uma Vogal.";
            exit();
        }

        if($letra == "I" || $letra == "O"){
            echo "A letra <strong>$letra</strong> é uma Vogal.";
            exit();
        }

        if($letra == "U"){
            echo "A letra <strong>$letra</strong> é uma Vogal.";
        } else{
            echo "A letra <strong>$letra</strong> é uma Consoante.";
        }
    ?>
</body>
</html>