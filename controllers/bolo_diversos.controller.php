<?php

include "config/database.php";

$getAllCakesSeveral = "SELECT * FROM cakes WHERE category_cake_id = 4;";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nameCake = $_POST['nome-bolo'];
    $valueCake = $_POST['price-cake'];
    $imageUrl = $_POST['url-imagem'];

    $errorMessage = '';


    if (empty($nameCake) || empty($valueCake) || empty($imageUrl)) {
        $errorMessage = 'Preencha os campos!';
    } else {
        session_start();
        $idUser = $_SESSION['id'];

        if ($nameCake || $valueCake || $imageUrl) {
            $sqlInsert = $pdo->prepare("INSERT INTO cakes (name_cake, category_cake_id, user_id, size_cake, type_pasta, receipt_date, filling, roof, note, price, theme_cake, url_image, isshipping) VALUES (:name_cake, 4, :user, NULL, NULL, NULL, NULL, NULL, NULL, :price, NULL, :url_image, NULL);");


            $sqlInsert->bindParam(':user', $idUser);
            $sqlInsert->bindParam(':name_cake', $nameCake);
            $sqlInsert->bindParam(':price', $valueCake);
            $sqlInsert->bindParam(':url_image', $imageUrl);

            $sqlInsert->execute();

            $msg = "Dados inseridos com sucesso";
            header("Location: welcome.php");
        } else {
            echo "Digite os seus dados";
        }
    }
}
