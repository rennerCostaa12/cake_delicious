<?php

try {
    $dbhost = '';
    $dbname = '';
    $dbuser = '';
    $dbpass = '';

    $pdo = new PDO("pgsql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

} catch (PDOException $e) {
    die("Error message: " . $e->getMessage());
}
