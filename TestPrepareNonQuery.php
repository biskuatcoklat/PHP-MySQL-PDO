<?php
require_once __DIR__ . '/GetKoneksi.php';

$koneksi = getKoneksi();
$username = "admin";
$password = "admin";

$sql = "INSERT INTO admin (username, password) VALUES (:username,:password)";
$statement = $koneksi->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();


$koneksi = null;
