<?php
    include '../../config/connection.php';

    $stmt = $pdo->query('SELECT*FROM usuario');
    $usuarios = $stmt->fetchAll();

    // echo '<pre>';
    // echo var_dump($usuarios);
?>
  <?php  foreach ($usuarios as $indice => $user) {?>
    <p>
        <b>Nome da Heroina:</b> <?php echo $user['username'];?>
    </p>
    <hr>
 <?php } ?>