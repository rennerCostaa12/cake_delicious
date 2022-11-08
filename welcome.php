<?php

session_start();

$isLogged = false;

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
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

    <link rel="stylesheet" href="./style/welcome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/97878bd3c0.js" crossorigin="anonymous"></script>

    <title>Confeitaria</title>
</head>

<body>
    <header id="home">
        <div>
            <img src="" alt="logo">
            <button id="btn-open-nav-mobile">
                <i class="fas fa-sort-down"></i>
            </button>
        </div>
        <nav>
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
        </nav>
        <?php if ($isLogged) : ?>
            <div>
                <span><?php echo "$fnameUser $lnameUser" ?></span>
                <a href="logout.php">Sair da conta</a>
            </div>
        <?php else : ?>
            <div>
                <a href="cadastro_usuario.php">Cadastre-se</a>
                <a href="login.php">Login</a>
            </div>
        <?php endif; ?>
    </header>

    <main>
        <section class="container-slider-types-cakes">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="./assets/bolo_casamento.jpg" alt="">
                        <div class="content-banner">
                            <h2 class="title-banner">Bolos de casamento</h2>
                            <button class="btn-banner">Ver produto</button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/bolo_aniversario.webp" alt="">
                        <div class="content-banner">
                            <h2 class="title-banner">Bolos de aniversário</h2>
                            <button class="btn-banner">Ver produto</button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/bolo_cha.jpg" alt="">
                        <div class="content-banner">
                            <h2 class="title-banner">Bolos de chá</h2>
                            <button class="btn-banner">Ver produto</button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/bolo_diversos.webp" alt="">
                        <div class="content-banner">
                            <h2 class="title-banner">Bolos diversos</h2>
                            <button class="btn-banner">Ver produto</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>

        <section id="servicos" class="container-products">
            <h1>Nossos produtos</h1>

            <div class="content-products">
                <div class="card-product">
                    <img src="./assets/bolo_produto1.webp" alt="image-product-1">
                    <h3>Nome do produto</h3>
                    <button>Ver Produto</button>
                </div>

                <div class="card-product">
                    <img src="./assets/bolo_produto2.jpg" alt="image-product-2">
                    <h3>Nome do produto</h3>
                    <button>Ver Produto</button>
                </div>

                <div class="card-product">
                    <img src="./assets/bolo_produto3.jpg" alt="image-product-3">
                    <h3>Nome do produto</h3>
                    <button>Ver Produto</button>
                </div>

                <div class="card-product">
                    <img src="./assets/bolo_produto4.webp" alt="image-product-4">
                    <h3>Nome do produto</h3>
                    <button>Ver Produto</button>
                </div>
            </div>
        </section>

        <section id="quem-somos" class="container-about-us">
            <h1>Sobre nós</h1>
            <div class="content-about-us">
                <div class="content-description-about">
                    <p class="description-integrant"></p>
                </div>

                <div class="content-img-integrant">
                    <img class="image-itegrant" src="" alt="">
                </div>
            </div>
            <div class="content-button-about">
                <button class="button-slider-about">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="button-slider-about">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </section>
    </main>

    <footer id="contatos">
        <div class="content-logo-footer">
            <h1>LOGO</h1>
        </div>

        <div class="content-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.1990300256434!2d-38.57710688583541!3d-3.7668214972596052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74c01797285bb%3A0xa8888be05f940563!2sCentro%20Universit%C3%A1rio%20Est%C3%A1cio%20-%20Campus%20Parangaba!5e0!3m2!1spt-BR!2sbr!4v1667871175700!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./js/welcome.js"></script>
</body>

</html>