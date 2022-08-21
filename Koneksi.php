<?php

$host = "localhost";
$database = "belajar_php_database";
$username = "root";
$password = "";

try {
    $koneksi = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    echo "sukses terkoneksi database" . PHP_EOL;

    //menutup koneksi
    // $koneksi = null;
} catch (PDOException $exception) {
    echo "gagal terkoneksi ke database MySQL : " . $exception->getMessage() . PHP_EOL;
}
