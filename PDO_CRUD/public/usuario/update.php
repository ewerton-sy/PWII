<?php
    include '../../config/connection.php';

    if($_SERVER['REQUEST_METHOD'] == 'GET'){

        $id = isset($_GET['id']) ? $_GET['id'] : exit();
    
        if (empty($id)){
            echo 'É necessário informar o código!!!';
            exit();
        }

        $stmt = $pdo->prepare('SELECT*FROM usuario WHERE id = :id');
        $stmt->bindParam(':id', $id); //insere os id em :id da linha acima
        $stmt->execute();  //executa a consulta que foi preparada
        $usuario = $stmt->fetchAll(); //converter os dados em Array
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id = isset($_POST['id']) ? $_POST['id'] : exit();
        $username = isset($_POST['username']) ? $_POST['username'] : exit();
        $password = isset($_POST['password']) ? $_POST['password'] : exit();
    
        if (empty($id)){
            echo 'É necessário informar o código!!!';
            exit();
        }
        if (empty($username)){
            echo 'É necessário informar o nome do usuário!!!';
            exit();
        }
        if (empty($password)){
            echo 'Favor informar a senha!!!';
            exit();
        }

        $stmt = $pdo->prepare('UPDATE usuario SET username=:username, password=:password WHERE id=:id');
        $stmt->bindParam(':id', $id);
        $stmt->bindParam('username', $username);
        $stmt->bindParam('password', $password);
        $stmt->execute();

        Header("Location: read.php");
    }
    

    
?>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $usuario[0]["id"];?>">
    <label for="username">Nome de usuário:</label>
    <input type="text" name="username" id="username" value="<?php echo $usuario[0]["username"];?>">
    <br><br>
    <label for="password">Senha:</label>
    <input type="password" name="password" id="password">
    <br><br>
    <button type="submit">Cadastrar</button>
</form>
  