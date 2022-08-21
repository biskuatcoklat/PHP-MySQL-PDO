<?php
require_once __DIR__ . '/GetKoneksi.php';

$koneksi = getKoneksi();

$koneksi->beginTransaction();
$koneksi->exec("INSERT INTO coments(email,komen) VALUES ('budi@gmail.com','halo guys')");
$koneksi->exec("INSERT INTO coments(email,komen) VALUES ('budi@gmail.com','halo juga')");
$koneksi->exec("INSERT INTO coments(email,komen) VALUES ('budi@gmail.com','apa kabar')");
$koneksi->rollBack();
$koneksi = null;
