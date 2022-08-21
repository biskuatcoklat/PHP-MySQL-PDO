<?php
require_once __DIR__ . '/GetKoneksi.php';

$koneksi = getKoneksi();

$koneksi->exec("INSERT INTO coments(email,komen) VALUES ('wahyu@gmail.com','halo guys')");
$id = $koneksi->lastInsertId();
echo $id;
