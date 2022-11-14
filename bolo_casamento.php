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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./assets/logo.png">

    <script src="https://kit.fontawesome.com/97878bd3c0.js" crossorigin="anonymous"></script>
    <title>Cake Delicious | Pedido - Bolo de Casamento</title>

    <link rel="stylesheet" href="./style/welcome.css">
    <link rel="stylesheet" href="./style/bolo_casamento.css">
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
                <a href="logout.php">Sair da conta</a>
            </div>
        <?php else : ?>
            <div class="content-login">
                <a href="cadastro_usuario.php">Cadastre-se</a>
                <a href="login.php">Login</a>
            </div>
        <?php endif; ?>
    </header>

    <div class="card">
        <img class="card_img" src="./assets/bolo_de_casamento_banner.jpg" alt="Bolo de casamento">
        <h2 class="card_titulo">O Bolo perfeito para o seu casamento</h2>
        <span class="card_descricao">
            O bolo de casamento é um dos itens essenciais dessa festa. Nada melhor do que um exemplar bonito e saboroso, não é mesmo?
        </span>
        <span class="card_descricao">
            Confira abaixo algumas opções para montar o bolo ideal para o seu casamento.
        </span>
        <br>
        <form class="card_form">
            <h3 class="card_form_titulo">Escolha seu bolo</h3>

            <div class="card_form_div">
                <label for="qnt_andares">Quantidade de andares</label><br>
                <select name="qnt_andares" id="qnt_andares">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>

            </div>
            <div class="card_form_div">
                <label>Tipo de massa:</label><br>
                <select id="massa">
                    <option value="" selected disabled>Selecione</option>
                    <option value="Amanteigada">Amanteigada</option>
                    <option value="Pão de ló">Pão de ló</option>
                    <option value="Red Velvet">Red Velvet</option>
                    <option value="Mocaccino">Mocaccino</option>
                </select>
            </div>
            <div class="card_form_div">
                <label>Recheio:</label><br>
                <select name="recheio" id="recheio">
                    <option value="" selected disabled>Selecione</option>
                    <option value="Chocolate">Chocolate</option>
                    <option value="Beijinho">Beijinho</option>
                    <option value="Nutela">Nutela</option>
                    <option value="4Leites">4Leites</option>
                    <option value="Ninho">Ninho</option>
                    <option value="Doce de leite">Doce de leite</option>
                </select>
            </div>
            <div class="card_form_div">
                <label>Cobertura:</label><br>
                <select name="cobertura" id="cobertura">
                    <option value="" selected disabled>Selecione</option>
                    <option value="Chantilly">Chantilly</option>
                    <option value="Pasta de leite ninho">Pasta de leite ninho</option>
                    <option value="Pasta americana">Pasta americana</option>
                    <option value="Ninho">Ninho</option>
                </select>
            </div>
            <div class="card_form_div">
                <label>Alguma observação?</label><br>
                <textarea rows="2" id="observacao" name="observacao"></textarea>
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

    <script src="./js/default.js"></script>
</body>

</html>