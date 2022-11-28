<?php
include 'controllers/bolo_diversos.controller.php';

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
$isAdmin = $_SESSION['isAdmin'];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./style/bolos_diversos.css">
    <link rel="stylesheet" href="./style/welcome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./assets/logo.png">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/97878bd3c0.js" crossorigin="anonymous"></script>

    <title>Cake Delicious | Bolos Diversos</title>
</head>

<body>

    <header id="home">
        <nav class="navbar bg-light fixed-top">
            <div class="container-fluid">
                <img src="./assets/logo.png" alt="logo">
                <ul class="content-desktop-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="welcome.php#home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="welcome.php#servicos">PRODUTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="welcome.php#sobre-nos">SOBRE NÓS</a>
                    </li>
                </ul>
                <div class="content-login-and-nav">
                    <?php if ($isLogged) : ?>
                        <ul class="content-login-desktop">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i><?php echo $fnameUser . " " . $lnameUser ?>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php if ($isAdmin) : ?>
                                        <li><a class="dropdown-item" href="cadastro_bolo_diversos.php">Adicionar bolo</a></li>
                                    <?php endif; ?>
                                    <li><a class="dropdown-item" href="meus_pedidos.php">Meus Pedidos</a></li>
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    <?php else : ?>
                        <div class="content-logout">
                            <a href="login.php">Fazer Login</a>
                            <a href="cadastro_usuario.php">Cadastrar-se</a>
                        </div>
                    <?php endif; ?>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <div></div>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" href="welcome.php#home">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="welcome.php#servicos">PRODUTOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="welcome.php#sobre-nos">SOBRE NÓS</a>
                            </li>
                        </ul>

                        <?php if ($isLogged) : ?>
                            <ul class="content-login-mobile">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-user"></i><?php echo $fnameUser . " " . $lnameUser ?>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="meus_pedidos.php">Meus Pedidos</a></li>
                                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        <?php else : ?>
                            <div class="content-logout">
                                <a href="login.php">Fazer Login</a>
                                <a href="cadastro_usuario.php">Cadastrar-se</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <h1>Bolos diversos</h1>
        <div class="content-cakes">
            <?php foreach ($pdo->query($getAllCakesSeveral) as $data) : ?>
                <div class="cakes-cards">
                    <img src="<?php echo $data['url_image'] ?>" alt="Image <?php echo $data['name_cake'] ?>">
                    <h2><?php echo $data['name_cake']?></h2>
                    <span id="price-cake"><?php echo $data['price'] ?></span>
                    <button>Comprar</button>
                </div>
            <?php endforeach; ?>
        </div>
    </main>


    <footer id="contatos">
        <div class="content-logo-footer">
            <img src="./assets/logo.png" alt="logo">
        </div>

        <div class="content-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.1990300256434!2d-38.57710688583541!3d-3.7668214972596052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74c01797285bb%3A0xa8888be05f940563!2sCentro%20Universit%C3%A1rio%20Est%C3%A1cio%20-%20Campus%20Parangaba!5e0!3m2!1spt-BR!2sbr!4v1667871175700!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </footer>

    <script>
        const listPrices = document.querySelectorAll('#price-cake');

        for(let x in listPrices){
            let valueListPrices = listPrices[x].textContent;
            let valueFormated = Number(valueListPrices).toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

            console.log(valueFormated)

            listPrices[x].innerHTML = valueFormated;
        }
    </script>
</body>

</html>