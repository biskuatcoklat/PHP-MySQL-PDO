<?php
require_once __DIR__ . '/GetKoneksi.php';

$koneksi = getKoneksi();

$username = "wahyu";
$password = "wahyu";

$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$statement = $koneksi->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

if ($row = $statement->fetch()) {
    echo "sukses Login " . $row['username'] . PHP_EOL;
} else {
    echo "Gagal Login" . PHP_EOL;
}

$koneksi = null;
