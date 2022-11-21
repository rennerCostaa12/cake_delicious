<?php 

include "./config/database.php";

session_start();

$idUser = $_SESSION['id'];

$getAllMyRequests = "SELECT size_cake, type_pasta, receipt_date, filling, roof, note, price, isshipping, name_category   FROM cakes INNER JOIN users ON cakes.user_id = users.id_user INNER JOIN category_cakes ON cakes.category_cake_id = category_cakes.id_category_cake WHERE user_id = $idUser";