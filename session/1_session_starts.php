<?php
    session_start();
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Sistema de Login</title>
    <style>
        body {
          
        background-color: #f8f9fa;
      }
      .login-container {
        max-width: 400px;
        margin: 0 auto;
        margin-top: 100px;
        padding: 20px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      }
      .login-header {
        text-align: center;
        margin-bottom: 30px;
      }
      .form-control:focus {
        border-color: #86b7fe;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
      }
      .btn-login {
        width: 100%;
        padding: 10px;
        font-weight: 600;
      }
      .footer-links {
        text-align: center;
        margin-top: 20px;
      }
    </style>
    
  </head>
  <body>
    <div class="container">
      <div class="login-container">
        <div class="login-header">
          <h3 class="mb-3">Bem-vindo de volta</h3>
          <p class="text-muted">Por favor, faça login para continuar</p>
        </div>
        
        <form action="1_session_starts.php" method="POST">
          <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Digite sua senha" required>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember">
            <label class="form-check-label" for="remember">Lembrar de mim</label>
            <a href="#" class="float-end text-decoration-none">Esqueceu a senha?</a>
          </div>
          <button type="submit" class="btn btn-primary btn-login">Entrar</button>
        </form>
        
        <div class="footer-links">
          <p class="text-muted">Não tem uma conta? <a href="#" class="text-decoration-none">Cadastre-se</a></p>
        </div>
      </div>
    </div>

    <?php
        $email = isset($_POST['email']) ? $_POST['email'] : exit();
        $password = isset($_POST['password']) ? $_POST['password'] : exit();

        if($email == 'admin@gmail.com' && $password == '2525@dev'){
          $_SESSION['email'] = $email;
          header('Location: 2_pagina_inicial.php')
            ?>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="alert alert-success" role="alert">
                         Login efetuado com sucesso!!!
                        </div>
                    </div>
                </div>
            </div>           
            <?php
        } else{
            ?>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="alert alert-warning" role="alert">
                            Login incorreto!!!
                        </div>
                    </div>
                </div>
            </div>           
            <?php
        }
        

        
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>