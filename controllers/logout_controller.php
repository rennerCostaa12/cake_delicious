<?php 
//INICIA A SESSÃO
session_start();


//REMOVE TODOS O ITEMS DA SESSÃO
$_SESSION = array();

//DESTRÓI A SESSÃO
session_destroy();

//REDIRECIONA PARA A PÁGINA DE LOGIN
header("location: login.php");
exit;