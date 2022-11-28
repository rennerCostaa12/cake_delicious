<?php
include 'controllers/bolo_cha_controller.php';

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
    <title>Cake Delicious | Pedido - Bolo de Chá</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./style/welcome.css">
    <link rel="stylesheet" href="./style/pagina_bolos.css">
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
                                    <li><a class="dropdown-item" href="meus_pedidos.php">Meus Pedidos</a></li>
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    <?php else : ?>
                        <div class="content-logout">
                            <a href="login.php">Fazer Login</a>
                            <a href="cadastro_usuario.php">Cadastrar-ser</a>
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
                                <a href="cadastro_usuario.php">Cadastrar-ser</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="card">
        <img class="card_img" src="./assets/bolo_cha_banner.jpg" alt="Bolo de casamento">

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="card_form">
            <h1 class="card_form_titulo">Escolha seu bolo de chá</h1>

            <div class="card_form_div">
                <label class="type-labels" for="tema">Tema do bolo</label><br>
                <input class="input-theme-cake" type="text" id="tema" name="tema">
            </div>

            <div class="card_form_div">
                <label class="type-labels" for="qnt_andares">Quantidade de andares</label><br>
                <select name="qnt_andares" id="qnt_andares">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>

            <div class="card_form_div">
                <h3>Tipo de massa</h3>

                <div class="content-inputs-type-radio">
                    <input type="radio" id="amanteigada" name="tipo_massa" value="Amanteigada">
                    <label for="amanteigada">Amanteigada</label><br>
                    <input type="radio" id="pao-de-lo" name="tipo_massa" value="Pão de ló">
                    <label for="pao-de-lo">Pão de ló</label><br>
                    <input type="radio" id="red-velvet" name="tipo_massa" value="Red Velvet">
                    <label for="red-velvet">Red Velvet</label><br>
                    <input type="radio" id="mocaccino" name="tipo_massa" value="Mocaccino">
                    <label for="mocaccino">Mocaccino</label><br>
                </div>
            </div>
            <div class="card_form_div">
                <h3>Recheio</h3>

                <div class="content-inputs-type-radio">
                    <input type="radio" id="chocolate" name="recheio" value="Chocolate">
                    <label for="chocolate">Chocolate</label><br>
                    <input type="radio" id="beijinho" name="recheio" value="Beijinho">
                    <label for="beijinho">Beijinho</label><br>
                    <input type="radio" id="nutela" name="recheio" value="Nutela">
                    <label for="nutela">Nutela</label><br>
                    <input type="radio" id="4leites" name="recheio" value="4Leites">
                    <label for="4leites">4Leites</label><br>
                </div>
            </div>

            <label for="check_cobertura">Deseja inserir cobertura?</label>
            <input id="check_cobertura" name="check_cobertura" type="checkbox">
            <div id="content-cobertura" class="card_form_div">
                <h3>Coberturas disponíveis</h3>

                <div class="content-inputs-type-radio">
                    <input type="radio" id="chantilly" name="cobertura" value="Chantilly">
                    <label for="chantilly">Chantilly</label><br>
                    <input type="radio" id="pasta-de-leite-ninho" name="cobertura" value="Pasta de leite ninho">
                    <label for="pasta-de-leite-ninho">Pasta de leite ninho</label><br>
                    <input type="radio" id="pasta-americana" name="cobertura" value="Pasta americana">
                    <label for="pasta-americana">Pasta americana</label><br>
                    <input type="radio" id="ninho" name="cobertura" value="Ninho">
                    <label for="ninho">Ninho</label><br>
                </div>
            </div>

            <div class="card_form_div">
                <label class="type-labels">Frete:</label><br>
                <select id="isShipping" name="frete">
                    <option value="" selected disabled>Selecione</option>
                    <option value="buscar">Ir buscar</option>
                    <option value="frete">Frete</option>
                </select>
            </div>

            <div class="card_form_div">
                <label class="type-labels">Alguma observação?</label><br>
                <textarea rows="2" id="observacao" name="observacao"></textarea>
            </div>

            <div class="card_form_div">
                <div class="content-values-cake">
                    <input type="text" id="value-money-cake" class="values_cake_input" name="value_cake_money" value="0" readonly>
                    <input type="text" id="value-days-shipping" class="values_cake_input" name="receipt_date" value="0" readonly>
                    <span id="viewfinder-value-shipping"></span>
                </div>
            </div>

            <button class="card_form_button" type="submit">Enviar pedido</button>
        </form>
    </div>

    <footer id="contatos">
        <div class="content-logo-footer">
            <img src="./assets/logo.png" alt="logo">
        </div>

        <div class="content-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.1990300256434!2d-38.57710688583541!3d-3.7668214972596052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74c01797285bb%3A0xa8888be05f940563!2sCentro%20Universit%C3%A1rio%20Est%C3%A1cio%20-%20Campus%20Parangaba!5e0!3m2!1spt-BR!2sbr!4v1667871175700!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </footer>

    <?php
    echo "<h1>$errorMessage</h1>";
    ?>
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
    <script src="./js/pagina_bolo.js"></script>
</body>

</html>