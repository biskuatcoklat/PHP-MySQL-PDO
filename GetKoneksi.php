<?php

function getKoneksi(): PDO
{
    $host = "localhost";
    $database = "belajar_php_database";
    $username = "root";
    $password = "";

    return new PDO("mysql:host=$host;dbname=$database", $username, $password);
}
