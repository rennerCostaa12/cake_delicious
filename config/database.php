<?php

try {
    $dbhost = 'localhost';
    $dbname = 'trabalho_web';
    $dbuser = 'postgres';
    $dbpass = 'renner1207';

    $pdo = new PDO("pgsql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

} catch (PDOException $e) {
    die("Error message: " . $e->getMessage());
}
