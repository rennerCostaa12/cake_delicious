<?php include 'controllers/login_controller.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/login.css">
    <title>Login</title>
</head>

<body>
    <div class="content-form">
        <?php 
            echo "<h1>$errorMessage</h1>";
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <h1>Login</h1>
            <input type="text" name="email" placeholder="email">
            <input type="password" name="senha" placeholder="senha">
            <button type="submit">Login</button>

            <span>Caso não tenha conta, clique em <a href="cadastro_usuario.php">Cadastrar usuário</a></span>
        </form>
        
    </div>
</body>

</html>