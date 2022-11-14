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
    <link rel="icon" type="image/x-icon" href="./assets/logo.png">

    <script src="https://kit.fontawesome.com/97878bd3c0.js" crossorigin="anonymous"></script>

    <title>Cake Delicious</title>
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
            <div class="content-login">
                <span><?php echo "$fnameUser $lnameUser" ?></span>
                <a href="logout.php">Sair da conta</a>
            </div>
        <?php else : ?>
            <div class="content-login">
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
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/bolo_aniversario.webp" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/bolo_cha.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="./assets/bolo_diversos.webp" alt="">
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
                    <img src="./assets/bolo_casamento_produto.jpg" alt="bolo de casamento">
                    <h3>Bolos de casamento</h3>
                    <a href="bolo_casamento.php">Fazer pedido</a>
                </div>

                <div class="card-product">
                    <img src="./assets/bolo_aniversario_produto.webp" alt="bolo de aniversário">
                    <h3>Bolos de aniversários</h3>
                    <a href="bolo_aniversario.php">Fazer pedido</a>
                </div>

                <div class="card-product">
                    <img src="./assets/bolo_cha_produto.jpg" alt="bolo de chá">
                    <h3>Bolos de chá</h3>
                    <a href="#">Fazer pedido</a>
                </div>

                <div class="card-product">
                    <img src="./assets/bolo_diversos_produto.png" alt="bolo diversos">
                    <h3>Bolos diversos</h3>
                    <a href="#">Fazer pedido</a>
                </div>
            </div>

            <?php if ($isLogged) : ?>
                <div class="content-texts-feedbacks">
                    <div>
                        <span>5 estrelas</span>
                        <span>username</span>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia voluptate
                            voluptas totam repellat qui, eum quaerat voluptatibus reiciendis ad quibusdam
                            doloribus vitae unde provident veritatis perferendis placeat, recusandae
                            debitis nisi?
                        </p>
                    </div>

                    <div>
                        <span>5 estrelas</span>
                        <span>username</span>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia voluptate
                            voluptas totam repellat qui, eum quaerat voluptatibus reiciendis ad quibusdam
                            doloribus vitae unde provident veritatis perferendis placeat, recusandae
                            debitis nisi?
                        </p>
                    </div>

                    <div>
                        <span>5 estrelas</span>
                        <span>username</span>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia voluptate
                            voluptas totam repellat qui, eum quaerat voluptatibus reiciendis ad quibusdam
                            doloribus vitae unde provident veritatis perferendis placeat, recusandae
                            debitis nisi?
                        </p>
                    </div>
                </div>

                <div class="content-feedback">
                    <form action="">
                        <div>
                            <select name="nota-feedback" id="nota-feedback">
                                <option value="5">5 estrelas</option>
                                <option value="4">4 estrelas</option>
                                <option value="3">3 estrelas</option>
                                <option value="2">2 estrelas</option>
                                <option value="1">1 estrelas</option>
                            </select>
                        </div>
                        <label for="feedback">Digite seu feedback</label>
                        <textarea name="feedback" id="feedback" cols="30" rows="5"></textarea>
                        <div class="content-button-feedback">
                            <button>Enviar</button>
                        </div>
                    </form>
                </div>
            <?php endif; ?>
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
            <img src="./assets/logo.png" alt="logo">
        </div>

        <div class="content-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.1990300256434!2d-38.57710688583541!3d-3.7668214972596052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74c01797285bb%3A0xa8888be05f940563!2sCentro%20Universit%C3%A1rio%20Est%C3%A1cio%20-%20Campus%20Parangaba!5e0!3m2!1spt-BR!2sbr!4v1667871175700!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./js/welcome.js"></script>
    <script src="./js/default.js"></script>
</body>

</html>