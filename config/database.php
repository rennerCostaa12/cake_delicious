<?php

use function PHPSTORM_META\type;

try {
    $dbhost = 'localhost';
    $dbname = 'trabalho_web';
    $dbuser = 'postgres';
    $dbpass = 'renner1207';

    $pdo = new PDO("pgsql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

    $sqlGetAllUser = 'SELECT * FROM users';
    /*
        foreach ($connection->query($sqlGetAllUser) as $row) {
            var_dump($row);
        }
        */
} catch (PDOException $e) {
    die("Error message: " . $e->getMessage());
}
