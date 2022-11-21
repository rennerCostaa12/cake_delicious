<?php

include "config/database.php";

$getAllAssesstments = "SELECT comment, avaliation, first_name, last_name  FROM assesstments INNER JOIN users ON assesstments.user_id = users.id_user";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $notaFeedback = $_POST['nota-feedback'];
    $feedback = $_POST['feedback'];

    $errorMessage = '';

    $date_current = date("Y-m-d H:i:s");

    var_dump($notaFeedback);
    var_dump($feedback);
    var_dump($date_current);

    if (empty($notaFeedback) || empty($feedback)) {
        $errorMessage = 'Preencha os campos!';
    } else {
        session_start();
        $idUser = $_SESSION['id'];

        if ($notaFeedback || $notaFeedback) {
            $sqlInsert = $pdo->prepare("INSERT INTO assesstments (user_id, comment, avaliation, created) VALUES (:id, :comment, :avaliation, :created);");

            $sqlInsert->bindParam(':id', $idUser);
            $sqlInsert->bindParam(':comment', $feedback);
            $sqlInsert->bindParam(':avaliation', $notaFeedback);
            $sqlInsert->bindParam(':created', $date_current);

            $sqlInsert->execute();


            $msg = "Dados inseridos com sucesso";
            header("Location: welcome.php");
        } else {
            echo "Digite os seus dados";
        }
    }
}
