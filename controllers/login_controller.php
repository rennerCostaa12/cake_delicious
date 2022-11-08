<?php
include "config/database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $emailUser = $_POST['email'];
    $passwordUser = $_POST['senha'];

    $errorMessage = '';

    if (empty($emailUser) || empty($passwordUser)) {
        $errorMessage = 'Preencha os campos!';
    }

    if (!empty($emailUser) || !empty($passwordUser)) {
        $sqlFindUserLogin = $pdo->prepare("SELECT id_user, first_name, last_name, email, password, isadmin FROM users WHERE email = :email");
        $sqlFindUserLogin->bindParam(":email", $emailUser);

        if ($sqlFindUserLogin->execute()) {
            if ($sqlFindUserLogin->rowCount() == 1) {

                $listDatas = [];

                foreach ($sqlFindUserLogin->fetch() as $row) {
                    array_push($listDatas, $row);;
                }

                $idUser = $listDatas[0];
                $fnameUser = $listDatas[2];
                $lnameUser = $listDatas[4];
                $passwordHashed = $listDatas[8];
                $isAdmin = $listDatas[10];

                
                if (password_verify($passwordUser, $passwordHashed)) {
                    session_start();

                    $_SESSION['loggedin'] = true;
                    $_SESSION['email'] = $emailUser;
                    $_SESSION['id'] = $idUser;
                    $_SESSION['first_name'] = $fnameUser;
                    $_SESSION['last_name'] = $lnameUser;
                    $_SESSION['isAdmin'] = $isAdmin;

                             
                    header('Location: welcome.php');
                } else {
                    $errorMessage = 'Senha Inválida';
                }
                
            } else {
                $errorMessage = 'Usuário não encontrado';
            }
        };
    };
}
