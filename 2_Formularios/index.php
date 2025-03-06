<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
 
    <form action="index.php" method="get">
   <fieldset>

    <legend>Informações do Personagem</legend>
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" placeholder="Nome do personagem" required>

    <br>

    <label for="poder">Poder:</label> 
    <input type="text" name="poder" id="poder" placeholder="Poder do personagem" required>

    <br>
    
    <input type="submit" value="Enviar">

   </fieldset>
    </form>
    <?php
    if(isset($_GET['nome'])){ //está definida?
        if(empty($_GET['nome'])) {  //se não tem nada, vazio
              echo 'O nome é obrigatório';
        }
        else{
            echo $_GET['nome'];
         }
    }  
 
    if(isset($_GET['poder'])){ //está definida?
        if(empty($_GET['poder'])) {  //se não tem nada, vazio
              echo 'O poder é obrigatório';
        }
        else{
            echo $_GET['poder'];
         }
    }  
        
    ?>
   
</body>
</html>