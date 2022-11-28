<?php

include "config/database.php";

$getAllAssesstments = "SELECT comment, first_name, last_name, created  FROM assesstments INNER JOIN users ON assesstments.user_id = users.id_user";
date_default_timezone_set('America/Fortaleza');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $feedback = $_POST['feedback'];

    $errorMessage = '';

    $date_current = date("Y-m-d H:i:s");

    if (empty($feedback)) {
        $errorMessage = 'Preencha os campos!';
    } else {
        session_start();
        $idUser = $_SESSION['id'];

        $sqlInsert = $pdo->prepare("INSERT INTO assesstments (user_id, comment, created) VALUES (:id, :comment, :created);");

        $sqlInsert->bindParam(':id', $idUser);
        $sqlInsert->bindParam(':comment', $feedback);
        $sqlInsert->bindParam(':created', $date_current);

        $sqlInsert->execute();


        $msg = "Dados inseridos com sucesso";
        header("Location: welcome.php");
    }
}
