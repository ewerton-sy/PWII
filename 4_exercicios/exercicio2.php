<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
    <body>
            <form action="exercicio2.php" method="get">
            <label for="idade">Sua idade</label>
            <input type="text" name="idade" id="idade" placeholder="Sua idade" required>
            <br>
            <input type="submit" value="Enviar">

            </form>

        <?php 
           if( $_GET['idade'] < 16 ){
            echo 'Você não pode votar';
            exit();
           }
           if( $_GET['idade'] <= 17 || $_GET['idade'] >= 70){
            echo 'Não é obrigatório o seu voto';
            exit();
           } else {
            echo 'É obrigatório você votar';
           }
        ?>
    </body>
</html>