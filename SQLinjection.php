<?php
require_once __DIR__ . '/GetKoneksi.php';

$koneksi = getKoneksi();

//contoh SQL Injection
//$username = "wahyu '; #";
$username = $koneksi->quote("wahyu");
$password = $koneksi->quote("wahyu");

$sql = "SELECT * FROM admin WHERE username = $username AND password =$password";

$statement = $koneksi->query($sql);
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
/*
    SQL Injection adalah sebuah teknik yang menyalah gunakan celah kemanan yang terjadi dalam 
    lapisan basis data sebuah aplikasi

    SQL injection dilakukan dalam mengirim input dari user dengan perintah yang salah
    sehinnga menyebabakan hasil SQL yang kita buat menjadi tidak valid

    SQL injection sangat berbahaya, jika kita sampai salah membuat SQl, bisa jadi data kita tak aman
*/

/*
    SOLUSINYA?
    jangan membuat query SQL secara manual dengan menggabungkan sring secara bulat bulat

    function query(), dan exec() tidak bisa menangani celah SQL Injection, jadi kita harus menganani
    secara manual

    memastikan user input secara aman dengan menggunakan function quote()
*/
