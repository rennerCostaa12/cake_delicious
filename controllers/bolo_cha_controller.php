<?php

include "config/database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $qntFloors = $_POST['qnt_andares'];
    $typePasta = $_POST['tipo_massa'];
    $filling = $_POST['recheio'];
    $roof = $_POST['cobertura'];
    $note = $_POST['observacao'];
    $receipt_date = $_POST['receipt_date'];
    $freteSelect = $_POST ['frete'];

    $errorMessage = '';

    $isShipping = $freteSelect == "frete" ? true : false;;

    $priceDefault = $roof ? 300 : 250;

    $priceFinal = $isShipping ? $priceDefault + 20 : $priceDefault;


    if (empty($qntFloors) || empty($typePasta) || empty($filling) || empty($receipt_date) || empty($freteSelect)) {
        $errorMessage = 'Preencha os campos!';
    } else {
        session_start();
        $idUser = $_SESSION['id'];

        if ($qntFloors || $typePasta || $filling || $roof || $note || $freteSelect) {
            if($isShipping){
                $sqlInsert = $pdo->prepare("INSERT INTO cakes (category_cake_id, user_id, size_cake, type_pasta, receipt_date, filling, roof, note, price, isshipping) VALUES (3, :user, :size_cake, :type_pasta, :receipt_date, :filling, :roof, :note, :price, true);");
            }else{
                $sqlInsert = $pdo->prepare("INSERT INTO cakes (category_cake_id, user_id, size_cake, type_pasta, receipt_date, filling, roof, note, price, isshipping) VALUES (3, :user, :size_cake, :type_pasta, :receipt_date, :filling, :roof, :note, :price, false);");
            }

            $sqlInsert->bindParam(':user', $idUser);
            $sqlInsert->bindParam(':size_cake', $qntFloors);
            $sqlInsert->bindParam(':type_pasta', $typePasta);
            $sqlInsert->bindParam(':receipt_date', $receipt_date);
            $sqlInsert->bindParam(':filling', $filling);
            $sqlInsert->bindParam(':roof', $roof);
            $sqlInsert->bindParam(':note', $note);
            $sqlInsert->bindParam(':price', $priceFinal);

            $sqlInsert->execute();


            $msg = "Dados inseridos com sucesso";
            header("Location: welcome.php");
        } else {
            echo "Digite os seus dados";
        }
    }
}
