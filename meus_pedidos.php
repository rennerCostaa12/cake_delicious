<?php
include 'controllers/meus_pedidos_controller.php';

session_start();

$isLogged = false;

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: welcome.php");
    $isLogged = false;
} else {
    $isLogged = true;
}

$fnameUser = $_SESSION['first_name'];
$lnameUser = $_SESSION['last_name'];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./assets/logo.png">

    <script src="https://kit.fontawesome.com/97878bd3c0.js" crossorigin="anonymous"></script>
    <title>Cake Delicious | Meus Pedidos</title>

    <link rel="stylesheet" href="./style/welcome.css">
    <link rel="stylesheet" href="./style/meus_pedidos.css">
</head>

<body>
    <header id="home">
        <div class="content-logo">
            <img src="./assets/logo.png" alt="logo">
            <button id="btn-open-nav-mobile">
                <i class="fas fa-sort-down"></i>
            </button>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="welcome.php#home">HOME</a>
                </li>
                <li>
                    <a href="welcome.php#servicos">SERVIÇOS</a>
                </li>
                <li>
                    <a href="welcome.php#quem-somos">QUEM SOMOS</a>
                </li>
                <li>
                    <a href="welcome.php#contatos">CONTATOS</a>
                </li>
            </ul>
        </nav>
        <?php if ($isLogged) : ?>
            <div class="content-login">
                <span><?php echo "$fnameUser $lnameUser" ?></span>
                <a href="meus_pedidos.php">Meus Pedidos</a>
                <a href="logout.php">Sair da conta</a>
            </div>
        <?php else : ?>
            <div class="content-login">
                <a href="./cadastro_usuario.php">Cadastre-se</a>
                <a href="./login.php">Login</a>
            </div>
        <?php endif; ?>
    </header>

    <div>
        <h1 class="title-page">Meus Pedidos</h1>

        <div class="content-table">
            <table>
                <thead>
                    <th>Categoria</th>
                    <th>Andares</th>
                    <th>Tipo de massa</th>
                    <th>Data de entrega</th>
                    <th>Recheio</th>
                    <th>Cobertura</th>
                    <th>Observação</th>
                    <th>Preço</th>
                    <th>É frete?</th>
                </thead>
                <tbody>
                    <?php foreach ($pdo->query($getAllMyRequests) as $data) : ?>
                        <tr>
                            <td><?php echo $data['name_category'] ?></td>
                            <td><?php echo $data['size_cake'] ?></td>
                            <td><?php echo $data['type_pasta'] ?></td>
                            <td><?php echo $data['receipt_date'] ?></td>
                            <td><?php echo $data['filling'] ?></td>
                            <td><?php echo $data['roof'] ? $data['roof'] : "Sem cobertura" ?></td>
                            <td><?php echo $data['note'] ?></td>
                            <td id="money_cake"><?php echo $data['price'] ?></td>
                            <td><?php echo $data['isshipping'] ? "Sim" : "Não" ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer id="contatos">
        <div class="content-logo-footer">
            <img src="./assets/logo.png" alt="logo">
        </div>

        <div class="content-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.1990300256434!2d-38.57710688583541!3d-3.7668214972596052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74c01797285bb%3A0xa8888be05f940563!2sCentro%20Universit%C3%A1rio%20Est%C3%A1cio%20-%20Campus%20Parangaba!5e0!3m2!1spt-BR!2sbr!4v1667871175700!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </footer>

    <div class="modal">
        <div class="modal-content">
            <div class="content-btn-close-modal">
                <button>X</button>
            </div>

            <ul>
                <li>
                    <a href="#home">HOME</a>
                </li>
                <li>
                    <a href="#servicos">SERVIÇOS</a>
                </li>
                <li>
                    <a href="#quem-somos">QUEM SOMOS</a>
                </li>
                <li>
                    <a href="#contatos">CONTATOS</a>
                </li>
            </ul>
            <?php if ($isLogged) : ?>
                <div class="content-login-mobile">
                    <span><?php echo "$fnameUser $lnameUser" ?></span>
                    <div>
                        <a href="meus_pedidos.php">Meus Pedidos</a>
                    </div>
                    <div>
                        <a href="logout.php">Sair da conta</a>
                    </div>
                </div>
            <?php else : ?>
                <div class="content-login-mobile">
                    <div>
                        <a href="./cadastro_usuario.php">Cadastre-se</a>
                    </div>
                    <div>
                        <a href="./login.php">Login</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script src="./js/default.js"></script>
    <script src="./js/meus_pedidos.js"></script>
</body>

</html>