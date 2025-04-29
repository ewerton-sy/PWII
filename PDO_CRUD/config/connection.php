<?php
    $host = 'localhost';
    $database = 'escola';
    $user ='root';
    $password ='';

    try{
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8",$user,$password );   //realizando conexão com o BD por meio do plugin de PHP PDO
    //criando uma nova cópia, conectando 
    } catch(PDOException $erro){
        die('Erro na Conexão:' . $erro->getMessage());
    }

?>