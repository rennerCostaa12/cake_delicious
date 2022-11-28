<?php include 'controllers/login_controller.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./style/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./assets/logo.png">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    <title>Login</title>
</head>

<body>
    <div class="content-form">
        <div data-aos="flip-left" class="form">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <h1>LOGIN</h1>
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="senha" placeholder="Senha">
                <?php
                echo "<span>$errorMessage</span>";
                ?>
                <button type="submit">Login</button>

                <span class="msg-not-register">Caso não tenha conta, clique em <a href="cadastro_usuario.php">Cadastrar usuário</a></span>
            </form>
        </div>

        <div class="image-background"></div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./js/data-aos.js"></script>
</body>
</html>