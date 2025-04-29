<?php
    include '../../config/connection.php';
?>
<form action="create.php" method="POST">
    <label for="username">Nome de usuário:</label>
    <input type="text" name="username" id="username">
    <br><br>
    <label for="password">Senha do usuário:</label>
    <input type="password" name="password" id="password">
    <br><br>
    <button type="submit">Cadastrar</button>

</form>
<?php
    $username = isset($_POST['username']) ? $_POST['username'] : exit();
    $password = isset($_POST['password']) ? $_POST['password'] : exit();

    //statement-declaração
    $stmt = $pdo->prepare('INSERT INTO usuario (username, password) VALUES(:username, :password)');
    $stmt->bindParam(':username',$username); //limpeza p ver se não é malicioso
    $stmt->bindParam(':password',$password);
    $stmt->execute();


?>

