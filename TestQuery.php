<?php
require_once __DIR__ . '/GetKoneksi.php';
$koneksi = getKoneksi();
$sql = "SELECT id, nama,email,alamat  FROM customer";
$statement = $koneksi->query($sql);
foreach ($statement as $row) {
    var_dump($row);
    $id = $row["id"];
    $nama = $row["nama"];
    $email = $row["email"];
    $alamat = $row["alamat"];

    echo "id     : $id " . PHP_EOL;
    echo "Nama   : $nama " . PHP_EOL;
    echo "Email  : $email" . PHP_EOL;
    echo "Alamat : $alamat" . PHP_EOL;
}
$koneksi = null;
/*
    PDOStatement adalah sebuah class turunan dari IteratorAgregat
    bahwa turunan iterator \agregat secara otomatis bisa menggunakan perulangan foreach
    oleh karena itu, untuk melakukan iterasi data hasil query, kita bisa melakukan perulangan foreach
    untuk tiap baris record hasil query SQL nya
*/