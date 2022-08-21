<?php
require_once __DIR__ . '/GetKoneksi.php';

$koneksi = getKoneksi();

$username = "wahyu";
$password = "wahyu";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$statement = $koneksi->prepare($sql);
$statement->bindParam(1, $username);
$statement->bindParam(2, $password);
$statement->execute();

$sukses = false;
$find_all = null;
foreach ($statement as $row) {
    //sukses
    $sukses = true;
    $find_all = $row['username'];
}

//jika sukses login 
if ($sukses) {
    echo "sukses Login " .  $find_all;
} else {
    echo "gagal login";
}

$koneksi = null;
