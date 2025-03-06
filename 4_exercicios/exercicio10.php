<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Login</legend>
        <form action="exercicio10.php" method="post">
            <label for="usuario">Usuário:</label>
            <input type="text" name="usuario" id="usuario" placeholder="Digite o usuário">
            <br>
            <label for="senha">Senha:</label>
            <input type="text" name="senha" id="senha" placeholder="Digite a senha">
            <br>
            <input type="submit" value="Login">
        </form>
    </fieldset>

    <?php 
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        if(!empty($_POST['usuario']) && isset($_POST['senha'])){
            if($usuario == 'Admin' && $senha == '123'){
                echo "Conectado com sucesso!";
            } else{
                echo "Acesso negado! Usuário ou senha incorretos!";
            }
        } 
        else{
            echo "Usuário ou senha faltando.";
        }
    ?>
</body>
</html>