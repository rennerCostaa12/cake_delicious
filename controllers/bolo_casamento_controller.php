<?php

include "config/database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $qntFloors = $_POST['qnt_andares'];
    $typePasta = $_POST['tipo_massa'];
    $filling = $_POST['recheio'];
    $roof = $_POST['cobertura'];
    $note = $_POST['observacao'];
    $receipt_date = $_POST['receipt_date'];
    $freteSelect = $_POST['frete'];
    $valueCake = $_POST['value_cake_money'];

    $errorMessage = '';

    $isShipping = $freteSelect == "frete" ? true : false;

    $valueCakeFormated =  (float)number_format(substr($valueCake, 4));
    $receiptDateFormated = (int)$receipt_date;

    
    if (empty($qntFloors) || empty($typePasta) || empty($filling) || empty($receipt_date) || empty($freteSelect)) {
        $errorMessage = 'Preencha os campos!';
    } else {
        session_start();
        $idUser = $_SESSION['id'];

        
        if ($qntFloors || $typePasta || $filling || $note || $freteSelect) {
            var_dump('Aqui entra');

            if($isShipping){
                $sqlInsert = $pdo->prepare("INSERT INTO cakes (category_cake_id, user_id, size_cake, type_pasta, receipt_date, filling, roof, note, price, theme_cake, url_image, isshipping) VALUES (1, :user, :size_cake, :type_pasta, :receipt_date, :filling, :roof, :note, :price, NULL, NULL, true);");
            }else{
                $sqlInsert = $pdo->prepare("INSERT INTO cakes (category_cake_id, user_id, size_cake, type_pasta, receipt_date, filling, roof, note, price, theme_cake, url_image, isshipping) VALUES (1, :user, :size_cake, :type_pasta, :receipt_date, :filling, :roof, :note, :price, NULL, NULL, false);");
            }

            $sqlInsert->bindParam(':user', $idUser);
            $sqlInsert->bindParam(':size_cake', $qntFloors);
            $sqlInsert->bindParam(':type_pasta', $typePasta);
            $sqlInsert->bindParam(':receipt_date', $receiptDateFormated);
            $sqlInsert->bindParam(':filling', $filling);
            $sqlInsert->bindParam(':roof', $roof);
            $sqlInsert->bindParam(':note', $note);
            $sqlInsert->bindParam(':price', $valueCakeFormated);

            $sqlInsert->execute();


            $msg = "Dados inseridos com sucesso";
            header("Location: welcome.php");
        } else {
            echo "Digite os seus dados";
        }
    }
}
