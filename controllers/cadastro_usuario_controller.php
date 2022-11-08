<?php
include "config/database.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = $_POST['primeiro_nome'];
    $last_name = $_POST['sobrenome'];
    $email = $_POST['email'];
    $phone = $_POST['telefone'];
    $address = $_POST['endereco'];
    $password = $_POST['senha'];
    $is_adminOption = $_POST['is_admin'];
    $passwordConfirmation = $_POST['passconfirmation'];

    $is_admin = $is_adminOption == "sim" ? true : false;

    $date_current = date("Y-m-d H:i:s");
    $msgError;

    $passwordEncrypted = password_hash($password, PASSWORD_DEFAULT);

    if ($password !== $passwordConfirmation) {
        $msgError = 'As senhas não correspodem!';
    } else {
        if ($first_name || $last_name || $email || $phone || $address || $password) {
            $sqlInsert = $pdo->prepare("INSERT INTO users (first_name, last_name, email, password, isadmin, created, modified, phone, address) VALUES (:first_name, :last_name, :email, :password, false, :created, :modified, :phone, :address)");
            $sqlInsert->bindParam(":first_name", $first_name);
            $sqlInsert->bindParam(":last_name", $last_name);
            $sqlInsert->bindParam(":email", $email);
            $sqlInsert->bindParam(":password", $passwordEncrypted);
            $sqlInsert->bindParam(":created", $date_current);
            $sqlInsert->bindParam(":modified", $date_current);
            $sqlInsert->bindParam(":phone", $phone);
            $sqlInsert->bindParam(":address", $address);
            $sqlInsert->execute();

            $msg = "Dados inseridos com sucesso";
            header("Location: login.php");
        } else {
            echo "Digite os seus dados";
        }
    }
}
